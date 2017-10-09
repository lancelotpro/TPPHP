<?php 
namespace Home\Model;
use Think\Model\RelationModel;
class UserModel extends RelationModel{
	protected $_link = array(
		'Dept' => array(
			'mapping_type' => self::BELONGS_TO,
			'class_name' => 'Dept',
			'foreign_key' => 'dept_id',
			'mapping_name' => 'dept',
			//可选定义
			'mapping_fields' => 'deptname',
			'as_fields' => 'deptname'
		),

		'Profiles' => array(
			'mapping_type' => self::HAS_ONE,
			'class_name' => 'Profiles',
			'foreign_key' => 'user_id',
			'mapping_name' => 'profiles'
		),

		//多对多
		'Grp' => array(
			'mapping_type' => self::MANY_TO_MANY,
			'class_name' => 'Grp',
			'mapping_name' => 'groups',
			'foreign_key' => 'user_id',
			'relation_foreign_key' => 'group_id',
			'relation_table' => 'user_grp'
		),
	);
}

 ?>