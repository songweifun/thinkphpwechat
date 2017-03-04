<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 17/2/25
 * Time: 下午1:12
 * 固定名称类,用于与微信处理模块对接
 */

namespace Addons\Text;


use Addons\Base\Model\BaseSystemModel;
use Addons\BaseProcessor;
use Addons\Text\Model\TextContentModel;

class Processor extends BaseProcessor
{

    public function handler($rid){//标准方法
        $model=new TextContentModel();
        $content=$model->where(['rid'=>$rid])->find();
        $this->message->text($content['content']);


    }

}