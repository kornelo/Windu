<?php /* Smarty version Smarty-3.1.18, created on 2015-06-01 11:06:12
         compiled from "C:\WebServ\httpd\windu\app\templates\error404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11688556c20845a7649-10116545%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d3c0ec85e50777ec800e4d9ba14fef05855cf53' => 
    array (
      0 => 'C:\\WebServ\\httpd\\windu\\app\\templates\\error404.tpl',
      1 => 1398323026,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11688556c20845a7649-10116545',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_556c2084656580_03896469',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c2084656580_03896469')) {function content_556c2084656580_03896469($_smarty_tpl) {?><?php echo header('HTTP/1.x 404 Not Found');?>

<?php echo header("Status: 404 Not Found");?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel='stylesheet' href='<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
app/resources/css/reset.css'>
		<link rel='stylesheet' href='<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
app/resources/css/404.css'>
		<title>Error 404</title>
	</head>
<body>
	<div class="errorMessage">
		<img src="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
app/resources/img/icon404.png"><br>
		Windu <strong>Error 404</strong>
		<p class="small">Page not exists! <a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
">Home page</a></p>
	</div>
</body> 
</html><?php }} ?>
