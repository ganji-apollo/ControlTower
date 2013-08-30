#!/bin/bash
#
############################
# author: liujun
#   date: 2012-11-27
###########################
SCR_DIR='/data/apollo/apollo_agent/App'
PEXEC='/data/apollo/python/bin/python'
RECEIVER='apollocollecter.py'
LISTENER='apolloclientlistener.py'

usage() {
    echo "Usage:$0 start|stop|restart [collecter|listener]"   
}

one_start() {
    num=$(ps aux|grep $1|grep python|grep -v grep|wc -l)  
    if [ $num -gt 0 ];then
        echo "$1 is running"
    else
        nohup $PEXEC $SCR_DIR/$1 >>/tmp/apolloagent.log 2>&1 & 
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

one_restart(){
    echo "restarting $1"
    one_stop $1
    sleep 1 
    one_start $1
}

do_restart() {
    one_restart $RECEIVER
    one_restart $LISTENER
}

if [ $# -lt 1 ];then
    usage
    exit 256
fi

case $1 in
start)
    if [ "$2END" == "END" ];then 
        do_start
    elif [ $2 == 'collecter' ];then
        one_start $RECEIVER
    elif [ $2 == 'listener' ];then
        one_start $LISTENER
    else
        usage    
    fi
    ;;
stop)
    if [ "$2END" == "END" ];then 
        do_stop
    elif [ $2 == 'collecter' ];then
        one_stop $RECEIVER
    elif [ $2 == 'listener' ];then
        one_stop $LISTENER
    else
        usage    
    fi
    ;;
restart)
    if [ "$2END" == "END" ];then 
        do_restart
    elif [ $2 == 'collecter' ];then
        one_restart $RECEIVER
    elif [ $2 == 'listener' ];then
        one_restart $LISTENER
    else
        usage    
    fi
    ;;
*)
    usage ;;
esac
