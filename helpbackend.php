<?php

session_start();
header('location:index.php');

date_default_timezone_set("Asia/Kolkata");
$CurrentTime=time();
$DateTime=strftime("%B-%d-%Y %H:%M:%S",$CurrentTime);

$conn = mysqli_connect('localhost','root','');

mysqli_select_db($conn,'petuserregistration');

$name = $_POST['username'];
$email = $_POST['email'];
$reg = $_POST['regarding'];
$mess = $_POST['message'];


$s = "SELECT * from usertable where name = '$name'";
$result = mysqli_query($conn, $s);

$num = mysqli_num_rows($result);

if($num == 1){
  
  echo "Username Already Taken";
}
else{
    $reg = "insert into help(name, email, regarding, message, timestamp) values ('$name' , '$email' , '$reg' , '$mess' , '$DateTime')";
	mysqli_query($conn, $reg);
	echo "Your Query is Sucessfully sent to the admin!!";
}


?>