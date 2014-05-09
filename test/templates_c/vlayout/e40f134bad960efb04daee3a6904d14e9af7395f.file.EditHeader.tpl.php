<?php /* Smarty version Smarty-3.1.7, created on 2014-02-25 03:40:13
         compiled from "/var/www/html/CRMPlus/crmplus_ga/includes/runtime/../../layouts/vlayout/modules/Reports/EditHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2078079781530c109dbe3547-05864838%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e40f134bad960efb04daee3a6904d14e9af7395f' => 
    array (
      0 => '/var/www/html/CRMPlus/crmplus_ga/includes/runtime/../../layouts/vlayout/modules/Reports/EditHeader.tpl',
      1 => 1389945506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2078079781530c109dbe3547-05864838',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_530c109dc8036',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530c109dc8036')) {function content_530c109dc8036($_smarty_tpl) {?>
<ul id="reportBreadCrumbs" class="breadcrumb"><li class="step1"><?php echo vtranslate('LBL_STEP_1',$_smarty_tpl->tpl_vars['MODULE']->value);?>
: <?php echo vtranslate('LBL_REPORT_DETAILS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<span class="divider">></span></li><li class="step2"><?php echo vtranslate('LBL_STEP_2',$_smarty_tpl->tpl_vars['MODULE']->value);?>
: <?php echo vtranslate('LBL_SELECT_COLUMNS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<span class="divider">></span></li><li class="step3"><?php echo vtranslate('LBL_STEP_3',$_smarty_tpl->tpl_vars['MODULE']->value);?>
: <?php echo vtranslate('LBL_FILTERS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</li></ul>	<?php }} ?>