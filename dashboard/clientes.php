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
                                      <select class="form-control">
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
                                      <select class="form-control">
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
                          <div class="col-lg-12">
                            <div class="card">

                              <div class="email-app">
                                <div class="email-wrapper row ml-0">
                                  <div class="email-list">
                                    <div class="email-list-tools" style="padding: 10px;">
                                      <div class="row mr-0 ml-0">
                                        <div class="input-icon form-group col-lg-10 pl-0 pr-0 mb-0">
                                          <i class="ti-search"></i>
                                          <input type="text" class="form-control m-b" placeholder="Buscar...">
                                        </div>
                                      
                                        <ul class="tools text-right col-lg-2 pl-0 pr-0">
                                          <li>
                                            <button data-toggle="modal" data-target="#default-modal" class="btn btn-primary btn-rounded p-0 mb-0 mr-0" style="width:36px; height:36px; line-height:36px; color:#FFF;"><i class="ti-plus"></i></button>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  
                                    <div class="email-list-wrapper scrollable">
                                      <div class="list-view-group-container">
                                        <ul class="email-list-item">
                                          <li class="email-item">
                                            <div class="email-tick user-profile"><img class="profile-img img-fluid" src="assets/images/avatars/thumb-1.jpg" alt=""></div> 
                                          
                                            <div class="open-mail"> 
                                              <div class="email-detail pl-2"> 
                                                <p class="from">Cleverson Muniz</p> 
                                                <p class="subject">(11) 98765-9876</p> 
                                                <span class="datetime">
                                                  <a href="" class="btn btn-default btn-rounded mb-0 p-0" style="width: 36px; height: 36px; line-height: 36px;">X</a>
                                                </span>
                                              </div>
                                            </div>
                                          </li>

                                          <li class="email-item">
                                            <div class="email-tick user-profile"><img class="profile-img img-fluid" src="assets/images/avatars/thumb-2.jpg" alt=""></div> 
                                          
                                            <div class="open-mail"> 
                                              <div class="email-detail pl-2"> 
                                                <p class="from">Cleverson Muniz</p> 
                                                <p class="subject">(11) 98765-9876</p> 
                                                <span class="datetime">
                                                  <a href="" class="btn btn-default btn-rounded mb-0 p-0" style="width: 36px; height: 36px; line-height: 36px;">X</a>
                                                </span>
                                              </div>
                                            </div>
                                          </li>

                                          <li class="email-item">
                                            <div class="email-tick user-profile"><img class="profile-img img-fluid" src="assets/images/avatars/thumb-3.jpg" alt=""></div> 
                                          
                                            <div class="open-mail"> 
                                              <div class="email-detail pl-2"> 
                                                <p class="from">Cleverson Muniz</p> 
                                                <p class="subject">(11) 98765-9876</p> 
                                                <span class="datetime">
                                                  <a href="" class="btn btn-default btn-rounded mb-0 p-0" style="width: 36px; height: 36px; line-height: 36px;">X</a>
                                                </span>
                                              </div>
                                            </div>
                                          </li>

                                          <li class="email-item">
                                            <div class="email-tick user-profile"><img class="profile-img img-fluid" src="assets/images/avatars/thumb-4.jpg" alt=""></div> 
                                          
                                            <div class="open-mail"> 
                                              <div class="email-detail pl-2"> 
                                                <p class="from">Cleverson Muniz</p> 
                                                <p class="subject">(11) 98765-9876</p> 
                                                <span class="datetime">
                                                  <a href="" class="btn btn-default btn-rounded mb-0 p-0" style="width: 36px; height: 36px; line-height: 36px;">X</a>
                                                </span>
                                              </div>
                                            </div>
                                          </li>

                                          <li class="email-item">
                                            <div class="email-tick user-profile"><img class="profile-img img-fluid" src="assets/images/avatars/thumb-5.jpg" alt=""></div> 
                                          
                                            <div class="open-mail"> 
                                              <div class="email-detail pl-2"> 
                                                <p class="from">Cleverson Muniz</p> 
                                                <p class="subject">(11) 98765-9876</p> 
                                                <span class="datetime">
                                                  <a href="" class="btn btn-default btn-rounded mb-0 p-0" style="width: 36px; height: 36px; line-height: 36px;">X</a>
                                                </span>
                                              </div>
                                            </div>
                                          </li>

                                          <li class="email-item">
                                            <div class="email-tick user-profile"><img class="profile-img img-fluid" src="assets/images/avatars/thumb-6.jpg" alt=""></div> 
                                          
                                            <div class="open-mail"> 
                                              <div class="email-detail pl-2"> 
                                                <p class="from">Cleverson Muniz</p> 
                                                <p class="subject">(11) 98765-9876</p> 
                                                <span class="datetime">
                                                  <a href="" class="btn btn-default btn-rounded mb-0 p-0" style="width: 36px; height: 36px; line-height: 36px;">X</a>
                                                </span>
                                              </div>
                                            </div>
                                          </li>

                                          <li class="email-item">
                                            <div class="email-tick user-profile"><img class="profile-img img-fluid" src="assets/images/avatars/thumb-7.jpg" alt=""></div> 
                                          
                                            <div class="open-mail"> 
                                              <div class="email-detail pl-2"> 
                                                <p class="from">Cleverson Muniz</p> 
                                                <p class="subject">(11) 98765-9876</p> 
                                                <span class="datetime">
                                                  <a href="" class="btn btn-default btn-rounded mb-0 p-0" style="width: 36px; height: 36px; line-height: 36px;">X</a>
                                                </span>
                                              </div>
                                            </div>
                                          </li>

                                          <li class="email-item">
                                            <div class="email-tick user-profile"><img class="profile-img img-fluid" src="assets/images/avatars/thumb-8.jpg" alt=""></div> 
                                          
                                            <div class="open-mail"> 
                                              <div class="email-detail pl-2"> 
                                                <p class="from">Cleverson Muniz</p> 
                                                <p class="subject">(11) 98765-9876</p> 
                                                <span class="datetime">
                                                  <a href="" class="btn btn-default btn-rounded mb-0 p-0" style="width: 36px; height: 36px; line-height: 36px;">X</a>
                                                </span>
                                              </div>
                                            </div>
                                          </li>

                                          <li class="email-item">
                                            <div class="email-tick user-profile"><img class="profile-img img-fluid" src="assets/images/avatars/thumb-9.jpg" alt=""></div> 
                                          
                                            <div class="open-mail"> 
                                              <div class="email-detail pl-2"> 
                                                <p class="from">Cleverson Muniz</p> 
                                                <p class="subject">(11) 98765-9876</p> 
                                                <span class="datetime">
                                                  <a href="" class="btn btn-default btn-rounded mb-0 p-0" style="width: 36px; height: 36px; line-height: 36px;">X</a>
                                                </span>
                                              </div>
                                            </div>
                                          </li>

                                          <li class="email-item">
                                            <div class="email-tick user-profile"><img class="profile-img img-fluid" src="assets/images/avatars/thumb-10.jpg" alt=""></div> 
                                          
                                            <div class="open-mail"> 
                                              <div class="email-detail pl-2"> 
                                                <p class="from">Cleverson Muniz</p> 
                                                <p class="subject">(11) 98765-9876</p> 
                                                <span class="datetime">
                                                  <a href="" class="btn btn-default btn-rounded mb-0 p-0" style="width: 36px; height: 36px; line-height: 36px;">X</a>
                                                </span>
                                              </div>
                                            </div>
                                          </li>

                                          <li class="email-item">
                                            <div class="email-tick user-profile"><img class="profile-img img-fluid" src="assets/images/avatars/thumb-11.jpg" alt=""></div> 
                                          
                                            <div class="open-mail"> 
                                              <div class="email-detail pl-2"> 
                                                <p class="from">Cleverson Muniz</p> 
                                                <p class="subject">(11) 98765-9876</p> 
                                                <span class="datetime">
                                                  <a href="" class="btn btn-default btn-rounded mb-0 p-0" style="width: 36px; height: 36px; line-height: 36px;">X</a>
                                                </span>
                                              </div>
                                            </div>
                                          </li>

                                          <li class="email-item">
                                            <div class="email-tick user-profile"><img class="profile-img img-fluid" src="assets/images/avatars/thumb-12.jpg" alt=""></div> 
                                          
                                            <div class="open-mail"> 
                                              <div class="email-detail pl-2"> 
                                                <p class="from">Cleverson Muniz</p> 
                                                <p class="subject">(11) 98765-9876</p> 
                                                <span class="datetime">
                                                  <a href="" class="btn btn-default btn-rounded mb-0 p-0" style="width: 36px; height: 36px; line-height: 36px;">X</a>
                                                </span>
                                              </div>
                                            </div>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                              
                                  <div class="email-content">                       
                                    <div class="email-content-wrapper">
                                      <div class="email-content-detail">
                                        <div class="detail-head">
                                          <ul class="list-unstyled list-info">
                                            <li>
                                              <div class="pdd-vertical-10 pdd-horizon-20">	
                                                <img class="thumb-img img-circle" alt="" src="assets/images/avatars/thumb-1.jpg">
                                                <div class="info">
                                                  <span class="title font-size-16">Cleverson Muniz</span>
                                                  <span class="sub-title"><span>To: (11) 98765-9876</span></span>
                                                </div>
                                              </div>
                                            </li>
                                          </ul>
                                      
                                          <ul class="tools">
                                            <li class="font-size-13 info p-0" style="border-right: 1px solid #DDD;">
                                              <span class="title font-size-16" style="float:left; width:100%;"><b>PONTOS</b></span>
                                              <span class="sub-title" style="float:left; width:100%;">200</span>    
                                            </li>

                                            <li class="font-size-13 info pl-5 pt-0 pb-0">
                                              <span class="title font-size-16" style="float:left; width:100%;">
                                                <button data-toggle="modal" data-target="#default-modal" class="btn btn-default mb-0">EDITAR</button>
                                              </span>
                                            </li>

                                            <!--li class="d-none d-md-inline-block"><a href=""><i class="fa fa-reply"></i></a></li-->
                                            <!--li class="d-none d-md-inline-block"><a href=""><i class="ti-more-alt"></i></a></li-->
                                          </ul>
                                        </div> 

                                        <hr>
                                        
                                        <div class="detail-body pl-0 pr-0">

                                          <div class="mt-2 mb-4">
                                            <a href="" class="btn btn-default">Pontuar</a>
                                            <a href="" class="btn btn-default">Fazer uma Troca</a>
                                            <a href="" class="btn btn-default">Assinar BeautyCard</a>
                                          </div>

                                          <div class="table-overflow">
                                            <table class="table table-hover">
                                              <!--thead>
                                                <tr>
                                                  <th>Firstname</th>
                                                  <th>Lastname</th>
                                                  <th>Email</th>
                                                </tr>
                                              </thead-->
                                              
                                              <tbody>
                                                <tr>
                                                  <td>Trocou 30 pontos por uma Limpeza de Pele</td>
                                                  <td>Feito pelo APP</td>
                                                  <td>há 3 minutos</td>
                                                </tr>
                                                
                                                <tr>
                                                  <td>Fez Checkin</td>
                                                  <td>Feito por Barbara</td>
                                                  <td>há 6 horas</td>
                                                </tr>
                                                
                                                <tr>
                                                  <td>Acrescentou 30 pontos</td>
                                                  <td>Feito por Gabriela</td>
                                                  <td>Ontem ás 8h</td>
                                                </tr>

                                                <tr>
                                                  <td>Retirados 30 pontos</td>
                                                  <td>Feito pelo APP</td>
                                                  <td>Dia 28/04/2018 as 14h</td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </div>

                                        </div>    
                                        
                                        <div class="detail-foot"></div>
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
                      
                    <div role="tabpanel" class="tab-pane fade" id="nav-pills-2">
                      <div class="pdd-vertical-20">
                        <div class="row">

                          <div class="col-lg-12">
                            <div class="card">

                              <div class="email-app">
                                <div class="email-wrapper row ml-0">
                                  <div class="email-list">
                                    <div class="email-list-tools" style="padding: 10px;">
                                      <div class="row mr-0 ml-0">
                                        <div class="input-icon form-group col-lg-10 pl-0 pr-0 mb-0">
                                          <i class="ti-search"></i>
                                          <input type="text" class="form-control m-b" placeholder="Buscar...">
                                        </div>
                                      
                                        <ul class="tools text-right col-lg-2 pl-0 pr-0">
                                          <li>
                                            <button data-toggle="modal" data-target="#default-modal" class="btn btn-primary btn-rounded p-0 mb-0 mr-0" style="width:36px; height:36px; line-height:36px; color:#FFF;"><i class="ti-plus"></i></button>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  
                                    <div class="email-list-wrapper scrollable">
                                      <div class="list-view-group-container">
                                        <ul class="email-list-item">
                                          <li class="email-item">
                                            <div class="email-tick user-profile"><img class="profile-img img-fluid" src="assets/images/avatars/thumb-1.jpg" alt=""></div> 
                                          
                                            <div class="open-mail"> 
                                              <div class="email-detail pl-2"> 
                                                <p class="from">Cleverson Muniz</p> 
                                                <p class="subject">(11) 98765-9876</p> 
                                                <span class="datetime">
                                                  <a href="" class="btn btn-default btn-rounded mb-0 p-0" style="width: 36px; height: 36px; line-height: 36px;">X</a>
                                                </span>
                                              </div>
                                            </div>
                                          </li>

                                          <li class="email-item">
                                            <div class="email-tick user-profile"><img class="profile-img img-fluid" src="assets/images/avatars/thumb-2.jpg" alt=""></div> 
                                          
                                            <div class="open-mail"> 
                                              <div class="email-detail pl-2"> 
                                                <p class="from">Cleverson Muniz</p> 
                                                <p class="subject">(11) 98765-9876</p> 
                                                <span class="datetime">
                                                  <a href="" class="btn btn-default btn-rounded mb-0 p-0" style="width: 36px; height: 36px; line-height: 36px;">X</a>
                                                </span>
                                              </div>
                                            </div>
                                          </li>

                                          <li class="email-item">
                                            <div class="email-tick user-profile"><img class="profile-img img-fluid" src="assets/images/avatars/thumb-3.jpg" alt=""></div> 
                                          
                                            <div class="open-mail"> 
                                              <div class="email-detail pl-2"> 
                                                <p class="from">Cleverson Muniz</p> 
                                                <p class="subject">(11) 98765-9876</p> 
                                                <span class="datetime">
                                                  <a href="" class="btn btn-default btn-rounded mb-0 p-0" style="width: 36px; height: 36px; line-height: 36px;">X</a>
                                                </span>
                                              </div>
                                            </div>
                                          </li>

                                          <li class="email-item">
                                            <div class="email-tick user-profile"><img class="profile-img img-fluid" src="assets/images/avatars/thumb-4.jpg" alt=""></div> 
                                          
                                            <div class="open-mail"> 
                                              <div class="email-detail pl-2"> 
                                                <p class="from">Cleverson Muniz</p> 
                                                <p class="subject">(11) 98765-9876</p> 
                                                <span class="datetime">
                                                  <a href="" class="btn btn-default btn-rounded mb-0 p-0" style="width: 36px; height: 36px; line-height: 36px;">X</a>
                                                </span>
                                              </div>
                                            </div>
                                          </li>

                                          <li class="email-item">
                                            <div class="email-tick user-profile"><img class="profile-img img-fluid" src="assets/images/avatars/thumb-5.jpg" alt=""></div> 
                                          
                                            <div class="open-mail"> 
                                              <div class="email-detail pl-2"> 
                                                <p class="from">Cleverson Muniz</p> 
                                                <p class="subject">(11) 98765-9876</p> 
                                                <span class="datetime">
                                                  <a href="" class="btn btn-default btn-rounded mb-0 p-0" style="width: 36px; height: 36px; line-height: 36px;">X</a>
                                                </span>
                                              </div>
                                            </div>
                                          </li>

                                          <li class="email-item">
                                            <div class="email-tick user-profile"><img class="profile-img img-fluid" src="assets/images/avatars/thumb-6.jpg" alt=""></div> 
                                          
                                            <div class="open-mail"> 
                                              <div class="email-detail pl-2"> 
                                                <p class="from">Cleverson Muniz</p> 
                                                <p class="subject">(11) 98765-9876</p> 
                                                <span class="datetime">
                                                  <a href="" class="btn btn-default btn-rounded mb-0 p-0" style="width: 36px; height: 36px; line-height: 36px;">X</a>
                                                </span>
                                              </div>
                                            </div>
                                          </li>

                                          <li class="email-item">
                                            <div class="email-tick user-profile"><img class="profile-img img-fluid" src="assets/images/avatars/thumb-7.jpg" alt=""></div> 
                                          
                                            <div class="open-mail"> 
                                              <div class="email-detail pl-2"> 
                                                <p class="from">Cleverson Muniz</p> 
                                                <p class="subject">(11) 98765-9876</p> 
                                                <span class="datetime">
                                                  <a href="" class="btn btn-default btn-rounded mb-0 p-0" style="width: 36px; height: 36px; line-height: 36px;">X</a>
                                                </span>
                                              </div>
                                            </div>
                                          </li>

                                          <li class="email-item">
                                            <div class="email-tick user-profile"><img class="profile-img img-fluid" src="assets/images/avatars/thumb-8.jpg" alt=""></div> 
                                          
                                            <div class="open-mail"> 
                                              <div class="email-detail pl-2"> 
                                                <p class="from">Cleverson Muniz</p> 
                                                <p class="subject">(11) 98765-9876</p> 
                                                <span class="datetime">
                                                  <a href="" class="btn btn-default btn-rounded mb-0 p-0" style="width: 36px; height: 36px; line-height: 36px;">X</a>
                                                </span>
                                              </div>
                                            </div>
                                          </li>

                                          <li class="email-item">
                                            <div class="email-tick user-profile"><img class="profile-img img-fluid" src="assets/images/avatars/thumb-9.jpg" alt=""></div> 
                                          
                                            <div class="open-mail"> 
                                              <div class="email-detail pl-2"> 
                                                <p class="from">Cleverson Muniz</p> 
                                                <p class="subject">(11) 98765-9876</p> 
                                                <span class="datetime">
                                                  <a href="" class="btn btn-default btn-rounded mb-0 p-0" style="width: 36px; height: 36px; line-height: 36px;">X</a>
                                                </span>
                                              </div>
                                            </div>
                                          </li>

                                          <li class="email-item">
                                            <div class="email-tick user-profile"><img class="profile-img img-fluid" src="assets/images/avatars/thumb-10.jpg" alt=""></div> 
                                          
                                            <div class="open-mail"> 
                                              <div class="email-detail pl-2"> 
                                                <p class="from">Cleverson Muniz</p> 
                                                <p class="subject">(11) 98765-9876</p> 
                                                <span class="datetime">
                                                  <a href="" class="btn btn-default btn-rounded mb-0 p-0" style="width: 36px; height: 36px; line-height: 36px;">X</a>
                                                </span>
                                              </div>
                                            </div>
                                          </li>

                                          <li class="email-item">
                                            <div class="email-tick user-profile"><img class="profile-img img-fluid" src="assets/images/avatars/thumb-11.jpg" alt=""></div> 
                                          
                                            <div class="open-mail"> 
                                              <div class="email-detail pl-2"> 
                                                <p class="from">Cleverson Muniz</p> 
                                                <p class="subject">(11) 98765-9876</p> 
                                                <span class="datetime">
                                                  <a href="" class="btn btn-default btn-rounded mb-0 p-0" style="width: 36px; height: 36px; line-height: 36px;">X</a>
                                                </span>
                                              </div>
                                            </div>
                                          </li>

                                          <li class="email-item">
                                            <div class="email-tick user-profile"><img class="profile-img img-fluid" src="assets/images/avatars/thumb-12.jpg" alt=""></div> 
                                          
                                            <div class="open-mail"> 
                                              <div class="email-detail pl-2"> 
                                                <p class="from">Cleverson Muniz</p> 
                                                <p class="subject">(11) 98765-9876</p> 
                                                <span class="datetime">
                                                  <a href="" class="btn btn-default btn-rounded mb-0 p-0" style="width: 36px; height: 36px; line-height: 36px;">X</a>
                                                </span>
                                              </div>
                                            </div>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                              
                                  <div class="email-content">                       
                                    <div class="email-content-wrapper">
                                      <div class="email-content-detail">
                                        <div class="detail-head">
                                          <ul class="list-unstyled list-info">
                                            <li>
                                              <div class="pdd-vertical-10 pdd-horizon-20">	
                                                <img class="thumb-img img-circle" alt="" src="assets/images/avatars/thumb-1.jpg">
                                                <div class="info">
                                                  <span class="title font-size-16">Cleverson Muniz</span>
                                                  <span class="sub-title"><span>To: (11) 98765-9876</span></span>
                                                </div>
                                              </div>
                                            </li>
                                          </ul>
                                      
                                          <ul class="tools">
                                            <li class="font-size-13 info p-0" style="border-right: 1px solid #DDD;">
                                              <span class="title font-size-16" style="float:left; width:100%;"><b>PONTOS</b></span>
                                              <span class="sub-title" style="float:left; width:100%;">200</span>    
                                            </li>

                                            <li class="font-size-13 info pl-5 pt-0 pb-0">
                                              <span class="title font-size-16" style="float:left; width:100%;">
                                                <button data-toggle="modal" data-target="#default-modal" class="btn btn-default mb-0">EDITAR</button>
                                              </span>
                                            </li>

                                            <!--li class="d-none d-md-inline-block"><a href=""><i class="fa fa-reply"></i></a></li-->
                                            <!--li class="d-none d-md-inline-block"><a href=""><i class="ti-more-alt"></i></a></li-->
                                          </ul>
                                        </div> 

                                        <hr>
                                        
                                        <div class="detail-body pl-0 pr-0">

                                          <div class="mt-2 mb-4">
                                            <a href="" class="btn btn-default">Pontuar</a>
                                            <a href="" class="btn btn-default">Fazer uma Troca</a>
                                            <a href="" class="btn btn-default">Assinar BeautyCard</a>
                                          </div>

                                          <div class="table-overflow">
                                            <table class="table table-hover">
                                              <!--thead>
                                                <tr>
                                                  <th>Firstname</th>
                                                  <th>Lastname</th>
                                                  <th>Email</th>
                                                </tr>
                                              </thead-->
                                              
                                              <tbody>
                                                <tr>
                                                  <td>Trocou 30 pontos por uma Limpeza de Pele</td>
                                                  <td>Feito pelo APP</td>
                                                  <td>há 3 minutos</td>
                                                </tr>
                                                
                                                <tr>
                                                  <td>Fez Checkin</td>
                                                  <td>Feito por Barbara</td>
                                                  <td>há 6 horas</td>
                                                </tr>
                                                
                                                <tr>
                                                  <td>Acrescentou 30 pontos</td>
                                                  <td>Feito por Gabriela</td>
                                                  <td>Ontem ás 8h</td>
                                                </tr>

                                                <tr>
                                                  <td>Retirados 30 pontos</td>
                                                  <td>Feito pelo APP</td>
                                                  <td>Dia 28/04/2018 as 14h</td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </div>

                                        </div>    
                                        
                                        <div class="detail-foot"></div>
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