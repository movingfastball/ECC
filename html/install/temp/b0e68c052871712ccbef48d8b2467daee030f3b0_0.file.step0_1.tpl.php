<?php
/* Smarty version 3.1.36, created on 2021-02-09 23:49:28
  from '/vagrant/ec-cube2/html/install/templates/step0_1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6022a0f8cc2715_71602891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0e68c052871712ccbef48d8b2467daee030f3b0' => 
    array (
      0 => '/vagrant/ec-cube2/html/install/templates/step0_1.tpl',
      1 => 1612881855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6022a0f8cc2715_71602891 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/vagrant/ec-cube2/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),1=>array('file'=>'/vagrant/ec-cube2/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),));
?>

<div class="contents">
    <div class="message">
        <h2>必要なファイルのコピー</h2>
    </div>
    <div class="result-info01">
        <textarea name="disp_area" cols="50" rows="20" class="box470"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['copy_mess']->value);?>
</textarea>
    </div>
    <form name="form1" id="form1" method="post" action="?">
        <input type="hidden" name="mode" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_mode']->value);?>
" />
        <input type="hidden" name="step" value="0" />

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
        <div class="result-info02">
            <?php if ($_smarty_tpl->tpl_vars['hasErr']->value) {?>
                <p class="action-message">[次へ進む] をクリックすると、チェックを再実行します。</p>
                <div><input type="checkbox" name="mode_overwrite" value="step0" id="mode_overwrite" /> <label for="mode_overwrite">問題点を無視して次へ進む (上級者向け)</label></div>
                <div class="attention">※ 問題点を解決せずに無視して進めると、トラブルの原因となる場合があります。</div>
            <?php } else { ?>
                <p class="action-message">必要なファイルのコピーを開始します。</p>
            <?php }?>
        </div>

        <div class="btn-area-top"></div>
        <div class="btn-area">
            <ul>
                <li><a href="#" class="btn-action" onclick="document.form1['mode'].value='return_step0';document.form1.submit();return false;"><span class="btn-prev">前へ戻る</span></a></li>
                <li><a class="btn-action" href="javascript:;"><span class="btn-next">次へ進む</span></a></li>
            </ul>
        </div>
        <div class="btn-area-bottom"></div>
    </form>
</div>
<?php }
}
