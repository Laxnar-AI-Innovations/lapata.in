<?php 
    if($pn == 1)
    {
        unset($_SESSION['funnelFamId']);
    }
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    div:where(.swal2-container) div:where(.swal2-popup){
            width:auto;
        }
    @media screen and (max-width:525px)
    {
        .familyPopup{
            margin:0!important;
            overflow: hidden;
        }
    }

    @media screen and (min-width:526px)
    {
        .familyPopup{
            margin: 0 1rem!important;
            overflow: hidden;
        }
    }

    #swal2-html-container:not('.familyPopup'){
        margin: 0 1rem!important;
    }
    .form-check-input{
        height: 1.5em;
        width: 1.5em;
    }
.input-border-red{
        border:3px solid red!important;
    }
.input-border{
        border:3px solid green!important;
    }
    
    .form-control:focus {
        color: #212529;
        background-color: #fff;
         border-color: black !important; 
        outline: 0;
        box-shadow: 0 0 0 0 !important;
    }
    
    .input-border-black{
        border:3px solid black!important;
    }
    div:where(.swal2-container) div:where(.swal2-popup){
        width:auto;
    }
    .checkbox-custom, .radio-custom {
        opacity: 0;
        position: absolute;   
    }
    
    .checkbox-custom, .checkbox-custom-label, .radio-custom, .radio-custom-label {
        display: inline-block;
        vertical-align: middle;
        margin: 5px;
        cursor: pointer;
    }
    
    .activeLabel{
            background-color: #ffc107;
            padding: 16px;
            border-radius: 30px;
            font-weight:bold;
        }
    
    .checkbox-custom-label, .radio-custom-label {
        position: relative;
    }
    
    .checkbox-custom + .checkbox-custom-label:before, .radio-custom + .radio-custom-label:before {
        content: '';
        background: #fff;
        border: 2px solid #ddd;
        display: inline-block;
        vertical-align: middle;
        width: 22px;
        height: 22px;
        padding-bottom: 22px;
        margin-right: 10px;
        text-align: center;
    }
    
    .checkbox-custom:checked + .checkbox-custom-label:before {
        content: "\f00c";
        font-family: 'FontAwesome';
        background: rebeccapurple;
        color: #fff;
    }
    
    .radio-custom + .radio-custom-label:before {
        border-radius: 50%;
    }
    
    .radio-custom:checked + .radio-custom-label:before {
        content: "\f00c";
        font-family: 'FontAwesome';
        color: green;
    }
    .word {
        max-width: 350px;
        overflow-wrap: break-word;  
        word-wrap: break-word; 
        word-break: break-word;
    }
    
    @media screen and (max-width:525px)
    {
        .word {
            width: 100%;
            overflow-wrap: break-word;  
            word-wrap: break-word; 
            word-break: break-word;
        }   
    }
    
    div:where(.swal2-container) div:where(.swal2-popup){
        width:auto;
    }
    #swal2-html-container{
        margin: 0 1rem!important;
    }
    .form-label{
        color:black;
    }
    .lapataTitle{
        margin-top:1.5rem;
        padding:1rem 0rem;
    }
    select[disabled]{
        appearance:none!important;
    }
    .select2-container{
        width:-webkit-fill-available!important;
    }
    .form-floating label{
        font-weight:bold;
        opacity:1!important;
    }
    .social a.btn-circle .btn-google {
                color: #fff;
                background-color: #e44134;
                border-color: transparent;
            }
            .btn-police1{
                 color: #fff!important;
                background-color: green!important;
                border-color: transparent;
            }
             .btn-police2{
                 color: #fff!important;
                background-color: #e44134!important;
                border-color: transparent;
            }
             .btn-police3{
                 color: #fff!important;
                background-color: #5daed5!important;
                border-color: transparent;
            }
             .btn-police4{
                 color: #fff!important;
                background-color: orange!important;
                border-color: transparent;
            }
            .btn-group-sm>.btn.btn-circle, .btn.btn-circle.btn-sm {
                    width: 2.8rem;
                    height: 2.8rem;
                    font-size: .8rem;
                }
                .btn.btn-circle {
                    padding: 0;
                    border-radius: 100%!important;
                    width: 2.2rem;
                    height: 2.2rem;
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                    font-size: 1rem;
                    line-height: 1;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                    margin-right:2px;
                }
                .btn:hover {
color: var(--bs-btn-hover-color);
background-color: var(--bs-btn-hover-bg);
border-color: var(--bs-btn-hover-border-color);
}
</style>
<style>
    #the-count {
      float: right;
      padding: 0.1rem 0 0 0;
      font-size: 0.875rem;
    }
    .select2-results__option{
        text-transform:uppercase;
    }
    select{
        appearance:auto!important;
    }
</style>
<?php 
    $getProfileDetail = $this->db->query('select * from user where uid='.$_SESSION['user_id'])->result_array();
