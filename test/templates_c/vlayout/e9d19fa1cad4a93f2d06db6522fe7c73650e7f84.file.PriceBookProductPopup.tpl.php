<?php /* Smarty version Smarty-3.1.7, created on 2014-04-02 16:57:25
         compiled from "/var/www/html/CRMPlus/crmplus_ga/includes/runtime/../../layouts/vlayout/modules/Products/PriceBookProductPopup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:227299686533c4175043d72-27322520%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9d19fa1cad4a93f2d06db6522fe7c73650e7f84' => 
    array (
      0 => '/var/www/html/CRMPlus/crmplus_ga/includes/runtime/../../layouts/vlayout/modules/Products/PriceBookProductPopup.tpl',
      1 => 1389945509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '227299686533c4175043d72-27322520',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
    'PARENT_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_533c417510e0a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533c417510e0a')) {function content_533c417510e0a($_smarty_tpl) {?>
<div id="popupPageContainer" class="popupBackgroundColor"><div class="paddingLeftRight10px"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('PopupSearch.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><form id="popupPage" action="javascript:void(0)" class="pushdown2per popupBackgroundColor"><div id="popupContents" class="pushDown2per"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('PriceBookProductPopupContents.tpl',$_smarty_tpl->tpl_vars['PARENT_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></form><input type="hidden" class="triggerEventName" value="<?php echo $_REQUEST['triggerEventName'];?>
"/></div></div><?php }} ?>