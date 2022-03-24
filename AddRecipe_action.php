<?php
include "../inc/connection.php";
include "../inc/validate.php";


   if(isset($_FILES['uploadImage'])){

      $errors= array();

      $file_name = $_FILES['uploadImage']['name'];
      $file_size = $_FILES['uploadImage']['size'];
      $file_tmp = $_FILES['uploadImage']['tmp_name'];
      $file_type = $_FILES['uploadImage']['type'];

      $str=explode('.',$_FILES['uploadImage']['name']);                        
      $file_ext=strtolower(end($str));
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      


$Date=addslashes(strip_tags($_POST['txtDate']));
$category=addslashes(strip_tags($_POST['txtCategory']));
$title=addslashes(strip_tags($_POST['txtTitle']));
$ingredient1=addslashes(strip_tags($_POST['txtIngredient1']));
$ingredient2=addslashes(strip_tags($_POST['txtIngredient2']));
$Ingredients=addslashes(strip_tags($_POST['txtIngredients']));
$Directions=addslashes(strip_tags($_POST['txtDirections']));
$ChefsNotes=addslashes(strip_tags($_POST['txtChefsNotes']));
$NutritionFacts=addslashes(strip_tags($_POST['txtNutritionFacts']));
$user=addslashes(strip_tags($_SESSION['user']));

if(empty($errors)==true) {
          
         move_uploaded_file($file_tmp,"images/".$file_name);
         $sql="INSERT INTO recipes(category,title,ingredient1,ingredient2,ingredients,Directions,ChefsNotes,NutritionFacts,Date,username,imageName) VALUES ('$category','$title','$ingredient1','$ingredient2','$Ingredients','$Directions','$ChefsNotes','$NutritionFacts','$Date','$user','$file_name')";
         mysqli_query($con,$sql) or die(mysqli_error($con));
         header("location:ViewRecipe.php");
      }else{
         print_r($errors);
      }



   }


?>