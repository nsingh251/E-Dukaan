<?php
  $user_id=$_POST['user_id'];
  echo $user_id."<br>";
  $password=$_POST['password'];
  echo $password."<br>";
  $email=$_POST['email'];
  echo $email."<br>";
  $phn_no=$_POST['phn_no'];
  echo $phn_no."<br>";
  $aadhar_no=$_POST['aadhar_no'];
  echo $aadhar_no."<br>";
  
  $conn=mysqli_connect("localhost","root","","retaildatabase");
  if(!$conn)
    {
        echo "not connected";

    }
    else echo "success";

    $sql="INSERT INTO `registertable`(`user_id`, `password`, `email`, `phn_no`, `aadhar_no`) VALUES ('$user_id','$password','$email',$phn_no,'$aadhar_no')";
    $result=mysqli_query($conn,$sql);
    if($result==1){
        echo "<br> data saved";
    }
     