<?php
/* Smarty version 3.1.33, created on 2020-05-30 14:32:11
  from '/usr/home/rzi/domains/presta.ct8.pl/public_html/admin72/themes/default/template/controllers/cart_rules/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ed2524b149f94_43977622',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a41337f4c31339b2847c2c2e04931d54027ac15' => 
    array (
      0 => '/usr/home/rzi/domains/presta.ct8.pl/public_html/admin72/themes/default/template/controllers/cart_rules/helpers/list/list_header.tpl',
      1 => 1577015168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed2524b149f94_43977622 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6641969365ed2524b13efd7_59164899', 'override_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'override_header'} */
class Block_6641969365ed2524b13efd7_59164899 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_header' => 
  array (
    0 => 'Block_6641969365ed2524b13efd7_59164899',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['submit_form_ajax']->value) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
		$('#voucher', window.parent.document).val('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['new_cart_rule']->value->code,'html','UTF-8' ));?>
');
		parent.add_cart_rule(<?php echo intval($_smarty_tpl->tpl_vars['new_cart_rule']->value->id);?>
);
		parent.$.fancybox.close();
	<?php echo '</script'; ?>
>
<?php }
}
}
/* {/block 'override_header'} */
}
