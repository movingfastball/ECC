<?php
/* Smarty version 3.1.36, created on 2021-02-11 14:41:46
  from '/vagrant/CUBE/data/Smarty/templates/default/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6024c39ac63c45_38245038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a95660f73876879ea1683f0ea9c44d9c7ecf5465' => 
    array (
      0 => '/vagrant/CUBE/data/Smarty/templates/default/footer.tpl',
      1 => 1612881888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6024c39ac63c45_38245038 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/vagrant/CUBE/data/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'/vagrant/CUBE/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),2=>array('file'=>'/vagrant/CUBE/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),));
?>

<!--▼FOOTER-->
<div id="footer_wrap"><div id="footer" class="clearfix"><div id="pagetop"><a href="#top">このページの先頭へ</a></div><div id="copyright">Copyright ©&nbsp;<?php if (@constant('RELEASE_YEAR') != smarty_modifier_date_format(time(),"%Y")) {
echo smarty_modifier_script_escape(@constant('RELEASE_YEAR'));?>
-<?php }
echo smarty_modifier_script_escape(smarty_modifier_date_format(time(),"%Y"));?>
&nbsp;<?php echo smarty_modifier_script_escape(smarty_modifier_h((($tmp = @$_smarty_tpl->tpl_vars['arrSiteInfo']->value['shop_name_eng'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['arrSiteInfo']->value['shop_name'] : $tmp)));?>
 All rights reserved.</div></div></div>
<!--▲FOOTER-->
<?php }
}
