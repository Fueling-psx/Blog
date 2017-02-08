<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>风筝</title>
<link href="/NewBlog/Public/assets/global/css/home.css" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" type="text/css" href="/NewBlog/Public/assets/pages/styles/homePage.css"/>

<style>
	.video{
		height:0;
		overflow: hidden;
	}
</style>
</head>
<body>
<div class="frameset">
	 
	<div class="top">
		<div class="nav">
			<div class="pull-left">风筝</div>
			<input type="text" />
			<ul>
				<li href="<?php echo U('index/index',array('id'=>'5'));?>">首页</li>
				<li href="<?php echo U('index/category',array('id'=>'1'));?>">
					<a href="">前端开发</a>
					<ul>
						<li>JavaScript</li>
						<li>html</li>
						<li>css</li>
					</ul>
				</li>
				<li href="<?php echo U('index/category',array('id'=>'2'));?>">前端开发</li>
				<li href="<?php echo U('index/category',array('id'=>'3'));?>">轻微博</li>
			</ul>
				
			<div class="pull-right">
				<div class="avatar">
					<img src="/NewBlog/Public/assets/global/img/avatar/child.jpg" alt="">
				</div>
				<ul class="menu">
					<li>
						<a href="">
							<span class="f3">守夜人,</span>
							<br>
							<span class="f9">正使用"腾讯qq"账号登录</span>
						</a>
					</li>
					<li>
						<a href="">私信</a>
					</li>
					<li>
						<a href="<?php echo U('index/homePage');?>">个人主页</a>
					</li>
					<li>
						<a href="">反馈意见</a>
					</li>
					<li>
						<a href="">设置</a>
					</li>
					<li>
						<a href="" class="exit">退出</a>
					</li>
				</ul>
			</div>
		</div>	
	</div>
	
	<div class="homePage">
		<div class="headerInfo">
			<div class="Info-con">
				<a href="">
					<img src="/NewBlog/Public/assets/global/img/avatar/child.jpg" alt="" />
				</a>
				<a href="">基围虾</a>
			</div>
		</div>
	</div>

	<div class="bottom"></div>
</div>
<script src="/NewBlog/Public/assets/plugins/jquery/jquery-2.1.3.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/NewBlog/Public/assets/pages/scripts/public.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        Public.init();
    })
</script>

    <script type="text/javascript" src="/NewBlog/Public/assets/pages/scripts/homePage.js"></script> 


    <script type="text/javascript">
	    $(document).ready(function(){
	        
	    })
    </script>

</body>
</html>