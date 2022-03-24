<?php
include "../inc/dashboard.php";
include "../inc/validate.php";
include "../inc/connection.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Recipe </title>
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
<div class="main-content">
        <main>
            
            <h2 class="dash-title">Add Recipe</h2>
            <section class="recent">
            <div class="container">
                <form method="post" action="AddRecipe_action.php" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-25">
                    <label>Date: </label>
                    </div>
                    <div class="col-75">
                    <input type="date" name="txtDate" required/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                    <label>Category: </label>
                    </div>
                    <div class="col-75">
                    <select name="txtCategory">  
                    <?php

                    $sql="SELECT * FROM categories";

                    if ($result = mysqli_query($con,$sql)){
                    
                        while($row =mysqli_fetch_assoc($result)){
                        echo"<option>".$row['category']."</option>";


                    }
                    }
                    ?>

                    </select>  
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                    <label>Title: </label>
                    </div>
                    <div class="col-75">
                    <input  type="text" name="txtTitle" placeholder="Add Title.." required/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                    <label>Ingredient 1: </label>
                    </div>
                    <div class="col-75">
                    <select name="txtIngredient1">  
                    <?php

                    $sql="SELECT * FROM ingredients1";

                    if ($result = mysqli_query($con,$sql)){
                    
                        while($row =mysqli_fetch_assoc($result)){
                        echo"<option>".$row['ingredient1']."</option>";


                    }
                    }
                    ?>

                    </select>  
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                    <label>Ingredient 2: </label>
                    </div>
                    <div class="col-75">
                    <select name="txtIngredient2">  
                    <?php

                    $sql="SELECT * FROM ingredients2";

                    if ($result = mysqli_query($con,$sql)){
                    
                        while($row =mysqli_fetch_assoc($result)){
                        echo"<option>".$row['ingredient2']."</option>";


                    }
                    }
                    ?>

                    </select>  
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                    <label>Ingredients: </label>
                    </div>
                    <div class="col-75">
                    <textarea cols="10" rows="10" name="txtIngredients" resize="no" placeholder="Enter Ingredients.."></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                    <label>Directions: </label>
                    </div>
                    <div class="col-75">
                    <textarea cols="10" rows="10" name="txtDirections" resize="no" placeholder="Enter Chef Directions.."></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                    <label>Chef's Notes: </label>
                    </div>
                    <div class="col-75">
                    <input type="text" name="txtChefsNotes" placeholder="Chef's Notes.."/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                    <label>Nutrition Facts: </label>
                    </div>
                    <div class="col-75">
                    <input type="text" name="txtNutritionFacts" placeholder="Nutrition Facts.." />
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                    <br>
                    <label>Upload Image: </label>
                    </div>
                    <div class="col-75">
                    <br>
                    <input type="file" name="uploadImage" />
                    </div>
                </div>
                <div class="row">
                    <input type="submit" value="Add Recipe">
                </div>
                </form>
            </div>
            </section>
            
        </main>
</body>
</html>