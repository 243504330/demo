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
	<!-- 内容头开始 -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">创业沙龙
					<small>交流交流</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="index.html">首页</a></li>
					<li class="active">创业沙龙</li>
				</ol>
			</div>
		</div>
	<!-- 内容头结束 -->
	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$arr): $mod = ($i % 2 );++$i;?><!-- 创业沙龙例子 -->
		<div class="row">
			<div class="col-md-7">
				<a href="<?php echo U('salon/salon',array('id'=>$arr['id']));?>">
					<img class="img-responsive img-hover" src="/product/Public/images/<?php echo ($arr["img"]); ?> "ale="">
				</a>
			</div>
			<div class="col-md-5">
				<h3><?php echo ($arr["title"]); ?></h3>
				<h4>出席嘉宾:</h4>
				<p>
				<ul>
					<?php echo ($arr["compere"]); ?>
				</ul>
				<h4>出席企业:</h4>
				
				<ul>
					
					<?php echo ($arr["guest"]); ?>
				</ul>
				</p>
				<a class="btn btn-primary" href="<?php echo U('salon/salon',array('id'=>$arr['id']));?>">进入看详情</i></a>
			</div>
		</div>

		<hr><?php endforeach; endif; else: echo "" ;endif; ?>
		<!-- 例子 end-->

		<hr>
		<!-- 临时分页 -->
		<div class="row text-center">
			<div class="col-lg-12">
				<ul class="pagination">
					<li>
						<a href="#">&laquo;</a>
					</li>
					<li class="active">
						<a href="#">1</a>
					</li>
					<li>
						<a href="#">&raquo;</a>
					</li>
				</ul>
			</div>
		</div>
		<!-- 临时分页end -->


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