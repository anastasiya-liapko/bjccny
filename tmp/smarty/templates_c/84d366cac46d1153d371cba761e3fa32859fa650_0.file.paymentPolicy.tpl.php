<?php
/* Smarty version 3.1.32, created on 2018-09-13 19:43:01
  from '/Applications/MAMP/htdocs/bjcc/views/default/paymentPolicy.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9abdc581ec59_24717369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84d366cac46d1153d371cba761e3fa32859fa650' => 
    array (
      0 => '/Applications/MAMP/htdocs/bjcc/views/default/paymentPolicy.tpl',
      1 => 1536867779,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9abdc581ec59_24717369 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div class="main">
    <div class="container payment-policy">

      <div class="page row justify-content-end m-0">
        <p class="page-title d-inline-block col-12 m-0 text-center mt-5 mb-4"><?php echo $_smarty_tpl->tpl_vars['rsPosts']->value[0]['name'];?>
</p>
      </div>

      <div class="page-content pb-4 mb-5 text-justify text-md-left">
        <p class="paragraph paragraph_bold mt-3"><?php echo $_smarty_tpl->tpl_vars['rsPosts']->value[0]['description'];?>
</p>
        <p class="paragraph text-justify text-md-left">
          <span class="paragraph-title d-block"><?php echo $_smarty_tpl->tpl_vars['rsPosts']->value[0]['title_1'];?>
</span>
          <?php echo $_smarty_tpl->tpl_vars['rsPosts']->value[0]['paragraph_1'];?>

        </p>

      </div>

    </div><?php }
}
