<div class="modal fade" id="logout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <form action="user/controller/user_log_out.php" method="post">

            <h2>Ești sigur/ă că vrei să te deconectezi?</h2>
            <input type="hidden" name="url" value="<?php echo $_SERVER['REQUEST_URI'] ?>"/>

            <button type="submit" class="btn border border-primary rounded">Da</button>
            <button type="submit" class="btn btn-primary">Nu</button>

        </form>
      </div>
    </div>
  </div>
</div>
