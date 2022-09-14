<?php
  $cust_id=$_POST['cust_id'];
  echo $cust_id."<br>";
  $cName=$_POST['cName'];
  echo $cName."<br>";
  $phn_no=$_POST['phn_no'];
  echo $phn_no."<br>";
  $Address=$_POST['Address'];
  echo $Address."<br>";
  $email=$_POST['email'];
  echo $email."<br>";
  $password=$_POST['password'];
  echo $password."<br>";
  
  $conn=mysqli_connect("localhost","root","","retailDatabase");
  if(!$conn)
    {
        echo "not connected";

    }
    else echo "success";
    $sql="INSERT INTO cust_table values ('$cust_id','$cName',$phn_no,'$Address','$email','$password')";
    $result=mysqli_query($conn,$sql);
    if($result==1){
        echo "<br> data saved";
    }
    
    
    ?>