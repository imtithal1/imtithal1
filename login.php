<?php
include "../inc/connection.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style-login.css">
    <title>Log In</title>
</head>
<body>

  <div class="container-login">
		<form method="POST" action="login_action.php"  class="login">
			<h2 style="font-size: 2rem; font-weight: 500;">Login</h2>
			<div class="input">
				<input type="email" placeholder="Email" name="txtEmail" required>
			</div>
			<div class="input">
				<input type="password" placeholder="Password" name="txtPassword" required>
			</div>
            <div class="input">
				<?php
                if(isset($_GET['error']))
                   echo"<h2>Invalid Username or password..</h2>";
                ?>
			</div>
			<div class="input">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
		</form>
	</div>
</body>
</html>