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
            
            <div class="page-title"><h4>Configurações</h4></div>
          
            <div class="row">
              <div class="col-md-12">
                <div class="row">

                  <div class="col-md-3">
                    <div class="widget-profile-1 card">
                      <div class="profile border bottom">
                        <img class="mrg-top-30" src="assets/images/others/img-10.jpg" alt="">
                        <h4 class="mrg-top-20 no-mrg-btm text-semibold">Victoria Clayton</h4>
                        <p>UI/UX Designer</p>
                      </div>
                    </div>
                  </div>
                  
                  <div-- class="col-md-9">
                    <div class="card">
                      <div class="card-heading border bottom"><h4 class="card-title">General Info</h4></div>
                      
                      <div class="card-block">
                        <div class="row">
                          <div class="col-md-3"><p class="mrg-top-10 text-dark"> <b>Name</b></p></div>
                          <div class="col-md-6"><input type="text" class="form-control" value="Victoria Clayton"></div>
                        </div>
                        
                        <hr>
                        
                        <div class="row">
                          <div class="col-md-3"><p class="mrg-top-10 text-dark"> <b>Email</b></p></div>
                          <div class="col-md-6"><p class="mrg-top-10">victoria93@gmail.com</p></div>
                        </div>
                        
                        <hr>
                        
                        <div class="row">
                          <div class="col-md-3"><p class="mrg-top-10 text-dark"> <b>Avatar</b></p></div>
                          <div class="col-md-6">
                            <div>
                              <label for="img-upload" class="pointer">
                                <img src="assets/images/others/img-10.jpg" width="117" alt="">
                                <span class="btn btn-default display-block no-mrg-btm">Choose file</span>
                                <input class="d-none" type="file" name="uploadedimages0" multiple id="img-upload">
                              </label>
                            </div>
                          </div>
                        </div>
                        
                        <hr>
                        
                        <div class="row">
                          <div class="col-md-3"><p class="mrg-top-10 text-dark"> <b>Location</b></p></div>
                          <div class="col-md-6"><p class="mrg-top-10">New York, United State</p></div>
                        </div>
                        
                        <hr>
                        
                        <div class="row">
                          <div class="col-md-3"><p class="mrg-top-10 text-dark"> <b>Status</b></p></div>
                          <div class="col-md-6">
                            <p class="mrg-top-10">
                              <span class="status online mrg-top-10"></span>
                              <span class="mrg-left-10">Available</span>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!--div class="card">
                      <div class="card-heading border bottom"><h4 class="card-title">Conneted Social Network</h4></div>
                      
                      <div class="card-block">
                        <div class="row">
                          <div class="col-md-4">
                            <span class="btn-facebook border-radius-4 inline-block">
                              <span class="pdd-horizon-10 lh-2-5 display-block"><i class="ti-facebook"></i></span>
                            </span>
                            
                            <span class="mrg-left-10 font-size-16 text-dark text-bold">Facebook</span>
                          </div>
                          
                          <div class="col-md-8 text-right">
                            <p class="mrg-top-10">
                              <span>https://www.facebook.com/profile</span>
                              <a href="" class="btn btn-danger btn-inverse btn-xs no-mrg-btm mrg-left-10 border-radius-4"><i class="fa fa-ban"></i></a>
                            </p>
                          </div>
                        </div>
                        
                        <hr>
                        
                        <div class="row">
                          <div class="col-md-4">
                            <span class="btn-google-plus border-radius-4 inline-block">
                              <span class="pdd-horizon-10 lh-2-5 display-block"><i class="ti-google"></i></span>
                            </span>
                            
                            <span class="mrg-left-10 font-size-16 text-dark text-bold">Google+</span>
                          </div>
                          
                          <div class="col-md-8 text-right">
                            <p class="mrg-top-10">
                              <span>https://www.plus.google.com/profile</span>
                              <a href="" class="btn btn-danger btn-inverse btn-xs no-mrg-btm mrg-left-10 border-radius-4"><i class="fa fa-ban"></i></a>
                            </p>
                          </div>
                        </div>
                        
                        <hr>
                        
                        <div class="row">
                          <div class="col-md-4">
                            <span class="btn-twitter border-radius-4 inline-block">
                              <span class="pdd-horizon-10 lh-2-5 display-block"><i class="ti-twitter"></i></span>
                            </span>
                            
                            <span class="font-size-16 mrg-left-10 text-dark text-bold">Twitter</span>
                          </div>
                          
                          <div class="col-md-8 text-right">
                            <p class="mrg-top-10">
                              <span>https://www.twitter.com/profile</span>
                              <a href="" class="btn btn-danger btn-inverse btn-xs no-mrg-btm mrg-left-10 border-radius-4"><i class="fa fa-ban"></i></a>
                            </p>
                          </div>
                        </div>
                        
                        <hr>
                        
                        <div class="row">
                          <div class="col-md-4">
                            <span class="btn-dribbble border-radius-4 inline-block">
                              <span class="pdd-horizon-10 lh-2-5 display-block"><i class="ti-dribbble"></i></span>
                            </span>
                            
                            <span class="font-size-16 mrg-left-10 text-dark text-bold">Dribbble</span>
                          </div>
                          
                          <div class="col-md-8 text-right">
                            <p class="mrg-top-10">
                              <span>https://www.dribbble.com/profile</span>
                              <a href="" class="btn btn-danger btn-inverse btn-xs no-mrg-btm mrg-left-10 border-radius-4"><i class="fa fa-ban"></i></a>
                            </p>
                          </div>
                        </div>
                        
                        <hr>
                        
                        <div class="row">
                          <div class="col-md-4">
                            <span class="btn-linkedin border-radius-4 inline-block">
                              <span class="pdd-horizon-10 lh-2-5 display-block"><i class="ti-linkedin"></i></span>
                            </span>
                            
                            <span class="font-size-16 mrg-left-10 text-dark text-bold">Linkedin</span>
                          </div>
                          
                          <div class="col-md-8 text-right">
                            <p class="mrg-top-10">
                              <span>https://www.linkedin.com/profile</span>
                              <a href="" class="btn btn-danger btn-inverse btn-xs no-mrg-btm mrg-left-10 border-radius-4"><i class="fa fa-ban"></i></a>
                            </p>
                          </div>
                        </div>
                      </div>
                      
                      <div class="card-footer border top">
                        <div class="text-right">
                          <a href="" class="btn btn-primary">Add</a>
                        </div>
                      </div>
                    </div-->
                    
                    <div class="card">
                      <div class="card-heading border bottom"><h4 class="card-title">Authentication</h4></div>
                      
                      <div class="card-block">
                        <div class="row">
                          <div class="col-md-10">
                            <ul class="list-unstyled list-info">
                              <li><span class="thumb-img pdd-top-10"><i class="ti-user font-size-30"></i></span>
                              
                              <div class="info">
                                <b class="text-dark font-size-16">Everyone can look me up</b>
                                <p>A Jedi can feel the Force flowing through him. You mean it controls your actions</p>
                              </div>
                            </li>
                          </ul>
                        </div>
                        
                        <div class="col-md-2 text-right">
                          <div class="toggle-checkbox toggle-success checkbox-inline toggle-sm mrg-top-15">
                            <input type="checkbox" name="toggle1" id="toggle1" checked>
                            <label for="toggle1"></label>
                          </div>
                        </div>
                      </div>
                      
                      <hr>
                      
                      <div class="row">
                        <div class="col-md-10">
                          <ul class="list-unstyled list-info">
                            <li>
                              <span class="thumb-img pdd-top-10"><i class="ti-mobile font-size-30"></i></span>
                              <div class="info">
                                <b class="text-dark font-size-16">Everyone can contact me</b>
                                <p>When we heard about Alderaan, we were afraid that you were</p>
                              </div>
                            </li>
                          </ul>
                        </div>
                        
                        <div class="col-md-2 text-right">
                          <div class="toggle-checkbox toggle-success checkbox-inline toggle-sm mrg-top-15">
                            <input type="checkbox" name="toggle2" id="toggle2">
                            <label for="toggle2"></label>
                          </div>
                        </div>
                      </div>
                      
                      <hr>
                      
                      <div class="row">
                        <div class="col-md-10">
                          <ul class="list-unstyled list-info">
                            <li>
                              <span class="thumb-img pdd-top-10"><i class="ti-location-pin font-size-30"></i></span>
                              <div class="info">
                                <b class="text-dark font-size-16">Show my location</b>
                                <p> I said, all systems have been alerted to your presence, sir. </p>
                              </div>
                            </li>
                          </ul>
                        </div>
                        
                        <div class="col-md-2 text-right">
                          <div class="toggle-checkbox toggle-success checkbox-inline toggle-sm mrg-top-15">
                            <input type="checkbox" name="toggle3" id="toggle3" checked>
                            <label for="toggle3"></label>
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

  <!-- page js -->

</body>
</html>