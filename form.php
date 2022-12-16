<?php
  require ('parts/addon_function.php');
  // check_login();
?>
<!-- HEAD -->
<?php require('parts/part_head.php') ?>
<title>Driving Test | Login</title>

<!-- NAV -->
<?php 
include('parts/part_nav.php')
?>

  <!-- HEADER -->
  <header class="page-header page-padding_top_5 gradient">
    <div class="container pt-3" >
      <div class="row align-items-center justify-content-center">
        <!-- RIGHT -->
        <div class="col-md-5">
          <!-- HEADER TITLE(LOGIN FORM) -->
          <h1>
          Donate to Support Us
          </h1>
          <!-- HEADER PARAGRAPH -->
          <p>Please fill the form below</p>
          <!-- HEADER PARAGRAPH BUTTONS -->

          <?php
            if(!empty($error)){
              echo "<div>" .$error. "</div>";
            }
          ?>

          <form action="charge.php" method="POST">
            <div class="col-md-12">
              <label for="Name" class="form-label">Name</label>
              <input type="text" name="name" class="form-control" id="Name" placeholder="Enter your name" required>
            </div>
            <div class="col-md-12">
              <label for="Email" class="form-label">Email
              <input type="email" name="email" class="form-control" id="Email" placeholder="Enter your email" required>
            </div>
            <div class="col-md-12">
              <label for="Amount" class="form-label">Amount</label>
              <input type="text" name="amount" class="form-control" id="Amount" value="20.00" required>
            </div>
            <div class="col-12 pt-3">
             <!--<input type="submit" name="submit" value="Donate"  class="btn btn-primary">-->
             <div id="smart-button-container">
      <div style="text-align: center;">
        <div id="paypal-button-container"></div>
      </div>
    </div>
  <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=CAD" data-sdk-integration-source="button-factory"></script>
  <script>
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'rect',
          color: 'gold',
          layout: 'vertical',
          label: 'paypal',
          
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"amount":{"currency_code":"CAD","value":1}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
            
            // Full available details
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

            // Show a success message within this page, e.g.
            const element = document.getElementById('paypal-button-container');
            element.innerHTML = '';
            element.innerHTML = '<h3>Thank you for your payment!</h3>';

           // actions.redirect('success.php');
            // Or go to another URL:  actions.redirect('thank_you.html');
            
          });
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
    }
    initPayPalButton();
  </script>
              
            </div>
          </form>
        </div>
        <!-- LEFT -->
        <div class="col-md-5">
          <!-- https://pixabay.com/illustrations/id-driving-license-personal-identity-4157974/ -->
          <img src="img/login.png" class="img-fluid" alt="An image depicting an identification card">
        </div>
      </div>
    </div>
  </header>

<!-- FOOTER -->
<?php include('parts/part_footer.php') ?>
<!-- FOOTER -->