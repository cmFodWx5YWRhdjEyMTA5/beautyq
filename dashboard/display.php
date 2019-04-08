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

            <div class="page-title"><h4>Configurações do Display</h4></div>
            
            <div class="row">
              <div class="col-lg-6">
                <div class="card">

                  <div class="card-block">
                    <h4 class="card-title">Personalização</h4>
                    <div class="mrg-top-20">

                      <div class="form-group">
                        <label>Inserir Logo</label>
                        <div class="row">
                          <div class="col-md-6">
                            <div>
                              <label for="img-upload" class="pointer">
                                <img src="assets/images/salon-logo.jpg" width="150" alt="">
                                <span class="btn btn-default display-block no-mrg-btm">Selecionar Logo</span>
                                <input class="d-none" type="file" name="uploadedimages0" multiple id="img-upload">
                              </label>
                            </div>
                          </div>  
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Cor do Header</label>
                            <input type="color" placeholder="Enter email" class="form-control">
                          </div>
                        </div>
                        
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Cor do Meio</label>
                            <input type="color" placeholder="Enter email" class="form-control">
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>

                </div>
              </div>
            
              <div class="col-lg-6">
                <div class="card">
  
                  <div class="card-block">
                    <div>
                      <h4 class="card-title mb-0" style="float:left; width: auto">Preview do Display</h4>
                      <a onclick="myFunction()" class="btn btn-defaut pt-1 pb-2 pr-0 mr-0 mb-0" style="float: right;">
                        <h5 class="ei ei-printer mb-0"></h5>
                      </a>
                    </div>
                  </div>
                    
                  <div>
                    <div class="card ml-4 mr-4">
                      <div class="card-heading">
                        <div class="row">
                          <div class="col-lg-3 widget-profile-1">
                            <div class="profile p-0 text-right">
                              <img height="100px" src="assets/images/salon-logo.jpg">
                            </div>
                          </div>

                          <div class="col-lg-9">
                            <div class="text-right">
                              <h3 class="card-title">Código para cadastrar o Salão</h3>
                              <h1 class="font-size-45 mb-0">009 876</h1>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="card-body text-center pt-4 pb-4">
                        <h3>Como Funciona</h3>

                        <div class="row mrg-top-40">
                          <div class="col-md-4">
                            <div class="padding-0">
                              <h1 class="font-size-65 mb-0">
                                <div class="ei ei-checked-box"></div>
                              </h1>
                              <div class="mrg-top-5">
                                <p>Faça Checkin no APP ao chegar no Salão</p>
                              </div>
                            </div>
                          </div>
                          
                          <div class="col-md-4">
                            <div class="padding-0">
                              <h1 class="font-size-65 mb-0">
                                <div class="ei ei-badge"></div>
                              </h1>
                              <div class="mrg-top-5">
                                <p>Ganhe e acumule Pontos de Fidelidade</p>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-4">
                            <div class="padding-0">
                              <h1 class="font-size-65 mb-0">
                                <div class="ei ei-shopping-bag"></div>
                              </h1>
                              <div class="mrg-top-5">
                                <p>Troque por Produtos e Serviços quando quiser</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="card-body text-center bg-dark pt-4 pb-4">
                        <h2 class="text-white">Baixe aqui o APP</h2>
                        <img width="30%" src="assets/images/qr-code.png">

                        <div class="mrg-top-20">
                          <a href="" class="btn btn-default">
                            <i class="ti-apple pdd-right-5" style="font-size: 34px; float: left;"></i>
                            <span class="text-left">Disponível na <br><strong style="text-transform: uppercase;">App Store</strong></span>
                          </a>
                          
                          <a href="" class="btn btn-default">
                            <i class="ti-android pdd-right-5" style="font-size: 34px; float: left;"></i>
                            <span class="text-left">Disponível no <br><strong style="text-transform: uppercase;">Google Play</strong></span>
                          </a>
                        </div>
                      </div>
                      
                      <div class="card-footer border top text-center pt-4 pb-4">
                        <h4 style="text-transform: uppercase;">Assine o BeautyCard</h4>
                        <p>Assine o cartão e ganhe 15% de Desconto em TODOS os procedimentos desse Salão e você ainda ganha o dobro de pontos de fidelidade por sessão</p>
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

  <script>
    function myFunction() {
      window.print();
    }
  </script>

</body>
</html>