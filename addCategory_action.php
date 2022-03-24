<?php

include "../inc/validate.php";
include "../inc/connection.php";

$category=addslashes(strip_tags($_POST['txtCategory']));

$sql="INSERT INTO categories(category) VALUES ('$category')";
mysqli_query($con,$sql) or die(mysqli_error($con));

header("location:manageCategory.php");

?>