<?php 
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        include("db.php");
        $db = db_connect();

        $article_id = $_GET['id'];

        $sql = "DELETE FROM articles WHERE id = $article_id";

        $db -> query($sql);

        $sql = "DELETE FROM comments WHERE id_article = $article_id";

        $db -> query($sql);

        return json_encode($sql);
        
    }
?>
