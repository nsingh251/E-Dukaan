<?php


require("connection.php");

if (isset($_POST['login']))
{
    $admin_name =$_POST['admin_name'];
   
    $admin_password =$_POST['admin_password'];
    



    $query = "SELECT `admin_name`, `admin_password` FROM `admin_login` WHERE `admin_name` = '$admin_name' AND `admin_password` = '$admin_password' ";
    $result= mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1)
    {
      session_start();
      $_SESSION['AdminLoginId']= $_POST['admin_name'] ;
      header("location: dash.php");
    }
    else{
        echo "<script> alert ('Invalid Entry');</script>";
        echo '<script> window.location="adminlogin.php"</script>';
      }
    }
   
   
 
 
 
    //   {
   // echo "<script>alert ('correct');</script>";
   // echo '<script> window.location="dash.php"</script>';
   // }
   // else {
        //echo "<script>alert ('incorrect');</script>";
      // echo '<script> window.location="adminlogin.php"</script>';
    // }
//}
?>
