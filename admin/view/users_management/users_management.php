<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../common/header.php'; ?>
    <title>Users Management</title>
</head>

<body>
    <!-- sidebar -->
<?php include '../common/sidebar.php'; ?>
<div class="container">
    <?php 
        include '../../model/users/get.php';
        $users = getUsers();
        foreach ($users as $user) {
            include 'user.php';
        }
    ?>
</div>
</body>

</html>