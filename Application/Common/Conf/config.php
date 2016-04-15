<?php
return array(
    // '配置项'=>'配置值'
    'DB_TYPE' => 'mysql', // 数据库类型
    'DB_HOST' => '127.0.0.1',
    'DB_NAME' => 'showdoc',
    'DB_USER' => 'root',
    'DB_PWD' => '123456',
    'DB_PORT' => 3306, // 端口
    'DB_PREFIX' => '', // 数据库表前缀
    'DB_CHARSET' => 'utf8', // 字符集
    'DB_DEBUG' => TRUE, // 数据库调试模式 开启后可以记录SQL日志
    "URL_HTML_SUFFIX" => '', // url伪静态后缀
    'URL_ROUTER_ON' => false,
    'URL_ROUTE_RULES' => array(
        ':id\d' => 'Home/Item/Show?item_id=:1',
        'uid/:id\d' => 'Home/Item/showByUid?uid=:1'
    ),
    'DEFAULT_CONTROLLER'    =>  'Item', // 默认控制器名称
    'URL_CASE_INSENSITIVE' => false,
    'URL_MODEL' => 0
);
