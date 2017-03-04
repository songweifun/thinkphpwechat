<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 17/2/24
 * Time: 下午9:03
 */

namespace Addons\Base\Model;


use Common\Model\BaseModel;

class BaseSystemModel extends BaseModel
{
    protected $pk="id";
    protected $tableName="base_system";

    /**
     * 保存数据
     * @param $data
     */
    public function store($data){
        $data['id']=1;
        return parent::store($data);

    }

}