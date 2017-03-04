<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 17/2/25
 * Time: 下午6:01
 */

namespace Addons\Button;


use Addons\Module;

/**
 * 关键词处理类
 * Class keyword
 * @package Addons\Text
 */
class keyword extends Module
{
    //关键词的界面 要在创建目录的时候创建此页面
    public function form(){
        return $content = $this->fetch($this->template.'/form.html');//$this->template在module类中定义
    }


}