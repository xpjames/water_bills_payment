<?php
  session_start();
  include 'header.php';
include 'config.php';
require ('includes/require.php');
include_once "login/includes/login.inc.php";
include_once "login/includes/init.php";
 if(!logged_in()) {
  redirect("login/login.php");
}else{

  if (isset($_GET['edit'])) {
  	$id = $_GET['edit'];
  	$sql = "SELECT * FROM member WHERE id='$id'";
  	$r = mysqli_query($con,$sql);
    while ($row1 = mysqli_fetch_array($res1,MYSQLI_ASSOC)) {
      $id = $row1['id'];
      $fname = $row1['first_name'];
      $lname = $row1['last_name'];
      $adress = $row1['display_name'];
      $meter = $row1['meter'];
      $email = $row1['email'];
      $phone = $row1['phone'];

    }
    ?>
    <div class="w3-center">
      <h3>Acount Management </h3>
    </div>
    <br>

    <div class="jumbotron">
      <form action="" method="POST">
      <h5>First Name: </h5><input type="text" name="fname" value="<?php echo $fname; ?>">
      <h5>Last Name:  </h5> <input type="text" name="lname" value="<?php echo $lname; ?>">
      <h5>Address: </h5> <input type="text" name="address" value="<?php echo $adress; ?>">
      <h5>Meter: </h5> <input type="text" name="meter" value="<?php echo $meter; ?>">
      <h5>Email: </h5> <input type="text" name="email" value="<?php echo $email; ?>">
      <h5>Email: </h5> <input type="text" name="phone" value="<?php echo $phone; ?>">
      <h4><a href="edit.php?pass=<?php echo $id;?>"> Change password</a></h4>
    </form>
    </div>
    </div>
    <?php
}


}

  ?>




 <?php


 if (isset($_GET['edit-info']) && !empty($_GET['editinfo'])) {


 $updateQuery = "UPDATE member SET first_name='$title', last_name='$oprice', nrc='$brand',
            meter='$category', display_name='$sub_category', email='$image', phone='$details' WHERE id = '$toEditID' ";
$res1 = mysqli_query($con,$updateQuery);
}
if (res1) {
  redirect(edit.php);
}
else {
  echo "Update Failed";
}

if (isset($_GET['pass']) && !empty($_GET['pass'])) {


$updateQuery = "UPDATE member SET password='$pass' WHERE id = '$toEditID' ";
}
include 'footer.php';

 ?>
