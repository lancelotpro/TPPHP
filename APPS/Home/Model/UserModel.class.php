<?php 
namespace Home\Model;
use Think\Model\RelationModel;
class UserModel extends RelationModel{

	//关联模型
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
	);

	//自动验证
	protected $_validate = array(
		array('username','require',"用户名不能为空!",1),
		array('username','',"账户已经存在!",0,'unique',1),
		array('password','require',"密码不能为空!"),
		array('verify_code','require',"验证码不能为空!"),
		array('password2','password',"确认密码不一致!",0,'confirm'),
		array('verify_code','checkVerifyCode',"验证码不对!",2,'callback'),
	);

	protected function checkVerifyCode($verify_code, $id = ''){
		$verify = new \Think\Verify();
		return $verify -> check($verify_code,$id);
	}
}

 ?>