<?php

require 'stripe-php-master/init.php';

$stripeDetails = array(
  "secretKey" => "sk_test_6mlnzZyXk0R3DrlBEmVZH1w3",
  "publishableKey" => "pk_test_FZ0ze41exCSXFYq5gZyyu4LQ"
);

// Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
\Stripe\Stripe::setApiKey("sk_test_6mlnzZyXk0R3DrlBEmVZH1w3");

 ?>
