<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 17/2/25
 * Time: 下午7:04
 */

namespace Addons\Text\Model;


use Common\Model\BaseModel;

class TextContentModel extends BaseModel
{
    protected $pk='id';
    protected $tableName='text_content';
    protected $_validate=
        [
           ['content','require','回复内容不能为空！'],
           ['rid','require','关键词关联id不能为空！'],
        ];

}