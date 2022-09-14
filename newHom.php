<?php
 session_start();
 error_reporting(0);
 echo "session".$_SESSION['email'];
 ?>

<!DOCTYPE html>
<html>
<head>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=New+Tegomin&display=swap" rel="stylesheet">




<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
<style>
 *{box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;

}

.topnav {
  overflow: hidden;
  

  
}

.topnav a {
  float: left;
  display: block;
  color: #fff; 
  text-align: center;
  padding: 10px 10px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 4px;
  margin-top: 5px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 10px;
  background: teal;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 300px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 10px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }

}
 .img{
   background-image: url("b3.jpg");
   height:500px;
   width: 100%;
   background-size: cover;
   background-repeat: none;
 }
  h2{
    color: azure;
    font-family:Georgia, 'Times New Roman', Times, serif;
    font-size:100px;
    float:left;
    margin: 200px 80px 60px 30px;
  }
  .A{
    background-color:rgb(218, 213, 207);
    margin-top:5px;
    height:110px;
    padding: 25px;
  }
  .A a{
    font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    float: left;
    display: block;
    color: black; 
    text-align: center;
    padding: 10px 50px;
    text-decoration: none;
    font-size: 17px;
  }
  * {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
   max-width: 100%;
  position: relative;
  margin:3px 150px;
  height:500px;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 2s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

.shop{
  width:100%;
  height: 100%;
  background-size: cover;
  border: black solid;
}
h5{
  background-color: blanchedalmond;
}

footer{
  width:100%;
  height:400px;
  background-color: rgb(31, 28, 28);
  color: antiquewhite;
  display: inline-block;
}
h3{
  float: center;

}
 
footer p{
	font-family: calibri;
}
footer p:nth-child(1){
	font-size: 30px;
	font-weight:bold;
	color:#191919;
	line-height:10px;
}
footer p:nth-child(2){
	font-size: 16px;
	color:#7e7d7d;
	width:600px;
	text-align: center;
}
footer{
	height:300px;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	position: relative;
}
.social-icons a{
	width:40px;
	height:40px;
	display: flex;
	justify-content: center;
	align-items: center;
	background-color:#e6e3e3;
	margin:20px 10px;
	border-radius:50%;
}
.social-icons{
	display: flex;
	
}
.social-icons i,.social i{
	color:#000000;
}
.social-icons a:hover{
	background-color:#000000;
	box-shadow:2px 2px 12px rgba(0,0,0,0.2);
	transition:all ease 0.5s;
}
.social-icons a:hover i,
.social a:hover i{
	color:#FFFFFF;
	transition:all ease 0.5s;
}
 
.copyright{
	color:#565555;
	font-size: 12px;
	position: absolute;
	left:50%;
	bottom:10px;
	transform: translateX(-50%);
}
.social{
	position: fixed;
	top:50%;
	right:0px;
	transform:translateY(-50%);
}
.social a{
	display: flex;
	justify-content: center;
	align-items: center;
	width:50px;
	height:50px;
	margin:0px;
	padding: 0px;
	line-height:0px;
	background-color:#FFFFFF;
	border:1px solid #CBCBCB;
	box-shadow:2px 2px 12px rgba(0,0,0,0.2);
}
.social a:hover{
	background-color:#000000;
	transition:all ease 0.5s;
}
.social i{
	font-size:20px;
	color:#2B2B2B;
}

.services{
	height:600px;
	background-color:#ffffff;
	padding: 2% 10% 0px 10%;
}
.services-text p:nth-child(1){
	font-family: calibri;
	font-weight:bold;
	color:#1d1c1c;
	font-size:30px;
	line-height:0px;
}
.services-text p:nth-child(2){
	font-family:calibri;
	font-weight: bold;
	color:#3e3d3d;
	font-size: 15px;
	line-height: 5px;
}
.services-text p:nth-child(3){
  font-family:calibri;
   color:#7e7d7d;
}
.services-text{
	width: 500px;
	margin:50px 0px;
}
.box-container{
	display:flex;
	justify-content:space-between;
}
.box-1,.box-2,.box-3{
	width: 300px;
	height:320px;
	background-repeat: no-repeat;
	background-size: cover;
	box-shadow:2px 2px 18px rgba(0,0,0,0.3);
	align-items: center;
	justify-content: center;
	display: flex;
	flex-direction: column;
	margin: 0px 4px;
	
	
}
 
.box-1 span,
.box-2 span,
.box-3 span{
	width:40px;
	height:40px;
	border-radius:50%;
	background-color:#ac8787;
	display: flex;
	justify-content: center;
	align-items:center;
	font-family: calibri;
	font-weight: bold;
}
.box-1 p:nth-child(2),
.box-2 p:nth-child(2),
.box-3 p:nth-child(2){
	color:#FFFFFF;
	font-family: calibri;
	font-size: 23px;
	line-height:0px;
}
.box-1 p:nth-child(3),
.box-2 p:nth-child(3),
.box-3 p:nth-child(3){
	font-family: calibri;
	color:#8F8F8F;
	text-align:center;
	width: 230px;
	margin:0px 0px 20px 0px;
}
 
@media(max-width:1000px){

  .services{
		padding: 2% 5% 0px 5%;
    height:auto;
	}
  .box-1,.box-2,.box-3{
		flex-grow: 1;
		margin: 10px;
	}
}


.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}


