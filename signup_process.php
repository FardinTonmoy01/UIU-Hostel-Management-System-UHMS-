<?php


$servername="localhost";

$username="root";

$password= "";

$database="uhms";

$con= mysqli_connect($servername,$username,$password,$database);


$id= $_POST['id'];
$email=$_POST['email'];

session_start();
$_SESSION['i'] = $id;


$search = "SELECT id FROM uiu_student
WHERE id='".$id."' AND Email= '".$email."';";
$query=mysqli_query($con,$search);

if($con)
{
    if (mysqli_num_rows($query) > 0)
    {

        $search1 = "SELECT pass FROM hostel_student_info
        WHERE id='".$id."';";
        $query1=mysqli_query($con,$search1);

        if (mysqli_num_rows($query1) > 0)
        {
            header('Location:if_already_signup.php');
        }
        else
        {
            $otp = random_int(100000, 999999);
            $insert="INSERT INTO otp(id,Otp) VALUES( '".$id."',".$otp.");";
            $query2=mysqli_query($con,$insert);
            if($query2)
            {
                $to_email = $email;
                $subject = "OTP For Sign Up In UHMS (UIU Hostel Management System)";
                $body = "Your OTP is ".$otp;
                $headers = "From: uiumail15@gmail.com";
                $pass= "onicnbjfathshymf";
                if (mail($to_email, $subject, $body, $headers,$pass)) {
                    header('Location:signup_otp.php');
                }



            }
        }





    }
    else
    {
        header('Location:invalid_signup.php');

    }
}



?>