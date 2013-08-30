# coding:utf-8

import os
import time
import MySQLdb as mdb

from util.media import send_email, send_im, send_sms
from util.logger import log
from conf import APOLLOANA_DB, MEDIA

def sendAll():
    """
    purpose:发送alert表中状态是为发送的消息
    """
    try:
        conn = mdb.connect(host=APOLLOANA_DB['host'], port=APOLLOANA_DB['port'], db=APOLLOANA_DB['db'],
                           user=APOLLOANA_DB['user'], passwd=APOLLOANA_DB['passwd'], charset='utf8')
    except Exception, e:
        log.error(e.message)
        return 
    now = int(time.time())
    sql = "select alert_id,mediatype_id,sendto,subject,msg,retries,level from ana_report_alerts where status=0 and clock>%d" % (now-600) 
    cur = conn.cursor(mdb.cursors.DictCursor)
    try:
        cur.execute(sql)
    except Exception, e:
        send_im(to='liujun2,cuihua',msg=e.message)
        log.error(e.message)
        return

    for alert in cur.fetchall():
        if MEDIA['im'] == alert['mediatype_id']:
            ret = send_im(to=alert['sendto'], msg=alert['msg'])
        elif MEDIA['email'] == alert['mediatype_id']:
            level = 1
            if 1 == alert['level']:
                level = 3
            ret = send_email( to=alert['sendto'], 
                             subject=alert['subject'], body=alert['msg'].replace('\n', '<br/>'),
                             level=level)
        elif MEDIA['sms'] == alert['mediatype_id']:
            ret = send_sms(phones=alert['sendto'],content=alert['msg'])
        else:
            continue
        if ret:
            sql = "update ana_report_alerts set status=1 where alert_id='%d'" % alert['alert_id']
        elif alert['retries'] == 2:
            sql = "update ana_report_alerts set status=2 where alert_id='%d'" % alert['alert_id']
        else:
            sql = "update ana_report_alerts set retries=retries+1 where alert_id='%d'" % alert['alert_id']
        try:
            cur.execute(sql)
            conn.commit()
        except Exception, e:
            send_im(to='liujun2,cuihua',msg=e.message)
            log.error(e.message)
            return    

    cur.close()
    conn.close()
        

#主程序
log.setOwn('apollonotify')

while 1:
    sendAll()
    time.sleep(30)

