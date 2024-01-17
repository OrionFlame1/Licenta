<div class="bg-white rounded my-2 position-relative p-2 text-decoration-none">
    <?php 
        echo $comment["content"];
    ?>
    <div class="position-absolute end-0 top-0">
        <p>
            <?php 
                echo "De <a href=\"../comments/comments_management.php?id=" . $comment["id_utilizator"] . "\">" . $comment['name'] . "</a> postat pe " . $comment['date_added'];
            ?>
        </p>
    </div>
</div>