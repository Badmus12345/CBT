<?php
  include('../core/init.php');
  if(isset($_GET["id"])){
    session_start();
    $db = new Database;
    $id = $_GET["id"];
    if($_SESSION["admin-logged-in"] == true){
      $db->query("SELECT student_scores.*,classes.name AS class_name, exams.subject as subject_name FROM `student_scores`, `exams`, `classes` WHERE student_scores.class = classes.id AND student_scores.subject = exams.id AND student_scores.id = :id");
      $db->bind(":id", $id);
      if($db->execute()){
        $results = $db->resultset();
        $renderer->renderView("view_one_result", array("results"=>$results));
      }
    }
    else{
      die("Admin is not logged in");
    }
  }
?>
