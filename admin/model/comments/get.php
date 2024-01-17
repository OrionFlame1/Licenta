<?php 
    include 'db.php';

    function getCommentsByUserID($id) {
        $db = db_connect();
        $comments = $db -> query(
            "SELECT * FROM comments 
            WHERE id_utilizator = $id
            ORDER BY date_added DESC");
        
        return $comments;
    }

    function getAccountNameByID($id) {
        $db = db_connect();
        $name_id = $db -> query(
            "SELECT name, id FROM accounts 
            WHERE id = $id"
        )->fetch_assoc();
        
        return $name_id;
    }

    function getCommentsByArticleID($id) {
        $db = db_connect();
        $comments = $db -> query(
            "SELECT * FROM comments 
            WHERE id_article = $id
            ORDER BY date_added DESC");
        
        return $comments;
    }
?>