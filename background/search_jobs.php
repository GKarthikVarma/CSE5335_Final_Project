<?php

session_start();

if (isset($_POST['search'])){
	include 'dbh.php';

	$title = $_POST['job_title'];
	$location = $_POST['location'];

	if (empty($title) || empty($location)){
		header("Location: ../search.php?search=emptyfields");
		exit();			
	} else{
			$loc = explode(",", $location);
			$sql = "SELECT * FROM jobs WHERE job_title='$title' AND city='$loc[0]' AND state='$loc[1]'";
			$result = mysqli_query($connection, $sql);
			$res = mysqli_fetch_assoc($result);
			$a = $res['company_name'];
	}

}
?>

<?php
	include_once '../header_login.php';
?>

<div class="main-container" action="background/search_jobs.php" method="POST">
<center>
<h1>Search for Jobs</h1>
<form class="search-form" action="background/search_jobs.php" method="POST" target="_parent">
	<input type="text" id="job-title" name="job_title" placeholder="Job title or description"></input> in
	<input type="text" id="location" name="location" placeholder="City, ST"></input>
	<button type="submit" name="search">Search</button>
</form>
</center>
</div>
<div id='search-listings'>
      <table id='jobs'>
        <tr>
          <th>Job Title</th>
          <th>Company</th>
          <th>Location</th>
          <th></th>
        </tr>
      </table>
</div>

<?php
	include_once '../footer.php';
?>