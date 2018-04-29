  <div class="main-container">

    <div id='job-listings'>
      <table id='jobs'>
        <tr>
          <th>Job Title</th>
          <th>Company</th>
          <th>Location</th>
					<th>Applicants</th>
          <th></th>
        </tr>
				<?php
					foreach($jobsArray as $row) {
						echo "<tr>\n";
						echo "<td>".$row['job_title']."</td>\n";
						echo "<td>".$row['company_name']."</td>\n";
						echo "<td>".$row['city'].", ".$row['state']."</td>\n";
						if($row['applicantCount'] > 0) {
							echo "<td><a href='".base_url()."applicants/".$row['job_id']."'>(".$row['applicantCount'].")</a></td>\n";
						} else {
							echo "<td>(0)</td>\n";
						}
						echo "<td><a href='edit_job/".$row['job_id']."'>Edit</a></td>\n";
						echo "</tr>";
					}


				?>
      </table>

    </div>
  </div>
