<?php /* Smarty version Smarty-3.1.18, created on 2015-06-01 10:34:33
         compiled from "C:\WebServ\httpd\windu\app\plugins\admin\templates\common\note_modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20014556c1919c5b811-50106751%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '109ea2c37b70ef46b2dac2313781c25194879daa' => 
    array (
      0 => 'C:\\WebServ\\httpd\\windu\\app\\plugins\\admin\\templates\\common\\note_modal.tpl',
      1 => 1398323024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20014556c1919c5b811-50106751',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_556c1919c636a4_48985162',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c1919c636a4_48985162')) {function content_556c1919c636a4_48985162($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'C:\\WebServ\\httpd\\windu/data/functions\\function.L.php';
?><div id="notesModal" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel"><?php echo smarty_function_L(array('key'=>"admin.modal.common.tpl.notes"),$_smarty_tpl);?>
</h3>
	</div>
	<div class="modal-body" id="noteModalIframe">
		
	</div>
</div>	<?php }} ?>
