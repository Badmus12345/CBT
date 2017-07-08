<?php include('../core/init.php');?>
<?php
  session_start();
  $db = new Database;
  if($_SESSION["admin-logged-in"] == true){
    $db->query("SELECT student_scores.*,classes.name AS class_name, exams.subject as subject_name FROM `student_scores`, `exams`, `classes` WHERE student_scores.class = classes.id AND student_scores.subject = exams.id");
    if($db->execute()){
      $results = $db->resultSet();
      $renderer->renderView("view_all_results", array("results"=>$results));
    }
  }
  else{
    die("You are not logged in");
  }
?>
