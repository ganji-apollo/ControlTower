# coding:utf-8

def call_carbon(key, value, timestamp):
    """purpose: 向carbon的tcp监听端口发送数据"""
    from conf import CARBON
    import socket
    for to in CARBON:
        s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
        try:
            s.connect(to)
            s.sendall("%s %s %s\n" % (key, value, timestamp))
        except Exception, e:
            #send_im(to='liujun2,cuihua', msg='func call_carbon:%s'%e.message)
            log.error(e.message)
        finally:
            s.close()

def deamonize(log):
    #get ride of father process firstly
    try:
        pid = os.fork()
        if pid > 0:
            sys.exit(0)
    except OSError, e:
        sys.stderr.write('fork #1 failed:%s(%s)\n' % (e.errno, e.strerror))
        sys.exit(1)
    os.setsid()
    os.chdir("/")
    os.umask(0)
#second fork, forbid reopen terminal
    try:
        pid = os.fork()
        if pid > 0:
            sys.exit(0)
    except OSError, e:
        sys.stderr.write('fork #2 failed:%s(%s)\n' % (e.errno, e.strerror))
        sys.exit(1)
