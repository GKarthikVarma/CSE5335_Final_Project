
<?php
	include_once 'header_login.php';
?>


  <div class="main-container">

  <div class="profile-container">

  <form class="formA" action="background/edit_profile.php" method="post">
    <input type="hidden" name="id" value=<?php echo("{$_SESSION['u_id']}")?>>
    <input type="hidden" name="uid" value=<?php echo("{$_SESSION['u_uid']}")?>>
    <label>First Name:</label>
    <input type="text" name="first_name"></input><br /><br />
    <label>Last Name:</label>
    <input type="text" name="last_name"></input><br /><br />
    <label>E-Mail:</label>
    <input type="text" name="email"></input><br /><br />
    <label>Degree Type:</label>
    <select name="degree_type">
      <option value="associates">Associates</option>
      <option value="bachelors">Bachelors</option>
      <option value="masters" selected="selected">Masters</option>
      <option value="doctorate">Doctorate</option>
    </select>
    in
    <input type="text" name="major"></input>
    <br /><br />
    <label>Graduation:</label>
    <select name="grad_semester">
      <option value="fall">Fall</option>
      <option value="spring" selected="selected">Spring</option>
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
