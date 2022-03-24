<?php

include "../inc/validate.php";
include "../inc/connection.php";

$ingredient2=addslashes(strip_tags($_POST['txtIngredient2']));

$sql="INSERT INTO ingredients2(ingredient2) VALUES ('$ingredient2')";
mysqli_query($con,$sql) or die(mysqli_error($con));

header("location:manageIngredient.php");

?>