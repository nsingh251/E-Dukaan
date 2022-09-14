<?php
     $shop_name=$_POST['shop_name'];
     echo $shop_name."<br>";
     $city_name=$_POST['city_name'];
     echo $city_name."<br>";
     $pin_code=$_POST['pin_code'];
     echo $pin_code."<br>";
     $opt=$_POST['opt'];
     echo $opt."<br>";
     $phone_no=$_POST['phone_no'];
     echo $phone_no."<br>";

     $FOM=$_POST['FOM'];
     echo $FOM."<br>";
     $snack=$_POST['snack'];
     echo $snack."<br>";
     $beverages=$_POST['beverages'];
     echo $beverages."<br>";
     $stationary=$_POST['stationary'];
     echo $stationary."<br>";
     $HCH=$_POST['HCH'];
     echo $HCH."<br>";
     $beauty=$_POST['beauty'];
     echo $beauty."<br>";

     $category=$FOM.$snack.$beverages.$stationary.$HCH.$beauty;
     echo $category;

     $mon=$_POST['mon'];
     echo $mon."<br>";
     $tue=$_POST['tue'];
     echo $tue."<br>";
     $wed=$_POST['wed'];
     echo $wed."<br>";
     $thu=$_POST['thu'];
     echo $thu."<br>";
     $fri=$_POST['fri'];
     echo $fri."<br>";
     $sat=$_POST['sat'];
     echo $sat."<br>";
     $sun=$_POST['sun'];
     echo $sun."<br>";

     $day=$mon.$tue.$wed.$thu.$fri.$sat.$sun;
     echo $day;

     $OpeningTime=$_POST['OpeningTime'];
     echo $OpeningTime."<br>";
     $ClosingTime=$_POST['ClosingTime'];
     echo $ClosingTime."<br>";

    

    
    $conn=mysqli_connect("localhost","root","","retailDatabase");
    if(!$conn)
    {
        echo "not connected";
     }

     $sql="INSERT INTO `addshop`(`shop_name`, `city_name`, `pin_code`, `opt`, `phone_no`, `category`, `day`, `OpeningTime`, `ClosingTime`) VALUES   ('$shop_name','$city_name',$pin_code,'$opt',$phone_no,'$category','$day','$OpeningTime','$ClosingTime')";
     $result=mysqli_query($conn,$sql);
     if($result==1){
         echo "<br> data saved";
     }

?>