<?php
include "inc/connection.php";

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="css/style-frontEnd.css">
    <title>The Cook House | Allrecipe</title>
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
        <li><a href="index.php" >Home</a></li>
        <li><a href="Allrecipe.php" class="active">AllRecipes</a></li>
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
    <div class="qoutes">
        <h2>Here Are Recipes</h2>
       
      </div>
      

<section class="allrecipe">
        <div class="container">
            <h2>All Recipe</h2>
                <?php
                  $sql="SELECT * FROM recipes ORDER BY id desc";

                  if ($result = mysqli_query($con,$sql)){

                    while($row =mysqli_fetch_assoc($result)){
                        echo"
                        <a href=recipe.php?ID=".$row['id']."><img class=box class=img-responsive src=admin/images/".$row['imageName']."></a>
                        
                        ";
                    }
                  }
               ?>
            <div class="clearfix"></div>
            </div>
    </section>
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