<div class="section section-custom" id="inbox">

      <!-- section content start-->
      <div class="section-inner" id = "section-inner">
        <div class="row">
          <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
                        <div class="mailbox">
                          <div class="action-bar row">
                            <div class="col-lg-6 col-xs-4">
                              <?php if($args["student_info"] != null):?>
                                <h1>Availabe exams for <?php echo ucfirst($args["student_info"]->name);?>, <?php echo $args["class"];?></h1>
                              <?php else:?>
                                <h1>There are no available exams for the currently logged in user!</h1>
                              <?php endif;?>
                              </div>
                          </div>

                          <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="inbox">
                    <ul class="list-group pmd-z-depth pmd-list-twoline card-wp">
                      <?php $i = 0;?>
                      <?php foreach($args["results"] as $result):?>
                        <li class="list-group-item unread">
                          <a href="../actions/get-exam-questions.php?exam_id=<?php echo $result->id;?>">
                          <div class="media-left user-details">
                            <span class="avatar-list-img40x40"><img alt="40x40" class="img-responsive" src="../assets/images/avatar-icon-40x40.png" data-holder-rendered="true"></span>
                            <div class="avtar-detail">
                              <h3 class="list-group-item-heading">Number of Questions&nbsp;<span>(<?php echo $result->numberOfQuestions;?>)</span></h3>
                              <span class="list-group-item-text"><?php echo ucfirst($result->subject);?></span>
                            </div>
                          </div>
                          <div class="media-body media-middle">
                            <div class="message-detail">
                              <h3 class="list-group-item-heading"><?php echo ucfirst($result->subject);?>&nbsp;<span> - <?php echo ucfirst($result->subject);?> test for <?php echo $args["class"];?>, <?php echo $result->numberOfQuestions;?> questions total.</span></h3>
                            </div>
                          </div>
                          <div class="media-right media-top">
                            <span class="date-time"><?php echo $args["class"];?></span>
                          </div>
                          </a>
                          <?php if($i != sizeof($args["results"]) - 1):?>
                            <hr>
                          <?php endif;?>
                        </li>
                        <?php $i++;?>
                      <?php endforeach;?>
                    </ul>
                </div>
                <!-- Inbox -->
               </div>
                      </div>
                </div>
        </div>
      </div> <!-- section content end -->
    </div>
