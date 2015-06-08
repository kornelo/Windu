<?php /* Smarty version Smarty-3.1.18, created on 2015-06-01 10:35:43
         compiled from "C:\WebServ\httpd\windu\app\plugins\admin\templates\common\images_modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8239556c195fe624f0-07798014%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6815d91eae50025899205975a34bfbc41c8ee9a7' => 
    array (
      0 => 'C:\\WebServ\\httpd\\windu\\app\\plugins\\admin\\templates\\common\\images_modal.tpl',
      1 => 1398323024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8239556c195fe624f0-07798014',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOME' => 0,
    'REQUEST' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_556c195feaffd9_08673933',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c195feaffd9_08673933')) {function content_556c195feaffd9_08673933($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'C:\\WebServ\\httpd\\windu/data/functions\\function.L.php';
?><div id="imagesModal" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel"><?php echo smarty_function_L(array('key'=>"admin.content.common.tpl.addimages"),$_smarty_tpl);?>
</h3>
	</div>
	<div class="modal-body">
		<iframe src="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/ajax/images/modalUploader/<?php echo $_smarty_tpl->tpl_vars['REQUEST']->value->getVariable('id');?>
/" style="height: 100%"></iframe>
	</div>
</div>	<?php }} ?>
