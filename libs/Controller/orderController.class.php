<?php
class orderController{

	function index(){
		$objOrder = M('order');
		$data = $objOrder->findOrders();

		/*foreach ($data as $v) {
			print_r($v);
			echo "<br><br><br>";
		}
		exit;*/
		VIEW::assign(array('orders' => $data));
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


}



?>