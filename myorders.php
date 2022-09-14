<?php
    session_start();
    
error_reporting(0);
    echo $_SESSION['email'];
    $email =  $_SESSION['email'];
    


    $con=mysqli_connect('localhost','root','','retaildatabase');

    $q="SELECT `o_id`, `products`, `quantity`, `price`, `status`, `email`, `house_no`, `apartment_name`, `area`, `city`, `pin_code` FROM `ordertable` WHERE `email`='$email'";
    $r=mysqli_query($con,$q);
   
   while( $row = mysqli_fetch_assoc($r))
   {
     

    echo   "<h3>Order id: ".$row['o_id']."</h3>";
    echo   "<h3>Delivering to:".$row['area']."</h3>";
    echo   "<h3> PRICE :" .$row['price']."</h3>";



    $p_ar=$row["products"];
    $p_unsr=unserialize(base64_decode($p_ar));
    $q_ar=$row["quantity"];
    $q_unsr=unserialize(base64_decode($q_ar));
    


    
  $i=0;
    $q= 0;
    echo "Products:";

    foreach ($p_unsr as $pvalue) {

        $sql= "SELECT `P_ID`,`PRODUCT_NAME`,`PRICE`, `STOCK`  FROM `addproduct` WHERE `P_ID`=$pvalue";

          $result = mysqli_query($con, $sql);
       while($row= mysqli_fetch_assoc($result)){
           $pid=$row['P_ID'];

           $product_name=$row['PRODUCT_NAME'];
           echo $product_name."<b>(".$q_unsr[$i].")</b>,";
          

          $i++;


       }
    }
}
    

?>
<html>
<head><title></title>
<style>
body{
    background-color: #331c06;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 800 400'%3E%3Cdefs%3E%3CradialGradient id='a' cx='396' cy='281' r='514' gradientUnits='userSpaceOnUse'%3E%3Cstop offset='0' stop-color='%23D18'/%3E%3Cstop offset='1' stop-color='%23331c06'/%3E%3C/radialGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='400' y1='148' x2='400' y2='333'%3E%3Cstop offset='0' stop-color='%23FA3' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23FA3' stop-opacity='0.5'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect fill='url(%23a)' width='800' height='400'/%3E%3Cg fill-opacity='0.5'%3E%3Ccircle fill='url(%23b)' cx='267.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='532.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='400' cy='30' r='300'/%3E%3C/g%3E%3C/svg%3E");
background-attachment: fixed;
background-size: cover;
color: beige;
border: 10px solid black;
padding: 10px 10px;

}
h3{
    color: #DAA520;
}

</style>


</head>
<body>
  <form action= newHom.php>
  <center><button type="submit" class="btn" name="submit"> FINISH</button></center>
                   </form>

</body>
</html>


