<?php /* Smarty version Smarty-3.1.7, created on 2014-04-27 02:54:39
         compiled from "/home/crm4b519/public_html/includes/runtime/../../layouts/vlayout/modules/Mobile/generic/Login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1788259548535c716f1ea832-32839940%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'caf9a0bef3529f24660888e7d5c0ca5ec738ef75' => 
    array (
      0 => '/home/crm4b519/public_html/includes/runtime/../../layouts/vlayout/modules/Mobile/generic/Login.tpl',
      1 => 1398226575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1788259548535c716f1ea832-32839940',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_ERR' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_535c716f28461',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535c716f28461')) {function content_535c716f28461($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("modules/Mobile/generic/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
				<?php if ($_smarty_tpl->tpl_vars['_ERR']->value){?><p class='error'><?php echo $_smarty_tpl->tpl_vars['_ERR']->value;?>
</p>
				<?php }else{ ?><p>Please login to proceed...</p><?php }?>
			</td>
		</tr>
		<tr>
			<td width="40px">Username</td>
			<td><input type="text" name="username" value=""/></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password" value=""/></td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" value="Login" class="button">
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