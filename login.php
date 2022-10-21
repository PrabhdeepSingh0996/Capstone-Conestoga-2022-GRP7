<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Driving Test | Login</title>
  <!-- BOOTSTRAP 5.0.2 -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="css/style.css" />
  <!-- GOOGLE FONT -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">
</head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img class="img-fluid" src="img/logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="login.php" tabindex="-1" >Login</a>
          </li>
          <li class="nav-item"> 
            <a class="nav-link" href="register.php" tabindex="-1" >Register</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  

  <!-- HEADER -->
  <header class="page-header gradient">
    <div class="container pt-3" >
      <div class="row align-items-center justify-content-center">
        <div class="col-md-5">
          <!-- HEADER TITLE(REGISTRATION FORM) -->
          <h2>
            G1 Boost | Login
          </h2>
          <!-- HEADER PARAGRAPH -->
          <p>If you have already an account then login here!!<br>
          Enter correct username and password.</p>
          <!-- HEADER PARAGRAPH BUTTONS -->
          <form>
            <div class="mb-3">
              <label for="formGroupExampleInput" class="form-label">Username</label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Username" required>
            </div>
            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">Password</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter your Password." required>
            </div>
            <button type="button" class="btn btn-primary">
              Login.
            </button>

        </form>
        </div>
        <div class="col-md-5">
          <img src="img/id1.png" class="img-fluid" alt="identification card header image">
        </div>
      </div>
    </div>

    <!-- WAVE PATTERN 1 -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#fff" 
        fill-opacity="1" 
        d="M0,128L60,122.7C120,117,240,107,360,117.3C480,128,600,160,720,160C840,160,960,128,1080,128C1200,128,1320,160,1380,176L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
      </path>
    </svg>

  </header>

  <!-- SOCIAL MEDIA LINKS -->
  <section class="socials">
    <div class="container text-center">
      <div class="row g-3">
          <div class="col-md-2"><img class="img-fluid page-icon" src="img/socials/twitter.svg" alt="logo for social media"></div>
          <div class="col-md-2"><img class="img-fluid page-icon" src="img/socials/facebook.svg" alt="logo for social media"></div>
          <div class="col-md-2"><img class="img-fluid page-icon" src="img/socials/instagram.svg" alt="logo for instagram social media"></div>
          <div class="col-md-2"><img class="img-fluid page-icon" src="img/socials/googleplus.svg" alt="logo for googleplus social media"></div>
          <div class="col-md-2"><img class="img-fluid page-icon" src="img/socials/tumblr.svg" alt="logo for tumblr social media"></div>
          <div class="col-md-2"><img class="img-fluid page-icon" src="img/socials/youtube.svg" alt="logo for youtube social media"></div>
      </div>
    </div>
  </section>

    <!-- WAVE PATTERN 2 -->
  <section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path 
        fill="#54d3db" 
        fill-opacity="1" 
        d="M0,224L48,218.7C96,213,192,203,288,213.3C384,224,480,256,576,245.3C672,235,768,181,864,176C960,171,1056,213,1152,229.3C1248,245,1344,235,1392,229.3L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
      </path>
    </svg>
  </section>

  <!-- FOOTER -->
  <footer class="page-footer gradient">
    <div class="container text-center">
      <div class="row align-items-center justify-content-center">
        <!-- FOOTER COL 1 -->
        <div class="col-md-5">
          <!-- FOOTER TITLE -->
          <h2>
            G1 Boost | Licence Practice Test
          </h2>
          <!-- FOOTER PARAGRAPH -->
          <p>Try out our new approach to learning with interactive and fast paced quizes that will help you clear your G1 Test.</p>
        </div>

        <!-- FOOTER COL 2 -->
        <div class="col-md-5">
        <!-- FOOTER COL1.ROW 1 AND RELATED COLS -->
          <div class="row">
            <div class="col p-1">
              Your Account
            </div>
            <div class="col p-1">
              Team
            </div>
            <div class="col p-1">
              About Us
            </div>
          </div>
        <!-- FOOTER COL1.ROW 2 AND RELATED COLS -->
          <div class="row ">
            <div class="col p-1">
              Quiz List
            </div>
            <div class="col p-1">
              Terms of Service
            </div>
            <div class="col p-1">
              Contact Us
            </div>
          </div>
        <!-- FOOTER COL1.ROW 3 AND RELATED COLS -->
          <div class="row">
            <div class="col p-1">
              Results
            </div>
            <div class="col p-1">
              Privacy Policy
            </div>
            <div class="col p-1">
              Help
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- BOOTSTRAP JS 5.0.2 -->
  <script src="js/bootstrap.min.js"></script> 
</body>
</html>