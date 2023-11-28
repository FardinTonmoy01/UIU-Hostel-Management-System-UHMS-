<?php

include('user_home1.php');
?>




<!DOCTYPE html>
<html>
<head>
<style> 

table {

  border-collapse: collapse;
  border: 1px solid black;
  width: 40%;
  padding: 10px 32px;
  margin: 40px 30px;
  align: center;

}


th {
  padding: 7px;
  text-align: center;
  border-bottom: 1px solid black;
  background: #C2C0C0;
}

td {
  padding: 7px;
  text-align: center;
  border-bottom: 1px solid black;
  background: whitesmoke;
}






</style>
</head>
<body>
<h1> Rules for booking seat or registration:</h1>
<h3>* See the chart given below before applying or register for ensuring that the room you want to book is available or not.
</br></br>* To confirm your seat it is mandatory to pay 3500tk at first. </h3>

</body>
</html>



<?php

$servername="localhost";

$username="root";

$password= "";

$database="uhms";



$con= mysqli_connect($servername,$username,$password,$database);

echo"<h1>Check this chart before apply:</h1>";
$select= "SELECT * FROM buildings;";

$query=mysqli_query($con,$select);

if($con)

{
    echo'<table>';
    echo'<tr>';
    echo'<th> Building Name</th>';
    echo'<th>Floor No.</th>';
    echo'<th>Room No.</th>';
    echo'<th>Seat No.</th>';
    echo'<th>Status</th>';
    echo'</tr>';
    if (mysqli_num_rows($query) > 0)

    {
       while($row= mysqli_fetch_assoc($query))

       {
        
          echo'<tr>';
          echo'<td>'.$row["building_name"].'</td>';
          echo'<td>'.$row["floor_no"].'</td>';
          echo'<td>'.$row["room_no"].'</td>';
          echo'<td>'.$row["seat_no"].'</td>';
          echo'<td>'.$row["seat_status"].'</td>';
          
          
          echo'</tr>';

       }
    }
    echo'</table>';
}
    ?>




<!DOCTYPE html>
<html>
<head>
<style> 

.button2 {
  background-color: #f55d0494;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: left;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 0px 700px;
  cursor: pointer;
  
  
}

.button2 {border-radius: 5px;}
.button2:hover {
  background-color: #6dbe7b;
}




</style>
</head>
<body>

   <a href="registration2.php" class="button button2">I Understand & Agree...</br>Go To Apply!!!</a>

</body>
</html>

