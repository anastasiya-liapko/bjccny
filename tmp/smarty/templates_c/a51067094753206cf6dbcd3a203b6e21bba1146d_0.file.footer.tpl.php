<?php
/* Smarty version 3.1.32, created on 2018-09-13 22:51:44
  from '/Applications/MAMP/htdocs/bjcc/views/default/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9aea007fac44_38043391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a51067094753206cf6dbcd3a203b6e21bba1146d' => 
    array (
      0 => '/Applications/MAMP/htdocs/bjcc/views/default/footer.tpl',
      1 => 1536879097,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9aea007fac44_38043391 (Smarty_Internal_Template $_smarty_tpl) {
?>    </div>
    <!-- main -->

    <div class="footer">
      <div class="container">
        <div class="footer__lists row justify-content-between m-sm-0">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsFooterCategories']->value, 'item', false, NULL, 'footerCategories', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <div class="col-md-1.6">
              <ul>
                <li><a href="./?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="footer__title"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></li>
                <?php if (isset($_smarty_tpl->tpl_vars['item']->value['children'])) {?>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'itemChild');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
?>
                    <li><a href="./?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a></li>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
              </ul>
            </div>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <!-- footer__lists -->

        <div class="footer__contacts row justify-content-center justify-content-sm-around m-sm-0">
            <p class="footer__contacts-address col-7 col-sm-3 text-center"><span>New York, Adress 324324</span></p>
            <p class="footer__contacts-mail col-7 col-sm-3 text-center"><span>default@mail.com</span></p>
            <p class="footer__contacts-phone col-7 col-sm-3 text-center"><span>+329830282-00-0237</span></p>
        </div>
        <!-- footer__contacts -->

        <div class="footer__info row justify-content-sm-between align-items-center m-sm-0">
          <p class="footer__info-alefdev col-12 col-sm-1 p-0 text-center text-sm-left">Alefdev</p>
          <p class="col-12 col-sm-1 text-center">All rights reserved</p>
          <p class="col-12 col-sm-3 col-md-2 p-0 text-center text-sm-right">New users today : 34434</p>
        </div>
        <!-- footer__info-->

      </div>
    </div>
    <!-- footer -->

  </div>
  <?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"><?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"><?php echo '</script'; ?>
>
  
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/swiper.js"><?php echo '</script'; ?>
>
  
  </body>

</html><?php }
}
