<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body  {
  background-image: url("uhms_user_login_background_pic.png");
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
}


body {font-family: Arial, Helvetica, sans-serif;
    width: 400px;
   height: 300px;
   padding: 200px;
   margin: -50px 480px;
  
}
form 
{
    border: 3px solid #f1f1f1;
   

}

input[type=text], input[type=password] {
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

.signup {
  width: auto;
  padding: 10px 18px;
  background-color:  #f55d0494;
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

span.psw {
  float: right;
  padding-top: 16px;
}

@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .signup {
     width: 100%;
  }
}

</style>
</head>
<body>

<form action="login_success.php" method="post">
  
  <div class="imgcontainer">
    <img src="Uhms_user_logo.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
   <a href="user_signup.php">
    <button type="button" class="signup">Sign Up</button>
   </a>
    <span class="psw">Forgot <a href="forgot_pass1.php">password?</a></span>
  </div>
</form>

</body>
</html>
