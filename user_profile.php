<?php
include 'header.php';
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
       $adress = $row1['display_name'];
       $meter = $row1['meter'];
       $email = $row1['email'];
       $phone = $row1['phone'];

     }

   	}

   ?>
 <div class="w3-center">
   <h3>Acount Management </h3>
 </div>
 <br>

 <div class="jumbotron">
   <h5>First Name: <?php echo $fname; ?></h5>
   <h5>Last Name: <?php echo $lname; ?></h5>
   <h5>Address: <?php echo $adress; ?></h5>
   <h5>Meter: <?php echo $meter; ?></h5>
   <h5>Email: <?php echo $email; ?></h5>
   <h5>Email: <?php echo $phone; ?></h5>
   <h4><a href="details.php?change=<?php echo $id;?>"> Edit Details</a></h4>
   <h4><a href="change_pass.php?pass=<?php echo $id;?>"> Change password</a></h4>

 </div>
 </div>
 <?php
 }









 include 'footer.php';
 ?>
