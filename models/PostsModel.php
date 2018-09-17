<?php

/**
 * Модель для таблицы постов (posts)
 */

/**
 * Получаем последние добавленные посты для категории $catId
 * 
 * @param integer $catId ID категории
 * @param object $db база данных
 * @return array массив постов для категории $catId
 */
function getPostsByCat($catId, $db) 
{
    $catId = intval($catId);
    
    $sql = "SELECT 
                *
            FROM 
                `posts`
            LEFT JOIN
                (SELECT 
                    `image`,
                    `image_2x`,
                    `image_3x`,
                    `preview_image`,
                    `preview_image_2x`,
                    `preview_image_3x`,
                    `post_id`
                FROM 
                    `images`) as `images`
            ON
                (`posts`.`id`=`images`.`post_id`)
            LEFT JOIN
                (SELECT
                    `title_1`,
                    `title_2`,
                    `paragraph_1`,
                    `paragraph_2`,
                    `post_id` 
                FROM 
                    `content_text`) as `content_text`
            ON
                (`posts`.`id`=`content_text`.`post_id`)
            LEFT JOIN
                (SELECT 
                    `collected`,
                    `target`, 
                    `post_id` 
                FROM 
                    `donation_data`) as `donation_data`
            ON
                (`posts`.`id`=`donation_data`.`post_id`)
            WHERE 
                `posts`.`category_id` = {$catId}
            ORDER BY 
                `posts`.`id` DESC
            LIMIT
                12";
             
    $rs = mysqli_query($db, $sql);
    
    return createSmartyRsArrayWithTags($rs, $db);
}

/**
 * Получаем данные поста по ID
 * 
 * @param integer $itemId ID поста
 * @param object $db база данных
 * @return array массив данных поста
 */
function getPostById($itemId, $db) 
{
    $itemId = intval($itemId);
    
    $sql = "SELECT 
                *
            FROM 
                `posts`
            LEFT JOIN
                `images`
            ON
                `images`.`post_id`=`posts`.`id`
            LEFT JOIN
                `gallery_images`
            ON
                `gallery_images`.`post_id`=`posts`.`id`
            LEFT JOIN
                `content_text`
            ON
                `content_text`.`post_id`=`posts`.`id`
            LEFT JOIN
                `donation_data`
            ON
                `donation_data`.`post_id`=`posts`.`id`
            WHERE 
                `posts`.`id` = {$itemId}";
    
                
    $rs = mysqli_query($db, $sql);
    
    return createSmartyRsArrayWithTags($rs, $db);
}