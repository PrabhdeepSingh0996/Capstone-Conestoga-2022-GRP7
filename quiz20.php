<?php
  require ('parts/addon.function.php');
  // check_login();
?>
<<<<<<< Updated upstream
=======

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

echo "<tr><td>Total Question Attempted</td><td>",$tq,"</td><tr>";

echo "<tr><td>Correct Answers</td><td>",$rans,"</td></tr>";

echo "<tr><td>Wrong Answers</td><td>",$tq-$rans,"</td></tr>";

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

 echo "</table>";

 echo "<p align='right'><a href='#' onclick='window.print()'>Print</a></p>";

 echo "<div style='visibility:hidden;display:none'>";

}

?>


>>>>>>> Stashed changes
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
          <!-- HEADER TITLE(LOGIN FORM) -->
          <div class="row align-items-center">
            <div class="col-md-7">
              <h6>
                Basic 20 Rules 20 Signs Test
              </h6>
            </div>
<<<<<<< Updated upstream
            <div class="col-md-2">
              <h6>
                01/40
              </h6>
            </div>
            <div class="col-md-3">
=======
            
            <!-- <div class="col-md-3">
>>>>>>> Stashed changes
              <a href="quiztype.php">
                <button type="button" class="btn btn-primary col">
                  End Test
                </button>
              </a>
<<<<<<< Updated upstream
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
            <div class="col-12 pt-3">
              <input type="submit" class="btn btn-primary">
            </div>
          </form>
=======
            </div> -->
          </div>
          <div class="row align-items-center">
          <table cellpadding="10px" width="100%" >
         
          <?php

$start=$_POST["start"];

$s=$_POST["startposition"];

if($start==NULL)

{

$start=$_GET["start"];

$s=$_GET["start"];

}

$useropt=$_POST["useropt"];

$qid=$_POST["qid"];

$rans=$_POST["rans"];

$name=$_POST["name"];

$totalquestion=$_POST["totalquestion"];

if($start==NULL)

$query="select * from quiz where qid='1'";

else

{

$query="select * from quiz where qid='$start'";

}

$result=mysqli_query($mysqli,$query);

while ($row = mysqli_fetch_array($result)) {

  echo "<div class='form-check'><tr><td>",$row[0],"</td><td colspan='5'>",$row[1],"</td></tr></div><tr><td></td><td colspan='2'><input type='radio' name='useropt' value='a' class='form-check-input' id='flexRadioDefault1'/>  ",$row[2],"</td><td colspan='2'><input type='radio' name='useropt' value='b' class='form-check-input' /> ",$row[3],"</td></tr><tr><td></td><td colspan='2'><input type='radio' name='useropt' value='c' class='form-check-input' /> ",$row[4],"</td><td colspan='2'><input type='radio' name='useropt' value='d' class='form-check-input'/> ",$row[5],"</td></tr>";

echo "<tr ><td colspan='5' align='right'><input type='hidden' name='name' value='",$name,"'><input type='hidden' name='start' value='",$row[0]+1,"'><input type='hidden' name='qid' value='",$row[0],"'><input type='hidden' name='startposition' value='",$s,"'><input type='submit' value='Next Question' class='btn btn-primary col'><input type='hidden' name='totalquestion' value='",$totalquestion+1,"'>";

echo "</td></tr>";

}

echo "<tr><td colspan='4'>";

$query="select woptcode from quiz where qid='$qid'";

$result=mysqli_query($mysqli,$query);

while ($row = mysqli_fetch_array($result)) {

if(strcmp($row[0],$useropt)==0)

{

echo "<input type='hidden' name='rans' value='",$rans+1,"'>";

$rans=$rans+1;

}

else

echo "<input type='hidden' name='rans' value='",$rans,"'>";

}

echo "</td></tr>";

?>
      </table>  
      </div>  
      </form>
       

          <form method="post" action="quizresult.php">

  <input type="hidden" name="do" value="finish" />

  <input type="hidden" name="rans" value="<?php echo $rans;?>" />

  <input type="hidden" name="name" value="<?php echo $name;?>" />

  <input type="hidden" name="tq" value="<?php echo $totalquestion;?>" />

  <input type="hidden" name="end"  value="<?php echo $start+1;?>" />

  <input type="hidden" name="startposition" value="<?php echo $s;?>" />

  <input type="submit" value="Finish Online Test" class='btn btn-primary col'  />

</form>


      
>>>>>>> Stashed changes
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