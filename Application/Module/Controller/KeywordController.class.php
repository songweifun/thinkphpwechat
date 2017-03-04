<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 17/2/25
 * Time: 下午4:19
 */

namespace Module\Controller;


use Common\Controller\AdminController;
use Common\Model\KeywordsModel;

class KeywordController extends AdminController
{
    protected $module;
    public function _initialize()
    {
        $class = 'Addons\\' . ucfirst(I('get.mo')) . '\keyword';
        $this->module=new $class;
    }

    /**
     * 关键词列表
     */
    public function lists(){
        $model=new KeywordsModel();
        $modules=$model->where(['module'=>MODULE])->select();
        //$modules=current($modules);
        //dd($modules);exit;
        $this->assign("modules",$modules);
        $this->display();

    }

    /**
     * 关键词设置
     */
    public function set(){
        //获得模块的实例

        $model=new KeywordsModel();
        $rid=I('get.rid');

        if(IS_POST){

            $data=I('post.');
            $data['module']=I('get.mo');
            if($rid){
                $data['rid']=$rid;
            }
            $this->store($model,$data,function ($res){//闭包函数中不能使用外部的变量要定义到全局
                $rid=I('get.rid')?I('get.rid'):$res['data'];
                //dd(I('post.content'));exit;
                $this->module->submit($rid);

            });
        }

        //读取编辑的数据
        if(I('get.rid')){
            $field=$model->find($rid);
            $this->assign('field',$field);
            //从模块获得回复内容
        }

        $moduleContent = $this->module->form($rid);
        $this->assign('moduleContent',$moduleContent);


        $this->display();
    }

}