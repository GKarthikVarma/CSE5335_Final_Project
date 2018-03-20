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
	<?php 
		if ($_SESSION['u_type'] == "student")
		{
			echo'<div class="navbar">
			<ul>
				<li><a href="profile.php">Profile</a></li>
				<li><a href="search.php">Search</a></li>
				<li><a href="index.php">Signout</a></li>
			</ul>
		</div>';
		} elseif ($_SESSION['u_type'] == "recruiter"){
			echo'<div class="navbar">
			<ul>
				<li><a href="view_posted_jobs.php">View Posted Jobs</a></li>
				<li><a href="search.php">Search</a></li>
				<li><a href="index.php">Signout</a></li>
			</ul>
			</div>';
		}
	?>

	</div>
	</nav>
</header>

<body>
