<?php
require_once 'config.php';
  require ('parts/addon.function.php');
  // check_login();
?>
<!-- HEAD -->
<?php require('parts/part.head.php') ?>
<title>Driving Test | Form</title>
<!-- HEAD -->

<!-- NAV -->
<?php include('parts/part.nav.php') ?>
<!-- NAV -->

<!-- WAVE PATTERN Bottom -->
<?php
// include('parts/part.wave_bottom.php')
?>

  <!-- HEADER -->
  <header class="page-header page-padding_top_5 gradient">
    <div class="container pt-3" >
      <div class="row align-items-center justify-content-center">
        <div class="col-md-5">
          <!-- HEADER TITLE -->
          <?php

 
// Once the transaction has been approved, we need to complete it.
if (array_key_exists('paymentId', $_GET) && array_key_exists('PayerID', $_GET)) {
    $transaction = $gateway->completePurchase(array(
        'payer_id'             => $_GET['PayerID'],
        'transactionReference' => $_GET['paymentId'],
    ));
    $response = $transaction->send();
 
    if ($response->isSuccessful()) {
        // The customer has successfully paid.
        $arr_body = $response->getData();
 
        $payment_id = $arr_body['id'];
        $payer_id = $arr_body['payer']['payer_info']['payer_id'];
        $payer_email = $arr_body['payer']['payer_info']['email'];
        $amount = $arr_body['transactions'][0]['amount']['total'];
        $currency = PAYPAL_CURRENCY;
        $payment_status = $arr_body['state'];
 
        $db->query("INSERT INTO payments(payment_id, payer_id, payer_email, amount, currency, payment_status) VALUES('". $payment_id ."', '". $payer_id ."', '". $payer_email ."', '". $amount ."', '". $currency ."', '". $payment_status ."')");
 
        echo "<h3>Payment is successful. Your payment id is: </h3>". $payment_id;
    } else {
        echo $response->getMessage();
    }
} else {
    echo '<h3>Transaction is declined</h3>';
}
?>
        </div>
          <!-- HEADER IMAGE -->

      </div>
    </div>
  </header>
  <!-- FOOTER -->
<?php include('parts/part.footer.php') ?>
<!-- FOOTER -->

