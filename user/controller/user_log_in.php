<?php
    // $path = $_SERVER['DOCUMENT_ROOT'];
    // $path .= project_dir . "/user/model/accounts/get.php";
    // $ini_array = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . '/config.ini');
    // echo $_SERVER['DOCUMENT_ROOT'] . project_dir . '/config.ini';
    // echo __DIR__;
    // echo realpath('../model/accounts/get.php');
    // $path = $_SERVER['DOCUMENT_ROOT'];
    // $path .= project_dir . "/user/model/db.php";
    // echo realpath(__DIR__ . '/../model/accounts/get.php');
    // exit(1);
    require_once realpath(__DIR__ . '/../model/accounts/get.php');
    // exit(1);
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        if(!empty(trim($_POST["email"]))) {
            $email = trim($_POST["email"]);
        } else {
            $email_err = true;
        }
        
        if(!empty(trim($_POST["password"]))) {
            $password = hash('sha256', trim($_POST["password"]));
        } else {
            $pass_err = true;
        }

        $user = getUsers($email, $password);

        if($user->num_rows != 0) {
            foreach($user as $u) {
                session_start();

                $_SESSION["loggedin"] = true;
                $_SESSION["id"] = $u["id"];
                $_SESSION["type"] = $u["type"]; 

            }
        } else {
            echo 'User not found';
        }

        header('Location: ' . $_POST["url"]);

    }
?>