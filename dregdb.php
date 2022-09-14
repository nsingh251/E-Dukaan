<?php
session_start();
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