<?php
/* Smarty version 3.1.32, created on 2018-09-13 12:51:52
  from '/Applications/MAMP/htdocs/bjcc/views/default/makeAPayment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9a5d68078e74_31184012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23b06e2cb01f035cffe90f1a507d73f592c70007' => 
    array (
      0 => '/Applications/MAMP/htdocs/bjcc/views/default/makeAPayment.tpl',
      1 => 1536843109,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9a5d68078e74_31184012 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/bjcc/library/Smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
  <div class="main">
    <div class="container make-a-payment mb-5">

      <p class="page-title d-block w-100 m-0 mt-5 mb-4 text-center"><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</p>

      <div class="row m-0">
        <?php
$_smarty_tpl->tpl_vars['__smarty_section_post'] = new Smarty_Variable(array());
if (true) {
for ($__section_post_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] = 0; $__section_post_0_iteration <= 6; $__section_post_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']++){
?>
          <div class="post col-12 col-lg-6 p-0 pr-lg-3 mb-4">
            <a href="./?controller=post&id=<?php echo $_smarty_tpl->tpl_vars['rsPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['id'];?>
">
              <img class="float-left mb-3" src="img/<?php echo $_smarty_tpl->tpl_vars['rsPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['preview_image'];?>
" srcset="img/<?php echo $_smarty_tpl->tpl_vars['rsPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['preview_image_2x'];?>
 2x, img/<?php echo $_smarty_tpl->tpl_vars['rsPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['preview_image_3x'];?>
 3x">
              <div class="text-center">
                <p class="secondary-posts__post-title text-left pl-2 pl-lg-0"><?php echo $_smarty_tpl->tpl_vars['rsPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['name'];?>
</p>
                <p class="secondary-posts__post-text text-left p-lg-0"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['rsPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['description'],225,"...",true);?>
</p>
                <a href="#" class="btn mb-5 mb-md-0">10$</a>
              </div>
            </a>
          </div>
        <?php
}
}
?>
      </div>
      
    </div><?php }
}
