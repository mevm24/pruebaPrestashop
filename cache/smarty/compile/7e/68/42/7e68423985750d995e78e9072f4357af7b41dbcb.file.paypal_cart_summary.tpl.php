<?php /* Smarty version Smarty-3.1.19, created on 2018-02-05 16:05:15
         compiled from "C:\xampp\htdocs\prestashop_pruebas\modules\paypal\views\templates\hook\paypal_cart_summary.tpl" */ ?>
<?php /*%%SmartyHeaderCode:320895a78c70bc156d5-60479680%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e68423985750d995e78e9072f4357af7b41dbcb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_pruebas\\modules\\paypal\\views\\templates\\hook\\paypal_cart_summary.tpl',
      1 => 1517863006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '320895a78c70bc156d5-60479680',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logos' => 0,
    'address_shipping' => 0,
    'patternRules' => 0,
    'address_billing' => 0,
    'cart' => 0,
    'product' => 0,
    'cart_image_size' => 0,
    'link' => 0,
    'total' => 0,
    'use_taxes' => 0,
    'currency' => 0,
    'base_dir' => 0,
    'useStyle14' => 0,
    'useStyle15' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a78c70bc7d9b4_87104335',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a78c70bc7d9b4_87104335')) {function content_5a78c70bc7d9b4_87104335($_smarty_tpl) {?>

        <p>
            <img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['LocalPayPalLogoMedium'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="<?php echo smartyTranslate(array('s'=>'PayPal','mod'=>'paypal'),$_smarty_tpl);?>
" class="paypal_logo" />
            <br /><?php echo smartyTranslate(array('s'=>'You have chosen to pay with PayPal.','mod'=>'paypal'),$_smarty_tpl);?>

            <br/><br />
        <?php echo smartyTranslate(array('s'=>'Here is a short summary of your order:','mod'=>'paypal'),$_smarty_tpl);?>

        </p>

        <p class="shipping_address col-sm-3 column grid_2">
            <strong><?php echo smartyTranslate(array('s'=>'Shipping address','mod'=>'paypal'),$_smarty_tpl);?>
</strong><br/>
            <?php echo AddressFormat::generateAddress($_smarty_tpl->tpl_vars['address_shipping']->value,$_smarty_tpl->tpl_vars['patternRules']->value,'<br/>');?>

            
        </p>
        <p class="billing_address col-sm-3">
            <strong><?php echo smartyTranslate(array('s'=>'Billing address','mod'=>'paypal'),$_smarty_tpl);?>
</strong><br/>
            <?php echo AddressFormat::generateAddress($_smarty_tpl->tpl_vars['address_billing']->value,$_smarty_tpl->tpl_vars['patternRules']->value,'<br/>');?>

            
        </p>

        <div class="clearfix"></div>
        
        <div class="col-sm-12 cart_container">
            <strong class="title"><?php echo smartyTranslate(array('s'=>'Your cart','mod'=>'paypal'),$_smarty_tpl);?>
</strong>
            <table id="cart_summary" class="table table-bordered stock-management-on">
            <thead>
                <tr>
                    <th><?php echo smartyTranslate(array('s'=>'Image','mod'=>'paypal'),$_smarty_tpl);?>
</th>
                    <th><?php echo smartyTranslate(array('s'=>'Name','mod'=>'paypal'),$_smarty_tpl);?>
</th>
                    <th><?php echo smartyTranslate(array('s'=>'Quantity','mod'=>'paypal'),$_smarty_tpl);?>
</th>
                </tr>
            </thead>
            <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value->getProducts(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
                <tr>
                    <td>
                        <img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink('small',$_smarty_tpl->tpl_vars['product']->value['id_image'],$_smarty_tpl->tpl_vars['cart_image_size']->value), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="">
                    </td>
                    <td>
                        <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<br/>
                        <?php if (isset($_smarty_tpl->tpl_vars['product']->value['attributes'])&&$_smarty_tpl->tpl_vars['product']->value['attributes']) {?><small><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['attributes'], ENT_QUOTES, 'UTF-8', true);?>
</small><?php }?>
                    </td>
                    <td>
                        <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

                    </td>
                </tr>
            <?php } ?>
            </table>
        </div>

        <p class="paypal_total_amount">
            - <?php echo smartyTranslate(array('s'=>'The total amount of your order is','mod'=>'paypal'),$_smarty_tpl);?>

            <span id="amount" class="price"><strong><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['total']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</strong></span> <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value==1) {?><?php echo smartyTranslate(array('s'=>'(tax incl.)','mod'=>'paypal'),$_smarty_tpl);?>
<?php }?>
        </p>
        <p>
            - <?php echo smartyTranslate(array('s'=>'We accept the following currency to be sent by PayPal:','mod'=>'paypal'),$_smarty_tpl);?>
&nbsp;<b><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->name, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</b>
        </p>

        
<link rel="stylesheet" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['base_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
/modules/paypal/views/css/paypal-cart_summary.css">
<?php if ($_smarty_tpl->tpl_vars['useStyle14']->value) {?>
    <link rel="stylesheet" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['base_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
/modules/paypal/views/css/paypal_1_4_paypal-cart_summary.css">
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['useStyle15']->value) {?>
    <link rel="stylesheet" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['base_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
/modules/paypal/views/css/paypal_1_5_paypal-cart_summary.css">
<?php }?><?php }} ?>
