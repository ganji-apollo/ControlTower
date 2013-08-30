# coding:utf8

import urllib
import urllib2
from logger import log
from conf import DEF_SENDTO

def send_im(**kwargs):
    """
    purpose: 调用im接口发送信息，成功返回1，否则返回0
    """
    url = 'http://api.apollo.corp.ganji.com/IM_send.php'
    if not kwargs.has_key('spot'):
        kwargs['spot'] = 'apollo-1'
    if not kwargs.has_key('to'):
        kwargs['to'] = DEF_SENDTO['im']
    data = urllib.urlencode(kwargs)
    try:
        res = urllib2.urlopen(url, data, 2)
    except Exception, e:
        log.error(e.message)
        return 0

    return 1

def send_email(**kwargs):
    """
    purpose: 调用email接口发送信息，成功返回1，否则返回0
    """
    url = 'http://api.apollo.corp.ganji.com/sendMail.php'
    if not kwargs.has_key('type'):
        kwargs['type'] = 'apollo-mon'
    if not kwargs.has_key('to'):
        kwargs['to'] =  DEF_SENDTO['email']

    data = urllib.urlencode(kwargs)
    try:
        res = urllib2.urlopen(url, data, 2)
    except Exception, e:
        log.error(e.message)
        return 0

    return 1

def send_sms(**kwargs):
    """
    purpose: 调用短息接口发送信息，成功返回1，否则返回0
    """
    url = 'http://as.dns.ganji.com:20000/WebGate/ShortMsg.aspx'
    if not kwargs.has_key('opt'):
        kwargs['opt'] = 'send'
    if not kwargs.has_key('uniqueId'):
        kwargs['uniqueId'] = 'Tan'
    if not kwargs.has_key('serviceId'):
        kwargs['serviceId'] = 'APOLLO'
    if not kwargs.has_key('phones'):
        kwargs['phones'] = DEF_SEDNTO['sms'] 

    data = urllib.urlencode(kwargs)
    try:
        res = urllib2.urlopen(url, data, 2)
    except Exception, e:
        log.error(e.message)
        return 0

    return 1
