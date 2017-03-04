<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 17/2/23
 * Time: 下午8:02
 */
namespace Addons;
use Common\Controller\BaseController;
use Think\Controller;

class Module extends BaseController{
    protected $template;//扩张的模板目录
    public function __construct()
    {
        parent::__construct();
        $this->template='Addons/'.MODULE.'/View';
    }


    //重写框架的display方法 定义为make
    public function make($name=''){
        //为了具有通用性在App_Begin行为扩展中定义一个MODULE常量
        $name=$name?$name:$_GET['ac'];
        $tpl='Addons/'.MODULE.'/View/'.$name.'.html';
        parent::display($tpl);

    }

}