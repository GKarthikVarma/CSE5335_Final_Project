<?php

session_start();

?>

<?php
	include_once 'header_login.php';
?>

<div class="main-container" action="search_student.php" method="POST">
<center>
<h1>Search for Students</h1>
<form class="search-form" action="" method="POST" target="_parent">
	<input type="text" id="student-skills" name="student-skills" placeholder="Student Skills"></input>
	<button type="submit" name="search">Search</button>
</form>
</center>
</div>

<?php
if (isset($_POST['search'])){
	include 'background/dbh.php';

	$skills = $_POST['student-skills'];

	if (empty($skills)){
		header("Location: search_student.php?search=emptyfields");
	} else{
			$loc = explode(",", $skills);
			$sql = "SELECT * FROM students";
		}

			$result = mysqli_query($connection, $sql);
			$resultcheck = mysqli_num_rows($result);
			if ($resultcheck < 1){
				header("Location: search_student.php?search=no_result_found");
				exit();
			} else {
				echo "<div class='main-container'>";
    			echo "<div id='job-listings'>";
      			echo "<table id='jobs'>";
        		echo "<tr>";
          		echo "<th>Studnet Name</th>";
          		echo "<th>Graduation Semester</th>";
          		echo "<th>Graduation Year</th>";
          		echo "<th>Skills</th>";
          		echo "<th>Resume</th>";
          		while($row = mysqli_fetch_assoc($result)) {
				$size_of_input = sizeof($loc);
				$student_skills = explode(",", $row['user_skills']);
				$size_of_student = sizeof($student_skills);
				$result_compare = array_intersect($loc, $student_skills);
				$size_of_result = sizeof($result_compare);
				if($size_of_result > 0){

					echo "<tr>\n";
					echo "<td>".ucfirst($row['user_first'])." ".ucfirst($row['user_last'])."</td>";
					echo "<td>".ucfirst($row['user_graduation_semester'])."</td>";
					echo "<td>".$row['user_graduation_year']."</td>";
					echo "<td>".$row['user_skills']."</td>";
					echo "<td><a href='uploads/".$row['user_resume']."'>View Resume</a></td>";
				}		
				}

			}
	}


?>

<?php
	include_once '../footer.php';
?>
