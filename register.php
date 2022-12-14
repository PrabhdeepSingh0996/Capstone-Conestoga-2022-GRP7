<?php
  require ('parts/addon_function.php');
  check_register();

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    // Adding data to cutom variables from array
    // uploading image
    $image_added = false;
    if(!empty($_FILES['image']['name']) && $_FILES['image']['error'] == 0){
      // file uploaded
      $folder = "uploads/";

      if(!file_exists($folder))
      {
        // permission to write
        mkdir($folder,0777,true);
      }

      $image = $folder . $_FILES['image']['name'];

      move_uploaded_file($_FILES['image']['tmp_name'], $image);
      
      $image_added = true;
    }
    // adding data to cutom variables from array
    // addslashes funtion to convert input into strings
    $first_name = addslashes($_POST['first_name']);
    $last_name = addslashes($_POST['last_name']);
    $username = addslashes($_POST['username']);
    $email = addslashes($_POST['email']);
    $password = addslashes($_POST['password']);
    
    if(!preg_match("/^[a-zA-Z]*$/",$first_name)){
     $error .= 'First name should contain only alphabets<br>';
    }
    if(!preg_match("/^[a-zA-Z]*$/",$last_name)){
      $error .= 'Last name should contain only alphabets<br>';
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
      $error .= 'Email is not valid';  
    }
    if(preg_match("/^[a-zA-Z]*$/",$first_name) && preg_match("/^[a-zA-Z]*$/",$last_name) && filter_var($email,FILTER_VALIDATE_EMAIL)) {
      $result  = mysqli_query($con,"INSERT INTO user (first_name,last_name,email,username,password)
        values ('$first_name','$last_name','$email','$username','$password')") 
          or 
            die(mysqli_error($con));
            header("Location: login.php");
    }
  }
?>

<!-- HEAD -->
<?php require('parts/part_head.php') ?>
<title>G1 Boost | Register</title>

<!-- NAV -->
<?php 
include('parts/part_nav.php') 
?> 

  <!-- HEADER -->
  <header class="page-header page-padding_top_5 gradient">
    <div class="container pt-3" >
      <div class="row align-items-center justify-content-center">
        <!-- RIGHT -->
        <div class="col-md-5">
          <!-- HEADER TITLE(REGISTRATION FORM) -->
          <h1>
            Register
          </h1>
          <!-- HEADER PARAGRAPH -->
          <p>Please fill out the form below to register a new account with us.</p>
          <?php
            if(!empty($error)){
              echo "<div>" .$error. "</div>";
            }
          ?>
          <form method="post">
            <div class="row align-items-center justify-content-center">
              <div class="col-md-6">
                <label for="inputFirstName" class="form-label">First Name</label>
                <input type="First Name" name="first_name" class="form-control" id="inputFirstName" placeholder="First Name " required>
              </div>
              <div class="col-md-6">
                <label for="inputLastName" class="form-label">Last Name</label>
                <input type="Last Name" name="last_name" class="form-control" id="inputLastName" placeholder="Last Name" required>
              </div>
            </div>
            <div class="cold-md-12">
                <label for="inputEmail" class="form-label">Enter Your Email Address</label>
                <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email Address" required>
            </div>
            <div class="row align-items-center justify-content-center">
              <div class="col-md-6">
                <label for="inputUsername" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="inputUsername" placeholder="Username" required>
              </div>
              <div class="col-md-6">
                <label for="inputPassword" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password" required>
              </div>
            </div>
            <div class="col-12 pt-3">
              <a class="btn btn-outline-dark btn-rounded" href="login.php">
                Go to login page
              </a>
            </div>
            <div class="col-12 pt-3">
              <button type="submit" class="btn btn-primary">Register</button>
            </div>
          </form>
        </div>
        <div class="col-md-5">
          <!-- https://pixabay.com/vectors/icon-icons-question-mark-button-354008/ -->
          <img src="img/register.png" class="img-fluid" alt="An image depicting a question mark sign.">
        </div>
      </div>
    </div>
  </header>

<!-- FOOTER -->
<?php include('parts/part_footer.php') ?>
<!-- FOOTER -->