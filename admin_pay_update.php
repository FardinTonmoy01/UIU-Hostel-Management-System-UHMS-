<?php
include("admin_home2.php");
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>




form 
{
    border: 3px solid #f1f1f1;
    width: 30%;
    margin: 150px 600px;
   

}

input[type=text], input[type=text] {
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

.container {
  padding: 16px;
}



}

</style>
</head>
<body>

<form action="admin_pay_update2.php"  method="post">
  

  <div class="container">
    <label for="i"><b>Enter username/id:</b></label>
    <input type="text"  name="i" required>

    <label for="paid_a"><b>Enter paid Amount:</b></label>
    <input type="text"  name="paid_a" required>
        
    <button type="submit">Update / Save</button>
  </div>

  
</form>
</body>
</html>