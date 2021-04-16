<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <title>Skylar's Checkout Form</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
   <script src="https://kit.fontawesome.com/c0522e9f6e.js" crossorigin="anonymous"></script>
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500;700&family=RocknRoll+One&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="Styles/styleforms.css" type="text/css" media="all"></link>
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
		<h1>CHECKOUT & PAYMENT FORM</h1>
<hr><br>
		<font size="6px" color="#003366"><h4 style="padding-top: -20px; padding-bottom: -20px;">Billing Address</h4></font>
		    <form id="DonationForm" action="paymentbackend.php" method="POST">
			
			<br>
			<div class="formcontainer" style="padding-top: -20px;">
		     <font size="5px"><label><b><i class="fa fa-user" style="color: navy;"></i>&nbspFull Name</b></label></font>
		    <input type="text" name="firstname" placeholder="name" class="form-control" style="width: 85%;" required>
		   </div>
		   
		  <div class="formcontainer">
		     <font size="5px"><label><b><i class="fa fa-envelope" style="color: navy;"></i>&nbspEmail</b></label></font><br>
		    <input type="text" name="email" placeholder="email" class="form-control" required>
		   </div>
		   
		  <div class="formcontainer">
		   <font size="5px"><label><b><i class="fa fa-address-card" style="color: navy;"></i>&nbspAddress</b></label></font><br>
		   <input type="textarea" name="address" placeholder="address" class="form-control" 
		   style="width: 85%; padding: 15px 3px;" required>
		  </div>
		  
		  <div class="formcontainer">
		   <font size="5px"><label><b><i class="fa fa-institution" style="color: navy;"></i>&nbspCity</b></label></font><br>
		   <input type="text" name="city" placeholder="city" class="form-control"  style="width: 50%;" required>
		  </div>
		  
		  <div class="formcontainer">
		   <font size="5px"><label><b>Pincode</b></label></font><br>
		   <input type="text" name="pincode" placeholder="pincode" value=""  style="width: 50%;" required> 	  
		  </div>
		  
		  <div class="formcontainer">
		   <font size="5px"><label><b>State</b></label></font><br>
		   <input type="text" name="state" placeholder="state" class="form-control"  style="width: 50%;" required><br>
		  </div>
		  
		  
		  <br>
		  <div class="formcontainer">
					<font size="6px" color="#003366"><h3>Payment</h3></font><hr>
					<font size="6px" color="#000"><label for="fname"><b>Accepted Card</b></label></font>
					 <font size="25px"><div class="icon-container">
					 <b><i class="fa fa-cc-visa" style="color: navy;"></i>
					   <i class="fa fa-cc-amex" style="color: blue;"></i>
					   <i class="fa fa-cc-mastercard" style="color: red;"></i>
					   <i class="fa fa-cc-discover" style="color: orange;"></i></b>
					</div></font>
		  <br>
		  <div class="formcontainer">
		  <font size="5px"><label for="cname"><b>Name on Card</b></label></font>
				<input type="text" id="cname" name="cardnumber" placeholder="Jhn More Don" style="width: 85%;" required>
			</div>

         <div class="formcontainer">			
				<font size="5px"><label for="ccnum"><b>Card Number</b></label></font>
				<input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" style="width: 85%;" required>
			</div>
			
				<div class="formcontainer">
				<font size="5px"><label for="expmonth"><b>Exp Month</b></label></font><br>
<select name="expmonth">
		   <option value="">select month</option>
  <option value="January">January</option>
  <option value="February">February</option>
  <option value="March">March</option>
   <option value="April">April</option>
    <option value="May">May</option>
	 <option value="June">June</option>
	  <option value="July">July</option>
	   <option value="August">August</option>
	    <option value="September">September</option>
		 <option value="October">October</option>
		  <option value="November">November</option>
		 <option value="December">December</option>
</select>
				</div>
				
			<div class="formcontainer">
				   <font size="5px"><label for="expyear"><b>Exp Year</b></label></font><br>
				<input type="text" id="expyear" name="expyear"  style="width: 50%;" placeholder="2025" required>
				</div>
			
			<div class="formcontainer">
				   <font size="5px"><label for="cvv"><b>CVV</b></label></font><br>
				<input type="text" id="cvv" name="cvv"  style="width: 50%;" placeholder="205" required>
		  
		  	
			<br><br>
				
		  
		    <font size="10px"><button type="submit" name="submit" class="btn">PAY NOW! <i class="fas fa-angle-double-right"></i></button></font>
			   
		</form>
	  </div>
			
	 </div>
	</div>

</div>


<!----side navigation menu---->
	 
<div id="sidenav" style="height: 2033px;">
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
<div class="side-bar" style="height: 2033px;">
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
 