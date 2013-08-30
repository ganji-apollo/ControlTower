# coding:utf-8

from os.path import abspath, dirname, join

UTIL_DIR = dirname(abspath(__file__))
APP_DIR = dirname(UTIL_DIR)

LOGCONF = {
    'log_dir': join(dirname(APP_DIR), 'Log'),
    'log_size': 10*1024*1024,
    'log_backcount': 2,
}
