<?php
include_once "login/includes/login.inc.php";
include_once "login/includes/init.php";
 if(!logged_in()) {
  redirect("login/login.php");
}else{
include 'header.php';
?>

<div class="container w3-card-8 w3-light-grey">

<div class="w3-center">
  <h3>Acount Management </h3>
</div>
<br>

<div class="jumbotron">
  <a href="pay.php"><h5>pay Bills</h5> </a>
</div>

<div class="jumbotron">
  <h5><a href="records.php">View Payment Record</a></h5>
</div>
<div class="jumbotron">
  <h5><a href="user_profile.php">profile</a></h5> 
</div>


<div class="jumbotron">
  <h5>Bootstrap Tutorial</h5>
  <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive,
  mobile-first projects on the web.</p>
</div>

</div>
<br>
<?php
include 'footer.php';
}
?>
