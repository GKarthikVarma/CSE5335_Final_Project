
<?php
	include_once 'header_login.php';
	include_once 'background/dbh.php';

  $job_id = $_GET['id'];
  $sql = "SELECT rec_id FROM jobs WHERE job_id=".$job_id.";";
  $result=mysqli_query($connection, $sql);
  $row = mysqli_fetch_assoc($result);
  if($row['rec_id']!=$_SESSION['uid']) {
    echo "ERROR PAGE NOT FOUND";
    exit;
  }
?>

<div class="main-container">
  <?php
    $sql="SELECT * FROM students WHERE user_id IN (SELECT user_id FROM job_student WHERE job_id=".$job_id.");";
    $result = mysqli_query($connection, $sql);
    if(mysqli_num_rows($result) > 0) {
      while($row=mysqli_fetch_assoc($result)) {
        echo "<div class='profile-container'>\n";
				if($row['user_photo']==null) {
					echo "<img src='images/blank-profile-image.png' class='profile-thumbnail'>";
				} else {
					echo "<img src='uploads/".$row['user_photo']."' class='profile-thumbnail'>";
				}
        echo "<div class='applicant-info'>".$row['user_first']." ".$row['user_last']."</div>";
        echo "<div class='applicant-info'>".$row['user_degree']." in ".$row['user_degree_in']."</div>";
        echo "<div class='applicant-info'>".$row['user_graduation_semester']." of ".$row['user_graduation_year']."</div>";
        echo "<div style='float: right; line-height: 50px;'><a href='view_profile.php?id=".$row['user_id']."'>View Profile</a></div>";
        echo "<div style='clear: both;'></div>";
        echo "</div>";
      }
    }
   ?>
</div>

  <?php include_once 'footer.php' ?>
