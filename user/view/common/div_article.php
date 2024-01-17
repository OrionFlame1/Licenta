<a class="text-decoration-none article position-relative" href="article?id=<?php echo $article["id"]; ?>">

    <div class="row bg-white rounded p-4 mt-4 article_content"> 
        <?php echo $article["content"]; ?> 
    </div>

    <div class="overlay mt-4 p-4">
        <p class="text-secondary bottom-0 start-0 position-absolute"><?php echo $article["comments_count"]; ?> comentarii</p>
        <p class="text-secondary bottom-0 end-0 position-absolute">Postat pe <?php echo $article["date_added"]; ?></p>
    </div>

</a>