<?php
/* Smarty version 3.1.33, created on 2019-12-22 16:28:32
  from '/usr/home/rzi/domains/presta.ct8.pl/public_html/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dff8ba0734de8_60593535',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4320af8ebfa8bb1dd5fc6eeb4d0c7a468619b955' => 
    array (
      0 => '/usr/home/rzi/domains/presta.ct8.pl/public_html/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1577015169,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dff8ba0734de8_60593535 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}