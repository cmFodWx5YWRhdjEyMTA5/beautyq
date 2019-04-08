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

            <div class="row">
              <div class="col-lg-12">
                <div class="page-title">
                  <h4 style="float:left; width: auto">Definições do BeautyCard</h4>
                  <a data-toggle="modal" data-target="#modal-assinante" class="btn btn-primary" style="float: right; color: #FFF;">Novo Assinante</a>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-7">
                <div class="card">

                  <div class="card-block">
                    <h4 class="card-title">
                      Cartão Fidelidade BeautyCard
                      <div class="toggle-checkbox checkbox-inline toggle-sm ml-3">
                        <input type="checkbox" name="toggle1" id="toggle1" checked="" data-toggle="toggle1">
                        <label for="toggle1" class="mb-0"></label>
                      </div>
                    </h4>

                    <hr>

                    <div id="console-event"></div>

                    <div class="mb-3 mt-3">
                      <ul class="list-unstyled list-info">
                        <li>
                          <span class="thumb-img mr-6">
                            <i class="ei ei-id-card font-size-40"></i>
                          </span>
                          <div class="info">
                            <b class="text-dark font-size-16">Seu cartão está desativado no momento</b>
                            <p>Ative o botão acima para cadastrar os dados</p>
                          </div>
                        </li>
                      </ul>
                    </div>

                    <hr>

                    <div class="mrg-top-20">
                      <h4>Cadastro da Conta (Obrigatório)*</h4>
                    </div>

                    <div class="row mrg-top-20">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Número de Referência do Banco</label>
                          <input type="text" placeholder="" class="form-control">
                        </div>
                      </div>
                      
                      <div class="col-md-3">
                        <div class="form-group">
                          <label>Agência</label>
                          <input type="text" placeholder="" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label>Conta</label>
                          <input type="text" placeholder="" class="form-control">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Valor da Assinatura Mensal</label>
                          <select class="form-control">
                            <option value="" disabled="" selected="">Selecione o Valor</option>
                            <option value="1">R$ 10,00</option>
                            <option value="2">R$ 20,00</option>
                            <option value="3">R$ 30,00</option>
                            <option value="4">R$ 40,00</option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Valor do Desconto</label>
                          <select class="form-control">
                            <option value="" disabled="" selected="">Selecione o Desconto</option>
                            <option value="1">10%</option>
                            <option value="2">20%</option>
                            <option value="3">30%</option>
                            <option value="4">40%</option>
                          </select>
                        </div>
                      </div>

                      <div class="col-md-8">
                        <label>&nbsp</label>
                        <div>
                          <div class="checkbox checkbox-inline checkbox-primary">
                            <input id="form-4-1" name="form-4-1" type="checkbox" checked="">
                            <label for="form-4-1">Vale para Serviços</label>
                          </div>
                          
                          <div class="checkbox checkbox-inline checkbox-primary">
                            <input id="form-4-2" name="form-4-2" type="checkbox">
                            <label for="form-4-2">Vale para Produtos</label>
                          </div>                   
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Assinantes do Cartão dobram (2x) os pontos de fidelidade</label>
                          <div class="checkbox checkbox-inline checkbox-primary col-md-12">
                            <input id="form-4-1" name="form-4-1" type="checkbox" checked="">
                            <label for="form-4-1">Dobrar pontos (2x)</label>
                          </div>
                        </div>
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

              <div class="col-lg-5">
                <div class="card">
                  <div class="card-block">

                    <div>
                      <h5>Como funciona o BeautyCard?</h5>
                      <p>Seu Salão pode oferecer um cartão de fidelidade digital aos seus clientes através de uma assinatura mensal em troca de desconto em seus serviços e/ou produtos</p>
                    </div>

                    <div class="mrg-top-20">
                      <h5>Quais as vantagens do BeautyCard pro meu Salão?</h5>
                      <ul class="list dash">
                        <li>Transforma os descontos que você já dá em uma forte fonte de receita recorrente para o seu negócio</li>
                        <li>Em torno de 20% dos clientes são fiéis, gerando uma receita previsível com a qual você pode contar todo mês</li>
                      </ul>
                    </div>

                    <div class="mrg-top-20">
                      <h5>Regras</h5>
                      <ul class="list dash">
                        <li>Você define o valor da Assinatura que seus clientes vão pagar</li>
                        <li>Você define a porcentagem de desconto que eles vão ter</li>
                        <li>Nosso software faz toda a automação da cobrança e comunicação</li>
                        <li>A taxa do cartão de crédito é de 2%</li>
                        <li>A taxa do Software é de 18%</li>
                        <li>A transferência mensal para a sua conta é automática e realizada todo dia 05</li>
                      </ul>
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
    $(function() {
      $('#toggle1').change(function() {
        $('#console-event').html('Toggle: ' + $(this).prop('checked'))
      })
    })
  </script>

</body>
</html>