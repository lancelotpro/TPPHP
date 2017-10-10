<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>UserIndex</title>
	<link rel="stylesheet" type="text/css" href="/TPPHP/Public/BootStrap/css/bootstrap.min.css">
	<script type="text/javascript" src="/TPPHP/Public/BootStrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="/TPPHP/Public/BootStrap/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="page-header">
			<h3>欢迎登录！<?php echo session("username");?></h3>
		</div>
		<span><a class="btn btn-default" href="<?php echo U('Login/logout');?>">退出登录</a></span>

	</div>
</body>
</html>