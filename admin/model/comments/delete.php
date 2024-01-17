<?php 
    include("db.php");
    $db = db_connect();

    // $article_id = $_GET['id'];

    $res = $db -> query(
        "DELETE FROM comments 
        WHERE id = " . $_GET['id']);

    return $res;

?>
