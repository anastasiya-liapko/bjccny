<?php

/**
 * PostController.php
 * 
 * контроллер страницы поста (/post/1)
 */

// Подключаем модули
include_once 'models/CategoriesModel.php';
include_once 'models/TagsModel.php';
include_once 'models/PostsModel.php';

/**
 * Формирование страницы поста
 * 
 * @param object $smarty шаблонизатор
 */
function indexAction($smarty, $db) {
    $itemId = isset($_GET['id']) ? $_GET['id'] : NULL;
    if( ! $itemId) {
        exit();
    }
    
    // Получаем данные поста
    $rsPost = getPostById($itemId, $db);

    // Получаем посты Read also
    $rsReadAlsoPosts = getPostsByCat($rsPost[0]['category_id'], $db);
    
    // Получаем все категории для шапки
    $rsCategories = getAllMainCatsWithChildren($db);
    // Получаем все категории для подвала
    $rsFooterCategories = getAllMainCatsWithChildrenForFooter($rsCategories);

    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsFooterCategories', $rsFooterCategories);
    $smarty->assign('rsPost', $rsPost);
    $smarty->assign('rsReadAlsoPosts', $rsReadAlsoPosts);
    
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'sliderSmall');
    if ($rsPost[0]['category_id'] == 1) {
      loadTemplate($smarty, 'newsIn');
    } else if ($rsPost[0]['category_id'] == 4) {
      loadTemplate($smarty, 'announcement');
    } else if ($rsPost[0]['category_id'] == 21) {
      loadTemplate($smarty, 'donatePayIn');
    } else if ($rsPost[0]['category_id'] == 2 
            || $rsPost[0]['category_id'] == 3
            || $rsPost[0]['category_id'] == 5) {
      loadTemplate($smarty, 'statia');
    }
    loadTemplate($smarty, 'footer');
}

