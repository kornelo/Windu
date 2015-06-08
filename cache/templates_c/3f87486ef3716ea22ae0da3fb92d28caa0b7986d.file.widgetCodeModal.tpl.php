<?php /* Smarty version Smarty-3.1.18, created on 2015-06-01 10:36:33
         compiled from "C:\WebServ\httpd\windu\app\plugins\admin\templates\ajax\widgetCodeModal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3985556c1991566636-51146258%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f87486ef3716ea22ae0da3fb92d28caa0b7986d' => 
    array (
      0 => 'C:\\WebServ\\httpd\\windu\\app\\plugins\\admin\\templates\\ajax\\widgetCodeModal.tpl',
      1 => 1398323026,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3985556c1991566636-51146258',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'widgetCode' => 0,
    'HOME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_556c19915aaf83_47936539',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c19915aaf83_47936539')) {function content_556c19915aaf83_47936539($_smarty_tpl) {?><div class="pad-big">
	<div class="progress progress-striped">
		 <div class="bar" style="width: 100%;"></div>
	</div>
</div>
<div class="pad-big widgetCode">
	<h4><?php echo $_smarty_tpl->tpl_vars['widgetCode']->value;?>
</h4>
</div>
<div class="bottomForm">
	<div class="form-actions" style="text-align:center;">
		<a href="#" onclick="parent.editorInsertText('<?php echo $_smarty_tpl->tpl_vars['widgetCode']->value;?>
'); parent.$('#widgetsModal').modal('hide');" class="btn btn-primary">Dodaj kod na strone</a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/ajax/widgets/choseWidget/" class="btn">Anuluj</a>		
	</div>
</div>	

<?php }} ?>
