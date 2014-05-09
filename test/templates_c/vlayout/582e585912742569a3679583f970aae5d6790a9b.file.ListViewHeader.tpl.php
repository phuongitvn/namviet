<?php /* Smarty version Smarty-3.1.7, created on 2014-03-31 09:35:40
         compiled from "/var/www/html/CRMPlus/crmplus_ga/includes/runtime/../../layouts/vlayout/modules/Settings/LoginHistory/ListViewHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1870544353533936ec23c256-92444351%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '582e585912742569a3679583f970aae5d6790a9b' => 
    array (
      0 => '/var/www/html/CRMPlus/crmplus_ga/includes/runtime/../../layouts/vlayout/modules/Settings/LoginHistory/ListViewHeader.tpl',
      1 => 1389945506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1870544353533936ec23c256-92444351',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'QUALIFIED_MODULE' => 0,
    'USERSLIST' => 0,
    'USER' => 0,
    'USERNAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_533936ec3188e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533936ec3188e')) {function content_533936ec3188e($_smarty_tpl) {?>
<div class="container-fluid"><div class="widget_header row-fluid"><h3><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></div><hr><div class="row-fluid"><span class="span6 btn-toolbar"><select class="chzn-select" id="usersFilter" ><option value=""><?php echo vtranslate('LBL_ALL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php  $_smarty_tpl->tpl_vars['USERNAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['USERNAME']->_loop = false;
 $_smarty_tpl->tpl_vars['USER'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['USERSLIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['USERNAME']->key => $_smarty_tpl->tpl_vars['USERNAME']->value){
$_smarty_tpl->tpl_vars['USERNAME']->_loop = true;
 $_smarty_tpl->tpl_vars['USER']->value = $_smarty_tpl->tpl_vars['USERNAME']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</option><?php } ?></select></span><span class="span6 btn-toolbar"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ListViewActions.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</span></div><div class="clearfix"></div><div class="listViewContentDiv" id="listViewContents"><?php }} ?>