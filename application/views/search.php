

<div class="main-container" action="search.php" method="POST">
<center>
<h1>Search for Jobs</h1>
<?php
	echo form_open("search", "class='search-form'");
	echo form_input("job_title", "", "id='job-title' placeholder='Job title or description'");
	echo " in ";
	echo form_input("location", "", "id='location' placeholder='City, ST'");
	echo form_submit("search", "Search", "class='search-button'");
 ?>
</center>

<?php
	if(isset($jobsArray)) {
			echo "<br /><br /><div id='job-listings'>";
				echo "<table id='jobs'>";
				echo "<tr>";
					echo "<th>Job Title</th>";
					echo "<th>Company Name</th>";
					echo "<th>Location</th>";
					echo "<th></th>";
				echo "</tr>";
					foreach($jobsArray as $row) {
						$applied = in_array($row['job_id'], $jobIdsApplied);
						echo "<tr>\n";
						if($applied && $u_type == "student") {
							echo "<td>".$row['job_title']." <span style='color: green;'>&#10004;</span></td>\n";
						} else {
							echo "<td>".$row['job_title']."</td>\n";
						}
						echo "<td>".$row['company_name']."</td>\n";
						echo "<td>".$row['city'].", ".$row['state']."</td>\n";
						echo "<td><a href='".base_url()."view_job/".$row['job_id']."'>View Job</a></td>";
						echo "</tr>";
					}
			echo "</table>";
		echo "</div>";


	}
?>
