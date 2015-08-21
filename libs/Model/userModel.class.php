<?php
class userModel{

	public $_table = 'users';

	function regist(){
		foreach ($_POST as $v) {
			if(empty($v)){
				showmessage("数据不完整！","index.php?controller=user&method=login");
			}
		}
		extract($_POST);
		if($password != $cpassword){
			showmessage("两次密码输入不一致！","index.php?controller=user&method=login");
		}
		$data=array(
			'username' => $username,
			'password' => $password,
			'name' => $name
			);
		$sql = "select * from " . $this->_table . " where username ='" . $username . "'";
		//$has = DB::query($sql);
		$has = DB::findOne($sql);
		if($has){
			showmessage("该邮箱已被注册！请重新注册！","index.php?controller=user&method=login");
		}else{
			DB::insert($this->_table,$data);
			showmessage("注册成功！请登录！","index.php?controller=user&method=login");
		}
		
	}

	function login(){
		foreach ($_POST as $v) {
			if(empty($v)){
				showmessage("数据不完整！","index.php?controller=user&method=login");
			}
		}
		extract($_POST);
		$sql = "select name from " . $this->_table . " where username='" . $username . "' and password='" . $password . "'";
		$res = DB::findOne($sql);
		if($res){
			$_SESSION['user'] = $res['name'];
			return 1;
		}else{
			return 0;
		}	
	}


	function findUidByName($name){
		$sql = "select id from " . $this->_table . " where name='" . $name . "'";
		$res = DB::findOne($sql);
		if($res){
			return $res['id'];
		}else{
			return 0;
		}
	}

	function findNameById($id){
		$sql = "select name from " . $this->_table . " where id=" . $id;
		$name = DB::findOne($sql);
		return $name;
	}
	
}



?>