<?php /* Smarty version Smarty-3.1.7, created on 2014-04-29 07:42:29
         compiled from "/home/crm4b519/public_html/includes/runtime/../../layouts/vlayout/modules/Google/map.tpl" */ ?>
<?php /*%%SmartyHeaderCode:503913592535f57e5e99c39-75556122%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73ffa6997bf02609ee72eae1832b1412793f1896' => 
    array (
      0 => '/home/crm4b519/public_html/includes/runtime/../../layouts/vlayout/modules/Google/map.tpl',
      1 => 1398226575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '503913592535f57e5e99c39-75556122',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECORD' => 0,
    'SOURCE_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_535f57e5f2c0b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535f57e5f2c0b')) {function content_535f57e5f2c0b($_smarty_tpl) {?>
<script type="text/javascript" src="layouts/vlayout/modules/Google/resources/map.js"></script>

<span id="map_record" class="hide"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value;?>
</span>
<span id="map_module" class="hide"><?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
</span>
<div id="map_canvas">
    <span id="map_address" class="hide"></span>
    <img id="map_link" class="pull-right icon-share cursorPointer"></img>
</div>

<?php }} ?>