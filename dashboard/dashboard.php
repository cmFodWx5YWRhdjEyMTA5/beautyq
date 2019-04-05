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
<link rel="stylesheet" href="assets/vendors/bower-jvectormap/jquery-jvectormap-1.2.2.css" />
<link rel="stylesheet" href="assets/vendors/nvd3/build/nv.d3.min.css" />

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

            <div class="row">
              <div class="col-lg-4">
                <div class="card">
                  <div class="portlet">
                    <ul class="portlet-item navbar">
                      <li><a href="javascript:void(0);" class="btn btn-icon btn-flat btn-rounded" data-toggle="card-refresh"><i class="ti-reload"></i></a></li>
                    </ul>
                  </div>

                  <div class="card-heading">
                    <h4 class="card-title">N. de Assinantes BeautyCard</h4>
                  </div>

                  <div class="card-body text-center">
                    <div class="inline-block">
                      <h1 class="no-mrg-vertical" style="font-size: 72px; line-height: 76px;">168</h1>
                      <p class="mb-0">Assinantes</p>
                    </div>
                  </div>

                  <div class="card-footer border top text-center">
                    <div class="inline-block">
                      <p class="mb-0"><strong>Receta Estimada:</strong> R$ 1.985,00 ao mês</p>
                    </div>
                  </div>
                </div>
                
                <div class="card">
                  <div class="portlet">
                    <ul class="portlet-item navbar">
                      <li><a href="javascript:void(0);" class="btn btn-icon btn-flat btn-rounded" data-toggle="card-refresh"><i class="ti-reload"></i></a></li>
                    </ul>
                  </div>
    
                  <div class="card-heading">
                    <h4 class="card-title">Número de Check In</h4>
                  </div>
    
                  <div class="card-body text-center">
                    <div class="inline-block">
                      <h1 class="no-mrg-vertical" style="font-size: 72px; line-height: 76px;">833</h1>
                      <p class="mb-0">Check In</p>
                    </div>
                  </div>
    
                  <div class="card-footer border top text-center">
                    <div class="inline-block">
                      <p class="mb-0">50% pelo APP</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="card">
                  <div class="portlet">
                    <ul class="portlet-item navbar">
                      <li><a href="javascript:void(0);" class="btn btn-icon btn-flat btn-rounded" data-toggle="card-refresh"><i class="ti-reload"></i></a></li>
                    </ul>
                  </div>
        
                  <div class="card-heading">
                    <h4 class="card-title">N. de Assinantes Novos</h4>
                  </div>
        
                  <div class="card-body text-center">
                    <div class="inline-block">
                      <h1 class="no-mrg-vertical" style="font-size: 72px; line-height: 76px;">32</h1>
                      <p class="mb-0">Novos</p>
                    </div>
                  </div>
        
                  <div class="card-footer border top text-center">
                    <div class="inline-block">
                      <p class="mb-0">4 Foram Cancelados</p>
                    </div>
                  </div>
                </div>
                  
                <div class="card">
                  <div class="portlet">
                    <ul class="portlet-item navbar">
                      <li><a href="javascript:void(0);" class="btn btn-icon btn-flat btn-rounded" data-toggle="card-refresh"><i class="ti-reload"></i></a></li>
                    </ul>
                  </div>
      
                  <div class="card-heading">
                    <h4 class="card-title">Número de Trocas</h4>
                  </div>
    
                  <div class="card-body text-center">
                    <div class="inline-block">
                      <h1 class="no-mrg-vertical" style="font-size: 72px; line-height: 76px;">163</h1>
                      <p class="mb-0">Trocas</p>
                    </div>
                  </div>
      
                  <div class="card-footer border top text-center">
                    <div class="inline-block">
                      <p class="mb-0">5.342 Pontos Usados</p>
                    </div>
                  </div>
                </div>
              </div>
              
              
              <div class="col-lg-4">
                <div class="card">
                  <div class="portlet">
                    <ul class="portlet-item navbar">
                      <li><a href="javascript:void(0);" class="btn btn-icon btn-flat btn-rounded" data-toggle="card-refresh"><i class="ti-reload"></i></a></li>
                    </ul>
                  </div>
          
                  <div class="card-heading">
                    <h4 class="card-title">Pesquisa de Satisfação</h4>
                  </div>
        
                  <div class="card-body">
                    <div class="mrg-top-15">
                      <div><canvas height="230" id="allocation-chart"></canvas></div>
                    </div>
                    
                    <div class="mrg-top-15">
                      <div class="row">
                        <div class="col-lg-4">
                          <div class="relative mrg-top-10">
                            <span class="status"> </span>
                            <span class="pdd-left-20 font-size-16"><b class="text-dark">10%</b> Nota 1</span>
                          </div>
                        </div>

                        <div class="col-lg-4">
                          <div class="relative mrg-top-10">
                            <span class="status"> </span>
                            <span class="pdd-left-20 font-size-16"><b class="text-dark">10%</b> Nota 2</span>
                          </div>
                        </div>

                        <div class="col-lg-4">
                          <div class="relative mrg-top-10">
                            <span class="status"> </span>
                            <span class="pdd-left-20 font-size-16"><b class="text-dark">10%</b> Nota 3</span>
                          </div>
                        </div>

                        <div class="col-lg-4">
                          <div class="relative mrg-top-10">
                            <span class="status"> </span>
                            <span class="pdd-left-20 font-size-16"><b class="text-dark">10%</b> Nota 4</span>
                          </div>
                        </div>

                        <div class="col-lg-4">
                          <div class="relative mrg-top-10">
                            <span class="status"> </span>
                            <span class="pdd-left-20 font-size-16"><b class="text-dark">10%</b> Nota 5</span>
                          </div>
                        </div>

                        <div class="col-lg-4">
                          <div class="relative mrg-top-10">
                            <span class="status"> </span>
                            <span class="pdd-left-20 font-size-16"><b class="text-dark">10%</b> Nota 6</span>
                          </div>
                        </div>

                        <div class="col-lg-4">
                          <div class="relative mrg-top-10">
                            <span class="status"> </span>
                            <span class="pdd-left-20 font-size-16"><b class="text-dark">10%</b> Nota 7</span>
                          </div>
                        </div>

                        <div class="col-lg-4">
                          <div class="relative mrg-top-10">
                            <span class="status"> </span>
                            <span class="pdd-left-20 font-size-16"><b class="text-dark">10%</b> Nota 8</span>
                          </div>
                        </div>

                        <div class="col-lg-4">
                          <div class="relative mrg-top-10">
                            <span class="status"> </span>
                            <span class="pdd-left-20 font-size-16"><b class="text-dark">10%</b> Nota 9</span>
                          </div>
                        </div>

                        <div class="col-lg-4">
                          <div class="relative mrg-top-10">
                            <span class="status"> </span>
                            <span class="pdd-left-20 font-size-16"><b class="text-dark">10%</b> Nota 10</span>
                          </div>
                        </div>

                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
              
              
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-heading">
                    <h4 class="card-title">Checkin</h4>
                  </div>

                  <div class="card-block">
                    <div class="mrg-top-20">
                      <div><canvas id="line-chart" style="height:120px;"></canvas></div>
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
  <script src="assets/vendors/bower-jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="assets/js/maps/jquery-jvectormap-us-aea.js"></script>
  <script src="assets/vendors/d3/d3.min.js"></script>
  <script src="assets/vendors/nvd3/build/nv.d3.min.js"></script>
  <script src="assets/vendors/jquery.sparkline/index.js"></script>
  <script src="assets/vendors/chart.js/dist/Chart.min.js"></script>

  <script src="assets/js/app.min.js"></script>

  <!-- page js -->
  <script src="assets/js/dashboard/dashboard.js"></script>

</body>
</html>