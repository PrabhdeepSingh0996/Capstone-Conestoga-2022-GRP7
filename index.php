<?php
  require ('parts/addon.function.php');
  // check_login();
?>
<!-- HEAD -->
<?php require('parts/part.head.php') ?>
<title>G1 Boost | Home</title>
<meta name="keywords" content="
  G1
">
<meta name="description" content="
  There is not much to say about us, We are a group of students from Conestoga College kitchener and we have created this website as our capstone project as a means to study for G1 Driving Test.
">
<meta name="author" content="
  G1 Boost
">
<meta name="og:title" content="
  There is not much to say about us, We are a group of students from Conestoga College kitchener and we have created this website as our capstone project as a means to study for G1 Driving Test.
">
<meta name="robots" content="
  index, follow
">

<!-- NAV -->
<?php include('parts/part.nav.php') ?>

<!-- Carousal -->
<?php include('parts/part.carousal.php') ?>

<!-- WAVE PATTERN Bottom -->
<?php
// include('parts/part.wave_bottom.php')
?>

  <!-- HEADER -->
  <header class="page-header gradient">
    <div class="container pt-3" >
      <div class="row align-items-center justify-content-center">
        <div class="col-md-5">
          <!-- HEADER TITLE -->
          <h1>
            G1 Boost | Driving Test Practice
          </h1>
          <!-- HEADER PARAGRAPH -->
          <p>Try out our new approach to learning with interactive and fast paced quizes that will help you clear your G1 Test.</p>
          <!-- HEADER PARAGRAPH BUTTONS -->
          <a href="quiztype.php">
            <button type="button" class="btn btn-outline-light">
              Check our different Test Types.
            </button>
          </a>
          <!-- <a href="#" class="disabled">
            <button type="button" class="btn btn btn-outline-success disabled">
              Read about our Learning Strategies.
            </button>
          </a> -->
        </div>
          <!-- HEADER IMAGE -->
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