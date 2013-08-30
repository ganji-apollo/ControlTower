# coding:utf-8

import os

FILE_DIR = os.path.dirname(os.path.abspath(__file__))

DEFAULT = { 
    'server_dist': ('192.168.37.153', 44446),
    'server_listener': ('192.168.37.153', 44447),
    'connection_timeout': 30, 
    'heart_interval': 60, 
    'heart_timeout': 1,
    'listener_port': 44448,
    'log_dir': FILE_DIR + '/../Log',
    'task_file_config': FILE_DIR + '/../Conf/conf.inc.items.ini',
    'host_file_config': FILE_DIR + '/../Conf/host_list.ini',
    'realtime_task_config': FILE_DIR + '/../Conf/realtime.ini',
    'config_check_delay': 60, 
    'crontab': FILE_DIR + '/../Conf/ap_crontab.ini',
}

LOGCONF = {
    'log_dir': FILE_DIR + '/../Log',
    'log_size': 10*1024*1024,
    'log_backcount': 2,
}
