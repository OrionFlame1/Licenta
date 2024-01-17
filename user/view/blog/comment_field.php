<h2 class="mt-5">Lasă un comentariu</h2>
<form class="mt-2" action="user/controller/user_comment.php" method="post">
    <textarea class="user_comment_area" name="content"></textarea>
    <input type="hidden" name="user_id" value="<?php echo $_SESSION["id"]; ?>"/>
    <input type="hidden" name="article_id" value="<?php echo $_GET['id']; ?>"/>
    <input class="btn btn-primary mt-3" type="submit">
</form>