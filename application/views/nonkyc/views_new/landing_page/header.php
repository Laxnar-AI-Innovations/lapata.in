<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0; 
}
</style>
<style>
    #toast-container > div{
        opacity: 1;
    }
    .btn-style-green{
        position: relative!important;
    color: #fff!important;
    font-size: 16px!important;
    line-height: 26px!important;
    font-weight: 600!important;
    padding: 12px 35px!important;
    border-radius: 25px!important;
    background-color: green!important;
    box-shadow: 0 11px 21.25px 3.75px rgb(194 191 255 / 65%)!important;
    }
    .btn-style-green:hover {
        color: #fff!important;
        /*background-color:#0daf96!important;*/
        background-color:crimson!important;
    }
    .btn-style-upload{
        position: relative!important;
    color: #fff!important;
    font-size: 16px!important;
    line-height: 26px!important;
    font-weight: 600!important;
    padding: 12px 35px!important;
    border-radius: 25px!important;
    background-color: #403ab4!important;
    box-shadow: 0 11px 21.25px 3.75px rgb(194 191 255 / 65%)!important;
    }
    .btn-style-upload:hover {
        color: #fff!important;
        /*background-color:#0daf96!important;*/
        background-color:crimson!important;
    }
    .btn-style-grey{
        position: relative!important;
        color: #fff!important;
        font-size: 16px!important;
        line-height: 26px!important;
        font-weight: 600!important;
        padding: 12px 35px!important;
        border-radius: 25px!important;
        background-color: #444!important;
        box-shadow: 0 11px 21.25px 3.75px rgb(194 191 255 / 65%)!important;
    }
    
    .btn-style-grey:hover {
        color: #fff!important;
        background-color:crimson!important;
    }
    .btn-style-red{
        position: relative!important;
    color: #fff!important;
    font-size: 16px!important;
    line-height: 26px!important;
    font-weight: 600!important;
    padding: 12px 35px!important;
    border-radius: 25px!important;
    background-color: #ff2201!important;
    box-shadow: 0 11px 21.25px 3.75px rgb(194 191 255 / 65%)!important;
    }
    .swal2-cancel{
        position: relative!important;
        font-size: 16px!important;
        line-height: 16px!important;
        font-weight: 600!important;
        padding: 12px 35px!important;
        border-radius: 25px!important;
    }
    .btn-style-red:hover {
        color: #fff!important;
        /*background-color:#0daf96!important;*/
        background-color:crimson!important;
    }
    .btn-style-four{
        position: relative!important;
        color: #fff!important;
        font-size: 16px!important;
        line-height: 26px!important;
        font-weight: 600!important;
        padding: 12px 35px!important;
        border-radius: 25px!important;
        background-color: #403ab4!important;
        box-shadow: 0 11px 21.25px 3.75px rgb(194 191 255 / 65%)!important;
    }
    .btn-style-four:hover {
        color: #fff!important;
        /*background-color:#0daf96!important;*/
        background-color:crimson!important;
    }
    .btn-style-five{
        position: relative!important;
        color: #fff!important;
        font-size: 16px!important;
        line-height: 26px!important;
        font-weight: 600!important;
        padding: 12px 35px!important;
        border-radius: 25px!important;
        background-color: #2196f3!important;
        box-shadow: 0 11px 21.25px 3.75px rgb(194 191 255 / 65%)!important;
    }
    .btn-style-five:hover {
        color: #fff!important;
        background-color:crimson!important;
    }
    input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0; 
}
       @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');


#h11 {
  text-transform: uppercase;
	background-image: linear-gradient(to right top, #ffff34, #ffc812, #ff8f2f, #ff554d, #eb1267);
   background-size: 50% auto;
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;
  font-family: 'Poppins', sans-serif;
  font-size: 8vw;
  animation: gradientAnim 7.5s ease  alternate infinite;
}

.btn-style-yellow{
        position: relative!important;
        color: #fff!important;
        border:0!important;
        font-size: 16px!important;
        line-height: 26px!important;
        font-weight: 600!important;
        padding: 12px 35px!important;
        border-radius: 25px!important;
        background-color: #ff9800!important;
        box-shadow: 0 11px 21.25px 3.75px rgb(194 191 255 / 65%)!important;
    }
    .btn-style-yellow:hover {
        color: #fff!important;
        /*background-color:#0daf96!important;*/
        background-color:crimson!important;
    }

.preloader {
    display:none;
  justify-content: center;
  align-items: center;
  height: 100vh;
  width: 100%;
  background: rgb(23, 22, 22);
  position: fixed;
  top: 0;
  left: 0;
  z-index: 9999;
  transition: opacity 0.3s linear;
}

