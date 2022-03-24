<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Questions</title>
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
        <h2>View Questions</h2>
        <section class="recent">
    <br>
    <div class="col-12 col-s-12">
    <div class="container">
            <?php
            $sql="SELECT * FROM visitors";

            if ($result = mysqli_query($con,$sql)){

              while($row =mysqli_fetch_assoc($result)){
                  echo" <h3><b>First Name: </b></h3>
                        <h3>".$row['firstname']."</h3>
                        <br>
                        <h3><b>Last Name: </b></h3>
                        <h3>".$row['lastname']."</h3>
                        <br>
                        <h3><b>Email: </b></h3>
                        <a class=link href=https://mail.google.com/mail/u/0/#inbox target=_blank><h3>".$row['email']."</h3></a>
                        <br>
                        <h3><b>Questions: </b></h3>
                        <h3>".$row['Questions']."</h3>
                        <br>
                      ";
              }
            }
            ?>
    </div>
    </div>
            </section>
            
        </main>
        
</div>
</body>
</html>