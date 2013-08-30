#!--*coding:utf-8*--

import json
import MySQLdb as mdb
import time
import re
from MySQLdb import escape_string as escape
from hashlib import md5
from ConfigParser import ConfigParser, ParsingError

from twisted.internet.protocol import Protocol, ServerFactory, ClientFactory
from twisted.internet import defer
from twisted.protocols.basic import LineReceiver, NetstringReceiver

from conf import DEFAULT, APOLLOANA_DB, RESOURCE_DB, MEDIA, EXCEPTION_NOTICE
from conf import DEF_ERRORKEY
from util.logger import log
from util.media import send_im, send_email, send_sms
from util import call_carbon
from base64 import b64encode

ERR_TPL = __file__ + ':%s:%s'
db_group = {}

def send_default(msg):
    """程序中产生的错误默认报告方式"""
    send_im(to='liujun2,cuihua', msg=msg)

def send_notice(media_and_to, subject, body, level=0):
    """
    purpose::将要通知的信息写入到通知表中
    @parma:: 
        media_and_to(iters): 通知类型和通知人的元组的集合
        subject(str): 消息主题
        body(str): 通知的消息体
    """
    func_name = 'send_notice'
    try:
        conn = mdb.connect(host=APOLLOANA_DB['host'], port=APOLLOANA_DB['port'], db=APOLLOANA_DB['db'],
                               user=APOLLOANA_DB['user'], passwd=APOLLOANA_DB['passwd'], charset='utf8')
    except Exception, e:
        log.error(e.message)
        return
    cur = conn.cursor()
    clock = int(time.time())
    try:
        for id, to in media_and_to:
            cur.execute("""insert into ana_report_alerts(mediatype_id,clock,sendto,
						   subject,msg,status,retries, level) 
                           values(%d, %d, '%s', '%s', '%s', '0', '0',%d)
                        """ % (id, clock, escape(to), escape(subject), escape(body), level)
            )
        #cur.executemany(sql, media_and_to)
        conn.commit()
    except Exception, e:
        send_default(ERR_TPL%(func_name, str(e)))
        log.error(e.message)
    finally:
        cur.close()
        conn.close()

def getDBInfo(group):
    func_name = 'getDBInfo'
    global db_group
    curtime = time.time();
    if db_group.has_key(group) and db_group[group]['timeout'] > curtime:
        return db_group[group]
    db_parser = ConfigParser()
    try:
        db_parser.read(DEFAULT['db_conf'])
    except ParsingError, e:
        send_default(ERR_TPL%(func_name, str(e)))
        log.error(str(e))
        return None
    for section in db_parser.sections():
        db_group[section] = dict(db_parser.items(section))
        db_group[section]['timeout'] = curtime + 3600
    return db_group.get(group, None)
    

