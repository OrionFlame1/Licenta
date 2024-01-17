<?php
    $dir=realpath($_SERVER["DOCUMENT_ROOT"]) . '/user/model/db.php';
    // echo $dir;
    // exit(1);
    require "$dir";
    
    function createAccount($username, $email, $password) {
        $hashed_password = hash('sha256', $password);

        $db = db_connect();

        $res = $db -> query(
            "INSERT INTO accounts 
            SET name = '" . $username . "', 
            date_created = NOW(), 
            email_address='" . $email . "', 
            password = '" . $hashed_password . "', 
            type = 'user', 
            status = 1");

        return $res;
    }

    function getUsers($email, $pass) {
        $db = db_connect();
        $users = $db -> query(
            "SELECT * FROM accounts 
            WHERE email_address = '" . $email . "' AND password = '" . $pass . "'");
        
        return $users;
    }

    function getUserWithUsernameOrEmail($username, $email) {
        $db = db_connect();
        $users = $db -> query("SELECT * FROM accounts WHERE name = '" . $username . "' OR email_address = '" . $email . "'");

        return $users;
    }

    function getUsernameByID($id) {
        $db = db_connect();
        $username = $db -> query("SELECT name FROM accounts WHERE id = $id")->fetch_assoc();

        return $username;
    }
?>