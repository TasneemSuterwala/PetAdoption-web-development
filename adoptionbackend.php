<?php

session_start();

header('location:adoptconfirmation.php');

date_default_timezone_set("Asia/Kolkata");
$CurrentTime=time();
$DateTime=strftime("%B-%d-%Y %H:%M:%S",$CurrentTime);


$conn = mysqli_connect('localhost','root','');

mysqli_select_db($conn,'petuserregistration');


$breed = $_POST['breed'];
$name = $_POST['username'];
$addr = $_POST['address'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$age = $_POST['age'];
$date = $_POST['date'];
$timeslot = $_POST['timeslot'];


$s = "SELECT * from adopt";
$result = mysqli_query($conn, $s);

    $reg = "insert into adopt(breed, name, address, email, contact, age, date, timeslot, timestamp) 
	values ('$breed' , '$name' , '$addr' , '$email' , '$contact' , '$age' , '$date' , '$timeslot' , '$DateTime')";
	mysqli_query($conn, $reg);
	echo "Your Appointment is sucessfully booked!!";

?>