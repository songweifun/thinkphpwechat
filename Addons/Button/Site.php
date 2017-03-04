<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 17/2/23
 * Time: 下午7:55
 * 后台管理类
 */
namespace Addons\Button;
use Addons\Button\Model\ButtonDataModel;
use Addons\Module;
use houdunwang\wechat\WeChat;

class Site extends Module{
    /**
     * 菜单设置
     */
    public function set(){
        $id=I('get.id');
        $data=I('post.');
        $model=new ButtonDataModel();
        if (IS_POST){
            if($id){
                $data['id']=$id;
                $data['status']=0;
            }
            $this->store($model,$data,function (){
                $this->success("保存成功!",site_url("button.lists"));exit;
            });
        }
        if($id){
            $field=$model->find($id);

        }else{
            $field=['title'=>'','data'=>'{button:[]}'];
        }
        $this->assign('field',$field);

        $this->make();

    }

    /**
     * 菜单列表
     */
    public function lists(){
        $model=new ButtonDataModel();
        $buttons=$model->select();
        $this->assign('buttons',$buttons);
        $this->make();

    }

    /**
     * 推送菜单
     */
    public function push(){
        $id=I('get.id');
        $model=new ButtonDataModel();
        $data=$model->find($id);
        $weChat=new WeChat();
        $d= $weChat->instance('button')->create($data['data']);
        if($d['errmsg']=='ok'){
            $model->where(['id'=>$id])->setField('status',1);
            $model->where('id  <>'.$id)->setField('status',0);
            $this->success('推送成功!',site_url('button.lists'));
        }

    }
}