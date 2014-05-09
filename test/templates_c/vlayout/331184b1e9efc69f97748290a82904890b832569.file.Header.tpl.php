<?php /* Smarty version Smarty-3.1.7, created on 2014-04-27 02:54:39
         compiled from "/home/crm4b519/public_html/includes/runtime/../../layouts/vlayout/modules/Mobile/generic/Header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1422049508535c716f28c7b0-98656717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '331184b1e9efc69f97748290a82904890b832569' => 
    array (
      0 => '/home/crm4b519/public_html/includes/runtime/../../layouts/vlayout/modules/Mobile/generic/Header.tpl',
      1 => 1398226575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1422049508535c716f28c7b0-98656717',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'IS_SAFARI' => 0,
    'TITLE' => 0,
    'SKIN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_535c716f2ab75',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535c716f2ab75')) {function content_535c716f2ab75($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
         "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<link href="resources/images/appicon.jpg" rel="apple-touch-icon" />

<?php if ($_smarty_tpl->tpl_vars['IS_SAFARI']->value){?>
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;"/>
<?php }?>

<title><?php if ($_smarty_tpl->tpl_vars['TITLE']->value){?><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
<?php }else{ ?>vtiger CRM Mobile<?php }?></title>

<link rel="stylesheet" type="text/css" href="resources/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN']->value;?>
" />
<script type="text/javascript" src="Mobile.js"></script>

</head>

<?php }} ?>