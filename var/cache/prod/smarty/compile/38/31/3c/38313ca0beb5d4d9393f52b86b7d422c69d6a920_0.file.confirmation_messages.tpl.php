<?php
/* Smarty version 3.1.33, created on 2019-12-22 16:34:09
  from '/usr/home/rzi/domains/presta.ct8.pl/public_html/admin72/themes/new-theme/template/components/layout/confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dff8cf1c20460_06484465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38313ca0beb5d4d9393f52b86b7d422c69d6a920' => 
    array (
      0 => '/usr/home/rzi/domains/presta.ct8.pl/public_html/admin72/themes/new-theme/template/components/layout/confirmation_messages.tpl',
      1 => 1577015168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dff8cf1c20460_06484465 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['confirmations']->value) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
