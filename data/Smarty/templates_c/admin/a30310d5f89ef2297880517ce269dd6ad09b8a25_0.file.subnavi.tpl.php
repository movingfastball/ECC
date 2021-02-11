<?php
/* Smarty version 3.1.36, created on 2021-02-11 04:54:02
  from '/vagrant/ec-cube2/data/Smarty/templates/admin/mail/subnavi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_602439da2696f8_34990669',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a30310d5f89ef2297880517ce269dd6ad09b8a25' => 
    array (
      0 => '/vagrant/ec-cube2/data/Smarty/templates/admin/mail/subnavi.tpl',
      1 => 1612881887,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602439da2696f8_34990669 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/vagrant/ec-cube2/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),));
?>

<ul class="level1">
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'index') {?> class="on"<?php }?> id="navi-mail-index"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
mail/<?php echo smarty_modifier_script_escape(@constant('DIR_INDEX_PATH'));?>
"><span>配信内容設定</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'template') {?> class="on"<?php }?> id="navi-mail-template"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
mail/template.php"><span>テンプレート設定</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'history') {?> class="on"<?php }?> id="navi-mail-history"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
mail/history.php"><span>配信履歴</span></a></li>
</ul>
<?php }
}
