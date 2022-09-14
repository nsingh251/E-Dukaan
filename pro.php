<html>
    <head>
        <title>PRO ACCOUNT</title>
        <meta charset="utf-8">
        <meta name="viewport" content="widthdevice-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">"
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            @import url('http://fonts.googleapis.com/css?family=Lato:400,700,900,1100');
            * {
                padding: 0; margin: 0; box-sizing: border-box;
            }
            
            
            .profile-images-card{
                margin: auto;
                display: table;
                background: #fff;
                padding: 30px 50px;
                box-shadow: 0px 0px 5px #ddd;
            }
            .profile-images{
                width: 150px;
                height: 150px;
                background: #fff;
                border-radius: 50%;
                overflow: hidden;
            }
            .profile-images img{
                width: 100%;
                height: 100%;
                object-fit: cover;
                display: inline-block;
                vertical-align: middle;
                
            }
            .custom-file input[type='file']{
                 display: none;
            }
            .custom-file label{
                cursor: pointer;
                color: #000;
                display: table;
                margin: auto;
                margin-top: 15px
            }
            .bg{
                
                 background-color: #331c06;
                 background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 800 400'%3E%3Cdefs%3E%3CradialGradient id='a' cx='396' cy='281' r='514' gradientUnits='userSpaceOnUse'%3E%3Cstop offset='0' stop-color='%23D18'/%3E%3Cstop offset='1' stop-color='%23331c06'/%3E%3C/radialGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='400' y1='148' x2='400' y2='333'%3E%3Cstop offset='0' stop-color='%23FA3' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23FA3' stop-opacity='0.5'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect fill='url(%23a)' width='800' height='400'/%3E%3Cg fill-opacity='0.5'%3E%3Ccircle fill='url(%23b)' cx='267.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='532.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='400' cy='30' r='300'/%3E%3C/g%3E%3C/svg%3E");
                 background-attachment: fixed;
                 background-size: cover;


                }
            .form-container{
                 margin-top: 50px;
                 border: 2px solid #fff; 
                 border-radius: 10px 10px;
                 padding: 50px 60px;
                 margin-bottom: 30vh;
                 box-shadow: 10px 10px 10px 5px rgba(0,0,0, 0.75);
            }

            .btn{
                background-color: green;
                color: white;
            }
        
            .top{
                background-color: #DAA520;
                padding-top: 15px;
                padding-bottom: 15px;
                border: 5px solid black;
                border-radius: 40px 80px;
            }
            .top1{
                background-color: black;
                

            }
            .imgg{
                margin-top: 100px;
            }
            
        </style>

    </head>
    <body class="bg">
    <div class="top">
                 <center><h1><b><u>PRO ACCOUNT</u></b></h1>
                 <h2><b><u>REGISTRATION FORM</u></b></h2></center>
                </div>
                <div class="top1">
                </div>
        <div class="container-fluid  ">

            <div class="row ">
                
                <div class="col-md-7">

                

                    <div>
                    <form class="form-container" action="proaccountdb.php " method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="exampleInputUsername1" style="color: #DAA520;"><b><u>User Name:</u></b></label>
                            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Enter User Name"  name="user_name"   required  >
                          </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1"style="color: #DAA520;"><b><u>Password:</u></b></label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" name="password" required >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" style="color: #DAA520;"><b><u>Email address:</u></b></label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email " name="email" required >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPhoneNumber1" style="color: #DAA520;"><b><u>Phone Number:</u></b></label>
                            <input type="text" class="form-control" id="exampleInputPhoneNumber1" placeholder="Enter Phone Number" name="phone_no" required >
                          </div>
                          
                          <div class="form-group">
                            <label for="exampleInputAddress1" style="color: #DAA520;"><b><u>Address:</u></b></label>
                            <input type="text" class="form-control" id="exampleInputAddress1" placeholder="Enter Address" name="address"  required>
                          </div>
                        
                          <label for="file" style="color: #DAA520;">
                           <b><u> Enter Address Proof (Electricity Bill):</u></b>
                        </label>
                        <input type="file"  name="file" >
    
                            <div class="form-group">
                                <label for="exampleInputAadhar1" style="color: #DAA520;"><b><u>Aadhar Number:</u></b></label>
                                <input type="text" class="form-control" id="exampleInputAadhar1" placeholder="Enter Aadhar Number" name="aadhar_no" required>
                              </div>
        

                           <center><button class="btn" type="submit" class="btn btn-success btn-block" name="submit" ><b>Register</b></button></center>
                          </form>        
                          
                </div>
                </div>

                <div class="col-md-5">
                <img class="imgg" src="pro.gif" height=500px; width="400px"></img> 
                </div>
                <div class="col-md-0 "></div>
                </div>
            </div>

        </div>
    </body>
</html>