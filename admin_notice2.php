<?php

$servername="localhost";

$username="root";

$password= "";

$database="uhms";

$con= mysqli_connect($servername,$username,$password,$database);

$notice= $_POST['notice1'];

$insert= "INSERT INTO notice(notices) 
VALUES('".$notice."')";

$query= mysqli_query($con,$insert);

if($query)
{
    header('Location:admin_notice1.php');  
}





?>