<?php 
namespace Home\Controller;
use Think\Controller;

class UserController extends Controller{
	public function index(){
		//判断登录
		if(session("?login")){
			$this -> display();
		}else{
			$this -> redirect("Login/index");
		}
		
	}

	public function show(){
		$user = D("User");

		$rows = $user ->relation(true) -> select();
		echo "<pre>";
		print_r($rows);
		echo "</pre>";
	}

}

 ?>
