<?php
session_start();
error_reporting(0);
     $conn=mysqli_connect("localhost","root","","retailDatabase");
     if(!$conn)
       {
           echo "not connected";
   
       }
       else echo "success";  

        $PRODUCT_NAME=$_POST['PRODUCT_NAME'];
       $PRODUCT_DETAILS=$_POST['PRODUCT_DETAILS'];
   
       $fg=$_POST['fg'];
       $bc=$_POST['bc'];
       $sb=$_POST['sb'];
       $b=$_POST['b'];
       $s=$_POST['s'];
       $hch=$_POST['hch'];
   
       
       $CATEGORY=$fg.$bc.$sb.$b.$s.$hch;
       
       
       $PRICE=$_POST['PRICE'];
       $STOCK=$_POST['STOCK'];
       $BRAND=$_POST['BRAND'];
       $SHOP_ID=$_POST['SHOP_ID'];
   

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
                  $fileDestination = '72/UPLOAD/'.$fileNameNew;
                  move_uploaded_file($fileTmpName, $fileDestination);
                  
 

                    $sql= "INSERT INTO `addproduct`(`SHOP_ID`,`PRODUCT_NAME`, `PRODUCT_DETAILS`, `CATEGORY`, `PRICE`, `STOCK`, `BRAND`, `img`) VALUES  ('$SHOP_ID','$PRODUCT_NAME','$PRODUCT_DETAILS','$CATEGORY','$PRICE','$STOCK', '$BRAND','$fileNameNew')";
                     $result= mysqli_query($conn, $sql);
                    if($result==1){
                        echo "data saved";
                     }
                  header("Location: product.php?uploadsuccess");

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


