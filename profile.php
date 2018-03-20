<!DOCTYPE html>

<?php
	include_once 'header_login.php';

?>

	<div class="main-container">
		<a href="edit_profile.php">Edit Profile</a><br /><br />

		<div class="profile-container">
		<center>
			<img src="images/blank-profile-image.png" id="profile-photo">


<h1><?php echo("{$_SESSION['u_first']}")?> <?php echo("{$_SESSION['u_last']}")?></h1>
<h2><?php echo("{$_SESSION['u_degree']}")?> in <?php echo("{$_SESSION['u_degree_in']}")?></h2>
<br />
Graduation: <?php echo("{$_SESSION['u_graduation_semester']}")?> of <?php echo("{$_SESSION['u_graduation_year']}")?><br /><br />
<?php echo("{$_SESSION['u_skills']}")?><br /><br />
Open to Relocation: <?php echo("{$_SESSION['u_relocation']}")?><br /><br />
Email: <?php echo("{$_SESSION['u_email']}")?><br /><br /><br />
<a href="#resume.pdf">Download Resume</a>
</center>
</div>
</div>
</body>
</html>


</center>
</div>


<?php
	include_once 'footer.php';
?>
