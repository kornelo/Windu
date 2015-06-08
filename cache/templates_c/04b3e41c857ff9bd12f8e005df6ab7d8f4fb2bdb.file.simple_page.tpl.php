<?php /* Smarty version Smarty-3.1.18, created on 2015-06-01 10:34:45
         compiled from "C:\WebServ\httpd\windu\data\themes\Dirt-honey\tpl_views\simple_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22162556c1925202cd2-06979469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04b3e41c857ff9bd12f8e005df6ab7d8f4fb2bdb' => 
    array (
      0 => 'C:\\WebServ\\httpd\\windu\\data\\themes\\Dirt-honey\\tpl_views\\simple_page.tpl',
      1 => 1433147070,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22162556c1925202cd2-06979469',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_556c192525cf59_15383730',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c192525cf59_15383730')) {function content_556c192525cf59_15383730($_smarty_tpl) {?>
<div class="smalltop">
	<div class="container">
	<?php echo $_smarty_tpl->getSubTemplate ('../tpl_common/top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
</div>
<div class="content">
	<div class="pad smallpad subtext">
		<h4 class="pghead"><?php echo $_smarty_tpl->tpl_vars['page']->value->name;?>
</h4>
       		
			<?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['page']->value->content, $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?>
	</div>

		<?php echo $_smarty_tpl->getSubTemplate ('../tpl_common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</div><?php }} ?>
