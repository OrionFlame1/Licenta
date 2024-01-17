<?php
    require '../model/blog/edit.php';
    
    $blog_content = $_POST["desc"];
    $id = $_POST["id"];
    editArticle($blog_content, $id);

    header("Location: ../view/article_management/article_management.php");
?>

