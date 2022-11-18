<?php
require_once "vendor/autoload.php";
 
use Omnipay\Omnipay;
 
define('CLIENT_ID', 'AQtUltgsK53_uUf_vhgeoLH9Z2fnjfwDdYQrMWUXKxHojYHGxctyiFwTryJ2KBwRxlyRKWPEBJZWvYbV');
define('CLIENT_SECRET', 'EA1xzoXcD9eAm5mwQ9raMTrFj2TcxbSadTwn2XcGqJ3Xa1nFbcqmboVpeID4lHDzZsWo9wryVrlI_Got');
 
define('PAYPAL_RETURN_URL', 'http://localhost/Capstone-Conestoga-2022-GRP7/success.php');
define('PAYPAL_CANCEL_URL', 'http://localhost/Capstone-Conestoga-2022-GRP7/cancel.php');
define('PAYPAL_CURRENCY', 'CAD'); // set your currency here
 
// Connect with the database
$db = new mysqli('localhost','root','','mydb'); 
 
if ($db->connect_errno) {
    die("Connect failed: ". $db->connect_error);
}
 
$gateway = Omnipay::create('PayPal_Rest');
$gateway->setClientId(CLIENT_ID);
$gateway->setSecret(CLIENT_SECRET);
$gateway->setTestMode(true); //set it to 'false' when go live
