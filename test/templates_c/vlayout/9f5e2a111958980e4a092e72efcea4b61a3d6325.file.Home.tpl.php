<?php /* Smarty version Smarty-3.1.7, created on 2014-04-27 02:55:51
         compiled from "/home/crm4b519/public_html/includes/runtime/../../layouts/vlayout/modules/Mobile/generic/Home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1282161000535c71b76ae754-02898276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f5e2a111958980e4a092e72efcea4b61a3d6325' => 
    array (
      0 => '/home/crm4b519/public_html/includes/runtime/../../layouts/vlayout/modules/Mobile/generic/Home.tpl',
      1 => 1398226575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1282161000535c71b76ae754-02898276',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TITLE' => 0,
    '_MODULES' => 0,
    '_MODULE' => 0,
    '_ALLSKINS' => 0,
    '_SKINKEY' => 0,
    '_SELSKIN' => 0,
    '_SKINVALUE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_535c71b777d3f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535c71b777d3f')) {function content_535c71b777d3f($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("modules/Mobile/generic/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<body>

<div id="__homebox__">

	<table width=100% cellpadding=0 cellspacing=0 border=0>
	<tr class="toolbar">
		<td align="left"><a class="link" href="index.php?_operation=logout" target="_self"><img src="resources/images/iconza/yellow/logout_32x32.png" border="0"></a></td>
		<td width="100%"><h1 class='page_title'><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</h1></td>
		<td align="right"><a class="link" href="javascript:void(0);" xonclick="$fnT('__homebox__','__settingsbox__');" target="_self"><img src="resources/images/iconza/yellow/user_32x32.png" border="0"></a></td>
	</tr>
	<tr>
		<td colspan="3">	
		
			<table width=100% cellpadding=0 cellspacing=0 border=0 class="table_list">
				<?php  $_smarty_tpl->tpl_vars['_MODULE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_MODULE']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_MODULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_MODULE']->key => $_smarty_tpl->tpl_vars['_MODULE']->value){
$_smarty_tpl->tpl_vars['_MODULE']->_loop = true;
?>
				<tr>
				<td width="100%">			
					<a href="index.php?_operation=listModuleRecords&module=<?php echo $_smarty_tpl->tpl_vars['_MODULE']->value->name();?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['_MODULE']->value->label();?>
</a>				
				</td>
				<td>
					<a href="index.php?_operation=listModuleRecords&module=<?php echo $_smarty_tpl->tpl_vars['_MODULE']->value->name();?>
" target="_blank" class="link_rhook"><img src="resources/images/iconza/royalblue/right_arrow_16x16.png" border="0"></a>
				</td>
				
				</tr>
				<?php } ?>
			</table>
		
		</td>
	</tr>
	</table>

</div>


<div id="__settingsbox__" style='display:none;'>
	<table width=100% cellpadding=0 cellspacing=0 border=0>
	<tr class="toolbar">
		<td>&nbsp;</td>
		<td width="100%">
			<h1 class='page_title'>
			My Settings
			</h1>
		</td>
		<td align="right" style="padding-right: 5px;"><a class="link" href="javascript:void(0);" onclick="$fnT('__settingsbox__','__homebox__');"><img src="resources/images/iconza/yellow/delete_32x32.png" border="0"></a></td>
	</tr>
	
	<tr>
		<td colspan=3>
		
			<form action="index.php" method="GET">
				<table width=100% cellpadding=5 cellspacing=0 border=0>
				<tr>
					<td width="20px" nowrap="nowrap">
					Select Skin
					</td>
					
					<td>
					<select name="skin" onchange="this.form.submit();">
						<?php  $_smarty_tpl->tpl_vars['_SKINVALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_SKINVALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['_SKINKEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_ALLSKINS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_SKINVALUE']->key => $_smarty_tpl->tpl_vars['_SKINVALUE']->value){
$_smarty_tpl->tpl_vars['_SKINVALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['_SKINKEY']->value = $_smarty_tpl->tpl_vars['_SKINVALUE']->key;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['_SKINKEY']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['_SKINKEY']->value==$_smarty_tpl->tpl_vars['_SELSKIN']->value){?>selected=true<?php }?>><?php echo $_smarty_tpl->tpl_vars['_SKINVALUE']->value;?>
</option>
						<?php } ?>
					</select>
					
					<input type="hidden" name="action" value="Settings"/>
					<input type="hidden" name="mode" value="reset_skin"/>
					</td>
				</tr>
				</table>
			</form>
		
		</td>
		
	</tr>
	</table>
</div>

</body>

<?php echo $_smarty_tpl->getSubTemplate ("modules/Mobile/generic/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>