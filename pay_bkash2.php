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
    background-color:#E0156E;
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
  background-color:#E0156E;
  width: 90%;

}




</style>
</head>
<body>



<form action="pay_bkash3.php" method="post">
  <div8 class="imgcontainer">
    <img src="bkash_payment2_logo.png" alt="Avatar" class="avatar">
  </div8>

  <div8 class="container">
    <label for="verify"><b>Enter pin</b></label>
    <input type="text" placeholder="XXXXX" name="verify" required>

    
        
    <button class=button button4 type="submit">Confirm</button>
    
  </div8>


</form>

</body>
</html>
