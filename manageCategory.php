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
    <title>Manage Categories</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="main-content">
        <main>
            
            <h2 class="dash-title">Manage Category</h2>
            <section class="recent">
            <div class="container">
                <form method="post" action="addCategory_action.php">
                <div class="row">
                    <div class="col-25">
                    <label>Category: </label>
                    </div>
                    <div class="col-75">
                    <input type="text" name="txtCategory" placeholder="Enter Category.."/>
                    </div>
                </div>
                
                <div class="row">
                    <input type="submit" value="Add Category">
                </div>
                </form> 
     <center>
        <table class="ViewCategory">
            <thead>
             <tr>
              <th>Category</th>
              <th>Delete</th>
             </tr>
            </thead>
            <tbody>
            <?php
            $sql="SELECT * FROM categories";

            if ($result = mysqli_query($con,$sql)){

              while($row =mysqli_fetch_assoc($result)){
                  echo"<tr>
                        <td>".$row['category']."</td>
                        <td><a class=link-delete href=delete.php?ID=".$row['id']."&flag=cat"."><center><span class=ti-close></span></center></a></td>
                       </tr>";
              }
            }
            ?>
            </tbody>
        </table>
          </center>
            </div>
            </section>
            
        </main>

        
</div>
</body>
</html>