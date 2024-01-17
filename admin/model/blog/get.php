<?php
    include("db.php");

    function getArticles() {
        $db = db_connect();
        $articles = $db -> query(
            "SELECT *, 
            (SELECT COUNT(*) FROM comments 
            WHERE comments.id_article = articles.id) AS count 
            FROM articles ORDER BY date_added DESC");
        
        return $articles;
    }
?>