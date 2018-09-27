<?php
  include 'header.php';
include 'includes/require.php';
  if (isset($_GET['change'])) {
  	$id = $_GET['change'];
  	$sql = "SELECT * FROM member WHERE id='$id'";
  	$res1 = mysqli_query($con,$sql);
    while ($row1 = mysqli_fetch_array($res1,MYSQLI_ASSOC)) {
      $id = $row1['id'];
      $nrc = $row1['nrc'];
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
      <form action="details.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id;?>">
        <h5>First Name: </h5><input type="text" name="fname" value="<?php echo $fname; ?>">
        <h5>Last Name:  </h5> <input type="text" name="lname" value="<?php echo $lname; ?>">
        <h5>NRC or Passport:  </h5> <input type="text" name="nrc" value="<?php echo $nrc; ?>">
        <h5>Address: </h5> <input type="text" name="address" value="<?php echo $adress; ?>">
        <h5>Meter: </h5> <input type="text" name="meter" value="<?php echo $meter; ?>">
        <h5>Email: </h5> <input type="text" name="email" value="<?php echo $email; ?>">
        <h5>Phone : </h5> <input type="text" name="phone" value="<?php echo $phone; ?>">
      <h4><input type="submit" name="submit" value="submit"></</h4>
    </form>
    </div>
    </div>

<?php
}

if(isset($_POST['submit'])){
$id = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$nrc = $_POST['nrc'];
$adress = $_POST['address'];
$meter = $_POST['meter'];
$email = $_POST['email'];
$phone = $_POST['phone'];

  $updateQuery = "UPDATE member SET first_name='$fname', last_name='$lname', nrc='$nrc', meter='$meter', display_name='$adress',
  email='$email', phone='$phone' WHERE id = '$id' ";;
  $res = mysqli_query($con,$updateQuery);
  if ($res) {
    echo "Details Changed";
  }
  else {
    echo "failed";
  }


}



include 'footer.php';
 ?>
