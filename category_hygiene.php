
<?php 
 session_start();
?>

<html>
    <head>
        <title> menu List </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=New+Tegomin&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <style>    
body{
    font-size: 15px;
    line-height: 1.52;
    background-color:grey;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-weight: 400;
    overflow-x: hidden;
    background-color: #331c06;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 800 400'%3E%3Cdefs%3E%3CradialGradient id='a' cx='396' cy='281' r='514' gradientUnits='userSpaceOnUse'%3E%3Cstop offset='0' stop-color='%23D18'/%3E%3Cstop offset='1' stop-color='%23331c06'/%3E%3C/radialGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='400' y1='148' x2='400' y2='333'%3E%3Cstop offset='0' stop-color='%23FA3' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23FA3' stop-opacity='0.5'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect fill='url(%23a)' width='800' height='400'/%3E%3Cg fill-opacity='0.5'%3E%3Ccircle fill='url(%23b)' cx='267.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='532.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='400' cy='30' r='300'/%3E%3C/g%3E%3C/svg%3E");
background-attachment: fixed;
background-size: cover;
}
.section-padding{
    padding: 60px 0px;
}
.marb-35{
    margin-bottom: 35px;
}
#menu-filter ul li{
    display: inline-block;
    text-transform: capitalize;
    letter-spacing: 1px;
    margin-bottom: 40px;
    
}
#menu-filter ul li a{
    padding:10px 20px;
    font-size: 15px;
    color: black;
    border-radius:5px 5px;
    border: 1px solid teal;
    text-decoration: none;
    cursor: pointer;
    background-color:#FFB03B;

}
#menu-filter ul li a.active, #menu-filter ul li a:hover{
    background:teal;
    border: 1px solid;
}

.header{
    font-size:70px;
    color: black;
    font-family:Impact,'Arial Narrow Bold', sans-serif;
    font-weight: 300;
    background-color: #DAA520;
    border-radius:60px 0px 60px 0px;
    width:100%;
    height:130px;
    padding-top:30px;
}
.col-md-3 {
    border: 2px solid black ;
    width: 100px;
    text-align:center;
    background: #fff;
    font-weight:bold;
    font-family: 'New Tegomin', serif;
}
.col-md-5 , .col-md-2{
    color: beige;
    font-family: 'New Tegomin', serif;}
        </style>
    </head>
    <body>
         <section id="menu-list" class="section-padding">
             <div class="container-fluid">
                 <div class="row">
                  <div class="col-md-12 text-center marb-35">
                      <h1 class="header" style="border: 2px solid black; font-family: 'Permanent Marker', cursive;">Menu List </h1>
                  </div>
                   <div class="col-md-12 text-center" id="menu-filter">
                    <ul>

                    <li><a class="filter " style=" font-family: 'Permanent Marker', cursive; font-size: 20px;" href = "menu1.php" >Show all</a></li>
                        <li><a class="filter" style=" font-family: 'Permanent Marker', cursive; font-size: 20px;" href="category_foodgrains.php">Foodgrains , Oils & Masala</a></li>
                        <li><a class="filter" style=" font-family: 'Permanent Marker', cursive; font-size: 20px;" href="category_babycare.php">Baby Care</a></li>
                        <li><a class="filter" style=" font-family: 'Permanent Marker', cursive; font-size: 20px;" href="category_snacks.php"> Snacks and Branded food</a></li>
                        <li><a class="filter" style=" font-family: 'Permanent Marker', cursive; font-size: 20px;" href="category_beverages.php" >Beverages</a></li>
                        <li><a class="filter active" style=" font-family: 'Permanent Marker', cursive; font-size: 20px;"  >Hygiene,Cleaning and Households </a></li>
                        <li><a class="filter" style=" font-family: 'Permanent Marker', cursive; font-size: 20px;" href="category_stationary.php" >stationary</a></li>

                    </ul>
                      
                   </div>
                <div class="container-fluid">
                   <div class = "row" id="menudiv">
                        
                   </div>
                        <?php
                        $shopid=$_SESSION['shopid'];
                             $conn=mysqli_connect("localhost","root","","retailDatabase");
                                if(!$conn)
                                        {
                                        echo "not connected";
       
                                         }

                                   $sql= "SELECT `P_ID` , `PRODUCT_NAME`, `PRICE`, `STOCK` FROM `addproduct` WHERE   `SHOP_ID`= '$shopid' AND `CATEGORY` = 'hch' " ;

                                    $result = mysqli_query($conn, $sql);
                                 while($row= mysqli_fetch_assoc($result)){
                                    $pid=$row['P_ID'];
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
                                            var d1=document.createElement('div');
                                            d1.setAttribute("class","col-md-6");
                                            
                                            document.getElementById("menudiv").appendChild(d1);

                                            var d2=document.createElement('div');
                                            d2.setAttribute("class","container-fluid");
                                            d1.appendChild(d2);


                                            var d3=document.createElement('div');
                                            d3.setAttribute("class","row");
                                            d2.appendChild(d3);

                                           /* var d4=document.createElement('div');
                                            d4.setAttribute("class","row");
                                            d3.appendChild(d4);
                                            */


                                            var dd1=document.createElement('div');
                                            dd1.setAttribute("class","col-md-5");
                                            
                                            d3.appendChild(dd1);

                                            var h1=document.createElement('h4');
                                            h1.innerHTML= "<?php echo $row['PRODUCT_NAME']; ?>";
                                            dd1.appendChild(h1);


                                            var dd2=document.createElement('div');
                                            dd2.setAttribute("class","col-md-2");
                                            dd2.innerHTML="<?php echo $row['PRICE']; ?>";
                                            d3.appendChild(dd2);

                                            var dd3=document.createElement('div');
                                            dd3.setAttribute("class","col-md-2");
                                            dd3.innerHTML="<?php echo $row['STOCK']; ?>";
                                            d3.appendChild(dd3);

                                           var a=document.createElement('a');
                                            a.setAttribute("class","col-md-3");
                                            a.setAttribute("href","view_detail.php?id=<?php echo $pid ?>")
                                            a.innerHTML = "View Detailes" ;
                                            d3.appendChild(a); 


                                        </script>
                                        <?php

                                  }
                        ?>

                    </div>
                </div>                   

                   <!--end row-->
             </div>   <!--end container-->
            </section> <!---end section-->         
   

    </body>
</html>








   