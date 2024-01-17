<?php 
    include("db.php");
    $db = db_connect();

    $db -> query(
        "DELETE FROM accounts 
        WHERE id = " . $_GET['id']);

    $db -> query(
        "DELETE FROM comments 
        WHERE id_utilizator = " . $_GET['id']);

?>
