<?php 
    include '../model/db.php';
    $db = db_connect();

    if(isset($_POST['username']) || isset($_POST['password'])) {
        $sql = "UPDATE accounts SET ";

        if(isset($_POST['username']) && !empty($_POST["username"])) {
            $sql .= "name = '" . $_POST['username'] . "'";
            unset($_SESSION["username"]);
            $_SESSION["username"] = $_POST['username'];  
        }

        if(isset($_POST['password']) && !empty($_POST["password"])) {
            if(isset($_POST['username']) && !empty($_POST["username"]))
                $sql .= ", ";
            $sql .= "password = '" . hash('sha256', $_POST['password']) . "'";
        }

        $sql .= " WHERE id = " . $_POST["id"];

        $db -> query($sql);

        // echo $sql;
        
    }

    header("Location: ../../user_dashboard");
?>