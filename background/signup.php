<?php

if(isset($_POST['submit'])) {

	include_once 'dbh.php';

	$first = $_POST['first'];
	$last = $_POST['last'];
	$email = $_POST['email'];
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];

	/* Error Handlers */
	// check for empty fields
	if(empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
		header("Location: ../signup.php?signup=empty");
		exit();
	} else {
		// input char validity
		if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
			header("Location: ../signup.php?signup=invalid");
			exit();
		} else{
			//check if email is valid
			//if (!filter_var($email, FILER_VALIDATE_EMAIL)) {
			//	header("Location: ../signup.php?signup=email");
			//	exit();
			//} else {
			$sql = "SELECT * FROM students WHERE user_uid='$uid';";
			$result = mysqli_query($connection, $sql);
			$resultcheck = mysqli_num_rows($result);

			if ($resultcheck > 0) {
				header("Location: ../signup.php?signup=usertaken");
				exit();
			} else {
					//hashing the password
				$hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
					//insert the user into the database
				$sql = "INSERT INTO students (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$uid', '$hashedpwd');";

				mysqli_query($connection, $sql);
				header("Location: ../signup.php?signup=success");
				exit();
				}
			//}
		}
	}

} else {
	header("Location: ../signup.php");
	exit();
}

?>
