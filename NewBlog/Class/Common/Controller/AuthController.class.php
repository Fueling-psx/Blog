<?php 
namespace Common\Controller;
use Think\Controller;
use Think\Auth;
class AuthController extends Controller {
	protected function _initialize(){
		$sess_auth = session('auth');
		if (!$sess_auth) {
			$this->error('非法访问！正在跳转登录页面');
		}
		if ($sess_auth['uid'] == 1) {
			return true;
		}
		$auth = new Auth();
		if (!$auth->check(MODULE_NAME.'/'CONTROLLER_NAME.'/'.ACTION_NAME,$sess_auth['uid'])){
			$this->error('沒有权限',U('Login/logout'));
		}
	}
}
