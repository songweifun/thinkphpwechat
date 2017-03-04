<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 17/2/25
 * Time: 下午1:13
 */

namespace Addons;


use houdunwang\wechat\WeChat;

class BaseProcessor//与微信对接的基类
{
    protected $message;//sdk中消息处理类message

    public function __construct()
    {
        $this->message=(new WeChat())->instance('message');//实例化出sdk中消息处理类message的一个实例
    }


}