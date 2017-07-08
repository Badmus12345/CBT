<?php include('../core/init.php');?>
<?php
  session_start();
  if($_SESSION["admin-logged-in"] != true){
    die("not-logged-in");
  }
  $db = new Database;
  foreach($_POST as $key=>$value){
    $db->query("DELETE FROM `questions` WHERE exam_id=:examId");
    $db->bind(":examId", $key);
    $db->execute();
    $db->query("DELETE FROM  `exams` WHERE id = :examId");
    $db->bind(":examId", $key);
    $db->execute();
    Header("Location: manage_questions.php");
  }
?>
