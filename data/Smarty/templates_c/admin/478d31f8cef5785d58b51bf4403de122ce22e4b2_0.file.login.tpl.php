<?php
/* Smarty version 3.1.36, created on 2021-02-11 04:53:52
  from '/vagrant/ec-cube2/data/Smarty/templates/admin/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_602439d09882f7_12044820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '478d31f8cef5785d58b51bf4403de122ce22e4b2' => 
    array (
      0 => '/vagrant/ec-cube2/data/Smarty/templates/admin/login.tpl',
      1 => 1612881885,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602439d09882f7_12044820 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/vagrant/ec-cube2/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),1=>array('file'=>'/vagrant/ec-cube2/data/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>


<div id="login-wrap">

    <div id="login-form" class="clearfix">
        <h1><img src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/contents/admin_login_logo.jpg" width="140" height="150" alt="EC-CUBE管理画面" /></h1>
        <div id="input-form">
            <form name="form1" id="form1" method="post" action="?">
                <input type="hidden" name="<?php echo smarty_modifier_script_escape(@constant('TRANSACTION_ID_NAME'));?>
" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['transactionid']->value);?>
" />
                <input type="hidden" name="mode" value="login" />
                <p><label for="login_id">ID</label></p>
                <input type="text" name="login_id" size="20" class="box25" />
                <p><label for="password">PASSWORD</label></p>
                <input type="password" name="password" size="20" class="box25" />
                <p><a class="btn-tool-format" href="javascript:;" onclick="document.form1.submit(); return false;"><span>LOGIN</span></a></p>
            </form>
        </div>
    </div>

</div>
<div id="copyright">Copyright &copy; 2000-<?php echo smarty_modifier_script_escape(smarty_modifier_date_format(time(),"%Y"));?>
 EC-CUBE CO.,LTD. All Rights Reserved.</div>

<?php echo '<script'; ?>
 type="text/javascript">//<![CDATA[
document.form1.login_id.focus();
$(function() {
    $('<input type="submit" />')
        .css({'position' : 'absolute',
            'top' : '-1000px'})
        .appendTo('form');
});
//]]><?php echo '</script'; ?>
>
<?php }
}
