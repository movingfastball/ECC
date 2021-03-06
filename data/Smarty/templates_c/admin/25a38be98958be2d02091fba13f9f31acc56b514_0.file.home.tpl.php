<?php
/* Smarty version 3.1.36, created on 2021-02-11 04:54:02
  from '/vagrant/ec-cube2/data/Smarty/templates/admin/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_602439da96c965_30008457',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25a38be98958be2d02091fba13f9f31acc56b514' => 
    array (
      0 => '/vagrant/ec-cube2/data/Smarty/templates/admin/home.tpl',
      1 => 1612881885,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602439da96c965_30008457 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/vagrant/ec-cube2/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),1=>array('file'=>'/vagrant/ec-cube2/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),2=>array('file'=>'/vagrant/ec-cube2/data/smarty_extends/modifier.n2s.php','function'=>'smarty_modifier_n2s',),));
?>

<div id="home">

        <div id="home-info">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrInfo']->value, 'info');
$_smarty_tpl->tpl_vars['info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->do_else = false;
?>
            <dl class="home-info-item">
                <dt class="date"><?php echo smarty_modifier_script_escape(smarty_modifier_h(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfDispDBDate' ][ 0 ], array( $_smarty_tpl->tpl_vars['info']->value['disp_date'],false ))));?>
</dt>
                <dt class="title"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['info']->value['title']);?>
</dt>
                <dd class="body"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['info']->value['body']);?>
</dd>
            </dl>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    
        <div id="home-main">
        <form name="form1" id="form1" method="post" action="#">
            <input type="hidden" name="<?php echo smarty_modifier_script_escape(@constant('TRANSACTION_ID_NAME'));?>
" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['transactionid']->value);?>
" />

                        <h2>システム情報</h2>
            <table summary="システム情報" class="shop-info">
                <tr>
                    <th>EC-CUBEバージョン</th>
                    <td><?php echo smarty_modifier_script_escape(@constant('ECCUBE_VERSION'));?>
</td>
                </tr>
                <tr>
                    <th>PHPバージョン</th>
                    <td><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['php_version']->value);?>
</td>
                </tr>
                <tr>
                    <th>DBバージョン</th>
                    <td><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['db_version']->value);?>
</td>
                </tr>
                <tr>
                    <th>詳細</th>
                    <td><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
system/system.php">システム設定＞システム情報</a></td>
                </tr>
            </table>
            
                        <h2>ショップの状況</h2>
            <table summary="ショップの状況" class="shop-info">
                <tr>
                    <th>現在の会員数</th>
                    <td><?php echo smarty_modifier_script_escape(smarty_modifier_n2s((($tmp = @$_smarty_tpl->tpl_vars['customer_cnt']->value)===null||$tmp==='' ? "0" : $tmp)));?>
名</td>
                </tr>
                <tr>
                    <th>昨日の売上高</th>
                    <td><?php echo smarty_modifier_script_escape(smarty_modifier_n2s((($tmp = @$_smarty_tpl->tpl_vars['order_yesterday_amount']->value)===null||$tmp==='' ? "0" : $tmp)));?>
円</td>
                </tr>
                <tr>
                    <th>昨日の売上件数</th>
                    <td><?php echo smarty_modifier_script_escape(smarty_modifier_n2s((($tmp = @$_smarty_tpl->tpl_vars['order_yesterday_cnt']->value)===null||$tmp==='' ? "0" : $tmp)));?>
件</td>
                </tr>
                <tr>
                    <th><span>今月の売上高</span><span>(昨日まで) </span></th>
                    <td><?php echo smarty_modifier_script_escape(smarty_modifier_n2s((($tmp = @$_smarty_tpl->tpl_vars['order_month_amount']->value)===null||$tmp==='' ? "0" : $tmp)));?>
円</td>
                </tr>
                <tr>
                    <th><span>今月の売上件数 </span><span>(昨日まで) </span></th>
                    <td><?php echo smarty_modifier_script_escape(smarty_modifier_n2s((($tmp = @$_smarty_tpl->tpl_vars['order_month_cnt']->value)===null||$tmp==='' ? "0" : $tmp)));?>
件</td>
                </tr>
                <tr>
                    <th>昨日のレビュー書き込み数</th>
                    <td><?php echo smarty_modifier_script_escape((($tmp = @$_smarty_tpl->tpl_vars['review_yesterday_cnt']->value)===null||$tmp==='' ? "0" : $tmp));?>
件</th>
                </tr>
                <tr>
                    <th>会員の保持ポイント合計</th>
                    <td><?php echo smarty_modifier_script_escape((($tmp = @$_smarty_tpl->tpl_vars['customer_point']->value)===null||$tmp==='' ? "0" : $tmp));?>
pt</td>
                </tr>
                <tr>
                    <th>レビュー書き込み非表示数</th>
                    <td><?php echo smarty_modifier_script_escape((($tmp = @$_smarty_tpl->tpl_vars['review_nondisp_cnt']->value)===null||$tmp==='' ? "0" : $tmp));?>
件</td>
                </tr>
                <tr>
                    <th>品切れ商品</th>
                    <td>
                    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arrSoldout']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                    <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrSoldout']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['product_id']);?>
:<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrSoldout']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name']));?>
<br />
                    <?php
}
}
?>
                    </td>
                </tr>
            </table>
            
                        <h2>新規受付一覧</h2>
            <table summary="新規受付一覧" id="home-order">
                <tr>
                    <th class="center">受注日</th>
                    <th class="center">お名前</th>
                    <th class="center">購入商品</th>
                    <th class="center">支払方法</th>
                    <th class="center">購入金額(円)</th>
                </tr>
                <?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arrNewOrder']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <tr>
                    <td><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrNewOrder']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['create_date']);?>
</td>
                    <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrNewOrder']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name01']));?>
 <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrNewOrder']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name02']));?>
</td>
                    <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrNewOrder']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['product_name']));?>
</td>
                    <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrNewOrder']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['payment_method']));?>
</td>
                    <td class="right"><?php echo smarty_modifier_script_escape(smarty_modifier_n2s($_smarty_tpl->tpl_vars['arrNewOrder']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['total']));?>
円</td>
                </tr>
                <?php
}
}
?>
            </table>
            
        </form>
    </div>
    
</div>
<?php }
}