class ServerListenerProtocol(LineReceiver):
    """服务器端代理协议类"""
    #最大接受字节
    MAX_LENGTH = 65536
    def connectionMade(self):
        self._peer = self.transport.getPeer()
        log.info('收到来自%s的连接'% self._peer)

    def connectionLost(self, reason):
        log.info('%s断开连接'% self._peer)
 
    def lineReceived(self, line):
        try:
            info = json.loads(line)   
        except :
            log.error('json字符串%s解析失败')
            self.transport.lostConnection()
        if 'RESPONSE' == info['req_type']:
            if 'CRON' == info['res_type']:
                log.info(info['retval'])
                self.cronCallBack(info['retval'])
        elif 'TRANSMIT' == info['req_type']:
            cmdinfo = info['cmdinfo'].split(':',1)
            others = info.get('others', None)
            self.transCommand({'h': cmdinfo[0], 'c': cmdinfo[1], 'a': info['res_type'], 'others': others})
        else:
            self.transport.loseConnection()

    def transCommand(self, info):
        """
        purpose: 转发请求到相应的服务器
        @parma: info: 请求的相关信息, type: dict
        """
        for host in info['h'].split(','):
            fac = RemoteCommandFactory(info['c'], host)
            if 'GET' == info['a']:
                fac.defer.addCallback(self.responseTo)
                fac.defer.addErrback(self.errorResponse)
            elif 'UPDATE' == info['a']:
                others = info['others']
                fac.defer.addBoth(self.updateStats,others=others)
            else:
                self.transport.loseConnection()
                return
            reactor.connectTCP(host, DEFAULT['transport_port'], fac, 5)
            log.info('向%s转发请求:%s'%(info['h'],info['c']))

    def cronCallBack(self, retinfo):
        """
        purpose:远程计划任务信息返回的回调处理, 将信息入库，统计执行时间，通知
        @parma: retinfo -> 返回的信息，json格式
        """
        try:
            info = json.loads(retinfo)
        except Exception, e:
            log.errer(e.message)
            return
        self.recordCron(info)

    def recordCron(self, info):
        """
        purpose: 计划任务返回信息入库，统计执行时间
        @parma: info -> 返回信息的dict
        """
        func_name = 'recordCron'
        select_sql = "select id,cron_starttime from ana_crontab_rt where cron_id=%s and host_name='%s'" \
                    % (info['cid'],info['host_name'])
        try:
            conn = mdb.connect(host=APOLLOANA_DB['host'], port=APOLLOANA_DB['port'], db=APOLLOANA_DB['db'],
                               user=APOLLOANA_DB['user'], passwd=APOLLOANA_DB['passwd'], charset='utf8')
            cur = conn.cursor()
            cur.execute(select_sql)
            need = cur.fetchone()
            need_to_exec = None
            seq = int(info.get('seq', 255))
            jn = int(info.get('jn', -1))
            if need:
                if seq != 1:
                    rt_sql = "update ana_crontab_rt set cron_name='%s',cron_starttime='%s',cron_status='%s',cron_output='%s',\
                              cron_executetime=%s where id=%d" % (escape(info['name']), info['stime'], info['stats'], 
                              escape(info['output']), info['exec_time'], need[0])
                else:
                    rt_sql = "update ana_crontab_rt set cron_name='%s',cron_starttime='%s',cron_status='%s',cron_output='%s',\
                              cron_executetime=%s, cron_jobsnum=%d where id=%d" % (escape(info['name']), info['stime'], info['stats'], 
                              escape(info['output']), info['exec_time'], jn, need[0])
                if str(need[1]) != info['stime']:
                    need_to_exec = """insert into ana_crontab(host_name,cron_id,cron_name,cron_starttime,cron_status,cron_output,
                                  cron_executetime, cron_jobsnum) values('%s', '%s', '%s' ,'%s', '%s', '%s', %s, %d)""" % (
                                  escape(info['host_name']), info['cid'], escape(info['name']), info['stime'], info['stats'], 
                                  escape(info['output']), info['exec_time'], jn) 
                elif seq != 1:
                    need_to_exec = "update ana_crontab set cron_name='%s',cron_status='%s',cron_output='%s',cron_executetime=%s \
                                    where cron_id='%s' and host_name='%s' and cron_starttime='%s'" % (escape(info['name']), info['stats'], 
                                    escape(info['output']), info['exec_time'], info['cid'], escape(info['host_name']), info['stime'])
                    if seq > 1:
                        #计划任务通知
                        self.cronNotice(info)
                        #将执行时间写入到carbon中进行统计
                        call_carbon("apollocrond.%s.%s" % (info['host_name'],info['cid']), info['exec_time'], 
                                    time.mktime(time.strptime(info['stime'], '%Y-%m-%d %H:%M:%S')) )
                else:
                    log.info('delayed response') 
            else:
                rt_sql = """insert into ana_crontab_rt(host_name,cron_id,cron_name,cron_starttime,cron_status,cron_output,
                         cron_executetime, cron_jobsnum) values('%s', '%s', '%s' ,'%s', '%s', '%s', %s, %d)""" % (
                         escape(info['host_name']), info['cid'], escape(info['name']), info['stime'], info['stats'], 
                         escape(info['output']), info['exec_time'], jn)
                need_to_exec = """insert into ana_crontab(host_name,cron_id,cron_name,cron_starttime,cron_status,cron_output,
                               cron_executetime, cron_jobsnum) values('%s', '%s', '%s' ,'%s', '%s', '%s', %s, %d)""" % (
                               escape(info['host_name']), info['cid'], escape(info['name']), info['stime'], info['stats'], 
                               escape(info['output']), info['exec_time'], jn)
            #调度异常通知             
            if -1 == seq:
                self.cronNotice(info)

            cur.execute(rt_sql)
            conn.commit()
            if need_to_exec:
                cur.execute(need_to_exec)
                conn.commit()
        except Exception, e:
            log.error(e.message)
            send_default(ERR_TPL % (func_name, e.message))
        finally:
            cur.close()
            conn.close()
    
    def cronNotice(self, info):
        """
        purpose: 计划任务的返回信息通知
        @parma: info -> 返回信息的dict
        """
        func_name = 'cronNotice'
        try:
            conn = mdb.connect(host=RESOURCE_DB['host'], port=RESOURCE_DB['port'], db=RESOURCE_DB['db'],
                               user=RESOURCE_DB['user'], passwd=RESOURCE_DB['passwd'], charset='utf8')
        except Exception, e:
            send_default(ERR_TPL%(func_name, str(e)))
            log.error(e.message)
            return
        select_sql = "select * from res_cron_items where id=%s" % escape(info['cid'])
        cur = conn.cursor(mdb.cursors.DictCursor)
        cron_info = None
        try:
            cur.execute(select_sql)
            cron_info = cur.fetchone()
        except Exception, e:
            send_default(ERR_TPL%(func_name, str(e)))
            log.error(e.message)
        finally:
            cur.close()
            conn.close()

        if cron_info is None or 1 != cron_info['status']:
            return

        error = False
        subject = info['name']
        errormsg = ''

        #异常调度
        if -1 == info['seq']:
                error = True
                errormsg = '任务调度异常,请相关负责人关注一下此任务确保业务正常'
        #输出结果中含有用户自定义的错误关键字
        elif cron_info['alarm_keyword'] and cron_info['alarm_keyword'].strip():
            user_re = r'%s' % '|'.join(cron_info['alarm_keyword'].split(','))
            key = re.search(user_re, info['output'], re.I)
            if key is not None:
                error = True
                errormsg = '程序执行结果包含自定义错误关键字[%s]' % key.group()
        else:
            #如果输出结果中含有默认异常关键字,触发报警
            key = self.factory.DF_ERR_PAT.search(info['output']) 
            if key is not None:
                error = True    
                errormsg = '程序执行结果包含默认错误关键字[%s]' % key.group()
        #任务执行时间过长
        if not error:
            if float(info['exec_time']) - float(cron_info['expected_execution_time']) > 1.0:
                error = True
                errormsg = '程序执行时间[%ss]超过设定的最大执行时间[%ss]' % (info['exec_time'], 
                            cron_info['expected_execution_time'])
            elif int(info['stats']) != 0:
                error = True
                errormsg = '程序执行返回状态[%s]异常' % info['stats']
            
        format = """
    任务名称: %s
  部署服务器: %s
    脚本信息: %s
开始执行时间: %s
    执行时长: %ss
    返回状态: %s(此值为系统返回值，即$?) """
        
        notices = {}
        if 2 != cron_info['notice_status']:
            if cron_info['cron_notice_im'].strip(): 
                notices[MEDIA['im']] = [(MEDIA['im'], to) for to in cron_info['cron_notice_im'].split(',')]
            if cron_info['cron_notice_email'].strip(): 
                notices[MEDIA['email']] = [(MEDIA['email'], to) for to in cron_info['cron_notice_email'].split(',')]
            if cron_info['cron_notice_sms'].strip(): 
                notices[MEDIA['sms']] = [(MEDIA['sms'], to) for to in cron_info['cron_notice_sms'].split(',')]

        msg = format % (info['name'], info['host_name'], cron_info['cron_script_url'], info['stime'], 
                                info['exec_time'], info['stats']) 
        body = "%s\n程序标准输出:\n%s\n" % (msg,info['output'])
        if not error:   
            if notices and cron_info['notice_status'] not in (2,3):
                subject = '计划任务[%s]执行完成通知' % info['name']
                for method, to in notices.iteritems():
                    if MEDIA['email'] == method:
                        send_notice(to, subject, body)
                    elif MEDIA['im'] == method:
                        send_notice(to, subject, msg)
        else:
            subject = '计划任务[%s]执行异常通知' % info['name']
            detail = info['output'].decode('utf-8')[0:300].encode('utf-8')
            msg = '【%s】\n部署机器:%s\n原因: %s\n详细%s' % (subject, 
                            info['host_name'], errormsg, detail)
            body = "\n        原因: <span style='color:red'>%s</span>\n%s" % (errormsg, body)
            #对异常进行强制邮件报警
            if cron_info['cron_task_leader'].strip(): 
                email = notices.get(MEDIA['email'], [])
                email.extend([(MEDIA['email'], '%s@ganji.com' % to) \
                        for to in cron_info['cron_task_leader'].split(',')])
            send_notice(set(email), subject, body, 1)
            if cron_info['notice_status'] not in (3,4):
                return
            #对异常进行im和sms报警
            im = notices.get(MEDIA['im'])
            if im:
                send_notice(set(im), subject, msg , 1)
            alarm_sms = notices.get(MEDIA['sms'], [])
            if cron_info['alarm_notice_sms'].strip():
                alarm_sms.extend([(MEDIA['sms'], to) for to \
                        in cron_info['alarm_notice_sms'].split(',')])
            if len(alarm_sms) > 0:
                send_notice(set(alarm_sms), subject, msg, 1)

    def updateStats(self, info, others):
        """
        根据远程命令执行结果更新数据库对应的状态字段
         - info  远程agent返回来的数据
         - others 要执行更新的数据库的相关的数据库相关信息字典
                  包括db(数据库名称),tb(表名),keys(更新字段别名对应)       
        """
        func_name = 'updateStatus'
        if others is None:
            log.error('没有指定相应的数据库信息来更新字段')
            return
        retinfo = {}
        try:
            result = json.loads(info)
        except Exception, e:
            try:
                result = json.loads(info.value.message)
            except Exception, e:
                send_default(ERR_TPL%(func_name,'返回结果格式不正确'))
                log.error(ERR_TPL%(func_name,str(e)))
                return
        retinfo['status'] = 2
        default = {'host': result['h']}
        if 0 != int(result['s']): 
            retinfo['status'] = 3
        if (result['o'].lower().find('error') > 0 or
            result['o'].lower().find('fail') > 0):
            retinfo['status'] = 3
        retinfo['ret'] = b64encode(result['o'])
        try:
            db_info = getDBInfo(others['db'])
            tb = others['tb']
            up_keys = others['up_keys']
            #where = others['where']
            pk = others['pk']
        except KeyError, e:
            log.error('没有指明此次更新的相关信息:%s' % str(e))
            return
        kv = up_keys.split(',')
        try:
            alias = dict([x.split(':',1) for x in kv])
            sql = "update %s set %s='%s'" % (tb, alias['status'], retinfo['status'])
            if (alias.has_key('ret')):
                sql += ", %s='%s'" % (alias['ret'], retinfo['ret'])
            if (alias.has_key('up_time')):
                sql += ", %s='%s'" % (alias['ret'], retinfo['ret'])
            wheres = pk.split(',')
            conditions = []
            for where in wheres:
                cv = where.split(':', 1)
                if len(cv) < 2:
                    raise Exception('不正确的条件匹配')
                conditions.append("%s='%s'" % (cv[0], mdb.escape_string(cv[1])))
            condtion = ' and '.join(conditions) % default
            sql += " where %s" % condtion
        except Exception, e:
            send_default(ERR_TPL%(func_name,str(e)))
            log.error(ERR_TPL%(func_name,str(e)))
            return
        try:
            conn = mdb.connect(host=db_info['host'], port=int(db_info.get('port', 3306)), db=db_info['db'],
                               user=db_info['user'], passwd=db_info['passwd'], charset=db_info.get('charset','utf8'))
        except KeyError, e:
            send_default(ERR_TPL%(func_name,'db配置文件配置存在问题,必要的参数未配置'))
            log.error(ERR_TPL%(func_name,str(e)))
            return
        except Exception, e:
            send_default(ERR_TPL%(func_name,str(e)))
            log.error(ERR_TPL%(func_name,str(e)))
            return
        cur = conn.cursor()
        try:
            cur.execute(sql)
            conn.commit()
        except Exception, e:
            send_default(ERR_TPL%(func_name,e.message))
            log.error(e.message)
        finally:
            cur.close()
            conn.close()

    def responseTo(self, info):
        self.sendLine(str(info)) 
    def errorResponse(self, info):
        self.sendLine(info.value.message)
    
