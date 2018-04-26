
<?php
	include_once 'header_login.php';
	include_once 'background/dbh.php';
?>


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
					$sql = "SELECT * FROM jobs WHERE rec_id=".$_SESSION['uid'].";";
					$result = mysqli_query($connection, $sql);
					if(mysqli_num_rows($result) > 0) {
						while($row = mysqli_fetch_assoc($result)) {
							echo "<tr>\n";
							echo "<td>".$row['job_title']."</td>\n";
							echo "<td>".$row['company_name']."</td>\n";
							echo "<td>".$row['city'].", ".$row['state']."</td>\n";
							$sql = "SELECT * FROM job_student where job_id=".$row['job_id'].";";
							$applicantCount = mysqli_num_rows(mysqli_query($connection, $sql));
							if($applicantCount > 0) {
								echo "<td><a href='applicants.php?id=".$row[job_id]."'>(".$applicantCount.")</a></td>\n";
							} else {
								echo "<td>(0)</td>\n";
							}
							echo "<td><a href='edit_job.php?id=".$row[job_id]."'>Edit</a></td>\n";
							echo "</tr>";
						}
					}

				?>
      </table>

    </div>
  </div>

  <?php include_once 'footer.php' ?>
