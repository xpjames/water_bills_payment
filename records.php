<?php
session_start();
require ('includes/require.php');
include 'header.php';



	if(isset($_SESSION['email']))
	{

	$mail = $_SESSION['email'];

  $query1 = "SELECT * FROM member WHERE email = '$mail'";
  $res1 = mysqli_query($con,$query1);

  while ($row1 = mysqli_fetch_array($res1,MYSQLI_ASSOC)) {
    $meter =  $row1['meter'];
  }

  $sql2 = "SELECT * FROM transactions WHERE meter = '$meter'";
  $res2 = mysqli_query($con,$sql2);
  ?>
  <div class="container w3-light-grey">
  <table class="w3-table w3-bordered w3-light-grey w3-border w3-hoverable" >
    <h3 class="w3-center">Payment History</h3>
  <tr>
  <th>#</th>
    <th>Customer Name</th>
    <th>Meter Number</th>
    <th>Receipt Number</th>
    <th>Amount Paid</th>
    <th>Date</th>
  </tr>
  <?php
  $x = 1;
  while($row = mysqli_fetch_array($res2,MYSQLI_ASSOC))
  {
    ?>
    <tr>
    <td><?php echo $x;?></td>
  <td><?php echo $row['customer_name'];?></td>
  <td><?php echo $row['meter']; ?></td>
  <td><?php echo $row['transaction_id'];?></td>
  <td><?php echo $row['paid_amount']; ?></td>
  <td><?php   echo $row['day']; ?></td>

  <?php
  }
?>
</tr>
</table>
</div>
<div class="clearfix"></div>
</div>
</div>
<?php
	}
  else{
    
  }

      include 'footer.php';
 ?>
