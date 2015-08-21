<?php

class adminController{

	public $auth='';

	public function __construct(){
		// 判断是否已经登录 -> auth模型处理
		// 如果不是登录页，而且没有登录，就要跳转到登录页
		$authobj = M('auth');
		$this->auth = $authobj->getauth();
		if(empty($this->auth) && PC::$method != 'login'){
			$this->showmessage('请登录后再操作！','admin.php?controller=admin&method=login');
		}
	}

	public function index(){
		$newsobj = M('news');
		$newsnum = $newsobj->count();
		VIEW::assign(array('newsnum' => $newsnum));
		VIEW::display('admin/index.html');
	}

	public function login(){
		if($_POST){
			// 进行登录处理
			// 登录业务逻辑放在 admin auth 模型
			// admin模型：同表名的模型:从数据库里取用户信息
			// auth模型：进行用户信息的核对
			// --> 把一系列的登录处理操作拆分到新的方法里去
			$this->checklogin();
		}else{
			//显示界面
			VIEW::display('admin/login.html');
		}
	}

	public function logout(){
		$authobj = M('auth');
		$authobj->logout();
		$this->showmessage('退出成功！','admin.php?controller=admin&method=login');
	}


	private function checklogin(){
		$authobj = M('auth');
		if($authobj->loginsubmit()){
			$this->showmessage('登录成功！','admin.php?controller=admin&method=index');
		}else{
			$this->showmessage('登录失败！','admin.php?controller=admin&method=login');
		}
	}

	private function showmessage($info, $url){
		echo "<script>alert('$info');window.location.href='$url'</script>";
		exit;
	}

	//添加新闻
	public function newsadd(){
		//判断是否有post数据
		if(empty($_POST)){		//没有，就显示添加、修改的界面
			//读取旧信息,需要传递新闻id
			if(isset($_GET['id'])){
				$data = M('news')->getnewsinfo($_GET['id']);
			}else{
				$data = array();
			}
			VIEW::assign(array('data' => $data));
			VIEW::display('admin/newsadd.html');
		}else{		//有，就进入添加、修改的处理程序
			$this->newssubmit();
		}
	}

	private function newssubmit(){
		$newsobj = M('news');
		$result = $newsobj->newssubmit($_POST);
		if($result == 0){
			$this->showmessage('操作失败！','admin.php?controller=admin&method=newsadd&id=' . $_POST['id']);
		}
		if($result == 1){
			$this->showmessage('添加成功！','admin.php?controller=admin&method=newslist');
		}
		if($result == 2){
			$this->showmessage('修改成功！','admin.php?controller=admin&method=newslist');
		}
	}

	public function newslist(){
		$data = $this->getnewslist();
		VIEW::assign(array('data' => $data));
		VIEW::display('admin/newslist.html');
	}

	private function getnewslist(){
		$newsobj = M('news');
		return $newsobj->findAll_orderby_dateline();
	}

	public function newsdel(){
		if(intval($_GET['id'])){
			$newsobj = M('news');
			$newsobj->del_by_id(intval($_GET['id']));
			$this->showmessage('删除新闻成功！','admin.php?controller=admin&method=newslist');
		}
	}



}

