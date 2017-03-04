<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 17/2/24
 * Time: 下午4:07
 */

namespace Common\Model;


class ModulesModel extends BaseModel
{
    protected $pk='id';
    protected $tableName='modules';
    protected $_validate = array(
        array('title','require','模块名称不能为空！'), //默认情况下用正则进行验证
        array('name','require','模块表示不能为空！'), //默认情况下用正则进行验证
        array('actions','require','模块动作不能为空！'), //默认情况下用正则进行验证
    );

}