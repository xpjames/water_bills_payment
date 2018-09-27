<?php
include_once "login/includes/login.inc.php";
include_once "login/includes/init.php";
 if(!logged_in()) {
  redirect("login/login.php");
}else{
  echo "Enter Your payment details";
  ?>
<h3><a href="records.php">Last Payment</a></h3>
  <h3><a href="payment_due.php">Payment Due </a></h3>
<h3>  <a href="pay.php">Pay for a selected month</a></h3>

  <?php
}
?>
