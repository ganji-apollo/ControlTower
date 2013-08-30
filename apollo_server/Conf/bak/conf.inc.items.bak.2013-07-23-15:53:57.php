<? $time_now = "1374551358";  return $task_list =array (
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
    ),
    'host_list' => $host_list["3cc0a80771f967626f257bdb8e9318d2"],
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
    'host_list' => $host_list["c192ddc854c67521573a01bf5410765c"],
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
    'host_list' => $host_list["077b52df11e4416809589a5cd991b0de"],
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
    'host_list' => $host_list["58b2e6e4d336ea5e93a41c357aac44f6"],
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
      7 => 
      array (
        'format_items_id' => '851',
        'key' => 'mc_15040.evictions',
        'unit' => '个',
        'desc' => 'evictions',
        'graphic' => true,
        'triggerId' => '',
      ),
      8 => 
      array (
        'format_items_id' => '1566',
        'key' => 'mc_15040.cons',
        'unit' => '次',
        'desc' => '连接数',
        'graphic' => true,
        'triggerId' => '',
      ),
      9 => 
      array (
        'format_items_id' => '1593',
        'key' => 'mc_15040.pevic',
        'unit' => '%',
        'desc' => '剔除率',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["ea99dc2b95c22dee53db94775a1b276b"],
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
      7 => 
      array (
        'format_items_id' => '852',
        'key' => 'mc_15050.evictions',
        'unit' => '个',
        'desc' => 'evictions',
        'graphic' => true,
        'triggerId' => '',
      ),
      8 => 
      array (
        'format_items_id' => '1567',
        'key' => 'mc_15050.cons',
        'unit' => '次',
        'desc' => '连接数',
        'graphic' => true,
        'triggerId' => '',
      ),
      9 => 
      array (
        'format_items_id' => '1594',
        'key' => 'mc_15050.pevic',
        'unit' => '%',
        'desc' => '剔除率',
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
        'unit' => '',
        'desc' => 'system load1',
        'graphic' => true,
        'triggerId' => '',
      ),
      2 => 
      array (
        'format_items_id' => '50',
        'key' => 'load_average.avg5',
        'unit' => '',
        'desc' => 'system load5',
        'graphic' => true,
        'triggerId' => '',
      ),
      3 => 
      array (
        'format_items_id' => '51',
        'key' => 'load_average.avg15',
        'unit' => '',
        'desc' => 'system load15',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["58b2e6e4d336ea5e93a41c357aac44f6"],
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
      7 => 
      array (
        'format_items_id' => '853',
        'key' => 'mc_15041.evictions',
        'unit' => '个',
        'desc' => 'evictions',
        'graphic' => true,
        'triggerId' => '',
      ),
      8 => 
      array (
        'format_items_id' => '1568',
        'key' => 'mc_15041.cons',
        'unit' => '次',
        'desc' => '连接数',
        'graphic' => true,
        'triggerId' => '',
      ),
      9 => 
      array (
        'format_items_id' => '1595',
        'key' => 'mc_15041.pevic',
        'unit' => '%',
        'desc' => '剔除率',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["ea99dc2b95c22dee53db94775a1b276b"],
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
      7 => 
      array (
        'format_items_id' => '854',
        'key' => 'mc_12000.evictions',
        'unit' => '个',
        'desc' => 'evictions',
        'graphic' => true,
        'triggerId' => '',
      ),
      8 => 
      array (
        'format_items_id' => '1569',
        'key' => 'mc_12000.cons',
        'unit' => '次',
        'desc' => '连接数',
        'graphic' => true,
        'triggerId' => '',
      ),
      9 => 
      array (
        'format_items_id' => '1596',
        'key' => 'mc_12000.pevic',
        'unit' => '%',
        'desc' => '剔除率',
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
      7 => 
      array (
        'format_items_id' => '855',
        'key' => 'mc_15051.evictions',
        'unit' => '个',
        'desc' => 'evictions',
        'graphic' => true,
        'triggerId' => '',
      ),
      8 => 
      array (
        'format_items_id' => '1570',
        'key' => 'mc_15051.cons',
        'unit' => '次',
        'desc' => '连接数',
        'graphic' => true,
        'triggerId' => '',
      ),
      9 => 
      array (
        'format_items_id' => '1597',
        'key' => 'mc_15051.pevic',
        'unit' => '%',
        'desc' => '剔除率',
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
      7 => 
      array (
        'format_items_id' => '856',
        'key' => 'mc_15060.evictions',
        'unit' => '个',
        'desc' => 'evictions',
        'graphic' => true,
        'triggerId' => '',
      ),
      8 => 
      array (
        'format_items_id' => '1571',
        'key' => 'mc_15060.cons',
        'unit' => '次',
        'desc' => '连接数',
        'graphic' => true,
        'triggerId' => '',
      ),
      9 => 
      array (
        'format_items_id' => '1598',
        'key' => 'mc_15060.pevic',
        'unit' => '%',
        'desc' => '剔除率',
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
      7 => 
      array (
        'format_items_id' => '857',
        'key' => 'mc_15070.evictions',
        'unit' => '个',
        'desc' => 'evictions',
        'graphic' => true,
        'triggerId' => '',
      ),
      8 => 
      array (
        'format_items_id' => '1572',
        'key' => 'mc_15070.cons',
        'unit' => '次',
        'desc' => '连接数',
        'graphic' => true,
        'triggerId' => '',
      ),
      9 => 
      array (
        'format_items_id' => '1599',
        'key' => 'mc_15070.pevic',
        'unit' => '%',
        'desc' => '剔除率',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["ea99dc2b95c22dee53db94775a1b276b"],
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
      7 => 
      array (
        'format_items_id' => '858',
        'key' => 'mc_12001.evictions',
        'unit' => '个',
        'desc' => 'evictions',
        'graphic' => true,
        'triggerId' => '',
      ),
      8 => 
      array (
        'format_items_id' => '1573',
        'key' => 'mc_12001.cons',
        'unit' => '次',
        'desc' => '连接数',
        'graphic' => true,
        'triggerId' => '',
      ),
      9 => 
      array (
        'format_items_id' => '1600',
        'key' => 'mc_12001.pevic',
        'unit' => '%',
        'desc' => '剔除率',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["f7b9e4e28c4f0d3d63769d0f74453f27"],
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
      7 => 
      array (
        'format_items_id' => '859',
        'key' => 'mc_12003.evictions',
        'unit' => '个',
        'desc' => 'evictions',
        'graphic' => true,
        'triggerId' => '',
      ),
      8 => 
      array (
        'format_items_id' => '1565',
        'key' => 'mc_12003.cons',
        'unit' => '次',
        'desc' => '连接数',
        'graphic' => true,
        'triggerId' => '',
      ),
      9 => 
      array (
        'format_items_id' => '1601',
        'key' => 'mc_12003.pevic',
        'unit' => '%',
        'desc' => '剔除率',
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
      7 => 
      array (
        'format_items_id' => '860',
        'key' => 'mc_12002.evictions',
        'unit' => '个',
        'desc' => 'evictions',
        'graphic' => true,
        'triggerId' => '',
      ),
      8 => 
      array (
        'format_items_id' => '1574',
        'key' => 'mc_12002.cons',
        'unit' => '次',
        'desc' => '连接数',
        'graphic' => true,
        'triggerId' => '',
      ),
      9 => 
      array (
        'format_items_id' => '1602',
        'key' => 'mc_12002.pevic',
        'unit' => '%',
        'desc' => '剔除率',
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
      7 => 
      array (
        'format_items_id' => '861',
        'key' => 'mc_14000.evictions',
        'unit' => '个',
        'desc' => 'evictions',
        'graphic' => true,
        'triggerId' => '',
      ),
      8 => 
      array (
        'format_items_id' => '1575',
        'key' => 'mc_14000.cons',
        'unit' => '次',
        'desc' => '连接数',
        'graphic' => true,
        'triggerId' => '',
      ),
      9 => 
      array (
        'format_items_id' => '1603',
        'key' => 'mc_14000.pevic',
        'unit' => '%',
        'desc' => '剔除率',
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
      7 => 
      array (
        'format_items_id' => '862',
        'key' => 'mc_12004.evictions',
        'unit' => '个',
        'desc' => 'evictions',
        'graphic' => true,
        'triggerId' => '',
      ),
      8 => 
      array (
        'format_items_id' => '1576',
        'key' => 'mc_12004.cons',
        'unit' => '次',
        'desc' => '连接数',
        'graphic' => true,
        'triggerId' => '',
      ),
      9 => 
      array (
        'format_items_id' => '1604',
        'key' => 'mc_12004.pevic',
        'unit' => '%',
        'desc' => '剔除率',
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
      7 => 
      array (
        'format_items_id' => '863',
        'key' => 'mc_13015.evictions',
        'unit' => '个',
        'desc' => 'evictions',
        'graphic' => true,
        'triggerId' => '',
      ),
      8 => 
      array (
        'format_items_id' => '1577',
        'key' => 'mc_13015.cons',
        'unit' => '次',
        'desc' => '连接数',
        'graphic' => true,
        'triggerId' => '',
      ),
      9 => 
      array (
        'format_items_id' => '1605',
        'key' => 'mc_13015.pevic',
        'unit' => '%',
        'desc' => '剔除率',
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
    'host_list' => $host_list["ff8adc15098b12e244ab7e366b2b5243"],
  ),
  21 => 
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
      7 => 
      array (
        'format_items_id' => '864',
        'key' => 'mc_16003.evictions',
        'unit' => '个',
        'desc' => 'evictions',
        'graphic' => true,
        'triggerId' => '',
      ),
      8 => 
      array (
        'format_items_id' => '1578',
        'key' => 'mc_16003.cons',
        'unit' => '次',
        'desc' => '连接数',
        'graphic' => true,
        'triggerId' => '',
      ),
      9 => 
      array (
        'format_items_id' => '1606',
        'key' => 'mc_16003.pevic',
        'unit' => '%',
        'desc' => '剔除率',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["2533bd27a3592d893bee97b01ddfe627"],
  ),
  22 => 
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
      7 => 
      array (
        'format_items_id' => '865',
        'key' => 'mc_16001.evictions',
        'unit' => '个',
        'desc' => 'evictions',
        'graphic' => true,
        'triggerId' => '',
      ),
      8 => 
      array (
        'format_items_id' => '1579',
        'key' => 'mc_16001.cons',
        'unit' => '次',
        'desc' => '连接数',
        'graphic' => true,
        'triggerId' => '',
      ),
      9 => 
      array (
        'format_items_id' => '1607',
        'key' => 'mc_16001.pevic',
        'unit' => '%',
        'desc' => '剔除率',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["2533bd27a3592d893bee97b01ddfe627"],
  ),
  23 => 
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
      7 => 
      array (
        'format_items_id' => '866',
        'key' => 'mc_15100.evictions',
        'unit' => '个',
        'desc' => 'evictions',
        'graphic' => true,
        'triggerId' => '',
      ),
      8 => 
      array (
        'format_items_id' => '1580',
        'key' => 'mc_15100.cons',
        'unit' => '次',
        'desc' => '连接数',
        'graphic' => true,
        'triggerId' => '',
      ),
      9 => 
      array (
        'format_items_id' => '1608',
        'key' => 'mc_15100.pevic',
        'unit' => '%',
        'desc' => '剔除率',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["ea99dc2b95c22dee53db94775a1b276b"],
  ),
  24 => 
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
      7 => 
      array (
        'format_items_id' => '867',
        'key' => 'mc_15090.evictions',
        'unit' => '个',
        'desc' => 'evictions',
        'graphic' => true,
        'triggerId' => '',
      ),
      8 => 
      array (
        'format_items_id' => '1581',
        'key' => 'mc_15090.cons',
        'unit' => '次',
        'desc' => '连接数',
        'graphic' => true,
        'triggerId' => '',
      ),
      9 => 
      array (
        'format_items_id' => '1609',
        'key' => 'mc_15090.pevic',
        'unit' => '%',
        'desc' => '剔除率',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["ea99dc2b95c22dee53db94775a1b276b"],
  ),
  25 => 
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
      7 => 
      array (
        'format_items_id' => '868',
        'key' => 'mc_16002.evictions',
        'unit' => '个',
        'desc' => 'evictions',
        'graphic' => true,
        'triggerId' => '',
      ),
      8 => 
      array (
        'format_items_id' => '1582',
        'key' => 'mc_16002.cons',
        'unit' => '次',
        'desc' => '连接数',
        'graphic' => true,
        'triggerId' => '',
      ),
      9 => 
      array (
        'format_items_id' => '1610',
        'key' => 'mc_16002.pevic',
        'unit' => '%',
        'desc' => '剔除率',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["2533bd27a3592d893bee97b01ddfe627"],
  ),
  26 => 
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
      7 => 
      array (
        'format_items_id' => '869',
        'key' => 'mc_16000.evictions',
        'unit' => '个',
        'desc' => 'evictions',
        'graphic' => true,
        'triggerId' => '',
      ),
      8 => 
      array (
        'format_items_id' => '1583',
        'key' => 'mc_16000.cons',
        'unit' => '次',
        'desc' => '连接数',
        'graphic' => true,
        'triggerId' => '',
      ),
      9 => 
      array (
        'format_items_id' => '1611',
        'key' => 'mc_16000.pevic',
        'unit' => '%',
        'desc' => '剔除率',
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
      7 => 
      array (
        'format_items_id' => '870',
        'key' => 'mc_15080.evictions',
        'unit' => '个',
        'desc' => 'evictions',
        'graphic' => true,
        'triggerId' => '',
      ),
      8 => 
      array (
        'format_items_id' => '1584',
        'key' => 'mc_15080.cons',
        'unit' => '次',
        'desc' => '连接数',
        'graphic' => true,
        'triggerId' => '',
      ),
      9 => 
      array (
        'format_items_id' => '1612',
        'key' => 'mc_15080.pevic',
        'unit' => '%',
        'desc' => '剔除率',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["ea99dc2b95c22dee53db94775a1b276b"],
  ),
  28 => 
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
      4 => 
      array (
        'format_items_id' => '881',
        'key' => 'redis_6380.set_time',
        'unit' => 'ms',
        'desc' => 'set时间',
        'graphic' => true,
        'triggerId' => '',
      ),
      5 => 
      array (
        'format_items_id' => '882',
        'key' => 'redis_6380.get_time',
        'unit' => 'ms',
        'desc' => 'get时间',
        'graphic' => true,
        'triggerId' => '',
      ),
      6 => 
      array (
        'format_items_id' => '893',
        'key' => 'redis_6380.connect_num',
        'unit' => '个/分',
        'desc' => '连接数',
        'graphic' => true,
        'triggerId' => '',
      ),
      7 => 
      array (
        'format_items_id' => '894',
        'key' => 'redis_6380.process_num',
        'unit' => '个/分',
        'desc' => '操作数',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["d12e1a1a9749981afe20cc13ddf16492"],
  ),
  29 => 
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
      4 => 
      array (
        'format_items_id' => '883',
        'key' => 'redis_6379.set_time',
        'unit' => 'ms',
        'desc' => 'set时间',
        'graphic' => true,
        'triggerId' => '',
      ),
      5 => 
      array (
        'format_items_id' => '884',
        'key' => 'redis_6379.get_time',
        'unit' => 'ms',
        'desc' => 'get时间',
        'graphic' => true,
        'triggerId' => '',
      ),
      6 => 
      array (
        'format_items_id' => '895',
        'key' => 'redis_6379.connect_num',
        'unit' => '个/分',
        'desc' => '连接数',
        'graphic' => true,
        'triggerId' => '',
      ),
      7 => 
      array (
        'format_items_id' => '896',
        'key' => 'redis_6379.process_num',
        'unit' => '个/分',
        'desc' => '操作数',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["cc3738edd335c8f0764838cae9d6082b"],
  ),
  30 => 
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
  31 => 
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
      7 => 
      array (
        'format_items_id' => '871',
        'key' => 'mc_15000.evictions',
        'unit' => '个',
        'desc' => 'evictions',
        'graphic' => true,
        'triggerId' => '',
      ),
      8 => 
      array (
        'format_items_id' => '1585',
        'key' => 'mc_15000.cons',
        'unit' => '次',
        'desc' => '连接数',
        'graphic' => true,
        'triggerId' => '',
      ),
      9 => 
      array (
        'format_items_id' => '1613',
        'key' => 'mc_15000.pevic',
        'unit' => '%',
        'desc' => '剔除率',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["ea99dc2b95c22dee53db94775a1b276b"],
  ),
  32 => 
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
      7 => 
      array (
        'format_items_id' => '872',
        'key' => 'mc_15001.evictions',
        'unit' => '个',
        'desc' => 'evictions',
        'graphic' => true,
        'triggerId' => '',
      ),
      8 => 
      array (
        'format_items_id' => '1586',
        'key' => 'mc_15001.cons',
        'unit' => '次',
        'desc' => '连接数',
        'graphic' => true,
        'triggerId' => '',
      ),
      9 => 
      array (
        'format_items_id' => '1614',
        'key' => 'mc_15001.pevic',
        'unit' => '%',
        'desc' => '剔除率',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["ea99dc2b95c22dee53db94775a1b276b"],
  ),
  33 => 
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
      7 => 
      array (
        'format_items_id' => '873',
        'key' => 'mc_15010.evictions',
        'unit' => '个',
        'desc' => 'evictions',
        'graphic' => true,
        'triggerId' => '',
      ),
      8 => 
      array (
        'format_items_id' => '1587',
        'key' => 'mc_15010.cons',
        'unit' => '次',
        'desc' => '连接数',
        'graphic' => true,
        'triggerId' => '',
      ),
      9 => 
      array (
        'format_items_id' => '1615',
        'key' => 'mc_15010.pevic',
        'unit' => '%',
        'desc' => '剔除率',
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
      7 => 
      array (
        'format_items_id' => '874',
        'key' => 'mc_15020.evictions',
        'unit' => '个',
        'desc' => 'evictions',
        'graphic' => true,
        'triggerId' => '',
      ),
      8 => 
      array (
        'format_items_id' => '1588',
        'key' => 'mc_15020.cons',
        'unit' => '次',
        'desc' => '连接数',
        'graphic' => true,
        'triggerId' => '',
      ),
      9 => 
      array (
        'format_items_id' => '1616',
        'key' => 'mc_15020.pevic',
        'unit' => '%',
        'desc' => '剔除率',
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
      7 => 
      array (
        'format_items_id' => '875',
        'key' => 'mc_15021.evictions',
        'unit' => '个',
        'desc' => 'evictions',
        'graphic' => true,
        'triggerId' => '',
      ),
      8 => 
      array (
        'format_items_id' => '1589',
        'key' => 'mc_15021.cons',
        'unit' => '次',
        'desc' => '连接数',
        'graphic' => true,
        'triggerId' => '',
      ),
      9 => 
      array (
        'format_items_id' => '1617',
        'key' => 'mc_15021.pevic',
        'unit' => '%',
        'desc' => '剔除率',
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
      7 => 
      array (
        'format_items_id' => '876',
        'key' => 'mc_15030.evictions',
        'unit' => '个',
        'desc' => 'evictions',
        'graphic' => true,
        'triggerId' => '',
      ),
      8 => 
      array (
        'format_items_id' => '1590',
        'key' => 'mc_15030.cons',
        'unit' => '次',
        'desc' => '连接数',
        'graphic' => true,
        'triggerId' => '',
      ),
      9 => 
      array (
        'format_items_id' => '1618',
        'key' => 'mc_15030.pevic',
        'unit' => '%',
        'desc' => '剔除率',
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
      4 => 
      array (
        'format_items_id' => '885',
        'key' => 'redis_6377.set_time',
        'unit' => 'ms',
        'desc' => 'set时间',
        'graphic' => true,
        'triggerId' => '',
      ),
      5 => 
      array (
        'format_items_id' => '886',
        'key' => 'redis_6377.get_time',
        'unit' => 'ms',
        'desc' => 'get时间',
        'graphic' => true,
        'triggerId' => '',
      ),
      6 => 
      array (
        'format_items_id' => '897',
        'key' => 'redis_6377.connect_num',
        'unit' => '个/分',
        'desc' => '连接数',
        'graphic' => true,
        'triggerId' => '',
      ),
      7 => 
      array (
        'format_items_id' => '898',
        'key' => 'redis_6377.process_num',
        'unit' => '个/分',
        'desc' => '操作数',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["0c3ce1cbddb565336ecbe9c2bbfe0228"],
  ),
  38 => 
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
      4 => 
      array (
        'format_items_id' => '887',
        'key' => 'redis_6378.set_time',
        'unit' => 'ms',
        'desc' => 'set时间',
        'graphic' => true,
        'triggerId' => '',
      ),
      5 => 
      array (
        'format_items_id' => '888',
        'key' => 'redis_6378.get_time',
        'unit' => 'ms',
        'desc' => 'get时间',
        'graphic' => true,
        'triggerId' => '',
      ),
      6 => 
      array (
        'format_items_id' => '899',
        'key' => 'redis_6378.connect_num',
        'unit' => '个/分',
        'desc' => '连接数',
        'graphic' => true,
        'triggerId' => '',
      ),
      7 => 
      array (
        'format_items_id' => '900',
        'key' => 'redis_6378.process_num',
        'unit' => '个/分',
        'desc' => '操作数',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["2bc3b42dbce6010f186af66004d68aff"],
  ),
  39 => 
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
      4 => 
      array (
        'format_items_id' => '889',
        'key' => 'redis_6381.set_time',
        'unit' => 'ms',
        'desc' => 'set时间',
        'graphic' => true,
        'triggerId' => '',
      ),
      5 => 
      array (
        'format_items_id' => '890',
        'key' => 'redis_6381.get_time',
        'unit' => 'ms',
        'desc' => 'get时间',
        'graphic' => true,
        'triggerId' => '',
      ),
      6 => 
      array (
        'format_items_id' => '901',
        'key' => 'redis_6381.connect_num',
        'unit' => '个/分',
        'desc' => '连接数',
        'graphic' => true,
        'triggerId' => '',
      ),
      7 => 
      array (
        'format_items_id' => '902',
        'key' => 'redis_6381.process_num',
        'unit' => '个/分',
        'desc' => '操作数',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["06daa9efc1b046893fdd4cf05995c626"],
  ),
  40 => 
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
      4 => 
      array (
        'format_items_id' => '891',
        'key' => 'redis_6376.set_time',
        'unit' => 'ms',
        'desc' => 'set时间',
        'graphic' => true,
        'triggerId' => '',
      ),
      5 => 
      array (
        'format_items_id' => '892',
        'key' => 'redis_6376.get_time',
        'unit' => 'ms',
        'desc' => 'get时间',
        'graphic' => true,
        'triggerId' => '',
      ),
      6 => 
      array (
        'format_items_id' => '903',
        'key' => 'redis_6376.connect_num',
        'unit' => '个/分',
        'desc' => '连接数',
        'graphic' => true,
        'triggerId' => '',
      ),
      7 => 
      array (
        'format_items_id' => '904',
        'key' => 'redis_6376.process_num',
        'unit' => '个/分',
        'desc' => '操作数',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["a16be402b7439837fd3f4835ff5250ff"],
  ),
  41 => 
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
  42 => 
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
    'host_list' => $host_list["f5ecff84b1b50aff363e853817101d34"],
  ),
  43 => 
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
  44 => 
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
      7 => 
      array (
        'format_items_id' => '877',
        'key' => 'mc_15110.evictions',
        'unit' => '个',
        'desc' => 'evictions',
        'graphic' => true,
        'triggerId' => '',
      ),
      8 => 
      array (
        'format_items_id' => '1591',
        'key' => 'mc_15110.cons',
        'unit' => '次',
        'desc' => '连接数',
        'graphic' => true,
        'triggerId' => '',
      ),
      9 => 
      array (
        'format_items_id' => '1619',
        'key' => 'mc_15110.pevic',
        'unit' => '%',
        'desc' => '剔除率',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["ea99dc2b95c22dee53db94775a1b276b"],
  ),
  45 => 
  array (
    'type' => 'service',
    'field_type' => '1',
    'task_desc' => 'mysql_3306',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mysql_3306',
    'task_interval' => '60',
    'host_list' => $host_list["819862343dbb4399560214e296636d7d"],
  ),
  46 => 
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
  47 => 
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
  48 => 
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
  49 => 
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
  50 => 
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
  51 => 
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
  52 => 
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
    'host_list' => $host_list["1e6d412b8247c1f22d246ee993087deb"],
  ),
  53 => 
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
  54 => 
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
  55 => 
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
  56 => 
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
  57 => 
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
  58 => 
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
  59 => 
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
  60 => 
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
  61 => 
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
  62 => 
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
  63 => 
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
  64 => 
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
  65 => 
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
  66 => 
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
  67 => 
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
  68 => 
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
  69 => 
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
  70 => 
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
  71 => 
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
  72 => 
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
  73 => 
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
  74 => 
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
  75 => 
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
  76 => 
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
  77 => 
  array (
    'type' => 'service',
    'field_type' => '1',
    'task_desc' => 'mysql_3833',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mysql_3833',
    'task_interval' => '60',
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  78 => 
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
  79 => 
  array (
    'type' => 'system',
    'field_type' => '1',
    'task_desc' => 'iostat信息',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'iostatinfo',
    'task_interval' => '60',
    'host_list' => $host_list["b11b1d14484cd719af1962a1e67faa38"],
  ),
  80 => 
  array (
    'type' => 'system',
    'field_type' => '1',
    'task_desc' => '磁盘使用',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'diskspace',
    'task_interval' => '60',
    'host_list' => $host_list["eaeb3a199738ba15427e883613a85607"],
  ),
  81 => 
  array (
    'type' => 'service',
    'field_type' => '0',
    'task_desc' => 'web日志分析',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'webreqnum',
    'task_interval' => '60',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '739',
        'key' => 'webreqnum.httpnum',
        'unit' => '个',
        'desc' => 'http连接数',
        'graphic' => true,
        'triggerId' => '',
      ),
      2 => 
      array (
        'format_items_id' => '740',
        'key' => 'webreqnum.flow',
        'unit' => 'kByte',
        'desc' => '请求流量',
        'graphic' => true,
        'triggerId' => '',
      ),
      3 => 
      array (
        'format_items_id' => '750',
        'key' => 'webreqnum.slow_req_count',
        'unit' => '个',
        'desc' => '慢请求数',
        'graphic' => true,
        'triggerId' => '',
      ),
      4 => 
      array (
        'format_items_id' => '751',
        'key' => 'webreqnum.avg_req_count',
        'unit' => 's',
        'desc' => '平均请求时长',
        'graphic' => true,
        'triggerId' => '',
      ),
      5 => 
      array (
        'format_items_id' => '752',
        'key' => 'webreqnum.error_req_count',
        'unit' => '个/分钟',
        'desc' => '服务端错误',
        'graphic' => true,
        'triggerId' => '',
      ),
      6 => 
      array (
        'format_items_id' => '907',
        'key' => 'webreqnum.cerr_count',
        'unit' => '个/分钟',
        'desc' => '客户端错误',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["39fb56d6c1c74cf7e95c5dc12e045bad"],
  ),
  82 => 
  array (
    'type' => 'service',
    'field_type' => '0',
    'task_desc' => 'mc_15120',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'mc_15120',
    'task_interval' => '60',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '741',
        'key' => 'mc_15120.use_rate',
        'unit' => '%',
        'desc' => 'MC使用率',
        'graphic' => true,
        'triggerId' => '',
      ),
      2 => 
      array (
        'format_items_id' => '742',
        'key' => 'mc_15120.hit_rate',
        'unit' => '%',
        'desc' => 'MC命中率',
        'graphic' => true,
        'triggerId' => '',
      ),
      3 => 
      array (
        'format_items_id' => '743',
        'key' => 'mc_15120.set_rate',
        'unit' => 'count/s',
        'desc' => 'SET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      4 => 
      array (
        'format_items_id' => '744',
        'key' => 'mc_15120.get_rate',
        'unit' => 'count/s',
        'desc' => 'GET速率',
        'graphic' => true,
        'triggerId' => '',
      ),
      5 => 
      array (
        'format_items_id' => '745',
        'key' => 'mc_15120.set_time',
        'unit' => 'ms',
        'desc' => 'SET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
      6 => 
      array (
        'format_items_id' => '746',
        'key' => 'mc_15120.get_time',
        'unit' => 'ms',
        'desc' => 'GET时间',
        'graphic' => true,
        'triggerId' => '',
      ),
      7 => 
      array (
        'format_items_id' => '878',
        'key' => 'mc_15120.evictions',
        'unit' => '个',
        'desc' => 'evictions',
        'graphic' => true,
        'triggerId' => '',
      ),
      8 => 
      array (
        'format_items_id' => '1592',
        'key' => 'mc_15120.cons',
        'unit' => '次',
        'desc' => '连接数',
        'graphic' => true,
        'triggerId' => '',
      ),
      9 => 
      array (
        'format_items_id' => '1620',
        'key' => 'mc_15120.pevic',
        'unit' => '%',
        'desc' => '剔除率',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["016f68d8597f77d7ceaee3213cca5961"],
  ),
  83 => 
  array (
    'type' => 'realtime',
    'field_type' => '0',
    'task_desc' => 'vkey信息获取',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'vkeyinfo',
    'task_interval' => '0',
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  84 => 
  array (
    'type' => 'realtime',
    'field_type' => '0',
    'task_desc' => '远程目录rsync',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'release_trans_remote',
    'task_interval' => '0',
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  85 => 
  array (
    'type' => 'realtime',
    'field_type' => '0',
    'task_desc' => '批操作测试',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'muti-test',
    'task_interval' => '0',
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  86 => 
  array (
    'type' => 'realtime',
    'field_type' => '0',
    'task_desc' => '重启DNS服务',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'multi-reload-dns',
    'task_interval' => '0',
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  87 => 
  array (
    'type' => 'realtime',
    'field_type' => '0',
    'task_desc' => 'nginx重启',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'multi-relead-nginx',
    'task_interval' => '0',
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  88 => 
  array (
    'type' => 'realtime',
    'field_type' => '0',
    'task_desc' => '重启php(清除cache)',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'apollo_phpfpm_restart_clearcache',
    'task_interval' => '0',
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  89 => 
  array (
    'type' => 'realtime',
    'field_type' => '0',
    'task_desc' => '重启php(不清缓存)',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'apollo_phpfpm_restart_unclearcache',
    'task_interval' => '0',
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  90 => 
  array (
    'type' => 'realtime',
    'field_type' => '0',
    'task_desc' => 'cron脚本程序测试',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'cron_test',
    'task_interval' => '0',
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  91 => 
  array (
    'type' => 'realtime',
    'field_type' => '0',
    'task_desc' => '批操作自定义',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'multi-custom',
    'task_interval' => '0',
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  92 => 
  array (
    'type' => 'service',
    'field_type' => '1',
    'task_desc' => 'LVS状态信息',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'checkLvsStatus',
    'task_interval' => '60',
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  93 => 
  array (
    'type' => 'realtime',
    'field_type' => '0',
    'task_desc' => 'apollo环境校验',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'apolloenvironmentcheck',
    'task_interval' => '0',
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
  94 => 
  array (
    'type' => 'cron',
    'field_type' => '1',
    'task_desc' => '检查线上非www文件',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'check_uwww_files',
    'task_time_specify' => '2:37',
    'host_list' => $host_list["5e79eb5ac3bf8f5f6f2e78768c864d55"],
  ),
  95 => 
  array (
    'type' => 'system',
    'field_type' => '0',
    'task_desc' => '主机名',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'hostname',
    'task_interval' => '60',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '999',
        'key' => 'hostname.hostname',
        'unit' => '',
        'desc' => '主机名',
        'graphic' => true,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["dc18856471d08d923e9a728097dc3836"],
  ),
  96 => 
  array (
    'type' => 'service',
    'field_type' => '1',
    'task_desc' => '检查ct各进程状况',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'check_ct_use',
    'task_interval' => '60',
    'host_list' => $host_list["f25482f08de1d6e90ae116635530066c"],
  ),
  97 => 
  array (
    'type' => 'system',
    'field_type' => '1',
    'task_desc' => '检查自启动',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'check_rc_local',
    'task_interval' => '60',
    'host_list' => $host_list["dc18856471d08d923e9a728097dc3836"],
  ),
  98 => 
  array (
    'type' => 'system',
    'field_type' => '1',
    'task_desc' => '网卡流量',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'inter_io',
    'task_interval' => '60',
    'host_list' => $host_list["ff8adc15098b12e244ab7e366b2b5243"],
  ),
  99 => 
  array (
    'type' => 'service',
    'field_type' => '0',
    'task_desc' => 'check_ct_zombie',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'check_ct_zombie',
    'task_interval' => '60',
    'format' => 
    array (
      1 => 
      array (
        'format_items_id' => '2253',
        'key' => 'check_ct_zombie.z_nums',
        'unit' => '个',
        'desc' => 'z_nums',
        'graphic' => false,
        'triggerId' => '',
      ),
    ),
    'host_list' => $host_list["f25482f08de1d6e90ae116635530066c"],
  ),
  100 => 
  array (
    'type' => 'realtime',
    'field_type' => '0',
    'task_desc' => 'web前端环境init',
    'unit' => NULL,
    'switch' => true,
    'local_log' => true,
    'task_name' => 'rsync_release_files',
    'task_interval' => '0',
    'host_list' => $host_list["d751713988987e9331980363e24189ce"],
  ),
) ?>