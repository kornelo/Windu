<?php /* Smarty version Smarty-3.1.18, created on 2015-06-01 10:34:35
         compiled from "C:\WebServ\httpd\windu\app\plugins\admin\templates\system.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4949556c191bdf7fb2-39652226%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97f4ddd0157af3c4338fbec59d4f2201c979017e' => 
    array (
      0 => 'C:\\WebServ\\httpd\\windu\\app\\plugins\\admin\\templates\\system.tpl',
      1 => 1398323024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4949556c191bdf7fb2-39652226',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'subpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_556c191bef7144_10612638',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c191bef7144_10612638')) {function content_556c191bef7144_10612638($_smarty_tpl) {?><script type="text/javascript" src="https://www.google.com/jsapi"></script>
<div class="tabbable">
  <div class="tab-content">
	<?php if ($_smarty_tpl->tpl_vars['subpage']->value=='help') {?>
    	<?php echo $_smarty_tpl->getSubTemplate ('common/help.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('ekey'=>lang::read('admin.help.system')), 0);?>
 
    <?php } elseif ($_smarty_tpl->tpl_vars['subpage']->value=='system') {?>		  
    	<?php echo $_smarty_tpl->getSubTemplate ('common/conservation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
    <?php } elseif ($_smarty_tpl->tpl_vars['subpage']->value=='stats') {?>	
    	<?php echo $_smarty_tpl->getSubTemplate ('common/statistics.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php } elseif ($_smarty_tpl->tpl_vars['subpage']->value=='backup') {?>	
    	<?php if (license::hasPro()) {?>
			<?php echo $_smarty_tpl->getSubTemplate ('common/plus/backup.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
  
    	<?php } else { ?>
    		<?php echo $_smarty_tpl->getSubTemplate ('common/goPro.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
    	<?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['subpage']->value=='licence') {?>	
	   <?php echo $_smarty_tpl->getSubTemplate ('common/license.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php } elseif ($_smarty_tpl->tpl_vars['subpage']->value=='notifications') {?>	
    	<div class="row-fluid">
    		<?php echo $_smarty_tpl->getSubTemplate ('common/notify.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	 	</div>	  
    <?php } elseif ($_smarty_tpl->tpl_vars['subpage']->value=='log') {?>	
    	<?php if (license::hasPro()) {?>
    		<?php echo $_smarty_tpl->getSubTemplate ('common/plus/log.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    	<?php } else { ?>
    		<?php echo $_smarty_tpl->getSubTemplate ('common/goPro.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
    	<?php }?>	
    <?php } elseif ($_smarty_tpl->tpl_vars['subpage']->value=='cron') {?>	
    	<?php if (license::hasPro('pro')) {?>
    		<?php echo $_smarty_tpl->getSubTemplate ('common/pro/cron.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    	<?php } else { ?>
    		<?php echo $_smarty_tpl->getSubTemplate ('common/goPro.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
    	<?php }?>	    
    <?php } elseif ($_smarty_tpl->tpl_vars['subpage']->value=='firewall') {?>	
	   	<?php if (license::hasPro('pro')) {?>
	   		<?php echo $_smarty_tpl->getSubTemplate ('common/pro/firewall.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	   	<?php } else { ?>
	   		<?php echo $_smarty_tpl->getSubTemplate ('common/goPro.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
	   	<?php }?>
	<?php } elseif ($_smarty_tpl->tpl_vars['subpage']->value=='requestlog') {?>	
	   	<?php if (license::hasPro('pro')) {?>
	   		<?php echo $_smarty_tpl->getSubTemplate ('common/pro/requestlog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	   	<?php } else { ?>
	   		<?php echo $_smarty_tpl->getSubTemplate ('common/goPro.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
	   	<?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['subpage']->value=='config') {?>	
			<?php echo $_smarty_tpl->getSubTemplate ('common/config.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>'system'), 0);?>
	  	
	<?php }?>	                      
  </div>
</div><?php }} ?>
