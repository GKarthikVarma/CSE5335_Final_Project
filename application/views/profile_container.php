<div class="profile-container">
<center>

<?php

  if($photo != null) {
    echo   "<img src='uploads/".$photo."' id='profile-photo'>";
  } else {
    echo  "<img src='images/blank-profile-image.png' id='profile-photo'>";
  }
 ?>

<h1><?php echo $first_name." ".$last_name; ?></h1>
<?php

if ($degree != null && $degree_in  != null){
  echo '<h2>' .$degree. ' in ' .$degree_in. '</h2>';
}

if($grad_sem != null && $grad_year != null) {
  echo 'Graduation: '.$grad_sem. ' of '.$grad_year.'<br /><br />';
}

if ( $skills  != null){
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
Email: <?php echo $email; ?><br />
<?php

if($resume != null) {
  echo "<br /><br /><a href='uploads".$resume."'>Download Resume </a>";
}

 ?>
</center>
</div>
