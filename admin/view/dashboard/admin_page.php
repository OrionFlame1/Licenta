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

<div class="mt-5 container row align-items-top m-auto justify-content-around text-white">
    <?php include '../../model/dashboard/get.php'; ?>
    <div class="col-3 bg-primary p-3">
        <h2>
            Total Accounts:<br>
            <?php 
                $count = countAccounts();
                echo $count;

            ?>
        </h2>
    </div>
    <div class="col-3 bg-primary p-3">
        <h2>
            Total Articles:<br>
            <?php 
                $count = countArticles();
                echo $count;

            ?>
        </h2>
    </div>
    <div class="col-3 bg-primary p-3">
        <h2>
            Total Comments:<br>
            <?php 
                $count = countComments();
                echo $count;

            ?>
        </h2>
    </div>
    <div class="w-100 mt-5"></div>
    <div class="col-5">
        <div class="glass text-dark p-2 mb-5" style="zoom: 0.7">
            <h2 class="text-center">
                Cele mai noi articole:
            </h2>
            <?php 
                $articles = getLatestArticles();
                foreach($articles as $article)
                    include 'mini_article.php';
            ?>
        </div>
    </div>
    <div class="col-5">
        <div class="glass text-dark p-2 mb-5" style="zoom: 0.7">
            <h2 class="text-center">
                Cele mai noi comentarii:
            </h2>
            <?php 
                $comments = getLatestComments();
                foreach($comments as $comment)
                    include 'mini_comment.php';
            ?>
        </div>
    </div>

</div>

</body>

</html>
