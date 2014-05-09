<?php /* Smarty version Smarty-3.1.7, created on 2014-03-10 08:32:27
         compiled from "/var/www/html/CRMPlus/crmplus_ga/includes/runtime/../../layouts/vlayout/modules/EmailTemplates/DetailViewHeaderTitle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:521201519531d789b717ae3-03701328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b45acaf1cf62a085793057c8206c413caac6d15' => 
    array (
      0 => '/var/www/html/CRMPlus/crmplus_ga/includes/runtime/../../layouts/vlayout/modules/EmailTemplates/DetailViewHeaderTitle.tpl',
      1 => 1389945509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '521201519531d789b717ae3-03701328',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECORD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_531d789b793da',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531d789b793da')) {function content_531d789b793da($_smarty_tpl) {?>
<span class="span10 margin0px"><span class="row-fluid"><span class="recordLabel font-x-x-large textOverflowEllipsis span pushDown" title="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getName();?>
"><span class="templatename"><?php echo decode_html($_smarty_tpl->tpl_vars['RECORD']->value->get('templatename'));?>
</span>&nbsp;</span></span></span><?php }} ?>