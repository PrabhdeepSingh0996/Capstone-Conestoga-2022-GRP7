

<!-- HEAD -->
<?php require('parts/part.head.php') ?>
<title>Driving Test | Login</title>

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
          Donate to Support Us
          </h2>
          <!-- HEADER PARAGRAPH -->
          <p>Please fill the form below</p>
          <!-- HEADER PARAGRAPH BUTTONS -->

          <?php
            if(!empty($error)){
              echo "<div>" .$error. "</div>";
            }
          ?>

          <form action="charge.php" method="POST">
            <div class="col-md-9">
              <label for="formGroupExampleInput" class="form-label">Name</label>
              <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Enter your name" required>
            </div>
            <div class="col-md-9">
              <label for="formGroupExampleInput2" class="form-label">Email</label>
              <input type="email" name="email" class="form-control" id="formGroupExampleInput2" placeholder="Enter your email" required>
            </div>
            <div class="col-md-9">
              <label for="formGroupExampleInput2" class="form-label">Amount</label>
              <input type="text" name="amount" class="form-control" id="formGroupExampleInput2" value="20.00" required>
            </div>
            <div class="col-12 pt-3">
              <input type="submit" name="submit" value="Donate"  class="btn btn-primary">
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