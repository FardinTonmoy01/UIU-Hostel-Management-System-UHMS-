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
<form action="student_info_admin_search.php" method="post">

  <input type="text"  type="submit" name="id" placeholder="Search By Student ID...    press ENTER">
 

</form>
<h2>Recently Searched Student Record:</h2>

</body>
</html>

<?php



$servername="localhost";

$username="root";

$password= "";

$database="uhms";



$con= mysqli_connect($servername,$username,$password,$database);

$b= $_POST['id'];

$search = "SELECT uiu_student.id,uiu_student.Name,uiu_student.Father_name,uiu_student.Mother_name,uiu_student.Gender,
uiu_student.Dept,uiu_student.Email,uiu_student.Phone,hostel_student_info.room_booking_date,
buildings.building_name,buildings.floor_no,buildings.room_no,buildings.seat_no FROM hostel_student_info
LEFT JOIN uiu_student ON uiu_student.id=hostel_student_info.id 
LEFT JOIN buildings ON uiu_student.id=buildings.id 
WHERE uiu_student.id='".$b."';";


$query=mysqli_query($con,$search);



if($con)
{
    if($query)
    {
        {
            echo'<table>';
            echo'<tr>';
            echo'<th>ID</th>';
            echo'<th>Name</th>';
            echo'<th>Father Name</th>';
            echo'<th>Mother Name</th>';
            echo'<th>Gender</th>';
            echo'<th>Email</th>';
            echo'<th>Phone No.</th>';
            echo'<th>Room Booking Date</th>';
            echo'<th>Room Withdraw Date</th>';
            echo'<th>Building Name</th>';
            echo'<th>Floor No</th>';
            echo'<th>Room No</th>';
            echo'<th>Seat No</th>';
            echo'</tr>';
        
            if (mysqli_num_rows($query) > 0)
        
            {
               while($row= mysqli_fetch_assoc($query))
        
               {
                
                  echo'<tr>';
                  echo'<td>'.$row["id"].'</td>';
                  echo'<td>'.$row["Name"].'</td>';
                  echo'<td>'.$row["Father_name"].'</td>';
                  echo'<td>'.$row["Mother_name"].'</td>';
                  echo'<td>'.$row["Gender"].'</td>';
                  echo'<td>'.$row["Email"].'</td>';
                  echo'<td>'.$row["Phone"].'</td>';
                  echo'<td>'.$row["room_booking_date"].'</td>';
                 
                  echo'<td>'.$row["building_name"].'</td>';
                  echo'<td>'.$row["floor_no"].'</td>';
                  echo'<td>'.$row["room_no"].'</td>';
                  echo'<td>'.$row["seat_no"].'</td>';
                  
                  echo'</tr>';
        
               }
            }
            else
            {
                  header("Location: No_match_student_info_admin_search.php", true, 301);
                  exit();
            }
            echo'</table>';
        
        }
    }
    
}



?>

<!DOCTYPE html>
<html>
<head>
<style> 

.button {
  background-color: #f55d0494;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 10px 10px;
  cursor: pointer;
  
  
}
.button {border-radius: 5px;}
.button:hover {
  background-color: #6dbe7b;
}

</style>
</head>
<body>
<a href="student_info_admin.php" class="button">Go To All Signed Up Student Records</a>
</body>
</html>