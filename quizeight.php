<?php
  require ('parts/addon.function.php');
  // check_login();
?>
<!-- HEAD -->
<?php require('parts/part.head.php') ?>
<title>G1 Boost | Eight Choice Quiz</title>
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
                01/40
              </h6>
            </div>
            <div class="col-md-3">
              <a href="quiztype.php">
                <button type="button" class="btn btn-primary col">
                  End Test
                </button>
              </a>
            </div>
          </div>
          <!-- HEADER PARAGRAPH -->
          <h2 class="p-2">
            How quickly are you obligated to report an accident to the police?
          </h2>
          
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
            <!-- Option5 -->
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5" checked/>
              <label class="form-check-label" for="flexRadioDefault5"> It is not important to report. </label>
            </div>
            <!-- Option6 -->
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6" checked/>
              <label class="form-check-label" for="flexRadioDefault6"> When you feel like it. </label>
            </div>
            <!-- Option7 -->
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault7" checked/>
              <label class="form-check-label" for="flexRadioDefault7"> Within 12 hours </label>
            </div>
            <!-- Option8 -->
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault8" checked/>
              <label class="form-check-label" for="flexRadioDefault8"> Within 6 hours </label>
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