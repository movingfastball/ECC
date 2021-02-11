<?php
/* Smarty version 3.1.36, created on 2021-02-11 04:53:44
  from '/vagrant/ec-cube2/html/install/templates/step4.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_602439c881d952_67467069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fe8a1795bf0f9490d8b559c07275b55069739ea' => 
    array (
      0 => '/vagrant/ec-cube2/html/install/templates/step4.tpl',
      1 => 1612881855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602439c881d952_67467069 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/vagrant/ec-cube2/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),1=>array('file'=>'/vagrant/ec-cube2/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),));
?>
<form name="form1" id="form1" method="post" action="?">
    <input type="hidden" name="mode" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_mode']->value);?>
" />
    <input type="hidden" name="step" value="0" />
    <input type="hidden" name="db_skip" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_db_skip']->value);?>
" />
    <input type="hidden" name="senddata_site_url" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_site_url']->value);?>
" />
    <input type="hidden" name="senddata_shop_name" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_shop_name']->value);?>
" />
    <input type="hidden" name="senddata_cube_ver" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_cube_ver']->value);?>
" />
    <input type="hidden" name="senddata_php_ver" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_php_ver']->value);?>
" />
    <input type="hidden" name="senddata_db_ver" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_db_ver']->value);?>
" />
    <input type="hidden" name="senddata_os_type" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h(php_uname('')));?>
 <?php echo smarty_modifier_script_escape(smarty_modifier_h($_SERVER['SERVER_SOFTWARE']));?>
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
            <h2>サイト情報について</h2>
             <p>EC-CUBEのシステム向上及び、デバッグのため以下の情報のご提供をお願いいたします。</p>
        </div>
        <div class="result-info01">
            <ul class="site-info-list">
                <li><span class="bold">サイトURL：</span><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_site_url']->value);?>
</li>
                <li><span class="bold">店名：</span><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_shop_name']->value);?>
</li>
                <li><span class="bold">EC-CUBEバージョン：</span><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_cube_ver']->value);?>
</li>
                <li><span class="bold">PHP情報：</span><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_php_ver']->value);?>
</li>
                <li><span class="bold">DB情報：</span><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_db_ver']->value);?>
</li>
                <li><span class="bold">OS情報：</span><?php echo smarty_modifier_script_escape(smarty_modifier_h(php_uname('')));?>
 <?php echo smarty_modifier_script_escape(smarty_modifier_h($_SERVER['SERVER_SOFTWARE']));?>
</li>
            </ul>
        </div>
        <div class="result-info02">
            <input type="radio" id="ok" name="send_info" checked value="true" /><label for="ok">はい(推奨)</label>&nbsp;
            <input type="radio" id="ng" name="send_info" value="false" /><label for="ng">いいえ</label>
        </div>
        <div class="btn-area-top"></div>
        <div class="btn-area">
            <ul>
                <li><a class="btn-action" href="#" onclick="document.form1['mode'].value='return_step3';document.form1.submit();return false;">
                    <span class="btn-prev">前へ戻る</span></a></li>
                <li><a class="btn-action" href="javascript:;">
                    <span class="btn-next">次へ進む</span></a></li>
            </ul>
        <div class="btn-area-bottom"></div>
    </div>
</form>
<?php }
}
