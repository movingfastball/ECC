<?php
/* Smarty version 3.1.36, created on 2021-02-11 14:41:46
  from '/vagrant/CUBE/data/Smarty/templates/default/error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6024c39aba1926_61766070',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31228b8db51328ebf31415ff9c863774f19600f0' => 
    array (
      0 => '/vagrant/CUBE/data/Smarty/templates/default/error.tpl',
      1 => 1612881888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6024c39aba1926_61766070 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/vagrant/CUBE/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),));
?>

<div id="undercolumn"><div id="undercolumn_error"><div class="message_area"><!--★エラーメッセージ--><p class="error"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_error']->value);?>
</p></div><div class="btn_area"><ul><li><?php if ($_smarty_tpl->tpl_vars['return_top']->value) {?><a href="<?php echo smarty_modifier_script_escape(@constant('TOP_URL'));?>
"><img class="hover_change_image" src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/button/btn_toppage.jpg" alt="トップページへ" /></a><?php } else { ?><a href="javascript:history.back()"><img class="hover_change_image" src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/button/btn_back.jpg" alt="戻る" /></a><?php }?></li></ul></div></div></div>
<?php }
}
