<?php
  
  $email=$_POST['email'];
  echo $email."<br>";
  $name=$_POST['name'];
  echo $name."<br>";
  $query=$_POST['query'];
  echo $query."<br>";
  
  $conn=mysqli_connect("localhost","root","","retaildatabase");
  if(!$conn)
    {
        echo "not connected";

    }
    else echo "success";

    $sql="INSERT INTO `contact`(`email`, `Name`, `Query`) VALUES ('$email','$name','$query')";
    $result=mysqli_query($conn,$sql);
    if($result==1){
        echo "<br> data saved";
    }
     