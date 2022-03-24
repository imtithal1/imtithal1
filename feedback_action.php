<?php
include "inc/connection.php";


$Feedback=addslashes(strip_tags($_POST['txtFeedback']));


$sql="INSERT INTO feedbacks(feedback) VALUES ('$Feedback')";

mysqli_query($con,$sql) or die(mysqli_error($con));

header("location: feedback.php");

?>