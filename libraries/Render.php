<?php
  class Render{
    public function renderView($viewName, $args = array()){
      include('args.php');
      include('../assets/includes/header.php');
      include('../views/'.$viewName.'.php');
      include('../assets/includes/footer.php');
    }
  }
?>
