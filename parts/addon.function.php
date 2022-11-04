<?php
require "connection.php";

function check_login()
{
    if(empty($_SESSION['info'])){
        header("Location: login.php");
        die;
    }
}

function check_register()
{
    if(!empty($_SESSION['info'])){
        header("Location: userpanel.php");
        die;
    // }
    // elseif(!empty($_SESSION['admin'])){
    //     header("Location: adminpanel.php");
    //     die;
    }
}