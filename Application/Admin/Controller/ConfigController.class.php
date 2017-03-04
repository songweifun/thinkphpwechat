<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 17/2/23
 * Time: 上午11:35
 */

namespace Admin\Controller;


use Common\Controller\AdminController;
use Common\Model\ConfigModel;

class ConfigController extends AdminController
{

    /**
     * 网站配置
     */
    public function set(){
        if(IS_POST){
            $this->store(new ConfigModel(),I('post.'),function (){
                echo "configController";
            });

        }
        $field=(new ConfigModel())->find(1);
        $this->assign('field',$field);
        $this->display();
    }

}