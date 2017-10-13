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
			<span><a class="btn btn-default" href="<?php echo U('Login/logout');?>">退出登录</a></span>
		</div>
		<div>
			<table class="table table-striped table-striped table-bordered table-hover">
				<tr>
					<th>序号</th>
					<th>用户名</th>
					<th>密码</th>
					<th>生日</th>
					<th>创建时间</th>
					<th>部门</th>
					<th>修改</th>
					<th>删除</th>
				</tr>
				<?php if(is_array($userList)): foreach($userList as $key=>$user): ?><tr>
						<td><?php echo ($user["id"]); ?></td>
						<td><?php echo ($user["username"]); ?></td>
						<td><?php echo ($user["password"]); ?></td>
						<td><?php echo ($user["birth"]); ?></td>
						<td><?php echo ($user["createtime"]); ?></td>
						<td><?php echo ($user["deptname"]); ?></td>
						<td><a>修改</a></td>
						<td><a>删除</a></td>
					</tr><?php endforeach; endif; ?>
			</table>
			<!-- 分页 -->
			<nav>
			  <ul class="pager">
			    <?php echo ($page); ?>
			  </ul>
			</nav>
		</div>

	</div>
</body>
</html>