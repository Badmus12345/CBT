<?php include('../core/init.php')?>
<?php
  $subject = $_POST["subject"];
  $class = $_POST["class"];
  $time_allowed = $_POST["time_allowed"];

  $db = new Database;
  $db->query("INSERT INTO exams (subject, class, numberOfQuestions, timeallowed) VALUES (:subject, :class, :numberOfQuestions, :timeallowed)");
  $db->bind(":subject", $subject);
  $db->bind(":class", $class);
  $db->bind(":numberOfQuestions", 40);
  $db->bind(":timeallowed", $time_allowed);
  if($db->execute()){
      Header("Location: manage_questions.php");
  }
  else{
      echo "unsuccessful";
  }
?>
