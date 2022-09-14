<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<style>
body { background-color: #331c06;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 800 400'%3E%3Cdefs%3E%3CradialGradient id='a' cx='396' cy='281' r='514' gradientUnits='userSpaceOnUse'%3E%3Cstop offset='0' stop-color='%23D18'/%3E%3Cstop offset='1' stop-color='%23331c06'/%3E%3C/radialGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='400' y1='148' x2='400' y2='333'%3E%3Cstop offset='0' stop-color='%23FA3' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23FA3' stop-opacity='0.5'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect fill='url(%23a)' width='800' height='400'/%3E%3Cg fill-opacity='0.5'%3E%3Ccircle fill='url(%23b)' cx='267.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='532.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='400' cy='30' r='300'/%3E%3C/g%3E%3C/svg%3E");
background-attachment: fixed;
background-size: cover;


   
}

* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
  margin-left: 200px;
}

.icon {
  padding: 10px;
  background: #DAA520;
  border: solid black 3px;
  color: BLACK;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid #DAA520;
}

/* Set a style for the submit button */
.btn {
  background-color: #DAA520;
  color: BLACK;
  padding: 15px 20px;
  border: solid black 3px;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
.top{
    background-color: #DAA520;
    font-size: large;
    color:black;
    padding:20px;
    border: solid black 5px;
}
.sdiv{
    padding:160px;
    border: solid black 3px;
 
}
.t{
    margin-left:200px;
    width:100%;
}
.form{
 margin-top:150px;
  margin-right:250px;
  margin-left:70px;

}

</style>
</head>
<body>
<div class="top">
        <center><h1><b><u>REGISTRATION FORM</u></b></h1></center>
    </div>
   <div class="container-fluid">
         <div class="row">
          <div class="col-md-3">
              <img src="regig.gif " height=500px; width=400px;></img>  
           </div>

               <div class="col-md-9">
               

<form action="ADDshops.php" class="form" method="POST">

  
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="user" pattern="[a-zA-Z\s]+" title="Only alphabets and spaces are allowed" required>
  </div>
  <div class="input-container">
    <i class="fa fa-phone icon"></i>
    <input class="input-field" type="text" placeholder="phone" name="phone" pattern="[0-9]+" title="Only numbers are allowed" required>
  </div>
 
  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email" required>
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" pattern=".{8,}" title="eight or more characters"  placeholder="Password" name="pass" required>
  </div>
  <div class="t">
  
  <button type="submit" class="btn"><b>REGISTER</b></button>


 
  </div>
               </div>
          </div>
        </div>
              </body>
              </html>

  