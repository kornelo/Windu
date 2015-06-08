<?php /* Smarty version Smarty-3.1.18, created on 2015-06-01 10:58:02
         compiled from "C:\WebServ\httpd\windu\data\widgets\mapsGoogle\mapsGoogleView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11480556c1e9aa2d176-72700558%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84ba418b7bce84ca4b7c33458fc2b29a15124045' => 
    array (
      0 => 'C:\\WebServ\\httpd\\windu\\data\\widgets\\mapsGoogle\\mapsGoogleView.tpl',
      1 => 1433148901,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11480556c1e9aa2d176-72700558',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_556c1e9aa4bb87_49075631',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c1e9aa4bb87_49075631')) {function content_556c1e9aa4bb87_49075631($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'C:\\WebServ\\httpd\\windu/app/plugins/html/smarty/plugins\\modifier.replace.php';
?><iframe width="<?php echo $_smarty_tpl->tpl_vars['params']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['params']->value['height'];?>
" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.pl/maps?q=<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['params']->value['adres']," ","+");?>
&t=h&z=<?php echo $_smarty_tpl->tpl_vars['params']->value['zoom'];?>
&output=embed"></iframe><?php }} ?>
