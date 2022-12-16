<?php
    if(isset($_SESSION['message'])):
?>

<div class="alert alert-success alert-dismissible fade show" role="alert">
  <?=$_SESSION['message'];?>
</div>
<?php
    unset($_SESSION['message']);
    endif;
?>