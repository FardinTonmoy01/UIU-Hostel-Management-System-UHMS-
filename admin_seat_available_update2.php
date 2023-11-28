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




$con= mysqli_connect($servername,$username,$password,$database);

$select= "SELECT seat_status FROM buildings
WHERE building_name= '".$building."' AND floor_no= '".$floor."' AND room_no= ".$room." AND seat_no= ".$seat;

$query=mysqli_query($con,$select);


if($query)
{
    if (mysqli_num_rows($query) > 0)
    {
        while($row= mysqli_fetch_assoc($query))
        {
            $b_n= $row["seat_status"];
            if($b_n=='Booked')
            {
                $select1= "SELECT id FROM buildings
                WHERE building_name= '".$building."' AND floor_no= '".$floor."' AND room_no= ".$room." AND seat_no= ".$seat;

                $query1=mysqli_query($con,$select1);
                if($query1)
                {
                    if (mysqli_num_rows($query1) > 0)
                    {
                        while($row= mysqli_fetch_assoc($query1))
                        {
                            $i_d= $row["id"];
                            $update="UPDATE buildings SET id='', seat_status='Available' WHERE id= '".$i_d."';";
                            $update2="UPDATE hostel_student_info SET room_booking_date='' WHERE id= '".$i_d."';";
                            $delete= "DELETE FROM payment WHERE id= '".$i_d."';";
                            $query3=mysqli_query($con,$update);
                            $query5=mysqli_query($con,$update2);
                            $query4=mysqli_query($con,$delete);
                            if($query3)
                            {
                                if($query5)
                                {
                                    if($query4)
                                   {
                                       header('Location:withdraw_update_done.php');

                                   }
                            
                                }
                            }


                        }
                    }
                }



            }
            else{
                header('Location:already_withdraw_update.php');

            }

        }
    }
    else{
        header('Location:something_wrong_withdraw_update.php');

    }
}





?>