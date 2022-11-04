<?php
  require ('parts/addon.function.php');
  check_login();
  print_r($_GET);
?>

<!-- HEAD -->
<?php require('parts/part.head.php') ?>
<title>G1 Boost | User Panel</title>

<!-- NAV -->
<?php
include('parts/part.nav.php')
?>
  <!-- HEADER -->
  <header class="page-header page-padding_top_5 gradient">
    <div class="container pt-3" >
      <div class="row align-items-center justify-content-center">
        <!-- RIGHT -->
        <div class="col-md-5">
          <!-- HEADER TITLE(LOGIN FORM) -->
          <h2>
            G1 Boost | User Panel
          </h2>
          <!-- HEADER PARAGRAPH -->
          <p>Welcome 
            <?php 
              echo $_SESSION['info']['first_name']
            ?>!
            <br>Here you can make changes to your profile.
          </p>
          <div class="row">
            <div class="col-md-3">
              <h5>First Name:</h5>
            </div>
            <div class="col-md-2">
              <p>
                <?php
                  echo $_SESSION['info']['first_name']
                ?>
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <h5>Last Name:</h5>
            </div>
            <div class="col-md-2">
              <p>
                <?php
                  echo $_SESSION['info']['last_name']
                ?>
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <h5>User Name:</h5>
            </div>
            <div class="col-md-2">
              <p>
                <?php
                  echo $_SESSION['info']['username']
                ?>
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <h5>Email:</h5>
            </div>
            <div class="col-md-2">
              <p>
                <?php
                  echo $_SESSION['info']['email']
                ?>
              </p>
            </div>
          </div>
          <form method="post">
            <div class="col-12 pt-3">
              <input type="submit" class="btn btn-primary">
            </div>
          </form>
        </div>
        <!-- LEFT -->
        <div class="col-md-3">
          <img src="img/profile.png" class="img-fluid" alt="identification card header image">
        </div>
      </div>
    </div>
  </header>
<!-- FOOTER -->
<?php include('parts/part.footer.php') ?>
<!-- FOOTER -->