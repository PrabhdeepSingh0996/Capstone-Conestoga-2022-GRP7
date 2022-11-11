<?php
  require ('parts/addon.function.php');
  // check_login();
?>
<!-- HEAD -->
<?php require('parts/part.head.php') ?>
<title>Driving Test | Home</title>

<!-- NAV -->
<?php include('parts/part.nav.php') ?>

<!-- Carousal -->
<?php include('parts/part.carousal.php') ?>

<!-- WAVE PATTERN Bottom -->
<?php
include('parts/part.wave_bottom.php')
?>

  <!-- HEADER -->
  <header class="page-header gradient">
    <div class="container pt-3" >
      <div class="row align-items-center justify-content-center">
        <div class="col-md-5">
          <!-- HEADER TITLE -->
          <h2>
            G1 Boost | Driving Test Practice
          </h2>
          <!-- HEADER PARAGRAPH -->
          <p>Try out our new approach to learning with interactive and fast paced quizes that will help you clear your G1 Test.</p>
          <!-- HEADER PARAGRAPH BUTTONS -->
          <a href="quiztype.php">
            <button type="button" class="btn btn-outline-primary">
              Check our different Test Types.
            </button>
          </a>
          <a href="#" class="disabled">
            <button type="button" class="btn btn btn-outline-success disabled">
              Read about our Learning Strategies.
            </button>
          </a>
        </div>
          <!-- HEADER IMAGE -->
        <div class="col-md-5">
          <!-- https://pixabay.com/illustrations/id-driving-license-personal-identity-4157974/ -->
          <img src="img/login.png" class="img-fluid" alt="identification card header image">
        </div>
      </div>
    </div>
  </header>

  <!-- WAVE PATTERN TOP -->
  <?php include('parts/part.wave_top.php') ?>

  <!-- SOCIAL MEDIA LINKS -->
  <section class="socials">
    <div class="container text-center">
      <div class="row g-3">
          <div class="col-md-2"><img class="img-fluid page-icon" src="img/socials/twitter.svg" alt="logo for social media"></div>
          <div class="col-md-2"><img class="img-fluid page-icon" src="img/socials/facebook.svg" alt="logo for social media"></div>
          <div class="col-md-2"><img class="img-fluid page-icon" src="img/socials/instagram.svg" alt="logo for instagram social media"></div>
          <div class="col-md-2"><img class="img-fluid page-icon" src="img/socials/googleplus.svg" alt="logo for googleplus social media"></div>
          <div class="col-md-2"><img class="img-fluid page-icon" src="img/socials/tumblr.svg" alt="logo for tumblr social media"></div>
          <div class="col-md-2"><img class="img-fluid page-icon" src="img/socials/youtube.svg" alt="logo for youtube social media"></div>
      </div>
    </div>
  </section>


<!-- WAVE PATTERN Bottom -->
<?php include('parts/part.wave_bottom.php') ?>

<!-- FOOTER -->
<?php include('parts/part.footer.php') ?>
<!-- FOOTER -->