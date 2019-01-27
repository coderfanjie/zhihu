<?php
/**
 * https://gitee.com/Mao02
 * http://www.dazhetu.cn/
 * jay_fun 410136330@qq.com
 * Date: 2019/1/27
 * Time: 11:08
 */

use Server\CoreBase\PortManager;

$config['ports'][] = [
    'socket_type' => PortManager::SOCK_HTTP,
    'socket_name' => '0.0.0.0',
    'socket_port' => 80,
    'route_tool' => 'NormalRoute',
    'middlewares' => ['MonitorMiddleware', 'NormalHttpMiddleware'],
    'method_prefix' => 'http_'
];
return $config;