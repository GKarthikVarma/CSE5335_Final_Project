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


	$photo = $_FILES['photo'];
	$photoName = $_FILES['photo']['name'];
	$photoTmpName = $_FILES['photo']['tmp_name'];
	$photosize = $_FILES['photo']['size'];
	$photoError = $_FILES['photo']['error'];
	$photoType = $_FILES['photo']['type'];
	$fileExt = explode(".", $photoName);
	$fileactext = strtolower(end($fileExt));

	$allow = array('jpg', 'jpeg', 'png');

	$resume = $_FILES['resume'];
	$resumeName = $_FILES['resume']['name'];
	$resumeTmpName = $_FILES['resume']['tmp_name'];
	$resumeSize = $_FILES['resume']['size'];
	$resumeError = $_FILES['resume']['error'];
	$resumetype = $_FILES['resume']['type'];

	$resumeExt = explode(".", $resumeName);
	$resumeacttext = strtolower(end($resumeExt));

	$allow_resume = array('pdf', 'docx');



	if (empty($first_edit) || empty($last_edit) || empty($degree_type) || empty($major) || empty($grad_sem) || empty($grad_year) || empty($skills)) {
		header("Location: ../edit_profile.php?fill_all");
		exit();
	} else {
		if ($relocation=='on') {
			$relocation = 1;
		} else {
			$relocation = 0;
		}

		if (in_array($fileactext, $allow)){
			if ($photoError === 0) {
				if ($photosize < 1000000){
					$photoNameNew = $user_id.".".$fileactext;

					$photoDestination = '../uploads/'.$photoNameNew;
					if (move_uploaded_file($photoTmpName, $photoDestination)){
					} else {
						header("Location: ../edit_profile.php?$photoDestination");
						exit();
					}

				} else {
					echo "File too big";									
				}
			} else {
				echo "There was an error uploading your file";				
			}
		} else {
			echo "You cannot upload files of this type";
		}

		if (in_array($resumeacttext, $allow_resume)){
			if ($resumeError === 0) {
				if ($resumeSize < 1000000000){
					$resumeNewName = $user_id."_resume".".".$resumeacttext;

					$resume_destination = '../uploads/'.$resumeNewName;
					if (move_uploaded_file($resumeTmpName, $resume_destination)){
					} else {
						header("Location: ../edit_profile.php?$resume_destination");
						exit();
					}

				} else {
					echo "File too big";									
				}
			} else {
				echo "There was an error uploading your file";				
			}
		} else {
			echo "You cannot upload files of this type";
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
		$_SESSION['u_photo'] = $photoNameNew;
		$_SESSION['u_resume'] = $resumeNewName;
	
		$sql = "UPDATE students set user_first='$first_edit', user_last='$last_edit', user_degree='$degree_type', user_degree_in='$major', user_graduation_semester='$grad_sem', user_email='$email', user_graduation_year='$grad_year', user_skills='$skills', user_relocation='$relocation', user_photo='$photoNameNew', user_resume='$resumeNewName' WHERE user_id='$uid';";
		$result = mysqli_query($connection, $sql);
		header("Location: ../profile.php?login=success");
		exit();	
	}

} else {
	header("Location: ../edit_profile.php");
	exit();
}
