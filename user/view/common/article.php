<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'user/view/common/header.php'; ?>
    <title>Home</title>
</head>

<body>
    <!-- header -->
    <?php include 'user/view/common/navbar.php'; ?>

    <div class="container-lg">

        <?php
            require 'user/model/blog/get.php';
            $article = getArticleByID($_GET['id']);
            echo "<div class=\"bg-white rounded p-4 mt-4\" id=" . $article["id"] . ">" 
            . $article["content"] 
            . "<p class=\"text-secondary text-end\">Posted on " . $article["date_added"] . "</p>"
            . "</div>";
        ?>

        <?php //comment_field
            if (isset($_SESSION["loggedin"]) && getAccountStatus($_SESSION["id"]) == 0) {
                include 'user/view/blog/comment_disabled.php';
            } else 
            if (isset($_SESSION["loggedin"]) && getAccountStatus($_SESSION["id"]) != 0) {
                include 'user/view/blog/comment_field.php';
            }
            else {
                include 'user/view/blog/auth_required.php';
            }
        
        ?>

        <?php 
            $comments = getCommentsByArticleID($_GET['id']);
            echo '<div class="container-sm">';
            foreach ($comments as $comment) {
                echo "<div class=\"bg-white rounded p-4 mt-2\">" 
                . $comment["content"] 
                . "<p class=\"text-secondary text-end\">Posted on " . $comment["date_added"] . " by " . $comment["name"] . "</p>"
                . "</div>";
            }
            echo '</div>';
        ?>
    </div>

    <footer>
        <?php include 'user/view/common/footer.php'; ?>
    </footer>
</body>