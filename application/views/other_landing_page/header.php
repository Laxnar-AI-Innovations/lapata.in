

<div class="preloader">
<svg width="200" height="200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-ripple" style="background:0 0;position: absolute;left: 44%;top: 35%;">
        <circle cx="50" cy="50" r="4.719" fill="none" stroke="#1d3f72" stroke-width="2">
            <animate attributeName="r" calcMode="spline" values="0;40" keyTimes="0;1" dur="3" keySplines="0 0.2 0.8 1" begin="-1.5s" repeatCount="indefinite"/><animate attributeName="opacity" calcMode="spline" values="1;0" keyTimes="0;1" dur="3" keySplines="0.2 0 0.8 1" begin="-1.5s" repeatCount="indefinite"/></circle><circle cx="50" cy="50" r="27.591" fill="none" stroke="#5699d2" stroke-width="2"><animate attributeName="r" calcMode="spline" values="0;40" keyTimes="0;1" dur="3" keySplines="0 0.2 0.8 1" begin="0s" repeatCount="indefinite"/><animate attributeName="opacity" calcMode="spline" values="1;0" keyTimes="0;1" dur="3" keySplines="0.2 0 0.8 1" begin="0s" repeatCount="indefinite"/></circle></svg>
    
</div>
<div class="content-wrapper">
<div class="">
<header class="wrapper bg-soft-primary" style="display:none;">
    <nav class="navbar navbar-expand-md classic transparent navbar-light ">
        <div class="container px-0 flex-lg-row flex-nowrap align-items-center" style="justify-content: space-around;">
            <div class="col-auto">
                <div class="navbar-brand w-100 pb-0" style="cursor: pointer;" onclick="location.href='<?= base_url(); ?>'">
                    <img class="logo-dark logo-img-height" style=" height:75px"  src="<?php echo base_url(); ?>assets/images/khoji.webp" srcset="<?php echo base_url(); ?>assets/images/khoji.webp" alt="Khoji"  />
                    <img class="logo-light logo-img-height height_75" style=" height:75px" src="<?php echo base_url(); ?>assets/images/khoji.webp" srcset="<?php echo base_url(); ?>assets/images/khoji.webp" alt="Khoji"   />
                </div>
            </div>
            <div class="col-auto d-md-none <?= $_SESSION['user_login'] == 'yes' ? 'd-none' : ''; ?>">
                <?php 
                    if($this->session->userdata('user_login') == 'yes'){
                ?>
                    <?php 
                        if($_SESSION['login_type'] == 'user')
                        {
                    ?>
                    <button class="hamburger dropdown-toggle dropdown" data-bs-toggle="dropdown"><span></span></button>
                    <ul class="py-1 dropdown-menu dropdown-menu-center" >
                        <li>
                            <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>user-dashboard">
                                <span class="regular_font"><i class="fa fa-arrow-circle-left ps-2 pe-2 text-center fa-lg"></i> Go to Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>user/logout">
                                <span class="regular_font"><i class="fa fa-sign-out ps-2 pe-2 text-center fa-lg"></i> Logout</span>
                            </a>
                        </li>
                    </ul>
                    <?php }else if($_SESSION['login_type'] == 'police'){ ?>
                    <button class="hamburger dropdown-toggle dropdown" data-bs-toggle="dropdown"><span></span></button>
                    <ul class="py-1 dropdown-menu dropdown-menu-center" >
                        <li>
                            <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>police">
                                <span class="regular_font"><i class="fa fa-arrow-circle-left ps-2 pe-2 text-center fa-lg"></i> Go to Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>user/logout">
                                <span class="regular_font"><i class="fa fa-sign-out ps-2 pe-2 text-center fa-lg"></i> Logout</span>
                            </a>
                        </li>
                    </ul>
                    <?php }else{ 
                        if($_SESSION['login_type'] == 'NonKyc')
                        {
                    ?>
                    <button class="hamburger dropdown-toggle dropdown" data-bs-toggle="dropdown"><span></span></button>
                    <ul class="py-1 dropdown-menu dropdown-menu-center" >
                        <li>
                            <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>NonKyc">
                                <span class="regular_font"><i class="fa fa-arrow-circle-left ps-2 pe-2 text-center fa-lg"></i> Go to Dashboard</span>
                            </a>
                        </li>
                    </ul>
                    <?php }else{ 
                        if($_SESSION['login_type'] == 'digiLocker')
                        {
                    ?>
                    <button class="hamburger dropdown-toggle dropdown" data-bs-toggle="dropdown"><span></span></button>
                    <ul class="py-1 dropdown-menu" >
                        <li>
                            <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>digilocker-dashboard">
                                <span class="regular_font"><i class="fa fa-arrow-circle-left ps-2 pe-2 text-center fa-lg"></i> Go to Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>user/logout">
                                <span class="regular_font"><i class="fa fa-sign-out ps-2 pe-2 text-center fa-lg"></i> Logout</span>
                            </a>
                        </li>
                    </ul>
                    <?php }else{ ?>
                    <button class="hamburger dropdown-toggle dropdown" data-bs-toggle="dropdown"><span></span></button>
                    <ul class="py-1 dropdown-menu" >
                        <li>
                            <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>ngo">
                                <span class="regular_font"><i class="fa fa-arrow-circle-left ps-2 pe-2 text-center fa-lg"></i> Go to Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>user/logout">
                                <span class="regular_font"><i class="fa fa-sign-out ps-2 pe-2 text-center fa-lg"></i> Logout</span>
                            </a>
                        </li>
                    </ul>
                    <?php } } ?>
                <?php } } ?>
            </div>
            <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                <div class="offcanvas-header d-lg-none">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body ms-lg-auto px-3 d-flex flex-column h-100">
                    <ul class="navbar-nav align-items-center">
                        <?php 
                            if(!$this->session->userdata('user_login') == 'yes'){
                        ?>
                        <li class="nav-item dropdown me-2 mb-2 mb-md-0 w-100">
                            <a class="nav-link border border-1 p-1" href="<?php echo base_url();?>landing-page" >
                            <i class="fa fa-lg fa-home ps-0 pe-2 text-center fnt_size_1rem" aria-hidden="true"></i>
                            Home </a>
                        </li>
                       
                        <li class="nav-item dropdown me-2 mb-2 mb-md-0 w-100">
                            <a class="nav-link dropdown-toggle border border-1 p-1" href="javascript:void(0);" data-bs-toggle="dropdown">
                            <i class="fa fa-lg fa-search ps-0 pe-2 text-center fnt_size_1rem" aria-hidden="true"></i>
                            Search &nbsp;&nbsp;</a>
                            <ul class="dropdown-menu">
                               
                                <li class="nav-item"><a class="dropdown-item text-primary" href="<?php echo base_url(); ?>check-person-face">Search Person By Face Photo</a></li>
                                <li class="nav-item"><a class="dropdown-item text-success" href="<?php echo base_url(); ?>check-person-details">Search Person By Identity</a></li>
                                <li class="nav-item"><a class="dropdown-item text-warning" href="<?php echo base_url(); ?>login?clickedOn=missing-filter">Search Missing Person By Filter</a></li>
                              
                                <li class="nav-item"><a class="dropdown-item text-danger" href="<?php echo base_url(); ?>login?clickedOn=unknown-filter">Search Unknown Person By Filter</a></li>
                                <li class="nav-item"><a class="dropdown-item text-sky" href="<?php echo base_url(); ?>check-vehicle-details">Search Vehicle Details</a></li>
                            </ul>
                        </li>
                        <?php }else{ ?>
                        <li class="nav-item dropdown pe-0">
                            <?php 
                                if($_SESSION['login_type'] == 'user')
                                {
                                    $getUserDetail = $this->db->query('select * from user where uid='.$_SESSION['user_id'])->result_array();
                            ?>
                            <span class="nav-link nav-profile d-none d-md-flex align-items-center pe-0" data-bs-toggle="dropdown">
                                <img src="<?php echo base_url(); ?><?php echo $getUserDetail[0]['aadharphoto']; ?>" alt="Profile" class="rounded-circle aadhar-img-header">
                                <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['aadharName']; ?></span>
                            </span><!-- End Profile Iamge Icon -->
                            <ul class="py-1 dropdown-menu dropdown-menu-end dropdown-menu-arrow profile list-shiva" >
                                <li>
                                    <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>user-dashboard">
                                        <span class="regular_font"><i class="fa fa-arrow-circle-left ps-2 pe-2 text-center fa-lg"></i> Go to Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>user/logout">
                                        <span class="regular_font"><i class="fa fa-sign-out ps-2 pe-2 text-center fa-lg"></i> Logout</span>
                                    </a>
                                </li>
                            </ul>
                            <?php }else if($_SESSION['login_type'] == 'police'){ 
                            ?>    
                            <span class="nav-link nav-profile d-none d-md-flex align-items-center pe-0" href="javascript:void(0)" data-bs-toggle="dropdown">
                                <img src="<?php echo base_url(); ?>assets/img/criminal.png" alt="Profile" class="rounded-circle aadhar-img-header">
                                <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['thanaName']; ?></span>
                            </span><!-- End Profile Iamge Icon -->
                            <ul class="py-1 dropdown-menu dropdown-menu-end dropdown-menu-arrow profile list-shiva" >
                                <li>
                                    <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>police">
                                        <span class="regular_font"><i class="fa fa-arrow-circle-left ps-2 pe-2 text-center fa-lg"></i> Go to Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>user/logout">
                                        <span class="regular_font"><i class="fa fa-sign-out ps-2 pe-2 text-center fa-lg"></i> Logout</span>
                                    </a>
                                </li>
                            </ul>
                            <?php }else if($_SESSION['login_type'] == 'ngo'){ 
                                $getNgoDetail = $this->db->query('select * from ngo where Id='.$_SESSION['ngo_id'])->result_array();
                            ?>
                            <span class="nav-link nav-profile d-none d-md-flex align-items-center pe-0" href="javascript:void(0)" data-bs-toggle="dropdown">
                                <img src="<?php echo base_url(); ?><?php echo $getNgoDetail[0]['aadharphoto']; ?>" alt="Profile" class="rounded-circle aadhar-img-header">
                                <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['aadharName']; ?></span>
                            </span><!-- End Profile Iamge Icon -->
                            <ul class="dropdown-menu py-1 dropdown-menu-end dropdown-menu-arrow profile list-shiva" >
                                <li>
                                    <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>ngo">
                                        <span class="regular_font"><i class="fa fa-arrow-circle-left ps-2 pe-2 text-center fa-lg"></i> Go to Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>user/logout">
                                        <span class="regular_font"><i class="fa fa-sign-out ps-2 pe-2 text-center fa-lg"></i> Logout</span>
                                    </a>
                                </li>
                            </ul>
                            <?php }else
                                { 
                                    if($_SESSION['login_type'] == 'NonKyc')
                                    {
                            ?>
                            <span class="nav-link nav-profile d-none d-md-flex align-items-center pe-0" href="javascript:void(0)" data-bs-toggle="dropdown">
                                <?php 
                                    if(isset($_SESSION['gender']))
                                    {
                                        if($_SESSION['gender'] == 'Male')
                                        {
                                ?>
                                <img src="<?php echo base_url(); ?>assets/images/maleColor.avif" alt="Profile" class="rounded-circle aadhar-img-header">
                                <?php }else{ ?>
                                <img src="<?php echo base_url(); ?>assets/images/femaleColor.avif" alt="Profile" class="rounded-circle aadhar-img-header">
                                <?php } }else{ ?>
                                <img src="<?php echo base_url(); ?>assets/img/find_mobile.jpg" alt="Profile" class="rounded-circle aadhar-img-header">
                                <?php } ?>
                                <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo substr_replace($_SESSION['landingMob'],'XXXXXXX',0,7); ?></span>
                            </span><!-- End Profile Iamge Icon -->
                            <ul class="dropdown-menu py-1 dropdown-menu-end dropdown-menu-arrow profile list-shiva">
                                <li>
                                    <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>NonKyc">
                                        <span class="regular_font"><i class="fa fa-arrow-circle-left ps-2 pe-2 text-center fa-lg"></i> Go to Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>user/logout">
                                        <span class="regular_font"><i class="fa fa-sign-out ps-2 pe-2 text-center fa-lg"></i> Logout</span>
                                    </a>
                                </li>
                            </ul>
                            <?php }else{ 
                                if($_SESSION['login_type'] == 'digiLocker')
                                {
                                    $getUserDetail = $this->db->query('select * from digilockerUser where Id='.$_SESSION['user_id'])->result_array();
                            ?>
                            <span class="nav-link nav-profile d-none d-md-flex align-items-center pe-0" href="javascript:void(0)" data-bs-toggle="dropdown">
                                <img src="<?php echo base_url(); ?><?= $getUserDetail[0]['aadharPhoto']; ?>" alt="Profile" class="rounded-circle aadhar-img-header">
                                <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['aadharName']; ?></span>
                            </span><!-- End Profile Iamge Icon -->
                            <ul class="dropdown-menu py-1 dropdown-menu-end dropdown-menu-arrow profile list-shiva">
                                <li>
                                    <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>digilocker-dashboard">
                                        <span class="regular_font"><i class="fa fa-arrow-circle-left ps-2 pe-2 text-center fa-lg"></i> Go to Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>user/logout">
                                        <span class="regular_font"><i class="fa fa-sign-out ps-2 pe-2 text-center fa-lg"></i> Logout</span>
                                    </a>
                                </li>
                            </ul>
                            <?php }else{ ?>
                            <span class="nav-link nav-profile d-none d-md-flex align-items-center pe-0" href="javascript:void(0)" data-bs-toggle="dropdown">
                                <img src="<?php echo base_url(); ?>assets/img/hotel.png" alt="Profile" class="rounded-circle aadhar-img-header">
                                <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['name']; ?></span>
                            </span><!-- End Profile Iamge Icon -->
                            <ul class="dropdown-menu py-1 dropdown-menu-end dropdown-menu-arrow profile list-shiva">
                                <li>
                                    <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>hotel">
                                        <span class="regular_font"><i class="fa fa-arrow-circle-left ps-2 pe-2 text-center fa-lg"></i> Go to Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>user/logout">
                                        <span class="regular_font"><i class="fa fa-sign-out ps-2 pe-2 text-center fa-lg"></i> Logout</span>
                                    </a>
                                </li>
                            </ul>
                            <?php } ?>
                            <?php } } } ?>
                        </li>
                        <?php 
                            if($this->session->userdata('user_login') == 'yes')
                            {
                        ?>
                        <li class="nav-item d-md-none d-block">
                            <?php 
                                if($_SESSION['login_type'] == 'user')
                                {
                                ?>
                            <a href="<?php echo base_url(); ?>user-dashboard" class="nav-link" ><i class="fa fa-arrow-circle-left ps-2 pe-2 text-center fa-lg"></i> Go to Dashboard</a>
                            <a href="<?php echo base_url(); ?>user/logout" class="nav-link" ><i class="fa fa-sign-out ps-2 pe-2 text-center fa-lg"></i> Logout</a>
                            <?php }else if($_SESSION['login_type'] == 'police')
                                { 
                                ?>
                            <a href="<?php echo base_url(); ?>police" class="nav-link"><i class="fa fa-arrow-circle-left"></i> Go to Dashboard</a>
                            <a href="<?php echo base_url(); ?>user/logout" class="nav-link" ><i class="fa fa-sign-out ps-2 pe-2 text-center fa-lg"></i> Logout</a>
                            <?php }else{ 
                                if($_SESSION['login_type'] == 'NonKyc')
                                {
                            ?>
                            <a href="<?php echo base_url(); ?>NonKyc" class="nav-link"><i class="fa fa-arrow-circle-left"></i> Go to Dashboard</a>
                            <a href="<?php echo base_url(); ?>user/logout" class="nav-link" ><i class="fa fa-sign-out ps-2 pe-2 text-center fa-lg"></i> Logout</a>
                            <?php }else{ 
                                if($_SESSION['login_type'] == 'digiLocker')
                                {
                            ?>
                            <a href="<?php echo base_url(); ?>digilocker-dashboard" class="nav-link"><i class="fa fa-arrow-circle-left"></i> Go to Dashboard</a>
                            <a href="<?php echo base_url(); ?>user/logout" class="nav-link" ><i class="fa fa-sign-out ps-2 pe-2 text-center fa-lg"></i> Logout</a>
                            <?php }else{ ?>
                            <a href="<?php echo base_url(); ?>ngo" class="nav-link"><i class="fa fa-arrow-circle-left"></i> Go to Dashboard</a>
                            <a href="<?php echo base_url(); ?>user/logout" class="nav-link" ><i class="fa fa-sign-out ps-2 pe-2 text-center fa-lg"></i> Logout</a>
                            <?php } } ?>
                        </li>
                        <?php } }  ?>
                      </ul>
                </div>
                <!-- /.offcanvas-body -->
            </div>
            <!-- /.navbar-collapse -->
            <div class="row  mb-2 pe-1 me-0">
             
                <select class="form-control" style="appearance:auto!important;" onchange="showAccordingly(this.value)">
                    <option value="en">English</option>
                    <option value="hi">Hindi</option>
                </select>
 
        </div>
        <div class="navbar-other ms-md-4">
                <ul class="navbar-nav flex-row align-items-center">
                    <?php 
                        if(!$this->session->userdata('user_login') == 'yes'){
                        ?>
                    <li class="nav-item d-md-none">
                        <button class="hamburger offcanvas-nav-btn"><span></span></button>
                    </li>
                  
                    <?php 
                        if(isset($_SESSION['landingMob']))
                        {
                        ?>
                    <li class="nav-item dropdown pe-0">
                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="javascript:void(0)" data-bs-toggle="dropdown">
                            <?php 
                                if(isset($_SESSION['gender']))
                                {
                                    if($_SESSION['gender'] == 'Male')
                                    {
                            ?>
                            <img src="<?php echo base_url(); ?>assets/images/maleColor.avif" alt="Profile" class="rounded-circle aadhar-img-header">
                            <?php }else{ ?>
                            <img src="<?php echo base_url(); ?>assets/images/femaleColor.avif" alt="Profile" class="rounded-circle aadhar-img-header">
                            <?php } }else{ ?>
                            <img src="<?php echo base_url(); ?>assets/img/find_mobile.jpg" alt="Profile" class="rounded-circle aadhar-img-header">
                            <?php } ?>
                        <span class="d-none d-md-none dropdown-toggle ps-2"><?php echo substr_replace($_SESSION['landingMob'],'XXXXXXX',0,7); ?></span>
                        </a><!-- End Profile Iamge Icon -->
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile list-shiva" style="min-width:max-content;">
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url(); ?>landing/removeMobile">
                                <span class="fnt_size_1rem_with_family">Welcome, <?php echo substr_replace($_SESSION['landingMob'],'XXXXXXX',0,7); ?></span>
                                </a>
                                <hr class="my-0">
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url(); ?>landing/removeMobile">
                                <span class="regular_font">Guest Logout</span>
                                </a>
                            </li>
                        </ul>
                        <!-- End Profile Dropdown Items -->
                    </li>
                    <!-- End Profile Nav -->
                    <?php } ?>
                    <?php }else{ ?>
                    <li class="nav-item d-md-none">
                        <?php 
                            if(!$this->session->userdata('user_login') == 'yes'){
                        ?>
                        <button class="hamburger offcanvas-nav-btn"><span></span></button>
                        <?php } ?>
                        <li class="nav-item dropdown pe-0">
                            <?php 
                                if($_SESSION['login_type'] == 'user')
                                {
                                    $getUserDetail = $this->db->query('select * from user where uid='.$_SESSION['user_id'])->result_array();
                            ?>
                            <span class="nav-link nav-profile d-flex d-md-none align-items-center pe-0" data-bs-toggle="dropdown">
                                <img src="<?php echo base_url(); ?><?php echo $getUserDetail[0]['aadharphoto']; ?>" alt="Profile" class="rounded-circle aadhar-img-header">
                                <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['aadharName']; ?></span>
                            </span><!-- End Profile Iamge Icon -->
                            <ul class="py-1 dropdown-menu dropdown-menu-end dropdown-menu-arrow profile list-shiva" >
                                <li>
                                    <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>user-dashboard">
                                        <span class="regular_font"><i class="fa fa-arrow-circle-left ps-2 pe-2 text-center fa-lg"></i> Go to Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>user/logout">
                                        <span class="regular_font"><i class="fa fa-sign-out ps-2 pe-2 text-center fa-lg"></i> Logout</span>
                                    </a>
                                </li>
                            </ul>
                            <?php }else if($_SESSION['login_type'] == 'police'){ 
                            ?>    
                            <span class="nav-link nav-profile d-flex d-md-none align-items-center pe-0" href="javascript:void(0)" data-bs-toggle="dropdown">
                                <img src="<?php echo base_url(); ?>assets/img/criminal.png" alt="Profile" class="rounded-circle aadhar-img-header">
                                <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['thanaName']; ?></span>
                            </span><!-- End Profile Iamge Icon -->
                            <ul class="py-1 dropdown-menu dropdown-menu-end dropdown-menu-arrow profile list-shiva" >
                                <li>
                                    <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>police">
                                        <span class="regular_font"><i class="fa fa-arrow-circle-left ps-2 pe-2 text-center fa-lg"></i> Go to Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>user/logout">
                                        <span class="regular_font"><i class="fa fa-sign-out ps-2 pe-2 text-center fa-lg"></i> Logout</span>
                                    </a>
                                </li>
                            </ul>
                            <?php }else if($_SESSION['login_type'] == 'ngo'){ 
                                $getNgoDetail = $this->db->query('select * from ngo where Id='.$_SESSION['ngo_id'])->result_array();
                            ?>
                            <span class="nav-link nav-profile d-flex d-md-none align-items-center pe-0" href="javascript:void(0)" data-bs-toggle="dropdown">
                                <img src="<?php echo base_url(); ?><?php echo $getNgoDetail[0]['aadharphoto']; ?>" alt="Profile"  class="rounded-circle aadhar-img-header">
                                <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['aadharName']; ?></span>
                            </span><!-- End Profile Iamge Icon -->
                            <ul class="dropdown-menu py-1 dropdown-menu-end dropdown-menu-arrow profile list-shiva" >
                                <li>
                                    <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>ngo">
                                        <span class="regular_font"><i class="fa fa-arrow-circle-left ps-2 pe-2 text-center fa-lg"></i> Go to Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>user/logout">
                                        <span class="regular_font"><i class="fa fa-sign-out ps-2 pe-2 text-center fa-lg"></i> Logout</span>
                                    </a>
                                </li>
                            </ul>
                            <?php }else{ 
                                if($_SESSION['login_type'] == 'NonKyc')
                                {
                            ?>
                            <span class="nav-link nav-profile d-flex d-md-none align-items-center pe-0" href="javascript:void(0)" data-bs-toggle="dropdown">
                                <?php 
                                    if(isset($_SESSION['gender']))
                                    {
                                        if($_SESSION['gender'] == 'Male')
                                        {
                                ?>
                                <img src="<?php echo base_url(); ?>assets/images/maleColor.avif" alt="Profile" class="rounded-circle aadhar-img-header">
                                <?php }else{ ?>
                                <img src="<?php echo base_url(); ?>assets/images/femaleColor.avif" alt="Profile" class="rounded-circle aadhar-img-header">
                                <?php } }else{ ?>
                                <img src="<?php echo base_url(); ?>assets/img/find_mobile.jpg" alt="Profile" class="rounded-circle aadhar-img-header">
                                <?php } ?>
                                <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo substr_replace($_SESSION['landingMob'],'XXXXXXX',0,7); ?></span>
                            </span><!-- End Profile Iamge Icon -->
                            <ul class="dropdown-menu py-1 dropdown-menu-end dropdown-menu-arrow profile list-shiva" >
                                <li>
                                    <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>NonKyc">
                                        <span class="regular_font"><i class="fa fa-arrow-circle-left ps-2 pe-2 text-center fa-lg"></i> Go to Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>user/logout">
                                        <span class="regular_font"><i class="fa fa-sign-out ps-2 pe-2 text-center fa-lg"></i> Logout</span>
                                    </a>
                                </li>
                            </ul>
                            <?php }else{ 
                                if($_SESSION['login_type'] == 'digiLocker')
                                {
                                    $getUserDetail = $this->db->query('select * from digilockerUser where Id='.$_SESSION['user_id'])->result_array();
                            ?>
                            <span class="nav-link nav-profile d-flex d-md-none align-items-center pe-0" href="javascript:void(0)" data-bs-toggle="dropdown">
                                <img src="<?php echo base_url(); ?><?= $getUserDetail[0]['aadharPhoto']; ?>" alt="Profile" class="rounded-circle aadhar-img-header">
                                <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['aadharName']; ?></span>
                            </span><!-- End Profile Iamge Icon -->
                            <ul class="dropdown-menu py-1 dropdown-menu-end dropdown-menu-arrow profile list-shiva" >
                                <li>
                                    <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>digilocker-dashboard">
                                        <span class="regular_font"><i class="fa fa-arrow-circle-left ps-2 pe-2 text-center fa-lg"></i> Go to Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>user/logout">
                                        <span class="regular_font"><i class="fa fa-sign-out ps-2 pe-2 text-center fa-lg"></i> Logout</span>
                                    </a>
                                </li>
                            </ul>
                            <?php }else{ ?>
                            <span class="nav-link nav-profile d-flex d-md-none align-items-center pe-0" href="javascript:void(0)" data-bs-toggle="dropdown">
                                <img src="<?php echo base_url(); ?>assets/img/hotel.png" alt="Profile" class="rounded-circle aadhar-img-header">
                                <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['name']; ?></span>
                            </span><!-- End Profile Iamge Icon -->
                            <ul class="dropdown-menu py-1 dropdown-menu-end dropdown-menu-arrow profile list-shiva" >
                                <li>
                                    <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>hotel">
                                        <span class="regular_font"><i class="fa fa-arrow-circle-left ps-2 pe-2 text-center fa-lg"></i> Go to Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>user/logout">
                                        <span class="regular_font"><i class="fa fa-sign-out ps-2 pe-2 text-center fa-lg"></i> Logout</span>
                                    </a>
                                </li>
                            </ul>
                            <?php } ?>
                            <?php } } ?>
                        </li>
                    </li>
                    <?php } ?>
                </ul>
            </div>

        </div>
        <?php 
            if($page_name == 'fourth')
            {
                if(!$this->session->userdata('user_login') == 'yes'){
        ?>
        <div class="row d-md-none mb-2 pe-1 ms-auto me-0">
            <div class="col-sm-12 pe-0">
                <a href="<?php echo base_url(); ?>complete-your-kyc"class="btn btn-danger mb-2 btn_new_css" style="font-size:15px;background-image: linear-gradient(93deg, #e01c1e, #d90f0f)!;">Sign Up For Free</a>
            </div>
        </div>
        <?php } } ?>
    </nav>
    <div class="offcanvas offcanvas-end text-inverse" id="offcanvas-info" data-bs-scroll="true">
        <div class="offcanvas-header">
            <h3 class="text-white fs-30 mb-0">Khoji</h3>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body pb-6">
            <div class="widget mb-8">
                <h4 class="widget-title text-white mb-3">Find More</h4>
                <ul class="list-unstyled">
                    <li><a href="<?php echo base_url(); ?>check-person-details">Search Person</a></li>
                    <li><a href="<?php echo base_url(); ?>check-vehicle-details">Search Vehicle</a></li>
                    <li><a href="javascript:void(0);">Search Mobile</a></li>
                    <!-- <li><a href="#">Contact Us</a></li> -->
                </ul>
            </div>
        </div>
    </div>

</header>