.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  
}
}
.bg{
  background-color: #331c06;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 800 400'%3E%3Cdefs%3E%3CradialGradient id='a' cx='396' cy='281' r='514' gradientUnits='userSpaceOnUse'%3E%3Cstop offset='0' stop-color='%23D18'/%3E%3Cstop offset='1' stop-color='%23331c06'/%3E%3C/radialGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='400' y1='148' x2='400' y2='333'%3E%3Cstop offset='0' stop-color='%23FA3' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23FA3' stop-opacity='0.5'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect fill='url(%23a)' width='800' height='400'/%3E%3Cg fill-opacity='0.5'%3E%3Ccircle fill='url(%23b)' cx='267.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='532.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='400' cy='30' r='300'/%3E%3C/g%3E%3C/svg%3E");
background-attachment: fixed;
background-size: cover;

}

</style>
</head>
<body class="bg" >
  <div class="topnav" style= "background-color: black ;">
<a class="active" href="#home" style="font-family: 'New Tegomin', serif; font-size: 20px;"> <i class="fa fa-fw fa-home"></i> <b>Home</b></a>
<a href="about1.php" style="font-family: 'New Tegomin', serif; font-size: 20px;"><i class=" fa fa-fw fa-info"></i><b> About</b></a>
<a href="help.php"style="font-family: 'New Tegomin', serif; font-size: 20px;"><i class="fa fa-fw fa-envelope"></i><b> Contact</b></a>
<a href="dukanlogin.php" style="font-family: 'New Tegomin', serif; font-size: 20px;"><i class="fa fa-fw fa-user"></i><b> Shopkeeper </b></a>
<a href="adminlogin.php" style="font-family: 'New Tegomin', serif; font-size: 20px;"><i class="fa fa-fw fa-user"></i><b> Admin</b> </a>


<a style="font-family: 'New Tegomin', serif; font-size: 20px;" id="LGlink" href="REGISTRATION.php"><i class="fa fa-arrow-left"></i> <b><span id="LG"> x </span></b> </a>

<?php 

      
      if($_SESSION['email']==""){
          echo "<script>document.getElementById('LG').innerHTML='LOGIN';</script>";
          echo "<script>document.getElementById('LGlink').href='REGISTRATION.php';</script>";
          
      }
     else{
        echo "<script>document.getElementById('LG').innerHTML='LOGOUT';</script>";
        
        echo "<script>document.getElementById('LGlink').href='sestest.php';</script>";
     }
     ?>
</div>




