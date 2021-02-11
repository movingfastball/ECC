<?php
/* Smarty version 3.1.36, created on 2021-02-09 23:51:09
  from '/vagrant/ec-cube2/html/install/templates/step2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6022a15dc549c1_82842451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99eea54dd86e224ffd845687bbe2c47e2bcaa76d' => 
    array (
      0 => '/vagrant/ec-cube2/html/install/templates/step2.tpl',
      1 => 1612881855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6022a15dc549c1_82842451 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/vagrant/ec-cube2/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),1=>array('file'=>'/vagrant/ec-cube2/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),2=>array('file'=>'/vagrant/ec-cube2/data/vendor/smarty/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),));
echo '<script'; ?>
 type="text/javascript">
function lfnChangePort(db_type) {
    type = db_type.value;

    if (type == 'pgsql') {
        form1.db_port.value = '<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrDB_PORT']->value['pgsql']);?>
';
    }

    if (type == 'mysql') {
        form1.db_port.value = '<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrDB_PORT']->value['mysql']);?>
';
    }
}
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
            <h2>データベースの設定</h2>
            ※インストールの前に新しくDBを作成しておく必要があります。
            <div class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['all']);?>
</div>
        </div>
        <div class="block">
            <table>
                <col width="30%" />
                <col width="70%" />
                <tr>
                    <th>DBの種類<span class="attention">※</span></th>
                    <td>
                    <?php $_smarty_tpl->_assignInScope('key', "db_type");?>
                    <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span>
                    <select name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
" onChange="lfnChangePort(this)">
                    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrDB_TYPE']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']),$_smarty_tpl);?>

                    </select>
                    </td>
                </tr>
                <tr>
                    <th>DBサーバー</th>
                    <td>
                    <?php $_smarty_tpl->_assignInScope('key', "db_server");?>
                    <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span>
                    <input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']));?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['length']);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
" size="50" />
                    </td>
                </tr>
                <tr>
                    <th>ポート</th>
                    <td>
                    <?php $_smarty_tpl->_assignInScope('key', "db_port");?>
                    <span class="attention"><span class="fs12n"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span></span>
                    <input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']));?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['length']);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
" size="50" />
                    </td>
                </tr>
                <tr>
                    <th>DB名<span class="attention">※</span></th>
                    <td>
                    <?php $_smarty_tpl->_assignInScope('key', "db_name");?>
                    <span class="attention"><span class="fs12n"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span></span>
                    <input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']));?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['length']);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
" size="50" />
                    </td>
                </tr>
                <tr>
                    <th>DBユーザ<span class="attention">※</span></th>
                    <td>
                    <?php $_smarty_tpl->_assignInScope('key', "db_user");?>
                    <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span>
                    <input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']));?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['length']);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
" size="50" />
                    </td>
                </tr>
                <tr>
                    <th>DBパスワード<span class="attention">※</span></th>
                    <td>
                    <?php $_smarty_tpl->_assignInScope('key', "db_password");?>
                    <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span>
                    <input type="password" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']));?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['length']);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
" size="50" />
                    </td>
                </tr>
            </table>
        </div>

        <div class="btn-area-top"></div>
        <div class="btn-area">
            <ul>
                <li><a class="btn-action" href="javascript:;" onclick="document.form1['mode'].value='return_step1';document.form1.submit();return false;"><span class="btn-prev">前へ戻る</span></a></li>
                <li><a class="btn-action" href="javascript:;"><span class="btn-next">次へ進む</span></a></li>
            </ul>
        </div>
        <div class="btn-area-bottom"></div>
    </div>
</form>
<?php }
}
