<?php 
namespace Home\Controller;
use Think\Controller;

class LoginController extends Controller{

	//登录
	public function index(){
		$this -> display();
	}

	//登出
	public function logout(){
		session(null);
		session("[destroy]");
		cookie(null);
		$this -> success("成功退出！","index",1);
	}


	//验证登录
	public function check(){
		$user = M("User");
		$rows = $user-> where($_POST) -> find();
		if($rows){
			session("username",$_POST['username']);
			session("login",1);
			$this -> success("登录成功！",U("User/index"),1);
		}else{
			$this -> error("登录失败，错误的用户名或密码","index",1);
		}
	}

	//注册
	public function reg(){
		$this -> display();
	}


	//验证码
	public function verify(){
		$verify = new \Think\Verify();
		$verify -> entry();
	}

	//创建新用户
	public function insertNewUser(){
		//用户输入的验证码
		$verify_code = $_POST["verify_code"];
		//校验
		$verify = new \Think\Verify();
		if($verify -> check($verify_code)){
			echo "验证码正确";
		}else{
			echo "验证码错误";
		}
	}

	//Ajax校验验证码
	public function verifyAjax($code, $id = ''){
		$verify = new \Think\Verify();
		$result = $verify -> check($code, $id);
		return $this -> ajaxReturn($result, 'json');
	}
}

 ?>