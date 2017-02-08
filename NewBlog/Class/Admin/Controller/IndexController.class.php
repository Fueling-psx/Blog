<?php
namespace Admin\Controller;
use Common\Controller\AuthController;
class IndexController extends AuthController {
    public function index(){
    	alert(node_merge());
    	$article=D("ArticleDetail")->getDetail(5,5);
    	$this->assign('article',$article);
		$this->display();
    }
    public function addBlog(){
    	$this->display();
    }
    public function pageChange(){
    	$Allpage=D('ArticleCategory')->select();
    	$this->assign('Allpage',$Allpage);
    	$this->display();
    }
    public function change(){
    	$id=I('id');
    	$data=M('ArticleCategory')->where(array('id'=>$id))->find();
    	$this->assign('data',$data);
    	$this->display();
    }
    public function userinfo(){
    	$userInfo=M('user')->find();
    	$this->assign('userInfo',$userInfo);
    	$this->display();
    }
	public function doLogin(){
		$user_id=$_POST['user_id'];
		$password=$_POST['password'];
		$result=D('User')->checkLogin($user_id,$password);
		if($result){
			$this->success('用户登录成功',U('Index/index'));
		}else{
			$this->error('该用户不存在');
		}
          
	}
	public function editBlog(){
 		$cId=I('id');
 		//dump($cId); 		
 		$this->assign('id',$cId);
 		$Blog=M('ArticleDetail')->where(array('id'=>$cId))->find();
 		$this->assign('blog',$Blog);
 		$this->display();
 	}
	public function edit(){
 		$array['id']=$_REQUEST['id'];
 		$array['content']=$_REQUEST['content'];
 		$mAd=D('ArticleDetail');
 		$result=$mAd->ArticleE($array);
 		if($result) $this->success('修改成功',U('Index/index'));
 		else $this->error('修改失败');
 	}
	public function del(){
		$article_id=I('id');
		$result=D('ArticleDetail')->ArticleDel($article_id);
		if($result) $this->success('删除成功',U('Index/index'));
		else $this->error('删除失败');
	}
	public function blog_add(){
		$result=D('ArticleDetail')->BlogAdd();
		if($result) $this->success('新增成功',U('Index/index'));
		else $this->error('新增失败');
	}
	public function upload(){
		$id=$_REQUEST['id'];
	    $upload = new \Think\Upload();// 实例化上传类
	    $upload->maxSize   =     13145728 ;// 设置附件上传大小
	    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
	    $upload->rootPath  =     './Public/assets'; // 设置附件上传根目录
	    $upload->savePath  =     './global/img/'; // 设置附件上传（子）目录
	    // 上传文件 
	    $info   =   $upload->upload();
	    $result=D('ArticleCategory')->uploading($id,$info);
	    if($result){
	    	$this->success('修改成功');
	    }else{
	    	$this->error('修改失败');
	    }
	}
	public function editUser(){
		$id=I('id');
		$userInfo=M('user')->where(array('id'=>$id))->find();
		$this->assign('userInfo',$userInfo);
		$this->assign('id',$id);
		$this->display('');
	}
	public function userupload(){
		$id=$_REQUEST['id'];
		dump($id);
		$upload = new \Think\Upload();// 实例化上传类
		$upload->maxSize   =     13145728 ;// 设置附件上传大小
		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->rootPath  =     './Public/assets'; // 设置附件上传根目录
		$upload->savePath  =     './global/img/'; // 设置附件上传（子）目录
		// 上传文件
		$info   =   $upload->upload();
		$result=D('user')->uploading($id,$info);
		if($result){
			$this->success('修改成功');
		}else{
			$this->error('修改失败');
		}
	}
}

















