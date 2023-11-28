<?php
session_start();

$servername="localhost";

$username="root";

$password= "";

$database="uhms";

$con= mysqli_connect($servername,$username,$password,$database); 


$amount =$_SESSION['pp'];
$id = $_SESSION['s'];



$insert=" INSERT INTO payment(id,pay_amount,pay_by)
VALUES('".$id."',".$amount.",'Rocket');" ;

$query=mysqli_query($con,$insert);

if($query)
{
    header('Location:payment_done.php');  
}




?>