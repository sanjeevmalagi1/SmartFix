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
                             <?php
                             $count=0;
                             foreach ($Complaints as $Complaint) {
                             
                             ?>   
                              <tr>
                                <td><?php echo ++$count; ?></td>
                                <td><?php echo $Complaint['Description']; ?></td>
                                <td><?php echo $Complaint['Address']; ?></td>
                                <td class="hidden-phone"><?php echo $Complaint['Date']; ?></td>
                                <td class="vertical-align-mid">
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-success" data-transitiongoal="35" aria-valuenow="35" style="width: 35%;"></div>
                                  </div>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/Operations/View/<?php echo $Complaint['ID']; ?>">View</a>
                                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                          <span class="caret"></span>
                                          <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                          <li><a href="<?php echo base_url(); ?>index.php/Operations/Assign/<?php echo $Complaint['ID']; ?>">Assign Worker</a>
                                          </li>
                                          <li><a href="#">Mark as Spam</a>
                                          </li>
                                          
                                        </ul>
                                    </div>
                                </td>
                              </tr>
                              <?php 
                             }
                              ?>
                              
                              
                            </tbody>
                          </table>
                          <!-- end user projects -->    
                   
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