<div class='main-container'>
  <div class='profile-container'>
    <center>
      <h1>Create a Job Listing</h1>
    </center>
    <br /><br />
		<?php
			$states = array(
		    'AL'=>'Alabama',
		    'AK'=>'Alaska',
		    'AZ'=>'Arizona',
		    'AR'=>'Arkansas',
		    'CA'=>'California',
		    'CO'=>'Colorado',
		    'CT'=>'Connecticut',
		    'DE'=>'Delaware',
		    'DC'=>'District of Columbia',
		    'FL'=>'Florida',
		    'GA'=>'Georgia',
		    'HI'=>'Hawaii',
		    'ID'=>'Idaho',
		    'IL'=>'Illinois',
		    'IN'=>'Indiana',
		    'IA'=>'Iowa',
		    'KS'=>'Kansas',
		    'KY'=>'Kentucky',
		    'LA'=>'Louisiana',
		    'ME'=>'Maine',
		    'MD'=>'Maryland',
		    'MA'=>'Massachusetts',
		    'MI'=>'Michigan',
		    'MN'=>'Minnesota',
		    'MS'=>'Mississippi',
		    'MO'=>'Missouri',
		    'MT'=>'Montana',
		    'NE'=>'Nebraska',
		    'NV'=>'Nevada',
		    'NH'=>'New Hampshire',
		    'NJ'=>'New Jersey',
		    'NM'=>'New Mexico',
		    'NY'=>'New York',
		    'NC'=>'North Carolina',
		    'ND'=>'North Dakota',
		    'OH'=>'Ohio',
		    'OK'=>'Oklahoma',
		    'OR'=>'Oregon',
		    'PA'=>'Pennsylvania',
		    'RI'=>'Rhode Island',
		    'SC'=>'South Carolina',
		    'SD'=>'South Dakota',
		    'TN'=>'Tennessee',
		    'TX'=>'Texas',
		    'UT'=>'Utah',
		    'VT'=>'Vermont',
		    'VA'=>'Virginia',
		    'WA'=>'Washington',
		    'WV'=>'West Virginia',
		    'WI'=>'Wisconsin',
		    'WY'=>'Wyoming',
			);
			echo form_open("post_job", "class='formA'");
			echo form_label("Job Title")."<br />";
			echo form_input("title")."<span class='error-msg'>".form_error("title")."</span>"."<br /><br />";
			echo form_label("Company Name: ")."<br />";
			echo form_input("company")."<span class='error-msg'>".form_error("company")."</span>"."<br /><br />";
			echo form_label("Job Description (max 1024 chars)")."<br />";
			echo form_textarea("description")."<span class='error-msg'>".form_error("description")."</span>"."<br /><br />";
			echo form_label("City")."<br />";
			echo form_input("city")."<span class='error-msg'>".form_error("city")."</span>"."<br /><br />";
			echo form_label("State")."<br />";
			echo form_dropdown("state", $states)."<br /><br />";
			echo form_label("Skills (separate by comma)")."<br />";
			echo form_textarea("skills")."<span class='error-msg'>".form_error("skills")."</span>"."<br /><br />";
			echo form_label("Est. Salary (optional)")."<br />";
			echo form_input("salary")."<br /><br />";
			echo form_submit("submit", "Submit", "class='submit-button'");
			echo form_close();
		 ?>

  </div>
</div>
