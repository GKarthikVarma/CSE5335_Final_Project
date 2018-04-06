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

	if (empty($location)){
		header("Location: search.php?search=emptyfieldsffdsa");
	} else{
			$loc = explode(",", $location);
			$title=trim($title);
			$titleArray=explode(" ",$title);
			$title=join("%",$titleArray);
			$loc[0]=trim($loc[0]);
			$loc[1]=trim($loc[1]);
			if(trim($title)=="") {
				$sql = "SELECT * FROM jobs WHERE city='$loc[0]' AND state='$loc[1]'";
			} else {
				$sql = "SELECT * FROM jobs WHERE job_title LIKE '%$title%' AND city='$loc[0]' AND state='$loc[1]'";
			}

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
								$sql="SELECT * FROM job_student WHERE job_id=".$row['job_id']." AND user_id=".$_SESSION['u_id'].";";
								$applied = (mysqli_num_rows(mysqli_query($connection, $sql)) > 0);
          			echo "<tr>\n";
								if($applied) {
									echo "<td>".$row['job_title']." <span style='color: green;'>&#10004;</span></td>\n";
								} else {
									echo "<td>".$row['job_title']."</td>\n";
								}
								echo "<td>".$row['company_name']."</td>\n";
								echo "<td>".$row['city'].", ".$row['state']."</td>\n";
								echo "<td><a href='view_job.php?id=".$row['job_id']."'>View Job</a></td>";
							}

			}
	}

}
?>

<?php
	include_once '../footer.php';
?>
