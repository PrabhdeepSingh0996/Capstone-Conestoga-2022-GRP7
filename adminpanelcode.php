<?php
  require ('parts/addon.function.php');
  
  if(isset($_POST['delete_user'])){
    $user_id = mysqli_real_escape_string($con, $_POST['delete_user']);
    $query = "DELETE FROM `user` WHERE user_id='$user_id'";
    $query_run = mysqli_query($con,$query);
    if($query_run){
      $_SESSION['message'] = "User Deleted Successfuly.";
      header("Location: adminpanel.php");
      exit(0);
    }
    else{
      $_SESSION['message'] = "Unable to Delete User.";
      header("Location: adminpanel.php");
      exit(0);
    }
  }

  if(isset($_POST['update_user'])){
    $user_id = mysqli_real_escape_string($con, $_POST['user_id']);
    $first_name = mysqli_real_escape_string($con, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($con, $_POST['last_name']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $query = "UPDATE `user` SET `first_name`='$first_name',`last_name`='$last_name',`email`='$email',`username`='$username',`password`='$password' 
      WHERE user_id='$user_id'";
    $query_run = mysqli_query($con,$query);
    if($query_run){
      $_SESSION['message'] = "User Updated Successfuly.";
      header("Location: adminpanel.php");
      exit(0);
    }
    else{
      $_SESSION['message'] = "Unable to Update User.";
      header("Location: adminpanel.php");
      exit(0);
    }
  }

  if(isset($_POST['save_user'])){
    $first_name = mysqli_real_escape_string($con, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($con, $_POST['last_name']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $query = "INSERT INTO `user` (first_name,last_name,email,username,password) 
      VALUES ('$first_name','$last_name','$email','$username','$password')";

    // capturing mysqli query results into variable result
    $query_run = mysqli_query($con,$query);
    if($query_run){
      $_SESSION['message'] = "User Created Successfuly.";
      header("Location: admincreate.php");
      exit(0);
    }
    else{
      $_SESSION['message'] = "Unable to Create User.";
      header("Location: admincreate.php");
      exit(0);
    }
  }
?>