<?php /* Smarty version Smarty-3.1.18, created on 2015-06-01 10:42:47
         compiled from "C:\WebServ\httpd\windu\data\themes\Dirt-honey\tpl_views\news_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28780556c1b073a6483-09857352%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5faa5e2a8c9c9e98d47a9828ae3be16c7a08a883' => 
    array (
      0 => 'C:\\WebServ\\httpd\\windu\\data\\themes\\Dirt-honey\\tpl_views\\news_page.tpl',
      1 => 1433147070,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28780556c1b073a6483-09857352',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'pagesDB' => 0,
    'mainImage' => 0,
    'HOME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_556c1b07414081_92261088',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c1b07414081_92261088')) {function content_556c1b07414081_92261088($_smarty_tpl) {?>
<div class="smalltop">
	<div class="container">
		<?php echo $_smarty_tpl->getSubTemplate ('../tpl_common/top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
</div>
<div class="content">	
	<div class="pad smallpad subtext">
		<h4 class="pghead"><?php echo $_smarty_tpl->tpl_vars['page']->value->name;?>
</h4>
		<div class="newsimg">
    	<?php if (isset($_smarty_tpl->tpl_vars['mainImage'])) {$_smarty_tpl->tpl_vars['mainImage'] = clone $_smarty_tpl->tpl_vars['mainImage'];
$_smarty_tpl->tpl_vars['mainImage']->value = $_smarty_tpl->tpl_vars['pagesDB']->value->getMainImageEkeySmart($_smarty_tpl->tpl_vars['page']->value->id); $_smarty_tpl->tpl_vars['mainImage']->nocache = null; $_smarty_tpl->tpl_vars['mainImage']->scope = 0;
} else $_smarty_tpl->tpl_vars['mainImage'] = new Smarty_variable($_smarty_tpl->tpl_vars['pagesDB']->value->getMainImageEkeySmart($_smarty_tpl->tpl_vars['page']->value->id), null, 0);?>
		<?php if ($_smarty_tpl->tpl_vars['mainImage']->value!=null) {?>
  			<img class="img-title" src="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
image/<?php echo $_smarty_tpl->tpl_vars['mainImage']->value;?>
/1450/400/smart/original/">
		<?php }?>
		</div>			
		<br><br>
		<?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['page']->value->content, $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?>
		
	</div>            

<div class="footcont">
	<?php echo $_smarty_tpl->getSubTemplate ('../tpl_common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
</div><?php }} ?>
