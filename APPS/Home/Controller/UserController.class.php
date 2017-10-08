<?php 
namespace Home\Controller;
use Think\Controller;

class UserController extends Controller{
	public function index(){
		$this -> a = 123;
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
