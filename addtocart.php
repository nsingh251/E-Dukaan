<?php
    session_start();
    
error_reporting(0);
    echo $_SESSION['email'];
    $email =  $_SESSION['email'];
    if ($email=="")
    {
        echo "<script> alert ('NOONE IS LOGGED IN');</script>";
        echo "<script>window.location='REGISTRATION.php';</script>";
    }

    if(isset($_GET['id'])){
        $pid=$_GET['id'];
        echo $pid;
    }

    $pid_ar=array($pid);
    print_r ($pid_ar);

    $qid_ar=array(1);
    
    $conn=mysqli_connect("localhost","root","","retaildatabase");
   if(!$conn)
  {
      echo "not connected";
   }
  else echo "success";

  $q="SELECT * FROM `add_to_cart` WHERE `email` = '$email' ";
  $r=mysqli_query($conn,$q);
       
  $row = mysqli_fetch_assoc($r);
  
  $p_ar=$row["products"];
  $p_unsr=unserialize(base64_decode($p_ar));
  print_r($p_unsr);
  $q_ar=$row["quantity"];
  $q_unsr=unserialize(base64_decode($q_ar));
  print_r($q_unsr);

  print_r($p_unsr);
  if(!empty($p_unsr)){

    $i=0;
    $t=0;
    foreach($p_unsr as $pvalue){
        //echo $pvalue;
        
        if($pid === $pvalue){
            $t++;
            // echo "<script>alert('product found $pid $pvalue');</script>";
             $q_unsr[$i]= $q_unsr[$i] + 1;
             $q_sr=base64_encode(serialize($q_unsr));
             $q="UPDATE `add_to_cart` SET `quantity`='$q_sr' WHERE `email`='$email'";
            $r=mysqli_query($conn,$q);
            
            if($r){
                echo "<script>alert('Product added to cart');</script>";
               // echo "<script>  window.history.back();</script>";           
                }
            else{
                echo "<script>alert('failed from1');</script>";
               // echo '<script> window.location="http://www.techprolabz.com/ecart_login.php"</script>';
            }
             
        }
        $i++;
        
    }

    if($t===0){
    
    $p_list=array_merge($pid_ar,$p_unsr);
    $p_sr=base64_encode(serialize($p_list));
    
    $q_list=array_merge($qid_ar,$q_unsr);
    $q_sr=base64_encode(serialize($q_list));
    
    $conn=mysqli_connect('localhost','root','','retaildatabase');
    //$q="update ecart_cart set products='$p_sr' , quantity='$q_sr' where email='$email'";
    $q="UPDATE  `add_to_cart` SET `products`= '$p_sr', `quantity` = '$q_sr' WHERE  `email` ='$email'"; 
    $r=mysqli_query($conn,$q);
  
    
    if($r){
        echo "<script>alert('Product added to cart');</script>";
        //echo "<script>  window.history.back();</script>";           
        }
    else{
        echo "<script>alert('failed from2');</script>";
       // echo '<script> window.location="http://www.techprolabz.com/ecart_login.php"</script>';
    }

    }


  }

  
  else{
  $p_sr=base64_encode(serialize($pid_ar));
  $q_sr=base64_encode(serialize($qid_ar));

  print_r ($p_sr);


  $sql="INSERT INTO `add_to_cart`(`email`, `products`, `quantity`) VALUES ('$email','$p_sr','$q_sr')";
  $result=mysqli_query($conn,$sql);
  }


?>




<?php
    session_start();
    echo $_SESSION['email'];
    $email =  $_SESSION['email'];

?>
<?php
    
    
    
    
            $con=mysqli_connect('localhost','root','','retaildatabase');

        $q="SELECT * FROM `add_to_cart` WHERE `email`='$email'";
        $r=mysqli_query($con,$q);
       
    $row = mysqli_fetch_assoc($r);
    
    $p_ar=$row["products"];
    $p_unsr=unserialize(base64_decode($p_ar));
     $q_ar=$row["quantity"];
    $q_unsr=unserialize(base64_decode($q_ar));
   print_r($p_unsr);

   $total_price = 0;
   $count=0;
   $i=0;

   $total_quan=0;
   

       ?>


<html>
<head>
        <title> E-Cart </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <style>    
body{
    background-color: #331c06;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 800 400'%3E%3Cdefs%3E%3CradialGradient id='a' cx='396' cy='281' r='514' gradientUnits='userSpaceOnUse'%3E%3Cstop offset='0' stop-color='%23D18'/%3E%3Cstop offset='1' stop-color='%23331c06'/%3E%3C/radialGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='400' y1='148' x2='400' y2='333'%3E%3Cstop offset='0' stop-color='%23FA3' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23FA3' stop-opacity='0.5'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect fill='url(%23a)' width='800' height='400'/%3E%3Cg fill-opacity='0.5'%3E%3Ccircle fill='url(%23b)' cx='267.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='532.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='400' cy='30' r='300'/%3E%3C/g%3E%3C/svg%3E");
background-attachment: fixed;
background-size: cover;}



.header{
    font-size:70px;
    color:#FFB03B;
    font-family:Impact,'Arial Narrow Bold', sans-serif;
    font-weight: 300;
    background-color:teal;
    border-radius:60px 0px 60px 0px;
    width:100%;
    height:130px;
    padding-top:30px;
}
.col-md-4{
    border: 2px solid black ;
    width: 400px;
    height: 200px;
    text-align:center;
    color: #fff;
    font-weight:bold;
    font-size: 12px;
    margin-bottom: 10px;
}

