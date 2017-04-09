<div class="right_col" role="main" style="min-height: 452px;">

        <div class="">
          <div class="page-title">
          
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Track Your Requests</h2>
                  
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <div class="col-xs-12">
                     <ul class="messages">
                      <li>
                       <div class="message_date">
                          <h3 class="date text-info"><?php echo $complaint['Date'] ?></h3>
                          <p class="month">May</p>
                        </div>
                        <div class="message_wrapper">
                            <h4 class="heading"><?php echo $this->users_model->GetNameFromID($complaint['Complainer_ID']); ?> <small> requested a fix </small> </h4>
                          <blockquote class="message"><?php echo $complaint['Description']; ?></blockquote>
                          <br>
                            <div class="col-sm-4">
                                <img src="<?php echo base_url(); ?>images/data.png" style="height: 250px;" class="img-responsive">
                            </div>
                            <div class="col-sm-4">
                                <iframe width="100%" height="250px" src="https://www.google.com/maps/embed/v1/place?q=<?php echo $complaint['latitude'] ?>,<?php echo $complaint['longitude'] ?>&key=AIzaSyABabbQe1oo6gMfZVyQYfrpM9BWv4YcJPg" allowfullscreen></iframe>
                            </div>
                            <div class="col-sm-4">
                                <img src="<?php echo base_url(); ?>images/data.png" style="height: 250px;" class="img-responsive">
                            </div>
                          <div class="clearfix"></div>
                          <div class="report container">
                              <h4>Status</h4>
                              <div class="sidebar-widget">
                                <div class="widget_summary">
                              <div class="w_left w_20">
                                <span>Start</span>
                              </div>
                              <div class="w_center w_55">
                                <div class="progress">
                                  <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
                                    <span class="sr-only">60% Complete</span>
                                  </div>
                                </div>
                              </div>
                              <div class="w_right w_20">
                                <span>Finish</span>
                              </div>
                              <div class="clearfix"></div>
                                    </div>
                             </div>
                              
                          </div>
                          <div class="clearfix"></div>
                          <div class="clearfix"></div>
                          <p>
                              100 people supported this cause.
                          </p>
                          <a class="btn btn-primary"><i class="fa fa-hand-o-up"></i> support </a>
                          
                          
                        </div>
                       </li>
                      </ul> 
                    <div class="col-md-4 col-sm-4 col-xs-12 animated fadeInDown">
                      <div class="well profile_view">
                        <div class="col-sm-12">
                        
                          <h4 class="brief"><i>Administrator</i></h4>
                          <?php 
                            if($complaint['Admin_ID'] != '0')
                            {
                            ?>
                          <div class="left col-xs-7">
                            <h2><?php echo $this->users_model->GetNameFromID($complaint['Admin_ID']); ?></h2>
                            <p><strong>About: </strong> Administrator. </p>
                            <ul class="list-unstyled">
                              <li><i class="fa fa-phone"></i> Phone : <a> 8152922218</a> </li>
                              

                            </ul>
                            <?php 
                            }
                            else {
                            ?>
                             Yet to assign

                            <?php
                            }
                            ?>
                          </div>
                          
                        </div>
                        
                      </div>
                    </div>
                     <div class="col-md-4 col-sm-4 col-xs-12 animated fadeInDown">
                      <div class="well profile_view">
                        <div class="col-sm-12">
                        
                          <h4 class="brief"><i>Worker</i></h4>
                          <?php 
                            if($complaint['Worker_ID'] != '0')
                            {
                            ?>
                          <div class="left col-xs-7">
                            <h2><?php echo $this->users_model->GetNameFromID($complaint['Worker_ID']); ?></h2>
                            <p><strong>About: </strong> Worker. </p>
                            <ul class="list-unstyled">
                              <li><i class="fa fa-phone"></i> Phone : <a> 8152922218</a> </li>
                              

                            </ul>
                            <?php 
                            }
                            else {
                            ?>
                             Yet to assign

                            <?php
                            }
                            ?>
                          </div>
                          
                        </div>
                        
                      </div>
                    </div>
                          
                  </div>
                </div>
              </div>
            </div>
          </div>
              <div class="clearfix"></div>
        </div>
            <div class="clearfix"></div>
        <!-- footer content -->
        <footer>
          <div class="copyright-info">
            <p class="pull-right">Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>  
            </p>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->

      </div>