<?php /* Smarty version Smarty-3.1.7, created on 2014-04-24 04:05:18
         compiled from "/home/crm4b519/public_html/includes/runtime/../../layouts/vlayout/modules/Settings/Vtiger/TaxIndex.tpl" */ ?>
<?php /*%%SmartyHeaderCode:66362179453588d7eb80539-19963046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '143909312563169eae2b8935b7a663e9b99f0373' => 
    array (
      0 => '/home/crm4b519/public_html/includes/runtime/../../layouts/vlayout/modules/Settings/Vtiger/TaxIndex.tpl',
      1 => 1398226575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66362179453588d7eb80539-19963046',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'TAX_RECORD_MODEL' => 0,
    'CREATE_TAX_URL' => 0,
    'PRODUCT_AND_SERVICES_TAXES' => 0,
    'PRODUCT_SERVICE_TAX_MODEL' => 0,
    'MODULE' => 0,
    'SHIPPING_AND_HANDLING_TAXES' => 0,
    'SHIPPING_HANDLING_TAX_MODEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_53588d7ecf1fb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53588d7ecf1fb')) {function content_53588d7ecf1fb($_smarty_tpl) {?>
<div class="container-fluid" id="TaxCalculationsContainer"><div class="widget_header row-fluid"><div class="row-fluid"><h3><?php echo vtranslate('LBL_TAX_CALCULATIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></div></div><hr><div class="contents row-fluid paddingTop20"><div class="span6"><?php $_smarty_tpl->tpl_vars['CREATE_TAX_URL'] = new Smarty_variable($_smarty_tpl->tpl_vars['TAX_RECORD_MODEL']->value->getCreateTaxUrl(), null, 0);?><div class="marginBottom10px"><button type="button" class="btn addTax addButton" data-url="<?php echo $_smarty_tpl->tpl_vars['CREATE_TAX_URL']->value;?>
" data-type="0"><i class="icon-plus icon-white"></i>&nbsp;&nbsp;<strong><?php echo vtranslate('LBL_ADD_NEW_TAX',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div><table class="table table-bordered inventoryTaxTable themeTableColor"><thead><tr class="blockHeader"><th colspan="3"><?php echo vtranslate('LBL_PRODUCT_SERVICE_TAXES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th></tr></thead><tbody><tr><td class="themeTextColor" style="border-left: none;"><strong><?php echo vtranslate('LBL_TAX_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></td><td class="themeTextColor" style="border-left: none;"><strong><?php echo vtranslate('LBL_TAX_VALUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></td><td class="themeTextColor" style="border-left: none;"><strong><?php echo vtranslate('LBL_STATUS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></td></tr><?php  $_smarty_tpl->tpl_vars['PRODUCT_SERVICE_TAX_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['PRODUCT_SERVICE_TAX_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PRODUCT_AND_SERVICES_TAXES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['PRODUCT_SERVICE_TAX_MODEL']->key => $_smarty_tpl->tpl_vars['PRODUCT_SERVICE_TAX_MODEL']->value){
$_smarty_tpl->tpl_vars['PRODUCT_SERVICE_TAX_MODEL']->_loop = true;
?><tr class="opacity" data-taxid="<?php echo $_smarty_tpl->tpl_vars['PRODUCT_SERVICE_TAX_MODEL']->value->get('taxid');?>
" data-taxtype="<?php echo $_smarty_tpl->tpl_vars['PRODUCT_SERVICE_TAX_MODEL']->value->getType();?>
"><td style="border-left: none;"><label class="taxLabel textOverflowEllipsis"><?php echo $_smarty_tpl->tpl_vars['PRODUCT_SERVICE_TAX_MODEL']->value->getName();?>
</label></td><td style="border-left: none;"><span class="taxPercentage"><?php echo $_smarty_tpl->tpl_vars['PRODUCT_SERVICE_TAX_MODEL']->value->getTax();?>
%</span></td><td style="border-left: none;"><input type="checkbox" class="editTaxStatus" <?php if (!$_smarty_tpl->tpl_vars['PRODUCT_SERVICE_TAX_MODEL']->value->isDeleted()){?>checked<?php }?> /><div class="pull-right actions"><a class="editTax cursorPointer" data-url="<?php echo $_smarty_tpl->tpl_vars['PRODUCT_SERVICE_TAX_MODEL']->value->getEditTaxUrl();?>
"><i title="<?php echo vtranslate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="icon-pencil alignBottom"></i></a>&nbsp;</div></td></tr><?php } ?></tbody></table></div><div class="span6"><div class="marginBottom10px"><button type="button" class="btn addTax addButton" data-url="<?php echo $_smarty_tpl->tpl_vars['CREATE_TAX_URL']->value;?>
" data-type="1"><i class="icon-plus icon-white"></i>&nbsp;&nbsp;<strong><?php echo vtranslate('LBL_ADD_NEW_TAX',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div><table class="table table-bordered shippingTaxTable themeTableColor"><thead><tr class="blockHeader"><th colspan="3"><?php echo vtranslate('LBL_SHIPPING_HANDLING_TAXES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th></tr></thead><tbody><tr><td class="themeTextColor" style="border-left: none;"><strong><?php echo vtranslate('LBL_TAX_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></td><td class="themeTextColor" style="border-left: none;"><strong><?php echo vtranslate('LBL_TAX_VALUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></td><td class="themeTextColor" style="border-left: none;"><strong><?php echo vtranslate('LBL_STATUS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></td></tr><?php  $_smarty_tpl->tpl_vars['SHIPPING_HANDLING_TAX_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['SHIPPING_HANDLING_TAX_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SHIPPING_AND_HANDLING_TAXES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['SHIPPING_HANDLING_TAX_MODEL']->key => $_smarty_tpl->tpl_vars['SHIPPING_HANDLING_TAX_MODEL']->value){
$_smarty_tpl->tpl_vars['SHIPPING_HANDLING_TAX_MODEL']->_loop = true;
?><tr class="opacity" data-taxid="<?php echo $_smarty_tpl->tpl_vars['SHIPPING_HANDLING_TAX_MODEL']->value->get('taxid');?>
" data-taxtype="<?php echo $_smarty_tpl->tpl_vars['SHIPPING_HANDLING_TAX_MODEL']->value->getType();?>
"><td style="border-left: none;"><label class="taxLabel"><?php echo $_smarty_tpl->tpl_vars['SHIPPING_HANDLING_TAX_MODEL']->value->getName();?>
</label></td><td style="border-left: none;"><span class="taxPercentage"><?php echo $_smarty_tpl->tpl_vars['SHIPPING_HANDLING_TAX_MODEL']->value->getTax();?>
%</span></td><td style="border-left: none;"><input type="checkbox" class="editTaxStatus" <?php if (!$_smarty_tpl->tpl_vars['SHIPPING_HANDLING_TAX_MODEL']->value->isDeleted()){?>checked<?php }?> /><div class="pull-right actions"><a class="editTax cursorPointer" data-url="<?php echo $_smarty_tpl->tpl_vars['SHIPPING_HANDLING_TAX_MODEL']->value->getEditTaxUrl();?>
"><i title="<?php echo vtranslate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="icon-pencil alignMiddle"></i></a></div></td></tr><?php } ?></tbody></table></div></div></div><?php }} ?>