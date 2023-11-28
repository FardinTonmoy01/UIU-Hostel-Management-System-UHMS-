<?php
$servername="localhost";

$username="root";

$password= "";

$database="uhms";


$con= mysqli_connect($servername,$username,$password,$database);
$a = $_POST['uname'];
$b=md5($_POST['psw']);


session_start();
$_SESSION['s'] = $a;

$search = "SELECT id FROM hostel_student_info 
WHERE id='".$a."';";
$query=mysqli_query($con,$search);
if($con)
{
    if (mysqli_num_rows($query) > 0)
    {



        $search1 = "SELECT pass FROM hostel_student_info 
        WHERE id='".$a."';";
        $query=mysqli_query($con,$search1);
        if($con)
        {
         if (mysqli_num_rows($query) > 0)
         {
          while($row= mysqli_fetch_assoc($query))
          {
            $p= $row["pass"];
            $d= $row["id"];

            if($p==$b)
            {
                header('Location:user_home_page.php');
            }
            else
            {
                header('Location:login_unsuccess.php');
            }
           }
         }
        }

    }
    else
    {
        header('Location:login_unsuccess.php');
    }

}











?>