.reset{
    position: relative;
    color: #fff;
    font-size: 16px;
    line-height: 16px;
    font-weight: 600;
    padding: 12px 35px;
    border-radius: 25px;
}

.next{
    background: #1e88e5!important;
    position: relative;
    color: #fff;
    font-size: 16px;
    line-height: 16px;
    font-weight: 600;
    padding: 12px 35px;
    border-radius: 25px;
}

.next:hover{
    color: #fff!important;
    background-color:crimson!important;
}

.save{
    position: relative;
    color: #fff;
    font-size: 16px;
    line-height: 16px;
    font-weight: 600;
    padding: 12px 35px;
    border-radius: 25px;
    background-color:#008000!important;
}

button:disabled{
    opacity: 0.65
  }

   .disabled-on-loading:disabled:before {
        opacity: 0.65;
        content: "\f110";
        font-weight: 900;
        margin-right:0.2rem;
        display: inline-block;
        font: normal normal normal 14px/1;
        font-family: "Font Awesome 5 Free";
        -webkit-font-smoothing: antialiased;
        display: inline-block;
        text-rendering: auto;
        line-height: 1;
        animation: fa-spin 1s infinite steps(9);
    }


@keyframes gradientAnim {
  to {
    background-position: 100% top;
  }
 </style>
<div class="content-wrapper">
      <div class="content-wrapper">
    <header class="wrapper bg-soft-primary">
      <nav class="navbar navbar-expand-lg classic transparent navbar-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
          <div class="navbar-brand w-100">
            <img class="logo-dark" src="<?php echo base_url(); ?>assets/img/logo_new_ag.png" srcset="<?php echo base_url(); ?>assets/img/logo_new_ag.png" alt="missing and alert" style="height:4rem;" />
              <img class="logo-light" src="<?php echo base_url(); ?>assets/img/logo_new_ag.png" srcset="<?php echo base_url(); ?>assets/img/logo_new_ag.png" alt="missing and alert"  style="height:4rem;" />
          </div>
          <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header d-lg-none">
              <!--<h3 class="text-white fs-30 mb-0">-->
              <!--  <img class="logo-light" src="<?php echo base_url(); ?>assets/img/oldlogo.png" srcset="<?php echo base_url(); ?>assets/img/oldlogo.png" alt="missing and alert" style="height:5rem;width:100%" />-->
              <!--</h3>-->
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link " href="<?php echo base_url();?>" >
                      <i style="font-size: 1rem;" class="fa fa-lg fa-home ps-2 pe-2 text-center" aria-hidden="true"></i>
                      Home </a>
                  
                </li>
               <!--<li class="nav-item dropdown">-->
               <!--   <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">About Us </a>-->
               <!--   <ul class="dropdown-menu">-->
               <!--     <li class="nav-item"><a class="dropdown-item" href="<?php echo base_url(); ?>landing/about?page=about">About Us</a></li>-->
               <!--     <li class="nav-item"><a class="dropdown-item" href="<?php echo base_url(); ?>landing/about?page=service">Service</a></li>-->
               <!--     <li class="nav-item"><a class="dropdown-item" href="#">Our Mission</a></li>-->
               <!--     <li class="nav-item"><a class="dropdown-item" href="#">Our Vision</a></li>-->
               <!--   </ul>-->
               <!-- </li>-->
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown">
                      <i style="font-size: 1rem;" class="fa fa-lg fa-search ps-2 pe-2 text-center" aria-hidden="true"></i>
                      Search </a>
                  <ul class="dropdown-menu">
                    <li class="nav-item"><a class="dropdown-item text-success" href="<?php echo base_url(); ?>check-person-details">Search Person By Identity</a></li>
                    <!--<li class="nav-item"><a class="dropdown-item text-warning" href="<?php echo base_url(); ?>check-person-filter-details">Search Person By Filter</a></li>-->
                    <!--<li class="nav-item"><a class="dropdown-item text-warning" href="<?php echo base_url(); ?>check-person-face">Search Person By Face</a></li>-->
                    <li class="nav-item"><a class="dropdown-item text-sky" href="<?php echo base_url(); ?>check-vehicle-details">Search Vehicle Details</a></li>
                    <li class="nav-item"><a class="dropdown-item text-danger" href="<?php echo base_url(); ?>login">Search Unknown Person</a></li>
                  </ul>
                </li>
                <?php 
                    if($this->session->userdata('user_login') == 'yes'){
               ?>
                <li class="nav-item d-md-none d-block">
                  <?php 
                    if($_SESSION['login_type'] == 'user')
                    {
                  ?>
                <a href="<?php echo base_url(); ?>user-dashboard" class="nav-link" ><i class="fa fa-arrow-circle-left ps-2 pe-2 text-center fa-lg"></i> Go to <?= $_SESSION['login_type']; ?> Dashboard</a>
                <?php }else if($_SESSION['login_type'] == 'police')
                    { ?>
                <a href="<?php echo base_url(); ?>police" class="nav-link"><i class="fa fa-arrow-circle-left"></i> Go to <?= $_SESSION['login_type']; ?> Dashboard</a>
                <?php }else{ ?>
                <a href="<?php echo base_url(); ?>ngo" class="nav-link"><i class="fa fa-arrow-circle-left"></i> Go to <?= $_SESSION['login_type']; ?> Dashboard</a>
                <?php } ?>
                <?php } ?>
               <!--<li class="nav-item dropdown">-->
               <!--   <a class="nav-link " href="<?php echo base_url();?>create-an-account" >Register </a>-->
                  
               <!-- </li>-->
               <?php 
                    if(!$this->session->userdata('user_login') == 'yes'){
               ?>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown">
                      <i style="font-size: 1rem;" class="fa fa-lg fa-edit ps-2 pe-2 text-center" aria-hidden="true"></i>
                      Register </a>
                  <ul class="dropdown-menu">
                    <li class="nav-item"><a class="dropdown-item" href="<?php echo base_url(); ?>create-an-account">General User</a></li>
                    <li class="nav-item"><a class="dropdown-item text-warning" href="<?php echo base_url(); ?>commercial-register">Commercial (Firm)</a></li>
                    <li class="nav-item"><a class="dropdown-item text-success" href="<?php echo base_url(); ?>ngo-register">Social NGO</a></li>
                    <li class="nav-item"><a class="dropdown-item text-danger" href="<?php echo base_url(); ?>police-thana-account">Police Department</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown">
                        <i style="font-size: 1rem;" class="fa fa-lg fa-sign-in ps-2 pe-2 text-center" aria-hidden="true"></i>
                       Login </a>
                  <ul class="dropdown-menu">
                    <li class="nav-item"><a class="dropdown-item" href="<?php echo base_url(); ?>login">General User</a></li>
                    <li class="nav-item"><a class="dropdown-item text-warning" href="<?php echo base_url(); ?>hotel">Commercial (Firm)</a></li>
                    <li class="nav-item"><a class="dropdown-item text-success" href="<?php echo base_url(); ?>social-login">Social NGO</a></li>
                    <li class="nav-item"><a class="dropdown-item text-danger" href="<?php echo base_url(); ?>police-thana-login">Police Department</a></li>
                  </ul>
                </li>
              </ul>
              <!-- /.navbar-nav -->
              <!--<div class="offcanvas-footer d-lg-none">-->
              <!--  <div>-->
              <!--    <a href="cdn-cgi/l/email-protection.html#482e213a3b3c6624293b3c082d25292124662b2725" class="link-inverse"><span class="__cf_email__" data-cfemail="0d64636b624d68606c6461236e6260">[email&#160;protected]</span></a>-->
              <!--    <br /> 00 (123) 456 78 90 <br />-->
              <!--    <nav class="nav social social-white mt-4">-->
              <!--      <a href="#"><i class="uil uil-twitter"></i></a>-->
              <!--      <a href="#"><i class="uil uil-facebook-f"></i></a>-->
              <!--      <a href="#"><i class="uil uil-dribbble"></i></a>-->
              <!--      <a href="#"><i class="uil uil-instagram"></i></a>-->
              <!--      <a href="#"><i class="uil uil-youtube"></i></a>-->
              <!--    </nav>-->
                 
              <!--  </div>-->
              <!--</div>-->
              <!-- /.offcanvas-footer -->
            </div>
            <!-- /.offcanvas-body -->
          </div>
          <!-- /.navbar-collapse -->
          <div class="navbar-other ms-lg-4">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
                <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-info"><i class="uil uil-info-circle"></i></a></li>
              <!--<li class="nav-item d-none d-md-block">-->
              <!--  <a href="<?php echo base_url(); ?>login" class="btn btn-sm btn-primary rounded-pill" >Sign In</a>-->
              <!--</li>-->
              
              <!--<li class="nav-item d-none d-md-block">-->
              <!--  <a href="#" class="btn btn-sm btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#modal-signin">Sign In</a>-->
              <!--</li>-->
              <li class="nav-item d-lg-none">
                <button class="hamburger offcanvas-nav-btn"><span></span></button>
              </li>
                
                <?php 
                    if(isset($_SESSION['landingMob']))
                    {
                ?>
                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="javascript:void(0)" data-bs-toggle="dropdown">
                        <img src="<?php echo base_url(); ?>assets/img/profile-img.jpg" alt="Profile" style="height:50px;width:50px;" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['landingMob']; ?></span>
                    </a><!-- End Profile Iamge Icon -->
    
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile" style="right:11px!important;float:left!important;position:absolute!important;left:auto!important;">
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url(); ?>landing/removeMobile">
                                <span style="font-weight: 600;font-family: serif;">Remove</span>
                            </a>
                        </li>
                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->
                <?php } ?>
            </ul>
            <!-- /.navbar-nav -->
          </div>
            <?php }else{ ?>
              </ul>
            </div>
          </div>
          <!-- /.navbar-collapse -->
          <div class="navbar-other ms-lg-4">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
                <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-info"><i class="uil uil-info-circle"></i></a></li>
              <li class="nav-item d-none d-md-block">
                  <?php 
                    if($_SESSION['login_type'] == 'user')
                    {
                  ?>
                <a href="<?php echo base_url(); ?>user-dashboard" class="btn btn-sm btn-primary rounded-pill" >Go to Dashboard</a>
                <?php }else if($_SESSION['login_type'] == 'police')
                    { ?>
                <a href="<?php echo base_url(); ?>police" class="btn btn-sm btn-primary rounded-pill" >Go to Dashboard</a>
                <?php }else{ ?>
                <a href="<?php echo base_url(); ?>ngo" class="btn btn-sm btn-primary rounded-pill" >Go to Dashboard</a>
                <?php } ?>
              </li>
              
              <!--<li class="nav-item d-none d-md-block">-->
              <!--  <a href="#" class="btn btn-sm btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#modal-signin">Sign In</a>-->
              <!--</li>-->
              <li class="nav-item d-lg-none">
                <button class="hamburger offcanvas-nav-btn"><span></span></button>
              </li>
                
                <?php 
                    if(isset($_SESSION['landingMob']))
                    {
                ?>
                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="javascript:void(0)" data-bs-toggle="dropdown">
                        <img src="<?php echo base_url(); ?>assets/img/profile-img.jpg" alt="Profile" style="height:50px;width:50px;" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['landingMob']; ?></span>
                    </a><!-- End Profile Iamge Icon -->
    
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile" style="right:11px!important;float:left!important;position:absolute!important;left:auto!important;">
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url(); ?>landing/removeMobile">
                                <span style="font-weight: 600;font-family: serif;">Remove</span>
                            </a>
                        </li>
                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->
                <?php } ?>
            </ul>
            <!-- /.navbar-nav -->
          </div>
            <?php } ?>
          <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->
      <div class="modal fade" id="modal-signin" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-sm">
          <div class="modal-content text-center">
            <div class="modal-body">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              <h2 class="mb-3 text-start">Welcome Back</h2>
              <p class="lead mb-6 text-start">Fill your email and password to sign in.</p>
              <form class="text-start mb-3">
                <div class="form-floating mb-4">
                  <input type="email" class="form-control" placeholder="Email" id="loginEmail">
                  <label for="loginEmail">Email</label>
                </div>
                <div class="form-floating password-field mb-4">
                  <input type="password" class="form-control" placeholder="Password" id="loginPassword">
                  <span class="password-toggle"><i class="uil uil-eye"></i></span>
                  <label for="loginPassword">Password</label>
                </div>
                <a class="btn btn-primary rounded-pill btn-login w-100 mb-2">Sign In</a>
              </form>
              <!-- /form -->
              <p class="mb-1"><a href="#" class="hover">Forgot Password?</a></p>
              <p class="mb-0">Don't have an account? <a href="#" data-bs-target="#modal-signup" data-bs-toggle="modal" data-bs-dismiss="modal" class="hover">Sign up</a></p>
              <div class="divider-icon my-4">or</div>
              <nav class="nav social justify-content-center text-center">
                <a href="#" class="btn btn-circle btn-sm btn-google"><i class="uil uil-google"></i></a>
                <a href="#" class="btn btn-circle btn-sm btn-facebook-f"><i class="uil uil-facebook-f"></i></a>
                <a href="#" class="btn btn-circle btn-sm btn-twitter"><i class="uil uil-twitter"></i></a>
              </nav>
              <!--/.social -->
            </div>
            <!--/.modal-content -->
          </div>
          <!--/.modal-body -->
        </div>
        <!--/.modal-dialog -->
      </div>
      <!--/.modal -->
      <div class="modal fade" id="modal-signup" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-sm">
          <div class="modal-content text-center">
            <div class="modal-body">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              <h2 class="mb-3 text-start">Sign up to Sandbox</h2>
              <p class="lead mb-6 text-start">Registration takes less than a minute.</p>
              <form class="text-start mb-3">
                <div class="form-floating mb-4">
                  <input type="text" class="form-control" placeholder="Name" id="loginName">
                  <label for="loginName">Name</label>
                </div>
                <div class="form-floating mb-4">
                  <input type="email" class="form-control" placeholder="Email" id="loginEmail">
                  <label for="loginEmail">Email</label>
                </div>
                <div class="form-floating password-field mb-4">
                  <input type="password" class="form-control" placeholder="Password" id="loginPassword">
                  <span class="password-toggle"><i class="uil uil-eye"></i></span>
                  <label for="loginPassword">Password</label>
                </div>
                <div class="form-floating password-field mb-4">
                  <input type="password" class="form-control" placeholder="Confirm Password" id="loginPasswordConfirm">
                  <span class="password-toggle"><i class="uil uil-eye"></i></span>
                  <label for="loginPasswordConfirm">Confirm Password</label>
                </div>
                <a class="btn btn-primary rounded-pill btn-login w-100 mb-2">Sign Up</a>
              </form>
              <!-- /form -->
              <p class="mb-0">Already have an account? <a href="#" data-bs-target="#modal-signin" data-bs-toggle="modal" data-bs-dismiss="modal" class="hover">Sign in</a></p>
              <div class="divider-icon my-4">or</div>
              <nav class="nav social justify-content-center text-center">
                <a href="#" class="btn btn-circle btn-sm btn-google"><i class="uil uil-google"></i></a>
                <a href="#" class="btn btn-circle btn-sm btn-facebook-f"><i class="uil uil-facebook-f"></i></a>
                <a href="#" class="btn btn-circle btn-sm btn-twitter"><i class="uil uil-twitter"></i></a>
              </nav>
              <!--/.social -->
            </div>
            <!--/.modal-content -->
          </div>
          <!--/.modal-body -->
        </div>
        <!--/.modal-dialog -->
      </div>
      <!--/.modal -->
      <div class="offcanvas offcanvas-end text-inverse" id="offcanvas-info" data-bs-scroll="true">
        <div class="offcanvas-header">
          <h3 class="text-white fs-30 mb-0">Khoji</h3>

           <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body pb-6">
          <!-- <div class="widget mb-8">
            <p>We are here to provide a service where anyone can search thier missing person/ vehicle or devices. User can create an account by using Aadhaar verification and then user can save their information.  </p>
          </div> -->
          <!-- /.widget -->
          <!-- <div class="widget mb-8">
            <h4 class="widget-title text-white mb-3">Contact Info</h4>
            <address> Jhansi <br /> U.P.</address>
            <a href="#"><span class="__cf_email__" data-cfemail="9ff6f1f9f0dffaf2fef6f3b1fcf0f2">[email&#160;protected]</span></a><br /> 00 (123) 456 78 90
          </div> -->
          <!-- /.widget -->
          <div class="widget mb-8">
            <h4 class="widget-title text-white mb-3">Find More</h4>
            <ul class="list-unstyled">
              <li><a href="<?php echo base_url(); ?>check-person-details">Search Person</a></li>
              <li><a href="<?php echo base_url(); ?>check-vehicle-details">Search Vehicle</a></li>
              <li><a href="javascript:void(0);">Search Mobile</a></li>
              <!-- <li><a href="#">Contact Us</a></li> -->
            </ul>
          </div>
          <!-- /.widget -->
          <!--<div class="widget">-->
          <!--  <h4 class="widget-title text-white mb-3">Follow Us</h4>-->
          <!--  <nav class="nav social social-white">-->
          <!--    <a href="#"><i class="uil uil-twitter"></i></a>-->
          <!--    <a href="#"><i class="uil uil-facebook-f"></i></a>-->
          <!--    <a href="#"><i class="uil uil-dribbble"></i></a>-->
          <!--    <a href="#"><i class="uil uil-instagram"></i></a>-->
          <!--    <a href="#"><i class="uil uil-youtube"></i></a>-->
          <!--  </nav>-->
           
          <!--</div>-->
          <!-- /.widget -->
        </div>
        <!-- /.offcanvas-body -->
      </div>
      <!-- /.offcanvas -->
    </header>
    <!-- /header -->