<?php /* Smarty version 3.1.27, created on 2015-08-21 16:49:10
         compiled from "tpl\addOrder.html" */ ?>
<?php
/*%%SmartyHeaderCode:1653655d6e60650b846_44596291%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '335c899a41ff7c880cee00e2b75b5a4565e1724d' => 
    array (
      0 => 'tpl\\addOrder.html',
      1 => 1440146949,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1653655d6e60650b846_44596291',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55d6e606555bc0_95543363',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55d6e606555bc0_95543363')) {
function content_55d6e606555bc0_95543363 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1653655d6e60650b846_44596291';
?>
<!doctype html>
<html>
	<head>
		<meta http-equiv="content-type" type="text/html;charset=utf-8"/>
		<link rel="stylesheet" type="text/css" href="data/bootstrap/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="data/bootstrap/css/bootstrap-theme.css"/>
		<link rel="stylesheet" type="text/css" href="data/css/addOrder.css"/>
		<?php echo '<script'; ?>
 type="text/javascript" src="data/bootstrap/js/jquery-1.11.3.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="data/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="data/laydate/WdatePicker.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript">
			$(document).ready(function(){
				$("#addOrder").addClass("active").siblings().removeClass("active");
			});
		<?php echo '</script'; ?>
>
	</head>
	<body>
	<?php echo $_smarty_tpl->getSubTemplate ("nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<br>
	<br>
	<br>
	<div class="divAddOrderWrap">
		<div class="divAddOrder">
			<form action="index.php?controller=order&method=add" method="post">
			  <div class="form-group">
			    <label for="restuarant">商家</label>
			    <input name="buyfrom" type="text" class="form-control" id="restuarant" placeholder="商家">
			  </div>
			  <br>
			  <div class="form-group">
			    <label for="money">金额</label>
			    <div class="input-group">
				    <div class="input-group-addon">$</div>
				    <input name="money" type="number" class="form-control" id="momey" placeholder="金额">
			    </div>
			  </div>
			  <br>
			  <div class="form-group">
			    <label for="timeline">时间</label>
			    <input name="timeline" onclick="WdatePicker()" type="text" class="form-control" id="timeline" placeholder="时间">
			  </div>
			  <br>
			  <button type="submit" class="btn btn-primary btn-lg">添加</button>
			</form>
		</div>
	</div>
	</body>
</html><?php }
}
?>