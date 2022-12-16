<?php
  require ('parts/addon_function.php');
?>

<!-- HEAD -->
<?php require('parts/part_head.php') ?>
<title>G1 Boost | Admin Add</title>

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
            Add a new user.
          </h1>
          <!-- HEADER PARAGRAPH -->
          <p>Here you can add a new account.</p>

          <?php 
            include('parts/addon_message.php') 
          ?> 


          <form method="post" action="adminpanelcode.php">
            <div class="row align-items-center justify-content-center">
              <div class="col-md-6">
                <label for="First Name" class="form-label">First Name</label>
                <input type="First Name" name="first_name" class="form-control" id="inputFirstName" placeholder="First Name " required>
              </div>
              <div class="col-md-6">
                <label for="Last Name" class="form-label">Last Name</label>
                <input type="Last Name" name="last_name" class="form-control" id="inputLastName" placeholder="Last Name" required>
              </div>
            </div>
            <div class="cold-md-12">
                <label for="inputEmail" class="form-label">Enter Your Email Address</label>
                <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email Address" required>
            </div>
            <div class="row align-items-center justify-content-center">
              <div class="col-md-6">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="inputUsername" placeholder="Username" required>
              </div>
              <div class="col-md-6">
                <label for="inputPassword" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password" required>
              </div>
              <div class="col-md-12 pt-2 pb-2 d-none">
                  <input type="file" name="image" class="form-control" id="inputImage" value="uploads/profile.png">
                </div>
            </div>
            <div class="col-12 pt-3">
              <button type="submit" name="save_user" class="btn btn-primary">Register</button>
            </div>
          </form>
        </div>
        <div class="col-md-5">
          <!-- https://pixabay.com/vectors/icon-icons-question-mark-button-354008/ -->
          <img src="img/register.png" class="img-fluid" alt="identification card header image">
        </div>
      </div>
    </div>
  </header>

<!-- FOOTER -->
<?php include('parts/part_footer.php') ?>
<!-- FOOTER -->