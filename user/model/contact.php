<?php 
    include 'db.php';

    function sendContactForm($name, $email, $subject, $message) {
        $db = db_connect();

        $sql = 
        "INSERT INTO contact_forms 
        SET name = '$name', 
        email = '$email', 
        subject = '$subject', 
        message = '$message',
        date_added = NOW()";

        $res = $db -> query($sql);
    }
?>