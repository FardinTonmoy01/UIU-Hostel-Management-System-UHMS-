<?php
include('admin_home2.php');
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
input[type=number], input[type=number], input[type=text]{
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

<form action="admin_seat_update2.php" method="post">
  <label for="building">Choose a Building:</label>
  <select name="building" id="building">
    <option value="A">A</option>
    <option value="B">B</option>
  </select>
  <br><br>
  <label for="floor">Choose a floor:</label>
  <select name="floor" id="floor">
    <option value="1st">1st</option>
    <option value="2nd">2nd</option>
    <option value="3rd">3rd</option>
  </select>
  <br><br>


  <label for="room">Room No.</label>
    <input type="number"  name="room" required>

    <label for="seat">Seat No.</label>
    <input type="number"  name="seat" required>

    <label for="book">Booked By</label>
    <input type="text"  name="book" required>


  

  


  <button type="submit">Register Now</button>
</form>






</body>
</html>
