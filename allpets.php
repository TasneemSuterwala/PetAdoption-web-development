<?php

?>
<!DOCTYPE html>
<html lang="en">
    <head>
	<title>ALL PETS-Skylar's Organization</title>
        <script src="https://kit.fontawesome.com/c0522e9f6e.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:wght@500&display=swap" 
        rel="stylesheet">
        <link rel="stylesheet" href="styles/stylebasic.css" ></link>
    </head>
    <body style="color: #003366; margin-top: 25px; top: 0;">
    
        <center>
            
            <a href="index.php"><img src="images/logo11.jpeg" 
			style="margin-left: -1125px;
			height: 200px; width: 255px; height: 265px; border: 5px solid #00CCFF; box-shadow: 0 0 20px 0px rgba(0,0,0,0.1);
            cursor: pointer; top: 4%;"></a>
           
            <div class="main-container">
                <div class="navbar">
                    <nav>
                    <form action="allpets.php" method="GET">
                      <div>
                        <b><i class="fa fa-search" style= "color: #fff; margin-top: 10px; size: 25px;"></i></b> 
                      <input type="text-box" placeholder="Search for your best friend here" name="search" value="" style="height: 60px;width: 500px; margin-top: 50px; text-align: center;">
                      </div>
                      </form>
                    </nav>
                </div>
				
                <br><br><br>
                
	
 <!---container1--->	
            <div class="container">
                <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/bulldog.jfif" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspBULLDOG</h2>
                      <br><br>
                      <p>AGE: 2 MONTHS<BR> SIBLINGS: 4<br>GENDER: MALE<BR>JOIN DATE: 25th JULY,2019<BR>CITY: MUMBAI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
                
                
                <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/pome.jfif" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspPOMERANIAN</h2>
                      <br><br>
                      <p>AGE: 5 MONTHS<BR> SIBLINGS: 6<br>GENDER: MALE<BR>JOIN DATE: 5th JULY,2019<BR>CITY: KOLKATA</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
                  
              <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/pug.jfif" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspPUG</h2>
                      <br><br>
                      <p>AGE: 2 MONTHS<BR> SIBLINGS: 4<br>GENDER: MALE<BR>JOIN DATE: 14th AUGUST,2019<BR>CITY: MUMBAI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				  <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/shih.jfif" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspSHIH TZU</h2>
                      <br><br>
                      <p>AGE: 1 MONTH<BR> SIBLINGS: 3<br>GENDER: MALE<BR>JOIN DATE: 13th SEPTEMBER,2019<BR>CITY: KALYAN</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
       </div>
       
     <!---container2--->
     <div class="container">
                <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/germansheperd.jfif" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspGERMAN SHEPERD</h2>
                      <br><br>
                      <p>AGE: 5 MONTHS<BR> SIBLINGS: 0<br>GENDER: MALE<BR>JOIN DATE: 4th MARCH,2019<BR>CITY: MUMBAI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				  <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/bulldog.jfif" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspBULLDOG</h2>
                      <br><br>
                      <p>AGE: 4.5 MONTHS<BR> SIBLINGS: 4<br>GENDER: MALE<BR>JOIN DATE: 17th DECEMBER,2020<BR>CITY: MUMBAI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				  <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/goldenret.jfif" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspGOLDEN RETRIEVER</h2>
                      <br><br>
                      <p>AGE: 4 MONTHS<BR> SIBLINGS: 2<br>GENDER: MALE<BR>JOIN DATE: 29th OCTOBER,2019<BR>CITY: VARANASI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				  <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/husky.jfif" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspSIBERIAN HUSKY</h2>
                      <br><br>
                      <p>AGE: 8 MONTHS<BR> SIBLINGS: 1<br>GENDER: MALE<BR>JOIN DATE: 8th JANUARY,2020<BR>CITY: THANE</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
			</div>	  
				  
     <!---container3--->
     <div class="container">
                <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/rott.jfif" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspROTTWEILER</h2>
                      <br><br>
                      <p>AGE: 9 MONTHS<BR> SIBLINGS: 7<br>GENDER: MALE<BR>JOIN DATE: 16th MAY,2018<BR>CITY: MUMBAI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				 <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/spitz.jfif" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspINDIAN SPITZ</h2>
                      <br><br>
                      <p>AGE: 6.5 MONTHS<BR> SIBLINGS: 0<br>GENDER: MALE<BR>JOIN DATE: 15th APRIL,2016<BR>CITY: KALYAN</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				  <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/pariah.jfif" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspINDIAN PARIAH</h2>
                      <br><br>
                      <p>AGE: 4.5 MONTHS<BR> SIBLINGS: 2<br>GENDER: MALE<BR>JOIN DATE: 23rd JUNE,2020<BR>CITY: SURAT</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				  <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/rampur.jfif" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspRAMPUR GREYHOUND</h2>
                      <br><br>
                      <p>AGE: 8 MONTHS<BR> SIBLINGS: 3<br>GENDER: MALE<BR>JOIN DATE: 26th NOVEMBER,2015<BR>CITY: MUMBAI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
			</div>
			
     <!---container4--->
     <div class="container">
                <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/dach.jfif" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspDACHSHUND</h2>
                      <br><br>
                      <p>AGE: 5 MONTHS<BR> SIBLINGS: 4<br>GENDER: MALE<BR>JOIN DATE: 2nd MAY,2019<BR>CITY: THANE</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				  <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/chihua.jfif" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspCHIHUAHUA</h2>
                      <br><br>
                      <p>AGE: 1.7 MONTHS<BR> SIBLINGS: 4<br>GENDER: MALE<BR>JOIN DATE: 27th JULY,2019<BR>CITY: MUMBAI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				  <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/doberman.jfif" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspDOBERMAN</h2>
                      <br><br>
                      <p>AGE: 6.5 MONTHS<BR> SIBLINGS: 1<br>GENDER: MALE<BR>JOIN DATE: 30th SEPTEMBER,2020<BR>CITY: KALYAN</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				  <div class="card">
                  <div class="imgBx">
                       <a href=""><img src="images/beagle.jfif" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspBEAGLE</h2>
                      <br><br>
                      <p>AGE: 2 MONTHS<BR> SIBLINGS: 4<br>GENDER: MALE<BR>JOIN DATE: 19th MARCH,2019<BR>CITY: MUMBAI</p>
                      <BR>
                      <h3 style="color: #be0000;">STATUS: UNAVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #fff;
								font-size: 17px; padding: 15px 0; background: #ccccb3;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #000;" disabled>
								ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
     </div>
	 
     <!---container5--->
     <div class="container">
                <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/poodle.jfif" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspPOODLE</h2>
                      <br><br>
                      <p>AGE: 4.2 MONTHS<BR> SIBLINGS: 2<br>GENDER: MALE<BR>JOIN DATE: 9th FEBRUARY,2021<BR>CITY: PUNE</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				   <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/blackpuppy.jpg" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspBLACK BEAGLE PUPPY</h2>
                      <br><br>
                      <p>AGE: 2 MONTHS<BR> SIBLINGS: 4<br>GENDER: MALE<BR>JOIN DATE: 20th MARCH,2021<BR>CITY: MUMBAI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				   <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/dog1.jpg" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspPUPPY</h2>
                      <br><br>
                      <p>AGE: 1.5 MONTHS<BR> SIBLINGS: 5<br>GENDER: MALE<BR>JOIN DATE: 6th AUGUST,2019<BR>CITY: MUMBAI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				   <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/bulldog.jfif" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspBULLDOG</h2>
                      <br><br>
                      <p>AGE: 2 MONTHS<BR> SIBLINGS: 4<br>GENDER: MALE<BR>JOIN DATE: 25th JULY,2019<BR>CITY: MUMBAI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  </div>
				  
				  
			<!---container6--->
     <div class="container">	  		  
				  <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/pug.jfif" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspPUG</h2>
                      <br><br>
                      <p>AGE: 3.5 MONTHS<BR> SIBLINGS: 1<br>GENDER: MALE<BR>JOIN DATE: 17th AUGUST,2019<BR>CITY: MUMBAI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				 
				 
				 <div class="card">
                  <div class="imgBx">
                       <a href=""><img src="images/chihua.jfif" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspCHIHUAHUA</h2>
                      <br><br>
                      <p>AGE: 2.7 MONTHS<BR> SIBLINGS: 5<br>GENDER: MALE<BR>JOIN DATE: 27th JUNE,2019<BR>CITY: KALYAN</p>
                      <BR>
                      <h3 style="color: #be0000;">STATUS: UNAVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #ccccb3; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #000; disabled">
								ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  

                <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/beagle.jfif" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspBEAGLE</h2>
                      <br><br>
                      <p>AGE: 4.5 MONTHS<BR> SIBLINGS: 7<br>GENDER: MALE<BR>JOIN DATE: 19th AUGUST,2020<BR>CITY: MUMBAI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #fff;
								font-size: 17px; padding: 15px 0; background: #00CCFF;
								border-radius: 20px; cursor: pointer; outline: none; margin-top: 30px; border: 1px solid #405a6b;">
								ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>

				 
				  <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/shih.jfif" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspSHIH TZU</h2>
                      <br><br>
                      <p>AGE: 2 MONTHS<BR> SIBLINGS: 0<br>GENDER: MALE<BR>JOIN DATE: 1%th SEPTEMBER,2019<BR>CITY: DOMBIVLI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
       </div>
       
		<!---CATS---->


