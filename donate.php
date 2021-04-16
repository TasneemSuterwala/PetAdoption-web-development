<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <title>DONATE-Skylar's Oragnization</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
   <script src="https://kit.fontawesome.com/c0522e9f6e.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500;700&family=RocknRoll+One&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="Styles/styleforms.css" media="all"></link>
   </head>
   
<body>
 <section id="banner">
        <a href="index.php"><img src="images/logo11.jpeg" class="logo"></a>
		
     </section>
	 <!-----header end---->
	 

<div class="account-page">
    <div class="container">
	  <div class="row">
	    <div class="col">
		<h1>DONATE TO SKYLAR'S ORGANIZATION</h1>
		<hr><br>
		    <form id="DonationForm" action="petdonationbackend.php" method="POST">
		  <div class="formcontainer">
		     <label><b>Enter Your Full Name</b></label>
		    <input type="text" name="username" placeholder="username" class="form-control" required>
		   </div>
		   
		   <div class="formcontainer">
		   <label><b>Enter Your Home Address</b></label>
		   <input type="text" name="address" placeholder="address" class="form-control" required>
		  </div>
		  
		  <div class="formcontainer">
		   <label><b>Email-Id</b></label><br>
		   <input type="text" name="email" placeholder="email" class="form-control" required>
		  </div>
		  
		  <div class="formcontainer">
		   <label><b>Contact Number</b></label>
		   <input type="text" name="contact" placeholder="" class="form-control" required>
		  </div>
		  
		  <div class="formcontainer">
		   <label><b>Age</b></label><br>
		   <input type="text" name="age" placeholder="" class="form-control" required>
		  </div>
		  
		  <div class="formcontainer">
		   <label><b>Enter the Amount you wish to Donate</b></label>
		   <br><i class="fas fa-rupee-sign"></i><input type="text" name="amount" placeholder="" class="form-control" required>
		  </div>
		  
		  <button type="submit" name="submit" class="btn">Donate <i class="fas fa-angle-double-right"></i></button>
			   
		</form>
	  </div>
			
	 </div>
	</div>

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
 