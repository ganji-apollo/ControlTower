#--*coding=utf-8*--
try:
    from twisted.internet import epollreactor
    epollreactor.install()
except ImportError:
    pass
from twisted.internet import reactor, defer, threads
from time import time, strftime, strptime, mktime

from apollosender import ApolloSenderManager

#task
import os
from ConfigParser import ConfigParser, ParsingError
import json

from util import getHostname, getstatusoutput
from conf import DEFAULT
from util.logger import log

conf_last_change = 0
next_conf_check = time()
task_list = []
host_list = {}

sender_manager = ApolloSenderManager(DEFAULT['server_dist'])
reactor.callWhenRunning(sender_manager.startService)

def strToInt(string):
    if string.isdigit():
        return int(string)
    return 0

def parseConf():
    '''解析任务和主机列表配置文件
    '''
    host_cfg = ConfigParser()
    task_cfg = ConfigParser()
    try:
        host_cfg.read(DEFAULT['host_file_config']) 
        task_cfg.read(DEFAULT['task_file_config'])
    except ParsingError, e:
        log.error(str(e))
        return

    global task_list, host_list
    host = getHostname()

    for hg in host_cfg.sections():
        for hl in host_cfg.items(hg):
            host_list[hl[0]] = [x.strip() for x in hl[1].split(',')]
    tk_sections = task_cfg.sections()
    all_task_list = [dict(task_cfg.items(sec)) for sec in tk_sections]
    task_list = []
    for task in all_task_list:
        now = int(time())
        hosts = task.get('hostlist')
        if hosts is None or host_list.get(hosts) is None or host not in host_list[hosts]:
            continue
        task_interval = task.get('task_interval')
        if task_interval is not None:
            task['task_interval'] = strToInt(task_interval)
            task['nextcheck'] = int(time()) + 1
            task_list.append(task)
            continue
        
        task_specifytime = task.get('task_time_specify')
        if task_specifytime is not None:
            specifytime = '%s %s' %(strftime('%Y-%m-%d'), task_specifytime)
            specifystamp = int(mktime(strptime(specifytime, '%Y-%m-%d %H:%M')))
            if now > specifystamp:
                specifystamp += 24*3600
            task['nextcheck'] = specifystamp
            task_list.append(task)
            continue

def doTask(task):
    '''function:在线程中执行某一任务
       @params
            task:某一任务的相关信息,一个字典
       @return:任务执行成功返回执行结果
    '''
    now = int(time())
    status,output = getstatusoutput(task['task_content'])
    return json.dumps({'h':getHostname(), 'tk':task['task_name'], 's':status, 'o':output.strip(), 'tm':now, 'tp':2})

    
def checkActiveTask():
    '''检查是否有任务需要执行,负责调配任务的执行
    '''
    global next_conf_check, task_list
    now = int(time()) 
    if now >= next_conf_check:
        global conf_last_change
        mtime = int(os.stat(DEFAULT['task_file_config']).st_mtime) + int(os.stat(DEFAULT['host_file_config']).st_mtime)
        if mtime != conf_last_change:
            log.info('任务和主机配置文件发生变化，重新载入配置文件')
            parseConf()
            conf_last_change = mtime
            log.info('当前任务数:%d,[%s]'%(len(task_list), ','.join([task['task_name'] for task in task_list])))
        next_conf_check += DEFAULT['config_check_delay']
    for task in task_list:
        try:
            if now >= task['nextcheck']:
                dt = threads.deferToThread(doTask, task) 
                
                #if 256 == int(task.get('return_type', 256)): 
                #    #dt.addCallback((lambda x: pass))
                #    continue
                #else:
                dt.addCallback(sender_manager.sendData)
                if task.has_key('task_interval'):
                    task['nextcheck'] += task['task_interval']
                elif task.has_key('task_time_specify'):
                    task['nextcheck'] += 3600*24
        except:
            continue
    reactor.callLater(1,checkActiveTask)

log.setOwn('apollocollecter')
log.info('apollocollecter程序启动,读取任务和主机配置文件')
parseConf()
conf_last_change = int(os.stat(DEFAULT['task_file_config']).st_mtime) + int(os.stat(DEFAULT['host_file_config']).st_mtime)
log.info('当前任务数:%d,[%s]'%(len(task_list), ','.join([task['task_name'] for task in task_list])))
reactor.callLater(1,checkActiveTask)
log.info('apollo agent starting...')
reactor.run() 
