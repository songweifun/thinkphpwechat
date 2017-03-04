<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 17/2/23
 * Time: 下午4:29
 */

namespace Common\Behaviors;


use Common\Model\ConfigModel;
use houdunwang\wechat\WeChat;
use Think\Behavior;

class AppBeginBehavior extends Behavior{
    //行为执行入口
    public function run(&$param){
        $this->loadConfig();
        $this->weChat();//实例化微信
    }

    /**
     * 加载配置文件
     */
    protected function loadConfig(){
        $config=(new ConfigModel())->find(1);
        $config['system']=json_decode($config['system'],true);
        $config['wechat']=json_decode($config['wechat'],true);
        c('system',$config['system']);
        c('wechat',$config['wechat']);
        define("MODULE",ucfirst(I('get.mo',null)));


        //dd($config);exit;

    }
    protected function weChat(){
        //echo 1111;

        $config = [
            //微信首页验证时使用的token http://mp.weixin.qq.com/wiki/8/f9a0b8382e0b77d87b3bcc1ce6fbc104.html
            "token"          => v("config.wechat.token"),
            //公众号身份标识
            "appid"          => v("config.wechat.appid"),
            //公众平台API(参考文档API 接口部分)的权限获取所需密钥Key
            "appsecret"      => v("config.wechat.appsecret"),

        ];
        //dd($config);
        new WeChat($config);

    }
}
