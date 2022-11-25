<?php
  require ('parts/addon.function.php');
?>

<!-- HEAD -->
<?php require('parts/part.head.php') ?>
<title>G1 Boost | Admin Edit</title>

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
          <!-- HEADER TITLE(REGISTRATION FORM) -->
          <h1>
            Edit a user.
          </h1>
          <!-- HEADER PARAGRAPH -->
          <p>Here you can edit a existing account.</p>

          <?php 
            include('parts/addon.message.php') 
          ?>

          <?php
            if(isset($_GET['user_id'])){
              $user_id = mysqli_real_escape_string($con, $_GET['user_id']);
              $query = "SELECT * FROM `user` WHERE user_id='$user_id'";
              $query_run = mysqli_query($con, $query);

              if (mysqli_num_rows($query_run) > 0){
                $user = mysqli_fetch_array($query_run);
          ?>

          <form method="post" action="adminpanelcode.php">
            <div class="row align-items-center justify-content-center">
              <input type="hidden" value="<?=$user['user_id'];?>" name="user_id" class="form-control" id="inputUserID">
              <div class="col-md-6">
                <label for="First Name" class="form-label">First Name</label>
                <input type="First Name" value="<?=$user['first_name'];?>" name="first_name" class="form-control" id="inputFirstName" placeholder="First Name " required>
              </div>
              <div class="col-md-6">
                <label for="Last Name" class="form-label">Last Name</label>
                <input type="Last Name" value="<?=$user['last_name'];?>"  name="last_name" class="form-control" id="inputLastName" placeholder="Last Name" required>
              </div>
            </div>
            <div class="cold-md-12">
                <label for="inputEmail" class="form-label">Enter Your Email Address</label>
                <input type="email" value="<?=$user['email'];?>"  name="email" class="form-control" id="inputEmail" placeholder="Email Address" required>
            </div>
            <div class="row align-items-center justify-content-center">
              <div class="col-md-6">
                <label for="username" class="form-label">Username</label>
                <input type="text" value="<?=$user['username'];?>"  name="username" class="form-control" id="inputUsername" placeholder="Username" required>
              </div>
              <div class="col-md-6">
                <label for="inputPassword" class="form-label">Password</label>
                <input type="password" value="<?=$user['password'];?>"  name="password" class="form-control" id="inputPassword" placeholder="Password" required>
              </div>
              <div class="col-md-12 pt-2 pb-2 d-none">
                  <input type="file" name="image" class="form-control" id="inputImage" value="uploads/profile.png">
                </div>
            </div>
            <div class="col-12 pt-3">
              <button type="submit" name="update_user" class="btn btn-primary">Update User</button>
            </div>
          </form>
          
          <?php
              }
              else
              {
                echo "Unable to find any data.";
              }
            }
          ?>
        </div>
        <div class="col-md-3">
          <!-- https://pixabay.com/vectors/icon-icons-question-mark-button-354008/ -->
          <img src=
            "<?php 
              echo $user['image']
            ?>"
              class="img-fluid" alt="identification card header image">
        </div>
      </div>
    </div>
  </header>

<!-- FOOTER -->
<?php include('parts/part.footer.php') ?>
<!-- FOOTER -->