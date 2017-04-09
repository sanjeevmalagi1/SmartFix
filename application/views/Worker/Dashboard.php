<div class="right_col" role="main" style="min-height: 452px;">

        <div class="">
          <div class="page-title">
            <div class="row top_tiles">
            <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile-stats well" style="min-height:100px;">
                <div class="icon"><i class="fa fa fa-map-marker"></i>
                </div>
                <div class="count"></div>

                <h3>Requests Near You </h3>
                <a class="btn" href="<?php echo base_url(); ?>index.php/User/Stories">Click here to see.</a>
              </div>
            </div>
            <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
             
              <div class="tile-stats well" style="min-height:100px;">
                <div class="icon"><i class="fa fa-eye"></i>
                </div>
                <div class="count"></div>

                <h3>Track Your Requests</h3>
                <a class="btn" href="<?php echo base_url(); ?>index.php/User/Requests">Click here to see.</a>
              </div>
             </a>
            </div>
            <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <div class="tile-stats well" style="min-height:100px;">
                <div class="icon"><i class="fa fa-plus"></i>
                </div>
                <div class="count"></div>

                <h3>Make a new Request</h3>
                <a class="btn" href="<?php echo base_url(); ?>index.php/Operations/AddComplaint">Click here</a>
              </div>
            </div>
           </div>
          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>User Report <small>Activity report</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a href="#"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <div class="col-xs-12">

                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class=""><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="flase">Requests Near You</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Your Requests</a>
                        </li>
                        <li role="presentation" class="active"><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Track Your Requests</a>
                        </li>
                      </ul>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                          <!-- start recent activity -->
                          <ul class="messages">
                            <!--li>
                              <img src="images/img.jpg" class="avatar" alt="Avatar">
                              <div class="message_date">
                                <h3 class="date text-info">24</h3>
                                <p class="month">May</p>
                              </div>
                              <div class="message_wrapper">
                                <h4 class="heading">Desmond Davison</h4>
                                <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                <br>
                                <p class="url">
                                  <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                  <a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc </a>
                                </p>
                              </div>
                            </li-->
                            <?php 
                                $this->load->view('Templates/activity');
                                $this->load->view('Templates/activity');
                                
                            ?>

                          </ul>
                          <!-- end recent activity -->

                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                         <ul class="messages">
                            
                            <?php 
                                $this->load->view('Templates/activity');
                                $this->load->view('Templates/activity');
                                $this->load->view('Templates/activity');
                                $this->load->view('Templates/activity');
                                
                            ?>

                          </ul>

                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                           <!-- start user projects -->
                          <table class="data table table-striped no-margin">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Description</th>
                                <th>Address</th>
                                <th class="hidden-phone">Date</th>
                                <th>Progress</th>
                                <th>Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>Please fix the hole it is very smelly</td>
                                <td>88/1,KR Road, VV Puram, Banglore.
                                    <a class="btn">See Map</a>
                                </td>
                                <td class="hidden-phone">12-2-1016</td>
                                <td class="vertical-align-mid">
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-success" data-transitiongoal="35" aria-valuenow="35" style="width: 35%;"></div>
                                  </div>
                                </td>
                                <td>
                                    <a class="btn btn-danger">Cancel</a>
                                </td>
                              </tr>
                              <tr>
                                <td>1</td>
                                <td>Please fix the hole it is very smelly</td>
                                <td>88/1,KR Road, VV Puram, Banglore.
                                    <a class="btn">See Map</a>
                                </td>
                                <td class="hidden-phone">12-2-1016</td>
                                <td class="vertical-align-mid">
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-success" data-transitiongoal="35" aria-valuenow="35" style="width: 35%;"></div>
                                  </div>
                                </td>
                                <td>
                                    <a class="btn btn-danger">Cancel</a>
                                </td>
                              </tr>
                              <tr>
                                <td>1</td>
                                <td>Please fix the hole it is very smelly</td>
                                <td>88/1,KR Road, VV Puram, Banglore.
                                    <a class="btn">See Map</a>
                                </td>
                                <td class="hidden-phone">12-2-1016</td>
                                <td class="vertical-align-mid">
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-success" data-transitiongoal="35" aria-valuenow="35" style="width: 35%;"></div>
                                  </div>
                                </td>
                                <td>
                                    <a class="btn btn-danger">Cancel</a>
                                </td>
                              </tr>
                              
                            </tbody>
                          </table>
                          <!-- end user projects -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

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