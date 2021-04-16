<?php

session_start();
?>

<html>
 <head>
   <title>PET SUPPLIES 2</title>
   <link rel="stylesheet" href="Styles/stylepetsupplies.css"></link>
   
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
   <script src="https://kit.fontawesome.com/c0522e9f6e.js" crossorigin="anonymous"></script>
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:wght@500&display=swap" rel="stylesheet">
  </head>
  <body>
  
     <section id="banner">
        <a href="index.php"><img src="images/logo11.jpeg" class="logo"></a>
		<nav>
		<?php
     $count=0;
     if(isset($_SESSION['cart']))
	 {
	   $count=count($_SESSION['cart']);
	 }
   ?>
	</nav>	
     </section>
	 
	  <div>
	<a  class="absolute" href="petsuppliescart.php"><img src="images/cart.png">(<?php echo $count; ?>) </a>	
	</div>
	 <!-----header end---->
	 
	 <div class="container">
	 <h1 id="our">Our Products</h1>
	  <p id="ourr">Choose a meal card for your furry friend :)</p>
	 
	 <div id="info">
	 
	 <!---item 1--->
	 <form action="manage_petcart.php" method="post">
	   <div class="img">
		<img src="images/supply14.png">
		
		<div class="img-desc">
		   <h4><b>Name: </b>PRO Pedigree Adult Dry Dog Food, Chicken & Vegetables, 3kg Pack</h4>
	       <p><b>Price: </b>₹ 360.00 (₹ 119.80 / 100 g)<br>
Inclusive of all taxes</p>
	       <button type="submit">Add To Cart</button>
<input type="hidden" name="Item_Name" value="PRO Pedigree Adult Dry Dog Food, Chicken & Vegetables, 3kg Pack">
<input type="hidden" name="Price" value="360">		   
	   </div>
	   </div>
	   </form>
	   
	   <!----item 2--->
	   <form action="manage_petcart.php" method="post">
	   <div class="img">
		<img src="images/supply13.png">
		<br><br><br><br><br>
		<div class="img-desc">
		   <h4><b>Name: </b>Pedigree Dentastix Small Breed (5-10 kg) Oral Care Dog Treat, 440g Monthly Pack (28 Chew Sticks)</h4>
	       <p><b>Price: </b>₹ 400.00 (₹ 95.80 / 100 g)<br>
Inclusive of all taxes</p>
	     <button name="Add_To_Cart" type="submit">Add To Cart</button>
<input type="hidden" name="Item_Name" value="Pedigree Dentastix Small Breed (5-10 kg) Oral Care Dog Treat, 440g Monthly Pack (28 Chew Sticks)">
<input type="hidden" name="Price" value="400">		   
	   </div>
	   </div>
	 </form> 

<!----item 3--->
<form action="manage_petcart.php" method="post">
	   <div class="img">
		<img src="images/supply6.png">
		<br><br><br><br><br>
		<div class="img-desc">
		   <h4><b>Name: </b>ZEST Supercoat Adult Dry Dog Food  - 2kg</h4>
	       <p><b>Price: </b>₹ 229.00 (₹ 104.80 / 1 kg)<br>
Inclusive of all taxes</p>
	       <button name="Add_To_Cart" type="submit">Add To Cart</button>
<input type="hidden" name="Item_Name" value="ZEST Supercoat Adult Dry Dog Food  - 2kg">
<input type="hidden" name="Price" value="229">	   
	   </div>
	   </div>
</form>

<!----item 4--->
<form action="manage_petcart.php" method="post">
	   <div class="img">
		<img src="images/supply113.png">
		<div class="img-desc">
		   <h4><b>Name: </b>Chappi Adult Dry Dog Food, Chicken & Rice, 3kg Pack</h4>
	       <p><b>Price: </b>₹ 329.00 (₹ 109.80 / 1 kg)<br>
Inclusive of all taxes</p>
	       <button name="Add_To_Cart" type="submit">Add To Cart</button>
<input type="hidden" name="Item_Name" value="Chappi Adult Dry Dog Food, Chicken & Rice, 3kg Pack">
<input type="hidden" name="Price" value="329">   
	   </div>
	   </div>
</form>

<!----item 5--->
<form action="manage_petcart.php" method="post">
	   <div class="img">
		<img src="images/supply7.png">
		<br><br><br>
		<div class="img-desc">
		   <h4><b>Name: </b>Purepet Adult Smoked Chicken, 1.1 kg (Buy 1 Get 1 Free)</h4>
	       <p><b>Price: </b>₹ 229.00 (₹ 45.80 / 500 g)<br>
Inclusive of all taxes</p>
	       <button name="Add_To_Cart" type="submit">Add To Cart</button>
<input type="hidden" name="Item_Name" value="Purepet Adult Smoked Chicken, 1.1 kg (Buy 1 Get 1 Free)">
<input type="hidden" name="Price" value="229">	
	   </div>
	   </div>
</form>

<!----item 6--->
<form action="manage_petcart.php" method="post">
	   <div class="img">
		<img src="images/supply8.png">
		<br><br>
		<div class="img-desc">
		   <h4><b>Name: </b>Royal Canin Maxi Starter, 4 kg</h4>
	       <p><b>Price: </b>₹ 440.00 (₹ 109.90 / 1 kg)<br>
