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
                                <th>Date</th>
                                <th>Progress</th>
                                <th>Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                             <?php
                             $count=0;
                             foreach ($Requests as $Request) {
                             
                             ?>   
                              <tr>
                                <td><?php echo ++$count; ?></td>
                                <td><?php echo $Request['Description']; ?></td>
                                <td><?php echo $Request['Address']; ?></td>
                                <td><?php echo $Request['Date']; ?></td>
                                <td class="vertical-align-mid">
                                    <?php echo $Request['Status']; ?>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-success" data-transitiongoal="35" aria-valuenow="35" style="width: 35%;"></div>
                                  </div>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        
                                        <a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/Operations/View/<?php echo $Request['ID']; ?>">View</a>
                                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                          <span class="caret"></span>
                                          <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                          <?php 
                                            if($Request['Status']=="complete")
                                            {
                                          ?>  
                                            <li><a href="<?php echo base_url(); ?>index.php/Operations/ConfirmComplete/<?php echo $Request['ID']; ?>">Complete Confirm</a>
                                          </li>
                                          <?php
                                            }
                                          ?>
                                          <?php 
                                            if($Request['Status']=="active")
                                            {
                                          ?>
                                          <li><a href="<?php echo base_url(); ?>index.php/Operations/CancelRequest/<?php echo $Request['ID']; ?>">Cancel Request</a>
                                          </li>
                                          <?php
                                            }
                                          ?>
                                          <li><a data-toggle="modal" data-target=".bs-example-modal-lg">Report Ignorance</a>
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
            
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
          </button>
          <h4 class="modal-title" id="myModalLabel">Modal title</h4>
        </div>
        <div class="modal-body">
          <h4>Text in a modal</h4>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
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