<?php /* Smarty version Smarty-3.1.7, created on 2014-02-16 04:55:16
         compiled from "/var/www/html/CRMPlus/crmplus_ga/includes/runtime/../../layouts/vlayout/modules/Reports/ReportContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2034572178530044b47799f1-84668461%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee93ee8842ca7f57dae544ed49111da99e3b277b' => 
    array (
      0 => '/var/www/html/CRMPlus/crmplus_ga/includes/runtime/../../layouts/vlayout/modules/Reports/ReportContents.tpl',
      1 => 1389945506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2034572178530044b47799f1-84668461',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'NEW_COUNT' => 0,
    'CALCULATION_FIELDS' => 0,
    'MODULE' => 0,
    'CALCULATION_FIELD' => 0,
    'CALCULATION_FIELD_KEYS' => 0,
    'ESCAPE_CHAR' => 0,
    'FIELD_IMPLODE' => 0,
    'FIELD_LABEL' => 0,
    'MODULE_NAME' => 0,
    'CALCULATION_VALUE' => 0,
    'PRIMARY_MODULE' => 0,
    'BASE_CURRENCY_INFO' => 0,
    'DATA' => 0,
    'HEADERS' => 0,
    'NAME' => 0,
    'VALUES' => 0,
    'VALUE' => 0,
    'LIMIT_EXCEEDED' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_530044b48e122',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530044b48e122')) {function content_530044b48e122($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/html/CRMPlus/crmplus_ga/libraries/Smarty/libs/plugins/modifier.replace.php';
?>
<div class="contents-topscroll"><div class="topscroll-div container-fluid">&nbsp;</div></div><div id="reportDetails" class="container-fluid contents-bottomscroll"><div class="bottomscroll-div"><input type="hidden" id="updatedCount" value="<?php echo $_smarty_tpl->tpl_vars['NEW_COUNT']->value;?>
" /><?php if (!empty($_smarty_tpl->tpl_vars['CALCULATION_FIELDS']->value)){?><table class=" table-bordered table-condensed marginBottom10px" width="100%"><thead><tr class="blockHeader"><th><?php echo vtranslate('LBL_FIELD_NAMES',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</th><th><?php echo vtranslate('LBL_SUM',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</th><th><?php echo vtranslate('LBL_AVG',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</th><th><?php echo vtranslate('LBL_MIN',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</th><th><?php echo vtranslate('LBL_MAX',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</th></tr></thead><?php $_smarty_tpl->tpl_vars['ESCAPE_CHAR'] = new Smarty_variable(array('_SUM','_AVG','_MIN','_MAX'), null, 0);?><?php  $_smarty_tpl->tpl_vars['CALCULATION_FIELD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['CALCULATION_FIELD']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CALCULATION_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['CALCULATION_FIELD']->key => $_smarty_tpl->tpl_vars['CALCULATION_FIELD']->value){
$_smarty_tpl->tpl_vars['CALCULATION_FIELD']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['CALCULATION_FIELD']->key;
?><tr><?php $_smarty_tpl->tpl_vars['CALCULATION_FIELD_KEYS'] = new Smarty_variable(array_keys($_smarty_tpl->tpl_vars['CALCULATION_FIELD']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['CALCULATION_FIELD_KEYS'] = new Smarty_variable(smarty_modifier_replace($_smarty_tpl->tpl_vars['CALCULATION_FIELD_KEYS']->value,$_smarty_tpl->tpl_vars['ESCAPE_CHAR']->value,''), null, 0);?><?php $_smarty_tpl->tpl_vars['FIELD_IMPLODE'] = new Smarty_variable(explode('_',$_smarty_tpl->tpl_vars['CALCULATION_FIELD_KEYS']->value['0']), null, 0);?><?php $_smarty_tpl->tpl_vars['MODULE_NAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_IMPLODE']->value['0'], null, 0);?><?php $_smarty_tpl->tpl_vars['FIELD_LABEL'] = new Smarty_variable(implode(" ",$_smarty_tpl->tpl_vars['FIELD_IMPLODE']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['FIELD_LABEL'] = new Smarty_variable(smarty_modifier_replace($_smarty_tpl->tpl_vars['FIELD_LABEL']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value,''), null, 0);?><td><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_LABEL']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td><?php  $_smarty_tpl->tpl_vars['CALCULATION_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['CALCULATION_VALUE']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CALCULATION_FIELD']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['CALCULATION_VALUE']->key => $_smarty_tpl->tpl_vars['CALCULATION_VALUE']->value){
$_smarty_tpl->tpl_vars['CALCULATION_VALUE']->_loop = true;
?><td width="15%"><?php echo $_smarty_tpl->tpl_vars['CALCULATION_VALUE']->value;?>
</td><?php } ?></tr><?php } ?></table><?php if ($_smarty_tpl->tpl_vars['PRIMARY_MODULE']->value=='Invoice'||$_smarty_tpl->tpl_vars['PRIMARY_MODULE']->value=='Quotes'||$_smarty_tpl->tpl_vars['PRIMARY_MODULE']->value=='SalesOrder'||$_smarty_tpl->tpl_vars['PRIMARY_MODULE']->value=='PurchaseOrder'){?><?php $_smarty_tpl->tpl_vars['BASE_CURRENCY_INFO'] = new Smarty_variable(Vtiger_Util_Helper::getBaseCurrency(), null, 0);?><div class="alert alert-info"><?php echo vtranslate('LBL_NOTE','Vtiger');?>
 : <?php echo vtranslate('LBL_CALCULATION_CONVERSION_MESSAGE','Reports');?>
 - <?php echo $_smarty_tpl->tpl_vars['BASE_CURRENCY_INFO']->value['currency_name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['BASE_CURRENCY_INFO']->value['currency_code'];?>
)</div><?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['DATA']->value!=''){?><?php $_smarty_tpl->tpl_vars['HEADERS'] = new Smarty_variable($_smarty_tpl->tpl_vars['DATA']->value[0], null, 0);?><table class="table table-bordered table-striped"><thead><tr class="blockHeader"><?php  $_smarty_tpl->tpl_vars['HEADER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['HEADER']->_loop = false;
 $_smarty_tpl->tpl_vars['NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['HEADERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['HEADER']->key => $_smarty_tpl->tpl_vars['HEADER']->value){
$_smarty_tpl->tpl_vars['HEADER']->_loop = true;
 $_smarty_tpl->tpl_vars['NAME']->value = $_smarty_tpl->tpl_vars['HEADER']->key;
?><th nowrap><?php echo vtranslate($_smarty_tpl->tpl_vars['NAME']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</th><?php } ?></tr></thead><?php  $_smarty_tpl->tpl_vars['VALUES'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['VALUES']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['DATA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['VALUES']->key => $_smarty_tpl->tpl_vars['VALUES']->value){
$_smarty_tpl->tpl_vars['VALUES']->_loop = true;
?><tr><?php  $_smarty_tpl->tpl_vars['VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['VALUES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['VALUE']->key => $_smarty_tpl->tpl_vars['VALUE']->value){
$_smarty_tpl->tpl_vars['VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['NAME']->value = $_smarty_tpl->tpl_vars['VALUE']->key;
?><td><?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
</td><?php } ?></tr><?php } ?></table><?php if ($_smarty_tpl->tpl_vars['LIMIT_EXCEEDED']->value){?><center><?php echo vtranslate('LBL_LIMIT_EXCEEDED',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <span class="pull-right"><a href="#top" ><?php echo vtranslate('LBL_TOP',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></span></center><?php }?><?php }else{ ?><?php echo vtranslate('LBL_NO_DATA_AVAILABLE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php }?></div></div></div>
<?php }} ?>