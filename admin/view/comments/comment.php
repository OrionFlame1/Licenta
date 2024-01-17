<div class="bg-white rounded p-3 row my-2" id="<?php echo $comment["id"]; ?>">
    <div class="col-8">
        <?php 
            echo $comment["content"];
        ?>
    </div>
    <div class="col-4 text-center">
        <button class="btn btn-danger" id="delete<?php echo $comment["id"]; ?>">
            Șterge comentariu
        </button>
        <button class="btn" id="toggle<?php echo $comment["id"]; ?>">
            Fetching status
        </button>
    </div>
</div>

<script>
    $(document).ready(function() {
        if (<?php echo $comment["status"]; ?> == 1) {
            $("button[id=toggle<?php echo $comment["id"]; ?>]").addClass("btn-warning").text("Ascunde comentariu");
        } else {
            $("button[id=toggle<?php echo $comment["id"]; ?>]").addClass("btn-secondary").text("Afișează comentariu");
        }

        $("button[id=toggle<?php echo $comment["id"]; ?>]").click(function() {
            if ($(this).hasClass("btn-warning")) {
                $(this).removeClass("btn-warning").addClass("btn-secondary").text("Afișează comentariu");
                var status = 0;
            } else {
                $(this).removeClass("btn-secondary").addClass("btn-warning").text("Ascunde comentariu");
                var status = 1;
            }
            
            $.ajax({
                type: "POST",
                url: "../../model/comments/toggle_comment_status.php",
                data: { id: <?php echo $comment["id"]; ?> , status: status},
                success: function(data) {
                    console.log(data);
                },
                error: function(xhr, status, error) {
                    console.error("Error sending AJAX request: " + error);
                }
            })

        });

        $('button[id=delete<?php echo $comment["id"]; ?>]').click(function() {
            $.ajax({  
                type: 'GET',
                url: '../../model/comments/delete.php', 
                data: { id: "<?php echo $comment["id"]; ?>" },
                success: function(response) {
                    console.log(response);
                }
            });
            $('div #<?php echo $comment["id"]; ?>').remove();
        });

    });
</script>