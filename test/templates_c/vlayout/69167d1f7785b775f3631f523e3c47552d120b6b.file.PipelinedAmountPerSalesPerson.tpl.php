<?php /* Smarty version Smarty-3.1.7, created on 2014-02-25 03:38:09
         compiled from "/var/www/html/CRMPlus/crmplus_ga/includes/runtime/../../layouts/vlayout/modules/Potentials/dashboards/PipelinedAmountPerSalesPerson.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1528944335530c1021d0bc72-26662965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69167d1f7785b775f3631f523e3c47552d120b6b' => 
    array (
      0 => '/var/www/html/CRMPlus/crmplus_ga/includes/runtime/../../layouts/vlayout/modules/Potentials/dashboards/PipelinedAmountPerSalesPerson.tpl',
      1 => 1389945509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1528944335530c1021d0bc72-26662965',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_530c1021de45a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530c1021de45a')) {function content_530c1021de45a($_smarty_tpl) {?>

<div class="dashboardWidgetHeader">
	<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/WidgetHeader.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<div class="dashboardWidgetContent">
	<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/DashBoardWidgetContents.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>



	<script type="text/javascript">
		Vtiger_MultiBarchat_Widget_Js('Vtiger_Pipelinedamountpersalesperson_Widget_Js',{},{
			getCharRelatedData : function() {
				var container = this.getContainer();
				var data = container.find('.widgetData').val();
				data = JSON.parse(data);
				var users = new Array();
				var stages = new Array();
				var count = new Array();
				for(var i=0; i<data.length ;i++) {
					if($.inArray(data[i].last_name, users) == -1) {
						users.push(data[i].last_name);
					}
					if($.inArray(data[i].sales_stage, stages) == -1) {
						stages.push(data[i].sales_stage);
					}
				}
					
				for(j in stages) {
					var salesStageCount = new Array();
					for(i in users) {
						var salesCount = 0;
						for(var k in data) {
							var userData = data[k];
							if(userData.sales_stage == stages[j] && userData.last_name == users[i]) {
								salesCount = parseInt(userData.amount);
								break;
							}
						}
						salesStageCount.push(salesCount);
					}
					count.push(salesStageCount);
				}
				return {
					'data' : count,
					'ticks' : users,
					'labels' : stages
				}
			}
		});
	</script>
<?php }} ?>