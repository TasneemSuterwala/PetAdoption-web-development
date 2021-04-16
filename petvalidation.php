<?php

session_start();

date_default_timezone_set("Asia/Kolkata");
$CurrentTime=time();
$DateTime=strftime("%B-%d-%Y %H:%M:%S",$CurrentTime);

$conn = mysqli_connect('localhost','root','');

mysqli_select_db($conn,'petuserregistration');

$name = $_POST['user'];
$pass = $_POST['password'];
$city = $_POST['city'];

$s = "SELECT * from usertable where name = '$name' && password = '$pass'";
$result = mysqli_query($conn, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	   $_SESSION['username'] = $name;
	   $reg = "insert into logintable(name, password, city, timestamp) values ('$name' , '$pass' , '$city' , '$DateTime')";
	mysqli_query($conn, $reg);
	echo "login Sucessful!!";
       header('location:home.php');
  
}
else{
   echo"<script>
		        alert('wrong username or password.Try Again.');
				window.location.href='petlogin.php';
				</script>";
}



?>