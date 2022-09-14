<?php
  require("connection.php");
?>



<html>
    <head>
        <title>Registration form</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
            body{
                background-color: #331c06;
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 800 400'%3E%3Cdefs%3E%3CradialGradient id='a' cx='396' cy='281' r='514' gradientUnits='userSpaceOnUse'%3E%3Cstop offset='0' stop-color='%23D18'/%3E%3Cstop offset='1' stop-color='%23331c06'/%3E%3C/radialGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='400' y1='148' x2='400' y2='333'%3E%3Cstop offset='0' stop-color='%23FA3' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23FA3' stop-opacity='0.5'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect fill='url(%23a)' width='800' height='400'/%3E%3Cg fill-opacity='0.5'%3E%3Ccircle fill='url(%23b)' cx='267.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='532.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='400' cy='30' r='300'/%3E%3C/g%3E%3C/svg%3E");
                background-attachment: fixed;
                background-size: cover;

            }
            .form-main-div{
                background:rgba(0,0,0,0.5);
                height:500px;
                width:100%;
                align-items:center;
                color:white;
                margin-top:50px;
                border: 2px solid #DAA520;
            }
            .h1login{
                color: black;
                background: #DAA520;
                border: 2px solid black;
                padding:20px 0px;

            }
            .formreg{
                padding:20px 40px;
                font-size:30px;
                
            }
            .a{
                margin-top:8px;
                width:100%;
                background-color:whitesmoke;
                color: black;
                margin-bottom:20px;
            }
            .btn{
                background-color:green;
                color:black;
                width: 100px;
                padding-top: 8px;
                padding-bottom: 8px;
            }
            
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-main-div">
                        <h1 class="h1login"><center>LOGIN</center></h1>
                        <form class="formreg" action= "adminloginphp.php" method = "POST">
                            USERNAME:<br>
                            <input class="a" type="text" placeholder="Enter Username" name="admin_name" required>
                           
                            PASSWORD:<br>
                            <input class="a" type="text"placeholder="Enter Password" name="admin_password" required>
                            <center>
                            <button class = "btn"  name = "login"  type="submit" value="login"><b>LOGIN</b></button>
                            </center>
                        </form>
                    </div>                    
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </body>
</html>