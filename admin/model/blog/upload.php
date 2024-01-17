<?php
    include("db.php");

    function addArticle($content) {
        $db = db_connect();
        $insert_article = $db -> query(
            "INSERT INTO articles
             SET content = '" . $content . "', date_added = NOW()");
    }
?>