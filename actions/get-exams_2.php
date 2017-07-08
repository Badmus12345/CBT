<?php include('init.php');?>
<?php
  session_start();
  if($_SESSION["admin-logged-in"] != true){
    die("not-logged-in");
  }
  $db = new Database;
  if(isset($_POST["search"])){
    $db->query("SELECT exams.*, classes.name FROM exams, classes WHERE classes.id = exams.class AND exams.subject LIKE :exam");
    $db->bind(":exam", $_POST["search"]);
  }
  else{
    $db->query("SELECT exams.*, classes.name FROM exams, classes WHERE classes.id = exams.class");
  }
  if($db->execute()){
    $results = $db->resultset();
  }
?>
