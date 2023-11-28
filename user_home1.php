<!DOCTYPE html>
<html>
<head>
<style>
body  {
  background-image: url("uhms_admin_background_picc.png");
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
}



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
.button1 {
  background-color: #f55d0494;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 0px 200px;
  cursor: pointer;
 
 
  
}

.button {border-radius: 5px;}
.button:hover {
  background-color: #6dbe7b;
}
.button1 {border-radius: 5px;}
.button1:hover {
  background-color: #6dbe7b;
}
.dropbtn {
  background-color: #f55d0494;
  color: white;
  padding: 15px 32px;
  font-size: 20px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
  text-decoration: none;
  
  font-family: Georgia;
  margin: 10px 0px;
  display: inline-block;
  
}

.dropdown {
  position: relative;
  display: inline-block;
 
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 15px 32px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #6dbe7b;
}






</style>
</head>
<body>

  <a href="user_home_page.php" class="button">Home</a>
  <a href="registration.php" class="button">Registration</a>
  <a href="before_payment.php" class="button">Payment</a>


  <div1 class="dropdown">
  <button class="dropbtn">Student Account</button>
  <div1 class="dropdown-content">
    <a href="change_pass1.php">Change Password</a>
    
  </div1>
</div1>

  
 
  
  
  <a href="contact.php" class="button">Contact</a>
  <a href="user_notice.php" class="button">Notice</a>
  
  <a href="user_login.php" class="button button1">Log Out</a>
  

</body>
</html>
