<?php
class orderModel{

	public $_table = 'orders';
	
	function add(){
		foreach ($_POST as $v) {
			if(empty($v)){
				showmessage("数据不完整！","index.php?controller=user&method=login");
			}
		}
		extract($_POST);
		$user = $_SESSION['user'];
		$objUser = M('user');
		$uid = $objUser->findUidByName($user);
		if(!$uid){exit('发生错误，获取不到当前用户的id！');}
		$data = array(
			'money' => intval($money),
			'payid' => $uid,
			'buyfrom' => $buyfrom,
			'timeline' => date($timeline),
			'marktime' => date('Y-m-d H:i:s')
			);
		DB::insert($this->_table,$data);
		return 1;
	}

	function findOrders(){
		$objUser = M('user');
		$uid = $objUser->findUidByName($_SESSION['user']);
		if(!$uid){exit('发生错误，获取不到当前用户的id！');}
		$sql = "select * from " . $this->_table . " where payid=" . $uid;
		$orders = DB::findAll($sql);
		$orderList = array();
		foreach ($orders as $v) {
			$items = $this->findItemsByOid($v['id']);
			$v['items'] = $items;
			$orderList[] = $v;
		}
		return $orderList;
	}


	function findItemsByOid($oid){
		$sql = "select * from items where oid=" . $oid;
		$items = DB::findAll($sql);
		$itemList = array();
		if($items != null){
			foreach ($items as $v) {
				$arr = M('user')->findNameById($v['buyid']);
				$v['name'] = $arr['name'];
				$itemList[] = $v;
			}
		}
		return $itemList;
	}


}


?>