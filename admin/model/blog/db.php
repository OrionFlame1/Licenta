<?php
  function db_connect() {
    $ini_array = parse_ini_file(realpath($_SERVER["DOCUMENT_ROOT"]) . '/config.ini');
    // $localhost = "localhost";
    // $user = "root";
    // $password = "";
    // $db_name = "turism";
    $mysqli = new mysqli($ini_array["host"],$ini_array["user"],$ini_array["password"],$ini_array["db_name"]);
    
    if ($mysqli -> connect_errno) {
      echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
      exit();
    }
    return $mysqli;
  }

  // $localhost = "localhost:3306";
  // $user = "root";
  // $password = "Zmeurica_cool12";
  // $db_name = "turism";
  // $mysqli = new mysqli($localhost,$user,$password,$db_name);

  // if ($mysqli -> connect_errno) {
  //   echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  //   exit();
  // }
  
//   if ($mysqli->ping()) {
//     printf ("Our connection is ok!\n");
// } else {
//     printf ("Error: %s\n", $mysqli->error);
// }

  // $results = $mysqli -> query("SELECT * FROM articles");
  // print "<pre>";
  // print_r($results->num_rows);
  // print "</pre>";

?>