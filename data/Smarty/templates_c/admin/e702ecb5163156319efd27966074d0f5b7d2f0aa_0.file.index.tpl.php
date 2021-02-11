<?php
/* Smarty version 3.1.36, created on 2021-02-11 04:55:03
  from '/vagrant/ec-cube2/data/Smarty/templates/admin/mail/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60243a17280159_83590658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e702ecb5163156319efd27966074d0f5b7d2f0aa' => 
    array (
      0 => '/vagrant/ec-cube2/data/Smarty/templates/admin/mail/index.tpl',
      1 => 1612881887,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60243a17280159_83590658 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/vagrant/ec-cube2/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),1=>array('file'=>'/vagrant/ec-cube2/data/vendor/smarty/smarty/libs/plugins/function.html_radios.php','function'=>'smarty_function_html_radios',),2=>array('file'=>'/vagrant/ec-cube2/data/vendor/smarty/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),3=>array('file'=>'/vagrant/ec-cube2/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),));
?>

<div id="mail" class="contents-main">
<form name="search_form" id="search_form" method="post" action="?">
    <input type="hidden" name="<?php echo smarty_modifier_script_escape(@constant('TRANSACTION_ID_NAME'));?>
" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['transactionid']->value);?>
" />
    <input type="hidden" name="mode" value="search" />
    <h2>配信先検索条件設定</h2>

        <table>
        <?php $_smarty_tpl->_subTemplateRender(((string)@constant('TEMPLATE_ADMIN_REALDIR'))."/adminparts/form_customer_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <tr>
            <th>配信形式</th>
            <td colspan="3">
                <?php $_smarty_tpl->_assignInScope('key', "search_htmlmail");?>
                <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]) {?><span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span><br /><?php }?>
                <?php echo smarty_function_html_radios(array('name'=>$_smarty_tpl->tpl_vars['key']->value,'options'=>$_smarty_tpl->tpl_vars['arrHtmlmail']->value,'separator'=>"&nbsp;",'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']),$_smarty_tpl);?>
<br />
                <span class="attention">「全員（メルマガ拒否している会員も含む） 」を選択される場合は、メンテナンス告知など、運用関連の配信のみとして下さい。</span>
            </td>
        </tr>
        <tr>
            <th>配信メールアドレス種別</th>
            <td colspan="3">
                <?php $_smarty_tpl->_assignInScope('key', "search_mail_type");?>
                <?php echo smarty_function_html_radios(array('name'=>$_smarty_tpl->tpl_vars['key']->value,'options'=>$_smarty_tpl->tpl_vars['arrMailType']->value,'separator'=>"<br />",'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value'])===null||$tmp==='' ? 1 : $tmp)),$_smarty_tpl);?>

            </td>
        </tr>
    </table>
    
    <div class="btn">
        <p class="page_rows">検索結果表示件数
        <?php $_smarty_tpl->_assignInScope('key', "search_page_max");?>
        <select name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
">
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrPageRows']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]),$_smarty_tpl);?>

        </select> 件</p>
        <div class="btn-area">
            <ul>
                <li><a class="btn-action" href="javascript:;" onclick="eccube.fnFormModeSubmit('search_form', 'search', '', ''); return false;"><span class="btn-next">この条件で検索する</span></a></li>
            </ul>
        </div>
    </div>
</form>

<?php if (count($_smarty_tpl->tpl_vars['arrErr']->value) == 0 && ($_POST['mode'] == 'search' || $_POST['mode'] == 'delete' || $_POST['mode'] == 'back')) {?>

<form name="form1" id="form1" method="post" action="?">
    <input type="hidden" name="<?php echo smarty_modifier_script_escape(@constant('TRANSACTION_ID_NAME'));?>
" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['transactionid']->value);?>
" />
    <input type="hidden" name="mode" value="" />
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrHidden']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
    <?php if (is_array($_smarty_tpl->tpl_vars['item']->value)) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value, 'c_item');
$_smarty_tpl->tpl_vars['c_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c_item']->value) {
$_smarty_tpl->tpl_vars['c_item']->do_else = false;
?>
            <input type="hidden" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
[]" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['c_item']->value));?>
" />
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php } else { ?>
    <input type="hidden" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['item']->value));?>
" />
    <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <h2>検索結果一覧</h2>
    <div class="btn">
        <span class="attention"><!--検索結果数--><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_linemax']->value);?>
件</span>&nbsp;が該当しました。
        <?php if (@constant('ADMIN_MODE') == '1') {?>
            <a class="btn-normal" href="javascript:;" onclick="eccube.setModeAndSubmit('delete_all','',''); return false;"><span>検索結果を全て削除</span></a>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['tpl_linemax']->value > 0) {?>
            <a class="btn-normal" href="javascript:;" onclick="document.form1['mode'].value='input'; document.form1.submit(); return false;"><span>配信内容を設定する</span></a>
        <?php }?>
    </div>

    <?php if (count($_smarty_tpl->tpl_vars['arrResults']->value) > 0) {?>
        <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['tpl_pager']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

        <!--検索結果表示テーブル-->
        <table class="list">
        <col width="10%" />
        <col width="25%" />
        <col width="35%" />
        <col width="15%" />
        <col width="15%" />
            <tr>
                <th>会員ID</th>
                <th>名前</th>
                <th>メールアドレス</th>
                <th>希望配信</th>
                <th>登録・更新日</th>
            </tr>
            <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arrResults']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <tr>
                <td class="center"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrResults']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['customer_id']);?>
</td>
                <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrResults']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name01']));?>
 <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrResults']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name02']));?>
</td>
                <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrResults']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['email']));?>
</td>
                <?php $_smarty_tpl->_assignInScope('key', ((string)$_smarty_tpl->tpl_vars['arrResults']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['mailmaga_flg']));?>
                <td class="center"><?php echo smarty_modifier_script_escape((($tmp = @$_smarty_tpl->tpl_vars['arrHtmlmail']->value[$_smarty_tpl->tpl_vars['key']->value])===null||$tmp==='' ? 'なし' : $tmp));?>
</td>
                <td class="center"><?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfDispDBDate' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrResults']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['update_date'] )));?>
</td>
            </tr>
            <?php
}
}
?>
        </table>
        <!--検索結果表示テーブル-->
    <?php }?>
</form>

<?php }?>
</div>
<?php }
}
