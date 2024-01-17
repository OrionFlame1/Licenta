<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../common/header.php'; ?>
    <title>Dashboard</title>
</head>

<body>
<!-- sidebar -->
<?php include '../common/sidebar.php'; ?>
<!--  -->

<div class="container m-auto justify-content-center">

    <h1 class="text-center">
        <?php
            include '../../model/comments/get.php'; 
            if (isset($_GET["user_id"])) {
                $name_id = getAccountNameByID($_GET["user_id"]);
                $comments = getCommentsByUserID($_GET["user_id"]);
                echo "Toate comentariile de la utilizatorul " . $name_id["name"] . ", ID: " . $name_id["id"];
            }
            else {
                $comments = getCommentsByArticleID($_GET["article_id"]);
                echo "Toate comentariile de la articolul cu ID: " . $_GET["article_id"];
            }
        ?>
    </h1>

    <?php 
        foreach($comments as $comment) {
            include 'comment.php';
        }
    ?>

</div>
</body>
</html>
