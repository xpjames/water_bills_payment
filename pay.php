<?php
include_once "login/includes/login.inc.php";
include_once "login/includes/init.php";
 if(!logged_in()) {
  redirect("login/login.php");
}else{

  include 'header.php';
  ?>
  <div class="w3-center">
  <h3>Acount Management </h3>
</div>
<br>

<div class="jumbotron">
<h5><a href="creditcard.php">pay By credit card</a></h5>
<p>Pay directly with your visa </p> 
</div>

<div class="jumbotron">
  <h5><a href="mobile.php">through mobile banking </a></h5> 
  <p>Use mobile banking, pay through airtel, mtn and Zamtel mobile money apps.</p> 
</div>

<div class="jumbotron">
  <h5> <a href="paypal.php">Pay through paypal</a></h5> 
  <p>pay through paypal if you have an account with paypal </p> 
</div>

</div>
<br>
  <?php

  include 'footer.php';
}

 ?>
