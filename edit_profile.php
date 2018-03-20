
<?php
	include_once 'header_login.php';
?>


  <div class="main-container">

  <div class="profile-container">
		<center><h1>Edit Profile</h1><br /><br /></center>
  <form class="formA" action="background/edit_profile.php" method="post">
    <input type="hidden" name="id" value=<?php echo("{$_SESSION['u_id']}")?>>
    <input type="hidden" name="uid" value=<?php echo("{$_SESSION['u_uid']}")?>>
    <label>First Name:</label><br />
    <input type="text" name="first_name"></input><br /><br />
    <label>Last Name:</label><br />
    <input type="text" name="last_name"></input><br /><br />
    <label>E-Mail:</label><br />
    <input type="text" name="email"></input><br /><br />
    <label>Degree Type:</label><br />
    <select name="degree_type">
      <option value="Associates">Associates</option>
      <option value="Bachelors">Bachelors</option>
      <option value="Masters">Masters</option>
      <option value="Doctorate">Doctorate</option>
    </select>
    in
    <input type="text" name="major"></input>
    <br /><br />
    <label>Graduation:</label><br />
    <select name="grad_semester">
      <option value="Fall">Fall</option>
      <option value="Spring">Spring</option>
    </select>
    of
    <input type="number" name="grad_year"></input><br /><br />
    <label>Skills (seperate by comma):</label><br />
    <textarea name="skills"></textarea>
    <br /><br />
    <label>Open to Relocation</label>
    <input type="checkbox" name="relocation" checked></input><br /><br />

    <label>Upload Photo</label><br />
    <input type="file" name="image" accept="image/*"><br /><br />

    <label>Upload Resume</label><br />
    <input type="file" name="image" accept=".pdf, .doc"><br /><br />

    <center>
    <button type="submit" name="save_profile">Save Profile</button>
  </center>

  </form>
  </div>
  </div>

  <?php
  	include_once 'footer.php';
  ?>
