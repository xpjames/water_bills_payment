<?php
  session_start();
  include 'config.php';
require ('includes/require.php');
include_once "login/includes/login.inc.php";
include_once "login/includes/init.php";
 if(!logged_in()) {
  redirect("login/login.php");
}else{


include 'header.php';
  	if(isset($_SESSION['email']))
  	{

  	$mail = $_SESSION['email'];

    $query1 = "SELECT * FROM member WHERE email = '$mail'";
    $res1 = mysqli_query($con,$query1);

    while ($row1 = mysqli_fetch_array($res1,MYSQLI_ASSOC)) {
      $id = $row1['id'];
      $fname = $row1['first_name'];
      $lname = $row1['last_name'];
      $meter = $row1['meter'];
    }

  	}
  ?>
<div class="w3-center">
  <h3>Acount Management </h3>
</div>
<br>

<div class="jumbotron">
  <h5>pay Bills</h5> 


  <form action="stripeIPN.php?id=<?php echo $id; ?>" method="POST">
    <select name="month" placeholder="select a month you want to pay for" value="<?php if(isset($_POST['month'])) echo $_POST['month'];?>" style="border-radius: 4px;">
      <option value="" disabled selected>Select a month</option>
      <option value="">None</option>
      <option value="<?php echo date("Y").'01'.'01';?>">January <?php echo date('Y');?></option>
      <option value="<?php echo date("Y").'02'.'01';?>">Feburay <?php echo date('Y');?></option>
      <option value="<?php echo date("Y").'03'.'01';?>">March <?php echo date('Y');?></option>
      <option value="<?php echo date("Y").'04'.'01';?>">April <?php echo date('Y');?></option>
      <option value="<?php echo date("Y").'05'.'01';?>">May <?php echo date('Y');?></option>
      <option value="<?php echo date("Y").'06'.'01';?>">June <?php echo date('Y');?></option>
      <option value="<?php echo date("Y").'07'.'01';?>">July <?php echo date('Y');?></option>
      <option value="<?php echo date("Y").'08'.'01';?>">August <?php echo date('Y');?></option>
      <option value="<?php echo date("Y").'09'.'01';?>">September <?php echo date('Y');?></option>
      <option value="<?php echo date("Y").'10'.'01';?>">October <?php echo date('Y');?></option>
      <option value="<?php echo date("Y").'11'.'01';?>">November <?php echo date('Y');?></option>
      <option value="<?php echo date("Y").'12'.'01';?>">December <?php echo date('Y');?></option>


    </select>
    <input type="text" name="amount" value="<?php if(isset($_POST['amount'])) $amount= $_POST['amount'];?>" />
    <input type="hidden" name="id" value="<?php echo $id; ?>" />
    <input type="hidden" name="names" value="<?php echo $fname.' '.$lname; ?>" />
    <input type="hidden" name="meter" value="<?php echo $meter; ?>" />
    <script
      src="https://checkout.stripe.com/checkout.js" class="stripe-button"
      data-key="pk_test_FZ0ze41exCSXFYq5gZyyu4LQ"
      data-amount= echo $amount
      data-name="Water payment for the month "
      data-description="Lusaka City Council "
      data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
      data-locale="auto">
    </script>
  </form>
  </div>
  </div>
<br>
  <?php

}
include 'footer.php';
?>
