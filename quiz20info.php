<?php
  require ('parts/addon.function.php');
  // check_login();
?>

<?php

    // getting Questions
    $query = "select * from quiz";
    // getting Results
    $result = mysqli_query($con,$query);
    $total = $result->num_rows;
    // die;
?>

<!-- HEAD -->
<?php require('parts/part.head.php') ?>
<title>G1 Boost | Quiz Info</title>
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
          <!-- QUIZ TYPE INFO -->

          <!-- PARAGRAPH -->
          <div class="row align-items-center">
            <!-- START BUTTON -->
            <div class="col-md-12 pb-2">
              <h2>
                Basic 10 Rules Test
              </h2>
            </div>
          </div>

          <div class="row align-items-center">
            <!-- START BUTTON -->
            <div class="col-md-12">
              <p>
                G1 test is a test where you have to answer 20 multiple-choice questions from which 20 questions are for rules of the road and other 20 are for the road signs.
              </p>
            </div>

            <div class="col-md-12">
              <p>
                In order to pass the test, one needs to answer a minimum of 16 questions correctly in both rules of the road and road signs.
              </p>
            </div>

            <div class="row">
              <div class="col-md-7">
                <h5>
                  Number of Questions
                </h5>
              </div>
              <div class="col-md-5">
                <p>
                  <?php
                    echo $total;
                  ?> Questions.
                </p>
              </div>
            </div>

            <div class="row">
              <div class="col-md-7">
                <h5>
                  Estimate Time Required
                </h5>
              </div>
              <div class="col-md-5">
                <p>
                  <?php
                    echo $total * .25;
                  ?> Minutes.
                </p>
              </div>
            </div>
          </div>

          <div class="row align-items-center">
            <!-- START BUTTON -->
            <div class="col-5 p-3 align-items-center justify-content-center">
              <a href="quiz20.php?n=1">
                <button type="button" class="btn btn-primary col-12">
                  Start the Test
                </button>
              </a>
            </div>
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