<?php /* Smarty version Smarty-3.1.7, created on 2014-01-15 16:01:14
         compiled from "E:\source\CRMProject\trunk\crmplus_ga\includes\runtime/../../layouts/vlayout\modules\Vtiger\OperationNotPermitted.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2317052d6b0cacdf566-58437594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adb33447df4f554a3835eed1fe13a815c59fac7f' => 
    array (
      0 => 'E:\\source\\CRMProject\\trunk\\crmplus_ga\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\OperationNotPermitted.tpl',
      1 => 1373768346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2317052d6b0cacdf566-58437594',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MESSAGE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52d6b0cae12fd',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d6b0cae12fd')) {function content_52d6b0cae12fd($_smarty_tpl) {?>
<div style="margin:0 auto;width: 50em;">
	<table border='0' cellpadding='5' cellspacing='0' height='600px' width="700px">
	<tr><td align='center'>
		<div style='border: 3px solid rgb(153, 153, 153); background-color: rgb(255, 255, 255); width: 55%; position: relative; z-index: 100000020;'>

		<table border='0' cellpadding='5' cellspacing='0' width='98%'>
		<tr>
			<td rowspan='2' width='11%'><img src="<?php echo vimage_path('denied.gif');?>
" ></td>
			<td style='border-bottom: 1px solid rgb(204, 204, 204);' nowrap='nowrap' width='70%'>
				<span class='genHeaderSmall'><?php echo vtranslate($_smarty_tpl->tpl_vars['MESSAGE']->value);?>
</span></td>
		</tr>
		<tr>
			<td class='small' align='right' nowrap='nowrap'>
				<a href='javascript:window.history.back();'><?php echo vtranslate('LBL_GO_BACK');?>
</a><br>
			</td>
		</tr>
		</table>
		</div>
	</td></tr>
	</table>
</div><?php }} ?>