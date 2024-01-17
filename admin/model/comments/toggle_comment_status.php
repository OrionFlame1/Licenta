<?php 
    include("db.php");

    $db = db_connect();

    $id = $_POST['id'];
    $updated_status = $_POST['status'];

    $sql = "UPDATE comments
    SET status = $updated_status
    WHERE id = $id";

    if (mysqli_query($db, $sql)) {
        $query = $sql;
        echo $query;
    } else {
        echo "Error updating status: " . mysqli_error($db);
    }
    
?>