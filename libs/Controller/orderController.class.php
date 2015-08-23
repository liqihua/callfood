<?php
class orderController{

	function index(){
		$objOrder = M('order');
		$data = $objOrder->findOrders();
		$objUser = M('user');
		$peos = $objUser->findAllUserAndId();
		VIEW::assign(array(
			'orders' => $data,
			'peos' => $peos
			));
		VIEW::display('order.html');
	}

	function addOrder(){
		VIEW::display('addOrder.html');
	}

	function add(){
		$obj = M('order');
		$res = $obj->add();
		if($res){
			showmessage("添加成功！","index.php?controller=order&method=index");
		}else{
			exit('发生错误！');
		}
	}

	function addItem(){
		var_dump($_POST);
		echo "<hr>";
		$objOrder = M('order');
		$res = $objOrder->addItem();
		if($res){
			$this->index();
		}else{
			showmessage("发生错误，订单成员添加失败！","index.php?controller=order&method=index");
		}
	}

	function delPeo(){
		$id = $_GET['id'];
		if(empty(id)){
			showmessage("发生错误，获取不到 id ！","index.php?controller=order&method=index");
		}
		$objOrder = M('order');
		$objOrder->delPeo($id);
		$this->index();
	}

	function delOrder(){
		$id = $_GET['id'];
		if(empty(id)){
			showmessage("发生错误，获取不到 id ！","index.php?controller=order&method=index");
		}
		$objOrder = M('order');
		$objOrder->delOrder($id);
		$this->index();
	}

	function getMoney(){
		$id = $_GET['id'];
		if(empty(id)){
			showmessage("发生错误，获取不到 id ！","index.php?controller=order&method=index");
		}
		$objOrder = M('order');
		$objOrder->getMoney($id);
		$this->index();
	}


}



?>