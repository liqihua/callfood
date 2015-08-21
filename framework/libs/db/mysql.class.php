<?php
class mysql{

	// 报错函数
	function err($error){
		die("对不起，你的操作有误，错误为：".$error);
	}

	// 连接函数，$config配置数组array($dbhost,$dbuser,$dbpsw,$dbname,$dbcharset)
	function connect($config){
		extract($config);
		// 连接数据库服务器

		mysql_connect($dbhost,$dbuser,$dbpsw);
		if(!($con = mysql_connect($dbhost,$dbuser,$dbpsw))){
			$this->err(mysql_error());
		}
		// 连接数据库
		if(!(mysql_select_db($dbname,$con))){
			$this->err(mysql_error());
		}
		// 设置编码
		mysql_query("set names ".$dbcharset);
	}

	// 返回资源
	function query($sql){
		if(!($query = mysql_query($sql))){
			$this->err($sql."<br>".mysql_error());
		}else{
			return $query;
		}
	}

	// 返回列表
	function findAll($query){
		while($rs = mysql_fetch_array($query,MYSQL_ASSOC)){
			$list[] = $rs;
		}
		return isset($list) ? $list : "";
	}

	// 返回单个数据
	function findOne($query){
		$rs = mysql_fetch_array($query,MYSQL_ASSOC);
		return $rs;
	}

	// 返回指定行的指定字段的值
	function findResult($query,$row = 0,$field = 0){
		$rs = mysql_result($query,$row,$field);
		return $rs;
	}

	// 插入方法,$arr是包含字段和值的一维数组
	function insert($table,$arr){
		// $sql = "insert into 表名(多个字段) values (多个值)"
		foreach($arr as $key => $value){
			// mysql_real_escape_string — 转义 SQL 语句中使用的字符串中的特殊字符
			$value = mysql_real_escape_string($value);
			$keyArr[] = "`" . $key . "`";
			$valueArr[] = "'" . $value . "'";
		}
		$keys = implode(",",$keyArr);
		$values = implode(",",$valueArr);
		$sql = "insert into " . $table . "(" . $keys . ") values (" . $values . ")";
		$this->query($sql);
		return mysql_insert_id();
	}

	//更新
	function update($table,$arr,$where){
		foreach($arr as $key => $value){
			$value = mysql_real_escape_string($value);
			$keyAndValueArr[] = "`" . $key . "`='" . $value . "'";
		}
		$keyAndValues = implode(",",$keyAndValueArr);
		$sql = "update " . $table . " set " . $keyAndValues . " where " . $where;
		$this->query($sql);
	}

	//删除
	function del($table,$where){
		$sql = "delete from " . $table . " where " . $where;
		$this->query($sql);
	}


}


?>