<?php
/* Smarty version 3.1.36, created on 2021-02-11 04:54:02
  from '/vagrant/ec-cube2/data/Smarty/templates/admin/customer/subnavi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_602439da061569_88618749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb1edcc998f9390c82b4c788ff1f51f1f6ec22ab' => 
    array (
      0 => '/vagrant/ec-cube2/data/Smarty/templates/admin/customer/subnavi.tpl',
      1 => 1612881885,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602439da061569_88618749 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/vagrant/ec-cube2/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),));
?>

<ul class="level1">
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'index') {?> class="on"<?php }?> id="navi-customer-index"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
customer/<?php echo smarty_modifier_script_escape(@constant('DIR_INDEX_PATH'));?>
"><span>会員マスター</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'customer') {?> class="on"<?php }?> id="navi-customer-customer"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
customer/edit.php"><span>会員登録</span></a></li>
</ul>
<?php }
}
