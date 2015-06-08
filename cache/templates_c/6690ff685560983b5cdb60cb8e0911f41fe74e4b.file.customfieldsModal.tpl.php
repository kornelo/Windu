<?php /* Smarty version Smarty-3.1.18, created on 2015-06-01 10:40:11
         compiled from "C:\WebServ\httpd\windu\app\plugins\admin\templates\ajax\customfieldsModal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15652556c1a6b916626-93014163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6690ff685560983b5cdb60cb8e0911f41fe74e4b' => 
    array (
      0 => 'C:\\WebServ\\httpd\\windu\\app\\plugins\\admin\\templates\\ajax\\customfieldsModal.tpl',
      1 => 1398323024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15652556c1a6b916626-93014163',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pagesDB' => 0,
    'counter' => 0,
    'key' => 0,
    'val' => 0,
    'HOME' => 0,
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_556c1a6b9bb184_44386661',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c1a6b9bb184_44386661')) {function content_556c1a6b9bb184_44386661($_smarty_tpl) {?><table class="table table-striped" style="margin-top:-1px; border-bottom: 1px solid #dddddd;">
	<tbody>
	<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pagesDB']->value->getCustomFieldsArray(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
	<?php if (isset($_smarty_tpl->tpl_vars['counter'])) {$_smarty_tpl->tpl_vars['counter'] = clone $_smarty_tpl->tpl_vars['counter'];
$_smarty_tpl->tpl_vars['counter']->value = $_smarty_tpl->tpl_vars['counter']->value+1; $_smarty_tpl->tpl_vars['counter']->nocache = null; $_smarty_tpl->tpl_vars['counter']->scope = 0;
} else $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['counter']->value+1, null, 0);?>
		<tr>
			<td><span class="silver margin-right-small"><?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
</span> <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
			<td><span class="badge badge-inverse"><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</span></td>
			<td class='gray'>{{$page->cf_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
}}</td>
			<td class="align-right"><a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/ajax/customfields/deleteField/cf_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
/"><i class="fa fa-times-circle icon-red" style="margin-right:6px;">&nbsp;</i></a></td>
		</tr>		
	<?php } ?>		
	</tbody>
</table>  
<div class="notes-form margin-top">	
	<?php echo $_smarty_tpl->tpl_vars['form']->value->toHtml();?>

</div>
<?php }} ?>
