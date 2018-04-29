<div class='main-container'>
  <div class='profile-container'>
     <center>
       <h2 style='margin: 0px; line-height: 2;'><?php echo $row['job_title']; ?></h2>
       <h2 style='margin: 0px; line-height: 2;'><?php echo $row['company_name']; ?></h2><br />
     </center>
     <h2 style='text-align: left; line-height: 1;'>Job Description</h2>
     <?php echo $row['job_description']; ?>
     <br /><br />
     <h2 style='text-align: left; line-height: 1;'>Skills</h2>
     <?php echo $row['job_skills']; ?>
     <br /><br />
     <h2 style='text-align: left; line-height: 1;'>Est. Salary</h2>
     <?php echo $row['job_salary']; ?>
     <br /><br />
     <h2 style='text-align: left; line-height: 1;'>Location</h2>
     <?php echo $row['city'].", ".$row['state']; ?>
     <br /><br />
     <?php
        if($u_type=="student") {
					if($hasApplied) {
						echo "<center><span style='color: #aaaaaa;'><b>Applied</b></span></center>";
					} else {
						echo "<center>";
						echo form_open(base_url()."view_job/".$job_id, "class='formA'");
						echo form_hidden("job_id", $job_id);
						echo form_submit("submit", "Apply", "class='submit-button'");
						echo "</center>";
					}
        }
      ?>

   </div>
 </div>
