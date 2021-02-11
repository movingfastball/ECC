<?php
/* Smarty version 3.1.36, created on 2021-02-11 05:03:51
  from '/vagrant/ec-cube2/data/Smarty/templates/default/frontparts/bloc/category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60243c27e6b445_77542204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cddb3b7f4cd701c15d42c22c45d7033fc824a584' => 
    array (
      0 => '/vagrant/ec-cube2/data/Smarty/templates/default/frontparts/bloc/category.tpl',
      1 => 1612881888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60243c27e6b445_77542204 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/vagrant/ec-cube2/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),));
?>

<?php echo '<script'; ?>
 type="text/javascript">//<![CDATA[
    $(function(){
        $('#category_area li.level1:last').css('border-bottom', 'none');
    });
//]]><?php echo '</script'; ?>
>

<div class="block_outer"><div id="category_area"><div class="block_body"><h2><img src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/title/tit_bloc_category.gif" alt="商品カテゴリ" /></h2><?php $_smarty_tpl->_subTemplateRender(((string)@constant('TEMPLATE_REALDIR'))."frontparts/bloc/category_tree_fork.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('children'=>$_smarty_tpl->tpl_vars['arrTree']->value,'treeID'=>'','display'=>1), 0, true);
?></div></div></div>
<?php }
}
