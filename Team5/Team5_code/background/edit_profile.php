<?php

session_start();


if(isset($_POST['save_profile'])){

	include_once 'dbh.php';

	$first_edit = $_POST['first_name'];
	$last_edit = $_POST['last_name'];
	$user_id = $_POST['uid'];
	$email = $_POST['email'];
	$degree_type = $_POST['degree_type'];
	$major = $_POST['major'];
	$grad_sem = $_POST['grad_semester'];
	$grad_year = $_POST['grad_year'];
	$skills = $_POST['skills'];
	$relocation = $_POST['relocation'];
	$uid = $_POST['id'];
	if (empty($first_edit) || empty($last_edit) || empty($degree_type) || empty($major) || empty($grad_sem) || empty($grad_year) || empty($skills)) {
		header("Location: ../edit_profile.php?fill_all");
		exit();
	} else {
		if ($relocation=='on') {
			$relocation = 1;
		} else {
			$relocation = 0;
		}

		$_SESSION['u_id'] = $uid;
		$_SESSION['u_first'] = $first_edit;
		$_SESSION['u_last'] = $last_edit;
		$_SESSION['u_email'] = $email;
		$_SESSION['u_uid'] = $user_id;
		$_SESSION['u_degree'] = $degree_type;
		$_SESSION['u_degree_in'] = $major;
		$_SESSION['u_graduation_semester'] = $grad_sem;
		$_SESSION['u_graduation_year'] = $grad_year;
		$_SESSION['u_skills'] = $skills;
		$_SESSION['u_relocation'] = $relocation;
	
		$sql = "UPDATE students set user_first='$first_edit', user_last='$last_edit', user_degree='$degree_type', user_degree_in='$major', user_graduation_semester='$grad_sem', user_email='$email', user_graduation_year='$grad_year', user_skills='$skills', user_relocation='$relocation' WHERE user_id='$uid';";
		$result = mysqli_query($connection, $sql);
		header("Location: ../profile.php?login=success");
		exit();	
	}

} else {
	header("Location: ../edit_profile.php");
	exit();
}