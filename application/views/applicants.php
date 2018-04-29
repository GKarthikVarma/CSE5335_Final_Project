<div class="main-container">
  <?php
    foreach($applicants as $row) {
        echo "<div class='profile-container'>\n";
				if($row['user_photo']==null) {
					echo "<img src='".base_url()."images/blank-profile-image.png' class='profile-thumbnail'>";
				} else {
					echo "<img src='".base_url()."uploads/".$row['user_photo']."' class='profile-thumbnail'>";
				}
        echo "<div class='applicant-info'>".$row['user_first']." ".$row['user_last']."</div>";
				if(isset($row['user_degree'])) {
					echo "<div class='applicant-info'>".$row['user_degree']." in ".$row['user_degree_in']."</div>";
					echo "<div class='applicant-info'>".$row['user_graduation_semester']." of ".$row['user_graduation_year']."</div>";
				}
        echo "<div style='float: right; line-height: 50px;'><a href='".base_url()."view_profile/".$row['user_id']."'>View Profile</a></div>";
        echo "<div style='clear: both;'></div>";
        echo "</div>";
    }
   ?>
</div>
