<?php /* Smarty version 3.1.27, created on 2015-08-21 17:34:50
         compiled from "tpl\order.html" */ ?>
<?php
/*%%SmartyHeaderCode:1108455d6f0ba5908b1_30565052%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fdd9f353405aa13993a2a09d764141001738353' => 
    array (
      0 => 'tpl\\order.html',
      1 => 1440149677,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1108455d6f0ba5908b1_30565052',
  'variables' => 
  array (
    'orders' => 0,
    'order' => 0,
    'aa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55d6f0ba5fa039_98330921',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55d6f0ba5fa039_98330921')) {
function content_55d6f0ba5fa039_98330921 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1108455d6f0ba5908b1_30565052';
?>
<html>
	<head>
		<meta http-equiv="content-type" type="text/html;charset=utf-8"/>
		<link rel="stylesheet" type="text/css" href="data/bootstrap/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="data/bootstrap/css/bootstrap-theme.css"/>
		<link rel="stylesheet" type="text/css" href="data/css/order.css"/>
		<?php echo '<script'; ?>
 type="text/javascript" src="data/bootstrap/js/jquery-1.11.3.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="data/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript">
			$(document).ready(function(){
				$("#myOrders").addClass("active").siblings().removeClass("active");
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

	<div calss="divOrdersWrap">

		<?php
$_from = $_smarty_tpl->tpl_vars['orders']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['order'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['order']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
$foreach_order_Sav = $_smarty_tpl->tpl_vars['order'];
?>
		<div class="panel panel-warning">
		  <div class="panel-heading">
		  	<div class="row">
			  <div class="col-md-3">
			  	<?php echo $_smarty_tpl->tpl_vars['order']->value['buyfrom'];?>

			  </div>
			  <div class="col-md-3">
			  	金额：￥<?php echo $_smarty_tpl->tpl_vars['order']->value['money'];?>

			  </div>
			  <div class="col-md-3">
			  	时间：<?php echo $_smarty_tpl->tpl_vars['order']->value['timeline'];?>

			  </div>
			  <div class="btnAdd col-md-3">
			  	<button class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">添加成员</button>
			  </div>
		  	</div>
		  </div>
		  <div class="panel-body">

		      <?php
$_from = $_smarty_tpl->tpl_vars['order']->value['items'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['aa'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['aa']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['aa']->value) {
$_smarty_tpl->tpl_vars['aa']->_loop = true;
$foreach_aa_Sav = $_smarty_tpl->tpl_vars['aa'];
?>
		      	<?php if ($_smarty_tpl->tpl_vars['aa']->value != null) {?>
		      		<div class="item row">
				  	<div class="col-md-2"><?php echo $_smarty_tpl->tpl_vars['aa']->value['name'];?>
</div>
				  	<div class="col-md-2"><?php echo $_smarty_tpl->tpl_vars['aa']->value['foodname'];?>
</div>
				  	<div class="col-md-2">￥<?php echo $_smarty_tpl->tpl_vars['aa']->value['oprice'];?>
</div>
				  	<div class="col-md-2">￥<?php echo $_smarty_tpl->tpl_vars['aa']->value['tprice'];?>
</div>
				  	<div class="col-md-2">
				  		<button class="btn btn-primary btn-xs">确认收钱</button>
				  	</div>
				  	<div class="col-md-2">
				  		<button class="btn btn-default btn-xs">删除</button>
				  	</div>
				  	</div>
		    	<?php }?>
			  <?php
$_smarty_tpl->tpl_vars['aa'] = $foreach_aa_Sav;
}
?>

		  </div>
		</div>
		<?php
$_smarty_tpl->tpl_vars['order'] = $foreach_order_Sav;
}
if (!$_smarty_tpl->tpl_vars['order']->_loop) {
?>
			没有订单！
		<?php
}
?>
	</div>

	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
	      </div>
	      <div class="modal-body">
	        <form>
	        	<div class="form-group">
				    <label for="restuarant">商家</label>
				    <input name="buyfrom" type="text" class="form-control" id="restuarant" placeholder="商家">
				  </div>
				  <div class="form-group">
				    <label for="money">金额</label>
				    <div class="input-group">
					    <div class="input-group-addon">$</div>
					    <input name="money" type="number" class="form-control" id="momey" placeholder="金额">
				    </div>
				  </div>
				  <div class="form-group divSelector">
				    <label for="money">成员</label>
				    <div class="input-group selector">
					    <select class="form-control">
				          <option>cow</option>
				          <option>bull</option>
						  <option>cccccc</option>
				          <option class="get-class" disabled>ox</option>
				        </select>
				    </div>
				  </div>
	        </form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
	    </div>
	  </div>
	</div>


	</body>
</html><?php }
}
?>