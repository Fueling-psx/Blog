<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>风筝</title>
<link href="/Blog/NewBlog/Public/assets/global/css/home.css" rel="stylesheet" type="text/css"/>

	<link href="/Blog/NewBlog/Public/assets/pages/styles/detail.css" rel="stylesheet" type="text/css"/>

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
	
	<div class="in-detail">
		<div class="in-header">			
		</div>
		<div class="container">
		<!-- <div> -->
			<div class="title">
				<?php echo ($detail["current"]["title"]); ?>
			</div>
			<div class="stuff">
	            <span>三月 20, 2016 </span>
	            <span>阅读 5059</span>
	            <span>字数 7682</span>
	            <span>评论 26</span>
	            <span>喜欢 <a href="javascript:;" class="likeThis" id="like-5753"><span class="icon-like"></span><span class="count">80</span></a></span>
	        </div>
			<div class="content">
				<?php echo ($detail["current"]["content"]); ?>
				<?php echo ($detail["last"]["id"]); ?>
				<span>———— numberToCh(<?php echo (date('Y-m-d',$detail["current"]["update_time"])); ?>)</span>
			</div>
			<!--</div> -->
			<div class="page">
					<span>上一篇:</span><a href="<?php echo U('Index/detail',array('id'=>$detail['last']['id']));?>"><?php echo ($detail["last"]["title"]); ?></a>
					<span>下一篇:</span><a href="<?php echo U('Index/detail',array('id'=>$detail['next']['id']));?>"><?php echo ($detail["next"]["title"]); ?></a>
				</div>
		</div>
	</div>

	<div class="bottom"></div>
</div>
<script src="/Blog/NewBlog/Public/assets/plugins/jquery/jquery-2.1.3.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/Blog/NewBlog/Public/assets/pages/scripts/public.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        Public.init();
    })
</script>



</body>
</html>