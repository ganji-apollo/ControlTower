#!--*--coding:utf-8--*--
import os

FILE_DIR = os.path.dirname(os.path.abspath(__file__))

#默认配置
DEFAULT = {
    'receiver_port': 44446,
    'listener_port': 44447,
    'transport_port': 44448,
    'log_dir': FILE_DIR + '/../Log',
    'db_conf': FILE_DIR + '/../Conf/db.conf',
}

#日志的配置
LOGCONF = {
    'log_dir': FILE_DIR + '/../Log',
    'log_filename': FILE_DIR + '/../Log/apolloserver.log',
    'log_size': 10*1024*1024,
    'log_backcount': 2,
}

#默认的错误关键字
DEF_ERRORKEY = ('Error','Fail','fatal','cannot')

#ana数据库的配置
APOLLOANA_DB = {
    'host': '192.168.37.153',
    'port': 3306,
    'user': 'panxianhe',
    'passwd': '1234',
    'db': 'apolloana_test',
}

#resource数据库配置
RESOURCE_DB = {
    'host': '192.168.37.153',
    'port': 3306,
    'user': 'panxianhe',
    'passwd': '1234',
    'db': 'resource_test',
}

#通知方式
MEDIA = {
    'im': 1,
    'email': 2,
    'sms': 3,
}

#当调用通知接口未指明通知人时的默认通知人
DEF_SENDTO = {
    'im': 'cuihua,liujun2',
    'email': 'cuihua@ganji.com,liujun2@ganji.com',
    'sms': '13811096863,13651029440',
}

#crontab任务执行异常时的通知人
EXCEPTION_NOTICE = {
    'im': 'cuihua',
    'email': 'bsm@ganji.com',
    'sms': '',
}
