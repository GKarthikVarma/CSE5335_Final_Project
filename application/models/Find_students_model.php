<?php
  class Find_students_model extends CI_Model {
    public function __construct() {
      $this->load->database();
    }

    public function get_students_by_skill($skills) {
      $skillsExploded = explode(",", $skills);
      $skillsArray = array();
      foreach($skillsExploded as $skill) {
        array_push($skillsArray, strtolower(trim($skill)));
      }
      $query=$this->db->query("SELECT * FROM students;");
      $resultArray = array();
      for($i=1; $i<=sizeof($skillsArray); $i++) {
        $resultArray[$i]=array();
      }
      foreach($query->result_array() as $student) {
        $studentSkillsExploded = explode(",", $student['user_skills']);
        $studentSkillsArray = array();
        foreach($studentSkillsExploded as $studentSkill) {
          array_push($studentSkillsArray, strtolower(trim($studentSkill)));
        }
        $similarSkills = array_intersect($studentSkillsArray, $skillsArray);
        $score=sizeof($similarSkills);
        if($score > 0) {
          array_push($resultArray[$score], $student);
        }
      }

      return $resultArray;
    }
}



 ?>
