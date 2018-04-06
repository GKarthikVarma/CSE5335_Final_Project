<?php
  ob_start();
  include_once 'background/dbh.php';
  include_once 'header_login.php';
  $job_id = $_GET['id'];
  $sql = "DELETE FROM jobs WHERE job_id=".$job_id." AND rec_id=".$_SESSION['uid'].";";
  $result = mysqli_query($connection, $sql);
  $sql = "DELETE FROM job_student WHERE job_id=".$job_id.";";
  $result = mysqli_query($connection, $sql);
  header("Location: view_posted_jobs.php");
  ob_end_flush();
 ?>
