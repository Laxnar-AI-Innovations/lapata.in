<?php 
    unset($_SESSION['familyId']);
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .text-gradient1 {
      background: linear-gradient(to right, #f23a00, #FFA500, #FF0000);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      text-shadow: 2px 2px 4px rgba(255, 153, 51,0.6);
    }
    .form-check-input{
        height: 1.5em;
        width: 1.5em;
    }

    .btn-style-grey{
        background: #444!important;
    }

    .input-group{
        width: auto;
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
        padding-top: 5px;
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
                            <div class="card-body px-1 p-3 py-0 mt-0">
                                <div class="row pt-0 pb-0 justify-content-start justify-content-md-between" style="align-items:center;">
                                    <div class="col-12 col-md-6 my-3">
                                        <h6 class="card-title py-0 mb-0 fs-5 text-center text-md-start ms-md-3 ms-0">ભાદરવી પૂનમ મહામેળા <i class="text-danger" id="complaintTypeLabel"></i> FORM <i class="fa fa-user-plus"></i></h6>
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
                        <form id="loginForm" action="<?php echo base_url(); ?>NonKyc/postMahakumbhMemberSpecial" method="post" class="row g-3 w-100 needs-validation1"  enctype="multipart/form-data">
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
                                        <div class="form-floating col-12 col-md-auto">
                                            <label style="margin-left:0.8rem;">Date</label>
                                            <input type="date" name="dateCreated" id="dateCreated" class="form-control mt-2" max="<?= date('Y-m-d') ?>">
                                        </div>
                                        <div class="form-floating mt-3 col-12 col-md-3">
                                          <input type="text" class="form-control" name="person_name"   id="person_name"  placeholder="Aadhar Number">
                                          <label for="pkgdur" class="ms-2">Name</label>
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
                                        <div class="form-floating mt-3 col-12 col-md-auto">
                                            <select class="form-control" name="AgeBand" id="ageBand">
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
                            <div class="card mb-3 mt-0 w-100">
                                <div class="pt-0 pb-0 card-header">
                                    <h5 class="card-title text-center pb-0 fs-4 mb-2">Upload Face Match Photo & Type Message </h5>
                                </div>
                                <div class="row align-items-center">
                                    <div class="row align-items-center">
                                        <div class="card-body mt-2 pb-0">
                                            <div class="row align-items-center justify-content-center">
                                                <div class="col-lg-3 col-md-4 my-3 col-10 text-center">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div style="position:relative;text-align:center;">
                                                                <img class="w-100" id="profile-pic" src="<?php echo base_url(); ?>assets/images/faceicon.png" style="height: 152px!important;border: 1px solid;border-radius: 15px 15px;" alt="">
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
                                                                <img class="w-100" id="profile-pic1" src="<?php echo base_url(); ?>assets/images/faceicon.png" style="height: 152px!important;border: 1px solid;object-fit:fill;" alt="">
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-4 my-3 col-10 text-center">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div style="position:relative;text-align:center;">
                                                                <img class="w-100" id="profile-pic2" src="<?php echo base_url(); ?>assets/images/faceicon.png" style="height: 152px!important;border: 1px solid;object-fit:fill;" alt="">
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="uploadType" id="uploadType">
                                                <input type="hidden" name="facematch" id="facematch">
                                                <input type="hidden" name="facematch1" id="facematch1">
                                                <input type="hidden" name="facematch2" id="facematch2">
                                                <div class="mb-3 col-12 col-md-5">
                                                    <label><b>Type Message: </b></label>
                                                    <textarea  maxlength="300"  onKeyUp="showOtherButtonAccordingly(this,this.value)" class="form-control" rows="50" style="height: 96px;border:3px solid black;"  id="Message" name="Message"></textarea>
                                                    <div id="the-count">
                                                        <span id="current">0</span>
                                                        <span id="maximum">/ 300</span>
                                                    </div>
                                                </div>
                                            </div>
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
                                                        <select class="form-control select2" name="district" id="district">
                                                            <option value="">Select District </option>
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body py-3">
                                    <div class="row align-items-center">
                                        <?php 
                                            $profileDetail = $this->db->query('select * from nonKycUser where uid='.$_SESSION['user_id'])->result_array();
                                        ?>
                                        <div class="input-group mb-2 col-sm-12 col-md-4 col-lg-3">
                                            <span class="input-group-text px-2" style="border:2px solid #dee2e6;background: white;" id="mobile-addon1">+91</span>
                                            <div class="form-floating">                                    
                                                <input type="number" readonly class="form-control" style="font-weight:bold;color:black;" value="<?php echo $_SESSION['landingMob']; ?>" name="otherMob1" id="otherMob1" placeholder="Mobile Number" aria-label="Mobile Number" aria-describedby="mobile-addon1">
                                                <label for="otherMob1" class="ms-2">Contact Number 1</label>
                                            </div>
                                        </div>
                                        <div class="input-group mb-2 col-sm-12 col-md-auto col-lg-auto">
                                            <span class="input-group-text px-2" style="border:2px solid #dee2e6;background: white;" id="mobile-addon2">+91</span>
                                            <div class="form-floating">                                    
                                                <input type="number" class="form-control" onchange="checkMobileLength(this,this.value)" onKeyPress="return checkLength(this.value,10)" style="font-weight:bold;color:black;" name="otherMob2" id="otherMob2" placeholder="Mobile Number" aria-label="Mobile Number" aria-describedby="mobile-addon2">
                                                <label for="otherMob2" class="ms-2">Contact Number 2</label>
                                            </div>
                                        </div>
                                        <div class="input-group mb-2 col-sm-12 col-md-auto col-lg-auto">
                                            <span class="input-group-text px-2" style="border:2px solid #dee2e6;background: white;" id="mobile-addon3">+91</span>
                                            <div class="form-floating">                                    
                                                <input type="number" class="form-control" onchange="checkMobileLength(this,this.value)" onKeyPress="return checkLength(this.value,10)" style="font-weight:bold;color:black;" name="otherMob3" id="otherMob3" placeholder="Mobile Number" aria-label="Mobile Number" aria-describedby="mobile-addon3">
                                                <label for="otherMob3" class="ms-2">Contact Number 3</label>
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
                                            <button class="btn btn-primary w-100 btn-style-green disabled-on-loading" name="btnwith" id="btn1Submit" type="button" style="background-color:  #05106c !important;padding: 0.8rem!important;"> Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
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

    <?php 
        if(isset($_GET['type']))
        {
    ?>
    let val = '<?= $_GET['type']; ?>';
    if(val == 'general')
    {
        $('#dateCreated').parent().addClass('d-none');
        $('#complaintTypeLabel').html('GENERAL');
        $('#uploadType').val('general');
    }else{
        if(val == 'khoya')
        {
            $('#dateCreated').parent().children('label').html('Missing Date');
            $('#complaintTypeLabel').html('KHOYA');
            $('#uploadType').val('missing');
        }else{
            $('#dateCreated').parent().children('label').html('Rescue Date');
            $('#complaintTypeLabel').html('PAYA');
            $('#uploadType').val('unknown');
        }
    }
    <?php }else{ ?>

        $(document).ready(function()
        {
            Swal.fire({
                iconHtml:'<img src="<?= base_url(); ?>assets/uploadAs.png" style="width:85px;height:85px;">',
                html:'<h6 class="text-center mb-1"><b style="color:black;">Please Choose Your Option</b></h6><div class="row align-items-end justify-content-center"><div class="col-auto form-group"><input name="uploadAs" type="radio" class="radio-custom" value="general" id="general" checked><label for="general" class="radio-custom-label ms-1" style="vertical-align:sub;"><b>Upload  General</b></label></div></div><div class="row align-items-end justify-content-center"><div class="col-auto form-group mt-1"><input name="uploadAs" type="radio" class="radio-custom" value="missing" id="missing"><label for="missing" class="radio-custom-label ms-1" style="vertical-align:sub;"><b>Upload  Khoya</b></label></div><div class="col-auto form-group mt-1"><input name="uploadAs" type="radio" class="radio-custom" value="unknown" id="unknown"><label for="unknown" class="radio-custom-label ms-1" style="vertical-align:sub;"><b>Upload Paya</b></label></div></div>',
                customClass:{
                    title:'pt-0 lh-1',
                    icon:'mt-3',
                    popup:'py-1',
                    actions : 'mt-1 mb-3',
                    htmlContainer:'my-0 py-0 px-2 overflow-hidden',
                },
                allowOutsideClick:false,
                showCloseButton: false,
                showCancelButton: false,
                focusConfirm: true,
                confirmButtonText:'Click to continue',
                showConfirmButton:true
            }).then((result) => {
                if($('input[name="uploadAs"]:checked').val() == undefined)
                {
                    toastr.error('please select your preference to continue');
                }else{
                    let val = $('input[name="uploadAs"]:checked').val();
                    if(val == 'general')
                    {
                        $('#dateCreated').parent().addClass('d-none');
                        $('#complaintTypeLabel').html($('input[name="uploadAs"]:checked').val().toUpperCase());
                    }else{
                        if(val == 'missing')
                        {
                            $('#dateCreated').parent().children('label').html('Missing Date');
                            $('#complaintTypeLabel').html('KHOYA');
                        }else{
                            $('#dateCreated').parent().children('label').html('Rescue Date');
                            $('#complaintTypeLabel').html('PAYA');
                        }
                    }
                    $('#uploadType').val($('input[name="uploadAs"]:checked').val());
                }
            })  
        })
    <?php } ?>

    function showRadioAccordingly(ele)
    {
        $('.confirmButton').addClass('btn-style-green').removeClass('btn-style-grey disabled');
    }

    function checkMobileLength(ele,val)
    {
        if(val.length != 10)
        {
            toastr.error("Please add 10 digit mobile number");
            $(ele).val('');
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

    $('#crossIcon').click(function()
    {
        $('#input-file').val('');
        $('#facematch').val('');
        let profile=document.getElementById('profile-pic');
        $('#crossIcon').addClass('d-none');
        profile.src='<?php echo base_url(); ?>assets/images/faceicon.png';
    })
    
    $('#crossIcon1').click(function()
    {
        $('#input-file1').val('');
        $('#facematch1').val('');
        let profile=document.getElementById('profile-pic1');
        $('#crossIcon1').addClass('d-none');
        profile.src='<?php echo base_url(); ?>assets/images/faceicon.png';
    })
    
    $('#crossIcon2').click(function()
    {
        $('#input-file2').val('');
        $('#facematch2').val('');
        let profile=document.getElementById('profile-pic2');
        $('#crossIcon2').addClass('d-none');
        profile.src='<?php echo base_url(); ?>assets/images/faceicon.png';
    })
    
    $('#my-button').click(function(){
        $('#input-file').val('');
        $('#crossIcon').click();
        $('#input-file').click();
    });
    
    $('#my-button1').click(function(){
        $('#input-file1').val('');
        if($('#input-file').val() != '')
        {
            $('#crossIcon1').click();
            $('#input-file1').click();   
        }else{
            toastr.remove();
            toastr.error('Please upload 1st photo to continue');
        }
    });

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
      
    $('.crop_image').click(function(event){
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
                                        data.append('type','upload');
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
                                                    $('.crop_image').removeAttr('disabled');
                                                    $('#facematch'+index).val(response);
                                                    let profile=document.getElementById('profile-pic'+index);
                                                    $('#crossIcon'+index).removeClass('d-none'); 
                                                    $('#uploadimageModal').modal('hide');
                                                    profile.src=response;   
                                                }else{
                                                    toastr.error(parse.message);
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
                                    }
                                }else{
                                    if($('#facematch1').val() != '' || $('#facematch2').val() != '')
                                    {
                                        toastr.error('You have to re-upload the 2nd and 3rd facematch again');
                                    }
                                    $('#crossIcon1').click();
                                    $('#crossIcon2').click();
                                    $('#facematch'+index).val(response);
                                    let profile=document.getElementById('profile-pic'+index);
                                    $('#crossIcon'+index).removeClass('d-none'); 
                                    $('#uploadimageModal').modal('hide');
                                    profile.src=response;   
                                }
                            }else{
                                $('.continueBtn').removeClass('disabled');
                                $('#latestPhoto'+index).val(response);
                                $('#uploadimageModal').modal('hide');
                            }
                        })
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
    });
    
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
    
    $('.close1').click(function()
    {
        let i = $('#uploadimageModal').data('id');
        let type = $('#uploadimageModal').data('type');
        if(type == 'facematch')
        {
            $('#facematch'+i).val('');
            $('#crossIcon'+i).click();
            $('#uploadimageModal').modal('hide');   
        }else{
            $('#latestFile'+i).val('');
            $('#latestPhoto'+i).val('');
            $('#crossIcon'+i).click();
            $('#uploadimageModal').modal('hide');   
        }
    })
    
    $('#my-button2').click(function(){
        $('#input-file2').val('');
        if($('#input-file1').val() != '')
        {
            $('#crossIcon2').click();
            $('#input-file2').click();
        }else{
            toastr.remove();
            toastr.error('Please upload 2nd photo to continue');
        }
    });
    
    $('#btn1Submit').click(function()
    {
        $(this).attr('disabled','disabled');
        if($('#Gender').val() == '')
        {
            toastr.remove();
            toastr.error('Please select Gender');
            $(this).removeAttr('disabled');
        }else if($('#ageBand').val() == '')
        {
            toastr.remove();
            toastr.error('Please select Age Band');
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
                $('#btnaadharNext').removeClass('btn-style-grey').addClass('btn-style-green');
                $('#btnaadharNext').removeClass('disabled');
                val.value = val.value.substr(0, (max_chars + 1));
            }else{
                $('#btnaadharNext').addClass('btn-style-grey').removeClass('btn-style-green');
                $('#btnaadharNext').addClass('disabled');
            }   
        }else{
            if(type == 'reward')
            {
                if(val.value.length <= 5) {
                    $('#rewardBtn').removeClass('btn-style-grey').addClass('btn-style-green');
                    $('#rewardBtn').removeClass('disabled');
                    val.value = val.value.substr(0, 5);
                    return true;
                }else{
                    $('#rewardBtn').addClass('btn-style-grey').removeClass('btn-style-green');
                    $('#rewardBtn').addClass('disabled');
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