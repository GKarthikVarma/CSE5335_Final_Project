<!DOCTYPE html>

<?php
	include_once 'header_login.php';
  include_once 'background/dbh.php';
  $sql = "SELECT * FROM students WHERE user_id=".$_GET['id'].";";
  $result = mysqli_query($connection, $sql);
  $row = mysqli_fetch_assoc($result);

  $first_name=$row['user_first'];
  $last_name=$row['user_last'];
  $degree=$row['user_degree'];
  $degree_in=$row['user_degree_in'];
  $grad_sem=$row['user_graduation_semester'];
  $grad_year=$row['user_graduation_year'];
  $skills=$row['user_skills'];
  $relocation = $row['user_relocation'];
  $email = $row['user_email'];
?>

	<div class="main-container">
		<?php
			include_once 'profile_container.php'
			?>
  </div>


<?php
	include_once 'footer.php';
?>
