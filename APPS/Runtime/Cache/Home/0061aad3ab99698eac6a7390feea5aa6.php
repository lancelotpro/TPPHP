<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="cn">
<head>
	<meta charset="UTF-8">
	<title>文峰视听门户网站</title>
	<link rel="stylesheet" type="text/css" href="/TPPHP/Public/BootStrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/TPPHP/Public/css/common.css">
	<link rel="stylesheet" type="text/css" href="/TPPHP/Public/css/Index/index3.css">
	<script type="text/javascript" src="/TPPHP/Public/BootStrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="/TPPHP/Public/BootStrap/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="row">
		<!-- 顶部  -->
		<div class="col-md-12">
			<div class="top">
				<div class="container c_top">
					<div class="top_r pull-right">
						邮箱:35435435.com | <a href="">收藏本站</a> | <a href="">设为主页</a>
					</div>
				</div>
			</div>
		</div>

		<!-- Logo&Banner -->
		<div class="col-md-12">
			<!-- Logo&Banner -->
			<nav class="navbar navbar-inverse">
			  <div class="container">

			    <!-- 手机的缩小菜单 -->
			    <div class="navbar-header">
				    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				     	<span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				    </button>
					
					<!-- Logo图片 -->
				    <a class="navbar-brand" href="#">
				    	<img src="/TPPHP/Public/images/logo.png">
				  	</a>
			    </div>

			    
			    <ul class="nav navbar-nav navbar-right">
			        <li class="active"><a href="#">主页</a></li>
			        <li><a href="#">关于我们</a></li>
			        <li class="dropdown">
				        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">视频 <span class="caret"></span></a>
				        <ul class="dropdown-menu">
				          <li><a href="#">视频教学</a></li>
				          <li><a href="#">视频聚焦</a></li>
				          <li><a href="#">视频对对碰</a></li>
				          <li><a href="#">视频原创</a></li>
				          <li><a href="#">视频门户网站</a></li>
				        </ul>
			        </li>
			        <li class="dropdown">
				        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">时尚生活馆 <span class="caret"></span></a>
				        <ul class="dropdown-menu">
				          <li><a href="#">博文推荐</a></li>
				          <li><a href="#">时尚生活网址大全</a></li>
				        </ul>
			        </li>
			        <li class="dropdown">
				        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">网购 <span class="caret"></span></a>
				        <ul class="dropdown-menu">
				          <li><a href="#">购物门户网站</a></li>
				          <li><a href="#">购物贴士</a></li>
				          <li><a href="#">品牌入驻中</a></li>
				          <li><a href="#">海外购物</a></li>
				          <li><a href="#">购物推荐</a></li>
				          <li><a href="#">购物经验分享</a></li>
				        </ul>
			        </li>
			        <li><a href="#">在线互动</a></li>
			    </ul>

			  </div><!-- /.container -->
			</nav>
		</div>

		<!-- 分割线 -->
		<div class="col-md-12">
			<!-- 分割线 -->
			<div class="sep">
				<div class="container c_sep">
					<img src="/TPPHP/Public/images/sep_big.png">
				</div>
			</div>
		</div>

		<!-- 轮播图  -->
		<div class="col-md-12">
			<!-- 轮播图  -->
			<div class="carousel">
				<div class="container c_carousel">
					<div class="carousel_panel">
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
							<!-- 圆点  -->
							<ol class="carousel-indicators">
							    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
							    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
							</ol>

							<!-- Wrapper for slides -->
							<div class="carousel-inner" role="listbox">
							    <div class="item active">
							      <img src="/TPPHP/Public/images/w-si.jpg" alt="">
							      <div class="carousel-caption">
							      </div>
							    </div>
							    <div class="item">
							      <img src="/TPPHP/Public/images/w-si.jpg" alt="...">
							      <div class="carousel-caption">
							      </div>
							    </div>
							</div>
							
							<!-- 控制按钮 -->
							<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--欢迎&关注 -->
		<div class="col-md-12">
			<!-- 欢迎&关注  -->
			<div class="welcome">
				<div class="container c_welcome">
					<div class="row">
						<div class="col-md-10">
							<div class="w_left">
								<h3>欢迎来到文峰视听</h3>
								<p>用创造演绎经典，用经典来诠释时尚，用时尚去追求完美，用完美期待永恒，创意，没有结束，只有开始...</p>
							</div>
							<div class="w_sep">
								<img src="/TPPHP/Public/images/sep_scoial_icons.png">
							</div>
						</div>
						<div class="col-md-2">
							<div class="w_right">
								<h3>关注我们</h3>
								<p>点击下方图标</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

</body>
</html>