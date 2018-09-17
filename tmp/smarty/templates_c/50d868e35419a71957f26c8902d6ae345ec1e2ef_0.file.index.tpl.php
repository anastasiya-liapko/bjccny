<?php
/* Smarty version 3.1.32, created on 2018-09-14 08:33:33
  from '/Applications/MAMP/htdocs/bjccny.loc/views/default/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9b725d0db8d1_27971207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50d868e35419a71957f26c8902d6ae345ec1e2ef' => 
    array (
      0 => '/Applications/MAMP/htdocs/bjccny.loc/views/default/index.tpl',
      1 => 1536874951,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9b725d0db8d1_27971207 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/bjccny.loc/library/Smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
  <div class="main">
    <div class="container">

      <div class="main-posts">

        <div class="row justify-content-center m-lg-0">
          <?php
$_smarty_tpl->tpl_vars['__smarty_section_post'] = new Smarty_Variable(array());
if (true) {
for ($__section_post_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] = 0; $__section_post_0_iteration <= 1; $__section_post_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']++){
?>
            <a href="./?controller=post&id=<?php echo $_smarty_tpl->tpl_vars['rsMainPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['id'];?>
" class="col-md-12 main-posts__post main-posts__post_main justify-content-center">
              <div>
                <img src="img/<?php echo $_smarty_tpl->tpl_vars['rsMainPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['image'];?>
" srcset="img/<?php echo $_smarty_tpl->tpl_vars['rsMainPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['image_2x'];?>
 2x, img/<?php echo $_smarty_tpl->tpl_vars['rsMainPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['image_3x'];?>
 3x">
                <p class="main-posts__post-title"><?php echo $_smarty_tpl->tpl_vars['rsMainPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['name'];?>
</p>
                <p class="main-posts__post-date">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsMainPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['tags'], 'item');
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
              </div>
            </a>
          <?php
}
}
?>
        </div>

        <div class="row justify-content-center m-lg-0">
          <?php
$_smarty_tpl->tpl_vars['__smarty_section_post'] = new Smarty_Variable(array());
if (true) {
for ($__section_post_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] = 1; $__section_post_1_iteration <= 6; $__section_post_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']++){
?>
            <a href="./?controller=post&id=<?php echo $_smarty_tpl->tpl_vars['rsMainPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['id'];?>
" class="col-md-6 col-sm-12 col-12 main-posts__post">
              <div>
                <img src="img/<?php echo $_smarty_tpl->tpl_vars['rsMainPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['preview_image'];?>
" srcset="img/<?php echo $_smarty_tpl->tpl_vars['rsMainPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['preview_image_2x'];?>
 2x, img/<?php echo $_smarty_tpl->tpl_vars['rsMainPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['preview_image_3x'];?>
 3x">
                <p class="main-posts__post-title"><?php echo $_smarty_tpl->tpl_vars['rsMainPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['name'];?>
</p>
                <p class="main-posts__post-date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsMainPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['date'],"%d | %m | %Y");?>
</p>
              </div>
              <p class="main-posts__post-tag">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsMainPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['tags'], 'item');
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
              <p class="main-posts__post-text text-justify text-sm-left"><?php echo $_smarty_tpl->tpl_vars['rsMainPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['description'];?>
</p>
            </a>
          <?php
}
}
?>
        </div>
        
        <div class="row justify-content-center m-lg-0">
          <div class="col-md-12 main-posts__btn row justify-content-center m-0">
            <a href="#" class="btn">Read more</a>
          </div>
        </div>
        
      </div>
      <!-- main-posts -->

      <div class="row ask-form m-lg-0">
        <div class="col-md-4 pl-lg-0">
          <p class="ask-form__title ask-form__title_blue">Ask Rabbi</p>
          <img src="img/rectangle.png" srcset="img/rectangle@2x.png 2x">
        </div>
        <div class="col-md-8 pr-lg-0">
          <div class="row justify-content-between justify-content-md-end title-wrapper">
            <p class="ask-form__title ask-form__title_gray">User questions</p>
            <p class="ask-form__title ask-form__title_black">Ask</p>
          </div>
          <form class="form-inline justify-content-between shadow" action="#">
            <input type="text" class="form-control mb-2 mr-sm-2" name="title" id="title" placeholder="Title">
            <input type="text" class="form-control mb-2 mr-sm-2" name="name" id="name" placeholder="Name">
            <input type="email" class="form-control mb-2 mr-sm-2" name="email" id="email" placeholder="Email">
            <input type="textarea" class="form-control mb-2 mr-sm-2" name="message" id="message" placeholder="Message">
            <input type="submit" class="ask-form__btn btn" value="Send">
        </div>
      </div>
      <!-- ask-form -->

      <div class="row secondary-posts">
        <div class="col-md-6">
          <p class="secondary-posts__title">Leisure</p>
          <?php
$_smarty_tpl->tpl_vars['__smarty_section_post'] = new Smarty_Variable(array());
if (true) {
for ($__section_post_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] = 0; $__section_post_2_iteration <= 2; $__section_post_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']++){
?>
            <a href="./?controller=post&id=<?php echo $_smarty_tpl->tpl_vars['rsLeisurePosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['id'];?>
" class="secondary-posts__post">
              <p class="secondary-posts__post-title"><?php echo $_smarty_tpl->tpl_vars['rsLeisurePosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['name'];?>
</p>
              <div class="secondary-posts__post-card shadow">
                <img src="img/<?php echo $_smarty_tpl->tpl_vars['rsLeisurePosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['preview_image'];?>
" srcset="img/<?php echo $_smarty_tpl->tpl_vars['rsLeisurePosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['preview_image_2x'];?>
 2x, img/<?php echo $_smarty_tpl->tpl_vars['rsLeisurePosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['preview_image_3x'];?>
 3x">
                <p class="secondary-posts__post-date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsLeisurePosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['date'],"%B %d, %Y");?>
</p>
                <p class="secondary-posts__post-tag">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsLeisurePosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['tags'], 'item');
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
                <p class="secondary-posts__post-text"><?php echo $_smarty_tpl->tpl_vars['rsLeisurePosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['description'];?>
</p>
              </div>
            </a>
          <?php
}
}
?>

        </div>
        <div class="col-md-6">
          <p class="secondary-posts__title">Judaism</p>

          <?php
$_smarty_tpl->tpl_vars['__smarty_section_post'] = new Smarty_Variable(array());
if (true) {
for ($__section_post_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] = 0; $__section_post_3_iteration <= 2; $__section_post_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']++){
?>
            <a href="./?controller=post&id=<?php echo $_smarty_tpl->tpl_vars['rsJudaismPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['id'];?>
" class="secondary-posts__post">
              <p class="secondary-posts__post-title"><?php echo $_smarty_tpl->tpl_vars['rsJudaismPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['name'];?>
</p>
              <div class="secondary-posts__post-card shadow">
                <img src="img/<?php echo $_smarty_tpl->tpl_vars['rsJudaismPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['preview_image'];?>
" srcset="img/<?php echo $_smarty_tpl->tpl_vars['rsJudaismPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['preview_image_2x'];?>
 2x, img/<?php echo $_smarty_tpl->tpl_vars['rsJudaismPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['preview_image_3x'];?>
 3x">
                <p class="secondary-posts__post-date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsJudaismPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['date'],"%B %d, %Y");?>
</p>
                <p class="secondary-posts__post-tag">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsJudaismPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['tags'], 'item');
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
                <p class="secondary-posts__post-text"><?php echo $_smarty_tpl->tpl_vars['rsJudaismPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['description'];?>
</p>
              </div>
            </a>
          <?php
}
}
?>

        </div>
      </div>
      <!-- secondary-posts -->

    </div>
<?php }
}
