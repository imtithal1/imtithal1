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
    <title>The Cook House | Contact Us</title>
    
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
        <li><a href="Allrecipe.php">AllRecipes</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="feedback.php"class="active">Feedbacks</a></li>
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
<div class="qoutes"><h2>Let Us Know Your Feedback :)</h2></div>
      
    <div class="col-12 col-s-12">
      <form method="post" action="feedback_action.php">
        <div class="row">
            <div class="col-25">
            <label>Feedbacks: </label>
            </div>
            <div class="col-75">
            <input type="text" id="fname" name="txtFeedback" placeholder="Your Feedback..">
          </div>
        </div>
        <div class="row">
          <input type="submit" value="Submit">
        </div>
        </form>
        <div class="col-12 col-s-12">
        <div class="feedback">
        <?php
            $sql="SELECT * FROM feedbacks";

            if ($result = mysqli_query($con,$sql)){

              while($row =mysqli_fetch_assoc($result)){
                  echo"<tr>
                        <td>".$row['feedback']."</td>
                        <br>
                       </tr>";
              }
            }
            ?>
        </div>
        </div>
    </div>
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