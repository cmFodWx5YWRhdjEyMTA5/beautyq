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

            <div class="page-title"><h4>Definições de Pontuação</h4></div>

            <div class="row">
              <div class="col-lg-4">
                <div class="card">

                  <div class="card-block">
                    <h4 class="card-title">Critérios para ganhar pontos</h4>
                    <div class="mrg-top-20">
                      
                      <div class="form-group">
                        <label>Número de pontos padrão no Check In</label>
                        <input type="number" class="form-control" name="number" placeholder="Número de pontos" required>
                      </div>

                      <div class="form-group">
                        <label>Tempo de expiração dos pontos ganhos</label>
                        <select id="selectize-dropdown">
                          <option value="" disabled selected>Tempo de expiração...</option>
                          <option value="1">1 ano</option>
                          <option value="2">2 anos</option>
                          <option value="3">3 anos</option>
                          <option value="4">4 anos</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Check In automático</label>
                        <div class="checkbox">
                          <input id="check1" type="checkbox">
                          <label class="font-size-12 space" for="check1">Permite que o cliente faça check in utilizando geolocalização e automaticamente ganhe os pontos definidos aqui (ainda é possível alterar a pontuação utilizando o dashboard mesmo depois que o ponto for ofertado)</label>
                        </div>
                      </div>

                      <div class="mrg-top-25">
                        <button class="btn btn-primary btn-block no-mrg no-border pdd-vertical-15 ng-scope">Criar</button>
                      </div>

                    </div>
                  </div>

                </div>
              </div>            
              
              <div class="col-lg-8">
                <div class="card">

                  <div class="card-block">
                    <h4 class="card-title">Prêmios</h4>
                    <div class="mrg-top-20">
                      
                      <div class="card col-md-6 mr-auto ml-auto">
                        <div class="card-block">
                          <div class="mrg-top-20">
                            <p>Você ainda não cadastrou nenhum Prêmio a ser trocado por pontos pelos seus clientes! Comece agora clicando no botao de <strong>"Adicionar"</strong>!</p>
                            <div class="mrg-top-25">
                              <button data-toggle="modal" data-target="#default-modal" class="btn btn-primary btn-block no-mrg no-border pdd-vertical-15 ng-scope">Adicionar Prêmio</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="email-app">                          
                        <div class="email-wrapper row ml-0">
                          <div class="email-list" style="width: 100%; border: 1px solid #e6ecf5;">
                                
                            <div class="email-list-wrapper scrollable ps-container ps-theme-default ps-active-y" data-ps-id="bbd4fd78-18dc-50e8-bbef-dbb40c44b5a1">
                              <div class="list-view-group-container">
                                <ul class="email-list-item">
                                  <li class="email-item">
                                    <div class="email-tick">
                                      <div class="checkbox"> 
                                        <input type="checkbox" id="email-1" name="email-1"> 
                                        <label for="email-1"></label> 
                                      </div> 
                                    </div> 
                              
                                    <div class="open-mail"> 
                                      <div class="email-detail"> 
                                        <p class="from">Sabonete Líquido em Gelatina</p> 
                                        <p class="subject">Produto | 30 Pontos</p> 

                                        <ul style="padding-left: 20px;" class="mt-3 mb-3">
                                          <li>Produto de qualidade ímpar, feito pra limpar a pessoa toda. Muito bom, mesmo!</li>
                                          <li>A troca depende da existência do produto. Ele acaba rápido, então pode ser que um dia não tenha</li>
                                        </ul>

                                        <span class="datetime">
                                          <a href="" class="btn btn-default btn-xs">Editar</a>
                                        </span>
                                      </div>
                                    </div>
                                  </li>

                                  <li class="email-item">
                                    <div class="email-tick">
                                      <div class="checkbox"> 
                                        <input type="checkbox" id="email-1" name="email-1"> 
                                        <label for="email-1"></label> 
                                      </div> 
                                    </div> 
                                
                                    <div class="open-mail"> 
                                      <div class="email-detail"> 
                                        <p class="from">Corte de Cabelo Masculino com Maçarico</p> 
                                        <p class="subject">Serviço | 30 Pontos</p> 
    
                                        <ul style="padding-left: 20px;" class="mt-3 mb-3">
                                          <li>Corte realizado com extrema precisão que cauteriza o cabelo e o couro</li>
                                          <li>Não aceitamos trocas em dias muitos quentes devido ai risco de combustão espontânea</li>
                                        </ul>

                                        <span class="datetime">
                                          <a href="" class="btn btn-default btn-xs">Editar</a>
                                        </span>
                                      </div>
                                    </div>
                                  </li>

                                  <li class="email-item">
                                    <div class="email-tick">
                                      <div class="checkbox"> 
                                        <input type="checkbox" id="email-1" name="email-1"> 
                                        <label for="email-1"></label> 
                                      </div> 
                                    </div> 
                                  
                                    <div class="open-mail"> 
                                      <div class="email-detail"> 
                                        <p class="from">Bronzeamento de pele radiotivo</p> 
                                        <p class="subject">Serviço | 50 Pontos</p> 
      
                                        <ul style="padding-left: 20px;" class="mt-3 mb-3">
                                          <li>Esse é o legítimo bronzeamento definitivo que, ainda por cima, emagrece</li>
                                          <li>A troca depende da existência do produto. Ele acaba rápido, então pode ser que um dia não tenha</li>
                                        </ul>
    
                                        <span class="datetime">
                                          <a href="" class="btn btn-default btn-xs">Editar</a>
                                        </span>
                                      </div>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                              
                              <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                              </div>
                              
                              <div class="ps-scrollbar-y-rail" style="top: 0px; height: 524px; right: 0px;">
                                <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 254px;"></div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="mrg-top-25">
                          <button data-toggle="modal" data-target="#default-modal" class="btn btn-primary btn-block no-mrg no-border pdd-vertical-15 ng-scope">Adicionar Prêmio</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Modal START-->
          <div class="modal fade" id="default-modal">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4>Cadastro de Prêmios</h4>
                </div>
                
                <div class="modal-body">
                  
                  <div class="form-group">
                    <label>Nome do Serviço</label>
                    <input type="text" placeholder="Insira o nome do serviço que servirá de premio" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Descrição</label>
                    <textarea class="form-control" style="min-height: 100px;" placeholder="Descreva o serviço" rows="2" id="form-1-5"></textarea>
                  </div>

                  <div class="form-group">
                    <label>Limites</label>
                    <input type="text" placeholder="Insira o limite" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Pontuação requerida para troca</label>
                    <input type="number" class="form-control" name="number" placeholder="Número de pontos necessários para troca" required>
                  </div>

                  <div class="form-group row" style="margin-bottom: 0px;">
                    <div class="col-md-10">
                      <div class="radio radio-inline">
                        <input type="radio" checked="" name="radio1" id="rad1">
                        <label for="rad1">Produto</label>
                      </div>
                      <div class="radio radio-inline">
                        <input type="radio" checked="" name="radio1" id="rad2">
                        <label for="rad2">Serviço</label>
                      </div>
                    </div>
                  </div>

                </div>
                
                <div class="modal-footer">
                  <div class="text-right">
                    <button class="btn btn-default btn-sm" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary btn-sm" data-dismiss="modal">Cadastrar</button>
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