<?php
namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller {

		public function _initialize(){
			$all = D('ArticleCategory')->getCategory();
			$this->assign('all',$all);
			
		}


}