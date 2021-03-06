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
  <div class="app">
		<div class="authentication">
			<div class="sign-in">
				<div class="row no-mrg-horizon">

					<div class="col-md-7 no-pdd-horizon d-none d-md-block">
						<div class="full-height bg" style="background-image: url('assets/images/others/img-29.jpg')">
							<div class="img-caption">
								<h1 class="caption-title">We make spectacular</h1>
								<p class="caption-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
							</div>
						</div>
					</div>
					
					<div class="col-md-5 no-pdd-horizon">
						<div class="full-height bg-white height-100">

							<div class="vertical-align full-height pdd-horizon-50">
								<div class="table-cell">
									<div class="pdd-horizon-15">

										<!--form id="shipping-form" class="width-100"-->
										<form action="dashboard.php" id="shipping-form" class="width-100" method="get">
											<div id="rootwizard" class="form-wizard col-md-12 ml-auto mr-auto">
												<ul class="nav nav-pills nav-fill">
													<li class="nav-item">
														<a href="#step1" data-toggle="tab">
															<span class="step">1</span>
															<span class="title">Dados do Admin</span>
														</a>
													</li>
													
													<li class="nav-item">
														<a href="#step2" data-toggle="tab">
															<span class="step">2</span>
															<span class="title">Validação de Celular</span>
														</a>
													</li>
													
													<li class="nav-item">
														<a href="#step3" data-toggle="tab">
															<span class="step">3</span>
															<span class="title">Cadastro do Salão</span>
														</a>
													</li>
													
													<li class="nav-item">
														<a href="#step4" data-toggle="tab">
															<span class="step">4</span>
															<span class="title">Explicações</span>
														</a>
													</li>
												</ul>
												
												<div id="bar" class="progress progress-info" style="width: 75%">
													<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
												</div>
												
												<div class="tab-content">
													<div id="step1" class="tab-pane fade in active">
														<div class="row">
															<div class="col-md-10 mr-auto ml-auto">

																<div class="card">
																	<div class="card-heading">
																		<h4 class="card-title">Dados do Admin</h4>
																	</div>

																	<div class="card-body">
																		<div class="row">
																			<div class="col-md-6">
																				<div class="form-group" style="margin-bottom: 15px;">
																					<label>Nome</label>
																					<input type="text" class="form-control" placeholder="Insira seu nome">
																				</div>
																			</div>
			
																			<div class="col-md-6">
																				<div class="form-group" style="margin-bottom: 15px;">
																					<label>Sobrenome</label>
																					<input type="text" class="form-control" placeholder="Insira seu sobrenome">
																				</div>
																			</div>
																		</div>

																		<div class="form-group">
																			<label>E-mail</label>
																			<input type="email" class="form-control" placeholder="Insira seu e-mail">
																		</div>

																		<div class="form-group">
																			<label>Telefone</label>
																			<input type="tel" class="form-control" placeholder="Insira um telefone">
																		</div>

																		<div class="form-group mb-2">
																			<label>Crie uma senha</label>
																			<input type="password" class="form-control" placeholder="Crie uma senha">
																		</div>
																	</div>
																</div>

															</div>
														</div>
													</div>
													
													<div id="step2" class="tab-pane fade">
														<div class="row">
															<div class="col-md-9 mr-auto ml-auto">

																<div class="card">
																	<div class="card-block">

																		<div class="mr-auto ml-auto col-md-4 mb-3">
																			<img src="assets/images/sms-message.png" height="130px">
																		</div>
																		
																		<h2 class="card-title text-center">Confirme o código enviado</h2>

																		<div class="form-group mr-auto ml-auto col-md-6">
																			<input type="email" class="form-control" placeholder="Insira o código">
																		</div>

																		<p class="text-center">Enviamos um SMS com o código de confirmação do celular <br>(11) 98858-2420</p>
		
																		<p class="text-center mb-0">Não recebeu o SMS? <a href="">Clique aqui</a></p>
																		<p class="text-center">Alterar número? <a href="">Clique aqui</a></p>
		
																	</div>
																</div>

															</div>
														</div>
													</div>
													
													<div id="step3" class="tab-pane fade">
														<div class="row">
															<div class="col-md-10 mr-auto ml-auto">

																<div class="card">
																	<div class="card-heading">
																		<h4 class="card-title">Cadastro do Salão</h4>
																	</div>

																	<div class="card-body">
																		<div class="form-group">
																			<label>Nome do Salão</label>
																			<input type="text" class="form-control" placeholder="Insira o nome do salão">
																		</div>

																		<div class="row">
																			<div class="col-md-4">
																				<div class="form-group" style="margin-bottom: 15px;">
																					<label>CEP</label>
																					<input type="text" class="form-control" placeholder="Insira o CEP">
																				</div>
																			</div>

																			<div class="col-md-8">
																				<div class="form-group" style="margin-bottom: 15px;">
																					<label>Endereço</label>
																					<input type="text" class="form-control" placeholder="Insira o Endereço">
																				</div>
																			</div>
																		</div>

																		<div class="row">
																			<div class="col-md-6">
																				<div class="form-group" style="margin-bottom: 15px;">
																					<label>Número</label>
																					<input type="text" placeholder="Número" class="form-control">
																				</div>
																			</div>
																						
																			<div class="col-md-6">
																				<div class="form-group" style="margin-bottom: 15px;">
																					<label>Bairro</label>
																					<input type="text" placeholder="Bairro" class="form-control">
																				</div>
																			</div>
																		</div>

																		<div class="row">
																			<div class="col-md-6">
																				<div class="form-group mb-2">
																					<label>Cidade</label>
																					<input type="text" placeholder="Cidade" class="form-control">
																				</div>
																			</div>
																							
																			<div class="col-md-6">
																				<div class="form-group mb-2">
																					<label>Estado</label>
																					<input type="text" placeholder="Estado" class="form-control">
																				</div>
																			</div>
																		</div>
																	</div>
																</div>

															</div>
														</div>
													</div>
													
													<div id="step4" class="tab-pane fade">
														<div class="row">
															<div class="col-md-10 mr-auto ml-auto">

																<div class="card">
																	<div class="card-heading">
																		<h4 class="card-title">Itens que requerem sua atençao:</h4>
																	</div>
		
																	<div class="card-body">
																		<ul class="list dash bullet-success">
																			<li>Você pode utilizar gratuitamente nosso sistema de gerenciamento de pontos de fidelidade</li>
																			<li>Tudo o que acontece com seus pontos e suas trocas você pode acompanhar em tempo real pelo dashboard</li>
																			<li>O sistema de pontos é configurável para se encaixar na sua rotina (Não esqueca de criar prêmios legais para os clientes usarem, como um corte de cabelo a cada 50 pontos ou ainda um produto, como um shampoo)</li>
																			<li>Seus clientes podem baixar o aplicativo para acompanhar os pontos e receber suas comunicações - o que é muito recomendável mas nao obrigatório (você pode oferecer os pontos pelo seu dashboard também)</li>
																			<li>O cartão beautycard que você pode oferecer para os seus clientes permite que você dê descontos mas com previsão de receita recorrente (que cobre parte dos gastos com os descontos)</li>
																			<li>Você permanece com 80% do valor das assinaturas. Caso não venda assinaturas, não cobramos nadas.</li>
																		</ul>
																	</div>
		
																	<div class="card-footer border top">
																		<ul class="list-unstyled list-inline text-center pdd-vertical-5">
																			<li class="list-inline-item">
																				<button class="btn btn-primary swal-success-signup">Concluir</button>
																			</li>
																		</ul>
																	</div>
																</div>

															</div>
														</div>
													</div>
													
													<div class="wizard-pager col-md-10 mr-auto ml-auto">
														<div class="">
															<button type="button" class="btn btn-default button-previous btn-rounded">Voltar</button>
															<button type="button" class="btn btn-primary button-next pull-right btn-rounded">Avançar</button>
														</div>
													</div>
												</div>
											</div>
										</form>
										<!--/form-->

									</div>
								</div>
							</div>
							
							<div class="login-footer">
								<img class="img-responsive inline-block" src="assets/images/logo/logo.png" width="100" alt="">
								<span class="font-size-13 pull-right pdd-top-10">Já tem uma conta? <a href="index.php">Faça o login</a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

  <script src="assets/js/vendor.js"></script>
  <script src="assets/js/app.min.js"></script>

  <!-- page plugins js -->
  <script src="assets/vendors/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="assets/vendors/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>

  <!-- page js -->
  <script src="assets/js/forms/form-wizard.js"></script>

</body>
</html>