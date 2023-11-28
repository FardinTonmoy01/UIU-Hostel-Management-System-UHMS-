<?php
session_start();

$servername="localhost";

$username="root";

$password= "";

$database="uhms";



$con= mysqli_connect($servername,$username,$password,$database);
$b = $_SESSION['s'];

$select1= "SELECT building_name FROM buildings
WHERE id= '".$b."';";

$query1=mysqli_query($con,$select1);


$building= $_POST['building'];
$floor= $_POST['floor'];
$room= $_POST['room'];
$seat= $_POST['seat'];


$_SESSION['bl'] = $building;
$_SESSION['fo'] = $floor;
$_SESSION['ro'] = $room;
$_SESSION['se'] = $seat;


$select= "SELECT seat_status FROM buildings
WHERE building_name= '".$building."' AND floor_no= '".$floor."' AND room_no= ".$room." AND seat_no= ".$seat;

$query=mysqli_query($con,$select);

if($query1)
{
    if (mysqli_num_rows($query1) > 0)
    {
        while($row= mysqli_fetch_assoc($query1))
        {
            $bn= $row["building_name"];
            if($bn=='A')
            {
                header('Location:reg_allready_hostel.php');

            }
            else if($bn=='B')
            {
                header('Location:reg_allready_hostel.php');

            }
            
        }

    }
    else
            {
                if($query)
                 {
                    if (mysqli_num_rows($query) > 0)
                     {
                       while($row= mysqli_fetch_assoc($query))
                        {
                           $r= $row["seat_status"];
                           if($r=='Available')
                            {
                              header('Location:reg_pay1.php');
                            }
                           else if($r='Booked')
                            {
                              header('Location:reg_allready_booked.php');
                            }
                        }

                     }
                   else
                   {
                      header('Location:reg_try_again.php');
                   }
                }
            }
    
    
}







?>