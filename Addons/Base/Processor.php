<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 17/2/25
 * Time: 下午1:12
 * 固定名称类,用于与微信处理模块对接
 */

namespace Addons\Base;


use Addons\Base\Model\BaseSystemModel;
use Addons\BaseProcessor;

class Processor extends BaseProcessor
{

    public function handler(){//标准方法
        $baseSystemModel=new BaseSystemModel();
        $fields=$baseSystemModel->find(1);//查出系统恢复数据
        //判断是否是关注事件
        if ($this->message->isSubscribeEvent())
        {
            //向用户回复消息
            $this->message->text($fields['welcome']);//关注时恢复内容
        }
        //关注用户扫描二维码事件
        if ($this->message->isTextMsg())
        {
            //向用户回复消息
            $this->message->text($fields['default']);//默认恢复的内容
        }

    }

}