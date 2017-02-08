<?php
namespace Admin\Model;
use Think\Model;
class ArticleDetailModel extends BaseModel {
	protected function _initialize(){
		parent::_initialize();
	}	
	public function getDetail($category_id,$article_num){
		//dump($category_id);
		$article=$this
		->alias('ad')
		->join('blog_article_category AS ac ON ad.category_id = ac.id')
		->field('ad.id,ad.title,ad.content,ad.create_time,ac.name,ad.update_time')
		->where(array('ad.status'=>array('eq',1))) 
		->order('update_time asc')   
		->page($_GET['p'],$article_num)
		->select();
		return $article;
	}
	public function ArticleE($array){
		$data=$this->create();
		$data['content'] = $array['content'];
		$data['update_time']=time();
		dump($data);
		$result=$this->where(array('id'=>$array['id']))->save($data);
		return $result;
	}
	public function ArticleDel($article_id){
		$result=$this->where(array('id'=>$article_id))->delete();
		return $result;
	}
	public function BlogAdd($article_id){
		$data=$this->create();
		dump($array);
		$data['update_time']=time();
		$data['user_id']=session('user_id');
		$result=$this->add($data);
		return $result;
	}
	
}
