class RemoteCommandProtocol(NetstringReceiver):
    def connectionMade(self):
        self._peer = self.transport.getPeer()
        self.sendString(self.factory.command)
        log.info('连接到%s成功，发送命令:%s'%(self._peer, self.factory.command))

    def stringReceived(self, data):
        self.factory.defer.callback(data)
        log.info('收到%s在%s上执行的结果'%(self.factory.command, self._peer))
    
    def connectionLost(self, reason):
        log.info('%s断开连接'%self._peer)

class RemoteCommandFactory(ClientFactory):
    protocol = RemoteCommandProtocol

    def __init__(self,command,host):
        self.defer = defer.Deferred()
        self.command = command
        self.host = host

    def clientConnectionFailed(self, connector, reason):
        self.defer.errback(Exception(json.dumps({'h': self.host,'o': str(reason.value), 's': 256})))
        log.error('连接到远程失败:%s'%reason)

if '__main__' == __name__:

    try:
        from twisted.internet import epollreactor
        epollreactor.install()
    except:
        pass
    from twisted.internet import reactor

    #log.setDebug()
    log.setOwn('apolloserverlistener')
    factory = ServerFactory()
    factory.protocol = ServerListenerProtocol
    factory.DF_ERR_PAT = re.compile(r'%s' % '|'.join(DEF_ERRORKEY), re.I)

    reactor.listenTCP(DEFAULT['listener_port'], factory)
    log.info('aplloserverlistening starting ...')
    reactor.run()


