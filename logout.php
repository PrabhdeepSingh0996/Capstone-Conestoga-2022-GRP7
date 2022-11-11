<?php
    require ('parts/addon.function.php');

// session_destroy();
UNSET($_SESSION['info']);
UNSET($_SESSION['score']);
// session_unset();
// session_regenerate_id();
header("location:login.php");
die;
?>