  <div class="main-container">

  <div class="profile-container">

    <?php

      $degreeTypeArray = array("Associates" => "Associates",
                                "Bachelors" => "Bachelors",
                                "Masters" => "Masters",
                                "Doctorate" => "Doctorate");
      $degreeSelectedArray = array();
      if($degree=="Associates") {
        array_push($degreeSelectedArray, "Associates");
      } else if ($degree=="Bachelors") {
        array_push($degreeSelectedArray, "Bachelors");
      } else if ($degree =="Masters") {
        array_push($degreeSelectedArray, "Masters");
      } else if ($degree=="Doctorate") {
        array_push($degreeSelectedArray, "Doctorate");
      }
      $gradSemSelectedArray = array();
      if($grad_sem=="Fall") {
        array_push($gradSemSelectedArray, "Fall");
      } else if ($grad_sem=="Spring") {
        array_push($gradSemSelectedArray, "Spring");
      }
      echo form_open_multipart('edit_profile', "class='formA'");
      echo form_hidden('id', $uid);
      echo form_label('First Name: ');
      echo form_input("first_name", $first_name)."<span class='error-msg'>".form_error("first_name")."</span>"."<br /><br />";
      echo form_label("Last Name: ");
      echo form_input("last_name", $last_name)."<span class='error-msg'>".form_error("last_name")."</span>"."<br /><br />";
      echo form_label("E-Mail: ");
      echo form_input("email", $email)."<span class='error-msg'>".form_error("email")."</span>"."<br /><br />";
      echo form_label("Degree: ")."<br />";
      echo form_dropdown("degree_type", $degreeTypeArray, $degreeSelectedArray)." in ";
      echo form_input("major", $degree_in)."<span class='error-msg'>".form_error("major")."</span>"."<br /><br />";
      echo form_label("Graduation:")."<br />";
      echo form_dropdown("grad_semester", array("Fall" => "Fall", "Spring" => "Spring"), $gradSemSelectedArray)." of ";
      echo form_input("grad_year", $grad_year, "type='number'")."<span class='error-msg'>".form_error("grad_year")."</span>"."<br /><br />";
      echo form_label("Skills (seperate by comma): ")."<span class='error-msg'>".form_error("skills")."</span>"."<br />";
      echo form_textarea("skills", $skills)."<br /><br />";
      echo form_label("Open to Relocation: ");
      echo form_checkbox("relocation", "on", ($relocation==1))."<br /><br />";
      echo form_label("Upload Photo")."<br />";
      echo form_upload("photo", "", "accept='.png, .jpg, .jpeg'")."<br /><br />";
      echo form_label("Upload Resume")."<br />";
      echo form_upload("resume", "", "accept='.doc, .docx, .pdf'")."<br /><br />";
      echo form_submit("save_profile", "Save Profile", "class='submit-button'");
      echo form_close();

    ?>



  </div>
  </div>
