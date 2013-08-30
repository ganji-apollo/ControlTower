#!/bin/bash
#
############################
# date: 2012-11-27
###########################
SCR_DIR='/data/apollo/apollo_server/App'
PEXEC='/data/apollo/python/bin/python'
RECEIVER='apolloreceiver.py'
LISTENER='apolloserverlistener.py'

usage() {
    echo "Usage:$0 start|stop|restart"   
}

one_start() {
    num=$(ps aux|grep $1|grep python|grep -v grep|wc -l)  
    if [ $num -gt 0 ];then
        echo "$1 is running"
    else
        eval "nohup $PEXEC $SCR_DIR/$1 >>/tmp/apolloserver.log 2>&1 &" 
        if [ $? -ne 0 ];then
            echo "start $1 failed!"
        else
            echo "start $1 successfully"
        fi
    fi
}

do_start() {
    echo 'starting ...'
    one_start $RECEIVER
    one_start $LISTENER
}

one_stop() {
    num=$(ps aux|grep $1|grep python|grep -v grep|wc -l)
    if [ $num -ne 0 ];then
        kill -9 $(ps aux|grep $1|grep -v grep|awk '{print $2}')
        if [ $? -ne 0 ];then
            echo "stop $1 failed!"
        else
            echo "stop $1 successfully!"
        fi
    else
        echo "$1 is running?"
    fi
}

do_stop() {
    echo 'stop ...'
    one_stop $RECEIVER
    one_stop $LISTENER 
}

do_restart() {
    echo "restarting $RECEIVER ..."
    one_stop $RECEIVER
    sleep 1
    one_start $RECEIVER
    echo "restarting $LISTENER ..."
    one_stop $LISTENER
    sleep 1
    one_start $LISTENER
}

if [ $# -ne 1 ];then
    usage
    exit 256
fi

case $1 in
start)
    do_start ;;
stop)
    do_stop ;;
restart)
    do_restart ;;
*)
    usage ;;
esac
