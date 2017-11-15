<?php 
namespace Home\Controller;
use Think\Controller;

class LoginController extends Controller {

	public function index(){
		$this -> display();
	}

	public function check(){
		$verifycode = $_POST['verifycode'];
		$check_code = $this -> verify($verifycode,'');
		if($check_code){
			$cond = $_POST['username'];
			
			$user = M('User');
			$result = $user -> where($cond) -> find();

			if($result['password'] != md5($_POST['password'])){
				$this -> error("用户名或者密码错误!",U('index'));
				exit;
			}
			//验证成功
			$_SESSION['login'] = '1';
			$_SESSION['username'] = $result['username'];
			$this -> success("登录成功，正在跳转",U('Index/index'));
		}else{
			$this -> error("验证码错误",U('index'));
		}
	}

	public function logout(){
		setcookie(session_name(),'',time()-3600,'/');
		session_unset();
		session_destroy();
		$this -> success("退出成功",U('index'));
	}

	//验证码
	public function genel_verifyCode(){
		$verify = new \Think\Verify();
        $verify -> entry();
	}

	//校验验证码
	public function verify($code, $id = ''){
		$verify = new \Think\Verify();
        $result = $verify -> check($code, $id);
        return $result;
	}

	//Ajax校验验证码
    public function verifyAjax($code, $id = ''){
        $result = $this -> verify($code,$id);
        return $this -> ajaxReturn($result, 'json');
    }


}

 ?>