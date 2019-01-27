<?php
/**
 * https://gitee.com/Mao02
 * http://www.dazhetu.cn/
 * jay_fun 410136330@qq.com
 * Date: 2019/1/27
 * Time: 11:16
 */

namespace app;

use Server\CoreBase\HttpInput;
use Server\CoreBase\Loader;
use Server\SwooleDistributedServer;

class AppServer extends SwooleDistributedServer
{
    public function __construct()
    {
        $this->setLoader(new Loader());
        parent::__construct();
    }

    public function getEventControllerName()
    {
        return 'AppController';
    }

    public function getConnectMethodName(){
        return 'onConnect';
    }

    public function getCloseMethodName()
    {
        return 'onClose';
    }

    /**
     * 可以在这验证WebSocket连接,return true代表可以握手，false代表拒绝
     * @param HttpInput $httpInput
     * @return bool
     */
    public function onWebSocketHandCheck(HttpInput $httpInput)
    {
        return true;
    }

    /**
     * 开服初始化(支持协程)
     * @return mixed
     */
    public function onOpenServiceInitialization()
    {
        parent::onOpenServiceInitialization();
    }
}