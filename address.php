<html>
<head>
<title>address</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<style>
  input{
      width: 50%;
      border: 2px solid black;
  }
body{
    background-color: #331c06;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 800 400'%3E%3Cdefs%3E%3CradialGradient id='a' cx='396' cy='281' r='514' gradientUnits='userSpaceOnUse'%3E%3Cstop offset='0' stop-color='%23D18'/%3E%3Cstop offset='1' stop-color='%23331c06'/%3E%3C/radialGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='400' y1='148' x2='400' y2='333'%3E%3Cstop offset='0' stop-color='%23FA3' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23FA3' stop-opacity='0.5'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect fill='url(%23a)' width='800' height='400'/%3E%3Cg fill-opacity='0.5'%3E%3Ccircle fill='url(%23b)' cx='267.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='532.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='400' cy='30' r='300'/%3E%3C/g%3E%3C/svg%3E");
    background-attachment: fixed;
    background-size: cover;
  }
  .address{
      background-color: beige;
      padding-top: 20px;
      border: 4px solid black;
      padding-bottom: 10px;
  }
 .hh3{
    background-color: #DAA520; 
    padding: 10px 10px; 
    border: 5px solid black;
    width:60%;
 }
 .hh1{
    background-color: #DAA520; 
    padding: 10px 10px; 
    border: 5px solid black;
 }
 .btn{
     background-color: green;
     border: 2px solid black;
     color: black;
     
 }
</style>
</head>
    <body>
   
    <div class="container-fluid">
     <div class="row">
     
      <div class="col-md-3"></div>
      <div class="col-md-6">
     <center> 
     <h1 class="hh1"> <b><u> Add New Address</u></b><h1>
           <h3 class="hh3"> Address Details</h3><br><br>
              <form action="order.php" class="address" method="POST" >
              
                    <input type = "text" placeholder="House no" name="house_no"><br><br>
                    <input type = "text" placeholder="Apartment name" name="apartment_name"><br><br>
                    <input type = "text" placeholder="Area/Street details to locate you.." name="area"><br><br>
                    <input type = "text" placeholder="City" name="city"><br><br>
                    <input type = "text" placeholder="Pin Code" name="pin_code"><br><br>
                    <input type="submit" class="btn"> 
             </form></center>
        </div>
        <div class="col-md-3"></div>
        </div>
        </div>




    </body>
</html>