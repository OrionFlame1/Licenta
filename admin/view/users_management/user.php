<div class="bg-white rounded p-4 mt-4 position-relative row" id="<?php echo $user["id"]; ?>">
    <div class="col-2"></div>
    <div class="col-5">
        <h2><?php echo $user["name"]; ?>, UserID: <?php echo $user["id"]; ?></h2>
    </div>
    <div class="col-5 text-center">
        <a href="../comments/comments_management.php?user_id=<?php echo $user["id"]; ?>">
            <button class="btn btn-success">Comentarii</button>
        </a>
        <button class="btn" id="toggle<?php echo $user["id"]; ?>">Fetching status...</button>
        <button class="btn btn-danger" id="delete<?php echo $user["id"]; ?>">Șterge cont</button>
    </div>
</div>

<script>
    $(document).ready(function() {
        if (<?php echo $user["status"]; ?> == 1) {
            $("button[id=toggle<?php echo $user["id"]; ?>]").addClass("btn-warning").text("Dezactivează cont");
        } else {
            $("button[id=toggle<?php echo $user["id"]; ?>]").addClass("btn-secondary").text("Activează cont");
        }

        $("button[id=toggle<?php echo $user["id"]; ?>]").click(function() {
            if ($(this).hasClass("btn-warning")) {
                $(this).removeClass("btn-warning").addClass("btn-secondary").text("Activează cont");
                var status = 0;
            } else {
                $(this).removeClass("btn-secondary").addClass("btn-warning").text("Dezactivează cont");
                var status = 1;
            }
            
            $.ajax({
                type: "POST",
                url: "../../model/users/toggle_user_status.php",
                data: { id: <?php echo $user["id"]; ?> , status: status},
                success: function(data) {
                    console.log(data);
                },
                error: function(xhr, status, error) {
                    console.error("Error sending AJAX request: " + error);
                }
            })

        });

        $('button[id=delete<?php echo $user["id"]; ?>]').click(function() {
        $.ajax({  
            type: 'GET',
            url: '../../model/users/delete.php', 
            data: { id: <?php echo $user["id"]; ?> },
            success: function(response) {
                console.log(response);
            }
        });
        $('div[id=<?php echo $user["id"]; ?>]').remove();
    });
    });
</script>