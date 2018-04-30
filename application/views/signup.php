<?php
	include_once 'header.php';
?>

	<div class='login-container'>
		<center>
			<br />
		<h2 id="register">Sign Up for MavConnect</h2>
		<br />

		<?php
	        echo form_open('signup/submit', "class='formA'");
                echo form_error('dfirst');
                echo form_input(array('id' => 'dfirst', 'name' => 'dfirst', 'placeholder' => 'First Name'),"","class='text-input'" );
                echo "<br><br>";
                echo form_error('dLast');
                echo form_input(array('id' => 'dlast', 'name' =>'dlast', 'placeholder' => 'Last Name'),"","class='text-input'" );
                echo "<br><br>";
                echo form_error('demail');
                echo form_input(array('id' => 'demail', 'name' =>'demail','placeholder' => 'Email'),"","class='text-input'" );
                echo "<br><br>";
                echo form_error('duid');
                echo form_input(array('id' => 'duid', 'name' =>'duid', 'placeholder' => 'Username'),"","class='text-input'" );
                echo "<br><br>";
                echo form_error('dpass');
                echo form_password(array('id' => 'dpwd', 'name' =>'dpwd','placeholder' => 'Password'),"","class='text-input'" );
                echo "<br><br>";
                $options = array('Student', 'Recruiter');
                echo form_dropdown("utype", $options);
                echo "<br><br>";
                echo form_submit('submit', 'Submit', "class='submit-button'");
                echo form_close();
		?>
	</center>
	</div>

<?php
	include_once 'footer.php';
?>
