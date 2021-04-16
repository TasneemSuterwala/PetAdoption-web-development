 <?php

session_start();


header('location:confirmfinal.php');

date_default_timezone_set("Asia/Kolkata");
$CurrentTime=time();
$DateTime=strftime("%B-%d-%Y %H:%M:%S",$CurrentTime);


$conn = mysqli_connect('localhost','root','');

mysqli_select_db($conn,'petuserregistration');

$name = $_POST['firstname'];
$email = $_POST['email'];
$addr = $_POST['address'];
$city = $_POST['city'];
$pcode = $_POST['pincode'];
$state = $_POST['state'];
$ncard = $_POST['cardname'];
$cnumber = $_POST['cardnumber'];
$eyear = $_POST['expyear'];
$emonth = $_POST['expmonth'];
$cvv = $_POST['cvv'];


$s = "SELECT * from adopt";
$result = mysqli_query($conn, $s);

    $reg = "insert into payment(name, email, address, city, pincode, state, ncard, cnumber, cvv, expyear, expmonth, timestamp) 
	values ('$name' , '$email' , '$addr' , '$city' , '$pcode' , '$state' , '$ncard' , '$cnumber' , '$cvv' , '$eyear' , '$emonth' , '$DateTime')";
	mysqli_query($conn, $reg);
	echo "Payment Sucessful!!";

?>