<?php
/* Smarty version 3.1.36, created on 2021-02-11 14:41:10
  from '/vagrant/CUBE/html/install/templates/welcome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6024c3764f1913_70650455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71409b7289df7587e07e7337596a3fa0d4c0843d' => 
    array (
      0 => '/vagrant/CUBE/html/install/templates/welcome.tpl',
      1 => 1612881855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6024c3764f1913_70650455 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/vagrant/CUBE/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),1=>array('file'=>'/vagrant/CUBE/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),));
?>
<form name="form1" id="form1" method="post" action="./<?php echo smarty_modifier_script_escape(@constant('DIR_INDEX_PATH'));?>
">
    <input type="hidden" name="mode" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_mode']->value);?>
" />
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrHidden']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
        <input type="hidden" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['item']->value));?>
" />
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <div class="contents">
        <div class="message">
            EC-CUBEのインストールを開始します。
        </div>
    </div>
    <div class="btn-area-top"></div>
    <div class="btn-area">
        <ul>
            <li><a class="btn-action" href="javascript:;" onclick="document.form1.submit(); return false;"><span class="btn-next">次へ進む</span></a></li>
        </ul>
    </div>
    <div class="btn-area-bottom"></div>
</form>
<?php }
}
