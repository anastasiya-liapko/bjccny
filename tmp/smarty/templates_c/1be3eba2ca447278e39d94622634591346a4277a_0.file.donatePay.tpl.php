<?php
/* Smarty version 3.1.32, created on 2018-09-13 22:19:13
  from '/Applications/MAMP/htdocs/bjcc/views/default/donatePay.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9ae2618dd793_88841652',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1be3eba2ca447278e39d94622634591346a4277a' => 
    array (
      0 => '/Applications/MAMP/htdocs/bjcc/views/default/donatePay.tpl',
      1 => 1536877147,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9ae2618dd793_88841652 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/bjcc/library/Smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'/Applications/MAMP/htdocs/bjcc/library/Smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
    <div class="main">
    <div class="container donate-pay">

      <div class="page row justify-content-start m-0 mt-5 mb-5">
        <span class="page-date d-inline-block col-12 text-center text-md-left col-md-2 m-0 p-0 mb-3 mb-md-0">Donation</span>
        <p class="page-title d-inline-block text-center col-12 col-md-8 m-0"><?php echo $_smarty_tpl->tpl_vars['rsPost']->value[0]['name'];?>
</p>
        
      </div>

      <div class="page-content">
        <div class="row m-0">
          <img class="main-image float-left" src="img/<?php echo $_smarty_tpl->tpl_vars['rsPost']->value[0]['image'];?>
" srcset="img/<?php echo $_smarty_tpl->tpl_vars['rsPost']->value[0]['image_2x'];?>
, img/<?php echo $_smarty_tpl->tpl_vars['rsPost']->value[0]['image_3x'];?>
 3x">
          <div class="col pl-lg-4 pr-lg-0">
            <span class="collected d-block col-12 text-center mt-4 mt-lg-0">Collected</span>
            <span class="sum d-block col-12 text-center"><?php echo $_smarty_tpl->tpl_vars['rsPost']->value[0]['collected'];?>
$</span>
            <div class="row m-0">
              <span class="name d-block col-6 p-0">TARGET</span>
              <span class="value d-block col-6 text-right p-0"><?php echo $_smarty_tpl->tpl_vars['rsPost']->value[0]['target'];?>
$</span>
            </div>
            <div class="row m-0">
              <span class="name d-block col-6 p-0">DAY LEFT</span>
              <span class="value d-block col-6 text-right p-0"><?php echo $_smarty_tpl->tpl_vars['rsPost']->value[0]['day_left'];?>
</span>
            </div>
            <div class="row m-0">
              <span class="name d-block col-6 p-0">START</span>
              <span class="value d-block col-6 text-right p-0"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsPost']->value[0]['start'],"%d.%m.%Y");?>
</span>
            </div>
            <form class="form-inline" action="#">
              <input class="input form-control" type="text" name="sum" value="78$">
              <button class="btn" type="submit">Donate</button>
            </form>
          </div>
        </div>
        <p class="paragraph paragraph_bold mt-5 text-justify text-md-left"><?php echo $_smarty_tpl->tpl_vars['rsPost']->value[0]['description'];?>
</p>
        <p class="paragraph text-justify text-md-left">
          <span class="paragraph-title d-block"><?php echo $_smarty_tpl->tpl_vars['rsPost']->value[0]['title_1'];?>
</span>
          <?php echo $_smarty_tpl->tpl_vars['rsPost']->value[0]['paragraph_1'];?>

        </p>

        <div class="gallery row m-0 mb-3 justify-content-between">
          <a href="#">
            <img class="mb-4 mb-lg-0" src="img/<?php echo $_smarty_tpl->tpl_vars['rsPost']->value[0]['gallery_image_1'];?>
" srcset="img/<?php echo $_smarty_tpl->tpl_vars['rsPost']->value[0]['gallery_image_1_2x'];?>
 2x, img/<?php echo $_smarty_tpl->tpl_vars['rsPost']->value[0]['gallery_image_1_3x'];?>
 3x">
          </a>
          <a href="#">
            <img class="mb-4 mb-lg-0" src="img/<?php echo $_smarty_tpl->tpl_vars['rsPost']->value[0]['gallery_image_2'];?>
" srcset="img/<?php echo $_smarty_tpl->tpl_vars['rsPost']->value[0]['gallery_image_2_2x'];?>
 2x, img/<?php echo $_smarty_tpl->tpl_vars['rsPost']->value[0]['gallery_image_2_3x'];?>
 3x">
          </a>
          <a href="#">
            <img src="img/<?php echo $_smarty_tpl->tpl_vars['rsPost']->value[0]['gallery_image_3'];?>
" srcset="img/<?php echo $_smarty_tpl->tpl_vars['rsPost']->value[0]['gallery_image_3_2x'];?>
 2x, img/<?php echo $_smarty_tpl->tpl_vars['rsPost']->value[0]['gallery_image_3_3x'];?>
 3x">
          </a>
        </div>

        <div class="social row justify-content-center align-items-center m-0">
          <a class="google" href="#">Google</a>
          <a class="facebook" href="#">Facebook</a>
          <a class="instagram" href="#">Instagram</a>
          <a class="telegram" href="#">Telegram</a>
          <a class="youtube" href="#">Youtube</a>
          <a class="twitter" href="#">Twitter</a>
        </div>

      </div>

      <div class="row m-0 posts mt-5 mb-5">
        <?php
$_smarty_tpl->tpl_vars['__smarty_section_post'] = new Smarty_Variable(array());
if (true) {
for ($__section_post_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] = 0; $__section_post_0_iteration <= 2; $__section_post_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']++){
?>
        <div class="post col-12 col-lg-6 p-0 pr-lg-3 mb-4">
          <a href="./?controller=post&id=<?php echo $_smarty_tpl->tpl_vars['rsReadAlsoPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['id'];?>
">
            <img class="float-left mb-3" src="img/<?php echo $_smarty_tpl->tpl_vars['rsReadAlsoPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['preview_image'];?>
" srcset="img/<?php echo $_smarty_tpl->tpl_vars['rsReadAlsoPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['preview_image_2x'];?>
 2x, img/<?php echo $_smarty_tpl->tpl_vars['rsReadAlsoPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['preview_image_3x'];?>
 3x">
            <div class="text-center">
              <p class="secondary-posts__post-title text-left pl-2 pl-lg-0"><?php echo $_smarty_tpl->tpl_vars['rsReadAlsoPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['name'];?>
</p>
              <p class="secondary-posts__post-text text-left p-lg-0"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['rsReadAlsoPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['description'],225,"...",true);?>
</p>
              <div class="sum row text-left m-0 pl-2 pl-lg-0">
                <span class="name col-6 p-0">Collected</span>
                <span class="name col-6 p-0">Target</span>
              </div>
              <div class="row text-left m-0 pl-2 pl-lg-0">
                <span class="value col-6 p-0"><?php echo $_smarty_tpl->tpl_vars['rsReadAlsoPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['collected'];?>
$</span>
                <span class="value value_green col-6 p-0"><?php echo $_smarty_tpl->tpl_vars['rsReadAlsoPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['target'];?>
$</span>
              </div>
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
