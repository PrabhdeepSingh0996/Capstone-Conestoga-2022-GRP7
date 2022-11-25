<?php
  require ('parts/addon.function.php');
  check_login();

//   // getting variables with post
//   if(isset($_POST['submit'])){
//     $qid = $_POST['qid'];
//     $question_text = $_POST['question_text'];
//     $correct_choice = $_POST['correct_choice'];
//     // creating an array for choices
//     $choices = array();
//     $choices[1] = $_POST['choice1'];
//     $choices[2] = $_POST['choice2'];
//     $choices[3] = $_POST['choice3'];
//     $choices[4] = $_POST['choice4'];

//     // inserting data into question table
//     $query = "INSERT INTO `questions`(`qid`, `text`) VALUES ('$qid', '$question_text')";
//     // running insert_row query
//     $insert_row = mysqli_query($con,$query);
//     // validating inserted data
//     // if insert_row query is run
//     if($insert_row){
//       // add data into choice index from choices
//       foreach($choices as $choice => $value){
//         // if value for choice is not empty
//         if($value != ''){
//           // if the correct_choice variable value is equal to the choice variable
//           if($correct_choice == $choice){
//             // set is_correct to 1 in the choice query
//             $is_correct = 1;
//           }else{
//             // else set it to 0
//             $is_correct = 0;
//           }
//           // choice query
//           $query = "INSERT INTO `choices`(`qid`, `is_correct`, `text`) VALUES ('$qid','$is_correct','$value')";
//           // runing the query
//           $insert_row = mysqli_query($con,$query);
//           // validating insert
//           if($insert_row){
//             continue;
//           }else{
//             die;
//           }
//         }
//       }
//     }
//     $msg = 'The Question has been added!';
//   }

//   // Getting all the questions
//   $query = "SELECT * FROM `questions`";
//   // Getting the results
//   $questions = mysqli_query($con,$query);
//   $total = $questions->num_rows;
//   $next = $total+1;
// ?>

<?php

 $mysqli = new mysqli('localhost','root','','capstone-conestoga-2022-grp7');

 

// Check connection

if ($mysqli -> connect_errno) {

echo "Failed to connect to MySQL: " . $mysqli -> connect_error;

exit();

}

 error_reporting(0);

 
 if($_POST["do"]=="quiz")

{

$question=$_POST["question"];

$opt1=$_POST["opt1"];

$opt2=$_POST["opt2"];

$opt3=$_POST["opt3"];

$opt4=$_POST["opt4"];

$woptcode=$_POST["woptcode"];

$query="select * from quiz ";

$temp=1;

 $result=mysqli_query($mysqli,$query);

while ($row = mysqli_fetch_array($result)) {

$temp=$temp+1;

}

$query="insert into quiz values($temp,'$question','$opt1','$opt2','$opt3','$opt4','$woptcode')";

$result=mysqli_query($mysqli,$query);

echo "<br><br><center>Successfully Saved</center><br><br>";

}

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
                        <label for="id"class="form-label">Question Number: </label>
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
                          name="qid" class="form-control"placeholder="" required
                          value=
                            "<?php
                              echo $next;
                            ?>"
                        >
                    </div>
                </div>

                <!-- Question Text-->
                <div class="col-md-10 pt-2 pb-2">
                    <label for="qid" class="form-label">Question:</label>
                    <input type="text" name="question" class="form-control" id="question" placeholder="Enter your Question" required>
                </div>
                <!-- Question opt 1 -->
                <div class="col-md-10 pt-2 pb-2">
                    <!-- <label for="qid" class="form-label">Question opt 1</label> -->
                    <input type="text" name="opt1" class="form-control" id="opt1" placeholder="Enter opt 1 for the Question" required>
                </div>
                <!-- Question opt 2 -->
                <div class="col-md-10 pt-2 pb-2">
                    <!-- <label for="qid" class="form-label">Question opt 2</label> -->
                    <input type="text" name="opt2" class="form-control" id="opt2" placeholder="Enter opt 2 for the Question" required>
                </div>
                <!-- Question opt 3 -->
                <div class="col-md-10 pt-2 pb-2">
                    <!-- <label for="qid" class="form-label">Question opt 3</label> -->
                    <input type="text" name="opt3" class="form-control" id="opt3" placeholder="Enter opt 3 for the Question" required>
                </div>
                <!-- Question opt 4 -->
                <div class="col-md-10 pt-2 pb-2">
                    <!-- <label for="qid" class="form-label">Question opt 4</label> -->
                    <input type="text" name="opt4" class="form-control" id="opt4" placeholder="Enter opt 4 for the Question" required>
                </div>
                
                <div class="row align-items-center">
                <!-- Correct Question opt -->
                    <div class="col-md-4 pt-2 pb-2">
                    <label for="qid" class="form-label">Correct opt: </label>
                    </div>
                    <div class="col-md-2 pt-2 pb-2">
                    <select name="woptcode"  class="form-control" id="woptcode" placeholder="" required>

                              <option value="a">A</option>

                              <option value="b">B</option>

                              <option value="c">C</option>

                              <option value="d">D</option>

                              </select>
                    <!-- <input type="number" min="1" max="4" name="correct_opt" class="form-control" id="correct_opt" placeholder="" required> -->
                    </div>

                <!-- SUBMIT -->
                    <div class="col-md-4 pt-2 pb-2">
                    <td colspan="2" align="center"><input type="hidden" name="do" value="quiz" />
                        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
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