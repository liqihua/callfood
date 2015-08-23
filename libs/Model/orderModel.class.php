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
		$sql = "select * from " . $this->_table . " where payid=" . $uid . " order by timeline desc";
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

	function addItem(){
		foreach ($_POST as $v) {
			if(empty($v)){
				showmessage("数据不完整！","index.php?controller=order&method=index");
			}
		}
		extract($_POST);
		$oprice = intval($oprice);
		$tprice = intval($tprice);
		if((!$oprice) || (!$tprice)){
			showmessage("价格输入有误！","index.php?controller=order&method=index");
		}
		$data = array(
			'oid' => $oid,
			'buyid' => $buyid,
			'foodname' => $foodname,
			'oprice' => $oprice,
			'tprice' => $tprice
			);
		$insertId = DB::insert('items',$data);
		$this->checkOrderStatusByItem($insertId);
		if($insertId){
			return true;
		}else{
			return false;
		}
	}


	function delPeo($id){
		DB::del('items','id=' . $id);
	}

	function delOrder($id){
		DB::del($this->_table,'id=' . $id);
	}

	function getMoney($id){
		$data = array('status' => 1);
		DB::update('items',$data,'id=' . $id);
		$this->checkOrderStatusByItem($id);
	}

	function checkOrderStatusByItem($itemId){
		$sql_oid = "select oid from items where id=" . $itemId;
		$arr_oid = DB::findOne($sql_oid);
		$oid = $arr_oid['oid'];
		$sql = "select status from items where oid=" . $oid;
		$arr = DB::findAll($sql);
		$finish = true;
		foreach ($arr as $v) {
			if(!$v['status']){
				$finish = false;
			}
		}
		if($finish){
			DB::update($this->_table,array('status' => 1),'id=' . $oid);
		}else{
			DB::update($this->_table,array('status' => 0),'id=' . $oid);
		}
	}


	function findItems(){
		$sql = "select a.*,b.buyfrom,b.timeline,c.name from items a,orders b,users c where a.oid=b.id and c.id=b.payid and c.name != '".$_SESSION['user']."' order by timeline desc";
		$arr = DB::findAll($sql);
		return $arr;
	}

















}


?>