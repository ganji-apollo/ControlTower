# coding:utf-8
import os, sys
import logging
from logging.handlers import TimedRotatingFileHandler as Rotater
from logging import StreamHandler
from conf import LOGCONF

class ApolloLogger:
    def __init__(self):
        #Setup log files
        self._debug = False
        self._own = False
        self.infoLogFile = os.path.join(LOGCONF['log_dir'], "info.log")
        self.errorLogFile = os.path.join(LOGCONF['log_dir'], "error.log")
        #Setup loggers
        self.infoLogger = logging.getLogger("info")
        self.infoLogger.parent = None
        self.infoLogger.setLevel(logging.INFO)
        self.errorLogger = logging.getLogger("error")
        self.errorLogger.parent = None
        #Setup formatter & handlers
        self.formatter = logging.Formatter("%(asctime)s %(message)s","%a %b %d %H:%M:%S %Y")
        self.infoHandler = Rotater(self.infoLogFile,when="midnight",backupCount=2)
        self.infoHandler.setFormatter(self.formatter)
        self.infoLogger.addHandler(self.infoHandler)
        self.errorHandler = Rotater(self.errorLogFile,when="midnight",backupCount=2)
        self.errorHandler.setFormatter(self.formatter)
        self.errorLogger.addHandler(self.errorHandler)

    def setDebug(self):
        """设置调试模式,将程序输出或错误打印到屏幕上"""
        if not self._debug:
            stdoutStreamHandler = StreamHandler(stream=sys.stdout)
            stderrStreamHandler = StreamHandler(stream=sys.stderr)
            stdoutStreamHandler.setFormatter(self.formatter)
            stderrStreamHandler.setFormatter(self.formatter)
            self.infoLogger.addHandler(stdoutStreamHandler)
            self.errorLogger.addHandler(stderrStreamHandler)
            self._debug = True

    def setOwn(self, file):
        """设置日志文件名"""
        #如果没有设置自定义的日志处理器
        if not self._own:
            self.ownInfoHandler = Rotater(os.path.join(LOGCONF['log_dir'],'%s.info' % file),
                                            when="midnight",backupCount=2)
            self.ownInfoHandler.setFormatter(self.formatter)
            self.infoLogger.addHandler(self.ownInfoHandler)
            self.ownErrorHandler = Rotater(os.path.join(LOGCONF['log_dir'],'%s.error' % file),
                                            when="midnight",backupCount=2)
            self.ownErrorHandler.setFormatter(self.formatter)
            self.errorLogger.addHandler(self.ownErrorHandler)
            self._own = True
            #移除默认的日志处理器
            self.infoLogger.removeHandler(self.infoHandler)
            self.errorLogger.removeHandler(self.errorHandler)
         
    def info(self,msg,*args,**kwargs):
        return self.infoLogger.info(msg,*args,**kwargs)

    def error(self,msg="Error Caught",**kwargs):
        return self.errorLogger.exception(msg,**kwargs)

log = ApolloLogger() # import-shared logger instance
