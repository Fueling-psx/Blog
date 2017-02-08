<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends BaseController {
    public function index(){
    	$p=I('p');
    	$article=D("ArticleDetail")->getDetail(null,4,$p);
    	$this->assign('article',$article);
    	//dump($article);
    	$recently = D("ArticleDetail")->getDetail(null,6,1);
    	//dump($recently);
    	$this->assign('recently',$recently);
    	$page=D("ArticleDetail")->articlePage(null,4);
    	$this->assign('page',$page);
    	$pageChange=M('ArticleCategory')->where(array('id'=>5))->find();
    	$this->assign('pageChange',$pageChange);
		$this->display();
    }
    public function category(){
    	$article_id=I('id');
    	//dump($article_id);
    	$article=D("ArticleDetail")->getDetail($article_id,5,$p);
    	//dump($detail);
    	//dump($article);
    	$this->assign('detail',$article);
    	$page=D("ArticleDetail")->articlePage($article_id,4);
    	$this->assign('page',$page);
    	$pageChange=M('ArticleCategory')->where(array('id'=>$article_id))->find();
    	$this->assign('pageChange',$pageChange);
    	$this->display();
    }
    public function detail(){
    	$article_id=I('id');
    	$detail=D('ArticleDetail')->Detail($article_id);  	
    	$this->assign('detail',$detail);
    	$this->display();
    }
    public function homePage(){
    	$this->display();
    }
    public function login(){
        $this->display();
    }
}
