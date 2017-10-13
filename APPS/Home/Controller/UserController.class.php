<?php 
namespace Home\Controller;
use Think\Controller;

class UserController extends CommonController{
	public function index(){
		$user = D("User");
		$count = $user -> count();
		$page = new \Think\Page($count,2);
		//设置分页类的bootstrap样式
		$page->setConfig('theme', '<li><a>共 %TOTAL_ROW% 条记录</a></li> <li>%UP_PAGE%</li> <li>%LINK_PAGE%</li>  <li>%DOWN_PAGE%</li>');
		$show = $page -> show();
		$list = $user -> relation(true) -> order('id') -> limit($page->firstRow.','.$page->listRows) -> select();
		//输出
		$this -> userList = $list;
		$this -> page = $show;

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
