<?php

/**
 * Модель для таблицы категорий (categories)
 */

/**
 * Получить дочерние категории для категории $catId
 * 
 * @param integer $catId ID категории
 * @return array массив дочерних категорий
 */
function getChildrenForCat($catId, $db) 
{
    $sql = "SELECT
                * 
            FROM 
                `categories` 
            WHERE 
                `parent_id` = '{$catId}'";
                
    $rs = mysqli_query($db, $sql);
    
    return createSmartyRsArray($rs);
}

/**
 * Получить главные категории с привязками дочерних для шапки
 * 
 * @param object $db база данных
 * @return array массив категорий
 */
function getAllMainCatsWithChildren($db) 
{
    $sql = "SELECT
                * 
            FROM 
                `categories` 
            WHERE 
                `parent_id` = 0";
    
    $rs = mysqli_query($db, $sql);
    
    $smartyRs = array();
    
    while ($row = mysqli_fetch_assoc($rs)) {
        
        $rsChildren = getChildrenForCat($row['id'], $db);
        
        if($rsChildren) {
            $row['children'] = $rsChildren;
        }
        
        $smartyRs[] = $row;
    }

    return $smartyRs;
}

/**
 * Получить главные категории с привязками дочерних для подвала
 * 
 * @param array $rsCategories массив категорий шапки
 * @return array массив категорий для подвала
 */
function getAllMainCatsWithChildrenForFooter($rsCategories) 
{
    $smartyRs = array();
    
    foreach ($rsCategories as $i => $item) {
        
        if($item['name'] !== 'Home' && 
           $item['name'] !== 'Service time' && 
           $item['name'] !== 'Announcements') {
            $smartyRs[$i] = $item;
        }
        
    }
    
    return $smartyRs;
}

/**
 * Получить данные категории по id
 * 
 * @param integer $catId ID категории
 * @param object $db база данных
 * @return array массив - строка категории
 */
function getCatByIdWithChildren($catId, $db)
{
    $catId = intval($catId);
    $sql = "SELECT 
                *
            FROM
                `categories`
            WHERE
                `id` = '{$catId}'";
                
    $rs = mysqli_query($db, $sql);
    
    $smartyRs = array();
    
    while ($row = mysqli_fetch_assoc($rs)) {
        $rsChildren = getChildrenForCat($row['id'], $db);
        
        if($rsChildren) {
            $row['children'] = $rsChildren;
        }
        
        $smartyRs[] = $row;
    }
    
    return $smartyRs;       
}