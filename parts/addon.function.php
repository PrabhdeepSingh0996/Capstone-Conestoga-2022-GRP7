<?php
require "connection.php";

define('user_level_admin', '1');
function isAdmin(){
    if(isset($_SESSION['info']) && $_SESSION['info'] && user_level_admin == $_SESSION['info']['usertype']){
        return true;
    }else{
        return false;
    }
}

function check_login()
{
    if(empty($_SESSION['info'])){
        header("Location: login.php");
        die;
    }
}

function check_register()
{
    if(!empty($_SESSION['info']))
    {
        header("Location: userpanel.php");
        die;
    }
}