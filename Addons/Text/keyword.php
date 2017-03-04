<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 17/2/25
 * Time: 下午6:01
 */

namespace Addons\Text;


use Addons\Module;
use Addons\Text\Model\TextContentModel;

/**
 * 关键词处理类
 * Class keyword
 * @package Addons\Text
 */
class keyword extends Module
{

    //关键词的界面 要在创建目录的时候创建此页面
    public function form($rid=0){
        if($rid){
            $field=(new TextContentModel())->where(['rid'=>$rid])->select();
            $this->assign('content',current($field));
        }
        return $content = $this->fetch($this->template.'/form.html');//$this->template在module类中定义
    }

    public function submit($rid){
        $model=new TextContentModel();
        $data['rid']=$rid;
        $data['content']=I('post.content');//post数据通过闭包传递过来的
        if($id=$model->where(['rid'=>$rid])->getField('id')){
            $data['id']=$id;//如果通过rid可以查到id则是更新,向data里添加主键store方法自动识别为更新

        }

        $this->store($model,$data,function (){
            $this->success("保存成功!",U('Module/Keyword/lists',["mo"=>"Text"]));
            exit;
        });

    }


}