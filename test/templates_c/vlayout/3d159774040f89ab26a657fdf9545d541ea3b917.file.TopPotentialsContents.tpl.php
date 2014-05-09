<?php /* Smarty version Smarty-3.1.7, created on 2014-02-07 17:16:46
         compiled from "/var/www/html/CRMPlus/crmplus_ga/includes/runtime/../../layouts/vlayout/modules/Potentials/dashboards/TopPotentialsContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129040206752f514fe062388-45269485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d159774040f89ab26a657fdf9545d541ea3b917' => 
    array (
      0 => '/var/www/html/CRMPlus/crmplus_ga/includes/runtime/../../layouts/vlayout/modules/Potentials/dashboards/TopPotentialsContents.tpl',
      1 => 1389945509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129040206752f514fe062388-45269485',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODELS' => 0,
    'MODULE_NAME' => 0,
    'MODEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52f514fe0c6db',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f514fe0c6db')) {function content_52f514fe0c6db($_smarty_tpl) {?>
<div style='padding:5px'>
<?php if (count($_smarty_tpl->tpl_vars['MODELS']->value)>0){?>
	<div class='row-fluid'>
		<div class='span12'>
			<div class='row-fluid'>
				<div class='span4'>
					<b><?php echo vtranslate('Potential Name',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</b>
				</div>
				<div class='span4'>
					<b><?php echo vtranslate('Amount',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</b>
				</div>
				<div class='span4'>
					<b><?php echo vtranslate('Related To',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</b>
				</div>
			</div>
		</div>
		<hr>
		<?php  $_smarty_tpl->tpl_vars['MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MODELS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MODEL']->key => $_smarty_tpl->tpl_vars['MODEL']->value){
$_smarty_tpl->tpl_vars['MODEL']->_loop = true;
?>
		<div class='row-fluid'>
			<div class='span4'>
				<a href="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getDetailViewUrl();?>
"><?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getName();?>
</a>
			</div>
			<div class='span4'>
				<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getDisplayValue('amount');?>

			</div>
			<div class='span4'>
				<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getDisplayValue('related_to');?>

			</div>
		</div>
		<?php } ?>
	</div>
<?php }else{ ?>
	<span class="noDataMsg">
		<?php echo vtranslate('LBL_NO');?>
 <?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 <?php echo vtranslate('LBL_MATCHED_THIS_CRITERIA');?>

	</span>
<?php }?>
</div><?php }} ?>