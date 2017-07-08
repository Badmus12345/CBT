<div style = "text-align: center; margin: 20px;">
  <?php foreach($args["results"] as $student):?>
    <a style = "font-size: 16px;" href = "../actions/view_one_result.php?id=<?php echo $student->id;?>">Result for: <?php echo $student->name;?>, <?php echo $student->class_name;?>, <?php echo $student->subject_name;?></a>
    <hr/>
  <?php endforeach?>
</div>
