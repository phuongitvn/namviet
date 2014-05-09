<?php /* Smarty version Smarty-3.1.7, created on 2014-04-22 09:24:56
         compiled from "/var/www/html/CRMPlus/crmplus_ga/includes/runtime/../../layouts/vlayout/modules/Reports/EditFolder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1346061960535635682b8f21-96377094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9e6d3a50f05f254b970703938ec180215f63561' => 
    array (
      0 => '/var/www/html/CRMPlus/crmplus_ga/includes/runtime/../../layouts/vlayout/modules/Reports/EditFolder.tpl',
      1 => 1389945506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1346061960535635682b8f21-96377094',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'FOLDER_MODEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5356356838b11',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5356356838b11')) {function content_5356356838b11($_smarty_tpl) {?>
<div id="addFolderContainer" class="modelContainer"><div class="modal-header"><button data-dismiss="modal" class="close" title="<?php echo vtranslate('LBL_CLOSE');?>
">x</button><h3><?php echo vtranslate('LBL_ADD_NEW_FOLDER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h3></div><form class="form-horizontal contentsBackground" id="addFolder" method="post" action="index.php"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><input type="hidden" name="action" value="Folder" /><input type="hidden" name="mode" value="save" /><input type="hidden" name="folderid" value="<?php echo $_smarty_tpl->tpl_vars['FOLDER_MODEL']->value->getId();?>
" /><div class="modal-body"><div class="row-fluid verticalBottomSpacing"><span class="span4"><?php echo vtranslate('LBL_FOLDER_NAME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<span class="redColor">*</span></span><span class="span7 row-fluid"><input data-validation-engine='validate[required]' id="foldername" name="foldername" class="span12" type="text" value="<?php echo vtranslate($_smarty_tpl->tpl_vars['FOLDER_MODEL']->value->getName(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
"/></span></div><div class="row-fluid"><span class="span4"><?php echo vtranslate('LBL_FOLDER_DESCRIPTION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span><span class="span7 row-fluid"><textarea class="span12" name="description" placeholder="<?php echo vtranslate('LBL_WRITE_YOUR_DESCRIPTION_HERE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['FOLDER_MODEL']->value->getDescription(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</textarea></span></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form></div><?php }} ?>