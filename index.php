<?php
include "inc/connection.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="css/style-frontEnd.css">
    <title>The Cook House | Home</title>
    
</head>

<body>
<div class="header">
    <div class="logo"><img src="images/logo.png" alt="The Cook House" width="120px"></div>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <ul class="home"> 
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="Allrecipe.php">AllRecipes</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="feedback.php">Feedbacks</a></li>
        <li> <a href="https://instagram.com/thecookhouse.bkk?igshid=5i5a2816rc6q" target="_blank"><span class="ti-instagram"></span></a></li>

        <a href="contact.php">
          <li>  
            <button type="button">
            Contact
            </button>
          </li>
        </a>
      </ul>
    </nav>   
</div>
<div class="here-white">
  <h2>Lets Cook New Recipes</h2>
</div>
<div class="qoutes">
  <p>I write recipes, among other things, for a living. It may seem easy, but it isn’t always. It takes practice and adherence to a few rules.</p>
  <p>There are two main parts of a recipe, the Ingredient List and the Preparation Method. </p>
</div>
<section class="allrecipe">
        <div class="container">
            <h2>All Recipe</h2>
            <div class="aside">
                
                <?php
                  $sql="SELECT * FROM recipes ORDER BY id asc LIMIT 3";

                  if ($result = mysqli_query($con,$sql)){

                    while($row =mysqli_fetch_assoc($result)){
                        echo" 
                        <a href=recipe.php?ID=".$row['id']."><img class=box class=img-responsive src=admin/images/".$row['imageName']."></a>
                        ";
                    }
                  }
               ?>
            </div>
            <div class="clearfix"></div>
            </div>
        </div>
    </section>  
    <div class="qoutes">
  <p>We are here so that you can cook for your family and children a delicious food. Where they will be so happy eating it.</p>
  <p>Mentioning the cooking method, and you can see how you can cook delicious food - Steamed, char-grilled, pan-fried, stir-fried, or slow-cooked. </p>
</div>
<footer>
   
  <div class="col-12 col-s-12">
  <div class="contact">
    <ul class="social">
      <a href="index.php"><li>Home</li></a>
      <a href="https://instagram.com/thecookhouse.bkk?igshid=5i5a2816rc6q" target="_blank"><li> <span class="ti-instagram"></span></li></a>
      <a href="contact.php"><li>Contact</li></a>
      
    </ul> 
    <div class="email">
    <center><i class="ti-email"></i><center>
    <p>thecookhouse@gmail.com</p>
    <br>
    </div>
    
    
  </div>
  </div>
</footer>   

</body>
</html>