<?php /* Smarty version Smarty-3.1.18, created on 2015-06-01 10:35:43
         compiled from "C:\WebServ\httpd\windu\app\plugins\admin\templates\common\files_modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4037556c195ff2c711-14634971%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5392f6252c55b2428a12d56173ef691493283b95' => 
    array (
      0 => 'C:\\WebServ\\httpd\\windu\\app\\plugins\\admin\\templates\\common\\files_modal.tpl',
      1 => 1398323026,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4037556c195ff2c711-14634971',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'REQUEST' => 0,
    'HOME' => 0,
    'bucket' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_556c1960010924_60741469',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c1960010924_60741469')) {function content_556c1960010924_60741469($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'C:\\WebServ\\httpd\\windu/data/functions\\function.L.php';
?><?php if ($_smarty_tpl->tpl_vars['REQUEST']->value->getVariable('id')=='') {?><?php if (isset($_smarty_tpl->tpl_vars['bucket'])) {$_smarty_tpl->tpl_vars['bucket'] = clone $_smarty_tpl->tpl_vars['bucket'];
$_smarty_tpl->tpl_vars['bucket']->value = 'main'; $_smarty_tpl->tpl_vars['bucket']->nocache = null; $_smarty_tpl->tpl_vars['bucket']->scope = 0;
} else $_smarty_tpl->tpl_vars['bucket'] = new Smarty_variable('main', null, 0);?><?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['bucket'])) {$_smarty_tpl->tpl_vars['bucket'] = clone $_smarty_tpl->tpl_vars['bucket'];
$_smarty_tpl->tpl_vars['bucket']->value = $_smarty_tpl->tpl_vars['REQUEST']->value->getVariable('id'); $_smarty_tpl->tpl_vars['bucket']->nocache = null; $_smarty_tpl->tpl_vars['bucket']->scope = 0;
} else $_smarty_tpl->tpl_vars['bucket'] = new Smarty_variable($_smarty_tpl->tpl_vars['REQUEST']->value->getVariable('id'), null, 0);?><?php }?>
<div id="filesModal" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel"><?php echo smarty_function_L(array('key'=>"admin.content.common.tpl.addfiles"),$_smarty_tpl);?>
</h3>
	</div>
	<div class="modal-body">
		<iframe src="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/ajax/files/modalUploader/<?php echo $_smarty_tpl->tpl_vars['bucket']->value;?>
/"></iframe>
	</div>
</div>	<?php }} ?>
