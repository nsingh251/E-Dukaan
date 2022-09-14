<?php
     echo "<script> alert ('Shop is Created Successfully!! Your alloted Shop ID: 1003');</script>";
?>



<html>
<head>
    <style>
        .b{
            margin:20px;
            border:solid grey;
            padding:30px;
            width: 80%;
            background-color: beige;
            
        }
        
    
        .top{
            background-color: #331c06;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 800 400'%3E%3Cdefs%3E%3CradialGradient id='a' cx='396' cy='281' r='514' gradientUnits='userSpaceOnUse'%3E%3Cstop offset='0' stop-color='%23D18'/%3E%3Cstop offset='1' stop-color='%23331c06'/%3E%3C/radialGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='400' y1='148' x2='400' y2='333'%3E%3Cstop offset='0' stop-color='%23FA3' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23FA3' stop-opacity='0.5'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect fill='url(%23a)' width='800' height='400'/%3E%3Cg fill-opacity='0.5'%3E%3Ccircle fill='url(%23b)' cx='267.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='532.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='400' cy='30' r='300'/%3E%3C/g%3E%3C/svg%3E");
            background-attachment: fixed;
            background-size: cover;

        }
        h1{
            padding: 20px;
        }
        .box{
            width:100%;
            height:30px;
            font-size: 20px;
            padding: 20px;
        }
        .last{
            height:7%;
            width: 100%;
            border: 4px solid black;
            background-color: green;
        }
      
    </style>
</head>
<body class="top">
       <center> <h1 style= "background-color: #DAA520; border: 4px solid black; border-radius: 10px 10px;color:black;"><u><b>ADD PRODUCT</b></u></h1></center>
   
    <form class="b" action="shopD.php" method="POST" enctype="multipart/form-data">
    <b>SHOP_ID:<b><BR>
<input class="box" type="text" placeholder="Enter shop id"  name="SHOP_ID" required> <br><br>
    
<b>PRODUCT_NAME:<b><BR>
<input class="box" type="text" placeholder="Enter the name of product"  name="PRODUCT_NAME" required> <br><br>

PRODUCT_DETAIL:<BR>
<input class="box" type="text" placeholder="Enter Product Details"  name="PRODUCT_DETAILS" required><BR><BR>

CATEGORY:<br>
<input type="checkbox" checked="checked" name="fg" value="fg">
                <label>FOODGRAINS, OIL and MASALA</label><br><br>
              
                <input type="checkbox" checked="checked" name="bc" value="bc">
                <label>BABY CARE</label><br><br>

                <input type="checkbox" checked="checked" name="sb" value="sb">
                <label>SNACKS & BRANDED FOOD</label><br><br>
              
                <input type="checkbox" checked="checked" name="b" value="b">
                <label>BEVERAGES</label><br><br>

                <input type="checkbox" checked="checked" name="s" value="s">
                <label>STATIONARY</label><br><br>

                <input type="checkbox" checked="checked" name="hch" value="hch">
                <label>HYGIENE,CLEANING & HOUSEHOLDS</label><br><br>

            
PRICE:<br>
<input class="box" type="text" placeholder="Enter Price"  name="PRICE" required><BR><BR>

STOCK:<BR>

<input type="radio" id="in" name="STOCK" value="instock">
            <label for="instock" >instock</label><br><br>
            <input type="radio" id="out"  name="STOCK" value="out of stock">
            <label for="out of stock">out of stock</label><br><br>
           
            
BRAND:<br>
<input class="box" type="text" placeholder="Enter Brand Name"  name="BRAND" required><BR><BR>

<label for="file">
                           <b> PRODUCT  IMAGE:</b><br>
                        </label>
                        <input type="file"  name="file" ><br><br>

    <button class ="last" type="submit " name= "submit" ><b>DONE</b></button>
    
</form>

</body>
</html>

<!--   ADDshops.php  -->



<?php
     $shop_name=$_POST['shop_name'];
     
     $city_name=$_POST['city_name'];
     $area_name=$_POST['area_name'];
    
     $pin_code=$_POST['pin_code'];
    
     $opt=$_POST['opt'];
    
     $phone_no=$_POST['phone_no'];
    

     $FOM=$_POST['FOM'];
     
     $snack=$_POST['snack'];
    
     $beverages=$_POST['beverages'];
     
     $stationary=$_POST['stationary'];
     
     $HCH=$_POST['HCH'];
    
     $beauty=$_POST['beauty'];
    

     $category=$FOM.$snack.$beverages.$stationary.$HCH.$beauty;


     $mon=$_POST['mon'];
     
     $tue=$_POST['tue'];
    
     $wed=$_POST['wed'];
     
     $thu=$_POST['thu'];
     $fri=$_POST['fri'];
     
     $sat=$_POST['sat'];
     
     $sun=$_POST['sun'];
     

     $day=$mon.$tue.$wed.$thu.$fri.$sat.$sun;


     $OpeningTime=$_POST['OpeningTime'];
     
     $ClosingTime=$_POST['ClosingTime'];
     $GST_NO=$_POST['GST_NO'];
     

    

    
    $conn=mysqli_connect("localhost","root","","retailDatabase");
    if(!$conn)
    {
        echo "not connected";
     }

     $sql="INSERT INTO `addshop`(`shop_name`, `city_name`, `area_name`, `pin_code`, `opt`, `phone_no`, `category`, `day`, `OpeningTime`, `ClosingTime`,  `GST_NO`) VALUES   ('$shop_name','$city_name','$area_name',$pin_code,'$opt',$phone_no,'$category','$day','$OpeningTime','$ClosingTime','$GST_NO')";
     $result=mysqli_query($conn,$sql);
     if($result==1){
         echo "<br> data saved";
     }

?>