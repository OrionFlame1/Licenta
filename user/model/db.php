<?php
  function db_connect() {
    // $path = $_SERVER['DOCUMENT_ROOT'];
    // $path .= project_dir . "config.ini";
    // $ini_array = parse_ini_file("$path");
    $ini_array = parse_ini_file(realpath($_SERVER["DOCUMENT_ROOT"]) . '/config.ini');
    // echo realpath($_SERVER["DOCUMENT_ROOT"]) . '/projects/licenta/config.ini';
    
    // define('host', $ini_array["host"]);
    // define('user', $ini_array["user"]);
    // define('password', $ini_array["password"]);
    // define('db_name', $ini_array["db_name"]);

    $mysqli = new mysqli($ini_array["host"], $ini_array["user"], $ini_array["password"], $ini_array["db_name"]);
    
    if ($mysqli -> connect_errno) {
      echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
      exit();
    }
    return $mysqli;
  }
?>