<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>万年历</title>
	<link rel="stylesheet" type="text/css" href="/TPPHP/Public/BootStrap/css/bootstrap.min.css">
	<script type="text/javascript" src="/TPPHP/Public/BootStrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="/TPPHP/Public/BootStrap/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="page-header text-center">
			<h3>万年历</h3>
			<h4><?php echo ($year); ?>-<?php echo ($month); ?></h4>
		</div>
		<div>
			<table class="table table-striped table-bordered table-hover">
				<tr>
					<th>周日</th>
					<th>周一</th>
					<th>周二</th>
					<th>周三</th>
					<th>周四</th>
					<th>周五</th>
					<th>周六</th>
				</tr>
				<?php if(is_array($arr)): foreach($arr as $key=>$arr2): ?><tr>
						<?php if(is_array($arr2)): foreach($arr2 as $key=>$row): ?><td><?php echo ($row); ?></td><?php endforeach; endif; ?>
					</tr><?php endforeach; endif; ?>
				<tr>
					<ul class="pager">
						<li><a href="/TPPHP/Home/Index/index?date=<?php echo ($premonth); ?>">上一月</a></li>
						<li><a href="/TPPHP/Home/Index/index?date=<?php echo ($nextmonth); ?>">下一月</a></li>
					</ul>
				</tr>
			</table>
		</div>
	</div>
</body>
</html>