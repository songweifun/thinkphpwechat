<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 17/2/23
 * Time: 下午7:55
 */
namespace Addons\Base;
use Addons\Base\Model\BaseSystemModel;
use Addons\Module;

class Site extends Module{
    public function system(){
        $model=new BaseSystemModel();
        if(IS_POST){
            $this->store($model,I('post.'));
        }

        //查询出数据
        $system=$model->find(1);
        $this->assign('system',$system);

        $this->make();

    }


}