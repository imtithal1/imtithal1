<?php
include "inc/connection.php";


$FirstName=addslashes(strip_tags($_POST['txtFirstname']));
$LastName=addslashes(strip_tags($_POST['txtLastname']));
$email=addslashes(strip_tags($_POST['txtEmail']));
$Questions=addslashes(strip_tags($_POST['txtComment']));


$sql="INSERT INTO visitors(firstname,lastname,email,Questions) VALUES ('$FirstName','$LastName','$email','$Questions')";

mysqli_query($con,$sql) or die(mysqli_error($con));

header("location: contact.php");

?>