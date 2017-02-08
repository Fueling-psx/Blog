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
			<div class="title"><a href="">个人信息<?php echo ($id); ?></a></div>
				<div class="container userinfo-con">
					<form action="<?php echo U('index/userupload',array('id'=>$id));?>" method="post" enctype="multipart/form-data">
						<table>
								<tr class="first">
									<td>登录id</td>
									<td>用户名</td>
									<td>密码</td>
									<td>头像</td>
									<td>操作</td>
								</tr>
								<tr>
								   <td><input type="text" value="<?php echo ($userInfo['user_id']); ?>" name="user_id"/></td>
								   <td><input type="text" value="<?php echo ($userInfo["name"]); ?>" name="name"/></td>
								   <td><input type="text" value="<?php echo ($userInfo["password"]); ?>" name="password"/></td>
								   <td><a href=""  class="img-bac file file-size"><input type="file" name="index_show" id="">更改头像</a></td>
								   <td><input type="submit" class="" value="提交"></td>
								</tr>
						</table>
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