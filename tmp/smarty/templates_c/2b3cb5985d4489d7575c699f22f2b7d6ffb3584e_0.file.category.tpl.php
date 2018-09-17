<?php
/* Smarty version 3.1.32, created on 2018-09-12 21:09:38
  from '/Applications/MAMP/htdocs/bjcc/views/default/category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b998092d2bf32_37417662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b3cb5985d4489d7575c699f22f2b7d6ffb3584e' => 
    array (
      0 => '/Applications/MAMP/htdocs/bjcc/views/default/category.tpl',
      1 => 1536785812,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b998092d2bf32_37417662 (Smarty_Internal_Template $_smarty_tpl) {
?>
  
  <div class="main">
  <div class="container all-news">
    
    <p class="page-title d-block w-100 m-0 mt-5 mb-4"><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</p>
    <div class="all-news-nav row justify-content-center m-0">
      <?php if ($_smarty_tpl->tpl_vars['rsCategory']->value[0]['children']) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategory']->value[0]['children'], 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
          <a class="mr-md-2 col-12 col-md-2 text-center" href="./?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php }?>
    </div>
    
    <div class="row secondary-posts">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsPosts']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
      <div class="col-md-6">

        <a href="./?controller=post&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="secondary-posts__post">
          <p class="secondary-posts__post-title"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</p>
          <div class="secondary-posts__post-card">
            <img src="img/<?php echo $_smarty_tpl->tpl_vars['item']->value['preview_image'];?>
" srcset="img/<?php echo $_smarty_tpl->tpl_vars['item']->value['preview_image_2x'];?>
 2x, img/<?php echo $_smarty_tpl->tpl_vars['item']->value['preview_image_3x'];?>
 3x">
            <p class="secondary-posts__post-date"><?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>
</p>
            <p class="secondary-posts__post-text"><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</p>
          </div>
        </a>

      </div>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </div>
    <!-- secondary-posts -->

  </div>
<?php }
}
