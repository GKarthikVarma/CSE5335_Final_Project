<?php

		echo "<div class='main-container'>";
    echo "<div id='job-listings'>";
    echo "<table id='jobs'>";
    echo "<tr>";
    echo "<th>Job Title</th>";
    echo "<th>Company Name</th>";
    echo "<th>Location</th>";
    echo "<th></th>";
    foreach($jobsArray as $row) {
        echo "<tr>\n";
        echo "<td>".$row['job_title']."</td>\n";
				echo "<td>".$row['company_name']."</td>\n";
				echo "<td>".$row['city'].", ".$row['state']."</td>\n";
				echo "<td><a href='".base_url()."view_job/".$row['job_id']."'>View Job</a></td>";
		}



?>
