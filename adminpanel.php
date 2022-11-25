<?php
  require ('parts/addon.function.php');
  // check_login();

?>

<!-- HEAD -->
<?php require('parts/part.head.php') ?>
<title>G1 Boost | Admin Panel</title>

<!-- NAV -->
<?php
include('parts/part.nav.php')
?>
  <!-- HEADER -->
  <header class="page-header page-padding_top_5 gradient">
    <div class="container pt-3" >
      <div class="row align-items-center justify-content-center">
        <!-- RIGHT -->
        <div class="col-md-5">
          <!-- HEADER TITLE(LOGIN FORM) -->
          <h1>
            Admin Panel
          </h1>
          <!-- HEADER PARAGRAPH -->
          <p>Welcome 
            <?php 
              echo $_SESSION['info']['first_name'];
            ?>!
            <br>Here you can view all the users and make changes to them.
          </p>
          
          <?php 
            include('parts/addon.message.php') 
          ?>

          <!-- <div class="col-12 pt-3">
            <a href="admincreate.php">
              <button type="button" class="btn btn-outline-primary btn-sm btn-rounded"> Add a new user </button>
            </a>
          </div> -->
          <p>
            <?php
              include('parts/addon.message.php')
            ?>
          </p>
          <table class="table-responsive table align-middle mb-0">
            <thead>
              <tr>
                <th scope="col">Image</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Username</th>
                <th scope="col" colspan="2">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $query = "SELECT * FROM `user`";
                $query = mysqli_query($con,$query);
                if (mysqli_num_rows($query) > 0){
                    foreach($query as $user){
                      ?>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center"> <img src=
                            "<?php 
                              echo $user['image']
                            ?>"
                              class="img-fluid .rounded shadow-2-strong img-thumb-max" alt="identification card header image">
                          </div>
                        </td>
                        <td> <p class="fw-normal mb-1"> <?= $user['first_name']; ?> </p> </td>
                        <td> <p class="fw-normal mb-1"> <?= $user['last_name']; ?> </p> </td>
                        <td> <p class="fw-normal mb-1"> <?= $user['email']; ?> </p> </td>
                        <td> <p class="fw-normal mb-1"> <?= $user['username']; ?> </p> </td>

                        <td> 
                          <a href="adminedit.php?user_id=<?= $user['user_id']; ?>">
                            <button type="button" class="btn btn-success btn-sm btn-rounded"> Edit </button>
                          </a>
                        </td>
                        <td>
                          <form action="adminpanelcode.php" method="POST">
                              <button type="submit" name="delete_user" value="<?=$user['user_id']; ?>" class="btn btn-danger btn-sm btn-rounded"> Delete </button>
                          </form>
                        </td>
                      </tr>
              <?php
                    }
                }else{
                  echo "<h3>No Data Found.</h3>";
                }
              ?>
            </tbody>
          </table>
        </div>
        <!-- LEFT -->
        <div class="col-md-3">
          <!-- <img src="img/profile.png" class="img-fluid" alt="identification card header image"> -->
        </div>
      </div>
    </div>
  </header>
<!-- FOOTER -->
<?php include('parts/part.footer.php') ?>
<!-- FOOTER -->