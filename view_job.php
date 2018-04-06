<?php
	include_once 'header_login.php';
	include_once 'background/dbh.php';
?>

<div class='main-container'>
  <div class='profile-container'>
		<?php
				$job_id=$_GET['id'];
				$sql = "SELECT * FROM jobs WHERE job_id=".$job_id." AND rec_id=".$_SESSION['uid'].";";
				$result = mysqli_query($connection, $sql);
				if(mysqli_num_rows($result) == 1) {
					$row=mysqli_fetch_assoc($result);
				} else {
					echo "JOB DOES NOT EXIST!";
				}
		 ?>
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
        if($_SESSION['u_type']=="student") {
					$sql="SELECT * FROM job_student WHERE job_id=".$job_id." AND user_id=".$_SESSION['u_id'].";";
					if(mysqli_num_rows(mysqli_query($connection, $sql)) > 0) {
						echo "<center><span style='color: #aaaaaa;'><b>Applied</b></span></center>";
					} else {
						echo "<center><form class='formA' action='apply.php' method='post'>\n";
						echo "<input type='hidden' name='job_id' value='".$job_id."' />";
	          echo "<button type='submit'>Apply</button></form></center>";
					}
        }
      ?>

   </div>
 </div>

 <?php
 	include_once 'footer.php';
 ?>
