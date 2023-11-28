<?php
session_start();
include("user_home1.php");

$servername="localhost";

$username="root";

$password= "";

$database="uhms";



$con= mysqli_connect($servername,$username,$password,$database);

$building = $_SESSION['bl'];
$floor = $_SESSION['fo'];
$room = $_SESSION['ro'];
$seat = $_SESSION['se'];
$b = $_SESSION['s'];
$amount1= $_SESSION['ppp'];

$insert="UPDATE  buildings SET id= '".$b."', seat_status='Booked' WHERE building_name='".$building."' AND floor_no='".$floor."' AND room_no=".$room." AND seat_no= ".$seat;
$query=mysqli_query($con,$insert);
if($query)
{

    $insert1=" INSERT INTO payment(id,pay_amount,pay_by)
              VALUES('".$b."',".$amount1.",'Mastercard');" ;

             $query1=mysqli_query($con,$insert1);

            if($query1)
             {
               $update2=" UPDATE hostel_student_info SET room_booking_date= NOW() WHERE id='".$b."';" ;
               $query2=mysqli_query($con,$update2);
               if($query2)
               {
                    header('Location:pay&book_done.php');
               }
                   
             }

}


?>