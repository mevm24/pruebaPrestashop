<?php /*%%SmartyHeaderCode:166315a79b03e9f2842-21162627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96f64fa82a6fc187645121e8fc8badb06b682708' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_pruebas\\themes\\leo_exist\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1517862360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166315a79b03e9f2842-21162627',
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a79b03ea31242_36918811',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a79b03ea31242_36918811')) {function content_5a79b03ea31242_36918811($_smarty_tpl) {?><script type="text/javascript">
$(document).ready( function(){
//search 
		$("#search_block_top").each( function(){
		var content = $(".groupe");
		$(".groupe-btn", this ).click( function(){
				content.toggleClass("show");
			}) ;
		} );
	 
});
</script>
<!-- Block search module TOP -->
<div id="search_block_top" class="pull-right">
	<a  class="groupe-btn dropdown" title="Search" href="#"><i class="fa fa-search"></i></a>
	<form id="searchbox" method="get" action="http://localhost/prestashop_pruebas/buscar" class="groupe" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Buscar" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Ir</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
