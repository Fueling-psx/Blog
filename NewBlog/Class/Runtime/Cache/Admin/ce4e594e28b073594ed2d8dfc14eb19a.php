<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>风筝</title>
<link href="/NewBlog/Public/assets/global/css/admin.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/NewBlog/Public/assets/global/css/wysiwyg-editor.css" />
</head>
<body>
<div class="admin-bg"></div>
<div class="frameset">
	<div class="top">
		<div class="left">
			<img src="/NewBlog/Public/assets/global/img/风筝.PNG" alt="" />
			<span>风筝</span>
			<div class="nav">
				<a href="<?php echo U('/NewBlog/index.php?m=Home&c=index&a=index');?>">主页</a>
				<a href="<?php echo U('Index/index');?>">博客管理</a>
				<a href="<?php echo U('Index/addBlog');?>">写博客</a>
				<a href="<?php echo U('Index/pageChange');?>">页面修改</a>
				<a href="<?php echo U('Index/userinfo');?>">个人信息</a>
			</div>
			
		</div>
		<div class="right">
			<div class="user">
				<img src="/NewBlog/Public/assets/global/img/<?php echo ($userInfo['avatar_file']); ?>" alt="" />
				<span><?php echo ($userInfo['name']); ?></span>
			</div>
		</div>
	</div>
	<div class="container">

		<div class="right">
				
	<div class="main">
		<div class="index-con">
			<div class="title"><a href="<?php echo U('Index/index');?>">博客管理</a></div>
			<div class="container change-con">		
					<h2><?php echo ($data["name"]); ?></h2>
					<form action="<?php echo U('Index/upload',array('id'=>$data['id']));?>" method="post" enctype="multipart/form-data">
					  <input type="text" name="index_show" class="edittitle" placeholder="为页面配上签名" />
					  	<a href="javascript:;" class="file">
						    <input type="file" name="index_show" id="">点击这里上传背景图片
						</a>

					  <input type="submit" class="editsubmit change-btn" value="提交">
					</form>
			</div>
		</div>		
	</div>

		</div>
	</div>
	<div class="bottom"></div>
</div>
<div class="page-img">
			<span><a href="">×</a></span>
			<img src="" alt="" />
</div>
</body>
</html>