<?php
	function C($name,$method){
		require_once('/libs/Controller/'.$name.'Controller.class.php');
		/*
		第一版
		$testController = new testController();
		$testController->show();*/
		/*
		修改后
		eval('$obj = new '.$name.'Controller();$obj->'.$method.'()');
		*/
		/*
		eval函数调用简单但是不安全，用以下代码代替
		*/
		$controller = $name.'Controller';
		$obj = new $controller();
		$obj->$method();
	}

	function  M($name){
		require_once('/libs/Model/'.$name.'Model.class.php');
		$model = $name.'Model';
		$obj = new $model();
		return $obj;
	}

	function V($name){
		require_once('/libs/View/'.$name.'View.class.php');
		$view = $name.'View';
		$obj = new $view();
		return $obj;
	}

	// 将字符加上斜杠进行转义
	function daddslashes($str){
		return (!get_magic_quotes_gpc()) ? addslashes($str) : $str;
	}


	function showmessage($info, $url){
		echo "<script>alert('$info');window.location.href='$url'</script>";
		exit;
	}

	
	/*path是路径，name是第三方类名，params是该类初始化的时候需要
	指定、赋值的属性，格式为array(属性名=>属性值，..)*/
	function ORG($path,$name,$params=array()){
		require_once('libs/ORG/'.$path.$name.'.class.php');
		$obj = new $name();
		if(!empty($params)){
			foreach($params as $key => $value){
				$obj->$key = $value;
			}
		}
		return $obj;
	}


?>