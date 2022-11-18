<?php
  require ('parts/addon.function.php');
  check_register();
  
  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    // adding data to cutom variables from array
    // addslashes funtion to convert input into strings
    $username = addslashes($_POST['username']);
    $password = addslashes($_POST['password']);

    $query = "select * from user where username = '$username' && password = '$password' limit 1";

    // capturing mysqli query results into variable result
    $result = mysqli_query($con,$query);

    if (mysqli_num_rows($result) > 0){
      
      $row = mysqli_fetch_assoc($result);

      $_SESSION['info'] = ($row);
      header("Location: userpanel.php");
      UNSET($_SESSION['score']);
      die;
    }else{
      $error = "Wrong Username or Password";
    }
  }
?>

<!-- HEAD -->
<?php require('parts/part.head.php') ?>
<title>G1 Boost | Login</title>

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
            Login
          </h2>
          <!-- HEADER PARAGRAPH -->
          <p></p>
          <!-- HEADER PARAGRAPH BUTTONS -->

          <?php
            if(!empty($error)){
              echo "<div>" .$error. "</div>";
            }
          ?>

          <form action="#" method="POST">
            <div class="col-md-9">
              <label for="formGroupExampleInput" class="form-label">Username</label>
              <input type="text" name="username" class="form-control" id="formGroupExampleInput" placeholder="Enter Username" required>
            </div>
            <div class="col-md-9">
              <label for="formGroupExampleInput2" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="formGroupExampleInput2" placeholder="Enter your Password." required>
            </div>
            <div class="col-12 pt-3">
              <input type="submit" class="btn btn-primary">
            </div>
          </form>
        </div>
        <!-- LEFT -->
        <div class="col-md-5">
          <!-- https://pixabay.com/illustrations/id-driving-license-personal-identity-4157974/ -->
          <img src="img/login.png" class="img-fluid" alt="identification card header image">
        </div>
      </div>
    </div>
  </header>

<!-- FOOTER -->
<?php include('parts/part.footer.php') ?>
<!-- FOOTER -->