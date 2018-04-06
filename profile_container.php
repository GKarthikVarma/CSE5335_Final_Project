<div class="profile-container">
<center>
  <img src="uploads/<?php echo $photo?>" id="profile-photo">

<h1><?php echo $first_name." ".$last_name; ?></h1>

<?php

if ($degree != null && $degree_in  != null){
  echo '<h2>' .$degree. ' in ' .$degree_in. '</h2>';
}

if($grad_sem != null && $grad_year != null) {
  echo 'Graduation: '.$grad_sem. ' of '.$grad_year.'<br /><br />';
}

if ( $_SESSION['u_skills']  != null){
  echo 'Skills: '.$skills;
}

echo '<br /><br /> Open to Relocation: ';
if ($relocation == 0) {
  echo 'No <br /><br />';
} else {
  echo 'Yes <br /><br />';
}


?>
<br />
Email: <?php echo $email; ?><br /><br /><br />
<a href="#resume.pdf">Download Resume</a>
</center>
</div>
