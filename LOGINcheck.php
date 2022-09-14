<?php
session_start();
error_reporting(0);

$email=$_POST['email'];
echo $email;
$password=$_POST['password'];
echo $password;

$conn=mysqli_connect("localhost","root","","retailDatabase");
if(!$conn)
  {
      echo "not connected";
   }
else echo "success";

$sql="SELECT * FROM `registertable` WHERE `email` = '$email'";
$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);
echo "<br>".$row['user_id'];
echo "<br>".$row['password'];

if($row['email'] == $email){
    if  ($row['password'] == $password){
        $_SESSION['email']=$row['email'];
        echo"session:".$_SESSION['email'];
        echo "<script> alert ('LOGIN SUCCESSFUL');</script>";
        echo "<script>window.location='newHom.php';</script>";
        
    }
    else{
    echo "<script> alert ('Invalid Password');</script>";
    echo '<script> window.location="REGISTRATION.php"</script>';
    }
}
else{
    echo "<script> alert ('NOT REGISTERED USER');</script>"; 
    echo '<script> window.location="REGISTRATION.php"</script>';
}
?>