<?php /* Smarty version Smarty-3.1.7, created on 2014-02-10 13:42:16
         compiled from "/var/www/html/CRMPlus/crmplus_ga/includes/runtime/../../layouts/vlayout/modules/Import/Import_Basic_Buttons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174603037052f8d7388d20a1-87923986%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab3156d92eb74a063dcc1572f1dea5d3c59cdc2d' => 
    array (
      0 => '/var/www/html/CRMPlus/crmplus_ga/includes/runtime/../../layouts/vlayout/modules/Import/Import_Basic_Buttons.tpl',
      1 => 1389945510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174603037052f8d7388d20a1-87923986',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'FOR_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52f8d7388f323',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f8d7388f323')) {function content_52f8d7388f323($_smarty_tpl) {?>

<button type="submit" name="next"  class="btn btn-success"
		onclick="return ImportJs.uploadAndParse();"><strong><?php echo vtranslate('LBL_NEXT_BUTTON_LABEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button>
&nbsp;&nbsp;
<a name="cancel" class="cursorPointer cancelLink" value="<?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" onclick="location.href='index.php?module=<?php echo $_smarty_tpl->tpl_vars['FOR_MODULE']->value;?>
&view=List'">
		<?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>

</a><?php }} ?>