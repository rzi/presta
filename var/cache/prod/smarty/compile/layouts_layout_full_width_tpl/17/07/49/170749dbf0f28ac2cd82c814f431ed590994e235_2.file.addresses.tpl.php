<?php
/* Smarty version 3.1.33, created on 2019-12-22 16:16:36
  from '/usr/home/rzi/domains/presta.ct8.pl/public_html/themes/classic/templates/customer/addresses.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dff88d4b5c3d3_73286174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '170749dbf0f28ac2cd82c814f431ed590994e235' => 
    array (
      0 => '/usr/home/rzi/domains/presta.ct8.pl/public_html/themes/classic/templates/customer/addresses.tpl',
      1 => 1577015169,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:customer/_partials/block-address.tpl' => 1,
  ),
),false)) {
function content_5dff88d4b5c3d3_73286174 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7755943955dff88d4b4b544_07409400', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17808175575dff88d4b4ea92_16660583', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/page.tpl');
}
/* {block 'page_title'} */
class Block_7755943955dff88d4b4b544_07409400 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_7755943955dff88d4b4b544_07409400',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your addresses','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'customer_address'} */
class Block_2686166775dff88d4b54823_07208115 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:customer/_partials/block-address.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('address'=>$_smarty_tpl->tpl_vars['address']->value), 0, true);
?>
    <?php
}
}
/* {/block 'customer_address'} */
/* {block 'page_content'} */
class Block_17808175575dff88d4b4ea92_16660583 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_17808175575dff88d4b4ea92_16660583',
  ),
  'customer_address' => 
  array (
    0 => 'Block_2686166775dff88d4b54823_07208115',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer']->value['addresses'], 'address');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['address']->value) {
?>
    <div class="col-lg-4 col-md-6 col-sm-6">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2686166775dff88d4b54823_07208115', 'customer_address', $this->tplIndex);
?>

    </div>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <div class="clearfix"></div>
  <div class="addresses-footer">
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['address'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="add-address">
      <i class="material-icons">&#xE145;</i>
      <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create new address','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
    </a>
  </div>
<?php
}
}
/* {/block 'page_content'} */
}
