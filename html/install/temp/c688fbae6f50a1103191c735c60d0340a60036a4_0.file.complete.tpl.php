<?php
/* Smarty version 3.1.36, created on 2021-02-11 04:53:48
  from '/vagrant/ec-cube2/html/install/templates/complete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_602439cc7d2b90_69999720',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c688fbae6f50a1103191c735c60d0340a60036a4' => 
    array (
      0 => '/vagrant/ec-cube2/html/install/templates/complete.tpl',
      1 => 1612881855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602439cc7d2b90_69999720 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/vagrant/ec-cube2/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),1=>array('file'=>'/vagrant/ec-cube2/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),));
?>

<form name="form1" id="form1" method="post" action="?">
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
            <h2>EC CUBE インストールが完了しました。</h2>
        </div>
        <div class="result-info02">
            <p><a href="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_sslurl']->value);
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['admin_dir']->value);
echo smarty_modifier_script_escape(@constant('DIR_INDEX_PATH'));?>
">管理画面</a>にログインできます。<br />
            先ほど登録したID、パスワードを用いてログインしてください。</p>
        </div>
    </div>

    <div class="btn-area-top"></div>
    <div class="btn-area">
        <ul>
            <li><a class="btn-action" href="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_sslurl']->value);
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['admin_dir']->value);
echo smarty_modifier_script_escape(@constant('DIR_INDEX_PATH'));?>
"><span class="btn-next">管理画面へログインする</span></a></li>
        </ul>
    </div>
    <div class="btn-area-bottom"></div>
</form>
<?php }
}
