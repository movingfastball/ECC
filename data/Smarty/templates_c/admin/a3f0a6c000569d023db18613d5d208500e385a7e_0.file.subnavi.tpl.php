<?php
/* Smarty version 3.1.36, created on 2021-02-11 04:54:02
  from '/vagrant/ec-cube2/data/Smarty/templates/admin/total/subnavi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_602439da1a16a7_56967445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3f0a6c000569d023db18613d5d208500e385a7e' => 
    array (
      0 => '/vagrant/ec-cube2/data/Smarty/templates/admin/total/subnavi.tpl',
      1 => 1612881887,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602439da1a16a7_56967445 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/vagrant/ec-cube2/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),));
?>

<ul class="level1">
    <li id="navi-total-term"
        class="<?php if (($_smarty_tpl->tpl_vars['tpl_mainno']->value == 'total' && ($_smarty_tpl->tpl_vars['arrForm']->value['page']['value'] == 'term' || $_smarty_tpl->tpl_vars['arrForm']->value['page']['value'] == ''))) {?>on<?php }?>"
    ><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
total/<?php echo smarty_modifier_script_escape(@constant('DIR_INDEX_PATH'));?>
?page=term"><span>期間別集計</span></a></li>
    <li id="navi-total-products"
        class="<?php if (($_smarty_tpl->tpl_vars['tpl_mainno']->value == 'total' && $_smarty_tpl->tpl_vars['arrForm']->value['page']['value'] == 'products')) {?>on<?php }?>"
    ><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
total/<?php echo smarty_modifier_script_escape(@constant('DIR_INDEX_PATH'));?>
?page=products"><span>商品別集計</span></a></li>
    <li id="navi-total-age"
        class="<?php if (($_smarty_tpl->tpl_vars['tpl_mainno']->value == 'total' && $_smarty_tpl->tpl_vars['arrForm']->value['page']['value'] == 'age')) {?>on<?php }?>"
    ><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
total/<?php echo smarty_modifier_script_escape(@constant('DIR_INDEX_PATH'));?>
?page=age"><span>年代別集計</span></a></li>
    <li id="navi-total-job"
        class="<?php if (($_smarty_tpl->tpl_vars['tpl_mainno']->value == 'total' && $_smarty_tpl->tpl_vars['arrForm']->value['page']['value'] == 'job')) {?>on<?php }?>"
    ><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
total/<?php echo smarty_modifier_script_escape(@constant('DIR_INDEX_PATH'));?>
?page=job"><span>職業別集計</span></a></li>
    <li id="navi-total-member"
        class="<?php if (($_smarty_tpl->tpl_vars['tpl_mainno']->value == 'total' && $_smarty_tpl->tpl_vars['arrForm']->value['page']['value'] == 'member')) {?>on<?php }?>"
    ><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
total/<?php echo smarty_modifier_script_escape(@constant('DIR_INDEX_PATH'));?>
?page=member"><span>会員別集計</span></a></li>
</ul>
<?php }
}
