
<?php
	include_once 'header_login.php';
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
<?php
	include_once 'footer.php';
?>
