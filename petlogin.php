
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <title>User Login & Sign-up</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
   <script src="https://kit.fontawesome.com/c0522e9f6e.js" crossorigin="anonymous"></script>
   <link rel="preconnect" href="https://fonts.gstatic.com">
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
	    <div class="col-2left">
		<h1 style="float:center;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspLOGIN</h1>
		<hr><br><br>
		    <form id="LoginForm" action="petvalidation.php" method="POST">
			
		  <div class="form-container">
		     <label>Username</label>
		    <input type="text" name="user" placeholder=" username" class="form-control" required>
		   </div>
		   <br><br>
		   <div class="form-container">
		   <label>Password</label>
		   <input type="password" name="password" placeholder=" password" class="form-control" required>
		  </div>
		  <br><br>
		  <div class="form-container">
		   <label>City</label>
		   <input type="text" name="city" placeholder=" city" class="form-control" required>
		  </div>
		  <br><br>
		  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" name="submit" class="btn">
		  Login</button>
		  <br>
		  
		  <script type="text/javascript">
		  function forgotpassword(){
			  alert("sign-Up again with a new Username");
		  }
		  </script>
			   <a href="#" onClick="forgotpassword()">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspForgot Password</a>
		</form>
	</div>
	
	
	
		<div class="col-2right">
		  <div class="form-control">
		  
			<h1 style="float:center;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSIGN-UP</h1>
			<hr><br><br>
			<form id="RegForm" action="petregistration.php" method="POST">
			<div class="form-container">
			     <label>Username</label>
			   <input type="text" name="user" placeholder=" username" class="form-control" required>
			   </div>
			   <br><br>
			   <div class="form-container">
		   <label>Email-Id</label>
			   <input type="email" name="email" placeholder=" email" class="form-control">
			   </div>
			  <br><br> 
			   <div class="form-container">
		   <label>Password</label>
			   <input type="password" name="password" placeholder=" password" class="form-control" required>
			   </div>
			   <br><br>
			   
			   <script type="text/javascript">
		  function successful(){
			  alert("You have successfully Registered. Please Login.");
		  }
		  </script>
			   
			   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button onClick="successful()" type="submit" name="submit" class="btn">Register</button>
			</form>
			</div>
			
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
 