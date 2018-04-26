<?php
	include_once 'header_login.php';
?>

<div class='main-container'>
  <div class='profile-container'>
    <center>
      <h1>Create a Job Listing</h1>
    </center>
    <br /><br />
      <form class='formA' action="background/create_job.php" method='POST'>
        <label>Job Title</label><br />
        <input type='text' name='title'></input><br /><br />
        <label>Company Name</label><br />
        <input type='text' name='company'></input><br /><br />
        <label>Job Description (max 1024 chars)</label><br />
        <textarea name='description'></textarea><br /><br />
        <label>City</label><br />
        <input type='text' name='city'></input><br /><br />
        <label>State</label><br />
        <select name='state'>
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
        </select><br /><br />
        <label>Skills (separate by comma)</label><br />
        <textarea name='skills'></textarea><br /><br />
        <label>Est. Salary (optional)</label><br />
        <input type='text' name='salary'></input><br /><br />
        <center><button type='submit'>Submit</button></center>
      </form>

  </div>
</div>

<?php
	include_once 'footer.php';
?>
