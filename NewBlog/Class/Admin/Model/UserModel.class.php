<?php
namespace Admin\Model;
use Think\Model;
class UserModel extends Model{
	public function checkLogin($user_id,$pwd){
		$userinfo=$this->where(array('user_id'=>$user_id,'password'=>$pwd))->find();
		if($userinfo){
			session('id',$userinfo['id']);
			session('user_id',$user_id);
			session('user_name',$userinfo['name']);
		}
		return $userinfo;
	
	}
	public function uploading($id,$info){
		$data=$this->create();
		$data['avatar_file'] = date('Y-m-d').'/'.$info['index_show']['savename'];
		return !!$this->where(array('id'=>$id))->save($data);
	}
}
