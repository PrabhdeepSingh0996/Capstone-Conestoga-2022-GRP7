<?php
  require ('parts/addon.function.php');
  // check_login();
?>
<!-- HEAD -->
<?php require('parts/part.head.php') ?>
<title>G1 Boost | Fast Pace Quiz</title>
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
          <div class="row align-items-center">
            <div class="col-md-7">
              <h6>
                Basic 20 Rules 20 Signs Test
              </h6>
            </div>
            <div class="col-md-2">
              <h6>
                01/	&infin;
              </h6>
            </div>
            <!-- <div class="col-md-2">
              <h6>
                30sec
              </h6>
            </div> -->
            <div class="col-md-3">
              <a href="quiztype.php">
                <button type="button" class="btn btn-primary col">
                  End Test
                </button>
              </a>
            </div>
          </div>
          <!-- HEADER PARAGRAPH -->
          <h1 class="p-2">
            How quickly are you obligated to report an accident to the police?
          </h1>
          
          <!-- Quiz FORM -->
          <form action="#" method="POST">
            <!-- Option1 -->
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"/>
              <label class="form-check-label" for="flexRadioDefault1"> Within 72 hours.  </label>
            </div>
            <!-- Option2 -->
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked/>
              <label class="form-check-label" for="flexRadioDefault2"> Within 48 hours. </label>
            </div>
            <!-- Option3 -->
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked/>
              <label class="form-check-label" for="flexRadioDefault3"> Within 24 hours. </label>
            </div>
            <!-- Option4 -->
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" checked/>
              <label class="form-check-label" for="flexRadioDefault4"> Immediately </label>
            </div>
            <div class="col-12 pt-3">
              <input type="submit" class="btn btn-primary">
            </div>
          </form>
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