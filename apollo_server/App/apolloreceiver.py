
#!--*--coding=utf-8--*--

from twisted.internet import protocol
from twisted.protocols.basic import NetstringReceiver
import json
from time import strftime, time

from conf import DEFAULT
from util.logger import log
from util.media import send_im

process_start_time = time()

class ApolloService(object):
    """使用service来使功能逻辑和protocol逻辑分开 """
    
    FMT_JSON = 1
    FMT_TXT = 2
    FMT_NONE = 256
    log_dir = DEFAULT['log_dir']
    def dealData(self, data):
        try:
            result = json.loads(data)
        except:
            log.error('收到的数据不符合json格式')
            return

        if result['s'] == 0:
            tp = int(result['tp'])
            if 1 == tp:
                try:
                    tmp = json.loads(result['o'])
                    #如果是普通字符串,就直接输出到日志
                    if isinstance(tmp, str):
                        output = tmp
                    elif isinstance(tmp, dict):
                        output = ','.join(['%s|%s'%(key,value) for key,value in tmp.iteritems()])   
                    else:
                        log.error(result['tk'] + ':未知的数据类型')
                except:
                    log.error(result['tk'] + ':返回数据格式与配置格式不相同')
                    return
            elif 2 == tp:
                output = result['o']
            else:
                log.error(result['tk'] + ':未知的返回格式')
                return

            line = '%d,%s,%s\n' % (result['tm'], result['h'], output)
            fobj = file('%s/%s.%s'%(self.log_dir, result['tk'], strftime("%Y-%m-%d")),'a')         
            fobj.write(line)
            fobj.flush()
            fobj.close()
        else:
            errmsg = '%s上监控脚本执行错误: %s'%(result['h'], result['o'])
            log.error(errmsg)
            send_im(to='liujun2,cuihua', msg=errmsg)
            
class ApolloReceiverProtocol(NetstringReceiver):
    """该协议负责处理每一个建立的连接
    """
    service = ApolloService()
    def connectionMade(self):
        self.factory._clientcount += 1
        self._peer = self.transport.getPeer()
        log.info('%s connected, 当前连接数: %d' % (self._peer, self.factory._clientcount))

    def connectionLost(self, reason):
        self.factory._clientcount -= 1
        log.info('%s lost connection, 当前连接数: %d' % (self._peer, self.factory._clientcount))
    
    def stringReceived(self, data):
        if data.startswith('PING'):
            info = data.split(":", 2)
            self.sendString('PINGBACK:%s' % info[1])
            #log.info('收到%s的心跳包'%self._peer)
            return
        log.info('收到%s发回的数据'%self._peer)
        self.service.dealData(data)
        #self.updateBeat(self, info[2])
    
    def updateBeat(self, hostname):
        self.factory.beats[hostname] = time()


class ApolloReceiverFactory(protocol.ServerFactory):
    """实现心跳检测"""
    protocol = ApolloReceiverProtocol
    def __init__(self, serve):
        self._clientcount = 0
        self.beats = {}

    def checkBeats(self):
        """检测每个连到服务器端的client的心跳状态是否正常"""
        
        now = time()
        for host, last in self.beats:
            time_diff = now - last 
    
from twisted.internet import epollreactor
epollreactor.install()
from twisted.internet import reactor

log.setOwn('apolloreceiver')
service = ApolloService()
factory = ApolloReceiverFactory(service)
reactor.listenTCP(DEFAULT['receiver_port'], factory)
log.info('apolloserver starting...')
reactor.run()

