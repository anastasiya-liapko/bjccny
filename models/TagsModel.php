<?php

/**
 * Модель для таблицы тегов (tags)
 */

/**
 * Получаем теги для поста $postId
 * 
 * @param integer $postId ID поста
 * @return array массив тегов
 */
function getPostTags($postId, $db) 
{
    $sql = "SELECT
                * 
            FROM 
                `tags` 
            WHERE 
                `post_id` = 1 
            ORDER BY 
                `id`";
    
    $rs = mysqli_query($db, $sql);
    
    return createSmartyRsArray($rs);
}
