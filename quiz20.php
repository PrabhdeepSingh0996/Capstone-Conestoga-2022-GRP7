<?php
  require ('parts/addon.function.php');
  // check_login();
?>

<?php
    // setting questions number
    $number = (int) $_GET['n'];
    
    // getting total number of questions
    $query = "select * from `questions`";
    // getting results
    $results = mysqli_query($con,$query);
    $total = $results->num_rows;

    // getting questions
    $query = "select * from questions where question_number = '$number'";
    // getting results
    $result = mysqli_query($con,$query);
    $question = $result->fetch_assoc();
    // die;

    // getting choices
    $query = "select * from choices 
      where question_number = '$number'";
    // getting results
    $choices = mysqli_query($con,$query);

    // die;
?>

<!-- HEAD -->
<?php require('parts/part.head.php') ?>
<title>G1 Boost | 20 Question Quiz</title>
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
          <div class="row align-items-center">
            <div class="col-md-7">
              <h6>
                Basic 20 Rules 20 Signs Test
              </h6>
            </div>
            <div class="col-md-2">
              <h6>
                <?php
                  echo $question['question_number'];
                ?>/
                <?php
                  echo $total;
                ?>
              </h6>
            </div>
            <!-- <div class="col-md-3">
              <a href="quiztype.php">
                <button type="button" class="btn btn-primary col">
                  End Test
                </button>
              </a>
            </div> -->
          </div>

          <div class="row align-items-center">
            <!-- QUIZ QUESTION -->
            <h5 class="p-2">
              <?php 
                echo $question['text'];
              ?>
            </h5>
          </div>
          
          <div class="row align-items-center">
          <!-- Quiz FORM -->
            <form action="quizlogic.php" method="POST">
              <!-- CHOICES -->
              <!-- <php while ($row = $choices)  -->
              <?php while($row = $choices->fetch_assoc()): ?>
                
                <div class="form-check">

                  <input class="form-check-input" type="radio" name="choice" id="flexRadioDefault1" required value=
                      "<?php 
                      echo $row['id']
                      ?>"
                  />
                  <label class="form-check-label" for="flexRadioDefault1">
                      <?php
                        echo $row['text']
                      ?>
                  </label>
  
                </div>
              <?php endwhile; ?>

              <div class="col-12 pt-3">
                <input type="submit" class="btn btn-primary">
                <input type="hidden" name="number" value=
                "
                  <?php
                    echo $number;
                  ?>
                ">
              </div>
            </form>
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