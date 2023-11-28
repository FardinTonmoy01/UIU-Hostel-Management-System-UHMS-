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



</style>
</head>
<body>
<form action="student_info_admin_search.php" method="post">

  <input type="text"  type="submit" name="id" placeholder="Search By Student ID...    press ENTER">
 

</form>
<h1>No matches found</h1>
<br>
<br>

</body>
</html>



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