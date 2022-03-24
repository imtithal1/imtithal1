<?php

include "../inc/validate.php";
include "../inc/connection.php";

$ingredient1=addslashes(strip_tags($_POST['txtIngredient1']));

$sql="INSERT INTO ingredients1(ingredient1) VALUES ('$ingredient1')";
mysqli_query($con,$sql) or die(mysqli_error($con));

header("location:manageIngredient.php");

?>