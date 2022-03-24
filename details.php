<?php
include "../inc/dashboard.php";
include "../inc/connection.php";
include "../inc/validate.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Recipe | Details</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<div class="main-content">
        <main>
        <?php
            $ID=$_GET['ID'];
            
            $sql="SELECT * FROM recipes WHERE id=$ID ";

            if ($result = mysqli_query($con,$sql)){

              while($row =mysqli_fetch_assoc($result)){
                  echo"
                        <h2>".$row['title']."</h2>
                      ";
              }
            }
        ?>
            <section class="recent">
<br>
    <div class="col-12 col-s-12">
    <div class="container">
      
        <table class="ViewRecipe">
            
            <tbody>
            
            <br>
            <?php
            
            $ID=$_GET['ID'];
            $user=$_SESSION['user'];
            $sql="SELECT * FROM recipes WHERE id=$ID AND username='$user'";

            if ($result = mysqli_query($con,$sql)){

              while($row =mysqli_fetch_assoc($result)){
                  echo" 
                        <img src=images/".$row['imageName'].">
                        <br>
                      ";
              }
            }
            ?>
            <?php
            
            $ID=$_GET['ID'];
            $user=$_SESSION['user'];
            $sql="SELECT * FROM recipes WHERE id=$ID AND username='$user'";

            if ($result = mysqli_query($con,$sql)){

              while($row =mysqli_fetch_assoc($result)){
                  echo" <h3><b>Ingredients</b></h3>
                        <br>
                        <h3>".$row['ingredient1']."</h3>
                        
                      ";
              }
            }
            ?>
            <?php
            
            $ID=$_GET['ID'];
            $user=$_SESSION['user'];
            $sql="SELECT * FROM recipes WHERE id=$ID AND username='$user'";

            if ($result = mysqli_query($con,$sql)){

              while($row =mysqli_fetch_assoc($result)){
                  echo" 
                        <h3>".$row['ingredient2']."</h3>
                        
                      ";
              }
            }
            ?>
            <?php
            
            $ID=$_GET['ID'];
            $user=$_SESSION['user'];
            $sql="SELECT * FROM recipes WHERE id=$ID AND username='$user'";

            if ($result = mysqli_query($con,$sql)){

              while($row =mysqli_fetch_assoc($result)){
                  echo"
                        <h3>".$row['ingredients']."</h3>
                        <br>
                        <h3><b>Directions</b></h3>
                        <br>
                        <h3>".$row['Directions']."</h3>
                        <br>
                        <h3><b>Chef's Notes</b></h3>
                        <br>
                        <h3>".$row['ChefsNotes']."</h3>
                        <br>
                        <h3><b>Nutrition Facts:</b></h3>
                        <br>
                        <h3>".$row['NutritionFacts']."</h3>
                        
                      ";
              }
            }
            ?>
            
            </tbody>
        </table>
    </div>
    </div>
            </section>
            
        </main>
        
</div>
</body>
</html>