<?php
	include_once 'header.php';
?>

<section class='main-container'>
	<div class='main-wrapper'>
		<h2>signup</h2>
		<form class='signup-form' action='background/signup.php' method='POST'>
			<input type="text" name="first" placeholder="First Name">
			<input type="text" name="last" placeholder="Last Name">
			<input type="text" name="email" placeholder="E-mail">
			<input type="text" name="uid" placeholder="Username">
			<input type="password" name="pwd" placeholder="password">
			<button type = 'submit' name = 'submit'>Signup</button>
		</form>
	</div>
</section>

<?php
	include_once 'footer.php';
?>