<?php 
namespace Home\Controller;
use Think\Controller;

class ShopController extends Controller {

	//查看商品


	//添加商品
	public function add(){
		$this -> display();
	}

	//插入商品
	public function insert(){
		$upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 3145728 ;// 设置附件上传大小
        $upload->exts = array('png');// 设置附件上传类型
        $upload->rootPath = './Uploads/'; // 设置附件上传根目录
        $upload->savePath = 'photo/'; // 设置附件上传（子）目录
        // 上传文件
        $info = $upload->upload();
        if(!$info) {// 上传错误提示错误信息
        $this->error($upload->getError());
        }else{// 上传成功
        var_dump($info);
        $url = __ROOT__."/Uploads/".$info['img']['savepath'].$info['img']['savename'];
        var_dump($url);
        //$this->success('上传成功！');
        }
	}

}


 ?>