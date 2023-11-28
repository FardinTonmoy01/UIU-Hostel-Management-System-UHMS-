<?php
include("user_home1.php");
?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;
    width: 20%;
    background-color:#722A79;
    margin: 170px 700px;


}

input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button4 {
  
  color: white;
  padding: 14px 20px;
  margin: 8px 50px;
  border: none;
  cursor: pointer;
  width: 30%;
}

button4:hover {
  opacity: 0.8;
}



.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 100%;
  
}

.container {
  padding: 16px;
  background-color:#722A79;
  width: 90%;

}




</style>
</head>
<body>



<form action="rocket3.php" method="post">
  <div8 class="imgcontainer">
    <img src="dutch-bangla-rocket.jpg" alt="Avatar" class="avatar">
  </div8>

  <div8 class="container">
    <label for="rocket"><b>Your Rocket Account number</b></label>
    <input type="text" placeholder="01XXXXXXXXX" name="rocket" required>

    
        
    <button class=button button4 type="submit">Confirm</button>
    
  </div8>


</form>

</body>
</html>
