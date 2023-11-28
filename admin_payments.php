<?php
include('admin_home2.php');

?>





<!DOCTYPE html>
<html>
<head>
<style> 
input[type=text] {
  width: 250px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: whitesmoke;
  background-image: url("Hnet.com-image.png");
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  transition: width 0.4s ease-in-out;
  padding: 10px 32px;
  margin: 30px 10px;
}

input[type=text]:focus {
  width: 40%;
}




table {

  border-collapse: collapse;
  border: 1px solid black;
  width: 99%;
  padding: 10px 32px;
  margin: 40px 10px;

}

th, td {
  padding: 7px;
  text-align: center;
  border-bottom: 1px solid black;
}

tr:hover {background-color: coral;}




</style>
</head>
<body>
<h1>Search here by user id to see individual payment records:</h1>
<form action="admin_payments_search.php" method="post">

  <input type="text"  type="submit" name="id" placeholder="Search By Student ID...    press ENTER">
</form>


<h1>Recent payments paid by users:</h1>
</body>
</html>

<?php

$servername="localhost";

$username="root";

$password= "";

$database="uhms";



$con= mysqli_connect($servername,$username,$password,$database);

$select= "SELECT * FROM payment ORDER BY pay_date DESC;";

$query= mysqli_query($con,$select);
$i=1;

if($query)
{
    echo'<table>';
    echo'<tr>';
    echo'<th>Serial No.</th>';
    echo'<th>Paid By</th>';
    echo'<th>Paid Amount</th>';
    echo'<th>Date & Time</th>';
    echo'<th>Paid By</th>';
    
    echo'</tr>';
    if (mysqli_num_rows($query) > 0)

    {
       while($row= mysqli_fetch_assoc($query))

       {
        
          echo'<tr>';
          echo'<td>'.$i.'</td>';
          echo'<td>'.$row["id"].'</td>';
          echo'<td>'.$row["pay_amount"].'</td>';
          echo'<td>'.$row["pay_date"].'</td>';
          echo'<td>'.$row["pay_by"].'</td>';
          $i=$i+1;
          
          echo'</tr>';
          

       }
    }
    echo'</table>';
}

?>