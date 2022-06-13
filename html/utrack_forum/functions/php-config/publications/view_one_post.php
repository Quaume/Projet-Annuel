<?php

$pdo = connectDB();

if(isset($_GET['id']) && !empty($_GET['id'])){
    $postId = $_GET['id'];

    $checkExistPost = $pdo->prepare('SELECT id, id_usr, author, title, category, sub_category, content, dateOfRelease FROM utrackpa_forum WHERE id = ?');
    $checkExistPost->execute(array($postId));

    if($checkExistPost->rowCount() > 0){
        $infoPost = $checkExistPost->fetch();
            
            $post_id_author = $infoPost["id_usr"];
            $post_author = $infoPost["author"];
            $post_title = $infoPost["title"];
            $post_category = $infoPost["category"];
            $post_sub_category = $infoPost["sub_category"];
            $post_content = $infoPost["content"];
            $post_date_of_release = $infoPost["dateOfRelease"];

    }else{
        $errors = 'No post found..';
    }
}else{
    $errors = 'No post found..';
}