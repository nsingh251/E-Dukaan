<?php
     $conn=mysqli_connect("localhost","root","","retailDatabase");
     if(!$conn)
       {
           echo "not connected";
   
       }
       else echo "success";  

       $user_name=$_POST['user_name'];
      echo $user_name."<br>";
      $password=$_POST['password'];
      echo $password."<br>";
      $email=$_POST['email'];
      echo $email."<br>";
      $phone_no=$_POST['phone_no'];
      echo $phone_no."<br>";
      $address=$_POST['address'];
      echo $address."<br>";
      
      $aadhar_no=$_POST['aadhar_no'];
      echo $aadhar_no."<br>";


   if (isset($_POST['submit']))
   {

       $file = $_FILES['file'];
       
       $fileName = $_FILES['file']['name'];
       $fileTmpName = $_FILES['file']['tmp_name']; 
       $fileSize = $_FILES['file']['size'];
       $fileError = $_FILES['file']['error'];
       $fileType = $_FILES['file']['type'];

       $fileExt = explode('.',  $fileName);
      
       $fileActualExt = strtolower(end($fileExt));

       $allowed = array('jpg','jpeg', 'png' ,'pdf');

       if(in_array($fileActualExt, $allowed)){
            if($fileError === 0){
               if ($fileSize < 1000000){
                  $fileNameNew = uniqid('', true).".".$fileActualExt;
                  $fileDestination = '72/uploads/'.$fileNameNew;
                  move_uploaded_file($fileTmpName, $fileDestination);
                  
 

                    $sql= "INSERT INTO `proaccount`(`user_name`, `password`, `email`, `phone_no`, `address`, `img`, `aadhar_no`) VALUES  ('$user_name','$password','$email',$phone_no, '$address','$fileNameNew',$aadhar_no)";
                     $result= mysqli_query($conn, $sql);
                    if($result==1){
                        echo "data saved";
                     }
                  header("Location: pro.php?uploadsuccess");

               }else{
                  echo "your file is too big!!";
               }

            }else{
               echo "there is error in uploading your file";

            }
       }else{
          echo "Not Allowed";
       }
   }

?>
