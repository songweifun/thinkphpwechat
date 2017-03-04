<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 17/2/23
 * Time: 下午8:06
 */

namespace Module\Controller;


use Common\Controller\BaseController;

class EntryController extends BaseController
{
    public function handler(){
        $module=ucfirst($_GET['mo']);
        switch (ucfirst($_GET['t'])){
            case 'Site':
                $this->assignModuleMenu();//分配后台菜单前台就不需要
                $class='Addons\\'.$module.'\Site';
                //echo ($class);
                break;
            case 'Web':
                $class='Addons\\'.$module.'\Web';

                break;
        }


        call_user_func_array([new $class,$_GET['ac']],[]);

    }

}