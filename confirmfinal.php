<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <title>Skylar's Adoption Organization</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
   <script src="https://kit.fontawesome.com/c0522e9f6e.js" crossorigin="anonymous"></script>
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500;700&family=RocknRoll+One&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="Styles/styleconfirmation.css?v=<?php echo time(); ?>" media="all"></link>
 
   <style>
   <?php include "styleconfirmation.css" ?> 
</style>
   </head>
   
<body>
 <section id="banner">
        <a href="index.php"><img src="images/logo11.jpeg" class="logo"></a>
     </section>
	 
	<div class="container">
	<div class="confirmation">
		<br>
		<br>
	<center><img src="images/greentick.png" width="205px" height="207px" style="margin-top: 135px;"><center>
	</div>
	
	<font size="6px" color="#ff005c" align="center" face="Josefin Sans"><h1>THANK YOU!</h1></font>
	
	<font size="5px" color="#8f4f4f" align="center"><h3>Your Payment is Successfully Done.</h3></font>
	
	<form action="index.php" method="post">
<center><button type="submit" class="btnn" style=" height: 75px; width: 235px;
color: #FFF;
font-size: 23px;
background: #00CCFF;
border: 0;
padding-bottom: 10px;
margin-bottom: 10px;
border-radius: 20px;
outline: none;
border: 1px solid #405A6B;
cursor: pointer;"><b><h3>OKAY</h3></b</button></center>
	</form>
	
	</div>
	
  <!----side navigation menu---->
	 
<div id="sidenav">
	<nav> 
     <ul> 
	   <li><a href="home.php">HOME</a></li>
	   <li><a href="petlogin.php">LOGIN/SIGN-UP</a></li>
	   <li><a href="adopt.php">ADOPT NOW!!</a></li>
	   <li><a href="petsupplies.php">PET SUPPLIES</a></li>
	   <li><a href="cart.php">CART</a></li>
	   <li><a href="appointment.php">VETERINARIAN'S ONLINE APPOINTMENT BOOKING</a></li>
	   <li><a href="donate.php">DONATE</a></li>
	   <li><a href="aboutus.php">ABOUT US</a></li>
	   <li><a href="logout.php">LOGOUT</a></li>
    </ul>

</nav>


<div id="menubtn">
   <img src="images/menubar2.webp" id="menu">
</div>
</div>
<div class="side-bar">
<div class="social-links">
  <a href="https://www.facebook.com/login.php"><img src="images/fb.png"></a>
  <a href="https://www.instagram.com/"><img src="images/ig.webp"></a>
  <a href="https://twitter.com/account/home"><img src="images/tw.png"></a>
</div>
<div class="useful-links">
  <a href="donate.php"><img src="images/share.jpg"></a>
  <a href="aboutus.php"><img src="images/ques.jpg"></a>
</div>
</div>
<!----side navigation menu end--->



<!----js for side menu icon---->

	<script>
     var menubtn = document.getElementById("menubtn")
	 var sidenav = document.getElementById("sidenav")
     var menu = document.getElementById("menu")

    sidenav.style.right = "-250px";

    menubtn.onclick = function(){
	  if(sidenav.style.right == "-250px"){
	    sidenav.style.right = "0";
		menu.src = "images/close.png";
	  }
	  else{
	    sidenav.style.right = "-250px";
		menu.src = "images/menubar2.webp";
	  }
	}
   </script>	
  </body>
  </html>
 
