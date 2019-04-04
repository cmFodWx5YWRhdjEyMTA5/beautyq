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
                        <div class="page-title">
                            <h4>Modals</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h5 class="mrg-btm-10">Default Modal</h5>
                                                <img class="img-fluid mrg-horizon-auto mrg-btm-15" src="assets/images/others/modal-md.jpg" alt="">
                                                <div class="row">
                                                    <div class="col-lg-8 col-md-12">
                                                        <p class="font-size-12">This is default modal with or without animation. simply add your animation class to modal animate it.</p>
                                                    </div>
                                                    <div class="col-lg-4 col-md-12 text-right pdd-top-5">
                                                        <button data-toggle="modal" data-target="#default-modal" class="btn btn-sm btn-primary">Trigger</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <h5 class="mrg-btm-10">Side Modal Right</h5>
                                                <img class="img-fluid mrg-horizon-auto mrg-btm-15" src="assets/images/others/modal-right.jpg" alt="">
                                                <div class="row">
                                                    <div class="col-lg-8 col-md-12">
                                                        <p class="font-size-12">This is side modal with right slide in animation. Modal backdrop is removable by adding <code>.no-backdrop</code> class.</p>
                                                    </div>
                                                    <div class="col-lg-4 col-md-12 text-right pdd-top-5">
                                                        <button data-toggle="modal" data-target="#side-modal-r" class="btn btn-sm btn-primary">Trigger</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <h5 class="mrg-btm-10">Side Modal Left</h5>
                                                <img class="img-fluid mrg-horizon-auto mrg-btm-15" src="assets/images/others/modal-left.jpg" alt="">
                                                <div class="row">
                                                    <div class="col-lg-8 col-md-12">
                                                        <p class="font-size-12">This is side modal with left slide in animation. Modal backdrop is removable by adding <code>.no-backdrop</code> class.</p>
                                                    </div>
                                                    <div class="col-lg-4 col-md-12 text-right pdd-top-5">
                                                        <button data-toggle="modal" data-target="#side-modal-l" class="btn btn-sm btn-primary">Trigger</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-block">
                                        <h5 class="mrg-btm-10">Modal Small</h5>
                                        <img class="img-fluid mrg-horizon-auto mrg-btm-15" src="assets/images/others/modal-sm.jpg" alt="">
                                        <div class="row">
                                            <div class="col-lg-8 col-md-12">
                                                <p class="font-size-12">Modal size is configurable, Add class <code>.modal-sm</code> to smaller modal window</p>
                                            </div>
                                            <div class="col-lg-4 col-md-12 text-right pdd-top-5">
                                                <button data-toggle="modal" data-target="#modal-sm" class="btn btn-sm btn-primary">Trigger</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-block">
                                        <h5 class="mrg-btm-10">Modal Large</h5>
                                        <img class="img-fluid mrg-horizon-auto mrg-btm-15" src="assets/images/others/modal-lg.jpg" alt="">
                                        <div class="row">
                                            <div class="col-lg-8 col-md-12">
                                                <p class="font-size-12">Modal size is configurable, Add class <code>.modal-lg</code> to bigger modal window</p>
                                            </div>
                                            <div class="col-lg-4 col-md-12 text-right pdd-top-5">
                                                <button data-toggle="modal" data-target="#modal-lg" class="btn btn-sm btn-primary">Trigger</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-block">
                                        <h5 class="mrg-btm-10">Modal Full Screen</h5>
                                        <img class="img-fluid mrg-horizon-auto mrg-btm-15" src="assets/images/others/modal-fs.jpg" alt="">
                                        <div class="row">
                                            <div class="col-lg-8 col-md-12">
                                                <p class="font-size-12">Modal is a full screen popup, Add class <code>.modal-fs</code> to make modal window full screen</p>
                                            </div>
                                            <div class="col-lg-4 col-md-12 text-right pdd-top-5">
                                                <button data-toggle="modal" data-target="#modal-fs" class="btn btn-sm btn-primary">Trigger</button>
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
                                    <h4>Modal Template</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Orbiting the planet at maximum velocity. The moon with the Rebel base will be in range in thirty minutes. This will be a day long remembered. It has seen the end of Kenobi and it will soon see the end of the Rebellion.</p>
                                    <p>A fighter that size couldn't get this deep into space on its own. Well, he ain't going to be around long enough to tell anyone about us. Look at him. He's headed for that small moon. I think I can get him before he gets there...he's almost in range. That's no moon! It's a space station. It's too big to be a space station. I have a very bad feeling about this. Yeah, I think your right. Full reverse! Chewie, lock in the auxiliary power. Why are we still moving towards it? We're caught in a tractor beam! It's pulling us in! But there's gotta be something you can do! There's nothin' I can do about it, kid. I'm in full power. I'm going to have to shut down. But they're not going to get me without a fight! You can't win. But there are alternatives to fighting.</p>
                                </div>
                                <div class="modal-footer no-border">
                                    <div class="text-right">
                                        <button class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
                                        <button class="btn btn-primary btn-sm" data-dismiss="modal">OK</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal slide-in-right modal-right fade " id="side-modal-r">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="side-modal-wrapper">
                                    <div class="vertical-align">
                                        <div class="table-cell">
                                            <div class="pdd-horizon-15">
                                                <h4>Sign Up</h4>
                                                <p class="mrg-btm-15 font-size-13">Please enter your email and password to create account</p>
                                                <form>
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" placeholder="Email Adress">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" class="form-control" placeholder="Password">
                                                    </div>
                                                    <div class="checkbox font-size-12">
                                                        <input id="agreement" name="agreement" type="checkbox">
                                                        <label for="agreement">I agree with the <a href="">Privacy &amp; Policy</a></label>
                                                    </div>
                                                    <button class="btn btn-info btn-sm">Sign Up</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <span>Already have an account? <a href="">Login Now</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal slide-in-left modal-left fade " id="side-modal-l">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="side-modal-wrapper">
                                    <div class="vertical-align">
                                        <div class="table-cell">
                                            <div class="pdd-horizon-15">
                                                <h4>Sign Up</h4>
                                                <p class="mrg-btm-15 font-size-13">Please enter your email and password to create account</p>
                                                <form>
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" placeholder="Email Adress">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" class="form-control" placeholder="Password">
                                                    </div>
                                                    <div class="checkbox font-size-12">
                                                        <input id="agreement-2" name="agreement-2" type="checkbox">
                                                        <label for="agreement-2">I agree with the <a href="">Privacy &amp; Policy</a></label>
                                                    </div>
                                                    <button class="btn btn-info btn-sm">Sign Up</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <span>Already have an account? <a href="">Login Now</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="modal-sm">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="text-center">
                                        <img class="img-responsive mrg-horizon-auto mrg-vertical-25" src="assets/images/others/img-1.jpg" alt="">
                                        <h3>Espire</h3>
                                        <p>18 items</p>
                                    </div>
                                </div>
                                <button data-dismiss="modal" class="btn btn-primary btn-block no-mrg no-border pdd-vertical-15 ng-scope">
                                    <span class="text-uppercase">View Now</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="modal-lg">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="padding-15">
                                        <div class="row">
                                            <div class="ml-auto col-md-5">
                                                <h3 class="mrg-btm-20 mrg-top-130">Download App</h3>
                                                <p>Let me see your identification. You don't need to see his identification. We don't need to see his identification. These are not the droids.</p>
                                                <div class="mrg-top-20">
                                                    <a href="" data-dismiss="modal" class="btn btn-info">Noted!</a>
                                                </div>
                                            </div>
                                            <div class="col-md-6 text-center">
                                                <img class="img-fluid mrg-horizon-auto" src="assets/images/others/img-2.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade modal-fs" id="modal-fs">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-body height-100">
                                    <div class="vertical-align text-center">
                                        <div class="table-cell">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-4 mr-auto ml-auto">
                                                        <div class="pdd-horizon-30 pdd-btm-50">
                                                            <img class="img-responsive mrg-horizon-auto" src="assets/images/others/mailing.png" alt="">
                                                            <h4 class="mrg-top-20">We'ill launch soon!</h4>
                                                            <p class="mrg-btm-15">Subscribe us</p>
                                                            <form class="ng-pristine ng-valid">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">@</span>
                                                                        <input type="email" class="form-control" placeholder="Email Adress">
                                                                    </div>
                                                                </div>
                                                                <button class="btn btn-info btn-block text-bold text-uppercase">Sign Up</button>
                                                            </form>
                                                            <small>No worries, we won't spam</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="modal-close" href="" data-dismiss="modal">
                                        <i class="ti-close"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal END-->
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