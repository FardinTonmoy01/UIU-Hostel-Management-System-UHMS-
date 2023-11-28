<?php
include("admin_home2.php");
?>


<!DOCTYPE html>
<html>
<style>

button {
  background-color:  #f55d0494;
  color: white;
  padding: 20px 20px;
  margin: 8px 20px;
  border: none;
  cursor: pointer;
  width: 10%;
}

button:hover {
  opacity: 0.8;
}

</style>
<body>

<h1>Type the notice here:</h1>

<form action="admin_notice2.php" method="post">
  <textarea rows="15" cols="100" name="notice1" ></textarea>
  <button type="submit">Submit</button>
</form>





</body>
</html>




