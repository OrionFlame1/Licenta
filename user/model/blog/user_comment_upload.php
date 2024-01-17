<?php 
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/user/model/db.php";
    // echo $path;
    require "$path";

    function addComment($comment) {
        $db = db_connect();
        $add_comment = $db -> query(
            "INSERT INTO comments
             SET id_article = '" . $comment["article_id"] . "'
             , content = '" . $comment["content"] . "'
             , date_added = NOW()
             , id_utilizator = " . $comment["user_id"]);
    }
?>