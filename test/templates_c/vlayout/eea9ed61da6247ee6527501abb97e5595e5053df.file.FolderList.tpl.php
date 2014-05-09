<?php /* Smarty version Smarty-3.1.7, created on 2014-04-23 04:28:07
         compiled from "/home/crm4b519/public_html/includes/runtime/../../layouts/vlayout/modules/MailManager/FolderList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158983739553574157c469b7-66477948%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eea9ed61da6247ee6527501abb97e5595e5053df' => 
    array (
      0 => '/home/crm4b519/public_html/includes/runtime/../../layouts/vlayout/modules/MailManager/FolderList.tpl',
      1 => 1398226575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158983739553574157c469b7-66477948',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FOLDERS' => 0,
    'MODULE' => 0,
    'FOLDER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_53574157cab8c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53574157cab8c')) {function content_53574157cab8c($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['FOLDERS']->value){?>
	<div class="quickWidget">
		<div class="accordion-heading accordion-toggle quickWidgetHeader">
			<h5 class="title widgetTextOverflowEllipsis"><?php echo vtranslate('LBL_Folders',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h5>
		</div>

		<div class="widgetContainer accordion-body collapse in">
			<input type=hidden name="mm_selected_folder" id="mm_selected_folder">
			<input type="hidden" name="_folder" id="mailbox_folder">
			<div>
				<div class="row-fluid">
					<div class="span10">
						<ul class="nav nav-list">
							<?php  $_smarty_tpl->tpl_vars['FOLDER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FOLDER']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FOLDERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FOLDER']->key => $_smarty_tpl->tpl_vars['FOLDER']->value){
$_smarty_tpl->tpl_vars['FOLDER']->_loop = true;
?>
								<li>
									<a class="mm_folder" id='_mailfolder_<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->name();?>
' href='#<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->name();?>
' onclick="MailManager.clearSearchString(); MailManager.folder_open('<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->name();?>
'); "><?php if ($_smarty_tpl->tpl_vars['FOLDER']->value->unreadCount()){?><b><?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->name();?>
 (<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->unreadCount();?>
)</b><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->name();?>
<?php }?></a>
								</li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	<?php }?><?php }} ?>