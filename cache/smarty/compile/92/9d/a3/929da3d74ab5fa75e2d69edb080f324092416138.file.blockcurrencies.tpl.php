<?php /* Smarty version Smarty-3.1.19, created on 2018-02-06 08:40:17
         compiled from "C:\xampp\htdocs\prestashop_pruebas\themes\leo_exist\modules\blockcurrencies\blockcurrencies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20985a79b041b44795-90696387%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '929da3d74ab5fa75e2d69edb080f324092416138' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_pruebas\\themes\\leo_exist\\modules\\blockcurrencies\\blockcurrencies.tpl',
      1 => 1517862360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20985a79b041b44795-90696387',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'currencies' => 0,
    'cookie' => 0,
    'f_currency' => 0,
    'request_uri' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a79b041cdcaa2_26631184',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a79b041cdcaa2_26631184')) {function content_5a79b041cdcaa2_26631184($_smarty_tpl) {?>
<!-- Block currencies module -->
<?php if (count($_smarty_tpl->tpl_vars['currencies']->value)>1) {?>

<div class="btn-group pull-right">
	<div data-toggle="dropdown" class="dropdown-toggle"><span class="hidden-xs"><?php echo smartyTranslate(array('s'=>'Currency : ','mod'=>'blockcurrencies'),$_smarty_tpl);?>
</span>
			<?php  $_smarty_tpl->tpl_vars['f_currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f_currency']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f_currency']->key => $_smarty_tpl->tpl_vars['f_currency']->value) {
$_smarty_tpl->tpl_vars['f_currency']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['f_currency']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['cookie']->value->id_currency==$_smarty_tpl->tpl_vars['f_currency']->value['id_currency']) {?>
					<?php echo $_smarty_tpl->tpl_vars['f_currency']->value['sign'];?>
<?php echo $_smarty_tpl->tpl_vars['f_currency']->value['iso_code'];?>

				<?php }?>
			<?php } ?>

	</div>
	<div class="quick-setting dropdown-menu">
		<div id="currencies-block-top">
			<form id="setCurrency" action="<?php echo $_smarty_tpl->tpl_vars['request_uri']->value;?>
" method="post">
		 	
				<input type="hidden" name="id_currency" id="id_currency" value=""/>
				<input type="hidden" name="SubmitCurrency" value="" />
	 
				<ul id="first-currencies" class="currencies_ul toogle_content">
					<?php  $_smarty_tpl->tpl_vars['f_currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f_currency']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f_currency']->key => $_smarty_tpl->tpl_vars['f_currency']->value) {
$_smarty_tpl->tpl_vars['f_currency']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['f_currency']->key;
?>
						<li <?php if ($_smarty_tpl->tpl_vars['cookie']->value->id_currency==$_smarty_tpl->tpl_vars['f_currency']->value['id_currency']) {?>class="selected"<?php }?>>
							<a href="javascript:setCurrency(<?php echo $_smarty_tpl->tpl_vars['f_currency']->value['id_currency'];?>
);" rel="nofollow" title="<?php echo $_smarty_tpl->tpl_vars['f_currency']->value['name'];?>
">
								<?php echo $_smarty_tpl->tpl_vars['f_currency']->value['sign'];?>
 <?php echo $_smarty_tpl->tpl_vars['f_currency']->value['name'];?>

							</a>
						</li>
					<?php } ?>
				</ul>
			</form>
		</div>
	</div>	
</div>


	
<?php }?>
<!-- /Block currencies module --><?php }} ?>
