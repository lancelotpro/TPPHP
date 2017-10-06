<?php 
namespace Home\Controller;
use Think\Controller;

class UserController extends Controller{
	public function index(){
		$this -> a = 123;
		$this -> display();
	}
}

 ?>
