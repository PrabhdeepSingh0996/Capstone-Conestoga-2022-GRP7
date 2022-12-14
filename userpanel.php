<?php
  require ('parts/addon_function.php');
  check_login();

  if($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST['username']))
  {
    $user_id = $_SESSION['info']['user_id'];
    // Adding data to cutom variables from array
    // uploading image
    $image_added = false;
    if(!empty($_FILES['image']['tmp_name']) && $_FILES['image']['error'] == 0){
      // file uploaded
      $folder = "uploads/";

      if(!file_exists($folder))
      {
        // permission to write
        mkdir($folder,0777,true);
      }

      $image = $folder . 'userpfp_' . $user_id . '.' .pathinfo($_FILES['image']['name'])['extension'];
      move_uploaded_file($_FILES['image']['tmp_name'], $image);
      $image_added = true;
    }
    // addslashes funtion to convert input into strings
    $first_name = addslashes($_POST['first_name']);
    $last_name = addslashes($_POST['last_name']);
    $username = addslashes($_POST['username']);
    $email = addslashes($_POST['email']);
    $password = addslashes($_POST['password']);
    $error = "";
    echo(strlen($username));
    if($password == ""){
      $error .= "Password cannot be empty <br>";
    }
    if($username == ""){
      $error .= "Empty Username <br>";
    }
    if(!preg_match("/^[a-zA-Z]*$/",$first_name)){
      $error .= 'First name should contain only alphabets<br>';
    }
    if(!preg_match("/^[a-zA-Z]*$/",$last_name)){
      $error .= 'Last name should contain only alphabets<br>';
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
      $error .= 'Email is not valid';  
    }
    if(!empty($username) && !empty($password) && preg_match("/^[a-zA-Z]*$/",$first_name) && preg_match("/^[a-zA-Z]*$/",$last_name) && filter_var($email,FILTER_VALIDATE_EMAIL) ){

      if ($image_added == true){
        $query = "update user set first_name = '$first_name', last_name = '$last_name', username = '$username', email = '$email', password = '$password', image = '$image' where user_id = $user_id limit 1";
      }else{
        $query = "update user set first_name = '$first_name', last_name = '$last_name', username = '$username', email = '$email', password = '$password' where user_id = $user_id limit 1";
      }
      // Capturing mysqli query results into variable result
      $result = mysqli_query($con,$query);

      // Re-Run select query to refresh data (image).
      $query = "select * from user where user_id = '$user_id' limit 1";
      $result = mysqli_query($con,$query);
      if (mysqli_num_rows($result) > 0){
        $_SESSION['info'] = mysqli_fetch_assoc($result);
      }

      header("Location: userpanel.php");
      die;
      }
  }
?>

<!-- HEAD -->
<?php require('parts/part_head.php') ?>
<title>G1 Boost | User Panel</title>

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
          <!-- <?php echo($error);?> -->
          <?php
            if(!empty($error)){
              echo "<div>" .$error. "</div>";
            }
          ?>
          <!-- HEADER TITLE(LOGIN FORM) -->
          <?php if(!empty($_GET['action']) && $_GET['action'] == 'edit'):?>
            <h1>
              Edit Mode
            </h1>
            <!-- HEADER PARAGRAPH -->
            <p>Welcome 
              <?php 
                echo $_SESSION['info']['first_name']
              ?>!
              <br>In Edit mode you can change your Profile details.
            </p>
          <?php else:?>
            <h1>
              User Panel
            </h1>
            <!-- HEADER PARAGRAPH -->
            <p>Welcome 
              <?php 
                echo $_SESSION['info']['first_name']
              ?>!
              <br>Here you can make changes to your profile.
            </p>
          <?php endif;?>

          <?php if(!empty($_GET['action']) && $_GET['action'] == 'edit'):?>

            <form method="post" enctype="multipart/form-data" >
              <div class="row align-items-center justify-content-center">
                <div class="col-md-6 pt-2 pb-2">
                  <label for="inputFirstName" class="form-label">First Name</label>
                  <input value="<?php echo $_SESSION['info']['first_name']?>" type="First Name" name="first_name" class="form-control" id="inputFirstName" placeholder="First Name " required>
                </div>
                <div class="col-md-6 pt-2 pb-2">
                  <label for="inputLastName" class="form-label">Last Name</label>
                  <input value="<?php echo $_SESSION['info']['last_name']?>" type="Last Name" name="last_name" class="form-control" id="inputLastName" placeholder="Last Name" required>
                </div>
              </div>
              <div class="cold-md-12 pt-2 pb-2">
                  <label for="inputEmail" class="form-label">Enter Your Email Address</label>
                  <input value="<?php echo $_SESSION['info']['email']?>" type="email" name="email" class="form-control" id="inputEmail" placeholder="Email Address" required>
              </div>
              <div class="row align-items-center justify-content-center">
                <div class="col-md-6 pt-2 pb-2">
                  <label for="inputUsername" class="form-label">Username</label>
                  <input value="<?php echo $_SESSION['info']['username']?>" type="text" name="username" class="form-control" id="inputUsername" placeholder="Username" required>
                </div>
                <div class="col-md-6 pt-2 pb-2">
                  <label for="inputPassword" class="form-label">Password</label>
                  <input value="<?php echo $_SESSION['info']['password']?>" type="password" name="password" class="form-control" id="inputPassword" placeholder="Password" required>
                </div>
                <div class="col-md-12 pt-2 pb-2">
                  <label for="inputImage" class="form-label">Profile Picture:</label>
                  <input type="file" name="image" class="form-control" id="inputImage">
                </div>
              </div>
              <div class="row">
                <div class="col-3 pt-3 pb-3">
                    <button class="btn btn-primary col-12">
                      Save
                    </button>
                </div>
                <div class="col-3 pt-3 pb-3">
                  <a href="userpanel.php">
                    <button type="button" class="btn btn-success col-12">
                      Cancel
                    </button>
                  </a>
                </div>
              </div>
            </form>

            <?php else:?>
              <div class="row">
                <div class="col-md-3">
                  <p class="font-weight-bold">First Name:</p>
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
                  <p class="font-weight-bold">Last Name:</p>
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
                  <p class="font-weight-bold">User Name:</p>
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
                  <p class="font-weight-bold">Email:</p>
                </div>
                <div class="col-md-2">
                  <p>
                    <?php
                      echo $_SESSION['info']['email']
                    ?>
                  </p>
                </div>
              </div>
              <div class="col-md-5">
              <a href="userpanel.php?action=edit">
                <button type="button" class="btn btn-primary col-12">
                  Edit Profile
                </button>
              </a>
            </div>
          <?php endif;?>
        </div>
        <!-- LEFT -->
        <div class="col-md-3">
          <img src="<?php echo $_SESSION['info']['image'] ? $_SESSION['info']['image'] : 'img/profile.png'?>" class="img-fluid" alt="An image of the user currently logged in">
        </div>
      </div>
    </div>
  </header>
<!-- FOOTER -->
<?php include('parts/part_footer.php') ?>
<!-- FOOTER -->