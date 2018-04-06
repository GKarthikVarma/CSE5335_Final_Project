<?php

session_start();

?>

<?php
	include_once 'header_login.php';
?>

<div class="main-container" action="search.php" method="POST">
<center>
<h1>Search for Jobs</h1>
<form class="search-form" action="" method="POST" target="_parent">
	<input type="text" id="job-title" name="job_title" placeholder="Job title or description"></input> in
	<input type="text" id="location" name="location" placeholder="City, ST"></input>
	<button type="submit" name="search">Search</button>
</form>
</center>
</div>

<?php
if (isset($_POST['search'])){
	include 'background/dbh.php';

	$title = $_POST['job_title'];
	$location = $_POST['location'];

	if (empty($title) || empty($location)){
		header("Location: search.php?search=emptyfieldsffdsa");
		exit();			
	} else{
			$loc = explode(",", $location);
			$sql = "SELECT * FROM jobs WHERE job_title='$title' AND city='$loc[0]' AND state='$loc[1]'";
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
          		echo "<th>City</th>";
				echo "<th>State</th>";
				echo "<th>Job Skills</th>";
          		echo "<th>Job Salary</th>";
          		echo "<th></th>";
          		while($row = mysqli_fetch_assoc($result)) {
          			echo "<tr>\n";
          			echo "<td>".$row['job_title']."</td>\n";
					echo "<td>".$row['company_name']."</td>\n";
					echo "<td>".$row['city']."</td>\n";
					echo "<td>".$row['state']."</td>\n";
					echo "<td>".$row['job_skills']."</td>\n";
					echo "<td>".$row['job_salary']."</td>\n";

				}

			}
	}

}
?>

<?php
	include_once '../footer.php';
?>