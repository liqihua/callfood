<?php /* Smarty version 3.1.27, created on 2015-08-21 08:32:58
         compiled from "tpl\login.html" */ ?>
<?php
/*%%SmartyHeaderCode:1066755d671ba66f9e6_37332146%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'effe9b8452f05a59c1b9d15c345a17d39d8de374' => 
    array (
      0 => 'tpl\\login.html',
      1 => 1440116685,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1066755d671ba66f9e6_37332146',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55d671ba6ae1e2_02608398',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55d671ba6ae1e2_02608398')) {
function content_55d671ba6ae1e2_02608398 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1066755d671ba66f9e6_37332146';
?>
<html>
	<head>
		<meta http-equiv="content-type" type="text/html;charset=utf-8"/>
		<link rel="stylesheet" type="text/css" href="data/bootstrap/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="data/bootstrap/css/bootstrap-theme.css"/>
		<link rel="stylesheet" type="text/css" href="data/css/login.css"/>
		<?php echo '<script'; ?>
 type="text/javascript" src="data/bootstrap/js/jquery-1.11.3.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="data/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript">
			/*function goRegist(){
				document.getElementById("formLogin").style.display = "none";
				document.getElementById("formRegist").style.display = "block";
			}
			function goLogin(){
				document.getElementById("formLogin").style.display = "block";
				document.getElementById("formRegist").style.display = "none";
			}*/
			$(document).ready(function(){
				$("#btnGoRegist").click(function(){
					$("#formLogin").hide(500);
					$("#formRegist").show(500);
				});
				$("#btnGoLogin").click(function(){
					$("#formRegist").hide(500);
					$("#formLogin").show(500);
				});
			});
		<?php echo '</script'; ?>
>
	</head>
	<body>
		<form id="formLogin" action="index.php?controller=user&method=login" method="post">
			<div class="divLogin-wrap">
				<div class="divLogin">
				  	<div class="form-group">
					    <label for="username">Email address</label>
					    <input name="username" type="email" class="form-control" id="username" placeholder="Email / Username">
				  	</div>
				  	<div class="form-group">
					    <label for="password">Password</label>
					    <input name="password" type="password" class="form-control" id="password" placeholder="Password">
				  	</div>
				  	<div class="row">
				  		<span class="col-xs-1"></span>
					  	<button type="submit" class="btn btn-success col-xs-4">Sign in</button>
					  	<span class="col-xs-1"></span>
					  	<button id="btnGoRegist" type="button"  class="btn btn-default col-xs-4">Regist</button>
				  	</div>
			  	</div>
		  	</div>
		</form>





		<form id="formRegist" action="index.php?controller=user&method=regist" method="post">
			<div class="divLogin-wrap">
				<div class="divLogin">
				  	<div class="form-group">
					    <label for="username">Email address</label>
					    <input name="username" type="email" class="form-control" id="username" placeholder="Email / Username">
				  	</div>
				  	<div class="form-group">
					    <label for="password">Password</label>
					    <input name="password" type="password" class="form-control" id="password" placeholder="Password">
				  	</div>
				  	<div class="form-group">
					    <label for="confirm">Confirm</label>
					    <input name="cpassword" type="password" class="form-control" id="confirm" placeholder="Confirm Password">
				  	</div>
				  	<div class="form-group">
					    <label for="name">Your Name</label>
					    <input name="name" type="text" class="form-control" id="name" placeholder="Your name">
				  	</div>
				  	<div class="row">
				  		<span class="col-xs-1"></span>
				  		<button type="submit" onclick="goRegist()" class="btn btn-success col-xs-4">Regist</button>
					  	<span class="col-xs-1"></span>
					  	<button id="btnGoLogin" type="button"  class="btn btn-default col-xs-4">Sign in</button>
				  	</div>
			  	</div>
		  	</div>
		</form>
	</body>
</html><?php }
}
?>