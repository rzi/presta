<?php
/* Smarty version 3.1.33, created on 2019-12-22 16:24:18
  from '/usr/home/rzi/domains/presta.ct8.pl/public_html/modules/psgdpr/views/templates/front/customerAccount.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dff8aa2eb8502_18954738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '433572727a95b2f73d7d239fd487a87a82d0d66a' => 
    array (
      0 => '/usr/home/rzi/domains/presta.ct8.pl/public_html/modules/psgdpr/views/templates/front/customerAccount.tpl',
      1 => 1577015390,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dff8aa2eb8502_18954738 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="identity-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('psgdpr','gdpr'), ENT_QUOTES, 'UTF-8');?>
">
    <span class="link-item">
        <i class="material-icons">account_box</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'GDPR - Personal data','mod'=>'psgdpr'),$_smarty_tpl ) );?>

    </span>
</a>
<?php }
}
