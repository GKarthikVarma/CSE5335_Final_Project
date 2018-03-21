
<?php
	include_once 'header_login.php';
?>


  <div class="main-container">
    <div id='sidebar'>
      <center>
        Recruiter Name<br /><br />
        Recruiter email<br /><br />
        <a href="edit_recruiter_profile.php">Edit</a></center>
    </div>
    <div id='job-listings'>
      <table id='jobs'>
        <tr>
          <th>Job Title</th>
          <th>Company</th>
          <th>Location</th>
          <th></th>
        </tr>
        <tr>
          <td>Entry Level Java Developer</td>
          <td>Venmo</td>
          <td>Santa Monica, CA</td>
          <td><a href="edit_listing.php">Edit</a></td>
        </tr>
        <tr>
          <td>Entry Level Front End Developer</td>
          <td>PayPal</td>
          <td>Austin, TX</td>
          <td><a href="edit_listing.php">Edit</a></td>
        </tr>
        <tr>
          <td>Social Media Marketer</td>
          <td>PayPal</td>
          <td>Austin, TX</td>
          <td><a href="edit_listing.php">Edit</a></td>
        </tr>
        <tr>
          <td>Human Resources Internship</td>
          <td>American Airlines</td>
          <td>Dallas, TX</td>
          <td><a href="edit_listing.php">Edit</a></td>
        </tr>
      </table>

    </div>
  </div>

  <?php include_once 'footer.php' ?>
