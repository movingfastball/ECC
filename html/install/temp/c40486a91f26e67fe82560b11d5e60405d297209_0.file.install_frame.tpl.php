<?php
/* Smarty version 3.1.36, created on 2021-02-11 14:41:10
  from '/vagrant/CUBE/html/install/templates/install_frame.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6024c3763823e1_99530341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c40486a91f26e67fe82560b11d5e60405d297209' => 
    array (
      0 => '/vagrant/CUBE/html/install/templates/install_frame.tpl',
      1 => 1612881855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6024c3763823e1_99530341 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/vagrant/CUBE/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo smarty_modifier_script_escape(@constant('CHAR_CODE'));?>
" />
<meta http-equiv="content-script-type" content="text/javascript" />
<meta http-equiv="content-style-type" content="text/css" />
<link rel="stylesheet" href="css/admin_contents.css" type="text/css" media="all" />
<link rel="stylesheet" href="../js/jquery.colorbox/colorbox.css" type="text/css" media="all" />
<!--[if lt IE 9]>
<?php echo '<script'; ?>
 src="../js/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
<![endif]-->
<!--[if gte IE 9]><!-->
<?php echo '<script'; ?>
 src="../js/jquery-2.1.1.min.js"><?php echo '</script'; ?>
>
<!--<![endif]-->
<?php echo '<script'; ?>
 type="text/javascript" src="../js/eccube.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="../js/jquery.colorbox/jquery.colorbox-min.js"><?php echo '</script'; ?>
>

<style type="text/css">
#loading{
  width: 100%;
  height: 100%;
  background-color:#FFFFFF;
  filter:alpha(opacity=85);
  -moz-opacity:0.85;
  -khtml-opacity: 0.85;
  opacity:0.85;
  position: fixed;
  _position: absolute; /* forIE6 */
  display: none;
  top: 0;
  left: 0;
  z-index: 10000;
}
#loading img {
  width: 48px;
  height: 48px;
  position: absolute;
  top: 50%;
  left: 50%;
  margin-top: -24px;
  margin-left: -24px;
}
</style>
<?php if ($_smarty_tpl->tpl_vars['tpl_mainpage']->value != 'complete.tpl') {
echo '<script'; ?>
 type="text/javascript">//<![CDATA[
$(function(){
    $('.btn-next').on('click', function(e) {
      e.preventDefault();
      $('form').submit();
      $('#loading').show();
    });
});
//]]><?php echo '</script'; ?>
>
<?php }?>
<title>EC-CUBEインストール</title>
</head>
<body>
<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['GLOBAL_ERR']->value);?>

<noscript>
  <p>JavaScript を有効にしてご利用下さい。</p>
</noscript>
<div id="loading"><img src="../js/jquery.colorbox/loading.gif" width="48" height="48" alt="Loading..." /></div>
<div id="outside">
  <div id="out-wrap">
    <div class="logo">
      <img src="img/logo_resize.jpg" width="99" height="15" alt="EC-CUBE" />
    </div>
    <div id="out-area">
      <div class="out-top"></div>
      <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['tpl_mainpage']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    </div>
    <?php if (strlen($_smarty_tpl->tpl_vars['install_info_url']->value) != 0) {?>
    <div id="info-area">
      <iframe src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['install_info_url']->value);?>
" width="562" height="550" frameborder="no" scrolling="no">
        こちらはEC-CUBEからのお知らせです。この部分は iframe対応ブラウザでご覧下さい。
      </iframe>
    </div>
    <?php }?>
  </div>
</div>
</body>
</html>
<?php }
}
