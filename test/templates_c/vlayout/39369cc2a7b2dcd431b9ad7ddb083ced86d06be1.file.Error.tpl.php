<?php /* Smarty version Smarty-3.1.7, created on 2014-04-27 02:54:53
         compiled from "/home/crm4b519/public_html/includes/runtime/../../layouts/vlayout/modules/Mobile/generic/Error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:749571795535c717d0e68f0-82711127%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39369cc2a7b2dcd431b9ad7ddb083ced86d06be1' => 
    array (
      0 => '/home/crm4b519/public_html/includes/runtime/../../layouts/vlayout/modules/Mobile/generic/Error.tpl',
      1 => 1398226575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '749571795535c717d0e68f0-82711127',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errormsg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_535c717d16eda',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535c717d16eda')) {function content_535c717d16eda($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("modules/Mobile/generic/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<body>

<table width=100% cellpadding=0 cellspacing=0 border=0>
<tr>
	<td>
		<h1 class='page_title'>vtiger CRM</h1>
	</td>
</tr>

<tr>
	<td>	
		<form method="post" action="index.php?_operation=loginAndFetchModules">
		
		<table width=100% cellpadding=5 cellspacing=0 border=0 class="panel_login">
		<tr>
			<td colspan="2">
				<p class='error'><?php echo $_smarty_tpl->tpl_vars['errormsg']->value;?>
</p>
			</td>
		</tr>
		</table>

		</form>
	</td>
</tr>
</table>

</body>

<?php echo $_smarty_tpl->getSubTemplate ("modules/Mobile/generic/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>