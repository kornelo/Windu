<?php /* Smarty version Smarty-3.1.18, created on 2015-06-01 10:36:41
         compiled from "C:\WebServ\httpd\windu\data\widgets\commentsFacebook\commentsFacebookView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20919556c1999975d14-45720203%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c65086c87dd850382f8768c594e2d4fbce8b5441' => 
    array (
      0 => 'C:\\WebServ\\httpd\\windu\\data\\widgets\\commentsFacebook\\commentsFacebookView.tpl',
      1 => 1433147619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20919556c1999975d14-45720203',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_556c199998b255_68822364',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c199998b255_68822364')) {function content_556c199998b255_68822364($_smarty_tpl) {?><div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pl_PL/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-comments" data-href="http://<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" data-width="<?php echo $_smarty_tpl->tpl_vars['params']->value['width'];?>
" data-num-posts="<?php echo $_smarty_tpl->tpl_vars['params']->value['count'];?>
"></div><?php }} ?>
