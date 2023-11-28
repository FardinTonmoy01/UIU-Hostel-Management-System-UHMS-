<?php

$servername="localhost";

$username="root";

$password= "";

$database="uhms";


$con= mysqli_connect($servername,$username,$password,$database);
$a = $_POST['i'];
$b=$_POST['paid_a'];

$select= "SELECT id FROM buildings WHERE id= '".$a."';";
$query=mysqli_query($con,$select);

if($query)
{
  
 if(mysqli_num_rows($query)>0)
  {
    $insert=" INSERT INTO payment(id,pay_amount,pay_by)
    VALUES('".$a."',".$b.",'Cash');" ;
    
    $query2=mysqli_query($con,$insert);
    
    if($query2)
    {
        header('Location:admin_update_done.php');  
    }
  }
  else 
  {
     header('Location:cannot_update_admin.php');
  }
 
}





?>