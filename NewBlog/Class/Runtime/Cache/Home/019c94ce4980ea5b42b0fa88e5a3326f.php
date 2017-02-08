<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>风筝</title>
<link href="/Blog/NewBlog/Public/assets/global/css/home.css" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" type="text/css" href="/Blog/NewBlog/Public/assets/plugins/zm-rotation/zm-rotation.css"/>

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
	
	<div class="in-index">
		<div class="zm-rotation">
            <ul class="rotation-list">
                <li>
                    <a href="javascript:;">
                        <img src="/Blog/NewBlog/Public/assets/global/img/bg/gril.jpg" alt="纸飞机飞呀飞 晚霞真美">
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <img src="/Blog/NewBlog/Public/assets/global/img/bg/autumn.jpg" alt="摘下你的面具 我们交朋友吧">
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <img src="/Blog/NewBlog/Public/assets/global/img/bg/life.jpg" alt='幸运只是努力的另一个代名词'>
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <img src="/Blog/NewBlog/Public/assets/global/img/bg/numbers.jpg" alt="我喜欢夜晚的寂静 一个人真好">
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <img src="/Blog/NewBlog/Public/assets/global/img/bg/autumn.jpg" alt="找到生活中的理想吧">
                    </a>
                </li>
            </ul>         
        </div>
        <div class="rotation-focus"></div>
		<div class="in-header">			
			<!-- <div class="pull-left">
				
			</div>
			<div class="pull-right">
					———  <?php echo ($pageChange['index_show']); ?> 
			</div> -->
		</div>
		<div class="container">	
			<div class="pull-left">
			<?php if(is_array($article)): $i = 0; $__LIST__ = $article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="time-line">
					<div class="time-line-text">
						<div class="title">
							<h2>
								<a href="<?php echo U('index/detail',array('id'=>$vo['id']));?>"><?php echo ($vo["title"]); ?></a>
							</h2>
						</div>
						<div class="content">
							<?php echo (mb_substr($vo["content"],0,300,'utf-8')); ?>
						</div>
						<div class="tips pull-right">
							<span class="time">
								<i class="icon-timeline"></i>
								<?php echo (date('Y年m月d日 H:i',$vo["update_time"])); ?>
							</span>
							<span class="ready">
								<a href="<?php echo U('index/detail',array('id'=>$vo['id']));?>">
									<i class="icon-timeline"></i>
									阅读全文

								</a>
							</span>
							<span class="comment">
								<a href="">
									<i class="icon-timeline"></i>
									评论
								</a>
							</span>
						</div>						
					</div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
				<div class="page">
					<ul>
						<?php echo ($page); ?>
					</ul>
				</div>
			</div>
			<div class="pull-right">
				<div class="time-line">
					<div class="time-line-text">
						<div class="title">
							<h2>近期文章</h2>
						</div>
						<div class="content">
							<ul>
								<?php if(is_array($recently)): $i = 0; $__LIST__ = $recently;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
										<div class="con-title">
											<a href="<?php echo U('index/detail',array('id'=>$vo['id']));?>"><?php echo ($vo["title"]); ?></a>
											<span class="pull-right"><?php echo (date('Y.m.d',$vo["update_time"])); ?></span>
										</div>
									</li><?php endforeach; endif; else: echo "" ;endif; ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="time-line">
					<div class="time-line-text">
						<div class="title">
							<h2>文章归档</h2>
						</div>
						<div class="content">
							<ul class="blog-time-line">
								<li><a href="<?php echo U('Index/category');?>">· 二零一五年 · 八月</a></li>
								<li><a href="">· 二零一五年 · 七月</a></li>
								<li><a href="">· 二零一五年 · 六月</a></li>
								<li><a href="">· 二零一五年 · 五月</a></li>
								<li><a href="">· 二零一五年 · 四月</a></li>
							</ul>
						</div>
					</div>
				</div>
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

    <script type="text/javascript" src="/Blog/NewBlog/Public/assets/plugins/zm-rotation/jquery.zmrotation.js"></script> 


    <script type="text/javascript">
	    $(document).ready(function(){
	        $(".zm-rotation").zmRotation({height: 350});
	    })
    </script>

</body>
</html>