<?php

include "../inc/validate.php";
include "../inc/dashboard.php";
include "../inc/connection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Ingredients</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="main-content">
        <main>
            
            <h2 class="dash-title">Manage Ingredients</h2>
            <section class="recent">
            <div class="container">
                <form method="post" action="addIngredient1_action.php">
                <div class="row">
                    <div class="col-25">
                    <label>Ingredient 1: </label>
                    </div>
                    <div class="col-75">
                    <input type="text" name="txtIngredient1" placeholder="Enter Ingredient 1.."/>
                    </div>
                </div>
                
                <div class="row">
                    <input type="submit" value="Add Ingredient 1">
                </div>
                </form> 
     <center>
        <table class="ViewIngredient">
            <thead>
             <tr>
              <th>Ingredient 1</th>
              <th>Delete</th>
             </tr>
            </thead>
            <tbody>
            <?php
            $sql="SELECT * FROM ingredients1";

            if ($result = mysqli_query($con,$sql)){

              while($row =mysqli_fetch_assoc($result)){
                  echo"<tr>
                        <td>".$row['ingredient1']."</td>
                        <td><a class=link-delete href=delete.php?ID=".$row['id']."&flag=ing1"."><center><span class=ti-close></span></center></a></td>
                       </tr>";
              }
            }
            ?>
            </tbody>
        </table>
          </center>
            </div>
            </section>
            <br>
            <section class="recent">
            <div class="container">
             <form method="post" action="addIngredient2_action.php">
                <div class="row">
                    <div class="col-25">
                    <label>Ingredient 2: </label>
                    </div>
                    <div class="col-75">
                    <input type="text" name="txtIngredient2" placeholder="Enter Ingredient 2.."/>
                    </div>
                </div>
                
                <div class="row">
                    <input type="submit" value="Add Ingredient 2">
                </div>
                </form>  
        <center>
        <table class="ViewIngredient">
            <thead>
             <tr>
              <th>Ingredient 2</th>
              <th>Delete</th>
             </tr>
            </thead>
            <tbody>
            <?php
            $sql="SELECT * FROM ingredients2";

            if ($result = mysqli_query($con,$sql)){

              while($row =mysqli_fetch_assoc($result)){
                  echo"<tr>
                        <td>".$row['ingredient2']."</td>
                        <td><a class=link-delete href=delete.php?ID=".$row['id']."&flag=ing2"."><center><span class=ti-close></span></center></a></td>
                       </tr>";
              }
            }
            ?>
            </tbody>
        </table>
          </center>
            </section>
            
        </main>

</div>
</body>
</html>