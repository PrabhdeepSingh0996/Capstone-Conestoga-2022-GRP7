<?php
  require ('parts/addon.function.php');
  // check_login();


  if (empty($_SESSION['score'])){
    $_SESSION['score'] = 0;
  }

?>
<!-- HEAD -->
<?php require('parts/part.head.php') ?>
<title>Driving Test | Contact</title>
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
          <!-- QUIZ RESULT INFO -->
          <div class="row align-items-center">
            <div class="col-md-5">
              <h4>
                Quiz Results
              </h4>
            </div>
          </div>

          <!-- <div class="">
            <h5 class="p-2">
                Congratulations!
            </h5> 
          </div> -->
          
          <div class="">
            <p class="p-2">
                You have answered 
                <?php
                  echo $_SESSION['score'];
                  // echo $_SESSION['info']['userscore'];
                ?> 
                questions correctly
                 <!-- out of the 5 questions. -->
            </p>
          </div>

            <div class="col-md-5">
              <a href="quiztype.php">
                <button type="button" class="btn btn-primary col">
                  Take Another Test
                </button> 
              </a>
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