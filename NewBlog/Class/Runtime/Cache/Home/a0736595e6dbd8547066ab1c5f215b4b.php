<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>风筝</title>
<link href="/NewBlog/Public/assets/global/css/home.css" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" type="text/css" href="/NewBlog/Public/assets/pages/styles/login.css"/>

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
				<li><a href="<?php echo U('index/index');?>">首页</a></li>
				<?php if(is_array($all)): $i = 0; $__LIST__ = $all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(empty($vo['children'])): ?><li><a href="<?php echo U('index/category',array('id'=>$vo['id']));?>"><?php echo ($vo['name']); ?></a></li>
					<?php else: ?>
						<li>
							<a href=""><?php echo ($vo['name']); ?></a>
							<ul>
								<?php if(is_array($vo['children'])): $i = 0; $__LIST__ = $vo['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ch): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('index/category',array('id'=>$ch['id']));?>"><?php echo ($ch['name']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
							</ul>
						</li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
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
	
<div class="frameset">
	<div class="in-login">
		<div class="in-header">			
		</div>
		<div class="lo-container">
			<div class="pull-left">
					<div class="title">
						<img src="/NewBlog/Public/assets/global/img/avatar/child.jpg" alt="" />
						<h2>博主登入</h2>
					</div>
					<form action="<?php echo U('Index/dologin');?>" method="post">
						<input type="text" placeholder="账号" name="user_id"/>
						<input type="password" placeholder="密码" name="password"/>
		<!-- 				<button type="submit" class="btn">登录</button> -->
						<input type="submit" value="登录" class="btn"/>
					</form>
					
			</div>
			<div class="pull-right">
				<div class="content">
					<p>你陪了我多少年</p>
					<p>花开花落</p>
					<p>一路上起起跌跌</p>
					<p>——定风波</p>
				</div>
			</div>
		</div>
	</div>
	<div class="bottom"></div>
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

	<script type="text/javascript" class="autoinsert" src="/NewBlog/Public/assets/plugins/jquery/jquery-2.1.3.min.js"></script> 
	<script src="/NewBlog/Public/assets/global/js/snowfall.jquery.js"></script> 



</body>
</html>