<!--this css from shiva sir change the size in mobile and laptop-->
<link href="<?php echo base_url(); ?>assets/css/font_size.css" rel="stylesheet">

<style>
#swal2-html-container{
        margin:0!important;
    }
    /* Defining a custom border on all
        sides except the top side */
    .custom-field {
        border: 3px solid;
        border-top: none;
        margin: 0;
        padding: 8px;
    }

    /* Defining the style of the 
    heading/legend for custom fieldset */
    .custom-field h1 {
        font: 16px normal;
        margin: -16px -8px 0;
    }

    /* Using float:left allows us to mimic
       the legend like fieldset. The 
       float:right property can also be 
       used to show the legend on right side */

    .custom-field h1 span {
        float: left;
    }

    /* Creating the custom top border to make
        it look like fieldset defining small 
        border before the legend. The width 
        can be modified to change position 
        of the legend */
    .custom-field h1:before {
        border-top: 3px solid;
        content: ' ';
        float: left;
        margin: 8px 2px 0 -1px;
        width: 12px;
    }

    /* Defining a long border after the 
    legend, using overflow hidden to 
    actually hide the line behind the 
    legend text. It can be removed
    for a different effect */
    .custom-field h1:after {
        border-top: 3px solid;
        content: ' ';
        display: block;
        height: 24px;
        left: 2px;
        margin: 0 1px 0 0;
        overflow: hidden;
        position: relative;
        top: 8px;
    }
    
    .form-check-input.is-valid~.form-check-label, .was-validated .form-check-input:valid~.form-check-label {
        color: black!important;
    }
    
    .form-check-input.is-valid:checked, .was-validated .form-check-input:valid:checked {
        background-color: #0d6efd!important;
    }
</style>
<style>
    .w-lg-max-content{
        width:100%!important;
    }
    @media screen and (min-width:720px)
    {   
        .w-lg-max-content{
            width:max-content!important;
        }
    }
    
    .phone {
      line-height:32px;
      font-size:18px;
      font-weight:bold;
      color:#fff;
      margin:0;
    }
    .phone svg {
      width:18px;
      height:18px;
      margin-right:4px;
    }
    .phone svg path {
      fill:#fff;
    }
    .phone svg path:nth-child(2) {
      -webkit-animation: header-phone 1s infinite cubic-bezier(.1, .57, .5, 1);
      animation: header-phone 1s infinite cubic-bezier(.1, .57, .5, 1);
    }
    .phone svg path:nth-child(3) {
      -webkit-animation:header-phone2 1s infinite cubic-bezier(.1, .57, .5, 1);
      animation:header-phone2 1s infinite cubic-bezier(.1, .57, .5, 1);
    }
    
    
    
    
    /* Animate phone */
    
    @-webkit-keyframes header-phone {
      0%,30% {opacity:0; -webkit-transform:translate3d(-20px, 20px, 0); transform:translate3d(-20px, 20px, 0)}
      80% {opacity:1; -webkit-transform:translate3d(0, 0, 0); transform:translate3d(0, 0, 0)}
      100%{opacity:0}}
    @keyframes header-phone {
      0%,30%{opacity:0; -webkit-transform:translate3d(-20px, 20px, 0); transform:translate3d(-20px, 20px, 0)}
      80%{opacity:1; -webkit-transform:translate3d(0, 0, 0); transform:translate3d(0, 0, 0)}
      100%{opacity:0}}
    @-webkit-keyframes header-phone2 {
      0%{opacity:0; -webkit-transform:translate3d(-20px, 20px, 0); transform:translate3d(-20px, 20px, 0)}
      70%,90%{opacity:1; -webkit-transform:translate3d(0, 0, 0); transform:translate3d(0, 0, 0)}
      100%{opacity:0}}
    @keyframes header-phone2 {
      0%{opacity:0; -webkit-transform:translate3d(-20px, 20px, 0); transform:translate3d(-20px, 20px, 0)}
      70%,90%{opacity:1; -webkit-transform:translate3d(0, 0, 0); transform:translate3d(0, 0, 0)}
      100%{opacity:0}}
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
        background-color:#0daf96!important;
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
    .btn-style-red:hover {
        color: #fff!important;
        background-color:#0daf96!important;
    }
</style>
<style>
    #detailDiv hr{
      margin-top: 1rem!important;
      margin: 1rem 1rem 1rem 1rem;
    }
    label{
        font-weight: 600!important;
        color: black!important;
    }
