<?php

session_start();

header('location:paymentfinal.php');

date_default_timezone_set("Asia/Kolkata");
$CurrentTime=time();
$DateTime=strftime("%B-%d-%Y %H:%M:%S",$CurrentTime);


$conn = mysqli_connect('localhost','root','');

mysqli_select_db($conn,'petuserregistration');

$name = $_POST['username'];
$addr = $_POST['address'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$age = $_POST['age'];
$amt = $_POST['amount'];


$s = "SELECT * from donate";
$result = mysqli_query($conn, $s);

    $reg = "insert into donate(name, address, email, contact, age, amount, timestamp) 
	values ('$name' , '$addr' , '$email' , '$contact' , '$age' , '$amt' , '$DateTime')";
	mysqli_query($conn, $reg);
	echo "Donation Sucessful!!";

?>