<!--
Project Title: E-Commerce
Version: 1.4
Authors: Fredrick Ondieki, Michael Weaver
Date Updated: 11/11/2018
Description:
-->
<!--
The Server.php file is included serves the purpose of connecting the database when the user logs into
the website.
-->
<?php include('server.php') ?>
<?php include('db.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
	<style>
	body{
		margin: 0;
		background:url('Images/design.jpg');
		background-size: cover;
	}
	</style>
</head>
<body>
	<div class="header">
		<h2>The E-Commerce Login Page </h2>
	</div>

    <?php include("Includes/Front/header.php") ?>

	<form method="post" action="login.php">
		<!-- Get the errors incase the user attempts to log in with empty fields -->
		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>

		<p style="font-size:18px; color:#c1c9c7">
			New Customer ? <a href="registration.php" style="color: #2bc0db;">Sign up</a>
		</p>
	</form>
</body>
</html>
