<?php

session_start();

header('location:appointmentconfirm.php');

date_default_timezone_set("Asia/Kolkata");
$CurrentTime=time();
$DateTime=strftime("%B-%d-%Y %H:%M:%S",$CurrentTime);


$conn = mysqli_connect('localhost','root','');

mysqli_select_db($conn,'petuserregistration');

$pname = $_POST['petname'];
$name = $_POST['username'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$p_age = $_POST['age'];
$date = $_POST['date'];
$time = $_POST['timeslot'];


$s = "SELECT * from appointment";
$result = mysqli_query($conn, $s);

    $reg = "insert into appointment(petname, name, email, contact, age, date, timeslot, timestamp) 
	values ('$pname' , '$name' , '$email' , '$contact' , '$p_age' , '$date' , '$time' , '$DateTime')";
	mysqli_query($conn, $reg);
	echo "Your Appointment for".$date."and".$time."is sucessfully booked!!";

?>