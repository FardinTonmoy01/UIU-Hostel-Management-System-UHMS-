<?php
include_once("user_signup.php");

$servername="localhost";

$username="root";

$password= "";

$database="uhms";


$con= mysqli_connect($servername,$username,$password,$database);

$search= "SELECT id, email FROM hostel_student_info 
WHERE id= '".$_POST['id']."'" ;

$query= mysqli_query($con,$search);

if($query)
{
    header('Location: C:\xampp\htdocs\uhms\if_already_signup.php',true,301);
}


?>