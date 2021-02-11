<?php
/* Smarty version 3.1.36, created on 2021-02-11 05:03:52
  from '/vagrant/ec-cube2/data/Smarty/templates/default/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60243c280cfa47_52611768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa3d85c1c44c627c7e0f9a8cacb2d828074aba8b' => 
    array (
      0 => '/vagrant/ec-cube2/data/Smarty/templates/default/index.tpl',
      1 => 1612881888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60243c280cfa47_52611768 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/vagrant/ec-cube2/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),));
?>

<div id="main_image"><a href="<?php echo smarty_modifier_script_escape(@constant('P_DETAIL_URLPATH'));?>
1"><img class="hover_change_image" src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/banner/bnr_top_main.jpg" alt="詳細はこちら" /></a></div>
<?php }
}
