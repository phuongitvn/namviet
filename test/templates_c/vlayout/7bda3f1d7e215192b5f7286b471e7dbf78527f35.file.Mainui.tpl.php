<?php /* Smarty version Smarty-3.1.7, created on 2014-04-23 04:28:07
         compiled from "/home/crm4b519/public_html/includes/runtime/../../layouts/vlayout/modules/MailManager/Mainui.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185362808953574157bdb0a0-86349525%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bda3f1d7e215192b5f7286b471e7dbf78527f35' => 
    array (
      0 => '/home/crm4b519/public_html/includes/runtime/../../layouts/vlayout/modules/MailManager/Mainui.tpl',
      1 => 1398226575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185362808953574157bdb0a0-86349525',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MAILBOX' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_53574157c3e1c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53574157c3e1c')) {function content_53574157c3e1c($_smarty_tpl) {?>
<div id="_folderdiv_"><?php echo $_smarty_tpl->getSubTemplate ("modules/MailManager/FolderList.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
<input type="hidden" name="refresh_timeout" id="refresh_timeout" value="<?php echo $_smarty_tpl->tpl_vars['MAILBOX']->value->refreshTimeOut();?>
"/>
<?php }} ?>