<?php
class indexController{

	function index(){
		/*$newsobj = M("news");
		$data = $newsobj->get_news_list();
		VIEW::assign(array('data' => $data));*/
		if(!isset($_SESSION['user']) || (empty($_SESSION['user']))){
			var_dump($_SESSION['user']);
			VIEW::display('login.html');
		}else{
			VIEW::display('index.html');
		}
	}

	

}




?>