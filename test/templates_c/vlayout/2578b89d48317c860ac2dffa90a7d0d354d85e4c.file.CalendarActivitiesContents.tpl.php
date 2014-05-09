<?php /* Smarty version Smarty-3.1.7, created on 2014-02-11 15:03:19
         compiled from "/var/www/html/CRMPlus/crmplus_ga/includes/runtime/../../layouts/vlayout/modules/Vtiger/dashboards/CalendarActivitiesContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207682012552fa3bb77d50a9-26158183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2578b89d48317c860ac2dffa90a7d0d354d85e4c' => 
    array (
      0 => '/var/www/html/CRMPlus/crmplus_ga/includes/runtime/../../layouts/vlayout/modules/Vtiger/dashboards/CalendarActivitiesContents.tpl',
      1 => 1389945508,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207682012552fa3bb77d50a9-26158183',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ACTIVITIES' => 0,
    'ACTIVITY' => 0,
    'PARENT_ID' => 0,
    'CONTACT_ID' => 0,
    'MODULE_NAME' => 0,
    'WIDGET' => 0,
    'PAGING' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52fa3bb78e875',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52fa3bb78e875')) {function content_52fa3bb78e875($_smarty_tpl) {?>

<div style='padding:5px'>
	<?php  $_smarty_tpl->tpl_vars['ACTIVITY'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ACTIVITY']->_loop = false;
 $_smarty_tpl->tpl_vars['INDEX'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ACTIVITIES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ACTIVITY']->key => $_smarty_tpl->tpl_vars['ACTIVITY']->value){
$_smarty_tpl->tpl_vars['ACTIVITY']->_loop = true;
 $_smarty_tpl->tpl_vars['INDEX']->value = $_smarty_tpl->tpl_vars['ACTIVITY']->key;
?>
	<div>
		<div class='pull-left'>
			<?php if ($_smarty_tpl->tpl_vars['ACTIVITY']->value->get('activitytype')=='Task'){?>
				<image src="<?php echo vimage_path('Tasks.png');?>
" width="24px"/>&nbsp;&nbsp;
			<?php }else{ ?>
				<image src="<?php echo vimage_path('Calendar.png');?>
" width="24px" />&nbsp;&nbsp;
			<?php }?>
		</div>
		<div>
			<div class='pull-left' style='margin-top:5px'>
				<?php $_smarty_tpl->tpl_vars['PARENT_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['ACTIVITY']->value->get('parent_id'), null, 0);?>
				<?php $_smarty_tpl->tpl_vars['CONTACT_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['ACTIVITY']->value->get('contact_id'), null, 0);?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['ACTIVITY']->value->getDetailViewUrl();?>
"><?php echo $_smarty_tpl->tpl_vars['ACTIVITY']->value->get('subject');?>
</a><?php if ($_smarty_tpl->tpl_vars['PARENT_ID']->value){?> <?php echo vtranslate('LBL_FOR');?>
 <?php echo $_smarty_tpl->tpl_vars['ACTIVITY']->value->getDisplayValue('parent_id');?>
<?php }elseif($_smarty_tpl->tpl_vars['CONTACT_ID']->value){?> <?php echo vtranslate('LBL_FOR');?>
 <?php echo $_smarty_tpl->tpl_vars['ACTIVITY']->value->getDisplayValue('contact_id');?>
<?php }?>
			</div>
				<?php $_smarty_tpl->tpl_vars['START_DATE'] = new Smarty_variable($_smarty_tpl->tpl_vars['ACTIVITY']->value->get('start_date'), null, 0);?>
				<?php $_smarty_tpl->tpl_vars['START_TIME'] = new Smarty_variable($_smarty_tpl->tpl_vars['ACTIVITY']->value->get('time_start'), null, 0);?>
				
				<?php $_smarty_tpl->tpl_vars['DUE_DATE'] = new Smarty_variable($_smarty_tpl->tpl_vars['ACTIVITY']->value->get('due_date'), null, 0);?>
				<?php $_smarty_tpl->tpl_vars['DUE_TIME'] = new Smarty_variable($_smarty_tpl->tpl_vars['ACTIVITY']->value->get('time_end'), null, 0);?>
			<p class='pull-right muted' style='margin-top:5px;padding-right:5px;'><small title="<?php echo Vtiger_Util_Helper::formatDateTimeIntoDayString(($_smarty_tpl->tpl_vars['START_DATE']->value)." ".($_smarty_tpl->tpl_vars['START_TIME']->value));?>
 <?php echo vtranslate('LBL_TO');?>
 <?php echo Vtiger_Util_Helper::formatDateTimeIntoDayString(($_smarty_tpl->tpl_vars['DUE_DATE']->value)." ".($_smarty_tpl->tpl_vars['DUE_TIME']->value));?>
"><?php echo Vtiger_Util_Helper::formatDateDiffInStrings(($_smarty_tpl->tpl_vars['DUE_DATE']->value)." ".($_smarty_tpl->tpl_vars['DUE_TIME']->value));?>
</small></p>
			<div class='clearfix'></div>
		</div>
		<div class='clearfix'></div>
	</div>
	<?php }
if (!$_smarty_tpl->tpl_vars['ACTIVITY']->_loop) {
?>
		<span class="noDataMsg">
			<?php if ($_REQUEST['name']=='OverdueActivities'){?>
				<?php echo vtranslate('LBL_NO_OVERDUE_ACTIVITIES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>

			<?php }else{ ?>
				<?php echo vtranslate('LBL_NO_SCHEDULED_ACTIVITIES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>

			<?php }?>
		</span>
	<?php } ?>
</div>
<?php if (count($_smarty_tpl->tpl_vars['ACTIVITIES']->value)==10){?>
	<div><a href="#" class="pull-right" name="history_more" data-url="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getUrl();?>
&page=<?php echo $_smarty_tpl->tpl_vars['PAGING']->value->getNextPage();?>
"><?php echo vtranslate('LBL_MORE');?>
...</a></div>
<?php }?><?php }} ?>