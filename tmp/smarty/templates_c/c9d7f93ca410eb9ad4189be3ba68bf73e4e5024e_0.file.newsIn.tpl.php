<?php
/* Smarty version 3.1.32, created on 2018-09-13 12:57:57
  from '/Applications/MAMP/htdocs/bjcc/views/default/newsIn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9a5ed57e06f7_46632735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9d7f93ca410eb9ad4189be3ba68bf73e4e5024e' => 
    array (
      0 => '/Applications/MAMP/htdocs/bjcc/views/default/newsIn.tpl',
      1 => 1536843474,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9a5ed57e06f7_46632735 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/bjcc/library/Smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
  <div class="main">
    <div class="container news-in">

      <div class="page row justify-content-end m-0">
        <p class="page-title d-inline-block col-12 col-md-8 m-0"><?php echo $_smarty_tpl->tpl_vars['rsPost']->value[0]['name'];?>
</p>
        <span class="page-date d-inline-block col-12 text-center text-md-right col-md-2 m-0"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsPost']->value[0]['date'],"%d | %m | %Y");?>
</span>
      </div>

      <div class="page-content">
        <img class="main-image" src="img/<?php echo $_smarty_tpl->tpl_vars['rsPost']->value[0]['image'];?>
" srcset="img/<?php echo $_smarty_tpl->tpl_vars['rsPost']->value[0]['image_2x'];?>
 2x, img/<?php echo $_smarty_tpl->tpl_vars['rsPost']->value[0]['image_3x'];?>
 3x">
        <p class="paragraph paragraph_bold mt-5 text-justify text-md-left"><?php echo $_smarty_tpl->tpl_vars['rsPost']->value[0]['description'];?>
</p>
        <p class="paragraph text-justify text-md-left">
          <span class="paragraph-title d-block"><?php echo $_smarty_tpl->tpl_vars['rsPost']->value[0]['title_1'];?>
</span>
          <?php echo $_smarty_tpl->tpl_vars['rsPost']->value[0]['paragraph_1'];?>

        </p>
        <p class="paragraph text-justify text-md-left">
          <span class="paragraph-title d-block"><?php echo $_smarty_tpl->tpl_vars['rsPost']->value[0]['title_2'];?>
</span>
          <?php echo $_smarty_tpl->tpl_vars['rsPost']->value[0]['paragraph_1'];?>

        </p>

        <div class="social row justify-content-center align-items-center m-0">
          <a class="google" href="#">Google</a>
          <a class="facebook" href="#">Facebook</a>
          <a class="instagram" href="#">Instagram</a>
          <a class="telegram" href="#">Telegram</a>
          <a class="youtube" href="#">Youtube</a>
          <a class="twitter" href="#">Twitter</a>
        </div>

      </div>

      <div class="main-posts pb-4 pb-md-5">

        <p class="read-also m-0 pt-4 pb-4 text-left">Read also</p>

        <div class="row justify-content-center m-0">
          <?php
$_smarty_tpl->tpl_vars['__smarty_section_post'] = new Smarty_Variable(array());
if (true) {
for ($__section_post_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] = 0; $__section_post_0_iteration <= 2; $__section_post_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']++){
?>
          <a href="./?controller=post&id=<?php echo $_smarty_tpl->tpl_vars['rsReadAlsoPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['id'];?>
" class="col-md-6 col-sm-12 col-12 main-posts__post">
            <div>
              <img src="img/<?php echo $_smarty_tpl->tpl_vars['rsReadAlsoPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['preview_image'];?>
" srcset="img/<?php echo $_smarty_tpl->tpl_vars['rsReadAlsoPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['preview_image_2x'];?>
 2x, img/<?php echo $_smarty_tpl->tpl_vars['rsReadAlsoPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['preview_image_3x'];?>
 3x">
              <p class="main-posts__post-title"><?php echo $_smarty_tpl->tpl_vars['rsReadAlsoPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['name'];?>
</p>
              <p class="main-posts__post-date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsReadAlsoPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['date'],"%d | %m | %Y");?>
</p>
            </div>
            <p class="main-posts__post-tag pl-0">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsReadAlsoPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['tags'], 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                <span class="tag"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</span>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </p>
            <p class="main-posts__post-text text-justify text-sm-left pl-0 pr-0"><?php echo $_smarty_tpl->tpl_vars['rsReadAlsoPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['description'];?>
</p>
          </a>
          <?php
}
}
?>
        </div>

      </div>
      <!-- main-posts -->

    </div><?php }
}
