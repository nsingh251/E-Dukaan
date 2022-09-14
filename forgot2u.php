<?php
    $email=$_POST['Email'];
    $conn=mysqli_connect("localhost","root","","retailDatabase");
    if(!$conn){
        echo"failed";
    }
    
    else{
       echo " ";
    } 

    $sql="SELECT * FROM `registertable` WHERE `email`='$email'";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);
    if($row['email']!=$email){
        echo"<script> alert ('Email id not registered');</script>";
        echo "<script> window.location='forgot1u.php' </script>";
    }
    
    
    //echo $email;
    
    $code=rand(100000,999999);
    
    $from="info@techprolabz.com";
    //$to="ritika1793sct@gmail.com";
    
    $sub="mail auto";
    $msg="this is an automatic mail from E-DUKAN:online retail shop".PHP_EOL.PHP_EOL."Your One Time Password is : $code";
    $header="From:" . $from;
    
    mail($email,$sub,$msg,$header);

?>

<html>
    <head>
        <title>

        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel=" stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

        <style>
body{
    background-image: url("");
    background-repeat: no-repeat;
    background-position: cover;
    background-size: cover;
    background-color: #331c06;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 800 400'%3E%3Cdefs%3E%3CradialGradient id='a' cx='396' cy='281' r='514' gradientUnits='userSpaceOnUse'%3E%3Cstop offset='0' stop-color='%23D18'/%3E%3Cstop offset='1' stop-color='%23331c06'/%3E%3C/radialGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='400' y1='148' x2='400' y2='333'%3E%3Cstop offset='0' stop-color='%23FA3' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23FA3' stop-opacity='0.5'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect fill='url(%23a)' width='800' height='400'/%3E%3Cg fill-opacity='0.5'%3E%3Ccircle fill='url(%23b)' cx='267.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='532.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='400' cy='30' r='300'/%3E%3C/g%3E%3C/svg%3E");
    background-attachment: fixed;
    background-size: cover;


    

}
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                
                <div class="col-sm-3 "></div>
                
    <div class="col-sm-5 py-3">
                    
                    <form action="forgot3u.php" method="POST">
                        <input type="text" name="email" value="<?php echo $email ?>"  hidden>
                        <input type="text" name="otp2" value="<?php echo $code ?>" hidden>
                        
                        <div class="col-sm-10 py-5">
                            <h5>Enter OTP </h5>
                            <input type="text" class="form-control py-2" id="otp"   name="otp1"    aria-describedby="emailHelp">
             
                        </div>
                       
                        <div class="col-sm-6 py-4">
                            <button type="submit" class="btn btn-primary ">NEXT</button></div>
                            </div>
                        
                    </form>
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>
    </body>
    
</html>
