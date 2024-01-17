<?php
    include("db.php");

    function getUsers() {
        $db = db_connect();
        $users = $db -> query(
            "SELECT id, name, date_created, email_address, type, status, 
            (SELECT COUNT(*) FROM comments 
            WHERE comments.id_utilizator = accounts.id) AS count 
            FROM accounts WHERE NOT type = 'admin'");
        
        return $users;
    }
?>

