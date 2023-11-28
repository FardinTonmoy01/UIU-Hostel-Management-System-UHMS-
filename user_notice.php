<?php
include("user_home1.php");
?>





<!DOCTYPE html>
<html>
<head>
<style> 


table {

  table-layout: fixed;
  border-collapse: collapse;
  border: 1px solid;
  width: 99%;
  padding: 10px 32px;
  margin: 40px 10px;
  
  

}
th {
  padding: 7px;
  text-align: center;
  border-bottom: 1px solid black;
  word-break: break-all;
  background : #C2C0C0;
  border: 1px solid;

 
}

 td {
  padding: 7px;
  text-align: left;
  border-bottom: 1px solid black;
  word-break: break-all;
  border: 1px solid;
 

 
}


tr:hover {background-color:whitesmoke;}



</style>
</head>
<body>
<h1> Recent notices:</h1>

</body>
</html>







<?php 


$servername="localhost";

$username="root";

$password= "";

$database="uhms";



$con= mysqli_connect($servername,$username,$password,$database);

$select = "SELECT notice_date,notices FROM notice 
ORDER BY notice_id DESC
LIMIT 10;";

$query=mysqli_query($con,$select);



if($con)

{
    
    echo'<table>';
    echo'<tr>';
    
    echo'<th><h1>Notice Board</h1></th>';
   
    echo'</tr>';
    if (mysqli_num_rows($query) > 0)

    {
       while($row= mysqli_fetch_assoc($query))

       {
        
          echo'<tr>';
          
          echo'<td><h3>[Published: ('.$row["notice_date"].')]</br></br>'.$row['notices'].'</h3></td>';
          
          
          
          echo'</tr>';

       }
    }
    echo'</table>';
    


}