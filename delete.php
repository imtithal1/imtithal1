<?php
include "../inc/connection.php";
include "../inc/validate.php";
    $ID=$_GET['ID'];
if(isset($_GET['flag'])){
$flag=$_GET['flag'];
if($flag=='cat'){
$sql="DELETE FROM categories WHERE id=$ID";
mysqli_query($con,$sql) or die(mysqli_error($con));
header("location:manageCategory.php");
}
else if($flag=='ing1'){
    $sql="DELETE FROM ingredients1 WHERE id=$ID";
    mysqli_query($con,$sql) or die(mysqli_error($con));
    header("location:manageIngredient.php");
}
else if($flag=='ing2'){
    $sql="DELETE FROM ingredients2 WHERE id=$ID";
    mysqli_query($con,$sql) or die(mysqli_error($con));
    header("location:manageIngredient.php");
}
}
else{
    $sql="DELETE FROM recipes WHERE id=$ID";
    mysqli_query($con,$sql) or die(mysqli_error($con));
    header("location:ViewRecipe.php");
}

?>