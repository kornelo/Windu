<?php /* Smarty version Smarty-3.1.18, created on 2015-06-01 10:35:21
         compiled from "C:\WebServ\httpd\windu\app\plugins\admin\templates\common\config.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4201556c1949cb8d68-96666713%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbeffecf51eb77e1c73e2e2adce457bdd59a77bf' => 
    array (
      0 => 'C:\\WebServ\\httpd\\windu\\app\\plugins\\admin\\templates\\common\\config.tpl',
      1 => 1398498526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4201556c1949cb8d68-96666713',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOME' => 0,
    'class' => 0,
    'formConfig' => 0,
    'configList' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_556c1949d4ce10_36046440',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c1949d4ce10_36046440')) {function content_556c1949d4ce10_36046440($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'C:\\WebServ\\httpd\\windu/data/functions\\function.L.php';
?><div class="tab-menu-top">
	<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
/config/" class="btn btn-small pull-left"><i class="fa fa-home icon-grey icon-nomargin" ></i> </a>
	<h3 class="pull-left tab-title"> <?php echo smarty_function_L(array('key'=>"admin.menu.config"),$_smarty_tpl);?>
</h3>
</div>
<div class="row-fluid">
	<?php if (is_object($_smarty_tpl->tpl_vars['formConfig']->value)) {?>
	<div class="span7 box">
		<?php echo $_smarty_tpl->getSubTemplate ('common/config_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('list'=>$_smarty_tpl->tpl_vars['configList']->value,'class'=>$_smarty_tpl->tpl_vars['class']->value), 0);?>

	</div>
	<div class="span5">
		<div class="box-floating">
			<div class="box">
				<h5><i class="fa fa-pencil icon-margin icon-grey"></i> <?php echo smarty_function_L(array('key'=>"admin.users.tpl.edit"),$_smarty_tpl);?>
</h5>
				<?php echo $_smarty_tpl->tpl_vars['formConfig']->value->toHtml();?>

			</div>
		</div>
	</div>
	<?php } else { ?>
	<div class="span12 box">
		<?php echo $_smarty_tpl->getSubTemplate ('common/config_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('list'=>$_smarty_tpl->tpl_vars['configList']->value,'class'=>$_smarty_tpl->tpl_vars['class']->value,'extended'=>1), 0);?>

	</div>
	<?php }?>
</div>
<?php }} ?>
