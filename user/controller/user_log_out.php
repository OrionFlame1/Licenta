<?php 
    $ini = parse_ini_file("../../config.ini");
    session_start();
    unset($_SESSION);
    session_destroy();
    session_write_close();
    header('Location: ' . $_POST["url"]);
    die;
?>