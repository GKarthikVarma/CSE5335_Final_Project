
<?php
	include_once 'header_login.php';
	include_once 'background/dbh.php';
	$sql = "SELECT * FROM students WHERE user_id=".$_SESSION['u_id'];
	$result = mysqli_query($connection, $sql);
	$row = mysqli_fetch_assoc($result);
?>


  <div class="main-container">

  <div class="profile-container">

  <form class="formA" action="background/edit_profile.php" enctype="multipart/form-data" method="post">
    <input type="hidden" name="id" value=<?php echo("{$_SESSION['u_id']}")?>>
    <input type="hidden" name="uid" value=<?php echo("{$_SESSION['u_uid']}")?>>
    <label>First Name:</label><br />
    <input type="text" name="first_name" value='<?php echo $row['user_first'] ?>'></input><br /><br />
    <label>Last Name:</label><br />
    <input type="text" name="last_name" value='<?php echo $row['user_last'] ?>'></input><br /><br />
    <label>E-Mail:</label><br />
    <input type="text" name="email" value='<?php echo $row['user_email'] ?>'></input><br /><br />
    <label>Degree Type:</label><br />
    <select id='degree_type' name="degree_type">
      <option value="Associates">Associates</option>
      <option value="Bachelors">Bachelors</option>
      <option value="Masters">Masters</option>
      <option value="Doctorate">Doctorate</option>
    </select>
    in
    <input type="text" name="major"  value='<?php echo $row['user_degree_in'] ?>'></input>
    <br /><br />
    <label>Graduation:</label><br />
    <select id='grad_semester' name="grad_semester">
      <option value="Fall">Fall</option>
      <option value="Spring">Spring</option>
    </select>
    of
    <input type="number" name="grad_year"  value='<?php echo $row['user_graduation_year'] ?>'></input><br /><br />
    <label>Skills (seperate by comma):</label><br />
    <textarea name="skills"><?php echo $row['user_skills'] ?></textarea>
    <br /><br />
    <label>Open to Relocation</label>
    <input type="checkbox" name="relocation"  <?php if($row['user_relocation']==1) { echo "checked"; } ?>></input><br /><br />

    <label>Upload Photo</label><br />
    <input type="file" name="photo" accept="image/*"><br /><br />

    <label>Upload Resume</label><br />
    <input type="file" name="resume" accept=".pdf, .doc"><br /><br />

    <center>
    <button type="submit" name="save_profile">Save Profile</button>
  </center>
		<script>
			<?php
				$select1=0;
				$select2=0;
				if($row['user_degree'] == "Bachelors") {
					$select1=1;
				} else if ($row['user_degree'] == "Masters") {
					$select1=2;
				} else if ($row['user_degree'] == "Doctorate") {
					$select1=3;
				}
				if($row['user_graduation_semester']=="Spring") {
					$select2=1;
				}
			 ?>
			 document.getElementById('degree_type').selectedIndex=<?php echo $select1; ?>;
			 document.getElementById('grad_semester').selectedIndex=<?php echo $select2; ?>;
		</script>
  </form>



  </div>
  </div>

  <?php
  	include_once 'footer.php';
  ?>
