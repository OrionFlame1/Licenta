<div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="user/controller/user_log_in.php" method="post">

        <!-- Name input -->
        <div class="form-outline mb-4">
          <input type="text" id="form2Example1" class="form-control" name="email" />
          <label class="form-label" for="form2Example1">Email</label>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
          <input type="password" id="form2Example2" class="form-control" name="password" />
          <label class="form-label" for="form2Example2">Parola</label>
        </div>

        <input type="hidden" name="url" value="<?php echo $_SERVER['REQUEST_URI'] ?>"/>

        <button type="submit" class="btn btn-primary">Conectează-te</button>
        <a href="create_account">
          <button type="button" class="btn btn-warning float-end">Creează cont</button>
        </a>

      </form>
      </div>
    </div>
  </div>
</div>