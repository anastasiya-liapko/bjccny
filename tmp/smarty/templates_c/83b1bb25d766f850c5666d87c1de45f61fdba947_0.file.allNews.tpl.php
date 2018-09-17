<?php
/* Smarty version 3.1.32, created on 2018-09-13 21:45:13
  from '/Applications/MAMP/htdocs/bjcc/views/default/allNews.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9ada69e67f88_28668055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83b1bb25d766f850c5666d87c1de45f61fdba947' => 
    array (
      0 => '/Applications/MAMP/htdocs/bjcc/views/default/allNews.tpl',
      1 => 1536875109,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9ada69e67f88_28668055 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/bjcc/library/Smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
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
$_smarty_tpl->tpl_vars['__smarty_section_post'] = new Smarty_Variable(array());
if (true) {
for ($__section_post_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] = 0; $__section_post_0_iteration <= 6; $__section_post_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']++){
?>
      <div class="col-md-6">
      
        <a href="./?controller=post&id=<?php echo $_smarty_tpl->tpl_vars['rsPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['id'];?>
" class="secondary-posts__post">
          <p class="secondary-posts__post-title"><?php echo $_smarty_tpl->tpl_vars['rsPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['name'];?>
</p>
          <div class="secondary-posts__post-card">
            <img src="img/<?php echo $_smarty_tpl->tpl_vars['rsPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['preview_image'];?>
" srcset="img/<?php echo $_smarty_tpl->tpl_vars['rsPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['preview_image_2x'];?>
 2x, img/<?php echo $_smarty_tpl->tpl_vars['rsPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['preview_image_3x'];?>
 3x">
            <p class="secondary-posts__post-date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['date'],"%B %d, %Y");?>
</p>
            <p class="secondary-posts__post-text"><?php echo $_smarty_tpl->tpl_vars['rsPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['description'];?>
</p>
          </div>
        </a>

      </div>
      <?php
}
}
?>

    </div>
    <!-- secondary-posts -->

  </div>
<?php }
}
