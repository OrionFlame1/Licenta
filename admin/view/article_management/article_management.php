<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../common/header.php'; ?>
    <title>Blog Control</title>
</head>

<body>
<!-- sidebar -->
<?php include '../common/sidebar.php'; ?>
<!--  -->
<div class="container mt-5">
  <form action="../../controller/post_article.php" method="post">
    <textarea name="desc" id="add" cols="30" rows="10"></textarea>
      <script>
        $(document).ready(function() {
          $('#add').summernote(
            {height: 500}
          );
          $('.dropdown-toggle').dropdown();
        });
      </script>
    <input class="btn btn-primary mt-3" type="submit">
  </form>
</div>
    <script src="../res/summernote/summernote.js"></script>

  <div class="container articles mb-5">
    <?php 
      require '../../model/blog/get.php';
      $articles = getArticles();
      foreach($articles as $article) {
        include 'article.php';
      }
    ?>
  </div>

  <?php include 'edit_modal.php'; ?>

</body>

</html>
