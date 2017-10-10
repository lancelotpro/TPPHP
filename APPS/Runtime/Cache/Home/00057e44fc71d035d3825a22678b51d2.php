<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户注册</title>
	<link rel="stylesheet" type="text/css" href="/TPPHP/Public/BootStrap/css/bootstrap.min.css">
	<script type="text/javascript" src="/TPPHP/Public/BootStrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="/TPPHP/Public/BootStrap/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(function (){
			$("#verify_img").click(function (){
				var url = "/TPPHP/Home/Login/create_verify";
				var time = new Date();
				$(this).attr("src",url+"/"+time);
			})
		});
	</script>
</head>
<body>
	<div class="container">
		<div class="page-header">
			<h3>用户注册</h3>
		</div>
		<div>
			<form class="form-horizontal" action="<?php echo U('insertNewUser');?>" method="post">
			  <div class="form-group">
			    <label for="username" class="col-sm-2 control-label">用户名</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="inputEmail3" placeholder="用户名">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="password" class="col-sm-2 control-label">密码</label>
			    <div class="col-sm-10">
			      <input type="password" class="form-control" id="inputPassword3" placeholder="密码">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="password2" class="col-sm-2 control-label">确认密码</label>
			    <div class="col-sm-10">
			      <input type="password" class="form-control" id="inputPassword3" placeholder="确认密码">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="verify" class="col-sm-2 control-label">验证码</label>
			    <div class="col-sm-10">
			    	<img id="verify_img" src="/TPPHP/Home/Login/create_verify">
			      	<input type="text" class="form-control" name="verify" placeholder="验证码">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-primary">注册</button>
			      <button type="reset" class="btn btn-default">重置</button>
			      <a href="<?php echo U('index');?>">回到登录</a>
			    </div>
			  </div>
			</form>
		</div>
	</div>
</body>
</html>