<?php
	include_once 'header.php';
?>

	<div class='login-container'>
		<center>
			<br />
		<h2 id="register">Sign Up for MavConnect</h2>

		<?php 
	        echo form_open('signup/submit');
                echo form_label('First : ');
                echo form_error('dfirst');
                echo form_input(array('id' => 'dfirst', 'name' => 'dfirst'));
                echo "<br>";
                echo form_label('Last :');
                echo form_error('dLast');
                echo form_input(array('id' => 'dlast', 'name' =>'dlast'));
                echo "<br>";
                echo form_label('Email :');
                echo form_error('demail');
                echo form_input(array('id' => 'demail', 'name' =>'demail'));
                echo "<br>";
                echo form_label('Username :');
                echo form_error('duid');
                echo form_input(array('id' => 'duid', 'name' =>'duid'));
                echo "<br>";
                echo form_label('Password :');
                echo form_error('dpass');
                echo form_password(array('id' => 'dpwd', 'name' =>'dpwd'));
                echo "<br>";
                $options = array('Student', 'Recruiter');
                echo form_dropdown("utype", $options);
                echo "<br>";
                echo form_submit('submit', 'submit');
                echo form_close();
		?>
	</center>
	</div>

<?php
	include_once 'footer.php';
?>
