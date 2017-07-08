<?php include('../core/init.php');?>
<?php
  session_start();
  $db = new Database;
  $id = $_SESSION["id"];
  $db->query("SELECT student_scores.name, student_scores.class, exams.subject, exams.id, exams.numberOfQuestions, exams.timeallowed FROM student_scores, exams WHERE student_scores.id = :id AND exams.class = student_scores.class");
  $db->bind(":id", $id);
  if($db->execute()){
    $results = $db->resultset();
    if ($results != null){
      $student = $db->single();
      $db->query("SELECT * FROM classes WHERE id = :id");
      $db->bind(":id", $student->class);
      $class = $db->single();
      $renderer->renderView("available-exams", array("results"=>$results, "student_info"=>$student, "class"=>$class->name));
    }
    else{
      $renderer->renderView("available-exams", array("results"=>$results, "student_info"=>null));
    }

  }
?>
