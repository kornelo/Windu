<?php /* Smarty version Smarty-3.1.18, created on 2015-06-01 10:35:43
         compiled from "C:\WebServ\httpd\windu\app\plugins\admin\templates\common\widgets_modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13884556c195feebe71-46485634%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '110023e68d8e8f1eb3db8704bbcc909140a9987c' => 
    array (
      0 => 'C:\\WebServ\\httpd\\windu\\app\\plugins\\admin\\templates\\common\\widgets_modal.tpl',
      1 => 1398323026,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13884556c195feebe71-46485634',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_556c195fef9142_72690167',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c195fef9142_72690167')) {function content_556c195fef9142_72690167($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'C:\\WebServ\\httpd\\windu/data/functions\\function.L.php';
?><div id="widgetsModal" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel"><?php echo smarty_function_L(array('key'=>"admin.content.common.tpl.addwidget"),$_smarty_tpl);?>
</h3>
	</div>
	<div class="modal-body">
		<iframe src="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/ajax/widgets/choseWidget/"></iframe>
	</div>
</div>	<?php }} ?>
