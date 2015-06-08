<?php /* Smarty version Smarty-3.1.18, created on 2015-06-01 10:42:47
         compiled from "C:\WebServ\httpd\windu\data\widgets\calendarList\calendarListView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10954556c1b074d46c5-03241864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e203813d7ec9890a9587eeac51ea53b3e49f8dd3' => 
    array (
      0 => 'C:\\WebServ\\httpd\\windu\\data\\widgets\\calendarList\\calendarListView.tpl',
      1 => 1433147618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10954556c1b074d46c5-03241864',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
    'data' => 0,
    'event' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_556c1b075082e6_74526132',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c1b075082e6_74526132')) {function content_556c1b075082e6_74526132($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['params']->value['showTitle']=='') {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['showTitle'] = true;?><?php }?>

<?php if ($_smarty_tpl->tpl_vars['data']->value['events']!=null) {?>
	<?php if ($_smarty_tpl->tpl_vars['params']->value['showTitle']) {?><h4><?php echo $_smarty_tpl->tpl_vars['data']->value['calendar']->name;?>
</h4><?php }?>
	<table class="table table-striped">
	  <thead>
	    <tr>
	      <th>Data</th>
	      <th>Nazwa</th>
	      <th>Opis</th>
	    </tr>
	  </thead>
	  <tbody>
		<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = array_reverse($_smarty_tpl->tpl_vars['data']->value['events']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value) {
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
		  <tr>
		      <td><?php echo $_smarty_tpl->tpl_vars['event']->value->date;?>
</td>	  	
		      <td><?php echo $_smarty_tpl->tpl_vars['event']->value->name;?>
</td>
		      <td><?php echo $_smarty_tpl->tpl_vars['event']->value->description;?>
</td>
		  </tr>	
		<?php } ?>    
	  </tbody>
	</table>
<?php }?>

<?php }} ?>
