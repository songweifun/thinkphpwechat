<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 17/2/23
 * Time: 下午6:25
 */

namespace Wechat\Controller;


use Common\Controller\BaseController;
use Common\Model\KeywordsModel;
use houdunwang\wechat\WeChat;

class ApiController extends BaseController
{
    public function _initialize(){
        //此类已经在行为扩张里加载了基本配置项
        (new WeChat())->valid();//验证
    }

    /**
     * 微信统一入口
     */
    public function handler(){
        //消息管理模块 被动的
        $instance = (new WeChat())->instance('message');
        //关键词回复
        if ($instance->isTextMsg())
        {
            $content=$instance->getMessage();
            $model=new KeywordsModel();
            if($data=$model->where(['keyword'=>"{$content->Content}"])->find()){
                $this->callModule($data['module'],$data['rid']);
            }
        }

        //点击菜单中的关键词事件
        if ($instance->isClickEvent())
        {
            $content=$instance->getMessage();
            $model=new KeywordsModel();
            if($data=$model->where(['keyword'=>"{$content->EventKey}"])->find()){
                $this->callModule($data['module'],$data['rid']);
            }

        }

        //调用相应的模块处理
        $this->callModule('base');


    }
    //实现在扩张模块中处理微信
    public function callModule($module,$rid=0){
        $class='\Addons\\'.ucfirst($module).'\Processor';
        call_user_func_array([new $class,'handler'],['rid'=>$rid]);//以参数【】执行$class 方法handler 实现在扩张模块中处理微信

    }

}