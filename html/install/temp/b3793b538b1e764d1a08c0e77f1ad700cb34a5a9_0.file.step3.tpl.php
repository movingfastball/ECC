<?php
/* Smarty version 3.1.36, created on 2021-02-11 04:51:40
  from '/vagrant/ec-cube2/html/install/templates/step3.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6024394cc489a9_35071271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3793b538b1e764d1a08c0e77f1ad700cb34a5a9' => 
    array (
      0 => '/vagrant/ec-cube2/html/install/templates/step3.tpl',
      1 => 1612881855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6024394cc489a9_35071271 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/vagrant/ec-cube2/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),1=>array('file'=>'/vagrant/ec-cube2/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),));
echo '<script'; ?>
 type="text/javascript">
<!--
    // モードとキーを指定してSUBMITを行う。
    eccube.setModeAndSubmit = function(mode) {
        switch(mode) {
        case 'drop':
            if(!window.confirm('一度削除したデータは、元に戻せません。\n削除しても宜しいですか？')){
                return;
            }
            break;
        default:
            break;
        }
        document.form1['mode'].value = mode;
        document.form1.submit();
    };
//-->
<?php echo '</script'; ?>
>

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

    <div class="contents">
        <div class="message">
            <h2>データベースの初期化</h2>
        </div>
        <div class="result-info02">
        <p class="action-message">
            <?php if ($_smarty_tpl->tpl_vars['tpl_db_version']->value != '') {?><span class="bold">接続情報：</span><br />
                <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_db_version']->value);?>

            <?php }?>
            データベースの初期化を開始します。<br />
            ※すでにテーブル等が作成されている場合は中断されます。</P>
            <?php if ($_smarty_tpl->tpl_vars['tpl_mode']->value != 'complete') {?>
                <input type="checkbox" id="skip" name="db_skip" <?php if ($_smarty_tpl->tpl_vars['tpl_db_skip']->value == "on") {?>checked="checked"<?php }?> /> <label for="skip">データベースの初期化処理を行わない</label>
            <?php }?>
        </div>
        <div class="result-info02">
            <?php if (count($_smarty_tpl->tpl_vars['arrErr']->value) > 0 || $_smarty_tpl->tpl_vars['tpl_message']->value != '') {?>
                <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_message']->value);?>
<br />
                <span class="attention top"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['all']);?>
</span>
                <?php if ($_smarty_tpl->tpl_vars['arrErr']->value['all'] != '') {?>
                    <ul class="btn-area">
                        <li><a class="btn-normal" href="javascript:;" onclick="eccube.setModeAndSubmit('drop'); return false;">既存データを全て削除する</a></li>
                    </ul>
                <?php }?>
            <?php }?>
        </div>
    </div>

    <div class="btn-area-top"></div>
    <div class="btn-area">
        <ul>
            <li><a class="btn-action" href="javascript:;" onclick="document.form1['mode'].value='return_step2';document.form1.submit();return false;"><span class="btn-prev">前へ戻る</span></a></li>
            <li><a class="btn-action" href="javascript:;" onclick="document.body.style.cursor='wait';"><span class="btn-next">次へ進む</span></a></li>
        </ul>
    </div>
    <div class="btn-area-bottom"></div>
</form>
<?php }
}
