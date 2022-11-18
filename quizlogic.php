<?php
require ('parts/addon.function.php');

if(!isset($_SESSION['score'])){
    $_SESSION['score'] = 0;
}

if($_POST){ 
    // selecting a choice and the question number
    $number = $_POST['number'];
    $selected_choice = $_POST['choice'];
    $next = $number+1;
    
    // getting total number of questions
    $query = "select * from `questions`";
    // getting results
    $results = mysqli_query($con,$query);
    $total = $results->num_rows;

    // verifying the choice

    $query = "select * from `choices` 
      where question_number = $number AND is_correct = 1";
    // getting results
    $results = mysqli_query($con,$query);
    // getting row
    $row = $results->fetch_assoc();
    // setting the correct choice
    $correct_choice = $row['id'];
    // comparing the choices
    if($correct_choice == $selected_choice){
        // if the choice is correct
        $_SESSION['score']++;
    }

    // checking if it is the last question in the quiz
    if($number == $total){
        header("Location: quizresult.php");
        exit();
    } else {
        header("Location: quiz20.php?n=".$next);
    }

}