#!--*coding:utf-8*--

from twisted.internet.protocol import Protocol, ServerFactory
from twisted.internet import utils
from twisted.protocols.basic import NetstringReceiver
from ConfigParser import ConfigParser, ParsingError
import os
import json
import shlex

from util.logger import log
from conf import DEFAULT
from util import getHostname, getstatusoutput

task_list = {}
conf_last_change = int(os.stat(DEFAULT['realtime_task_config']).st_mtime)

def parseConf():
    task_cfg = ConfigParser()
    try:
        task_cfg.read(DEFAULT['realtime_task_config'])
    except ParsingError, e:
        log.error('配置文件格式错误[%s]'%str(e))
        return
    global task_list
    task_list = {} 
    for sec in task_cfg.sections():
        items = task_cfg.items(sec)
        key = None
        value = None
        for k, v in items:
            if 'task_name' == k and v.strip != '':
                key = v
            elif 'task_content' == k and v.strip != '':
                value = v
        if key and value:
            task_list[key] = value
    log.info('realtime task:[%s]' % ','.join(task_list.keys()))

def checkConfUpdate():
    global conf_last_change
    cur = int(os.stat(DEFAULT['realtime_task_config']).st_mtime)
    if cur != conf_last_change:
        log.info('listener configuration has changed,reloading...')
        parseConf()
        conf_last_change = cur
        
    reactor.callLater(DEFAULT['config_check_delay'],checkConfUpdate)

class AgentListenerProtocol(NetstringReceiver):
    def connectionMade(self):
        self._peer = self.transport.getPeer()
        log.info('收到来自%s的连接'%self._peer)

    def stringReceived(self, data):
        commands = data.split(None, 1)
        command_name = commands[0]
        args = ''
        if len(commands) > 1:
            args = commands[1]
        command = task_list.get(command_name.strip())
        do_cmd = '%s %s' % (command, args)
        #实时任务未在任务白名单中
        if command is None:
            result = {'s': -1, 'o': 'invalid command'} 
            log.error('不合法的远程请求:%s'%data)
            self.connectionEnd(result)
        else:
            log.info('远程请求:%s'%(do_cmd))
            #异步执行实时任务
            defer = self.factory.getStatusOutput(do_cmd)
            defer.addCallback(self.action)
            defer.addErrback(self.errorAction)

    def connectionEnd(self, result):
        """本次连接的收尾处理函数,发送数据,关闭连接"""
        self.sendString(json.dumps(result))
        self.transport.loseConnection()

    def action(self, data):
        """实时任务执行后的回调函数"""
        try:
            result = {
                's' :data[2],
                'o' :'%s%s' % (data[0], data[1]),
                'h' :getHostname(),
            }
        except Exception, e:
            result = {
                's' :256,
                'o' :e.message,
                'h' :getHostname(),
            }
        self.connectionEnd(result)

    def errorAction(self, reason):
        """defer的异常处理函数"""
        result = {
                's' :256,
                'o' :reason.value.message,
                'h' :getHostname(),
        }
        self.connectionEnd(result)
    
    def connectionLost(self, reason):
        log.info('%s断开连接' % self._peer)

class AgentListenerFactory(ServerFactory):
    protocol = AgentListenerProtocol
    
    def getStatusOutput(self, cmd):
        args_all = shlex.split(cmd)
        return utils.getProcessOutputAndValue(args_all[0], args_all[1:])


#主程序
#log.setDebug()
log.setOwn('apolloagentlistener')
log.info('listener loading configuration')
parseConf()
from twisted.internet import reactor

factory = AgentListenerFactory()
reactor.listenTCP(DEFAULT['listener_port'], factory)
reactor.callLater(DEFAULT['config_check_delay'],checkConfUpdate)
log.info('client listener starting...')
reactor.run()

