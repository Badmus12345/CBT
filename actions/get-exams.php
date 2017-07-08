<?php
  $db = new Database;
  $db->query("SELECT exams.*, classes.name FROM exams, classes WHERE classes.id = exams.class");
  if($db->execute()){
    $results = $db->resultset();
  }
?>
