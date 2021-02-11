<?php
/* Smarty version 3.1.36, created on 2021-02-11 14:41:46
  from '/vagrant/CUBE/data/Smarty/templates/default/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6024c39a7240d2_94768023',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f03edee9c21669d6b8fea645ebab34fd329caea4' => 
    array (
      0 => '/vagrant/CUBE/data/Smarty/templates/default/header.tpl',
      1 => 1612881888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6024c39a7240d2_94768023 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/vagrant/CUBE/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),1=>array('file'=>'/vagrant/CUBE/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),2=>array('file'=>'/vagrant/CUBE/data/smarty_extends/function.include_php_ex.php','function'=>'smarty_function_include_php_ex',),));
?>

<!--▼HEADER-->
<div id="header_wrap"><div id="header" class="clearfix"><div id="logo_area"><p id="site_description">EC-CUBE発!世界中を旅して見つけた立方体グルメを立方隊長が直送！</p><a href="<?php echo smarty_modifier_script_escape(@constant('TOP_URL'));?>
"><img src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/common/logo.gif" alt="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrSiteInfo']->value['shop_name']));?>
/<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['tpl_title']->value));?>
" /></a></div><div id="header_utility"><div id="headerInternalColumn"><?php if (!empty($_smarty_tpl->tpl_vars['arrPageLayout']->value['HeaderInternalNavi'])) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrPageLayout']->value['HeaderInternalNavi'], 'HeaderInternalNaviItem', false, 'HeaderInternalNaviKey');
$_smarty_tpl->tpl_vars['HeaderInternalNaviItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['HeaderInternalNaviKey']->value => $_smarty_tpl->tpl_vars['HeaderInternalNaviItem']->value) {
$_smarty_tpl->tpl_vars['HeaderInternalNaviItem']->do_else = false;
?><!-- ▼<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['HeaderInternalNaviItem']->value['bloc_name']);?>
 --><?php if ($_smarty_tpl->tpl_vars['HeaderInternalNaviItem']->value['php_path'] != '') {
echo smarty_function_include_php_ex(array('file'=>$_smarty_tpl->tpl_vars['HeaderInternalNaviItem']->value['php_path'],'items'=>$_smarty_tpl->tpl_vars['HeaderInternalNaviItem']->value),$_smarty_tpl);
} else {
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['HeaderInternalNaviItem']->value['tpl_path'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['HeaderInternalNaviItem']->value), 0, true);
}?><!-- ▲<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['HeaderInternalNaviItem']->value['bloc_name']);?>
 --><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></div><div id="header_navi"><ul><li class="mypage"><a href="<?php echo smarty_modifier_script_escape(@constant('HTTPS_URL'));?>
mypage/login.php"><img class="hover_change_image" src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/common/btn_header_mypage.jpg" alt="MYページ" /></a></li><li class="entry"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));?>
entry/kiyaku.php"><img class="hover_change_image" src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/common/btn_header_entry.jpg" alt="会員登録" /></a></li><li><a href="<?php echo smarty_modifier_script_escape(@constant('CART_URL'));?>
"><img class="hover_change_image" src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/common/btn_header_cart.jpg" alt="カゴの中を見る" /></a></li></ul></div></div></div></div>
<!--▲HEADER-->
<?php }
}
