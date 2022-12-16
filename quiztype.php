<?php
  require ('parts/addon_function.php');
  check_login();
?>
<!-- HEAD -->
<?php require('parts/part_head.php') ?>
<title>G1 Boost | Quiz Type</title>
<!-- HEAD -->

<!-- NAV -->
<?php include('parts/part_nav.php') ?>
<!-- NAV -->

<!-- WAVE PATTERN Bottom -->
<?php
// include('parts/part_wave_bottom.php')
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
              <a href="quiz10info.php">
                <button type="button" class="btn btn-primary col-11">
                  Basic 10 Rules & Signs Test (Easy)
                </button>
              </a>
            </div>
            <div class="col-12 p-1">
              <a href="quiz20info.php">
                <button type="button" class="btn btn-success col-11">
                  Original 20 Rules & Signs Test (Difficult)
                </button>
              </a>
            </div>
            <div class="col-12 p-1">
              <a href="quiz50info.php">
                <button type="button" class="btn btn-danger col-11">
                  Quiz marathon (100 Questions Challenge)
                </button>
              </a>
            </div>
          </div>
        </div>

        <!-- LEFT -->
        <div class="col-md-5">
          <!-- https://pixabay.com/illustrations/feedback-survey-questionnaire-3239454/ -->
          <img src="img/quiz.png" class="img-fluid" alt="An image depicting a MCQ test.">
        </div>
      </div>
    </div>
  </header>

<!-- FOOTER -->
<?php include('parts/part_footer.php') ?>
<!-- FOOTER -->




