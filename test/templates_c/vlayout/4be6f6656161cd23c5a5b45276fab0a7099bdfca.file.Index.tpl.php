<?php /* Smarty version Smarty-3.1.7, created on 2014-01-12 18:45:51
         compiled from "/var/www/html/CRMProject/branches/crm_ga/includes/runtime/../../layouts/vlayout/modules/Settings/Vtiger/Index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124376834552d2e2df862ae5-51817012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4be6f6656161cd23c5a5b45276fab0a7099bdfca' => 
    array (
      0 => '/var/www/html/CRMProject/branches/crm_ga/includes/runtime/../../layouts/vlayout/modules/Settings/Vtiger/Index.tpl',
      1 => 1383572696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124376834552d2e2df862ae5-51817012',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'USERS_COUNT' => 0,
    'ACTIVE_WORKFLOWS' => 0,
    'ACTIVE_MODULES' => 0,
    'SETTINGS_SHORTCUTS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52d2e2df8f1f5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d2e2df8f1f5')) {function content_52d2e2df8f1f5($_smarty_tpl) {?>
<div class="container-fluid settingsIndexPage"><div class="widget_header row-fluid"><h3><?php echo vtranslate('LBL_SUMMARY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h3></div><hr><div class="row-fluid"><span class="span4 row-fluid"><a href="index.php?module=Users&parent=Settings&view=List"><span><h2 style="font-size: 44px" class="themeTextColor pull-left"><?php echo $_smarty_tpl->tpl_vars['USERS_COUNT']->value;?>
</h2></span><span class="span3 font-x-large themeTextColor" style="margin-top:17px;margin-left:10px"><?php echo vtranslate('LBL_ACTIVE_USERS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></a></span><span class="span4 row-fluid"><a href="index.php?module=Workflows&parent=Settings&view=List"><h2 style="font-size: 44px" class="themeTextColor pull-left"><?php echo $_smarty_tpl->tpl_vars['ACTIVE_WORKFLOWS']->value;?>
</h2><span class="span3 font-x-large themeTextColor" style="margin-top:17px;margin-left:10px"><?php echo vtranslate('LBL_WORKFLOWS_ACTIVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></a></span><span class="span4 row-fluid"><a href="index.php?module=ModuleManager&parent=Settings&view=List"><h2 style="font-size: 44px" class="themeTextColor pull-left"><?php echo $_smarty_tpl->tpl_vars['ACTIVE_MODULES']->value;?>
</h2><span class="span3 font-x-large themeTextColor" style="margin-top:17px;margin-left:10px"><?php echo vtranslate('LBL_MODULES',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></a></span></div><br><br><h3><?php echo vtranslate('LBL_SETTINGS_SHORTCUTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h3><hr><div id="settingsShortCutsContainer" class="row-fluid"/><?php  $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUTS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->key => $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value){
$_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->_loop = true;
?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SettingsShortCut.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php } ?></div>
<?php }} ?>