<?php
  require ('parts/addon.function.php');
  check_login();

  // getting variables with post
  if(isset($_POST['submit'])){
    $question_number = $_POST['question_number'];
    $question_text = $_POST['question_text'];
    $correct_choice = $_POST['correct_choice'];
    // creating an array for choices
    $choices = array();
    $choices[1] = $_POST['choice1'];
    $choices[2] = $_POST['choice2'];
    $choices[3] = $_POST['choice3'];
    $choices[4] = $_POST['choice4'];

    // inserting data into question table
    $query = "INSERT INTO `questions`(`question_number`, `text`) VALUES ('$question_number', '$question_text')";
    // running insert_row query
    $insert_row = mysqli_query($con,$query);
    // validating inserted data
    // if insert_row query is run
    if($insert_row){
      // add data into choice index from choices
      foreach($choices as $choice => $value){
        // if value for choice is not empty
        if($value != ''){
          // if the correct_choice variable value is equal to the choice variable
          if($correct_choice == $choice){
            // set is_correct to 1 in the choice query
            $is_correct = 1;
          }else{
            // else set it to 0
            $is_correct = 0;
          }
          // choice query
          $query = "INSERT INTO `choices`(`question_number`, `is_correct`, `text`) VALUES ('$question_number','$is_correct','$value')";
          // runing the query
          $insert_row = mysqli_query($con,$query);
          // validating insert
          if($insert_row){
            continue;
          }else{
            die;
          }
        }
      }
    }
    $msg = 'The Question has been added!';
  }

  // Getting all the questions
  $query = "SELECT * FROM `questions`";
  // Getting the results
  $questions = mysqli_query($con,$query);
  $total = $questions->num_rows;
  $next = $total+1;
?>

<!-- HEAD -->
<?php require('parts/part.head.php') ?>
<title>G1 Boost | Admin Add Questions</title>
<!-- HEAD -->

<!-- NAV -->
<?php 
include('parts/part.nav.php') 
?>
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
          <!-- ADMIN PANEL ADD INFO -->
          <div class="row align-items-center">
            <!-- ADD QUESTIONS -->
            <h2>
              Admin Panel
            </h2>
            <!-- HEADER PARAGRAPH -->
            <p>
                Here you can add your questions to the Quiz Bank.
            </p>
          </div>
          <div class="row align-items-center">
            <!-- MESSAGE -->
            <?php
              if(isset($msg)){
                echo '<p>'.$msg.'</p>';
              }
            ?>
          </div>
          
          <div class="">
            <!-- Quiz FORM -->
            <form action="adminpaneladd.php" method="post">

                <div class="row align-items-center">
                <!-- Question Number -->
                    <div class="col-md-4 pt-2 pb-2">
                        <label for="question_number"class="form-label">Question Number: </label>
                    </div>
                    <div class="col-md-6 pt-2 pb-2">
                        <input type="number" 
                          min=
                            "<?php
                              echo $next;
                            ?>" 
                          max=
                            "<?php
                              echo $next;
                            ?>" 
                          name="question_number" class="form-control"placeholder="" required
                          value=
                            "<?php
                              echo $next;
                            ?>"
                        >
                    </div>
                </div>

                <!-- Question Text-->
                <div class="col-md-10 pt-2 pb-2">
                    <label for="question_number" class="form-label">Question:</label>
                    <input type="text" name="question_text" class="form-control" id="question" placeholder="Enter your Question" required>
                </div>
                <!-- Question Choice 1 -->
                <div class="col-md-10 pt-2 pb-2">
                    <!-- <label for="question_number" class="form-label">Question Choice 1</label> -->
                    <input type="text" name="choice1" class="form-control" id="choice_1" placeholder="Enter Choice 1 for the Question" required>
                </div>
                <!-- Question Choice 2 -->
                <div class="col-md-10 pt-2 pb-2">
                    <!-- <label for="question_number" class="form-label">Question Choice 2</label> -->
                    <input type="text" name="choice2" class="form-control" id="choice_2" placeholder="Enter Choice 2 for the Question" required>
                </div>
                <!-- Question Choice 3 -->
                <div class="col-md-10 pt-2 pb-2">
                    <!-- <label for="question_number" class="form-label">Question Choice 3</label> -->
                    <input type="text" name="choice3" class="form-control" id="choice_3" placeholder="Enter Choice 3 for the Question" required>
                </div>
                <!-- Question Choice 4 -->
                <div class="col-md-10 pt-2 pb-2">
                    <!-- <label for="question_number" class="form-label">Question Choice 4</label> -->
                    <input type="text" name="choice4" class="form-control" id="choice_4" placeholder="Enter Choice 4 for the Question" required>
                </div>
                
                <div class="row align-items-center">
                <!-- Correct Question Choice -->
                    <div class="col-md-4 pt-2 pb-2">
                    <label for="question_number" class="form-label">Correct Choice: </label>
                    </div>
                    <div class="col-md-2 pt-2 pb-2">
                    <input type="number" min="1" max="4" name="correct_choice" class="form-control" id="correct_choice" placeholder="" required>
                    </div>

                <!-- SUBMIT -->
                    <div class="col-md-4 pt-2 pb-2">
                        <input type="submit" name="submit" value="submit" class="btn btn-primary">
                    </div>
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