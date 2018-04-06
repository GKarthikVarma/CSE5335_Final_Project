<?php

  session_start();
	include_once 'header_login.php';
	include 'background/dbh.php';
  if($_SESSION['u_type'] != "student") {
    echo "ERROR PAGE DOES NOT EXIST";
    exit;
  }
	$sql = "SELECT * FROM job_student WHERE user_id=".$_SESSION['u_id'].";";
	$result = mysqli_query($connection, $sql);
	$resultcheck = mysqli_num_rows($result);
	if ($resultcheck < 1){
		header("Location: search.php?search=no_result_found");
		exit();
	} else {
		echo "<div class='main-container'>";
    echo "<div id='job-listings'>";
    echo "<table id='jobs'>";
    echo "<tr>";
    echo "<th>Job Title</th>";
    echo "<th>Company Name</th>";
    echo "<th>Location</th>";
    echo "<th></th>";
    while($row = mysqli_fetch_assoc($result)) {
        $sql = "SELECT * FROM jobs WHERE job_id=".$row['job_id'].";";
        $result=mysqli_query($connection, $sql);
        $row = mysqli_fetch_assoc($result);
        echo "<tr>\n";
        echo "<td>".$row['job_title']."</td>\n";
				echo "<td>".$row['company_name']."</td>\n";
				echo "<td>".$row['city'].", ".$row['state']."</td>\n";
				echo "<td><a href='view_job.php?id=".$row['job_id']."'>View Job</a></td>";
		}

	}

?>

<?php
	include_once '../footer.php';
?>
