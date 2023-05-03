<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="css/styleLoginPage.css">
</head>
<body>
<div class="box-form">
	<div class="left">
		<div class="overlay">
		<h2>SDB Pop-Up Cinema</h2>
<p>Pop-Up Cinema for all family. Login with you profile here and enjoy our unforgetable movie service.</p>
		<span>
			
		</span>
		</div>
	</div>
	<form action="doLogin.php" method="post">
		<div class="right">
		<h5>Login</h5>
		<p>Don't have an account?
			<br>
			<a href="RegistrationPage.php">Create Your Account</a> it takes less than a minute</p>
		<div class="inputs">
			<p>What are you?</p>
			<select name="role" id="role">
			<option value="Admin">Admin</option>
			<option value="Staff">Staff</option>
			<option value="Manager">Manager</option>
			<option value="Customer ">Customer</option>
			</select>
			<input name="username" type="text" placeholder="user name">
			<br>
			<input name="password" type="password" placeholder="password">
		</div>
			
			<br>
			<br>
			<button type="submit" id="submit_button">Log In</button>
	</div>
	</form>
</div>

</body>
</html>
