<?php

/**
 * CategoryController.php
 * 
 * контроллер страницы категории (/category/1)
 */

// Подключаем модули
include_once 'models/CategoriesModel.php';
include_once 'models/TagsModel.php';
include_once 'models/PostsModel.php';

/**
 * Формирование страницы категории
 * 
 * @param object $smarty шаблонизатор
 */
function indexAction($smarty, $db) {
    $catId = isset($_GET['id']) ? $_GET['id'] : NULL;
    
    if( ! $catId) {
        exit();
    }
  
    $rsCategory = getCatByIdWithChildren($catId, $db);
    $rsPosts = getPostsByCat($catId, $db);
   
    $rsCategories = getAllMainCatsWithChildren($db);
    $rsFooterCategories = getAllMainCatsWithChildrenForFooter($rsCategories);
    
    $smarty->assign('pageTitle', $rsCategory[0]['name']);
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsFooterCategories', $rsFooterCategories);
    $smarty->assign('rsCategory', $rsCategory);
    $smarty->assign('rsPosts', $rsPosts);
    
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'sliderSmall');
    if ($catId == 5) {
        loadTemplate($smarty, 'allNews');
    } else if ($catId == 4) {
        loadTemplate($smarty, 'announcementAll');
    } else if ($catId == 16) {
        loadTemplate($smarty, 'makeAPayment');
    } else if ($catId == 17) {
        loadTemplate($smarty, 'paymentPolicy');
    }
    loadTemplate($smarty, 'footer');
}