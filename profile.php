<!DOCTYPE html>

<?php
	include_once 'header_login.php';

	$first_name=$_SESSION['u_first'];
	$last_name=$_SESSION['u_last'];
	$degree=$_SESSION['u_degree'];
	$degree_in=$_SESSION['u_degree_in'];
	$grad_sem=$_SESSION['u_graduation_semester'];
	$grad_year=$_SESSION['u_graduation_year'];
	$skills=$_SESSION['u_skills'];
	$relocation = $_SESSION['u_relocation'];
	$email = $_SESSION['u_email'];
	$photo = $_SESSION['u_photo'];

?>

	<div class="main-container">
		<a href="edit_profile.php">Edit Profile</a><br /><br />

		<?php
			include_once 'profile_container.php'
			?>
		</div>


<?php
	include_once 'footer.php';
?>
