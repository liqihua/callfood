<?php /* Smarty version 3.1.27, created on 2015-08-21 10:44:36
         compiled from "tpl\nav.html" */ ?>
<?php
/*%%SmartyHeaderCode:3170155d69094efc687_92279992%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b2cff17b838f723d9a5d8f5cb9b80d67e0cf23c' => 
    array (
      0 => 'tpl\\nav.html',
      1 => 1440124798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3170155d69094efc687_92279992',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55d69094f00501_12031676',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55d69094f00501_12031676')) {
function content_55d69094f00501_12031676 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3170155d69094efc687_92279992';
?>
<link rel="stylesheet" type="text/css" href="data/css/nav.css"/>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php?controller=index&method=index">蹭单吧</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul id="nav"class="nav navbar-nav">
        <li id="myItems">
	        <a href="index.php?controller=index&method=index">我的蹭单</a>
        </li>
        <li id="myOrders">
        	<a href="index.php?controller=order&method=index">我的订单</a>
        </li>
        <li id="addOrder">
        	<a href="index.php?controller=order&method=addOrder">添加订单</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<?php echo '<script'; ?>
 type='text/javascript'>
	$(document).ready(function(){
		$("#nav li").click(function(){
			$(this).addClass("active").siblings().removeClass("active");
		});
	});
<?php echo '</script'; ?>
><?php }
}
?>