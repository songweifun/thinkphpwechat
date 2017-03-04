<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 17/2/23
 * Time: 上午11:34
 */

namespace Common\Controller;


use Think\Model;

class AdminController extends BaseController
{

    public function __construct()
    {
        parent::__construct();
        $this->assignModuleMenu();
    }




}