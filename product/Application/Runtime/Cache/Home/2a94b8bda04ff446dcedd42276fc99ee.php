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

	<header id="myCarousel" class="carousel slide">
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>


<!-- 滚动包装 -->
<div class="carousel-inner">
	<div class="item active">
		<div class="fill" style="background-image:url('/product/Public/images/fish.jpg');"></div>
		<div class="carousel-caption">
			<h2>标题 1</h2>
		</div>
	</div>
	<div class="item">
		<div class="fill" style="background-image:url('/product/Public/images/title.jpg')"></div>
		<div class="carousel-caption">
			<h2>标题2</h2>
		</div>
	</div>
	<div class="item">
		<div class="fill" style="background-image:url('/product/Public/images/qw.jpg')"></div>
		<div class="carousel-caption">
			<h2>标题3</h2>
		</div>
	</div>
</div>
<!-- 左右按键 -->
<a class="left carousel-control" href="#myCarousel" data-slide="prev">
	<span class="icon-prev"></span>
</a>
<a class="right carousel-control" href="#myCarousel" data-slide="next">
	<span class="icon-next">
</a>
<!-- 结束 -->
</header>


<!-- 内容部分 -->
<div class="container">


	<!-- 图标项目 -->
	<div class="row">
		<div class="col-lg-12">		
			<h1 class="page-header">
				<div class="second">
					我们专注<strong style="color:rgb(234, 196, 98)">媒体</strong>100年
				</div>
			</h1>
			
		</div>


		<div class="col-md-12">

			<div class="second-one">
				<img src="/product/Public/images/blue2.png" style="width:100%" class="img-circle">
			</div>

			<div class="second-one" style="margin: 0 250px 0 250px;">
				<a href="#" ><img src="/product/Public/images/blue2.png" style="width:100%" class="img-circle"></a>
			</div>

			<div class="second-one">
				<img src="/product/Public/images/blue2.png" style="width:100%" class="img-circle">
			</div>
			
		</div>

	</div>
	<!-- 结束 -->
	<!-- 图片区 -->
	<div class="row">
		<div class="col-lg-12">

			<h2 class="page-header">公司环境
				<small><a href="<?php echo U('about/index');?>" style="color:#BDBDBD">查看更多</a></small>
			</h2>

		</div>
		<div class="col-md-4 col-sm-6">
			<a href="#">
				<img class="img-responsive img-portfolio img-hover" src="/product/Public/images/home1.jpg" ale="">
			</a>
		</div>
		<div class="col-md-4 col-sm-6">
			<a href="#">
				<img class="img-responsive img-portfolio img-hover" src="/product/Public/images/home2.jpg" ale="">
			</a>
		</div>
		<div class="col-md-4 col-sm-6">
			<a href="#">
				<img class="img-responsive img-portfolio img-hover" src="/product/Public/images/home3.jpg" ale="">
			</a>
		</div>
		<div class="col-md-4 col-sm-6">
			<a href="#">
				<img class="img-responsive img-portfolio img-hover" src="/product/Public/images/home4.jpg" ale="">
			</a>
		</div>
		<div class="col-md-4 col-sm-6">
			<a href="#">
				<img class="img-responsive img-portfolio img-hover" src="/product/Public/images/food1.jpg" ale="">
			</a>
		</div>
		<div class="col-md-4 col-sm-6">
			<a href="#">
				<img class="img-responsive img-portfolio img-hover" src="/product/Public/images/home6.jpg" ale="">
			</a>
		</div>
	</div>
	<!-- 结束 -->
	<!-- 公司特点等 -->
	<div class="row">
		<div class="col-lg--12">
			<h2 class="page-header">栏目简介</h2>
		</div>	
		<div class="col-md-6">
			<p><strong>时代背景</strong></p>
			<ul>
				<li>深圳互联网金融发展迅猛</li>
				<li>互联网理财需求不断扩大</li>
				<li>收视人群广大且基础良好</li>
			</ul>
			<p><strong>精彩内容</strong></p>
			<ul>
				<li>高端大气的栏目定位</li>
				<li>精英云集的嘉宾阵容</li>
				<li>权威专业的节目选题</li>
			</ul>
			<P><strong>栏目影响</strong></p>
			<ul>
				<li>栏目内容不断优化，专业权威性强</li>
				<li>收视人群逐步扩大，关注度逐渐增加</li>
				<li>嘉宾阵容强大，制作水准不断提升</li>
			</ul>
			<p><strong>合作价值</strong></p>
			<ul>
				<li>电视屏幕</li>
				<li>线上平台</li>
				<li>行业论坛峰会</li>
				<li>媒体跨界合作</li>
			</ul>
		</div>
		<div class="col-md-6">
			<img class="img-responsive" src="/product/Public/images/lanmu.jpg" ale="">
		</div>
	</div>
	<!-- 结束 -->
	<hr>

	<!-- 推销 -->
	<div class="well">
		<div class="row">
			<div class="col-md-8">
				<P>说说说......</p>					
			</div>
			<div class="col-md-4">
				<!-- 遮罩 -->
				<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">订阅我们</button>
					<!-- 框 -->
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog" style="top:230px">
							<!-- 内容 -->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										&times;
									</button>
									<h4 class="modal-title" id="myModalLabel">标题</h4>
								</div>
								<div class="modal-body" style="margin-left:45px">
									<img src="/product/Public/images/jr.png">
									<img src="/product/Public/images/jb.png" style="margin-left:50px">
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
								</div>
							</div>
							<!-- 内容end -->
						</div>
					</div>
					<!-- 框 end -->
				<!-- 遮罩end -->
			</div>
		</div>
	</div>


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