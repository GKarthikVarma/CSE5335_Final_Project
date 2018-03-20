<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<header>
	<nav>
		<div class="main-wrapper">
			<div id="title">
			MavConnect
		</div>
			<div class='nav-login'>

				<form action="background/login.php" method="POST">
					<input type="text" name="uid" placeholder="Username/email">
					<input type="password" name="pwd" placeholder="Password">
					<button type="submit" name="submit">Login</button>
					</form>
					<a href="signup.php">Signup</a>
			</div>
		</div>
	</nav>
</header>
