#coding=utf-8

import sys
import json
from commands import getstatusoutput

check_cmd = 'df -lh -x nfs -x tmpfs 2>/dev/null'
(status, output)  = getstatusoutput(check_cmd)

disk_usage_dict = {}

disk_info = output.split('\n')[1:]
for mount in disk_info:
    mount_info = mount.split()
    disk_usage_dict['{%s;pused}'%mount_info[-1]] = mount_info[-2].rstrip('%')
        

print json.dumps(disk_usage_dict)



