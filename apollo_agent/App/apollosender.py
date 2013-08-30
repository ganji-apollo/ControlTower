#--*coding:utf8*--

#twisted import
from twisted.internet import reactor
from twisted.application.service import Service
from twisted.internet.protocol import ReconnectingClientFactory
from twisted.internet.defer import Deferred
from twisted.protocols.basic import NetstringReceiver
from twisted.internet import task
from collections import deque

#standard Library import
from random import randint
from time import sleep, time

from conf import DEFAULT
from util.logger import log
from util import getHostname

hostname = getHostname()

class ApolloSenderProtocol(NetstringReceiver):
    """这个协议负责发送数据到相对应的服务器端 """
    heartbeat_interval = DEFAULT['heart_interval']
    _heartbeat = None
    def connectionMade(self):
        """当连接建立后启动心跳机制 """
        self._peer = self.transport.getPeer()
        log.info('connect to %s successfully' % self._peer)
        self.factory._paused = False
        self._connected = True
        self._heartsendtime = 0
        self._heartreceivetime = 0
        self.factory.resetDelay()
        self.startHeartbeat()
        self.factory._connectionMade.callback(self)
        self.factory._connectionMade = Deferred()
        self.resumeQueue()
        #reactor.callLater(5,self.work)

    def connectionLost(self, reason):
        """当连接失败时停止发送心跳包 """
        self.factory._paused = True
        log.error('connection lost: %s' % reason)
        NetstringReceiver.connectionLost(self,reason)
        self.stopHeartbeat()
    
    def resumeQueue(self):
        self.factory._paused = False
        self.sendQueue()

    def disconnect(self):
        if self._connected:
            self.transport.loseConnection()
            self._connected = False

    def stringReceived(self,data):
        """接受心跳包回复 """
        if data.startswith('PINGBACK'):
            suretime = data.split(":", 2)[1]
            deltatime = time() - self._heartsendtime
            if int(suretime) != self._htime or deltatime > self.factory._connectiontimeout:
                return 
            log.info('收到心跳回复,时间差:%f' % deltatime)
            if self.factory._paused:
                    self.factory._paused = False
                    self.sendQueue()
            self._heartreceivetime = time()    
    
    def sendQueue(self):
        while not self.factory.queueEmpty():
            line = self.factory.queueShift()
            self.sendString(line)
            
    def _createHeartbeat(self):
        return task.LoopingCall(self._sendHeartbeat)
    
    def _heartbeatOK(self):
        deltatime = self._heartreceivetime - self._heartsendtime
        if deltatime < 0:
            self._timeoutConnection()    

    def _sendHeartbeat(self):
        self.factory._paused = True
        self._htime = int(time())
        self.sendString('PING:%d' % self._htime)
        self._heartsendtime = time()
        self._callLater(self.factory._connectiontimeout, self._heartbeatOK)
        #log.info('发送心跳包')

    def startHeartbeat(self):
        self.stopHeartbeat()
        if self.heartbeat_interval is None:
            return
        self._heartbeat = self._createHeartbeat()
        self._heartbeat.start(self.heartbeat_interval, now=True)
    
    def stopHeartbeat(self):
        if self._heartbeat is not None:
            self._heartbeat.stop() 
            self._heartbeat = None

    def _callLater(self, timeout, func):
        return reactor.callLater(timeout, func)
    
    def _timeoutConnection(self):
        log.error('心跳超时')
        #self.transport.loseConnection()
        self.factory._paused = True


class ApolloSenderFactory(ReconnectingClientFactory):
    """
    """
    #protocol = ApolloSenderProtocol

    def __init__(self, destination, connectiontimeout=None):
        """初始化工厂类，设置连接超时时间
        """
        self._host, self._port = destination
        self.addr = (self._host, self._port)
        self._started = False
        if connectiontimeout is None:
            connectiontimeout = DEFAULT['heart_timeout']
        self._connectiontimeout = connectiontimeout
        #self._connectionLost = Deferred()
        self._connectionMade = Deferred()
        #self._connectionFailed = Deferred()
        self._queue = deque()
        self._paused = True
    
    def buildProtocol(self, addr):
        self.connectedProtocol = ApolloSenderProtocol()    
        self.connectedProtocol.factory = self
        return self.connectedProtocol

    def startConnecting(self):
        self._started = True
        self.connector = reactor.connectTCP(self._host, self._port, self)

    def stopConnecting(self):
        self._started = False
        if self.connectedProtocol and self.connectedProtocol._connected:
            return self.connectedProtocol.disconnect()
    
    def disconnect(self):
        pass 
    
    def enQueue(self,data):
        self._queue.append(data)

    def queueEmpty(self):
        return len(self._queue) == 0

    def queueFull(self):
        return len(self._queue) == 200

    def queueShift(self):
        return self._queue.popleft()

    def sendData(self, data):
        if not self._paused:
            self.connectedProtocol.sendString(data)
            return
        if not self.queueFull():
            self.enQueue(data)
        else:
            self.queueShift()
            self.enQueue(data)
        
    def clientConnectionFailed(self, connector, reason):
        log.error('connection failed: %s' % reason)
        self._paused = True
        ReconnectingClientFactory.clientConnectionFailed(self, connector, reason)
        
class ApolloSenderManager(Service):
    def __init__(self, destination):
        self._sender = ApolloSenderFactory(destination)

    def startService(self):
        Service.startService(self)
        if not self._sender._started:
           self._sender.startConnecting()

    def stopService(self):
        Service.stopService(self)
        self._sender.stopConnecting()

    def sendData(self, data):
        self._sender.sendData(data)
        
    def __str__(self):
        return "<%s[%x]>" % (self.__class__.__name__, id(self))

