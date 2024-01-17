<div class="bg-white rounded pt-4 px-4 mt-4 position-relative" id="<?php echo $article["id"]; ?>">
    <button id="delete<?php echo $article["id"]; ?>" class="btn btn-danger position-absolute top-0 end-0 translate-middle-y" style="right: -18px !important;">
        <i class="bi bi-x-lg"></i>
    </button>

    <button type="button" id="<?php echo $article["id"]; ?>" data-bs-toggle="modal" data-bs-target="#editModal" class="btn btn-warning position-absolute top-0 end-0 translate-middle-y" style="right: 36px !important;">
        <i class="bi bi-pencil"></i>
    </button>
    <a href="../comments/comments_management.php?article_id=<?php echo $article["id"]; ?>">
        <button class="btn btn-success position-absolute top-0 end-0 translate-middle-y" style="right: 90px !important;"><i class="bi bi-chat-left-text"></i></button>
    </a>
    <div id="content">
        <?php echo $article["content"]; ?>
    </div>
    <div class="row">
        <p class="text-secondary text-start col-6">Număr de comentarii: <?php echo $article["count"]; ?></p>
        <p class="text-secondary text-end col-6">Postat pe <?php echo $article["date_added"]; ?></p>
    </div>
</div>
<script>
    $('button[id=delete<?php echo $article["id"]; ?>]').click(function() {
        $.ajax({  
        type: 'GET',
        url: '../../model/blog/delete.php', 
        data: { id: $("#<?php echo $article["id"]; ?>").attr("id") },
        success: function(response) {
            console.log(response);
        }
        });
        $('div #<?php echo $article["id"]; ?>').remove();
    });

    $('button[id=<?php echo $article["id"]; ?>]').click(function() {
        $('.modal-title b').text("<?php echo $article["id"]; ?>");
        $('#edit').summernote('code', $("div[id=<?php echo $article["id"]; ?>] div[id=content]").html());
        $('.modal-body input[type=hidden]').val(<?php echo $article["id"]; ?>);
    });
    
</script>