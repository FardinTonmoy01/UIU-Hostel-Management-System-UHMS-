<?php
include("user_home1.php");
$pp = $_POST['amount1'];
session_start();
$_SESSION['ppp'] = $pp;

?>

<!DOCTYPE html>
<html>
<head>
<style> 


img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}


</style>
</head>
<body>
<h1>Select Payment Option:</h1>


 <a href="pay_bkash1.php">
<img border="0"  src="rsz_bkash_pay.jpg" >

</a>
</br>

<a href="pay_rocket1.php">
<img border="0"  src="rsz_rocket_pay.png"  >
</a>
</br>

<a href="pay_mastercard1.php">
<img border="0"  src="rsz_master_card.png"  >
</a>



</body>
</html>
