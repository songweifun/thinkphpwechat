<?php
namespace Admin\Controller;
use Common\Controller\AdminController;
use Think\Controller;
class IndexController extends AdminController {
    public function index(){
        //(new \Addons\Article\Site())->show();
        $this->display();
        //(new \Addons\Demo\Web())->show();
    }
}