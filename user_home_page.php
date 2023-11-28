<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
<style>
body  {
  background-image: url("uhms_admin_background_picc.png");
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;

}


div {
  border: 5px solid black;
  padding: 10px;
  width: 550px;
  height: 500px;
  text-align: justify;
  
}
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
.button1 {
  background-color: #f55d0494;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 0px 270px;
  cursor: pointer;
 
 
  
}

.button {border-radius: 5px;}
.button:hover {
  background-color: #6dbe7b;
}
.button1 {border-radius: 5px;}
.button1:hover {
  background-color: #6dbe7b;
}


.dropbtn {
  background-color: #f55d0494;
  color: white;
  padding: 15px 32px;
  font-size: 20px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
  text-decoration: none;
  
  font-family: Georgia;
  margin: 10px 10px;
  display: inline-block;
  
}

.dropdown {
  position: relative;
  display: inline-block;
 
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 15px 32px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #6dbe7b;
}






</style>
</head>
<body>

  <a href="user_home_page.php" class="button">Home</a>
  <a href="registration.php" class="button">Registration</a>
  <a href="before_payment.php" class="button">Payment</a>


  <div1 class="dropdown">
  <button class="dropbtn">Student Account</button>
  <div1 class="dropdown-content">
    <a href="change_pass1.php">Change Password</a>
    
  </div1>
</div1>

  
 
  
  
  <a href="contact.php" class="button">Contact</a>
  <a href="user_notice.php" class="button">Notice</a>
  
  <a href="user_login.php" class="button button1">Log Out</a>

  
  <h1>Student Information:</h1>

</body>
</html>


<?php

$servername="localhost";

$username="root";

$password= "";

$database="uhms";

$con= mysqli_connect($servername,$username,$password,$database); 
$b = $_SESSION['s'];

$select = "SELECT uiu_student.id,uiu_student.Name,uiu_student.Father_name,uiu_student.Mother_name,uiu_student.Gender,
uiu_student.Dept,uiu_student.Email,uiu_student.Phone,hostel_student_info.room_booking_date,
buildings.building_name,buildings.floor_no,buildings.room_no,buildings.seat_no FROM uiu_student
LEFT JOIN hostel_student_info ON uiu_student.id=hostel_student_info.id 
LEFT JOIN buildings ON uiu_student.id=buildings.id 
WHERE uiu_student.id='".$b."';";


$query=mysqli_query($con,$select);



if($con)

{
   
    if (mysqli_num_rows($query) > 0)

    {
       while($row= mysqli_fetch_assoc($query))

       {
          echo '<div>';
         
          echo'<br><h3>Id: '.$row["id"].'</h3>';
          echo'<h3>Name: '.$row["Name"].'</h3>';
          echo"<h3>Father's Name: ".$row["Father_name"]."</h3>";
          echo"<h3>Mother's Name: ".$row["Mother_name"]."<h3>";
          echo'<h3>Gender: '.$row["Gender"].'</h3>';
          echo'<h3>Email: '.$row["Email"].'</h3>';
          echo'<h3>Phone: '.$row["Phone"].'</h3>';
          echo'<h3>Building: '.$row["building_name"].'</h3>';
          echo'<h3>Floor No: '.$row["floor_no"].'</h3>';
          echo'<h3>Room No: '.$row["room_no"].'</h3>';
          echo'<h3>Seat No: '.$row["seat_no"].'</h3>';
         
          echo '</div>';
       }
       
    }
    else{

        header('Location:login_unsuccess.php');
      
      }
    
}




?>
