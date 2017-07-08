<?php include('../core/init.php');?>
<?php
  session_start();
  $db = new Database;
  $db->query("SELECT * FROM `student_scores` WHERE name=:name AND class=:class");
  $db->bind(":name", $_POST["full_name"]);
  $db->bind(":class", $_POST["class"]);
  $student = $db->resultset();
  if($student){
    foreach($student as $stud){
      if($stud->subject != NULL){
        $db->query("INSERT INTO `student_scores` (name, class) VALUES (:name, :class)");
        $db->bind(':name', $_POST["full_name"]);
        $db->bind(':class', $_POST["class"]);
        if($db->execute()){
          $_SESSION["id"] = $db->lastInsertId();
          Header("Location: get-available-exams.php");
        }
      }
      else{
        $_SESSION["id"] = $stud->id;
        Header("Location: get-available-exams.php");
      }
    }
  }
  else{
    $db->query("INSERT INTO `student_scores` (name, class) VALUES (:name, :class)");
    $db->bind(':name', $_POST["full_name"]);
    $db->bind(':class', $_POST["class"]);
    if($db->execute()){
      $_SESSION['id'] = $db->lastInsertId();
      Header("Location: get-available-exams.php");
    }

  }


?>
