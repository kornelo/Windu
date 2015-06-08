<?php /* Smarty version Smarty-3.1.18, created on 2015-06-01 10:35:44
         compiled from "C:\WebServ\httpd\windu\app\plugins\admin\templates\common\customfields_modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27930556c19600569e0-37375179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ef75297a7f36ac8f258cb7cd355410d8aad48e3' => 
    array (
      0 => 'C:\\WebServ\\httpd\\windu\\app\\plugins\\admin\\templates\\common\\customfields_modal.tpl',
      1 => 1398323024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27930556c19600569e0-37375179',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_556c1960060841_35074512',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c1960060841_35074512')) {function content_556c1960060841_35074512($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'C:\\WebServ\\httpd\\windu/data/functions\\function.L.php';
?><div id="customFielsdModal" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel"><?php echo smarty_function_L(array('key'=>"admin.customfields.modal.tpl.addfields"),$_smarty_tpl);?>
</h3>
	</div>
	<div class="modal-body">
		<iframe src="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/ajax/customfields/index/"></iframe>
	</div>
</div>	<?php }} ?>
