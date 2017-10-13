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

	public function uploadImg(){
		$upload = new \Think\Upload();// 实例化上传类
		$upload->maxSize = 3145728 ;// 设置附件上传大小
		$upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->rootPath = './Uploads/'; // 设置附件上传根目录
		$upload->savePath = 'img/'; // 设置附件上传（子）目录
		// 上传文件
		$info = $upload->upload();
		if(!$info) {// 上传错误提示错误信息
		$this->error($upload->getError());
		}else{// 上传成功
		$this->success('上传成功！');
		}
	}
	
	public function upload(){
		$this -> display();
	}

}

 ?>
