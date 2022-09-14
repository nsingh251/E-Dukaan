<?php
    session_start();
   
error_reporting(0);
    echo $_SESSION['email'];
    $email =  $_SESSION['email'];
    $products = $_SESSION['products'];
    $quan=$_SESSION['quan'];

    $house_no=$_POST['house_no'];
    echo $house_no."<br>";
    $apartment_name=$_POST['apartment_name'];
    echo $apartment_name."<br>";
    $area=$_POST['area'];
    echo $area."<br>";
    $city=$_POST['city'];
    echo $city."<br>";
    $pin_code=$_POST['pin_code'];
    echo $pin_code."<br>";
    $Total=$_SESSION['Total'];
?>

    <html>
       <head>
       <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=New+Tegomin&display=swap" rel="stylesheet">

         <style>
            body{
    background-color: #331c06;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 800 400'%3E%3Cdefs%3E%3CradialGradient id='a' cx='396' cy='281' r='514' gradientUnits='userSpaceOnUse'%3E%3Cstop offset='0' stop-color='%23D18'/%3E%3Cstop offset='1' stop-color='%23331c06'/%3E%3C/radialGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='400' y1='148' x2='400' y2='333'%3E%3Cstop offset='0' stop-color='%23FA3' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23FA3' stop-opacity='0.5'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect fill='url(%23a)' width='800' height='400'/%3E%3Cg fill-opacity='0.5'%3E%3Ccircle fill='url(%23b)' cx='267.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='532.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='400' cy='30' r='300'/%3E%3C/g%3E%3C/svg%3E");
background-attachment: fixed;
background-size: cover;
  }

  .col-md-3 {
    border: 4px solid black ;
    width: 20%;
    text-align:center;
    background: #fff;
    font-weight:bold;
    font-family: 'New Tegomin', serif;
}
.col-md-1 , .col-md-2{
    color: black;
    border: 6px solid black ;
    width: 50%;
    text-align:center;
    background: #DAA520;
    font-weight:bold;
    padding-top: 2px;
    padding-bottom: 3px;
    font-family: 'New Tegomin', serif;
    
}
h3{
    color: beige;
    font-family: 'New Tegomin', serif;
    font-size: 38px;
}
p{
    font-family: 'New Tegomin', serif;
    font-size: 20px;
    color: rgb(28, 28, 63);
            
}
.r {
    color: black;
    width:50%;
    background-color: #DAA520;
    border: 6px solid black ;
    font-family: 'New Tegomin', serif;
    
}
.btn{
    background-color: green;
   
    margin-top: 10px;
    border: 3px solid black ;
}




         </style>
       </head>
          <body>

<?php 
    if(isset($_POST['submit'])){
     //echo "<script> alert('working'); </script>";


        $conn=mysqli_connect("localhost","root","","retailDatabase");
        if(!$conn)
                {
                echo "not connected";
  
                 }
      $sql="INSERT INTO `ordertable`(`products`, `quantity`, `price`, `status`, `email`, `house_no`, `apartment_name`, `area`, `city`, `pin_code`) VALUES ('$products','$quan',$Total,0,'$email',$house_no,'$apartment_name','$area','$city',$pin_code)";
      $result = mysqli_query($conn, $sql);
      if($result==1){
        echo "<br> data saved";
    }
    }

?>


          <div class="container-fluid">
                   <div class = "row" id="maindiv">

                  
                   </div>
                   <div class="r">
                   <form method="POST" >
                   <input type = "text" placeholder="House no" name="house_no" value="<?php echo $house_no ?>" hidden>
                    <input type = "text" placeholder="Apartment name" name="apartment_name" value="<?php echo $apartment_name ?>" hidden>
                    <input type = "text" placeholder="Area/Street details to locate you.." name="area" value="<?php echo $area ?>" hidden>
                    <input type = "text" placeholder="City" name="city" value="<?php echo $city ?>" hidden>
                    <input type = "text" placeholder="Pin Code" name="pin_code" value="<?php echo $pin_code ?>" hidden>
                   
                   <center><b>Payment:</b> <input   type="radio" id="myradio" name="radio">
                  <b> COD</b>
                    
                    <input type="radio"  id="radio" name="radio">
                   <b> Khatabook</b><br><br>
                   <button type="submit" class="btn" name="submit"> PLACE ORDER</button></center>
                   </form>
                    </div>
                    <?php


                    $conn=mysqli_connect('localhost','root','','retaildatabase');
                    if(!$conn)
                    {
                        echo "not connected";
                
                    }
                   
                    
                        ?>
                        
                  <script>
                         var d = document.createElement('div');
                         d.setAttribute("class","col-md-12");
                         document.getElementById("maindiv").appendChild(d);

                         var d1 = document.createElement('div');
                         d1.setAttribute("class","col-md-1");
                         d1.innerHTML="<u><b>House No. :</b></u><br> <?php echo $_POST['house_no'] ; ?>";
                         d.appendChild(d1);

                         var d2 = document.createElement('div');
                         d2.setAttribute("class","col-md-1");
                         d2.innerHTML="<b><u>Apartment Name:</u><b> <br><?php echo $_POST['apartment_name'] ; ?>";
                         d.appendChild(d2);

                         var d3 = document.createElement('div');
                         d3.setAttribute("class","col-md-1");
                         d3.innerHTML="<b><u>Area:</u></b><br> <?php echo $_POST['area']; ?>";
                         d.appendChild(d3);

                         var d4 = document.createElement('div');
                         d4.setAttribute("class","col-md-1");
                         d4.innerHTML="<b><u>City: </u></b><br><?php echo $_POST['city'] ; ?>";
                         d.appendChild(d4);

                         var d5 = document.createElement('div');
                         d5.setAttribute("class","col-md-1");
                         d5.innerHTML="<b><u> Pin Code:</u></b><br> <?php echo $_POST['pin_code'] ; ?>";
                         d.appendChild(d5);

                         var d6 = document.createElement('div');
                         d6.setAttribute("class","col-md-1");
                         d6.innerHTML="<b><u>Total Price:</u></b><br> <?php echo $_SESSION['Total'] ?> ";
                         d.appendChild(d6);

                         var d7 = document.createElement('div');
                         d7.setAttribute("class","col-md-1");
                         d7.innerHTML="<b><u> Quantity:</u></b><br><?php echo $_SESSION['quantity'] ?> ";
                         d.appendChild(d7);

                         var d8 = document.createElement('div');
                         d8.setAttribute("class","col-md-1");
                         d8.innerHTML="<b><u>Expected delivery :</u></b> <br> 2 to 3 hrs ";
                         d.appendChild(d8);



                         

                         function myFun() {
                                var x = document.getElementById("myRadio");
                                 x.checked = true;
                         }
                         
                         /*var btn=document.createElement('button');
                         btn.setAttribute("class","col-md-1");
                         d.appendChild(btn);


                         var a1=document.createElement('a');
                         a1.setAttribute("href"," newHOM.PHP ");
                         a1.innerHTML = "PLACE ORDER" ;
                         btn.appendChild(a1); */

                       </script>

                     
                     
          </body>

    </html>





    