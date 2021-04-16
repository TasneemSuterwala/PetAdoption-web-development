<?php

session_start();
?>

<html>
 <head>
   <title>PET SUPPLIES ORDER DETAILS-SKYLAR</title>
   <link rel="stylesheet" href="Styles/styleorder.css" media="all"></link>
   
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
   <script src="https://kit.fontawesome.com/c0522e9f6e.js" crossorigin="anonymous"></script>
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:wght@500&display=swap" 
  rel="stylesheet">
  </head>
  <body>
     <section id="banner">
        <a href="index.php"><img src="images/logo11.jpeg" class="logo"></a>
		
     </section>
	 
	
	 <center>
	 <br><br><br>
	<div class="container">
	<div class="row">
	<div class="col-2">
	 <h1 style="color: #003366;">Order Details</h1>
	 </div>
	 
	 <div class="">
	 
	 <table class="">
	 <thead class="text-center">
	 <tr>
	  <th>Serial No.</th>
	  <th style="padding-left: 305px;">Item Name</th>
	  <th>Item Price</th>
	  
	  </tr>
	  </thead>
	  
	  <tbody class="text-center">
	  <?php
	  $total=0;
	  $count=0;
	  
	  if(isset($_SESSION['cart']))
	  {
	  foreach($_SESSION['cart'] as $key => $value)
	  {
	  $total=$total+$value['Price'];
  $count=$count+1;
  $random=(rand(10,1000));
	  echo"
	  <tr>
	     <td>$count</td>
		 <td>$value[Item_Name]</td>
	     <td>₹ $value[Price].00</td>
	  
	 </tr>
	 ";
	  
	  }
	  }
	  
	  
	  ?>
	  
	  </tbody>
	  
	  
	  </table>
	 
	 
	 <div class="total-price">
      <table>
	    <tr>
		  <td>Subtotal</td>
		  <td>₹ <?php echo $total ?></td>
		</tr>
		<tr>
		  <td>Tax</td>
		  <td>₹ 35.00</td>
		</tr>
		<tr>
		  <td>Total=</td>
		  <?php $totalfinal=$total+35 ?>
		  <td><h3>₹ <?php echo $totalfinal ?>/-</h3></td>
		</tr>
     
	 
	 </table>
	 </div>
	 
	 <form action="paymentfinal.php" method="post">
	  <font size="24px"><BUTTON name="submit" style="width: 235px; color: #FFF; height: 73px;
								font-size: 24px; padding: 15px 0; background: #007500; float: right;
								border-radius: 20px; outline: none; margin-top: 30px; border: 2px solid #405A6B;
								cursor: pointer;">PROCEED&nbsp<i class="fas fa-angle-double-right"></i></BUTTON></font>
	 </form>
	 
	 </div>
	 </div>
</div>
</center>

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
 