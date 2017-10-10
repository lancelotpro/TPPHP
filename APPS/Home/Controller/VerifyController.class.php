<?php 
namespace Home\Controller;

use Think\Controller;
use Think\Verify;

class VerifyController extends Controller{

	//生成验证码
	public function create_verify(){
		$verify = new Verify();
		$verify -> entry();
	}

	//验证码校验
	public function check_verify($code ,$id = ''){
		$verify = new \Think\Verify();
		return $verify -> check($code ,$id);
	}
}


 ?>