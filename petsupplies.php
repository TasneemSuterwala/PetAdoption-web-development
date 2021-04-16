<?php

session_start();
?>

<html>
 <head>
   <title>PET SUPPLIES-1</title>
   <link rel="stylesheet" href="Styles/stylepetsupplies.css?v=<?php echo time(); ?>" media="all"></link>
   
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
	<a  class="absolute" href="petsuppliescart.php" style="margin-right: 15px; margin-top: 13px;"><img src="images/cart.png">(<?php echo $count; ?>) </a>	
	</div>
	
	 <!-----header end---->
	 
	 
	 <!---main section--->
	
<h1 id="our">Our Products</h1>
	 <p id="ourr">Choose a meal card for your furry friend :)</p>
	 
	 <div id="info">
	 
	 <!---item 1--->
	 <form action="manage_petcart.php" method="post">
	   <div class="img">
		<img src="images/supply12.png">
		<br><br><br>
		<div class="img-desc">
		   <h4><b>Name: </b>Choostix Twirls Dog Treat, 200 g</h4>
	       <p><b>Price: </b>₹ 229.00 (₹ 149.50 / 100 g)<br>
Inclusive of all taxes</p>
	       <button name="Add_To_Cart" type="submit">Add To Cart</button>
<input type="hidden" name="Item_Name" value="Choostix Twirls Dog Treat, 200 g">
<input type="hidden" name="Price" value="229">		   
	   </div>
	   </div>
	  </form>
	  
	   <!----item 2--->
	  
	  <form action="manage_petcart.php" method="post">
	   <div class="img">
		<img src="images/supply13.png">
		<br><br>
		<div class="img-desc">
		   <h4><b>Name: </b>Pedigree PRO Expert Nutrition Large Breed Puppy (3-18 Months), Dry Dog Food, 3kg Pack</h4>
	       <p><b>Price: </b>₹ 360.00 (₹ 120.00 / 1 kg)<br>
Inclusive of all taxes</p>
	       <button name="Add_To_Cart" type="submit">Add To Cart</button>
<input type="hidden" name="Item_Name" value="Pedigree PRO Expert Nutrition Large Breed Puppy">
<input type="hidden" name="Price" value="360">		   
	   </div>
	   </div>
	</form>

<!----item 3--->
<form action="manage_petcart.php" method="post">
	   <div class="img">
		<img src="images/supply6.png">
		<div class="img-desc">
		   <h4><b>Name: </b>Heads Up For Tails Gluten and Grain-free Happi Doggy
			Dog Treats Dental Chew Zest (Apple, 150 g)</h4>
	       <p><b>Price: </b>₹ 229.00 (₹ 45.80 / 50 g)<br>
Inclusive of all taxes</p>
	     <button name="Add_To_Cart" type="submit">Add To Cart</button>
<input type="hidden" name="Item_Name" value="Heads Up For Tails Gluten and Grain-free Happi Doggy
			Dog Treats Dental Chew Zest (Apple, 150 g)">
<input type="hidden" name="Price" value="229">	  
	   </div>
	   </div>
</form>

<!----item 4--->
<form action="manage_petcart.php" method="post">
	   <div class="img">
		<img src="images/supply1.png">
		<div class="img-desc">
		   <h4><b>Name: </b>Pedigree Adult Dry Dog Food, Chicken & Vegetables, 11Kg Pack</h4>
	       <p><b>Price: </b>₹ 729.00 (₹ 85.80 / 1 kg)<br>
Inclusive of all taxes</p>
	 <button name="Add_To_Cart" type="submit">Add To Cart</button>
<input type="hidden" name="Item_Name" value="Pedigree Adult Dry Dog Food, Chicken & Vegetables, 11Kg Pack">
<input type="hidden" name="Price" value="729">		   
	   </div>
	   </div>
</form>

<!----item 5--->
<form action="manage_petcart.php" method="post">
	   <div class="img">
		<img src="images/supply2.png">
		<div class="img-desc">
		   <h4><b>Name: </b>Kennel Kitchen Adult & Puppy Dog Food, Chicken and Lamb Chunks in Gravy, 12 Pouches (12 x 70g Each)</h4>
	       <p><b>Price: </b>₹ 209.00 (₹ 35.20 / 100 g)<br>
Inclusive of all taxes</p>
	    <button name="Add_To_Cart" type="submit">Add To Cart</button>
