<?php
include "../inc/connection.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/style-login.css">
    <title>Registration</title>
</head>
<body>
   

<div class="container-login">
		<form action="register_action.php" method="POST" class="login">
		<h2 style="font-size: 2rem; font-weight: 500;">Register</h2>
			<div class="input">
				<input type="text" placeholder="Username" name="txtUsername" required>
			</div>
			<div class="input">
				<input type="email" placeholder="Email" name="txtEmail" required>
			</div>
			<div class="input">
				<input type="password" placeholder="Password" name="txtPassword" required>
            </div>
			<div class="input">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
		</form>
	</div>
</body>
</html>


