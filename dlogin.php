<?php
    session_start();
    $s=$_POST['email'];
    $y=$_POST['password'];
    

   echo $s;
   echo $y;

    

    $conn=mysqli_connect("localhost","root","","retaildatabase");
    if(!$conn){
        echo "not connected";
    }
    else echo "success";
    $sql="SELECT * FROM `dlogin` WHERE `email` = '$s'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    echo"<br>".$row['username'];
    echo"<br>".$row['email'];
    if($row['email']==$s){
        if($row['password']==$y){
            $_SESSION['email']=$row['email'];
            echo "<script> alert('valid user');</script>";
            echo '<script> window.location="shopD.php"</script>';
            
        }
    
    else{
        echo "<script> alert('invalid user');</script>";
        echo '<script> window.location="dukanlogin.php"</script>';
    }
}
    else{
        echo "<script> alert('not registered'); </script>";
        echo '<script> window.location="dukanlogin.php"</script>';
    
    }

   /* $sql="INSERT into registrationform values ('$s','$y')";
    $result=mysqli_query($conn,$sql);
    if($result==1){
        echo"<br> data saved";
    }*/
?>
