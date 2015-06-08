<?php /* Smarty version Smarty-3.1.18, created on 2015-06-01 10:35:37
         compiled from "C:\WebServ\httpd\windu\app\plugins\admin\templates\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10178556c1959d3e771-24971306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58d16d2db8d7da61fee4a700186791ff889bc4fd' => 
    array (
      0 => 'C:\\WebServ\\httpd\\windu\\app\\plugins\\admin\\templates\\content.tpl',
      1 => 1398323024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10178556c1959d3e771-24971306',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'subpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_556c1959df7a72_62939500',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c1959df7a72_62939500')) {function content_556c1959df7a72_62939500($_smarty_tpl) {?>  	<div class="tabbable">
	  <div class="tab-content">
	    <?php if ($_smarty_tpl->tpl_vars['subpage']->value=='help') {?>
	    	<?php echo $_smarty_tpl->getSubTemplate ('common/help.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('ekey'=>lang::read('admin.help.content')), 0);?>
 
	    <?php } elseif ($_smarty_tpl->tpl_vars['subpage']->value=='pages') {?>		  
     		<?php echo $_smarty_tpl->getSubTemplate ('common/pages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	    <?php } elseif ($_smarty_tpl->tpl_vars['subpage']->value=='lang') {?>
		    <?php if (!usersDB::isNoob()) {?>
		    	<?php echo $_smarty_tpl->getSubTemplate ('common/lang.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		    <?php }?>
	    <?php } elseif ($_smarty_tpl->tpl_vars['subpage']->value=='trash') {?>
			<?php echo $_smarty_tpl->getSubTemplate ('common/trash.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	    <?php } elseif ($_smarty_tpl->tpl_vars['subpage']->value=='files') {?>
			<div class="row-fluid">
				<?php echo $_smarty_tpl->getSubTemplate ('common/files.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			</div> 	      		
	    <?php } elseif ($_smarty_tpl->tpl_vars['subpage']->value=='images') {?>
			<div class="row-fluid">
				<?php echo $_smarty_tpl->getSubTemplate ('common/images.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			</div> 	      		
	    <?php } elseif ($_smarty_tpl->tpl_vars['subpage']->value=='banners') {?>
	    	<?php if (license::hasPro('')) {?>
	    		<?php echo $_smarty_tpl->getSubTemplate ('common/plus/banners.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	    	<?php } else { ?>
	    		<?php echo $_smarty_tpl->getSubTemplate ('common/goPro.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
	    	<?php }?>
	    <?php } elseif ($_smarty_tpl->tpl_vars['subpage']->value=='polls') {?>
	    	<?php if (license::hasPro('')) {?>
	    		<?php echo $_smarty_tpl->getSubTemplate ('common/plus/polls.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	    	<?php } else { ?>
	    		<?php echo $_smarty_tpl->getSubTemplate ('common/goPro.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
	    	<?php }?>
	    <?php } elseif ($_smarty_tpl->tpl_vars['subpage']->value=='calendar') {?>
	    	<?php if (license::hasPro('')) {?>
	    		<?php echo $_smarty_tpl->getSubTemplate ('common/plus/calendar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	    	<?php } else { ?>
	    		<?php echo $_smarty_tpl->getSubTemplate ('common/goPro.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
	    	<?php }?>
	    <?php } elseif ($_smarty_tpl->tpl_vars['subpage']->value=='autosave') {?>
    		<?php echo $_smarty_tpl->getSubTemplate ('common/autosave.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

 	    <?php } elseif ($_smarty_tpl->tpl_vars['subpage']->value=='config') {?>
			<?php echo $_smarty_tpl->getSubTemplate ('common/config.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>'content'), 0);?>
		
	    <?php }?>	    	            	        	    
	  </div>
	</div><?php }} ?>
