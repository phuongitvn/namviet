<?php /* Smarty version Smarty-3.1.7, created on 2014-01-23 04:20:29
         compiled from "/var/www/html/CRMPlus/crmplus_ga/includes/runtime/../../layouts/vlayout/modules/Vtiger/Footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27492184652e0988d8b0f64-89423018%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38890f15f1107e1be2e4fe6a8d8002f64904029d' => 
    array (
      0 => '/var/www/html/CRMPlus/crmplus_ga/includes/runtime/../../layouts/vlayout/modules/Vtiger/Footer.tpl',
      1 => 1389945508,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27492184652e0988d8b0f64-89423018',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ACTIVITY_REMINDER' => 0,
    'HEADER_LINKS' => 0,
    'MAIN_PRODUCT_SUPPORT' => 0,
    'MAIN_PRODUCT_WHITELABEL' => 0,
    'FIRSTHEADERLINK' => 0,
    'FIRSTHEADERLINKCHILDRENS' => 0,
    'FEEDBACKLINKMODEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52e0988d9087b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e0988d9087b')) {function content_52e0988d9087b($_smarty_tpl) {?>
<input id='activityReminder' class='hide noprint' type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ACTIVITY_REMINDER']->value;?>
"/><?php if ($_smarty_tpl->tpl_vars['HEADER_LINKS']->value&&$_smarty_tpl->tpl_vars['MAIN_PRODUCT_SUPPORT']->value&&!$_smarty_tpl->tpl_vars['MAIN_PRODUCT_WHITELABEL']->value){?><?php $_smarty_tpl->tpl_vars["FIRSTHEADERLINK"] = new Smarty_variable($_smarty_tpl->tpl_vars['HEADER_LINKS']->value[0], null, 0);?><?php $_smarty_tpl->tpl_vars["FIRSTHEADERLINKCHILDRENS"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIRSTHEADERLINK']->value->get('childlinks'), null, 0);?><?php $_smarty_tpl->tpl_vars["FEEDBACKLINKMODEL"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIRSTHEADERLINKCHILDRENS']->value[2], null, 0);?><div id="userfeedback" class="feedback noprint"><a href="javascript:;" onclick="<?php echo $_smarty_tpl->tpl_vars['FEEDBACKLINKMODEL']->value->get('linkurl');?>
" class="handle"><?php echo vtranslate("LBL_FEEDBACK","Vtiger");?>
</a></div><?php }?><?php if (!$_smarty_tpl->tpl_vars['MAIN_PRODUCT_WHITELABEL']->value){?><footer class="noprint"><div class="vtFooter"><p>Bản quyền phát triển bởi CRM+ &nbsp;&copy; 2013 - 2014 &nbsp;&nbsp;</p></div></footer><?php }?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('JSResources.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></body></html><?php }} ?>