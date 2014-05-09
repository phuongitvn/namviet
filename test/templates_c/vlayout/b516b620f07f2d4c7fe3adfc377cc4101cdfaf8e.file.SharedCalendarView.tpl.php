<?php /* Smarty version Smarty-3.1.7, created on 2014-05-08 02:35:59
         compiled from "/home/crm4b519/public_html/includes/runtime/../../layouts/vlayout/modules/Calendar/SharedCalendarView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:578535460536aed8f5a28a6-34778782%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b516b620f07f2d4c7fe3adfc377cc4101cdfaf8e' => 
    array (
      0 => '/home/crm4b519/public_html/includes/runtime/../../layouts/vlayout/modules/Calendar/SharedCalendarView.tpl',
      1 => 1398226575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '578535460536aed8f5a28a6-34778782',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CURRENT_USER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_536aed8f62e5c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536aed8f62e5c')) {function content_536aed8f62e5c($_smarty_tpl) {?>
<style type="text/css">

</style><input type="hidden" id="currentView" value="<?php echo $_REQUEST['view'];?>
" /><input type="hidden" id="activity_view" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('activity_view');?>
" /><input type="hidden" id="time_format" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('hour_format');?>
" /><input type="hidden" id="start_hour" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('start_hour');?>
" /><div class="container-fluid"><div class="row-fluid"><div class="span12"><p><!-- Divider --></p><div id="calendarview"></div></div></div></div><?php }} ?>