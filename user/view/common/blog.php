<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'user/view/common/header.php'; ?>
    <title>Blog</title>
</head>

<body>
    <!-- navbar -->
    <?php include 'user/view/common/navbar.php'; ?>
    
    <!-- content full of articles -->
    <div class="container">
        <h1 class="text-center">Cele mai noi articole</h1>
        <?php
            require 'user/model/blog/get.php';
            $articles = getArticles();
            foreach($articles as $article) {
                include 'div_article.php';
            }
        ?>
    </div>

    <!-- footer -->
    <?php include 'user/view/common/footer.php'; ?>
</body>

</html>
