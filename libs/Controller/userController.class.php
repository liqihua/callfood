<?php
class userController{

	function regist(){
		if(empty($_POST)){
			VIEW::display('login.html');
		}else{
			$this->doRegist();
		}
	}

	function doRegist(){
		$obj = M('user');
		$obj->regist();
	}

	function login(){
		if(empty($_POST)){
			VIEW::display('login.html');
		}else{
			$this->doLogin();
		}
	}

	function doLogin(){
		$obj = M('user');
		$res = $obj->login();
		if($res){
			C('index','index');
		}else{
			showmessage("用户名或密码错误！","index.php?controller=user&method=login");
		}
	}

	function logout(){
		$objUser = M('user');
		$objUser->logout();
		C('index','index');
	}

	function updateInfo(){
		$objUser = M('user');
		$objUser->updateInfo();
		unset($_SESSION['user']);
		C('index','index');
	}





}

?>