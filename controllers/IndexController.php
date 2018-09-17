<?php

/**
 * Контроллер главной страницы
 */

// Подключаем модели
include_once 'models/CategoriesModel.php';
include_once 'models/TagsModel.php';
include_once 'models/PostsModel.php';

/**
 * Формирование главной страницы сайта
 * 
 * @param object $smarty шаблонизатор
 */
function indexAction($smarty, $db) {
    $rsCategories = getAllMainCatsWithChildren($db);
    $rsFooterCategories = getAllMainCatsWithChildrenForFooter($rsCategories);
    $rsMainPosts = getPostsByCat(1, $db);
    $rsLeisurePosts = getPostsByCat(2, $db);
    $rsJudaismPosts = getPostsByCat(3, $db);
    
    $smarty->assign('pageTitle', 'BJCC');
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsFooterCategories', $rsFooterCategories);
    $smarty->assign('rsMainPosts', $rsMainPosts);
    $smarty->assign('rsLeisurePosts', $rsLeisurePosts);
    $smarty->assign('rsJudaismPosts', $rsJudaismPosts);
    
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'slider');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}