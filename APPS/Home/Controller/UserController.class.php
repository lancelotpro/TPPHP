<?php 
namespace Home\Controller;
use Think\Controller;

class UserController extends Controller{

	//查看用户
	public function index(){
		$user = M('User');
		//总数量
		$count = $user -> count();
		//设置每一页的记录数
		$page = new \Think\Page($count,10);
		//设置分页类的样式
		$page->setConfig('theme', '<li><a>共 %TOTAL_ROW% 条记录</a></li> <li>%UP_PAGE%</li> <li>%LINK_PAGE%</li>  <li>%DOWN_PAGE%</li>');
		//最终展示
		$show = $page -> show();
		$list = $user -> order('id') -> limit($page->firstRow.','.$page->listRows) -> select();
		//用户列表
		$this -> users = $list;
		//分页展示
		$this -> page = $show;
		
		$this -> display();
	}


	//添加用户
	public function add(){
		$this -> display();
	}

	//编辑
	public function edit(){
		$id = $_GET['id'];
		$user = M('User');
		$row = $user -> find($id);
		$this -> user = $row;
		$this -> display();
	}

	//新增
	public function insert(){
		$user = M('User');
		$user -> create();
		$user -> createtime = date('Y-m-d');
		$user -> password = md5($_POST['password']);
		if($user -> add()){
			$this -> success('新增成功',U('index'));
		}else{
			$this -> error('新增失败',U('index'));
		}
	}

	//更新
	public function update(){
		$user = M('User');
		$user -> create();
		$user -> password = md5($_POST['password']);
		if($user -> save()){
			$this -> success('修改成功',U('index'));
		}
	}


	//删除
	public function delete(){
		$id = $_GET['id'];
		$user = M('User');
		if($user -> delete($id)){
			$this -> success('删除成功!',U('index'));
		}else{
			$this -> success('删除失败，请重试!',U('index'));
		}
	}





	// public function index1(){
	// 	$user = D("User");
	// 	$count = $user -> count();
	// 	$page = new \Think\Page($count,2);
	// 	//设置分页类的bootstrap样式
	// 	$page->setConfig('theme', '<li><a>共 %TOTAL_ROW% 条记录</a></li> <li>%UP_PAGE%</li> <li>%LINK_PAGE%</li>  <li>%DOWN_PAGE%</li>');
	// 	$show = $page -> show();
	// 	$list = $user -> relation(true) -> order('id') -> limit($page->firstRow.','.$page->listRows) -> select();
	// 	//输出
	// 	$this -> userList = $list;
	// 	$this -> page = $show;

	// 	$this -> display();
		
	// }

	// public function show(){
	// 	$user = D("User");

	// 	$rows = $user ->relation(true) -> select();
	// 	echo "<pre>";
	// 	print_r($rows);
	// 	echo "</pre>";
	// }

	// public function uploadImg(){
	// 	$upload = new \Think\Upload();// 实例化上传类
	// 	$upload->maxSize = 3145728 ;// 设置附件上传大小
	// 	$upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
	// 	$upload->rootPath = './Uploads/'; // 设置附件上传根目录
	// 	$upload->savePath = 'img/'; // 设置附件上传（子）目录
	// 	// 上传文件
	// 	$info = $upload->upload();
	// 	if(!$info) {// 上传错误提示错误信息
	// 	$this->error($upload->getError());
	// 	}else{// 上传成功
	// 	$this->success('上传成功！');
	// 	}
	// }
	
	// public function upload(){
	// 	$this -> display();
	// }

}

 ?>
