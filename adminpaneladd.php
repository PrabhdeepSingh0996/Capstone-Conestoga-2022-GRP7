<?php
  require ('parts/addon.function.php');
  // check_login();

  // // Get variables with post
  // if(!isset($_POST['submit'])){
  //   $question_number = $_Post['question_number'];
  //   $question_text = $_Post['question_text'];
  //   // Choices Array
  //   $choices = array();
  //   // Passing variables into choices
  //   $choices[1] = $_POST['choice1'];
  //   $choices[2] = $_POST['choice2'];
  //   $choices[3] = $_POST['choice3'];
  //   $choices[4] = $_POST['choice4'];

  //   // Inserting data into question table
  //   $query = "insert into `questions`(question_number, text) values('$question_number', '$question_text')"; 
  //   // Running query
  //   $insert_row = $mysqli->query($query) or die($mysqli->error);
  //   // $insert_row = mysqli_query($con,$query);
  //   // Validation inserted data
  //   if($insert_row){
  //     foreach($choices as $choice => $value){
  //       if($value != ''){
  //         if($correct_choice == $choice){
  //           $is_correct = 1;
  //         }else{
  //           $is_correct = 0;
  //         }
  //         // choice query
  //         $query = "insert into `choices` (question_number, is_correct, text) values ('question_number','$is_correct','$value')";
  //         // run query
  //         $insert_row = $mysqli->query($query) or die($mysqli->error);
  //         // $insert_row = mysqli_query($con,$query);
  //         // validate insert
  //         if($insert_row){
  //           continue;
  //         }else{
  //           die;
  //         }
  //     }
  //   }
  // }
  //   $msg = 'Question has been added';
  //   // Inserting data into choices table

  // }

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
              // if(isset($msg)){
                // echo '<p>'.$msg.'</p>';
              // }
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
                        <input type="number" min="1" max="100"  name="question_number" class="form-control" id="question_number" placeholder="" required>
                    </div>
                </div>

                <!-- Question -->
                <div class="col-md-10 pt-2 pb-2">
                    <label for="question_number" class="form-label">Question:</label>
                    <input type="text" name="question" class="form-control" id="question" placeholder="Enter your Question" required>
                </div>
                <!-- Question Choice 1 -->
                <div class="col-md-10 pt-2 pb-2">
                    <!-- <label for="question_number" class="form-label">Question Choice 1</label> -->
                    <input type="text" name="choice_1" class="form-control" id="choice_1" placeholder="Enter Choice 1 for the Question" required>
                </div>
                <!-- Question Choice 2 -->
                <div class="col-md-10 pt-2 pb-2">
                    <!-- <label for="question_number" class="form-label">Question Choice 2</label> -->
                    <input type="text" name="choice_2" class="form-control" id="choice_2" placeholder="Enter Choice 2 for the Question" required>
                </div>
                <!-- Question Choice 3 -->
                <div class="col-md-10 pt-2 pb-2">
                    <!-- <label for="question_number" class="form-label">Question Choice 3</label> -->
                    <input type="text" name="choice_3" class="form-control" id="choice_3" placeholder="Enter Choice 3 for the Question" required>
                </div>
                <!-- Question Choice 4 -->
                <div class="col-md-10 pt-2 pb-2">
                    <!-- <label for="question_number" class="form-label">Question Choice 4</label> -->
                    <input type="text" name="choice_4" class="form-control" id="choice_4" placeholder="Enter Choice 4 for the Question" required>
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
                        <input type="button" name="submit" value="submit" class="btn btn-primary">
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