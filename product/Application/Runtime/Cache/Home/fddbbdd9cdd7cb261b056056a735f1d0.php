<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>公司主页3</title>
	<link href="/product/Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/product/Public/css/modern-business.css" rel="stylesheet">
    <link href="/product/Public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>	
		<!-- 导航  -->
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">导航开关</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/product">互联网金融</a>
				</div>
				<!--其他链接 -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="<?php echo U('about/index');?>">关于我们</a>
						</li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">产品项目<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li>
									<a href="<?php echo U('salon/index');?>">创业沙龙</a>
								</li>
								<li>
									<a href="#-2.html">第二个专栏</a>
								</li>
								<li>
									<a href="#-3.html">第三个专栏</a>
								</li>
								<li>
									<a href="#-4.html">第四个专栏</a>
								</li>
								
							</ul>
						</li>
						
					</ul>
				</div>
				<!-- 其他链接结束 -->
			</div>
		</nav>
<!--  导航结束 -->

	<!-- 内容 -->
	<div class="container">
		<!-- 内容头 -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">沙龙详情 
					<small>小标题</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="<?php echo U('salon/index');?>">首页</a></li>
					<li class="active">沙龙详情</li>
				</ol>
			</div>
		</div>
		<!-- 内容头end-->
		<!-- 沙龙内容 -->
		<div class="row">
			<div class="col-md-8">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- 指示 -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					</ol>
					<!-- 指示 end -->
					<!-- 图片 -->
					<div class="carousel-inner">
						<div class="item active">
							<img class="img-responsive" src="/product/Public/images/<?php echo ($bimg["bimg1"]); ?>" ale="">
						</div>
						<div class="item">
							<img class="img-responsive" src="/product/Public/images/<?php echo ($bimg["bimg2"]); ?>" ale="">
						</div>
						<div class="item">
							<img class="img-responsive" src="/product/Public/images/<?php echo ($bimg["bimg3"]); ?>" ale="">
						</div>
					</div>
					<!-- 图片end -->
					<!-- 按钮 -->
					<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
					<!-- 按钮end -->
				</div>
			</div>
			<!-- 右边提示 -->
			<div class="col-md-4">
				<h3>沙龙描述</h3>
				<p><?php echo ($bimg["says"]); ?></p>
				<h3>沙龙细节</h3>
				
					<?php echo ($bimg["details"]); ?>
				
			</div>
			<!-- 右边提示end -->
		</div>
		<!--content end -->
		<!-- 图片展示 -->
		<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header">相关图片</h3>
			</div>

		
		<?php if(is_array($img)): $i = 0; $__LIST__ = $img;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="col-sm-3 img-portfolio">
				<a href="#">
					<img class="img-responsive img-hover img-related" src="/product/Public/images/<?php echo ($v["img"]); ?>" ale="">
				</a>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
		


		</div>
		<!-- 图片展示end -->


	<hr>
	<!-- 脚 -->
	<footer>
		<div class="row">
			<div class="col-lg-12">
				<p>Copyright &copy; 2015</p>
			</div>
		</div>
	</footer>

</div>

<script src="/product/Public/js/jquery.js"></script>
<script src="/product/Public/js/bootstrap.min.js"></script>
<script>
$('.carousel').carousel({
	interval:5000
})
</script>

</body>
</html>