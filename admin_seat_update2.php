<?php
include('admin_home2.php');


$servername="localhost";

$username="root";

$password= "";

$database="uhms";

$building= $_POST['building'];
$floor= $_POST['floor'];
$room= $_POST['room'];
$seat= $_POST['seat'];
$book= $_POST['book'];



$con= mysqli_connect($servername,$username,$password,$database);


$select1= "SELECT seat_status FROM buildings
WHERE building_name= '".$building."' AND floor_no= '".$floor."' AND room_no= ".$room." AND seat_no= ".$seat;

$query1=mysqli_query($con,$select1);

$select4= "SELECT id FROM buildings WHERE id= '".$book."';";
$query4=mysqli_query($con,$select4);

if($query4)
{
  
 if(mysqli_num_rows($query4)>0)
  {
    header('Location:already_book_update.php');
  }
  else 
  {
    if($query1)
    {
       if (mysqli_num_rows($query1) > 0)
        {
          while($row= mysqli_fetch_assoc($query1))
           {
              $r= $row["seat_status"];
              if($r=='Available')
               {
                   $update="Update buildings SET id='".$book."', seat_status='Booked' 
                   WHERE building_name= '".$building."' AND floor_no= '".$floor."' AND room_no= ".$room." AND seat_no= ".$seat;
                   $query=mysqli_query($con,$update);
                   if($query)
                   {
                       $insert=" INSERT INTO payment(id,pay_amount,pay_by)
                        VALUES('".$book."','3500','Cash');" ;
                         $query2=mysqli_query($con,$insert);
                        if($query2)
                        {
                           header('Location:seat_update_done.php');

                        }
                   }

                 
               }
              else if($r='Booked')
               {
                 header('Location:seat_not_update.php');
               }
           }

        }
      else
      {
         header('Location:seat_wrong_update.php');
      }
   }
    
  }
 
}




?>