<?php /* Smarty version Smarty-3.1.7, created on 2014-01-23 04:20:29
         compiled from "/var/www/html/CRMPlus/crmplus_ga/includes/runtime/../../layouts/vlayout/modules/Tut/Index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:163589058052e0988d8a2790-42676783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a91ed42e7bcbb9ebc4ed6425a7f442883d06f710' => 
    array (
      0 => '/var/www/html/CRMPlus/crmplus_ga/includes/runtime/../../layouts/vlayout/modules/Tut/Index.tpl',
      1 => 1389945510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163589058052e0988d8a2790-42676783',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52e0988d8aadb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e0988d8aadb')) {function content_52e0988d8aadb($_smarty_tpl) {?><div class="container-fluid">
	<div class="">
		<div class="row-fluid">
			<div class="span12">
				<div id="tut-step">
				<ul style="margin-top: 10px;" id="mainNav" class="fiveStep">
					<li class="lastDone"><a href="#home" data-toggle="tab">Marketing & Kinh doanh</a></li>
					<li class="current"><a href="#profile" data-toggle="tab">Cơ hội bán hàng</a></li>
					<li class="current"><a href="#support" data-toggle="tab">Hỗ trợ</a></li>
				</ul>
				</div>
				<!-- <ul class="nav nav-pills">
				  <li class="active"><a href="#home" data-toggle="tab">Quản lý tiềm năng</a></li>
				  <li><a href="#profile" data-toggle="tab">Quản lý cơ hội bán hàng</a></li>
				  <li><a href="#support" data-toggle="tab">Quản lý Hỗ Trợ & Quản lý Dự Án</a></li>
				</ul> -->
				<div class="tab-content-tut" style="overflow: visible;">
				  <div class="tab-pane active" id="home" style="text-align: center">
				  	<img src="layouts/vlayout/skins/crmplus/images/s1.png" />
				  </div>
				  <div class="tab-pane" id="profile" style="text-align: center">
				  	<img src="layouts/vlayout/skins/crmplus/images/s2.png" />
				  </div>
				  <div class="tab-pane" id="support" style="text-align: center">
				  	<img src="layouts/vlayout/skins/crmplus/images/s3.png" />
				  </div>
				</div>
				
			</div>
		</div>
	</div>
</div>
<link href="layouts/vlayout/skins/crmplus/crmplus.css" rel="stylesheet" />
<script>
$(function(){
	$("#mainNav li a").live("click", function(){
		var content= $(this).attr("href");
		$("#mainNav li").removeClass("lastDone").addClass("current");
		$(this).parent("li").addClass("lastDone");
		$(".tab-content-tut div").removeClass("active");
		$(content).addClass("active");
	})
})

</script><?php }} ?>