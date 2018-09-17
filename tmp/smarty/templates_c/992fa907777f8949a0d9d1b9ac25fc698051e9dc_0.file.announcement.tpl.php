<?php
/* Smarty version 3.1.32, created on 2018-09-13 10:49:02
  from '/Applications/MAMP/htdocs/bjcc/views/default/announcement.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9a409e9413d4_95972621',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '992fa907777f8949a0d9d1b9ac25fc698051e9dc' => 
    array (
      0 => '/Applications/MAMP/htdocs/bjcc/views/default/announcement.tpl',
      1 => 1536835740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9a409e9413d4_95972621 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div class="main">
    <div class="container announcement">

      <div class="page-content row pt-5 pb-5 m-0">

        <div class="post col-12 p-0 pb-4">
          <img class="main-image float-left mb-4 mr-md-4" src="img/<?php echo $_smarty_tpl->tpl_vars['rsPost']->value[0]['image'];?>
" srcset="img/<?php echo $_smarty_tpl->tpl_vars['rsPost']->value[0]['image_2x'];?>
 2x, img/<?php echo $_smarty_tpl->tpl_vars['rsPost']->value[0]['image_3x'];?>
 3x">
          
            <p class="page-title m-0 col-12"><?php echo $_smarty_tpl->tpl_vars['rsPost']->value[0]['name'];?>
</p>
          
            <p class="paragraph paragraph_bold mt-5 ml-3 ml-sm-0 text-justify text-md-left"><?php echo $_smarty_tpl->tpl_vars['rsPost']->value[0]['description'];?>
</p>
            <p class="paragraph ml-3 ml-sm-0 text-justify text-md-left">
              <span class="paragraph-title d-block"><?php echo $_smarty_tpl->tpl_vars['rsPost']->value[0]['title_1'];?>
</span>
              <?php echo $_smarty_tpl->tpl_vars['rsPost']->value[0]['paragraph_1'];?>

            </p>
        </div>

        <p class="read-also m-0 ml-3 ml-sm-0 pt-4 pb-4 text-left">Read also</p>

        <div class="row m-0 justify-content-between">
          <?php
$_smarty_tpl->tpl_vars['__smarty_section_post'] = new Smarty_Variable(array());
if (true) {
for ($__section_post_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] = 0; $__section_post_0_iteration <= 4; $__section_post_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']++){
?>
          <a href="./?controller=post&id=<?php echo $_smarty_tpl->tpl_vars['rsReadAlsoPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['id'];?>
" class="col-12 col-sm p-sm-0 mb-4 mb-md-0 mr-sm-4">
            <img src="img/<?php echo $_smarty_tpl->tpl_vars['rsReadAlsoPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['preview_image'];?>
" srcset="img/<?php echo $_smarty_tpl->tpl_vars['rsReadAlsoPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['preview_image_2x'];?>
 2x, img/<?php echo $_smarty_tpl->tpl_vars['rsReadAlsoPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['preview_image_3x'];?>
 3x">
          </a>
          <?php
}
}
?>
        </div>

      </div>
    </div><?php }
}