.col{
    border: 5px solid black ;
    width: 200px;
    height: 140px;
    text-align:center;
    background: #fff;
    font-weight:bold;
    font-size: 20px;
    padding: 6px;
}
.button{
    width: 1000px;
    height: 100px;

    
}
.pp
{
    color: #fff;
}
.col-md-4{
    border: 4px solid black ;
    width: 400px;
    height: 200px;
    text-align:center;
    color: #fff;
    font-weight:bold;
    font-size: 12px;
    margin-bottom: 10px;
    background-color: #DAA520;
    border-radius: 20px 11px;
}

.col-md-2 {
    border: 5px solid black ;
    background-color: #DAA520;
    text-align:center;
    margin-left: 6px;
    font-weight:bold;
    font-size: 20px;
    padding: 6px;
    color: black;
    border-radius: 15px 15px;
}
.col-md-1{
    
    border: 5px solid black ;
    background-color: beige;
    text-align:center;
   margin-left: 8px;
    font-weight:bold;
    font-size: 20px;
    padding: 6px;
     
}
.pp
{
    color: #fff;
}
.aa{
    background-color:green;
    color:beige;
    border: 5px solid black;
    font-size: 30px;
     margin-left: 70px;
     font-family:sans-serif;
     padding:10px;
     border-radius:15px 15px;
     margin-top:10px;

}
.ab{color:beige;}
h2{
    border: 6px solid black;
    color: beige;
    background-color:#DAA520;
    margin-bottom: 30px;
    width:250px;
}

        </style>
    </head>
    <body>
    <div class="container-fluid">
                   <div class = "row" id="menudiv">
                        
                   </div>

                   <?php
                              foreach ($p_unsr as $pvalue) {

                                  $sql= "SELECT `P_ID`,`PRODUCT_NAME`,`PRICE`, `STOCK` , `img` FROM `addproduct` WHERE `P_ID`=$pvalue";

                                    $result = mysqli_query($con, $sql);
                                 while($row= mysqli_fetch_assoc($result)){
                                     $pid=$row['P_ID'];
                                     $total_price=$total_price+($row["PRICE"]*$q_unsr[$i]);
                                     $total_quan=$total_quan+$q_unsr[$i];
                                     $q=$q_unsr[$i];


                                    
                                     $i++;
                                        /*
                                    echo "
                                    <div class = 'col-md-6'>
                                        <div class='container-fluid'>
                                            <div class = 'row'>
                                                <div class = 'col-md-4' >
                                                    <h4>
                                                 ".$row['PRODUCT_NAME']."
                                                    </h4>
                                                </div>
                                                <div class = 'col-md-4'>
                                                 ".$row['PRICE']."
                                                 </div>
                                                 <div class = 'col-md-4'>
                                                 ".$row['STOCK']."
                                                 </div>
                                             </div>
            
                                        </div>
            
                                    </div>";
                                     */

                                        ?>

                                        <script>
                                            

                                           /* var d4=document.createElement('div');
                                            d4.setAttribute("class","row");
                                            d3.appendChild(d4);
                                            */

                                            
                                            var dd1=document.createElement('div');
                                            dd1.setAttribute("class","col-md-12");
                                            document.getElementById("menudiv").appendChild(dd1);

                                           var img=document.createElement('img');
                                            img.setAttribute("class","col-md-4");
                                           img.setAttribute("src","72/UPLOAD/<?php echo $row['img'];?>  ");
                                            img.setAttribute("width", "10px"); 
                                            //img.setAttribute("background", "cover");
                                            dd1.appendChild(img); 

                                            var d2=document.createElement('div');
                                            d2.setAttribute("class","col-md-2");
                                            dd1.appendChild(d2);

                                            var h1=document.createElement('h4');
                                            h1.innerHTML= "<?php echo $row['PRODUCT_NAME']; ?>";
                                            d2.appendChild(h1);


                                            var dd2=document.createElement('div');
                                            dd2.setAttribute("class","col-md-2");
                                           
                                            dd2.innerHTML="<?php echo $row['PRICE']; ?>";
                                            dd1.appendChild(dd2);

                                           /* var dd3=document.createElement('div');
                                            dd3.setAttribute("class","col-md-1");
                                            dd3.innerHTML=
                                            dd1.appendChild(dd3); */

                                            var dd4=document.createElement('div');
                                            dd4.setAttribute("class","col-md-2");
                                            
                                            dd4.innerHTML="<?php echo $q; ?>";
                                            dd1.appendChild(dd4);
                                            

                                            

                                            var btn=document.createElement('button');
                                            btn.setAttribute("class","col-md-1");
                                            dd1.appendChild(btn);


                                             var a1=document.createElement('a');
                                            a1.setAttribute("href","ecart_remove.php?id=<?php echo $pid; ?> ");
                                            a1.innerHTML = "DELETE" ;
                                            btn.appendChild(a1);

                                            

                                        </script>
                                        <?php

                                  }
                                  
                              }
                              echo "<center><h2>Total Price: $total_price </h2></center>";
                              session_start();
                              $_SESSION['Total']= $total_price;
                              $_SESSION['quantity']=$total_quan;

                              $_SESSION['products']=$p_ar;
                              $_SESSION['quan']=$q_ar;
                              
                        
      ?>                  

                <center>   <a  class="aa" href="address.php" name = "submit"><b>Buy Now</b></a></center>
    </body>
</html>