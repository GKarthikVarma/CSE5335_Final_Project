
<?php
	include_once 'header_login.php';
?>


<div class="main-container">

  <div class="profile-container">

		<?php
			echo form_open("edit_recruiter", "class='formA'");
			echo form_label("First Name: ")."<br />";
			echo form_input("first_name", $first_name)."<span class='error-msg'>".form_error("first_name")."</span>"."<br /><br />";
			echo form_label("Last Name: ")."<br />";
			echo form_input("last_name", $last_name)."<span class='error-msg'>".form_error("last_name")."</span>"."<br /><br />";
			echo form_label("Email: ")."<br />";
			echo form_input("email", $email)."<span class='error-msg'>".form_error("email")."</span>"."<br /><br />";
			echo form_submit("save_profile", "Save Profile", "class='submit-button'");
			echo form_close();
		 ?>
  </div>
</div>

  <?php
  	include_once 'footer.php';
  ?>
