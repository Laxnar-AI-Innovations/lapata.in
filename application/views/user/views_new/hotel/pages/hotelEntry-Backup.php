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
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row justify-content-center">
        <div class="col-xl-6 <?php if($pn != 1){ echo "d-none"; } ?>">

          <div class="card">
            <div class="card-body pt-3">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                        <h4 class="text-danger mb-0">Hotel Entry</h4>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-left">
                        <div class="form-group mb-3">
                            <input type="radio" id="type1" name="type" class="form-check-input" value="2">
                            <label for="type1" class="mx-1">ID Holder</label>
                        </div>
                        <div class="form-group mb-3">
                            <input type="radio" id="type2" name="type" class="form-check-input" value="3">
                            <label for="type2" class="mx-1">Without ID Holder</label>
                        </div>
                        <div class="form-group mb-3 col-lg-3 col-md-4 col-sm-12">
                            <button type="button" class="next btn btn-primary w-100" onclick="showAccordingly()">Next</button>
                        </div>
                    </div>
                </div>
            </div>
          </div>

        </div>
        <div class="col-xl-12 col-lg-12 col-sm-12 col-md-12 px-0 <?php if($pn != 2){ echo "d-none"; } ?>">
            <form class="row g-3 needs-validation <?php if($pn != 2){ echo "d-none"; } ?>" method="post" action="<?php echo base_url(); ?>hotel/checkEntry" novalidate id="step2Form">
                <?php 
                  $csrf = array(
                    'name' => $this->security->get_csrf_token_name(),
                    'hash' => $this->security->get_csrf_hash()
                    );
                ?>
                <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                <input type="hidden" name="searchType" value="Holder" />
                <div class="col-lg-12 col-sm-12 col-md-12 mx-auto">
                    <div class="card">
                        <div class="card-body pb-3 w-100 p-3">    
                            <div class="row justify-content-end">
                                <div class="col-lg-auto col-sm-12 col-md-auto mb-3">
                                    <button type="button" class="btn btn-style-yellow w-100" data-bs-toggle="modal" data-bs-target="#addChildModal">Add Child</button>
                                </div>
                                <div class="col-lg-auto col-sm-12 col-md-auto mb-3">
                                    <button type="button" class="btn btn-style-grey w-100" onclick="showNonHolderDiv()">Add Non ID Holder</button>
                                </div>
                            </div>
                            <div class="modal fade" id="addChildModal" tabindex="-1" role="dialog" aria-labelledby="addChildModalTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="addChildModalTitle">Add Child Details</h5>
                                            <button type="button" data-bs-dismiss="modal" class="btn btn-danger" style="background:black!important;color:white;" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>        
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-6 col-sm-12 col-md-12">
                                                    <div class="form-floating mt-3 pr-2 row mx-0">
                                                        <input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>" name="checkInChildDate" id="checkInChildDate" required placeholder="Check In Date">
                                                        <label for="checkInChildDate" class="pl-2">Enter Check In Date</label>
                                                        <div class="invalid-feedback">Please enter Check In Date.</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-12 col-md-12">
                                                    <div class="form-floating mt-3 pr-2 row mx-0">
                                                        <input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>" name="checkOutChildDate" id="checkOutChildDate" required placeholder="Enter Check Out Date">
                                                        <label for="checkOutChildDate" class="pl-2">Enter Check Out Date</label>
                                                        <div class="invalid-feedback">Please Enter Check Out Date.</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-12 col-md-12">
                                                    <div class="form-floating mt-3 pr-2 row mx-0">
                                                        <input type="number" class="form-control" name="roomChildNo" id="roomChildNo" required placeholder="Room Number">
                                                        <label for="roomChildNo" class="pl-2">Enter Room No</label>
                                                        <div class="invalid-feedback">Please enter Room Number.</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-12 col-md-12">
                                                    <div class="form-floating mt-3 pr-2 row mx-0">
                                                        <input type="text" class="form-control" name="childName" id="childName" required placeholder="Child Name">
                                                        <label for="childName" class="pl-2">Enter Child Name</label>
                                                        <div class="invalid-feedback">Please enter Child Name.</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-12 col-md-12">
                                                    <div class="form-floating mt-3 pr-2 row mx-0">
                                                        <input type="number" class="form-control" name="childAge" id="childAge" required placeholder="Child Age">
                                                        <label for="childAge" class="pl-2">Enter Child Age</label>
                                                        <div class="invalid-feedback">Please enter Child Age.</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-12 col-md-12">
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
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary btn-style-yellow" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary btn-style-green disabled-on-loading" onclick="saveChild(this)"> Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                <div class="col-lg-auto col-sm-12 col-md-auto mt-3 text-center">
                                    <button type="button" class="btn btn-style-four disabled-on-loading" onclick="addMember()"> Add ID Holder</button>
                                </div>
                                <div class="col-sm-12 col-md-auto col-lg-auto mt-3">
                                    <button type="button" class="btn btn-style-red disabled-on-loading" style="background:red!important;" onclick="resetAll(this)"> Reset</button>
                                </div>
                            </div>
                            <div id="addNonHolderDiv" class="col-lg-12 col-sm-12 col-md-12 my-3" style="display:none;">
                                <div class="row">
                                    <div class="form-floating form-group mb-0 mt-0 col-sm-12 col-md-6 col-lg-auto" id="nonIdTypeDiv">
                                        <select name="nonIdType" class="form-control" style="appearance:auto;" id="nonIdType" aria-label="Select Id Type" onchange="showInputAccordingly(this.value,'non')">
                                            <option value="">Choose Option</option>
                                            <option value="aadhar">Aadhaar</option>
                                            <option value="dl">Driving License</option>
                                            <option value="pan">Pan Card</option>
                                            <option value="voter">Voter Id</option>
                                        </select>
                                        <label for="nonIdType" class="ms-3">Select Id Type</label>
                                    </div>
                                    <div id="nonIdAadharIdentity" class="px-0 col-lg-3 col-md-6 col-sm-12 d-none">
                                        <div class="pr-2 row mx-0">
                                            <div class="input-group col pe-3 ps-3">
                                                <div class="form-floating">
                                                    <input type="number" class="form-control" name="nonIdaadhar_id" max="12" min="12" onKeyUp="showSearchAccordingly(this.value,'aadhar','non')" onKeyPress="return checkLength(this.value,12)" id="nonIdAadharNumber" required placeholder="Aadhar Number" aria-describedby="nonIdbtnAadharClear">
                                                    <label for="nonIdAadharNumber" id="nonIdAadharLabel">Enter Aadhaar No</label>
                                                    <div class="invalid-feedback">Please enter aadhar number.</div>
                                                </div>
                                                <div class="input-group-append d-none">
                                                    <span class="input-group-text" style="padding:1.25rem 1rem;border-radius:0;background:white;color:black;cursor:pointer;" id="nonIdbtnAadharClear"><i class="fa fa-times"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-auto col-md-auto px-0 nonIdSearchDiv">
                                                <button class="btn btn-success w-auto disabled-on-loading btn-style-grey disabled" style="border-radius: 0!important;padding: 0.9rem 0.8rem!important;" id="nonIdStep2CheckAadhar" type="button"> <i class="fa fa-search"></i></button>  
                                            </div>
                                        </div>
                                    </div>
                                    <div id="nonIdPanIdentity" class="px-0 col-lg-3 col-md-6 col-sm-12 d-none">
                                        <div class="pr-2 row mx-0">
                                            <div class="input-group col pe-3 ps-3">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control text-uppercase" id="nonIdPanNumber" onKeyUp="showSearchAccordingly(this.value,'pan','non')" onKeyPress="return checkLength(this.value,10)" required placeholder="PAN Number" aria-describedby="nonIdStep2CheckPan">
                                                    <label for="nonIdPanNumber" id="nonIdPanLabel">Enter PAN No</label>
                                                    <div class="invalid-feedback">Please enter PAN Number.</div>
                                                </div>
                                                <div class="input-group-append d-none">
                                                    <span class="input-group-text" style="padding:1.25rem 1rem;border-radius:0;background:white;color:black;cursor:pointer;" id="nonIdBtnPanClear"><i class="fa fa-times"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-auto col-md-auto px-0 nonIdSearchDiv">
                                                <button class="btn btn-success w-auto disabled-on-loading btn-style-grey" style="border-radius: 0!important;padding: 0.9rem 0.8rem!important;" id="nonIdStep2CheckPan" type="button"> <i class="fa fa-search"></i></button>  
                                            </div>
                                        </div>
                                    </div>
                                    <div id="nonIdVoterIdentity" class="px-0 col-lg-3 col-md-6 col-sm-12 d-none">
                                        <div class="pr-2 row mx-0">
                                            <div class="input-group col pe-4 ps-3">
                                                <div class="form-floating col">
                                                    <input type="text" class="form-control text-uppercase" id="nonIdVoterId" onKeyUp="showSearchAccordingly(this.value,'voter','non')" onKeyPress="return checkLength(this.value,10)" required placeholder="Voter Number" aria-describedby="nonIdStep2CheckVoter">
                                                    <label for="nonIdVoterId" id="nonIdVoterLabel">Enter Voter No</label>
                                                    <div class="invalid-feedback">Please enter Voter Number.</div>
                                                </div>
                                                <div class="input-group-append d-none">
                                                    <span class="input-group-text" style="padding:1.25rem 1rem;border-radius:0;background:white;color:black;cursor:pointer;" id="nonIdBtnVoterClear"><i class="fa fa-times"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-auto col-md-auto px-0 nonIdSearchDiv">
                                                <button class="btn btn-success w-auto disabled-on-loading btn-style-grey" style="border-radius: 0!important;padding: 0.9rem 0.8rem!important;" id="nonIdStep2CheckVoter" type="button"> <i class="fa fa-search"></i></button>  
                                            </div>
                                        </div>
                                    </div>
                                    <div id="nonIdDlIdentity" class="px-0 col-lg-3 col-md-6 col-sm-12 d-none">
                                        <div class="pr-2 row mx-0">
                                            <div class="input-group col pe-3 ps-3">
                                                <div class="form-floating col">
                                                    <input type="text" class="form-control text-uppercase" max="12" min="12" onKeyUp="showSearchAccordingly(this.value,'dl','non')" onKeyPress="return checkLength(this.value,15)" id="nonIdDlNumber" required placeholder="Driving License Number" aria-describedby="nonIdStep2CheckDl">
                                                    <label for="nonIdDlNumber" id="nonIdDlLabel">Enter D.L No</label>
                                                    <div class="invalid-feedback">Please enter Driving License number.</div>
                                                </div>
                                                <div class="input-group-append d-none">
                                                    <span class="input-group-text" style="padding:1.25rem 1rem;border-radius:0;background:white;color:black;cursor:pointer;" id="nonIdBtnDlClear"><i class="fa fa-times"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-auto col-md-auto px-0 nonIdSearchDiv">
                                                <button class="btn btn-success w-auto disabled-on-loading btn-style-grey disabled" style="border-radius: 0!important;padding: 0.9rem 0.8rem!important;" id="nonIdStep2CheckDl" type="button"> <i class="fa fa-search"></i></button>  
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-floating form-group mb-0 mt-0 col-sm-12 col-md-auto col-lg-auto d-none" id="nonIdPersonDiv">
                                        <input type="text" readonly class="form-control" placeholder="Person Name" id="nonIdPersonName">
                                        <label for="nonIdPersonName" class="ms-3">Person Name</label>
                                    </div>
                                    <div class="form-floating form-group mb-0 mt-0 col-sm-12 col-md-auto col-lg-2 d-none" id="nonIdNonHolderMobileDiv">
                                        <input type="number" onKeyPress="return checkLength(this.value,10)" placeholder="Mobile" class="form-control" onKeyUp="showOtpAccordingly(this.value,'non')" id="nonIdNonHolderMobile">
                                        <label for="nonIdNonHolderMobile" class="ms-3">Enter Mobile No.</label>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-auto col-lg-auto mt-2 d-none" id="nonIdOtpDiv">
                                        <button type="button" class="btn btn-style-grey disabled disabled-on-loading" onclick="sendOtp(this,'non')"> Send OTP</button>
                                    </div>
                                </div>
                            </div>
                            <div id="addPersonDiv" class="col-lg-12 col-sm-12 col-md-12 my-3" style="display:none;">
                                <div class="row">
                                    <div class="form-floating form-group mb-0 mt-0 col-sm-12 col-md-6 col-lg-auto" id="idTypeDiv">
                                        <select name="idType" class="form-control" style="appearance:auto;" id="idType" aria-label="Select Id Type" onchange="showInputAccordingly(this.value)">
                                            <option value="">Choose Option</option>
                                            <option value="aadhar">Aadhaar</option>
                                            <option value="dl">Driving License</option>
                                            <option value="pan">Pan Card</option>
                                            <option value="voter">Voter Id</option>
                                        </select>
                                        <label for="idType" class="ms-3">Select Id Type</label>
                                    </div>
                                    <div id="aadharIdentity" class="px-0 col-lg-3 col-md-6 col-sm-12 d-none">
                                        <div class="pr-2 row mx-0">
                                            <div class="input-group col pe-3 ps-3">
                                                <div class="form-floating">
                                                    <input type="number" class="form-control" name="aadhar_id" max="12" min="12" onKeyUp="showSearchAccordingly(this.value,'aadhar')" onKeyPress="return checkLength(this.value,12)" id="aadharNumber" required placeholder="Aadhar Number" aria-describedby="btnAadharClear">
                                                    <label for="aadharNumber" id="aadharLabel">Enter Aadhaar No</label>
                                                    <div class="invalid-feedback">Please enter aadhar number.</div>
                                                </div>
                                                <div class="input-group-append d-none">
                                                    <span class="input-group-text" style="padding:1.25rem 1rem;border-radius:0;background:white;color:black;cursor:pointer;" id="btnAadharClear"><i class="fa fa-times"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-auto col-md-auto px-0 searchDiv">
                                                <button class="btn btn-success w-auto disabled-on-loading btn-style-grey disabled" style="border-radius: 0!important;padding: 0.9rem 0.8rem!important;" id="step2CheckAadhar" type="button"> <i class="fa fa-search"></i></button>  
                                            </div>
                                        </div>
                                    </div>
                                    <div id="panIdentity" class="px-0 col-lg-3 col-md-6 col-sm-12 d-none">
                                        <div class="pr-2 row mx-0">
                                            <div class="input-group col pe-3 ps-3">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control text-uppercase" id="panNumber" onKeyUp="showSearchAccordingly(this.value,'pan')" onKeyPress="return checkLength(this.value,10)" required placeholder="PAN Number" aria-describedby="step2CheckPan">
                                                    <label for="panNumber" id="panLabel">Enter PAN No</label>
                                                    <div class="invalid-feedback">Please enter PAN Number.</div>
                                                </div>
                                                <div class="input-group-append d-none">
                                                    <span class="input-group-text" style="padding:1.25rem 1rem;border-radius:0;background:white;color:black;cursor:pointer;" id="btnPanClear"><i class="fa fa-times"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-auto col-md-auto px-0 searchDiv">
                                                <button class="btn btn-success w-auto disabled-on-loading btn-style-grey" style="border-radius: 0!important;padding: 0.9rem 0.8rem!important;" id="step2CheckPan" type="button"> <i class="fa fa-search"></i></button>  
                                            </div>
                                        </div>
                                    </div>
                                    <div id="voterIdentity" class="px-0 col-lg-3 col-md-6 col-sm-12 d-none">
                                        <div class="pr-2 row mx-0">
                                            <div class="input-group col pe-4 ps-3">
                                                <div class="form-floating col">
                                                    <input type="text" class="form-control text-uppercase" id="voterId" onKeyUp="showSearchAccordingly(this.value,'voter')" onKeyPress="return checkLength(this.value,10)" required placeholder="Voter Number" aria-describedby="step2CheckVoter">
                                                    <label for="voterId" id="voterLabel">Enter Voter No</label>
                                                    <div class="invalid-feedback">Please enter Voter Number.</div>
                                                </div>
                                                <div class="input-group-append d-none">
                                                    <span class="input-group-text" style="padding:1.25rem 1rem;border-radius:0;background:white;color:black;cursor:pointer;" id="btnVoterClear"><i class="fa fa-times"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-auto col-md-auto px-0 searchDiv">
                                                <button class="btn btn-success w-auto disabled-on-loading btn-style-grey" style="border-radius: 0!important;padding: 0.9rem 0.8rem!important;" id="step2CheckVoter" type="button"> <i class="fa fa-search"></i></button>  
                                            </div>
                                        </div>
                                    </div>
                                    <div id="dlIdentity" class="px-0 col-lg-3 col-md-6 col-sm-12 d-none">
                                        <div class="pr-2 row mx-0">
                                            <div class="input-group col pe-3 ps-3">
                                                <div class="form-floating col">
                                                    <input type="text" class="form-control text-uppercase" max="12" min="12" onKeyUp="showSearchAccordingly(this.value,'dl')" onKeyPress="return checkLength(this.value,15)" id="dlNumber" required placeholder="Driving License Number" aria-describedby="step2CheckDl">
                                                    <label for="dlNumber" id="dlLabel">Enter D.L No</label>
                                                    <div class="invalid-feedback">Please enter Driving License number.</div>
                                                </div>
                                                <div class="input-group-append d-none">
                                                    <span class="input-group-text" style="padding:1.25rem 1rem;border-radius:0;background:white;color:black;cursor:pointer;" id="btnDlClear"><i class="fa fa-times"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-auto col-md-auto px-0 searchDiv">
                                                <button class="btn btn-success w-auto disabled-on-loading btn-style-grey disabled" style="border-radius: 0!important;padding: 0.9rem 0.8rem!important;" id="step2CheckDl" type="button"> <i class="fa fa-search"></i></button>  
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-floating form-group mb-0 mt-0 col-sm-12 col-md-auto col-lg-auto d-none" id="personDiv">
                                        <input type="text" readonly class="form-control" placeholder="Person Name" id="personName">
                                        <label for="personName" class="ms-3">Person Name</label>
                                    </div>
                                    <div class="form-floating form-group mb-0 mt-0 col-sm-12 col-md-auto col-lg-2 d-none" id="mobileDiv">
                                        <select name="mobile" class="form-control" style="appearance:auto;" id="mobile" aria-label="Select Mobile" onchange="showOtpAccordingly(this.value)">
                                            <option value="">Choose Mobile</option>
                                        </select>
                                        <label for="mobile" class="ms-3">Select Mobile</label>
                                    </div>
                                    <div class="form-floating form-group mb-0 mt-0 col-sm-12 col-md-auto col-lg-2 d-none" id="nonHolderMobileDiv">
                                        <input type="number" onKeyPress="return checkLength(this.value,10)" placeholder="Mobile" class="form-control" onKeyUp="showOtpAccordingly(this.value)" id="nonHolderMobile">
                                        <label for="nonHolderMobile" class="ms-3">Enter Mobile No.</label>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-auto col-lg-auto mt-2 d-none" id="otpDiv">
                                        <button type="button" class="btn btn-style-grey disabled disabled-on-loading" onclick="sendOtp(this)"> Send OTP</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-md-6 mt-3">
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
                                                    <th>#</th>
                                                    <th>Id Type</th>
                                                    <th>Id Number</th>
                                                    <th>Person</th>
                                                    <th>Gender</th>
                                                    <th>Room</th>
                                                    <th>Action</th>
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
                    <div class="col-lg-6 col-sm-12 col-md-6 mt-3">
                        <div class="card">
                            <div class="card-body pb-3 w-100 px-3">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 col-md-12">
                                        <div class="pt-0 pb-0 mt-3">
                                            <h5 class="card-title pt-2 pb-0 text-center">Child</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 col-md-12 table-responsive">
                                        <table class="table text-center table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Age</th>
                                                    <th>Gender</th>
                                                    <th>Room</th>
                                                    <th>Action</th>
                                                </tr>  
                                            </thead>
                                            <tbody id="childBody">
                                                
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
                                    <div class="col-lg-12 col-sm-12 col-md-12 text-end">
                                        <button type="button" class="btn btn-style-green disabled-on-loading" onclick="finalSubmit(this)"> Final Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-xl-5 col-lg-5 col-sm-12 col-md-8 px-0 <?php if($pn != 3){ echo "d-none"; } ?>">
            <div class="card">
                <div class="card-body mt-3 py-3 w-100 p-3">
                    <form class="row g-3 needs-validation <?php if($pn != 3){ echo "d-none"; } ?>" method="post" action="<?php echo base_url(); ?>hotel/checkEntry" novalidate id="step3Form">
                        <?php 
                          $csrf = array(
                            'name' => $this->security->get_csrf_token_name(),
                            'hash' => $this->security->get_csrf_hash()
                            );
                        ?>
                        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                        <input type="hidden" name="searchType" value="Holder" />
                        <div class="custom-field pb-4">
                            <h1>
                                <span style="font-weight:bold;color:red;font-size:large;">
                                    Select-
                                </span>
                            </h1>
                            <div class="pt-0 pb-0 mt-0">
                                <h5 class="card-title text-decoration-underline text-center pb-0 fs-4 pt-0">Search By Identity</h5>
                            </div>
                            <div class="form-group mb-0 mt-3 col-12 px-0" id="inactiveIdTypeDiv">
                                <select name="inactiveIdType" class="form-control" style="appearance:auto;" id="inactiveIdType" aria-label="Select Id Type" onchange="showInactiveInputAccordingly(this.value)">
                                    <option value="">Select Id Type</option>
                                    <option value="aadhar">Aadhaar</option>
                                    <option value="dl">Driving License</option>
                                    <option value="pan">Pan Card</option>
                                    <option value="voter">Voter Id</option>
                                </select>
                                <!--<label for="idType" style="padding: 1rem 1.75rem;">Select Id Type <span class="text-danger">*</span></label>-->
                            </div>
                            <div id="inactiveAadharIdentity" class="mt-2 px-0 d-none">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-floating mt-3 pr-2 row mx-0">
                                            <input type="number" class="form-control" name="inactiveAadhar_id" max="12" min="12" onKeyPress="return checkLength(this.value,12)" id="aadharInactiveNumber" required placeholder="Aadhar Number" aria-describedby="step2CheckInactiveAadhar">
                                            <label for="aadharInactiveNumber" id="inactiveAadharLabel" class="pl-2">Enter Aadhaar No</label>
                                            <div class="invalid-feedback">Please enter aadhar number.</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-floating mt-3 pr-2 row mx-0">
                                            <input type="number" class="form-control" name="inactiveMobileAadhar" onKeyPress="return checkLength(this.value,10)" id="aadharMobileNumber" required placeholder="Mobile Number">
                                            <label for="aadharMobileNumber" class="pl-2">Enter Mobile Number</label>
                                            <div class="invalid-feedback">Please enter mobile number.</div>
                                        </div>  
                                    </div>
                                </div>
                                <div class="row mt-3 mx-0" style="justify-content:space-evenly;text-align:center;">
                                    <div class="col-6 col-md-6 pl-2">
                                        <button class="btn btn-primary w-auto disabled-on-loading btn-style-red" style="background:black!important" id="btnAadharInactiveClear" type="button"> Back</button>  
                                    </div>
                                    <div class="col-6 px-0">
                                        <button class="btn btn-primary w-auto disabled-on-loading btn-style-green" id="step2CheckInactiveAadhar" type="button"> Search</button>  
                                    </div>
                                </div>
                            </div>
                            <div id="inactivePanIdentity" class="mt-2 px-0 d-none">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-floating mt-3 pr-2 row mx-0">
                                            <input type="text" class="form-control" id="inactivePanNumber" required placeholder="PAN Number" aria-describedby="step2CheckInactivePan">
                                            <label for="inactivePanNumber" id="inactivePanLabel" class="pl-2">Enter PAN No</label>
                                            <div class="invalid-feedback">Please enter PAN Number.</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-floating mt-3 pr-2 row mx-0">
                                            <input type="number" class="form-control" name="inactiveMobilePan" onKeyPress="return checkLength(this.value,10)" id="panMobileNumber" required placeholder="Mobile Number">
                                            <label for="panMobileNumber" class="pl-2">Enter Mobile Number</label>
                                            <div class="invalid-feedback">Please enter mobile number.</div>
                                        </div>  
                                    </div>
                                </div>
                                <div class="row mt-3" style="justify-content:space-evenly;text-align:center;">
                                    <div class="col-6 col-md-6 pl-2">
                                        <button class="btn btn-primary w-auto disabled-on-loading btn-style-red" style="background:black!important" id="btnPanInactiveClear" type="button"> Back</button>  
                                    </div>
                                    <div class="col-6 px-0">
                                        <button class="btn btn-primary w-auto disabled-on-loading btn-style-green" id="step2CheckInactivePan" type="button"> Search</button>  
                                    </div>
                                </div>
                            </div>
                            <div id="inactiveVoterIdentity" class="mt-2 px-0 d-none">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-floating mt-3 pr-2 row mx-0">
                                            <input type="text" class="form-control" id="inactiveVoterId" required placeholder="Voter Number" aria-describedby="step2CheckInactiveVoter">
                                            <label for="inactiveVoterId" id="inactiveVoterLabel" class="pl-2">Enter Voter No</label>
                                            <div class="invalid-feedback">Please enter Voter Number.</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-floating mt-3 pr-2 row mx-0">
                                            <input type="number" class="form-control" name="inactiveMobileVoter" onKeyPress="return checkLength(this.value,10)" id="voterMobileNumber" required placeholder="Mobile Number">
                                            <label for="voterMobileNumber" class="pl-2">Enter Mobile Number</label>
                                            <div class="invalid-feedback">Please enter mobile number.</div>
                                        </div>  
                                    </div>
                                </div>
                                <div class="row mt-3" style="justify-content:space-evenly;text-align:center;">
                                    <div class="col-6 col-md-6 pl-2">
                                        <button class="btn btn-primary w-auto disabled-on-loading btn-style-red" style="background:black!important" id="btnVoterInactiveClear" type="button"> Back</button>  
                                    </div>
                                    <div class="col-6 px-0">
                                        <button class="btn btn-primary w-auto disabled-on-loading btn-style-green" id="step2CheckInactiveVoter" type="button"> Search</button>  
                                    </div>
                                </div>
                            </div>
                            <div id="inactiveDlIdentity" class="mt-2 px-0 d-none">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-floating mt-3 pr-2 row mx-0">
                                            <input type="text" class="form-control" max="12" min="12" id="inactiveDlNumber" required placeholder="Driving License Number" aria-describedby="step2CheckInactiveDl">
                                            <label for="inactiveDlNumber" id="inactiveDlLabel" class="pl-2">Enter Driving License No</label>
                                            <div class="invalid-feedback">Please enter Driving License number.</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-floating mt-3 pr-2 row mx-0">
                                            <input type="number" class="form-control" name="inactiveMobileDl" onKeyPress="return checkLength(this.value,10)" id="dlMobileNumber" required placeholder="Mobile Number">
                                            <label for="dlMobileNumber" class="pl-2">Enter Mobile Number</label>
                                            <div class="invalid-feedback">Please enter mobile number.</div>
                                        </div>  
                                    </div>
                                </div>
                                <div class="row mt-3" style="justify-content:space-evenly;text-align:center;">
                                    <div class="col-6 col-md-6 pl-2">
                                        <button class="btn btn-primary w-auto disabled-on-loading btn-style-red" style="background:black!important" id="btnDlInactiveClear" type="button"> Back</button>  
                                    </div>
                                    <div class="col-6 px-0">
                                        <button class="btn btn-primary w-auto disabled-on-loading btn-style-green" id="step2CheckInactiveDl" type="button"> Search</button>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
          </div>
        </div>
        <div class="col-xl-12 <?php if($pn != 4){ echo "d-none"; } ?>">

          <div class="card">
            <div class="card-body pt-3">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                        <h4 class="text-danger mb-0">Search Unknown Person</h4>
                    </div>
                </div>
                <hr>
                <form class="row g-3 needs-validation" method="post" action="<?php echo base_url(); ?>user/filterUnknownPerson" novalidate>
                    <?php 
                        $csrf = array(
                        'name' => $this->security->get_csrf_token_name(),
                        'hash' => $this->security->get_csrf_hash()
                        );
                    ?>
                    <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-lg-4 mb-2">
                                <label class="form-label">Select Start Date</label>
                                <input type="date" class="form-control" name="startdate" id="startdate" max="<?php echo date('Y-m-d'); ?>">  
                            </div>
                            <div class="col-md-6 col-sm-12 col-lg-4 mb-2">
                                <label class="form-label">Select End Date</label>
                                <input type="date" class="form-control" name="enddate" id="enddate" max="<?php echo date('Y-m-d'); ?>">  
                            </div>
                            <div class="col-md-6 col-sm-12 col-lg-4 mb-2">
                                <label class="form-label">Select Gender</label>
                                <select class="form-control" name="gender" id="gender">
                                    <option value="">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-sm-12 col-lg-4 mb-2">
                                <label class="form-label">Enter Person Name</label>
                                <input type="text" class="form-control" name="personName" id="personName" placeholder="Enter Person Name">  
                            </div>
                            <div class="col-md-6 col-sm-12 col-lg-4 mb-2">
                                <label class="form-label">Person Father Name</label>
                                <input type="text" class="form-control" name="fatherName" id="fatherName" placeholder="Person Father Name">  
                            </div>
                            <div class="col-md-6 col-sm-12 col-lg-4 mb-3">
                                <label class="form-label">Select Dob</label>
                                <input type="date" class="form-control" name="dob" id="dob" max="<?php echo date('Y-m-d'); ?>">  
                            </div>
                            <div class="col-lg-auto col-md-auto col-sm-12 mb-3">
                                <button class="btn btn-primary w-100 disabled-on-loading save" id="btn4" type="submit"> Check</button>  
                            </div>
                            <div class="col-lg-auto col-md-auto col-sm-12 mb-2">
                                <button class="btn btn-primary w-100 disabled-on-loading next" id="btn4skip" type="button"> Skip</button>  
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row d-none" id="resultdiv">
                    
                </div>
                <div class="row d-none" id="noresultdiv">
                    
                </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <input type="hidden" id="mainPhotoSelected" >
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
                        <button id="click-photo" class="w-100 btn btn-primary btn-style-five disabled-on-loading"> Click Guest Photo</button>
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
                        <button type='button' class='w-lg-max-content btn btn-style-four btn-primary' onclick='openFrontCamera()'>Open Front Camera <i class='fa fa-camera fa-spin'></i></button>
                    </div>
                    <div class='col-lg-6 col-sm-12 col-md-6 mt-3 px-0 px-md-2' id="backcameradiv">
                        <button type='button' class='w-lg-max-content btn btn-style-four btn-primary' onclick='openBackCamera()'>Open Back Camera <i class='fa fa-camera fa-spin'></i></button>
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
                    <div class="col-lg-6 col-sm-12 col-md-6 text-center mb-3 d-none" id="saveDiv">
                        <button id="btnInactiveSave" class="w-100 btn btn-primary btn-style-green disabled-on-loading"> Save</button>
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
        
        $('#btnDlClear').click(function()
        {
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
        
        $('#btnAadharClear').click(function()
        {
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
                $.ajax({
                    url:'<?php echo base_url(); ?>hotel/checkEntry',
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
            }
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
        $('#saveDiv').removeClass('d-none');
    });
    
    $('.close').click(function()
    {
        location.reload();
    })
    
    $('#retake button').click(function(){
        $('#saveDiv').addClass('d-none');
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
            $(this).attr('disabled','disabled');      
            let data = new FormData();
            data.append('_token','<?php echo $csrf['hash']; ?>');
            data.append('photo',$('#mainPhotoSelected').val());
            $.ajax({
                url:'<?php echo base_url(); ?>hotel/saveUnknownGuestPhoto',
                data:data,
                contentType: false,
                cache: false,
                processData:false,
                type:'post',
                success:function(res)
                {
                    location.href="<?php echo base_url(); ?>hotel/add_entries?pn=3";
                }
            })
        }else{
            toastr.error('Please capture the photo to continue');
        }
    })
    
    function resetAll(ele)
    {
        $(ele).attr('disabled','disabled');
        $('#btnAadharClear').click();
        $('#btnPanClear').click();
        $('#btnVoterClear').click();
        $('#btnDlClear').click();
        $(ele).removeAttr('disabled');
    }
    
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
            html: "<div class='form-group mb-3'><h5>Capture guest photo to continue</h5></div><div class='row mx-0 d-md-none d-block'><div class='col-lg-6 col-sm-12 col-md-6 mt-3'><button type='button' class='btn btn-style-green btn-primary' onclick='openCamera()'>Open Camera <i class='fa fa-camera fa-spin'></i></button></div></div><div class='row mx-0 d-none d-md-flex'><div class='col-lg-6 col-sm-12 col-md-6 mt-3'><button type='button' style='width:max-content!important;' class='btn btn-style-green btn-primary' onclick='openFrontCamera()'>Open Front Camera <i class='fa fa-camera fa-spin'></i></button></div><div class='col-lg-6 col-sm-12 col-md-6 mt-3'><button type='button' style='width:max-content!important;' class='btn btn-style-green btn-primary' onclick='openBackCamera()'>Open Back Camera <i class='fa fa-camera fa-spin'></i></button></div></div>",
            showCloseButton: true,
            showCancelButton: false,
            focusConfirm: false,
            showConfirmButton:false,
        })   
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
            $.ajax({
                    url:'<?php echo base_url(); ?>hotel/checkEntry',
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
            $.ajax({
                url:'<?php echo base_url(); ?>hotel/checkEntry',
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
            $.ajax({
                url:'<?php echo base_url(); ?>hotel/checkEntry',
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
        }
    })
        
    function sendCheckOtp(ele)
    {
        location.href="<?php echo base_url(); ?>user/search_person_details?pn=3";
    }
    
    $('#step2CheckInactiveAadhar').click(function()
    {
        $('#step2CheckInactiveAadhar').attr('disabled','disabled');
        let data = new FormData();
        let idType = $('#inactiveIdType').val();
        let label = '';
        let count = 0;
        data.append('idType',$('#inactiveIdType').val());   
        if(idType == 'aadhar')
        {
            label = 'Aadhar Number';
            if($('#aadharInactiveNumber').val() != '')
            {
                count = 1;
                
                data.append('idNumber',$('#aadharInactiveNumber').val());   
            }
        }
        if(idType == 'voter')
        {
            label = 'Voter Id';
            if($('#inactiveVoterId').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#inactiveVoterId').val());
            }
        }
        if(idType == 'pan')
        {
            label = 'PAN Number';
            if($('#inactivePanNumber').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#inactivePanNumber').val());
            }
        }
        if(idType == 'dl')
        {
            label = 'Driving License Number';
            if($('#inactiveDlNumber').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#inactiveDlNumber').val());
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
                    $('#step2CheckInactiveAadhar').removeAttr('disabled');
                }else if(result.isDismissed)
                {
                    $('#step2CheckInactiveAadhar').removeAttr('disabled');
                }
            })
        }else{
            if($('#aadharMobileNumber').val() != '')
            {
                data.append('mobileNumber',$('#aadharMobileNumber').val());
                $.ajax({
                    url:'<?php echo base_url(); ?>hotel/checkInactiveEntry',
                    data:data,
                    processData:false,
                    cache:false,
                    contentType:false,
                    type:'post',
                    success:function(res)
                    {
                        let parse = JSON.parse(res);
                        let idType = $('#inactiveIdType').val();
                        if(parse.status == 'success')
                        {
                            
                        }
                        else{
                            toastr.error(parse.message);
                            $('#step2CheckInactiveAadhar').removeAttr('disabled');
                            $('#aadharInactiveNumber').attr('readonly',false);
                            $('#aadharMobileNumber').attr('readonly',false);
                        }
                    }
                })   
            }else{
                Swal.fire({
                    title: '<strong class="text-danger" style="font-size:20px;">Enter Mobile Number</strong>',
                    icon: 'error',
                    allowOutsideClick:false,
                    showCloseButton: true,
                    showCancelButton: false,
                    focusConfirm: false,
                    showConfirmButton:true
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#step2CheckInactiveAadhar').removeAttr('disabled');
                    }else if(result.isDismissed)
                    {
                        $('#step2CheckInactiveAadhar').removeAttr('disabled');
                    }
                })
            }
        }
    })
    
    $('#step2CheckInactiveDl').click(function()
    {
        $('#step2CheckInactiveDl').attr('disabled','disabled');
        let data = new FormData();
        let idType = $('#inactiveIdType').val();
        let label = '';
        let count = 0;
        data.append('idType',$('#inactiveIdType').val());   
        if(idType == 'aadhar')
        {
            label = 'Aadhar Number';
            if($('#aadharInactiveNumber').val() != '')
            {
                count = 1;
                
                data.append('idNumber',$('#aadharInactiveNumber').val());   
            }
        }
        if(idType == 'voter')
        {
            label = 'Voter Id';
            if($('#inactiveVoterId').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#inactiveVoterId').val());
            }
        }
        if(idType == 'pan')
        {
            label = 'PAN Number';
            if($('#inactivePanNumber').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#inactivePanNumber').val());
            }
        }
        if(idType == 'dl')
        {
            label = 'Driving License Number';
            if($('#inactiveDlNumber').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#inactiveDlNumber').val());
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
                    $('#step2CheckInactiveAadhar').removeAttr('disabled');
                }else if(result.isDismissed)
                {
                    $('#step2CheckInactiveAadhar').removeAttr('disabled');
                }
            })
        }else{
            if($('#dlMobileNumber').val() != '')
            {
                data.append('mobileNumber',$('#dlMobileNumber').val());
                $.ajax({
                    url:'<?php echo base_url(); ?>hotel/checkInactiveEntry',
                    data:data,
                    processData:false,
                    cache:false,
                    contentType:false,
                    type:'post',
                    success:function(res)
                    {
                        let parse = JSON.parse(res);
                        let idType = $('#inactiveIdType').val();
                        if(parse.status == 'success')
                        {
                             
                        }
                        else{
                            toastr.error(parse.message);
                            $('#step2CheckInactiveDl').removeAttr('disabled');
                            $('#inactiveDlNumber').attr('readonly',false);
                            $('#dlMobileNumber').attr('readonly',false);
                        }
                    }
                })   
            }else{
                Swal.fire({
                    title: '<strong class="text-danger" style="font-size:20px;">Enter Mobile Number</strong>',
                    icon: 'error',
                    allowOutsideClick:false,
                    showCloseButton: true,
                    showCancelButton: false,
                    focusConfirm: false,
                    showConfirmButton:true
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#step2CheckInactiveDl').removeAttr('disabled');
                    }else if(result.isDismissed)
                    {
                        $('#step2CheckInactiveDl').removeAttr('disabled');
                    }
                })
            }
        }
    })
    
    $('#step2CheckInactiveVoter').click(function()
    {
        $('#step2CheckInactiveVoter').attr('disabled','disabled');
        let data = new FormData();
        let idType = $('#inactiveIdType').val();
        let label = '';
        let count = 0;
        data.append('idType',$('#inactiveIdType').val());   
        if(idType == 'aadhar')
        {
            label = 'Aadhar Number';
            if($('#aadharInactiveNumber').val() != '')
            {
                count = 1;
                
                data.append('idNumber',$('#aadharInactiveNumber').val());   
            }
        }
        if(idType == 'voter')
        {
            label = 'Voter Id';
            if($('#inactiveVoterId').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#inactiveVoterId').val());
            }
        }
        if(idType == 'pan')
        {
            label = 'PAN Number';
            if($('#inactivePanNumber').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#inactivePanNumber').val());
            }
        }
        if(idType == 'dl')
        {
            label = 'Driving License Number';
            if($('#inactiveDlNumber').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#inactiveDlNumber').val());
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
                    $('#step2CheckInactiveVoter').removeAttr('disabled');
                }else if(result.isDismissed)
                {
                    $('#step2CheckInactiveVoter').removeAttr('disabled');
                }
            })
        }else{
            if($('#voterMobileNumber').val() != '')
            {
                data.append('mobileNumber',$('#voterMobileNumber').val());
                $.ajax({
                    url:'<?php echo base_url(); ?>hotel/checkInactiveEntry',
                    data:data,
                    processData:false,
                    cache:false,
                    contentType:false,
                    type:'post',
                    success:function(res)
                    {
                        let parse = JSON.parse(res);
                        let idType = $('#inactiveIdType').val();
                        if(parse.status == 'success')
                        {
                             
                        }
                        else{
                            toastr.error(parse.message);
                            $('#step2CheckInactiveVoter').removeAttr('disabled');
                            $('#inactiveVoterId').attr('readonly',false);
                            $('#voterMobileNumber').attr('readonly',false);
                        }
                    }
                })   
            }else{
                Swal.fire({
                    title: '<strong class="text-danger" style="font-size:20px;">Enter Mobile Number</strong>',
                    icon: 'error',
                    allowOutsideClick:false,
                    showCloseButton: true,
                    showCancelButton: false,
                    focusConfirm: false,
                    showConfirmButton:true
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#step2CheckInactiveVoter').removeAttr('disabled');
                    }else if(result.isDismissed)
                    {
                        $('#step2CheckInactiveVoter').removeAttr('disabled');
                    }
                })
            }
        }
    })
    
    $('#step2CheckInactivePan').click(function()
    {
        $('#step2CheckInactivePan').attr('disabled','disabled');
        let data = new FormData();
        let idType = $('#inactiveIdType').val();
        let label = '';
        let count = 0;
        data.append('idType',$('#inactiveIdType').val());   
        if(idType == 'aadhar')
        {
            label = 'Aadhar Number';
            if($('#aadharInactiveNumber').val() != '')
            {
                count = 1;
                
                data.append('idNumber',$('#aadharInactiveNumber').val());   
            }
        }
        if(idType == 'voter')
        {
            label = 'Voter Id';
            if($('#inactiveVoterId').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#inactiveVoterId').val());
            }
        }
        if(idType == 'pan')
        {
            label = 'PAN Number';
            if($('#inactivePanNumber').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#inactivePanNumber').val());
            }
        }
        if(idType == 'dl')
        {
            label = 'Driving License Number';
            if($('#inactiveDlNumber').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#inactiveDlNumber').val());
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
                    $('#step2CheckInactivePan').removeAttr('disabled');
                }else if(result.isDismissed)
                {
                    $('#step2CheckInactivePan').removeAttr('disabled');
                }
            })
        }else{
            if($('#panMobileNumber').val() != '')
            {
                data.append('mobileNumber',$('#panMobileNumber').val());
                $.ajax({
                    url:'<?php echo base_url(); ?>hotel/checkInactiveEntry',
                    data:data,
                    processData:false,
                    cache:false,
                    contentType:false,
                    type:'post',
                    success:function(res)
                    {
                        let parse = JSON.parse(res);
                        let idType = $('#inactiveIdType').val();
                        if(parse.status == 'success')
                        {
                             
                        }
                        else{
                            toastr.error(parse.message);
                            $('#step2CheckInactivePan').removeAttr('disabled');
                            $('#inactivePanNumber').attr('readonly',false);
                            $('#panMobileNumber').attr('readonly',false);
                        }
                    }
                })   
            }else{
                Swal.fire({
                    title: '<strong class="text-danger" style="font-size:20px;">Enter Mobile Number</strong>',
                    icon: 'error',
                    allowOutsideClick:false,
                    showCloseButton: true,
                    showCancelButton: false,
                    focusConfirm: false,
                    showConfirmButton:true
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#step2CheckInactivePan').removeAttr('disabled');
                    }else if(result.isDismissed)
                    {
                        $('#step2CheckInactivePan').removeAttr('disabled');
                    }
                })
            }
        }
    })
    
    $('#btnDlInactiveClear').click(function()
    {
        $('#step3Form')[0].reset();
        $('#step2CheckInactiveAadhar').removeAttr('disabled');
        $('#step2CheckInactiveDl').removeAttr('disabled');
        $('#step2CheckInactiveVoter').removeAttr('disabled');
        $('#step2CheckInactivePan').removeAttr('disabled');
        $('#aadharInactiveNumber').attr('readonly',false);
        $('#inactiveDlNumber').attr('readonly',false);
        $('#inactivePanNumber').attr('readonly',false);
        $('#inactiveVoterId').attr('readonly',false);
        $('#inactiveIdTypeDiv').removeClass('d-none');
        $('#inactiveAadharIdentity').addClass('d-none');
        $('#inactivePanNumber').removeAttr('name');
        $('#inactiveVoterId').removeAttr('name');
        $('#inactiveDlNumber').removeAttr('name');
        $('#aadharInactiveNumber').removeAttr('name');
        
        $('#aadharInactiveNumber').attr('required',false);
        $('#inactiveVoterIdentity').addClass('d-none');
        $('#inactiveVoterId').attr('required',false);
        $('#inactivePanIdentity').addClass('d-none');
        $('#inactivePanNumber').attr('required',false);
        $('#inactiveDlIdentity').addClass('d-none');
        $('#inactiveDlNumber').attr('required',false);
    })
    
    $('#btnVoterInactiveClear').click(function()
    {
        $('#step3Form')[0].reset();
        $('#step2CheckInactiveAadhar').removeAttr('disabled');
        $('#step2CheckInactiveDl').removeAttr('disabled');
        $('#step2CheckInactiveVoter').removeAttr('disabled');
        $('#step2CheckInactivePan').removeAttr('disabled');
        $('#aadharInactiveNumber').attr('readonly',false);
        $('#inactiveDlNumber').attr('readonly',false);
        $('#inactivePanNumber').attr('readonly',false);
        $('#inactiveVoterId').attr('readonly',false);
        $('#inactiveIdTypeDiv').removeClass('d-none');
        $('#inactiveAadharIdentity').addClass('d-none');
        $('#inactivePanNumber').removeAttr('name');
        $('#inactiveVoterId').removeAttr('name');
        $('#inactiveDlNumber').removeAttr('name');
        $('#aadharInactiveNumber').removeAttr('name');
        
        $('#aadharInactiveNumber').attr('required',false);
        $('#inactiveVoterIdentity').addClass('d-none');
        $('#inactiveVoterId').attr('required',false);
        $('#inactivePanIdentity').addClass('d-none');
        $('#inactivePanNumber').attr('required',false);
        $('#inactiveDlIdentity').addClass('d-none');
        $('#inactiveDlNumber').attr('required',false);
    })
    
    $('#btnAadharInactiveClear').click(function()
    {
        $('#step3Form')[0].reset();
        $('#step2CheckInactiveAadhar').removeAttr('disabled');
        $('#step2CheckInactiveDl').removeAttr('disabled');
        $('#step2CheckInactiveVoter').removeAttr('disabled');
        $('#step2CheckInactivePan').removeAttr('disabled');
        $('#aadharInactiveNumber').attr('readonly',false);
        $('#inactiveDlNumber').attr('readonly',false);
        $('#inactivePanNumber').attr('readonly',false);
        $('#inactiveVoterId').attr('readonly',false);
        $('#inactiveIdTypeDiv').removeClass('d-none');
        $('#inactiveAadharIdentity').addClass('d-none');
        $('#inactivePanNumber').removeAttr('name');
        $('#inactiveVoterId').removeAttr('name');
        $('#inactiveDlNumber').removeAttr('name');
        $('#aadharInactiveNumber').removeAttr('name');
        
        $('#aadharInactiveNumber').attr('required',false);
        $('#inactiveVoterIdentity').addClass('d-none');
        $('#inactiveVoterId').attr('required',false);
        $('#inactivePanIdentity').addClass('d-none');
        $('#inactivePanNumber').attr('required',false);
        $('#inactiveDlIdentity').addClass('d-none');
        $('#inactiveDlNumber').attr('required',false);
    })
    
    $('#btnPanInactiveClear').click(function()
    {
        $('#step3Form')[0].reset();
        $('#step2CheckInactiveAadhar').removeAttr('disabled');
        $('#step2CheckInactiveDl').removeAttr('disabled');
        $('#step2CheckInactiveVoter').removeAttr('disabled');
        $('#step2CheckInactivePan').removeAttr('disabled');
        $('#aadharInactiveNumber').attr('readonly',false);
        $('#inactiveDlNumber').attr('readonly',false);
        $('#inactivePanNumber').attr('readonly',false);
        $('#inactiveVoterId').attr('readonly',false);
        $('#inactiveIdTypeDiv').removeClass('d-none');
        $('#inactiveAadharIdentity').addClass('d-none');
        $('#inactivePanNumber').removeAttr('name');
        $('#inactiveVoterId').removeAttr('name');
        $('#inactiveDlNumber').removeAttr('name');
        $('#aadharInactiveNumber').removeAttr('name');
        
        $('#aadharInactiveNumber').attr('required',false);
        $('#inactiveVoterIdentity').addClass('d-none');
        $('#inactiveVoterId').attr('required',false);
        $('#inactivePanIdentity').addClass('d-none');
        $('#inactivePanNumber').attr('required',false);
        $('#inactiveDlIdentity').addClass('d-none');
        $('#inactiveDlNumber').attr('required',false);
    })
    
    function showInactiveInputAccordingly(val)
    {
        if(val == '')
        {
            $('#inactiveAadharIdentity').addClass('d-none');
            
            $('#inactivePanNumber').removeAttr('name');
            $('#inactiveVoterId').removeAttr('name');
            $('#inactiveDlNumber').removeAttr('name');
            $('#aadharInactiveNumber').removeAttr('name');
            
            $('#aadharInactiveNumber').attr('required',false);
            $('#inactiveVoterIdentity').addClass('d-none');
            $('#inactiveVoterId').attr('required',false);
            $('#inactivePanIdentity').addClass('d-none');
            $('#inactivePanNumber').attr('required',false);
            $('#inactiveDlIdentity').addClass('d-none');
            $('#inactiveDlNumber').attr('required',false);
        }
        if(val == 'aadhar')
        {
            $('#inactiveAadharIdentity').removeClass('d-none');
            
            $('#inactivePanNumber').removeAttr('name');
            $('#inactiveVoterId').removeAttr('name');
            $('#inactiveDlNumber').removeAttr('name');
            $('#aadharInactiveNumber').attr('name','inactiveAadhar_id');
            
            $('#aadharInactiveNumber').attr('required',true);
            $('#inactiveVoterIdentity').addClass('d-none');
            $('#inactiveVoterId').attr('required',false);
            $('#inactivePanIdentity').addClass('d-none');
            $('#inactivePanNumber').attr('required',false);
            $('#inactiveDlIdentity').addClass('d-none');
            $('#inactiveDlNumber').attr('required',false);
        }
        if(val == 'voter')
        {
            $('#inactiveAadharIdentity').addClass('d-none');
            
            $('#inactivePanNumber').removeAttr('name');
            $('#inactiveVoterId').attr('name','inactiveVoterId');
            $('#inactiveDlNumber').removeAttr('name');
            $('#aadharInactiveNumber').removeAttr('name');
            
            $('#aadharInactiveNumber').attr('required',false);
            $('#inactiveVoterIdentity').removeClass('d-none');
            $('#inactiveVoterId').attr('required',true);
            $('#inactivePanIdentity').addClass('d-none');
            $('#inactivePanNumber').attr('required',false);
            $('#inactiveDlIdentity').addClass('d-none');
            $('#inactiveDlNumber').attr('required',false);
        }
        if(val == 'pan')
        {
            $('#inactivePanNumber').attr('name','inactivePanNumber');
            $('#inactiveVoterId').removeAttr('name');
            $('#inactiveDlNumber').removeAttr('name');
            $('#aadharInactiveNumber').removeAttr('name');
            
            $('#inactiveAadharIdentity').addClass('d-none');
            $('#aadharInactiveNumber').attr('required',true);
            $('#inactiveVoterIdentity').addClass('d-none');
            $('#inactiveVoterId').attr('required',false);
            $('#inactivePanIdentity').removeClass('d-none');
            $('#inactivePanNumber').attr('required',true);
            $('#inactiveDlIdentity').addClass('d-none');
            $('#inactiveDlNumber').attr('required',false);
        }
        if(val == 'dl')
        {
            $('#inactivePanNumber').removeAttr('name');
            $('#inactiveVoterId').removeAttr('name');
            $('#dlNumber').attr('name','inactiveDlNumber');
            $('#aadharInactiveNumber').removeAttr('name');
            
            $('#inactiveAadharIdentity').addClass('d-none');
            $('#aadharInactiveNumber').attr('required',true);
            $('#inactiveVoterIdentity').addClass('d-none');
            $('#inactiveVoterId').attr('required',false);
            $('#inactivePanIdentity').addClass('d-none');
            $('#inactivePanNumber').attr('required',false);
            $('#inactiveDlIdentity').removeClass('d-none');
            $('#inactiveDlNumber').attr('required',true);
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
    
    function redirectToStep2(ele)
    {
        $(ele).attr('disabled','disabled');
        $.ajax({
            url:'<?php echo base_url(); ?>hotel/saveGuest',
            type:'get',
            success:function(res)
            {
                let parse = JSON.parse(res);
                Swal.fire({
                    title: '<strong class="text-dark" style="font-size:20px;">Guest Entry Uploaded Sucessfully</strong>',
                    icon: 'success',
                    allowOutsideClick:false,
                    showCloseButton: true,
                    showCancelButton: false,
                    focusConfirm: false,
                    showConfirmButton:true
                }).then((result) => {
                    let typeval = $('#typeVal').val();
                    $('#childModal').modal('hide');
                    $('#step2CheckAadhar').removeAttr('disabled');
                    $('#step2CheckPan').removeAttr('disabled');
                    $('#step2CheckVoter').removeAttr('disabled');
                    $('#step2CheckDl').removeAttr('disabled');
                    if(typeval == 'child')
                    {
                        let length = ($('#childBody tr').length + 1);
                        $('#childBody').append('<tr><td>'+length+'</td><td>'+parse.idNumber+'</td><td>'+parse.personName+'</td><td><button type="button" class="btn btn-danger disabled-on-loading" style="background:white!important;color:red!important;" onclick="removeMember(`child`,'+length+',this,'+parse.id+')"> <i class="fa fa-times"></i></button></td></tr>');
                    }else{
                        let length = ($('#adultBody tr').length + 1);
                        $('#adultBody').append('<tr><td>'+length+'</td><td>'+parse.idNumber+'</td><td>'+parse.personName+'</td><td><button type="button" class="btn btn-danger disabled-on-loading" style="background:white!important;color:red!important;" onclick="removeMember(`adult`,'+length+',this,'+parse.id+')"> <i class="fa fa-times"></i></button></td></tr>');
                    }
                })
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
                                if(type == 'child')
                                {
                                    $('#childBody tr').eq(index - 1).remove();   
                                }else{
                                    $('#adultBody tr').eq(index - 1).remove();
                                }
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
                                if(type == 'child')
                                {
                                    $('#childBody tr').eq(index - 1).remove();   
                                }else{
                                    $('#adultBody tr').eq(index - 1).remove();
                                }
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
            if(val.length == 10)
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
    
    function verifyOtp(ele)
    {
        let otp= $('#otptext').val();
        if(otp == '')
        {
            toastr.error('Please Enter OTP');
        }else{
            let data= new FormData();
            data.append('otp', otp);
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
                            $('#adultBody').append('<tr><td>'+length+'</td><td>'+parse.idType+'</td><td>'+parse.idNumber+'</td><td class="'+(parse.isMissing ? 'text-danger' : 'text-success')+'"><b>'+parse.personName+'</b></td><td>'+parse.gender+'</td><td>'+parse.room+'</td><td><button type="button" class="btn btn-danger disabled-on-loading" style="background:white!important;color:red!important;" onclick="removeMember(`adult`,'+length+',this,'+parse.id+')"> <i class="fa fa-times"></i></button></td></tr>');
                        })   
                    }else{
                        toastr.error(parse.message);
                        $(ele).removeAttr('disabled');
                    }
                }
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
                                let length = ($('#childBody tr').length + 1);
                                $('#childBody').append('<tr><td>'+length+'</td><td>'+parse.personName+'</td><td>'+parse.personAge+'</td><td>'+parse.personGender+'</td><td>'+parse.roomNumber+'</td><td><button type="button" class="btn btn-danger disabled-on-loading" style="background:white!important;color:red!important;" onclick="removeMember(`child`,'+length+',this,'+parse.id+')"> <i class="fa fa-times"></i></button></td></tr>');
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
        
    function showAccordingly()
    {
        let choice = $('input[name="type"]:checked').val();   
        if(choice == undefined)
        {
            toastr.error('Please Select Choice');
        }else{
            if(choice == 2)
            {
                location.href="<?php echo base_url(); ?>hotel/add_entries?pn="+choice;      
            }else{
                openCameraPopup();
            }
        }
    }
    
    function showNonHolderDiv(){
        $('#addNonHolderDiv').show();
    }
  </script>