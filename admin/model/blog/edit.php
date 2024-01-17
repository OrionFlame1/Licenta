<?php 
    include("db.php");

    function editArticle($content, $id) {
        $db = db_connect();
        
        $sql = "UPDATE articles SET content = '" . $content . "' WHERE id = " . $id;

        $db -> query($sql);
    }
?>