<!---container1--->	
            <div class="container">
                <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/persian.jpg" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspPERSIAN KITTY CAT</h2>
                      <br><br>
                      <p>AGE: 2.5 MONTHS<BR> SIBLINGS: 0<br>GENDER: MALE<BR>JOIN DATE: 30th SEPTEMBER,2015<BR>CITY: MUMBAI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
                
                
                <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/russian.jpg" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspRUSSIAN BLUE CAT</h2>
                      <br><br>
                      <p>AGE: 5 MONTHS<BR> SIBLINGS: 6<br>GENDER: MALE<BR>JOIN DATE: 5th JULY,2019<BR>CITY: KOLKATA</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
                  
              <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/khao.jpg" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspKHAO MANEE CAT</h2>
                      <br><br>
                      <p>AGE: 2 MONTHS<BR> SIBLINGS: 4<br>GENDER: MALE<BR>JOIN DATE: 14th AUGUST,2019<BR>CITY: MUMBAI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				  <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/turkish.jpg" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspTURKISH ANGORA</h2>
                      <br><br>
                      <p>AGE: 1 MONTH<BR> SIBLINGS: 0<br>GENDER: MALE<BR>JOIN DATE: 13th SEPTEMBER,2019<BR>CITY: KALYAN</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
       </div>
       
     <!---container2--->
     <div class="container">
                <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/persiancat.jfif" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspPERSIAN CAT</h2>
                      <br><br>
                      <p>AGE: 5 MONTHS<BR> SIBLINGS: 2<br>GENDER: MALE<BR>JOIN DATE: 4th MARCH,2019<BR>CITY: MUMBAI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				  <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/british.jfif" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspBRITISH SHORTHAIR</h2>
                      <br><br>
                      <p>AGE: 7.5 MONTHS<BR> SIBLINGS: 4<br>GENDER: MALE<BR>JOIN DATE: 17th DECEMBER,2020<BR>CITY: MUMBAI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				  <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/bengal.jfif" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspBENGAL CAT</h2>
                      <br><br>
                      <p>AGE: 4 MONTHS<BR> SIBLINGS: 7<br>GENDER: MALE<BR>JOIN DATE: 29th OCTOBER,2019<BR>CITY: VARANASI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				  <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/forestcat.jfif" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspNORWEGIAN FOREST CAT</h2>
                      <br><br>
                      <p>AGE: 8 MONTHS<BR> SIBLINGS: 7<br>GENDER: MALE<BR>JOIN DATE: 8th JANUARY,2020<BR>CITY: THANE</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
			</div>	  
				  
     <!---container3--->
     <div class="container">
                <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/munchkin.jfif" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspMUNCHKIN CAT</h2>
                      <br><br>
                      <p>AGE: 9 MONTHS<BR> SIBLINGS: 4<br>GENDER: MALE<BR>JOIN DATE: 16th MAY,2018<BR>CITY: MUMBAI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				 <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/savannah.jfif" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspSAVANNAH CAT</h2>
                      <br><br>
                      <p>AGE: 4.5 MONTHS<BR> SIBLINGS: 3<br>GENDER: MALE<BR>JOIN DATE: 15th APRIL,2016<BR>CITY: KALYAN</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				  <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/himalayan.jfif" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspHIMALAYAN CAT</h2>
                      <br><br>
                      <p>AGE: 4.5 MONTHS<BR> SIBLINGS: 4<br>GENDER: MALE<BR>JOIN DATE: 23rd JUNE,2020<BR>CITY: SURAT</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				  <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/birman.jfif" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspBIRMAN CAT</h2>
                      <br><br>
                      <p>AGE: 5 MONTHS<BR> SIBLINGS: 3<br>GENDER: MALE<BR>JOIN DATE: 26th NOVEMBER,2015<BR>CITY: MUMBAI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
			</div>
			
     <!---container4--->
     <div class="container">
                <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/siamese.jfif" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspSIAMESE CAT</h2>
                      <br><br>
                      <p>AGE: 5 MONTHS<BR> SIBLINGS: 2<br>GENDER: MALE<BR>JOIN DATE: 2nd MAY,2019<BR>CITY: THANE</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				  <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/bombay.jfif" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspBOMBAY CAT</h2>
                      <br><br>
                      <p>AGE: 1.7 MONTHS<BR> SIBLINGS: 1<br>GENDER: MALE<BR>JOIN DATE: 27th JULY,2019<BR>CITY: MUMBAI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				  <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/korat.webp" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspKINKALOW CAT</h2>
                      <br><br>
                      <p>AGE: 2.7 MONTHS<BR> SIBLINGS: 3<br>GENDER: MALE<BR>JOIN DATE: 30th SEPTEMBER,2020<BR>CITY: KALYAN</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				  <div class="card">
                  <div class="imgBx">
                       <a href=""><img src="images/singapura.jpg" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspSINGAPURA CAT</h2>
                      <br><br>
                      <p>AGE: 2.8 MONTHS<BR> SIBLINGS: 0<br>GENDER: MALE<BR>JOIN DATE: 19th MARCH,2019<BR>CITY: MUMBAI</p>
                      <BR>
                      <h3 style="color: #be0000;">STATUS: UNAVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #fff;
								font-size: 17px; padding: 15px 0; background: #ccccb3;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #000;" disabled>
								ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
     </div>
	 
     <!---container5--->
     <div class="container">
                <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/sokoke.jpg" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspSOKOKE CAT</h2>
                      <br><br>
                      <p>AGE: 4.2 MONTHS<BR> SIBLINGS: 4<br>GENDER: MALE<BR>JOIN DATE: 9th FEBRUARY,2021<BR>CITY: PUNE</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				   <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/somali.jpg" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspSOMALI ORANGE CAT</h2>
                      <br><br>
                      <p>AGE: 2 MONTHS<BR> SIBLINGS: 4<br>GENDER: MALE<BR>JOIN DATE: 20th MARCH,2021<BR>CITY: MUMBAI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				   <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/scottish.jpg" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspSCOTTISH FOLD CAT</h2>
                      <br><br>
                      <p>AGE: 6.5 MONTHS<BR> SIBLINGS: 3<br>GENDER: MALE<BR>JOIN DATE: 6th AUGUST,2019<BR>CITY: MUMBAI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				   <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/pixie.jpg" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspPIXIE BOB CAT</h2>
                      <br><br>
                      <p>AGE: 7 MONTHS<BR> SIBLINGS: 1<br>GENDER: MALE<BR>JOIN DATE: 25th JULY,2019<BR>CITY: MUMBAI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  </div>
				  
				  
			<!---container6--->
     <div class="container">	  		  
				  <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/turkish.jpg" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspTURKISH ANGORA</h2>
                      <br><br>
                      <p>AGE: 5 MONTHS<BR> SIBLINGS: 1<br>GENDER: MALE<BR>JOIN DATE: 17th AUGUST,2019<BR>CITY: MUMBAI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				 
				 
				 <div class="card">
                  <div class="imgBx">
                       <a href=""><img src="images/persiancat.jfif" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspPERSIAN CAT</h2>
                      <br><br>
                      <p>AGE: 4.7 MONTHS<BR> SIBLINGS: 0<br>GENDER: MALE<BR>JOIN DATE: 27th JUNE,2019<BR>CITY: KALYAN</p>
                      <BR>
                      <h3 style="color: #be0000;">STATUS: UNAVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #ccccb3; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #000; disabled">
								ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  

                <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/russian.jpg" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspRUSSIAN BLUE CAT</h2>
                      <br><br>
                      <p>AGE: 4.5 MONTHS<BR> SIBLINGS: 2<br>GENDER: MALE<BR>JOIN DATE: 19th AUGUST,2020<BR>CITY: MUMBAI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #fff;
								font-size: 17px; padding: 15px 0; background: #00CCFF;
								border-radius: 20px; cursor: pointer; outline: none; margin-top: 30px; border: 1px solid #405a6b;">
								ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>

				 
				  <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/persian.jpg" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspPERSIAN KITTY CAT</h2>
                      <br><br>
                      <p>AGE: 2 MONTHS<BR> SIBLINGS: 0<br>GENDER: MALE<BR>JOIN DATE: 1%th SEPTEMBER,2019<BR>CITY: DOMBIVLI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
       </div>
       
	   
	   <!----BIRDS---->


