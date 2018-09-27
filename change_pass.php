<?php
  include 'header.php';
include 'includes/require.php';
  if (isset($_GET['pass'])) {
  	$id = $_GET['pass'];
  	$sql = "SELECT * FROM member WHERE id='$id'";
  	$res1 = mysqli_query($con,$sql);
    while ($row1 = mysqli_fetch_array($res1,MYSQLI_ASSOC)) {
      $id = $row1['id'];
      $pass = $row1['password'];
    }
    ?>
    <div class="w3-center">
      <h3>Acount Management </h3>
    </div>
    <br>

    <div class="jumbotron">
      <form action="change_pass.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id;?>">
      <h5>Current password: </h5> <input type="password" name="meter" value="<?php echo $pass; ?>">
      <h5>New Password: </h5> <input type="password" name="pass" value="">
      <h5>Confirm New Password: </h5> <input type="password" name="pass1" value="">
      <h4><input type="submit" name="submit" value="submit"></</h4>
    </form>
    </div>
    </div>

<?php
}

if(isset($_POST['submit'])){
$id = $_POST['id'];
$pass = $_POST['pass'];
$pass1 =  $_POST['pass1'];

if ($pass != $pass1) {
  echo "Failed";
}
else{
	$pass				= md5($pass);

  $updateQuery = "UPDATE member SET password='$pass' WHERE id = '$id' ";;
  $res = mysqli_query($con,$updateQuery);
  if ($res) {
    echo "Password Changed";
  }
  else {
    echo "failed";
  }
}

}



include 'footer.php';
 ?>
