<?php
  $house_no=$_POST['house_no'];
  echo $house_no."<br>";
  $apartment_name=$_POST['apartment_name'];
  echo $apartment_name."<br>";
  $area=$_POST['area'];
  echo $area."<br>";
  $city=$_POST['city'];
  echo $city."<br>";
  $pin_code=$_POST['pin_code'];
  echo $pin_code."<br>";
  
  $conn=mysqli_connect("localhost","root","","retaildatabase");
  if(!$conn)
    {
        echo "not connected";

    }
    else echo "success";

    $sql= "INSERT INTO `address`(`house_no`, `apartment_name`, `area`, `city`, `pin_code`) VALUES  ($house_no,'$apartment_name','$area','$city', $pin_code)";
    $result=mysqli_query($conn,$sql);
    if($result==1){
        echo "<br> data saved";
    }
     