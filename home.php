<?php

session_start();
if(!isset($_SESSION['username'])){

   header('location:petlogin.php');
}
?>
<html>
 <head>
   <title>HOME</title>
   <link rel="stylesheet" href="Styles/stylehome.css" media="all"></link>
   
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
   <script src="https://kit.fontawesome.com/c0522e9f6e.js" crossorigin="anonymous"></script>
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:wght@500&display=swap" 
  rel="stylesheet">
  </head>
  <body>
     <section id="banner">
        <a href="index.php"><img src="images/logo11.jpeg" class="logo"></a>
		
     </section>
	 <!-----header end---->
	 
	 
	 <!---main section--->
	 <?php
	 $random=(rand(10,1000));
	 ?>
	 <div class="container">
	    <div class="navbar">
		    <nav>
			  
			 <div class="box">
			     <h1> Total Pets Adopted till date = <?php echo $random; ?> </h1>
				 <br>
				 
			  </div>
			 
			</nav>
		</div>
	 <div class="row">
	    <div class="col-2">
		  <br><br><br><br><br><br>
		 <h2><i class="fa fa-quote-left"></i>SOME THINGS JUST<br>FILL YOUR HEART<br>WITHOUT TRYING!.<i class="fa fa-quote-right"></i></h2>
		
		 <p>So, when are YOU meeting your next best friend!??</p>
		 <br>
		 <a href="allpets.php"><button type="button">Explore Now!</button></a>
		 </div>
		 
		 <div class="col-2">
		 <br><br><br><br><br><br><br><br><br>
		   <div class="card" class="card1">
	
			 <a href="dogs.php"><img src="images/dog1.jpg" alt="dog"></a>
			 <h3>DOGS</h3>
			 
		   </div>
		   <div class="card" class="card2">
		     
			 <a href="cats.php"><img src="images/homecat.jpg" alt="cat"></a>
			 <h3>CATS</h3>
			 
		   </div>
		   <div class="card" class="card3">
		     <br><br>
			 <a href="birds.php"><img src="images/birdhome.jpg" alt="bird"></a>
			 <h3>BIRDS</h3>
			
		   </div>
		   <div class="card" class="card4">
		     <br><br>
			 <a href="rabbits.php"><img src="images/rabbithome.jfif" alt="rabbit"></a>
			 <h3>RABBITS</h3>
			 
		   </div>
		   
		 </div>
		</div>
	 </div>
	 <!----side navigation menu---->
	 
<div id="sidenav">
	<nav> 
     <ul> 
	   <li><a href="login.php">LOGIN/SIGN-UP</a></li>
	   <li><a href="home.php">HOME</a></li>
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
 