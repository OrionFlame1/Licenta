<?php 

    $username = $_POST["username"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$confirm_password = $_POST["confirm_password"];


    if (!empty($username) || !empty($email) || !empty($password) || !empty($confirm_password)) {
	    if ($password !== $confirm_password) {
		    echo "Câmpul de confirmare al parolei nu se potrivește cu câmpul parolei";
	    } else {
            include '../model/accounts/get.php';
            $user_match = getUserWithUsernameOrEmail($username, $email);
            if ($user_match->num_rows == 0) {
                $res = createAccount($username, $email, $password);
                header('Location: ../../home');
            } else {
                echo "Contul cu acest nume sau email există deja.";
            }
        }
    } else {
        echo 'Completează toate câmpurile';
    }

?>
