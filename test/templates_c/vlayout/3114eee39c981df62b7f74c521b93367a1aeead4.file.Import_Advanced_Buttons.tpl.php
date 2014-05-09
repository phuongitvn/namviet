<?php /* Smarty version Smarty-3.1.7, created on 2014-02-10 13:42:35
         compiled from "/var/www/html/CRMPlus/crmplus_ga/includes/runtime/../../layouts/vlayout/modules/Import/Import_Advanced_Buttons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98287163952f8d74bd14c50-73103104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3114eee39c981df62b7f74c521b93367a1aeead4' => 
    array (
      0 => '/var/www/html/CRMPlus/crmplus_ga/includes/runtime/../../layouts/vlayout/modules/Import/Import_Advanced_Buttons.tpl',
      1 => 1389945510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98287163952f8d74bd14c50-73103104',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52f8d74bd328f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f8d74bd328f')) {function content_52f8d74bd328f($_smarty_tpl) {?>

<button type="submit" name="import" id="importButton" class="crmButton big edit btn btn-success"
		><strong><?php echo vtranslate('LBL_IMPORT_BUTTON_LABEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button>
&nbsp;&nbsp;
<a type="button" name="cancel" value="<?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="cursorPointer cancelLink" onclick="window.history.back()">
	<?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>

</a><?php }} ?>