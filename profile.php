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

<?php  
 if ($_SESSION['u_degree'] == null || $_SESSION['u_degree_in']  == null){

 }else{
 	echo '<h2>' .$_SESSION["u_degree"] . ' in ' .$_SESSION["u_degree_in"] . '</h2>';
 }
 if ($_SESSION['u_graduation_semester'] == null || $_SESSION['u_graduation_year']  == null){

 }else{
 	echo 'Graduation: '.$_SESSION["u_graduation_semester"]. ' of ' .$_SESSION["u_graduation_year"] .'<br /><br />';
 }

  if ( $_SESSION['u_skills']  == null){

 }else{
 	echo ''.$_SESSION["u_skills"].'<br /><br /> Open to Relocation: ';
	if ($_SESSION['u_relocation'] == 0) {
		echo 'NO <br /><br />';
	} else {
		echo 'YES <br /><br />';
	}
 }

?>
<br />
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
