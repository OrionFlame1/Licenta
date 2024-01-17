<?php
    include("db.php");

    function countAccounts() {
        $db = db_connect();
        $count = $db -> query(
            "SELECT COUNT(*) AS count 
            FROM accounts
            ")->fetch_assoc();

        return $count["count"];
    }

    function countArticles() {
        $db = db_connect();
        $count = $db -> query(
            "SELECT COUNT(*) AS count 
            FROM articles
            ")->fetch_assoc();

        return $count["count"];
    }

    function countComments() {
        $db = db_connect();
        $count = $db -> query(
            "SELECT COUNT(*) AS count 
            FROM comments
            ")->fetch_assoc();

        return $count["count"];
    }

    function getLatestArticles() {
        $db = db_connect();
        $articles = $db -> query(
            "SELECT * FROM articles 
            ORDER BY date_added 
            DESC LIMIT 5");

        return $articles;
    }

    function getLatestComments() {
        $db = db_connect();
        $comments = $db -> query(
            "SELECT *,
            (SELECT name FROM accounts 
            WHERE accounts.id = comments.id_utilizator) AS name 
            FROM comments 
            WHERE status = 1
            ORDER BY date_added DESC
            LIMIT 10");

        return $comments;
    }
?>