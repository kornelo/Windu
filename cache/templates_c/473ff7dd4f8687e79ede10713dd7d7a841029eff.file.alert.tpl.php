<?php /* Smarty version Smarty-3.1.18, created on 2015-06-01 10:34:33
         compiled from "C:\WebServ\httpd\windu\app\plugins\admin\templates\common\alert.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32207556c1919c91923-78969417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '473ff7dd4f8687e79ede10713dd7d7a841029eff' => 
    array (
      0 => 'C:\\WebServ\\httpd\\windu\\app\\plugins\\admin\\templates\\common\\alert.tpl',
      1 => 1398323024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32207556c1919c91923-78969417',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'REQUEST' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_556c1919cc0a63_56599219',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c1919cc0a63_56599219')) {function content_556c1919cc0a63_56599219($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'C:\\WebServ\\httpd\\windu/data/functions\\function.L.php';
?><?php if ($_smarty_tpl->tpl_vars['REQUEST']->value->getVariable('mp')!=null) {?>
<div class="alert-top alert-popup alert-popup-green">
	<strong><i class="icon-ok "></i>&nbsp;&nbsp;<?php echo smarty_function_L(array('key'=>$_smarty_tpl->tpl_vars['REQUEST']->value->getVariable('mp')),$_smarty_tpl);?>
</strong>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['REQUEST']->value->getVariable('mn')!=null) {?>
<div class="alert-top alert-popup alert-popup-red">
	<strong><i class="fa fa-times-circle "></i>&nbsp;&nbsp;<?php echo smarty_function_L(array('key'=>$_smarty_tpl->tpl_vars['REQUEST']->value->getVariable('mn')),$_smarty_tpl);?>
</strong>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['REQUEST']->value->getVariable('mi')!=null) {?>
<div class="alert-top alert-popup alert-popup-blue">
	<strong><i class="fa fa-info-circle "></i>&nbsp;&nbsp;<?php echo smarty_function_L(array('key'=>$_smarty_tpl->tpl_vars['REQUEST']->value->getVariable('mi')),$_smarty_tpl);?>
</strong>
</div>
<?php }?>
<div class="alert-top alert-popup alert-popup-green" style="display:none;">
	<strong><i class="icon-ok "></i>&nbsp;&nbsp;<?php echo smarty_function_L(array('key'=>'admin.message.success'),$_smarty_tpl);?>
</strong>
</div>
<div class="alert-top-autosave alert-popup alert-popup-green" style="display:none;">
	<strong><i class="icon-ok "></i>&nbsp;&nbsp;<?php echo smarty_function_L(array('key'=>'admin.message.success.autosave'),$_smarty_tpl);?>
</strong>
</div>


<?php }} ?>
