<?php /* Smarty version Smarty-3.1.18, created on 2015-06-01 10:50:28
         compiled from "C:\WebServ\httpd\windu\data\widgets\galleryFancybox\galleryFancyboxView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4782556c1cd4f2aa68-47755413%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04cd8af7401ccb01ee0cec89062c10252e5490e8' => 
    array (
      0 => 'C:\\WebServ\\httpd\\windu\\data\\widgets\\galleryFancybox\\galleryFancyboxView.tpl',
      1 => 1433147621,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4782556c1cd4f2aa68-47755413',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
    'data' => 0,
    'results' => 0,
    'HOME' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_556c1cd50cefa6_88224791',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c1cd50cefa6_88224791')) {function content_556c1cd50cefa6_88224791($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\WebServ\\httpd\\windu/app/plugins/html/smarty/plugins\\modifier.truncate.php';
?><?php if ($_smarty_tpl->tpl_vars['params']->value['width']=='') {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['width'] = config::get('imgGalleryWidth');?><?php }?>
<?php if ($_smarty_tpl->tpl_vars['params']->value['height']=='') {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['height'] = config::get('imgGalleryHeight');?><?php }?>
<?php if ($_smarty_tpl->tpl_vars['params']->value['fit']=='') {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['fit'] = config::get('imgGalleryFit');?><?php }?>
<?php if ($_smarty_tpl->tpl_vars['params']->value['fullwidth']=='') {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['fullwidth'] = config::get('imgGalleryFullWidth');?><?php }?>
<?php if ($_smarty_tpl->tpl_vars['params']->value['fullheight']=='') {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['fullheight'] = config::get('imgGalleryFullHeight');?><?php }?>
<?php if ($_smarty_tpl->tpl_vars['params']->value['filter']=='') {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['filter'] = 'original';?><?php }?>
<?php if ($_smarty_tpl->tpl_vars['params']->value['showDescription']=='') {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['showDescription'] = 1;?><?php }?>
<?php if ($_smarty_tpl->tpl_vars['params']->value['rel']=='') {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['rel'] = 'lightbox_group';?><?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['params']->value['bucket'])) {?>
	<?php if (isset($_smarty_tpl->tpl_vars['results'])) {$_smarty_tpl->tpl_vars['results'] = clone $_smarty_tpl->tpl_vars['results'];
$_smarty_tpl->tpl_vars['results']->value = $_smarty_tpl->tpl_vars['data']->value['imagesDB']->getByBucket($_smarty_tpl->tpl_vars['params']->value['bucket']); $_smarty_tpl->tpl_vars['results']->nocache = null; $_smarty_tpl->tpl_vars['results']->scope = 0;
} else $_smarty_tpl->tpl_vars['results'] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value['imagesDB']->getByBucket($_smarty_tpl->tpl_vars['params']->value['bucket']), null, 0);?>
<?php } else { ?>
	<?php if (isset($_smarty_tpl->tpl_vars['results'])) {$_smarty_tpl->tpl_vars['results'] = clone $_smarty_tpl->tpl_vars['results'];
$_smarty_tpl->tpl_vars['results']->value = $_smarty_tpl->tpl_vars['params']->value['images']; $_smarty_tpl->tpl_vars['results']->nocache = null; $_smarty_tpl->tpl_vars['results']->scope = 0;
} else $_smarty_tpl->tpl_vars['results'] = new Smarty_variable($_smarty_tpl->tpl_vars['params']->value['images'], null, 0);?>
<?php }?>

<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['results']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
image/<?php echo $_smarty_tpl->tpl_vars['image']->value->ekey;?>
/<?php echo $_smarty_tpl->tpl_vars['params']->value['fullwidth'];?>
/<?php echo $_smarty_tpl->tpl_vars['params']->value['fullheight'];?>
/fit/<?php echo $_smarty_tpl->tpl_vars['params']->value['filter'];?>
/#.<?php echo $_smarty_tpl->tpl_vars['image']->value->type;?>
" rel="<?php echo $_smarty_tpl->tpl_vars['params']->value['rel'];?>
" title="<?php if ($_smarty_tpl->tpl_vars['params']->value['showDescription']==1) {?><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['image']->value->description,100);?>
<?php }?>">
		<img src="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
image/<?php echo $_smarty_tpl->tpl_vars['image']->value->ekey;?>
/<?php echo $_smarty_tpl->tpl_vars['params']->value['width'];?>
/<?php echo $_smarty_tpl->tpl_vars['params']->value['height'];?>
/<?php echo $_smarty_tpl->tpl_vars['params']->value['fit'];?>
/<?php echo $_smarty_tpl->tpl_vars['params']->value['filter'];?>
/">
	</a>
<?php } ?>

<script type="text/javascript">

	$(document).ready(function() {
	    $("a[rel=<?php echo $_smarty_tpl->tpl_vars['params']->value['rel'];?>
]").fancybox
	    (
	        {
	        	'padding'			: 0,
	        	'titleShow'			: true,
	        	'autoScale'			: true,
	        	'titlePosition'		: 'over',
	        	'transitionIn'		: 'none',
	        	'transitionOut'		: 'none',
	        	'overlayColor'		: '#000',
				'overlayOpacity'	: '0.8',
				'centerOnScroll'	: true
	        }
	    );
	});

</script><?php }} ?>
