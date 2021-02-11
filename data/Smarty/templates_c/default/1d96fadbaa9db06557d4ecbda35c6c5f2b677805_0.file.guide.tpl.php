<?php
/* Smarty version 3.1.36, created on 2021-02-11 05:03:52
  from '/vagrant/ec-cube2/data/Smarty/templates/default/frontparts/bloc/guide.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60243c2803acf5_75406339',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d96fadbaa9db06557d4ecbda35c6c5f2b677805' => 
    array (
      0 => '/vagrant/ec-cube2/data/Smarty/templates/default/frontparts/bloc/guide.tpl',
      1 => 1612881888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60243c2803acf5_75406339 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/vagrant/ec-cube2/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),));
?>

<div class="block_outer"><div id="guide_area" class="block_body"><ul class="button_like"><li><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));?>
abouts/<?php echo smarty_modifier_script_escape(@constant('DIR_INDEX_PATH'));?>
" class="<?php if ($_smarty_tpl->tpl_vars['tpl_page_class_name']->value == "LC_Page_Abouts") {?>selected<?php }?>">当サイトについて</a></li><li><a href="<?php echo smarty_modifier_script_escape(@constant('HTTPS_URL'));?>
contact/<?php echo smarty_modifier_script_escape(@constant('DIR_INDEX_PATH'));?>
" class="<?php if ($_smarty_tpl->tpl_vars['tpl_page_class_name']->value == "LC_Page_Contact" || $_smarty_tpl->tpl_vars['tpl_page_class_name']->value == "LC_Page_Contact_Complete") {?>selected<?php }?>">お問い合わせ</a></li><li><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));?>
order/<?php echo smarty_modifier_script_escape(@constant('DIR_INDEX_PATH'));?>
" class="<?php if ($_smarty_tpl->tpl_vars['tpl_page_class_name']->value == "LC_Page_Order") {?>selected<?php }?>">特定商取引法に基づく表記</a></li><li><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));?>
guide/privacy.php" class="<?php if ($_smarty_tpl->tpl_vars['tpl_page_class_name']->value == "LC_Page_Guide_Privacy") {?>selected<?php }?>">プライバシーポリシー</a></li></ul></div></div>
<?php }
}
