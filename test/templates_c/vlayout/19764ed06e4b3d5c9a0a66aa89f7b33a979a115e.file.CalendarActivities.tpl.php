<?php /* Smarty version Smarty-3.1.7, created on 2014-04-27 18:51:45
         compiled from "/home/crm4b519/public_html/includes/runtime/../../layouts/vlayout/modules/Vtiger/dashboards/CalendarActivities.tpl" */ ?>
<?php /*%%SmartyHeaderCode:666178619535d51c1666e85-81349278%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19764ed06e4b3d5c9a0a66aa89f7b33a979a115e' => 
    array (
      0 => '/home/crm4b519/public_html/includes/runtime/../../layouts/vlayout/modules/Vtiger/dashboards/CalendarActivities.tpl',
      1 => 1398226575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '666178619535d51c1666e85-81349278',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'WIDGET' => 0,
    'MODULE_NAME' => 0,
    'CURRENTUSER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_535d51c16ef25',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535d51c16ef25')) {function content_535d51c16ef25($_smarty_tpl) {?>

<div class="dashboardWidgetHeader">
	<table width="100%" cellspacing="0" cellpadding="0">
	<thead>
		<tr>
			<th class="span4">
				<div class="dashboardTitle" title="<?php echo vtranslate($_smarty_tpl->tpl_vars['WIDGET']->value->getTitle(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><b>&nbsp;&nbsp;<?php echo vtranslate($_smarty_tpl->tpl_vars['WIDGET']->value->getTitle());?>
</b></div>
			</th>
			<th class="span2">
				<div>
					<select class="widgetFilter" name="type" style='width:100px;margin-bottom:0px'>
						<option value="<?php echo $_smarty_tpl->tpl_vars['CURRENTUSER']->value->getId();?>
"><?php echo vtranslate('LBL_MINE');?>
</option>
						<option value="all"><?php echo vtranslate('LBL_ALL');?>
</option>
					</select>
				</div>
			</th>
			<th class="refresh span1" align="right">
				<span style="position:relative;"></span>
			</th>
			<th class="widgeticons span5" align="right">
				<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/DashboardHeaderIcons.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</th>
		</tr>
	</thead>
	</table>
</div>
<div name="history" class="dashboardWidgetContent">
	<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/CalendarActivitiesContents.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('WIDGET'=>$_smarty_tpl->tpl_vars['WIDGET']->value), 0);?>

</div>



<script type='text/javascript'>
	$(document).ready(function(){
		jQuery('.dashboardWidgetContent').on('click', 'a[name="history_more"]', function(e) {
			var element = jQuery(e.currentTarget);
			var url = element.data('url')+'&content=true';
			AppConnector.request(url).then(function(data) {
				jQuery(element.parent().parent()).append(data);
				element.parent().remove();
			});
		});
	});
</script><?php }} ?>