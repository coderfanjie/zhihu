<?php
/**
 * https://gitee.com/Mao02
 * http://www.dazhetu.cn/
 * jay_fun 410136330@qq.com
 * Date: 2019/1/27
 * Time: 11:28
 */

namespace app\Controllers;

use Server\CoreBase\Controller;

class AppController extends Controller
{
    public $AppModel;

    protected function initialization($controller_name, $method_name)
    {
        var_dump($controller_name,$method_name);
    }
}