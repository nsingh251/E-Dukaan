<?php
   session_start();
   if(!isset($_SESSION['AdminLoginId']))
   {
     header("location:adminlogin.php");
   }
?>



<html>
    <head>
        <title> newdash </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <style>

  body{
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
    color: #fff;
    text-transform: capitalize;
    letter-spacing: 1px;
    margin-bottom: 40px;
}
#menu-filter ul li a{
    padding:10px 20px;
    font-size: 14px;
    color: #f0e3e3;
    border-radius:0px;
    border: 1px solid #BBBBBB;
    text-decoration: none;
    cursor: pointer;
}
#menu-filter ul li a.activ, #menu-filter ul li a:hover{
    background: #FFB03B;
    color: #fff;
    border: 1px solid #FFB03B;
}
  div.header{
                
                font-family: poppins;
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 10px 20px;
                background-color: #DAA520; 
                border: 2px solid black;
                border-radius: 8px 8px;
                
            }
            div.header button{
                background-color: beige;
                font-size: 16px;
                font-weight: 550;
                padding: 8px 12px;
                border: 2px solid black;
                border-radius: 10px 10px;
            }

        </style>
    </head>
    <body>
  <div class="header">
    <h1 > WELCOME TO ADMIN PANEL - <?php echo $_SESSION['AdminLoginId'] ?> </h1>
    <form method="POST">
    <button name="logout">LOG OUT</button>
    </form>
    </div>
         <section id="menu-list" class="section-padding">
             <div class="container-fluid">
                 <div class="row">
              
                   <div class="col-md-12 text-center" id="menu-filter">
                    <ul>
                        <li><a  href = "viewShop.php" class="filter" onclick="shop()">View all SHOPS</a></li>
                        <li><a href = "a_order.php"class="filter" data-filter=".O" > ORDER</a></li>
                        <li><a href = "viewProCustomer.php"class="filter active" data-filter=".menu-shop" >View Pro Customers</a></li>
                        <li><a href = "viewCustomer.php"class="filter" data-filter=".V&C" >View Customers</a></li>
                        <li><a href = "verifyshop.php" class="filter" onclick="VS()">verify shop</a></li>
                        <li><a href = "verifyprocustomer.php" class="filter" data-filter=".V&C" >verify Customer</a></li>
                        <li><a  href = "viewQuery.php" class="filter">Queries</a></li>
      
                        
                    </ul>
                    
                      
                   </div>

              <?php
                if(isset($_POST['logout']))
                {
                    session_destroy();
                    header("location:adminlogin.php");
                }
              
              ?>  

    </body>
</html>


