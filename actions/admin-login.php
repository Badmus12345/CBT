<?php include('../core/init.php');?>
<?php
  session_start();
  $db = new Database;
  $db->query("SELECT * FROM admin WHERE username=:username AND password=:password");
  $db->bind(':username', $_POST["username"]);
  $db->bind(':password', md5($_POST["password"]));
  $db->execute();
  if($db->single()){
    $_SESSION["admin-logged-in"] = true;
    Header("Location: manage_questions.php");
  }
  else{
    echo "0";
  }

?>
