<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .swal2-popup {
        display: none;
        position: relative;
        box-sizing: border-box;
        grid-template-columns: minmax(0, 100%);
        width: 33em!important;
        max-width: 100%;
        padding: 0 0 1.25em;
        border: none;
        border-radius: 5px;
        background: #fff;
        color: #545454;
        font-family: inherit;
        font-size: 1rem;
    }
    #swal2-html-container{
        margin:0!important;
        padding-right: 1rem!important;
        padding-left: 1rem!important;
    }
    .select2-container{
        width:-webkit-fill-available!important;
    }
    select{
        appearance:auto!important;
    }
    #detailDiv hr{
      margin-top: 1rem!important;
      margin: 1rem 1rem 1rem 1rem;
    }
    label{
        font-weight: 600!important;
        color: black!important;
    }
    .checkbox-custom, .radio-custom {
    opacity: 0;
    position: absolute;   
}
<style>
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
        <h1>Guest Entry</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="breadcrumb-item active">Guest Entry</li>
            </ol>
        </nav>
    </div>
    <section class="section profile">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-body px-2">
                    <div class="row justify-content-center align-items-baseline">
                        <div class="col-lg-6 col-sm-12 col-md-6 mb-2">
                            <h5 class="card-title mb-0 pb-0 text-center text-md-start">Add Hotel Entry</h5>  
                        </div>
                        <div class="col-lg-6 col-sm-12 col-md-6 mb-2">
                            <h6 class="card-title text-success pt-0 pb-0 text-center text-md-end">Booking Id:- <?php echo $bookingId; ?></h6>
                        </div>
                    </div>
                    <ul class="nav nav-pills mb-0 d-block d-md-flex text-center" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" style="font-weight:bold;" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Add Adult</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" style="font-weight:bold;" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false" tabindex="-1">Add Child</a>
                        </li>
                    </ul>
                    <div class="tab-content pt-2" id="myTabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="home-tab">
                            <form class="row g-3 needs-validation" method="post" action="<?php echo base_url(); ?>hotel/checkEntry" novalidate>
                                <?php 
                                  $csrf = array(
                                    'name' => $this->security->get_csrf_token_name(),
                                    'hash' => $this->security->get_csrf_hash()
                                    );
                                ?>
                                <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                                <input type="hidden" name="searchType" value="Holder" />
                                <input type="hidden" name="bookingId" id="bookingId" value="<?php echo $bookingId; ?>">
                                <div class="col-lg-12 col-sm-12 col-md-12 mx-auto">
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-12 col-md-6">
                                            <div class="form-floating mt-3 pr-2 row mx-0">
                                                <input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>" name="checkInDate" id="checkInDate" required placeholder="Check In Date">
                                                <label for="checkInDate" class="pl-2">Enter Check In Date</label>
                                                <div class="invalid-feedback">Please enter Check In Date.</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-12 col-md-6">
                                            <div class="form-floating mt-3 pr-2 row mx-0">
                                                <input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>" name="checkOutDate" id="checkOutDate" required placeholder="Enter Check Out Date">
                                                <label for="checkOutDate" class="pl-2">Enter Check Out Date</label>
                                                <div class="invalid-feedback">Please Enter Check Out Date.</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-sm-12 col-md-12">
                                            <div class="form-floating mt-3 pr-2 row mx-0">
                                                <input type="number" class="form-control" name="room_no" id="roomNo" required placeholder="Room Number">
                                                <label for="roomNo" class="pl-2">Enter Room No</label>
                                                <div class="invalid-feedback">Please enter Room Number.</div>
                                            </div>
                                        </div>
                                        <div class="col-6 px-1 col-lg-auto col-sm-12 col-md-auto mt-3 text-center">
                                            <button type="button" class="w-100 btn btn-style-four disabled-on-loading" onclick="addMember()"> Add</button>
                                        </div>
                                        <div class="col-6 px-1 col-sm-12 col-md-auto col-lg-auto mt-3">
                                            <button type="button" class="w-100 btn btn-style-red disabled-on-loading" style="background:red!important;" onclick="resetAll(this)"> Reset</button>
                                        </div>
                                    </div>
                                    <div id="addPersonDiv" class="col-lg-12 col-sm-12 col-md-12 my-3" style="display:none;">
                                        <div class="row">
                                            <div class="form-floating form-group mb-3 mt-0 col-sm-12 col-md-3 col-lg-auto" id="idTypeDiv">
                                                <select name="idType" class="form-control" style="appearance:auto;" id="idType" aria-label="Select Id Type" onchange="showInputAccordingly(this.value)">
                                                    <option value="">Choose Option</option>
                                                    <option value="aadhar">Aadhaar</option>
                                                    <option value="dl">Driving License</option>
                                                    <option value="pan">Pan Card</option>
                                                    <option value="voter">Voter Id</option>
                                                </select>
                                                <label for="idType" class="ms-3">Select Id Type</label>
                                            </div>
                                            <div id="aadharIdentity" class="px-0 col-lg-6 col-md-9 col-sm-12 d-none">
                                                <div class="pr-2 row mx-0">
                                                    <div class="col-md col-12 mb-3">
                                                        <div class="input-group mb-3">
                                                            <div class="form-floating">
                                                                <input type="number" class="form-control" name="aadhar_id" max="12" min="12" onKeyUp="showSearchAccordingly(this.value,'aadhar')" onKeyPress="return checkLength(this.value,12)" id="aadharNumber" required placeholder="Aadhar Number" aria-describedby="btnAadharClear">
                                                                <label for="aadharNumber" id="aadharLabel">Enter Aadhaar No</label>
                                                                <div class="invalid-feedback">Please enter aadhar number.</div>
                                                            </div>
                                                            <div class="input-group-append d-none">
                                                                <span class="input-group-text" style="padding:1.25rem 1rem;border-radius:0;background:white;color:black;cursor:pointer;" id="btnAadharClear"><i class="fa fa-times"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md col-10 form-group mb-3 form-floating">
                                                        <input type="date" class="form-control" id="aadharDate" max="<?php echo date('Y-m-d'); ?>">
                                                        <label for="aadharDate" class="ms-2">Select DOB</label>
                                                    </div>
                                                    <div class="col-lg-auto col-2 mb-3 col-md-auto px-0 searchDiv">
                                                        <button class="btn btn-success w-auto disabled-on-loading btn-style-grey disabled" style="border-radius: 0!important;padding: 0.9rem 0.8rem!important;" id="step2CheckAadhar" type="button"> <i class="fa fa-search"></i></button>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="panIdentity" class="px-0 col-lg-6 col-md-9 col-sm-12 d-none">
                                                <div class="pr-2 row mx-0">
                                                    <div class="col-md col-12 mb-3">
                                                        <div class="input-group mb-3">
                                                            <div class="form-floating">
                                                                <input type="text" class="form-control text-uppercase" name="panNumber" onKeyUp="showSearchAccordingly(this.value,'pan')" onKeyPress="return checkLength(this.value,10)" id="panNumber" required placeholder="Aadhar Number" aria-describedby="step2CheckPan">
                                                                <label for="panNumber" id="panLabel">Enter PAN No</label>
                                                                <div class="invalid-feedback">Please enter PAN number.</div>
                                                            </div>
                                                            <div class="input-group-append d-none">
                                                                <span class="input-group-text" style="padding:1.25rem 1rem;border-radius:0;background:white;color:black;cursor:pointer;" id="btnPanClear"><i class="fa fa-times"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md col-10 form-group mb-3 form-floating">
                                                        <input type="date" class="form-control" id="panDate" max="<?php echo date('Y-m-d'); ?>">
                                                        <label for="panDate" class="ms-2">Select DOB</label>
                                                    </div>
                                                    <div class="col-lg-auto col-2 mb-3 col-md-auto px-0 searchDiv">
                                                        <button class="btn btn-success w-auto disabled-on-loading btn-style-grey disabled" style="border-radius: 0!important;padding: 0.9rem 0.8rem!important;" id="step2CheckPan" type="button"> <i class="fa fa-search"></i></button>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="voterIdentity" class="px-0 col-lg-6 col-md-9 col-sm-12 d-none">
                                                <div class="pr-2 row mx-0">
                                                    <div class="col-md col-12 mb-3">
                                                        <div class="input-group mb-3">
                                                            <div class="form-floating">
                                                                <input type="text" class="form-control text-uppercase" name="voterId" max="12" min="12" onKeyUp="showSearchAccordingly(this.value,'voter')" onKeyPress="return checkLength(this.value,12)" id="aadharNumber" required placeholder="Aadhar Number" aria-describedby="step2CheckVoter">
                                                                <label for="voterId" id="voterLabel">Enter Voter No</label>
                                                                <div class="invalid-feedback">Please enter Voter number.</div>
                                                            </div>
                                                            <div class="input-group-append d-none">
                                                                <span class="input-group-text" style="padding:1.25rem 1rem;border-radius:0;background:white;color:black;cursor:pointer;" id="btnVoterClear"><i class="fa fa-times"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md col-10 form-group mb-3 form-floating">
                                                        <input type="date" class="form-control" id="voterDate" max="<?php echo date('Y-m-d'); ?>">
                                                        <label for="voterDate" class="ms-2">Select DOB</label>
                                                    </div>
                                                    <div class="col-lg-auto col-2 mb-3 col-md-auto px-0 searchDiv">
                                                        <button class="btn btn-success w-auto disabled-on-loading btn-style-grey disabled" style="border-radius: 0!important;padding: 0.9rem 0.8rem!important;" id="step2CheckVoter" type="button"> <i class="fa fa-search"></i></button>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="dlIdentity" class="px-0 col-lg-6 col-md-9 col-sm-12 d-none">
                                                <div class="pr-2 row mx-0">
                                                    <div class="col-md col-12 mb-3">
                                                        <div class="input-group mb-3">
                                                            <div class="form-floating">
                                                                <input type="text" class="form-control text-uppercase" onKeyUp="showSearchAccordingly(this.value,'dl')" onKeyPress="return checkLength(this.value,15)" id="dlNumber" required placeholder="Driving License Number" aria-describedby="step2CheckDl">
                                                                <label for="dlNumber" id="dlLabel">Enter D.L No</label>
                                                                <div class="invalid-feedback">Please enter Driving License number.</div>
                                                            </div>
                                                            <div class="input-group-append d-none">
                                                                <span class="input-group-text" style="padding:1.25rem 1rem;border-radius:0;background:white;color:black;cursor:pointer;" id="btnDlClear"><i class="fa fa-times"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md col-10 form-group mb-3 form-floating">
                                                        <input type="date" class="form-control" id="dlDate" max="<?php echo date('Y-m-d'); ?>">
                                                        <label for="dlDate" class="ms-2">Select DOB</label>
                                                    </div>
                                                    <div class="col-lg-auto col-2 mb-3 col-md-auto px-0 searchDiv">
                                                        <button class="btn btn-success w-auto disabled-on-loading btn-style-grey disabled" style="border-radius: 0!important;padding: 0.9rem 0.8rem!important;" id="step2CheckDl" type="button"> <i class="fa fa-search"></i></button>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating form-group mb-3 mt-0 col-sm-12 col-md-auto col-lg-auto d-none" id="personDiv">
                                                <input type="text" readonly class="form-control" placeholder="Person Name" id="personName">
                                                <label for="personName" class="ms-3">Person Name</label>
                                            </div>
                                            <div class="form-floating form-group mb-3 mt-0 col-sm-12 col-md-auto col-lg-2 d-none" id="mobileDiv">
                                                <select name="mobile" class="form-control" style="appearance:auto;" id="mobile" aria-label="Select Mobile" onchange="showOtpAccordingly(this.value)">
                                                    <option value="">Choose Mobile</option>
                                                </select>
                                                <label for="mobile" class="ms-3">Select Mobile</label>
                                            </div>
                                            <div class="form-floating form-group mb-3 mt-0 col-sm-12 col-md-auto col-lg-2 d-none" id="nonHolderMobileDiv">
                                                <input type="number" onKeyPress="return checkLength(this.value,10)" placeholder="Mobile" class="form-control" onKeyUp="showOtpAccordingly(this.value)" id="nonHolderMobile">
                                                <label for="nonHolderMobile" class="ms-3">Enter Mobile No.</label>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-auto col-lg-auto d-none" id="otpDiv">
                                                <button type="button" class="btn btn-style-grey disabled disabled-on-loading" onclick="sendOtp(this)"> Send OTP</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="row">
                                <div class="col-12 col-md-auto col-lg">
                                    <div class="form-floating mt-3 pr-2 row mx-0">
                                        <input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>" name="checkInChildDate" id="checkInChildDate" required placeholder="Check In Date">
                                        <label for="checkInChildDate" class="pl-2">Enter Check In Date</label>
                                        <div class="invalid-feedback">Please enter Check In Date.</div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-auto col-lg">
                                    <div class="form-floating mt-3 pr-2 row mx-0">
                                        <input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>" name="checkOutChildDate" id="checkOutChildDate" required placeholder="Enter Check Out Date">
                                        <label for="checkOutChildDate" class="pl-2">Enter Check Out Date</label>
                                        <div class="invalid-feedback">Please Enter Check Out Date.</div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-auto col-lg">
                                    <div class="form-floating mt-3 pr-2 row mx-0">
                                        <input type="number" class="form-control" name="roomChildNo" id="roomChildNo" required placeholder="Room Number">
                                        <label for="roomChildNo" class="pl-2">Enter Room No</label>
                                        <div class="invalid-feedback">Please enter Room Number.</div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-auto col-lg">
                                    <div class="form-floating mt-3 pr-2 row mx-0">
                                        <input type="text" class="form-control" name="childName" id="childName" required placeholder="Child Name">
                                        <label for="childName" class="pl-2">Enter Child Name</label>
                                        <div class="invalid-feedback">Please enter Child Name.</div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-auto col-lg">
                                    <div class="form-floating mt-3 pr-2 row mx-0">
                                        <input type="number" class="form-control" name="childAge" id="childAge" required placeholder="Child Age">
                                        <label for="childAge" class="pl-2">Enter Child Age</label>
                                        <div class="invalid-feedback">Please enter Child Age.</div>
                                    </div>
                                </div>
                                <input type="hidden" id="mainPhotoSelected" >
                                <div class="col-12 col-md-auto col-lg">
                                    <div class="form-floating mt-3 pr-2 row mx-0">
                                        <select name="childGender" class="form-control" style="appearance:auto;" id="childGender" aria-label="Select Gender">
                                            <option value="">Choose Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <label for="childGender">Select Gender</label>
                                        <div class="invalid-feedback">Please enter Child Gender.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-auto col-sm-12 col-md-auto mt-3">
                                    <button type="button" class="btn btn-primary btn-style-green disabled-on-loading" onclick="saveChild(this)"> Add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12 mt-3">
                <div class="card">
                    <div class="card-body pb-3 w-100 px-3">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-md-12">
                                <div class="pt-0 pb-0 mt-3">
                                    <h5 class="card-title pt-2 pb-0 text-center">Persons</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-md-12 table-responsive">
                                <table class="table text-center table-bordered">
                                    <thead>
                                        <tr>
                                            <th>View</th>
                                            <th>#</th>
                                            <th>Id Type</th>
                                            <th>Id Number</th>
                                            <th>Person Type</th>
                                            <th>Name</th>
                                            <th>Gender</th>
                                            <th>Age</th>
                                            <th>Room No.</th>
                                        </tr>  
                                    </thead>
                                    <tbody id="adultBody">
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12 mx-auto">
                <div class="card">
                    <div class="card-body pb-3 w-100 p-3">    
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-md-12 text-center text-md-end">
                                <button type="button" class="btn btn-style-green disabled-on-loading" onclick="finalSubmit(this)"> Final Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
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
                        <button id="click-photo" class="w-100 btn btn-primary btn-style-five">Capture Photo</button>
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
                    <div class='col-lg-auto col-sm-12 col-md-12 mt-3 px-0' id="frontcameradiv">
                        <button type='button' class='w-100 btn btn-style-green btn-primary' onclick='openFrontCamera()'>Open Front Camera <i class='fa fa-camera fa-spin'></i></button>
                    </div>
                    <div class='col-lg-auto col-sm-12 col-md-6 mt-3 px-0 px-md-2' id="backcameradiv">
                        <button type='button' class='w-100 btn btn-style-green btn-primary' onclick='openBackCamera()'>Open Back Camera <i class='fa fa-camera fa-spin'></i></button>
                        </div>
                    </div>
                </div>
            <div class="row justify-content-center mx-0">
                <div class="col-lg-6 col-sm-12 col-md-6 text-center d-none mb-3" id="retake">
                    <button id="retake-photo" class="w-100 btn btn-primary btn-style-yellow" style="">Retake</button>
                </div>
                <div class="col-lg-6 col-sm-12 col-md-6 text-center d-none mb-3" id="retakeMobile">
                    <button id="retake-mobile" class="w-100 btn btn-primary btn-style-yellow" onclick="openCamera()">Retake</button>
                </div>
                <div class="col-lg-6 col-sm-12 col-md-6 text-center mb-3">
                    <button id="btnInactiveSave" class="w-100 btn btn-primary btn-style-four disabled-on-loading"> Save</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function finalSubmit(ele)
    {
        Swal.fire({
            title: '<strong class="text-danger" style="font-size:20px;">Hotel Entry</strong>',
            icon: 'error',
            allowOutsideClick:false,
            html:
                '<div class="form-group mt-3"><label class="form-label">Are you sure you want to final submit?</label></div>',
            showCloseButton: true,
            confirmButtonText:'Yes',
            cancelButtonText:'No',
            showCancelButton: true,
            focusConfirm: false,
            showConfirmButton:true
        }).then((result) => {
            if (result.isConfirmed) {
                $(ele).attr('disabled','disabled');
                location.reload();
            }
        })
    }
        
    $('#btnInactiveSave').click(function()
    {
        let id = $('#cameraModal').prop('data-id');
        if(id == '')
        {
            if($('#mainPhotoSelected').val() != '')
            {
                $(this).attr('disabled','disabled');      
                let data = new FormData();
                data.append('photo',$('#mainPhotoSelected').val());
                data.append('_token','<?php echo $csrf['hash']; ?>');
                $.ajax({
                    url:'<?php echo base_url(); ?>hotel/saveNonHolderPhoto',
                    data:data,
                    contentType: false,
                    cache: false,
                    processData:false,
                    type:'post',
                    success:function(res)
                    {
                        Swal.fire({
                            title: '<strong class="text-dark" style="font-size:20px;">Guest Entry Uploaded Sucessfully</strong>',
                            icon: 'success',
                            allowOutsideClick:false,
                            showCloseButton: true,
                            showCancelButton: false,
                            focusConfirm: false,
                            showConfirmButton:true
                        }).then(() => {
                            nonResetAll($('#nonReset'));
                            $('#btnInactiveSave').removeAttr('disabled');
                            $('#cameraModal').modal('hide');
                            stream.getTracks().forEach(function(track) {
                              track.stop();
                            });  
                        })
                    }
                })
            }else{
                toastr.error('Please capture the photo to continue');
            }   
        }else{
            id = $('#fileMobInput').prop('data-id');
            if(id == '')
            {
                if($('#mainPhotoSelected').val() != '')
                {
                    $(this).attr('disabled','disabled');      
                    let data = new FormData();
                    data.append('photo',$('#mainPhotoSelected').val());
                    data.append('_token','<?php echo $csrf['hash']; ?>');
                    $.ajax({
                        url:'<?php echo base_url(); ?>hotel/saveNonHolderPhoto',
                        data:data,
                        contentType: false,
                        cache: false,
                        processData:false,
                        type:'post',
                        success:function(res)
                        {
                            Swal.fire({
                                title: '<strong class="text-dark" style="font-size:20px;">Guest Entry Uploaded Sucessfully</strong>',
                                icon: 'success',
                                allowOutsideClick:false,
                                showCloseButton: true,
                                showCancelButton: false,
                                focusConfirm: false,
                                showConfirmButton:true
                            }).then(() => {
                                nonResetAll($('#nonReset'));
                                $('#btnInactiveSave').removeAttr('disabled');
                                $('#cameraModal').modal('hide');
                                stream.getTracks().forEach(function(track) {
                                  track.stop();
                                });  
                            })
                        }
                    })
                }else{
                    toastr.error('Please capture the photo to continue');
                }
            }else{
                if($('#mainPhotoSelected').val() != '')
                {
                    $(this).attr('disabled','disabled');      
                    let data = new FormData();
                    data.append('photo',$('#mainPhotoSelected').val());
                    data.append('Id',id);
                    data.append('_token','<?php echo $csrf['hash']; ?>');
                    $.ajax({
                        url:'<?php echo base_url(); ?>hotel/checkInactiveFace',
                        data:data,
                        contentType: false,
                        cache: false,
                        processData:false,
                        type:'post',
                        success:function(res)
                        {
                            
                        }
                    })
                }else{
                    toastr.error('Please capture the photo to continue');
                }
            }
        }
    })
    
    function saveChild(ele)
    {
        let gender = $('#childGender').val();
        let age = $('#childAge').val();
        let name = $('#childName').val();
        let checkInDate = $('#checkInChildDate').val();
        let checkOutDate = $('#checkOutChildDate').val();
        let roomNumber = $('#roomChildNo').val();
        if(gender != '' && age != '' && name != '' && checkInDate != '' && checkOutDate != '' && roomNumber != '')
        {
            if(checkInDate <= checkOutDate) {
                let data= new FormData();
                data.append('checkInDate',$('#checkInChildDate').val());
                data.append('checkOutDate',$('#checkOutChildDate').val());
                data.append('roomNumber',$('#roomChildNo').val());
                data.append('gender',$('#childGender').val());
                data.append('age',$('#childAge').val());
                data.append('bookingId',$('#bookingId').val());
                data.append('name',$('#childName').val());
                data.append('_token','<?php echo $csrf['hash']; ?>');
                $(ele).attr('disabled','disabled');
                $.ajax({
                    url:'<?php echo base_url(); ?>hotel/saveChild',
                    data:data,
                    cache:false,
                    processData:false,
                    contentType:false,
                    type:'post',
                    success:function(res)
                    {
                        let parse = JSON.parse(res);
                        if(parse.status == 'success')
                        {
                            Swal.fire({
                                title: '<strong class="text-dark" style="font-size:20px;">Child Entry Created Sucessfully</strong>',
                                icon: 'success',
                                allowOutsideClick:false,
                                showCloseButton: true,
                                showCancelButton: false,
                                focusConfirm: false,
                                showConfirmButton:true
                            }).then((result) => {
                                $(ele).removeAttr('disabled');
                                $('#childGender').val('');
                                $('#childAge').val('');
                                $('#childName').val('');
                                let length = ($('#adultBody tr').length + 1);
                                $('#adultBody').append('<tr><td>-</td><td>'+length+'</td><td>-</td><td>-</td><td>Child</td><td><b>'+parse.personName+'</b></td><td>'+parse.personGender+'</td><td>'+parse.personAge+'</td><td>'+parse.roomNumber+'</td></tr>');
                                $('#addChildModal').modal('hide');
                            })
                        }else{
                            Swal.fire({
                                title: '<strong class="text-dark" style="font-size:20px;">'+parse.message+'</strong>',
                                icon: 'error',
                                allowOutsideClick:false,
                                showCloseButton: true,
                                showCancelButton: false,
                                focusConfirm: false,
                                showConfirmButton:true
                            }).then(() => {
                                $(ele).removeAttr('disabled');
                            })            
                        }
                    }
                })
            }else{
                toastr.error('Check-Out date must be greater than Check-In date.');    
            }
        }else{
            Swal.fire({
                title: '<strong class="text-dark" style="font-size:20px;">Please enter all the details</strong>',
                icon: 'error',
                allowOutsideClick:false,
                showCloseButton: true,
                showCancelButton: false,
                focusConfirm: false,
                showConfirmButton:true
            })
        }
    }

    $('#step2CheckDl').click(function()
    {
        $('#step2CheckDl').attr('disabled','disabled');
        let data = new FormData();
        let idType = $('#idType').val();
        let label = '';
        let count = 0;
        data.append('idType',$('#idType').val());   
        if(idType == 'aadhar')
        {
            label = 'Aadhar Number';
            if($('#aadharNumber').val() != '')
            {
                count = 1;
                
                data.append('idNumber',$('#aadharNumber').val());   
            }
        }
        if(idType == 'voter')
        {
            label = 'Voter Id';
            if($('#voterId').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#voterId').val());
            }
        }
        if(idType == 'pan')
        {
            label = 'PAN Number';
            if($('#panNumber').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#panNumber').val());
            }
        }
        if(idType == 'dl')
        {
            label = 'Driving License Number';
            if($('#dlNumber').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#dlNumber').val());
            }
        }
        data.append('_token','<?php echo $csrf['hash']; ?>');
        data.append('checkInDate',$('#checkInDate').val());
        data.append('checkOutDate',$('#checkOutDate').val());
        data.append('roomNumber',$('#roomNo').val());
        data.append('bookingId',$('#bookingId').val());
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
                    $('#step2CheckDl').removeAttr('disabled');
                }else if(result.isDismissed)
                {
                    $('#step2CheckDl').removeAttr('disabled');
                }
            })
        }else{
            if($('#dlDate').val() != '')
            {
                data.append('dob',$('#dlDate').val());
                $.ajax({
                        url:'<?php echo base_url(); ?>hotel/checkEntryClone',
                        data:data,
                        processData:false,
                        cache:false,
                        contentType:false,
                        type:'post',
                        success:function(res)
                        {
                            let parse = JSON.parse(res);
                            let idType = $('#idType').val();
                            if(parse.status == 'success')
                            {
                                $('#dlIdentity .input-group').css('width','100%');
                                $('#idType').attr('disabled','disabled');
                                $('#dlNumber').attr('disabled','disabled');
                                $('#step2CheckDl').parent().addClass('d-none');
                                $('#step2CheckDl').removeAttr('disabled');
                                $('#personDiv').removeClass('d-none');
                                $('#personName').val(parse.personName);
                                $('#otpDiv').removeClass('d-none');
                                if(parse.isIdHolder)
                                {
                                    $('#mobileDiv').removeClass('d-none');
                                    $('#mobile').empty();
                                    $('#mobile').append('<option value="">Choose Mobile</option>');
                                    if(parse.isAlternate)
                                    {
                                        if(parse.isAlternate1 && !parse.isAlternate2)
                                        {
                                            $('#mobile').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                                            $('#mobile').append('<option value="'+parse.data.mobile2+'">'+parse.data.vismobile2+'</option>');
                                        }else if(!parse.isAlternate1 && parse.isAlternate2)
                                        {
                                            $('#mobile').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                                            $('#mobile').append('<option value="'+parse.data.mobile2+'">'+parse.data.vismobile2+'</option>');
                                        }
                                        else{
                                            $('#mobile').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                                            $('#mobile').append('<option value="'+parse.data.mobile2+'">'+parse.data.vismobile2+'</option>');
                                            $('#mobile').append('<option value="'+parse.data.mobile3+'">'+parse.data.vismobile3+'</option>');
                                        }   
                                    }else{
                                        $('#mobile').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                                    }   
                                }else{
                                    $('#nonHolderMobileDiv').removeClass('d-none');
                                    $('#nonHolderMobile').val('');
                                }
                            }
                            else{
                                if(parse.status == 'error')
                                {
                                    toastr.error(parse.message);
                                    $('#step2CheckAadhar').removeAttr('disabled');
                                    $('#otpdiv').addClass('d-none');
                                    $('#aadharNumber').attr('readonly',false);
                                    $('#mobileNumber').attr('readonly',false);
                                 }else{
                                    let textMessage = '';
                                    if(idType == 'aadhar')
                                    {
                                        textMessage = 'Aadhar Card';
                                    }
                                    if(idType == 'dl')
                                    {
                                        textMessage = 'Driving License Number';
                                    }
                                    if(idType == 'voter')
                                    {
                                        textMessage = 'Voter Id';
                                    }
                                    if(idType == 'pan')
                                    {
                                        textMessage = 'Pan Number';
                                    }
                                    if(!parse.isDobCorrect && !parse.isAadharCorrect && parse.isGenderCorrect)
                                    {
                                        Swal.fire({
                                            title: '<strong class="text-dark" style="font-size:20px;">'+textMessage+' and date of birth is incorrect</strong>',
                                            icon: 'info',
                                            allowOutsideClick:false,
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:true
                                        }).then((result) => {
                                            $('#step2CheckAadhar').removeAttr('disabled');
                                            $('#idType').removeAttr('disabled');
                                            if(idType == 'aadhar')
                                            {
                                                $('#aadharNumber').attr('readonly',false);   
                                            }
                                            if(idType == 'dl')
                                            {
                                                $('#dlNumber').attr('readonly',false);   
                                            }
                                            if(idType == 'voter')
                                            {
                                                $('#voterId').attr('readonly',false);   
                                            }
                                            if(idType == 'pan')
                                            {
                                                $('#panNumber').attr('readonly',false);   
                                            }
                                        })
                                    }
                                    else if(!parse.isGenderCorrect && !parse.isAadharCorrect && parse.isDobCorrect)
                                    {
                                        Swal.fire({
                                            title: '<strong class="text-dark" style="font-size:20px;">'+textMessage+' and Gender is incorrect</strong>',
                                            icon: 'info',
                                            allowOutsideClick:false,
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:true
                                        }).then((result) => {
                                            $('#step2CheckAadhar').removeAttr('disabled');
                                            $('#idType').removeAttr('disabled');
                                            if(idType == 'aadhar')
                                            {
                                                $('#aadharNumber').attr('readonly',false);   
                                            }
                                            if(idType == 'dl')
                                            {
                                                $('#dlNumber').attr('readonly',false);   
                                            }
                                            if(idType == 'voter')
                                            {
                                                $('#voterId').attr('readonly',false);   
                                            }
                                            if(idType == 'pan')
                                            {
                                                $('#panNumber').attr('readonly',false);   
                                            }
                                        })
                                    }
                                    else if(!parse.isDobCorrect && !parse.isGenderCorrect && parse.isAadharCorrect)
                                    {
                                        Swal.fire({
                                            title: '<strong class="text-dark" style="font-size:20px;">Gender and date of birth is incorrect</strong>',
                                            icon: 'info',
                                            allowOutsideClick:false,
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:true
                                        }).then((result) => {
                                            $('#step2CheckAadhar').removeAttr('disabled');
                                            $('#idType').removeAttr('disabled');
                                            if(idType == 'aadhar')
                                            {
                                                $('#aadharNumber').attr('readonly',false);   
                                            }
                                            if(idType == 'dl')
                                            {
                                                $('#dlNumber').attr('readonly',false);   
                                            }
                                            if(idType == 'voter')
                                            {
                                                $('#voterId').attr('readonly',false);   
                                            }
                                            if(idType == 'pan')
                                            {
                                                $('#panNumber').attr('readonly',false);   
                                            }
                                        })
                                    }
                                    else if(!parse.isDobCorrect && !parse.isGenderCorrect && !parse.isAadharCorrect)
                                    {
                                        Swal.fire({
                                            title: '<strong class="text-dark" style="font-size:20px;">'+textMessage+', Gender and date of birth is incorrect</strong>',
                                            icon: 'info',
                                            allowOutsideClick:false,
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:true
                                        }).then((result) => {
                                            $('#step2CheckAadhar').removeAttr('disabled');
                                            $('#idType').removeAttr('disabled');
                                            if(idType == 'aadhar')
                                            {
                                                $('#aadharNumber').attr('readonly',false);   
                                            }
                                            if(idType == 'dl')
                                            {
                                                $('#dlNumber').attr('readonly',false);   
                                            }
                                            if(idType == 'voter')
                                            {
                                                $('#voterId').attr('readonly',false);   
                                            }
                                            if(idType == 'pan')
                                            {
                                                $('#panNumber').attr('readonly',false);   
                                            }
                                        })
                                    }
                                    else if(!parse.isAadharCorrect)
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
                                            $('#step2CheckAadhar').removeAttr('disabled');
                                            $('#idType').removeAttr('disabled');
                                            if(idType == 'aadhar')
                                            {
                                                $('#aadharNumber').attr('readonly',false);   
                                            }
                                            if(idType == 'dl')
                                            {
                                                $('#dlNumber').attr('readonly',false);   
                                            }
                                            if(idType == 'voter')
                                            {
                                                $('#voterId').attr('readonly',false);   
                                            }
                                            if(idType == 'pan')
                                            {
                                                $('#panNumber').attr('readonly',false);   
                                            }
                                        })
                                    }
                                    else if(!parse.isDobCorrect)
                                    {
                                        Swal.fire({
                                            title: '<strong class="text-dark" style="font-size:20px;">Date of Birth is incorrect</strong>',
                                            icon: 'info',
                                            allowOutsideClick:false,
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:true
                                        }).then((result) => {
                                            $('#step2CheckAadhar').removeAttr('disabled');
                                            $('#idType').removeAttr('disabled');
                                            if(idType == 'aadhar')
                                            {
                                                $('#aadharNumber').attr('readonly',false);   
                                            }
                                            if(idType == 'dl')
                                            {
                                                $('#dlNumber').attr('readonly',false);   
                                            }
                                            if(idType == 'voter')
                                            {
                                                $('#voterId').attr('readonly',false);   
                                            }
                                            if(idType == 'pan')
                                            {
                                                $('#panNumber').attr('readonly',false);   
                                            }
                                        })
                                    }
                                    else if(!parse.isGenderCorrect)
                                    {
                                        Swal.fire({
                                            title: '<strong class="text-dark" style="font-size:20px;">Gender is incorrect</strong>',
                                            icon: 'info',
                                            allowOutsideClick:false,
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:true
                                        }).then((result) => {
                                            $('#step2CheckAadhar').removeAttr('disabled');
                                            $('#idType').removeAttr('disabled');
                                            if(idType == 'aadhar')
                                            {
                                                $('#aadharNumber').attr('readonly',false);   
                                            }
                                            if(idType == 'dl')
                                            {
                                                $('#dlNumber').attr('readonly',false);   
                                            }
                                            if(idType == 'voter')
                                            {
                                                $('#voterId').attr('readonly',false);   
                                            }
                                            if(idType == 'pan')
                                            {
                                                $('#panNumber').attr('readonly',false);   
                                            }
                                        })
                                    }
                                }
                            }
                        }
                    })
            }else{
                Swal.fire({
                    title: '<strong class="text-danger" style="font-size:20px;">Select DOB</strong>',
                    icon: 'error',
                    allowOutsideClick:false,
                    showCloseButton: true,
                    showCancelButton: false,
                    focusConfirm: false,
                    showConfirmButton:true
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#step2CheckDl').removeAttr('disabled');
                    }else if(result.isDismissed)
                    {
                        $('#step2CheckDl').removeAttr('disabled');
                    }
                })  
            }
        }
    })
    
    $('#step2CheckVoter').click(function()
    {
        $('#step2CheckVoter').attr('disabled','disabled');
        let data = new FormData();
        let idType = $('#idType').val();
        let label = '';
        let count = 0;
        data.append('idType',$('#idType').val());   
        if(idType == 'aadhar')
        {
            label = 'Aadhar Number';
            if($('#aadharNumber').val() != '')
            {
                count = 1;
                
                data.append('idNumber',$('#aadharNumber').val());   
            }
        }
        if(idType == 'voter')
        {
            label = 'Voter Id';
            if($('#voterId').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#voterId').val());
            }
        }
        if(idType == 'pan')
        {
            label = 'PAN Number';
            if($('#panNumber').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#panNumber').val());
            }
        }
        if(idType == 'dl')
        {
            label = 'Driving License Number';
            if($('#dlNumber').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#dlNumber').val());
            }
        }
        data.append('_token','<?php echo $csrf['hash']; ?>');
        data.append('checkInDate',$('#checkInDate').val());
        data.append('checkOutDate',$('#checkOutDate').val());
        data.append('roomNumber',$('#roomNo').val());
        data.append('bookingId',$('#bookingId').val());
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
                    $('#step2CheckVoter').removeAttr('disabled');
                }else if(result.isDismissed)
                {
                    $('#step2CheckVoter').removeAttr('disabled');
                }
            })
        }else{
            if($('#voterDate').val() != '')
            {
                data.append('dob',$('#voterDate').val());
                $.ajax({
                    url:'<?php echo base_url(); ?>hotel/checkEntryClone',
                    data:data,
                    processData:false,
                    cache:false,
                    contentType:false,
                    type:'post',
                    success:function(res)
                    {
                        let parse = JSON.parse(res);
                        let idType = $('#idType').val();
                        if(parse.status == 'success')
                        {
                            $('#voterIdentity .input-group').css('width','100%');
                            $('#idType').attr('disabled','disabled');
                            $('#voterId').attr('disabled','disabled');
                            $('#step2CheckVoter').parent().addClass('d-none');
                            $('#step2CheckVoter').removeAttr('disabled');
                            $('#personDiv').removeClass('d-none');
                            $('#otpDiv').removeClass('d-none');
                            $('#personName').val(parse.personName);
                            if(parse.isIdHolder)
                            {
                                $('#mobileDiv').removeClass('d-none');
                                $('#mobile').empty();
                                $('#mobile').append('<option value="">Choose Mobile</option>');
                                if(parse.isAlternate)
                                {
                                    if(parse.isAlternate1 && !parse.isAlternate2)
                                    {
                                        $('#mobile').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                                        $('#mobile').append('<option value="'+parse.data.mobile2+'">'+parse.data.vismobile2+'</option>');
                                    }else if(!parse.isAlternate1 && parse.isAlternate2)
                                    {
                                        $('#mobile').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                                        $('#mobile').append('<option value="'+parse.data.mobile2+'">'+parse.data.vismobile2+'</option>');
                                    }
                                    else{
                                        $('#mobile').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                                        $('#mobile').append('<option value="'+parse.data.mobile2+'">'+parse.data.vismobile2+'</option>');
                                        $('#mobile').append('<option value="'+parse.data.mobile3+'">'+parse.data.vismobile3+'</option>');
                                    }   
                                }else{
                                    $('#mobile').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                                }   
                            }else{
                                $('#nonHolderMobileDiv').removeClass('d-none');
                                $('#nonHolderMobile').val('');
                            }
                        }
                        else{
                            if(parse.status == 'error')
                            {
                                toastr.error(parse.message);
                                $('#step2CheckVoter').removeAttr('disabled');
                                $('#otpdiv').addClass('d-none');
                                $('#aadharNumber').attr('readonly',false);
                                $('#mobileNumber').attr('readonly',false);
                             }else{
                                let textMessage = '';
                                if(idType == 'aadhar')
                                {
                                    textMessage = 'Aadhar Card';
                                }
                                if(idType == 'dl')
                                {
                                    textMessage = 'Driving License Number';
                                }
                                if(idType == 'voter')
                                {
                                    textMessage = 'Voter Id';
                                }
                                if(idType == 'pan')
                                {
                                    textMessage = 'Pan Number';
                                }
                                if(!parse.isDobCorrect && !parse.isAadharCorrect && parse.isGenderCorrect)
                                {
                                    Swal.fire({
                                        title: '<strong class="text-dark" style="font-size:20px;">'+textMessage+' and date of birth is incorrect</strong>',
                                        icon: 'info',
                                        allowOutsideClick:false,
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:true
                                    }).then((result) => {
                                        $('#step2CheckVoter').removeAttr('disabled');
                                        $('#idType').removeAttr('disabled');
                                        if(idType == 'aadhar')
                                        {
                                            $('#aadharNumber').attr('readonly',false);   
                                        }
                                        if(idType == 'dl')
                                        {
                                            $('#dlNumber').attr('readonly',false);   
                                        }
                                        if(idType == 'voter')
                                        {
                                            $('#voterId').attr('readonly',false);   
                                        }
                                        if(idType == 'pan')
                                        {
                                            $('#panNumber').attr('readonly',false);   
                                        }
                                    })
                                }
                                else if(!parse.isGenderCorrect && !parse.isAadharCorrect && parse.isDobCorrect)
                                {
                                    Swal.fire({
                                        title: '<strong class="text-dark" style="font-size:20px;">'+textMessage+' and Gender is incorrect</strong>',
                                        icon: 'info',
                                        allowOutsideClick:false,
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:true
                                    }).then((result) => {
                                        $('#step2CheckVoter').removeAttr('disabled');
                                        $('#idType').removeAttr('disabled');
                                        if(idType == 'aadhar')
                                        {
                                            $('#aadharNumber').attr('readonly',false);   
                                        }
                                        if(idType == 'dl')
                                        {
                                            $('#dlNumber').attr('readonly',false);   
                                        }
                                        if(idType == 'voter')
                                        {
                                            $('#voterId').attr('readonly',false);   
                                        }
                                        if(idType == 'pan')
                                        {
                                            $('#panNumber').attr('readonly',false);   
                                        }
                                    })
                                }
                                else if(!parse.isDobCorrect && !parse.isGenderCorrect && parse.isAadharCorrect)
                                {
                                    Swal.fire({
                                        title: '<strong class="text-dark" style="font-size:20px;">Gender and date of birth is incorrect</strong>',
                                        icon: 'info',
                                        allowOutsideClick:false,
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:true
                                    }).then((result) => {
                                        $('#step2CheckVoter').removeAttr('disabled');
                                        $('#idType').removeAttr('disabled');
                                        if(idType == 'aadhar')
                                        {
                                            $('#aadharNumber').attr('readonly',false);   
                                        }
                                        if(idType == 'dl')
                                        {
                                            $('#dlNumber').attr('readonly',false);   
                                        }
                                        if(idType == 'voter')
                                        {
                                            $('#voterId').attr('readonly',false);   
                                        }
                                        if(idType == 'pan')
                                        {
                                            $('#panNumber').attr('readonly',false);   
                                        }
                                    })
                                }
                                else if(!parse.isDobCorrect && !parse.isGenderCorrect && !parse.isAadharCorrect)
                                {
                                    Swal.fire({
                                        title: '<strong class="text-dark" style="font-size:20px;">'+textMessage+', Gender and date of birth is incorrect</strong>',
                                        icon: 'info',
                                        allowOutsideClick:false,
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:true
                                    }).then((result) => {
                                        $('#step2CheckVoter').removeAttr('disabled');
                                        $('#idType').removeAttr('disabled');
                                        if(idType == 'aadhar')
                                        {
                                            $('#aadharNumber').attr('readonly',false);   
                                        }
                                        if(idType == 'dl')
                                        {
                                            $('#dlNumber').attr('readonly',false);   
                                        }
                                        if(idType == 'voter')
                                        {
                                            $('#voterId').attr('readonly',false);   
                                        }
                                        if(idType == 'pan')
                                        {
                                            $('#panNumber').attr('readonly',false);   
                                        }
                                    })
                                }
                                else if(!parse.isAadharCorrect)
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
                                        $('#step2CheckVoter').removeAttr('disabled');
                                        $('#idType').removeAttr('disabled');
                                        if(idType == 'aadhar')
                                        {
                                            $('#aadharNumber').attr('readonly',false);   
                                        }
                                        if(idType == 'dl')
                                        {
                                            $('#dlNumber').attr('readonly',false);   
                                        }
                                        if(idType == 'voter')
                                        {
                                            $('#voterId').attr('readonly',false);   
                                        }
                                        if(idType == 'pan')
                                        {
                                            $('#panNumber').attr('readonly',false);   
                                        }
                                    })
                                }
                                else if(!parse.isDobCorrect)
                                {
                                    Swal.fire({
                                        title: '<strong class="text-dark" style="font-size:20px;">Date of Birth is incorrect</strong>',
                                        icon: 'info',
                                        allowOutsideClick:false,
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:true
                                    }).then((result) => {
                                        $('#step2CheckVoter').removeAttr('disabled');
                                        $('#idType').removeAttr('disabled');
                                        if(idType == 'aadhar')
                                        {
                                            $('#aadharNumber').attr('readonly',false);   
                                        }
                                        if(idType == 'dl')
                                        {
                                            $('#dlNumber').attr('readonly',false);   
                                        }
                                        if(idType == 'voter')
                                        {
                                            $('#voterId').attr('readonly',false);   
                                        }
                                        if(idType == 'pan')
                                        {
                                            $('#panNumber').attr('readonly',false);   
                                        }
                                    })
                                }
                                else if(!parse.isGenderCorrect)
                                {
                                    Swal.fire({
                                        title: '<strong class="text-dark" style="font-size:20px;">Gender is incorrect</strong>',
                                        icon: 'info',
                                        allowOutsideClick:false,
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:true
                                    }).then((result) => {
                                        $('#step2CheckVoter').removeAttr('disabled');
                                        $('#idType').removeAttr('disabled');
                                        if(idType == 'aadhar')
                                        {
                                            $('#aadharNumber').attr('readonly',false);   
                                        }
                                        if(idType == 'dl')
                                        {
                                            $('#dlNumber').attr('readonly',false);   
                                        }
                                        if(idType == 'voter')
                                        {
                                            $('#voterId').attr('readonly',false);   
                                        }
                                        if(idType == 'pan')
                                        {
                                            $('#panNumber').attr('readonly',false);   
                                        }
                                    })
                                }
                            }
                        }
                    }
                })
            }else{
                Swal.fire({
                    title: '<strong class="text-danger" style="font-size:20px;">Select DOB</strong>',
                    icon: 'error',
                    allowOutsideClick:false,
                    showCloseButton: true,
                    showCancelButton: false,
                    focusConfirm: false,
                    showConfirmButton:true
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#step2CheckVoter').removeAttr('disabled');
                    }else if(result.isDismissed)
                    {
                        $('#step2CheckVoter').removeAttr('disabled');
                    }
                })  
            }
        }
    })
    
    $('#step2CheckPan').click(function()
    {
        $('#step2CheckPan').attr('disabled','disabled');
        let data = new FormData();
        let idType = $('#idType').val();
        let label = '';
        let count = 0;
        data.append('idType',$('#idType').val());   
        if(idType == 'aadhar')
        {
            label = 'Aadhar Number';
            if($('#aadharNumber').val() != '')
            {
                count = 1;
                
                data.append('idNumber',$('#aadharNumber').val());   
            }
        }
        if(idType == 'voter')
        {
            label = 'Voter Id';
            if($('#voterId').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#voterId').val());
            }
        }
        if(idType == 'pan')
        {
            label = 'PAN Number';
            if($('#panNumber').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#panNumber').val());
            }
        }
        if(idType == 'dl')
        {
            label = 'Driving License Number';
            if($('#dlNumber').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#dlNumber').val());
            }
        }
        data.append('_token','<?php echo $csrf['hash']; ?>');
        data.append('checkInDate',$('#checkInDate').val());
        data.append('checkOutDate',$('#checkOutDate').val());
        data.append('roomNumber',$('#roomNo').val());
        data.append('bookingId',$('#bookingId').val());
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
                    $('#step2CheckPan').removeAttr('disabled');
                }else if(result.isDismissed)
                {
                    $('#step2CheckPan').removeAttr('disabled');
                }
            })
        }else{
            if($('#panDate').val() != '')
            {
                data.append('dob',$('#panDate').val());
                $.ajax({
                    url:'<?php echo base_url(); ?>hotel/checkEntryClone',
                    data:data,
                    processData:false,
                    cache:false,
                    contentType:false,
                    type:'post',
                    success:function(res)
                    {
                        let parse = JSON.parse(res);
                        let idType = $('#idType').val();
                        if(parse.status == 'success')
                        {
                            $('#panIdentity .input-group').css('width','100%');
                            $('#idType').attr('disabled','disabled');
                            $('#panNumber').attr('disabled','disabled');
                            $('#step2CheckPan').parent().addClass('d-none');
                            $('#step2CheckPan').removeAttr('disabled');
                            $('#personDiv').removeClass('d-none');
                            $('#personName').val(parse.personName);
                            $('#otpDiv').removeClass('d-none');
                            if(parse.isIdHolder)
                            {
                                if(parse.isMissing)
                                {
                                    $('#personName').addClass('text-danger').removeClass('text-success');   
                                }else{
                                    $('#personName').addClass('text-success').removeClass('text-danger');
                                }
                                $('#mobileDiv').removeClass('d-none');
                                $('#mobile').empty();
                                $('#mobile').append('<option value="">Choose Mobile</option>');
                                if(parse.isAlternate)
                                {
                                    if(parse.isAlternate1 && !parse.isAlternate2)
                                    {
                                        $('#mobile').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                                        $('#mobile').append('<option value="'+parse.data.mobile2+'">'+parse.data.vismobile2+'</option>');
                                    }else if(!parse.isAlternate1 && parse.isAlternate2)
                                    {
                                        $('#mobile').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                                        $('#mobile').append('<option value="'+parse.data.mobile2+'">'+parse.data.vismobile2+'</option>');
                                    }
                                    else{
                                        $('#mobile').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                                        $('#mobile').append('<option value="'+parse.data.mobile2+'">'+parse.data.vismobile2+'</option>');
                                        $('#mobile').append('<option value="'+parse.data.mobile3+'">'+parse.data.vismobile3+'</option>');
                                    }   
                                }else{
                                    $('#mobile').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                                }   
                            }else{
                                $('#personName').addClass('text-success').removeClass('text-danger');
                                $('#nonHolderMobileDiv').removeClass('d-none');
                                $('#nonHolderMobile').val('');
                            }
                        }
                        else{
                            if(parse.status == 'error')
                            {
                                toastr.error(parse.message);
                                $('#step2CheckPan').removeAttr('disabled');
                                $('#otpdiv').addClass('d-none');
                                $('#aadharNumber').attr('readonly',false);
                                $('#mobileNumber').attr('readonly',false);
                             }else{
                                let textMessage = '';
                                if(idType == 'aadhar')
                                {
                                    textMessage = 'Aadhar Card';
                                }
                                if(idType == 'dl')
                                {
                                    textMessage = 'Driving License Number';
                                }
                                if(idType == 'voter')
                                {
                                    textMessage = 'Voter Id';
                                }
                                if(idType == 'pan')
                                {
                                    textMessage = 'Pan Number';
                                }
                                if(!parse.isDobCorrect && !parse.isAadharCorrect && parse.isGenderCorrect)
                                {
                                    Swal.fire({
                                        title: '<strong class="text-dark" style="font-size:20px;">'+textMessage+' and date of birth is incorrect</strong>',
                                        icon: 'info',
                                        allowOutsideClick:false,
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:true
                                    }).then((result) => {
                                        $('#step2CheckPan').removeAttr('disabled');
                                        $('#idType').removeAttr('disabled');
                                        if(idType == 'aadhar')
                                        {
                                            $('#aadharNumber').attr('readonly',false);   
                                        }
                                        if(idType == 'dl')
                                        {
                                            $('#dlNumber').attr('readonly',false);   
                                        }
                                        if(idType == 'voter')
                                        {
                                            $('#voterId').attr('readonly',false);   
                                        }
                                        if(idType == 'pan')
                                        {
                                            $('#panNumber').attr('readonly',false);   
                                        }
                                    })
                                }
                                else if(!parse.isGenderCorrect && !parse.isAadharCorrect && parse.isDobCorrect)
                                {
                                    Swal.fire({
                                        title: '<strong class="text-dark" style="font-size:20px;">'+textMessage+' and Gender is incorrect</strong>',
                                        icon: 'info',
                                        allowOutsideClick:false,
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:true
                                    }).then((result) => {
                                        $('#step2CheckPan').removeAttr('disabled');
                                        $('#idType').removeAttr('disabled');
                                        if(idType == 'aadhar')
                                        {
                                            $('#aadharNumber').attr('readonly',false);   
                                        }
                                        if(idType == 'dl')
                                        {
                                            $('#dlNumber').attr('readonly',false);   
                                        }
                                        if(idType == 'voter')
                                        {
                                            $('#voterId').attr('readonly',false);   
                                        }
                                        if(idType == 'pan')
                                        {
                                            $('#panNumber').attr('readonly',false);   
                                        }
                                    })
                                }
                                else if(!parse.isDobCorrect && !parse.isGenderCorrect && parse.isAadharCorrect)
                                {
                                    Swal.fire({
                                        title: '<strong class="text-dark" style="font-size:20px;">Gender and date of birth is incorrect</strong>',
                                        icon: 'info',
                                        allowOutsideClick:false,
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:true
                                    }).then((result) => {
                                        $('#step2CheckPan').removeAttr('disabled');
                                        $('#idType').removeAttr('disabled');
                                        if(idType == 'aadhar')
                                        {
                                            $('#aadharNumber').attr('readonly',false);   
                                        }
                                        if(idType == 'dl')
                                        {
                                            $('#dlNumber').attr('readonly',false);   
                                        }
                                        if(idType == 'voter')
                                        {
                                            $('#voterId').attr('readonly',false);   
                                        }
                                        if(idType == 'pan')
                                        {
                                            $('#panNumber').attr('readonly',false);   
                                        }
                                    })
                                }
                                else if(!parse.isDobCorrect && !parse.isGenderCorrect && !parse.isAadharCorrect)
                                {
                                    Swal.fire({
                                        title: '<strong class="text-dark" style="font-size:20px;">'+textMessage+', Gender and date of birth is incorrect</strong>',
                                        icon: 'info',
                                        allowOutsideClick:false,
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:true
                                    }).then((result) => {
                                        $('#step2CheckPan').removeAttr('disabled');
                                        $('#idType').removeAttr('disabled');
                                        if(idType == 'aadhar')
                                        {
                                            $('#aadharNumber').attr('readonly',false);   
                                        }
                                        if(idType == 'dl')
                                        {
                                            $('#dlNumber').attr('readonly',false);   
                                        }
                                        if(idType == 'voter')
                                        {
                                            $('#voterId').attr('readonly',false);   
                                        }
                                        if(idType == 'pan')
                                        {
                                            $('#panNumber').attr('readonly',false);   
                                        }
                                    })
                                }
                                else if(!parse.isAadharCorrect)
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
                                        $('#step2CheckPan').removeAttr('disabled');
                                        $('#idType').removeAttr('disabled');
                                        if(idType == 'aadhar')
                                        {
                                            $('#aadharNumber').attr('readonly',false);   
                                        }
                                        if(idType == 'dl')
                                        {
                                            $('#dlNumber').attr('readonly',false);   
                                        }
                                        if(idType == 'voter')
                                        {
                                            $('#voterId').attr('readonly',false);   
                                        }
                                        if(idType == 'pan')
                                        {
                                            $('#panNumber').attr('readonly',false);   
                                        }
                                    })
                                }
                                else if(!parse.isDobCorrect)
                                {
                                    Swal.fire({
                                        title: '<strong class="text-dark" style="font-size:20px;">Date of Birth is incorrect</strong>',
                                        icon: 'info',
                                        allowOutsideClick:false,
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:true
                                    }).then((result) => {
                                        $('#step2CheckPan').removeAttr('disabled');
                                        $('#idType').removeAttr('disabled');
                                        if(idType == 'aadhar')
                                        {
                                            $('#aadharNumber').attr('readonly',false);   
                                        }
                                        if(idType == 'dl')
                                        {
                                            $('#dlNumber').attr('readonly',false);   
                                        }
                                        if(idType == 'voter')
                                        {
                                            $('#voterId').attr('readonly',false);   
                                        }
                                        if(idType == 'pan')
                                        {
                                            $('#panNumber').attr('readonly',false);   
                                        }
                                    })
                                }
                                else if(!parse.isGenderCorrect)
                                {
                                    Swal.fire({
                                        title: '<strong class="text-dark" style="font-size:20px;">Gender is incorrect</strong>',
                                        icon: 'info',
                                        allowOutsideClick:false,
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:true
                                    }).then((result) => {
                                        $('#step2CheckPan').removeAttr('disabled');
                                        $('#idType').removeAttr('disabled');
                                        if(idType == 'aadhar')
                                        {
                                            $('#aadharNumber').attr('readonly',false);   
                                        }
                                        if(idType == 'dl')
                                        {
                                            $('#dlNumber').attr('readonly',false);   
                                        }
                                        if(idType == 'voter')
                                        {
                                            $('#voterId').attr('readonly',false);   
                                        }
                                        if(idType == 'pan')
                                        {
                                            $('#panNumber').attr('readonly',false);   
                                        }
                                    })
                                }
                            }
                        }
                    }
                })
            }else{
                Swal.fire({
                    title: '<strong class="text-danger" style="font-size:20px;">Select DOB</strong>',
                    icon: 'error',
                    allowOutsideClick:false,
                    showCloseButton: true,
                    showCancelButton: false,
                    focusConfirm: false,
                    showConfirmButton:true
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#step2CheckPan').removeAttr('disabled');
                    }else if(result.isDismissed)
                    {
                        $('#step2CheckPan').removeAttr('disabled');
                    }
                })  
            }
        }
    })

    $('#step2CheckAadhar').click(function()
    {
        $('#step2CheckAadhar').attr('disabled','disabled');
        let data = new FormData();
        let idType = $('#idType').val();
        let label = '';
        let count = 0;
        data.append('idType',$('#idType').val());   
        if(idType == 'aadhar')
        {
            label = 'Aadhar Number';
            if($('#aadharNumber').val() != '')
            {
                count = 1;
                
                data.append('idNumber',$('#aadharNumber').val());   
            }
        }
        if(idType == 'voter')
        {
            label = 'Voter Id';
            if($('#voterId').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#voterId').val());
            }
        }
        if(idType == 'pan')
        {
            label = 'PAN Number';
            if($('#panNumber').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#panNumber').val());
            }
        }
        if(idType == 'dl')
        {
            label = 'Driving License Number';
            if($('#dlNumber').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#dlNumber').val());
            }
        }
        data.append('_token','<?php echo $csrf['hash']; ?>');
        data.append('checkInDate',$('#checkInDate').val());
        data.append('checkOutDate',$('#checkOutDate').val());
        data.append('roomNumber',$('#roomNo').val());
        data.append('bookingId',$('#bookingId').val());
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
                    $('#step2CheckAadhar').removeAttr('disabled');
                }else if(result.isDismissed)
                {
                    $('#step2CheckAadhar').removeAttr('disabled');
                }
            })
        }else{
            if($('#aadharDate').val() != '')
            {
                data.append('dob',$('#aadharDate').val());
                $.ajax({
                    url:'<?php echo base_url(); ?>hotel/checkEntryClone',
                    data:data,
                    processData:false,
                    cache:false,
                    contentType:false,
                    type:'post',
                    success:function(res)
                    {
                        let parse = JSON.parse(res);
                        let idType = $('#idType').val();
                        if(parse.status == 'success')
                        {
                            if(parse.type == 'non')
                            {
                                $('#aadharIdentity .input-group').css('width','100%');
                                $('#idType').attr('disabled','disabled');
                                $('#aadharNumber').attr('disabled','disabled');
                                $('#step2CheckAadhar').parent().addClass('d-none');
                                $('#step2CheckAadhar').removeAttr('disabled');
                                $('#personDiv').removeClass('d-none');
                                $('#personName').val(parse.personName);
                                $('#otpDiv').removeClass('d-none');
                                if(parse.isIdHolder)
                                {
                                    $('#mobileDiv').removeClass('d-none');
                                    $('#mobile').empty();
                                    $('#mobile').append('<option value="">Choose Mobile</option>');
                                    if(parse.isAlternate)
                                    {
                                        if(parse.isAlternate1 && !parse.isAlternate2)
                                        {
                                            $('#mobile').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                                            $('#mobile').append('<option value="'+parse.data.mobile2+'">'+parse.data.vismobile2+'</option>');
                                        }else if(!parse.isAlternate1 && parse.isAlternate2)
                                        {
                                            $('#mobile').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                                            $('#mobile').append('<option value="'+parse.data.mobile2+'">'+parse.data.vismobile2+'</option>');
                                        }
                                        else{
                                            $('#mobile').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                                            $('#mobile').append('<option value="'+parse.data.mobile2+'">'+parse.data.vismobile2+'</option>');
                                            $('#mobile').append('<option value="'+parse.data.mobile3+'">'+parse.data.vismobile3+'</option>');
                                        }   
                                    }else{
                                        $('#mobile').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                                    }   
                                }else{
                                    $('#nonHolderMobileDiv').removeClass('d-none');
                                    $('#nonHolderMobile').val('');
                                }   
                            }else{
                                $('#aadharIdentity .input-group').css('width','100%');
                                $('#idType').attr('disabled','disabled');
                                $('#aadharNumber').attr('disabled','disabled');
                                $('#step2CheckAadhar').parent().addClass('d-none');
                                $('#step2CheckAadhar').removeAttr('disabled');
                                $('#personDiv').removeClass('d-none');
                                $('#personName').prop('readonly',false);
                                $('#otpDiv').removeClass('d-none');
                                $('#nonHolderMobileDiv').removeClass('d-none');
                                $('#nonHolderMobile').val('');
                            }
                        }
                        else{
                            if(parse.status == 'error')
                            {
                                toastr.error(parse.message);
                                $('#step2CheckAadhar').removeAttr('disabled');
                                $('#otpdiv').addClass('d-none');
                                $('#aadharNumber').attr('readonly',false);
                                $('#mobileNumber').attr('readonly',false);
                             }else{
                                let textMessage = '';
                                if(idType == 'aadhar')
                                {
                                    textMessage = 'Aadhar Card';
                                }
                                if(idType == 'dl')
                                {
                                    textMessage = 'Driving License Number';
                                }
                                if(idType == 'voter')
                                {
                                    textMessage = 'Voter Id';
                                }
                                if(idType == 'pan')
                                {
                                    textMessage = 'Pan Number';
                                }
                                if(!parse.isDobCorrect && !parse.isAadharCorrect && parse.isGenderCorrect)
                                {
                                    Swal.fire({
                                        title: '<strong class="text-dark" style="font-size:20px;">No Data Found</strong>',
                                        icon: 'info',
                                        allowOutsideClick:false,
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:true
                                    }).then((result) => {
                                        $('#step2CheckAadhar').removeAttr('disabled');
                                        $('#idType').removeAttr('disabled');
                                        if(idType == 'aadhar')
                                        {
                                            $('#aadharNumber').attr('readonly',false);   
                                        }
                                        if(idType == 'dl')
                                        {
                                            $('#dlNumber').attr('readonly',false);   
                                        }
                                        if(idType == 'voter')
                                        {
                                            $('#voterId').attr('readonly',false);   
                                        }
                                        if(idType == 'pan')
                                        {
                                            $('#panNumber').attr('readonly',false);   
                                        }
                                    })
                                }
                                else if(!parse.isGenderCorrect && !parse.isAadharCorrect && parse.isDobCorrect)
                                {
                                    Swal.fire({
                                        title: '<strong class="text-dark" style="font-size:20px;">No Data Found</strong>',
                                        icon: 'info',
                                        allowOutsideClick:false,
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:true
                                    }).then((result) => {
                                        $('#step2CheckAadhar').removeAttr('disabled');
                                        $('#idType').removeAttr('disabled');
                                        if(idType == 'aadhar')
                                        {
                                            $('#aadharNumber').attr('readonly',false);   
                                        }
                                        if(idType == 'dl')
                                        {
                                            $('#dlNumber').attr('readonly',false);   
                                        }
                                        if(idType == 'voter')
                                        {
                                            $('#voterId').attr('readonly',false);   
                                        }
                                        if(idType == 'pan')
                                        {
                                            $('#panNumber').attr('readonly',false);   
                                        }
                                    })
                                }
                                else if(!parse.isDobCorrect && !parse.isGenderCorrect && parse.isAadharCorrect)
                                {
                                    Swal.fire({
                                        title: '<strong class="text-dark" style="font-size:20px;">No Data Found</strong>',
                                        icon: 'info',
                                        allowOutsideClick:false,
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:true
                                    }).then((result) => {
                                        $('#step2CheckAadhar').removeAttr('disabled');
                                        $('#idType').removeAttr('disabled');
                                        if(idType == 'aadhar')
                                        {
                                            $('#aadharNumber').attr('readonly',false);   
                                        }
                                        if(idType == 'dl')
                                        {
                                            $('#dlNumber').attr('readonly',false);   
                                        }
                                        if(idType == 'voter')
                                        {
                                            $('#voterId').attr('readonly',false);   
                                        }
                                        if(idType == 'pan')
                                        {
                                            $('#panNumber').attr('readonly',false);   
                                        }
                                    })
                                }
                                else if(!parse.isDobCorrect && !parse.isGenderCorrect && !parse.isAadharCorrect)
                                {
                                    Swal.fire({
                                        title: '<strong class="text-dark" style="font-size:20px;">No Data Found</strong>',
                                        icon: 'info',
                                        allowOutsideClick:false,
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:true
                                    }).then((result) => {
                                        $('#step2CheckAadhar').removeAttr('disabled');
                                        $('#idType').removeAttr('disabled');
                                        if(idType == 'aadhar')
                                        {
                                            $('#aadharNumber').attr('readonly',false);   
                                        }
                                        if(idType == 'dl')
                                        {
                                            $('#dlNumber').attr('readonly',false);   
                                        }
                                        if(idType == 'voter')
                                        {
                                            $('#voterId').attr('readonly',false);   
                                        }
                                        if(idType == 'pan')
                                        {
                                            $('#panNumber').attr('readonly',false);   
                                        }
                                    })
                                }
                                else if(!parse.isAadharCorrect)
                                {
                                    Swal.fire({
                                        title: '<strong class="text-dark" style="font-size:20px;">No Data Found</strong>',
                                        icon: 'info',
                                        allowOutsideClick:false,
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:true
                                    }).then((result) => {
                                        $('#step2CheckAadhar').removeAttr('disabled');
                                        $('#idType').removeAttr('disabled');
                                        if(idType == 'aadhar')
                                        {
                                            $('#aadharNumber').attr('readonly',false);   
                                        }
                                        if(idType == 'dl')
                                        {
                                            $('#dlNumber').attr('readonly',false);   
                                        }
                                        if(idType == 'voter')
                                        {
                                            $('#voterId').attr('readonly',false);   
                                        }
                                        if(idType == 'pan')
                                        {
                                            $('#panNumber').attr('readonly',false);   
                                        }
                                    })
                                }
                                else if(!parse.isDobCorrect)
                                {
                                    Swal.fire({
                                        title: '<strong class="text-dark" style="font-size:20px;">No Data Found</strong>',
                                        icon: 'info',
                                        allowOutsideClick:false,
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:true
                                    }).then((result) => {
                                        $('#step2CheckAadhar').removeAttr('disabled');
                                        $('#idType').removeAttr('disabled');
                                        if(idType == 'aadhar')
                                        {
                                            $('#aadharNumber').attr('readonly',false);   
                                        }
                                        if(idType == 'dl')
                                        {
                                            $('#dlNumber').attr('readonly',false);   
                                        }
                                        if(idType == 'voter')
                                        {
                                            $('#voterId').attr('readonly',false);   
                                        }
                                        if(idType == 'pan')
                                        {
                                            $('#panNumber').attr('readonly',false);   
                                        }
                                    })
                                }
                                else if(!parse.isGenderCorrect)
                                {
                                    Swal.fire({
                                        title: '<strong class="text-dark" style="font-size:20px;">No Data Found</strong>',
                                        icon: 'info',
                                        allowOutsideClick:false,
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:true
                                    }).then((result) => {
                                        $('#step2CheckAadhar').removeAttr('disabled');
                                        $('#idType').removeAttr('disabled');
                                        if(idType == 'aadhar')
                                        {
                                            $('#aadharNumber').attr('readonly',false);   
                                        }
                                        if(idType == 'dl')
                                        {
                                            $('#dlNumber').attr('readonly',false);   
                                        }
                                        if(idType == 'voter')
                                        {
                                            $('#voterId').attr('readonly',false);   
                                        }
                                        if(idType == 'pan')
                                        {
                                            $('#panNumber').attr('readonly',false);   
                                        }
                                    })
                                }
                            }
                        }
                    }
                })   
            }else{
                Swal.fire({
                    title: '<strong class="text-danger" style="font-size:20px;">Select DOB</strong>',
                    icon: 'error',
                    allowOutsideClick:false,
                    showCloseButton: true,
                    showCancelButton: false,
                    focusConfirm: false,
                    showConfirmButton:true
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#step2CheckAadhar').removeAttr('disabled');
                    }else if(result.isDismissed)
                    {
                        $('#step2CheckAadhar').removeAttr('disabled');
                    }
                })  
            }
        }
    })
    
    $('#step2CheckNonDl').click(function()
    {
        $('#step2CheckNonDl').attr('disabled','disabled');
        let data = new FormData();
        let idType = $('#nonIdType').val();
        let label = '';
        let count = 0;
        data.append('idType',$('#nonIdType').val());   
        if($('#nonDlNumber').val() != '')
        {
            data.append('idNumber',$('#nonDlNumber').val());
            if($('#nonDlDob').val() != '')
            {
                count = 1;
                data.append('dob',$('#nonDlDob').val());
            }else{
                label = 'Date of Birth';
            }
        }else{
            label = 'Driving License Number';
        }
        data.append('searchType','nonHolder');
        data.append('_token','<?php echo $csrf['hash']; ?>');
        data.append('checkInDate',$('#nonCheckInDate').val());
        data.append('checkOutDate',$('#nonCheckOutDate').val());
        data.append('roomNumber',$('#nonRoomNo').val());
        data.append('bookingId',$('#bookingId').val());
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
                    $('#step2CheckNonDl').removeAttr('disabled');
                }else if(result.isDismissed)
                {
                    $('#step2CheckNonDl').removeAttr('disabled');
                }
            })
        }else{
            $.ajax({
                url:'<?php echo base_url(); ?>hotel/checkNonEntry',
                data:data,
                processData:false,
                cache:false,
                contentType:false,
                type:'post',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    let idType = $('#nonIdType').val();
                    if(parse.status == 'success')
                    {
                        $('.identitydiv').removeClass('col-10').addClass('col-12');
                        $('#nonIdType').attr('disabled','disabled');
                        $('.nonDlDobDiv').addClass('d-none');
                        $('#nonDlNumber').attr('disabled','disabled');
                        $('#step2CheckNonDl').parent().addClass('d-none');
                        $('#step2CheckNonDl').removeAttr('disabled');
                        $('.nonPersonDiv').removeClass('d-none');
                        $('#nonPersonName').val(parse.personName);
                        if(parse.personName == '')
                        {
                            $('#nonPersonName').removeAttr('readonly');
                        }
                        $('#nonGender').val(parse.gender);
                        $('#nonState').val(parse.state).trigger('change');
                        $('#nonDistrict').val(parse.district).trigger('change');
                        $('#nonCity').val(parse.city).trigger('change');
                        $('#nonAge').val(parse.age);
                        $('#nonOtpDiv').removeClass('d-none');
                        $('#nonIdHolderMobileDiv').removeClass('d-none');
                        $('#nonIdHolderMobile').val('');
                    }
                    else{
                        if(parse.status == 'error')
                        {
                            toastr.error(parse.message);
                            $('.clearAadharDiv').addClass('d-none');
                            $('#step2CheckNonDl').removeAttr('disabled');
                            $('#nonOtpdiv').addClass('d-none');
                            $('#nonAadharNumber').attr('readonly',false);
                            $('#nonIdHolderMobile').attr('readonly',false);
                         }else{
                            let textMessage = '';
                            if(idType == 'aadhar')
                            {
                                textMessage = 'Aadhar Card';
                            }
                            if(idType == 'dl')
                            {
                                textMessage = 'Driving License Number';
                            }
                            if(idType == 'voter')
                            {
                                textMessage = 'Voter Id';
                            }
                            if(idType == 'pan')
                            {
                                textMessage = 'Pan Number';
                            }
                            if(!parse.isDobCorrect && !parse.isAadharCorrect && parse.isGenderCorrect)
                            {
                                Swal.fire({
                                    title: '<strong class="text-dark" style="font-size:20px;">'+textMessage+' and date of birth is incorrect</strong>',
                                    icon: 'info',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    $('#step2CheckNonDl').removeAttr('disabled');
                                    $('#nonIdType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#nonAadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#nonDlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#nonVoterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#nonPanNumber').attr('readonly',false);   
                                    }
                                })
                            }
                            else if(!parse.isGenderCorrect && !parse.isAadharCorrect && parse.isDobCorrect)
                            {
                                Swal.fire({
                                    title: '<strong class="text-dark" style="font-size:20px;">'+textMessage+' and Gender is incorrect</strong>',
                                    icon: 'info',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    $('#step2CheckNonDl').removeAttr('disabled');
                                    $('#nonIdType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#nonAadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#nonDlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#nonVoterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#nonPanNumber').attr('readonly',false);   
                                    }
                                })
                            }
                            else if(!parse.isDobCorrect && !parse.isGenderCorrect && parse.isAadharCorrect)
                            {
                                Swal.fire({
                                    title: '<strong class="text-dark" style="font-size:20px;">Gender and date of birth is incorrect</strong>',
                                    icon: 'info',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    $('#step2CheckNonDl').removeAttr('disabled');
                                    $('#nonIdType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#nonAadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#nonDlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#nonVoterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#nonPanNumber').attr('readonly',false);   
                                    }
                                })
                            }
                            else if(!parse.isDobCorrect && !parse.isGenderCorrect && !parse.isAadharCorrect)
                            {
                                Swal.fire({
                                    title: '<strong class="text-dark" style="font-size:20px;">'+textMessage+', Gender and date of birth is incorrect</strong>',
                                    icon: 'info',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    $('#step2CheckNonDl').removeAttr('disabled');
                                    $('#nonIdType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#nonAadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#nonDlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#nonVoterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#nonPanNumber').attr('readonly',false);   
                                    }
                                })
                            }
                            else if(!parse.isAadharCorrect)
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
                                    $('#step2CheckNonDl').removeAttr('disabled');
                                    $('#nonIdType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#nonAadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#nonDlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#nonVoterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#nonPanNumber').attr('readonly',false);   
                                    }
                                })
                            }
                            else if(!parse.isDobCorrect)
                            {
                                Swal.fire({
                                    title: '<strong class="text-dark" style="font-size:20px;">Date of Birth is incorrect</strong>',
                                    icon: 'info',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    $('#step2CheckNonDl').removeAttr('disabled');
                                    $('#nonIdType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#nonAadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#nonDlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#nonVoterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#nonPanNumber').attr('readonly',false);   
                                    }
                                })
                            }
                            else if(!parse.isGenderCorrect)
                            {
                                Swal.fire({
                                    title: '<strong class="text-dark" style="font-size:20px;">Gender is incorrect</strong>',
                                    icon: 'info',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    $('#step2CheckNonDl').removeAttr('disabled');
                                    $('#nonIdType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#nonAadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#nonDlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#nonVoterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#nonPanNumber').attr('readonly',false);   
                                    }
                                })
                            }
                        }
                    }
                }
            })
        }
    })
    
    $('#step2CheckNonVoter').click(function()
    {
        $('#step2CheckNonVoter').attr('disabled','disabled');
        let data = new FormData();
        let idType = $('#nonIdType').val();
        let label = '';
        let count = 0;
        data.append('idType',$('#nonIdType').val());   
        if(idType == 'aadhar')
        {
            label = 'Aadhar Number';
            if($('#nonAadharNumber').val() != '')
            {
                count = 1;
                
                data.append('idNumber',$('#nonAadharNumber').val());   
            }
        }
        if(idType == 'voter')
        {
            label = 'Voter Id';
            if($('#nonVoterId').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#nonVoterId').val());
            }
        }
        if(idType == 'pan')
        {
            label = 'PAN Number';
            if($('#nonPanNumber').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#nonPanNumber').val());
            }
        }
        if(idType == 'dl')
        {
            label = 'Driving License Number';
            if($('#nonDlNumber').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#nonDlNumber').val());
            }
        }
        data.append('_token','<?php echo $csrf['hash']; ?>');
        data.append('checkInDate',$('#nonCheckInDate').val());
        data.append('checkOutDate',$('#nonCheckOutDate').val());
        data.append('roomNumber',$('#nonRoomNo').val());
        data.append('bookingId',$('#bookingId').val());
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
                    $('#step2CheckNonVoter').removeAttr('disabled');
                }else if(result.isDismissed)
                {
                    $('#step2CheckNonVoter').removeAttr('disabled');
                }
            })
        }else{
            $.ajax({
                url:'<?php echo base_url(); ?>hotel/checkNonEntry',
                data:data,
                processData:false,
                cache:false,
                contentType:false,
                type:'post',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    let idType = $('#nonIdType').val();
                    if(parse.status == 'success')
                    {
                        $('.identitydiv').removeClass('col-10').addClass('col-12');
                        $('#nonIdType').attr('disabled','disabled');
                        $('#nonVoterId').attr('disabled','disabled');
                        $('#step2CheckNonVoter').parent().addClass('d-none');
                        $('#step2CheckNonVoter').removeAttr('disabled');
                        $('.nonPersonDiv').removeClass('d-none');
                        $('#nonPersonName').val(parse.personName);
                        if(parse.personName == '')
                        {
                            $('#nonPersonName').removeAttr('readonly');
                        }
                        $('#nonGender').val(parse.gender);
                        $('#nonState').val(parse.state).trigger('change');
                        $('#nonDistrict').val(parse.district).trigger('change');
                        $('#nonCity').val(parse.city).trigger('change');
                        $('#nonAge').val(parse.age);
                        $('#nonOtpDiv').removeClass('d-none');
                        $('#nonIdHolderMobileDiv').removeClass('d-none');
                        $('#nonIdHolderMobile').val('');
                    }
                    else{
                        if(parse.status == 'error')
                        {
                            toastr.error(parse.message);
                            $('.clearAadharDiv').addClass('d-none');
                            $('#step2CheckNonVoter').removeAttr('disabled');
                            $('#nonOtpdiv').addClass('d-none');
                            $('#nonAadharNumber').attr('readonly',false);
                            $('#nonIdHolderMobile').attr('readonly',false);
                         }else{
                            let textMessage = '';
                            if(idType == 'aadhar')
                            {
                                textMessage = 'Aadhar Card';
                            }
                            if(idType == 'dl')
                            {
                                textMessage = 'Driving License Number';
                            }
                            if(idType == 'voter')
                            {
                                textMessage = 'Voter Id';
                            }
                            if(idType == 'pan')
                            {
                                textMessage = 'Pan Number';
                            }
                            if(!parse.isDobCorrect && !parse.isAadharCorrect && parse.isGenderCorrect)
                            {
                                Swal.fire({
                                    title: '<strong class="text-dark" style="font-size:20px;">'+textMessage+' and date of birth is incorrect</strong>',
                                    icon: 'info',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    $('#step2CheckNonVoter').removeAttr('disabled');
                                    $('#nonIdType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#nonAadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#nonDlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#nonVoterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#nonPanNumber').attr('readonly',false);   
                                    }
                                })
                            }
                            else if(!parse.isGenderCorrect && !parse.isAadharCorrect && parse.isDobCorrect)
                            {
                                Swal.fire({
                                    title: '<strong class="text-dark" style="font-size:20px;">'+textMessage+' and Gender is incorrect</strong>',
                                    icon: 'info',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    $('#step2CheckNonVoter').removeAttr('disabled');
                                    $('#nonIdType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#nonAadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#nonDlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#nonVoterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#nonPanNumber').attr('readonly',false);   
                                    }
                                })
                            }
                            else if(!parse.isDobCorrect && !parse.isGenderCorrect && parse.isAadharCorrect)
                            {
                                Swal.fire({
                                    title: '<strong class="text-dark" style="font-size:20px;">Gender and date of birth is incorrect</strong>',
                                    icon: 'info',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    $('#step2CheckNonVoter').removeAttr('disabled');
                                    $('#nonIdType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#nonAadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#nonDlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#nonVoterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#nonPanNumber').attr('readonly',false);   
                                    }
                                })
                            }
                            else if(!parse.isDobCorrect && !parse.isGenderCorrect && !parse.isAadharCorrect)
                            {
                                Swal.fire({
                                    title: '<strong class="text-dark" style="font-size:20px;">'+textMessage+', Gender and date of birth is incorrect</strong>',
                                    icon: 'info',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    $('#step2CheckNonVoter').removeAttr('disabled');
                                    $('#nonIdType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#nonAadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#nonDlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#nonVoterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#nonPanNumber').attr('readonly',false);   
                                    }
                                })
                            }
                            else if(!parse.isAadharCorrect)
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
                                    $('#step2CheckNonVoter').removeAttr('disabled');
                                    $('#nonIdType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#nonAadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#nonDlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#nonVoterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#nonPanNumber').attr('readonly',false);   
                                    }
                                })
                            }
                            else if(!parse.isDobCorrect)
                            {
                                Swal.fire({
                                    title: '<strong class="text-dark" style="font-size:20px;">Date of Birth is incorrect</strong>',
                                    icon: 'info',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    $('#step2CheckNonVoter').removeAttr('disabled');
                                    $('#nonIdType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#nonAadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#nonDlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#nonVoterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#nonPanNumber').attr('readonly',false);   
                                    }
                                })
                            }
                            else if(!parse.isGenderCorrect)
                            {
                                Swal.fire({
                                    title: '<strong class="text-dark" style="font-size:20px;">Gender is incorrect</strong>',
                                    icon: 'info',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    $('#step2CheckNonVoter').removeAttr('disabled');
                                    $('#nonIdType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#nonAadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#nonDlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#nonVoterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#nonPanNumber').attr('readonly',false);   
                                    }
                                })
                            }
                        }
                    }
                }
            })
        }
    })
    
    $('#step2CheckNonAadhar').click(function()
    {
        $('#step2CheckNonAadhar').attr('disabled','disabled');
        let data = new FormData();
        let idType = $('#nonIdType').val();
        let label = '';
        let count = 0;
        data.append('idType',$('#nonIdType').val());   
        if(idType == 'aadhar')
        {
            label = 'Aadhar Number';
            if($('#nonAadharNumber').val() != '')
            {
                count = 1;
                
                data.append('idNumber',$('#nonAadharNumber').val());   
            }
        }
        if(idType == 'voter')
        {
            label = 'Voter Id';
            if($('#nonVoterId').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#nonVoterId').val());
            }
        }
        if(idType == 'pan')
        {
            label = 'PAN Number';
            if($('#nonPanNumber').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#nonPanNumber').val());
            }
        }
        if(idType == 'dl')
        {
            label = 'Driving License Number';
            if($('#nonDlNumber').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#nonDlNumber').val());
            }
        }
        data.append('_token','<?php echo $csrf['hash']; ?>');
        data.append('checkInDate',$('#nonCheckInDate').val());
        data.append('checkOutDate',$('#nonCheckOutDate').val());
        data.append('roomNumber',$('#nonRoomNo').val());
        data.append('bookingId',$('#bookingId').val());
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
                    $('#step2CheckNonAadhar').removeAttr('disabled');
                }else if(result.isDismissed)
                {
                    $('#step2CheckNonAadhar').removeAttr('disabled');
                }
            })
        }else{
            $.ajax({
                url:'<?php echo base_url(); ?>hotel/checkNonEntry',
                data:data,
                processData:false,
                cache:false,
                contentType:false,
                type:'post',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    let idType = $('#nonIdType').val();
                    if(parse.status == 'success')
                    {
                        $('.identitydiv').removeClass('col-10').addClass('col-12');
                        $('#nonIdType').attr('disabled','disabled');
                        $('#nonAadharNumber').attr('disabled','disabled');
                        $('#step2CheckNonAadhar').parent().addClass('d-none');
                        $('#step2CheckNonAadhar').removeAttr('disabled');
                        $('.nonPersonDiv').removeClass('d-none');
                        $('#nonPersonName').val(parse.personName);
                        if(parse.personName == '')
                        {
                            $('#nonPersonName').removeAttr('readonly');
                        }
                        $('#nonGender').val(parse.gender);
                        $('#nonState').val(parse.state).trigger('change');
                        $('#nonDistrict').val(parse.district).trigger('change');
                        $('#nonCity').val(parse.city).trigger('change');
                        $('#nonAge').val(parse.age);
                        $('#nonOtpDiv').removeClass('d-none');
                        $('#nonIdHolderMobileDiv').removeClass('d-none');
                        $('#nonIdHolderMobile').val('');
                    }
                    else{
                        if(parse.status == 'error')
                        {
                            toastr.error(parse.message);
                            $('.clearAadharDiv').addClass('d-none');
                            $('#step2CheckNonAadhar').removeAttr('disabled');
                            $('#nonOtpdiv').addClass('d-none');
                            $('#nonAadharNumber').attr('readonly',false);
                            $('#nonIdHolderMobile').attr('readonly',false);
                         }else{
                            let textMessage = '';
                            if(idType == 'aadhar')
                            {
                                textMessage = 'Aadhar Card';
                            }
                            if(idType == 'dl')
                            {
                                textMessage = 'Driving License Number';
                            }
                            if(idType == 'voter')
                            {
                                textMessage = 'Voter Id';
                            }
                            if(idType == 'pan')
                            {
                                textMessage = 'Pan Number';
                            }
                            if(!parse.isDobCorrect && !parse.isAadharCorrect && parse.isGenderCorrect)
                            {
                                Swal.fire({
                                    title: '<strong class="text-dark" style="font-size:20px;">'+textMessage+' and date of birth is incorrect</strong>',
                                    icon: 'info',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    $('#step2CheckNonAadhar').removeAttr('disabled');
                                    $('#nonIdType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#nonAadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#nonDlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#nonVoterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#nonPanNumber').attr('readonly',false);   
                                    }
                                })
                            }
                            else if(!parse.isGenderCorrect && !parse.isAadharCorrect && parse.isDobCorrect)
                            {
                                Swal.fire({
                                    title: '<strong class="text-dark" style="font-size:20px;">'+textMessage+' and Gender is incorrect</strong>',
                                    icon: 'info',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    $('#step2CheckNonAadhar').removeAttr('disabled');
                                    $('#nonIdType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#nonAadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#nonDlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#nonVoterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#nonPanNumber').attr('readonly',false);   
                                    }
                                })
                            }
                            else if(!parse.isDobCorrect && !parse.isGenderCorrect && parse.isAadharCorrect)
                            {
                                Swal.fire({
                                    title: '<strong class="text-dark" style="font-size:20px;">Gender and date of birth is incorrect</strong>',
                                    icon: 'info',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    $('#step2CheckNonAadhar').removeAttr('disabled');
                                    $('#nonIdType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#nonAadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#nonDlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#nonVoterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#nonPanNumber').attr('readonly',false);   
                                    }
                                })
                            }
                            else if(!parse.isDobCorrect && !parse.isGenderCorrect && !parse.isAadharCorrect)
                            {
                                Swal.fire({
                                    title: '<strong class="text-dark" style="font-size:20px;">'+textMessage+', Gender and date of birth is incorrect</strong>',
                                    icon: 'info',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    $('#step2CheckNonAadhar').removeAttr('disabled');
                                    $('#nonIdType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#nonAadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#nonDlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#nonVoterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#nonPanNumber').attr('readonly',false);   
                                    }
                                })
                            }
                            else if(!parse.isAadharCorrect)
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
                                    $('#step2CheckNonAadhar').removeAttr('disabled');
                                    $('#nonIdType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#nonAadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#nonDlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#nonVoterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#nonPanNumber').attr('readonly',false);   
                                    }
                                })
                            }
                            else if(!parse.isDobCorrect)
                            {
                                Swal.fire({
                                    title: '<strong class="text-dark" style="font-size:20px;">Date of Birth is incorrect</strong>',
                                    icon: 'info',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    $('#step2CheckNonAadhar').removeAttr('disabled');
                                    $('#nonIdType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#nonAadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#nonDlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#nonVoterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#nonPanNumber').attr('readonly',false);   
                                    }
                                })
                            }
                            else if(!parse.isGenderCorrect)
                            {
                                Swal.fire({
                                    title: '<strong class="text-dark" style="font-size:20px;">Gender is incorrect</strong>',
                                    icon: 'info',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    $('#step2CheckNonAadhar').removeAttr('disabled');
                                    $('#nonIdType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#nonAadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#nonDlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#nonVoterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#nonPanNumber').attr('readonly',false);   
                                    }
                                })
                            }
                        }
                    }
                }
            })
        }
    })
    
    $('#step2CheckNonPan').click(function()
    {
        $('#step2CheckNonPan').attr('disabled','disabled');
        let data = new FormData();
        let idType = $('#nonIdType').val();
        let label = '';
        let count = 0;
        data.append('idType',$('#nonIdType').val());   
        if(idType == 'aadhar')
        {
            label = 'Aadhar Number';
            if($('#nonAadharNumber').val() != '')
            {
                count = 1;
                
                data.append('idNumber',$('#nonAadharNumber').val());   
            }
        }
        if(idType == 'voter')
        {
            label = 'Voter Id';
            if($('#nonVoterId').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#nonVoterId').val());
            }
        }
        if(idType == 'pan')
        {
            label = 'PAN Number';
            if($('#nonPanNumber').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#nonPanNumber').val());
            }
        }
        if(idType == 'dl')
        {
            label = 'Driving License Number';
            if($('#nonDlNumber').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#nonDlNumber').val());
            }
        }
        data.append('_token','<?php echo $csrf['hash']; ?>');
        data.append('checkInDate',$('#nonCheckInDate').val());
        data.append('checkOutDate',$('#nonCheckOutDate').val());
        data.append('roomNumber',$('#nonRoomNo').val());
        data.append('bookingId',$('#bookingId').val());
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
                    $('#step2CheckNonPan').removeAttr('disabled');
                }else if(result.isDismissed)
                {
                    $('#step2CheckNonPan').removeAttr('disabled');
                }
            })
        }else{
            $.ajax({
                url:'<?php echo base_url(); ?>hotel/checkNonEntry',
                data:data,
                processData:false,
                cache:false,
                contentType:false,
                type:'post',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    let idType = $('#nonIdType').val();
                    if(parse.status == 'success')
                    {
                        $('.identitydiv').removeClass('col-10').addClass('col-12');
                        $('#nonIdType').attr('disabled','disabled');
                        $('#nonPanNumber').attr('disabled','disabled');
                        $('#step2CheckNonPan').parent().addClass('d-none');
                        $('#step2CheckNonPan').removeAttr('disabled');
                        $('.nonPersonDiv').removeClass('d-none');
                        $('#nonPersonName').val(parse.personName);
                        if(parse.personName == '')
                        {
                            $('#nonPersonName').removeAttr('readonly');
                        }
                        $('#nonGender').val(parse.gender);
                        $('#nonState').val(parse.state).trigger('change');
                        $('#nonDistrict').val(parse.district).trigger('change');
                        $('#nonCity').val(parse.city).trigger('change');
                        $('#nonAge').val(parse.age);
                        $('#nonOtpDiv').removeClass('d-none');
                        $('#nonIdHolderMobileDiv').removeClass('d-none');
                        $('#nonIdHolderMobile').val('');
                    }
                    else{
                        if(parse.status == 'error')
                        {
                            toastr.error(parse.message);
                            $('.clearAadharDiv').addClass('d-none');
                            $('#step2CheckNonPan').removeAttr('disabled');
                            $('#nonOtpdiv').addClass('d-none');
                            $('#nonAadharNumber').attr('readonly',false);
                            $('#nonIdHolderMobile').attr('readonly',false);
                         }else{
                            let textMessage = '';
                            if(idType == 'aadhar')
                            {
                                textMessage = 'Aadhar Card';
                            }
                            if(idType == 'dl')
                            {
                                textMessage = 'Driving License Number';
                            }
                            if(idType == 'voter')
                            {
                                textMessage = 'Voter Id';
                            }
                            if(idType == 'pan')
                            {
                                textMessage = 'Pan Number';
                            }
                            if(!parse.isDobCorrect && !parse.isAadharCorrect && parse.isGenderCorrect)
                            {
                                Swal.fire({
                                    title: '<strong class="text-dark" style="font-size:20px;">'+textMessage+' and date of birth is incorrect</strong>',
                                    icon: 'info',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    $('#step2CheckNonPan').removeAttr('disabled');
                                    $('#nonIdType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#nonAadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#nonDlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#nonVoterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#nonPanNumber').attr('readonly',false);   
                                    }
                                })
                            }
                            else if(!parse.isGenderCorrect && !parse.isAadharCorrect && parse.isDobCorrect)
                            {
                                Swal.fire({
                                    title: '<strong class="text-dark" style="font-size:20px;">'+textMessage+' and Gender is incorrect</strong>',
                                    icon: 'info',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    $('#step2CheckNonPan').removeAttr('disabled');
                                    $('#nonIdType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#nonAadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#nonDlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#nonVoterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#nonPanNumber').attr('readonly',false);   
                                    }
                                })
                            }
                            else if(!parse.isDobCorrect && !parse.isGenderCorrect && parse.isAadharCorrect)
                            {
                                Swal.fire({
                                    title: '<strong class="text-dark" style="font-size:20px;">Gender and date of birth is incorrect</strong>',
                                    icon: 'info',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    $('#step2CheckNonPan').removeAttr('disabled');
                                    $('#nonIdType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#nonAadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#nonDlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#nonVoterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#nonPanNumber').attr('readonly',false);   
                                    }
                                })
                            }
                            else if(!parse.isDobCorrect && !parse.isGenderCorrect && !parse.isAadharCorrect)
                            {
                                Swal.fire({
                                    title: '<strong class="text-dark" style="font-size:20px;">'+textMessage+', Gender and date of birth is incorrect</strong>',
                                    icon: 'info',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    $('#step2CheckNonPan').removeAttr('disabled');
                                    $('#nonIdType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#nonAadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#nonDlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#nonVoterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#nonPanNumber').attr('readonly',false);   
                                    }
                                })
                            }
                            else if(!parse.isAadharCorrect)
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
                                    $('#step2CheckNonPan').removeAttr('disabled');
                                    $('#nonIdType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#nonAadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#nonDlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#nonVoterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#nonPanNumber').attr('readonly',false);   
                                    }
                                })
                            }
                            else if(!parse.isDobCorrect)
                            {
                                Swal.fire({
                                    title: '<strong class="text-dark" style="font-size:20px;">Date of Birth is incorrect</strong>',
                                    icon: 'info',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    $('#step2CheckNonPan').removeAttr('disabled');
                                    $('#nonIdType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#nonAadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#nonDlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#nonVoterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#nonPanNumber').attr('readonly',false);   
                                    }
                                })
                            }
                            else if(!parse.isGenderCorrect)
                            {
                                Swal.fire({
                                    title: '<strong class="text-dark" style="font-size:20px;">Gender is incorrect</strong>',
                                    icon: 'info',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    $('#step2CheckNonPan').removeAttr('disabled');
                                    $('#nonIdType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#nonAadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#nonDlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#nonVoterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#nonPanNumber').attr('readonly',false);   
                                    }
                                })
                            }
                        }
                    }
                }
            })
        }
    })
    
    function redirectToStep2(Id)
    {
        window.open('<?php echo base_url(); ?>hotel/persondetail/'+Id,'_blank');
    }
    
    function viewMember(type,index,ele,Id)
    {
        $(ele).attr('disabled','disabled');
        $.ajax({
            url:'<?php echo base_url(); ?>hotel/getGuestDetails/'+Id,
            success:function(res)
            {
                $(ele).prop('disabled',false);
                let parse = JSON.parse(res);
                let html = '';
                let typeLabel = '';
                if(parse.isMissing == 1)
                {
                    typeLabel += '<b> Missing /</b>';
                }
                if(parse.isLapata == 1)
                {
                    typeLabel += '<b> लापता /</b>'
                }
                typeLabel = (typeLabel.slice(0,typeLabel.length - 5)) + '</b>';
                if(parse.isLapata != 1)
                {
                    if(parse.isVisible == '1')
                    {
                        if(parse.isWanted == 1 || parse.isCriminal == 1)
                        {
                            if(parse.isRegistered == 0 && parse.isMissing == 1)
                            {
                                 let html = '';
                                 if(parse.isVerified == 1)
                                 {
                                     html = '<div class="form-group my-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>landing/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Wanted Record :- <a href="<?php echo base_url(); ?>landing/wantedRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+Id+')"> Click Here</button></div>';
                                 }else{
                                     html = '<div class="form-group my-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>landing/criminalRecord" class="text-success" target="_blank" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Wanted Record :- <a href="<?php echo base_url(); ?>landing/wantedRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+Id+')"> Click Here</button></div>';
                                 }
                                 Swal.fire({
                                    allowOutsideClick:false,
                                    html: html,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:false
                                })
                             }else if(parse.isRegistered == 1 && parse.isMissing == 0)
                             {
                                 Swal.fire({
                                    allowOutsideClick:false,
                                    html:
                                        '<div class="form-group my-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>landing/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Wanted Record :- <a href="<?php echo base_url(); ?>landing/wantedRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+Id+')"> Click Here</button></div>',
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:false
                                })
                             }else if(parse.isRegistered == 1 && parse.isMissing == 1)
                             {
                                Swal.fire({
                                    allowOutsideClick:false,
                                    html:
                                        '<div class="form-group my-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>landing/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Wanted Record :- <a href="<?php echo base_url(); ?>landing/wantedRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+Id+')"> Click Here</button></div>',
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:false
                                })
                             }else{
                                 let html = '';
                                 if(parse.image != '')
                                 {
                                     html += '<div class="form-group mt-3 mb-0"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>';
                                 }
                                 html += '<div class="form-group mt-3 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>landing/criminalRecord" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Wanted Record :- <a href="<?php echo base_url(); ?>landing/wantedRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                 if(parse.personName != '')
                                 {
                                     html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div>';
                                 }
                                 html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div>';
                                 if(parse.gender != '')
                                 {
                                     html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div>';
                                 }
                                 if(parse.age != '')
                                 {
                                     html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div>';
                                 }
                                 if(parse.address != '')
                                 {
                                     html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div>';
                                 }
                                 Swal.fire({
                                    allowOutsideClick:false,
                                    html: html,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:false,
                                })
                             }
                        }else{
                            if(parse.isRegistered == 0 && parse.isMissing == 1)
                            {
                                 let html = '';
                                 let typediv = '';
                                 if(typeLabel != '</b>')
                                 {
                                     typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                 }
                                 if(parse.isVerified == 1)
                                 {
                                     html = '<div class="form-group my-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+Id+')"> Click Here</button></div>';
                                 }else{
                                     html = '<div class="form-group my-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+Id+')"> Click Here</button></div>';
                                 }
                                 Swal.fire({
                                    allowOutsideClick:false,
                                    html: html,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:false
                                })
                             }else if(parse.isRegistered == 1 && parse.isMissing == 0)
                             {
                                 let typediv = '';
                                 if(typeLabel != '</b>')
                                 {
                                     typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                 }
                                 Swal.fire({
                                    allowOutsideClick:false,
                                    html:
                                        '<div class="form-group my-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+Id+')"> Click Here</button></div>',
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:false
                                })
                             }else if(parse.isRegistered == 1 && parse.isMissing == 1)
                             {
                                 let typediv = '';
                                 if(typeLabel != '</b>')
                                 {
                                     typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                 }
                                Swal.fire({
                                    allowOutsideClick:false,
                                    html:
                                        '<div class="form-group my-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+Id+')"> Click Here</button></div>',
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:false
                                })  
                             }      
                        }
                    }else{
                        if(parse.isWanted == 1 || parse.isCriminal == 1)
                        {
                            if(parse.isRegistered == 0 && parse.isMissing == 1)
                            {
                                 let html = '';
                                 if(parse.isVerified == 1)
                                 {
                                     html = '<div class="form-group my-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>landing/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Wanted Record :- <a href="<?php echo base_url(); ?>landing/wantedRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                 }else{
                                     html = '<div class="form-group my-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>landing/criminalRecord" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Wanted Record :- <a href="<?php echo base_url(); ?>landing/wantedRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                 }
                                 Swal.fire({
                                    allowOutsideClick:false,
                                    html: html,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:false,
                                })
                             }else if(parse.isRegistered == 1 && parse.isMissing == 0)
                             {
                                 let html = '';
                                 if(parse.isVerified == 1)
                                 {
                                     html = '<div class="form-group my-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>landing/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Wanted Record :- <a href="<?php echo base_url(); ?>landing/wantedRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                 }else{
                                     html = '<div class="form-group my-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>landing/criminalRecord" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Wanted Record :- <a href="<?php echo base_url(); ?>landing/wantedRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
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
                                        Swal.fire({
                                            allowOutsideClick:false,
                                            icon : 'info',
                                            html: "<div class='form-group mb-0'><h5>To get person's more details, you have to click person's face photo</h5></div>",
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:true,
                                            'confirmButtonText':'Open Camera',
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                showCameraModal();      
                                                $('#step2CheckAadhar').removeAttr('disabled');
                                            }
                                        })   
                                    }
                                })
                             }else if(parse.isRegistered == 1 && parse.isMissing == 1)
                             {
                                Swal.fire({
                                    allowOutsideClick:false,
                                    html:
                                        '<div class="form-group my-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>landing/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Wanted Record :- <a href="<?php echo base_url(); ?>landing/wantedRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>',
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:false
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        Swal.fire({
                                            allowOutsideClick:false,
                                            icon : 'info',
                                            html: "<div class='form-group mb-0'><h5>To get person's more details, you have to click person's face photo</h5></div>",
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:true,
                                            'confirmButtonText':'Open Camera',
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                showCameraModal();      
                                                $('#step2CheckAadhar').removeAttr('disabled');
                                            }
                                        })   
                                    }
                                })   
                             }else{
                                 let html = '';
                                 if(parse.image != '')
                                 {
                                     html += '<div class="form-group mt-3 mb-0"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>';
                                 }
                                 html += '<div class="form-group mt-3 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>landing/criminalRecord" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Wanted Record :- <a href="<?php echo base_url(); ?>landing/wantedRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                 if(parse.personName != '')
                                 {
                                     html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div>';
                                 }
                                 html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div>';
                                 if(parse.gender != '')
                                 {
                                     html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div>';
                                 }
                                 if(parse.age != '')
                                 {
                                     html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div>';
                                 }
                                 if(parse.address != '')
                                 {
                                     html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div>';
                                 }
                                 Swal.fire({
                                    allowOutsideClick:false,
                                    html: html,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:false,
                                })
                             }   
                        }else{
                            if(parse.isRegistered == 0 && parse.isMissing == 1)
                            {
                                 let html = '';
                                 let typediv = '';
                                 if(typeLabel != '</b>')
                                 {
                                     typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                 }
                                 if(parse.isVerified == 1)
                                 {
                                     html = '<div class="form-group my-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+((typeLabel == '') ? 'd-none' : '')+'"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                 }else{
                                     html = '<div class="form-group my-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                 }
                                 Swal.fire({
                                    allowOutsideClick:false,
                                    html: html,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:false,
                                })
                             }else if(parse.isRegistered == 1 && parse.isMissing == 0)
                             {
                                 let html = '';
                                 let typediv = '';
                                 if(typeLabel != '</b>')
                                 {
                                     typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                 }
                                 if(parse.isVerified == 1)
                                 {
                                     html = '<div class="form-group my-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                 }else{
                                     html = '<div class="form-group my-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
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
                                        Swal.fire({
                                            allowOutsideClick:false,
                                            icon : 'info',
                                            html: "<div class='form-group mb-0'><h5>To get person's more details, you have to click person's face photo</h5></div>",
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:true,
                                            'confirmButtonText':'Open Camera',
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                showCameraModal();      
                                                $('#step2CheckAadhar').removeAttr('disabled');
                                            }
                                        })   
                                    }
                                })
                             }else if(parse.isRegistered == 1 && parse.isMissing == 1)
                             {
                                 let typediv = '';
                                 if(typeLabel != '</b>')
                                 {
                                     typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                 }
                                Swal.fire({
                                    allowOutsideClick:false,
                                    html:
                                        '<div class="form-group my-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>',
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:false
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        Swal.fire({
                                            allowOutsideClick:false,
                                            icon : 'info',
                                            html: "<div class='form-group mb-0'><h5>To get person's more details, you have to click person's face photo</h5></div>",
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:true,
                                            'confirmButtonText':'Open Camera',
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                showCameraModal();      
                                                $('#step2CheckAadhar').removeAttr('disabled');
                                            }
                                        })   
                                    }
                                })   
                             }   
                        }
                    }
                }else{
                    if(parse.isWanted == 1 || parse.isCriminal == 1)
                    {
                        if(parse.isRegistered == 0 && parse.isMissing == 1)
                        {
                             let html = '';
                             if(parse.isVerified == 1)
                             {
                                 html = '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>hotel/criminalRecord/'+Id+'" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+Id+')"> Click Here</button></div>';
                             }else{
                                 html = '<div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>hotel/criminalRecord/'+Id+'" class="text-success" target="_blank" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+Id+')"> Click Here</button></div>';
                             }
                             Swal.fire({
                                allowOutsideClick:false,
                                html: html,
                                showCloseButton: true,
                                showCancelButton: false,
                                focusConfirm: false,
                                showConfirmButton:false
                            })
                         }else if(parse.isRegistered == 1 && parse.isMissing == 0)
                         {
                             Swal.fire({
                                allowOutsideClick:false,
                                html:
                                    '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>hotel/criminalRecord/'+Id+'" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+Id+')"> Click Here</button></div>',
                                showCloseButton: true,
                                showCancelButton: false,
                                focusConfirm: false,
                                showConfirmButton:false
                            })
                         }else if(parse.isRegistered == 1 && parse.isMissing == 1)
                         {
                            Swal.fire({
                                allowOutsideClick:false,
                                html:
                                    '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>hotel/criminalRecord/'+Id+'" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+Id+')"> Click Here</button></div>',
                                showCloseButton: true,
                                showCancelButton: false,
                                focusConfirm: false,
                                showConfirmButton:false
                            })   
                         }else{
                             let html = '';
                             if(parse.image != '')
                             {
                                 html += '<div class="form-group mt-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>';
                             }
                             html += '<div class="form-group mt-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>hotel/criminalRecord/'+Id+'" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                             if(parse.personName != '')
                             {
                                 html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div>';
                             }
                             html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div>';
                             if(parse.gender != '')
                             {
                                 html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div>';
                             }
                             if(parse.age != '')
                             {
                                 html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div>';
                             }
                             if(parse.address != '')
                             {
                                 html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div>';
                             }
                             Swal.fire({
                                allowOutsideClick:false,
                                html: html,
                                showCloseButton: true,
                                showCancelButton: false,
                                focusConfirm: false,
                                showConfirmButton:false,
                            })
                         }
                    }else{
                        if(parse.isRegistered == 0 && parse.isMissing == 1)
                        {
                             let html = '';
                             let typediv = '';
                             if(typeLabel != '</b>')
                             {
                                 typediv = '<div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                             }
                             if(parse.isVerified == 1)
                             {
                                 html = '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2 '+(parse.address != ',' ? '':'d-none')+'"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+Id+')"> Click Here</button></div>';
                             }else{
                                 html = '<div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2 '+(parse.address != ',' ? '':'d-none')+'"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+Id+')"> Click Here</button></div>';
                             }
                             Swal.fire({
                                allowOutsideClick:false,
                                html: html,
                                showCloseButton: true,
                                showCancelButton: false,
                                focusConfirm: false,
                                showConfirmButton:false
                            })
                         }else if(parse.isRegistered == 1 && parse.isMissing == 0)
                         {
                             let typediv = '';
                             if(typeLabel != '</b>')
                             {
                                 typediv = '<div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                             }
                             Swal.fire({
                                allowOutsideClick:false,
                                html:
                                    '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2 '+(parse.address != ',' ? '':'d-none')+'"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+Id+')"> Click Here</button></div>',
                                showCloseButton: true,
                                showCancelButton: false,
                                focusConfirm: false,
                                showConfirmButton:false
                            })
                         }else if(parse.isRegistered == 1 && parse.isMissing == 1)
                         {
                             let typediv = '';
                             if(typeLabel != '</b>')
                             {
                                 typediv = '<div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                             }
                            Swal.fire({
                                allowOutsideClick:false,
                                html:
                                    '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2 '+(parse.address != ',' ? '':'d-none')+'"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+Id+')"> Click Here</button></div>',
                                showCloseButton: true,
                                showCancelButton: false,
                                focusConfirm: false,
                                showConfirmButton:false
                            })   
                         }      
                    }
                    $(ele).removeAttr('disabled');
                }
            }
        })
    }
    
    function removeMember(type,index,ele,Id)
    {
        if(type == 'adult')
        {   
            Swal.fire({
                title: '<strong class="text-danger" style="font-size:20px;">Hotel Entry</strong>',
                icon: 'error',
                allowOutsideClick:false,
                html:
                    '<div class="form-group mt-3"><label class="form-label">Are you sure you want to delete hotel Entry?</label></div>',
                showCloseButton: true,
                confirmButtonText:'Yes',
                cancelButtonText:'No',
                showCancelButton: true,
                focusConfirm: false,
                showConfirmButton:true
            }).then((result) => {
                if (result.isConfirmed) {
                    $(ele).attr('disabled','disabled');
                    $.ajax({
                        url:'<?php echo base_url(); ?>hotel/removeGuestMember/'+Id,
                        success:function(res)
                        {
                            Swal.fire({
                                title: '<strong class="text-dark" style="font-size:20px;">Guest Entry Deleted Sucessfully</strong>',
                                icon: 'success',
                                allowOutsideClick:false,
                                showCloseButton: true,
                                showCancelButton: false,
                                focusConfirm: false,
                                showConfirmButton:true
                            }).then((result) => {
                                $(ele).removeAttr('disabled');
                                $('#adultBody tr').eq(index - 1).remove();
                            })
                        }
                    })   
                }
            })
        }else{
            Swal.fire({
                title: '<strong class="text-danger" style="font-size:20px;">Hotel Entry</strong>',
                icon: 'error',
                allowOutsideClick:false,
                html:
                    '<div class="form-group mt-3"><label class="form-label">Are you sure you want to delete hotel Entry?</label></div>',
                showCloseButton: true,
                confirmButtonText:'Yes',
                cancelButtonText:'No',
                showCancelButton: true,
                focusConfirm: false,
                showConfirmButton:true
            }).then((result) => {
                if (result.isConfirmed) {
                    $(ele).attr('disabled','disabled');
                    $.ajax({
                        url:'<?php echo base_url(); ?>hotel/removeGuestChild/'+Id,
                        success:function(res)
                        {
                            Swal.fire({
                                title: '<strong class="text-dark" style="font-size:20px;">Child Entry Deleted Sucessfully</strong>',
                                icon: 'success',
                                allowOutsideClick:false,
                                showCloseButton: true,
                                showCancelButton: false,
                                focusConfirm: false,
                                showConfirmButton:true
                            }).then((result) => {
                                $(ele).removeAttr('disabled');
                                $('#adultBody tr').eq(index - 1).remove();
                            })
                        }
                    })
                }
            })
        }
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
    
    function showNonOtpAccordingly(val)
    {
        if(val.length == 10)
        {
            $('#nonOtpDiv button').removeClass('disabled');
            $('#nonOtpDiv button').removeClass('btn-style-grey').addClass('btn-style-green');
        }else{
            $('#nonOtpDiv button').addClass('disabled');
            $('#nonOtpDiv button').addClass('btn-style-grey').removeClass('btn-style-green');
        }
    }
    
    function showOtpAccordingly(val)
    {
        if(val.length == 10)
        {
            $('#otpDiv button').removeClass('disabled');
            $('#otpDiv button').removeClass('btn-style-grey').addClass('btn-style-green');
        }else{
            $('#otpDiv button').addClass('disabled');
            $('#otpDiv button').addClass('btn-style-grey').removeClass('btn-style-green');
        }
    }
    
    function resendOtp(ele)
    {
        $(ele).attr('disabled','disabled');
        let data= new FormData();
        if($('#mobile').val() != '')
        {
            data.append('mobile',$('#mobile').val());   
        }else{
            data.append('mobile',$('#nonHolderMobile').val());   
        }
        data.append('personName',$('#personName').val());
        data.append('_token','<?php echo $csrf['hash']; ?>');
        $.ajax({
            url:'<?php echo base_url(); ?>hotel/sendEntryOtp',
            data:data,
            processData:false,
            cache:false,
            contentType:false,
            type:'post',
            success:function(res)
            {
                 let parse = JSON.parse(res);
                 if(parse.status == 'success')
                 {
                     toastr.success(parse.message);
                     $(ele).removeAttr('disabled');
                 }else{
                     toastr.error(parse.message);
                     $(ele).removeAttr('disabled');
                 }
            }
        })
    }
    
    let camera_button = document.querySelector("#start-camera");
    let video = document.querySelector("#video");
    let click_button = document.querySelector("#click-photo");
    let canvas = document.querySelector("#canvas");
    let stream = null;
    click_button.addEventListener('click', function() {
       	canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
       	let image_data_url = canvas.toDataURL('image/jpeg');
       	$('#videodiv').addClass('d-none');
       	$('#canvasdiv').removeClass('d-none');
        $('#mainPhotoSelected').val(image_data_url);
        $('#clickdiv').addClass('d-none');
        $('#retake').removeClass('d-none');
    });
    
    $('#retake button').click(function(){
        $('#videodiv').removeClass('d-none');
        $('#canvasdiv').addClass('d-none');
        $('#mainPhotoSelected').val();
        $('#clickdiv').removeClass('d-none');
        $('#retake').addClass('d-none');
    })
    
    async function openFrontCamera(Id='')
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
    	$('#cameraModal').prop('data-id',Id);
        $('#cameraModal').modal('show');
        swal.close();
    }
    
    async function openBackCamera(Id='')
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
    	$('#cameraModal').prop('data-id',Id);
        $('#cameraModal').modal('show');
        swal.close();
    }
    
    function openCamera(Id='')
    {
        $('#fileMobInput').click();   
        $('#filMobInput').prop('data-id',Id);
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
    
    function openFaceCameraPopup(Id)
    {
        Swal.fire({
            allowOutsideClick:false,
            icon : 'info',
            html: "<div class='form-group mb-0'><h5>To get person's more details, you have to click person's face photo</h5></div><div class='row mx-0 d-md-none d-block'><div class='col-lg-6 col-sm-12 col-md-6 mt-3'><button type='button' class='btn btn-style-green btn-primary' onclick='openCamera('+Id+')'>Open Camera <i class='fa fa-camera fa-spin'></i></button></div></div><div class='row mx-0 d-none d-md-flex'><div class='col-lg-6 col-sm-12 col-md-6 mt-3'><button type='button' class='btn btn-style-green btn-primary' onclick='openFrontCamera('+Id+')'>Open Front Camera <i class='fa fa-camera fa-spin'></i></button></div><div class='col-lg-6 col-sm-12 col-md-6 mt-3'><button type='button' class='btn btn-style-green btn-primary' onclick='openBackCamera('+Id+')'>Open Back Camera <i class='fa fa-camera fa-spin'></i></button></div></div>",
            showCloseButton: true,
            showCancelButton: false,
            focusConfirm: false,
            showConfirmButton:false,
        }).then((result) => {
            if(result.isDismissed)
            {
                $('#step2CheckAadhar').removeAttr('disabled');
                $('#step2CheckDl').removeAttr('disabled');
                $('#step2CheckVoter').removeAttr('disabled');
                $('#step2CheckPan').removeAttr('disabled');
            }
        })
    }
    
    function openCameraPopup()
    {
        Swal.fire({
            allowOutsideClick:false,
            icon : 'info',
            html: "<div class='form-group mb-3'><h5>Click person's face photo</h5></div><div class='row mx-0 d-md-none d-block'><div class='col-lg-6 col-sm-12 col-md-6 mt-3'><button type='button' class='btn btn-style-green btn-primary' onclick='openCamera()'>Open Camera <i class='fa fa-camera fa-spin'></i></button></div></div><div class='row mx-0 d-none d-md-flex'><div class='col-lg-6 col-sm-12 col-md-6 mt-3 px-0'><button type='button' class='btn btn-style-green btn-primary' onclick='openFrontCamera()'>Open Front Camera <i class='fa fa-camera fa-spin'></i></button></div><div class='col-lg-6 col-sm-12 col-md-6 mt-3 px-0'><button type='button' class='btn btn-style-green btn-primary' onclick='openBackCamera()'>Open Back Camera <i class='fa fa-camera fa-spin'></i></button></div></div>",
            showCloseButton: true,
            cancelButtonText: "Skip",   
            showCancelButton: true,
            focusConfirm: false,
            showConfirmButton:false,
        }).then(() => {
            Swal.fire({
                title: '<strong class="text-dark" style="font-size:20px;">Guest Entry Uploaded Sucessfully</strong>',
                icon: 'success',
                allowOutsideClick:false,
                showCloseButton: true,
                showCancelButton: false,
                focusConfirm: false,
                showConfirmButton:true
            }).then(() => {
                nonResetAll($('#nonReset'));
                $('#btnInactiveSave').removeAttr('disabled');
                $('#cameraModal').modal('hide');
                stream.getTracks().forEach(function(track) {
                  track.stop();
                });  
            })
        }) 
    }
    
    function resendNonOtp(ele)
    {
        $(ele).attr('disabled','disabled');
        let data= new FormData();
        data.append('mobile',$('#nonIdHolderMobile').val());   
        data.append('personName',$('#nonPersonName').val());
        data.append('_token','<?php echo $csrf['hash']; ?>');
        $.ajax({
            url:'<?php echo base_url(); ?>hotel/sendEntryOtp',
            data:data,
            processData:false,
            cache:false,
            contentType:false,
            type:'post',
            success:function(res)
            {
                 let parse = JSON.parse(res);
                 if(parse.status == 'success')
                 {
                     toastr.success(parse.message);
                     $(ele).removeAttr('disabled');
                 }else{
                     toastr.error(parse.message);
                     $(ele).removeAttr('disabled');
                 }
            }
        })
    }
    
    function verifyNonOtp(ele)
    {
        let otp= $('#otptext').val();
        if(otp == '')
        {
            toastr.error('Please Enter OTP');
        }else{
            let data= new FormData();
            data.append('otp', otp);
            data.append('mobile',$('#nonIdHolderMobile').val());   
            data.append('personName',$('#nonPersonName').val());
            data.append('gender',$('#nonGender').val());
            data.append('dob',$('#nonDob').val());
            data.append('age',$('#nonAge').val());
            data.append('state',$('#nonState').val());
            data.append('district',$('#nonDistrict').val());
            data.append('city',$('#nonCity').val());
            data.append('_token','<?php echo $csrf['hash']; ?>');
            $(ele).attr('disabled','disabled');
            $.ajax({
                url:'<?php echo base_url(); ?>hotel/saveNonEntryGuest',
                data:data,
                processData:false,
                cache:false,
                contentType:false,
                type:'post',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    if(parse.status == 'success')
                    {
                        $(ele).removeAttr('disabled');
                        $('#btnNonAadharClear').click();
                        $('#btnNonPanClear').click();
                        $('#btnNonVoterClear').click();
                        $('#btnNonDlClear').click();
                        $('#step2CheckNonAadhar').removeAttr('disabled');
                        $('#step2CheckNonPan').removeAttr('disabled');
                        $('#step2CheckNonVoter').removeAttr('disabled');
                        $('#step2CheckNonDl').removeAttr('disabled');
                        let length = ($('#adultBody tr').length + 1);
                        $('#adultBody').append('<tr class="'+(parse.isMissing ? 'bg-danger text-light' : '')+'"><td><button type="button" class="'+(parse.isMissing ? '' : 'd-none ')+'mb-3 mb-md-0 me-0 me-md-3  btn btn-primary disabled-on-loading" style="background:white!important;color:#0d6efd!important;" onclick="viewMember(`adult`,'+length+',this,'+parse.id+')"> <i class="fa fa-eye"></i></button></td><td>'+length+'</td><td class="text-capitalize">'+parse.idType+'</td><td>'+parse.idNumber+'</td><td>Adult</td><td><b>'+parse.personName+'</b></td><td>'+parse.gender+'</td><td>'+parse.age+'</td><td>'+parse.room+'</td></tr>');
                        openCameraPopup();         
                    }else{
                        toastr.error(parse.message);
                        $(ele).removeAttr('disabled');
                    }
                }
            })
        }
    }
    
    function verifyOtp(ele)
    {
        let otp= $('#otptext').val();
        if(otp == '')
        {
            toastr.error('Please Enter OTP');
        }else{
            let data= new FormData();
            data.append('otp', otp);
            if($('#mobile').val() != '')
            {
                data.append('mobile',$('#mobile').val());   
            }else{
                data.append('mobile',$('#nonHolderMobile').val());   
            }
            data.append('_token','<?php echo $csrf['hash']; ?>');
            $(ele).attr('disabled','disabled');
            $.ajax({
                url:'<?php echo base_url(); ?>hotel/saveGuest',
                data:data,
                processData:false,
                cache:false,
                contentType:false,
                type:'post',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    if(parse.status == 'success')
                    {
                        Swal.fire({
                            title: '<strong class="text-dark" style="font-size:20px;">Guest Entry Uploaded Sucessfully</strong>',
                            icon: 'success',
                            allowOutsideClick:false,
                            showCloseButton: true,
                            showCancelButton: false,
                            focusConfirm: false,
                            showConfirmButton:true
                        }).then((result) => {
                            $(ele).removeAttr('disabled');
                            $('#btnAadharClear').click();
                            $('#btnPanClear').click();
                            $('#btnVoterClear').click();
                            $('#btnDlClear').click();
                            $('#step2CheckAadhar').removeAttr('disabled');
                            $('#step2CheckPan').removeAttr('disabled');
                            $('#step2CheckVoter').removeAttr('disabled');
                            $('#step2CheckDl').removeAttr('disabled');
                            let length = ($('#adultBody tr').length + 1);
                            if(parse.isAvailable)
                            {
                                $('#adultBody').append('<tr><td><button type="button" class="'+(parse.isMissing ? '' : '')+'mb-3 mb-md-0 me-0 me-md-3  btn '+(parse.isMissing ? 'btn-danger' : 'btn-primary')+' disabled-on-loading" style="'+(parse.isMissing ? 'background:white!important;color:red!important;':'background:white!important;color:#0d6efd!important;')+'" onclick="viewMember(`adult`,'+length+',this,'+parse.id+')"> <i class="fa fa-eye"></i></button></td><td>'+length+'</td><td class="text-capitalize">'+parse.idType+'</td><td>'+parse.idNumber+'</td><td>Adult</td><td class="'+(parse.isMissing ? 'text-danger' : 'text-dark')+'"><b>'+parse.personName+'</b></td><td>'+parse.gender+'</td><td>'+parse.age+'</td><td>'+parse.room+'</td></tr>');   
                            }else{
                                $('#adultBody').append('<tr><td>-</td><td>'+length+'</td><td class="text-capitalize">'+parse.idType+'</td><td>'+parse.idNumber+'</td><td>Adult</td><td class="'+(parse.isMissing ? 'text-danger' : 'text-dark')+'"><b>'+parse.personName+'</b></td><td>'+parse.gender+'</td><td>'+parse.age+'</td><td>'+parse.room+'</td></tr>');
                            }
                        })   
                    }else{
                        toastr.error(parse.message);
                        $(ele).removeAttr('disabled');
                    }
                }
            })
        }
    }
    
    function sendNonOtp(ele)
    {
        $(ele).attr('disabled','disabled');
        let data= [];
        if($('#nonIdHolderMobile').val() != '')
        {
            data.push('mobile');
        }
        if($('#nonPersonName').val() != '')
        {
            data.push('personName');
        }
        if($('#nonGender').val() != '')
        {
            data.push('gender');
        }
        if($('#nonDob').val() != '')
        {
            data.push('dob');
        }
        if($('#nonAge').val() != '')
        {
            data.push('age');
        }
        if($('#nonState').val() != '')
        {
            data.push('state');
        }
        if($('#nonDistrict').val() != '')
        {
            data.push('district');
        }
        if($('#nonCity').val() != '')
        {
            data.push('city');
        }
        if(data.length == 8)
        {
            let formdata= new FormData();
            formdata.append('mobile',$('#nonIdHolderMobile').val());   
            formdata.append('personName',$('#nonPersonName').val());
            formdata.append('_token','<?php echo $csrf['hash']; ?>');
            $.ajax({
                url:'<?php echo base_url(); ?>hotel/sendEntryOtp',
                data:formdata,
                processData:false,
                cache:false,
                contentType:false,
                type:'post',
                success:function(res)
                {
                     let parse = JSON.parse(res);
                     if(parse.status == 'success')
                     {
                        Swal.fire({
                            icon: 'success',
                            allowOutsideClick:false,
                            html:
                                '<div class="form-group mb-3"><input type="number" placeholder="Enter OTP" class="form-control" id="otptext"></div><div class="form-group"><button type="button" id="btnOtp" onclick="verifyNonOtp(this)" class="w-100 btn btn-primary btn-style-green disabled-on-loading"> Verify OTP</button></div><div class="form-group mt-3 col-lg-auto col-md-6 col-sm-12" style="margin-left:auto;text-align:end;"><button type="button" class="btn btn-primary btn-style-five disabled-on-loading" onclick="resendNonOtp(this)"> Resend OTP</button></div>',
                            showCloseButton: true,
                            showCancelButton: false,
                            focusConfirm: false,
                            showConfirmButton:false
                            }).then((result) => {
                                if(result.isDismissed){
                                    $(ele).removeAttr('disabled','disabled');
                                }
                            })
                     }else{
                        toastr.error(parse.message);
                        $(ele).removeAttr('disabled');
                    }  
                }
            });         
        }else{
            Swal.fire({
                title: '<strong class="text-dark" style="font-size:20px;">Please enter all the details</strong>',
                icon: 'error',
                allowOutsideClick:false,
                showCloseButton: true,
                showCancelButton: false,
                focusConfirm: false,
                showConfirmButton:true
            }).then((result) => {
                $(ele).removeAttr('disabled','disabled');
            })
        }
    }
    
    function sendOtp(ele)
    {
        $(ele).attr('disabled','disabled');
        let data= new FormData();
        if($('#mobile').val() != '')
        {
            data.append('mobile',$('#mobile').val());   
        }else{
            data.append('mobile',$('#nonHolderMobile').val());   
        }
        data.append('personName',$('#personName').val());
        data.append('_token','<?php echo $csrf['hash']; ?>');
        $.ajax({
            url:'<?php echo base_url(); ?>hotel/sendEntryOtp',
            data:data,
            processData:false,
            cache:false,
            contentType:false,
            type:'post',
            success:function(res)
            {
                 let parse = JSON.parse(res);
                 if(parse.status == 'success')
                 {
                    Swal.fire({
                        icon: 'success',
                        allowOutsideClick:false,
                        html:
                            '<div class="form-group mb-3"><input type="number" placeholder="Enter OTP" class="form-control" id="otptext"></div><div class="form-group"><button type="button" id="btnOtp" onclick="verifyOtp(this)" class="w-100 btn btn-primary btn-style-green disabled-on-loading"> Verify OTP</button></div><div class="form-group mt-3 col-lg-auto col-md-6 col-sm-12" style="margin-left:auto;text-align:end;"><button type="button" class="btn btn-primary btn-style-five disabled-on-loading" onclick="resendOtp(this)"> Resend OTP</button></div>',
                        showCloseButton: true,
                        showCancelButton: false,
                        focusConfirm: false,
                        showConfirmButton:false
                        }).then((result) => {
                            if(result.isDismissed){
                                $(ele).removeAttr('disabled','disabled');
                            }
                    })
                 }else{
                    toastr.error(parse.message);
                    $(ele).removeAttr('disabled');
                }  
            }
        });   
    }
    
    function nonResetAll(ele)
    {
        $(ele).attr('disabled','disabled');
        clearAll();
        $('#step2CheckNonAadhar').removeAttr('disabled');
        $('#step2CheckNonPan').removeAttr('disabled');
        $('#step2CheckNonVoter').removeAttr('disabled');
        $('#step2CheckNonDl').removeAttr('disabled');
        $(ele).removeAttr('disabled');
    }

    function resetAll(ele)
    {
        $(ele).attr('disabled','disabled');
        $('#btnAadharClear').click();
        $('#btnPanClear').click();
        $('#btnVoterClear').click();
        $('#btnDlClear').click();
        $(ele).removeAttr('disabled');
    }
    
    function showNonSearchAccordingly(val,type)
    {
        if(type == 'aadhar')
        {
            if(val.length == 12)
            {
                $('#step2CheckNonAadhar').removeClass('disabled');
                $('#step2CheckNonAadhar').removeClass('btn-style-grey').addClass('btn-style-green');
            }else{
                $('#step2CheckNonAadhar').addClass('disabled');
                $('#step2CheckNonAadhar').addClass('btn-style-grey').removeClass('btn-style-green');
            }
        }else if(type == 'pan')
        {
            if(val.length == 10)
            {
                $('#step2CheckNonPan').removeClass('disabled');
                $('#step2CheckNonPan').removeClass('btn-style-grey').addClass('btn-style-green');
            }else{
                $('#step2CheckNonPan').addClass('disabled');
                $('#step2CheckNonPan').addClass('btn-style-grey').removeClass('btn-style-green');
            }
        }else if(type == 'voter'){
            if(val.length >= 1)
            {
                $('#step2CheckNonVoter').removeClass('disabled');
                $('#step2CheckNonVoter').removeClass('btn-style-grey').addClass('btn-style-green');
            }else{
                $('#step2CheckNonVoter').addClass('disabled');
                $('#step2CheckNonVoter').addClass('btn-style-grey').removeClass('btn-style-green');
            }
        }else{
            if(val.length == 15)
            {
                $('#step2CheckNonDl').removeClass('disabled');
                $('#step2CheckNonDl').removeClass('btn-style-grey').addClass('btn-style-green');
            }else{
                $('#step2CheckNonDl').addClass('disabled');
                $('#step2CheckNonDl').addClass('btn-style-grey').removeClass('btn-style-green');
            }   
        }
    }
    
    function showSearchAccordingly(val,type)
    {
        if(type == 'aadhar')
        {
            if(val.length == 12)
            {
                $('#step2CheckAadhar').removeClass('disabled');
                $('#step2CheckAadhar').removeClass('btn-style-grey').addClass('btn-style-green');
            }else{
                $('#step2CheckAadhar').addClass('disabled');
                $('#step2CheckAadhar').addClass('btn-style-grey').removeClass('btn-style-green');
            }
        }else if(type == 'pan')
        {
            if(val.length == 10)
            {
                $('#step2CheckPan').removeClass('disabled');
                $('#step2CheckPan').removeClass('btn-style-grey').addClass('btn-style-green');
            }else{
                $('#step2CheckPan').addClass('disabled');
                $('#step2CheckPan').addClass('btn-style-grey').removeClass('btn-style-green');
            }
        }else if(type == 'voter'){
            if(val.length >= 1)
            {
                $('#step2CheckVoter').removeClass('disabled');
                $('#step2CheckVoter').removeClass('btn-style-grey').addClass('btn-style-green');
            }else{
                $('#step2CheckVoter').addClass('disabled');
                $('#step2CheckVoter').addClass('btn-style-grey').removeClass('btn-style-green');
            }
        }else{
            if(val.length == 15)
            {
                $('#step2CheckDl').removeClass('disabled');
                $('#step2CheckDl').removeClass('btn-style-grey').addClass('btn-style-green');
            }else{
                $('#step2CheckDl').addClass('disabled');
                $('#step2CheckDl').addClass('btn-style-grey').removeClass('btn-style-green');
            }   
        }
    }
    
    function showNonInputAccordingly(val)
    {
        if(val == '')
        {
            $('#nonAadharIdentity').addClass('d-none');
            $('#nonPanNumber').removeAttr('name');
            $('#nonVoterId').removeAttr('name');
            $('#nonDlNumber').removeAttr('name');
            $('#nonAadharNumber').removeAttr('name');
            
            $('#nonAadharNumber').attr('required',false);
            $('#nonVoterIdentity').addClass('d-none');
            $('#nonVoterId').attr('required',false);
            $('#nonPanIdentity').addClass('d-none');
            $('#nonPanNumber').attr('required',false);
            $('#nonDlIdentity').addClass('d-none');
            $('#nonDlNumber').attr('required',false);
        }
        if(val == 'aadhar')
        {
            $('#nonAadharIdentity').removeClass('d-none');
            $('#nonPanNumber').removeAttr('name');
            $('#nonVoterId').removeAttr('name');
            $('#nonDlNumber').removeAttr('name');
            $('#nonAadharNumber').attr('name','nonAadhar_id');
            $('#nonAadharNumber').attr('required',true);
            $('#nonVoterIdentity').addClass('d-none');
            $('#nonVoterId').attr('required',false);
            $('#nonPanIdentity').addClass('d-none');
            $('#nonPanNumber').attr('required',false);
            $('#nonDlIdentity').addClass('d-none');
            $('#nonDlNumber').attr('required',false);
        }
        if(val == 'voter')
        {
            $('#nonAadharIdentity').addClass('d-none');
            
            $('#nonPanNumber').removeAttr('name');
            $('#nonVoterId').attr('name','nonVoterId');
            $('#nonDlNumber').removeAttr('name');
            $('#nonAadharNumber').removeAttr('name');
            
            $('#nonAadharNumber').attr('required',false);
            $('#nonVoterIdentity').removeClass('d-none');
            $('#nonVoterId').attr('required',true);
            $('#nonPanIdentity').addClass('d-none');
            $('#nonPanNumber').attr('required',false);
            $('#nonDlIdentity').addClass('d-none');
            $('#nonDlNumber').attr('required',false);
        }
        if(val == 'pan')
        {
            $('#nonPanNumber').attr('name','nonPanNumber');
            $('#nonVoterId').removeAttr('name');
            $('#nonDlNumber').removeAttr('name');
            $('#nonAadharNumber').removeAttr('name');
            
            $('#nonAadharIdentity').addClass('d-none');
            $('#nonAadharNumber').attr('required',true);
            $('#nonVoterIdentity').addClass('d-none');
            $('#nonVoterId').attr('required',false);
            $('#nonPanIdentity').removeClass('d-none');
            $('#nonPanNumber').attr('required',true);
            $('#nonDlIdentity').addClass('d-none');
            $('#nonDlNumber').attr('required',false);
        }
        if(val == 'dl')
        {
            $('#nonPanNumber').removeAttr('name');
            $('#nonVoterId').removeAttr('name');
            $('#nonDlNumber').attr('name','nonDlNumber');
            $('#nonAadharNumber').removeAttr('name');
            
            $('#nonAadharIdentity').addClass('d-none');
            $('#nonAadharNumber').attr('required',true);
            $('#nonVoterIdentity').addClass('d-none');
            $('#nonVoterId').attr('required',false);
            $('#nonPanIdentity').addClass('d-none');
            $('#nonPanNumber').attr('required',false);
            $('#nonDlIdentity').removeClass('d-none');
            $('#nonDlNumber').attr('required',true);
        }
    }
    
    function showInputAccordingly(val)
    {
        if(val == '')
        {
            $('#aadharIdentity').addClass('d-none');
            
            $('#panNumber').removeAttr('name');
            $('#voterId').removeAttr('name');
            $('#dlNumber').removeAttr('name');
            $('#aadharNumber').removeAttr('name');
            
            $('#aadharNumber').attr('required',false);
            $('#voterIdentity').addClass('d-none');
            $('#voterId').attr('required',false);
            $('#panIdentity').addClass('d-none');
            $('#panNumber').attr('required',false);
            $('#dlIdentity').addClass('d-none');
            $('#dlNumber').attr('required',false);
        }
        if(val == 'aadhar')
        {
            $('#aadharIdentity').removeClass('d-none');
            
            $('#panNumber').removeAttr('name');
            $('#voterId').removeAttr('name');
            $('#dlNumber').removeAttr('name');
            $('#aadharNumber').attr('name','aadhar_id');
            
            $('#aadharNumber').attr('required',true);
            $('#voterIdentity').addClass('d-none');
            $('#voterId').attr('required',false);
            $('#panIdentity').addClass('d-none');
            $('#panNumber').attr('required',false);
            $('#dlIdentity').addClass('d-none');
            $('#dlNumber').attr('required',false);
        }
        if(val == 'voter')
        {
            $('#aadharIdentity').addClass('d-none');
            
            $('#panNumber').removeAttr('name');
            $('#voterId').attr('name','voterId');
            $('#dlNumber').removeAttr('name');
            $('#aadharNumber').removeAttr('name');
            
            $('#aadharNumber').attr('required',false);
            $('#voterIdentity').removeClass('d-none');
            $('#voterId').attr('required',true);
            $('#panIdentity').addClass('d-none');
            $('#panNumber').attr('required',false);
            $('#dlIdentity').addClass('d-none');
            $('#dlNumber').attr('required',false);
        }
        if(val == 'pan')
        {
            $('#panNumber').attr('name','panNumber');
            $('#voterId').removeAttr('name');
            $('#dlNumber').removeAttr('name');
            $('#aadharNumber').removeAttr('name');
            
            $('#aadharIdentity').addClass('d-none');
            $('#aadharNumber').attr('required',true);
            $('#voterIdentity').addClass('d-none');
            $('#voterId').attr('required',false);
            $('#panIdentity').removeClass('d-none');
            $('#panNumber').attr('required',true);
            $('#dlIdentity').addClass('d-none');
            $('#dlNumber').attr('required',false);
        }
        if(val == 'dl')
        {
            $('#panNumber').removeAttr('name');
            $('#voterId').removeAttr('name');
            $('#dlNumber').attr('name','dlNumber');
            $('#aadharNumber').removeAttr('name');
            
            $('#aadharIdentity').addClass('d-none');
            $('#aadharNumber').attr('required',true);
            $('#voterIdentity').addClass('d-none');
            $('#voterId').attr('required',false);
            $('#panIdentity').addClass('d-none');
            $('#panNumber').attr('required',false);
            $('#dlIdentity').removeClass('d-none');
            $('#dlNumber').attr('required',true);
        }
    }
    
    $('#btnAadharClear').click(function()
    {
        $('#aadharIdentity .input-group').css('width','100%');
        $('#addPersonDiv').slideUp('fast');
        $('#idType').val('');
        $('#aadharNumber').removeAttr('disabled');
        $('#dlNumber').removeAttr('disabled');
        $('#panNumber').removeAttr('disabled');
        $('#voterId').removeAttr('disabled');
        $('#idType').removeAttr('disabled');
        $('#personName').val('');
        $('#step2CheckAadhar').parent().removeClass('d-none');
        $('#step2CheckDl').parent().removeClass('d-none');
        $('#step2CheckVoter').parent().removeClass('d-none');
        $('#step2CheckPan').parent().removeClass('d-none');
        $('#personDiv').addClass('d-none');
        $('#mobileDiv').addClass('d-none');
        $('#nonHolderMobileDiv').addClass('d-none');
        $('#otpDiv').addClass('d-none');
        $('#otpDiv button').addClass('disabled').removeClass('btn-style-five').addClass('btn-style-grey');
        $('#otpDiv button').removeAttr('disabled');
        $('#aadharNumber').val('');
        $('#dlNumber').val('');
        $('#panNumber').val('');
        $('#voterId').val('');
        $('#step2CheckAadhar').removeAttr('disabled');
        $('#step2CheckDl').removeAttr('disabled');
        $('#step2CheckVoter').removeAttr('disabled');
        $('#step2CheckPan').removeAttr('disabled');
        $('#aadharNumber').attr('readonly',false);
        $('#dlNumber').attr('readonly',false);
        $('#panNumber').attr('readonly',false);
        $('#voterId').attr('readonly',false);
        $('#idTypeDiv').removeClass('d-none');
        $('#genderdiv').addClass('d-none');
        $('#aadharIdentity').addClass('d-none');
        $('#panNumber').removeAttr('name');
        $('#voterId').removeAttr('name');
        $('#dlNumber').removeAttr('name');
        $('#aadharNumber').removeAttr('name');
        
        $('#aadharNumber').attr('required',false);
        $('#voterIdentity').addClass('d-none');
        $('#voterId').attr('required',false);
        $('#panIdentity').addClass('d-none');
        $('#panNumber').attr('required',false);
        $('#dlIdentity').addClass('d-none');
        $('#dlNumber').attr('required',false);
    })
    
    $('#btnDlClear').click(function()
    {
        $('#dlIdentity .input-group').css('width','100%');
        $('#addPersonDiv').slideUp('fast');
        $('#idType').val('');
        $('#idType').removeAttr('disabled');
        $('#personName').val('');
        $('#personDiv').addClass('d-none');
        $('#mobileDiv').addClass('d-none');
        $('#nonHolderMobileDiv').addClass('d-none');
        $('#otpDiv').addClass('d-none');
        $('#otpDiv button').addClass('disabled').removeClass('btn-style-five').addClass('btn-style-grey');
        $('#otpDiv button').removeAttr('disabled');
        $('#aadharNumber').removeAttr('disabled');
        $('#dlNumber').removeAttr('disabled');
        $('#panNumber').removeAttr('disabled');
        $('#voterId').removeAttr('disabled');
        $('#aadharNumber').val('');
        $('#dlNumber').val('');
        $('#panNumber').val('');
        $('#voterId').val('');
        $('#step2CheckAadhar').removeAttr('disabled');
        $('#step2CheckDl').removeAttr('disabled');
        $('#step2CheckVoter').removeAttr('disabled');
        $('#step2CheckPan').removeAttr('disabled');
        $('#aadharNumber').attr('readonly',false);
        $('#dlNumber').attr('readonly',false);
        $('#panNumber').attr('readonly',false);
        $('#voterId').attr('readonly',false);
        $('#idTypeDiv').removeClass('d-none');
        $('#genderdiv').addClass('d-none');
        $('#aadharIdentity').addClass('d-none');
        $('#panNumber').removeAttr('name');
        $('#voterId').removeAttr('name');
        $('#dlNumber').removeAttr('name');
        $('#aadharNumber').removeAttr('name');
        $('#step2CheckAadhar').parent().removeClass('d-none');
        $('#step2CheckDl').parent().removeClass('d-none');
        $('#step2CheckVoter').parent().removeClass('d-none');
        $('#step2CheckPan').parent().removeClass('d-none');
        $('#aadharNumber').attr('required',false);
        $('#voterIdentity').addClass('d-none');
        $('#voterId').attr('required',false);
        $('#panIdentity').addClass('d-none');
        $('#panNumber').attr('required',false);
        $('#dlIdentity').addClass('d-none');
        $('#dlNumber').attr('required',false);
    })
    
    $('#btnPanClear').click(function()
    {
        $('#panIdentity .input-group').css('width','100%');
        $('#addPersonDiv').slideUp('fast');
        $('#idType').val('');
        $('#idType').removeAttr('disabled');
        $('#personName').val('');
        $('#personDiv').addClass('d-none');
        $('#mobileDiv').addClass('d-none');
        $('#nonHolderMobileDiv').addClass('d-none');
        $('#aadharNumber').removeAttr('disabled');
        $('#dlNumber').removeAttr('disabled');
        $('#panNumber').removeAttr('disabled');
        $('#voterId').removeAttr('disabled');
        $('#otpDiv').addClass('d-none');
        $('#otpDiv button').addClass('disabled').removeClass('btn-style-five').addClass('btn-style-grey');
        $('#otpDiv button').removeAttr('disabled');
        $('#aadharNumber').val('');
        $('#dlNumber').val('');
        $('#panNumber').val('');
        $('#voterId').val('');
        $('#step2CheckAadhar').removeAttr('disabled');
        $('#step2CheckDl').removeAttr('disabled');
        $('#step2CheckVoter').removeAttr('disabled');
        $('#step2CheckPan').removeAttr('disabled');
        $('#aadharNumber').attr('readonly',false);
        $('#dlNumber').attr('readonly',false);
        $('#panNumber').attr('readonly',false);
        $('#voterId').attr('readonly',false);
        $('#idTypeDiv').removeClass('d-none');
        $('#genderdiv').addClass('d-none');
        $('#aadharIdentity').addClass('d-none');
        $('#panNumber').removeAttr('name');
        $('#voterId').removeAttr('name');
        $('#dlNumber').removeAttr('name');
        $('#aadharNumber').removeAttr('name');
        $('#step2CheckAadhar').parent().removeClass('d-none');
        $('#step2CheckDl').parent().removeClass('d-none');
        $('#step2CheckVoter').parent().removeClass('d-none');
        $('#step2CheckPan').parent().removeClass('d-none');
        $('#aadharNumber').attr('required',false);
        $('#voterIdentity').addClass('d-none');
        $('#voterId').attr('required',false);
        $('#panIdentity').addClass('d-none');
        $('#panNumber').attr('required',false);
        $('#dlIdentity').addClass('d-none');
        $('#dlNumber').attr('required',false);
    })
    
    $('#btnVoterClear').click(function()
    {
        $('#voterIdentity .input-group').css('width','100%');
        $('#addPersonDiv').slideUp('fast');
        $('#idType').val('');
        $('#idType').removeAttr('disabled');
        $('#aadharNumber').removeAttr('disabled');
        $('#dlNumber').removeAttr('disabled');
        $('#panNumber').removeAttr('disabled');
        $('#voterId').removeAttr('disabled');
        $('#personName').val('');
        $('#personDiv').addClass('d-none');
        $('#mobileDiv').addClass('d-none');
        $('#nonHolderMobileDiv').addClass('d-none');
        $('#otpDiv').addClass('d-none');
        $('#otpDiv button').addClass('disabled').removeClass('btn-style-five').addClass('btn-style-grey');
        $('#otpDiv button').removeAttr('disabled');
        $('#aadharNumber').val('');
        $('#dlNumber').val('');
        $('#panNumber').val('');
        $('#voterId').val('');
        $('#step2CheckAadhar').removeAttr('disabled');
        $('#step2CheckDl').removeAttr('disabled');
        $('#step2CheckVoter').removeAttr('disabled');
        $('#step2CheckPan').removeAttr('disabled');
        $('#aadharNumber').attr('readonly',false);
        $('#dlNumber').attr('readonly',false);
        $('#panNumber').attr('readonly',false);
        $('#voterId').attr('readonly',false);
        $('#idTypeDiv').removeClass('d-none');
        $('#genderdiv').addClass('d-none');
        $('#aadharIdentity').addClass('d-none');
        $('#panNumber').removeAttr('name');
        $('#voterId').removeAttr('name');
        $('#dlNumber').removeAttr('name');
        $('#aadharNumber').removeAttr('name');
        $('#step2CheckAadhar').parent().removeClass('d-none');
        $('#step2CheckDl').parent().removeClass('d-none');
        $('#step2CheckVoter').parent().removeClass('d-none');
        $('#step2CheckPan').parent().removeClass('d-none');
        $('#aadharNumber').attr('required',false);
        $('#voterIdentity').addClass('d-none');
        $('#voterId').attr('required',false);
        $('#panIdentity').addClass('d-none');
        $('#panNumber').attr('required',false);
        $('#dlIdentity').addClass('d-none');
        $('#dlNumber').attr('required',false);
    })
    
    function clearAll()
    {
        $('.identitydiv').removeClass('col-12').addClass('col-10');
        $('#nonDlDob').val('');
        $('#addNonPersonDiv').slideUp('fast');
        $('#nonIdType').val('');
        $('#nonAadharNumber').removeAttr('disabled');
        $('#nonDlNumber').removeAttr('disabled');
        $('#nonPanNumber').removeAttr('disabled');
        $('#nonVoterId').removeAttr('disabled');
        $('#nonIdType').removeAttr('disabled');
        $('#nonPersonName').val('');
        $('#nonGender').val('');
        $('#nonAge').val('');
        $('#nonState').val('').trigger('change');
        $('#nonDistrict').val('').trigger('change');
        $('#nonCity').val('').trigger('change');;
        $('#nonIdHolderMobile').val('');
        $('#step2CheckNonAadhar').parent().removeClass('d-none');
        $('#step2CheckNonDl').parent().removeClass('d-none');
        $('#step2CheckNonVoter').parent().removeClass('d-none');
        $('#step2CheckNonPan').parent().removeClass('d-none');
        $('.nonPersonDiv').addClass('d-none');
        $('#nonIdHolderMobileDiv').addClass('d-none');
        $('#nonOtpDiv').addClass('d-none');
        $('#nonOtpDiv button').addClass('disabled').removeClass('btn-style-five').addClass('btn-style-grey');
        $('#nonOtpDiv button').removeAttr('disabled');
        $('#nonAadharNumber').val('');
        $('#nonDlNumber').val('');
        $('#nonPanNumber').val('');
        $('#nonVoterId').val('');
        $('#nonDob').val('');
        $('#step2CheckNonAadhar').removeAttr('disabled');
        $('#step2CheckNonDl').removeAttr('disabled');
        $('#step2CheckNonVoter').removeAttr('disabled');
        $('#step2CheckNonPan').removeAttr('disabled');
        $('#step2CheckNonAadhar').addClass('disabled').addClass('btn-style-grey').removeClass('btn-style-green');
        $('#step2CheckNonDl').addClass('disabled').addClass('btn-style-grey').removeClass('btn-style-green');
        $('#step2CheckNonVoter').addClass('disabled').addClass('btn-style-grey').removeClass('btn-style-green');
        $('#step2CheckNonPan').addClass('disabled').addClass('btn-style-grey').removeClass('btn-style-green');
        $('#nonAadharNumber').attr('disabled',false);
        $('#nonDlNumber').attr('disabled',false);
        $('#nonPanNumber').attr('disabled',false);
        $('#nonVoterId').attr('disabled',false);
        $('#nonIdTypeDiv').removeClass('d-none');
        $('#nonAadharIdentity').addClass('d-none');
        $('#nonPanNumber').removeAttr('name');
        $('#nonVoterId').removeAttr('name');
        $('#nonDlNumber').removeAttr('name');
        $('#nonAadharNumber').removeAttr('name');
        $('#nonAadharNumber').attr('required',false);
        $('#nonVoterIdentity').addClass('d-none');
        $('#nonVoterId').attr('required',false);
        $('#nonPanIdentity').addClass('d-none');
        $('#nonPanNumber').attr('required',false);
        $('#nonDlIdentity').addClass('d-none');
        $('#nonDlNumber').attr('required',false);
    }
    
    $('#btnNonDlClear').click(function()
    {
        $('#nonDlDob').val('');
        $('#addNonPersonDiv').slideUp('fast');
        $('#nonIdType').val('');
        $('#nonAadharNumber').removeAttr('disabled');
        $('#nonDlNumber').removeAttr('disabled');
        $('#nonPanNumber').removeAttr('disabled');
        $('#nonVoterId').removeAttr('disabled');
        $('#nonIdType').removeAttr('disabled');
        $('#nonPersonName').val('');
        $('#nonGender').val('');
        $('#nonAge').val('');
        $('#nonState').val('').trigger('change');
        $('#nonDistrict').val('').trigger('change');
        $('#nonCity').val('').trigger('change');;
        $('#nonIdHolderMobile').val('');
        $('#step2CheckNonAadhar').parent().removeClass('d-none');
        $('#step2CheckNonDl').parent().removeClass('d-none');
        $('#step2CheckNonVoter').parent().removeClass('d-none');
        $('#step2CheckNonPan').parent().removeClass('d-none');
        $('.nonPersonDiv').addClass('d-none');
        $('#nonIdHolderMobileDiv').addClass('d-none');
        $('#nonOtpDiv').addClass('d-none');
        $('#nonOtpDiv button').addClass('disabled').removeClass('btn-style-five').addClass('btn-style-grey');
        $('#nonOtpDiv button').removeAttr('disabled');
        $('#nonAadharNumber').val('');
        $('#nonDlNumber').val('');
        $('#nonPanNumber').val('');
        $('#nonVoterId').val('');
        $('#step2CheckNonAadhar').removeAttr('disabled');
        $('#step2CheckNonDl').removeAttr('disabled');
        $('#step2CheckNonVoter').removeAttr('disabled');
        $('#step2CheckNonPan').removeAttr('disabled');
        $('#nonAadharNumber').attr('readonly',false);
        $('#nonDlNumber').attr('readonly',false);
        $('#nonPanNumber').attr('readonly',false);
        $('#nonVoterId').attr('readonly',false);
        $('#nonIdTypeDiv').removeClass('d-none');
        $('#nonAadharIdentity').addClass('d-none');
        $('#nonPanNumber').removeAttr('name');
        $('#nonVoterId').removeAttr('name');
        $('#nonDlNumber').removeAttr('name');
        $('#nonAadharNumber').removeAttr('name');
        $('#nonAadharNumber').attr('required',false);
        $('#nonVoterIdentity').addClass('d-none');
        $('#nonVoterId').attr('required',false);
        $('#nonPanIdentity').addClass('d-none');
        $('#nonDob').val('');
        $('#nonPanNumber').attr('required',false);
        $('#nonDlIdentity').addClass('d-none');
        $('#nonDlNumber').attr('required',false);
    })
    
    $('#btnNonPanClear').click(function()
    {
        $('#nonDlDob').val('');
        $('#addNonPersonDiv').slideUp('fast');
        $('#nonIdType').val('');
        $('#nonAadharNumber').removeAttr('disabled');
        $('#nonDlNumber').removeAttr('disabled');
        $('#nonPanNumber').removeAttr('disabled');
        $('#nonVoterId').removeAttr('disabled');
        $('#nonIdType').removeAttr('disabled');
        $('#nonPersonName').val('');
        $('#nonGender').val('');
        $('#nonAge').val('');
        $('#nonState').val('').trigger('change');
        $('#nonDistrict').val('').trigger('change');
        $('#nonCity').val('').trigger('change');;
        $('#nonIdHolderMobile').val('');
        $('#step2CheckNonAadhar').parent().removeClass('d-none');
        $('#step2CheckNonDl').parent().removeClass('d-none');
        $('#step2CheckNonVoter').parent().removeClass('d-none');
        $('#step2CheckNonPan').parent().removeClass('d-none');
        $('.nonPersonDiv').addClass('d-none');
        $('#nonIdHolderMobileDiv').addClass('d-none');
        $('#nonOtpDiv').addClass('d-none');
        $('#nonOtpDiv button').addClass('disabled').removeClass('btn-style-five').addClass('btn-style-grey');
        $('#nonOtpDiv button').removeAttr('disabled');
        $('#nonAadharNumber').val('');
        $('#nonDlNumber').val('');
        $('#nonPanNumber').val('');
        $('#nonVoterId').val('');
        $('#step2CheckNonAadhar').removeAttr('disabled');
        $('#step2CheckNonDl').removeAttr('disabled');
        $('#step2CheckNonVoter').removeAttr('disabled');
        $('#step2CheckNonPan').removeAttr('disabled');
        $('#nonAadharNumber').attr('readonly',false);
        $('#nonDlNumber').attr('readonly',false);
        $('#nonPanNumber').attr('readonly',false);
        $('#nonVoterId').attr('readonly',false);
        $('#nonIdTypeDiv').removeClass('d-none');
        $('#nonAadharIdentity').addClass('d-none');
        $('#nonPanNumber').removeAttr('name');
        $('#nonVoterId').removeAttr('name');
        $('#nonDlNumber').removeAttr('name');
        $('#nonAadharNumber').removeAttr('name');
        $('#nonAadharNumber').attr('required',false);
        $('#nonVoterIdentity').addClass('d-none');
        $('#nonVoterId').attr('required',false);
        $('#nonPanIdentity').addClass('d-none');
        $('#nonDob').val('');
        $('#nonPanNumber').attr('required',false);
        $('#nonDlIdentity').addClass('d-none');
        $('#nonDlNumber').attr('required',false);
    })
    
    $('#btnNonVoterClear').click(function()
    {
        $('#nonDlDob').val('');
        $('#addNonPersonDiv').slideUp('fast');
        $('#nonIdType').val('');
        $('#nonAadharNumber').removeAttr('disabled');
        $('#nonDlNumber').removeAttr('disabled');
        $('#nonPanNumber').removeAttr('disabled');
        $('#nonVoterId').removeAttr('disabled');
        $('#nonIdType').removeAttr('disabled');
        $('#nonPersonName').val('');
        $('#nonGender').val('');
        $('#nonAge').val('');
        $('#nonDob').val('');
        $('#nonState').val('').trigger('change');
        $('#nonDistrict').val('').trigger('change');
        $('#nonCity').val('').trigger('change');;
        $('#nonIdHolderMobile').val('');
        $('#step2CheckNonAadhar').parent().removeClass('d-none');
        $('#step2CheckNonDl').parent().removeClass('d-none');
        $('#step2CheckNonVoter').parent().removeClass('d-none');
        $('#step2CheckNonPan').parent().removeClass('d-none');
        $('.nonPersonDiv').addClass('d-none');
        $('#nonIdHolderMobileDiv').addClass('d-none');
        $('#nonOtpDiv').addClass('d-none');
        $('#nonOtpDiv button').addClass('disabled').removeClass('btn-style-five').addClass('btn-style-grey');
        $('#nonOtpDiv button').removeAttr('disabled');
        $('#nonAadharNumber').val('');
        $('#nonDlNumber').val('');
        $('#nonPanNumber').val('');
        $('#nonVoterId').val('');
        $('#step2CheckNonAadhar').removeAttr('disabled');
        $('#step2CheckNonDl').removeAttr('disabled');
        $('#step2CheckNonVoter').removeAttr('disabled');
        $('#step2CheckNonPan').removeAttr('disabled');
        $('#nonAadharNumber').attr('readonly',false);
        $('#nonDlNumber').attr('readonly',false);
        $('#nonPanNumber').attr('readonly',false);
        $('#nonVoterId').attr('readonly',false);
        $('#nonIdTypeDiv').removeClass('d-none');
        $('#nonAadharIdentity').addClass('d-none');
        $('#nonPanNumber').removeAttr('name');
        $('#nonVoterId').removeAttr('name');
        $('#nonDlNumber').removeAttr('name');
        $('#nonAadharNumber').removeAttr('name');
        $('#nonAadharNumber').attr('required',false);
        $('#nonVoterIdentity').addClass('d-none');
        $('#nonVoterId').attr('required',false);
        $('#nonPanIdentity').addClass('d-none');
        $('#nonPanNumber').attr('required',false);
        $('#nonDlIdentity').addClass('d-none');
        $('#nonDlNumber').attr('required',false);
    })
    
    function addNonMember()
    {
        if($('#nonCheckInDate').val() != '' && $('#nonCheckOutDate').val() != '' && $('#nonRoomNo').val() != '')
        {
            let checkInDate = new Date($('#nonCheckInDate').val());
            let checkOutDate = new Date($('#nonCheckOutDate').val());
            if(checkInDate <= checkOutDate) {
                $('#nonIdType').val('');
                $('#btnNonAadharClear').click();
                $('#btnNonPanClear').click();
                $('#btnNonVoterClear').click();
                $('#btnNonDlClear').click();
                $('#addNonPersonDiv').slideDown('fast');   
            }else{
                toastr.error('Check-Out date must be greater than Check-In date.');    
            }
        }else{
            Swal.fire({
                title: '<strong class="text-dark" style="font-size:20px;">Please enter all the details</strong>',
                icon: 'error',
                allowOutsideClick:false,
                showCloseButton: true,
                showCancelButton: false,
                focusConfirm: false,
                showConfirmButton:true
            })
        }
    }
    
    function addMember()
    {
        if($('#checkInDate').val() != '' && $('#checkOutDate').val() != '' && $('#roomNo').val() != '')
        {
            let checkInDate = new Date($('#checkInDate').val());
            let checkOutDate = new Date($('#checkOutDate').val());
            if(checkInDate <= checkOutDate) {
                $('#idType').val('');
                $('#btnAadharClear').click();
                $('#btnPanClear').click();
                $('#btnVoterClear').click();
                $('#btnDlClear').click();
                $('#addPersonDiv').slideDown('fast');   
            }else{
                toastr.error('Check-Out date must be greater than Check-In date.');    
            }
        }else{
            Swal.fire({
                title: '<strong class="text-dark" style="font-size:20px;">Please enter all the details</strong>',
                icon: 'error',
                allowOutsideClick:false,
                showCloseButton: true,
                showCancelButton: false,
                focusConfirm: false,
                showConfirmButton:true
            })
        }
    }
    
    function getdistrict(id)
    {
        $('#nonDistrict').prop('selectedIndex',0);
        $('#nonCity').prop('selectedIndex',0);
        $('#nonCity').html('<option value="">Select City</option>');
        if(id!="")
        {
            $.ajax({
                url:"<?php echo base_url(); ?>/hotel/getdistrict?id="+id,
                data:id,
                type:'get',
                success:function(res)
                {
                    $('#nonDistrict').html(res);
                }
            })
        }
        else
        {
            $('#nonDistrict').html('<option value="">Select District</option>');
            $('#nonCity').html('<option value="">Select City</option>');
        }
    }
    
    function getAge(val) {
        var today = new Date();
        var birthDate = new Date(val);
        var age = today.getFullYear() - birthDate.getFullYear();
        var m = today.getMonth() - birthDate.getMonth();
        if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
            age--;
        }
        if(!isNaN(age))
        $('#nonAge').val(age);
        else
        $('#nonAge').val('');
    }
    
    function getcity(id)
    {
      var sid=$('#nonState').val();
      $('#nonCity').prop('selectedIndex',0);
      if(id!="")
      {
        $.ajax({
          url:"<?php echo base_url(); ?>/hotel/getdistrict?cid="+id+"&sid="+sid,
            
            type:'get',
            success:function(res)
            {
              $('#nonCity').html(res);
            }
        })
      }
      else
      {
        
        $('#nonCity').html('<option value="">Select City</option>');
      }
      
    }
</script>