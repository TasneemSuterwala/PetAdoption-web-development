<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <title>ABOUT US -SKYLAR'S ORGANIZATION</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
   <script src="https://kit.fontawesome.com/c0522e9f6e.js" crossorigin="anonymous"></script>
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500;700&family=RocknRoll+One&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="Styles/styleabout.css" type="text/css" media="all"></link>
   </head>
  <body style="background-color: #f4e1d2";>
 <section id="banner">
        <a href="index.php"><img src="images/logo11.jpeg" class="logo"></a>
		
     </section>
	 <!-----header end---->

<!---main--->
 <section class="contact">
	<div class="content">
	<div class="about">
	<font size="50px"><h5 style="color: #391313; font-size: 50px;">ABOUT US</h5></font>
	</div>
   </div>
   
   <div class="container" style="margin-top: 37px";>
   <img src="images/blackdog.png">
   
   <div class="text">
   <h3 style="color: #130a07";>WHAT WE DO??</h3>
   <p>Skylar's Pet Adoption is a Indian non-profit pet-adoption web service that 
   advocates pet adoption, gathering information from over 1,200 pet shelters in the Mumbai
   and other cities, and presenting adoptable pet data in a searchable data base to facilitate 
   pet adoption.Skylar's pet Adoption is registered in Redondo Beach, Mumbai,Maharashtra-400 007 
   as Humane India Animal Foundation.The web site allows people to sign up & search for a pet that satisfies their criteria appears in a local shelter. 
   Skylar's Pet.com also contains information on pet care & supplies for first-time pet owners.
   The web site also lists volunteer opportunities and promotes 
   spaying and neutering of the pets.</p> 
   </div>
</div>



<div class="containerr" style="margin-top: -15px";>
   
   <div class="textt">
  <h3 style="color: #130a07";>HOW WE WORK?</h3>
 <p> Skylar's pet Adoption is registered in Redondo Beach, Mumbai,<br> Maharashtra-400 007
 as Humane India Animal Foundation. The <br>website allows people to sign up & search for a pet that satisfies their <br>criteria which appears in a local shelter. 
   Skylar's Pet Adoption also contains <br>information on pet care & supplies for first-time pet owners.</p>
   <img src="images/blackcat.png" style="margin-bottom: 47px;">
  
   
   </div>
</div>




<div class="container" style="margin-top: -15px";>
   <img src="images/blackrabbit22.png">
   
   <div class="text">
   <h3 style="color: #130a07";>NEED HELP?</h3>
   <div class="contactForm">
      <form action="helpbackend.php" method="post">
	  
	   <div class="inputBox">
<label>Username</label>
   <input type="text" name=" username" value="" placeholder="username">
   </div>   
	
	  <div class="inputBox">
  <label>Email</label> 
   <input type="text" name=" email" value="" placeholder="email">
   </div>   
	
	  <div class="inputBox">
   <label>Regarding</label>
   <input type="text" name="regarding" value="" placeholder="">
    </div>
	
	  <div class="inputBox">
   <label>Message</label>
   <input type="textarea" placeholder=" type your query here" value="" name="message">
   </div>
   <br>
   
     <div class="inputBox">
   <button type="submit" name="submit" class="btnn">Submit</button>
   </div>
   </form>
   </div>
   </div>
</div>


<div class="containerr" style="margin-top: -15px";>   
   <div class="textt">
   <h3 style="color: #130a07";>&nbsp&nbsp&nbsp&nbspCONTACT US</h3>
   
   <div class="boxx">	
   <div class="textt">
       <h4><i class="fas fa-map-marker-alt"></i>  Address</h4>   
   <p>Skylar's Pet Adoption<br>45607 Nagpada Road,<br>Opposite ZAM-ZAM Sweets<br>Mumbai,Maharashtra,IN<br>400 007</p>
   </div>
   </div>
   
   <div class="boxx"> 
   <div class="textt">
       <h4><i class="fas fa-phone"></i>  Phone</h4>   
   <p>0222-475-5060/9930751504</p>
   </div>
   </div>
   
   
   <div class="boxx">  
   <div class="textt">
       <h4><i class="fas fa-envelope"></i>  Email</h4>   
   <p>skylarspetadoption@gmail.com</p>
   </div>
   </div>

<img src="images/blackbird.png">   
   </div>
</div>



</section>
<!----side navigation menu---->
	 
<div id="sidenav">
	<nav> 
     <ul> 
	   <li><a href="home.php">HOME</a></li>
	   <li><a href="petlogin.php">LOGIN/SIGN-UP</a></li>
	   <li><a href="adopt.php">ADOPT NOW!!</a></li>
	   <li><a href="petsupplies.php">PET SUPPLIES</a></li>
	   <li><a href="petsuppliescart.php">CART</a></li>
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
 