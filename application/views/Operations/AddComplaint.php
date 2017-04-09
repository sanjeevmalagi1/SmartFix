<div class="right_col" role="main" style="min-height: 236px;">

        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Complaint Form</h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>

          <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2> Show Us Your Problem <small>We will fix it!!</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
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
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">


                  <!-- Smart Wizard -->
                  <p>This is a basic form wizard example that inherits the colors from the selected scheme.</p>
                  <div id="wizard" class="form_wizard wizard_horizontal">
                    <ul class="wizard_steps anchor">
                      <li>
                        <a href="#step-1" class="selected" isdone="1" rel="1">
                          <span class="step_no">1</span>
                          <span class="step_descr">
                                            Step 1<br>
                                            <small>Select Location</small>
                                        </span>
                        </a>
                      </li>
                      <li>
                        <a href="#step-2" class="done" isdone="1" rel="2">
                          <span class="step_no">2</span>
                          <span class="step_descr">
                                            Step 2<br>
                                            <small>Add Description</small>
                                        </span>
                        </a>
                      </li>
                      <li>
                        <a href="#step-3" class="done" isdone="1" rel="3">
                          <span class="step_no">3</span>
                          <span class="step_descr">
                                            Step 3<br>
                                            <small>Verify</small>
                                        </span>
                        </a>
                      </li>
                      
                    </ul>
                    
                    
                    
                    

                  <div class="stepContainer">
                      <div id="step-1" class="wizard_content" style="display: block;">
                      <h2 class="StepTitle">Select Location</h2>
                      <fieldset>
  <input id="start" value="Paris"> 
  
  <input type="button" value="GO" onclick="calcRoute()">
</fieldset>

<input type="button" value="Drop Pin" onclick="dropPin()"> Drop a marker on the center of your map<br>

<div id="map"></div>
<style>
#map {
  height: 400px;
}
</style>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();
var map;
var endMarker;

function initialize() {
  directionsDisplay = new google.maps.DirectionsRenderer();
  var paris = new google.maps.LatLng(48.86100157399595,2.335891842842086);
  var mapOptions = {
    zoom: 7,
    center: paris
  }
  map = new google.maps.Map(document.getElementById("map"), mapOptions);
  directionsDisplay.setMap(map);
}

function dropPin() {
  // if any previous marker exists, let's first remove it from the map
  if (endMarker) {
    endMarker.setMap(null);
  }
  // create the marker
  endMarker = new google.maps.Marker({
    position: map.getCenter(),
    map: map,
    draggable: true,
  });
  copyMarkerpositionToInput();
  // add an event "onDrag"
  google.maps.event.addListener(endMarker, 'dragend', function() {
    copyMarkerpositionToInput();
  });
}

function copyMarkerpositionToInput() {
  // get the position of the marker, and set it as the value of input
  document.getElementById("lat").value = endMarker.getPosition().lat();
  document.getElementById("lng").value = endMarker.getPosition().lng();
}

function calcRoute() {
  var start = document.getElementById("start").value;
  var end = document.getElementById("end").value;
  var request = {
    origin:start,
    destination:end,
    travelMode: google.maps.TravelMode.DRIVING
  };
  directionsService.route(request, function(result, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(result);
    }
  });
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
                      </div>
                      <div id="step-2" class="wizard_content" style="display: none;">
                      <h2 class="StepTitle">Step 2 Content</h2>
                      
                      <div class="profile_img">

                      <!-- end of image cropping -->
                      <div id="crop-avatar">
                        <!-- Current avatar -->
                        <div class="avatar-view" title="" data-original-title="Change the avatar" aria-describedby="tooltip769815">
                            <p class="btn btn-primary">Click here to add Image</p>
                        </div>

                        <!-- Cropping modal -->
                        <div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1" style="display: none;">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <form class="avatar-form" action="crop.php" enctype="multipart/form-data" method="post">
                                <div class="modal-header">
                                  <button class="close" data-dismiss="modal" type="button">×</button>
                                  <h4 class="modal-title" id="avatar-modal-label">Add Image</h4>
                                </div>
                                <div class="modal-body">
                                    <form method="POST">
                                  <div class="avatar-body">

                                    <!-- Upload image and data -->
                                    <div class="avatar-upload">
                                      <input class="avatar-src" name="avatar_src" type="hidden">
                                      <input class="avatar-data" name="avatar_data" type="hidden">
                                      <label for="avatarInput">Local upload</label>
                                      <input class="avatar-input" id="avatarInput" name="avatar_file" type="file">
                                    </div>

                                    <!-- Crop and preview -->
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="avatar-wrapper"></div>
                                      </div>
                                      
                                    </div>

                                    <div class="row avatar-btns">
                                      <div class="col-md-9">
                                        <div class="btn-group">
                                          <button class="btn btn-primary" data-method="rotate" data-option="-90" type="button" title="Rotate -90 degrees">Rotate Left</button>
                                          <button class="btn btn-primary" data-method="rotate" data-option="-15" type="button">-15deg</button>
                                          <button class="btn btn-primary" data-method="rotate" data-option="-30" type="button">-30deg</button>
                                          <button class="btn btn-primary" data-method="rotate" data-option="-45" type="button">-45deg</button>
                                        </div>
                                        <div class="btn-group">
                                          <button class="btn btn-primary" data-method="rotate" data-option="90" type="button" title="Rotate 90 degrees">Rotate Right</button>
                                          <button class="btn btn-primary" data-method="rotate" data-option="15" type="button">15deg</button>
                                          <button class="btn btn-primary" data-method="rotate" data-option="30" type="button">30deg</button>
                                          <button class="btn btn-primary" data-method="rotate" data-option="45" type="button">45deg</button>
                                        </div>
                                      </div>
                                      <div class="col-md-3">
                                        <button class="btn btn-primary btn-block avatar-save" type="submit">Done</button>
                                      </div>
                                    </div>
                                  </div>
                                    </form>
                                </div>
                                <!-- <div class="modal-footer">
                                                  <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
                                                </div> -->
                              </form>
                            </div>
                              
                          </div>
                        </div>
                        <!-- /.modal -->

                        <!-- Loading state -->
                        <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
                      </div>
                      <!-- end of image cropping -->

                    </div>
                      
                    </div><div id="step-3" class="wizard_content" style="display: none;">
                        <form class="form-horizontal form-label-left" method="POST">

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Description Of Problem :  <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <textarea name="description" class="resizable_textarea form-control" style="width: 100%; overflow: hidden; word-wrap: break-word; resize: horizontal; min-height: 50px;"></textarea>
                          </div>
                        </div>
                            <input name="latitude" id="lat" type="hidden"> 
                            <input name="longitude" id="lng" type="hidden"> 
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Address :
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="address" required="required" type="text" class="form-control" id="searchTextField">
                          </div>
                        </div>  
                        
                        <div class="form-group text-center">
                          <button type="submit" class="btn btn-default">Register Complaint</button>
                        </div>  
                          
                      </form>
                    </div>
                 </div>
                      
                  </div>
                  <!-- End SmartWizard Content -->

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