</style>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Search Vehicle Details</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
          <li class="breadcrumb-item active">Search Vehicle Details</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row justify-content-center">
         <div class="col-xl-4 col-lg-4 col-sm-12 col-md-4 px-0 <?php if($pn != 1){ echo "d-none"; } ?>">
            <div class="card">
                <div class="card-body mt-3 py-3 w-100 p-3">
                    <form class="row g-3 needs-validation <?php if($pn != 1){ echo "d-none"; } ?>" method="post" novalidate id="step2Form">
                        <?php 
                          $csrf = array(
                            'name' => $this->security->get_csrf_token_name(),
                            'hash' => $this->security->get_csrf_hash()
                            );
                        ?>
                        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                        <div class="custom-field pb-4">
                        <h1>
                            <span style="font-weight:bold;color:red;font-size:large;">
                                Enter-
                            </span>
                        </h1>
                        <div class="pt-0 pb-0 mt-0">
                            <h5 class="card-title text-decoration-underline text-center pb-0 fs-4 pt-0">Search Vehicle Details</h5>
                        </div>
                        <div class="form-floating form-group mb-0 mt-3 col-12 px-0" id="idTypeDiv">
                            <select name="idType" class="form-select" id="idType" aria-label="Select Id Type">
                                <option value="">Select Vehicle Type</option>
                                <?php 
                                    $getVehicleType = $this->db->query('select * from vehicle_type')->result_array();
                                    foreach($getVehicleType as $k=>$v)
                                    {
                                ?>
                                <option value="<?php echo $v['vehicleType'] ?>"><?php echo $v['vehicleType']; ?></option>
                                <?php } ?>
                            </select>
                            <label for="idType" id="vehicleTypeLabel">Select Vehicle Type</label>
                        </div>
                        <div class="form-floating form-group mb-0 mt-3 col-12 px-0" id="searchTypeDiv">
                            <select name="searchType" class="form-select" id="searchType" aria-label="Search By" onchange="showInputAccordingly(this,this.value)">
                                <option value="">Search By</option>
                                <option value="vehicleNumber">Vehicle No.</option>
                                <option value="chassisNumber">Chassis No.</option>
                                <option value="engineNumber">Engine No.</option>
                            </select>
                            <label for="searchType" id="searchLabel">Search By</label>
                        </div>
                        <div id="numberIdentity" class="mt-2 px-0 d-none">
                            <div class="form-floating mt-3 pr-2 row mx-0">
                                <input type="text" class="form-control text-uppercase" id="idNumber" placeholder="Enter Number" onKeyUp="showSearchAccordingly(this.value)">
                                <label for="idNumber" id="idLabel" class="pl-2">Enter Number</label>
                                <div class="invalid-feedback">Please enter Number</div>
                            </div>
                            <div class="row mt-3 mx-0" style="justify-content:space-evenly;text-align:center;">
                                <!--<div class="col-6 col-md-6 pl-2">-->
                                <!--    <button class="btn btn-primary w-auto disabled-on-loading btn-style-red" style="background:black!important" id="btnClear" type="button"> Clear</button>  -->
                                <!--</div>-->
                                <div class="col-6 px-0">
                                    <button class="btn btn-primary w-auto disabled-on-loading btn-style-grey disabled" id="step2Check" type="button"> Search</button>  
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="mainPhotoSelected" >
                    </div>
                    </form>
                </div>
          </div>

        </div>
        <div class="col-xl-8 px-0 <?php if($pn != 2){ echo "d-none"; } ?>">

          <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                        <h4 class="text-danger mb-0">Vehicle Details</h4>
                    </div>
                </div>
                <hr>
                <div class="row">
                <?php 
                    if(isset($_SESSION['vehicleLoggedInId']))
                    {
                        $getDetails= $this->db->query('select * from searchVehicle where Id='.$_SESSION['vehicleLoggedInId'])->result_array();
                        if(count($getDetails) > 0)
                        {
                            if($getDetails[0]['isMissing'] == 1)
                            {
                                if($getDetails[0]['searchType'] == 'vehicleNumber')
                                {
                                    $missingvehicle = $this->db->query('select * from missingvehicle where rcNumber="'.$getDetails[0]['idNumber'].'" and paymentStatus="Success" and isdeleted != 1 and isFound =0')->result_array();   
                                }
                                if($getDetails[0]['searchType'] == 'engineNumber')
                                {
                                    $missingvehicle = $this->db->query('select * from missingvehicle where engineNumber="'.$getDetails[0]['idNumber'].'" and paymentStatus="Success" and isdeleted != 1 and isFound =0')->result_array();   
                                }
                                if($getDetails[0]['searchType'] == 'chassisNumber')
                                {
                                    $missingvehicle = $this->db->query('select * from missingvehicle where chasisNumber="'.$getDetails[0]['idNumber'].'" and paymentStatus="Success" and isdeleted != 1 and isFound =0')->result_array();   
                                }
                            }else{
                                $missingvehicle = array();
                            }   
                        }else{
                            $missingvehicle = array();
                        }
                        if(count($missingvehicle) > 0)
                        {
                ?>
                <div class="col-lg-12 col-md-12 col-sm-12 d-flex flex-column">
                    <div class="row px-3 align-items-center">
                        <div class="col-md-6 col-sm-12 col-lg-6 mt-3">
                            <div class="row mt-3">
                                <div class="col-md-12 text-center border border-2 border-danger p-3">
                                    <h4 class="text-danger text-uppercase"><b>Missing</b></h4>
                                    <h5 class="text-dark text-uppercase mb-0"><span class="text-dark" style="font-weight:bold;font-size:17px;">Missing Date : <span id="missingdatespan"><?php echo date('d-m-Y',strtotime($missingvehicle[0]['dateCreated'])); ?></span></span></h5>
                                </div>
                            </div>
                            <?php 
                                $rewardcount = 0;
                                foreach($missingvehicle as $k=>$v)
                                {
                                    if($v['rewardamount'] != 0 && $v['rewardamount'] != NULL)
                                    {
                                        $rewardcount++;
                            ?>
                            <?php } } ?>
                            <?php if($rewardcount > 0){ ?>
                                <div class="row mt-3">
                                    <div class="col-md-12 text-center  p-3">
                                        <select class="form-control border border-2 border-danger text-center" style="font-weight:bold;font-size:1.3rem;appearance:auto;" id="reward" onchange="showRewardsAccordingly(this.value)">
                                            <?php 
                                                foreach($missingvehicle as $k=>$v)
                                                {
                                                    if($v['rewardamount'] != 0)
                                                    {
                                            ?>
                                            <option value="<?php echo $v['Id']; ?>"><b>Reward - ₹<?php echo ($v['rewardamount'] != NULL ? $v['rewardamount'] : '0' ); ?></b></option>
                                            <?php } } ?>
                                        </select>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php 
                                if($missingvehicle[0]['firdate'] != NULL)
                                {
                            ?>
                            <div class="row mt-3">
                                <div class="col-md-12 text-center border border-2 border-danger p-3">
                                    <h6 class="text-dark text-uppercase mb-0"><span class="text-dark" style="font-weight:bold;">FIR Date : </span> <span id="missingfirdate"><?php echo date('d-m-Y',strtotime($missingvehicle[0]['firdate'])); ?></span></h6>
                                </div>
                            </div>
                            <?php } ?>
                            <?php 
                                if($missingvehicle[0]['firpolicethananame'] != NULL)
                                {
                            ?>
                            <div class="row mt-3">
                                <div class="col-md-12 text-center border border-2 border-danger p-3">
                                    <h6 class="text-dark text-uppercase mb-0"><span class="text-dark" style="font-weight:bold;">FIR Thana & Address : </span> <span id="firthanaaddress"><?php echo (($missingvehicle[0]['firpolicethananame'] != NULL ? ($missingvehicle[0]['firpolicethananame'].',') : '')); ?><?php echo (($missingvehicle[0]['firstate'] != NULL ? ($missingvehicle[0]['firstate'].',') : '')); ?><?php echo (($missingvehicle[0]['firdistrict'] != NULL ? ($missingvehicle[0]['firdistrict'].',') : '')); ?><?php echo (($missingvehicle[0]['fircity'] != NULL ? ($missingvehicle[0]['fircity'].',') : '')); ?><?php echo (($missingvehicle[0]['firvillage'] != NULL ? ($missingvehicle[0]['firvillage']) : '')); ?></span></h6>
                                </div>
                            </div>
                            <?php } ?>
                    </div>
                    <?php 
                        $decode = json_decode($missingvehicle[0]['photos'],true);
                        if(count($decode) > 0)
                        {
                    ?>
                    <div class="col-md-6 col-sm-12 col-lg-6 mt-3">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner" id="photosspan">
                                <?php 
                                    foreach($decode as $k=>$v)
                                    {
                                ?>
                                <div class="carousel-item <?php if($k == 0){ echo "active"; } ?>">
                                    <a href="<?php echo base_url(); ?><?php echo $v; ?>"  data-lightbox="roadtrip">
                                        <img src="<?php echo base_url().''.$v; ?>" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100" alt="...">
                                    </a>
                                </div>
                                <?php } ?>
                            </div>
                            <a class="carousel-control-prev" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </a>
                            <a class="carousel-control-next" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </a>
                        </div>
                    </div>
                    <?php }else{ 
                        $getLatestVehiclePhotos = $this->db->query('select * from missingvehiclephotos where missingId='.$missingvehicle[0]['Id'])->result_array();
                        if(count($getLatestVehiclePhotos) > 0)
                        {
                    ?>
                    <div class="col-md-6 col-sm-12 col-lg-6 mt-3">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner" id="photosspan">
                                <?php 
                                    foreach($getLatestUserPhotos as $k=>$v)
                                    {
                                ?>
                                <div class="carousel-item <?php if($k == 0){ echo "active"; } ?>">
                                    <a href="<?php echo base_url(); ?><?php echo $v['photourl']; ?>"  data-lightbox="roadtrip">
                                        <img src="<?php echo base_url().''.$v['photourl']; ?>" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100" alt="...">
                                    </a>
                                </div>
                                <?php } ?>
                            </div>
                            <a class="carousel-control-prev" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </a>
                            <a class="carousel-control-next" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </a>
                        </div>
                    </div>
                <?php }else{ ?>
                            <div class="col-md-6 col-sm-12 col-lg-6 mt-3">
                                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner" id="photosspan">
                                        <div class="carousel-item <?php if($k == 0){ echo "active"; } ?>">
                                            <a href="<?php echo base_url().'assets/img/noimage.jpg'; ?>"  data-lightbox="roadtrip">
                                                <img src="<?php echo base_url().'assets/img/noimage.jpg'; ?>" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100" alt="...">
                                            </a>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="visually-hidden">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="visually-hidden">Next</span>
                                    </a>
                                </div>
                            </div>
                        <?php } } ?>
                </div>
                 <div class="row mt-2 mx-1 align-items-center">
                    <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-end">
                        <h6 style="color: black;font-size:13px;"><b>Vehicle Number : </b></h6>
                    </div>
                    <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-left">
                        <h6 class="text-danger" style="font-size:13px;" id="rcNumber"><b><?php echo $missingvehicle[0]['rcNumber']; ?></b></h6>
                    </div>
                </div>
                <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
               <div class="row mt-2 mx-1 align-items-center">
                    <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-end">
                        <h6 style="color: black;font-size:13px;"><b>OWNER NAME : </b></h6>
                    </div>
                    <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-left">
                        <h6 style="color: black;font-size:13px;" id="personname"><?php echo $missingvehicle[0]['ownerName']; ?></h6>
                    </div>
                </div>
                <div class="bg-dark row mt-2 mx-3 p-2">
                    <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                        <label class="text-light"><b>Vehicle's Other Details</b></label>
                    </div>
                </div>
                <div class="row mt-2 align-items-center">
                    <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                        <h6 style="color: black;font-size:13px;"><b>Vehicle Type : </b></h6>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                        <h6 style="color: black;font-size:13px;" id="typespan"><?php echo $missingvehicle[0]['vehicleType']; ?></h6>
                    </div>
                </div>
                <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                <div class="row mt-2 align-items-center">
                    <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                        <h6 style="color: black;font-size:13px;"><b>Chassis Number : </b></h6>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                        <h6 style="color: black;font-size:13px;" id="chassisNumberspan"><?php echo (($missingvehicle[0]['chasisNumber'] != '') ? $missingvehicle[0]['chasisNumber'] : ''); ?></h6>
                       
                    </div>
                </div>
                <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                <div class="row mt-2 align-items-center">
                    <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                        <h6 style="color: black;font-size:13px;"><b>Engine Number : </b></h6>
                    </div>
                    <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-left">
                        <h6 style="color: black;font-size:13px;" id="engineNumberSpan"><?php echo (($missingvehicle[0]['engineNumber'] != '') ? $missingvehicle[0]['engineNumber'] : ''); ?></h6>
                    </div>
                </div>
                <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                <div class="row mt-2 align-items-center">
                    <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                        <h6 style="color: black;font-size:13px;"><b>Company Name : </b></h6>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                        <h6 style="color: black;font-size:13px;" id="companyNameSpan"><?php echo ($missingvehicle[0]['companyName']); ?></h6>
                    </div>
                </div>
                <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                <div class="row mt-2 align-items-center">
                    <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                        <h6 style="color: black;font-size:13px;"><b>Model Number : </b></h6>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                        <h6 style="color: black;font-size:13px;" id="modelNumberSpan"><?php echo ($missingvehicle[0]['modelNumber']); ?></h6>
                    </div>
                </div>
                <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                <?php 
                    if($missingvehicle[0]['relation1'] != NULL || $missingvehicle[0]['relation2'] != NULL || $missingvehicle[0]['relation3'] != NULL)
                    {
                ?>
                <div class="row mt-2 px-md-5 px-sm-3">
                    <div class="col-md-12 text-center  px-1 pb-4 py-4">
                        <?php 
                            if($this->session->userdata('user_login') == 'yes'){
                        ?>
                        <div class="row justify-content-center align-items-center">
                            <?php 
                                $getUserDetail = $this->db->query('select * from user where uid='.$missingvehicle[0]['userId'])->result_array();
                            ?>
                            <div class="col-lg-auto col-xl-auto col-sm-12 col-md-auto mt-3 mt-md-3">
                                <h6 class="text-dark mb-0">
                                    <a href="tel:<?= $getUserDetail[0]['registration_mobile']; ?>" style="padding:1rem!important;width:max-content;" class="btn btn-primary btn-style-green mt-2 mt-md-2 d-md-inline d-none">
                                        <i class="fa fa-phone"></i> Call OWNER
                                    </a>
                                </h6>
                                <a href="tel:<?= $getUserDetail[0]['registration_mobile']; ?>" style="width:max-content;" class="btn btn-primary btn-style-green mt-0 mt-md-0 d-md-none mx-auto d-block">
                                    <i class="fa fa-phone"></i> Call OWNER
                                </a>
                            </div>
                            <?php 
                                for($i=1;$i<=3;$i++)
                                {
                                    if($missingvehicle[0]['relation'.$i] != NULL)
                                    {
                                        $getVehicleRelation = $this->db->query('select * from vehicle_relation where id='.$missingvehicle[0]['relation'.$i])->result_array();
                                        if($missingvehicle[0]['relation'.$i] != 3)
                                        {
                            ?>
                            <div class="col-lg-auto col-xl-auto col-sm-12 col-md-auto mt-1">
                                <h6 class="text-dark text-uppercase mb-0"> 
                                    <a href="tel:<?php echo $missingvehicle[0]['mobile'.$i]; ?>" style="width:max-content;" class="btn btn-primary btn-style-<?php if($i==1){ echo "yellow"; }else if($i == 2){ echo "red"; }else{ echo "four"; } ?> mt-2">
                                        <i class="fa fa-phone"></i> CALL <?php echo $getVehicleRelation[0]['name']; ?>
                                    </a>
                                </h6>  
                            </div>
                            <?php }else{ ?>
                            <div class="col-lg-auto col-xl-auto col-sm-12 col-md-auto mt-1">
                                <h6 class="text-dark text-uppercase mb-0"> 
                                    <a href="tel:<?php echo $missingvehicle[0]['mobile'.$i]; ?>" style="width:max-content;" class="btn btn-primary btn-style-<?php if($i==1){ echo "yellow"; }else if($i == 2){ echo "red"; }else{ echo "four"; } ?> mt-2">
                                        <i class="fa fa-phone"></i> CALL <?php echo $missingvehicle[0]['otherrelationname'.$i]; ?></span>
                                    </a>
                                </h6>  
                            </div>
                            <?php } ?>
                            <?php } } ?>
                        </div>
                        <?php }else{ ?>
                        <h6 class="text-dark mb-0">
                            <a href="javascript:void(0)" onclick="showLogin()" style="width:max-content;background:white!important;color:#130202!important;border:1px solid red!important;padding:1rem!important;" class="phone btn btn-primary btn-style-four mt-0 mt-md-0 d-md-inline d-none">
                                <svg version "1.1" id="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3org/1999/xlink" x="0px" y="0px" viewBox="0 0 82 82" style="enable-background:new 0 0 82 82;" xml:space="preserve">
                                     
                                <path d="M64.5,78.2c1.7-1.9,3.6-3.6,5.4-5.4c2.6-2.7,2.7-5.9,0-8.6c-3.1-3.2-6.3-6.3-9.4-9.4
                                							c-2.6-2.6-5.8-2.6-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-0.1,0.1-0.3,0.2-0.4,0.3l-1.3,1.3c-0.4,0.2-0.7,0.2-1.2,0
                                							c-1.3-0.7-2.6-1.2-3.8-2c-5.7-3.6-10.5-8.2-14.7-13.4c-2.1-2.6-4-5.3-5.3-8.4c-0.2-0.5-0.2-0.9,0.1-1.3l1.3-1.3
                                							c0.1-0.1,0.1-0.2,0.2-0.3c0.6-0.6,1.2-1.1,1.8-1.7c1.4-1.3,2.7-2.7,4.1-4.1c2.7-2.7,2.7-5.9,0-8.6c-1.5-1.5-3.1-3.1-4.6-4.6
                                							c-1.6-1.6-3.2-3.2-4.8-4.8c-2.6-2.5-5.8-2.5-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-1.9,1.8-2.8,3.9-3,6.5c-0.3,4.1,0.7,8,2.1,11.8
                                							C5.2,43.8,9.6,50.7,15,57.1c7.2,8.6,15.9,15.4,26,20.4c4.6,2.2,9.3,3.9,14.4,4.2C58.9,81.8,62,81,64.5,78.2z"></path>
                                <path d="M41.1,15.7
                                							c-0.7,0-1.5,0.1-2.2,0.4c-1.7,0.8-2.5,2.8-2,4.8c0.4,1.8,2,3,3.9,3c4.6,0.1,8.6,1.5,12,4.6c3.7,3.4,5.4,7.7,5.6,12.8
                                							c0,0.9,0.4,1.9,0.9,2.6c1.1,1.5,3,1.9,4.8,1.2c1.6-0.6,2.5-2,2.5-3.9c-0.1-7-2.6-12.9-7.5-18.1C54.1,18.4,48.1,15.8,41.1,15.7z"></path>
                                <path d="M69,11.4c8.5,8.7,12.5,18.1,12.8,29.1c0.1,2.5-1.5,4.2-3.9,4.3c-2.6,0.1-4.3-1.4-4.4-4c-0.1-5.4-1.4-10.5-4-15.2
                                							C63.5,14.9,54.2,9.3,42,8.6c-1.4-0.1-2.6-0.2-3.6-1.3c-1.2-1.4-1.3-3-0.7-4.6c0.7-1.6,2-2.4,3.8-2.4c8,0.1,15.3,2.4,22,6.8
                                         C65.7,8.6,67.8,10.4,69,11.4z"></path>
                                </svg>
                                <span>Call OWNER</span><span style="color: #11d011;
    font-size: 1.2rem;
    text-decoration: underline;"> Click Here</span>
                            </a>
                        </h6>
                        <a href="javascript:void(0)" onclick="showLogin()" style="width:max-content;background:white!important;color:#130202!important;border:1px solid red!important;padding:1rem!important;" class="phone btn btn-primary btn-style-four mt-0 mt-md-0 d-md-none mx-auto d-block">
                            <svg version "1.1" id="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3org/1999/xlink" x="0px" y="0px" viewBox="0 0 82 82" style="enable-background:new 0 0 82 82;" xml:space="preserve">
                                 
                            <path d="M64.5,78.2c1.7-1.9,3.6-3.6,5.4-5.4c2.6-2.7,2.7-5.9,0-8.6c-3.1-3.2-6.3-6.3-9.4-9.4
                            							c-2.6-2.6-5.8-2.6-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-0.1,0.1-0.3,0.2-0.4,0.3l-1.3,1.3c-0.4,0.2-0.7,0.2-1.2,0
                            							c-1.3-0.7-2.6-1.2-3.8-2c-5.7-3.6-10.5-8.2-14.7-13.4c-2.1-2.6-4-5.3-5.3-8.4c-0.2-0.5-0.2-0.9,0.1-1.3l1.3-1.3
                            							c0.1-0.1,0.1-0.2,0.2-0.3c0.6-0.6,1.2-1.1,1.8-1.7c1.4-1.3,2.7-2.7,4.1-4.1c2.7-2.7,2.7-5.9,0-8.6c-1.5-1.5-3.1-3.1-4.6-4.6
                            							c-1.6-1.6-3.2-3.2-4.8-4.8c-2.6-2.5-5.8-2.5-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-1.9,1.8-2.8,3.9-3,6.5c-0.3,4.1,0.7,8,2.1,11.8
                            							C5.2,43.8,9.6,50.7,15,57.1c7.2,8.6,15.9,15.4,26,20.4c4.6,2.2,9.3,3.9,14.4,4.2C58.9,81.8,62,81,64.5,78.2z"></path>
                            <path d="M41.1,15.7
                            							c-0.7,0-1.5,0.1-2.2,0.4c-1.7,0.8-2.5,2.8-2,4.8c0.4,1.8,2,3,3.9,3c4.6,0.1,8.6,1.5,12,4.6c3.7,3.4,5.4,7.7,5.6,12.8
                            							c0,0.9,0.4,1.9,0.9,2.6c1.1,1.5,3,1.9,4.8,1.2c1.6-0.6,2.5-2,2.5-3.9c-0.1-7-2.6-12.9-7.5-18.1C54.1,18.4,48.1,15.8,41.1,15.7z"></path>
                            <path d="M69,11.4c8.5,8.7,12.5,18.1,12.8,29.1c0.1,2.5-1.5,4.2-3.9,4.3c-2.6,0.1-4.3-1.4-4.4-4c-0.1-5.4-1.4-10.5-4-15.2
                            							C63.5,14.9,54.2,9.3,42,8.6c-1.4-0.1-2.6-0.2-3.6-1.3c-1.2-1.4-1.3-3-0.7-4.6c0.7-1.6,2-2.4,3.8-2.4c8,0.1,15.3,2.4,22,6.8
                                     C65.7,8.6,67.8,10.4,69,11.4z"></path>
                            </svg>
                            <span>Call OWNER</span>&nbsp;<span style="color: #11d011;
    font-size: 1.2rem;
    text-decoration: underline;">Click Here</span>
                        </a>
                        <?php } ?>
                    </div>
                </div>
                <?php }else{ ?>
                    <?php 
                        if($this->session->userdata('user_login') != 'yes'){
                    ?>
                    <h6 class="text-dark mb-0">
                        <a href="javascript:void(0)" onclick="showLogin()" style="width:max-content;background:white!important;color:#130202!important;border:1px solid red!important;padding:1rem!important;" class="phone btn btn-primary btn-style-four mt-0 mt-md-0 d-md-inline d-none">
                            <svg version "1.1" id="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3org/1999/xlink" x="0px" y="0px" viewBox="0 0 82 82" style="enable-background:new 0 0 82 82;" xml:space="preserve">
                                 
                            <path d="M64.5,78.2c1.7-1.9,3.6-3.6,5.4-5.4c2.6-2.7,2.7-5.9,0-8.6c-3.1-3.2-6.3-6.3-9.4-9.4
                            							c-2.6-2.6-5.8-2.6-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-0.1,0.1-0.3,0.2-0.4,0.3l-1.3,1.3c-0.4,0.2-0.7,0.2-1.2,0
                            							c-1.3-0.7-2.6-1.2-3.8-2c-5.7-3.6-10.5-8.2-14.7-13.4c-2.1-2.6-4-5.3-5.3-8.4c-0.2-0.5-0.2-0.9,0.1-1.3l1.3-1.3
                            							c0.1-0.1,0.1-0.2,0.2-0.3c0.6-0.6,1.2-1.1,1.8-1.7c1.4-1.3,2.7-2.7,4.1-4.1c2.7-2.7,2.7-5.9,0-8.6c-1.5-1.5-3.1-3.1-4.6-4.6
                            							c-1.6-1.6-3.2-3.2-4.8-4.8c-2.6-2.5-5.8-2.5-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-1.9,1.8-2.8,3.9-3,6.5c-0.3,4.1,0.7,8,2.1,11.8
                            							C5.2,43.8,9.6,50.7,15,57.1c7.2,8.6,15.9,15.4,26,20.4c4.6,2.2,9.3,3.9,14.4,4.2C58.9,81.8,62,81,64.5,78.2z"></path>
                            <path d="M41.1,15.7
                            							c-0.7,0-1.5,0.1-2.2,0.4c-1.7,0.8-2.5,2.8-2,4.8c0.4,1.8,2,3,3.9,3c4.6,0.1,8.6,1.5,12,4.6c3.7,3.4,5.4,7.7,5.6,12.8
                            							c0,0.9,0.4,1.9,0.9,2.6c1.1,1.5,3,1.9,4.8,1.2c1.6-0.6,2.5-2,2.5-3.9c-0.1-7-2.6-12.9-7.5-18.1C54.1,18.4,48.1,15.8,41.1,15.7z"></path>
                            <path d="M69,11.4c8.5,8.7,12.5,18.1,12.8,29.1c0.1,2.5-1.5,4.2-3.9,4.3c-2.6,0.1-4.3-1.4-4.4-4c-0.1-5.4-1.4-10.5-4-15.2
                            							C63.5,14.9,54.2,9.3,42,8.6c-1.4-0.1-2.6-0.2-3.6-1.3c-1.2-1.4-1.3-3-0.7-4.6c0.7-1.6,2-2.4,3.8-2.4c8,0.1,15.3,2.4,22,6.8
                                     C65.7,8.6,67.8,10.4,69,11.4z"></path>
                            </svg>
                            <span>Call OWNER</span>
                            <span style="color: #11d011;font-size: 1.2rem;text-decoration: underline;"> Click Here</span>
                        </a>
                    </h6>
                    <?php }else{ 
                        $getUserDetail = $this->db->query('select * from user where uid='.$missingvehicle[0]['userId'])->result_array();
                    ?>
                        <h6 class="text-dark mb-0 text-center mt-4">
                            <a href="tel:<?php echo $getUserDetail[0]['registration_mobile']; ?>" style="width:max-content;background:green!important;color:white!important;border:1px solid green!important;padding:1rem!important;" class="phone btn btn-primary btn-style-four mt-0 mt-md-0 d-md-inline d-none">
                                <!--<svg version "1.1" id="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3org/1999/xlink" x="0px" y="0px" viewBox="0 0 82 82" style="enable-background:new 0 0 82 82;" xml:space="preserve">-->
                                     
                                <!--<path d="M64.5,78.2c1.7-1.9,3.6-3.6,5.4-5.4c2.6-2.7,2.7-5.9,0-8.6c-3.1-3.2-6.3-6.3-9.4-9.4-->
                                <!--							c-2.6-2.6-5.8-2.6-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-0.1,0.1-0.3,0.2-0.4,0.3l-1.3,1.3c-0.4,0.2-0.7,0.2-1.2,0-->
                                <!--							c-1.3-0.7-2.6-1.2-3.8-2c-5.7-3.6-10.5-8.2-14.7-13.4c-2.1-2.6-4-5.3-5.3-8.4c-0.2-0.5-0.2-0.9,0.1-1.3l1.3-1.3-->
                                <!--							c0.1-0.1,0.1-0.2,0.2-0.3c0.6-0.6,1.2-1.1,1.8-1.7c1.4-1.3,2.7-2.7,4.1-4.1c2.7-2.7,2.7-5.9,0-8.6c-1.5-1.5-3.1-3.1-4.6-4.6-->
                                <!--							c-1.6-1.6-3.2-3.2-4.8-4.8c-2.6-2.5-5.8-2.5-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-1.9,1.8-2.8,3.9-3,6.5c-0.3,4.1,0.7,8,2.1,11.8-->
                                <!--							C5.2,43.8,9.6,50.7,15,57.1c7.2,8.6,15.9,15.4,26,20.4c4.6,2.2,9.3,3.9,14.4,4.2C58.9,81.8,62,81,64.5,78.2z"></path>-->
                                <!--<path d="M41.1,15.7-->
                                <!--							c-0.7,0-1.5,0.1-2.2,0.4c-1.7,0.8-2.5,2.8-2,4.8c0.4,1.8,2,3,3.9,3c4.6,0.1,8.6,1.5,12,4.6c3.7,3.4,5.4,7.7,5.6,12.8-->
                                <!--							c0,0.9,0.4,1.9,0.9,2.6c1.1,1.5,3,1.9,4.8,1.2c1.6-0.6,2.5-2,2.5-3.9c-0.1-7-2.6-12.9-7.5-18.1C54.1,18.4,48.1,15.8,41.1,15.7z"></path>-->
                                <!--<path d="M69,11.4c8.5,8.7,12.5,18.1,12.8,29.1c0.1,2.5-1.5,4.2-3.9,4.3c-2.6,0.1-4.3-1.4-4.4-4c-0.1-5.4-1.4-10.5-4-15.2-->
                                <!--							C63.5,14.9,54.2,9.3,42,8.6c-1.4-0.1-2.6-0.2-3.6-1.3c-1.2-1.4-1.3-3-0.7-4.6c0.7-1.6,2-2.4,3.8-2.4c8,0.1,15.3,2.4,22,6.8-->
                                <!--         C65.7,8.6,67.8,10.4,69,11.4z"></path>-->
                                <!--</svg>-->
                                <i class="fa fa-phone"></i>
                                <span>Call OWNER</span>
                                <!--<span style="color: #11d011;font-size: 1.2rem;text-decoration: underline;"> Click Here</span>-->
                            </a>
                        </h6>
                        <a href="tel:<?php echo $getUserDetail[0]['registration_mobile']; ?>" style="width:max-content;background:white!important;color:#130202!important;border:1px solid red!important;padding:1rem!important;" class="phone btn btn-primary btn-style-four mt-0 mt-md-0 d-md-none mx-auto d-block">
                        <svg version "1.1" id="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3org/1999/xlink" x="0px" y="0px" viewBox="0 0 82 82" style="enable-background:new 0 0 82 82;" xml:space="preserve">
                             
                        <path d="M64.5,78.2c1.7-1.9,3.6-3.6,5.4-5.4c2.6-2.7,2.7-5.9,0-8.6c-3.1-3.2-6.3-6.3-9.4-9.4
                        							c-2.6-2.6-5.8-2.6-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-0.1,0.1-0.3,0.2-0.4,0.3l-1.3,1.3c-0.4,0.2-0.7,0.2-1.2,0
                        							c-1.3-0.7-2.6-1.2-3.8-2c-5.7-3.6-10.5-8.2-14.7-13.4c-2.1-2.6-4-5.3-5.3-8.4c-0.2-0.5-0.2-0.9,0.1-1.3l1.3-1.3
                        							c0.1-0.1,0.1-0.2,0.2-0.3c0.6-0.6,1.2-1.1,1.8-1.7c1.4-1.3,2.7-2.7,4.1-4.1c2.7-2.7,2.7-5.9,0-8.6c-1.5-1.5-3.1-3.1-4.6-4.6
                        							c-1.6-1.6-3.2-3.2-4.8-4.8c-2.6-2.5-5.8-2.5-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-1.9,1.8-2.8,3.9-3,6.5c-0.3,4.1,0.7,8,2.1,11.8
                        							C5.2,43.8,9.6,50.7,15,57.1c7.2,8.6,15.9,15.4,26,20.4c4.6,2.2,9.3,3.9,14.4,4.2C58.9,81.8,62,81,64.5,78.2z"></path>
                        <path d="M41.1,15.7
                        							c-0.7,0-1.5,0.1-2.2,0.4c-1.7,0.8-2.5,2.8-2,4.8c0.4,1.8,2,3,3.9,3c4.6,0.1,8.6,1.5,12,4.6c3.7,3.4,5.4,7.7,5.6,12.8
                        							c0,0.9,0.4,1.9,0.9,2.6c1.1,1.5,3,1.9,4.8,1.2c1.6-0.6,2.5-2,2.5-3.9c-0.1-7-2.6-12.9-7.5-18.1C54.1,18.4,48.1,15.8,41.1,15.7z"></path>
                        <path d="M69,11.4c8.5,8.7,12.5,18.1,12.8,29.1c0.1,2.5-1.5,4.2-3.9,4.3c-2.6,0.1-4.3-1.4-4.4-4c-0.1-5.4-1.4-10.5-4-15.2
                        							C63.5,14.9,54.2,9.3,42,8.6c-1.4-0.1-2.6-0.2-3.6-1.3c-1.2-1.4-1.3-3-0.7-4.6c0.7-1.6,2-2.4,3.8-2.4c8,0.1,15.3,2.4,22,6.8
                                 C65.7,8.6,67.8,10.4,69,11.4z"></path>
                        </svg>
                        <span>Call OWNER</span>
                        <span style="color: #11d011;
font-size: 1.2rem;
text-decoration: underline;"> Click Here</span>
                    </a>
                    <?php } ?>
                <?php } ?>
                <div class="row justify-content-center mt-5">
                    <div class="col-md-auto col-lg-auto col-sm-12 mt-2">
                        <?php 
                            if($this->session->userdata('user_login') == 'yes'){
                        ?>
                        <a href="<?php echo base_url(); ?>ngo/search_vehicle_details" class="btn btn-primary next w-100" style="width:max-content;"><i class="fa fa-search"></i> Search Another</a>
                        <?php }else{ ?>
                            <a href="<?php echo base_url(); ?>ngo/search_vehicle_details" class="btn btn-primary next w-100" style="width:max-content;"><i class="fa fa-search"></i> Search Another</a>
                        <?php } ?>
                    </div>
                    <div class="col-md-auto col-lg-auto col-sm-12 mt-2">
                        <a href="<?php echo base_url(); ?>ngo" class="btn btn-primary save" style="width:-webkit-fill-available;"><i class="fa fa-home"></i> Homepage</a>
                    </div>
                </div>
            </div>
                <?php }else{ 
                    if($getDetails[0]['searchType'] == 'vehicleNumber')
                    {
                        $vehicledetail = $this->db->query('select * from vehicles where rcNumber="'.$getDetails[0]['idNumber'].'"')->result_array();   
                    }
                    if($getDetails[0]['searchType'] == 'chassisNumber')
                    {
                        $vehicledetail = $this->db->query('select * from vehicles where chassis_number="'.$getDetails[0]['idNumber'].'"')->result_array();   
                    }
                    if($getDetails[0]['searchType'] == 'engineNumber')
                    {
                        $vehicledetail = $this->db->query('select * from vehicles where engine_number="'.$getDetails[0]['idNumber'].'"')->result_array();
                    }
                ?>
                <div class="col-lg-12 col-md-12 col-sm-12 d-flex flex-column">
                    <div class="row px-3 align-items-center justify-content-center">
                    <?php 
                        $decode = json_decode($vehicledetail[0]['vehiclePhoto'],true);
                        if(count($decode) > 0)
                        {
                    ?>
                    <div class="col-md-6 col-sm-12 col-lg-6 mt-3">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner" id="photosspan">
                                <?php 
                                    foreach($decode as $k=>$v)
                                    {
                                ?>
                                <div class="carousel-item <?php if($k == 0){ echo "active"; } ?>">
                                    <a href="<?php echo base_url(); ?><?php echo $v; ?>"  data-lightbox="roadtrip">
                                        <img src="<?php echo base_url().''.$v; ?>" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100" alt="...">
                                    </a>
                                </div>
                                <?php } ?>
                            </div>
                            <a class="carousel-control-prev" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </a>
                            <a class="carousel-control-next" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </a>
                        </div>
                    </div>
                    <?php }else{ ?>
                    <div class="col-md-6 col-sm-12 col-lg-6 mt-3">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner" id="photosspan">
                                <div class="carousel-item <?php if($k == 0){ echo "active"; } ?>">
                                    <a href="<?php echo base_url().'assets/img/noimage.jpg'; ?>"  data-lightbox="roadtrip">
                                        <img src="<?php echo base_url().'assets/img/noimage.jpg'; ?>" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100" alt="...">
                                    </a>
                                </div>
                            </div>
                            <a class="carousel-control-prev" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </a>
                            <a class="carousel-control-next" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                
                 <div class="row mt-2 mx-1 align-items-center">
                    <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-end">
                        <h6 style="color: black;font-size:13px;"><b>Vehicle Number : </b></h6>
                    </div>
                    <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-left">
                        <h6 class="text-success text-uppercase" id="rcNumber" ><b><?php echo $vehicledetail[0]['rcNumber']; ?></b></h6>
                    </div>
                </div>
                <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
               <div class="row mt-2 mx-1 align-items-center">
                    <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-end">
                        <h6 style="color: black;font-size:13px;"><b>OWNER NAME : </b></h6>
                    </div>
                    <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-left">
                        <h6 style="color: black;font-size:13px;" id="personname"><?php echo $vehicledetail[0]['personname']; ?></h6>
                    </div>
                </div>
               
                <div class="bg-dark row mt-2 mx-3 p-2">
                    <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                        <label class="text-light"><b>Vehicle's Other Details</b></label>
                    </div>
                </div>
                <div class="row mt-2 align-items-center">
                    <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                        <h6 style="color: black;font-size:13px;"><b>Vehicle Type : </b></h6>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                        <h6 style="color: black;font-size:13px;" id="typespan"><?php echo $vehicledetail[0]['vehicleType']; ?></h6>
                    </div>
                </div>
                <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                <div class="row mt-2 align-items-center">
                    <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                        <h6 style="color: black;font-size:13px;"><b>Chassis Number : </b></h6>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                        <h6 style="color: black;font-size:13px;" id="chassisNumberspan"><?php echo substr_replace($vehicledetail[0]['chassis_number'],'<i class="fa fa-hashtag" style="font-size:small;"></i><i class="fa fa-hashtag" style="font-size:small;"></i><i class="fa fa-hashtag" style="font-size:small;"></i><i class="fa fa-hashtag" style="font-size:small;"></i><i class="fa fa-hashtag" style="font-size:small;"></i><i class="fa fa-hashtag" style="font-size:small;"></i><i class="fa fa-hashtag" style="font-size:small;"></i><i class="fa fa-hashtag" style="font-size:small;"></i>',0,13); ?></h6>
                    </div>
                </div>
                <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                <div class="row mt-2 align-items-center">
                    <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                        <h6 style="color: black;font-size:13px;"><b>Engine Number : </b></h6>
                    </div>
                    <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-left">
                        <h6 style="color: black;font-size:13px;" id="engineNumberSpan"><?php echo substr_replace($vehicledetail[0]['engine_number'],'<i class="fa fa-hashtag" style="font-size:small;"></i><i class="fa fa-hashtag" style="font-size:small;"></i><i class="fa fa-hashtag" style="font-size:small;"></i><i class="fa fa-hashtag" style="font-size:small;"></i><i class="fa fa-hashtag" style="font-size:small;"></i><i class="fa fa-hashtag" style="font-size:small;"></i><i class="fa fa-hashtag" style="font-size:small;"></i><i class="fa fa-hashtag" style="font-size:small;"></i>',0,9); ?></h6>
                        
                    </div>
                </div>
                <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                <div class="row mt-2 align-items-center">
                    <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                        <h6 style="color: black;font-size:13px;"><b>Company Name : </b></h6>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                        <h6 style="color: black;font-size:13px;" id="companyNameSpan"><?php echo ($vehicledetail[0]['company']); ?></h6>
                    </div>
                </div>
                <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                <div class="row mt-2 align-items-center">
                    <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                        <h6 style="color: black;font-size:13px;"><b>Model Number : </b></h6>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                        <h6 style="color: black;font-size:13px;" id="modelNumberSpan"><?php echo ($vehicledetail[0]['maker_model']); ?></h6>
                    </div>
                </div>
                <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                <?php 
                    if($vehicledetail[0]['relation1'] != NULL || $vehicledetail[0]['relation2'] != NULL || $vehicledetail[0]['relation3'] != NULL)
                    {
                ?>
                <div class="row mt-2 px-md-5 px-sm-3">
                    <div class="col-md-12 text-center  px-1 pb-4 py-4">
                        <?php 
                            if($this->session->userdata('user_login') == 'yes'){
                        ?>
                        <div class="row justify-content-center align-items-center">
                            <?php 
                                $getUserDetail = $this->db->query('select * from user where uid='.$vehicledetail[0]['userId'])->result_array();
                            ?>
                            <div class="col-lg-auto col-xl-auto col-sm-12 col-md-auto mt-3 mt-md-3">
                                <h6 class="text-dark mb-0">
                                    <a href="tel:<?= $getUserDetail[0]['registration_mobile']; ?>" style="padding:1rem!important;width:max-content;" class="btn btn-primary btn-style-green mt-2 mt-md-2 d-md-inline d-none">
                                        <i class="fa fa-phone"></i> Call OWNER
                                    </a>
                                </h6>
                                <a href="tel:<?= $getUserDetail[0]['registration_mobile']; ?>" style="width:max-content;" class="btn btn-primary btn-style-green mt-0 mt-md-0 d-md-none mx-auto d-block">
                                    <i class="fa fa-phone"></i> Call OWNER
                                </a>
                            </div>
                            <?php 
                                for($i=1;$i<=3;$i++)
                                {
                                    if($vehicledetail[0]['relation'.$i] != NULL)
                                    {
                                        $getVehicleRelation = $this->db->query('select * from vehicle_relation where id='.$vehicledetail[0]['relation'.$i])->result_array();
                                        if($vehicledetail[0]['relation'.$i] != 3)
                                        {
                            ?>
                            <div class="col-lg-auto col-xl-auto col-sm-12 col-md-auto mt-1">
                                <h6 class="text-dark text-uppercase mb-0"> 
                                    <a href="tel:<?php echo $vehicledetail[0]['mobile'.$i]; ?>" style="width:max-content;" class="btn btn-primary btn-style-<?php if($i==1){ echo "yellow"; }else if($i == 2){ echo "red"; }else{ echo "four"; } ?> mt-2">
                                        <i class="fa fa-phone"></i> CALL <?php echo $getVehicleRelation[0]['name']; ?>
                                    </a>
                                </h6>  
                            </div>
                            <?php }else{ ?>
                            <div class="col-lg-auto col-xl-auto col-sm-12 col-md-auto mt-1">
                                <h6 class="text-dark text-uppercase mb-0"> 
                                    <a href="tel:<?php echo $vehicledetail[0]['mobile'.$i]; ?>" style="width:max-content;" class="btn btn-primary btn-style-<?php if($i==1){ echo "yellow"; }else if($i == 2){ echo "red"; }else{ echo "four"; } ?> mt-2">
                                        <i class="fa fa-phone"></i> CALL <?php echo $vehicledetail[0]['otherrelationname'.$i]; ?></span>
                                    </a>
                                </h6>  
                            </div>
                            <?php } ?>
                            <?php } } ?>
                        </div>
                        <?php }else{ ?>
                        <h6 class="text-dark mb-0">
                            <a href="javascript:void(0)" onclick="showLogin()" style="width:max-content;background:white!important;color:#130202!important;border:1px solid red!important;padding:1rem!important;" class="phone btn btn-primary btn-style-four mt-0 mt-md-0 d-md-inline d-none">
                                <svg version "1.1" id="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3org/1999/xlink" x="0px" y="0px" viewBox="0 0 82 82" style="enable-background:new 0 0 82 82;" xml:space="preserve">
                                     
                                <path d="M64.5,78.2c1.7-1.9,3.6-3.6,5.4-5.4c2.6-2.7,2.7-5.9,0-8.6c-3.1-3.2-6.3-6.3-9.4-9.4
                                							c-2.6-2.6-5.8-2.6-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-0.1,0.1-0.3,0.2-0.4,0.3l-1.3,1.3c-0.4,0.2-0.7,0.2-1.2,0
                                							c-1.3-0.7-2.6-1.2-3.8-2c-5.7-3.6-10.5-8.2-14.7-13.4c-2.1-2.6-4-5.3-5.3-8.4c-0.2-0.5-0.2-0.9,0.1-1.3l1.3-1.3
                                							c0.1-0.1,0.1-0.2,0.2-0.3c0.6-0.6,1.2-1.1,1.8-1.7c1.4-1.3,2.7-2.7,4.1-4.1c2.7-2.7,2.7-5.9,0-8.6c-1.5-1.5-3.1-3.1-4.6-4.6
                                							c-1.6-1.6-3.2-3.2-4.8-4.8c-2.6-2.5-5.8-2.5-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-1.9,1.8-2.8,3.9-3,6.5c-0.3,4.1,0.7,8,2.1,11.8
                                							C5.2,43.8,9.6,50.7,15,57.1c7.2,8.6,15.9,15.4,26,20.4c4.6,2.2,9.3,3.9,14.4,4.2C58.9,81.8,62,81,64.5,78.2z"></path>
                                <path d="M41.1,15.7
                                							c-0.7,0-1.5,0.1-2.2,0.4c-1.7,0.8-2.5,2.8-2,4.8c0.4,1.8,2,3,3.9,3c4.6,0.1,8.6,1.5,12,4.6c3.7,3.4,5.4,7.7,5.6,12.8
                                							c0,0.9,0.4,1.9,0.9,2.6c1.1,1.5,3,1.9,4.8,1.2c1.6-0.6,2.5-2,2.5-3.9c-0.1-7-2.6-12.9-7.5-18.1C54.1,18.4,48.1,15.8,41.1,15.7z"></path>
                                <path d="M69,11.4c8.5,8.7,12.5,18.1,12.8,29.1c0.1,2.5-1.5,4.2-3.9,4.3c-2.6,0.1-4.3-1.4-4.4-4c-0.1-5.4-1.4-10.5-4-15.2
                                							C63.5,14.9,54.2,9.3,42,8.6c-1.4-0.1-2.6-0.2-3.6-1.3c-1.2-1.4-1.3-3-0.7-4.6c0.7-1.6,2-2.4,3.8-2.4c8,0.1,15.3,2.4,22,6.8
                                         C65.7,8.6,67.8,10.4,69,11.4z"></path>
                                </svg>
                                <span>Call OWNER</span><span style="color: #11d011;
    font-size: 1.2rem;
    text-decoration: underline;"> Click Here</span>
                            </a>
                        </h6>
                        <a href="javascript:void(0)" onclick="showLogin()" style="width:max-content;background:white!important;color:#130202!important;border:1px solid red!important;padding:1rem!important;" class="phone btn btn-primary btn-style-four mt-0 mt-md-0 d-md-none mx-auto d-block">
                            <svg version "1.1" id="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3org/1999/xlink" x="0px" y="0px" viewBox="0 0 82 82" style="enable-background:new 0 0 82 82;" xml:space="preserve">
                                 
                            <path d="M64.5,78.2c1.7-1.9,3.6-3.6,5.4-5.4c2.6-2.7,2.7-5.9,0-8.6c-3.1-3.2-6.3-6.3-9.4-9.4
                            							c-2.6-2.6-5.8-2.6-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-0.1,0.1-0.3,0.2-0.4,0.3l-1.3,1.3c-0.4,0.2-0.7,0.2-1.2,0
                            							c-1.3-0.7-2.6-1.2-3.8-2c-5.7-3.6-10.5-8.2-14.7-13.4c-2.1-2.6-4-5.3-5.3-8.4c-0.2-0.5-0.2-0.9,0.1-1.3l1.3-1.3
                            							c0.1-0.1,0.1-0.2,0.2-0.3c0.6-0.6,1.2-1.1,1.8-1.7c1.4-1.3,2.7-2.7,4.1-4.1c2.7-2.7,2.7-5.9,0-8.6c-1.5-1.5-3.1-3.1-4.6-4.6
                            							c-1.6-1.6-3.2-3.2-4.8-4.8c-2.6-2.5-5.8-2.5-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-1.9,1.8-2.8,3.9-3,6.5c-0.3,4.1,0.7,8,2.1,11.8
                            							C5.2,43.8,9.6,50.7,15,57.1c7.2,8.6,15.9,15.4,26,20.4c4.6,2.2,9.3,3.9,14.4,4.2C58.9,81.8,62,81,64.5,78.2z"></path>
                            <path d="M41.1,15.7
                            							c-0.7,0-1.5,0.1-2.2,0.4c-1.7,0.8-2.5,2.8-2,4.8c0.4,1.8,2,3,3.9,3c4.6,0.1,8.6,1.5,12,4.6c3.7,3.4,5.4,7.7,5.6,12.8
                            							c0,0.9,0.4,1.9,0.9,2.6c1.1,1.5,3,1.9,4.8,1.2c1.6-0.6,2.5-2,2.5-3.9c-0.1-7-2.6-12.9-7.5-18.1C54.1,18.4,48.1,15.8,41.1,15.7z"></path>
                            <path d="M69,11.4c8.5,8.7,12.5,18.1,12.8,29.1c0.1,2.5-1.5,4.2-3.9,4.3c-2.6,0.1-4.3-1.4-4.4-4c-0.1-5.4-1.4-10.5-4-15.2
                            							C63.5,14.9,54.2,9.3,42,8.6c-1.4-0.1-2.6-0.2-3.6-1.3c-1.2-1.4-1.3-3-0.7-4.6c0.7-1.6,2-2.4,3.8-2.4c8,0.1,15.3,2.4,22,6.8
                                     C65.7,8.6,67.8,10.4,69,11.4z"></path>
                            </svg>
                            <span>Call OWNER</span>&nbsp;<span style="color: #11d011;
    font-size: 1.2rem;
    text-decoration: underline;">Click Here</span>
                        </a>
                        <?php } ?>
                    </div>
                </div>
                <?php }else{ ?>
                    <?php 
                        if($this->session->userdata('user_login') != 'yes'){
                    ?>
                    <h6 class="text-dark mb-0">
                        <a href="javascript:void(0)" onclick="showLogin()" style="width:max-content;background:white!important;color:#130202!important;border:1px solid red!important;padding:1rem!important;" class="phone btn btn-primary btn-style-four mt-0 mt-md-0 d-md-inline d-none">
                            <svg version "1.1" id="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3org/1999/xlink" x="0px" y="0px" viewBox="0 0 82 82" style="enable-background:new 0 0 82 82;" xml:space="preserve">
                                 
                            <path d="M64.5,78.2c1.7-1.9,3.6-3.6,5.4-5.4c2.6-2.7,2.7-5.9,0-8.6c-3.1-3.2-6.3-6.3-9.4-9.4
                            							c-2.6-2.6-5.8-2.6-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-0.1,0.1-0.3,0.2-0.4,0.3l-1.3,1.3c-0.4,0.2-0.7,0.2-1.2,0
                            							c-1.3-0.7-2.6-1.2-3.8-2c-5.7-3.6-10.5-8.2-14.7-13.4c-2.1-2.6-4-5.3-5.3-8.4c-0.2-0.5-0.2-0.9,0.1-1.3l1.3-1.3
                            							c0.1-0.1,0.1-0.2,0.2-0.3c0.6-0.6,1.2-1.1,1.8-1.7c1.4-1.3,2.7-2.7,4.1-4.1c2.7-2.7,2.7-5.9,0-8.6c-1.5-1.5-3.1-3.1-4.6-4.6
                            							c-1.6-1.6-3.2-3.2-4.8-4.8c-2.6-2.5-5.8-2.5-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-1.9,1.8-2.8,3.9-3,6.5c-0.3,4.1,0.7,8,2.1,11.8
                            							C5.2,43.8,9.6,50.7,15,57.1c7.2,8.6,15.9,15.4,26,20.4c4.6,2.2,9.3,3.9,14.4,4.2C58.9,81.8,62,81,64.5,78.2z"></path>
                            <path d="M41.1,15.7
                            							c-0.7,0-1.5,0.1-2.2,0.4c-1.7,0.8-2.5,2.8-2,4.8c0.4,1.8,2,3,3.9,3c4.6,0.1,8.6,1.5,12,4.6c3.7,3.4,5.4,7.7,5.6,12.8
                            							c0,0.9,0.4,1.9,0.9,2.6c1.1,1.5,3,1.9,4.8,1.2c1.6-0.6,2.5-2,2.5-3.9c-0.1-7-2.6-12.9-7.5-18.1C54.1,18.4,48.1,15.8,41.1,15.7z"></path>
                            <path d="M69,11.4c8.5,8.7,12.5,18.1,12.8,29.1c0.1,2.5-1.5,4.2-3.9,4.3c-2.6,0.1-4.3-1.4-4.4-4c-0.1-5.4-1.4-10.5-4-15.2
                            							C63.5,14.9,54.2,9.3,42,8.6c-1.4-0.1-2.6-0.2-3.6-1.3c-1.2-1.4-1.3-3-0.7-4.6c0.7-1.6,2-2.4,3.8-2.4c8,0.1,15.3,2.4,22,6.8
                                     C65.7,8.6,67.8,10.4,69,11.4z"></path>
                            </svg>
                            <span>Call OWNER</span>
                            <span style="color: #11d011;font-size: 1.2rem;text-decoration: underline;"> Click Here</span>
                        </a>
                    </h6>
                    <?php }else{ 
                        $getUserDetail = $this->db->query('select * from user where uid='.$vehicledetail[0]['userId'])->result_array();
                    ?>
                        <h6 class="text-dark mb-0 text-center mt-4">
                            <a href="tel:<?php echo $getUserDetail[0]['registration_mobile']; ?>" style="width:max-content;background:green!important;color:white!important;border:1px solid green!important;padding:1rem!important;" class="phone btn btn-primary btn-style-four mt-0 mt-md-0 d-md-inline d-none">
                                <!--<svg version "1.1" id="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3org/1999/xlink" x="0px" y="0px" viewBox="0 0 82 82" style="enable-background:new 0 0 82 82;" xml:space="preserve">-->
                                     
                                <!--<path d="M64.5,78.2c1.7-1.9,3.6-3.6,5.4-5.4c2.6-2.7,2.7-5.9,0-8.6c-3.1-3.2-6.3-6.3-9.4-9.4-->
                                <!--							c-2.6-2.6-5.8-2.6-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-0.1,0.1-0.3,0.2-0.4,0.3l-1.3,1.3c-0.4,0.2-0.7,0.2-1.2,0-->
                                <!--							c-1.3-0.7-2.6-1.2-3.8-2c-5.7-3.6-10.5-8.2-14.7-13.4c-2.1-2.6-4-5.3-5.3-8.4c-0.2-0.5-0.2-0.9,0.1-1.3l1.3-1.3-->
                                <!--							c0.1-0.1,0.1-0.2,0.2-0.3c0.6-0.6,1.2-1.1,1.8-1.7c1.4-1.3,2.7-2.7,4.1-4.1c2.7-2.7,2.7-5.9,0-8.6c-1.5-1.5-3.1-3.1-4.6-4.6-->
                                <!--							c-1.6-1.6-3.2-3.2-4.8-4.8c-2.6-2.5-5.8-2.5-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-1.9,1.8-2.8,3.9-3,6.5c-0.3,4.1,0.7,8,2.1,11.8-->
                                <!--							C5.2,43.8,9.6,50.7,15,57.1c7.2,8.6,15.9,15.4,26,20.4c4.6,2.2,9.3,3.9,14.4,4.2C58.9,81.8,62,81,64.5,78.2z"></path>-->
                                <!--<path d="M41.1,15.7-->
                                <!--							c-0.7,0-1.5,0.1-2.2,0.4c-1.7,0.8-2.5,2.8-2,4.8c0.4,1.8,2,3,3.9,3c4.6,0.1,8.6,1.5,12,4.6c3.7,3.4,5.4,7.7,5.6,12.8-->
                                <!--							c0,0.9,0.4,1.9,0.9,2.6c1.1,1.5,3,1.9,4.8,1.2c1.6-0.6,2.5-2,2.5-3.9c-0.1-7-2.6-12.9-7.5-18.1C54.1,18.4,48.1,15.8,41.1,15.7z"></path>-->
                                <!--<path d="M69,11.4c8.5,8.7,12.5,18.1,12.8,29.1c0.1,2.5-1.5,4.2-3.9,4.3c-2.6,0.1-4.3-1.4-4.4-4c-0.1-5.4-1.4-10.5-4-15.2-->
                                <!--							C63.5,14.9,54.2,9.3,42,8.6c-1.4-0.1-2.6-0.2-3.6-1.3c-1.2-1.4-1.3-3-0.7-4.6c0.7-1.6,2-2.4,3.8-2.4c8,0.1,15.3,2.4,22,6.8-->
                                <!--         C65.7,8.6,67.8,10.4,69,11.4z"></path>-->
                                <!--</svg>-->
                                <i class="fa fa-phone"></i>
                                <span>Call OWNER</span>
                                <!--<span style="color: #11d011;font-size: 1.2rem;text-decoration: underline;"> Click Here</span>-->
                            </a>
                        </h6>
                        <a href="tel:<?php echo $getUserDetail[0]['registration_mobile']; ?>" style="width:max-content;background:white!important;color:#130202!important;border:1px solid red!important;padding:1rem!important;" class="phone btn btn-primary btn-style-four mt-0 mt-md-0 d-md-none mx-auto d-block">
                        <svg version "1.1" id="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3org/1999/xlink" x="0px" y="0px" viewBox="0 0 82 82" style="enable-background:new 0 0 82 82;" xml:space="preserve">
                             
                        <path d="M64.5,78.2c1.7-1.9,3.6-3.6,5.4-5.4c2.6-2.7,2.7-5.9,0-8.6c-3.1-3.2-6.3-6.3-9.4-9.4
                        							c-2.6-2.6-5.8-2.6-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-0.1,0.1-0.3,0.2-0.4,0.3l-1.3,1.3c-0.4,0.2-0.7,0.2-1.2,0
                        							c-1.3-0.7-2.6-1.2-3.8-2c-5.7-3.6-10.5-8.2-14.7-13.4c-2.1-2.6-4-5.3-5.3-8.4c-0.2-0.5-0.2-0.9,0.1-1.3l1.3-1.3
                        							c0.1-0.1,0.1-0.2,0.2-0.3c0.6-0.6,1.2-1.1,1.8-1.7c1.4-1.3,2.7-2.7,4.1-4.1c2.7-2.7,2.7-5.9,0-8.6c-1.5-1.5-3.1-3.1-4.6-4.6
                        							c-1.6-1.6-3.2-3.2-4.8-4.8c-2.6-2.5-5.8-2.5-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-1.9,1.8-2.8,3.9-3,6.5c-0.3,4.1,0.7,8,2.1,11.8
                        							C5.2,43.8,9.6,50.7,15,57.1c7.2,8.6,15.9,15.4,26,20.4c4.6,2.2,9.3,3.9,14.4,4.2C58.9,81.8,62,81,64.5,78.2z"></path>
                        <path d="M41.1,15.7
                        							c-0.7,0-1.5,0.1-2.2,0.4c-1.7,0.8-2.5,2.8-2,4.8c0.4,1.8,2,3,3.9,3c4.6,0.1,8.6,1.5,12,4.6c3.7,3.4,5.4,7.7,5.6,12.8
                        							c0,0.9,0.4,1.9,0.9,2.6c1.1,1.5,3,1.9,4.8,1.2c1.6-0.6,2.5-2,2.5-3.9c-0.1-7-2.6-12.9-7.5-18.1C54.1,18.4,48.1,15.8,41.1,15.7z"></path>
                        <path d="M69,11.4c8.5,8.7,12.5,18.1,12.8,29.1c0.1,2.5-1.5,4.2-3.9,4.3c-2.6,0.1-4.3-1.4-4.4-4c-0.1-5.4-1.4-10.5-4-15.2
                        							C63.5,14.9,54.2,9.3,42,8.6c-1.4-0.1-2.6-0.2-3.6-1.3c-1.2-1.4-1.3-3-0.7-4.6c0.7-1.6,2-2.4,3.8-2.4c8,0.1,15.3,2.4,22,6.8
                                 C65.7,8.6,67.8,10.4,69,11.4z"></path>
                        </svg>
                        <span>Call OWNER</span>
                        <span style="color: #11d011;
font-size: 1.2rem;
text-decoration: underline;"> Click Here</span>
                    </a>
                    <?php } ?>
                <?php } ?>
                <div class="row justify-content-center mt-4">
                    <div class="col-md-auto col-lg-auto col-sm-12 mt-2">
                        <?php 
                            if($this->session->userdata('user_login') == 'yes'){
                        ?>
                        <a href="<?php echo base_url(); ?>ngo/search_vehicle_details" class="btn btn-primary next w-100" style="width:max-content;"><i class="fa fa-search"></i> Search Another</a>
                        <?php }else{ ?>
                            <a href="<?php echo base_url(); ?>ngo/search_vehicle_details" class="btn btn-primary next w-100" style="width:max-content;"><i class="fa fa-search"></i> Search Another</a>
                        <?php } ?>
                    </div>
                    <div class="col-md-auto col-lg-auto col-sm-12 mt-2">
                        <a href="<?php echo base_url(); ?>ngo" class="btn btn-primary save" style="width:-webkit-fill-available;"><i class="fa fa-home"></i> Homepage</a>
                    </div>
                </div>
            </div>
                <?php       
                        }
                    }
                ?>
                </div>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
  <div id="cameraModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Camera</h5>
                <a class="close btn btn-default" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <div class="modal-body">
                <div class="row mb-0 mb-md-3 justify-content-center" id="videodiv">
                    <div class="col-lg-12 col-sm-12 col-md-12">
                        <video id="video" width="100%" height="240" autoplay></video>  
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-sm-12 col-md-auto text-center" id="clickdiv">
                        <button id="click-photo" class="w-100 btn btn-primary btn-style-five">Capture Photo <i class='fa fa-camera fa-spin'></i></button>
                    </div>
                </div>
                <input type="file" hidden id="fileMobInput" capture="camera">
                <div class="row justify-content-center d-none" id="canvasdiv">
                    <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                        <canvas id="canvas" width="320" height="240"></canvas>
                    </div>
                </div>
                <div class="row justify-content-center d-none" id="mobileimagediv">
                    <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                        <img id="mobileimage" width="320" height="240">
                    </div>
                </div>
                <div class='row justify-content-center text-center mx-0' id="bothcameradiv">
                    <div class='col-lg-6 col-sm-12 col-md-12 mt-3 px-0' id="frontcameradiv">
                        <button type='button' class='w-100 btn btn-style-green btn-primary' onclick='openFrontCamera()'>Open Front Camera <i class='fa fa-camera fa-spin'></i></button>
                    </div>
                    <div class='col-lg-6 col-sm-12 col-md-6 mt-3 px-0 px-md-2' id="backcameradiv">
                        <button type='button' class='w-100 btn btn-style-green btn-primary' onclick='openBackCamera()'>Open Back Camera <i class='fa fa-camera fa-spin'></i></button>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mx-0">
                    <div class="col-lg-6 col-sm-12 col-6 px-1 col-md-6 text-center d-none mb-3" id="retake">
                        <button id="retake-photo" class="w-100 btn btn-dark btn-style-yellow" style="background:black!important;color:white!important;">Retake <i class='fa fa-camera fa-spin'></i></button>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-6 px-1 col-md-6 text-center d-none mb-3" id="retakeMobile">
                        <button id="retake-mobile" class="w-100 btn btn-dark btn-style-yellow" onclick="openCamera()" style="background:black!important;color:white!important;">Retake <i class='fa fa-camera fa-spin'></i></button>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-6 px-1 col-md-6 text-center mb-3">
                        <button id="btnInactiveSave" class="w-100 btn btn-danger btn-style-red disabled-on-loading"> Search <i class='fa fa-search'></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <style>
    .save {
        position: relative;
        color: #fff!important;
        font-size: 16px!important;
        line-height: 16px!important;
        font-weight: 600!important;
        padding: 12px 35px!important;
        border-radius: 25px!important;
        background-color: #008000!important;
    }
    .swal2-close{
    position: relative!important;
    color: #000!important;
    font-size: 38px!important;
    line-height: 20px!important;
    font-weight: 600!important;
    padding: 25px 25px!important;
    background-color: white!important;

}
</style>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script type="text/javascript">
        
        function Paginator(items, page, per_page) {
          var page = page || 1,
          per_page = per_page || 10,
          offset = (page - 1) * per_page,
        
          paginatedItems = items.slice(offset).slice(0, per_page),
          total_pages = Math.ceil(items.length / per_page);
          return {
          page: page,
          per_page: per_page,
          pre_page: page - 1 ? page - 1 : null,
          next_page: (total_pages > page) ? page + 1 : null,
          total: items.length,
          total_pages: total_pages,
          data: paginatedItems
          };
        }
        
        $('#btnClear').click(function()
        {
            $('#step2Form')[0].reset();
            $('#step2Check').removeAttr('disabled');
            $('#idNumber').attr('readonly',false);
            $('#idTypeDiv').removeClass('d-none');
            $('#numberIdentity').addClass('d-none');
            $('#idNumber').removeAttr('name');
            $('#idNumber').attr('required',false);
        })
    
    let camera_button = document.querySelector("#start-camera");
    let video = document.querySelector("#video");
    let click_button = document.querySelector("#click-photo");
    let canvas = document.querySelector("#canvas");
    let stream = null;
    click_button.addEventListener('click', function() {
       	canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
       	let image_data_url = canvas.toDataURL('image/png');
       	$('#videodiv').addClass('d-none');
       	$('#canvasdiv').removeClass('d-none');
        $('#mainPhotoSelected').val(image_data_url);
        $('#clickdiv').addClass('d-none');
        $('#retake').removeClass('d-none');
    });
    
    $('.close').click(function()
    {
        location.reload();
    })
    
    $('#retake button').click(function(){
        $('#videodiv').removeClass('d-none');
        $('#canvasdiv').addClass('d-none');
        $('#mainPhotoSelected').val();
        $('#clickdiv').removeClass('d-none');
        $('#retake').addClass('d-none');
    })
    
    $('#btnInactiveSave').click(function()
    {
        if($('#mainPhotoSelected').val() != '')
        {
            $('#btnInactiveSave').attr('disabled','disabled');
            let data = new FormData();
            let idType = $('#searchType').val();
            let label = '';
            let count = 0;
            data.append('vehicleType',$('#idType').val());   
            data.append('searchType',$('#searchType').val());   
            if(idType == 'vehicleNumber')
            {
                label = 'Vehicle Number';
                if($('#idNumber').val() != '')
                {
                    count = 1;
                    
                    data.append('idNumber',$('#idNumber').val());   
                }
            }
            if(idType == 'engineNumber')
            {
                label = 'Engine Number';
                if($('#idNumber').val() != '')
                {
                    count = 1;
                    data.append('idNumber',$('#idNumber').val());
                }
            }
            if(idType == 'chassisNumber')
            {
                label = 'Chasis Number';
                if($('#idNumber').val() != '')
                {
                    count = 1;
                    data.append('idNumber',$('#idNumber').val());
                }
            }
            data.append('_token','<?php echo $csrf['hash']; ?>');
            if(count == 0)
            {
                Swal.fire({
                    title: '<strong class="text-danger" style="font-size:20px;">Enter '+label+'</strong>',
                    icon: 'error',
                    allowOutsideClick:false,
                    showCloseButton: true,
                    showCancelButton: false,
                    focusConfirm: false,
                    showConfirmButton:true
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#btnInactiveSave').removeAttr('disabled');
                    }else if(result.isDismissed)
                    {
                        $('#btnInactiveSave').removeAttr('disabled');
                    }
                })
            }else{
                data.append('photo',$('#mainPhotoSelected').val());
                $.ajax({
                    url:'<?php echo base_url(); ?>ngo/checkInactiveVehicleIdAfterLogin',
                    data:data,
                    processData:false,
                    cache:false,
                    contentType:false,
                    type:'post',
                    success:function(res)
                    {
                        let parse = JSON.parse(res);
                        let idType = $('#searchType').val();
                        if(parse.status == 'success')
                        {
                            location.href="<?php echo base_url(); ?>ngo/search_vehicle_details?pn=2";
                        }
                        else{
                            if(parse.status == 'error')
                            {
                                toastr.error(parse.message);
                                $('#btnInactiveSave').removeAttr('disabled');
                                $('#idNumber').attr('readonly',false);
                                $('#searchType').attr('readonly',false);
                                $('#idType').attr('readonly',false);
                             }else{
                                let textMessage = '';
                                if(idType == 'vehicleNumber')
                                {
                                    textMessage = 'Vehicle Number';
                                }
                                if(idType == 'engineNumber')
                                {
                                    textMessage = 'Engine Number';
                                }
                                if(idType == 'chassisNumber')
                                {
                                    textMessage = 'Chassis Number';
                                }
                                if(!parse.isAadharCorrect)
                                {
                                    Swal.fire({
                                        title: '<strong class="text-dark" style="font-size:20px;">'+textMessage+' is incorrect</strong>',
                                        icon: 'info',
                                        allowOutsideClick:false,
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:true
                                    }).then((result) => {
                                        showSearchAccordingly('');
                                        $('#btnInactiveSave').removeAttr('disabled');
                                        $('#idNumber').val('');
                                    })
                                }
                            }
                        }
                    }
                })
            }
        }else{
            toastr.error('Please capture the photo to continue');
        }
    })
    
    async function openFrontCamera()
    {
        if(stream != null)
        {
            stream.getTracks().forEach(function(track) {
              track.stop();
            });   
        }
        $('#backcameradiv').removeClass('d-none');
        $('#frontcameradiv').addClass('d-none');
        stream = await navigator.mediaDevices.getUserMedia({ video: true, audio: false,facingMode:'user' });
    	video.srcObject = stream;
        $('#cameraModal').modal('show');
        swal.close();
    }
    
    async function openBackCamera()
    {
        if(stream != null)
        {
            stream.getTracks().forEach(function(track) {
              track.stop();
            });   
        }
        $('#backcameradiv').addClass('d-none');
        $('#frontcameradiv').removeClass('d-none');
        stream = await navigator.mediaDevices.getUserMedia({ video: {facingMode:'environment'}, audio: false});
    	video.srcObject = stream;
        $('#cameraModal').modal('show');
        swal.close();
    }
    
    function openCamera()
    {
        $('#fileMobInput').click();
    }
    
    $('#fileMobInput').on('change',function(e)
    {
        $('#cameraModal').modal('show');
        swal.close();
        const selectedfile = e.target.files;
        if (selectedfile.length > 0) {
          const [imageFile] = selectedfile;
          const fileReader = new FileReader();
          fileReader.onload = () => {
            $('#mainPhotoSelected').val(fileReader.result);
            $('#mobileimage').attr('src',fileReader.result);
          };
          fileReader.readAsDataURL(imageFile);
        }
        $('#clickdiv').addClass('d-none');
        $('#bothcameradiv').addClass('d-none');
       	$('#videodiv').addClass('d-none');
       	$('#mobileimagediv').removeClass('d-none');
        $('#retakeMobile').removeClass('d-none');
    })
    
    function openCameraPopup()
    {
        Swal.fire({
            allowOutsideClick:false,
            icon : 'info',
            html: "<div class='form-group mb-3'><h5>To get person's more details, you have to click person's face photo</h5></div><div class='row mx-0 d-md-none d-block'><div class='col-lg-6 col-sm-12 col-md-6 mt-3'><button type='button' class='btn btn-style-green btn-primary' onclick='openCamera()'>Open Camera <i class='fa fa-camera fa-spin'></i></button></div></div><div class='row mx-0 d-none d-md-flex'><div class='col-lg-6 col-sm-12 col-md-6 mt-3'><button type='button' style='width:max-content!important;' class='btn btn-style-green btn-primary' onclick='openFrontCamera()'>Open Front Camera <i class='fa fa-camera fa-spin'></i></button></div><div class='col-lg-6 col-sm-12 col-md-6 mt-3'><button type='button' style='width:max-content!important;' class='btn btn-style-green btn-primary' onclick='openBackCamera()'>Open Back Camera <i class='fa fa-camera fa-spin'></i></button></div></div>",
            showCloseButton: true,
            showCancelButton: false,
            focusConfirm: false,
            showConfirmButton:false,
        }).then((result) => {
            if(result.isDismissed)
            {
                $('#step2Check').removeAttr('disabled');
            }
        })   
    }
    
    $('#step2Check').click(function()
    {
        $('#step2Check').attr('disabled','disabled');
        let data = new FormData();
        let idType = $('#searchType').val();
        let label = '';
        let count = 0;
        data.append('vehicleType',$('#idType').val());   
        data.append('searchType',$('#searchType').val());   
        if(idType == 'vehicleNumber')
        {
            label = 'Vehicle Number';
            if($('#idNumber').val() != '')
            {
                count = 1;
                
                data.append('idNumber',$('#idNumber').val());   
            }
        }
        if(idType == 'engineNumber')
        {
            label = 'Engine Number';
            if($('#idNumber').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#idNumber').val());
            }
        }
        if(idType == 'chassisNumber')
        {
            label = 'Chasis Number';
            if($('#idNumber').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#idNumber').val());
            }
        }
        data.append('_token','<?php echo $csrf['hash']; ?>');
        if(count == 0)
        {
            Swal.fire({
                title: '<strong class="text-danger" style="font-size:20px;">Enter '+label+'</strong>',
                icon: 'error',
                allowOutsideClick:false,
                showCloseButton: true,
                showCancelButton: false,
                focusConfirm: false,
                showConfirmButton:true
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#step2Check').removeAttr('disabled');
                }else if(result.isDismissed)
                {
                    $('#step2Check').removeAttr('disabled');
                }
            })
        }else{
            $.ajax({
                url:'<?php echo base_url(); ?>ngo/checkVehicleIdAfterLogin',
                data:data,
                processData:false,
                cache:false,
                contentType:false,
                type:'post',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    let idType = $('#searchType').val();
                    if(parse.status == 'success')
                    {
                        if(parse.isVisible == '1')
                        {
                            if(parse.isRegistered == 0 && parse.isMissing == 1)
                            {
                                 let html = '';
                                 if(parse.isVerified == 1)
                                 {
                                     html = '<div class="form-group my-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3 text-danger"><label class="form-label text-danger" style="font-size:16px!important;"><b>Vehicle No. :- </b>'+parse.vehicleNumber+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">OWNER NAME :- </b>'+parse.personName+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">City :- </b>'+parse.city+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">State :- </b>'+parse.state+'</label></div><div class="form-group mb-3"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-3"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
                                 }else{
                                     html = '<div class="form-group my-3 text-danger"><label class="form-label text-danger text-uppercase" style="font-size:16px!important;"><b>Vehicle No :- </b>'+parse.vehicleNumber+'</label></div><div class="form-group mb-3 text-danger text-uppercase"><label class="form-label" style="font-size:16px!important;"> <b style="color:black;">OWNER NAME :- </b>'+parse.personName+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">City :- </b>'+parse.city+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">State :- </b>'+parse.state+'</label></div><div class="form-group mb-3"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-3"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
                                 }
                                 Swal.fire({
                                    allowOutsideClick:false,
                                    html: html,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:false
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        location.href="<?php echo base_url(); ?>ngo/checkVehicle2";
                                    }else if(result.isDismissed)
                                    {
                                        location.reload();
                                    }
                                })
                             }else if(parse.isRegistered == 1 && parse.isMissing == 0)
                             {
                                 Swal.fire({
                                    allowOutsideClick:false,
                                    html:'<div class="form-group my-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3 text-success"><label class="form-label text-success text-uppercase" style="font-size:16px!important;"><b>Vehicle No. :- </b>'+parse.vehicleNumber+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">OWNER NAME :- </b>'+parse.personName+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">City :- </b>'+parse.city+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">State :- </b>'+parse.state+'</label></div><div class="form-group mb-3"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-3"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>',
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:false
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        location.href="<?php echo base_url(); ?>ngo/checkVehicle2";
                                    }else if(result.isDismissed)
                                    {
                                        location.reload();
                                    }
                                })
                             }else if(parse.isRegistered == 1 && parse.isMissing == 1)
                             {
                                Swal.fire({
                                    allowOutsideClick:false,
                                    html:'<div class="form-group my-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3 text-danger"><label class="form-label text-danger text-uppercase" style="font-size:16px!important;"><b>Vehicle No. :- </b>'+parse.vehicleNumber+'</label></div><div class="form-group mb-3 text-danger text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">OWNER Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">City :- </b>'+parse.city+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">State :- </b>'+parse.state+'</label></div><div class="form-group mb-3"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-3"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>',
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:false
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        location.href="<?php echo base_url(); ?>ngo/checkVehicle2";
                                    }else if(result.isDismissed)
                                    {
                                        location.reload();
                                    }
                                })   
                             }   
                        }else{
                            if(parse.isRegistered == 0 && parse.isMissing == 1)
                            {
                                 let html = '';
                                 if(parse.isVerified == 1)
                                 {
                                     html = '<div class="form-group my-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3 text-danger text-uppercase"><label class="form-label text-danger" style="font-size:16px!important;"><b>Vehicle No. :- </b>'+parse.vehicleNumber+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">OWNER NAME :- </b>'+parse.personName+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">City :- </b>'+parse.city+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">State :- </b>'+parse.state+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
                                 }else{
                                     html = '<div class="form-group my-3 text-danger"><label class="form-label text-danger text-uppercase" style="font-size:16px!important;"><b>Vehicle No. :- </b>'+parse.vehicleNumber+'</label></div><div class="form-group mb-3 text-danger"><label class="form-label text-uppercase" style="font-size:16px!important;"><b style="color:black;">OWNER NAME :- </b>'+parse.personName+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">City :- </b>'+parse.city+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">State :- </b>'+parse.state+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
                                 }
                                 Swal.fire({
                                    allowOutsideClick:false,
                                    html: html,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:false,
                                }).then((result) => {
                                    if(result.isDismissed)
                                    {
                                        location.reload();
                                    }
                                })
                             }else if(parse.isRegistered == 1 && parse.isMissing == 0)
                             {
                                 let html = '';
                                 if(parse.isVerified == 1)
                                 {
                                     html = '<div class="form-group my-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3 text-success text-uppercase"><label class="form-label text-success" style="font-size:16px!important;"><b>Vehicle No. :- </b>'+parse.vehicleNumber+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"> <b style="color:black;">OWNER NAME :- </b>'+parse.personName+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">City :- </b>'+parse.city+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">State :- </b>'+parse.state+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                 }else{
                                     html = '<div class="form-group my-3 text-danger"><label class="form-label text-danger text-uppercase" style="font-size:16px!important;"><b>Vehicle No. :- </b>'+parse.vehicleNumber+'</label></div><div class="form-group mb-3 text-success text-uppercase"><label class="form-label" style="font-size:16px!important;"> <b style="color:black;">OWNER NAME :- </b>'+parse.personName+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">City :- </b>'+parse.city+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">State :- </b>'+parse.state+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                 }
                                 Swal.fire({
                                    allowOutsideClick:false,
                                    html: html,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:false
                                }).then((result) => {
                                    if(result.isDismissed)
                                    {
                                        location.reload();
                                    }
                                })
                             }else if(parse.isRegistered == 1 && parse.isMissing == 1)
                             {
                                 let html= '';
                                if(parse.isVerified == 1)
                                {
                                    html = '<div class="form-group my-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3 text-danger"><label class="form-label text-danger text-uppercase" style="font-size:16px!important;"><b>Vehicle No. :- </b>'+parse.vehicleNumber+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">OWNER NAME :- </b>'+parse.personName+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">City :- </b>'+parse.city+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">State :- </b>'+parse.state+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
                                }else{
                                     html = '<div class="form-group my-3 text-danger"><label class="form-label text-danger text-uppercase" style="font-size:16px!important;"><b>Vehicle No. :- </b>'+parse.vehicleNumber+'</label></div><div class="form-group mb-3 text-danger text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">OWNER NAME :- </b>'+parse.personName+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">City :- </b>'+parse.city+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">State :- </b>'+parse.state+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
                                }
                                Swal.fire({
                                    allowOutsideClick:false,
                                    html:html,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:false
                                }).then((result) => {
                                    if(result.isDismissed)
                                    {
                                        location.reload();
                                    }
                                })   
                             }   
                        }
                    }
                    else{
                        if(parse.status == 'error')
                        {
                            toastr.error(parse.message);
                            $('#step2Check').removeAttr('disabled');
                            $('#idNumber').attr('readonly',false);
                            $('#searchType').attr('readonly',false);
                            $('#idType').attr('readonly',false);
                         }else{
                            let textMessage = '';
                            if(idType == 'vehicleNumber')
                            {
                                textMessage = 'Vehicle Number';
                            }
                            if(idType == 'engineNumber')
                            {
                                textMessage = 'Engine Number';
                            }
                            if(idType == 'chassisNumber')
                            {
                                textMessage = 'Chassis Number';
                            }
                            if(!parse.isAadharCorrect)
                            {
                                Swal.fire({
                                    title: '<strong class="text-danger" style="font-size:20px;">This vehicle is not registered on website</strong>',
                                    icon: 'info',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    showSearchAccordingly('');
                                    $('#step2Check').removeAttr('disabled');
                                    $('#idNumber').val('');
                                })
                            }
                        }
                    }
                }
            })
        }
    })
    
    $('#idNumber').on('keypress', function(e) {
        if (e.which == 32){
            return false;
        }
    });
        
    function showSearchAccordingly(val)
    {
        if(val.length > 0)
        {
            $('#step2Check').removeClass('disabled');
            $('#step2Check').addClass('btn-style-green').removeClass('btn-style-grey');
        }else{
            $('#step2Check').addClass('disabled');
            $('#step2Check').addClass('btn-style-grey').removeClass('btn-style-green');
        }
    }
    
    function showInputAccordingly(ele,val)
    {
        if(val == '')
        {
            $('#searchLabel').html($('#searchType option:selected').text());
            $('#numberIdentity').addClass('d-none');
            $('#idNumber').removeAttr('name');
            $('#idNumber').attr('required',false);
        }
        if(val == 'vehicleNumber')
        {
            $('#numberIdentity').removeClass('d-none');
            $('#idNumber').attr('name','idNumber');
            $('#idNumber').attr('required',true);
            $('#idLabel').html('Enter Vehicle Number');
        }
        if(val == 'chassisNumber')
        {
            $('#numberIdentity').removeClass('d-none');
            $('#idNumber').attr('name','idNumber');
            $('#idNumber').attr('required',true);
            $('#idLabel').html('Enter Chassis Number');
        }
        if(val == 'engineNumber')
        {
            $('#numberIdentity').removeClass('d-none');
            $('#idNumber').attr('name','idNumber');
            $('#idNumber').attr('required',true);
            $('#idLabel').html('Enter Engine Number');
        }
    }
    
    function redirectToStep2()
    {
        window.open('<?php echo base_url(); ?>ngo/search_vehicle_details?pn=2','_blank');
    }
    
    function checkLength(val,limit)
    {
        if(val.length == limit)
        {
            return false;
        }else{
            return true;
        }
    }
  </script>