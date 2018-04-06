<?php
  ob_start();
	include_once 'header_login.php';
	include_once 'background/dbh.php';

	$job_id=$_POST['job_id'];
	$sql = "INSERT INTO job_student VALUES (".$_SESSION['u_id'].", ".$job_id.");";
  echo $sql;
	$result = mysqli_query($connection, $sql);
  header("Location: view_job.php?id=".$job_id);
  ob_end_flush();
?>
