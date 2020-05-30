<?php
/* Smarty version 3.1.33, created on 2020-05-30 14:31:55
  from '/usr/home/rzi/domains/presta.ct8.pl/public_html/admin72/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ed2523b2e6a05_39519834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da59795d901c1c4464b31572650aa387651df9e2' => 
    array (
      0 => '/usr/home/rzi/domains/presta.ct8.pl/public_html/admin72/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl',
      1 => 1577015168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed2523b2e6a05_39519834 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19509759225ed2523b2e5ce8_86457856', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_19509759225ed2523b2e5ce8_86457856 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_19509759225ed2523b2e5ce8_86457856',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			$(location.hash).click();
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'leadin'} */
}
