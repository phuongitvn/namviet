<?php /* Smarty version Smarty-3.1.7, created on 2014-04-23 06:46:34
         compiled from "/home/crm4b519/public_html/includes/runtime/../../layouts/vlayout/modules/Settings/Groups/DetailView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1106930749535761caaebe75-40126284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '827702883e53d5332461ca04d3cb31e020abc1ea' => 
    array (
      0 => '/home/crm4b519/public_html/includes/runtime/../../layouts/vlayout/modules/Settings/Groups/DetailView.tpl',
      1 => 1398226575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1106930749535761caaebe75-40126284',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECORD_MODEL' => 0,
    'MODULE' => 0,
    'QUALIFIED_MODULE' => 0,
    'GROUPS' => 0,
    'GROUP_MEMBERS' => 0,
    'GROUP_LABEL' => 0,
    'GROUP_MEMBER_INFO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_535761cabdf8b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535761cabdf8b')) {function content_535761cabdf8b($_smarty_tpl) {?>
<div class="detailViewInfo"><div class="contents"><form id="detailView" class="padding20 form-horizontal"><div class="row-fluid"><span class="span6 settingsHeader"><?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('groupname');?>
</span><span class="span6"><span class="pull-right"><button class="btn" onclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getEditViewUrl();?>
'" type="button"><strong><?php echo vtranslate('LBL_EDIT_RECORD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></span></span></div><hr><div class="control-group"><span class="control-label"><?php echo vtranslate('LBL_GROUP_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 <span class="redColor">*</span></span><div class="controls pushDown"><b><?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getName();?>
</b></div></div><div class="control-group"><span class="control-label"><?php echo vtranslate('LBL_DESCRIPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><div class="controls pushDown"><b><?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getDescription();?>
</b></div></div><div class="control-group"><span class="control-label"><?php echo vtranslate('LBL_GROUP_MEMBERS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><div class="controls pushDown"><div class="row-fluid"><span class="span3 collectiveGroupMembers"><ul class="nav nav-list"><?php $_smarty_tpl->tpl_vars["GROUPS"] = new Smarty_variable($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getMembers(), null, 0);?><?php  $_smarty_tpl->tpl_vars['GROUP_MEMBERS'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['GROUP_MEMBERS']->_loop = false;
 $_smarty_tpl->tpl_vars['GROUP_LABEL'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['GROUPS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['GROUP_MEMBERS']->key => $_smarty_tpl->tpl_vars['GROUP_MEMBERS']->value){
$_smarty_tpl->tpl_vars['GROUP_MEMBERS']->_loop = true;
 $_smarty_tpl->tpl_vars['GROUP_LABEL']->value = $_smarty_tpl->tpl_vars['GROUP_MEMBERS']->key;
?><?php if (!empty($_smarty_tpl->tpl_vars['GROUP_MEMBERS']->value)){?><li class="row-fluid groupLabel nav-header"><?php echo vtranslate($_smarty_tpl->tpl_vars['GROUP_LABEL']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</li><?php  $_smarty_tpl->tpl_vars['GROUP_MEMBER_INFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['GROUP_MEMBER_INFO']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['GROUP_MEMBERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['GROUP_MEMBER_INFO']->key => $_smarty_tpl->tpl_vars['GROUP_MEMBER_INFO']->value){
$_smarty_tpl->tpl_vars['GROUP_MEMBER_INFO']->_loop = true;
?><li class="row-fluid"><a href="<?php echo $_smarty_tpl->tpl_vars['GROUP_MEMBER_INFO']->value->getDetailViewUrl();?>
"><?php echo $_smarty_tpl->tpl_vars['GROUP_MEMBER_INFO']->value->get('name');?>
</a></li><?php } ?><?php }?><?php } ?></ul></span></div></div></div></form></div></div><?php }} ?>