<div class="container-fluid">
  <div class = "row">
       <div class = " col-md- 5"  style="padding-left: 80px;"> 
       <h3 style="color: #fff; font-family: 'New Tegomin', serif; font-size: 30px; font-weight: bold;"><b>Welcome </b><span style="font-size:50px;">2</span></h3>
		    <h4 style="color: #fff;font-family: 'New Tegomin', serif;"><b>E-DUKAAN</b></h4>
			<p style="color: #fff; font-family: 'New Tegomin', serif; font-size: 30px; font-weight: bold; color: orange;"><b>24*7</b><br><b>Online Retail shop</b></p> 
       <form action="search.php" method="POST"> 
       <input type="text" placeholder="Enter City.." name="searchcity"><br><br>
       <input type="text" placeholder="Enter area/locality.." name="searcharea"><br><br>

       <input type="text" placeholder="Enter Pin Code.." name="searchpin"><br><br>
       <button type="submit" style= "font-family: 'New Tegomin', serif;  font-weight: bold;"><i class="fa fa-search"></i> SEARCH</button>
       </form> 
     
       </div>
       <div class = "col-md-7">
                <div class="slideshow-container">
                   <div class="mySlides fade">
                      <div class="numbertext">1 / 2</div>
                      <img src="d1.jpg" style="width: 150%; height: 400px; padding-top:30px;"><br><BR>
                      <div class="text"> <h3><b>BORING ROAD </b></h3>
                           <p ><b>STOP SELLING: START HELPING!</b></p>
                      </div>
                    </div>
                
                    <div class="mySlides fade">
                      <div class="numbertext">2 / 2</div>
                      <img src="d2.jpg" style="width: 160%; height:400; padding-top:30px;"><br>
                      <div class="text"><h3><b>DANAPUR</b></h3>
			                     <p ><b>YOUR NEED: OUR PRIORITY!</b></p></div>
                      </div>
                    </div>
                    <div style="text-align:center">
                           <span class="dot"></span> 
                           <span class="dot"></span> 
                            <span class="dot"></span> 
                           <span class="dot"></span> 

                    </div>
                </div>
          </div>
    </div>
  </div>             

    <script>
    var slideIndex = 0;
    showSlides();
    
    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
    </script>
 
  
   
<!--services-container---------------------------->
<div class="services " style="color: #1d1c1c;">
  <!--text-->
  <div class="services-text ">
<b><p style="font-family: 'New Tegomin', serif; font-size: 30px; font-weight: bold;">TOP PRORITIES</p></b>
<p style="font-family: 'New Tegomin', serif; font-size: 20px; font-weight: bold;">for online shoppers</p>
<p style = "font-family: 'New Tegomin', serif;  font-weight: bold;"> According to new consumer survey from commerce automation platform linnworks,"The Effortless Economy:A New Age of Retail,"76% of respondent cite convnice as a top priority when it come to Online Shopping.</p>
    </div>
  <div class="box-container">
  <!--1------------->
    <div class="box-1"   style= "background-image: url('g1.jpg');">
    <span><i class="fa fa-fw fa-user"></i></span>
    <p class="heading" style="color: #1d1c1c; margin-top: 10px;">LATE PAY</p>
    <p class="details">  Digital Under Khata for bussniess</p>
    </div>
   <!--2------------->
    <div class="box-2" style= "background-image: url('g1.jpg');">
    <span><i class="fa fa-fw fa-truck"></i></span>
    <p class="heading" style="color: #1d1c1c; margin-top: 10px;">Free Online Delivery</p>
    <p class="details">Booking Over Rs100  </p>
    </div>
  <!--3------------->
    <div class="box-3" style= "background-image: url('g1.jpg');">
    <span>  <i class="fa fa-fw fa-truck"></i></span>
    <p class="heading" style="color: #1d1c1c; margin-top: 10px;">Exchange & Return</p>
    <p class="details">OUR POLICY </div>
  </div>

  
