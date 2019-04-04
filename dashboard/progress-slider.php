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
<link rel="stylesheet" href="assets/vendors/nouislider/distribute/nouislider.min.css" />

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
                        <div class="page-title">
                            <h4>Progress Bar</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h4 class="card-title">Basic Progress Bar</h4>
                                                <div class="row mrg-top-30">
                                                    <div class="col-md-10">
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                                            </div>
                                                        </div>
                                                        <div class="progress progress-primary">
                                                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                                            </div>
                                                        </div>
                                                        <div class="progress progress-success">
                                                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%">
                                                            </div>
                                                        </div>
                                                        <div class="progress progress-info">
                                                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                                            </div>
                                                        </div>
                                                        <div class="progress progress-warning">
                                                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                                            </div>
                                                        </div>
                                                        <div class="progress progress-danger">
                                                            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <h4 class="card-title">Progress Bar Size</h4>
                                                <div class="row mrg-top-30">
                                                    <div class="col-md-10">
                                                        <div class="progress progress-primary">
                                                            <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width:30%">
                                                            </div>
                                                        </div>
                                                        <div class="progress progress-primary progress-sm ">
                                                            <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                                            </div>
                                                        </div>
                                                        <div class="progress progress-primary progress-md ">
                                                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                                            </div>
                                                        </div>
                                                        <div class="progress progress-primary progress-lg ">
                                                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <h4 class="card-title">Progress Bar Striped</h4>
                                                <div class="row mrg-top-30">
                                                    <div class="col-md-10">
                                                        <div class="progress progress-primary">
                                                            <div class="progress-bar active progress-bar-striped" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width:30%">
                                                            </div>
                                                        </div>
                                                        <div class="progress progress-success progress-sm ">
                                                            <div class="progress-bar active progress-bar-striped" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                                            </div>
                                                        </div>
                                                        <div class="progress progress-info progress-md ">
                                                            <div class="progress-bar active progress-bar-striped" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                                            </div>
                                                        </div>
                                                        <div class="progress progress-warning progress-lg ">
                                                            <div class="progress-bar active progress-bar-striped" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="page-title">
                                    <h4>Slider</h4>
                                </div>
                                <div class="card">
                                    <div class="card-block">
                                        <div class="row">
                                            <div class="mr-auto ml-auto col-md-10">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h4 class="card-title">Horizontal Slider</h4>
                                                        <div class="row mrg-top-30">
                                                            <div class="col-md-10">
                                                                <div class="mrg-btm-40">
                                                                    <div id="horizon-default"></div>
                                                                </div>
                                                                <div class="mrg-btm-40">
                                                                    <div class="slider-primary" id="horizon-primary"></div>
                                                                </div>
                                                                <div class="mrg-btm-40">
                                                                    <div class="slider-success" id="horizon-success"></div>
                                                                </div>
                                                                <div class="mrg-btm-40">
                                                                    <div class="slider-info" id="horizon-info"></div>
                                                                </div>
                                                                <div class="mrg-btm-40">
                                                                    <div class="slider-warning" id="horizon-warning"></div>
                                                                </div>
                                                                <div class="mrg-btm-40">
                                                                    <div class="slider-danger" id="horizon-danger"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h4 class="card-title">Vertical Slider</h4>
                                                        <div class="row mrg-top-30">
                                                            <div class="col-md-10">
                                                                <div class="mrg-right-40 inline-block" style="height: 240px">
                                                                    <div id="vertical-default"></div>
                                                                </div>
                                                                <div class="mrg-right-40 inline-block" style="height: 240px">
                                                                    <div class="slider-primary" id="vertical-primary"></div>
                                                                </div>
                                                                <div class="mrg-right-40 inline-block" style="height: 240px">
                                                                    <div class="slider-success" id="vertical-success"></div>
                                                                </div>
                                                                <div class="mrg-right-40 inline-block" style="height: 240px">
                                                                    <div class="slider-info" id="vertical-info"></div>
                                                                </div>
                                                                <div class="mrg-right-40 inline-block" style="height: 240px">
                                                                    <div class="slider-warning" id="vertical-warning"></div>
                                                                </div>
                                                                <div class="mrg-right-40 inline-block" style="height: 240px">
                                                                    <div class="slider-danger" id="vertical-danger"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mrg-top-70">
                                            <div class="mr-auto ml-auto col-md-7">
                                                <h4 class="card-title">Ranged Slider</h4>
                                                <div class="mrg-top-30">
                                                    <div class="slider-primary" id="range-slider"></div>
                                                    <div class="mrg-top-10">
                                                        <p class="inline-block"><b>Min: </b> <span id="range-min"></span></p>
                                                        <p class="pull-right"><b>Max: </b> <span id="range-max"></span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mrg-top-70">
                                            <div class="mr-auto ml-auto col-md-7">
                                                <h4 class="card-title">Tab Drag Slider</h4>
                                                <div class="mrg-top-30">
                                                    <div class="slider-info" id="drag-slider"></div>
                                                    <div class="mrg-top-10">
                                                        <p class="inline-block"><b>Min: </b> <span id="drag-min"></span></p>
                                                        <p class="pull-right"><b>Max: </b> <span id="drag-max"></span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mrg-vertical-70">
                                            <div class="mr-auto ml-auto col-md-7">
                                                <h4 class="card-title">Step Slider</h4>
                                                <div class="mrg-top-30">
                                                    <div class="slider-info" id="step-slider"></div>
                                                </div>
                                            </div>
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
  <script src="assets/vendors/nouislider/distribute/nouislider.js"></script>
  <script src="assets/js/app.min.js"></script>

  <!-- page js -->
  <script src="assets/js/ui-elements/progress-slider.js"></script>

</body>
</html>