<?php 
include "../inc/connection.php";

$username=addslashes(strip_tags($_POST['txtUsername']));
$email=addslashes(strip_tags($_POST['txtEmail']));
$password=addslashes(strip_tags($_POST['txtPassword']));


$sql="INSERT INTO users(username,email,password) VALUES ('$username','$email','$password')";

mysqli_query($con,$sql);
header("location:login.php");
?>
