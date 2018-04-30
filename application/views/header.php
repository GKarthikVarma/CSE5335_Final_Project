<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/style.css">
</head>

<header>
	<nav>
		<div class="main-wrapper">
			<div class="title">
			MavConnect
		</div>
			<div class='nav-login'>
				<?php
					echo form_open("index", "class='login-form'");
					echo form_input("uid", "", "placeholder= 'username/email' class= 'login-input'");
					echo form_password("password", "", "placeholder= 'password' class= 'login-input'");
					echo form_submit("submit", "Login", "class= 'login-button'");
					echo form_close();
				?>
					<a href="signup">Signup</a>
			</div>
		</div>
	</nav>
</header>
<body>
