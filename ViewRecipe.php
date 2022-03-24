<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <title>View Recipe</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php
include "../inc/dashboard.php";
include "../inc/connection.php";
include "../inc/validate.php";
?>
<div class="main-content">
        <main>
            
            <h2 class="dash-title">View Recipe</h2>
            <section class="recent">
<br>
    <div class="col-12 col-s-12">
    <div class="container">
      <center>
        <table class="ViewRecipe">
            <thead>
             <tr>
              <th>Date</th>
              <th>Title</th>
              <th>Delete</th>
             </tr>
            </thead>
            <tbody>
            <?php
            $user=$_SESSION['user'];
            $sql="SELECT * FROM recipes WHERE username='$user' order by date DESC";

            if ($result = mysqli_query($con,$sql)){

              while($row =mysqli_fetch_assoc($result)){
                  echo"<tr>
                        <td>".$row['Date']."</td>
                        <td><a class=link href=details.php?ID=".$row['id'].">".$row['title']."</a></td>
                        <td><a class=link-delete href=delete.php?ID=".$row['id']."><center><span class=ti-close></span></center></a></td>
                       </tr>";
              }
            }
            ?>
            </tbody>
        </table>
          </center>
    </div>
    </div>
            </section>
            
        </main>
        
</div>
</body>
</html>