Inclusive of all taxes</p>
	       <button name="Add_To_Cart" type="submit">Add To Cart</button>
<input type="hidden" name="Item_Name" value="Royal Canin Maxi Starter, 4 kg">
<input type="hidden" name="Price" value="440">		   
	   </div>
	   </div>
</form>


<!----item 7--->
<form action="manage_petcart.php" method="post">
	   <div class="img">
		<img src="images/supply9.png">
		<div class="img-desc">
		   <h4><b>Name: </b>Heads Up for Tails Sara's Doggie Treats, Huft Treats Chicken Jerky - 70 g</h4>
	       <p><b>Price: </b>₹ 555.00 (₹ 45.80 / 100 g)<br>
Inclusive of all taxes</p>
	       <button name="Add_To_Cart" type="submit">Add To Cart</button>
<input type="hidden" name="Item_Name" value="Heads Up for Tails Sara's Doggie Treats, Huft Treats Chicken Jerky - 70 g">
<input type="hidden" name="Price" value="555">		   
	   </div>
	   </div>
	</form>   
	   
<!----item 8--->
<form action="manage_petcart.php" method="post">
	   <div class="img">
		<img src="images/supply10.png">
		<br><br><br><br><br><br><br>
		<div class="img-desc">
		   <h4><b>Name:  </b>Purepet Chicken and Vegetables Adult Dog Food, 9 kg</h4>
	       <p><b>Price: </b>₹ 1,029.00 (₹ 145.80 / 1 kg)<br>
Inclusive of all taxes</p>
	       <button name="Add_To_Cart" type="submit">Add To Cart</button>
<input type="hidden" name="Item_Name" value="Purepet Chicken and Vegetables Adult Dog Food, 9 kg">
<input type="hidden" name="Price" value="1029">		   
	   </div>
	   </div>
	</form>
	
	   <!----item 9--->
	   <form action="manage_petcart.php" method="post">
	   <div class="img">
		<img src="images/supply11.png">
		<br><br><br><br>
		<div class="img-desc">
		   <h4><b>Name: </b>PAWSTIVELY PET CARE Himalaya Healthy Treats</h4>
	       <p><b>Price: </b>₹ 229.00 (₹ 45.80 / 100 g)<br>
Inclusive of all taxes</p>
	       <button name="Add_To_Cart" type="submit">Add To Cart</button>
<input type="hidden" name="Item_Name" value="PAWSTIVELY PET CARE Himalaya Healthy Treats">
<input type="hidden" name="Price" value="229">		   
	   </div>
	   </div>
	</form>
	
	   <!----item 10--->
	   <form action="manage_petcart.php" method="post">
	   <div class="img">
		<img src="images/supply1.png">
		<div class="img-desc">
		   <h4><b>Name: </b>Pedigree Adult Dry Dog Food, Chicken & Vegetables, 11Kg Pack</h4>
	       <p><b>Price: </b>₹ 929.00 (₹ 85.88 / 1 kg)<br>
Inclusive of all taxes</p>
	      <button name="Add_To_Cart" type="submit">Add To Cart</button>
<input type="hidden" name="Item_Name" value="Pedigree Adult Dry Dog Food, Chicken & Vegetables, 11Kg Pack">
<input type="hidden" name="Price" value="929">		   
	   </div>
	   </div>
	</form>
	
	   <!----item 11--->
	   <form action="manage_petcart.php" method="post">
	   <div class="img">
		<img src="images/supply2.png">
		<div class="img-desc">
		   <h4><b>Name: </b>Purina Supercoat Adult Dry Dog Food - 2kg Pack(Buy 2 Get 1 Free)</h4>
	       <p><b>Price: </b>₹ 279.00 (₹ 45.80 / 1 kg)<br>
Inclusive of all taxes</p>
	       <button name="Add_To_Cart" type="submit">Add To Cart</button>
<input type="hidden" name="Item_Name" value="Purina Supercoat Adult Dry Dog Food - 2kg Pack">
<input type="hidden" name="Price" value="279">		   
	   </div>
	   </div>
	</form>
	
	   <!----item 12--->
	   <form action="manage_petcart.php" method="post">
	   <div class="img">
		<img src="images/supply3.png">
		<br><br>
		<div class="img-desc">and
		   <h4><b>Name: </b>Drools Chicken  Egg Adult Dog Food, 3 kg with Free 1.2 kg</h4>
	       <p><b>Price: </b>₹ 689.00 (₹ 225.30 / 1 kg)<br>
Inclusive of all taxes</p>
	      <button name="Add_To_Cart" type="submit">Add To Cart</button>
<input type="hidden" name="Item_Name" value="Drools Chicken Egg Adult Dog Food, 3 kg with Free 1.2 kg">
<input type="hidden" name="Price" value="689">	 
	   </div>
	   </div>	   
	</form>   
	   
	   </div>
	 
  <br><br><br>
  <div class="page-btn">
	     <a href="petsupplies.php"><span>1</span>
		 <a href="petsupplies1.php"><span>2</span>
		 <a href="petsupplies.php"><span>3</span>
		 <a href="petsupplies1.php"><span><i class="fa fa-arrow-right"></i></span></a>
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
 