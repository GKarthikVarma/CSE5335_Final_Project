<?php
error_reporting(E_ERROR | E_PARSE);
session_start();

$states = array('AL'=>0,
            'AK'=>1,
            'AZ'=>2,
            'AR'=>3,
            'CA'=>4,
            'CO'=>5,
            'CT'=>6,
            'DE'=>7,
            'DC'=>8,
            'FL'=>9,
            'GA'=>10,
            'HI'=>11,
            'ID'=>12,
            'IL'=>13,
            'IN'=>14,
            'IA'=>15,
            'KS'=>16,
            'KY'=>17,
            'LA'=>18,
            'ME'=>19,
            'MD'=>20,
            'MA'=>21,
            'MI'=>22,
            'MN'=>23,
            'MS'=>24,
            'MO'=>25,
            'MT'=>26,
            'NE'=>27,
            'NV'=>28,
            'NH'=>29,
            'NJ'=>30,
            'NM'=>31,
            'NY'=>32,
            'NC'=>33,
            'ND'=>34,
            'OH'=>35,
            'OK'=>36,
            'OR'=>37,
            'PA'=>38,
            'RI'=>39,
            'SC'=>40,
            'SD'=>41,
            'TN'=>42,
            'TX'=>43,
            'UT'=>44,
            'VT'=>45,
            'VA'=>46,
            'WA'=>47,
            'WV'=>48,  
            'WI'=>49,
            'WY'=>50);

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
