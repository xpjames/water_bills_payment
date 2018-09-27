<?php

require 'config.php';
require 'includes/require.php';

// Token is created using Checkout or Elements!
// Get the payment token ID submitted by the form:
$token = $_POST['stripeToken'];

$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
$string = "";
$string = "";
$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
for($i=0;$i<10;$i++)
$string.=substr($chars,rand(0,strlen($chars)),1);
$string .= substr ( $chars ,rand(0, strlen ( $chars )),1);
$tid=$string;
$month = mysqli_real_escape_string($con,trim($_POST['month']));
$id = mysqli_real_escape_string($con,trim($_POST['id']));
$meter = mysqli_real_escape_string($con,trim($_POST['meter']));
$names = mysqli_real_escape_string($con,trim($_POST['names']));
$day = date("Y-m-d");
$amount = mysqli_real_escape_string($con,trim($_POST['amount']));

$sql1 = "INSERT INTO transactions (customer_name,meter,transaction_id,paid_amount,day) VALUES ('$names','$meter','$tid',$amount,'$month')";
$result = mysqli_query($con,$sql1);


$charge = \Stripe\Charge::create([
    'amount' => $amount,
    'currency' => 'USD',
    'description' => $names,
    'source' => $token,
    'statement_descriptor' => 'Meter Number '.$meter,
]);


if ($result) {
  include 'header.php';
  ?>
<div class="w3-center">
  <h3>Acount Management </h3>
</div>
<br>
<br>

<div class="jumbotron">
  <h2>Payment Successful</h2> 
       <h3 >
  <a href="receipt.php?id=<?php echo $meter;?>"><span class="glyphicon glyphicon-print"></span> Print receipt</a>
       </h3> 
</div>

</div>
<br>
 

 <?php
 include 'footer.php';
}
else {
  echo "<h4>Payment Failed</h4>";
}

 ?>
