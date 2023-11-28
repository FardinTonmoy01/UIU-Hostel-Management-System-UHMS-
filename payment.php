<?php
session_start();
include("user_home1.php");


?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

form 
{
    border: 3px solid #f1f1f1;
    width: 20%;
    margin: 10px 30px;
   

}

input[type=text], input[type=text] {
  width: 100%;
  padding: 12px 1px;
  margin: 0px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #f55d0494;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.container {
  padding: 16px;
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
<p>
<h1>I want to pay:</h1>    
<form action="user_payment.php"  method="post">
  

  <div class="container">
    <label for="amount"></label>
    <input type="text" placeholder="Enter amount" name="amount" required>

   
        
    <button type="submit">Pay online</button>
  </div>

</p>

  
</form>
<h1>Student Bill & Payment History:</h1> 
</body>
</html>


<?php
$servername="localhost";

$username="root";

$password= "";

$database="uhms";

$con= mysqli_connect($servername,$username,$password,$database); 
$b = $_SESSION['s'];

$select= "SELECT * FROM payment WHERE id='".$b."' ORDER BY pay_date DESC;";

$query=mysqli_query($con,$select);
$aa=1;
if($query)

{
    echo'<table>';
    echo'<tr>';
    echo'<th>Serial No.</th>';
    echo'<th>Paid Amount</th>';
    echo'<th>Date & Time</th>';
    echo'<th>Paid By</th>';
    
    echo'</tr>';
    if (mysqli_num_rows($query) > 0)

    {
       while($row= mysqli_fetch_assoc($query))

       {
        
          echo'<tr>';
          echo'<td>'.$aa.'</td>';


          echo'<td>'.$row["pay_amount"].'</td>';
          echo'<td>'.$row["pay_date"].'</td>';
          echo'<td>'.$row["pay_by"].'</td>';
          $aa=$aa +1;
         
          
          
          echo'</tr>';

       }
    }
    echo'</table>';
}


?>