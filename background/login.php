<?php

session_start();

if (isset($_POST['submit'])) {
	include 'dbh.php';

	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];

	//Error handlers
	if (empty($uid) || empty($pwd)) {
		header("Location: ../index.php?login=emptyfields");
		exit();	
	} else{
		$sql = "SELECT * FROM students WHERE user_uid='$uid' OR user_email='$uid'";
		$result = mysqli_query($connection, $sql);
		$resultcheck = mysqli_num_rows($result);
		if ($resultcheck < 1) {
			header("Location: ../index.php?login=no_user_found");
			exit();			
		} else {
			if ($row = mysqli_fetch_assoc($result)) {
				$hashedpwdcheck = password_verify($pwd, $row['user_pwd']);
				if ($hashedpwdcheck == false){
					header("Location: ../index.php?login=wrong_password");
					exit();	
				} elseif ($hashedpwdcheck == true) {
					// Login 
					$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['u_first'] = $row['user_first'];
					$_SESSION['u_last'] = $row['user_last'];
					$_SESSION['u_email'] = $row['user_email'];
					$_SESSION['u_uid'] = $row['user_uid'];
					$_SESSION['u_degree'] = $row['user_degree'];
					$_SESSION['u_degree_in'] = $row['user_degree_in'];
					$_SESSION['u_graduation_semester'] = $row['user_graduation_semester'];
					$_SESSION['u_graduation_year'] = $row['user_graduation_year'];
					$_SESSION['u_skills'] = $row['user_skills'];
					$_SESSION['u_relocation'] = $row['user_relocation'];
					header("Location: ../profile.php?login=success");
					exit();	
				}
			}
		}
	}
}
else {
		header("Location: ../index.php?login=error");
		exit();
}

