<?php /* Smarty version 3.1.27, created on 2015-08-24 10:42:41
         compiled from "tpl\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:1781055da84a1c7dee0_04728096%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42a0998f5823a79eaa4328aafa51f4bc5f2403f4' => 
    array (
      0 => 'tpl\\index.html',
      1 => 1440384157,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1781055da84a1c7dee0_04728096',
  'variables' => 
  array (
    'myItems' => 0,
    'myItem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55da84a1cf3208_08996795',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55da84a1cf3208_08996795')) {
function content_55da84a1cf3208_08996795 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\liqihua\\apache\\htdocs\\callfood\\framework\\libs\\view\\Smarty\\plugins\\modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '1781055da84a1c7dee0_04728096';
?>
<html>
	<head>
		<meta http-equiv="content-type" type="text/html;charset=utf-8"/>
		<link rel="stylesheet" type="text/css" href="data/bootstrap/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="data/bootstrap/css/bootstrap-theme.css"/>
		<link rel="stylesheet" type="text/css" href="data/css/index.css"/>
		<?php echo '<script'; ?>
 type="text/javascript" src="data/bootstrap/js/jquery-1.11.3.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="data/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript">
			$(document).ready(function(){
				$("#myItems").addClass("active").siblings().removeClass("active");
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

	<div class="panel panel-info divMyItem">


	  	<div class="panel-heading">
	  		<div class="row">
				<div class="col-md-2">
				&nbsp;&nbsp;&nbsp;&nbsp;食品名称
				</div>
				<div class="col-md-2">
				&nbsp;&nbsp;&nbsp;商家名称
				</div>
				<div class="col-md-1">
				&nbsp;&nbsp;原价
				</div>
				<div class="col-md-1">
				&nbsp;实价
				</div>
				<div class="col-md-3 textCenter">
				时间&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</div>
				<div class="col-md-2">
				支付人
				</div>
				<div class="col-md-1">
				状态
				</div>
			</div>
	    </div>



		<div class="panel-body">
	  
			<?php if ($_smarty_tpl->tpl_vars['myItems']->value == '') {?>
				没有记录！
			<?php } else { ?>
				<?php
$_from = $_smarty_tpl->tpl_vars['myItems']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['myItem'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['myItem']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['myItem']->value) {
$_smarty_tpl->tpl_vars['myItem']->_loop = true;
$foreach_myItem_Sav = $_smarty_tpl->tpl_vars['myItem'];
?>
					<?php if ($_smarty_tpl->tpl_vars['myItem']->value['status'] == 1) {?>
						<div class="alert alert-success divItem" role="alert">
					<?php } else { ?>
						<div class="alert alert-danger divItem" role="alert">
					<?php }?>
						    <div class="row">
								<div class="col-md-2">
									<?php echo $_smarty_tpl->tpl_vars['myItem']->value['foodname'];?>

								</div>
								<div class="col-md-2">
									<?php echo $_smarty_tpl->tpl_vars['myItem']->value['buyfrom'];?>

								</div>
								<div class="col-md-1">
									￥<?php echo $_smarty_tpl->tpl_vars['myItem']->value['oprice'];?>

								</div>
								<div class="col-md-1">
									￥<?php echo $_smarty_tpl->tpl_vars['myItem']->value['tprice'];?>

								</div>
								<div class="col-md-3">
									<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['myItem']->value['timeline'],"D Y-m-d H:i:s");?>

								</div>
								<div class="col-md-2">
									&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['myItem']->value['name'];?>

								</div>
								<div class="col-md-1">
									<?php if ($_smarty_tpl->tpl_vars['myItem']->value['status'] == 1) {?>
										<span class="label label-success">已付款</span>
									<?php } else { ?>
										<span class="label label-danger">未付款</span>
									<?php }?>
								</div>
							</div>
		  				</div>
		  		<?php
$_smarty_tpl->tpl_vars['myItem'] = $foreach_myItem_Sav;
}
?>
			<?php }?>
		</div>



	</div>
	</body>
</html><?php }
}
?>