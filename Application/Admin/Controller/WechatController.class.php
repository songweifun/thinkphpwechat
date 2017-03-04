<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 17/2/23
 * Time: 下午2:21
 */

namespace Admin\Controller;


use Common\Controller\AdminController;
use Common\Model\ConfigModel;

class WechatController extends AdminController
{
    /**
     * 公众号配置
     */
    public function set(){
        if(IS_POST){
            $this->store(new ConfigModel(),I('post.'),function ($res){
                print_r($res);
            });

        }
        $field=(new ConfigModel())->find(1);
        $this->assign('field',$field);
        $this->display();
    }

}