<?php
class indexController{

	function index(){
		if(!isset($_SESSION['user']) || (empty($_SESSION['user']))){
			VIEW::display('login.html');
		}else{
			$myItems = $this->findItems();
			VIEW::assign(array('user' => $_SESSION['user'],'myItems' => $myItems));
			VIEW::display('index.html');
		}
	}


	function findItems(){
		$objOrder = M('order');
		$arr = $objOrder->findItems();
		return $arr;
	}
	

	

}




?>