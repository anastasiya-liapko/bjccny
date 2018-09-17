<?php
/* Smarty version 3.1.32, created on 2018-09-14 08:33:32
  from '/Applications/MAMP/htdocs/bjccny.loc/views/default/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9b725ceb2606_14576844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64001efae3b04e8a50e2ccf054fc6234020e8a5f' => 
    array (
      0 => '/Applications/MAMP/htdocs/bjccny.loc/views/default/header.tpl',
      1 => 1536878990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9b725ceb2606_14576844 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>BJCC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&amp;subset=cyrillic" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css">
  </head>
  <body>

  <div style="overflow: hidden">
  <div class="header pb-2">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg col-12 position-relative">

        <a class="navbar-brand col-8 col-lg-3 m-0" href="./?controller=index&action=index">
          <img src="img/group-21.png" srcset="img/group-21@2x.png 2x">
        </a>

        <!-- <button class="search-btn position-absolute" type="button" id="search">Search
          <img src="img/search-1.svg">
        </button> -->

        <!-- <form class="search-form form-inline position-absolute d-none" name="search-form" action="#" method="post" id="search-form">
          <button class="search-form__btn btn my-sm-0" type="submit" name="send" id="search-done">Search
            <img src="img/search-1.svg">
          </button>
          <input class="search-form__input form-control mr-sm-2 position-absolute" type="text" name="search" placeholder="Искать">
        </form> -->

        <form class="search-form form-inline position-absolute">
          <button class="search-form__btn btn my-sm-0" type="submit">Search</button>
          <input class="search-form__input form-control mr-sm-2 position-absolute" type="text" name="search" placeholder="Искать">
        </form>
      
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse col-12 col-lg-9 m-0 p-0" id="navbarTogglerDemo02">

          <div class="navbar-nav col-12 col-lg-11 col-xl-11 justify-content-center justify-content-lg-between p-0">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
              <?php if ($_smarty_tpl->tpl_vars['item']->value['id'] == 1) {?>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="./?controller=index&action=index" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
                  <?php if (isset($_smarty_tpl->tpl_vars['item']->value['children'])) {?>
                    <ul class="dropdown-menu shadow">
                      <a class="dropdown-item dropdown-item_main" href="./?controller=index&action=index"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'itemChild');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
?>
                          <a class="dropdown-item" href="./?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                  <?php }?>
                </li>
              <?php } else { ?>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="./?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
                  <?php if (isset($_smarty_tpl->tpl_vars['item']->value['children'])) {?>
                    <ul class="dropdown-menu shadow">
                      <a class="dropdown-item dropdown-item_main" href="./?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'itemChild');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
?>
                          <a class="dropdown-item" href="./?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                  <?php }?>
                </li>
              <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </div>

          <div class="header-descr row justify-content-between">

            <div class="header-descr-1 row col-12 col-xl-9 justify-content-between m-0 p-0">
              <div class="col-4 m-0 p-0">
                <p class="candles m-0">Lighting 27 July 20:29 End 28 July 22:02</p>
              </div>
              <div class="col-4 m-0 p-0">
                <p class="paper m-0">The chapter of thai Vaethanan Today 15 AVA | TU-BE AV</p>
              </div>
              <div class="col-4 m-0 p-0">
                <p class="family m-0">15 AVA | TU-BE AV 26 july 20:47 end on july 27</p>
              </div>
            </div>

            <div class="header-descr-2 row col-xl-3 justify-content-between m-0 p-0">
              <div class="col-3 m-0 p-0">
                <p class="m-0 p-0"><span class="header-descr__date">27</span> <span>July</span> 2018</p>
              </div>
              <div class="col-6 m-0 p-0 row justify-content-center">
                <button>Date converter</button>
              </div>
              <div class="col-3 m-0 p-0">
                <p class="m-0 p-0"><span class="header-descr__date">15</span> <span>Ava</span> 2018</p>
              </div>
            </div>

          </div>

        </div>

      </nav>
    </div>
  </div>
  <!-- header -->


<?php }
}
