<?php
  require ('parts/addon.function.php');
  // check_login();
?>
<!-- HEAD -->
<?php require('parts/part.head.php') ?>
<title>G1 Boost | Quiz Type</title>
<!-- HEAD -->

<!-- NAV -->
<?php include('parts/part.nav.php') ?>
<!-- NAV -->

<!-- WAVE PATTERN Bottom -->
<?php
// include('parts/part.wave_bottom.php')
?>

  <!-- HEADER -->
  <header class="page-header page-padding_top_5 gradient">
    <div class="container pt-3" >
      <div class="row align-items-center justify-content-center">
        <!-- RIGHT -->
        <div class="col-md-5">
          <!-- HEADER TITLE(LOGIN FORM) -->
          <h1>
            Quiz Types
          </h1>
          <!-- HEADER PARAGRAPH -->
          <p>Select your test style and click on the begin button to start the test...</p>
          <!-- HEADER PARAGRAPH BUTTONS -->
          
          <div class="row align-items-center justify-content-center">
            <div class="col-12 p-1">
              <a href="quiz20info.php">
                <button type="button" class="btn btn-primary col-12">
                Basic 20 Rules Test
                </button>
              </a>
            </div>
            <div class="col-12 p-1">
              <a href="quizfast.php">
                <button type="button" class="btn btn-success col-12">
                  Question marathon
                </button>
              </a>
            </div>
            <!-- <div class="col-12 p-1">
              <a href="quizsix.php">
                <button type="button" class="btn btn-warning col-12">
                  Six Choices Test
                </button>
              </a>
            </div>
            <div class="col-12 p-1">
              <a href="quizeight.php">
                <button type="button" class="btn btn-danger col-12">
                  Eight Choices with Timer
                </button>
              </a>
            </div>
            <div class="col-12 p-1">
              <a href="#">
                <button type="button" class="btn btn-dark col-12 disabled">
                  Body Segmentation AI Interactive Sign Test
                </button>
              </a>
            </div> -->
          </div>
        </div>
        <!-- LEFT -->
        <div class="col-md-5">
          <!-- https://pixabay.com/illustrations/feedback-survey-questionnaire-3239454/ -->
          <img src="img/quiz.png" class="img-fluid" alt="identification card header image">
        </div>
      </div>
    </div>
  </header>

<!-- FOOTER -->
<?php include('parts/part.footer.php') ?>
<!-- FOOTER -->




