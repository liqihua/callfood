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
			VIEW::display('index.html');
		}else{
			showmessage("用户名或密码错误！","index.php?controller=user&method=login");
		}
	}
}

?>