<!---container1--->	
            <div class="container">
                <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/bird1.png" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspPARROT</h2>
                      <br><br>
                      <p>AGE: 2 MONTHS<BR> SIBLINGS: 4<br>GENDER: MALE<BR>JOIN DATE: 25th JULY,2019<BR>CITY: MUMBAI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
                
                
                <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/blueparrot.webp" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspBLUE WINGED PARROTLET-FORPUS-XANTHOPTERY</h2>
                      <br><br>
                      <p>AGE: 5 MONTHS<BR> SIBLINGS: 6<br>GENDER: MALE<BR>JOIN DATE: 5th JULY,2019<BR>CITY: KOLKATA</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
                  
              <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/getty.webp" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspGETTY PARROT</h2>
                      <br><br>
                      <p>AGE: 2 MONTHS<BR> SIBLINGS: 4<br>GENDER: MALE<BR>JOIN DATE: 14th AUGUST,2019<BR>CITY: MUMBAI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				  <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/crested.jpg" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspSULPHER-CRESTED-COCKATOO</h2>
                      <br><br>
                      <p>AGE: 1 MONTH<BR> SIBLINGS: 3<br>GENDER: MALE<BR>JOIN DATE: 13th SEPTEMBER,2019<BR>CITY: KALYAN</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
       </div>
       
     <!---container2--->
     <div class="container">
                <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/parakeet.jpg" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspPARAKEET-AVERESS</h2>
                      <br><br>
                      <p>AGE: 5 MONTHS<BR> SIBLINGS: 0<br>GENDER: MALE<BR>JOIN DATE: 4th MARCH,2019<BR>CITY: MUMBAI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				  <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/hyacinth.webp" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspHYACINTH</h2>
                      <br><br>
                      <p>AGE: 4.5 MONTHS<BR> SIBLINGS: 4<br>GENDER: MALE<BR>JOIN DATE: 17th DECEMBER,2020<BR>CITY: MUMBAI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				  <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/pacific.jpg" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspPACIFIC PARROTLET</h2>
                      <br><br>
                      <p>AGE: 4 MONTHS<BR> SIBLINGS: 2<br>GENDER: MALE<BR>JOIN DATE: 29th OCTOBER,2019<BR>CITY: VARANASI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				  <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/getty2.webp" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspGETTY PARROT</h2>
                      <br><br>
                      <p>AGE: 8 MONTHS<BR> SIBLINGS: 1<br>GENDER: MALE<BR>JOIN DATE: 8th JANUARY,2020<BR>CITY: THANE</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
			</div>	  
				  
     <!---container3--->
     <div class="container">
                <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/africangrey.jpg" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspAFRICAN GREY BIRD</h2>
                      <br><br>
                      <p>AGE: 9 MONTHS<BR> SIBLINGS: 7<br>GENDER: MALE<BR>JOIN DATE: 16th MAY,2018<BR>CITY: MUMBAI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				 <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/canary.jpg" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspCANARY THOMAS-DEMARCZYK</h2>
                      <br><br>
                      <p>AGE: 6.5 MONTHS<BR> SIBLINGS: 0<br>GENDER: MALE<BR>JOIN DATE: 15th APRIL,2016<BR>CITY: KALYAN</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				  <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/whitepigeons.jpg" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspWHITE PIGEONS</h2>
                      <br><br>
                      <p>AGE: 4.5 MONTHS<BR> SIBLINGS: 2<br>GENDER: MALE<BR>JOIN DATE: 23rd JUNE,2020<BR>CITY: SURAT</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				  <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/woodpecker.jpg" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspWOOD PECKER</h2>
                      <br><br>
                      <p>AGE: 8 MONTHS<BR> SIBLINGS: 3<br>GENDER: MALE<BR>JOIN DATE: 26th NOVEMBER,2015<BR>CITY: MUMBAI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
			</div>
			
     <!---container4--->
     <div class="container">
                <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/mourningdove.jpg" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspMOURNING DOVE</h2>
                      <br><br>
                      <p>AGE: 5 MONTHS<BR> SIBLINGS: 4<br>GENDER: MALE<BR>JOIN DATE: 2nd MAY,2019<BR>CITY: THANE</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				  <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/kingfisher.jpg" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspKING FISHER</h2>
                      <br><br>
                      <p>AGE: 1.7 MONTHS<BR> SIBLINGS: 4<br>GENDER: MALE<BR>JOIN DATE: 27th JULY,2019<BR>CITY: MUMBAI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				  <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/toucan.png" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspTOUCAN</h2>
                      <br><br>
                      <p>AGE: 6.5 MONTHS<BR> SIBLINGS: 1<br>GENDER: MALE<BR>JOIN DATE: 30th SEPTEMBER,2020<BR>CITY: KALYAN</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				  <div class="card">
                  <div class="imgBx">
                       <a href=""><img src="images/parrots.png" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspPARROTS</h2>
                      <br><br>
                      <p>AGE: 2 MONTHS<BR> SIBLINGS: 4<br>GENDER: MALE<BR>JOIN DATE: 19th MARCH,2019<BR>CITY: MUMBAI</p>
                      <BR>
                      <h3 style="color: #be0000;">STATUS: UNAVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #fff;
								font-size: 17px; padding: 15px 0; background: #ccccb3;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #000;" disabled>
								ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
     </div>

		
