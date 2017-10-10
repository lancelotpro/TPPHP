<?php 
namespace Home\Controller;
use Think\Controller;

class UserController extends CommonController{
	public function index(){
		$this -> display();
		
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
