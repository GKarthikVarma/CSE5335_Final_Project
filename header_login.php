<?php
error_reporting(E_ERROR | E_PARSE);
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
		<div class="title">
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
        <li><a href="recruiter_profile.php">Profile</a></li>
				<li><a href="view_posted_jobs.php">View Posted Jobs</a></li>
				<li><a href="post_job.php">Post a Job</a></li>
				<li><a href="search.php">Search</a></li>
				<li><a href="index.php">Signout</a></li>
			</ul>
			</div>';
		}
	?>

	</div>
	</nav>
	<div class="nav-bottom"></div>
</header>

<body>
