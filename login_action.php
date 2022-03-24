<?php
session_start();
include "../inc/connection.php";

$email=addslashes(strip_tags($_POST['txtEmail']));
$password=addslashes(strip_tags($_POST['txtPassword']));
$sql="SELECT * FROM users WHERE email='$email' AND password='$password'";
$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0){
	$_SESSION['user']=$email;
	header("Location: welcome.php");
}else{
	header("Location: login.php?error=1");
}

?>