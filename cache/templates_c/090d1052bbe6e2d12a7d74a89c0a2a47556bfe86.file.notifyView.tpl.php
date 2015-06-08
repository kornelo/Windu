<?php /* Smarty version Smarty-3.1.18, created on 2015-06-01 10:34:38
         compiled from "C:\WebServ\httpd\windu\data\widgets\notify\notifyView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9542556c191ee1f828-80149812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '090d1052bbe6e2d12a7d74a89c0a2a47556bfe86' => 
    array (
      0 => 'C:\\WebServ\\httpd\\windu\\data\\widgets\\notify\\notifyView.tpl',
      1 => 1433147624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9542556c191ee1f828-80149812',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_556c191ee493a4_08712449',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c191ee493a4_08712449')) {function content_556c191ee493a4_08712449($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'C:\\WebServ\\httpd\\windu/data/functions\\function.L.php';
?><?php if ($_smarty_tpl->tpl_vars['data']->value['notifyMessageNegative']!='') {?>
	<div class="alert alert-error">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<?php echo smarty_function_L(array('key'=>$_smarty_tpl->tpl_vars['data']->value['notifyMessageNegative']),$_smarty_tpl);?>

	</div>
<?php } elseif ($_smarty_tpl->tpl_vars['data']->value['notifyMessagePositive']!='') {?>
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<?php echo smarty_function_L(array('key'=>$_smarty_tpl->tpl_vars['data']->value['notifyMessagePositive']),$_smarty_tpl);?>

	</div>
<?php }?>
<?php }} ?>
