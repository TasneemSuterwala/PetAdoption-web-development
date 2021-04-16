<html>
 <head>
   <title>Pet Adoption Website</title>
   <link rel="stylesheet" href="Styles/style.css" media="all"></link>
   
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
   <script src="https://kit.fontawesome.com/c0522e9f6e.js" crossorigin="anonymous"></script>
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:wght@500&display=swap" 
  rel="stylesheet">
  </head>
  
  <!----main body section--->
  <body background="images/back1.jpg">
     <section id="banner">
        <!---<a href="index.php"><img src="images/logo11.jpeg" class="logo" ></a>--->
		<div class="bannertext">
		    <h1><a href="home.php">Skylar's Pet Adoption</a></h1>
			<p>Connect.Adopt.Love</p>
		   <div class="bannerbtn">
		   <a href="allpets.php"><span></span>Find Out</a>
		   <a href="aboutus.php"><span></span>Read More</a>
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

<!---<div class="bubbles">
   <img src="images/bubble.png">
   <img src="images/bubble.png">
   <img src="images/bubble.png">
   <img src="images/bubble.png">
   <img src="images/bubble.png">
   <img src="images/bubble.png">
   <img src="images/bubble.png">
</div>--->

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
 


