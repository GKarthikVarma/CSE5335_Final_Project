<?php
  ob_start();

  include_once 'background/dbh.php';
  include_once 'header_login.php';
  if(!empty($_POST['salary'])) {
    $salary=$_POST['salary'];
  } else {
    $salary="NULL";
  }
  $sql = "INSERT INTO jobs (`rec_id`, `job_title`, `company_name`, `city`, `state`, `job_skills`, `job_salary`, `job_description`)".
    " VALUES (".$_SESSION['uid'].", '".$_POST['title']."', '".$_POST['company'].
    "', '".$_POST['city']."', '".$_POST['state']."', '".$_POST['skills']."', ".$salary.", '".$_POST['description']."');";
  $result = mysqli_query($connection, $sql);
  header("Location: view_posted_jobs.php");
  ob_end_flush();

 ?>