</div>




    <div class ="container-fluid" style="margin:30px; height: 600px;">
        <center><h4 style="color:#000000; font-family: 'New Tegomin', serif; font-size: 40px;"><b><u>Popular Shop</u></b></h4></center>
        <hr>
      <div class = "row" style="margin-right: 20px;">

           <div class ="col-sm-3">
            <div class="shop" style="background-image: url(d1.jpg);"> img </div>
             <a href="menu1.php?id=1001"><center><h5 style ="font-family: 'New Tegomin', serif;"><b>Aditya Store</b></h5></center></a>
             </div>

           <div  class ="col-sm-3"> 
          <div class="shop" style="background-image: url(d2.jpg);"> </div>
          <a href="menu1.php?id=1002" style ="font-family: 'New Tegomin', serif;"><center><h5><b>City Store</b> </h5></center></a>
          </div>

          <div class = "col-sm-3" style="height: 150px;"> 
               <div class="shop" style="background-image: url(d3.jpg);"></div>
               <a href="menu1.php?id=1003" style ="font-family: 'New Tegomin', serif;"><center><h5><b>Big Basket</b></h5></center></a>
          </div>

          <div class = "col-sm-3" style="height: 150px;"> 
            <div class="shop" style="background-image: url(d3.jpg);"></div>
            <a href="menu1.php?id=1004" style ="font-family: 'New Tegomin', serif;"><center><h5><b>Moscow</b></h5></center></a>
       </div>

          </div>
         <br>
         <br>
         <br>
        <div class = "row" style="margin-right: 20px;">
          <div class ="col-sm-3" style="height: 150px;">
            <div class="shop" style="background-image: url(d1.jpg);"> img </div>
             <a href="order.html" style ="font-family: 'New Tegomin', serif;"><center><h5><b>The Full Mart</b></h5></center></a>
             </div>

           <div  class ="col-sm-3"> 
          <div class="shop" style="background-image: url(d2.jpg);"> </div>
          <a href="order.html"style ="font-family: 'New Tegomin', serif; font-weight: bold;"><center><h5><b>The Full Mart </b></h5></center></a>
          </div>

          <div class = "col-sm-3" style="height: 150px;"> 
               <div class="shop" style="background-image: url(d3.jpg);"></div>
               <a href="order.html" style ="font-family: 'New Tegomin', serif;"><center><h5><b>The Full Mart</b></h5></center></a>
          </div>

          <div class = "col-sm-3" style="height: 150px;"> 
            <div class="shop" style="background-image: url(d3.jpg);"></div>
            <a href="order.html" style ="font-family: 'New Tegomin', serif; "><center><h5><b>The Full Mart</b></h5></center></a>
       </div>

       
       
        </div>   
   </div>


  <!--footer--------------->
 <footer>
	 <!--heading-->
  <p style="color: white; font-size: 15px; font-family: 'New Tegomin', serif;"><b>E-Dukaan</b></p>
	 <!--paragraph-->
	 <p style ="font-family: 'New Tegomin', serif;"><b>I make as soon as possible. You really like my work,if you don't, i change this until you like. I give you satisfactionfull result!!</b></p>
	 <!--social-->
	<div class="social-icons">
	<a href="https://www.facebook.com/campaign/landing.php?&campaign_id=973072070&extra_1=s%7Cc%7C231368087473%7Ce%7Cfacbook%20login%7C&placement=&creative=231368087473&keyword=facbook%20login&partner_id=googlesem&extra_2=campaignid%3D973072070%26adgroupid%3D54006257731%26matchtype%3De%26network%3Dg%26source%3Dnotmobile%26search_or_content%3Ds%26device%3Dc%26devicemodel%3D%26adposition%3D%26target%3D%26targetid%3Dkwd-302772061379%26loc_physical_ms%3D9300452%26loc_interest_ms%3D%26feeditemid%3D%26param1%3D%26param2%3D&gclid=EAIaIQobChMIkIb1qdrt7wIVmzArCh2HWAUNEAAYASAAEgJxtfD_BwE"><i class="fa fa-fw fa-facebook-f"></i></a>
	<a href="https://twitter.com/LOGIN"><i class="fa fa-fw fa-twitter"></i></a>
	<a href="https://www.instagram.com/accounts/login/"><i class="fa fa-fw fa-instagram"></i></a>
	<a href="https://www.youtube.com/"><i class="fa fa-fw fa-youtube"></i></a>
	</div>

</footer>
	<!--social-attach-bar-->
	
</body> 
</html>           






<!-- REGISTRATION.php-->
<?php
  $user_id=$_POST['user_id'];
  
  $password=$_POST['password'];
  
  $email=$_POST['email'];
  
  $phn_no=$_POST['phn_no'];
  
  $aadhar_no=$_POST['aadhar_no'];
  
  
  $conn=mysqli_connect("localhost","root","","retaildatabase");
  if(!$conn)
    {
        echo "not connected";

    }
    else echo "success";

    $sql="INSERT INTO `registertable`(`user_id`, `password`, `email`, `phn_no`, `aadhar_no`) VALUES  ('$user_id','$password','$email',$phn_no,'$aadhar_no')";
    $result=mysqli_query($conn,$sql);
    if($result==1){
        echo "<br> data saved";
    }
    ?> 

    <?php
  
    $email=$_POST['email'];
    echo $email."<br>";
    $name=$_POST['name'];
    echo $name."<br>";
    $query=$_POST['query'];
    echo $query."<br>";
    
    $conn=mysqli_connect("localhost","root","","retaildatabase");
    if(!$conn)
      {
          echo "not connected";
  
      }
      else echo "success";
  
      $sql="INSERT INTO `contact`(`email`, `Name`, `Query`) VALUES ('$email','$name','$query')";
      $result=mysqli_query($conn,$sql);
      if($result==1){
          echo "<br> data saved";
      }
      //  
?>



