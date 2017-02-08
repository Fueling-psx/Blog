<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
	
	public function index(){
		$this->display();
	}

	public function login(){
		if (!IS_POST) {
			halt('页面不存在');
		}
	}
	public function logout(){
		session('[destroy]');
		$this->success('退出成功',U('Login/index'));
	}


}