<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;
  background-color: #331c06;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 800 400'%3E%3Cdefs%3E%3CradialGradient id='a' cx='396' cy='281' r='514' gradientUnits='userSpaceOnUse'%3E%3Cstop offset='0' stop-color='%23D18'/%3E%3Cstop offset='1' stop-color='%23331c06'/%3E%3C/radialGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='400' y1='148' x2='400' y2='333'%3E%3Cstop offset='0' stop-color='%23FA3' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23FA3' stop-opacity='0.5'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect fill='url(%23a)' width='800' height='400'/%3E%3Cg fill-opacity='0.5'%3E%3Ccircle fill='url(%23b)' cx='267.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='532.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='400' cy='30' r='300'/%3E%3C/g%3E%3C/svg%3E");
    background-attachment: fixed;
    background-size: cover;

}


input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid black;
  box-sizing: border-box;
}

button {
  background-color: #DAA520;
  border: solid black 3px;
  color: BLACK;
  padding: 14px 20px;
  margin: 8px 0;
  
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: BEIGE;
  border: solid black 3px;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 10%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
.top{
    background-color: #DAA520;
    border: black solid 5px;
    height:60px;
    padding: 20px;
    font-size: 20px;
}
.b{
    height:300px;
    width:200px;
}
form{
  border: solid black 5px;
}
</style>
</head>
<body>
<div class="top">
<center><h1><b><u>LOGIN FORM</u></b></h1></center>
</div>
<form action="dlogin.php" method="POST">
  <div class="imgcontainer">
    <img src="login.jpg" alt="Avatar" class="avatar">
  </div>
<center>
<form>
  <div class="container">
      <div class="b">
    <label for="uname"><b><u>USERNAME</u></b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b><u>PASSWORD</u></b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

        
    <button type="submit"><b>Login</b></button>
    <label>
    create account: <b><a  href="dreg.php" class="pro"><i class="fa fa-fw fa-user" style="font-size:20px;"></i>REGISTERATION</a></b><br><br>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
</div>
</form>
</center>

  <div class="container" style="background-color:#DAA520; border: solid black 5px;">

    <button type="button" class="cancelbtn">cancel</button>
    <span class="psw">Forgot <a href="forgot1.php">password?</a></span>
  </div>
</form>

</body>
</html>
