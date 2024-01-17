<?php 
    require '../model/contact.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
        sendContactForm($name, $email, $subject, $message);
    }

    header('Location: ../../about');

?>