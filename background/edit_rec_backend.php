<?php

session_start();


if(isset($_POST['save_profile'])){

	include_once 'dbh.php';

	$first_edit = $_POST['first_name'];
	$last_edit = $_POST['last_name'];
	$user_id = $_POST['uid'];
	$email = $_POST['email'];
	$uid = $_POST['id'];
	if (empty($first_edit) || empty($last_edit) || empty($email)) {
		header("Location: ../edit_recruiter.php?fill_all");
		exit();
	} else{

		$_SESSION['u_id'] = $uid;
		$_SESSION['u_first'] = $first_edit;
		$_SESSION['u_last'] = $last_edit;
		$_SESSION['u_email'] = $email;
	
		$sql = "UPDATE recruiter set rec_first='$first_edit', rec_last='$last_edit' WHERE rec_id='$uid';";
		$result = mysqli_query($connection, $sql);
		header("Location: ../recruiter_profile.php?edit=success");
		exit();	
	}

} else {
	header("Location: ../edit_recruiter.php");
	exit();
}