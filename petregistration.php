<?php

session_start();
header('location:petlogin.php');

date_default_timezone_set("Asia/Kolkata");
$CurrentTime=time();
$DateTime=strftime("%B-%d-%Y %H:%M:%S",$CurrentTime);

$conn = mysqli_connect('localhost','root','');

mysqli_select_db($conn,'petuserregistration');

$name = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['password'];


$s = "SELECT * from usertable where name = '$name'";
$result = mysqli_query($conn, $s);

$num = mysqli_num_rows($result);

if($num == 1){
  
  echo "Username Already Taken";
}
else{
    $reg = "insert into usertable(name, email, password, timestamp) values ('$name' , '$email' , '$pass' , '$DateTime')";
	mysqli_query($conn, $reg);
	echo "Registration Sucessful!!";
}


?>