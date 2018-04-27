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
		if ($u_type == "student")
		{
			echo'<div class="navbar">
			<ul>
				<li><a href="profile">Profile</a></li>
				<li><a href="applications">Applications</a></li>
				<li><a href="search">Search</a></li>
				<li><a href="index">Signout</a></li>
			</ul>
		</div>';
	} elseif ($u_type == "recruiter"){
			echo'<div class="navbar">
			<ul>
        <li><a href="recruiter_profile">Profile</a></li>
				<li><a href="view_posted_jobs">View Posted Jobs</a></li>
				<li><a href="post_job">Post a Job</a></li>
				<li><a href="find_students">Find Students</a></li>
				<li><a href="search">Search</a></li>
				<li><a href="index">Signout</a></li>
			</ul>
			</div>';
		}
	?>

	</div>
	</nav>
</header>

<body>
