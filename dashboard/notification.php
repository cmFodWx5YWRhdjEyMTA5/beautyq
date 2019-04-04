<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
<title>BeautyQ | Fidelizar é uma Beleza</title>

<!-- Favicon -->
<link rel="shortcut icon" href="assets/images/logo/favicon.png">

<!-- plugins css -->
<link rel="stylesheet" href="assets/vendors/bootstrap/dist/css/bootstrap.css" />
<link rel="stylesheet" href="assets/vendors/PACE/themes/blue/pace-theme-minimal.css" />
<link rel="stylesheet" href="assets/vendors/perfect-scrollbar/css/perfect-scrollbar.min.css" />

<!-- page plugins css -->
<link rel="stylesheet" href="assets/css/sweetalert.css" />
<link rel="stylesheet" href="assets/vendors/selectize/dist/css/selectize.default.css" />

<!-- core css -->
<link href="assets/css/ei-icon.css" rel="stylesheet">
<link href="assets/css/themify-icons.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<link href="assets/css/animate.min.css" rel="stylesheet">
<link href="assets/css/app.css" rel="stylesheet">

</head>

<body>
  <div class="app ide-nav-default header-info">
    <div class="layout">

      <?php include("common/side-nav.php")?>
      
      <!-- Page Container START -->
      <div class="page-container">
      
        <?php include("common/header.php")?>
        
        <!-- Content Wrapper START -->
        <div class="main-content">
          <div class="container-fluid">
            <div class="page-title"><h4>Notification</h4></div>
            
            <div class="row">
              <div class="col-md-6">
                <div class="card">
                  <div class="card-block">
                    <h4 class="card-title">Noty</h4>
                    <p class="width-90 mrg-btm-30">NOTY is a notification library that makes it easy to create alert - success - error - warning - information - confirmation messages as an alternative the standard alert dialog.</p>
                    
                    <div class="row">
                      <div class="col-md-7">
                        <div class="mrg-btm-20">
                          <label for="noty-messenger-type">Type</label>
                          <select id="noty-messenger-type" class="noty-selectize-config">
                            <option value="Information">Information</option>
                            <option value="Success">Success</option>
                            <option value="Error">Error</option>
                            <option value="Warning">Warning</option>
                            <option value="Confirm">Confirm</option>
                          </select>
                        </div>
                        
                        <div class="mrg-btm-20">
                          <label for="noty-position">Position</label>
                          <select id="noty-position" class="noty-selectize-config">
                            <option value="topRight">Top Right</option>
                            <option value="top">Top</option>
                            <option value="topLeft">Top Left</option>
                            <option value="bottomLeft">Bottom Left</option>
                            <option value="bottom">Bottom</option>
                            <option value="bottomRight">Bottom Right</option>
                          </select>
                        </div>
                        
                        <div class="mrg-btm-20">
                          <label class="control-label" for="noty-message">Message</label>
                          <textarea class="form-control" id="noty-message" rows="2" placeholder="Type your message ..."></textarea>
                          <div class="mrg-top-20">
                            <button class="btn btn-primary show-noty"><span>Trigger</span></button></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-block">
                      <h4 class="card-title">Sweet Alert</h4>
                      <p>Sweetalert is a beautiful replacement for JavaScript "alert"</p>
                      <p>SweetAlert automatically centers itself on the page and looks great no matter if you're using a desktop computer, mobile or tablet. It's even highly customizeable, as you can see below!</p>
                      
                      <div class="mrg-top-20 mrg-btm-30">
                        <button class="btn btn-default btn-rounded swal-simple">Simple Message</button>
                        <button class="btn btn-primary btn-rounded swal-with-text">With Text</button>
                        <button class="btn btn-success btn-rounded swal-success">Success Message</button>
                      </div>
                      
                      <h5>With Function</h5>
                      <p>A warning message, with a function attached to the "Confirm"-button</p>
                      <div class="mrg-top-20 mrg-btm-30"><button class="btn btn-warning btn-rounded swal-function">Try Me</button></div>
                      
                      <h5>Passing a Parameter</h5>
                      <p>you can execute something else for "Cancel".</p>
                      <div class="mrg-top-20 mrg-btm-30"><button class="btn btn-danger btn-rounded swal-pass-param">Try Me</button></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Content Wrapper END -->
          
        <?php include("common/footer.php")?>

      </div>
      <!-- Page Container END -->

    </div>
  </div>

  <script src="assets/js/vendor.js"></script>

  <!-- page plugins js -->
  <script src="assets/vendors/sweetalert/lib/sweet-alert.js"></script>
  <script src="assets/vendors/noty/js/noty/packaged/jquery.noty.packaged.min.js"></script>
  <script src="assets/vendors/selectize/dist/js/standalone/selectize.min.js"></script>

  <script src="assets/js/app.min.js"></script>

  <!-- page js -->
  <script src="assets/js/ui-elements/notification.js"></script>

</body>
</html>