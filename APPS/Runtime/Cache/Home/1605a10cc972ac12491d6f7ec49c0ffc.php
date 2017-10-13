<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Upload</title>
	<link rel="stylesheet" type="text/css" href="/TPPHP/Public/BootStrap/css/bootstrap.min.css">
	<script type="text/javascript" src="/TPPHP/Public/BootStrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="/TPPHP/Public/BootStrap/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<form action="<?php echo U('uploadImg');?>" enctype="multipart/form-data" method="post" >
		<input type="text" name="name" />
		<input type="file" name="photo" />
		<input type="submit" value="提交" >
	</div>
</form>
</body>
</html>