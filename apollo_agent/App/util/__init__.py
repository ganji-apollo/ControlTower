# coding:utf-8

import os
import subprocess
import time
from tempfile import TemporaryFile

def getstatusoutput(cmd):
    """Return (status, output) of executing cmd in a shell."""
    try:
        f = TemporaryFile(mode='w+')
        p = subprocess.Popen('{ %s; } 2>&1' % cmd, shell=True, stdout=f, close_fds=True)
        sts = p.wait()
        f.seek(0)
        text = f.read()
    finally:
        f.close()
    return sts, text

def getHostname(_cache = {}):
    if (_cache.get('hostname') is None or 
            time.time() - _cache.get('cache_time', 0) > 600):
        system = os.name
        if system == 'nt':   
            hostname = os.getenv('computername')   
        elif system == 'posix':   
            hostname = getstatusoutput('hostname')[1].strip()
        else:   
            hostname =  'Unkwon hostname'
        _cache['hostname'] = hostname
        _cache['cache_time'] = time.time()
    return _cache['hostname']

