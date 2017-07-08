<?php include('actions/find_questions.php');?>
<div class="section section-custom" id="inbox">

      <!-- section content start-->
      <div class="section-inner" id = "section-inner">
        <div class="row">
          <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
                        <div class="mailbox">
                          <div class="action-bar row">
                            <div class="col-lg-6 col-xs-4">

                              </div>
                <div class="col-lg-6 col-xs-8">
                  <div class="form-group icon-right">
                    <div class="floatinglabels pmd-textfield">
                      <form action = "actions/find_questions.php">
                        <input type="text" placeholder="Search..." name = "searchBox" id = "searchBox" class="form-control">
                      </form>
                      <span class="dic dic-search">&nbsp;</span>
                    </div>
                  </div>
                  <script src = "assets/js/new_admin_script.js" type = "text/javascript"></script>
                </div>
                          </div>

                          <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="inbox">
                  <form method = "post" id = "delete" action = "actions/delete.php">
                    <ul class="list-group pmd-z-depth pmd-list-twoline card-wp">

                      <?php foreach($results as $exam):?>
                      <li class="list-group-item unread">
                        <a href="javascript:void(0);">
                          <div class="media-left media-check">
                            <input type="checkbox" name = "<?php echo $exam->id;?>">
													</div>
                        <div class="media-left user-details">
                          <span class="avatar-list-img40x40"><img alt="40x40" class="img-responsive" src="assets/images/avatar-icon-40x40.png" data-holder-rendered="true"></span>
                          <div class="avtar-detail">
                            <h3 class="list-group-item-heading">Number of Questions&nbsp;<span>(<?php echo $exam->numberOfQuestions;?>)</span></h3>
                            <span class="list-group-item-text"><?php echo $exam->subject;?></span>
                          </div>
                        </div>
                        <div class="media-body media-middle">
                          <div class="message-detail">
                            <h3 class="list-group-item-heading"><?php echo $exam->subject;?>&nbsp;<span> - <?php echo $exam->subject;?> test for <?php echo $exam->name;?>, <?php echo $exam->numberOfQuestions;?> questions total.</span></h3>
                          </div>
                        </div>
                        <div class="media-right media-top">
                          <span class="date-time"><?php echo $exam->name;?></span>
                        </div>
                        </a>
                      </li>
                    <?php endforeach;?>
                    </ul>


                    <div tabindex="-1" class="modal fade" id="complete-dialog" style="display: none;" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h2 class="pmd-card-title-text">Are You Sure You Want To Delete?</h2>
                          </div>
                          <div class="modal-body">
                            <p>Are you sure you want to delete this set of exam questions? </p>
                          </div>
                          <div class="pmd-modal-action pmd-modal-bordered text-right">
                            <button class="btn pmd-btn-flat pmd-ripple-effect btn-primary" id="delete-yes-button" type="submit">Yes</button>
                            <a data-dismiss="modal" class="btn pmd-btn-flat pmd-ripple-effect btn-default">No</a>
                          </div>
                        </div>
                      </div>
                    </div>

                  </form>
                  <button data-target="#complete-dialog" data-toggle="modal" class="btn pmd-ripple-effect btn-primary pmd-z-depth pull-right add-del-button" type="button">Delete</button>
                    <button data-target="#form-dialog" data-toggle="modal" class="btn pmd-ripple-effect btn-primary pmd-z-depth pull-right add-del-button" type="button">Add</button>
                    <div tabindex="-1" class="modal fade" id="form-dialog" style="display: none;" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header bordered">
                            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                            <h2 class="pmd-card-title-text">Form Modal</h2>
                          </div>
                          <div class="modal-body">
                            <form class="form-horizontal">
                              <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label for="first-name">Subject</label>
                                <input type="text" class="mat-input form-control" id="name" value="">
                              </div>
                              <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label for="first-name">Class</label>
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <select class="select-simple form-control pmd-select2">
                    									<option></option>
                    									<option>Jss 1</option>
                    									<option>Jss 2</option>
                    									<option>Jss 3</option>
                    									<option>Sss 1</option>
                    									<option>Sss 2</option>
                    									<option>Sss 3</option>
                    								</select>
                                </div>
                              </div>
                              <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label for="first-name">Time Allowed (in minutes)</label>
                                <input type="text" class="mat-input form-control" id="email" value="">
                              </div>
                              <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label for="first-name" class = "pull-right">Questions File (word document)</label>
                                <input type="file" class="mat-input form-control" id="email" value="">
                              </div>
                            </form>
                          </div>
                          <div class="pmd-modal-action">
                            <button data-dismiss="modal"  class="btn pmd-ripple-effect btn-primary" type="button">Save</button>
                            <button data-dismiss="modal"  class="btn pmd-ripple-effect btn-default" type="button">Discard</button>
                          </div>
                        </div>
                      </div>
                    </div>


                </div>
                <!-- Inbox -->
               </div>
                      </div>
                </div>
        </div>
      </div> <!-- section content end -->
    </div>
