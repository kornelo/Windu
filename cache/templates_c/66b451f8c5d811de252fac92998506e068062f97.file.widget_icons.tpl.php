<?php /* Smarty version Smarty-3.1.18, created on 2015-06-01 10:34:34
         compiled from "C:\WebServ\httpd\windu\app\plugins\admin\templates\common\widget_icons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21473556c191acf39a5-91715728%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66b451f8c5d811de252fac92998506e068062f97' => 
    array (
      0 => 'C:\\WebServ\\httpd\\windu\\app\\plugins\\admin\\templates\\common\\widget_icons.tpl',
      1 => 1398323026,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21473556c191acf39a5-91715728',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'themename' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_556c191ad201a7_59752753',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c191ad201a7_59752753')) {function content_556c191ad201a7_59752753($_smarty_tpl) {?>	<?php if (preg_match('/menuu*/',$_smarty_tpl->tpl_vars['themename']->value)) {?>
    	<i class="color-icons icons-property icon-margin"> </i>
    <?php } elseif (preg_match('/sliderr*/',$_smarty_tpl->tpl_vars['themename']->value)) {?>	
    	<i class="color-icons icons-projection-screen icon-margin"> </i>	
    <?php } elseif (preg_match('/search*/',$_smarty_tpl->tpl_vars['themename']->value)) {?>	
    	<i class="color-icons icons-magnifier-medium icon-margin"> </i>	
    <?php } elseif (preg_match('/user*/',$_smarty_tpl->tpl_vars['themename']->value)) {?>	
    	<i class="color-icons icons-user-gray icon-margin"> </i>	
    <?php } elseif (preg_match('/tags*/',$_smarty_tpl->tpl_vars['themename']->value)) {?>	
    	<i class="color-icons icons-price-tag icon-margin"> </i>	
    <?php } elseif (preg_match('/content*/',$_smarty_tpl->tpl_vars['themename']->value)) {?>	
    	<i class="color-icons icons-clipboard-text icon-margin"> </i>			    			    			    			    	
    <?php } else { ?>
    	<i class="color-icons icons-rocket icon-margin"> </i>	
	<?php }?>      	
<?php }} ?>
