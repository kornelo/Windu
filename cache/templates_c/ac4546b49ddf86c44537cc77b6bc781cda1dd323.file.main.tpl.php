<?php /* Smarty version Smarty-3.1.18, created on 2015-06-01 10:34:38
         compiled from "C:\WebServ\httpd\windu\data\themes\Dirt-honey\tpl_main\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28552556c191eb113d5-21451681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac4546b49ddf86c44537cc77b6bc781cda1dd323' => 
    array (
      0 => 'C:\\WebServ\\httpd\\windu\\data\\themes\\Dirt-honey\\tpl_main\\main.tpl',
      1 => 1433147070,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28552556c191eb113d5-21451681',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'meta' => 0,
    'cssFile' => 0,
    'lessFile' => 0,
    'HOME' => 0,
    'jsFile' => 0,
    'pageTpl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_556c191ebc9483_27371575',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c191ebc9483_27371575')) {function content_556c191ebc9483_27371575($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="robots" content="INDEX, FOLLOW">
        <meta name="GOOGLEBOT" content="INDEX, FOLLOW">
        <meta name="revisit-after" content="7 days">
        <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['meta']->value->description;?>
">
        <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['meta']->value->keywords;?>
">
        <meta name="copyright" content="Copyright (c) WinduCMS">
        <meta name="distribution" content="global">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>      
		<?php  $_smarty_tpl->tpl_vars['cssFile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cssFile']->_loop = false;
 $_from = resourceManager::loadFrontCSS(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cssFile']->key => $_smarty_tpl->tpl_vars['cssFile']->value) {
$_smarty_tpl->tpl_vars['cssFile']->_loop = true;
?>
			<link rel='stylesheet' type='text/css' href='<?php echo $_smarty_tpl->tpl_vars['cssFile']->value;?>
'>
		<?php } ?>	
		<?php  $_smarty_tpl->tpl_vars['lessFile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lessFile']->_loop = false;
 $_from = resourceManager::loadFrontLESS(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lessFile']->key => $_smarty_tpl->tpl_vars['lessFile']->value) {
$_smarty_tpl->tpl_vars['lessFile']->_loop = true;
?>
			<link rel='stylesheet/less' type='text/css' href='<?php echo $_smarty_tpl->tpl_vars['lessFile']->value;?>
'>
		<?php } ?>
		<script type="text/javascript">
			window.HOME = "<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
";
			window.TEMPLATE = "<?php echo config::get('template');?>
";
		</script>	
		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<?php  $_smarty_tpl->tpl_vars['jsFile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['jsFile']->_loop = false;
 $_from = resourceManager::loadFrontJS(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['jsFile']->key => $_smarty_tpl->tpl_vars['jsFile']->value) {
$_smarty_tpl->tpl_vars['jsFile']->_loop = true;
?>
			<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jsFile']->value;?>
"></script>
		<?php } ?>
		<title><?php echo $_smarty_tpl->tpl_vars['meta']->value->title;?>
</title>
	</head>
<body>
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['pageTpl']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body> 
</html><?php }} ?>
