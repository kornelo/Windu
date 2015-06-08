<?php /* Smarty version Smarty-3.1.18, created on 2015-06-01 10:54:11
         compiled from "C:\WebServ\httpd\windu\data\widgets\messages\messagesView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29940556c1db3315390-62424031%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c048dfcc3d6515243c16d21b4f405197ab94c33' => 
    array (
      0 => 'C:\\WebServ\\httpd\\windu\\data\\widgets\\messages\\messagesView.tpl',
      1 => 1433147623,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29940556c1db3315390-62424031',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_556c1db3321c20_05868319',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c1db3321c20_05868319')) {function content_556c1db3321c20_05868319($_smarty_tpl) {?><h3>Example of messages widget</h3>
<div><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
</div><?php }} ?>
