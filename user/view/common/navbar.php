<?php 
    include 'user/model/accounts/get.php';
    if (isset($_SESSION["id"]))
      $username = getUsernameByID($_SESSION["id"])["name"];
?>

<nav class="navbar navbar-expand navbar-dark navigation_bar sticky-top mb-5 py-3">
  <div class="collapse navbar-collapse justify-content-center">
    <div class="navbar-nav fs-3">
      <a class="nav-item nav-link px-5" href="home">Home</a>
      <a class="nav-item nav-link px-5" href="blog">Blog</a>
      <a class="nav-item nav-link px-5" href="about">About</a>
      <?php 
        if(isset($_SESSION["loggedin"])) {
          if($_SESSION["type"] === 'admin') {
            echo '<a class="nav-item nav-link px-4" style="right: 75px;position: absolute" href="admin"><i class="bi bi-speedometer2"></i></a>';
          } else {
            echo '<a class="nav-item nav-link px-4" style="right: 75px;position: absolute" href="user_dashboard">' . $username . '</a>';
          }
        }  
      ?>
      <a type="button" class="nav-item nav-link px-4" style="right: 0;position: absolute" 
        <?php 
          if(!isset($_SESSION["loggedin"])) 
            echo 'data-bs-toggle="modal" data-bs-target="#login"><i class="bi bi-person"></i>'; 
          else 
            echo 'data-bs-toggle="modal" data-bs-target="#logout"><i class="bi bi-box-arrow-right"></i>'; 
        ?>
      </a>
    </div>
  </div>
</nav>

<?php 
  if(isset($_SESSION["loggedin"]))
    include 'logout_modal.php';
  else
    include 'login_modal.php';
?>