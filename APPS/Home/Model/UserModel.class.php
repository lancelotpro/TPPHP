<?php 
namespace Home\Model;
use Think\Model\RelationModel;
class UserModel extends RelationModel{
	protected $_link = array(
		'Dept' => array(
			'mapping_type' => self::BELONGS_TO,
			'class_name' => 'Dept',
			'foreign_key' => 'dept_id',
			'mapping_name' => 'dept'
		),
	);
}

 ?>