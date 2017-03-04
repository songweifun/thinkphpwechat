<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 17/2/23
 * Time: 下午6:01
 */

namespace Common\Controller;


use Common\Model\ModulesModel;
use Think\Controller;

class BaseController extends Controller
{
    //保存数据
    protected function store(Model $model,$data,\Closure $callback=null){
        $res=$model->store($data);
        if($res['status']=='success' && $callback instanceof \Closure){
            $callback($res);//把$res作为参数传入闭包函数执行 为model中store函数传回的数据
        }else{
            $this->message($res);
        }

    }

    //提示信息
    protected function message(array $res){
        if($res['status']=="success"){
            $this->success($res['message']);
        }else{
            $this->error($res['message']);
        }
        exit;
    }


    //分配菜单

    protected function assignModuleMenu(){
        $model=new ModulesModel();
        $modules=$model->select();
        foreach ($modules as $k=>$v){//对action解码
            $modules[$k]['actions']=json_decode($v['actions'],true);
        }

        $this->assign("_modules",$modules);//带下划线_的变量禁止其他一般控制器使用,为系统独有
        //dd($modules);exit;
    }

}