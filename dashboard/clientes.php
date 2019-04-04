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
<link rel="stylesheet" href="assets/vendors/selectize/dist/css/selectize.default.css" />
<link rel="stylesheet" href="assets/vendors/bootstrap-daterangepicker/daterangepicker.css" />
<link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" />
<link rel="stylesheet" href="assets/vendors/summernote/dist/summernote.css" />

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

            <div class="page-title"><h4>Clientes</h4></div>

            <div class="row">
              <div class="col-lg-12">

                <div class="tab-primary">
                  <ul class="nav nav-pills" role="tablist">
                    <li class="nav-item"><a href="#nav-pills-1" class="nav-link active show" role="tab" data-toggle="tab" aria-selected="true">TIMELINE</a></li>
                    <li class="nav-item"><a href="#nav-pills-2" class="nav-link" role="tab" data-toggle="tab" aria-selected="false">LISTA DE CLIENTES</a></li>
                  </ul>
                    
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active show" id="nav-pills-1">
                      <div class="pdd-vertical-20">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="card">
                              <div class="card-block">

                                <div class="row">
                                  <div class="col-md-2">
                                    <div class="form-group mb-0">
                                      <label class="mb-0" style="height: 40px; line-height: 40px; font-size: 16px; text-transform: uppercase; font-weight: bold;">
                                        <i class="ti-filter mr-2"></i> 
                                        Filter Por
                                      </label>
                                    </div>
                                  </div>

                                  <div class="col-md-2">
                                    <div class="form-group mb-0">
                                      <select id="selectize-dropdown">
                                        <option value="" disabled selected>Tipo de Operação</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                      </select>
                                    </div>
                                  </div>

                                  <div class="col-md-2">
                                    <div class="form-group mb-0">
                                      <div class="timepicker-input input-group">
                                        <span class="input-group-text"><i class="ti-calendar"></i></span>
                                        <input type="text" class="form-control datepicker-2" placeholder="Pick your date" data-provide="datepicker">
                                      </div>
                                    </div>
                                  </div>

                                  <div class="col-md-2">
                                    <div class="form-group mb-0">
                                      <select id="selectize-dropdown-2">
                                        <option value="" disabled selected>Quem fez a Operação</option>
                                        <option value="Thomas Edison">Thomas Edison</option>
                                        <option value="Nikola">Nikola</option>
                                        <option value="Nikola Tesla">Nikola Tesla</option>
                                        <option value="Arnold Schwarzenegger">Arnold Schwarzenegger</option>
                                      </select>
                                    </div>
                                  </div>

                                  <div class="col-md-2">
                                    <div class="form-group mb-0">
                                      <button href="" class="btn btn-primary mb-0">FILTRAR</button>
                                    </div>
                                  </div>
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-7">
                            <div class="card">

                              <div class="card-block">
                                <h4 class="card-title">Personalização</h4>
                                <div class="mrg-top-20"></div>
                              </div>

                            </div>
                          </div>
                          
                          <div class="col-lg-5">
                            <div class="card">
                
                              <div class="card-block">
                                <h4 class="card-title">Preview do display</h4>
                                <div class="mrg-top-20"></div>
                              </div>
                
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                      
                    <div role="tabpanel" class="tab-pane fade" id="nav-pills-2">
                      <div class="pdd-vertical-20">
                        <div class="row">
                          <div class="col-lg-7">
                            <div class="card">

                              <div class="card-block">
                                <h4 class="card-title">Personalização</h4>
                                <div class="mrg-top-20"></div>
                              </div>

                            </div>
                          </div>
                          
                          <div class="col-lg-5">
                            <div class="card">
                
                              <div class="card-block">
                                <h4 class="card-title">Preview do display</h4>
                                <div class="mrg-top-20"></div>
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

          </div>
        </div>
        <!-- Content Wrapper END -->
        
        <?php include("common/footer.php")?>
    
      </div>
      <!-- Page Container END -->
    
    </div>
  </div>

  <script src="assets/js/vendor.js"></script>
  <script src="assets/js/app.min.js"></script>

  <!-- page plugins js -->
  <script src="assets/vendors/selectize/dist/js/standalone/selectize.min.js"></script>
  <script src="assets/vendors/moment/min/moment.min.js"></script>
  <script src="assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script src="assets/vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
  <script src="assets/vendors/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
  <script src="assets/vendors/summernote/dist/summernote.min.js"></script>

  <!-- page js -->
  <script src="assets/js/forms/form-elements.js"></script>

</body>
</html>