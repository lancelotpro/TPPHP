<?php 
namespace Home\Controller;
use Think\Controller;

class CommonController extends Controller{
	public function _initialize(){
		//判断登录
		if(!session("?login")){
			$this -> redirect("Login/index");
			exit;
		}
	}
}



 ?>