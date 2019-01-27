<?php
/**
 * https://gitee.com/Mao02
 * http://www.dazhetu.cn/
 * jay_fun 410136330@qq.com
 * Date: 2019/1/27
 * Time: 11:08
 */

//强制关闭gzip
$config['http']['gzip_off'] = false;

//默认访问的页面
$config['http']['index'] = 'index.html';

/**
 * 设置域名和Root之间的映射关系
 */

$config['http']['root'] = [
    'default' =>
        [
            'index' => ['TestController', 'test'] //转到控制器
        ]
    ,
    'localhost' =>
        [
            'root' => 'www',
            'index' => 'Index.html'             //转到指定页面
        ]
];

return $config;