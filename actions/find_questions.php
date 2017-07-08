<?php include('../core/init.php');?>
<?php
  session_start();
  if($_SESSION["admin-logged-in"] != true){
    die("not-logged-in");
  }
  $db = new Database;
  $db->query("SELECT exams.*, classes.name FROM exams, classes WHERE classes.id = exams.class AND exams LIKE :subject");
  $db->bind(":subject", $_POST["searchBox"]);
  if($db->execute()){
    $results = $db->resultset();
  }
?>
