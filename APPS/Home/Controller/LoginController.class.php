<?php 
namespace Home\Controller;
use Think\Controller;

class LoginController extends Controller{
	public function index(){
		$this -> display();
	}

	public function logout(){
		session(null);
		session("[destroy]");
		cookie(null);
		$this -> success("成功退出！","index",1);
	}

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
}

 ?>