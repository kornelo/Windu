<?php /* Smarty version Smarty-3.1.18, created on 2015-06-01 10:34:38
         compiled from "C:\WebServ\httpd\windu\data\themes\Dirt-honey\tpl_views\main_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7457556c191ed015b1-70854546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de48b6754f20c49b1e0798360db78236a579e83e' => 
    array (
      0 => 'C:\\WebServ\\httpd\\windu\\data\\themes\\Dirt-honey\\tpl_views\\main_page.tpl',
      1 => 1433147070,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7457556c191ed015b1-70854546',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'imagesDB' => 0,
    'image' => 0,
    'HOME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_556c191ed5c680_78090742',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c191ed5c680_78090742')) {function content_556c191ed5c680_78090742($_smarty_tpl) {?><?php if (!is_callable('smarty_function_W')) include 'C:\\WebServ\\httpd\\windu/data/functions\\function.W.php';
?><?php echo smarty_function_W(array('name'=>'notify'),$_smarty_tpl);?>
	

	<div class="smalltop">
		<div class="container relat">
		<?php echo $_smarty_tpl->getSubTemplate ('../tpl_common/top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
	</div>
		<div class="slider">
			<div class="container subslide">
				<?php echo smarty_function_W(array('name'=>'sliderBootstrap','imagesBucket'=>737,'count'=>7,'width'=>1170,'height'=>500,'fit'=>'smart'),$_smarty_tpl);?>

			</div>
		</div>
		
	

	<div class="content">		
		<?php echo smarty_function_W(array('name'=>'newsNormal','newsGroup'=>745,'showAuthor'=>0,'showDate'=>0,'width'=>300,'length'=>300,'height'=>1000,'cssUl'=>"fluid-news",'cssLi'=>"msitem",'fit'=>"fit"),$_smarty_tpl);?>
	
	</div>
		
			<div class="logos">
				<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['imagesDB']->value->getByBucket(759); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
			    <a href="<?php echo $_smarty_tpl->tpl_vars['image']->value->url;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
image/<?php echo $_smarty_tpl->tpl_vars['image']->value->ekey;?>
/200/150/fit/" alr="strony www"></a>
				<?php } ?>
			</div>	
		<?php echo $_smarty_tpl->getSubTemplate ('../tpl_common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
	
</div>
	
<?php }} ?>
