# coding:utf-8

from os.path import dirname, abspath

APP_DIR = dirname(dirname(abspath(__file__)))

#日志的配置
LOGCONF = {
    'log_dir': APP_DIR + '/../Log',
    'log_filename': APP_DIR + '/../Log/apolloserver.log',
    'log_size': 10*1024*1024,
    'log_backcount': 2,
}

#carbon配置
CARBON = [('10.3.2.16', 2003)]

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
