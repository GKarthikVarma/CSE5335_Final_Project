<?php
	include_once 'header_login.php';
	include_once 'background/dbh.php';


	$states = array('AL'=>0,
	            'AK'=>1,
	            'AZ'=>2,
	            'AR'=>3,
	            'CA'=>4,
	            'CO'=>5,
	            'CT'=>6,
	            'DE'=>7,
	            'DC'=>8,
	            'FL'=>9,
	            'GA'=>10,
	            'HI'=>11,
	            'ID'=>12,
	            'IL'=>13,
	            'IN'=>14,
	            'IA'=>15,
	            'KS'=>16,
	            'KY'=>17,
	            'LA'=>18,
	            'ME'=>19,
	            'MD'=>20,
	            'MA'=>21,
	            'MI'=>22,
	            'MN'=>23,
	            'MS'=>24,
	            'MO'=>25,
	            'MT'=>26,
	            'NE'=>27,
	            'NV'=>28,
	            'NH'=>29,
	            'NJ'=>30,
	            'NM'=>31,
	            'NY'=>32,
	            'NC'=>33,
	            'ND'=>34,
	            'OH'=>35,
	            'OK'=>36,
	            'OR'=>37,
	            'PA'=>38,
	            'RI'=>39,
	            'SC'=>40,
	            'SD'=>41,
	            'TN'=>42,
	            'TX'=>43,
	            'UT'=>44,
	            'VT'=>45,
	            'VA'=>46,
	            'WA'=>47,
	            'WV'=>48,
	            'WI'=>49,
	            'WY'=>50);
?>

<div class='main-container'>
  <div class='profile-container'>
    <center>
      <h1>Edit a Listing</h1>
    </center>
    <br /><br />
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
      <form class='formA' action='update_job.php' method='post'>
				<input type='hidden' name='job_id' value='<?php echo $job_id;?>' />
        <label>Job Title</label><br />
        <input type='text' name='title' value='<?php echo $row['job_title']; ?>'></input><br /><br />
        <label>Company Name</label><br />
        <input type='text' name='company' value='<?php echo $row['company_name']; ?>'></input><br /><br />
        <label>Job Description (max 1024 chars)</label><br />
        <textarea name='description'><?php echo $row['job_description']; ?></textarea><br /><br />
        <label>City</label><br />
        <input type='text' name='city' value='<?php echo $row['city']; ?>'></input><br /><br />
        <label>State</label><br />
        <select id='state' name='state'>
        	<option value="AL">Alabama</option>
        	<option value="AK">Alaska</option>
        	<option value="AZ">Arizona</option>
        	<option value="AR">Arkansas</option>
        	<option value="CA">California</option>
        	<option value="CO">Colorado</option>
        	<option value="CT">Connecticut</option>
        	<option value="DE">Delaware</option>
        	<option value="DC">District Of Columbia</option>
        	<option value="FL">Florida</option>
        	<option value="GA">Georgia</option>
        	<option value="HI">Hawaii</option>
        	<option value="ID">Idaho</option>
        	<option value="IL">Illinois</option>
        	<option value="IN">Indiana</option>
        	<option value="IA">Iowa</option>
        	<option value="KS">Kansas</option>
        	<option value="KY">Kentucky</option>
        	<option value="LA">Louisiana</option>
        	<option value="ME">Maine</option>
        	<option value="MD">Maryland</option>
        	<option value="MA">Massachusetts</option>
        	<option value="MI">Michigan</option>
        	<option value="MN">Minnesota</option>
        	<option value="MS">Mississippi</option>
        	<option value="MO">Missouri</option>
        	<option value="MT">Montana</option>
        	<option value="NE">Nebraska</option>
        	<option value="NV">Nevada</option>
        	<option value="NH">New Hampshire</option>
        	<option value="NJ">New Jersey</option>
        	<option value="NM">New Mexico</option>
        	<option value="NY">New York</option>
        	<option value="NC">North Carolina</option>
        	<option value="ND">North Dakota</option>
        	<option value="OH">Ohio</option>
        	<option value="OK">Oklahoma</option>
        	<option value="OR">Oregon</option>
        	<option value="PA">Pennsylvania</option>
        	<option value="RI">Rhode Island</option>
        	<option value="SC">South Carolina</option>
        	<option value="SD">South Dakota</option>
        	<option value="TN">Tennessee</option>
        	<option value="TX">Texas</option>
        	<option value="UT">Utah</option>
        	<option value="VT">Vermont</option>
        	<option value="VA">Virginia</option>
        	<option value="WA">Washington</option>
        	<option value="WV">West Virginia</option>
        	<option value="WI">Wisconsin</option>
        	<option value="WY">Wyoming</option>
        </select>

				<script>
					document.getElementById('state').selectedIndex=<?php echo $states[$row['state']]; ?>;
				</script>

				<br /><br />
        <label>Skills (separate by comma)</label><br />
        <textarea name='skills'><?php echo $row['job_skills']; ?></textarea><br /><br />
        <label>Est. Salary (optional)</label><br />
        <input type='text' name='salary' value='<?php echo $row['job_salary']; ?>'></input><br /><br /><br />
				<center>
					<a href="delete_job.php?id=<?php echo $job_id; ?>">Remove Listing</a><br /><br />
					<button type='submit'>Save</button>
				</center>
      </form>

  </div>
</div>

<?php
	include_once 'footer.php';
?>
