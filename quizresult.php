<?php
  require ('parts/addon.function.php');
  // check_login();


  if (empty($_SESSION['score'])){
    $_SESSION['score'] = 0;
  }

?>
<!-- HEAD -->
<?php require('parts/part.head.php') ?>
<title>G1 Boost | Quiz Results</title>
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
          
          <form name="quiz" method="post" action="quiz20.php">

<?php

$mysqli = new mysqli("localhost","root","","capstone-conestoga-2022-grp7");


 

// Check connection

if ($mysqli -> connect_errno) {

echo "Failed to connect to MySQL: " . $mysqli -> connect_error;

exit();

}

error_reporting(0); 

if($_POST["do"]=="finish")

{

$rans=$_POST["rans"];

$tq=$_POST["tq"];

$end=$_POST["end"];

$startposition=$_POST["startposition"];

echo "<table cellpadding='5px' align='center' style='border:1px solid silver' width='100%' >";

echo "<tr><td>Total Question Attempt</td><td>",$tq,"</td><tr>";

echo "<tr><td>Correct Answer</td><td>",$rans,"</td></tr>";

echo "<tr><td>Wrong Answer</td><td>",$tq-$rans,"</td></tr>";

echo "<tr><td>Correct Answer Percentage</td><td>",$rans/$tq*100,"%</td></tr>";

echo "<tr><td>Wrong Answer Percenntage</td><td>",($tq-$rans)/$tq*100,"%</td></tr>";

echo "</table><br><br>";

$query="select * from quiz where qid<='$end' and qid>='$startposition'";

echo "<table cellpadding='5px' align='center' style='border:1px solid silver; width:100%'>";

echo "<tr><th colspan='4' id='heading'>Online Quiz Test Question</td></tr>";

$result=mysqli_query($mysqli,$query);

while ($row = mysqli_fetch_array($result)) {

 echo "<tr><td>",$row[0],"</td><td colspan='2'>",$row[1],"</td></tr><tr><td></td>";

echo "<td colspan='2'>A. ",$row[2],"</td>";

echo "<td colspan='2'>B. ",$row[3],"</td></tr>";

echo "<tr><td></td><td colspan='2'>C. ",$row[4],"</td>";

echo "<td colspan='1'>D. ",$row[5],"</td></tr>";

echo "<tr><td colspan='4' align='right' style='color:orange'>Correct option is ",strtoupper($row[6]),"</td></tr>";

echo "<tr><td colspan='4' align='right' style='color:orange'><hr></td></tr>";

 }

 echo "</table><br>";

 echo "<div class='col-md-5'>
 <a href='quiztype.php'>
   <button type='button' class='btn btn-primary col'>
     Take Another Test
   </button> 
 </a>
</div>
";

 echo "<p align='right'><a href='#' onclick='window.print()'>Print</a></p>";

 echo "<div style='visibility:hidden;display:none'>";

}

?>

            
        </div>
        </table>
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
