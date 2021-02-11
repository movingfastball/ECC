<?php
/* Smarty version 3.1.36, created on 2021-02-11 14:41:46
  from '/vagrant/CUBE/data/Smarty/templates/default/frontparts/bloc/login_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6024c39a9f5ad9_30747156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f8c69dc30764237fb0790c8de8c46a94b745d82' => 
    array (
      0 => '/vagrant/CUBE/data/Smarty/templates/default/frontparts/bloc/login_header.tpl',
      1 => 1612881888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6024c39a9f5ad9_30747156 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/vagrant/CUBE/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),1=>array('file'=>'/vagrant/CUBE/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),2=>array('file'=>'/vagrant/CUBE/data/smarty_extends/modifier.n2s.php','function'=>'smarty_modifier_n2s',),));
if (!$_smarty_tpl->tpl_vars['tpl_login']->value) {
echo '<script'; ?>
 type="text/javascript">//<![CDATA[
    $(function(){
        var $login_email = $('#header_login_area input[name=login_email]');

        if (!$login_email.val()) {
            $login_email
                .val('メールアドレス')
                .css('color', '#AAA');
        }

        $login_email
            .focus(function() {
                if ($(this).val() == 'メールアドレス') {
                    $(this)
                        .val('')
                        .css('color', '#000');
                }
            })
            .blur(function() {
                if (!$(this).val()) {
                    $(this)
                        .val('メールアドレス')
                        .css('color', '#AAA');
                }
            });

        $('#header_login_form').submit(function() {
            if (!$login_email.val()
                || $login_email.val() == 'メールアドレス') {
                if ($('#header_login_area input[name=login_pass]').val()) {
                    alert('メールアドレス/パスワードを入力して下さい。');
                }
                return false;
            }
            return true;
        });
    });
//]]><?php echo '</script'; ?>
>
<?php }?>
<div class="block_outer"><div id="header_login_area" class="clearfix"><form name="header_login_form" id="header_login_form" method="post" action="<?php echo smarty_modifier_script_escape(@constant('HTTPS_URL'));?>
frontparts/login_check.php"<?php if (!$_smarty_tpl->tpl_vars['tpl_login']->value) {?> onsubmit="return eccube.checkLoginFormInputted('header_login_form')"<?php }?>><input type="hidden" name="mode" value="login" /><input type="hidden" name="<?php echo smarty_modifier_script_escape(@constant('TRANSACTION_ID_NAME'));?>
" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['transactionid']->value);?>
" /><input type="hidden" name="url" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_SERVER['REQUEST_URI']));?>
" /><div class="block_body clearfix"><?php if ($_smarty_tpl->tpl_vars['tpl_login']->value) {?><p class="btn">ようこそ <span class="user_name"><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['tpl_name1']->value));?>
 <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['tpl_name2']->value));?>
 様</span><?php if (@constant('USE_POINT') !== false) {?>/ 所持ポイント: <span class="point"> <?php echo smarty_modifier_script_escape((($tmp = @smarty_modifier_n2s($_smarty_tpl->tpl_vars['tpl_user_point']->value))===null||$tmp==='' ? 0 : $tmp));?>
 pt</span>&nbsp;&nbsp;<?php }
if (!$_smarty_tpl->tpl_vars['tpl_disable_logout']->value) {?><input type="image" class="hover_change_image" src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/common/btn_header_logout.jpg" onclick="eccube.fnFormModeSubmit('header_login_form', 'logout', '', ''); return false;" alt="ログアウト" /><?php }?></p><?php } else { ?><ul class="formlist clearfix"><li class="mail"><input type="text" class="box150" name="login_email" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['tpl_login_email']->value));?>
" style="ime-mode: disabled;" title="メールアドレスを入力して下さい" /></li><li class="login_memory"><input type="checkbox" name="login_memory" id="header_login_memory" value="1" <?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetChecked' ][ 0 ], array( $_smarty_tpl->tpl_vars['tpl_login_memory']->value,1 )));?>
 /><label for="header_login_memory"><span>記憶</span></label></li><li class="password"><input type="password" class="box100" name="login_pass" title="パスワードを入力して下さい" /></li><li class="btn"><input type="image" class="hover_change_image" src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/common/btn_header_login.jpg" /></li><li class="forgot"><a href="<?php echo smarty_modifier_script_escape(@constant('HTTPS_URL'));?>
forgot/<?php echo smarty_modifier_script_escape(@constant('DIR_INDEX_PATH'));?>
" onclick="eccube.openWindow('<?php echo smarty_modifier_script_escape(@constant('HTTPS_URL'));?>
forgot/<?php echo smarty_modifier_script_escape(@constant('DIR_INDEX_PATH'));?>
','forget','600','400',{scrollbars:'no',resizable:'no'}); return false;" target="_blank">パスワードを忘れた方</a></li></ul><?php }?></div></form></div></div>
<?php }
}
