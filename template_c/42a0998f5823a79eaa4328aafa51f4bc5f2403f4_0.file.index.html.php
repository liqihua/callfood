<?php /* Smarty version 3.1.27, created on 2015-08-21 10:45:08
         compiled from "tpl\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:1274255d690b4cfd929_74388249%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42a0998f5823a79eaa4328aafa51f4bc5f2403f4' => 
    array (
      0 => 'tpl\\index.html',
      1 => 1440125107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1274255d690b4cfd929_74388249',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55d690b4d43e21_27451495',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55d690b4d43e21_27451495')) {
function content_55d690b4d43e21_27451495 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1274255d690b4cfd929_74388249';
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
	index.html
	</body>
</html><?php }
}
?>