?>
<div id="uploadimageModal" style="z-index:1111;" class="modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn btn-danger close1 me-2" data-dismiss="modal" style="color:white;">&times;</button>
                <h4 class="modal-title" style="font-size:1.2rem;">Face photo is compulsory to find lapata person</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12 text-center">
                        <div id="image_demo" style="width:100%; margin-top:30px"></div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-12 text-center">
                        <button type="button" class="btn btn-success crop_image disabled-on-loading btn-style-green"> Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<main id="main" class="main px-0">
    <div class="container-fluid px-0">
        <section class="section register d-flex flex-column align-items-center justify-content-center">
            <div class="container">
                <div class="row justify-content-center mx-0">
                    <div class="col-lg-12 col-md-12 d-flex flex-column align-items-center justify-content-center <?php if($pn != 1){ echo "d-none"; } ?>">
                        <div class="card mb-3 w-100">
                            <div class="card-body px-1 p-3 mt-0">
                                <div class="row pt-0 pb-0 justify-content-start justify-content-md-between" style="align-items:center;">
                                    <div class="col-12 col-md-6 my-3">
                                        <h6 class="card-title py-0 mb-0 fs-5 text-center text-md-start">Add Person Details <i class="fa fa-user-plus"></i></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php 
                            $well1 = NULL;
                            $well2 = NULL;
                            $well3 = NULL;
                            $profileDetail = $this->db->query('select * from nonKycUser where uid='.$_SESSION['user_id'])->result_array();
                            if($_SESSION['loginmob'] == $profileDetail[0]['registration_mobile'])
                            {
                                $well1 = $profileDetail[0]['registration_mobile'];
                                if($profileDetail[0]['alternate_mobile1'] != NULL)
                                {
                                    $well2 = $profileDetail[0]['alternate_mobile1'];
                                }else{
                                    if($profileDetail[0]['alternate_mobile2'] != NULL)
                                    {
                                        $well2 = $profileDetail[0]['alternate_mobile2'];
                                    }else{
                                        if($profileDetail[0]['alternate_mobile3'] != NULL)
                                        {
                                            $well2 = $profileDetail[0]['alternate_mobile3'];
                                        }
                                    }
                                }
                                if($well2 != NULL)
                                {
                                    if($profileDetail[0]['alternate_mobile1'] != NULL)
                                    {
                                    }else{
                                        if($profileDetail[0]['alternate_mobile2'] != NULL)
                                        {
                                            $well3 = $profileDetail[0]['alternate_mobile2'];
                                        }else{
                                            if($profileDetail[0]['alternate_mobile3'] != NULL)
                                            {
                                                $well3 = $profileDetail[0]['alternate_mobile3'];
                                            }
                                        }
                                    }
                                }
                            }else{
                                if($_SESSION['loginmob'] == $profileDetail[0]['alternate_mobile1'])
                                {
                                    $well1 = $profileDetail[0]['alternate_mobile1'];
                                    $well2 = $profileDetail[0]['registration_mobile'];
                                    if($profileDetail[0]['alternate_mobile2'] != NULL)
                                    {
                                        $well3 = $profileDetail[0]['alternate_mobile2'];
                                    }else{
                                        if($profileDetail[0]['alternate_mobile3'] != NULL)
                                        {
                                            $well3 = $profileDetail[0]['alternate_mobile3'];
                                        }
                                    }
                                }else{
                                    if($_SESSION['loginmob'] == $profileDetail[0]['alternate_mobile2'])
                                    {
                                        $well1 = $profileDetail[0]['alternate_mobile2'];
                                        $well2 = $profileDetail[0]['registration_mobile'];
                                        if($profileDetail[0]['alternate_mobile1'] != NULL)
                                        {
                                            $well3 = $profileDetail[0]['alternate_mobile1'];
                                        }else{
                                            if($profileDetail[0]['alternate_mobile3'] != NULL)
                                            {
                                                $well3 = $profileDetail[0]['alternate_mobile3'];
                                            }
                                        }
                                    }else{
                                        if($_SESSION['loginmob'] == $profileDetail[0]['alternate_mobile3'])
                                        {
                                            $well1 = $profileDetail[0]['alternate_mobile3'];
                                            $well2 = $profileDetail[0]['registration_mobile'];
                                            if($profileDetail[0]['alternate_mobile1'] != NULL)
                                            {
                                                $well3 = $profileDetail[0]['alternate_mobile1'];
                                            }else{
                                                if($profileDetail[0]['alternate_mobile2'] != NULL)
                                                {
                                                    $well3 = $profileDetail[0]['alternate_mobile2'];
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        ?>
                        <form id="loginForm" action="<?php echo base_url(); ?>NonKyc/postFamilyFunnelMember" method="post" class="row g-3 w-100 needs-validation1"  enctype="multipart/form-data">
                            <?php 
                                $csrf = array(
                                    'name' => $this->security->get_csrf_token_name(),
                                    'hash' => $this->security->get_csrf_hash()
                                );
                            ?>
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <input type="hidden" name="id" id="oldId" value="">
                            <div class="card">
                                <div class="hiddendiv">
                                    <div class="row align-items-center p-3">
                                        <?php 
                                            $getRelations = $this->db->query('select * from familyRelations')->result_array();
                                        ?>
                                        <div class="col-lg-3 col-md-3 col-sm-12 mb-2" id="rel1Div">
                                            <label class="form-label"><b>Your relation with family member <b class="text-danger">*</b></b></label>
                                            <select class="form-control select2" onchange="showAccordingly(this.value)" name="otherrelation" id="otherrelation" required>
                                                <?php 
                                                    if(count($getRelations) > 0)
                                                    {
                                                ?>
                                                <option value="">Select Relation</option>
                                                <?php 
                                                    foreach($getRelations as $k=>$v)
                                                    {
                                                ?>
                                                <option value="<?php echo $v['Id']; ?>"><?php echo $v['relationName']; ?></option>
                                                <?php } } ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-auto col-md-auto col-sm-12 mb-2 d-none" id="otherrelationdiv">
                                            <label class="form-label">Enter Other Relation</label>
                                            <div class="input-group">
                                                <input type="text" aria-describedby="otherClear" class="form-control" placeholder="Enter Other Relation" name="otherrelationname" id="otherrelationname">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" style="border-radius:0;padding:0.7rem;background:white;cursor:pointer;" onclick="clearOtherDivFirst()" id="otherClear"><i class="fa fa-times"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating mt-3 col-12 col-md-3">
                                          <input type="text" class="form-control" name="person_name"   id="person_name"  placeholder="Aadhar Number">
                                          <label for="pkgdur" class="ms-2">Name <b class="text-danger">*</b></label>
                                        </div>
                                        <div class="form-floating mt-3 col-12 col-md-auto">
                                            <select class="form-control" name="Gender" id="Gender" >
                                                <option value="">Select Gender </option>
                                                <option value="Male">Male </option>
                                                <option value="Female">Female </option>
                                                <option value="Other">Other </option>
                                            </select>
                                            <label for="Gender" class="ms-2">Gender <b class="text-danger">*</b></label>     
                                            <input type="hidden" class="Gender">
                                        </div>
                                        <div class="form-floating col-12 col-md-auto position-relative">
                                            <label style="margin-left:0.8rem;">Select DOB</label>
                                            <input type="date" class="form-control mt-2 custom-date-input" id="dob" name="dob" onchange="getAgeBand(this.value)" max="<?= date('Y-m-d') ?>">
                                            <img src="<?= base_url(); ?>assets/img/calendaricon.jpg" alt="Calendar Icon" style="position: absolute; top: 42%; right: 1.5rem; cursor: pointer;width:25px;height:25px;" onclick="document.getElementById('dob').showPicker()">
                                        </div>
                                        <div class="form-floating col-12 col-md-1 d-none ageDiv">
                                            <label style="margin-left:0.8rem;">Age</label>
                                            <input type="text" class="form-control mt-2" readonly id="Age" name="Age">
                                        </div>
                                        <div class="form-floating mt-3 col-12 col-md-auto d-none">
                                            <select style="pointer-events:none;background:lightgrey;opacity:0.7" class="form-control" name="AgeBand" id="ageBand">
                                                <option value="">Select Age Band</option>
                                                <?php 
                                                    $state = $this->db->query('SELECT * FROM ageBands')->result_array();
                                                    if(count($state)>0)
                                                    {
                                                        foreach($state as $row)
                                                        {
                                                        ?>
                
                                                            <option value="<?php echo $row['ageBand'] ?>"><?php echo $row['ageBand']?></option>
                                                        <?php
                                                        }
                                                    }
                                                    else
                                                    {
                                                        ?>
                
                                                        <option value="no">No Found Age Bands</option>
                                                    <?php
                                                    }
                                                ?>
                                            </select>
                                            <label for="Age"class="ms-3">Age Band *</label>          
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3 w-100">
                                <div class="row align-items-center accordion" id="identificationAccordion">
                                    <div class="accordion-item px-0">
                                        <h2 class="accordion-header" id="identificationHeading">
                                            <a class="accordion-button collapsed py-0" type="button" data-bs-toggle="collapse" data-bs-target="#identificationChild" aria-expanded="false" aria-controls="identificationChild">
                                                <b style="font-size: 0.91rem;font-weight:bolder;">Add Other Identities <img src="<?= base_url(); ?>assets/img/identitycard.png" style="width: 50px;height: 50px;"></b>
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="identificationChild" class="accordion-collapse collapse" aria-labelledby="identificationHeading" data-bs-parent="#identificationAccordion">
                                        <div class="accordion-body row align-items-center">
                                            <div class="card-body mt-0">
                                                <div class="row align-items-center ">
                                                    <div class="form-floating my-3 col-12 col-md-3">
                                                        <input type="text" class="form-control text-uppercase" name="aadhar_id" maxlength="12"  id="aadhar_id">
                                                        <label for="aadhar_id" class="ms-3">Aadhar No.</label>
                                                    </div>
                                                    <div class="form-floating my-3 col-12 col-md-3">
                                                        <input type="text" class="form-control text-uppercase" name="PAN" maxlength="10"  id="PAN">
                                                        <label for="PAN" class="ms-3">PAN No.</label>
                                                    </div>
                                                    <div class="form-floating my-3 col-12 col-md-3">
                                                        <input type="text" class="form-control text-uppercase" name="DL_no" maxlength="15"  id="DL_no">
                                                        <label for="DL_no" class="ms-3">DL No.</label>
                                                    </div>
                                                    <div class="form-floating my-3 col-12 col-md-3">
                                                        <input type="text" class="form-control text-uppercase" name="voter_id"   id="voter_id">
                                                        <label for="voter_id" class="ms-3">Voter ID No.</label>
                                                    </div>
                                                    <!--<div class="form-floating my-3 col-12 col-md-3">-->
                                                    <!--    <input type="text" class="form-control" name="HUID"   id="HUID"  placeholder="Aadhar Number">-->
                                                    <!--    <label for="pkgdur" class="ms-3">Gold HUID No.</label>-->
                                                    <!--</div>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3 w-100">
                                <div class="row align-items-center accordion" id="vehicleAccordion">
                                    <div class="accordion-item px-0">
                                        <h2 class="accordion-header" id="vehicleHeading">
                                            <a class="accordion-button collapsed text-center" type="button" data-bs-toggle="collapse" data-bs-target="#vehicleChild" aria-expanded="false" aria-controls="vehicleChild">
                                                <b style="font-size: 0.91rem;font-weight:bolder;display: flex;align-items: center;">Add Vehicle Number <i class="fa fa-car fa-2x ms-2"></i></b>
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="vehicleChild" class="accordion-collapse collapse" aria-labelledby="vehicleHeading" data-bs-parent="#vehicleAccordion">
                                        <div class="accordion-body row align-items-center">
                                            <div class="card-body mt-0 pb-0" id="vehicleDetail">
                                                <input type="hidden" id="vehicleCount" name="vehicleCount">
                                            </div>
                                            <div class="card-footer d-none py-0 pt-3" style="cursor: pointer;" id="addMoreVehicleDiv">
                                                <div class="row text-success justify-content-center align-items-center" id="addMoreVehicle" onclick="addMoreVehicle()">
                                                    <div class="col-md-5 text-end col-auto">
                                                        <b><i class="fa fa-plus"></i></b>
                                                    </div>
                                                    <div class="col-md-7 col-auto text-start">
                                                        <b><h6 class="text-start mb-0">Add Vehicle Number</h6></b>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3 w-100">
                                <div class="row align-items-center accordion" id="goldAccordion">
                                    <div class="accordion-item px-0">
                                        <h2 class="accordion-header" id="goldHeading">
                                            <a class="accordion-button collapsed py-0 text-center" type="button" data-bs-toggle="collapse" data-bs-target="#goldChild" aria-expanded="false" aria-controls="goldChild">
                                                <b style="font-size: 0.91rem;font-weight:bolder;">Add Gold HUID Number <img src="<?= base_url(); ?>assets/images/bangle.png" style="width: 50px;height: 50px;"></b>
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="goldChild" class="accordion-collapse collapse" aria-labelledby="goldHeading" data-bs-parent="#goldAccordion">
                                        <div class="accordion-body row align-items-center">
                                            <div class="card-body mt-0 pb-0" id="goldDetail">
                                                <input type="hidden" id="goldCount" name="goldCount">
                                            </div>
                                            <div class="card-footer d-none py-0 pt-3" style="cursor: pointer;" id="addMoreDiv">
                                                <div class="row text-success justify-content-center align-items-center" id="addMore" onclick="addMoreGold()">
                                                    <div class="col-md-5 col-auto text-end">
                                                        <b><i class="fa fa-plus"></i></b>
                                                    </div>
                                                    <div class="col-md-7 col-auto text-start">
                                                        <b><h6 class="text-start mb-0">Add Gold HUID Number</h6></b>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3 w-100">
                                <div class="row align-items-center accordion" id="addressAccordion">
                                    <div class="accordion-item px-0">
                                        <h2 class="accordion-header" id="addressHeading">
                                            <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#addressChild" aria-expanded="false" aria-controls="addressChild">
                                                <b style="font-size: 0.91rem;font-weight:bolder;">Add Address <i class="fa fa-map-marker" style="font-size: 1.4rem;"></i></b>
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="addressChild" class="accordion-collapse collapse" aria-labelledby="addressHeading" data-bs-parent="#addressAccordion">
                                        <div class="accordion-body row align-items-center">
                                            <div class="card-body mt-0 pb-0">
                                                <div class="row align-items-center justify-content-center">
                                                    <div class="mb-3 col-12 col-md-4">
                                                        <label class="mb-2 d-block">State </label>
                                                        <select class="form-control select2" name="state" id="state" onchange="getdistrict(this.value);" >
                                                        <option value="">Select State </option>
                                                        <?php 
                                                            $state = $this->db->query('select * from states')->result_array();
                                                            if(count($state)>0)
                                                            {
                                                                foreach($state as $row)
                                                                {
                                                                ?>
                            
                                                                    <option value="<?php echo $row['name'] ?>"><?php echo $row['name']?></option>
                                                                <?php
                                                                }
                                                                
                                                            }
                                                            else
                                                            {
                                                                ?>
                            
                                                                <option value="no">No Found State</option>
                                                            <?php
                                                            }
                                                        ?>
                                                         
                                                        </select>
                                                        <div class="invalid-feedback">Please Select State *.</div>
                                                    </div>    
                                                    <div class="mb-3 col-12 col-md-4">
                                                        <label class="mb-2 d-block">District </label>                          
                                                        <select class="form-control select2" name="district" id="district" onchange="getcity(this.value);" >
                                                            <option value="">Select District </option>
                                                            
                                                        </select>
                                                    </div>
                                                    <div class="mb-3 col-12 col-md-4">
                                                        <label class="mb-2 d-block">List of Cities </label>                            
                                                        <select class="form-control select2" name="city" id="city" >
                                                            <option value="">Select City </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card">
                                <div class="card-body mt-0 pb-0 px-0">
                                    <div class="row align-items-center justify-content-center">
                                        <div class="my-3 col-6 col-md-auto" id="aadharcleardiv">
                                            <button type="button" onclick="back()" style="background:black!important;color:white!important;" class="btn w-100 btn-style-grey text-center disabled-on-loading"> Back</button>
                                        </div>
                                        <div class="col-lg-3 my-3 col-6 col-md-6">
                                            <button class="btn btn-primary w-100 btn-style-green disabled-on-loading" name="btnwith" id="btn1Submit" type="button" style="background-color:  #05106c !important;"> Next</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-12 col-sm-12 col-md-12 d-flex flex-column align-items-center justify-content-center <?= ($pn != 2) ? 'd-none' : ''; ?>">
                        <?php 
                            $data = $this->db->query('select * from funnelfamily where id='.(isset($_SESSION['funnelFamId']) ? $_SESSION['funnelFamId'] : 0))->result_array();
                            if(count($data) > 0)
                            {
                        ?>
                        <div class="card mb-3 w-100">
                            <div class="card-header">
                                <h6 class="text-center mb-0"><b style="color: black;">Add <b style="color: red;"><?= $data[0]['person_name']; ?></b> Face Photo</b></h6>
                            </div>
                            <div class="card-body pt-3">
                                    <div class="row align-items-center justify-content-center">
                                        <div class="col-lg-3 col-md-4 my-3 col-10 text-center">
                                            <h4 class="mb-0"><b style="color:red;">*</b></h4>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div style="position:relative;text-align:center;">
                                                        <?php 
                                                            if($data[0]['Photo'] != NUlL)
                                                            {
                                                        ?>
                                                        <img class="w-100" id="profile-pic" src="<?php echo base_url(); ?><?= $data[0]['Photo']; ?>" style="height: 152px!important;border: 1px solid;border-radius: 15px 15px;" alt="">
                                                        <?php }else{ ?>
                                                        <img class="w-100" id="profile-pic" src="<?php echo base_url(); ?>assets/images/faceicon.png" style="height: 152px!important;border: 1px solid;border-radius: 15px 15px;" alt="">
                                                        <?php } ?>
                                                    </div>  
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-12">
                                                    <button type="button" style="z-index:2;border:0!important;background:navy!important;color:white!important;top:0px;right:0px;padding:0.6rem 0.9rem;cursor:pointer;" id="my-button">
                                                            <i class="fa fa-edit"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <input type="file" name="Photo" id="input-file" style="display: none;" accept="image/*;capture=camera" onchange="cropPhoto('facematch','')">
                                            <input type="file" name="Photo1" id="input-file1" style="display: none;" accept="image/*;capture=camera" onchange="cropPhoto('facematch',1)">
                                            <input type="file" name="Photo2" id="input-file2" style="display: none;" accept="image/*;capture=camera" onchange="cropPhoto('facematch',2)">
                                        </div>
                                        <div class="col-lg-3 col-md-4 my-3 col-10 text-center">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div style="position:relative;text-align:center;">
                                                        <?php 
                                                            if($data[0]['Photo1'] != NUlL)
                                                            {
                                                        ?>
                                                        <img class="w-100" id="profile-pic1" src="<?php echo base_url(); ?><?= $data[0]['Photo1']; ?>" style="height: 152px!important;border: 1px solid;border-radius: 15px 15px;" alt="">
                                                        <?php }else{ ?>
                                                        <img class="w-100" id="profile-pic1" src="<?php echo base_url(); ?>assets/images/faceicon.png" style="height: 152px!important;border: 1px solid;border-radius: 15px 15px;" alt="">
                                                        <?php } ?>
                                                        <div style="position:absolute;z-index:2;box-shadow:0px 1px 1px 2px;background:black;color:white;top:0px;right:0px;padding:0.4rem 0.7rem;cursor:pointer;" class="d-none" id="crossIcon1">
                                                            <i class="fa fa-times"></i>
                                                        </div>
                                                    </div>  
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-12">
                                                    <button type="button" style="z-index:2;border:0!important;background:navy!important;color:white!important;top:0px;right:0px;padding:0.6rem 0.9rem;cursor:pointer;" id="my-button1">
                                                            <i class="fa fa-edit"></i>
                                                    </button>
                                                    <?php 
                                                        if($data[0]['Photo1'] != '')
                                                        {
                                                    ?>
                                                    <button type="button" onclick="deleteFace(this,1)" class="disabled-on-loading d-none" style="z-index:2;border:1px solid red!important;background:red!important;color:white!important;top:0px;right:0px;padding:0.6rem 0.9rem;cursor:pointer;">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 my-3 col-10 text-center">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div style="position:relative;text-align:center;">
                                                        <?php 
                                                            if($data[0]['Photo2'] != NUlL)
                                                            {
                                                        ?>
                                                        <img class="w-100" id="profile-pic2" src="<?php echo base_url(); ?><?= $data[0]['Photo2']; ?>" style="height: 152px!important;border: 1px solid;border-radius: 15px 15px;" alt="">
                                                        <?php }else{ ?>
                                                        <img class="w-100" id="profile-pic2" src="<?php echo base_url(); ?>assets/images/faceicon.png" style="height: 152px!important;border: 1px solid;border-radius: 15px 15px;" alt="">
                                                        <?php } ?>
                                                        <div style="position:absolute;z-index:2;box-shadow:0px 1px 1px 2px;background:black;color:white;top:0px;right:0px;padding:0.4rem 0.7rem;cursor:pointer;" class="d-none" id="crossIcon2">
                                                            <i class="fa fa-times"></i>
                                                        </div>
                                                    </div>  
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-12">
                                                    <button type="button" style="z-index:2;border:0!important;background:navy!important;color:white!important;top:0px;right:0px;padding:0.6rem 0.9rem;cursor:pointer;" id="my-button2">
                                                            <i class="fa fa-edit"></i>
                                                    </button>
                                                    <?php 
                                                        if($data[0]['Photo2'] != '')
                                                        {
                                                    ?>
                                                    <button type="button" onclick="deleteFace(this,2)" class="disabled-on-loading d-none" style="z-index:2;border:1px solid red!important;background:red!important;color:white!important;top:0px;right:0px;padding:0.6rem 0.9rem;cursor:pointer;">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php 
                                            if($data[0]['Photo'] != '')
                                            {
                                        ?>
                                        <input type="hidden" id="facematch" name="facematch" value="data:image/jpeg;base64,<?= base64_encode(file_get_contents($data[0]['Photo'])); ?>">
                                        <?php }else{ ?>
                                        <input type="hidden" id="facematch" name="facematch" value="">
                                        <?php } ?>
                                        <?php 
                                            if($data[0]['Photo1'] != '')
                                            {
                                        ?>
                                        <input type="hidden" id="facematch1" name="facematch1" value="data:image/jpeg;base64,<?= base64_encode(file_get_contents($data[0]['Photo1'])); ?>">
                                        <?php }else{ ?>
                                        <input type="hidden" id="facematch1" name="facematch1" value="">
                                        <?php } ?>
                                        <?php 
                                            if($data[0]['Photo2'] != '')
                                            {
                                        ?>
                                        <input type="hidden" id="facematch2" name="facematch2" value="data:image/jpeg;base64,<?= base64_encode(file_get_contents($data[0]['Photo2'])); ?>">
                                        <?php }else{ ?>
                                        <input type="hidden" id="facematch2" name="facematch2" value="">
                                        <?php } ?>
                                    </div>
                            </div>
                        </div>
                        <?php
                            if($data[0]['Photo'] != NULL)
                            {
                        ?>
                        <div class="row align-items-center accordion w-100 mt-1 mx-0" id="latestAccordion">
                            <div class="accordion-item px-0 mx-1">
                                <h2 class="accordion-header" id="latestHeading">
                                    <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#latestChild" aria-expanded="false" style="background:white;" aria-controls="latestChild">
                                        <b>Add Other General Photos</b>
                                  </a>
                                </h2>
                            </div>
                            <div id="latestChild" class="accordion-collapse collapse px-0" aria-labelledby="latestHeading" data-bs-parent="#latestAccordion" style="background:aliceblue;">
                                <div class="accordion-body py-0 pe-1 row align-items-center">
                                    <form id="step2Form" method="post" class="row g-1 mt-0 needs-validation1 w-100"  enctype="multipart/form-data">
                                        <?php 
                                            $csrf = array(
                                                'name' => $this->security->get_csrf_token_name(),
                                                'hash' => $this->security->get_csrf_hash()
                                            );
                                        ?>
                                        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                                        <input type="hidden" name="latestPhoto" id="latestPhoto0">
                                        <input type="hidden" name="latestPhoto1" id="latestPhoto1">
                                        <input type="hidden" name="latestPhoto2" id="latestPhoto2">
                                        <?php
                                            $getLatestPhotos = $this->db->query('select * from funnelfamilyphotos where funnelId='.$_SESSION['funnelFamId'])->result_array();
                                            $j=0;
                                            for($i=0;$i<3;$i++)
                                            {
                                                $j++;
                                                if(count($getLatestPhotos) <= $i)
                                                {
                                        ?>
                                        <div class="card mt-4 mb-0">
                                            <div class="card-body p-4">
                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-12 col-md-6 border border-secondary p-3 text-center" style="border-radius:15px;border-color:lightgrey!important;">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                                <h6>PNG, JPEG or JPG formats only</h6>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" id="isLatestPhotoUploaded<?php echo $i; ?>" value="0">
                                                        <div class="row mt-2">
                                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                                <button type="button" data-bs-toggle="modal" data-bs-target="#reUploadModal<?php echo $j; ?>" class="btn btn-style-upload w-100"> <i class="fa fa-cloud-upload"></i> Upload File</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>  
                                            </div>
                                        </div>
                                        <div id="reUploadModal<?php echo $j; ?>" class="modal" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header" style="border:0;padding-bottom:0;padding-top:0;">
                                                        <button type="button" class="btn btn-default ms-auto py-0" data-bs-dismiss="modal" style="color: darkgrey;background: transparent!important;font-size: xx-large;">&times;</button>
                                                    </div>
                                                    <div class="modal-body px-3 px-md-5 pt-0">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-sm-12 col-md-12">
                                                                <h4 class="modal-title text-center"><?php echo $j; ?>- Upload Family Person Photos</h4>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-0">
                                                            <div class="col-lg-12 col-sm-12 col-md-12">
                                                                <div class="row mt-3 mx-0" id="reUploadDiv<?php echo $i; ?>">
                                                                    <div class="col-md-12 col-sm-12 col-lg-12 px-0">
                                                                        <label class="form-label">Upload image</label>
                                                                        <input type="file" class="form-control" accept="image/*;capture=camera" id="latestFile<?php echo $i; ?>" onchange="cropPhoto('latest',<?= $i; ?>)">
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-3">
                                                                    <div class="col-lg-12 col-sm-12 col-md-12">
                                                                        <button type="button" class="btn btn-style-upload w-100 disabled-on-loading continueBtn disabled" onclick="uploadLatestPhoto(this,<?php echo $i; ?>)"> Continue</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                             </div>
                                            </div>
                                        </div>
                                        <?php }else{ ?>
                                        <div class="card mt-4 mb-0">
                                            <div class="card-body p-4">
                                                <div class="row">
                                                    <div class="col-lg-12 col-sm-12 col-md-12">
                                                        <h5 class="modal-title"><?php echo $j; ?>- Uploaded Family Person's Photo</h5>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-lg-4 col-sm-12 col-md-6 px-0">
                                                        <div class="row border border-secondary mx-0 p-3" style="border-radius:15px;border-color:lightgrey!important;">
                                                            <input type="hidden" id="isLatestPhotoUploaded<?php echo $i; ?>" value="<?php echo $getLatestPhotos[$i]['Id']; ?>">
                                                            <div class="col-lg-auto col-auto px-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-sm-12 col-md-12">
                                                                        <h6><b>File Uploaded</b></h6>
                                                                    </div>
                                                                </div>  
                                                                <?php 
                                                                    $split = explode('upload/family/',$getLatestPhotos[$i]['photourl']);
                                                                ?>
                                                                <div class="row" style="margin-top:10px;">
                                                                    <div class="px-0 col-lg-12 col-sm-12 col-md-12">
                                                                        <a title="Preview" href="<?php echo base_url(); ?><?php echo $getLatestPhotos[$i]['photourl']; ?>" data-lightbox="rd2" style="color:#fff!important;border:0px solid #0d6efd;padding:10px;border-radius:50%;background:#0d6efd;"><i class="fa fa-eye"></i></a>
                                                                        <a title="Re-upload" href="javascript:void(0)" style="color:#fff!important;border:0px solid #ffb309;padding:10px;border-radius:50%;background:#ffb309;margin-left:7px;" onclick="showReUpload(<?php echo $i; ?>)"><i class="fa fa-upload"></i></a>
                                                                        <a title="Remove" href="javascript:void(0)" class="btn btn-danger" style="background:white!important;color:red!important;margin-left:7px;" onclick="deletePhoto(<?php echo $getLatestPhotos[$i]['Id']; ?>,<?php echo $i; ?>)"><i class="fa fa-trash"></i></a>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                            <div class="col px-0 text-end">
                                                                <span class="fa-stack fa-2x" style="background: #80808008;border-radius: 50%;height:1.7em;line-height:1.7em;width:1.7em;">
                                                                    <i class="fa fa-check fa-stack-1x fa-1x" style="color:white;--fa-stack-z-index: 10;z-index: 2;font-size: 0.5em;top: 0.1em;"></i>
                                                                    <i class="fa fa-cloud fa-stack-1x text-success" style="z-index: 1;color: #85dc4f;"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3 mx-0 d-none" id="reUploadDiv<?php echo $i; ?>">
                                                            <div class="col-md-12 col-sm-12 col-lg-12 px-0">
                                                                <label class="form-label">Re-upload image</label>
                                                                <input type="file" class="form-control" accept="image/*;capture=camera" id="latestFile<?php echo $i; ?>" onchange="cropPhoto('latest',<?= $i; ?>)">
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3 d-none justify-content-center" id="reUploadBtn<?php echo $i; ?>">
                                                            <div class="col-lg-auto col-sm-12 col-md-auto col-auto pe-0">
                                                                <button type="button" class="btn btn-style-upload w-100 disabled-on-loading disabled continueBtn" onclick="uploadLatestPhoto(this,<?php echo $i; ?>)"> Continue</button>
                                                            </div>
                                                            <div class="col-lg-auto col-sm-12 col-md-auto col-auto mt-3 pe-0">
                                                                <button type="button" class="btn btn-style-red w-100 disabled-on-loading" onclick="cancelReUpload(this,<?php echo $i; ?>)"> Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="reUploadModal<?php echo $j; ?>" class="modal" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header" style="border:0;padding-bottom:0;padding-top:0;">
                                                        <button type="button" class="btn btn-default ms-auto py-0" data-bs-dismiss="modal" style="color: darkgrey;background: transparent!important;font-size: xx-large;">&times;</button>
                                                    </div>
                                                    <div class="modal-body px-3 px-md-5 pt-0">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-sm-12 col-md-12">
                                                                <h5 class="modal-title"><?php echo $j; ?>- Uploaded Family Person's Photo</h5>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-lg-12 col-sm-12 col-md-12">
                                                                <div class="row border border-secondary mx-0 p-3" style="border-radius:15px;border-color:lightgrey!important;">
                                                                    <div class="col-auto px-0">
                                                                        <div class="row">
                                                                            <div class="col-lg-12 col-sm-12 col-md-12">
                                                                                <h6><b>File Uploaded</b></h6>
                                                                            </div>
                                                                        </div>  
                                                                        <?php 
                                                                            $split = explode('upload/family/',$getLatestPhotos[$i]['photourl']);
                                                                        ?>
                                                                        <div class="row">
                                                                            <div class="col-lg-12 col-sm-12 col-md-12">
                                                                                <a href="<?php echo base_url(); ?><?php echo $getLatestPhotos[$i]['photourl']; ?>" data-lightbox="rd1" style="color:#403ab4!important;">Preview</a>
                                                                                <a href="javascript:void(0)" style="color:#403ab4!important;" onclick="showReUpload(<?php echo $i; ?>)">Re-upload</a>
                                                                            </div>
                                                                        </div>  
                                                                    </div>
                                                                    <div class="col px-0 text-end">
                                                                        <span class="fa-stack fa-2x" style="background: #80808008;border-radius: 50%;height:1.7em;line-height:1.7em;width:1.7em;">
                                                                            <i class="fa fa-check fa-stack-1x fa-1x" style="color:white;--fa-stack-z-index: 10;z-index: 2;font-size: 0.5em;top: 0.1em;"></i>
                                                                            <i class="fa fa-cloud fa-stack-1x text-success" style="z-index: 1;color: #85dc4f;"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-3 mx-0 d-none" id="reUploadDiv<?php echo $i; ?>">
                                                                    <div class="col-md-12 col-sm-12 col-lg-12 px-0">
                                                                        <input type="file" class="form-control" accept="image/*;capture=camera" id="latestFile<?php echo $i; ?>" onchange="cropPhoto('latest',<?= $i; ?>)">
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-3">
                                                                    <div class="col-lg-12 col-sm-12 col-md-12">
                                                                        <button type="button" class="btn btn-style-upload w-100 disabled-on-loading continueBtn disabled" onclick="uploadLatestPhoto(this,<?php echo $i; ?>)"> Continue</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } } ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <div class="card w-100 mt-4">
                            <div class="card-footer py-0">
                                <div class="row justify-content-center">
                                    <?php
                                        if($data[0]['Photo'] != NULL)
                                        {
                                    ?>
                                    <div class="col-6 my-3 col-md-auto">
                                        <button class="btn btn-primary w-100 btn-style-green disabled-on-loading" onclick="location.href='<?= base_url(); ?>upload-family-member-funnel?pn=3'" type="button" style="background-color:  #05106c !important;">Next</button>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="col-6 my-3 col-md-auto">
                                        <button class="btn btn-primary w-100 btn-style-green disabled-on-loading" onclick="showAlert()" type="button" style="background-color:  #05106c !important;">Next</button>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <?php 
                        $getPersonDetail = $data;
                        if(count($getPersonDetail) > 0)
                        {
                    ?>
                    <div id="step3" class="px-0 <?php if($pn != 3){ echo "d-none"; } ?>">
                        <?php 
                            $mobcount = 0;
                            if($getPersonDetail[0]['well1'] != '' || $getPersonDetail[0]['well1'] != NULL)
                            {
                                $mobcount++;
                            }
                            if($getPersonDetail[0]['well2'] != '' || $getPersonDetail[0]['well2'] != NULL)
                            {
                                $mobcount++;
                            }
                            if($getPersonDetail[0]['well3'] != '' || $getPersonDetail[0]['well3'] != NULL)
                            {
                                $mobcount++;
                            }
                        ?>
                        <?php 
                            $getSettings = $this->db->query('select * from settings where name="deleteOTP"')->result_array();
                            $getRelations = $this->db->query('select * from relations')->result_array();
                        ?>
                        <input type="hidden" name="mobCount" value="<?php echo $mobcount; ?>" id="mobCount">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-0 pb-0">Add your contact numbers</h5>
                            </div>
                        </div>
                        <?php 
                            for($i=1;$i<=3;$i++)
                            {
                        ?>
                        <?php 
                            if($getPersonDetail[0]['well'.$i] != NULL)
                            {
                                if($i != 1)
                                {
                        ?>
                        <div class="card">
                            <div class="card-body py-3">
                                <div class="row my-3 align-items-end">
                                    <div class="col-lg-auto mb-3 col-sm-12 col-md-auto">
                                        <label for="othermob<?php echo $i; ?>">Contact Number <?= $i; ?></label>
                                        <input type="number" max="10" size="10" value="<?php echo (($getPersonDetail[0]['well'.$i] != NULL) ? $getPersonDetail[0]['well'.$i] : '') ?>" <?php if($getPersonDetail[0]['well'.$i] != NULL) { echo "disabled"; } ?> class="form-control mt-2" onKeyPress="return checkLength(this.value,10)" onKeyUp="showOtpAccordingly(this.value,<?php echo $i; ?>)" id="othermob<?php echo $i; ?>" placeholder="Enter Mobile Number" name="othermob<?php echo $i; ?>" required>  
                                    </div>
                                    <div class="col-lg-auto mb-3 col-sm-12 col-md-auto text-center" id="actiondiv">
                                        <button type="button" class="btn btn-danger disabled-on-loading" style="background:white!important;color:red!important;" onclick="deleteAlternate(this,<?php echo $i; ?>,<?php echo $getSettings[0]['value']; ?>)"> <i class="fa fa-trash"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }else{ ?>
                        <div class="card">
                            <div class="card-body py-3">
                                <div class="row align-items-center" id="defaultContactDiv<?= $i; ?>">
                                    <div class="form-floating mb-3 col-sm-12 col-md-4 col-lg-3 <?= ($i != 1 ? 'd-none' : ''); ?>">
                                        
                                        <?php 
                                            $profileDetail = $this->db->query('select * from nonKycUser where uid='.$_SESSION['user_id'])->result_array();
                                            if($i == 1)
                                            {
                                        ?>
                                        <input type="number" readonly class="form-control" value="<?php echo ($getPersonDetail[0]['well'.$i] != NULL) ? $getPersonDetail[0]['well'.$i] : '' ?>" id="otherMob<?= $i; ?>" name="otherMob<?= $i; ?>" placeholder="Enter Mobile Number">
                                        <label for="otherMob<?= $i; ?>" class="ms-2">Contact Number 1</label>
                                        <?php }else{ 
                                        ?>
                                        <?php } ?>
                                    </div>
                                    <div class="col-sm-12 col-md-4 col-lg-auto text-center mb-3 d-none">
                                        <button type="button" class="btn btn-primary save"  style="z-index:2;border:0!important;border-radius:0!important;background:navy!important;color:white!important;top:0px;right:0px;padding:1rem!important;cursor:pointer;" onclick="editContact(<?= $i; ?>,this)"><i class="fa fa-edit"></i></button>
                                    </div>
                                </div>
                                <div class="row align-items-end" style="display:none;" id="editContactDiv<?php echo $i; ?>">
                                    <div class="col-lg-auto mb-2 col-sm-12 col-md-auto">
                                        <label for="othermob<?php echo $i; ?>">Contact Number <?= $i; ?></label>
                                        <input type="number" max="10" size="10" value="<?php echo (($getPersonDetail[0]['well'.$i] != NULL) ? $getPersonDetail[0]['well'.$i] : '') ?>" <?php if($getPersonDetail[0]['wellrel'.$i] != NULL) { echo "disabled"; } ?> class="form-control" onKeyPress="return checkLength(this.value,10)" onKeyUp="showOtpAccordingly(this.value,<?php echo $i; ?>)" id="othermob<?php echo $i; ?>" placeholder="Enter Mobile Number" name="othermob<?php echo $i; ?>" required>  
                                    </div>
                                    <div class="col-lg-auto text-center col-md-auto mb-2 <?php if($getPersonDetail[0]['wellrel'.$i] != NULL) { echo "d-none"; } ?>" id="sendOtpDiv<?php echo $i; ?>">
                                        <button type="button" class="w-100 btn btn-info btn-style-grey disabled-on-loading disabled" id="btnOtp<?php echo $i; ?>" onclick="sendOtp(<?php echo $i; ?>)"> Send OTP</button>
                                    </div>  
                                    <div class="col-lg-auto text-center col-md-auto mb-2">
                                        <button type="button" class="btn btn-danger disabled-on-loading" onclick="removeContact(<?= $i; ?>,this)" style="background:white!important;color:red!important;"> <i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <?php }else{ ?>
                        <div class="card">
                            <div class="card-body py-3">
                                <div class="row align-items-end">
                                    <div class="col-lg-auto mb-2 col-sm-12 col-md-auto">
                                        <label for="othermob<?php echo $i; ?>">Contact Number <?= $i; ?></label>
                                        <input type="number" max="10" size="10" value="<?php echo (($getPersonDetail[0]['well'.$i] != NULL) ? $getPersonDetail[0]['well'.$i] : '') ?>" <?php if($getPersonDetail[0]['wellrel'.$i] != NULL) { echo "disabled"; } ?> class="form-control" onKeyPress="return checkLength(this.value,10)" onKeyUp="showOtpAccordingly(this.value,<?php echo $i; ?>)" id="othermob<?php echo $i; ?>" placeholder="Enter Mobile Number" name="othermob<?php echo $i; ?>" required>  
                                    </div>
                                    <div class="col-lg-auto text-center col-md-auto mb-2 <?php if($getPersonDetail[0]['wellrel'.$i] != NULL) { echo "d-none"; } ?>" id="sendOtpDiv<?php echo $i; ?>">
                                        <button type="button" class="w-100 btn btn-info btn-style-grey disabled-on-loading disabled" id="btnOtp<?php echo $i; ?>" onclick="sendOtp(<?php echo $i; ?>)"> Send OTP</button>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <?php } ?>
                        <div class="card">
                            <div class="card-body py-3">
                                <div class="row mb-0 align-items-center">
                                    <div class="col-sm-12 col-6 px-1 col-md-auto col-lg-auto mt-1 mb-1">
                                        <button type="button" id="btn3Back" class="btn btn-dark disabled-on-loading w-100 btn-style-green" style="background:black!important;"> Back</button>
                                    </div>
                                    <div class="col-sm-12 col-6 ps-1 pe-0 col-md-auto col-lg-auto mt-1 mb-1">
                                        <button type="button" id="btn3Next" class="btn btn-dark disabled-on-loading w-100 btn-style-green"> Final Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="step4" class="col-xl-9 <?php if($pn != 4){ echo "d-none"; } ?>">
                        <?php 
                            if(count($getPersonDetail) > 0)
                            {
                                $getLabelSettings = $this->db->query('select * from settings where name="bottomdetailLabels"')->result_array();
                                $decode1 = json_decode($getLabelSettings[0]['value'],true);
                                $getLabelSettings = $this->db->query('select * from settings where name="facematchWatermarkLabels"')->result_array();
                                $decode2 = json_decode($getLabelSettings[0]['value'],true);
                                $getLabelSettings = $this->db->query('select * from settings where name="latestWatermarkLabels"')->result_array();
                                $decode3 = json_decode($getLabelSettings[0]['value'],true);
                        ?>
                        <div class="card w-100">
                            <div class="card-body pb-0 pt-0 px-0 w-100">
                                <div class="px-0 col-lg-12 col-md-12 col-sm-12 d-flex flex-column mx-lg-auto">
                                    <div class="row mx-0 align-items-center" style="background:#f78b77;padding:1rem;">
                                        <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                                            <h1 class="text-light mb-0" style="font-size: 1.5rem;"><b>FAMILY MEMBER</b></h1>
                                        </div>
                                    </div>
                                    <div class="row mx-0 align-items-center justify-content-center">
                                        <div class="col-md-6 col-sm-12 col-lg-6 px-0">
                                            <div id="carouselExampleControls" class="carousel slide" data-bs-interval="2000" data-bs-ride="carousel">
                                                <div class="carousel-inner" id="photosspan">
                                                    <div class="carousel-item active">
                                                        <a href="<?php echo base_url(); ?><?php echo $getPersonDetail[0]['Photo']; ?>"  data-lightbox="roadtrip">
                                                            <img src="<?php echo base_url().''.$getPersonDetail[0]['Photo']; ?>" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100" alt="...">
                                                        </a>
                                                        <div class="carousel-caption" style="bottom:0;padding-bottom:0;padding-top:0;font-family:<?= $decode1['font-family']; ?>">
                                                            <<?= $decode1['font-size']; ?> style="color:<?= $decode1['color']; ?>;">Face Photo 1</<?= $decode1['font-size']; ?>>
                                                        </div>
                                                        <div class="carousel-caption" style="bottom:52%;right:10%;left:unset;padding-bottom:0;padding-top:0;font-family:<?= $decode1['font-family']; ?>;opacity:0.2;">
                                                            <<?= $decode1['font-size']; ?> style="color:white;"><?= $decode2['top']; ?> 1</<?= $decode1['font-size']; ?>>
                                                        </div>
                                                        <div class="carousel-caption" style="bottom:52%;right:unset;left:10%;padding-bottom:0;padding-top:0;font-family:<?= $decode1['font-family']; ?>;opacity:0.2;">
                                                            <<?= $decode1['font-size']; ?> style="color:white;"><?= $decode2['top']; ?> 1</<?= $decode1['font-size']; ?>>
                                                        </div>
                                                        <div class="carousel-caption" style="bottom:22%;right:unset;left:10%;padding-bottom:0;padding-top:0;font-family:<?= $decode1['font-family']; ?>;opacity:0.2;">
                                                            <<?= $decode1['font-size']; ?> style="color:white;"><?= $decode2['bottom']; ?></<?= $decode1['font-size']; ?>>
                                                        </div>
                                                        <div class="carousel-caption" style="bottom:22%;right:10%;left:unset;padding-bottom:0;padding-top:0;font-family:<?= $decode1['font-family']; ?>;opacity:0.2;">
                                                            <<?= $decode1['font-size']; ?> style="color:white;"><?= $decode2['bottom']; ?></<?= $decode1['font-size']; ?>>
                                                        </div>
                                                    </div>
                                                    <?php 
                                                        if($getPersonDetail[0]['Photo1'] != NULL)
                                                        {
                                                    ?>
                                                    <div class="carousel-item">
                                                        <a href="<?php echo base_url(); ?><?php echo $getPersonDetail[0]['Photo1']; ?>"  data-lightbox="roadtrip">
                                                            <img src="<?php echo base_url().''.$getPersonDetail[0]['Photo1']; ?>" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100" alt="...">
                                                        </a>
                                                        <div class="carousel-caption" style="bottom:0;padding-bottom:0;padding-top:0;font-family:<?= $decode1['font-family']; ?>">
                                                            <<?= $decode1['font-size']; ?> style="color:<?= $decode1['color']; ?>;">Face Photo 2</<?= $decode1['font-size']; ?>>
                                                        </div>
                                                        <div class="carousel-caption" style="bottom:52%;right:10%;left:unset;padding-bottom:0;padding-top:0;font-family:<?= $decode1['font-family']; ?>;opacity:0.2;">
                                                            <<?= $decode1['font-size']; ?> style="color:white;"><?= $decode2['top']; ?> 2</<?= $decode1['font-size']; ?>>
                                                        </div>
                                                        <div class="carousel-caption" style="bottom:52%;right:unset;left:10%;padding-bottom:0;padding-top:0;font-family:<?= $decode1['font-family']; ?>;opacity:0.2;">
                                                            <<?= $decode1['font-size']; ?> style="color:white;"><?= $decode2['top']; ?> 2</<?= $decode1['font-size']; ?>>
                                                        </div>
                                                        <div class="carousel-caption" style="bottom:22%;right:unset;left:10%;padding-bottom:0;padding-top:0;font-family:<?= $decode1['font-family']; ?>;opacity:0.2;">
                                                            <<?= $decode1['font-size']; ?> style="color:white;"><?= $decode2['bottom']; ?></<?= $decode1['font-size']; ?>>
                                                        </div>
                                                        <div class="carousel-caption" style="bottom:22%;right:10%;left:unset;padding-bottom:0;padding-top:0;font-family:<?= $decode1['font-family']; ?>;opacity:0.2;">
                                                            <<?= $decode1['font-size']; ?> style="color:white;"><?= $decode2['bottom']; ?></<?= $decode1['font-size']; ?>>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                    <?php 
                                                        if($getPersonDetail[0]['Photo2'] != NULL)
                                                        {
                                                    ?>
                                                    <div class="carousel-item">
                                                        <a href="<?php echo base_url(); ?><?php echo $getPersonDetail[0]['Photo2']; ?>"  data-lightbox="roadtrip">
                                                            <img src="<?php echo base_url().''.$getPersonDetail[0]['Photo2']; ?>" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100" alt="...">
                                                        </a>
                                                        <div class="carousel-caption" style="bottom:0;padding-bottom:0;padding-top:0;font-family:<?= $decode1['font-family']; ?>">
                                                            <<?= $decode1['font-size']; ?> style="color:<?= $decode1['color']; ?>;">Face Photo 3</<?= $decode1['font-size']; ?>>
                                                        </div>
                                                        <div class="carousel-caption" style="bottom:52%;right:10%;left:unset;padding-bottom:0;padding-top:0;font-family:<?= $decode1['font-family']; ?>;opacity:0.2;">
                                                            <<?= $decode1['font-size']; ?> style="color:white;"><?= $decode2['top']; ?> 3</<?= $decode1['font-size']; ?>>
                                                        </div>
                                                        <div class="carousel-caption" style="bottom:52%;right:unset;left:10%;padding-bottom:0;padding-top:0;font-family:<?= $decode1['font-family']; ?>;opacity:0.2;">
                                                            <<?= $decode1['font-size']; ?> style="color:white;"><?= $decode2['top']; ?> 3</<?= $decode1['font-size']; ?>>
                                                        </div>
                                                        <div class="carousel-caption" style="bottom:22%;right:unset;left:10%;padding-bottom:0;padding-top:0;font-family:<?= $decode1['font-family']; ?>;opacity:0.2;">
                                                            <<?= $decode1['font-size']; ?> style="color:white;"><?= $decode2['bottom']; ?></<?= $decode1['font-size']; ?>>
                                                        </div>
                                                        <div class="carousel-caption" style="bottom:22%;right:10%;left:unset;padding-bottom:0;padding-top:0;font-family:<?= $decode1['font-family']; ?>;opacity:0.2;">
                                                            <<?= $decode1['font-size']; ?> style="color:white;"><?= $decode2['bottom']; ?></<?= $decode1['font-size']; ?>>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                    <?php
                                                        $getLatestUserPhotos = $this->db->query('select * from funnelfamilyphotos where funnelId='.$getPersonDetail[0]['id'])->result_array();
                                                        if(count($getLatestUserPhotos) > 0)
                                                        {
                                                            foreach($getLatestUserPhotos as $k=>$v)
                                                            {
                                                    ?>
                                                    <div class="carousel-item">
                                                        <a href="<?php echo base_url(); ?><?php echo $v['photourl']; ?>"  data-lightbox="roadtrip">
                                                            <img src="<?php echo base_url().''.$v['photourl']; ?>" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100" alt="...">
                                                        </a>
                                                        <div class="carousel-caption" style="bottom:0;padding-bottom:0;padding-top:0;font-family:<?= $decode1['font-family']; ?>">
                                                            <<?= $decode1['font-size']; ?> style="color:<?= $decode1['color']; ?>;">General Photo <?= $k + 1; ?></<?= $decode1['font-size']; ?>>
                                                        </div>
                                                        <div class="carousel-caption" style="bottom:52%;right:10%;left:unset;padding-bottom:0;padding-top:0;font-family:<?= $decode1['font-family']; ?>;opacity:0.2;">
                                                            <<?= $decode1['font-size']; ?> style="color:white;"><?= $decode3['top']; ?> <?= $k + 1; ?></<?= $decode1['font-size']; ?>>
                                                        </div>
                                                        <div class="carousel-caption" style="bottom:52%;right:unset;left:10%;padding-bottom:0;padding-top:0;font-family:<?= $decode1['font-family']; ?>;opacity:0.2;">
                                                            <<?= $decode1['font-size']; ?> style="color:white;"><?= $decode3['top']; ?> <?= $k + 1; ?></<?= $decode1['font-size']; ?>>
                                                        </div>
                                                        <div class="carousel-caption" style="bottom:22%;right:unset;left:10%;padding-bottom:0;padding-top:0;font-family:<?= $decode1['font-family']; ?>;opacity:0.2;">
                                                            <<?= $decode1['font-size']; ?> style="color:white;"><?= $decode3['bottom']; ?></<?= $decode1['font-size']; ?>>
                                                        </div>
                                                        <div class="carousel-caption" style="bottom:22%;right:10%;left:unset;padding-bottom:0;padding-top:0;font-family:<?= $decode1['font-family']; ?>;opacity:0.2;">
                                                            <<?= $decode1['font-size']; ?> style="color:white;"><?= $decode3['bottom']; ?></<?= $decode1['font-size']; ?>>
                                                        </div>
                                                    </div>
                                                    <?php } } ?>
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
                                    </div>
                                    <div class="row mx-0 justify-content-center">
                                        <div class="col-lg-6 col-md-6 col-12 px-0" style="top:-50px!important;background:white;height:auto;">
                                            <div class="row mx-0 align-items-center justify-content-center">
                                                <div class="col-md-12 px-0 col-12 mt-2 col-sm-12 col-lg-12 text-center">
                                                    <h5 class="text-dark text-uppercase" style="font-size:1.2rem;font-family:initial;"><b id="personname">Name:- <?php echo ($getPersonDetail[0]['person_name'] != '' ? $getPersonDetail[0]['person_name'] : 'UNKNOWN'); ?></b></h5>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mx-0">
                                                <div class="col-6">
                                                    <button type="button" style="font-family:initial;color: white!important;background:#616161!important;width:100%;padding:0.4rem 1rem;"><b><?php echo ($getPersonDetail[0]['Gender'] == 'boy' ? 'Male' : 'Female'); ?></b></button>
                                                </div>
                                                <div class="col-6">
                                                    <button type="button" style="font-family:initial;color: white!important;background:#616161!important;width:100%;padding:0.4rem 1rem;"><b><?php echo $getPersonDetail[0]['Age']; ?> YEARS</b></button>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="border border-danger my-2">
                                        <div class="row px-md-2 px-sm-3">
                                            <div class="col-md-12 text-center text-danger px-1 pb-3 p-3" style="font-weight:bold;">
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-auto mb-3 col-sm-12 col-md-auto">
                                                        <button type="button" class="btn-style-five btn btn-primary d-block w-100 disabled-on-loading" onclick="goToDashboard(this)"> Go to Dashboard <i class="fa fa-home"></i></button>
                                                    </div>
                                                    <div class="col-lg-4 mb-3 col-sm-12 col-md-4">
                                                        <button type="button" class="btn-style-green btn btn-primary d-block w-100 disabled-on-loading" onclick="location.href='<?= base_url(); ?>upload-family-member-funnel'"> Add Another Member <i class="fa fa-user-plus"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    </div>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js" integrity="sha512-Gs+PsXsGkmr+15rqObPJbenQ2wB3qYvTHuJO6YJzPe/dTLvhy0fmae2BcnaozxDo5iaF8emzmCZWbQ1XXiX2Ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" integrity="sha512-2eMmukTZtvwlfQoG8ztapwAH5fXaQBzaMqdljLopRSA0i6YKM8kBAOrSSykxu9NN9HrtD45lIqfONLII2AFL/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<style>
    .swal2-close{
        background:white!important;
        color:black!important;
    }
</style>
<script>

    function goToDashboard(ele)
    {
        $(ele).attr('disabled',true);
        location.href="<?php echo base_url(); ?>non-kyc-dashboard-profile";
    }
    
    $('#btn3Next').click(function(){
        $(this).attr('disabled','disabled');
        let data = new FormData();
        data.append('id',<?php echo $data[0]['id']; ?>)
        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        $.ajax({
            url:'<?php echo base_url(); ?>NonKyc/funnelfamilySubmit',
            type:'post',
            processData:false,
            contentType:false,
            data:data,
            cache:false,
            success:function(res)
            {
                <?php 
                    $data = $this->db->query('select * from funnelfamily where id='.(isset($_SESSION['funnelFamId']) ? $_SESSION['funnelFamId'] : 0))->result_array();
                    if(count($data) > 0)
                    {
                        if($data[0]['relation'] == 23)
                        {
                            $name = $data[0]['otherrelationname'];
                        }else{
                            $getRelation = $this->db->query('select * from familyRelations where Id='.$data[0]['relation'])->result_array();
                            $name = $getRelation[0]['relationName'];
                        }
                    }else{
                        $name = '';
                    }
                ?>
                Swal.fire({
                    html:'<div class="row justify-content-center"><div class="col-12"><div id="lottie-popup-container" style="width:100%;height:200px;"></div></div></div><h6 style="text-align:center;color:black;font-weight:bold;font-size:0.8rem;" class="mb-2">Family Member added <img src="<?= base_url(); ?>assets/familySmall.jpg" style="height:50px;width:50px;vertical-align:bottom;"> successfully.</h6><h6 class="text-center"><b style="color:crimson;">Person Name:- </b><b style="color:green;"><?= $data[0]['person_name']; ?></b></h6><h6 class="text-center"><b style="color:crimson;">Relation:- </b><b style="color:green;"><?= $name; ?></b></h6>',
                    willOpen : () => {
                        lottie.loadAnimation({
                        container: document.getElementById('lottie-popup-container'), // Animation render hone ka container
                        renderer: 'svg', // SVG format me render karne ke liye
                        // loop: true, // Animation loop kare
                        // autoplay: true, // Animation automatically play kare
                        path: '<?= base_url(); ?>assets/jsons/check_popup.json', // JSON file ka path
                      });
                    },
                    customClass:{
                        actions:'mt-1',
                        htmlContainer:'px-1 mx-0 familyPopup',
                    },
                    allowOutsideClick:false,
                    showCloseButton: false,
                    showCancelButton: false,
                    focusConfirm: true,
                    showConfirmButton:true,
                    confirmButtonText:'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        location.href="<?php echo base_url(); ?>upload-family-member-funnel?pn=4";
                    }
                })
            }
        })
    })
    
    function removeContact(index,ele)
    {
        $('#defaultContactDiv'+index).slideDown('fast');
        $('#editContactDiv'+index).slideUp('fast');
        $('#editContact'+index).prop('checked',false);
    }

    function editContact(index,ele)
    {
        $('#defaultContactDiv'+index).slideUp('fast');
        $('#editContactDiv'+index).slideDown('fast');
    }
    
    if(window.innerWidth <= 525)
    {
        $image_crop = $('#image_demo').croppie({
            enableExif: true,
            viewport: {
              width:'100%',
              height:400,
              type:'square' //circle
            },
            boundary:{
              width:'100%',
              height:400
            }
          });    
    }else{
        $image_crop = $('#image_demo').croppie({
            enableExif: true,
            viewport: {
              width:'400',
              height:400,
              type:'square' //circle
            },
            boundary:{
              width:'400',
              height:400
            }
          });
    }
    
      
    $('.crop_image').click(function(event)
    {
        $.ajax({
            url: "https://shammtech.in/api/quality-management",
            type: "POST",
            data: { 
                api_key: "<?php echo $this->config->item('face_key'); ?>",
                _token: "<?php echo $this->security->get_csrf_hash(); ?>"
            },
            success: function(response) {
                try {
                    let res = (typeof response === "string") ? JSON.parse(response) : response;

                    if (res.status === "success") {
                        // Decode quality from base64
                        let qualityVal = atob(res.quality);
                        $image_crop.croppie('result', {
                          type: 'canvas',
                          size: 'viewport',
                          format:'jpeg',
                          quality: parseFloat(qualityVal)
                        }).then(function(response){
                            toastr.remove();
                            let index = $('#uploadimageModal').data('id');
                            let type = $('#uploadimageModal').data('type');
                            if(type == 'facematch')
                            {
                                if(index != '')
                                {
                                    if($('#facematch').val() != '')
                                    {
                                        $('.crop_image').attr('disabled','disabled');
                                        let data = new FormData();
                                        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                                        data.append('image1',$('#facematch').val());
                                        data.append('image2',response);
                                        $.ajax({
                                            url:'<?php echo base_url(); ?>user/comparePhoto',
                                            data:data,
                                            contentType: false,
                                            cache: false,
                                            processData:false,
                                            type:'post',
                                            success:function(res)
                                            {
                                                let parse = JSON.parse(res);
                                                if(parse.status == 'success')
                                                {
                                                    let faceData = new FormData();
                                                    faceData.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                                                    faceData.append('image',response);
                                                    faceData.append('index',index);
                                                    $.ajax({
                                                        url:'<?php echo base_url(); ?>NonKyc/addFunnelFamilyFaceMatchPhoto',
                                                        data:faceData,
                                                        contentType: false,
                                                        cache: false,
                                                        processData:false,
                                                        type:'post',
                                                        success:function(res1)
                                                        {
                                                            let parse1 = JSON.parse(res1);
                                                            if(parse1.status == 'success')
                                                            {
                                                                toastr.success('Photo Uploaded Successfully');
                                                                setTimeout(function()
                                                                {
                                                                    location.reload();
                                                                },2000);
                                                            }else{
                                                                toastr.error(parse1.message);
                                                                $('#input-file'+index).val('');
                                                                $('.crop_image').removeAttr('disabled');
                                                                $('#uploadimageModal').modal('hide');
                                                                $('#facematch'+index).val('');
                                                            }
                                                        }
                                                    })
                                                }else{
                                                    toastr.error(parse.message);
                                                    $('#input-file'+index).val('');
                                                    $('.crop_image').removeAttr('disabled');
                                                    $('#uploadimageModal').modal('hide');
                                                    $('#facematch'+index).val('');
                                                }
                                            }
                                        });       
                                    }else{
                                        toastr.error('upload first image first to continue');
                                        $('.crop_image').removeAttr('disabled');
                                        $('#uploadimageModal').modal('hide');
                                        $('#facematch'+index).val('');
                                        $('#input-file'+index).val('');
                                    }
                                }else{
                                    // if($('#facematch1').val() != '' || $('#facematch2').val() != '')
                                    // {
                                    //     toastr.error('You have to re-upload the 2nd and 3rd facematch again');
                                    // }
                                    // $('#crossIcon1').click();
                                    // $('#crossIcon2').click();
                                    if($('#facematch1').val() != '')
                                    {
                                        $('.crop_image').attr('disabled','disabled');
                                        let data = new FormData();
                                        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                                        data.append('image1',$('#facematch1').val());
                                        data.append('image2',response);
                                        $.ajax({
                                            url:'<?php echo base_url(); ?>user/comparePhoto',
                                            data:data,
                                            contentType: false,
                                            cache: false,
                                            processData:false,
                                            type:'post',
                                            success:function(res)
                                            {
                                                let parse = JSON.parse(res);
                                                if(parse.status == 'success')
                                                {
                                                    let faceData = new FormData();
                                                    faceData.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                                                    faceData.append('image',response);
                                                    faceData.append('index',index);
                                                    $.ajax({
                                                        url:'<?php echo base_url(); ?>NonKyc/addFunnelFamilyFaceMatchPhoto',
                                                        data:faceData,
                                                        contentType: false,
                                                        cache: false,
                                                        processData:false,
                                                        type:'post',
                                                        success:function(res1)
                                                        {
                                                            let parse1 = JSON.parse(res1);
                                                            if(parse1.status == 'success')
                                                            {
                                                                toastr.success('Photo Uploaded Successfully');
                                                                setTimeout(function()
                                                                {
                                                                    location.reload();
                                                                },2000);
                                                            }else{
                                                                toastr.error(parse1.message);
                                                                $('#input-file'+index).val('');
                                                                $('.crop_image').removeAttr('disabled');
                                                                $('#uploadimageModal').modal('hide');
                                                                $('#facematch'+index).val('');
                                                            }
                                                        }
                                                    })
                                                }else{
                                                    toastr.error("Face not matching with other photos");
                                                    $('#input-file'+index).val('');
                                                    $('.crop_image').removeAttr('disabled');
                                                    $('#uploadimageModal').modal('hide');
                                                    $('#facematch'+index).val('');
                                                }
                                            }
                                        });       
                                    }else{
                                        if($('#facematch2').val() != '')
                                        {
                                            $('.crop_image').attr('disabled','disabled');
                                            let data = new FormData();
                                            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                                            data.append('image1',$('#facematch2').val());
                                            data.append('image2',response);
                                            $.ajax({
                                                url:'<?php echo base_url(); ?>user/comparePhoto',
                                                data:data,
                                                contentType: false,
                                                cache: false,
                                                processData:false,
                                                type:'post',
                                                success:function(res)
                                                {
                                                    let parse = JSON.parse(res);
                                                    if(parse.status == 'success')
                                                    {
                                                        let faceData = new FormData();
                                                        faceData.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                                                        faceData.append('image',response);
                                                        faceData.append('index',index);
                                                        $.ajax({
                                                            url:'<?php echo base_url(); ?>NonKyc/addFunnelFamilyFaceMatchPhoto',
                                                            data:faceData,
                                                            contentType: false,
                                                            cache: false,
                                                            processData:false,
                                                            type:'post',
                                                            success:function(res1)
                                                            {
                                                                let parse1 = JSON.parse(res1);
                                                                if(parse1.status == 'success')
                                                                {
                                                                    toastr.success('Photo Uploaded Successfully');
                                                                    setTimeout(function()
                                                                    {
                                                                        location.reload();
                                                                    },2000);
                                                                }else{
                                                                    toastr.error(parse1.message);
                                                                    $('#input-file'+index).val('');
                                                                    $('.crop_image').removeAttr('disabled');
                                                                    $('#uploadimageModal').modal('hide');
                                                                    $('#facematch'+index).val('');
                                                                }
                                                            }
                                                        })
                                                    }else{
                                                        toastr.error("Please upload photo of the same person");
                                                        $('#input-file'+index).val('');
                                                        $('.crop_image').removeAttr('disabled');
                                                        $('#uploadimageModal').modal('hide');
                                                    }
                                                }
                                            }); 
                                        }else{
                                            $('.crop_image').attr('disabled','disabled');
                                            let faceData = new FormData();
                                            faceData.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                                            faceData.append('image',response);
                                            faceData.append('index',index);
                                            $.ajax({
                                                url:'<?php echo base_url(); ?>NonKyc/addFunnelFamilyFaceMatchPhoto',
                                                data:faceData,
                                                contentType: false,
                                                cache: false,
                                                processData:false,
                                                type:'post',
                                                success:function(res1)
                                                {
                                                    let parse1 = JSON.parse(res1);
                                                    if(parse1.status == 'success')
                                                    {
                                                        toastr.success('Photo Uploaded Successfully');
                                                        setTimeout(function()
                                                        {
                                                            location.reload();
                                                        },2000);
                                                    }else{
                                                        toastr.error(parse1.message);
                                                        $('#input-file'+index).val('');
                                                        $('.crop_image').removeAttr('disabled');
                                                        $('#uploadimageModal').modal('hide');
                                                        $('#facematch'+index).val('');
                                                    }
                                                }
                                            })
                                        }
                                    }
                                }
                            }else{
                                $('.continueBtn').removeClass('disabled');
                                $('#latestPhoto'+index).val(response);
                                $('#uploadimageModal').modal('hide');
                            }
                        });
                    } else {
                        toastr.error(res.message);
                    }
                } catch (e) {
                    console.error("❌ Parse Error:", e, response);
                }
            },
            error: function(xhr, status, error) {
                console.error("❌ AJAX Error:", error);
                console.error("Response:", xhr.responseText);
            }
        });
    })
    
    function cropPhoto(type,i)
    {
        toastr.remove();
        if(type == 'facematch')
        {
            if($('#input-file'+i)[0].files.length > 0)
            {
                var isImage = $('#input-file'+i)[0].files[0].type.startsWith("image/");
                if(isImage)
                {
                    var reader = new FileReader();
                    reader.onload = function (event) {
                      $image_crop.croppie('bind', {
                        url: event.target.result
                      }).then(function(){
                        console.log('jQuery bind complete');
                      });
                    }
                    reader.readAsDataURL($('#input-file'+i)[0].files[0]);
                    $('#uploadimageModal').modal('show');   
                    $('#uploadimageModal').data('id',i);
                    $('#uploadimageModal').data('type',type);
                }else{
                    toastr.error("Only image is allowed");
                }
            }else{
                toastr.error('Please upload photo to continue');
            }   
        }else{
            if($('#latestFile'+i)[0].files.length > 0)
            {
                var isImage = $('#latestFile'+i)[0].files[0].type.startsWith("image/");
                if(isImage)
                {
                    var reader = new FileReader();
                    reader.onload = function (event) {
                      $image_crop.croppie('bind', {
                        url: event.target.result
                      }).then(function(){
                        console.log('jQuery bind complete');
                      });
                    }
                    reader.readAsDataURL($('#latestFile'+i)[0].files[0]);
                    $('#uploadimageModal').modal('show');   
                    $('#uploadimageModal .modal-title').html('Crop Photo');
                    $('#uploadimageModal').data('id',i);
                    $('#uploadimageModal').data('type',type);
                }else{
                    toastr.error("Only image is allowed");
                }
            }else{
                toastr.error('Please upload photo to continue');
            }
        }
    }
    
    function cancelReUpload(ele,index)
    {
        $('#reUploadBtn'+index).addClass('d-none');
        $('#reUploadDiv'+index).addClass('d-none');   
    }
    
    $('.close1').click(function()
    {
        let i = $('#uploadimageModal').data('id');
        let type = $('#uploadimageModal').data('type');
        if(type == 'facematch')
        {
            $('#crossIcon'+i).click();
            $('#uploadimageModal').modal('hide');   
        }else{
            $('#latestFile'+i).val('');
            $('#latestPhoto'+i).val('');
            $('#crossIcon'+i).click();
            $('#uploadimageModal').modal('hide');   
        }
    })
    
    function deletePhoto(crimeId,Id)
    {
        Swal.fire({
            title: '<strong class="text-dark" style="font-size:20px;">Delete Photo</strong>',
            icon: 'info',
            html:'<div class="form-group mb-2">Are you sure you want to delete this photo?</div>',
            allowOutsideClick:true,
            showCloseButton: true,
            showCancelButton: true,
            focusConfirm: true,
            showConfirmButton:true
        }).then((result) => {
            if (result.isConfirmed) {
                    $.ajax({
                    url:'<?php echo base_url(); ?>NonKyc/deleteFunnelFamilyPhoto/'+crimeId,
                    type:'get',
                    success:function(res)
                    {
                        toastr.success('Photo Deleted Successfully');
                        setTimeout(function()
                        {
                            location.reload();
                        },2000);
                    }
                })
            }
        })
    }
    
    function showReUpload(index)
    {
        $('#reUploadBtn'+index).removeClass('d-none');
        $('#reUploadDiv'+index).removeClass('d-none');
    }
    
    function uploadLatestPhoto(ele,index)
    {
        if($('#latestPhoto'+index).val() == '')
        {
            toastr.error('Please Select Photo to continue');
        }else{
            $(ele).attr('disabled','disabled');
            let data = new FormData();
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            data.append('isUploaded',$('#isLatestPhotoUploaded'+index).val());
            let file = $('#latestPhoto'+index).val();
            data.append('file',file);
            toastr.remove();
            toastr.info("Please wait <b class='loading'></b>");      
            $.ajax({
                url:'<?php echo base_url(); ?>NonKyc/uploadFunnelFamilyPhoto',
                data:data,
                contentType: false,
                cache: false,
                processData:false,
                type:'post',
                success:function(res)
                {
                    toastr.remove();
                    let parse = JSON.parse(res);
                    if(parse.status == 'success')
                    {
                        toastr.remove();
                        toastr.success(parse.message);
                        setTimeout(function()
                        {
                          location.reload();
                        },2000);
                    }else{
                        toastr.remove();
                        toastr.error(parse.message);
                    }
                }
            });
        }
    }
    
    $('#crossIcon').click(function()
    {
        $('#input-file').val('');
        $('#isFirstUploaded').val('unlock');
        $('#profile-pic').attr('src','<?= base_url(); ?>assets/images/faceicon.png');
        $('#crossIcon').addClass('d-none');
    })
    
    $('#crossIcon1').click(function()
    {
        $('#profile-pic1').attr('src','<?= base_url(); ?>assets/images/faceicon.png');
        $('#isSecondUploaded').val('unlock');
        $('#input-file1').val('');
        $('#crossIcon1').addClass('d-none');
    })
    
    $('#crossIcon2').click(function()
    {
        $('#profile-pic2').attr('src','<?= base_url(); ?>assets/images/faceicon.png');
        $('#input-file2').val('');
        $('#isThirdUploaded').val('unlock');
        $('#crossIcon2').addClass('d-none');
    })
    
    $('#btnOtp').addClass('btn-style-grey').removeClass('btn-style-five');
    $('#btnOtp').addClass('disabled');
    
    $('#btn1Submit').click(function()
    {
        $(this).attr('disabled','disabled');
        if($('#person_name').val() == '')
        {
            toastr.remove();
            toastr.error('Please add Person Name');
            $(this).removeAttr('disabled');
        }else if($('#Gender').val() == '')
        {
            toastr.remove();
            toastr.error('Please select Gender');
            $(this).removeAttr('disabled');
        }else if($('#Age').val() == '')
        {
            toastr.remove();
            toastr.error('Please select DOB');
            $(this).removeAttr('disabled');
        }else if($('#otherrelation').val() == '')
        {
            toastr.remove();
            toastr.error('Please select relation with family member');
            $(this).removeAttr('disabled');
        }
        else{
            $('#loginForm')[0].submit();   
        }
    })
    
    function limit(val,type)
    {
        if(type == 'aadhar')
        {
            var max_chars = 11;
            if(val.value.length > max_chars) {
                $('#btnaadharNext').removeClass('btn-style-grey').addClass('btn-style-five');
                $('#btnaadharNext').removeClass('disabled');
                val.value = val.value.substr(0, (max_chars + 1));
            }else{
                $('#btnaadharNext').addClass('btn-style-grey').removeClass('btn-style-five');
                $('#btnaadharNext').addClass('disabled');
            }   
        }else{
            var min_chars = 9;
            if(val.value.length > min_chars) {
                $('#btnOtp').removeClass('btn-style-grey').addClass('btn-style-five');
                $('#btnOtp').removeClass('disabled');
                val.value = val.value.substr(0, (min_chars + 1));
            }else{
                $('#btnOtp').addClass('btn-style-grey').removeClass('btn-style-five');
                $('#btnOtp').addClass('disabled');
            }
        }
    }

    function getcity(id)
    {
      var sid=$('#state').val();
      $('#city').prop('selectedIndex',0);
      if(id!="")
      {
        $.ajax({
          url:"<?php echo base_url(); ?>/ngo/getdistrict?cid="+id+"&sid="+sid,
            
            type:'get',
            success:function(res)
            {
              $('#city').html(res);
            }
        })
      }
      else
      {
        
        $('#city').html('<option value="">Select City</option>');
      }
      
    }
    
    $('#btn3Back').click(function(){
        $(this).attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>upload-family-member-funnel?pn=2";
    })
    
    $('#btn2Next').click(function(){
        $(this).attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>upload-family-member-funnel?pn=3";
    })
    
    $('#btn2Back').click(function(){
        $(this).attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>upload-family-member-funnel?pn=2";
    })
    
    $('input[type=radio]').change(function() {
        if (this.value == 'with') 
        {
            $('#loginForm').removeClass('d-none');
            $('#loginForm2').addClass('d-none');
        }
        else  
        {
            
            $('#loginForm2').removeClass('d-none');
            $('#loginForm').addClass('d-none');
        }
    });
    
    function showOther(ele,index)
    {
      if(ele.checked)
      {
          $('#other'+index+'div').removeClass('d-none');
          $('#othermob'+index).attr('required',true);
          $('#othermob'+index).attr('name','othermob'+index);
          $('#othermob'+index).val('');
      }else{
          $('#other'+index+'div').addClass('d-none');
          $('#othermob'+index).attr('required',false);
          $('#othermob'+index).removeAttr('name');
          $('#othermob'+index).val('');
      }
    }
    
    function showOtherButtonAccordingly(ele,val)
    {
        var characterCount = $(ele).val().length,
        current = $('#current'),
        maximum = $('#maximum'),
        theCount = $('#the-count');
        current.text(characterCount);
        if (characterCount < 70) {
            current.css('color', '#666');
        }
        if (characterCount > 70 && characterCount < 270) {
            current.css('color', '#6d5555');
        }
        if (characterCount > 270 && characterCount < 300) {
            maximum.css('color', '#8f0001');
            current.css('color', '#8f0001');
            theCount.css('font-weight','bold');
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
    
    function showOtpAccordingly(val,index)
    {
        if(val.length == 10)
        {
            $('#btnOtp'+index).removeClass('btn-style-grey').addClass('btn-style-five');
            $('#btnOtp'+index).removeClass('disabled');
        }else{
            $('#btnOtp'+index).removeClass('btn-style-five').addClass('btn-style-grey');
            $('#btnOtp'+index).addClass('disabled');
        }
    }
    
    function clearOtherDiv(index)
    {
        $('#rel'+index+'Div').removeClass('d-none');
        $('#otherrelationdiv'+index).addClass('d-none');
        $('#otherrelation'+index).val('');
        $('#wellrel'+index).val('').trigger('change');
    }
    
    function deleteFace(ele,index)
    {
        Swal.fire({
            title: '<strong class="text-danger" style="font-size:20px;">Face Match</strong>',
            icon: 'info',
            allowOutsideClick:false,
            html:
                '<div class="form-group mt-3"><label class="form-label" style="font-size:17px!important;">Are you sure you want to delete this face match photo?</label></div>',
            showCloseButton: true,
            showCancelButton: false,
            confirmButtonText:'Yes',
            cancelButtonText:'No',
            focusConfirm: false,
            showConfirmButton:true
        }).then((result) => {
            if (result.isConfirmed) {
                $(ele).attr('disabled','disabled');
                let data = new FormData();
                data.append('index',index);
                data.append('id',<?php echo $data[0]['id']; ?>);
                data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                $.ajax({
                    url:'<?php echo base_url(); ?>NonKyc/deleteFaceMatchFromFunnelFamily',
                    data:data,
                    contentType: false,
                    cache: false,
                    processData:false,
                    type:'post',
                    success:function(res)
                    {
                        toastr.success('Face Match Photo Deleted Successfully');
                        setTimeout(function()
                        {
                            location.reload();
                        },2000);
                    }
                });
            }
        })
    }
    
    function deleteAlternate(ele,index)
    {
        $(ele).attr('disabled','disabled');
        Swal.fire({
            title: '<strong class="text-danger" style="font-size:20px;">Remove Contact - '+$('#othermob'+index).val()+'</strong>',
            icon: 'error',
            allowOutsideClick:false,
            html:
                '<div class="form-group mt-3"><label class="form-label">Are you sure you want to remove this number?</label></div>',
            showCloseButton: true,
            confirmButtonText:'Yes',
            cancelButtonText:'No',
            showCancelButton: true,
            focusConfirm: false,
            showConfirmButton:true
        }).then((result) => {
            if (result.isConfirmed) {
                $(ele).attr('disabled','disabled');
                let otpdata = new FormData();
                otpdata.append('index',index);
                otpdata.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                $.ajax({
                    url:'<?php echo base_url(); ?>NonKyc/deleteFunnelFamilyPersonMobile',
                    data:otpdata,
                    contentType: false,
                    cache: false,
                    processData:false,
                    type:'post',
                    success:function(res)
                    {
                        let parse = JSON.parse(res);
                        if(parse.status == 'success')
                        {
                            toastr.success(parse.message);
                            setTimeout(function()
                            {
                                location.reload();
                            },2000);
                        }else{
                            toastr.error(parse.message);
                            $(ele).removeAttr('disabled');
                        }
                    }
                })
            }else{
                $(ele).removeAttr('disabled');
            }
        })
    }
    
    function verifyOtp(ele,index)
    {
        if($('#otp'+index).val() != '')
        {
            $(ele).attr('disabled','disabled');
            let data= new FormData();
            data.append('otp',$('#otp'+index).val());
            data.append('index',index);
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            data.append('mobile',$('#othermob'+index).val());
            $.ajax({
                url:'<?php echo base_url(); ?>NonKyc/verifyFunnelFamilyPersonMobileOtp',
                data:data,
                contentType: false,
                cache: false,
                processData:false,
                type:'post',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    if(parse.status == 'success')
                    {
                        toastr.success(parse.message);
                        setTimeout(function()
                        {
                            location.reload();
                        },3000);
                    }else{
                        toastr.error(parse.message);
                        $(ele).removeAttr('disabled');
                    }
                }
            })   
        }else{
            toastr.error('Please Enter Valid OTP');
        }   
    }

    function sendOtp(index)
    {
        $('#btnOtp'+index).attr('disabled','disabled');
        if($('#othermob'+index).val() != '')
        {
            let data= new FormData();
            data.append('mobile',$('#othermob'+index).val());
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            
            $.ajax({
                url:'<?php echo base_url(); ?>NonKyc/sendFunnelFamilyPersonMobileOtp',
                data:data,
                contentType: false,
                cache: false,
                processData:false,
                type:'post',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    if(parse.status == 'success')
                    {
                        toastr.success(parse.message);
                        Swal.fire({
                            title: '<strong>Enter OTP to proceed </strong>',
                            icon: 'success',
                            allowOutsideClick:false,
                            html:
                                '<div class="form-group mb-3"><input type="number" class="form-control" id="otp'+index+'"></div><div class="form-group"><button type="button" class="w-100 btn btn-primary save disabled-on-loading" onclick="verifyOtp(this,'+index+')"> Verify OTP</button></div><div class="form-group mt-3 col-lg-6 col-md-6 col-sm-12" style="margin-left:auto;"><button type="button" class="w-100 btn btn-primary btn-style-five disabled-on-loading" onclick="resendOtp(this,'+index+')"> Resend OTP</button></div>',
                            showCloseButton: true,
                            showCancelButton: false,
                            focusConfirm: false,
                            showConfirmButton:false
                            }).then((result) => {
                                if(result.isDismissed){
                                    location.reload();
                                }
                            })
                    }else if(parse.status == 'username')
                    {
                        toastr.warning(parse.message);
                        setTimeout(function()
                        {
                            location.reload();
                        },4000);
                    }else{
                        toastr.error(parse.message);
                        setTimeout(function()
                        {
                            location.reload();
                        },4000);
                    }
                }
            })
        }else{
            toastr.error('Please Enter Valid Mobile Number');
            $('#btnOtp'+index).removeAttr('disabled');
        }
    }
    
    $('#my-button').click(function(){
        $('#input-file').val('');
        $('#input-file').click();   
    });
    
    $('#my-button1').click(function(){
        if($('#facematch').val() == '')
        {
            toastr.error("You have to upload first photo to unlock this feature.");
        }else{
            $('#input-file1').val('');
            $('#input-file1').click();   
        }
    });
    
    $('#my-button2').click(function(){
        if($('#facematch').val() == '')
        {
            toastr.error("You have to upload first photo to unlock this feature.");
        }else{
            if($('#facematch1').val() == '')
            {
                toastr.error("You have to upload second photo first.");
            }else{
                $('#input-file2').val('');
                $('#input-file2').click();   
            }
        }
    });
    
    function resendOtp(ele,index)
    {
        let mob = $('#othermob'+index).val();
        $(ele).attr('disabled','disabled');
        let data= new FormData();
        data.append('mobile',mob);
        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        $.ajax({
            url:'<?php echo base_url(); ?>user/sendFunnelFamilyPersonMobileOtp',
            data:data,
            contentType: false,
            cache: false,
            processData:false,
            type:'post',
            success:function(res)
            {
                let parse = JSON.parse(res);
                if(parse.status == 'success')
                {
                    toastr.success(parse.message);
                    $(ele).removeAttr('disabled');
                }else if(parse.status == 'username')
                {
                    toastr.warning(parse.message);
                    $(ele).removeAttr('disabled');
                }else{
                    toastr.error(parse.message);
                    $(ele).removeAttr('disabled');
                }
            }
        })
    }
    
    function getAgeBand(val)
    {
        if(val == '')
        {
            toastr.error('Please Select DOB');
            $('.ageDiv').addClass('d-none');
        }else{
            let data = new FormData();
            data.append('dob',val);   
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
                url:'<?php echo base_url(); ?>user/getAge',
                type:'post',
                processData:false,
                contentType:false,
                data:data,
                cache:false,
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    if(parse.status == 'success')
                    {
                        $('#Age').val(parse.ageBand);
                        $('#Age').attr('readonly',true);
                        $('#ageBand').val(parse.age);
                        $('.ageDiv').removeClass('d-none');
                    }
                }
            })
        }
    }
    
    function showLink()
    {
        $('#shareDiv').slideToggle('fast');
    }
    
</script>
<script>
    function showAlert()
    {
        toastr.error("You have to upload the face match photo to continue");
    }

    lottie.loadAnimation({
        container: document.getElementById('lottie-animation'), // Animation render hone ka container
        renderer: 'svg', // SVG format me render karne ke liye
        // loop: true, // Animation loop kare
        // autoplay: true, // Animation automatically play kare
        path: '<?= base_url(); ?>assets/jsons/family_frt.json', // JSON file ka path
      });

    <?php $getProfileDetail = $this->db->query('select * from nonKycUser where uid='.$_SESSION['user_id'])->result_array(); ?>
    <?php 
        $from=new DateTime(date('Y-m-d'));
        $to   = new DateTime($getProfileDetail[0]['dob']);
        $age = ($from->diff($to)->y);
        if($age < 18)
        {
    ?>
    Swal.fire({
        html:'<div style="border:15px solid black;" class="my-3 p-3"><img src="<?php echo base_url(); ?>assets/icons/lapatasorry.png" style="width:100px;height:100px;" class="mb-3"><h5><b style="color:red;font-size:20px;">Below 18 ! Not Authorised <br> to Use This Service</b></h5></div>',
        customClass:{
            title:'pt-0 lh-1',
            icon:'mt-3',
            popup:'py-1',
            htmlContainer:'my-0'
        },
        allowOutsideClick:true,
        showCloseButton: false,
        showCancelButton: false,
        focusConfirm: true,
        confirmButtonText:'Go To Dashboard',
        showConfirmButton:false
    }).then((result) => {
        location.href="<?php echo base_url(); ?>non-kyc-dashboard-profile";
    })
    <?php 
        } 
    ?>

    let vehicleCount = 0;
    addMoreVehicle();
    
    function addMoreVehicle()
    {
        if(vehicleCount < 3)
        {
            if(vehicleCount == 0)
            {
                $('#addMoreVehicle').attr('disabled','disabled');
                vehicleCount++;
                let html = '<div class="row align-items-center justify-content-start justify-content-md-center">';
                html += '<div class="col-lg-auto col-md-auto col-sm-12 col-10 my-3 form-floating"><input type="text" class="form-control text-uppercase" placeholder="Vehicle No." onKeyUp="showVehicleAccordingly(this.value)" maxlength="10" name="vehicleNumber'+vehicleCount+'" id="vehicleNumber'+vehicleCount+'"><label for="vehicleNumber'+vehicleCount+'" class="ms-2">Enter Vehicle Number</div>';
                html += '<div class="col-lg-auto col-md-auto col-sm-12 col-2 my-3" id="addVehicleDiv_'+vehicleCount+'"><button type="button" class="btn btn-secondary disabled" style="background:grey!important;color:white!important;"><i class="fa fa-check-circle"></i></button></div>';
                html += '<div class="col-lg-auto col-md-auto col-sm-12 col-2 my-3 d-none" id="addVehicleSuccessDiv_'+vehicleCount+'"><button type="button" onclick="addVehicle()" class="btn btn-success" style="background:green!important;color:white!important;"><i class="fa fa-check-circle"></i></button></div>';
                html += '<div class="col-lg-auto col-md-auto col-sm-12 col-2 my-3 d-none" id="deleteVehicleDiv_'+vehicleCount+'"><button type="button" onclick="removeVehicle()" class="btn btn-danger" style="background:white!important;color:red!important;"><i class="fa fa-minus"></i></button></div></div>';
                $('#vehicleDetail').append(html);
                $('#vehicleCount').val(vehicleCount);
                $('#addMoreVehicle').removeAttr('disabled'); 
            }else{
                if(vehicleCount == 1)
                {
                    if($('#vehicleNumber1').val().length == 10 && $('#addVehicleSuccessDiv_1').hasClass('d-none'))
                    {
                        $('#addMoreVehicle').attr('disabled','disabled');
                        vehicleCount++;
                        let html = '<div class="row align-items-center justify-content-start justify-content-md-center">';
                        html += '<div class="col-lg-auto col-md-auto col-sm-12 col-10 my-3 form-floating"><input type="text" class="form-control text-uppercase" placeholder="Vehicle No." onKeyUp="showVehicleAccordingly(this.value)" maxlength="10" name="vehicleNumber'+vehicleCount+'" id="vehicleNumber'+vehicleCount+'"><label for="vehicleNumber'+vehicleCount+'" class="ms-2">Enter Vehicle Number</div>';
                        html += '<div class="col-lg-auto col-md-auto col-sm-12 col-2 my-3" id="addVehicleDiv_'+vehicleCount+'"><button type="button" class="btn btn-secondary disabled" style="background:grey!important;color:white!important;"><i class="fa fa-check-circle"></i></button></div>';
                        html += '<div class="col-lg-auto col-md-auto col-sm-12 col-2 my-3 d-none" id="addVehicleSuccessDiv_'+vehicleCount+'"><button type="button" onclick="addVehicle()" class="btn btn-success" style="background:green!important;color:white!important;"><i class="fa fa-check-circle"></i></button></div>';
                        html += '<div class="col-lg-auto col-md-auto col-sm-12 col-2 my-3 d-none" id="deleteVehicleDiv_'+vehicleCount+'"><button type="button" onclick="removeVehicle()" class="btn btn-danger" style="background:white!important;color:red!important;"><i class="fa fa-minus"></i></button></div></div>';
                        $('#vehicleDetail').append(html);
                        $('#vehicleCount').val(vehicleCount);
                        $('#addMoreVehicle').removeAttr('disabled'); 
                    }else{
                        toastr.error("Please add vehicle number 1 firstly to continue.");
                    }
                }else{
                    if($('#vehicleNumber2').val().length == 10 && $('#addVehicleSuccessDiv_2').hasClass('d-none'))
                    {
                        $('#addMoreVehicleDiv').addClass('d-none');
                        $('#addMoreVehicle').attr('disabled','disabled');
                        vehicleCount++;
                        let html = '<div class="row align-items-center justify-content-start justify-content-md-center">';
                        html += '<div class="col-lg-auto col-md-auto col-sm-12 col-10 my-3 form-floating"><input type="text" class="form-control text-uppercase" placeholder="Vehicle No." onKeyUp="showVehicleAccordingly(this.value)" maxlength="10" name="vehicleNumber'+vehicleCount+'" id="vehicleNumber'+vehicleCount+'"><label for="vehicleNumber'+vehicleCount+'" class="ms-2">Enter Vehicle Number</div>';
                        html += '<div class="col-lg-auto col-md-auto col-sm-12 col-2 my-3" id="addVehicleDiv_'+vehicleCount+'"><button type="button" class="btn btn-secondary disabled" style="background:grey!important;color:white!important;"><i class="fa fa-check-circle"></i></button></div>';
                        html += '<div class="col-lg-auto col-md-auto col-sm-12 col-2 my-3 d-none" id="addVehicleSuccessDiv_'+vehicleCount+'"><button type="button" onclick="addVehicle()" class="btn btn-success" style="background:green!important;color:white!important;"><i class="fa fa-check-circle"></i></button></div>';
                        html += '<div class="col-lg-auto col-md-auto col-sm-12 col-2 my-3 d-none" id="deleteVehicleDiv_'+vehicleCount+'"><button type="button" onclick="removeVehicle()" class="btn btn-danger" style="background:white!important;color:red!important;"><i class="fa fa-minus"></i></button></div></div>';
                        $('#vehicleDetail').append(html);
                        $('#vehicleCount').val(vehicleCount);
                        $('#addMoreVehicle').removeAttr('disabled'); 
                    }else{
                        toastr.error("Please add vehicle number 2 firstly to continue.");
                    }
                }
            }
        }else{
            toastr.error('Only 3 Vehicle Information can be added.');
        }
    }

    let goldCount = 0;
    addMoreGold();
    
    function addMoreGold()
    {
        if(goldCount < 3)
        {
            if(goldCount == 0)
            {
                $('#addMore').attr('disabled','disabled');
                goldCount++;
                let html = '<div class="row align-items-center justify-content-start justify-content-md-center">';
                html += '<div class="col-lg-auto col-md-auto col-sm-12 col-10 my-3 form-floating"><input type="text" class="form-control text-uppercase" placeholder="GOLD HUID No." onKeyUp="showGoldAccordingly(this.value)" maxlength="6" name="goldHUIDNumber'+goldCount+'" id="goldHUIDNumber'+goldCount+'"><label for="goldHUIDNumber'+goldCount+'" class="ms-2">Enter Gold HUID Number</div>';
                html += '<div class="col-lg-auto col-md-auto col-sm-12 col-2 my-3" id="addDiv_'+goldCount+'"><button type="button" class="btn btn-secondary disabled" style="background:grey!important;color:white!important;"><i class="fa fa-check-circle"></i></button></div>';
                html += '<div class="col-lg-auto col-md-auto col-sm-12 col-2 my-3 d-none" id="addSuccessDiv_'+goldCount+'"><button type="button" onclick="addGold()" class="btn btn-success" style="background:green!important;color:white!important;"><i class="fa fa-check-circle"></i></button></div>';
                html += '<div class="col-lg-auto col-md-auto col-sm-12 col-2 my-3 d-none" id="deleteDiv_'+goldCount+'"><button type="button" onclick="removeGold()" class="btn btn-danger" style="background:white!important;color:red!important;"><i class="fa fa-minus"></i></button></div></div>';
                $('#goldDetail').append(html);
                $('#goldCount').val(goldCount);
                $('#addMore').removeAttr('disabled'); 
            }else{
                if(goldCount == 1)
                {
                    if($('#goldHUIDNumber1').val().length == 6 && $('#addSuccessDiv_1').hasClass('d-none'))
                    {
                        $('#addMore').attr('disabled','disabled');
                        goldCount++;
                        let html = '<div class="row align-items-center justify-content-start justify-content-md-center">';
                        html += '<div class="col-lg-auto col-md-auto col-sm-12 col-10 my-3 form-floating"><input type="text" class="form-control text-uppercase" placeholder="GOLD HUID No." onKeyUp="showGoldAccordingly(this.value)" maxlength="6" name="goldHUIDNumber'+goldCount+'" id="goldHUIDNumber'+goldCount+'"><label for="goldHUIDNumber'+goldCount+'" class="ms-2">Enter Gold HUID Number</div>';
                        html += '<div class="col-lg-auto col-md-auto col-sm-12 col-2 my-3" id="addDiv_'+goldCount+'"><button type="button" class="btn btn-secondary disabled" style="background:grey!important;color:white!important;"><i class="fa fa-check-circle"></i></button></div>';
                        html += '<div class="col-lg-auto col-md-auto col-sm-12 col-2 my-3 d-none" id="addSuccessDiv_'+goldCount+'"><button type="button" onclick="addGold()" class="btn btn-success" style="background:green!important;color:white!important;"><i class="fa fa-check-circle"></i></button></div>';
                        html += '<div class="col-lg-auto col-md-auto col-sm-12 col-2 my-3 d-none" id="deleteDiv_'+goldCount+'"><button type="button" onclick="removeGold()" class="btn btn-danger" style="background:white!important;color:red!important;"><i class="fa fa-minus"></i></button></div></div>';
                        $('#goldDetail').append(html);
                        $('#goldCount').val(goldCount);
                        $('#addMore').removeAttr('disabled'); 
                    }else{
                        toastr.error("Please add Gold HUID number 1 firstly to continue.");
                    }
                }else{
                    if($('#goldHUIDNumber2').val().length == 6 && $('#addSuccessDiv_2').hasClass('d-none'))
                    {
                        $('#addMoreDiv').addClass('d-none');
                        $('#addMore').attr('disabled','disabled');
                        goldCount++;
                        let html = '<div class="row align-items-center justify-content-start justify-content-md-center">';
                        html += '<div class="col-lg-auto col-md-auto col-sm-12 col-10 my-3 form-floating"><input type="text" class="form-control text-uppercase" placeholder="GOLD HUID No." onKeyUp="showGoldAccordingly(this.value)" maxlength="6" name="goldHUIDNumber'+goldCount+'" id="goldHUIDNumber'+goldCount+'"><label for="goldHUIDNumber'+goldCount+'" class="ms-2">Enter Gold HUID Number</div>';
                        html += '<div class="col-lg-auto col-md-auto col-sm-12 col-2 my-3" id="addDiv_'+goldCount+'"><button type="button" class="btn btn-secondary disabled" style="background:grey!important;color:white!important;"><i class="fa fa-check-circle"></i></button></div>';
                        html += '<div class="col-lg-auto col-md-auto col-sm-12 col-2 my-3 d-none" id="addSuccessDiv_'+goldCount+'"><button type="button" onclick="addGold()" class="btn btn-success" style="background:green!important;color:white!important;"><i class="fa fa-check-circle"></i></button></div>';
                        html += '<div class="col-lg-auto col-md-auto col-sm-12 col-2 my-3 d-none" id="deleteDiv_'+goldCount+'"><button type="button" onclick="removeGold()" class="btn btn-danger" style="background:white!important;color:red!important;"><i class="fa fa-minus"></i></button></div></div>';
                        $('#goldDetail').append(html);
                        $('#goldCount').val(goldCount);
                        $('#addMore').removeAttr('disabled'); 
                    }else{
                        toastr.error("Please add Gold HUID number 2 firstly to continue.");
                    }
                }   
            }
        }else{
            toastr.error('Only 3 Gold Information can be added.');
        }
    }
    
    function showGoldAccordingly(val)
    {
        if(val.length == 6)
        {
            $('#addDiv_'+goldCount).addClass('d-none');
            $('#addSuccessDiv_'+goldCount).removeClass('d-none');
        }else{
            $('#addDiv_'+goldCount).removeClass('d-none');
            $('#addSuccessDiv_'+goldCount).addClass('d-none');
        }
    }

    function showVehicleAccordingly(val)
    {
        if(val.length == 10)
        {
            $('#addVehicleDiv_'+vehicleCount).addClass('d-none');
            $('#addVehicleSuccessDiv_'+vehicleCount).removeClass('d-none');
        }else{
            $('#addVehicleDiv_'+vehicleCount).removeClass('d-none');
            $('#addVehicleSuccessDiv_'+vehicleCount).addClass('d-none');
        }
    }

    function addVehicle()
    {
        if(vehicleCount == 1)
        {
            $('#addVehicleDiv_'+vehicleCount).addClass('d-none');
            $('#addMoreVehicleDiv').removeClass('d-none');
            $('#addVehicleSuccessDiv_'+vehicleCount).addClass('d-none');
            $('#deleteVehicleDiv_'+vehicleCount).removeClass('d-none');
        }else if(vehicleCount == 2)
        {
            if($('#vehicleNumber1').val() == $('#vehicleNumber2').val())
            {
                toastr.error("Please add different vehicle Number");
            }else{
                $('#addVehicleDiv_'+vehicleCount).addClass('d-none');
                $('#addMoreVehicleDiv').removeClass('d-none');
                $('#addVehicleSuccessDiv_'+vehicleCount).addClass('d-none');
                $('#deleteVehicleDiv_'+vehicleCount).removeClass('d-none');
            }
        }else if(vehicleCount == 3)
        {
            if($('#vehicleNumber1').val() == $('#vehicleNumber3').val())
            {
                toastr.error("Please add different vehicle Number");
            }else{
                if($('#vehicleNumber2').val() == $('#vehicleNumber3').val())
                {
                    toastr.error("Please add different vehicle Number");
                }else{
                    $('#addVehicleDiv_'+vehicleCount).addClass('d-none');
                    $('#addMoreVehicleDiv').addClass('d-none');
                    $('#addVehicleSuccessDiv_'+vehicleCount).addClass('d-none');
                    $('#deleteVehicleDiv_'+vehicleCount).removeClass('d-none');
                }
            }
        }
    }
    
    function addGold()
    {
        if(goldCount == 1)
        {
            $('#addDiv_'+goldCount).addClass('d-none');
            $('#addMoreDiv').removeClass('d-none');
            $('#addSuccessDiv_'+goldCount).addClass('d-none');
            $('#deleteDiv_'+goldCount).removeClass('d-none');
        }else if(goldCount == 2)
        {
            if($('#goldHUIDNumber1').val() == $('#goldHUIDNumber2').val())
            {
                toastr.error("Please add different gold HUID Number");
            }else{
                $('#addDiv_'+goldCount).addClass('d-none');
                $('#addMoreDiv').removeClass('d-none');
                $('#addSuccessDiv_'+goldCount).addClass('d-none');
                $('#deleteDiv_'+goldCount).removeClass('d-none');
            }
        }else if(goldCount == 3)
        {
            if($('#goldHUIDNumber1').val() == $('#goldHUIDNumber3').val())
            {
                toastr.error("Please add different gold HUID Number");
            }else{
                if($('#goldHUIDNumber2').val() == $('#goldHUIDNumber3').val())
                {
                    toastr.error("Please add different gold HUID Number");
                }else{
                    $('#addDiv_'+goldCount).addClass('d-none');
                    $('#addMoreDiv').addClass('d-none');
                    $('#addSuccessDiv_'+goldCount).addClass('d-none');
                    $('#deleteDiv_'+goldCount).removeClass('d-none');
                }
            }
        }
    }

    function removeVehicle()
    {
        Swal.fire({
            title: '<strong class="text-danger" style="font-size:20px;">Vehicle</strong>',
            icon: 'error',
            allowOutsideClick:false,
            html:
                '<div class="form-group mt-3"><label class="form-label">Are you sure you want to delete vehicle details?</label></div>',
            showCloseButton: true,
            confirmButtonText:'Yes',
            cancelButtonText:'No',
            showCancelButton: true,
            focusConfirm: false,
            showConfirmButton:true
        }).then((result) => {
            if (result.isConfirmed) {
                $('#vehicleDetail').children().last().remove();
                vehicleCount--;
                $('#vehicleCount').val(vehicleCount);
                if(vehicleCount == 0)
                {
                    $('#addMoreVehicleDiv').addClass('d-none');
                    addMoreVehicle();
                }else{
                    $('#addMoreVehicleDiv').removeClass('d-none');
                }
            }
        })
    }
    
    function removeGold()
    {
        Swal.fire({
            title: '<strong class="text-danger" style="font-size:20px;">Gold</strong>',
            icon: 'error',
            allowOutsideClick:false,
            html:
                '<div class="form-group mt-3"><label class="form-label">Are you sure you want to delete gold details?</label></div>',
            showCloseButton: true,
            confirmButtonText:'Yes',
            cancelButtonText:'No',
            showCancelButton: true,
            focusConfirm: false,
            showConfirmButton:true
        }).then((result) => {
            if (result.isConfirmed) {
                $('#goldDetail').children().last().remove();
                goldCount--;
                $('#goldCount').val(goldCount);
                if(goldCount == 0)
                {
                    $('#addMoreDiv').addClass('d-none');
                    addMoreGold();
                }else{
                    $('#addMoreDiv').removeClass('d-none');
                }
            }
        })
    }
    
    function getdistrict(id)
    {
      $('#district').prop('selectedIndex',0);
      $('#city').prop('selectedIndex',0);
      $('#city').html('<option value="">Select City</option>');
      if(id!="")
      {
        $.ajax({
          url:"<?php echo base_url(); ?>/ngo/getdistrict?id="+id,
            data:id,
            
            type:'get',
            success:function(res)
            {
              $('#district').html(res);
            }
        })
      }
      else
      {
        $('#district').html('<option value="">Select District</option>');
        $('#city').html('<option value="">Select City</option>');
      }
      
    }
    
    function clearOtherDivFirst(index = '')
    {
        $('#rel'+index+'Div').removeClass('d-none');
        $('#otherrelationdiv'+index).addClass('d-none');
        $('#otherrelationname'+index).val('');
        $('#otherrelation'+index).val('').trigger('change');
    }
    
    function showAccordingly(val)
    {
        let index = '';
        if(val == '')
        {
            $('#rel'+index+'Div').removeClass('d-none');
            $('#otherrelationdiv'+index).addClass('d-none');
        }else{
            if(val == 23)
            {
                $('#rel'+index+'Div').addClass('d-none');
                $('#otherrelationdiv'+index).removeClass('d-none');
            }else{
                $('#rel'+index+'Div').removeClass('d-none');
                $('#otherrelationdiv'+index).addClass('d-none');
            }
        }
    }
    
    function getAgeBand(val)
    {
        if(val == '')
        {
            toastr.error('Please Select DOB');
            $('.ageDiv').addClass('d-none');
        }else{
            let data = new FormData();
            data.append('dob',val);   
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
                url:'<?php echo base_url(); ?>user/getAge',
                type:'post',
                processData:false,
                contentType:false,
                data:data,
                cache:false,
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    if(parse.status == 'success')
                    {
                        $('#Age').val(parse.ageBand);
                        $('#Age').attr('readonly',true);
                        $('#ageBand').val(parse.age);
                        $('.ageDiv').removeClass('d-none');
                    }
                }
            })
        }
    }
    
    function back()
    {
        location.href="<?= base_url(); ?>non-kyc-dashboard-profile";
    }
    
    <?php 
        if(($this->session->flashdata('error')))
        {
    ?>
    toastr.error('<?= $this->session->flashdata('error'); ?>');
    <?php 
        unset($_SESSION['error']);
    ?>
    <?php } ?>
    
    </script>