<!DOCTYPE html>
<?php
	$this->load->helper('url');
 ?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
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
				<li><a href="'.base_url().'profile">Profile</a></li>
				<li><a href="'.base_url().'applications">Applications</a></li>
				<li><a href="'.base_url().'search">Search</a></li>
				<li><a href="'.base_url().'index">Signout</a></li>
			</ul>
		</div>';
	} elseif ($u_type == "recruiter"){
			echo'<div class="navbar">
			<ul>
        <li><a href="'.base_url().'recruiter_profile">Profile</a></li>
				<li><a href="'.base_url().'view_posted_jobs">View Posted Jobs</a></li>
				<li><a href="'.base_url().'post_job">Post a Job</a></li>
				<li><a href="'.base_url().'find_students">Find Students</a></li>
				<li><a href="'.base_url().'search">Search</a></li>
				<li><a href="'.base_url().'index">Signout</a></li>
			</ul>
			</div>';
		}
	?>

	</div>
	</nav>
</header>

<body>
