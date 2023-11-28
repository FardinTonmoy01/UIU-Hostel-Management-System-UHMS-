<?php
include('user_home1.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

form 
{
    border: 3px solid #f1f1f1;
    width: 20%;
    margin: 100px 700px;
    font-size: 200%;
    
    
   

}
input[type=number],  {
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


</style>
</head>
<body>
<p>
<h1><br>Pay Now For Booking:</h1>    
<form action="reg_pay2.php"  method="post">
  

  <div class="container">
  <label for="amount1">Tk:</label>
  <select name="amount1" id="amount1">
    <option value="3500">3500</option>
    
  </select>
  <br><br>

   
        
    <button type="submit">Pay Now</button>
  </div>

</p>

  
</form>
</body>
</html>