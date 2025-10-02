<?php 
    unset($_SESSION['familyId']);
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
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
    .cus_date,.cus_date_edit
    {
        width: fit-content;
        
    }
    .cus_date label,.cus_date_edit label {
        font-weight: bold!important;
        color: black;
        /* opacity: .65; */
        transform: scale(0.99) translateY(-0.3rem) translateX(-0.3rem);
    }
    .cus_date select
    {
        padding: 2px;
        border-radius: 5px;        
        background: white;
        
    }
    .cus_date_edit select
    {
        padding: 2px;
        border-radius: 5px;        
        background: white;
        
    }
    
    @media (max-width:768px) 
    {
        .cus_date select,.cus_date_edit select
        {
            width: 32%;
        }
        .cus_date,.cus_date_edit
        {
            width:93%;
            margin-left: 12px;
        }
    }
</style>
<?php 
    $months = [
        1 => 'January', 2 => 'February', 3 => 'March', 4 => 'April',
        5 => 'May', 6 => 'June', 7 => 'July', 8 => 'August',
        9 => 'September', 10 => 'October', 11 => 'November', 12 => 'December'
    ];
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
                        <form id="loginForm" action="<?php echo base_url(); ?>NonKyc/postFamilyMember" method="post" class="row g-3 w-100 needs-validation1"  enctype="multipart/form-data">
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
                                        <div class="form-floating mt-3 col-12 col-md-3" id="rel1Div">
                                            
                                            <select class="form-control select21" onchange="showAccordingly(this.value)" name="otherrelation" id="otherrelation" required>
                                                <?php 
                                                    if(count($getRelations) > 0)
                                                    {
                                                ?>
                                                <option value="">Select Your Relation</option>
                                                <?php 
                                                    foreach($getRelations as $k=>$v)
                                                    {
                                                ?>
                                                <option value="<?php echo $v['Id']; ?>"><?php echo $v['relationName']; ?></option>
                                                <?php } } ?>
                                            </select>
                                            <label class="ms-2">Relation with family member <b class="text-danger">*</b></label>
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
                                        <div class="form-floating col-12 col-md-auto position-relative d-none">
                                            <label style="margin-left:0.8rem;">Select DOB</label>
                                            <input type="date" class="form-control mt-2 custom-date-input md2" id="dob" name="dob" onchange="getAgeBand(this.value)" max="<?= date('Y-m-d') ?>">
                                            <img src="<?= base_url(); ?>assets/img/calendaricon.jpg" alt="Calendar Icon" style="position: absolute; top: 42%; right: 1.5rem; cursor: pointer;width:25px;height:25px;" onclick="document.getElementById('dob').showPicker()">
                                        </div>
                                        <div class="cd col-md-1 col-6 form-control mt-3  pb-md-1 pb-3 cus_date_edit" >
                                            <label for="dobday" class="ms-2 d-block">Date of Birth </label>
                                            <select name="dobday" id="dobday" required>
                                                <option value="" >DD </option>
                                                <?php for ($i = 1; $i <= 31; $i++): ?>
                                                   <?php if($do1==$i) :?>
                                                    <option value="<?= $i ?>" selected><?= $i ?></option>
                                                   <?php else :?>
                                                    <option value="<?= $i ?>"><?= $i ?></option>
                                                   <?php endif;?>
                                                    
                                                <?php endfor; ?>
                                            </select>
                                            <select name="dobmonth" id="dobmonth" required>
                                                <option value="">MM</option>
                                                <?php 
                                                    
                                                    foreach ($months as $num => $name): 
                                                ?>
                                                    <?php if($do2==$num) :?>
                                                    <option value="<?= $num ?>" selected><?= $name ?></option>
                                                   <?php else :?>
                                                    <option value="<?= $num ?>"><?= $name ?></option>
                                                   <?php endif;?>
                                                    
                                                <?php endforeach; ?>
                                            </select>
                                            <select name="dobyear" id="dobyear" required>
                                                <option value="">YYYY</option>
                                                <?php 
                                                    $current_year = date('Y');
                                                    for ($y = $current_year; $y >= 1950; $y--): 
                                                ?>
                                                    <?php if($do3==$y) :?>
                                                    <option value="<?= $y ?>" selected><?= $y ?></option>
                                                   <?php else :?>
                                                    <option value="<?= $y ?>"><?= $y ?></option>
                                                   <?php endif;?>
                                                   
                                                <?php endfor; ?>
                                            </select>
                                            
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
                                        <!--<div class="col-lg-3 my-3 col-12 col-md-6">-->
                                        <!--    <button class="btn btn-primary w-100 btn-style-green disabled-on-loading" type="button" onclick="finalSubmitFirst(this)"> Final Submit</button>-->
                                        <!--</div>-->
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
    function padZero(value) {
        if(value=='' || value==null)
        {
            //toastr.error('1111');
            return value;
        }
        return value.toString().padStart(2, '0'); // ensures 2 digits
    }
    function isValidDate(year, month, day) {
        // JavaScript Date object auto-corrects, so we check by comparing parts
        const date = new Date(`${year}-${month}-${day}`);
        return (
            date.getFullYear() == year &&
            (date.getMonth() + 1) == parseInt(month) &&
            date.getDate() == parseInt(day)
        );
    }
    function updateDateInput(missingday,missingmonth,missingyear,inpcls) {
        const day = padZero($('#'+missingday).val());
        const month = padZero($('#'+missingmonth).val());
        const year = padZero($('#'+missingyear).val());
        var mon=$('#'+missingmonth).val();
        
        if(day=='' || mon=='' ||mon==null || year=='')
        {
            //toastr.error('Please select valid date1');
            return false;
        }
        if(day=='' &&  mon=='' &&  year=='')
        {
            toastr.error('Please select valid date');
            return false;
        }

        if (isValidDate(year, month, day)) {
            const fullDate = `${year}-${month}-${day}`;
            //document.querySelector('.'+inpcls).value = fullDate;
            $('.'+inpcls).val(fullDate);
            
        } else {            
            toastr.error("Invalid date: Please select a valid day, month, and year.");
            return false;
        }
    }

    
    $('.cus_date_edit select').change(function(){
       var d1=$('#dobday').val();
       var d2=$('#dobmonth').val();
       var d3=$('#dobyear').val();
       updateMonthOptionsFromDay('dobday','dobmonth','dobyear');
        updateDateInput('dobday','dobmonth','dobyear','md2');
        
        
        var dob_last=$('.md2').val();
        
        if(d1!='' && d2!='' && d3!='')
        {
            getAgeBand(dob_last);
        }
        
    });
    function getDaysInMonth(year, month) {
        return new Date(year, month, 0).getDate(); // day 0 of next month
    }

    function updateMonthOptionsFromDay(missingday,missingmonth,missingyear) {
        const day = parseInt(document.getElementById(missingday).value);
        const year = parseInt(document.getElementById(missingyear).value);
        const monthSelect = document.getElementById(missingmonth);

        var mon=$('#'+missingmonth).val();
        var y1=$('#'+missingyear).val();
        
        if(day=='' || day=="NaN" || mon=='' || mon=="NaN" || y1=='' || y1=='NaN')
        {           
            return ;
        }
        for (let option of monthSelect.options) {
            const month = parseInt(option.value);
            const maxDays = getDaysInMonth(year, month);

            if (day <= maxDays) {
                option.disabled = false;
            } else {
                option.disabled = true;
            }
        }
        
        // If current selected month is now disabled, reset it to first valid
        if (monthSelect.options[monthSelect.selectedIndex].disabled) {
            for (let option of monthSelect.options) {
                if (!option.disabled) {
                    monthSelect.value = option.value;
                    break;
                }
            }
        }
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
</body>

</html>