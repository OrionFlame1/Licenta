<div class="bg-white rounded my-2 position-relative p-3">
    <?php 
        echo $article["content"];
    ?>
    <div class="position-absolute end-0 top-0">
        <p>
            <?php 
                echo "Postat pe " . $article['date_added'];
            ?>
        </p>
    </div>
</div>
