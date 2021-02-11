<?php
/* Smarty version 3.1.36, created on 2021-02-11 04:54:01
  from '/vagrant/ec-cube2/data/Smarty/templates/admin/products/subnavi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_602439d9ecc254_86359694',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '021ea8eb259e910bd5a04b2035bd973a4ae9b325' => 
    array (
      0 => '/vagrant/ec-cube2/data/Smarty/templates/admin/products/subnavi.tpl',
      1 => 1612881887,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602439d9ecc254_86359694 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/vagrant/ec-cube2/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),));
?>

<ul class="level1">
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'index') {?> class="on"<?php }?> id="navi-products-index"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
products/<?php echo smarty_modifier_script_escape(@constant('DIR_INDEX_PATH'));?>
"><span>商品マスター</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'product') {?> class="on"<?php }?> id="navi-products-product"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
products/product.php"><span>商品登録</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'upload_csv') {?> class="on"<?php }?> id="navi-products-uploadcsv"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
products/upload_csv.php"><span>商品登録CSV</span></a></li>
<?php if (@constant('OPTION_CLASS_REGIST') == 1) {?>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'class') {?> class="on"<?php }?> id="navi-products-class"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
products/class.php"><span>規格管理</span></a></li>
<?php }?>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'category') {?> class="on"<?php }?> id="navi-products-category"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
products/category.php"><span>カテゴリ登録</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'upload_csv_category') {?> class="on"<?php }?> id="navi-products-upload-csv-category"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
products/upload_csv_category.php"><span>カテゴリ登録CSV</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'maker') {?> class="on"<?php }?> id="navi-products-maker"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
products/maker.php"><span>メーカー登録</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'product_rank') {?> class="on"<?php }?> id="navi-products-rank"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
products/product_rank.php"><span>商品並び替え</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'review') {?> class="on"<?php }?> id="navi-products-review"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
products/review.php"><span>レビュー管理</span></a></li>
</ul>
<?php }
}
