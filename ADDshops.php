<html>
    <head>
        <title>
            ADD SHOP
        </title>
        <style>
        .top1{ background-color: #DAA520;
         padding-top: 5px;
         padding-bottom: 5px;
         border: 10px solid black;
         border-radius: 20px 20px;
         }
         .top2{ background-color: #DAA520;
            border: 5px solid black;
         padding-top: 1px;
         padding-bottom: 1px;
         border-radius: 10px 10px;
         }
            .top{
                margin: 20px;
                background-color: #331c06;
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 800 400'%3E%3Cdefs%3E%3CradialGradient id='a' cx='396' cy='281' r='514' gradientUnits='userSpaceOnUse'%3E%3Cstop offset='0' stop-color='%23D18'/%3E%3Cstop offset='1' stop-color='%23331c06'/%3E%3C/radialGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='400' y1='148' x2='400' y2='333'%3E%3Cstop offset='0' stop-color='%23FA3' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23FA3' stop-opacity='0.5'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect fill='url(%23a)' width='800' height='400'/%3E%3Cg fill-opacity='0.5'%3E%3Ccircle fill='url(%23b)' cx='267.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='532.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='400' cy='30' r='300'/%3E%3C/g%3E%3C/svg%3E");
                background-attachment: fixed;
                background-size: cover;

            }
            .second{
                background-color: beige;
                margin:30px;
                padding-top: 20px;
                padding-left: 20px;
                padding-bottom: 15px;
                padding-right: 10px;
                border: 1px solid black;
            }
            

           form{
               margin:20px;
           }
           .b2{
               background-color: green;
               width: 100%;
               height: 7%;
               color: white;
               border: 5px solid black;
           }
           .b1{
               background-color: #DAA520;
           }
        </style>

    </head>
    <body class="top">
        <form action="product.php" method="POST">
            <div class = "top1" >
                <center><h1 style="color: black";><b><u>ADD SHOP</u></b></h1>
                <h2 style="color: black";>BASIC INFO</h2></center>

             </div>
                <div class="second">


                    SHOP NAME:<br><br>
                    <input type="text" placeholder="Enter Shop Name" name="shop_name" required ><br><br>
                    CITY NAME:<br><br>
                    <input type="text" placeholder="Enter City " name="city_name" required><br><br>
                    AREA/LOCALITY:<br><br>
                    <input type="text"  placeholder="Enter area/locality " name="area_name" required><br><br>
                     PIN CODE:<br><br>
                     <input type="text" placeholder="Enter Pin Code "  name="pin_code" required><br><br>
                     ARE YOU THE USER OR MANAGER OF SHOP PLACE:<br><br>
                     <input type="radio" id="YES" name="opt" value="YES">
                     <label for="YES" >YES</label><br>
                     <input type="radio" id="NO"  name="opt" value="NO">
                     <label for="NO">NO</label><br><br>
                     PhONE NUMBER:<br><br>
                     <input type="text" placeholder="Enter Phone Number" name="phone_no" required><br><br>


                     </div>
                    <div class="top2">
                         <center> <h3><u>CHARACTERISTICS</u></h3></center>
                    </div>
                    <div class="second">
                
                          <h4>SERVICES</h4>
                         <input type="checkbox" name="FOM" checked="checked" value="FOM">
                         <label>FOODGRAINS, OIL and MASALA</label><br><br>

                         <input type="checkbox" name="snack" checked="checked" value="snack">
                         <label>SNACKS & BRANDED FOOD</label><br><br>
               
                         <input type="checkbox" name="beverages"  checked="checked" value="beverages">
                         <label>BEVERAGES</label><br><br>

                         <input type="checkbox" name="stationary" checked="checked" value="stationary">
                         <label>STATIONARY</label><br><br>

                         <input type="checkbox" name="HCH" checked="checked" value="HCH">
                         <label>HYGIENE, CLEANING & HOUSEHOLDS</label><br><br>

                         <input type="checkbox" name="beauty" checked="checked" value="babycare">
                         <label>BABY CARE</label><br><br>
                         </div>

                         <div class="top2">
                           <center><h3><u>TIMING</u></h3></center>
                         </div>

                         <div class="second">
                
                              <input type="checkbox" checked="checked" name="mon" value="mon">
                              <label>MON</label>
     
                              <input type="checkbox" checked="checked" name="tue" value="tue" >
                              <label>TUE</label>

                              <input type="checkbox" checked="checked" name="wed" value="wed" >
                             <label>WED</label>
              
                              <input type="checkbox" checked="checked" name="thu" value="thu" >
                              <label>THU</label>

                              <input type="checkbox" checked="checked" name="fri" value="fri" >
                              <label>FRI</label>

                              <input type="checkbox" checked="checked" name="sat" value="sat" >
                               <label>SAT</label>
              
                              <input type="checkbox" checked="checked" name="sun" value="sun">
                               <label>SUN</label><br><br>

                               FROM:<input type="text"  placeholder="Opening Time" name="OpeningTime">
                               TO:<input type="text"  placeholder="Closing Time" name="ClosingTime">
                              

                            </div>
                            <div class="top2">
                          <center> <h3><u>AUTHENTICATION</u></h3></center>
                         </div>

                         <div class="second">

                         GST NUMBER: <input type="text" placeholder="Enter GST NUMBER" name="GST_NO" required><br><br>
                            <center>  <button class="b2" type="submit"  >ADD SHOP</button></center>

                            
                </div>
        </form>
    </body>
</html>
     





<?php


error_reporting(0);
    $user=$_POST['user'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    echo $user."<br>";
    echo $phone."<br>";
    echo $email."<br>";
    echo $pass."<br>";
    
    $conn=mysqli_connect("localhost","root","","retaildatabase");
    if(!$conn){
        echo "not connected";
    }
    else echo "success";
    
   $sql="INSERT INTO `dlogin`(`email`, `phone`, `username`, `password`) VALUES  ('$email','$phone','$user','$pass')";
   $result= mysqli_query($conn, $sql);
   if($result==1){
       echo "data saved";
   }
?>