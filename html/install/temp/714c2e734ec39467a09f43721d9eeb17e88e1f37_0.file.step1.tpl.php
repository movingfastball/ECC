<?php
/* Smarty version 3.1.36, created on 2021-02-09 23:49:36
  from '/vagrant/ec-cube2/html/install/templates/step1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6022a1003b9570_87239099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '714c2e734ec39467a09f43721d9eeb17e88e1f37' => 
    array (
      0 => '/vagrant/ec-cube2/html/install/templates/step1.tpl',
      1 => 1612881855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6022a1003b9570_87239099 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/vagrant/ec-cube2/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),1=>array('file'=>'/vagrant/ec-cube2/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),2=>array('file'=>'/vagrant/ec-cube2/data/vendor/smarty/smarty/libs/plugins/function.html_radios.php','function'=>'smarty_function_html_radios',),));
echo '<script'; ?>
 type="text/javascript">
$(function() {
    $('.option').hide();
    if ($('input[name=mail_backend]').val() == 'smtp') {
        $('.smtp').attr('disabled', false);
    } else {
        $('.smtp').attr('disabled', true);
    }
    $('#options').click(function() {
        $('.option').slideToggle();
    });
    $('input[name=mail_backend]').change(function() {
        if ($(this).val() == 'smtp') {
            $('.smtp').attr('disabled', false);
        } else {
            $('.smtp').attr('disabled', true);
        }
    });
});
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
            <h2>ECサイトの設定</h2>
        </div>
        <div class="block">
            <table>
                <col width="30%" />
                <col width="70%" />
                <tr>
                    <th>店名<span class="attention">※</span></th>
                    <td>
                    <?php $_smarty_tpl->_assignInScope('key', "shop_name");?>
                    <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span>
                    <input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']));?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['length']);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
" size="50"  /><br />
                    <span class="ex-text">あなたの店名をご記入ください。</span>
                    </td>
                </tr>
                <tr>
                    <th>メールアドレス<span class="attention">※</span></th>
                    <td>
                    <?php $_smarty_tpl->_assignInScope('key', "admin_mail");?>
                    <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span>
                    <input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']));?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['length']);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
" size="50"  /><br />
                    <span class="ex-text">受注メールなどの宛先になります。<br />
                    (例) eccube@example.com</span>
                    </td>
                </tr>
                <tr>
                    <th>ログインID<span class="attention">※</span><br/>半角英数字記号<?php echo smarty_modifier_script_escape(@constant('ID_MIN_LEN'));?>
～<?php echo smarty_modifier_script_escape(@constant('ID_MAX_LEN'));?>
文字</th>
                    <td>
                    <?php $_smarty_tpl->_assignInScope('key', "login_id");?>
                    <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span>
                    <input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']));?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['length']);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
" size="50"  /><br />
                    <span class="ex-text">管理機能にログインするためのIDです。</span><br />
                    </td>
                </tr>
                <tr>
                    <th>パスワード<span class="attention">※</span><br/>半角英数字記号<?php echo smarty_modifier_script_escape(@constant('PASSWORD_MIN_LEN'));?>
～<?php echo smarty_modifier_script_escape(@constant('PASSWORD_MAX_LEN'));?>
文字</th>
                    <td>
                    <?php $_smarty_tpl->_assignInScope('key', "login_pass");?>
                    <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span>
                    <input type="password" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']));?>
" maxlength="<?php echo smarty_modifier_script_escape(@constant('ID_MAX_LEN'));?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
;" size="50"  /><br />
                    <span class="ex-text">管理機能にログインするためのパスワードです。</span><br />
                    </td>
                </tr>
            </table>

            <h2>管理機能の設定</h2>
            <table>
                <col width="30%" />
                <col width="70%" />
                <tr>
                    <th>
                        ディレクトリ<span class="attention">※</span><br/>
                        半角英数字<?php echo smarty_modifier_script_escape(@constant('ID_MIN_LEN'));?>
～<?php echo smarty_modifier_script_escape(@constant('ID_MAX_LEN'));?>
文字
                    </th>
                    <td>
                        <?php $_smarty_tpl->_assignInScope('key', "admin_dir");?>
                        <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span>
                        <input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']));?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['length']);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
;" size="50" />
                        <div class="ex-text">
                            管理機能にアクセスする下記URLの [管理機能ディレクトリ] の部分です。<br />
                            <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['secure_url']['value']));?>
<span class="bold">[管理機能ディレクトリ]</span>/
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>SSL制限<br/></th>
                    <td>
                    <?php $_smarty_tpl->_assignInScope('key', "admin_force_ssl");?>
                    <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span>
                    <input type="checkbox" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" id="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value'] == 1) {?>checked="checked"<?php }?> /><label for="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
;">SSLを強制する。</label><br />
                    <span class="ex-text">管理機能へのアクセスをSSL経由(https)の接続に制限します。</span><br />
                    </td>
                </tr>
                <tr>
                    <th>IP制限<br/></th>
                    <td>
                    <?php $_smarty_tpl->_assignInScope('key', "admin_allow_hosts");?>
                    <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span>
                    <span class="ex-text">管理機能へのアクセスを特定のIPアドレスからの接続のみに制限します。<br />
                    アクセスを許可するIPアドレスを1行づつ入力してください。<br />
                    何も入力しない場合は全てを許可します。</span><br />
                    <textarea name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" class="box280" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
;"><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']));?>
</textarea>
                    </td>
                </tr>
            </table>

            <h2>WEBサーバーの設定</h2>
            <table>
                <col width="30%" />
                <col width="70%" />
                <tr>
                    <th>URL(通常)<span class="attention">※</span></th>
                    <td>
                    <?php $_smarty_tpl->_assignInScope('key', "normal_url");?>
                    <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span>
                    <input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']));?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['length']);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
" size="50"  />
                    </td>
                </tr>
                <tr>
                    <th>URL(セキュア)<span class="attention">※</span></th>
                    <td>
                    <?php $_smarty_tpl->_assignInScope('key', "secure_url");?>
                    <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span>
                    <input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']));?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['length']);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
" size="50"  />
                    </td>
                </tr>
                <tr>
                    <th>共通ドメイン</th>
                    <td>
                    <?php $_smarty_tpl->_assignInScope('key', "domain");?>
                    <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span>
                    <input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']));?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['length']);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
" size="50"  /><br />
                    <span class="ex-text">通常URLとセキュアURLでサブドメインが異なる場合に指定します。</span>
                    </td>
                </tr>
            </table>

            <p><a href="javascript:;" id="options">&gt;&gt; オプション設定</a></p>
            <div class="option">
                <h2>メールサーバーの設定(オプション)</h2>
                <table>
                    <col width="30%" />
                    <col width="70%" />
                    <tr>
                        <th>メーラーバックエンド<span class="attention">※</span></th>
                        <td>
                          <?php $_smarty_tpl->_assignInScope('key', "mail_backend");?>
                          <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span>
                          <?php echo smarty_function_html_radios(array('name'=>$_smarty_tpl->tpl_vars['key']->value,'options'=>$_smarty_tpl->tpl_vars['arrMailBackend']->value,'selected'=>smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value'])),$_smarty_tpl);?>
<br />
                          <span class="ex-text">mail - PHP の組込関数 mail() を使用して送信します。<br />
                          SMTP - SMTP サーバに直接接続してメールを送信します。<br />
                          sendmail - sendmail プログラムにより送信します。</span>
                        </td>
                    </tr>
                    <tr>
                        <th>SMTP ホスト</th>
                        <td>
                          <?php $_smarty_tpl->_assignInScope('key', "smtp_host");?>
                          <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span>
                          <input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']));?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['length']);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
" size="50" class="smtp" /><br />
                          <span class="ex-text">メーラーバックエンドが SMTP の場合のみ指定します。</span>
                        </td>
                    </tr>
                    <tr>
                        <th>SMTP ポート</th>
                        <td>
                          <?php $_smarty_tpl->_assignInScope('key', "smtp_port");?>
                          <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span>
                          <input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']));?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['length']);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
" size="5" class="smtp" /><br />
                          <span class="ex-text">メーラーバックエンドが SMTP の場合のみ指定します。</span>
                        </td>
                    </tr>
                    <tr>
                        <th>SMTP ユーザー</th>
                        <td>
                          <?php $_smarty_tpl->_assignInScope('key', "smtp_user");?>
                          <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span>
                          <input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']));?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['length']);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
" size="50" class="smtp" /><br />
                          <span class="ex-text">メーラーバックエンドが SMTP の場合で、SMTP-AUTH 使用時のみ指定します。</span>
                        </td>
                    </tr>
                    <tr>
                        <th>SMTP パスワード</th>
                        <td>
                          <?php $_smarty_tpl->_assignInScope('key', "smtp_password");?>
                          <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span>
                          <input type="password" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']));?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['length']);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
" size="50" class="smtp" /><br />
                          <span class="ex-text">メーラーバックエンドが SMTP の場合で、SMTP-AUTH 使用時のみ指定します。</span>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="btn-area-top"></div>
    <div class="btn-area">
        <ul>
            <li><a class="btn-action" href="javascript:;" onclick="document.form1['mode'].value='return_step0';document.form1.submit();return false;"><span class="btn-prev">前へ戻る</span></a></li>
            <li><a class="btn-action" href="javascript:;"><span class="btn-next">次へ進む</span></a></li>
        </ul>
    </div>
    <div class="btn-area-bottom"></div>
</form>
<?php }
}
