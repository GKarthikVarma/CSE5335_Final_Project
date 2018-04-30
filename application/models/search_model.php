<?php
  class Search_model extends CI_Model {
    public function __construct() {
      $this->load->database();
    }

    public function get_jobs_array($title, $location) {
      if(isset($title) == FALSE) $title = "";
      $loc = explode(",", $location);
      $title=trim(strtolower($title));
      $titleArray=explode(" ",$title);
      $loc[0]=trim($loc[0]);
      $loc[1]=trim($loc[1]);

      $sql = "SELECT * FROM jobs WHERE state='$loc[1]'";
      $query=$this->db->query($sql);
      $result_array = array();
      $scores_array = array();

      foreach($query->result_array() as $row) {
        $cityScore=$this->word_sim($loc[0], $row['city']);
        if($cityScore >= 0.8) {
          if($title=="") {
            array_push($scores_array, $cityScore);
            array_push($result_array, $row);
          } else {
            $dbTitleArray = explode(" ", trim(strtolower($row['job_title'])));
            $score = 0;
            foreach($titleArray as $query_word) {
              $maxScore = 0;
              foreach($dbTitleArray as $db_word) {
                $maxScore = max($maxScore, $this->word_sim($query_word, $db_word));
              }
              $score += $maxScore;
            }
            if($score >= 0.8*sizeof($titleArray)) {

              array_push($result_array, $row);
              array_push($scores_array, $score);
            }
          }
        }
      }

      array_multisort($scores_array, $result_array);

      return $result_array;
    }

    public function get_jobs_applied($uid) {
      $query=$this->db->query("SELECT job_id FROM job_student WHERE user_id=".$uid.";");
      $jobIds = array();
      foreach($query->result_array() as $jobRow) {
        array_push($jobIds, $jobRow['job_id']);
      }
      return $jobIds;
    }

    public function word_sim($word1, $word2) {
      $arr1=array();
      $arr2=array();

      /*Creating word maps*/
      for($i=0; $i<strlen($word1); $i++) {
        if(!array_key_exists($word1[$i], $arr1)) {
          $arr1[$word1[$i]]=1;
        } else {
          $arr1[$word1[$i]]++;
        }
      }
      for($i=0; $i<strlen($word2); $i++) {
        if(!array_key_exists($word2[$i], $arr2)) {
          $arr2[$word2[$i]]=1;
        } else {
          $arr2[$word2[$i]]++;
        }
      }

      return $this->cosine_sim($arr1, $arr2);
    }

    public function cosine_sim($arr1, $arr2) {
      return $this->dotp($arr1,$arr2)/sqrt($this->dotp($arr1,$arr1)*$this->dotp($arr2,$arr2));
    }

    public function dotp($arr1, $arr2) {
      $result = 0;

      foreach (array_keys($arr1) as $key1) {
        foreach (array_keys($arr2) as $key2) {
  	       if ($key1 === $key2) $result += $arr1[$key1] * $arr2[$key2];
        }
      }

      return $result;
    }
}



 ?>
