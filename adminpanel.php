<?php
  require ('parts/addon.function.php');
  // check_login();
  // print_r($_GET);

  if (!isAdmin()){
    header('location: index.php');
  }
?>

<!-- HEAD -->
<?php require('parts/part.head.php') ?>
<title>Admin Panel</title>

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
          <h2>
            Admin Panel
          </h2>
          <!-- HEADER PARAGRAPH -->
          <p>Welcome 
            <?php 
              echo $_SESSION['info']['first_name'];
            ?>!
            <br>Here you can view all the users and make changes to them.
          </p>
          <table class="table align-middle mb-0">
            <thead>
              <tr>
                <th>Image</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Username</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <!-- https://pixabay.com/illustrations/profile-pic-profile-avatar-design-7437435/ -->
                    <img
                      src="img/profile.png"
                      alt=""
                      class="rounded-circle profile-icon"
                    />
                  </div>
                </td>
                <td>
                  <p class="fw-normal mb-1">
                    <?php
                      echo $_SESSION['info']['first_name'];
                    ?>
                  </p>
                </td>
                <td>
                  <p class="fw-normal mb-1">
                    <?php
                      echo $_SESSION['info']['last_name'];
                    ?>
                  </p>
                </td>
                <td>
                  <p class="fw-normal mb-1">
                    <?php
                      echo $_SESSION['info']['email'];
                    ?>
                  </p>
                </td>
                <td>
                  <p class="fw-normal mb-1">
                    <?php
                      echo $_SESSION['info']['username'];
                    ?>
                  </p>
                </td>
                <td>
                  <button type="button" class="btn btn-custom-aqua btn-sm btn-rounded">
                    Edit
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
          <form method="post">
            <div class="col-12 pt-3">
              <input type="submit" class="btn btn-primary">
            </div>
          </form>
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