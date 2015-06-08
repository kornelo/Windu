<?php /* Smarty version Smarty-3.1.18, created on 2015-06-01 10:34:38
         compiled from "C:\WebServ\httpd\windu\data\themes\Dirt-honey\tpl_common\top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25351556c191eebedc6-91213973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e60db5f82074a3cc79b5a700e734b0270edd7a2f' => 
    array (
      0 => 'C:\\WebServ\\httpd\\windu\\data\\themes\\Dirt-honey\\tpl_common\\top.tpl',
      1 => 1433147070,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25351556c191eebedc6-91213973',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOME' => 0,
    'TEMPLATE_HOME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_556c191eecff24_40281968',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c191eecff24_40281968')) {function content_556c191eecff24_40281968($_smarty_tpl) {?><?php if (!is_callable('smarty_function_W')) include 'C:\\WebServ\\httpd\\windu/data/functions\\function.W.php';
?>	
		
	<div class="container-fluid">
		<div class="row">		    
		    	<div class="col-md-3 topmn">
					<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
" class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_HOME']->value;?>
/img/windudark.png"></a>
		    	</div>	 
	         <div class="col-md-8 clm8">
	        	<div class="dropcl">
					<?php echo smarty_function_W(array('name'=>'menuDroppy','droppyId'=>"droppytwo"),$_smarty_tpl);?>
 				
				</div>				
	        </div>	 
	        <div class="col-md-1 drplang">
		    	<?php echo smarty_function_W(array('name'=>'languageDropDownBox'),$_smarty_tpl);?>

		    </div>  
		</div>     
	</div>

<?php }} ?>