<input type="hidden" name="Item_Name" value="Kennel Kitchen Adult & Puppy Dog Food, Chicken and Lamb Chunks in Gravy, 12 Pouches (12 x 70g Each)">
<input type="hidden" name="Price" value="209">		   
	   </div>
	   </div>
</form>


<!----item 6--->
<form action="manage_petcart.php" method="post">
	   <div class="img">
		<img src="images/supply3.png">
		<br><br><br>
		<div class="img-desc">
		   <h4><b>Name: </b>Drools Chicken and Egg Adult Dog Food, 3 kg with Free 1.2 kg</h4>
	       <p><b>Price: </b>₹ 129.00 (₹ 15.05 / 100 g)<br>
Inclusive of all taxes</p>
	       <button name="Add_To_Cart" type="submit">Add To Cart</button>
<input type="hidden" name="Item_Name" value="Drools Chicken and Egg Adult Dog Food, 3 kg with Free 1.2 kg">
<input type="hidden" name="Price" value="129">		   
	   </div>
	   </div>
</form>


<!----item 7--->
<form action="manage_petcart.php" method="post">
	   <div class="img">
		<img src="images/supply5.png">
		<br><br>
		<div class="img-desc">
		   <h4><b>Name: </b>Royal Canin Mini Puppy Dry Dog Food 800 g</h4>
	       <p><b>Price: </b>₹ 349.00 (₹ 25.80 / 100 g)<br>
Inclusive of all taxes</p>
	       <button name="Add_To_Cart" type="submit">Add To Cart</button>
<input type="hidden" name="Item_Name" value="Royal Canin Mini Puppy Dry Dog Food 800 g">
<input type="hidden" name="Price" value="349">	   
	   </div>
	   </div>
	  </form> 
	   
<!----item 8--->
<form action="manage_petcart.php" method="post">
	   <div class="img">
		<img src="images/supply14.png">
		<div class="img-desc">
		   <h4><b>Name: </b>PRO Pedigree Adult Dry Dog Food, Chicken & Vegetables, 3kg Pack</h4>
	       <p><b>Price: </b>₹ 542.00 (₹ 18.07 / 100 g)<br>Inclusive of all taxes</p>
	      <button name="Add_To_Cart" type="submit">Add To Cart</button>
<input type="hidden" name="Item_Name" value="PRO Pedigree Adult Dry Dog Food, Chicken & Vegetables, 3kg Pack">
<input type="hidden" name="Price" value="542">	   
	   </div>
	   </div>
	 </form>
	 
	   <!----item 9--->
	   <form action="manage_petcart.php" method="post">
	   <div class="img">
		<img src="images/supply16.png">
		<br><br><br><br><br><br><br><br><br><br>
		<div class="img-desc">
		   <h4><b>Name: </b>Pedigree Puppy Wet Dog Food, Chicken Chunks in Gravy, 70 g (Pack of 15)</h4>
	       <p><b>Price: </b>₹ 200.00 (₹ 67.10/ 100 g)<br>
Inclusive of all taxes</p>
	       <button name="Add_To_Cart" type="submit">Add To Cart</button>
<input type="hidden" name="Item_Name" value="Pedigree Puppy Wet Dog Food, Chicken Chunks in Gravy, 70 g (Pack of 15)">
<input type="hidden" name="Price" value="200">		   
	   </div>
	   </div>
	 </form>
	 
	   <!----item 10--->
	   <form action="manage_petcart.php" method="post">
	   <div class="img">
		<img src="images/supply1.png">
		<div class="img-desc">
		   <h4><b>Name:  </b>Pedigree Adult Dry Dog Food, Chicken & Vegetables, 3kg Pack</h4>
	       <p><b>Price: </b>₹ 349.00 (₹ 49.80 / 100 g)<br>
Inclusive of all taxes</p>
	     <button name="Add_To_Cart" type="submit">Add To Cart</button>
<input type="hidden" name="Item_Name" value="Pedigree Adult Dry Dog Food, Chicken & Vegetables, 3kg Pack">
<input type="hidden" name="Price" value="349">		   
	   </div>
	   </div>
	  </form>
	  
	   <!----item 11--->
	   <form action="manage_petcart.php" method="post">
	   <div class="img">
		<img src="images/supply2.png">
		<div class="img-desc">
		   <h4><b>Name:  </b>Kennel Kitchen Adult & Puppy Dog Food, Chicken and Lamb Chunks in Gravy, 12 Pouches (12 x 70g Each)</h4>
	       <p><b>Price: </b>₹ 550.00 (₹ 75 / 100 g)<br>
