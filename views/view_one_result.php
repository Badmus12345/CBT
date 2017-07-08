<div class="section section-custom" id="inbox">

    <!-- section content start-->
    <div class="section-inner" id = "section-inner">
      <div class="row">
        <h1>Exam Results for <?php echo $args["results"][0]->name;?>, <?php echo $args["results"][0]->class_name;?>, <?php echo $args["results"][0]->subject_name;?> </h1>
        <?php
          $score = $args["results"][0]->score;
          $total_questions = $args["results"][0]->total_questions;
          $percentage = ($score / $total_questions) * 100;
        ?>
        <?php if(($score/$total_questions) > 0.5):?>
          <h2><?php echo $args["results"][0]->name;?> passed</h2>
        <?php else:?>
          <h2><?php echo $args["results"][0]->name;?> failed</h2>
        <?php endif;?>
        <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">

                        <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="inbox">
                  <ul class="list-group pmd-z-depth pmd-list-twoline card-wp">
                    <li class="list-group-item unread" id = "question-box">
                      <label>Score: <?php echo $args["results"][0]->score;?> out of <?php echo $args["results"][0]->total_questions;?> questions (<?php echo $percentage;?>%)</label>
                      <div class="progress-rounded progress">
                        <?php if($percentage > 50):?>
                          <div class="progress-bar progress-bar-success" style="width: <?php echo $percentage;?>%;"></div>
                        <?php else:?>
                          <div class="progress-bar progress-bar-danger" style="width: <?php echo $percentage;?>%;"></div>
                        <?php endif;?>
                      </div>
                    </li>
                  </ul>
              </div>
              <!-- Inbox -->
             </div>
              </div>
      </div>
    </div> <!-- section content end -->
  </div>
