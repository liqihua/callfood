<?php
	header("Content-Type:text/html;charset=utf-8");
	session_start();
	require_once('config.php');
	require_once('framework/pc.php');
	PC::run($config);
	

?>