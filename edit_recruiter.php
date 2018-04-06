
<?php
	include_once 'header_login.php';
?>


  <div class="main-container">

  <div class="profile-container">

  <form class="formA" action="background/edit_rec_backend.php" method="post">
    <input type="hidden" name="id" value=<?php echo("{$_SESSION['u_id']}")?>>
    <input type="hidden" name="uid" value=<?php echo("{$_SESSION['u_uid']}")?>>
    <label>First Name:</label><br />
    <input type="text" name="first_name"></input><br /><br />
    <label>Last Name:</label><br />
    <input type="text" name="last_name"></input><br /><br />
    <label>E-Mail:</label><br />
    <input type="text" name="email"></input><br /><br />
    <center>
    <button type="submit" name="save_profile">Save Profile</button>
  </center>

  </form>
  </div>
  </div>

  <?php
  	include_once 'footer.php';
  ?>
