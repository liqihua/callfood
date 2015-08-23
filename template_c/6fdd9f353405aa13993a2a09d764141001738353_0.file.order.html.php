<?php /* Smarty version 3.1.27, created on 2015-08-23 15:00:48
         compiled from "tpl\order.html" */ ?>
<?php
/*%%SmartyHeaderCode:1884555d96fa09595a1_44972681%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fdd9f353405aa13993a2a09d764141001738353' => 
    array (
      0 => 'tpl\\order.html',
      1 => 1440313247,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1884555d96fa09595a1_44972681',
  'variables' => 
  array (
    'orders' => 0,
    'order' => 0,
    'aa' => 0,
    'peos' => 0,
    'peo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55d96fa09f1b20_85599160',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55d96fa09f1b20_85599160')) {
function content_55d96fa09f1b20_85599160 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\liqihua\\apache\\htdocs\\callfood\\framework\\libs\\view\\Smarty\\plugins\\modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '1884555d96fa09595a1_44972681';
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
				$(".btnAddPeo").click(function(){
					var oid = $(this).parent().attr("id");
					$("#oid").attr("value",oid);
				});
			});

			function delPeo(id){
				var del = confirm("你确定要删除他？");
				if(del){
					window.location.href="index.php?controller=order&method=delPeo&id="+id;
				}
			}

			function delOrder(id){
				var del = confirm("你确定要删除此订单？");
				if(del){
					window.location.href="index.php?controller=order&method=delOrder&id="+id;
				}
			}

			function gitMoney(id){
				var get = confirm("确定已收到对方付款？注意：一旦确定，不能修改！");
				if(get){
					window.location.href="index.php?controller=order&method=getMoney&id="+id;
				}
			}

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

		<?php if ($_smarty_tpl->tpl_vars['order']->value['status'] == 1) {?>
		<div class="panel panel-success">
		<?php } else { ?>
		<div class="panel panel-danger">
		<?php }?>
		  <div class="panel-heading">
		  	<div class="row">
			  <div class="col-md-2">
			  	<?php echo $_smarty_tpl->tpl_vars['order']->value['buyfrom'];?>

			  </div>
			  <div class="col-md-2">
			  	金额：￥<?php echo $_smarty_tpl->tpl_vars['order']->value['money'];?>

			  </div>
			  <div class="col-md-4">
			  	时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['order']->value['timeline'],"D Y-m-d H:i:s");?>

			  </div>
			  <div id="<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
" class="col-md-2">
			  	<button class="btn btn-info btn-sm btnAddPeo" data-toggle="modal" data-target="#myModal">添加成员</button>
			  </div>
			  <div class="btnCenter col-md-2">
			  	<button onclick="delOrder(<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
)" class="btn btn-default btn-sm">删除订单</button>
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
				  		<?php if ($_smarty_tpl->tpl_vars['aa']->value['status'] == 0) {?>
				  			<button onclick="gitMoney(<?php echo $_smarty_tpl->tpl_vars['aa']->value['id'];?>
)" class="btn btn-danger btn-xs">确认收钱</button>
				  		<?php } else { ?>
				  			<span class="label label-success">&nbsp;已收&nbsp;</span>
				  		<?php }?>
				  	</div>
				  	<div class="col-md-2 btnCenter">
				  		<button class="btn btn-default btn-xs" onclick="delPeo(<?php echo $_smarty_tpl->tpl_vars['aa']->value['id'];?>
)">删除成员</button>
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
	  	<form action="index.php?controller=order&method=addItem" method="post">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
	      </div>
	      <div class="modal-body">
	        
	        	<input id="oid" type="hidden" name="oid" value=""/>
	        	<div class="form-group divSelector">
				    <label for="buyid">蹭单人</label>
				    <div class="input-group selector">
					    <select id="buyid" name="buyid" class="form-control">
					    	<?php
$_from = $_smarty_tpl->tpl_vars['peos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['peo'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['peo']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['peo']->value) {
$_smarty_tpl->tpl_vars['peo']->_loop = true;
$foreach_peo_Sav = $_smarty_tpl->tpl_vars['peo'];
?>
					    		<option value="<?php echo $_smarty_tpl->tpl_vars['peo']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['peo']->value['name'];?>
</option>
					    	<?php
$_smarty_tpl->tpl_vars['peo'] = $foreach_peo_Sav;
}
?>
				        </select>
				    </div>
				</div>
	        	<div class="form-group">
				    <label for="foodname">食品名称</label>
				    <input name="foodname" type="text" class="form-control" id="foodname" placeholder="食品名称">
				</div>
				<div class="form-group">
				    <label for="oprice">原价</label>
				    <div class="input-group">
					    <div class="input-group-addon">$</div>
					    <input name="oprice" type="number" class="form-control" id="oprice" placeholder="原价">
				    </div>
				</div>
				<div class="form-group">
				    <label for="tprice">实价</label>
				    <div class="input-group">
					    <div class="input-group-addon">$</div>
					    <input name="tprice" type="number" class="form-control" id="tprice" placeholder="实价">
				    </div>
				</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Save</button>
	      </div>
	      </div>
	      </form>
	    </div>
	  </div>


	</body>
</html><?php }
}
?>