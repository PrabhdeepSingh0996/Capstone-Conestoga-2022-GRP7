<?php
require ('parts/addon.function.php');

if(!isset($_SESSION['score'])){
    $_SESSION['score'] = 0;
}

if($_POST){ 
    // print_r($_POST);
    // Selecting choice and question number
    $number = $_POST['number'];
    $selected_choice = $_POST['choice'];
    $next = $number+1;
    
    // Get total number of questions
    $query = "select * from `questions`";
    // Get results
    $results = mysqli_query($con,$query);
    $total = $results->num_rows;

    // Verify choice

    $query = "select * from `choices` 
      where question_number = $number AND is_correct = 1";
    // Result
    $results = mysqli_query($con,$query);
    // Get row
    // $row = mysqli_fetch_assoc($result);
    $row = $results->fetch_assoc();
    // Set the correct choice
    $correct_choice = $row['id'];
    // Compare choice
    if($correct_choice == $selected_choice){
        // if correct choice
        $_SESSION['score']++;
        // $_SESSION['info']['userscore']++;
    }

    // Check if it's the last question
    if($number == $total){
        header("Location: quizresult.php");
        exit();
    } else {
        header("Location: quiz20.php?n=".$next);
    }

}