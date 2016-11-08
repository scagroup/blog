<?php /* Smarty version 3.1.27, created on 2016-11-08 16:10:02
         compiled from "/home/d/djfabed1/new.klinsight.ru/public_html/manager/templates/default/welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13582633225821ceaaca30d4_32491015%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '853aefa61d33633106b8703fcfd547bb8d2fe818' => 
    array (
      0 => '/home/d/djfabed1/new.klinsight.ru/public_html/manager/templates/default/welcome.tpl',
      1 => 1478610521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13582633225821ceaaca30d4_32491015',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5821ceaaca52e3_99085440',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5821ceaaca52e3_99085440')) {
function content_5821ceaaca52e3_99085440 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13582633225821ceaaca30d4_32491015';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>