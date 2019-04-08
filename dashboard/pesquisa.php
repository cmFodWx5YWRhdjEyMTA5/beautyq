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

            <div class="page-title"><h4>Pesquisa de satisfação</h4></div>

            <div class="row">
              <div class="col-lg-7">
                <div class="card">
                  
                  <div class="card-block">
                    <h4 class="card-title">
                      Pesquisa de satisfação
                      <div class="toggle-checkbox checkbox-inline toggle-sm ml-3">
                        <input type="checkbox" name="toggle1" id="toggle1" checked="">
                        <label for="toggle1" class="mb-0"></label>
                      </div>
                    </h4>

                    <hr>

                    <div class="mrg-top-20">
                      <label>Escolher tipo de Pesquisa:</label>
                     
                      <div class="row">
                        <div class="col-md-6">

                          <div class="form-group">
                            <div class="col-md-12">
                              <div class="radio radio-inline">
                                <input type="radio" checked="" name="radio1" id="rad1">
                                <label for="rad1">NPS (default)</label>
                              </div>
                              
                              <div class="radio radio-inline">
                                <input type="radio" checked="" name="radio1" id="rad2">
                                <label for="rad2">Emocional</label>
                              </div>                
                            </div>
                          </div>

                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-md-12">
                          <label>Enviar Push em quanto tempo após o Check in</label>
                          <input type="text" class="form-control" name="number" placeholder="Horas" required>
                        </div>
                      </div>

                      <div class="form-group row mb-0">
                        <div class="col-md-12">
                          <div class="text-right">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>

                </div>
              </div>
              
              <div class="col-lg-5">
                <div class="card">
                  
                  <div class="card-block">
                    <h4 class="card-title">Preview</h4>

                    <hr>

                    <div class="mrg-top-20">
                      <div class="form-group">
                        <label>NPS (default)</label>
                        <div class="display-block">
                          <div class="btn-group">
                            <button type="button" class="btn btn-default">1</button>
                            <button type="button" class="btn btn-default">2</button>
                            <button type="button" class="btn btn-default">3</button>
                            <button type="button" class="btn btn-default">4</button>
                            <button type="button" class="btn btn-default">5</button>
                            <button type="button" class="btn btn-default">6</button>
                            <button type="button" class="btn btn-default">7</button>
                            <button type="button" class="btn btn-default">8</button>
                            <button type="button" class="btn btn-default">9</button>
                            <button type="button" class="btn btn-default">10</button>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label>Emocional</label>
                        <div class="display-block">
                          <div class="btn-group">
                            <button type="button" class="btn btn-default"><i class="ei ei-smiley-1"></i></button>
                            <button type="button" class="btn btn-default"><i class="ei ei-smiley"></i></button>
                            <button type="button" class="btn btn-default"><i class="ei ei-straight"></i></button>
                            <button type="button" class="btn btn-default"><i class="ei ei-sad"></i></button>
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