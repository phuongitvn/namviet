<?php /* Smarty version Smarty-3.1.7, created on 2014-03-10 08:32:27
         compiled from "/var/www/html/CRMPlus/crmplus_ga/includes/runtime/../../layouts/vlayout/modules/EmailTemplates/DetailViewFullContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1539600026531d789bc0c0e5-63244969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '946d5df28cbc9daabd5214875b686503fa80ad6e' => 
    array (
      0 => '/var/www/html/CRMPlus/crmplus_ga/includes/runtime/../../layouts/vlayout/modules/EmailTemplates/DetailViewFullContents.tpl',
      1 => 1389945509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1539600026531d789bc0c0e5-63244969',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'USER_MODEL' => 0,
    'MODULE_NAME' => 0,
    'RECORD' => 0,
    'WIDTHTYPE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_531d789bc99ab',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531d789bc99ab')) {function content_531d789bc99ab($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['WIDTHTYPE'] = new Smarty_variable($_smarty_tpl->tpl_vars['USER_MODEL']->value->get('rowheight'), null, 0);?><table class="table table-bordered detailview-table"><thead><tr><th class="blockHeader" colspan="4"><?php echo vtranslate('Email Template - Properties of ',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 " <?php echo decode_html($_smarty_tpl->tpl_vars['RECORD']->value->get('templatename'));?>
 "</th></tr></thead><tbody<tr><td class="fieldLabel <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><label class="muted marginRight10px"><?php echo vtranslate('Templatename',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label></td><td class="fieldValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php echo decode_html($_smarty_tpl->tpl_vars['RECORD']->value->get('templatename'));?>
</td></tr><tr><td class="fieldLabel <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><label class="muted marginRight10px"><?php echo vtranslate('Description',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label></td><td class="fieldValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php echo decode_html($_smarty_tpl->tpl_vars['RECORD']->value->get('description'));?>
</td></tr><tr><td class="fieldLabel <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><label class="muted marginRight10px"><?php echo vtranslate('Subject',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label></td><td class="fieldValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php echo decode_html($_smarty_tpl->tpl_vars['RECORD']->value->get('subject'));?>
</td></tr><tr><td class="fieldLabel <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><label class="muted marginRight10px"><?php echo vtranslate('Message',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label></td><td class="fieldValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php echo decode_html($_smarty_tpl->tpl_vars['RECORD']->value->get('body'));?>
</td></tr></tbody></table><?php }} ?>