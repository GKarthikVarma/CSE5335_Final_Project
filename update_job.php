<?php
  ob_start();

  include_once 'background/dbh.php';
  include_once 'header_login.php';
  $job_id = $_POST['job_id'];

  if(!empty($_POST['salary'])) {
    $salary=$_POST['salary'];
  } else {
    $salary="NULL";
  }
  $sql = "UPDATE `jobs` SET `job_title`='".$_POST['title']."', `company_name`='".$_POST['company']."', `city`='".$_POST['city']."',".
    " `state`='".$_POST['state']."', `job_skills`='".$_POST['skills']."', `job_salary`=".$salary.", `job_description`='".$_POST['description']."'".
    " WHERE `job_id`=".$job_id." AND `rec_id`=".$_SESSION['uid'].";";
  $result = mysqli_query($connection, $sql);
  header("Location: view_posted_jobs.php");
  ob_end_flush();
 ?>
