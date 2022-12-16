  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img class="img-fluid" src="img/logo.png" alt="An image showing Logo of the website"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">

        <?php if(empty($_SESSION['info'])):?>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="form.php">Donate</a>
          </li>
            <?php else:?>
              <li class="nav-item">
            <a class="nav-link" href="quiztype.php">Quiz</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="form.php">Donate</a>
          </li>
          <?php endif;?>
          
          <?php if(empty($_SESSION['info'])):?>
            <li class="nav-item">
              <a class="nav-link" href="register.php" tabindex="-1">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="login.php" tabindex="-1">Log In</a>
            </li>
          <?php else:?>
            
            <?php if(isAdmin()):?>
              <li class="nav-item">
                <a class="nav-link " href="userpanel.php" tabindex="-1">User Panel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="adminpanel.php">Admin Panel</a>
              </li>
            <?php else:?>
            <li class="nav-item">
              <a class="nav-link " href="userpanel.php" tabindex="-1">User Panel</a>
            </li>
            <?php endif;?>

          <li class="nav-item">
            <a class="nav-link " href="logout.php" tabindex="-1">Log Out</a>
          </li>
          
          <?php endif;?>
          

        </ul>
      </div>
    </div>
  </nav>