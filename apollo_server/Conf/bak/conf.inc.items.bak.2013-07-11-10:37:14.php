<? $time_now = "1373510220";  return $task_list =array (
  0 => 
  array (
    'type' => 'system',
    'field_type' => '0',
    'task_desc' => 'CPU使用率',
    'unit' => '%',
    'switch' => true,
    'local_log' => true,
    'task_name' => 'cpu_used_rate',
    'task_interval' => '60',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '130',
        'key' => 'cpu_used_rate.cpu_use',
        'unit' => '%',
        'desc' => 'cpu使用率',
        'graphic' => true,
        'triggerId' => '27',
      ),
      2 => 
      array (
        'format_items_id' => '722',
        'key' => 'cpu_used_rate.1232132133',
        'unit' => '2',
        'desc' => '3',
        'graphic' => false,
        'triggerId' => '',
      ),
      3 => 
      array (
        'format_items_id' => '723',
        'key' => 'cpu_used_rate.31',
        'unit' => '33',
        'desc' => '33',
        'graphic' => false,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["dfd9b6d8236e72f2478cc4014d0087a2"],
  ),
  1 => 
  array (
    'type' => 'cron',
    'field_type' => '0',
    'task_desc' => '服务器详细信息生成',
    'unit' => '',
    'switch' => true,
    'local_log' => false,
    'task_name' => 'serverinfo',
    'task_interval' => '60',
    'host_list' => $host_list["f289c91ec4a6a680c438f0b4ce3203cf"],
  ),
  2 => 
  array (
    'type' => 'realtime',
    'field_type' => '0',
    'task_desc' => '实时数据接口',
    'unit' => '',
    'switch' => true,
    'local_log' => false,
    'task_name' => 'realtimeinfo',
    'task_interval' => '0',
    'host_list' => $host_list["f289c91ec4a6a680c438f0b4ce3203cf"],
  ),
  3 => 
  array (
    'type' => 'system',
    'field_type' => '0',
    'task_desc' => 'mem/swap状态',
    'unit' => '',
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mem_swap_status',
    'task_interval' => '60',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '45',
        'key' => 'mem_swap_status.mem_used',
        'unit' => 'k',
        'desc' => 'mem使用量',
        'graphic' => true,
        'triggerId' => '',
      ),
      2 => 
      array (
        'format_items_id' => '46',
        'key' => 'mem_swap_status.mem_used_rate',
        'unit' => '%',
        'desc' => 'mem使用率',
        'graphic' => true,
        'triggerId' => '',
      ),
      3 => 
      array (
        'format_items_id' => '47',
        'key' => 'mem_swap_status.swap_used',
        'unit' => 'k',
        'desc' => 'swap使用量',
        'graphic' => true,
        'triggerId' => '',
      ),
      4 => 
      array (
        'format_items_id' => '48',
        'key' => 'mem_swap_status.swap_used_rate',
        'unit' => '%',
        'desc' => 'swap使用率',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["681d409f9cef1597ab1d1160ff1d3a10"],
  ),
  4 => 
  array (
    'type' => 'service',
    'field_type' => '0',
    'task_desc' => 'mc_15040',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mc_15040',
    'task_interval' => '60',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '33',
        'key' => 'mc_15040.use_rate',
        'unit' => '%',
        'desc' => 'MC使用率',
        'graphic' => true,
        'triggerId' => '',
      ),
      2 => 
      array (
        'format_items_id' => '34',
        'key' => 'mc_15040.hit_rate',
        'unit' => '%',
        'desc' => 'MC命中率',
        'graphic' => true,
        'triggerId' => '',
      ),
      3 => 
      array (
        'format_items_id' => '35',
        'key' => 'mc_15040.set_rate',
        'unit' => 'count/s',
        'desc' => 'SET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      4 => 
      array (
        'format_items_id' => '36',
        'key' => 'mc_15040.get_rate',
        'unit' => 'count/s',
        'desc' => 'GET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      5 => 
      array (
        'format_items_id' => '37',
        'key' => 'mc_15040.set_time',
        'unit' => 'ms',
        'desc' => 'SET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
      6 => 
      array (
        'format_items_id' => '38',
        'key' => 'mc_15040.get_time',
        'unit' => 'ms',
        'desc' => 'GET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["687ed2c060af90f8b17c07c9643f5d19"],
  ),
  5 => 
  array (
    'type' => 'service',
    'field_type' => '0',
    'task_desc' => 'mc_15050',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mc_15050',
    'task_interval' => '60',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '44',
        'key' => 'mc_15050.use_rate',
        'unit' => '%',
        'desc' => 'MC使用率',
        'graphic' => true,
        'triggerId' => '',
      ),
      2 => 
      array (
        'format_items_id' => '43',
        'key' => 'mc_15050.hit_rate',
        'unit' => '%',
        'desc' => 'MC命中率',
        'graphic' => true,
        'triggerId' => '',
      ),
      3 => 
      array (
        'format_items_id' => '42',
        'key' => 'mc_15050.set_rate',
        'unit' => 'count/s',
        'desc' => 'SET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      4 => 
      array (
        'format_items_id' => '41',
        'key' => 'mc_15050.get_rate',
        'unit' => 'count/s',
        'desc' => 'GET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      5 => 
      array (
        'format_items_id' => '40',
        'key' => 'mc_15050.set_time',
        'unit' => 'ms',
        'desc' => 'SET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
      6 => 
      array (
        'format_items_id' => '39',
        'key' => 'mc_15050.get_time',
        'unit' => 'ms',
        'desc' => 'GET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["ea99dc2b95c22dee53db94775a1b276b"],
  ),
  6 => 
  array (
    'type' => 'system',
    'field_type' => '0',
    'task_desc' => 'system load',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'load_average',
    'task_interval' => '60',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '49',
        'key' => 'load_average.avg1',
        'unit' => '%',
        'desc' => 'system load1',
        'graphic' => true,
        'triggerId' => '',
      ),
      2 => 
      array (
        'format_items_id' => '50',
        'key' => 'load_average.avg5',
        'unit' => '%',
        'desc' => 'system load5',
        'graphic' => true,
        'triggerId' => '',
      ),
      3 => 
      array (
        'format_items_id' => '51',
        'key' => 'load_average.avg15',
        'unit' => '%',
        'desc' => 'system load15',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["f289c91ec4a6a680c438f0b4ce3203cf"],
  ),
  7 => 
  array (
    'type' => 'service',
    'field_type' => '0',
    'task_desc' => 'mc_15041',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mc_15041',
    'task_interval' => '60',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '58',
        'key' => 'mc_15041.use_rate',
        'unit' => '%',
        'desc' => 'MC使用率',
        'graphic' => true,
        'triggerId' => '',
      ),
      2 => 
      array (
        'format_items_id' => '59',
        'key' => 'mc_15041.hit_rate',
        'unit' => '%',
        'desc' => 'MC命中率',
        'graphic' => true,
        'triggerId' => '',
      ),
      3 => 
      array (
        'format_items_id' => '60',
        'key' => 'mc_15041.set_rate',
        'unit' => 'count/s',
        'desc' => 'SET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      4 => 
      array (
        'format_items_id' => '61',
        'key' => 'mc_15041.get_rate',
        'unit' => 'count/s',
        'desc' => 'GET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      5 => 
      array (
        'format_items_id' => '62',
        'key' => 'mc_15041.set_time',
        'unit' => 'ms',
        'desc' => 'SET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
      6 => 
      array (
        'format_items_id' => '63',
        'key' => 'mc_15041.get_time',
        'unit' => 'ms',
        'desc' => 'GET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["def6e7b4254de67c3568876cb5c556e5"],
  ),
  8 => 
  array (
    'type' => 'service',
    'field_type' => '0',
    'task_desc' => 'mc_12000',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mc_12000',
    'task_interval' => '60',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '64',
        'key' => 'mc_12000.use_rate',
        'unit' => '%',
        'desc' => 'MC使用率',
        'graphic' => true,
        'triggerId' => '',
      ),
      2 => 
      array (
        'format_items_id' => '65',
        'key' => 'mc_12000.hit_rate',
        'unit' => '%',
        'desc' => 'MC命中率',
        'graphic' => true,
        'triggerId' => '',
      ),
      3 => 
      array (
        'format_items_id' => '66',
        'key' => 'mc_12000.set_rate',
        'unit' => 'count/s',
        'desc' => 'SET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      4 => 
      array (
        'format_items_id' => '67',
        'key' => 'mc_12000.get_rate',
        'unit' => 'count/s',
        'desc' => 'GET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      5 => 
      array (
        'format_items_id' => '68',
        'key' => 'mc_12000.set_time',
        'unit' => 'ms',
        'desc' => 'SET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
      6 => 
      array (
        'format_items_id' => '69',
        'key' => 'mc_12000.get_time',
        'unit' => 'ms',
        'desc' => 'GET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["d8f91331880cec66a7205163ed2ecdf0"],
  ),
  9 => 
  array (
    'type' => 'service',
    'field_type' => '0',
    'task_desc' => 'mc_15051',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mc_15051',
    'task_interval' => '60',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '75',
        'key' => 'mc_15051.use_rate',
        'unit' => '%',
        'desc' => 'MC使用率',
        'graphic' => true,
        'triggerId' => '',
      ),
      2 => 
      array (
        'format_items_id' => '74',
        'key' => 'mc_15051.hit_rate',
        'unit' => '%',
        'desc' => 'MC命中率',
        'graphic' => true,
        'triggerId' => '',
      ),
      3 => 
      array (
        'format_items_id' => '73',
        'key' => 'mc_15051.set_rate',
        'unit' => 'count/s',
        'desc' => 'SET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      4 => 
      array (
        'format_items_id' => '72',
        'key' => 'mc_15051.get_rate',
        'unit' => 'count/s',
        'desc' => 'GET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      5 => 
      array (
        'format_items_id' => '71',
        'key' => 'mc_15051.set_time',
        'unit' => 'ms',
        'desc' => 'SET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
      6 => 
      array (
        'format_items_id' => '70',
        'key' => 'mc_15051.get_time',
        'unit' => 'ms',
        'desc' => 'GET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["ea99dc2b95c22dee53db94775a1b276b"],
  ),
  10 => 
  array (
    'type' => 'service',
    'field_type' => '0',
    'task_desc' => 'mc_15060',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mc_15060',
    'task_interval' => '60',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '81',
        'key' => 'mc_15060.use_rate',
        'unit' => '%',
        'desc' => 'MC使用率',
        'graphic' => true,
        'triggerId' => '',
      ),
      2 => 
      array (
        'format_items_id' => '80',
        'key' => 'mc_15060.hit_rate',
        'unit' => '%',
        'desc' => 'MC命中率',
        'graphic' => true,
        'triggerId' => '',
      ),
      3 => 
      array (
        'format_items_id' => '79',
        'key' => 'mc_15060.set_rate',
        'unit' => 'count/s',
        'desc' => 'SET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      4 => 
      array (
        'format_items_id' => '78',
        'key' => 'mc_15060.get_rate',
        'unit' => 'count/s',
        'desc' => 'GET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      5 => 
      array (
        'format_items_id' => '77',
        'key' => 'mc_15060.set_time',
        'unit' => 'ms',
        'desc' => 'SET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
      6 => 
      array (
        'format_items_id' => '76',
        'key' => 'mc_15060.get_time',
        'unit' => 'ms',
        'desc' => 'GET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["ea99dc2b95c22dee53db94775a1b276b"],
  ),
  11 => 
  array (
    'type' => 'service',
    'field_type' => '0',
    'task_desc' => 'mc_15070',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mc_15070',
    'task_interval' => '60',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '87',
        'key' => 'mc_15070.use_rate',
        'unit' => '%',
        'desc' => 'MC使用率',
        'graphic' => true,
        'triggerId' => '',
      ),
      2 => 
      array (
        'format_items_id' => '86',
        'key' => 'mc_15070.hit_rate',
        'unit' => '%',
        'desc' => 'MC命中率',
        'graphic' => true,
        'triggerId' => '',
      ),
      3 => 
      array (
        'format_items_id' => '85',
        'key' => 'mc_15070.set_rate',
        'unit' => 'count/s',
        'desc' => 'SET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      4 => 
      array (
        'format_items_id' => '84',
        'key' => 'mc_15070.get_rate',
        'unit' => 'count/s',
        'desc' => 'GET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      5 => 
      array (
        'format_items_id' => '83',
        'key' => 'mc_15070.set_time',
        'unit' => 'ms',
        'desc' => 'SET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
      6 => 
      array (
        'format_items_id' => '82',
        'key' => 'mc_15070.get_time',
        'unit' => 'ms',
        'desc' => 'GET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["687ed2c060af90f8b17c07c9643f5d19"],
  ),
  12 => 
  array (
    'type' => 'service',
    'field_type' => '0',
    'task_desc' => 'mc_12001',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mc_12001',
    'task_interval' => '60',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '93',
        'key' => 'mc_12001.use_rate',
        'unit' => '%',
        'desc' => 'MC使用率',
        'graphic' => true,
        'triggerId' => '',
      ),
      2 => 
      array (
        'format_items_id' => '92',
        'key' => 'mc_12001.hit_rate',
        'unit' => '%',
        'desc' => 'MC命中率',
        'graphic' => true,
        'triggerId' => '',
      ),
      3 => 
      array (
        'format_items_id' => '91',
        'key' => 'mc_12001.set_rate',
        'unit' => 'count/s',
        'desc' => 'SET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      4 => 
      array (
        'format_items_id' => '90',
        'key' => 'mc_12001.get_rate',
        'unit' => 'count/s',
        'desc' => 'GET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      5 => 
      array (
        'format_items_id' => '89',
        'key' => 'mc_12001.set_time',
        'unit' => 'ms',
        'desc' => 'SET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
      6 => 
      array (
        'format_items_id' => '88',
        'key' => 'mc_12001.get_time',
        'unit' => 'ms',
        'desc' => 'GET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["a67e7df4307bf0f65d803338682e28fe"],
  ),
  13 => 
  array (
    'type' => 'service',
    'field_type' => '0',
    'task_desc' => 'mc_12003',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mc_12003',
    'task_interval' => '60',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '99',
        'key' => 'mc_12003.use_rate',
        'unit' => '%',
        'desc' => 'MC使用率',
        'graphic' => true,
        'triggerId' => '',
      ),
      2 => 
      array (
        'format_items_id' => '98',
        'key' => 'mc_12003.hit_rate',
        'unit' => '%',
        'desc' => 'MC命中率',
        'graphic' => true,
        'triggerId' => '',
      ),
      3 => 
      array (
        'format_items_id' => '97',
        'key' => 'mc_12003.set_rate',
        'unit' => 'count/s',
        'desc' => 'SET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      4 => 
      array (
        'format_items_id' => '96',
        'key' => 'mc_12003.get_rate',
        'unit' => 'count/s',
        'desc' => 'GET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      5 => 
      array (
        'format_items_id' => '95',
        'key' => 'mc_12003.set_time',
        'unit' => 'ms',
        'desc' => 'SET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
      6 => 
      array (
        'format_items_id' => '94',
        'key' => 'mc_12003.get_time',
        'unit' => 'ms',
        'desc' => 'GET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["ecc35f09c3d0f2ac768f0fbbff8f016e"],
  ),
  14 => 
  array (
    'type' => 'service',
    'field_type' => '0',
    'task_desc' => 'mc_12002',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mc_12002',
    'task_interval' => '60',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '106',
        'key' => 'mc_12002.use_rate',
        'unit' => '%',
        'desc' => 'MC使用率',
        'graphic' => true,
        'triggerId' => '',
      ),
      2 => 
      array (
        'format_items_id' => '107',
        'key' => 'mc_12002.hit_rate',
        'unit' => '%',
        'desc' => 'MC命中率',
        'graphic' => true,
        'triggerId' => '',
      ),
      3 => 
      array (
        'format_items_id' => '108',
        'key' => 'mc_12002.set_rate',
        'unit' => 'count/s',
        'desc' => 'SET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      4 => 
      array (
        'format_items_id' => '109',
        'key' => 'mc_12002.get_rate',
        'unit' => 'count/s',
        'desc' => 'GET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      5 => 
      array (
        'format_items_id' => '110',
        'key' => 'mc_12002.set_time',
        'unit' => 'ms',
        'desc' => 'SET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
      6 => 
      array (
        'format_items_id' => '111',
        'key' => 'mc_12002.get_time',
        'unit' => 'ms',
        'desc' => 'GET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["73fb98f36627560bb4e05f4dbbe908fc"],
  ),
  15 => 
  array (
    'type' => 'service',
    'field_type' => '0',
    'task_desc' => 'mc_14000',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mc_14000',
    'task_interval' => '60',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '112',
        'key' => 'mc_14000.use_rate',
        'unit' => '%',
        'desc' => 'MC使用率',
        'graphic' => true,
        'triggerId' => '',
      ),
      2 => 
      array (
        'format_items_id' => '113',
        'key' => 'mc_14000.hit_rate',
        'unit' => '%',
        'desc' => 'MC命中率',
        'graphic' => true,
        'triggerId' => '',
      ),
      3 => 
      array (
        'format_items_id' => '114',
        'key' => 'mc_14000.set_rate',
        'unit' => 'count/s',
        'desc' => 'SET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      4 => 
      array (
        'format_items_id' => '115',
        'key' => 'mc_14000.get_rate',
        'unit' => 'count/s',
        'desc' => 'GET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      5 => 
      array (
        'format_items_id' => '116',
        'key' => 'mc_14000.set_time',
        'unit' => 'ms',
        'desc' => 'SET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
      6 => 
      array (
        'format_items_id' => '117',
        'key' => 'mc_14000.get_time',
        'unit' => 'ms',
        'desc' => 'GET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["123683af5aae7ddd9b0ff8a9479f687b"],
  ),
  16 => 
  array (
    'type' => 'service',
    'field_type' => '0',
    'task_desc' => 'mc_12004',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mc_12004',
    'task_interval' => '60',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '118',
        'key' => 'mc_12004.use_rate',
        'unit' => '%',
        'desc' => 'MC使用率',
        'graphic' => true,
        'triggerId' => '',
      ),
      2 => 
      array (
        'format_items_id' => '119',
        'key' => 'mc_12004.hit_rate',
        'unit' => '%',
        'desc' => 'MC命中率',
        'graphic' => true,
        'triggerId' => '',
      ),
      3 => 
      array (
        'format_items_id' => '120',
        'key' => 'mc_12004.set_rate',
        'unit' => 'count/s',
        'desc' => 'SET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      4 => 
      array (
        'format_items_id' => '121',
        'key' => 'mc_12004.get_rate',
        'unit' => 'count/s',
        'desc' => 'GET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      5 => 
      array (
        'format_items_id' => '122',
        'key' => 'mc_12004.set_time',
        'unit' => 'ms',
        'desc' => 'SET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
      6 => 
      array (
        'format_items_id' => '123',
        'key' => 'mc_12004.get_time',
        'unit' => 'ms',
        'desc' => 'GET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["99a71e0ae88e27a95deabb02f48680c9"],
  ),
  17 => 
  array (
    'type' => 'service',
    'field_type' => '0',
    'task_desc' => 'mc_13015',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mc_13015',
    'task_interval' => '60',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '124',
        'key' => 'mc_13015.use_rate',
        'unit' => '%',
        'desc' => 'MC使用率',
        'graphic' => true,
        'triggerId' => '',
      ),
      2 => 
      array (
        'format_items_id' => '125',
        'key' => 'mc_13015.hit_rate',
        'unit' => '%',
        'desc' => 'MC命中率',
        'graphic' => true,
        'triggerId' => '',
      ),
      3 => 
      array (
        'format_items_id' => '126',
        'key' => 'mc_13015.set_rate',
        'unit' => 'count/s',
        'desc' => 'SET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      4 => 
      array (
        'format_items_id' => '127',
        'key' => 'mc_13015.get_rate',
        'unit' => 'count/s',
        'desc' => 'GET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      5 => 
      array (
        'format_items_id' => '128',
        'key' => 'mc_13015.set_time',
        'unit' => 'ms',
        'desc' => 'SET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
      6 => 
      array (
        'format_items_id' => '129',
        'key' => 'mc_13015.get_time',
        'unit' => 'ms',
        'desc' => 'GET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["99a71e0ae88e27a95deabb02f48680c9"],
  ),
  18 => 
  array (
    'type' => 'system',
    'field_type' => '0',
    'task_desc' => '酒仙桥源下载',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'dl_from_jxq',
    'task_interval' => '3600',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '131',
        'key' => 'dl_from_jxq.jxq',
        'unit' => 'kb/s',
        'desc' => '酒仙桥速率',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["c33b49bbdc79b1894b7b1c406b0d27a2"],
  ),
  19 => 
  array (
    'type' => 'system',
    'field_type' => '0',
    'task_desc' => '亦庄源下载',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'dl_from_yz',
    'task_interval' => '3600',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '134',
        'key' => 'dl_from_yz.yz',
        'unit' => 'kb/s',
        'desc' => '亦庄速率',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["4179275c3722fb9d00a55d755792f8c0"],
  ),
  20 => 
  array (
    'type' => 'system',
    'field_type' => '0',
    'task_desc' => 'ping2apollo',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'ping',
    'task_interval' => '60',
    'host_list' => $host_list["f289c91ec4a6a680c438f0b4ce3203cf"],
  ),
  21 => 
  array (
    'type' => 'system',
    'field_type' => '0',
    'task_desc' => 'http连接数',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'httpnum',
    'task_interval' => '60',
    'host_list' => $host_list["f289c91ec4a6a680c438f0b4ce3203cf"],
  ),
  22 => 
  array (
    'type' => 'service',
    'field_type' => '0',
    'task_desc' => 'mc_16003',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mc_16003',
    'task_interval' => '60',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '135',
        'key' => 'mc_16003.use_rate',
        'unit' => '%',
        'desc' => 'MC使用率',
        'graphic' => true,
        'triggerId' => '',
      ),
      2 => 
      array (
        'format_items_id' => '136',
        'key' => 'mc_16003.hit_rate',
        'unit' => '%',
        'desc' => 'MC命中率',
        'graphic' => true,
        'triggerId' => '',
      ),
      3 => 
      array (
        'format_items_id' => '137',
        'key' => 'mc_16003.set_rate',
        'unit' => 'count/s',
        'desc' => 'SET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      4 => 
      array (
        'format_items_id' => '138',
        'key' => 'mc_16003.get_rate',
        'unit' => 'count/s',
        'desc' => 'GET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      5 => 
      array (
        'format_items_id' => '139',
        'key' => 'mc_16003.set_time',
        'unit' => 'ms',
        'desc' => 'SET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
      6 => 
      array (
        'format_items_id' => '140',
        'key' => 'mc_16003.get_time',
        'unit' => 'ms',
        'desc' => 'GET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["ab63fe61e795f3e1b420dee0cb3a8b90"],
  ),
  23 => 
  array (
    'type' => 'service',
    'field_type' => '0',
    'task_desc' => 'mc_16001',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mc_16001',
    'task_interval' => '60',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '141',
        'key' => 'mc_16001.use_rate',
        'unit' => '%',
        'desc' => 'MC使用率',
        'graphic' => true,
        'triggerId' => '',
      ),
      2 => 
      array (
        'format_items_id' => '142',
        'key' => 'mc_16001.hit_rate',
        'unit' => '%',
        'desc' => 'MC命中率',
        'graphic' => true,
        'triggerId' => '',
      ),
      3 => 
      array (
        'format_items_id' => '143',
        'key' => 'mc_16001.set_rate',
        'unit' => 'count/s',
        'desc' => 'SET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      4 => 
      array (
        'format_items_id' => '144',
        'key' => 'mc_16001.get_rate',
        'unit' => 'count/s',
        'desc' => 'GET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      5 => 
      array (
        'format_items_id' => '145',
        'key' => 'mc_16001.set_time',
        'unit' => 'ms',
        'desc' => 'SET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
      6 => 
      array (
        'format_items_id' => '146',
        'key' => 'mc_16001.get_time',
        'unit' => 'ms',
        'desc' => 'GET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["2533bd27a3592d893bee97b01ddfe627"],
  ),
  24 => 
  array (
    'type' => 'service',
    'field_type' => '0',
    'task_desc' => 'mc_15100',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mc_15100',
    'task_interval' => '60',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '147',
        'key' => 'mc_15100.use_rate',
        'unit' => '%',
        'desc' => 'MC使用率',
        'graphic' => true,
        'triggerId' => '',
      ),
      2 => 
      array (
        'format_items_id' => '148',
        'key' => 'mc_15100.hit_rate',
        'unit' => '%',
        'desc' => 'MC命中率',
        'graphic' => true,
        'triggerId' => '',
      ),
      3 => 
      array (
        'format_items_id' => '149',
        'key' => 'mc_15100.set_rate',
        'unit' => 'count/s',
        'desc' => 'SET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      4 => 
      array (
        'format_items_id' => '150',
        'key' => 'mc_15100.get_rate',
        'unit' => 'count/s',
        'desc' => 'GET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      5 => 
      array (
        'format_items_id' => '151',
        'key' => 'mc_15100.set_time',
        'unit' => 'ms',
        'desc' => 'SET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
      6 => 
      array (
        'format_items_id' => '152',
        'key' => 'mc_15100.get_time',
        'unit' => 'ms',
        'desc' => 'GET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["e2184493f07ad6205737660fe732a2b2"],
  ),
  25 => 
  array (
    'type' => 'service',
    'field_type' => '0',
    'task_desc' => 'mc_15090',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mc_15090',
    'task_interval' => '60',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '153',
        'key' => 'mc_15090.use_rate',
        'unit' => '%',
        'desc' => 'MC使用率',
        'graphic' => true,
        'triggerId' => '',
      ),
      2 => 
      array (
        'format_items_id' => '154',
        'key' => 'mc_15090.hit_rate',
        'unit' => '%',
        'desc' => 'MC命中率',
        'graphic' => true,
        'triggerId' => '',
      ),
      3 => 
      array (
        'format_items_id' => '155',
        'key' => 'mc_15090.set_rate',
        'unit' => 'count/s',
        'desc' => 'SET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      4 => 
      array (
        'format_items_id' => '156',
        'key' => 'mc_15090.get_rate',
        'unit' => 'count/s',
        'desc' => 'GET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      5 => 
      array (
        'format_items_id' => '157',
        'key' => 'mc_15090.set_time',
        'unit' => 'ms',
        'desc' => 'SET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
      6 => 
      array (
        'format_items_id' => '158',
        'key' => 'mc_15090.get_time',
        'unit' => 'ms',
        'desc' => 'GET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["e2184493f07ad6205737660fe732a2b2"],
  ),
  26 => 
  array (
    'type' => 'service',
    'field_type' => '0',
    'task_desc' => 'mc_16002',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mc_16002',
    'task_interval' => '60',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '159',
        'key' => 'mc_16002.use_rate',
        'unit' => '%',
        'desc' => 'MC使用率',
        'graphic' => true,
        'triggerId' => '',
      ),
      2 => 
      array (
        'format_items_id' => '160',
        'key' => 'mc_16002.hit_rate',
        'unit' => '%',
        'desc' => 'MC命中率',
        'graphic' => true,
        'triggerId' => '',
      ),
      3 => 
      array (
        'format_items_id' => '161',
        'key' => 'mc_16002.set_rate',
        'unit' => 'count/s',
        'desc' => 'SET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      4 => 
      array (
        'format_items_id' => '162',
        'key' => 'mc_16002.get_rate',
        'unit' => 'count/s',
        'desc' => 'GET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      5 => 
      array (
        'format_items_id' => '163',
        'key' => 'mc_16002.set_time',
        'unit' => 'ms',
        'desc' => 'SET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
      6 => 
      array (
        'format_items_id' => '164',
        'key' => 'mc_16002.get_time',
        'unit' => 'ms',
        'desc' => 'GET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["2533bd27a3592d893bee97b01ddfe627"],
  ),
  27 => 
  array (
    'type' => 'service',
    'field_type' => '0',
    'task_desc' => 'mc_16000',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mc_16000',
    'task_interval' => '60',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '165',
        'key' => 'mc_16000.use_rate',
        'unit' => '%',
        'desc' => 'MC使用率',
        'graphic' => true,
        'triggerId' => '',
      ),
      2 => 
      array (
        'format_items_id' => '166',
        'key' => 'mc_16000.hit_rate',
        'unit' => '%',
        'desc' => 'MC命中率',
        'graphic' => true,
        'triggerId' => '',
      ),
      3 => 
      array (
        'format_items_id' => '167',
        'key' => 'mc_16000.set_rate',
        'unit' => 'count/s',
        'desc' => 'SET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      4 => 
      array (
        'format_items_id' => '168',
        'key' => 'mc_16000.get_rate',
        'unit' => 'count/s',
        'desc' => 'GET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      5 => 
      array (
        'format_items_id' => '169',
        'key' => 'mc_16000.set_time',
        'unit' => 'ms',
        'desc' => 'SET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
      6 => 
      array (
        'format_items_id' => '170',
        'key' => 'mc_16000.get_time',
        'unit' => 'ms',
        'desc' => 'GET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["2533bd27a3592d893bee97b01ddfe627"],
  ),
  28 => 
  array (
    'type' => 'service',
    'field_type' => '0',
    'task_desc' => 'mc_15080',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mc_15080',
    'task_interval' => '60',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '171',
        'key' => 'mc_15080.use_rate',
        'unit' => '%',
        'desc' => 'MC使用率',
        'graphic' => true,
        'triggerId' => '',
      ),
      2 => 
      array (
        'format_items_id' => '172',
        'key' => 'mc_15080.hit_rate',
        'unit' => '%',
        'desc' => 'MC命中率',
        'graphic' => true,
        'triggerId' => '',
      ),
      3 => 
      array (
        'format_items_id' => '173',
        'key' => 'mc_15080.set_rate',
        'unit' => 'count/s',
        'desc' => 'SET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      4 => 
      array (
        'format_items_id' => '174',
        'key' => 'mc_15080.get_rate',
        'unit' => 'count/s',
        'desc' => 'GET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      5 => 
      array (
        'format_items_id' => '175',
        'key' => 'mc_15080.set_time',
        'unit' => 'ms',
        'desc' => 'SET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
      6 => 
      array (
        'format_items_id' => '176',
        'key' => 'mc_15080.get_time',
        'unit' => 'ms',
        'desc' => 'GET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["e2184493f07ad6205737660fe732a2b2"],
  ),
  29 => 
  array (
    'type' => 'service',
    'field_type' => '0',
    'task_desc' => 'redis_6380',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'redis_6380',
    'task_interval' => '60',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '179',
        'key' => 'redis_6380.mem_used',
        'unit' => 'MB',
        'desc' => 'redis内存使用量',
        'graphic' => true,
        'triggerId' => '',
      ),
      2 => 
      array (
        'format_items_id' => '178',
        'key' => 'redis_6380.hit_rate',
        'unit' => '%',
        'desc' => 'redis命中率',
        'graphic' => true,
        'triggerId' => '',
      ),
      3 => 
      array (
        'format_items_id' => '177',
        'key' => 'redis_6380.mem_remind',
        'unit' => 'MB',
        'desc' => '物理与redis使用差',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["d12e1a1a9749981afe20cc13ddf16492"],
  ),
  30 => 
  array (
    'type' => 'service',
    'field_type' => '0',
    'task_desc' => 'redis_6379',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'redis_6379',
    'task_interval' => '60',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '180',
        'key' => 'redis_6379.mem_used',
        'unit' => 'MB',
        'desc' => 'redis内存使用量',
        'graphic' => true,
        'triggerId' => '',
      ),
      2 => 
      array (
        'format_items_id' => '181',
        'key' => 'redis_6379.hit_rate',
        'unit' => '%',
        'desc' => 'redis命中率',
        'graphic' => true,
        'triggerId' => '',
      ),
      3 => 
      array (
        'format_items_id' => '182',
        'key' => 'redis_6379.mem_remind',
        'unit' => 'MB',
        'desc' => '物理与redis使用差',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["bfb4403c25d861b1cebaa00a9234e02b"],
  ),
  31 => 
  array (
    'type' => 'service',
    'field_type' => '0',
    'task_desc' => '支付订单',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'pay_case',
    'task_interval' => '300',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '183',
        'key' => 'pay_case.create_order',
        'unit' => '个',
        'desc' => '创建订单量',
        'graphic' => true,
        'triggerId' => '',
      ),
      2 => 
      array (
        'format_items_id' => '184',
        'key' => 'pay_case.finish_order',
        'unit' => '个',
        'desc' => '完成订单量',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["eaeb3a199738ba15427e883613a85607"],
  ),
  32 => 
  array (
    'type' => 'service',
    'field_type' => '0',
    'task_desc' => 'mc_15000',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mc_15000',
    'task_interval' => '60',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '185',
        'key' => 'mc_15000.use_rate',
        'unit' => '%',
        'desc' => 'MC使用率',
        'graphic' => true,
        'triggerId' => '',
      ),
      2 => 
      array (
        'format_items_id' => '186',
        'key' => 'mc_15000.hit_rate',
        'unit' => '%',
        'desc' => 'MC命中率',
        'graphic' => true,
        'triggerId' => '',
      ),
      3 => 
      array (
        'format_items_id' => '187',
        'key' => 'mc_15000.set_rate',
        'unit' => 'count/s',
        'desc' => 'SET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      4 => 
      array (
        'format_items_id' => '188',
        'key' => 'mc_15000.get_rate',
        'unit' => 'count/s',
        'desc' => 'GET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      5 => 
      array (
        'format_items_id' => '189',
        'key' => 'mc_15000.set_time',
        'unit' => 'ms',
        'desc' => 'SET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
      6 => 
      array (
        'format_items_id' => '190',
        'key' => 'mc_15000.get_time',
        'unit' => 'ms',
        'desc' => 'GET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  33 => 
  array (
    'type' => 'service',
    'field_type' => '0',
    'task_desc' => 'mc_15001',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mc_15001',
    'task_interval' => '60',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '191',
        'key' => 'mc_15001.use_rate',
        'unit' => '%',
        'desc' => 'MC使用率',
        'graphic' => true,
        'triggerId' => '',
      ),
      2 => 
      array (
        'format_items_id' => '192',
        'key' => 'mc_15001.hit_rate',
        'unit' => '%',
        'desc' => 'MC命中率',
        'graphic' => true,
        'triggerId' => '',
      ),
      3 => 
      array (
        'format_items_id' => '193',
        'key' => 'mc_15001.set_rate',
        'unit' => 'count/s',
        'desc' => 'SET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      4 => 
      array (
        'format_items_id' => '194',
        'key' => 'mc_15001.get_rate',
        'unit' => 'count/s',
        'desc' => 'GET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      5 => 
      array (
        'format_items_id' => '195',
        'key' => 'mc_15001.set_time',
        'unit' => 'ms',
        'desc' => 'SET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
      6 => 
      array (
        'format_items_id' => '196',
        'key' => 'mc_15001.get_time',
        'unit' => 'ms',
        'desc' => 'GET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["ea99dc2b95c22dee53db94775a1b276b"],
  ),
  34 => 
  array (
    'type' => 'service',
    'field_type' => '0',
    'task_desc' => 'mc_15010',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mc_15010',
    'task_interval' => '60',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '197',
        'key' => 'mc_15010.use_rate',
        'unit' => '%',
        'desc' => 'MC使用率',
        'graphic' => true,
        'triggerId' => '',
      ),
      2 => 
      array (
        'format_items_id' => '198',
        'key' => 'mc_15010.hit_rate',
        'unit' => '%',
        'desc' => 'MC命中率',
        'graphic' => true,
        'triggerId' => '',
      ),
      3 => 
      array (
        'format_items_id' => '199',
        'key' => 'mc_15010.set_rate',
        'unit' => 'count/s',
        'desc' => 'SET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      4 => 
      array (
        'format_items_id' => '200',
        'key' => 'mc_15010.get_rate',
        'unit' => 'count/s',
        'desc' => 'GET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      5 => 
      array (
        'format_items_id' => '201',
        'key' => 'mc_15010.set_time',
        'unit' => 'ms',
        'desc' => 'SET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
      6 => 
      array (
        'format_items_id' => '202',
        'key' => 'mc_15010.get_time',
        'unit' => 'ms',
        'desc' => 'GET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["ea99dc2b95c22dee53db94775a1b276b"],
  ),
  35 => 
  array (
    'type' => 'service',
    'field_type' => '0',
    'task_desc' => 'mc_15020',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mc_15020',
    'task_interval' => '60',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '203',
        'key' => 'mc_15020.use_rate',
        'unit' => '%',
        'desc' => 'MC使用率',
        'graphic' => true,
        'triggerId' => '',
      ),
      2 => 
      array (
        'format_items_id' => '204',
        'key' => 'mc_15020.hit_rate',
        'unit' => '%',
        'desc' => 'MC命中率',
        'graphic' => true,
        'triggerId' => '',
      ),
      3 => 
      array (
        'format_items_id' => '205',
        'key' => 'mc_15020.set_rate',
        'unit' => 'count/s',
        'desc' => 'SET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      4 => 
      array (
        'format_items_id' => '206',
        'key' => 'mc_15020.get_rate',
        'unit' => 'count/s',
        'desc' => 'GET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      5 => 
      array (
        'format_items_id' => '207',
        'key' => 'mc_15020.set_time',
        'unit' => 'ms',
        'desc' => 'SET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
      6 => 
      array (
        'format_items_id' => '208',
        'key' => 'mc_15020.get_time',
        'unit' => 'ms',
        'desc' => 'GET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["ea99dc2b95c22dee53db94775a1b276b"],
  ),
  36 => 
  array (
    'type' => 'service',
    'field_type' => '0',
    'task_desc' => 'mc_15021',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mc_15021',
    'task_interval' => '60',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '209',
        'key' => 'mc_15021.use_rate',
        'unit' => '%',
        'desc' => 'MC使用率',
        'graphic' => true,
        'triggerId' => '',
      ),
      2 => 
      array (
        'format_items_id' => '210',
        'key' => 'mc_15021.hit_rate',
        'unit' => '%',
        'desc' => 'MC命中率',
        'graphic' => true,
        'triggerId' => '',
      ),
      3 => 
      array (
        'format_items_id' => '211',
        'key' => 'mc_15021.set_rate',
        'unit' => 'count/s',
        'desc' => 'SET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      4 => 
      array (
        'format_items_id' => '212',
        'key' => 'mc_15021.get_rate',
        'unit' => 'count/s',
        'desc' => 'GET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      5 => 
      array (
        'format_items_id' => '213',
        'key' => 'mc_15021.set_time',
        'unit' => 'ms',
        'desc' => 'SET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
      6 => 
      array (
        'format_items_id' => '214',
        'key' => 'mc_15021.get_time',
        'unit' => 'ms',
        'desc' => 'GET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["ea99dc2b95c22dee53db94775a1b276b"],
  ),
  37 => 
  array (
    'type' => 'service',
    'field_type' => '0',
    'task_desc' => 'mc_15030',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mc_15030',
    'task_interval' => '60',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '215',
        'key' => 'mc_15030.use_rate',
        'unit' => '%',
        'desc' => 'MC使用率',
        'graphic' => true,
        'triggerId' => '',
      ),
      2 => 
      array (
        'format_items_id' => '216',
        'key' => 'mc_15030.hit_rate',
        'unit' => '%',
        'desc' => 'MC命中率',
        'graphic' => true,
        'triggerId' => '',
      ),
      3 => 
      array (
        'format_items_id' => '217',
        'key' => 'mc_15030.set_rate',
        'unit' => 'count/s',
        'desc' => 'SET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      4 => 
      array (
        'format_items_id' => '218',
        'key' => 'mc_15030.get_rate',
        'unit' => 'count/s',
        'desc' => 'GET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      5 => 
      array (
        'format_items_id' => '219',
        'key' => 'mc_15030.set_time',
        'unit' => 'ms',
        'desc' => 'SET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
      6 => 
      array (
        'format_items_id' => '220',
        'key' => 'mc_15030.get_time',
        'unit' => 'ms',
        'desc' => 'GET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["ea99dc2b95c22dee53db94775a1b276b"],
  ),
  38 => 
  array (
    'type' => 'service',
    'field_type' => '0',
    'task_desc' => 'redis_6377',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'redis_6377',
    'task_interval' => '60',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '221',
        'key' => 'redis_6377.mem_used',
        'unit' => 'MB',
        'desc' => 'redis内存使用量',
        'graphic' => true,
        'triggerId' => '',
      ),
      2 => 
      array (
        'format_items_id' => '222',
        'key' => 'redis_6377.hit_rate',
        'unit' => '%',
        'desc' => 'redis命中率',
        'graphic' => true,
        'triggerId' => '',
      ),
      3 => 
      array (
        'format_items_id' => '223',
        'key' => 'redis_6377.mem_remind',
        'unit' => 'MB',
        'desc' => '物理与redis使用差',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["0c3ce1cbddb565336ecbe9c2bbfe0228"],
  ),
  39 => 
  array (
    'type' => 'service',
    'field_type' => '0',
    'task_desc' => 'redis_6378',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'redis_6378',
    'task_interval' => '60',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '224',
        'key' => 'redis_6378.mem_used',
        'unit' => 'MB',
        'desc' => 'redis内存使用量',
        'graphic' => true,
        'triggerId' => '',
      ),
      2 => 
      array (
        'format_items_id' => '225',
        'key' => 'redis_6378.hit_rate',
        'unit' => '%',
        'desc' => 'redis命中率',
        'graphic' => true,
        'triggerId' => '',
      ),
      3 => 
      array (
        'format_items_id' => '226',
        'key' => 'redis_6378.mem_remind',
        'unit' => 'MB',
        'desc' => '物理与redis使用差',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["2bc3b42dbce6010f186af66004d68aff"],
  ),
  40 => 
  array (
    'type' => 'service',
    'field_type' => '0',
    'task_desc' => 'redis_6381',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'redis_6381',
    'task_interval' => '60',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '227',
        'key' => 'redis_6381.mem_used',
        'unit' => 'MB',
        'desc' => 'redis内存使用量',
        'graphic' => true,
        'triggerId' => '',
      ),
      2 => 
      array (
        'format_items_id' => '228',
        'key' => 'redis_6381.hit_rate',
        'unit' => '%',
        'desc' => 'redis命中率',
        'graphic' => true,
        'triggerId' => '',
      ),
      3 => 
      array (
        'format_items_id' => '229',
        'key' => 'redis_6381.mem_remind',
        'unit' => 'MB',
        'desc' => '物理与redis使用差',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["06d8ab499b7f5f24adce8f948ae69a37"],
  ),
  41 => 
  array (
    'type' => 'service',
    'field_type' => '0',
    'task_desc' => 'redis_6376',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'redis_6376',
    'task_interval' => '60',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '230',
        'key' => 'redis_6376.mem_used',
        'unit' => 'MB',
        'desc' => 'redis内存使用量',
        'graphic' => true,
        'triggerId' => '',
      ),
      2 => 
      array (
        'format_items_id' => '231',
        'key' => 'redis_6376.hit_rate',
        'unit' => '%',
        'desc' => 'redis命中率',
        'graphic' => true,
        'triggerId' => '',
      ),
      3 => 
      array (
        'format_items_id' => '232',
        'key' => 'redis_6376.mem_remind',
        'unit' => 'MB',
        'desc' => '物理与redis使用差',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["a16be402b7439837fd3f4835ff5250ff"],
  ),
  42 => 
  array (
    'type' => 'system',
    'field_type' => '0',
    'task_desc' => 'tcp_8139',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'tcp_8139',
    'task_interval' => '300',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '235',
        'key' => 'tcp_8139.nodejs_8139',
        'unit' => '',
        'desc' => 'nodejs_8139',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["a3db7c495ad2bafcec28f1f04578de8a"],
  ),
  43 => 
  array (
    'type' => 'system',
    'field_type' => '0',
    'task_desc' => 'tcp_873',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'tcp_873',
    'task_interval' => '300',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '236',
        'key' => 'tcp_873.rsyncd_873',
        'unit' => '',
        'desc' => 'rsyncd_873',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["f289c91ec4a6a680c438f0b4ce3203cf"],
  ),
  44 => 
  array (
    'type' => 'service',
    'field_type' => '0',
    'task_desc' => '日任务统计',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'release_getTaskCount',
    'task_interval' => '1800',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '237',
        'key' => 'release_getTaskCount.count',
        'unit' => '个',
        'desc' => '任务个数',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["a3db7c495ad2bafcec28f1f04578de8a"],
  ),
  45 => 
  array (
    'type' => 'system',
    'field_type' => '0',
    'task_desc' => 'eth0流量',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'io_net_eth0',
    'task_interval' => '60',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '238',
        'key' => 'io_net_eth0.eth0-in',
        'unit' => 'k',
        'desc' => 'eth0-in',
        'graphic' => true,
        'triggerId' => '',
      ),
      2 => 
      array (
        'format_items_id' => '239',
        'key' => 'io_net_eth0.eth0-out',
        'unit' => 'k',
        'desc' => 'eth0-out',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["f289c91ec4a6a680c438f0b4ce3203cf"],
  ),
  46 => 
  array (
    'type' => 'system',
    'field_type' => '1',
    'task_desc' => 'Iostat',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'Iostat',
    'task_interval' => '60',
    'host_list' => $host_list["8f55a362b2510dd4892fcb97819bddaa"],
  ),
  47 => 
  array (
    'type' => 'service',
    'field_type' => '0',
    'task_desc' => 'mc_15110',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mc_15110',
    'task_interval' => '60',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '245',
        'key' => 'mc_15110.use_rate',
        'unit' => '%',
        'desc' => 'MC使用率',
        'graphic' => true,
        'triggerId' => '',
      ),
      2 => 
      array (
        'format_items_id' => '246',
        'key' => 'mc_15110.hit_rate',
        'unit' => '%',
        'desc' => 'MC命中率',
        'graphic' => true,
        'triggerId' => '',
      ),
      3 => 
      array (
        'format_items_id' => '247',
        'key' => 'mc_15110.set_rate',
        'unit' => 'count/s',
        'desc' => 'SET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      4 => 
      array (
        'format_items_id' => '248',
        'key' => 'mc_15110.get_rate',
        'unit' => 'count/s',
        'desc' => 'GET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      5 => 
      array (
        'format_items_id' => '249',
        'key' => 'mc_15110.set_time',
        'unit' => 'ms',
        'desc' => 'SET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
      6 => 
      array (
        'format_items_id' => '250',
        'key' => 'mc_15110.get_time',
        'unit' => 'ms',
        'desc' => 'GET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  48 => 
  array (
    'type' => 'service',
    'field_type' => '1',
    'task_desc' => 'mysql_3306',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mysql_3306',
    'task_interval' => '60',
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  49 => 
  array (
    'type' => 'service',
    'field_type' => '1',
    'task_desc' => 'mysql_3307',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mysql_3307',
    'task_interval' => '60',
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  50 => 
  array (
    'type' => 'service',
    'field_type' => '1',
    'task_desc' => 'mysql_3840',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mysql_3840',
    'task_interval' => '60',
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  51 => 
  array (
    'type' => 'service',
    'field_type' => '1',
    'task_desc' => 'mysql_3360',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mysql_3360',
    'task_interval' => '60',
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  52 => 
  array (
    'type' => 'service',
    'field_type' => '1',
    'task_desc' => 'mysql_3330',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mysql_3330',
    'task_interval' => '60',
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  53 => 
  array (
    'type' => 'service',
    'field_type' => '1',
    'task_desc' => 'mysql_3810',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mysql_3810',
    'task_interval' => '60',
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  54 => 
  array (
    'type' => 'service',
    'field_type' => '1',
    'task_desc' => 'mysql_3331',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mysql_3331',
    'task_interval' => '60',
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  55 => 
  array (
    'type' => 'system',
    'field_type' => '0',
    'task_desc' => '上地源下载',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'dl_from_sd',
    'task_interval' => '3600',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '307',
        'key' => 'dl_from_sd.sd',
        'unit' => 'kb/s',
        'desc' => '上地速率',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["5a5f2890c48e34457d7dd844e7c36027"],
  ),
  56 => 
  array (
    'type' => 'service',
    'field_type' => '1',
    'task_desc' => 'mysql_3333',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mysql_3333',
    'task_interval' => '60',
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  57 => 
  array (
    'type' => 'service',
    'field_type' => '1',
    'task_desc' => 'mysql_3400',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mysql_3400',
    'task_interval' => '60',
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  58 => 
  array (
    'type' => 'service',
    'field_type' => '1',
    'task_desc' => 'mysql_3880',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mysql_3880',
    'task_interval' => '60',
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  59 => 
  array (
    'type' => 'service',
    'field_type' => '1',
    'task_desc' => 'mysql_3370',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mysql_3370',
    'task_interval' => '60',
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  60 => 
  array (
    'type' => 'service',
    'field_type' => '1',
    'task_desc' => 'mysql_3371',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mysql_3371',
    'task_interval' => '60',
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  61 => 
  array (
    'type' => 'service',
    'field_type' => '1',
    'task_desc' => 'mysql_3499',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mysql_3499',
    'task_interval' => '60',
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  62 => 
  array (
    'type' => 'service',
    'field_type' => '1',
    'task_desc' => 'mysql_3340',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mysql_3340',
    'task_interval' => '60',
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  63 => 
  array (
    'type' => 'service',
    'field_type' => '1',
    'task_desc' => 'mysql_3820',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mysql_3820',
    'task_interval' => '60',
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  64 => 
  array (
    'type' => 'service',
    'field_type' => '1',
    'task_desc' => 'mysql_3341',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mysql_3341',
    'task_interval' => '60',
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  65 => 
  array (
    'type' => 'service',
    'field_type' => '1',
    'task_desc' => 'mysql_3309',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mysql_3309',
    'task_interval' => '60',
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  66 => 
  array (
    'type' => 'service',
    'field_type' => '1',
    'task_desc' => 'mysql_3342',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mysql_3342',
    'task_interval' => '60',
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  67 => 
  array (
    'type' => 'service',
    'field_type' => '1',
    'task_desc' => 'mysql_3310',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mysql_3310',
    'task_interval' => '60',
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  68 => 
  array (
    'type' => 'service',
    'field_type' => '1',
    'task_desc' => 'mysql_3311',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mysql_3311',
    'task_interval' => '60',
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  69 => 
  array (
    'type' => 'service',
    'field_type' => '1',
    'task_desc' => 'mysql_3343',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mysql_3343',
    'task_interval' => '60',
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  70 => 
  array (
    'type' => 'service',
    'field_type' => '1',
    'task_desc' => 'mysql_3312',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mysql_3312',
    'task_interval' => '60',
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  71 => 
  array (
    'type' => 'service',
    'field_type' => '1',
    'task_desc' => 'mysql_3410',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mysql_3410',
    'task_interval' => '60',
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  72 => 
  array (
    'type' => 'service',
    'field_type' => '1',
    'task_desc' => 'mysql_3890',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mysql_3890',
    'task_interval' => '60',
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  73 => 
  array (
    'type' => 'service',
    'field_type' => '1',
    'task_desc' => 'mysql_3380',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mysql_3380',
    'task_interval' => '60',
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  74 => 
  array (
    'type' => 'service',
    'field_type' => '1',
    'task_desc' => 'mysql_3830',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mysql_3830',
    'task_interval' => '60',
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  75 => 
  array (
    'type' => 'service',
    'field_type' => '1',
    'task_desc' => 'mysql_3350',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mysql_3350',
    'task_interval' => '60',
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  76 => 
  array (
    'type' => 'service',
    'field_type' => '1',
    'task_desc' => 'mysql_3320',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mysql_3320',
    'task_interval' => '60',
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  77 => 
  array (
    'type' => 'service',
    'field_type' => '1',
    'task_desc' => 'mysql_3800',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mysql_3800',
    'task_interval' => '60',
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  78 => 
  array (
    'type' => 'service',
    'field_type' => '1',
    'task_desc' => 'mysql_3321',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mysql_3321',
    'task_interval' => '60',
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  79 => 
  array (
    'type' => 'service',
    'field_type' => '1',
    'task_desc' => 'mysql_3801',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mysql_3801',
    'task_interval' => '60',
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  80 => 
  array (
    'type' => 'service',
    'field_type' => '1',
    'task_desc' => 'mysql_3833',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mysql_3833',
    'task_interval' => '60',
    'host_list' => $host_list["f289c91ec4a6a680c438f0b4ce3203cf"],
  ),
  81 => 
  array (
    'type' => 'service',
    'field_type' => '1',
    'task_desc' => 'mysql_3870',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mysql_3870',
    'task_interval' => '60',
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  82 => 
  array (
    'type' => 'system',
    'field_type' => '1',
    'task_desc' => 'iostat信息',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'iostatinfo',
    'task_interval' => '60',
    'host_list' => $host_list["f289c91ec4a6a680c438f0b4ce3203cf"],
  ),
  83 => 
  array (
    'type' => 'cron',
    'field_type' => '0',
    'task_desc' => '123123',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => '123123123233',
    'task_interval' => '1232',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '721',
        'key' => '123123123233.1231233332212',
        'unit' => '123123',
        'desc' => '12312333333',
        'graphic' => false,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  84 => 
  array (
    'type' => 'realtime',
    'field_type' => '0',
    'task_desc' => '12312312',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => '323123123',
    'task_interval' => '0',
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
) ?>