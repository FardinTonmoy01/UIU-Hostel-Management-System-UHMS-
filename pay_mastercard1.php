
<?php
include("user_home1.php");
?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

form 
{
    border: 3px solid #f1f1f1;
    background-color:#094494;
    width: 20%;
    margin: 170px 700px;
    color: white;
   

}

input[type=text],input[type=text],input[type=date],input[type=password] {
  width: 100%;
  padding: 12px 1px;
  margin: 0px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  
}

button {
  background-color:  #f55d0494;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}



.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 45%;
  border-radius: 500%;
}

.container {
  padding: 16px;
}


</style>
</head>
<body>

<form action="pay_mastercard2.php" method="post">
  
  <div class="imgcontainer">
    <img src="mastercard.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label> Card Number: </label>
    <input type="text"  placeholder="xxxxxxxxxxxx" name="mastercard" required>

    <label> Card Holder Name: </label>
    <input type="text"    required>

    <label> Expiration Date: </label>
    <input type="date"  name="mastercard" required>

  
    <label>Enter Pin: </label>
    <input type="password"  placeholder="xxxx" required>
        
    <button type="submit">Pay Now</button>
  
  </div>
</form>

</body>
</html>