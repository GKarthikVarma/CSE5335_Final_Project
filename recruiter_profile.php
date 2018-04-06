<?php
include_once 'header_login.php';
 ?>

<div class="main-container">
  <div class='profile-container'>
    <center>
      <?php echo("{$_SESSION['u_first']}")?> <?php echo("{$_SESSION['u_last']}")?><br /><br />
      <?php echo("{$_SESSION['u_email']}")?><br /><br />
      <a href="edit_recruiter_profile.php">Edit</a>
    </center>
  </div>
</div>

<?php include_once 'footer.php' ?>
