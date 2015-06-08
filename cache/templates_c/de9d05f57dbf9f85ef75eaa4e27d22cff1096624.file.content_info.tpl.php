<?php /* Smarty version Smarty-3.1.18, created on 2015-06-01 10:35:38
         compiled from "C:\WebServ\httpd\windu\app\plugins\admin\templates\common\content_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32270556c195a8a5035-53870808%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de9d05f57dbf9f85ef75eaa4e27d22cff1096624' => 
    array (
      0 => 'C:\\WebServ\\httpd\\windu\\app\\plugins\\admin\\templates\\common\\content_info.tpl',
      1 => 1400609414,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32270556c195a8a5035-53870808',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'now' => 0,
    'pagesDB' => 0,
    'waitingPages' => 0,
    'editedPages' => 0,
    'page' => 0,
    'HOME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_556c195a930b51_85841501',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c195a930b51_85841501')) {function content_556c195a930b51_85841501($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'C:\\WebServ\\httpd\\windu/data/functions\\function.L.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:\\WebServ\\httpd\\windu/app/plugins/html/smarty/plugins\\modifier.truncate.php';
?><?php if (isset($_smarty_tpl->tpl_vars['waitingPages'])) {$_smarty_tpl->tpl_vars['waitingPages'] = clone $_smarty_tpl->tpl_vars['waitingPages'];
$_smarty_tpl->tpl_vars['waitingPages']->value = $_smarty_tpl->tpl_vars['pagesDB']->value->fetchAll("date>'".((string)$_smarty_tpl->tpl_vars['now']->value)."'",'date ASC','*'); $_smarty_tpl->tpl_vars['waitingPages']->nocache = null; $_smarty_tpl->tpl_vars['waitingPages']->scope = 0;
} else $_smarty_tpl->tpl_vars['waitingPages'] = new Smarty_variable($_smarty_tpl->tpl_vars['pagesDB']->value->fetchAll("date>'".((string)$_smarty_tpl->tpl_vars['now']->value)."'",'date ASC','*'), null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['editedPages'])) {$_smarty_tpl->tpl_vars['editedPages'] = clone $_smarty_tpl->tpl_vars['editedPages'];
$_smarty_tpl->tpl_vars['editedPages']->value = $_smarty_tpl->tpl_vars['pagesDB']->value->fetchAll(null,'updateTime DESC','*',16); $_smarty_tpl->tpl_vars['editedPages']->nocache = null; $_smarty_tpl->tpl_vars['editedPages']->scope = 0;
} else $_smarty_tpl->tpl_vars['editedPages'] = new Smarty_variable($_smarty_tpl->tpl_vars['pagesDB']->value->fetchAll(null,'updateTime DESC','*',16), null, 0);?>
<div class="row-fluid mobileHidden">
	<div class="span<?php if (count($_smarty_tpl->tpl_vars['waitingPages']->value)>0) {?>6<?php } else { ?>12<?php }?>">
		<div class="box">
			<h5><i class="fa fa-clock-o icon-margin icon-grey">&nbsp;</i><?php echo smarty_function_L(array('key'=>"admin.content_info.controller.lastedited"),$_smarty_tpl);?>
</h5>
			<table class="table table-striped">
			  <tbody>
			  <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['editedPages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
				<tr>
					<td><?php echo $_smarty_tpl->getSubTemplate ('common/content_list_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>$_smarty_tpl->tpl_vars['page']->value->type,'name'=>$_smarty_tpl->tpl_vars['page']->value->name), 0);?>
<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['page']->value->name,25);?>
</td>
					<td class="smallWidthHidden"><?php echo generate::showDatatime($_smarty_tpl->tpl_vars['page']->value->updateTime);?>
</td>
					<td>
						<div class="buttons">
							<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/do/content/goEdit/<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
/"><i class="fa fa-pencil icon-blue">&nbsp;</i></a>
						</div>
					</td>
				</tr>
			  <?php } ?>   
			  </tbody>
			</table>
		</div>		
	</div>	
	<?php if (count($_smarty_tpl->tpl_vars['waitingPages']->value)>0) {?>
		<div class="span6">
			<div class="box">
				<h5><i class="fa fa-calendar icon-margin icon-grey">&nbsp;</i><?php echo smarty_function_L(array('key'=>"admin.content_info.controller.awaiting"),$_smarty_tpl);?>
</h5>
				<table class="table table-striped">
				  <tbody>
				  <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['waitingPages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
					<tr>
						<td><?php echo $_smarty_tpl->getSubTemplate ('common/content_list_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>$_smarty_tpl->tpl_vars['page']->value->type,'id'=>$_smarty_tpl->tpl_vars['page']->value->id), 0);?>
<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['page']->value->name,25);?>
</td>
						<td class="smallWidthHidden"><?php echo generate::showDatatime($_smarty_tpl->tpl_vars['page']->value->date);?>
</td>
						<td>
							<div class="buttons">
								<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/do/content/goEdit/<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
/"><i class="fa fa-pencil icon-blue">&nbsp;</i></a>
							</div>
						</td>
					</tr>
				  <?php }
if (!$_smarty_tpl->tpl_vars['page']->_loop) {
?>
				  	<tr><td><?php echo smarty_function_L(array('key'=>"admin.lang.tpl.nodata"),$_smarty_tpl);?>
</td></tr>	
				  <?php } ?>   
				  </tbody>
				</table>
			</div>  	
		</div>
	<?php }?>
</div>
<?php }} ?>
