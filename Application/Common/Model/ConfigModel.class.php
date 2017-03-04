<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 17/2/23
 * Time: 下午1:07
 */

namespace Common\Model;


class ConfigModel extends BaseModel
{
    protected $pk='id';
    protected $tableName='config';
    protected $_validate = array(
        array('system','require','配置不能為空！'), //默认情况下用正则进行验证
        array('wechat','require','公众号配置不能为空！'), //默认情况下用正则进行验证

    );

    /**
     * 保存数据
     * @param $data
     */
    public function store($data){
        $data['id']=1;
        return parent::store($data);

    }

}