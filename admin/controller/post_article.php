<?php
    require '../model/blog/upload.php';
    $blog_content = $_POST["desc"];
    if(!empty($blog_content)) 
        addArticle($blog_content);

    header("Location: ../view/article_management/article_management.php");
?>