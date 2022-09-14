<?php
$user=$_POST['email'];
echo $user;
$password=$_POST['password'];
echo $password;


$conn=mysqli_connect("localhost","root","","retailDatabase");
if(!$conn)
  {
      echo "not connected";


}
else echo "success";
$sql="SELECT * FROM `cust_table` WHERE `email` = '$user'";
$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);
echo "<br>".$row['cName'];
echo "<br>".$row['password'];

if($row['email'] == $user){
    if  ($row['password'] == $password){
        echo "valid user";
    }
    else{
    echo "<br> invalid";
    }
}
else{
    echo  "user not registered";
}
?>