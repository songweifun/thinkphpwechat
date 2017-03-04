<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 17/2/23
 * Time: 下午1:06
 */

namespace Common\Model;


use Think\Model;

class BaseModel extends Model
{
    /**
     * 保存数据
     * @param $data
     */
    public function store($data){
        if($this->create($data)){
            $action=isset($data[$this->pk])?"save":"add";
            $res=$this->$action($data);
            return ["status"=>"success","message"=>"保存成功!","data"=>$res];
        }

        return ["status"=>"failed","message"=>$this->getError()];

    }

}