<?php
  require ('parts/addon_function.php');
  check_login();
?>

  <form name="quiz" method="post" action="quiz20.php">
  <?php

 $mysqli = new mysqli("localhost","root","","capstone-conestoga-2022-grp7");

// Check connection

if ($mysqli -> connect_errno) {
echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
exit();
}

error_reporting(0); 

if($_POST["do"]=="finish"){
  $rans=$_POST["rans"];
  $tq=$_POST["tq"];
  $end=$_POST["end"];
  $startposition=$_POST["startposition"];

echo "<table cellpadding='5px' align='center' style='border:1px solid silver' width='100%' >";
echo "<tr><td style='color:white;'>Total Question Attempted</td><td style='color:white;'>",$tq,"</td><tr>";
echo "<tr><td style='color:white;'>Correct Answers</td><td style='color:white;'>",$rans,"</td></tr>";
echo "<tr><td style='color:white;'>Wrong Answers</td><td style='color:white;'>",$tq-$rans,"</td></tr>";
echo "<tr><td style='color:white;'>Correct Answer Percentage</td><td style='color:white;'>",$rans/$tq*100,"%</td></tr>";
echo "<tr><td style='color:white;'>Wrong Answer Percenntage</td><td style='color:white;'>",($tq-$rans)/$tq*100,"%</td></tr>";
echo "</table><br><br>";

$query="select * from quiz where qid<='$end' and qid>='$startposition'";

echo "<table cellpadding='5px' align='center' style='border:1px solid silver; width:100%'>";
echo "<tr><th colspan='4' id='heading'>Online Quiz Test Question</td></tr>";

$result=mysqli_query($mysqli,$query);

while ($row = mysqli_fetch_array($result)) {
  echo "<tr><td style='color:white;'>",$row[0]-$startposition+1,"</td><td style='color:white;' colspan='2'>",$row[1],"</td></tr><tr><td style='color:white;'></td>";
  echo "<td style='color:white;' colspan='2'>A. ",$row[2],"</td>";
  echo "<td style='color:white;' colspan='2'>B. ",$row[3],"</td></tr>";
  echo "<tr><td style='color:white;'></td><td style='color:white;' colspan='2'>C. ",$row[4],"</td>";
  echo "<td style='color:white;' colspan='1'>D. ",$row[5],"</td></tr>";
  echo "<tr><td style='color:white;' colspan='4' align='right' style='color:orange'>Correct option is ",strtoupper($row[6]),"</td></tr>";
  echo "<tr><td style='color:white;' colspan='4' align='right' style='color:orange'><hr></td></tr>";
 }

 echo "</table>";
 echo "<p align='right'><a href='#' onclick='window.print()'>Print</a></p>";
 echo "<div style='visibility:hidden;display:none'>";

}

?>


<!-- HEAD -->
<?php require('parts/part_head.php') ?>
<title>G1 Boost | 20 Question Quiz</title>
<!-- HEAD -->

<!-- NAV -->
<?php include('parts/part_nav.php') ?>
<!-- NAV -->

<!-- WAVE PATTERN Bottom -->
<?php
// include('parts/part_wave_bottom.php')
?>

  <!-- HEADER -->
  <header class="page-header page-padding_top_5 gradient">
    <div class="container pt-3" >
      <div class="row align-items-center justify-content-center">
        <!-- RIGHT -->
        <div class="col-md-5">
          <!-- QUIZ TYPE INFO -->
          <div class="row align-items-center">
            <div class="col-md-11">
              <h1>
                20 Rules & Signs Test
              </h1>
            </div>
          </div>

          <div class="row align-items-center">
            <table cellpadding="10px" width="100%" >
              <?php
                $start=$_POST["start"];
                $s=(int)$_POST["startposition"];

                if($start==NULL){
                $start=$_GET["start"];
                $s=(int)$_GET["start"];
                }

                $useropt=$_POST["useropt"]?$_POST["useropt"]:"none";
                $qid=$_POST["qid"];
                $rans=(int)$_POST["rans"];
                $name=$_POST["name"];
                $totalquestion=(int)$_POST["totalquestion"];

                $query="select woptcode from quiz where qid='$qid'";
                $result=mysqli_query($mysqli,$query);

                $row = mysqli_fetch_array($result);
                if(strcmp($row[0],$useropt)==0)
                    $rans=$rans+1;

                if($start==NULL)
                  $query="select * from quiz where qid='1'";
                else{
                  $query="select * from quiz where qid='$start'";
                }

                $result=mysqli_query($mysqli,$query);

                if ($row = mysqli_fetch_array($result)){
                  echo "
                  <div class='form-check'>
                    <tr>
                      <td style='color:white;'>",$totalquestion+1,"</td>
                      <td style='color:white;' colspan='5'>",$row[1],"</td>
                    </tr>
                  </div>
                  <tr>
                    <td style='color:white;'></td>
                    <td style='color:white;' colspan='2'>
                      <label>
                        <input type='radio' name='useropt' value='a' class='form-check-input' id='flexRadioDefault1' required/>  ",$row[2],"
                      </label>
                    </td>
                    <td style='color:white;' colspan='2'>
                      <label>
                        <input type='radio' name='useropt' value='b' class='form-check-input'  required/> ",$row[3],"
                      </label>
                    </td>
                  </tr>
                  <tr>
                    <td style='color:white;'></td>
                    <td style='color:white;' colspan='2'>
                      <label>
                        <input type='radio' name='useropt' value='c' class='form-check-input'  required/> ",$row[4],"
                      </label>
                    </td>
                    <td style='color:white;' colspan='2'>
                      <label>
                        <input type='radio' name='useropt' value='d' class='form-check-input' required/> ",$row[5],"
                      </label>
                    </td>
                  </tr>";
                    echo"
                  <tr >
                    <td style='color:white;' colspan='5' align='left'>
                      <input type='hidden' name='name' value='",$name,"'>
                      <input type='hidden' name='start' value='",($row[0]+1),"'>
                      <input type='hidden' name='qid' value='",$row[0],"'>
                      <input type='hidden' name='startposition' value='",$s,"'>
                      <input type='submit' value='Next Question' class='btn btn-primary col'>
                      <input type='hidden' name='totalquestion' value='",($totalquestion+1),"'>";
                      echo "
                    </td>
                  </tr>";
                  echo "<tr><td style='color:white;' colspan='4'>";
                  echo "<input type='hidden' name='rans' value='",($rans),"'>";
                  echo "</td></tr>";
                }
              ?>
              </form>
            </table>
              <form method="post" action="quizresult.php">
                <input type="hidden" name="do" value="finish" />
                <input type="hidden" name="rans" value="<?php echo $rans;?>" />
                <input type="hidden" name="name" value="<?php echo $name;?>" />
                <input type="hidden" name="tq" value="<?php echo $totalquestion;?>" />
                <input type="hidden" name="end"  value="<?php echo $start+1;?>" />
                <input type="hidden" name="startposition" value="<?php echo $s;?>" />
                <input type="<?php echo ($qid == 1 ) || ($qid != null) ? 'submit' : 'hidden';?>" value="Finish Online Test" class='btn btn-success col'  />
              </form>
          </div>
        </div>
        <!-- LEFT -->
        <div class="col-md-5 text-center">
          <img src="<?php echo $row[7] ? $row[7] : 'img/quizempty.png'?>" class="img-fluid quizimage" alt="An image related to MCQ Questions">
        </div>
      </div>
    </div>
  </header>

<!-- FOOTER -->
<?php include('parts/part_footer.php') ?>
<!-- FOOTER -->