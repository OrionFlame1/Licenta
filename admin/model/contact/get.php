<?php 
    include 'db.php';

    function getContactForms(){
        $db = db_connect();

        $sql = "SELECT * FROM contact_forms";

        $forms = $db -> query($sql);

        return $forms;
    }
?>