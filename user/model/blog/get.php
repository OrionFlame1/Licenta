<?php

    function getArticles($limit = false) {
        $db = db_connect();
        $sql = "SELECT CONCAT(LEFT(content, 700), '...') AS content, id, date_added,
        (SELECT COUNT(*) 
        FROM comments 
        WHERE id_article = articles.id AND comments.status = 1) 
        AS comments_count 
        FROM articles 
        ORDER BY date_added DESC";
        
        if ($limit) {
            $sql .= " LIMIT $limit";
        }

        $articles = $db -> query($sql);
        
        return $articles;
    }

    function getArticleByID($id) {
        $db = db_connect();
        $article = $db -> query(
            "SELECT * 
            FROM articles 
            WHERE id = " . $id
        ) -> fetch_assoc();
        return $article;
    }

    function getCommentsByArticleID($id) {
        $db = db_connect();
        $comments = $db -> query(
            "SELECT content, date_added, 
            (SELECT name FROM accounts 
            WHERE id = c.id_utilizator) AS name 
            FROM comments c 
            WHERE id_article =  $id
            AND status = 1  
            ORDER BY date_added DESC"
        );
        return $comments;
    }

    function getAccountStatus($id) {
        $db = db_connect();
        $status = $db -> query(
            "SELECT status 
            FROM accounts 
            WHERE id = " . $id
        )->fetch_assoc();
        return $status["status"];
    }
?>