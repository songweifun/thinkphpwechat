<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 17/2/25
 * Time: 下午5:22
 */

namespace Common\Model;


class KeywordsModel extends BaseModel
{
    protected $pk='rid';//isset($data[$this->pk])
    protected $name='keywords';
    protected $_validate=[//默认会自动用pos数据建立数据对象 所以有时候要设为当存在是验证 1
        array('keyword','require','关键词不能为空！',1),//1必须验证
        array('keyword','','关键词已经存在！',0,'unique',1), // 在新增的时候验证name字段是否唯一

        array('module','require','模块标识不能为空！',1),

    ];


}