<!----RABBITS--->			


 <!---container1--->	
            <div class="container">
                <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/cashmere.webp" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspCASHMERE LOP RABBIT</h2>
                      <br><br>
                      <p>AGE: 2 MONTHS<BR> SIBLINGS: 4<br>GENDER: MALE<BR>JOIN DATE: 25th JULY,2019<BR>CITY: MUMBAI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
                
                
                <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/britishgiant.webp" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspBRITISH GIANT RABBIT</h2>
                      <br><br>
                      <p>AGE: 5 MONTHS<BR> SIBLINGS: 6<br>GENDER: MALE<BR>JOIN DATE: 5th JULY,2019<BR>CITY: KOLKATA</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
                  
              <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/angora.webp" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspANGORA RABBIT</h2>
                      <br><br>
                      <p>AGE: 2 MONTHS<BR> SIBLINGS: 4<br>GENDER: MALE<BR>JOIN DATE: 14th AUGUST,2019<BR>CITY: MUMBAI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				  <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/alaska.webp" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspALASKA RABBIT</h2>
                      <br><br>
                      <p>AGE: 1 MONTH<BR> SIBLINGS: 3<br>GENDER: MALE<BR>JOIN DATE: 13th SEPTEMBER,2019<BR>CITY: KALYAN</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
       </div>
       
     <!---container2--->
     <div class="container">
                <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/englishlop.jfif" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspENGLISH LOP</h2>
                      <br><br>
                      <p>AGE: 5 MONTHS<BR> SIBLINGS: 0<br>GENDER: MALE<BR>JOIN DATE: 4th MARCH,2019<BR>CITY: MUMBAI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				  <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/minilop.jfif" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspMINILOP RABBIT</h2>
                      <br><br>
                      <p>AGE: 4.5 MONTHS<BR> SIBLINGS: 4<br>GENDER: MALE<BR>JOIN DATE: 17th DECEMBER,2020<BR>CITY: MUMBAI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				  <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/dutch.jfif" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspDUTCH RABBIT</h2>
                      <br><br>
                      <p>AGE: 4 MONTHS<BR> SIBLINGS: 2<br>GENDER: MALE<BR>JOIN DATE: 29th OCTOBER,2019<BR>CITY: VARANASI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				  <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/american.jfif" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspAMERICAN RABBIT</h2>
                      <br><br>
                      <p>AGE: 8 MONTHS<BR> SIBLINGS: 1<br>GENDER: MALE<BR>JOIN DATE: 8th JANUARY,2020<BR>CITY: THANE</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
			</div>	  
				  
     <!---container3--->
     <div class="container">
                <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/dwarf.webp" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspDWARF HOTOT</h2>
                      <br><br>
                      <p>AGE: 9 MONTHS<BR> SIBLINGS: 7<br>GENDER: MALE<BR>JOIN DATE: 16th MAY,2018<BR>CITY: MUMBAI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				 <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/dwarf2.webp" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspDWARF LOP</h2>
                      <br><br>
                      <p>AGE: 6.5 MONTHS<BR> SIBLINGS: 0<br>GENDER: MALE<BR>JOIN DATE: 15th APRIL,2016<BR>CITY: KALYAN</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				  <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/englishlop2.webp" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspENGLISH LOP</h2>
                      <br><br>
                      <p>AGE: 4.5 MONTHS<BR> SIBLINGS: 2<br>GENDER: MALE<BR>JOIN DATE: 23rd JUNE,2020<BR>CITY: SURAT</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				  <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/french.webp" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspFRENCH LOP</h2>
                      <br><br>
                      <p>AGE: 8 MONTHS<BR> SIBLINGS: 3<br>GENDER: MALE<BR>JOIN DATE: 26th NOVEMBER,2015<BR>CITY: MUMBAI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
			</div>
			
     <!---container4--->
     <div class="container">
                <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/holland.webp" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspHOLLAND LOP</h2>
                      <br><br>
                      <p>AGE: 5 MONTHS<BR> SIBLINGS: 4<br>GENDER: MALE<BR>JOIN DATE: 2nd MAY,2019<BR>CITY: THANE</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				  <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/russian.webp" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspRUSSIAN LOP</h2>
                      <br><br>
                      <p>AGE: 1.7 MONTHS<BR> SIBLINGS: 4<br>GENDER: MALE<BR>JOIN DATE: 27th JULY,2019<BR>CITY: MUMBAI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				  <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/havana.webp" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspHAVANA RABBIT</h2>
                      <br><br>
                      <p>AGE: 6.5 MONTHS<BR> SIBLINGS: 1<br>GENDER: MALE<BR>JOIN DATE: 30th SEPTEMBER,2020<BR>CITY: KALYAN</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				  <div class="card">
                  <div class="imgBx">
                       <a href=""><img src="images/fdb.webp" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspFauve de Bourgogne</h2>
                      <br><br>
                      <p>AGE: 2 MONTHS<BR> SIBLINGS: 4<br>GENDER: MALE<BR>JOIN DATE: 19th MARCH,2019<BR>CITY: MUMBAI</p>
                      <BR>
                      <h3 style="color: #be0000;">STATUS: UNAVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #fff;
								font-size: 17px; padding: 15px 0; background: #ccccb3;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #000;" disabled>
								ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
     </div>
	 
     <!---container5--->
     <div class="container">
                <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/lionhead.webp" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspLION HEAD RABBIT</h2>
                      <br><br>
                      <p>AGE: 4.2 MONTHS<BR> SIBLINGS: 2<br>GENDER: MALE<BR>JOIN DATE: 9th FEBRUARY,2021<BR>CITY: PUNE</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				   <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/florida.webp" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspFLORIDA WHITE RABBIT</h2>
                      <br><br>
                      <p>AGE: 2 MONTHS<BR> SIBLINGS: 4<br>GENDER: MALE<BR>JOIN DATE: 20th MARCH,2021<BR>CITY: MUMBAI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				   <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/newzealand.webp" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspNEW ZEALAND RABBIT</h2>
                      <br><br>
                      <p>AGE: 1.5 MONTHS<BR> SIBLINGS: 5<br>GENDER: MALE<BR>JOIN DATE: 6th AUGUST,2019<BR>CITY: MUMBAI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  
				   <div class="card">
                  <div class="imgBx">
                       <a href="adopt.php"><img src="images/silver.webp" 
		style="width: 500px;height: 500px;  border: 5px solid #fff; display: inline; margin-right: 350px; float: left;"></a>
                   </div>
                   <FORM action="adopt.php" method="POST" 
	 style="background-color: #fff; width: 350px; height: 510px; display: inline; margin-left: 367px;float: right; margin-top: -510px;">
                       <div class="content"><BR>
                        <br>
                      <h2>BREED: &nbspSILVER RABBIT</h2>
                      <br><br>
                      <p>AGE: 2 MONTHS<BR> SIBLINGS: 4<br>GENDER: MALE<BR>JOIN DATE: 25th JULY,2019<BR>CITY: MUMBAI</p>
                      <BR>
                      <h3 style="color: #006666;">STATUS: AVAILABLE</h3>
					  <br>
                      <BUTTON name="submit" onclick="passvalues();" style="width: 155px; color: #FFF;
								font-size: 17px; padding: 15px 0; background: #00CCFF; border: 0;
								border-radius: 20px; outline: none; margin-top: 30px; border: 1px solid #405A6B;
								cursor: pointer;">ADOPT ME NOW!</BUTTON>
                       </div>
                   </FORM>
                   <br><br><hr><br> 
                  </div>
                  <br><br>
				  </div>
			
        </center>
		
		<div>
		 <font size="20px"><a href="#" style="width: 75px; color: #003366; height: 43px;
								font-size: 23px; padding: 5px 5px; background: #fff; float: right; text-align: center;
								 margin-right: -45px; margin-top: 49550px; padding-top: 13px;
								border-radius: 10px; outline: none; border: 2px solid #405A6B;
								cursor: pointer;"><i class="fas fa-arrow-up"></i></a></font>
		</div>
		
		
		<!----sidenavigation menu---->
        <div id="sidenav" style="height: 7100vh;">
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
            </ul>
        
        </nav>
        
        
        <div id="menubtn">
           <img src="images/menubar2.webp" id="menu">
        </div>
        </div>
        <div class="side-bar" style="height: 7100vh;">
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