Inclusive of all taxes</p>
	       <button name="Add_To_Cart" type="submit">Add To Cart</button>
<input type="hidden" name="Item_Name" value="Kennel Kitchen Adult & Puppy Dog Food, Chicken and Lamb Chunks in Gravy, 12 Pouches (12 x 70g Each)">
<input type="hidden" name="Price" value="550">		   
	   </div>
	   </div>
	   </form>
	   
	   <!----item 12--->
	   <form action="manage_petcart.php" method="post">
	   <div class="img">
		<img src="images/supply111.png">
		<br><br><br><br>
		<div class="img-desc">
		   <h4><b>Name:  </b>Meat Up Chicken Flavour , Real Chicken Biscuit, Dog Treats -500g Jar ( Buy 1 Get 1 Free)</h4>
	       <p><b>Price: </b>₹ 229.00 (₹ 45.80 / 100 g)<br>
Inclusive of all taxes</p>
	       <button name="Add_To_Cart" type="submit">Add To Cart</button>
<input type="hidden" name="Item_Name" value="Meat Up Chicken Flavour , Real Chicken Biscuit, Dog Treats -500g Jar">
<input type="hidden" name="Price" value="229">		   
	   </div>
	   </div>	   
	   </form>
	   
	   <!---item13--->
	   <form action="manage_petcart.php" method="post">
	   <div class="img">
		<img src="images/pet1.png">
		<div class="img-desc">
		   <h4><b>Name:  </b>HASTHIP Adjustable Bell Buckle Velvet Neck Strap for Kitten Cat 13.8inch 
		   - Red, Velvet, (Pack of 1)</h4>
	       <p><b>Price: </b>₹ 199.00 (₹ 55 / 100 g)<br>
Inclusive of all taxes</p>
	       <button name="Add_To_Cart" type="submit">Add To Cart</button>
<input type="hidden" name="Item_Name" value="HASTHIP Adjustable Bell Buckle Velvet Neck Strap for Kitten Cat 13.8inch 
		   - Red, Velvet, (Pack of 1)">
<input type="hidden" name="Price" value="199">		   
	   </div>
	   </div>
	   </form>
	   
	    <!----item 14--->
	   <form action="manage_petcart.php" method="post">
	   <div class="img">
		<img src="images/supply111.png">
		<br><br><br><br>
		<div class="img-desc">
		   <h4><b>Name:  </b>Meat Up Chicken Flavour , Real Chicken Biscuit, Dog Treats -500g Jar ( Buy 1 Get 1 Free)</h4>
	       <p><b>Price: </b>₹ 229.00 (₹ 45.80 / 100 g)<br>
Inclusive of all taxes</p>
	       <button name="Add_To_Cart" type="submit">Add To Cart</button>
<input type="hidden" name="Item_Name" value="Meat Up Chicken Flavour , Real Chicken Biscuit, Dog Treats -500g Jar">
<input type="hidden" name="Price" value="229">		   
	   </div>
	   </div>	   
	   </form>
	   
	    <!----item 15--->
	   <form action="manage_petcart.php" method="post">
	   <div class="img">
		<img src="images/supply111.png">
	<br><br><br><br>
		<div class="img-d	esc">
		   <h4><b>Name:  </b>Meat Up Chicken Flavour , Real Chicken Biscuit, Dog Treats -500g Jar ( Buy 1 Get 1 Free)</h4>
	       <p><b>Price: </b>₹ 229.00 (₹ 45.80 / 100 g)<br>
Inclusive of all taxes</p>
	       <button name="Add_To_Cart" type="submit">Add To Cart</button>
<input type="hidden" name="Item_Name" value="Meat Up Chicken Flavour , Real Chicken Biscuit, Dog Treats -500g Jar">
<input type="hidden" name="Price" value="229">		   
	   </div>
	   </div>	   
	   </form>
	   
	<!---add here extra cards--->
	   
	   
	   </div>
	 
 <br><br><br>
  <div class="page-btn">
	     <a href="petsupplies.php"><span>1</span>
		 <a href="petsupplies1.php"><span>2</span>
		 <a href="petsupplies.php"><span>3</span>
		 <a href="petsupplies1.php"><span><i class="fa fa-arrow-right"></i></span></a>
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
 