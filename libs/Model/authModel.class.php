<?php
class authModel{
	private $auth = '';		// 当前管理员的信息

	public function getauth(){
		return $this->auth;
	}

	public function __construct(){
		if(isset($_SESSION['auth']) && (!empty($_SESSION['auth']))){
			$this->auth = $_SESSION['auth'];
		}
	}


	// 进行登录验证的一系列业务逻辑
	public function loginsubmit(){
		if(empty($_POST['username']) || empty($_POST['password'])){
			return false;
		}
		$username = addslashes($_POST['username']);
		$password = addslashes($_POST['password']);
		if($this->auth = $this->checkuser($username,$password)){
			$_SESSION['auth'] = $this->auth;
			return true;
		}else{
			return false;
		}
	}

	private function checkuser($username,$password){
		$adminobj = M('admin');
		$auth = $adminobj->findOne_by_username($username);
		if(!empty($auth) && $auth['password'] == $password){
			return $auth;
		}else{
			return false;
		}
	}

	public function logout(){
		unset($_SESSION['auth']);
		$this->auth = '';
	}



}