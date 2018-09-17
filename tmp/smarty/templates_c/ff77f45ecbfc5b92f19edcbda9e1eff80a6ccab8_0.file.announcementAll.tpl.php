<?php
/* Smarty version 3.1.32, created on 2018-09-13 20:14:28
  from '/Applications/MAMP/htdocs/bjcc/views/default/announcementAll.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9ac5245af960_05140916',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff77f45ecbfc5b92f19edcbda9e1eff80a6ccab8' => 
    array (
      0 => '/Applications/MAMP/htdocs/bjcc/views/default/announcementAll.tpl',
      1 => 1536868282,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9ac5245af960_05140916 (Smarty_Internal_Template $_smarty_tpl) {
?>  
  <div class="main">
  <div class="container announcement-all">

    <div class="page row justify-content-end m-0 pt-5">
      <p class="page-title d-inline-block col-12 m-0 mb-4 pl-0 pt-3 text-left"><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</p>
    </div>

    <div class="page-content">  
      <div class="announcement-all__posts row m-0 mb-4 justify-content-between">
        <?php
$_smarty_tpl->tpl_vars['__smarty_section_post'] = new Smarty_Variable(array());
if (true) {
for ($__section_post_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] = 0; $__section_post_0_iteration <= 12; $__section_post_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']++){
?>
        <a href="./?controller=post&id=<?php echo $_smarty_tpl->tpl_vars['rsPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['id'];?>
" class="col-12 col-md-3 p-0 mb-4 pr-md-4">
          <img src="img/<?php echo $_smarty_tpl->tpl_vars['rsPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['preview_image'];?>
" srcset="img/<?php echo $_smarty_tpl->tpl_vars['rsPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['preview_image_2x'];?>
 2x, img/<?php echo $_smarty_tpl->tpl_vars['rsPosts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_post']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_post']->value['index'] : null)]['preview_image_3x'];?>
 3x">
        </a>
        <?php
}
}
?>
      </div>
    </div>     
  </div>

  </div><?php }
}
