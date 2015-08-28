<?php /* Smarty version 3.1.27, created on 2015-08-28 02:47:23
         compiled from "tpl\nav.html" */ ?>
<?php
/*%%SmartyHeaderCode:836555dfcbbbb0d5f7_01802474%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b2cff17b838f723d9a5d8f5cb9b80d67e0cf23c' => 
    array (
      0 => 'tpl\\nav.html',
      1 => 1440728213,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '836555dfcbbbb0d5f7_01802474',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55dfcbbbc325c1_06808297',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55dfcbbbc325c1_06808297')) {
function content_55dfcbbbc325c1_06808297 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '836555dfcbbbb0d5f7_01802474';
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
      <div class="divLogin">
        <a class="aName" href="" data-toggle="modal" data-target="#modelInfo"><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</a>&nbsp;&nbsp;&nbsp;
        <a class="btn btn-default btn-xs" href="index.php?controller=user&method=logout">退出</a>
      </div>
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
>




<div class="modal fade" id="modelInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <form action="index.php?controller=user&method=updateInfo" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">个人中心</h4>
        </div>
        <div class="modal-body">
          
          <div class="form-group">
              <label for="name">姓名</label>
              <input name="name" type="text" class="form-control" id="name" placeholder="姓名">
          </div>
          <div class="form-group">
              <label for="password">新密码</label>
              <input name="password" type="password" class="form-control" id="name" placeholder="password">
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
        </div>
        </form>
      </div>
    </div><?php }
}
?>