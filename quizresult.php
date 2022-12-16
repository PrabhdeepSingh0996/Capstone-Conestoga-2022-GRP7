<?php
  require ('parts/addon_function.php');
  check_login();

  if (empty($_SESSION['score'])){
    $_SESSION['score'] = 0;
  }

?>
<!-- HEAD -->
<?php require('parts/part_head.php') ?>
<title>G1 Boost | Quiz Results</title>
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
        <div class="col-md-8">
          <!-- QUIZ RESULT INFO -->
          <div class="row align-items-center">
            <div class="col-md-5">
              <h1>
                Quiz Results
              </h1>
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

              if($_POST["do"]=="finish"){
                $rans=$_POST["rans"];
                $tq=$_POST["tq"];
                $end=$_POST["end"];
                $startposition=$_POST["startposition"];

                echo "
                  <table cellpadding='5px' align='center' style='border:1px solid silver' width='100%' >
                    ";
                    echo "<tr><td>Total Question Attempt</td><td>",$tq,"</td><tr>";
                    echo "<tr><td>Correct Answer</td><td>",$rans,"</td></tr>";
                    echo "<tr><td>Wrong Answer</td><td>",$tq-$rans,"</td></tr>";
                    echo "<tr><td>Correct Answer Percentage</td><td>",round($rans/$tq*100,2),"%</td></tr>";
                    echo "<tr><td>Wrong Answer Percentage</td><td>",round(($tq-$rans)/$tq*100,2),"%</td></tr>";
                    echo "
                  </table><br><br>
                ";

                $query="select * from quiz where qid<'".($end-1)."' and qid>='$startposition'";

                echo "
                  <table cellpadding='5px' align='center' style='border:1px solid silver; width:100%'>
                    <tr>
                      <th colspan='4' id='heading'>
                        Online Quiz Test Question
                      </td>
                    </tr>
                ";

                $result=mysqli_query($mysqli,$query);
                while ($row = mysqli_fetch_array($result)) {

                  echo "
                    <tr>
                      <td>",$row[0]-$startposition+1,"</td>
                      <td colspan='2'>",$row[1],"</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td colspan='2'>A. ",$row[2],"</td>
                      <td colspan='2'>B. ",$row[3],"</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td colspan='2'>C. ",$row[4],"</td>
                      <td colspan='1'>D. ",$row[5],"</td>
                    </tr>
                    <tr>
                      <td colspan='4' align='right' style='color:orange'>Correct option is ",strtoupper($row[6]),"</td>
                    </tr>
                    <tr>
                      <td colspan='4' align='right' style='color:orange'><hr></td>
                    </tr>
                  ";
                }

                echo "
                  </table><br>
                ";

                echo "
                  <div class='col-md-5'>
                    <a href='quiztype.php'>
                      <button type='button' class='btn btn-primary col'>
                        Take Another Test
                      </button> 
                    </a>
                  </div>
                ";

                echo "
                  <div class='col-md-5'>
                      <a href='#' onclick='window.print()'><br>
                        <button type='button' class='btn btn-primary col'>
                          Print The Results
                        </button> 
                      </a>
                  </div>
                ";
                    
                echo "
                  <div style='visibility:hidden;display:none'>
                ";

              }
            ?>

          </form>
        </div>
      </div>
    </div>
  </header>

<!-- FOOTER -->
<?php include('parts/part_footer.php') ?>
<!-- FOOTER -->
