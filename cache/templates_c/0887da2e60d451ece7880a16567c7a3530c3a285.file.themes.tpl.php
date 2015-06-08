<?php /* Smarty version Smarty-3.1.18, created on 2015-06-01 10:34:34
         compiled from "C:\WebServ\httpd\windu\app\plugins\admin\templates\themes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7994556c191a7757f5-74631647%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0887da2e60d451ece7880a16567c7a3530c3a285' => 
    array (
      0 => 'C:\\WebServ\\httpd\\windu\\app\\plugins\\admin\\templates\\themes.tpl',
      1 => 1398323024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7994556c191a7757f5-74631647',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'subpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_556c191a79a541_20020241',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c191a79a541_20020241')) {function content_556c191a79a541_20020241($_smarty_tpl) {?><div class="tabbable">
	<div class="tab-content">
		<?php if ($_smarty_tpl->tpl_vars['subpage']->value=='help') {?>
			<?php echo $_smarty_tpl->getSubTemplate ('common/help.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('ekey'=>lang::read('admin.help.users')), 0);?>

		<?php } elseif ($_smarty_tpl->tpl_vars['subpage']->value=='themes') {?>
			<?php echo $_smarty_tpl->getSubTemplate ('common/themes.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php } elseif ($_smarty_tpl->tpl_vars['subpage']->value=='widgets') {?>
			<?php echo $_smarty_tpl->getSubTemplate ('common/widgets.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php } elseif ($_smarty_tpl->tpl_vars['subpage']->value=='config') {?>
			<?php echo $_smarty_tpl->getSubTemplate ('common/config.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>'themes'), 0);?>

		<?php }?>
	</div>
</div>

<?php }} ?>
