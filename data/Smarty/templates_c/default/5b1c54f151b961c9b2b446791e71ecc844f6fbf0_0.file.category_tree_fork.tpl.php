<?php
/* Smarty version 3.1.36, created on 2021-02-11 05:03:51
  from '/vagrant/ec-cube2/data/Smarty/templates/default/frontparts/bloc/category_tree_fork.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60243c27eda754_86082375',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b1c54f151b961c9b2b446791e71ecc844f6fbf0' => 
    array (
      0 => '/vagrant/ec-cube2/data/Smarty/templates/default/frontparts/bloc/category_tree_fork.tpl',
      1 => 1612881888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60243c27eda754_86082375 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/vagrant/ec-cube2/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),1=>array('file'=>'/vagrant/ec-cube2/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),));
?>

<ul <?php if ($_smarty_tpl->tpl_vars['treeID']->value != '') {?>id="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['treeID']->value);?>
"<?php }?> style="<?php if (!$_smarty_tpl->tpl_vars['display']->value) {?>display: none;<?php }?>"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['children']->value, 'child');
$_smarty_tpl->tpl_vars['child']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->do_else = false;
?><li class="level<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['child']->value['level']);
if (in_array($_smarty_tpl->tpl_vars['child']->value['category_id'],$_smarty_tpl->tpl_vars['tpl_category_id']->value)) {?> onmark<?php }?>"><p><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));?>
products/list.php?category_id=<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['child']->value['category_id']);?>
"<?php if (in_array($_smarty_tpl->tpl_vars['child']->value['category_id'],$_smarty_tpl->tpl_vars['tpl_category_id']->value)) {?> class="onlink"<?php }?>><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['child']->value['category_name']));?>
(<?php echo smarty_modifier_script_escape((($tmp = @$_smarty_tpl->tpl_vars['child']->value['product_count'])===null||$tmp==='' ? 0 : $tmp));?>
)</a></p><?php if (in_array($_smarty_tpl->tpl_vars['child']->value['category_id'],$_smarty_tpl->tpl_vars['arrParentID']->value)) {
$_smarty_tpl->_assignInScope('disp_child', 1);
} else {
$_smarty_tpl->_assignInScope('disp_child', 0);
}
if ((isset($_smarty_tpl->tpl_vars['child']->value['children']))) {
$_smarty_tpl->_subTemplateRender(((string)@constant('TEMPLATE_REALDIR'))."frontparts/bloc/category_tree_fork.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('children'=>$_smarty_tpl->tpl_vars['child']->value['children'],'display'=>$_smarty_tpl->tpl_vars['disp_child']->value), 0, true);
}?></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul>
<?php }
}
