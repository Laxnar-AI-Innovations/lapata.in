<?php 
    if($pn == 1)
    {
        unset($_SESSION['unknownId']);
    }
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
        opacity: .65;
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
    $getProfileDetail = $this->db->query('select * from nonKycUser where uid='.$_SESSION['user_id'])->result_array();
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
            <div class="container px-0">
                <div class="row justify-content-center mx-0">
                    <div class="col-lg-12 col-md-12 d-flex flex-column align-items-center justify-content-center <?php if($pn != 1){ echo "d-none"; } ?>">
                        <div class="card mb-3 w-100">
                            <div class="card-body px-1 p-3 mt-0">
                                <div class="row pt-0 pb-0 justify-content-start justify-content-md-between" style="align-items:center;">
                                    <div class="col-2 text-end backDiv d-none">
                                        <button type="button" class="btn btn-style-grey disabled-on-loading" onclick="location.reload();"> <i class="fa fa-arrow-circle-left"></i></button>
                                    </div>
                                    <div class="col-12 col-md-6 my-0">
                                        <h6 class="card-title py-0 fs-6 text-center text-md-start">Add Missing Person Details <img src="<?= base_url(); ?>assets/img/missingblackicon.jpg" id="topLogo" style="width:43px;height:50px;"></h6>
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
                        <form id="loginForm" action="<?php echo base_url(); ?>NonKyc/lapatawith" method="post" class="row g-3 w-100 needs-validation1"  enctype="multipart/form-data">
                            <?php 
                                $csrf = array(
                                    'name' => $this->security->get_csrf_token_name(),
                                    'hash' => $this->security->get_csrf_hash()
                                );
                            ?>
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <input type="hidden" name="id" id="oldId" value="">
                            <input type="hidden" name="type" id="type" value="with">
                            <input type="hidden" name="applicationNo" id="applicationNo" value="">
                            <input type="hidden" name="howoldfacematch" id="howoldfacematch">
                            <input type="hidden" name="howoldfacematch1" id="howoldfacematch1">
                            <input type="hidden" name="howoldfacematch2" id="howoldfacematch2">
                            <div class="card p-0">
                                <div class="card-header px-0 parentDiv pt-0">
                                    <div class="row align-items-center mt-3" id="labelDiv">
                                        <div class="col-12 col-md-12 text-start">
                                            <div class="row align-items-center mx-0">
                                                <div class="form-group col-12 col-md-6 col-lg-auto px-0" id="withDiv">
                                                    <div class="row mx-0 align-items-baseline">
                                                        <div class="col-md-auto col-auto pe-0">
                                                            <input type="radio" name="selectType" class="form-check-input" checked id="newWith">  
                                                        </div>
                                                        <div class="col-md-auto col-8">
                                                            <label for="newWith">
                                                                <label id="withLabel"><b class="text-dark">With Aadhaar No.</b></label>
                                                                <div class="mt-2 form-floating col-auto col-md-12">
                                                                    <input type="number" class="form-control text-uppercase" required name="aadharNumber" onkeydown="return limit(this,'aadhar');" onkeyup="limit(this,'aadhar');" id="aadharNumber"  placeholder="Aadhar Number">
                                                                    <label for="pkgdur" class="ms-2" id="aadharLabel"> Enter- Aadhaar No.* </label>
                                                                </div>
                                                            </label>  
                                                        </div>
                                                        <div class="col-md-auto col-1 ps-0 mt-2">
                                                            <button type="button" onclick="checkAadhar(this)" id="btnaadharNext" style="border-radius:5px 5px!important;padding: 9px 15px!important" class="btn btn-style-grey disabled text-center disabled-on-loading"> <i class="fa fa-check-circle"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-5 px-0 text-start mt-3" id="withoutDiv">
                                                    <div class="row mx-0 align-items-baseline">
                                                        <div class="col-md-auto col-auto pe-0">
                                                            <input type="radio" name="selectType" class="form-check-input" id="newWithout" onclick="selectRadio('without')">  
                                                        </div>
                                                        <div class="col-md-auto col-auto">
                                                            <label for="newWithout" onclick="selectRadio('without')">
                                                                <label><b class="text-dark"><b class="text-danger">Without</b> Aadhaar No.</b></label>
                                                            </label>  
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hiddendiv d-none">
                                    <div class="row align-items-center">
                                        <?php 
                                            $getMissingDateSettings = $this->db->query('select * from settings where Id=41')->result_array();
                                            if($getMissingDateSettings[0]['value'] == 1)
                                            {
                                        ?>
                                        <div class="cd col-md-2 col-6 form-control mt-3 pb-md-1 pb-3 cus_date" >
                                            <label for="missingday" class="ms-2 d-block text-danger">Missing Date </label>
                                            <select name="missingday" id="missingday" required>
                                                <option value="" selected>DD </option>
                                                <?php for ($i = 1; $i <= 31; $i++): ?>
                                                    <option value="<?= $i ?>"><?= $i ?></option>
                                                    
                                                <?php endfor; ?>
                                            </select>
                                            <select name="missingmonth" id="missingmonth" required>
                                                <option value="" selected>MM</option>
                                                <?php 
                                                    
                                                    foreach ($months as $num => $name): 
                                                ?>
                                                    <option value="<?= $num ?>"><?= $name ?></option>
                                                    
                                                <?php endforeach; ?>
                                            </select>
                                            <select name="missingyear" id="missingyear" required>
                                                <option value="" selected>YYYY</option>
                                                <?php 
                                                    $current_year = date('Y');
                                                    for ($y = $current_year; $y >= ($current_year - 100); $y--): 
                                                ?>
                                                    <option value="<?= $y ?>"><?= $y ?></option>
                                                   
                                                <?php endfor; ?>
                                            </select>
                                            
                                        </div>
                                        
                                        <?php }else{ ?>
                                        <div class="form-floating col-12 col-md-auto hiddendiv d-none">
                                            <label style="margin-left:0.8rem;">Missing Date *</label>
                                            <input type="date" name="dateCreated" id="dateCreated" required class="form-control mt-2" max="<?= date('Y-m-d') ?>">
                                        </div>
                                        <?php } ?>
                                        <div class="form-floating mt-3 col-12 col-md-3 hiddendiv d-none">
                                          <input type="text" class="form-control" name="person_name"   id="person_name"  placeholder="Aadhar Number">
                                          <label for="pkgdur" class="ms-2">Missing Person Name <b class="text-danger">*</b></label>
                                        </div>
                                        <div class="form-floating mt-3 col-12 col-md-auto hiddendiv d-none">
                                            <select class="form-control" name="Gender" id="Gender" >
                                                <option value="">Select Gender </option>
                                                <option value="Male">Male </option>
                                                <option value="Female">Female </option>
                                                <option value="Other">Other </option>
                                            </select>
                                            <label for="Gender" class="ms-2">Gender </label>     
                                            <input type="hidden" class="Gender">
                                        </div>
                                        <?php 
                                            $getMissingDateSettings = $this->db->query('select * from settings where Id=42')->result_array();
                                            if($getMissingDateSettings[0]['value'] == 0)
                                            {
                                        ?>
                                        <div class="form-floating col-12 dobDiv col-md-auto hiddendiv d-none position-relative">
                                            <label style="margin-left:0.8rem;">Select DOB</label>
                                            <input type="date" class="form-control mt-2 custom-date-input" id="dob" name="dob" onchange="getAgeBand(this.value)" max="<?= date('Y-m-d') ?>">
                                            <img src="<?= base_url(); ?>assets/img/calendaricon.jpg" alt="Calendar Icon" style="position: absolute; top: 42%; right: 1.5rem; cursor: pointer;width:25px;height:25px;" onclick="document.getElementById('dob').showPicker()">
                                        </div>
                                        <div class="form-floating col-4 col-md-1 ageDiv d-none">
                                            <label style="margin-left:0.8rem;">Age</label>
                                            <input type="text" class="form-control mt-2" readonly id="Age" name="Age">
                                        </div>
                                        <?php }else{ ?>
                                        <div class="cd col-md-2 col-6 form-control mt-3  pb-md-1 pb-3 cus_date_edit" >
                                            <label for="dobday" class="ms-2 d-block">Date of Birth </label>
                                            <select name="day" id="day" required onchange="getAge()">
                                                <option value="" >DD </option>
                                                <?php for ($i = 1; $i <= 31; $i++): ?>
                                                   <?php if($do1==$i) :?>
                                                    <option value="<?= $i ?>" selected><?= $i ?></option>
                                                   <?php else :?>
                                                    <option value="<?= $i ?>"><?= $i ?></option>
                                                   <?php endif;?>
                                                    
                                                <?php endfor; ?>
                                            </select>
                                            <select name="month" id="month" required onchange="getAge()">
                                                <option value="" >MM</option>
                                                <?php foreach ($months as $num => $name): ?>
                                                    <?php 
                                                        $value = str_pad($num, 2, '0', STR_PAD_LEFT); // ensures 2-digit values
                                                        $selected = ($do2 == $num) ? 'selected' : '';
                                                    ?>
                                                    <option value="<?= $value ?>" <?= $selected ?>><?= $name ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <select name="year" id="year" required onchange="getAge()">
                                                <option value="">YYYY</option>
                                                <?php 
                                                    $current_year = date('Y');
                                                    for ($y = $current_year; $y >= ($current_year - 100); $y--): 
                                                ?>
                                                    <?php if($do3==$y) :?>
                                                    <option value="<?= $y ?>" selected><?= $y ?></option>
                                                   <?php else :?>
                                                    <option value="<?= $y ?>"><?= $y ?></option>
                                                   <?php endif;?>
                                                   
                                                <?php endfor; ?>
                                            </select>
                                            
                                        </div>
                                        
                                        <div class="form-floating col-6 col-md-1 ageDiv d-none">
                                            <label style="margin-left:0.8rem;">Age</label>
                                            <input type="text" class="form-control mt-2" readonly id="Age" name="Age">
                                        </div>
                                        <?php } ?>
                                        <div class="form-floating mt-3 col-12 col-md-auto d-none">
                                            <select style="pointer-events:none;background:lightgrey;opacity:0.7" class="form-control" name="AgeBand" id="ageBand">
                                                <option value="">Select Age Band <b>*</b></option>
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
                            <div class="card mb-3 mt-0 w-100 hiddendiv d-none">
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
                                                    <input type="file" id="input-file" style="display: none;" accept="image/*;capture=camera" onchange="cropPhoto('facematch','')">
                                                    <input type="file" id="input-file1" style="display: none;" accept="image/*;capture=camera" onchange="cropPhoto('facematch',1)">
                                                    <input type="file" id="input-file2" style="display: none;" accept="image/*;capture=camera" onchange="cropPhoto('facematch',2)">
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
                            <div class="card mb-3 w-100 hiddendiv d-none">
                                <div class="row align-items-center accordion" id="identificationAccordion">
                                    <div class="accordion-item px-0">
                                        <h2 class="accordion-header" id="identificationHeading">
                                            <a class="accordion-button collapsed px-2" type="button" data-bs-toggle="collapse" data-bs-target="#identificationChild" aria-expanded="false" aria-controls="identificationChild">
                                                <b>Add Identification Details <img src="<?= base_url(); ?>assets/img/identitycard.png" style="width: 50px;height: 50px;"></b>
                                          </a>
                                        </h2>
                                    </div>
                                    <div id="identificationChild" class="accordion-collapse collapse" aria-labelledby="identificationHeading" data-bs-parent="#identificationAccordion">
                                        <div class="accordion-body row align-items-center">
                                            <div class="card-body mt-0">
                                                <div class="row align-items-center ">
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
                                                    <div class="form-floating my-3 col-12 col-md-3">
                                                        <input type="text" class="form-control text-uppercase" name="vehicle_no"   id="vehicle_no">
                                                        <label for="vehicle_no" class="ms-3">Vehicle No.</label>
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
                            <div class="card mb-3 w-100 hiddendiv d-none">
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
                                                <div class="row">
                                                    <div class="col-lg-12 col-sm-12 col-md-12 text-end my-3 d-none" id="addMoreDiv">
                                                        <button type="button" class="btn btn-style-red disabled-on-loading" style="border-radius:0!important;background:black!important;" id="addMore" onclick="addMoreGold()"> Add More</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3 w-100 hiddendiv d-none">
                                <div class="row align-items-center accordion" id="addressAccordion">
                                    <div class="accordion-item px-0">
                                        <h2 class="accordion-header" id="addressHeading">
                                            <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#addressChild" aria-expanded="false" aria-controls="addressChild">
                                                <b>Address Of Missing Person <i class="fa fa-map-marker" style="font-size: 1.4rem;"></i></b>
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
                            
                            <div class="card hiddendiv d-none">
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
                    <div class="col-lg-12 col-md-12 d-flex flex-column align-items-center justify-content-center <?php if($pn != 2){ echo "d-none"; } ?>">
                        <div class="card mb-3 w-100">
                            <div class="card-body mt-0">
                                <div class="pt-0 pb-0">
                                    <h5 class="card-title text-center pb-0 fs-4 mb-0"><span class="text-danger fs-4">Upload- Missing Person</span> Photos</h5>
                                </div>
                            </div>
                        </div>
                        <form id="step2Form" method="post" class="row g-1 needs-validation1 w-100"  enctype="multipart/form-data">
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
                                if(isset($_SESSION['unknownId']))
                                {
                                    
                            ?>
                            <?php
                                $getLatestPhotos = $this->db->query('select * from unknownphotos where unknownId='.$_SESSION['unknownId'])->result_array();
                                $j=0;
                                for($i=0;$i<3;$i++)
                                {
                                    $j++;
                                    if(count($getLatestPhotos) <= $i)
                                    {
                            ?>
                            <div class="card">
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
                                                    <h4 class="modal-title text-center"><?php echo $j; ?>- Upload Missing Person Photos</h4>
                                                </div>
                                            </div>
                                            <div class="row mt-0">
                                                <div class="col-lg-12 col-sm-12 col-md-12">
                                                    <div class="row mt-3 mx-0" id="reUploadDiv<?php echo $i; ?>">
                                                        <div class="col-md-12 col-sm-12 col-lg-12 px-0">
                                                            <label class="form-label">Upload image</label>
                                                            <input type="file" accept="image/*;capture=camera" class="form-control" id="latestFile<?php echo $i; ?>" onchange="cropPhoto('latest',<?= $i; ?>)">
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
                            <div class="card">
                                <div class="card-body p-4">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-md-12">
                                            <h5 class="modal-title"><?php echo $j; ?>- Uploaded Missing Person's Photo</h5>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-lg-4 col-sm-12 col-md-6 px-0">
                                            <div class="row border border-secondary mx-0 p-3" style="border-radius:15px;border-color:lightgrey!important;">
                                                <input type="hidden" id="isLatestPhotoUploaded<?php echo $i; ?>" value="<?php echo $getLatestPhotos[$i]['Id']; ?>">
                                                <div class="col-lg-auto col px-0">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-sm-12 col-md-12">
                                                            <h6><b>File Uploaded</b></h6>
                                                        </div>
                                                    </div>  
                                                    <?php 
                                                        $split = explode('upload/unknown/',$getLatestPhotos[$i]['photourl']);
                                                    ?>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-sm-12 col-md-12">
                                                            <p class="mb-1" style="color:grey;"><?php echo $split[1]; ?></p>
                                                        </div>
                                                    </div>  
                                                    <div class="row" style="margin-top:10px;">
                                                        <div class="col-lg-12 col-sm-12 col-md-12 px-0">
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
                                                    <input type="file" accept="image/*;capture=camera" class="form-control" id="latestFile<?php echo $i; ?>" onchange="cropPhoto('latest',<?= $i; ?>)">
                                                </div>
                                            </div>
                                            <div class="row mt-3 d-none justify-content-center" id="reUploadBtn<?php echo $i; ?>">
                                                <div class="col-lg-auto col-sm-12 col-md-auto col-auto pe-0">
                                                    <button type="button" class="btn btn-style-upload w-100 disabled-on-loading disabled continueBtn" onclick="uploadLatestPhoto(this,<?php echo $i; ?>)"> Continue</button>
                                                </div>
                                                <div class="col-lg-auto col-sm-12 col-md-auto col-auto pe-0">
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
                                                    <h5 class="modal-title"><?php echo $j; ?>- Uploaded Missing Person's Photo</h5>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-lg-12 col-sm-12 col-md-12">
                                                    <div class="row border border-secondary mx-0 p-3" style="border-radius:15px;border-color:lightgrey!important;">
                                                        <div class="col px-0">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-sm-12 col-md-12">
                                                                    <h6><b>File Uploaded</b></h6>
                                                                </div>
                                                            </div>  
                                                            <?php 
                                                                $split = explode('upload/unknown/',$getLatestPhotos[$i]['photourl']);
                                                            ?>
                                                            <div class="row">
                                                                <div class="col-lg-12 col-sm-12 col-md-12">
                                                                    <p class="mb-1" style="color:grey;"><?php echo $split[1]; ?></p>
                                                                </div>
                                                            </div>  
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
                                                            <input type="file" accept="image/*;capture=camera" class="form-control" id="latestFile<?php echo $i; ?>" onchange="cropPhoto('latest',<?= $i; ?>)">
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
                            <?php } ?>
                            <div class="card">
                                <div class="card-body mt-0 pb-0">
                                    <div class="row align-items-center justify-content-start">
                                        <?php 
                                            if(isset($_SESSION['unknownId']))
                                            {
                                        ?>
                                        <div class="col-lg-auto col-md-auto my-3 col-12">
                                            <button class="btn btn-primary w-100 btn-style-four disabled-on-loading" id="btn2Next" type="button" style="background-color:  #05106c !important;"> Save & Next</button>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="step3" class="px-0 <?php if($pn != 3){ echo "d-none"; } ?>">
                        <?php 
                            $getPersonDetail = $this->db->query('select * from unknown_person where id='.(isset($_SESSION['unknownId']) ? $_SESSION['unknownId'] : 0))->result_array();
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
                            $getPersonDetail[0]['rewardamount'] = NULL;
                        ?>
                        <?php 
                            $getSettings = $this->db->query('select * from settings where name="deleteOTP"')->result_array();
                            $getRelations = $this->db->query('select * from relations')->result_array();
                        ?>
                        <input type="hidden" name="mobCount" value="<?php echo $mobcount; ?>" id="mobCount">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-0 pb-0">Add your contact numbers</h5>
                                <?php 
                                    if($getSettings[0]['value'] == 1)
                                    {
                                ?>
                                <hr>
                                <h6 class="text-left"><b class="text-danger">Note:-</b> Add / Delete Mobile No. through <b class="text-danger">OTP</b>.</h6>
                                <?php } ?>
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
                            <div class="card-header">
                                <h6 class="text-dark mb-0"><b>Add your reward amount</b></h6>
                            </div>
                            <?php 
                                if($getPersonDetail[0]['rewardamount'] > 0)
                                {
                            ?>
                            <div class="card-body p-2">
                                <div class="row align-items-center d-none" id="rewardEditdiv">
                                    <div class="form-group form-floating col-md-auto col-10 col-lg-3">
                                        <input type="text" oninput="numberOnly(this.id);" class="form-control" maxlength="5" name="rewardAmount" onKeyUp="showRewardAccordingly(this.value)" id="rewardAmount"  placeholder="Reward Amount" value="<?php echo ($getPersonDetail[0]['rewardamount'] != NULL ? $getPersonDetail[0]['rewardamount'] : '') ?>">
                                        <label for="rewardAmount" class="col-md-4 col-lg-3 col-form-label mx-2" style="color:red!important;">Reward Amount (Max. five Digit)</label>      
                                    </div>
                                    <div class="form-group col-md-auto col-2 ps-1 col-lg-auto">
                                        <button type="button" onclick="checkReward(this)" id="rewardBtn" style="border-radius:5px 5px!important;padding: 9px 15px!important" class="btn btn-style-green text-center disabled-on-loading"> <i class="fa fa-check-circle"></i></button>
                                    </div>
                                </div>
                                <div class="row align-items-center" id="rewardDeletediv">
                                    <div class="form-group form-floating col-md-auto col-7 col-lg-3">
                                        <input type="text" oninput="numberOnly(this.id);" class="form-control" readonly maxlength="5" name="rewardAmount" onKeyUp="showRewardAccordingly(this.value)" id="rewardAmount"  placeholder="Reward Amount" value="<?php echo ($getPersonDetail[0]['rewardamount'] != NULL ? $getPersonDetail[0]['rewardamount'] : '') ?>">
                                        <label for="rewardAmount" class="col-md-4 col-lg-3 col-form-label mx-2" style="color:red!important;">Reward Amount</label>      
                                    </div>
                                    <div class="form-group col-md-auto col-5 ps-1 col-lg-auto">
                                        <button type="button" style="z-index:2;border:0!important;background:navy!important;color:white!important;top:0px;right:0px;padding:0.6rem 0.9rem;cursor:pointer;" onclick="editReward(this)">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button type="button" onclick="deleteReward(this)" class="btn btn-danger ms-1 disabled-on-loading" style="background:white!important;color:red!important;padding:0.6rem 0.9rem;"><i class="fa fa-trash"></i></button>
                                    </div>
                                </div>
                            </div>
                            <?php }else{ ?>
                            <div class="card-body p-2">
                                <div class="row align-items-center" id="rewarddiv">
                                    <div class="form-group form-floating col-md-auto col-10 col-lg-3">
                                        <input type="text" oninput="numberOnly(this.id);" class="form-control" maxlength="5" name="rewardAmount" onKeyUp="showRewardAccordingly(this.value)" id="rewardAmount"  placeholder="Reward Amount" value="<?php echo ($getPersonDetail[0]['rewardamount'] != NULL ? $getPersonDetail[0]['rewardamount'] : '') ?>">
                                        <label for="rewardAmount" class="col-md-4 col-lg-3 col-form-label mx-2" style="color:red!important;">Reward Amount (Max. five Digit)</label>      
                                    </div>
                                    <div class="form-group col-md-auto col-2 ps-1 col-lg-auto">
                                        <button type="button" onclick="checkReward(this)" id="rewardBtn" style="border-radius:5px 5px!important;padding: 9px 15px!important" class="btn btn-style-grey text-center disabled-on-loading disabled"> <i class="fa fa-check-circle"></i></button>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <?php 
                            if(count($getPersonDetail) > 0)
                            {
                        ?>
                        <?php 
                            if($getPersonDetail[0]['aadharNumber'] != NULL)
                            {
                                $getIfAlready = $this->db->query('select * from uploadtransactions where type="lapata" and isKyc=0 and userId='.$_SESSION['user_id'].' and idNumber="'.$getPersonDetail[0]['aadharNumber'].'" and expiryDate >="'.date('Y-m-d').'"')->result_array();   
                            }else{
                                $getIfAlready = $this->db->query('select * from uploadWithoutTransactions where type="lapata" and isKyc=0 and userId='.$_SESSION['user_id'].' and idNumber="'.$getPersonDetail[0]['Application_no'].'" and expiryDate >="'.date('Y-m-d').'"')->result_array();                                
                            }
                        ?>
                        <?php }else{ 
                            $getIfAlready = array();
                        } 
                        ?>
                        <?php
                            if(count($getIfAlready) == 0)
                            {
                        ?>
                        <div class="card">
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="form-group col-md-auto col-sm-12 col-lg-auto">
                                        <input type="checkbox" value="1" class="radio-custom" id="terms" name="terms">
                                        <label for="terms" class="mx-0 radio-custom-label form-check-label" style="font-size: 1rem!important; font-weight: bold; color: black;">
                                          By proceeding, you agree to our 
                                          <a href="<?php echo base_url(); ?>terms-of-use" target="_blank" style="text-decoration: underline; color: #4154f1;"><b>Terms</b></a>, 
                                          <a href="<?php echo base_url(); ?>privacy-policy" target="_blank" style="text-decoration: underline; color: #4154f1;"><b>Privacy Policy</b></a>, 
                                          and all other applicable policies, and confirm awareness of how this portal works.
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <div class="card">
                            <div class="card-body py-3">
                                <div class="row mb-0 align-items-center">
                                    <?php
                                        if(count($getIfAlready) > 0)
                                        {
                                    ?>
                                    <?php 
                                        if($pn == 3)
                                        {
                                            $getFinalId = $this->db->query('select max(Id) as Id from searchfacehistoryafterlogin')->result_array();
                                            if($getFinalId[0]['Id'] != NULL)
                                            {
                                                $_SESSION['searchFaceIdAfterLogin'] = $getFinalId[0]['Id'] + 1;
                                            }else{
                                                $_SESSION['searchFaceIdAfterLogin'] = 1;
                                            }
                                            $insertdata = array(
                                                'Id' => $_SESSION['searchFaceIdAfterLogin'],
                                                'userId' => $_SESSION['user_id']
                                            );
                                            $insert = $this->db->insert('searchfacehistoryafterlogin',$insertdata);
                                        }
                                    ?>
                                    <div class="col-sm-12 col-12 col-md-auto col-lg-auto mt-1 mb-1">
                                        <button type="button" id="btn3Back" class="btn btn-dark disabled-on-loading w-100 btn-style-green" style="background:black!important;"> Back</button>
                                    </div>
                                    <div class="col-sm-12 col-md-auto col-lg-auto mt-1 mb-1">
                                        <button type="button" id="btn3Dashboard" class="btn btn-dark disabled-on-loading w-100 btn-style-green"> Final Submit</button>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="col-sm-12 col-5 col-md-auto px-0 col-lg-auto mt-1 mb-1">
                                        <button type="button" id="btn3Back" class="btn btn-dark disabled-on-loading w-100 btn-style-green" style="background:black!important;"> Back</button>
                                    </div>
                                    <div class="col-sm-12 col-7 pe-0 col-md-auto col-lg-auto mt-1 mb-1">
                                        <button type="button" style="padding:0.8rem!important;" id="payNowBtn" onclick="payNow(this)" class="btn btn-dark disabled-on-loading w-100 btn-style-grey disabled"> Continue</button>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="step4" class="col-xl-11 <?php if($pn != 4){ echo "d-none"; } ?>">
                        <?php 
                            $getPersonDetail = $this->db->query('select * from unknown_person where id='.(isset($_SESSION['unknownId']) ? $_SESSION['unknownId'] : 0))->result_array();
                            if(count($getPersonDetail) > 0)
                            {
                                $getLabelSettings = $this->db->query('select * from settings where name="bottomdetailLabels"')->result_array();
                                $decode1 = json_decode($getLabelSettings[0]['value'],true);
                                $getLabelSettings = $this->db->query('select * from settings where name="facematchWatermarkLabels"')->result_array();
                                $decode2 = json_decode($getLabelSettings[0]['value'],true);
                                $getLabelSettings = $this->db->query('select * from settings where name="latestWatermarkLabels"')->result_array();
                                $decode3 = json_decode($getLabelSettings[0]['value'],true);
                        ?>
                        <div class="card col-xl-10 mx-auto">
                            <div class="card-body pb-0 pt-0 px-0 w-100">
                                <div class="px-0 col-lg-12 col-md-12 col-sm-12 d-flex flex-column mx-lg-auto">
                                    <div class="row mx-0 align-items-center" style="background:#f78b77;padding:1rem;">
                                        <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                                            <h1 class="text-light mb-0" style="font-size: 1.5rem;"><b>MISSING</b></h1>
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
                                                        $getLatestUserPhotos = $this->db->query('select * from unknownphotos where unknownId='.$getPersonDetail[0]['id'])->result_array();
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
                                    <?php 
                                        if($getPersonDetail[0]['rewardamount'] != NULL && $getPersonDetail[0]['rewardamount'] != 0)
                                        {
                                    ?>
                                    <div class="row align-items-center justify-content-center mt-3 mx-2">
                                        <div class="col-lg-4 col-sm-12 col-md-6 text-center py-2" style="border:1px solid red;">
                                            <h4 class="mb-1" style="color:red;">Reward</h4>
                                            <h4 class="mb-1" style="color:black;"><?php echo 'Rs. '.$getPersonDetail[0]['rewardamount']; ?></h4>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <div class="row align-items-center mt-3 mx-0">
                                        <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                                            <h6 class="mb-2" style="font-family:initial;color:black;font-size:1.2rem;"><b>Application No: - </b><b style="color:back;"><?php echo $getPersonDetail[0]['Application_no'];?></b></h6>
                                        </div>
                                    </div>
                                    <div class="row mx-0 justify-content-center">
                                        <div class="col-lg-6 col-md-6 col-12 px-0" style="top:-50px!important;background:white;height:auto;min-height:150px;">
                                            <div class="row mx-0 align-items-center justify-content-center">
                                                <div class="col-md-12 px-0 col-12 mt-1 col-sm-12 col-lg-12 text-center">
                                                    <h5 class="text-dark text-uppercase" style="font-size:1.2rem;font-family:initial;"><b id="personname">Name:- <?php echo ($getPersonDetail[0]['person_name'] != '' ? $getPersonDetail[0]['person_name'] : 'UNKNOWN'); ?></b></h5>
                                                </div>
                                            </div>
                                            <div class="row mx-0 align-items-center justify-content-center">
                                                <div class="col-md-12 px-0 col-12 mt-1 col-sm-12 col-lg-12 text-center">
                                                    <h5 class="text-dark text-uppercase mb-3" style="font-size:1.2rem;font-family:initial;"><b>Missing Date:- </b><b style="color:red;"><?php echo date('d-m-Y',strtotime($getPersonDetail[0]['missingDate'])); ?></b></h5>
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
                                            <?php 
                                                if($getPersonDetail[0]['Message'] != '')
                                                {
                                            ?>
                                            <div class="row align-items-center mt-3 mx-0 border border-danger">
                                                <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                                                    <p class="mb-0"><b style="color:red;">Message:- </b><b style="color:black;"><?php echo $getPersonDetail[0]['Message'] ?></b></p>
                                                </div>
                                            </div>
                                            <?php } ?>
                                            <?php 
                                                $getUserDetail = $this->db->query('select * from user where uid='.$getPersonDetail[0]['userId'])->result_array();
                                            ?>
                                            <div class="row align-items-center mt-3 mx-0">
                                                <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                                                    <h6 class="mb-2" style="font-family:initial;font-size:1.2rem;color:black;"><b>Uploaded By: - <?php echo $getUserDetail[0]['aadharname'].', '. $getUserDetail[0]['state'].', '.$getUserDetail[0]['district'];?></b></h6>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mt-1 mx-0">
                                                <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                                                    <h6 class="mb-1" style="font-family:initial;font-size:1.2rem;color:black;"><b>Uploaded Date: - <span style="color:grey;"><?php echo date('d-m-Y h:i A',strtotime($getPersonDetail[0]['dateCreated']));?></span></b></h6>
                                                </div>
                                            </div>
                                            <?php 
                                                if($this->session->userdata('user_login') == 'yes'){
                                            ?>
                                            <?php 
                                                if($getPersonDetail[0]['well1'] != NULL || $getPersonDetail[0]['well2'] != NULL || $getPersonDetail[0]['well3'] != NULL)
                                                {
                                            ?>
                                            <div class="row align-items-center mx-0 justify-content-center" style="position:relative;">
                                                <div class="col-md-12 text-center">
                                                    <h6 class="text-dark">
                                                        <?php 
                                                            if($getPersonDetail[0]['well1'] != NULL)
                                                            {
                                                        ?>
                                                        <a href="tel:<?php echo $getPersonDetail[0]['well1']; ?>" class="btn btn-circle btn-sm btn-police1 mt-3">
                                                            <i class="fa fa-phone"></i>
                                                        </a>
                                                        <?php }
                                                            if($getPersonDetail[0]['well2'] != NULL){ 
                                                        ?>
                                                        <a href="tel:<?php echo $getPersonDetail[0]['well2']; ?>" class="btn btn-circle btn-sm btn-police2 mt-3">
                                                            <i class="fa fa-phone"></i>
                                                        </a>
                                                        <?php }
                                                            if($getPersonDetail[0]['well3'] != NULL){ 
                                                        ?>
                                                        <a href="tel:<?php echo $getPersonDetail[0]['well3']; ?>" class="btn btn-circle btn-sm btn-police3 mt-3">
                                                            <i class="fa fa-phone"></i>
                                                        </a>
                                                        <?php } ?>
                                                    </h6>
                                                </div>
                                            </div>
                                            <?php }else{ 
                                                $mobile = '';
                                                if($getPersonDetail[0]['policeId'] != NULL)
                                                {
                                                    $mobile = $getPoliceDetail[0]['registration_mobile'];
                                                }else{
                                                    $mobile = $getngoDetail[0]['registration_mobile'];
                                                }
                                                
                                            ?>
                                                <div class="row align-items-center mx-0 mt-0 justify-content-center" style="position:relative;">
                                                    <div class="col-md-12 text-center">
                                                        <h6 class="text-dark">
                                                            <a href="tel:<?php echo $mobile; ?>" class="btn btn-circle btn-sm btn-police1 mt-3">
                                                                <i class="fa fa-phone"></i>
                                                            </a>
                                                        </h6>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <?php }else{ ?>
                                            <div class="row align-items-center my-3 justify-content-center mx-0">
                                                <div class="col-auto text-center">
                                                    <h6 class="text-dark mb-0">
                                                        <span class="mb-3">To Contact to <?php echo $getPersonDetail[0]['policeId'] != NULL ? 'Police Thana' : 'NGO'; ?> </span>
                                                            <a href="javascript:void(0)" onclick="showLogin()" style="width:max-content;background:white!important;color:black!important;" class="phone btn btn-primary btn-style-four mb-3 mt-md-0">
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
                                                            <span>Click Here</span>
                                                        </a>
                                                    </h6>
                                                </div>
                                            </div>
                                            <?php } ?>
                                        </div>
                                        <hr class="border border-danger my-2">
                                        <div class="row px-md-2 px-sm-3">
                                            <div class="col-md-12 text-center text-danger px-1 pb-3 p-3" style="font-weight:bold;">
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-auto mb-3 col-sm-12 col-md-auto">
                                                        <button type="button" class="btn-style-red btn btn-primary d-block w-100 disabled-on-loading" style="background:green!important" onclick="goToDashboard(this)"> Go to Dashboard</button>
                                                    </div>
                                                    <div class="col-lg-auto mb-3 col-sm-12 col-md-5">
                                                        <button type="button" class="btn-style-red btn btn-primary d-block w-100 disabled-on-loading" style="background:black!important;padding:12px 10px!important" onclick="showLink()"> Share Missing Person Details <i class="fa fa-share-alt"></i></button>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center" style="display:none;" id="shareDiv">
                                                    <div class="ps-0 col-md col-sm-12 mb-3">
                                                        <button type="button" style="padding:0.5rem!important;" class="btn-style-four btn btn-primary d-block w-100 disabled-on-loading" onclick="share('without','<?= (isset($_SESSION['unknownId']) ? $getPersonDetail[0]['Application_no'] : 0); ?>')"> 
                                                            <img src="<?= base_url(); ?>assets_landing_page/img/missinglanding.png" style="width:40px;height:40px;"> Share link without photo
                                                        </button>
                                                    </div>
                                                    <div class="col-md col-sm-12 mb-3">
                                                        <button type="button" style="padding:0.5rem!important;" class="btn-style-five btn btn-primary d-block w-100 disabled-on-loading" onclick="share('with','<?= (isset($_SESSION['unknownId']) ? $getPersonDetail[0]['Application_no'] : 0); ?>')"> 
                                                            <img src="<?= base_url(); ?><?= $getPersonDetail[0]['Photo']; ?>" style="width:40px;height:40px;"> Share link with photo
                                                        </button>
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
    
    $('#terms').click(function()
    {
        if($('#terms').is(':checked'))
        {
            $('#btn3Dashboard').removeClass('btn-style-grey').addClass('btn-style-green');
            $('#btn3Dashboard').removeClass('disabled');
            $('#payNowBtn').removeClass('btn-style-grey').addClass('btn-style-green');
            $('#payNowBtn').removeClass('disabled');
        }else{
            $('#btn3Dashboard').removeClass('btn-style-green').addClass('btn-style-grey');
            $('#btn3Dashboard').addClass('disabled');
            $('#payNowBtn').removeClass('btn-style-green').addClass('btn-style-grey');
            $('#payNowBtn').addClass('disabled');
        }
    })
    
    function goToDashboard(ele)
    {
        $(ele).attr('disabled',true);
        location.href="<?php echo base_url(); ?>non-kyc-dashboard-profile";
    }
    
    function shareLap(ele,appNo)
    {
        if (navigator.share) {
            let url = '';
            url = '<?php echo base_url(); ?>find-missing-person?id='+appNo;
            navigator.share({
              title: 'Khoji',
              url: url
            })
            .catch(console.error);
          } else {
                const shareButton = document.querySelector('.share-button');
                const shareDialog = document.querySelector('.share-dialog');
                const closeButton = document.querySelector('.close-button');
                
                shareButton.addEventListener('click', event => {
                  shareDialog.classList.add('is-open');
                });
                
                closeButton.addEventListener('click', event => {
                  shareDialog.classList.remove('is-open');
                });
          }
    }
    
    function copyLink(type,Id)
    {
        navigator.clipboard.writeText('<?php echo base_url(); ?>find-lapata-person?id='+Id+'&type='+type);
        toastr.success('Link Copied Successfully');
    }
    
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

    function addContact(ele,index)
    {
        $(ele).attr('disabled','disabled');
        let data = new FormData();
        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        data.append('mobile',$('#profilemob'+index).val());
        data.append('index',index);
        $.ajax({
            url:'<?php echo base_url(); ?>police/addUnknownProfileContact',
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
                    },2000);
                }else{
                    toastr.error(parse.message);
                    $(ele).removeAttr('disabled');
                }
            }
        });
    }

    function openAddButton(index,val)
    {
        if(val == '')
        {
            $('#btnAdd'+index).addClass('disabled').addClass('btn-style-grey').removeClass('btn-style-green');
        }else{
            $('#btnAdd'+index).removeClass('disabled').removeClass('btn-style-grey').addClass('btn-style-green');
        }
    }

    function getContactAccordingly(index,val)
    {
        if(val == '')
        {
            $('#addNewDiv'+index).addClass('d-none');
            $('#addProfileDiv'+index).addClass('d-none');
        }else{
            if(val == '0')
            {
                $('#addNewDiv'+index).removeClass('d-none');
                $('#addProfileDiv'+index).addClass('d-none');
            }else{
                $('#addNewDiv'+index).addClass('d-none');
                $('#addProfileDiv'+index).removeClass('d-none');
            }
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
                try 
                {
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
        })          
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
                    url:'<?php echo base_url(); ?>police/deleteUnknownPhoto/'+crimeId,
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
                url:'<?php echo base_url(); ?>NonKyc/uploadLapataPhoto',
                data:data,
                contentType: false,
                cache: false,
                processData:false,
                type:'post',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    toastr.remove();
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
    
    let goldCount = 0;
    addMoreGold();
    
    function addMoreGold()
    {
        if(goldCount < 3)
        {
            $('#addMore').attr('disabled','disabled');
            goldCount++;
            let html = '<div class="row align-items-center justify-content-start justify-content-md-center"><div class="col-lg-auto col-10 col-md-auto col-sm-12 mt-2 form-floating">';
            $.ajax({
                url:'<?php echo base_url(); ?>police/getGoldType',
                type:'get',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    if(parse.length > 0)
                    {
                        html += '<select class="form-control" name="goldType'+goldCount+'" id="goldType'+goldCount+'"><option value="">Select Gold Type</option>';
                        for(let i=0;i<parse.length;i++)
                        {
                            html += '<option class="'+parse[i].color+'" value="'+parse[i].Id+'">'+parse[i].Name+'</option>';
                        }
                        html += '</select>';
                    }else{
                        html += '<select class="form-control" name="goldType'+goldCount+'" id="goldType'+goldCount+'"><option value="">No Gold Type</option></select>';
                    }
                    html += '<label for="goldType'+goldCount+'" class="ms-3">Select Gold Type</label></div><div class="col-lg-auto col-md-auto col-sm-12 col-10 my-3 form-floating"><input type="text" class="form-control text-uppercase" placeholder="GOLD HUID No." onKeyUp="showGoldAccordingly(this.value)" maxlength="6" name="goldHUIDNumber'+goldCount+'" id="goldHUIDNumber'+goldCount+'"><label for="goldHUIDNumber'+goldCount+'" class="ms-2">Enter Gold HUID Number</div>';
                    html += '<div class="col-lg-auto col-md-auto col-sm-12 col-2 my-3" id="addDiv_'+goldCount+'"><button type="button" class="btn btn-secondary disabled" style="background:grey!important;color:white!important;"><i class="fa fa-check-circle"></i></button></div>';
                    html += '<div class="col-lg-auto col-md-auto col-sm-12 col-2 my-3 d-none" id="addSuccessDiv_'+goldCount+'"><button type="button" onclick="addGold()" class="btn btn-success" style="background:green!important;color:white!important;"><i class="fa fa-check-circle"></i></button></div>';
                    html += '<div class="col-lg-auto col-md-auto col-sm-12 col-2 my-3 d-none" id="deleteDiv_'+goldCount+'"><button type="button" onclick="removeGold()" class="btn btn-danger" style="background:white!important;color:red!important;"><i class="fa fa-trash"></i></button></div></div>';
                    $('#goldDetail').append(html);
                    $('#goldCount').val(goldCount);
                    $('#addMore').removeAttr('disabled');
                }
            })   
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
    
    function addGold()
    {
        $('#addDiv_'+goldCount).addClass('d-none');
        $('#addMoreDiv').removeClass('d-none');
        $('#addSuccessDiv_'+goldCount).addClass('d-none');
        $('#deleteDiv_'+goldCount).removeClass('d-none');
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
                }
            }
        })
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
    
    $('#btnOtp').addClass('btn-style-grey').removeClass('btn-style-five');
    $('#btnOtp').addClass('disabled');
    
    $('#btn1Submit').click(function (e) {
        e.preventDefault(); // prevent default form submission

        let $btn = $(this);
        $btn.attr('disabled', 'disabled');

        if ($('#person_name').val().trim() === '') {
            toastr.remove();
            toastr.error('Please add Person Name');
            $btn.removeAttr('disabled');
            return false;
        }

        if ($('#Gender').val().trim() === '') {
            toastr.remove();
            toastr.error('Please select Gender');
            $btn.removeAttr('disabled');
            return false;
        }

        if ($('#Age').val().trim() === '') {
            toastr.remove();
            toastr.error('Please select Date of Birth');
            $btn.removeAttr('disabled');
            return false;
        }

        if ($('#facematch').val().trim() === '') {
            toastr.remove();
            toastr.error('Please upload Photo');
            $btn.removeAttr('disabled');
            return false;
        }

        // check missing date if dateCreated not filled
        if ($('#dateCreated').val() == undefined) {
            let isFilled = 0;
            if ($('#missingday').val().trim() !== '' &&
                $('#missingmonth').val().trim() !== '' &&
                $('#missingyear').val().trim() !== '') {
                isFilled = 1;
            }
            if (isFilled === 0) {
                toastr.remove();
                toastr.error('Please select missing date');
                $btn.removeAttr('disabled');
                return false;
            }
        }

        // check file inputs
        let hasFile = hasFileInput($('#loginForm')[0]);
        if (hasFile) {
            toastr.remove();
            toastr.info("Please wait <b class='loading'></b>");
        }

        $('#loginForm')[0].submit();
    });
    
    $('#loginForm1').on('submit',function(e)
    {
        e.preventDefault();
        $('#btn1Submit').attr('disabled','disabled');
        let data = new FormData(this);
        $.ajax({
            url:$(this).attr('action'),
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
                    },2000);
                }else{
                   toastr.error(parse.message);
                    setTimeout(function()
                    {
                      location.reload();
                    },2000);
                }
            }
        });
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
    
    $('#btn3Back').click(function(){
        $(this).attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>NonKyc/lapata_login?pn=2";
    })
    
    function finalSubmitFirst(ele)
    {
        $(ele).attr('disabled','disabled');
        if($('#Gender').val() == '' || $('#Age').val() == '' || $('#facematch').val() == '')
        {
            toastr.error('Please Add Gender, Age and Photo');
            $(ele).removeAttr('disabled');
        }else{
            let data = new FormData($('#loginForm')[0]);
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
                url:'<?php echo base_url(); ?>NonKyc/finalUnknownSubmit',
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
                        toastr.success('Record Successfully Saved. -'+parse.applicationNumber);
                        setTimeout(function()
                        {
                            location.href="<?php echo base_url(); ?>NonKyc/lapata_login?pn=4";  
                        },2000);
                    }else{
                        toastr.error(parse.message);
                        $(ele).removeAttr('disabled');
                    }
                }
            })
        }
    }
    
    $('#btn3Dashboard').click(function(){
        $(this).attr('disabled','disabled');
        let data = new FormData();
        if($('#rewardAmount').val() != '')
        {
            data.append('rewardAmount',$('#rewardAmount').val());   
        }else{
            data.append('rewardAmount',0);
        }
        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        $.ajax({
            url:'<?php echo base_url(); ?>NonKyc/updateContact',
            type:'post',
            processData:false,
            contentType:false,
            data:data,
            cache:false,
            success:function(res)
            {
                toastr.success(res);
                let data = new FormData();
                data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                data.append('mainPhotoSelectedFacematch','<?= "data:image/jpeg;base64,".base64_encode(file_get_contents(base_url().''.$getPersonDetail[0]['Photo'])); ?>');
                data.append('type','unknown');
                <?php 
                    if($getPersonDetail[0]['Gender'] == 'boy')
                    {
                ?>
                data.append('gender','male');   
                <?php }else{ ?>
                data.append('gender','female');   
                <?php } ?>
                $.ajax({
                    url:'<?php echo base_url(); ?>NonKyc/searchPersonFace',
                    data:data,
                    contentType: false,
                    cache: false,
                    processData:false,
                    type:'post',
                    success:function(res)
                    {
                        let parse = JSON.parse(res);
                        if(parse.finalCount > 0)
                        {
                            location.href="<?php echo base_url(); ?>NonKyc/view_expiry_lapata";  
                        }else{
                            location.href="<?php echo base_url(); ?>NonKyc/lapata_login?pn=4";  
                        }
                    }
                });
            }
        })
    })
    
    $('#btn2Next').click(function(){
        $(this).attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>NonKyc/lapata_login?pn=3";
    })
    
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
    
    function showRewardAccordingly(val)
    {
        if(val.length <= 5 && val.length >= 1)
        {
            if(val != 0)
            {
                $('#rewardBtn').removeClass('btn-style-grey').addClass('btn-style-green');
                $('#rewardBtn').removeClass('disabled');   
            }else{
                $('#rewardBtn').addClass('btn-style-grey').removeClass('btn-style-green');
                $('#rewardBtn').addClass('disabled');
            }
        }else{
            $('#rewardBtn').removeClass('btn-style-green').addClass('btn-style-grey');
            $('#rewardBtn').addClass('disabled');
        }
    }
    
    function clearOtherDiv(index)
    {
        $('#rel'+index+'Div').removeClass('d-none');
        $('#otherrelationdiv'+index).addClass('d-none');
        $('#otherrelation'+index).val('');
        $('#wellrel'+index).val('').trigger('change');
    }
    
    function showAccordingly(val,index)
    {
        if(val == '')
        {
            $('#rel'+index+'Div').removeClass('d-none');
            $('#otherrelationdiv'+index).addClass('d-none');
            $('#otherrelation'+index).val('');
        }else{
            if(val == 23)
            {
                $('#rel'+index+'Div').addClass('d-none');
                $('#otherrelationdiv'+index).removeClass('d-none');
                $('#otherrelation'+index).val('');
            }else{
                $('#rel'+index+'Div').removeClass('d-none');
                $('#otherrelationdiv'+index).addClass('d-none');
                $('#otherrelation'+index).val('');
            }
        }
    }
    
    function verifyDeleteOtp(ele,index,setting)
    {
        $(ele).attr('disabled','disabled');
        let otp = $('#deleteOtpInput').val();
        if(otp != '')
        {
            let data= new FormData();
            data.append('index',index);
            data.append('otp',otp);
            data.append('setting',setting);
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
                url:'<?php echo base_url(); ?>NonKyc/deleteUnknownPersonMobile',
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
                        $(ele).removeAttr('disabled');
                        toastr.error(parse.message);
                     }
                }
            })   
        }else{
            $(ele).removeAttr('disabled');
            toastr.error('Please Enter OTP');
        }
    }
    
    function resendDeleteOtp(ele,index)
    {
        $(ele).attr('disabled','disabled');
        let otpdata = new FormData();
        otpdata.append('mobile',$('#othermob'+index).val());
        otpdata.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        $.ajax({
            url:'<?php echo base_url(); ?>NonKyc/sendDeleteUnknownPersonOtp',
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
                    toastr.success('An OTP has been sent on same number');
                }else{
                    toastr.error(parse.message);
                }
                $(ele).removeAttr('disabled');
            }
        })
    }
    
    function deleteAlternate(ele,index,setting)
    {
        $(ele).attr('disabled','disabled');
        if(setting == 1)
        {
            Swal.fire({
                title: '<strong class="text-danger" style="font-size:20px;">Are you sure you want to delete this contact- '+$('#othermob'+index).val()+'?</strong>',
                icon: 'error',
                allowOutsideClick:false,
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
                    otpdata.append('mobile',$('#othermob'+index).val());
                    otpdata.append('index',index);
                    otpdata.append('setting',setting);
                    otpdata.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                    $.ajax({
                        url:'<?php echo base_url(); ?>NonKyc/sendDeleteUnknownPersonOtp',
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
                                toastr.success('An OTP has been sent on same number');
                                $(ele).removeAttr('disabled');
                                Swal.fire({
                                  title: '<strong>Enter OTP to proceed </strong>',
                                  icon: 'success',
                                  allowOutsideClick:false,
                                  html:
                                    '<div class="form-group mb-3"><input type="number" class="form-control" id="deleteOtpInput"></div><div class="form-group"><button type="button" class="w-100 btn btn-primary save disabled-on-loading" onclick="verifyDeleteOtp(this,'+index+','+setting+')"> Verify OTP</button></div><div class="form-group mt-3 col-lg-6 col-md-6 col-sm-12" style="margin-left:auto;"><button type="button" class="w-100 btn btn-primary btn-style-five disabled-on-loading" onclick="resendDeleteOtp(this,'+index+')"> Resend OTP</button></div>',
                                  showCloseButton: true,
                                  showCancelButton: false,
                                  focusConfirm: false,
                                  showConfirmButton:false
                                })
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
        }else{
            Swal.fire({
                title: '<strong class="text-danger" style="font-size:20px;">Are you sure you want to delete this contact- '+$('#othermob'+index).val()+'?</strong>',
                icon: 'error',
                allowOutsideClick:false,
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
                    otpdata.append('setting',setting);
                    otpdata.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                    $.ajax({
                        url:'<?php echo base_url(); ?>NonKyc/deleteUnknownPersonMobile',
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
                url:'<?php echo base_url(); ?>NonKyc/verifyUnknownPersonMobileOtp',
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
                url:'<?php echo base_url(); ?>NonKyc/sendUnknownPersonMobileOtp',
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
                                setTimeout(function(){
                                    $("#otp"+index).filter(':visible').focus();
                                }, 500);
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
    
    function clearAadhar(ele)
    {
        Swal.fire({
            title: '<strong class="text-dark" style="font-size:20px;">Cancel</strong>',
            icon: 'info',
            html:'<div class="form-group mb-2">Are you sure, you want to cancel filling the Missing form?</div>',
            allowOutsideClick:true,
            showCloseButton: true,
            showCancelButton: true,
            focusConfirm: true,
            showConfirmButton:true
        }).then((result) => {
            if (result.isConfirmed) {
                location.reload();
            }
        })
    }
    
    function redirectToStep2(id)
    {
        window.open('<?php echo base_url(); ?>find-missing-person?id='+id,'_blank');
    }
    
    function showColorAccordingly(ele,id,status,appNo)
    {
        $(ele).attr('disabled','disabled');
        if(status == 0)
        {
            Swal.fire({
                title: '<strong class="text-danger" style="font-size:20px;">Complaint Activate- '+appNo+'</strong>',
                icon: 'info',
                allowOutsideClick:false,
                html:
                    '<div class="form-group mt-3"><label class="form-label" style="font-size:17px!important;">Are you sure you want to activate complaint again?</label></div>',
                showCloseButton: true,
                showCancelButton: true,
                confirmButtonText:'Yes',
                cancelButtonText:'No',
                focusConfirm: false,
                showConfirmButton:true
            }).then((result) => {
                if (result.isConfirmed) {
                    let data = new FormData();
                    data.append('id',id);
                    data.append('status',1);
                    data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                    $.ajax({
                        url:'<?php echo base_url(); ?>NonKyc/reactivateComplaint',
                        data:data,
                        contentType: false,
                        cache: false,
                        processData:false,
                        type:'post',
                        success:function(res)
                        {
                            toastr.success('complaint activated successfully');
                            setTimeout(function()
                            {
                                location.reload();
                            },2000);
                        }
                    });
                }else{
                    $(ele).prop('disabled',false);
                }
            })   
        }else{
            Swal.fire({
                title: '<strong class="text-danger" style="font-size:20px;">Complaint Deactivate- '+appNo+'</strong>',
                icon: 'info',
                allowOutsideClick:false,
                html:
                    '<div class="form-group mt-3"><label class="form-label" style="font-size:17px!important;">Are you sure you want to deactivate complaint?</label></div>',
                showCloseButton: true,
                showCancelButton: true,
                confirmButtonText:'Yes',
                cancelButtonText:'No',
                focusConfirm: false,
                showConfirmButton:true
            }).then((result) => {
                if (result.isConfirmed) {
                    let data = new FormData();
                    data.append('id',id);
                    data.append('status',0);
                    data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                    $.ajax({
                        url:'<?php echo base_url(); ?>NonKyc/reactivateComplaint',
                        data:data,
                        contentType: false,
                        cache: false,
                        processData:false,
                        type:'post',
                        success:function(res)
                        {
                            toastr.success('complaint deactivated successfully');
                            setTimeout(function()
                            {
                                location.reload();
                            },2000);
                        }
                    });
                }else{
                    $(ele).prop('disabled',false);
                }
            })
        }
    }
    
    function checkReward(ele)
    {
        $(ele).attr('disabled','disabled');
        $.ajax({
            url:'<?php echo base_url(); ?>NonKyc/saveReward',
            data:{rewardAmount:$('#rewardAmount').val(),'_token':'<?php echo $this->security->get_csrf_hash(); ?>'},
            type:'post',
            success:function(res)
            {
                toastr.success('Reward Added Successfully');
                setTimeout(function()
                {
                    location.reload();
                },2000);
            }
        })
    }
    
    function checkAadhar(ele)
    {
        $(ele).attr('disabled','disabled');
        $.ajax({
            url:'<?php echo base_url(); ?>landing/getLapataDetails',
            data:{aadhar:$('#aadharNumber').val(),'_token':'<?php echo $this->security->get_csrf_hash(); ?>'},
            type:'post',
            success:function(res)
            {
                let parse = JSON.parse(res);
                $(ele).removeAttr('disabled');
                if(parse.status == 'success')
                {
                    $('.backDiv').removeClass('d-none');
                    $('.withAadharDiv').addClass('d-none');
                    $('#aadharLabel').html('Aadhar No.*');
                    $('.parentDiv').addClass('d-none');
                    $('.parentDiv').parent().removeClass('p-0').addClass('p-3');
                    $('.aadharRow').addClass('mt-3');
                    if(parse.isRegistered == 1)
                    {
                        let html = '';
                        if(parse.activeDate != '')
                        {
                            html = '<div class="form-group mb-3 mt-3" style="font-weight:bold;color:black;">Aadhaar No- '+parse.aadhar+'<br><br> Name- '+parse.personName+'</div><div class="form-group" style="color:black;font-weight:bold;">Plan expiring on:- <b style="color:green;">'+parse.activeDate+'</b></div>';
                        }else{
                            html = '<div class="form-group mb-3 mt-3" style="font-weight:bold;color:black;">Aadhaar No- '+parse.aadhar+'<br><br> Name- '+parse.personName+'</div>';
                        }
                        Swal.fire({
                            iconHtml: '<img src="'+parse.popupPhoto+'" style="height:120px;">',
                            customClass: {
                                icon: 'no-border',
                                htmlContainer:'px-0'
                            },
                            html:html,
                            // html:'<div class="form-group mb-2">Dear <b><?php echo $_SESSION['aadharName']; ?></b>, Aadhaar No. '+$('#aadharNumber').val()+' is registered in our website. We are fetching details of the person. Click continue button to fill the form.</div>',
                            allowOutsideClick:false,
                            showCloseButton: true,
                            showCancelButton: true,
                            focusConfirm: true,
                            confirmButtonText:'Continue',
                            reverseButtons :true,
                            showConfirmButton:true
                        }).then((result) => {
                            if (result.isConfirmed) {
                                $('#personImage img').attr('src',parse.popupPhoto);
                                $('#personImage').removeClass('d-none');
                                $('#aadharNumber').attr('readonly',true);
                                $('#aadharcleardiv').removeClass('d-none');
                                $('#aadharsearchdiv').addClass('d-none');
                                $('.hiddendiv').removeClass('d-none');
                                $('.clickdiv').addClass('d-none');
                                $('#PAN').val(parse.panNumber);
                                if(parse.panNumber != '')
                                {
                                    $('#PAN').attr('readonly',true);
                                }
                                $('#DL_no').val(parse.dlNumber);
                                if(parse.dlNumber != '')
                                {
                                    $('#DL_no').attr('readonly',true);
                                }
                                $('#voter_id').val(parse.voterId);
                                if(parse.voterId != '')
                                {
                                    $('#voter_id').attr('readonly',true);
                                }
                                $('#person_name').val(parse.personName);
                                if(parse.personName != '' && parse.personName != null)
                                {
                                    $('#person_name').attr('readonly',true);
                                }
                                $('#Gender').val(parse.gender);
                                $('.Gender').val(parse.gender);
                                if(parse.gender != '')
                                {
                                    $('#Gender').attr('disabled',true);
                                    $('#Gender').removeAttr('name');
                                    $('.Gender').prop('name','Gender');
                                }
                                $('#dob').val(parse.dob);
                                if(parse.dob != '' && parse.dob != null)
                                {
                                    $('#dob').attr('readonly',true);
                                }
                                $('#Age').val(parse.ageBand);
                                $('#Height').val(parse.height);
                                $('.Height').val(parse.height);
                                if(parse.height != '' && parse.height != null)
                                {
                                    $('#Height').attr('disabled',true);
                                    $('#Height').removeAttr('name');
                                    $('.Height').prop('name','Height');
                                }
                                $('#Religion').val(parse.religion);
                                $('.Religion').val(parse.religion);
                                if(parse.religion != '' && parse.religion != null)
                                {
                                    $('#Religion').attr('disabled',true);
                                    $('#Religion').removeAttr('name');
                                    $('.Religion').prop('name','Religion');
                                }
                                if(parse.photo != '' && parse.photo != null)
                                {
                                    $('#profile-pic').prop('src',parse.photo);   
                                    $('#facematch').val(parse.photo);
                                    $('#my-button').removeClass('d-none');
                                }
                            }
                            else if(result.isDismissed)
                            {
                                location.reload();
                            }else if(result.isDenied)
                            {
                                location.reload();
                            }
                        })
                        $(ele).removeAttr('disabled');   
                    }else{
                        let html = '';
                        if(parse.activeDate != '')
                        {
                            html = '<div class="form-group mt-3" style="font-weight:bold;color:black;">Aadhaar No- '+parse.aadhar+'<br><br></div><div class="form-group" style="color:black;font-weight:bold;">Plan expiring on:- <b style="color:green;">'+parse.activeDate+'</b></div>';
                        }
                        if(html != '')
                        {
                            Swal.fire({
                                iconHtml: '<img src="'+parse.popupPhoto+'" style="height:120px;">',
                                customClass: {
                                    icon: 'no-border',
                                    htmlContainer:'px-0'
                                },
                                html:html,
                                allowOutsideClick:false,
                                showCloseButton: true,
                                showCancelButton: true,
                                focusConfirm: true,
                                confirmButtonText:'Continue',
                                reverseButtons :true,
                                showConfirmButton:true
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    $('#aadharNumber').attr('readonly',true);
                                    $('#aadharcleardiv').removeClass('d-none');
                                    $('#aadharsearchdiv').addClass('d-none');
                                    $('.hiddendiv').removeClass('d-none');
                                    $('.clickdiv').addClass('d-none');
                                    $('#Gender').val(parse.gender);
                                    $('.Gender').val(parse.gender);
                                    if(parse.gender != '')
                                    {
                                        $('#Gender').attr('disabled',true);
                                        $('#Gender').removeAttr('name');
                                        $('.Gender').prop('name','Gender');
                                    }
                                    $('#state').val(parse.state).trigger('change');
                                }
                                else if(result.isDismissed)
                                {
                                    location.reload();
                                }else if(result.isDenied)
                                {
                                    location.reload();
                                }
                            })
                            $(ele).removeAttr('disabled');   
                        }else{
                            $('#aadharNumber').attr('readonly',true);
                            $('#aadharcleardiv').removeClass('d-none');
                            $('#aadharsearchdiv').addClass('d-none');
                            $('.hiddendiv').removeClass('d-none');
                            $('.clickdiv').addClass('d-none');
                            $('#Gender').val(parse.gender);
                            $('.Gender').val(parse.gender);
                            if(parse.gender != '')
                            {
                                $('#Gender').attr('disabled',true);
                                $('#Gender').removeAttr('name');
                                $('.Gender').prop('name','Gender');
                            }
                            $('#state').val(parse.state).trigger('change');   
                        }
                    }
                }else{
                    if(parse.status == 'already' || parse.status == 'inactive')
                    {
                        if(parse.isFound == "0")
                        {
                            if(parse.expiryDate != '')
                            {
                                Swal.fire({
                                    imageUrl: parse.image,
                                    imageHeight:'200px',
                                    customClass:{
                                      actions:'mt-2'  
                                    },
                                    html:'<div class="form-group mb-2 word"><b style="color:black;line-height:2rem;">You have already uploaded the missing details of '+parse.personName + ' package ending on- ' + parse.expiryDate +'.</b></div>',
                                    allowOutsideClick:true,
                                    showCloseButton: true,
                                    showCancelButton: true,
                                    reverseButtons: true,
                                    'cancelButtonText':'Back',
                                    focusConfirm: true,
                                    'confirmButtonText':'View Detail',
                                    showConfirmButton:true
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        window.open('<?php echo base_url(); ?>NonKyc/editLapataDetails?id='+parse.appNo,'_blank');
                                    }else{
                                        location.reload();
                                    }
                                })      
                            }else{
                                Swal.fire({
                                    imageUrl: parse.image,
                                    imageHeight:'200px',
                                    customClass:{
                                      actions:'mt-2'  
                                    },
                                    html:'<div class="form-group mb-2 word"><b style="color:black;line-height:2rem;">You have already uploaded the missing details of '+parse.personName+'.</b></div>',
                                    allowOutsideClick:true,
                                    showCloseButton: true,
                                    showCancelButton: true,
                                    reverseButtons: true,
                                    'cancelButtonText':'Back',
                                    focusConfirm: true,
                                    'confirmButtonText':'View Detail',
                                    showConfirmButton:true
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        window.open('<?php echo base_url(); ?>NonKyc/editLapataDetails?id='+parse.appNo,'_blank');
                                    }else{
                                        location.reload();
                                    }
                                })
                            }
                        }else{
                            if(parse.expiryDate != '')
                            {
                                Swal.fire({
                                    imageUrl: parse.image,
                                    imageHeight:'200px',
                                    customClass:{
                                      actions:'mt-2'  
                                    },
                                    html:'<div class="form-group mb-2 word"><b style="color:black;line-height:2rem;">You have already uploaded the missing details of '+parse.personName + ' package ending on- ' + parse.expiryDate +'.</b></div>',
                                    allowOutsideClick:true,
                                    showCloseButton: true,
                                    showCancelButton: true,
                                    reverseButtons: true,
                                    'cancelButtonText':'Back',
                                    focusConfirm: true,
                                    'confirmButtonText':'View Detail',
                                    showConfirmButton:true
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        window.open('<?php echo base_url(); ?>NonKyc/editLapataDetails?id='+parse.appNo,'_blank');
                                    }else{
                                        location.reload();
                                    }
                                })   
                            }else{
                                Swal.fire({
                                    imageUrl: parse.image,
                                    imageHeight:'200px',
                                    customClass:{
                                      actions:'mt-2'  
                                    },
                                    html:'<div class="form-group mb-2 word"><b style="color:black;line-height:2rem;">You have already uploaded the missing details of '+parse.personName+'.</b></div>',
                                    allowOutsideClick:true,
                                    showCloseButton: true,
                                    showCancelButton: true,
                                    reverseButtons: true,
                                    'cancelButtonText':'Back',
                                    focusConfirm: true,
                                    'confirmButtonText':'View Detail',
                                    showConfirmButton:true
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        window.open('<?php echo base_url(); ?>NonKyc/editLapataDetails?id='+parse.appNo,'_blank');
                                    }else{
                                        location.reload();
                                    }
                                })
                            }
                        }
                    }else{
                        if(parse.status == 'unknown')
                        {
                            let html = '';
                            let isMobAvailable = 0;
                            let mobilehtml = '<div class="col-12 ">';
                            mobilehtml += '<a href="tel:'+parse.registration_mobile+'" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>';
                            if(parse.mobile1 != '')
                            {
                                isMobAvailable = 1;
                                mobilehtml += '<a href="tel:'+parse.mobile1+'" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>';
                            }
                            if(parse.mobile2 != '')
                            {
                                isMobAvailable = 1;
                                mobilehtml += '<a href="tel:'+parse.mobile2+'" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>';
                            }
                            if(parse.mobile3 != '')
                            {
                                isMobAvailable = 1;
                                mobilehtml += '<a href="tel:'+parse.mobile3+'" class="btn btn-circle btn-sm btn-police4" ><i class="fa fa-phone"></i> </a>';
                            }
                            mobilehtml += '</div>';
                            if(parse.type == 'police')
                            {
                                html = '<div class="form-group mb-3 text-right"><button type="button" onclick="shareLap(this,`'+parse.id+'`)" class="btn btn-dark disabled-on-loading me-3" style="background:black!important;color:white!important;"> <i class="fa fa-share-alt"></i></button><a target="_blank" href="<?php echo base_url(); ?>find-missing-person?id='+parse.id+'" class="btn btn-primary"><i class="fa fa-eye"></i></a></div><div class="form-group mb-3"><img src="'+parse.photo+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadharNumber+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Uploaded Date :- </b>'+parse.date+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Thana Address :- </b>'+parse.address+'</label></div><div class="row w-100 mx-0 align-items-center"><div class="col-12 mb-3"><b style="font-size:.9rem!important;color:black;">Contact To: - POLICE THANA </b></div>'+mobilehtml+'</div>';                                
                            }else{
                                html = '<div class="form-group mb-3 text-right"><button type="button" onclick="shareLap(this,`'+parse.id+'`)" class="btn btn-dark disabled-on-loading me-3" style="background:black!important;color:white!important;"> <i class="fa fa-share-alt"></i></button><a target="_blank" href="<?php echo base_url(); ?>find-missing-person?id='+parse.id+'" class="btn btn-primary"><i class="fa fa-eye"></i></a></div><div class="form-group mb-3"><img src="'+parse.photo+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadharNumber+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Uploaded Date :- </b>'+parse.date+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">NGO Address :- </b>'+parse.address+'</label></div><div class="row w-100 mx-0 align-items-center"><div class="col-12 mb-3"><b style="font-size:.9rem!important;color:black;">Contact To: - NGO </b></div>'+mobilehtml+'</div>';   
                            }
                            Swal.fire({
                                title:'<span style="color:#dc3545;border:1px solid red;padding:1rem;font-weight:bold;">APPEAL FOR IDENTIFICATION</span>',
                                allowOutsideClick:false,
                                customClass: {
                                  title: 'lapataTitle',
                                },
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
                        }else{
                            if(parse.status == 'inactive')
                            {
                                $('#aadharLabel').html('Aadhar No.*');
                                $('#labelDiv').addClass('d-none');
                                $('.aadharRow').addClass('mt-3');
                                $('#oldId').val(parse.id);
                                $('#applicationNo').val(parse.appNo);
                                if(parse.isRegistered == 1)
                                {
                                    let html = '';
                                    if(parse.activeDate != '')
                                    {
                                        html = '<div class="form-group mb-3 mt-3" style="font-weight:bold;color:black;">Aadhaar No- '+parse.aadhar+'<br><br> Name- '+parse.personName+'</div><div class="form-group" style="color:black;font-weight:bold;">Plan expiring on:- <b style="color:green;">'+parse.activeDate+'</b></div><div class="form-group" style="color:black;font-weight:bold;">Current Status:- <b style="color:red;">In-Active</b></div>';
                                    }else{
                                        html = '<div class="form-group mb-3 mt-3" style="font-weight:bold;color:black;">Aadhaar No- '+parse.aadhar+'<br><br> Name- '+parse.personName+'</div>';
                                    }
                                    Swal.fire({
                                        iconHtml: '<img src="'+parse.popupPhoto+'" style="height:120px;">',
                                        customClass: {
                                            icon: 'no-border',
                                            htmlContainer:'px-0'
                                        },
                                        html:html,
                                        // html:'<div class="form-group mb-2">Dear <b><?php echo $_SESSION['aadharName']; ?></b>, Aadhaar No. '+$('#aadharNumber').val()+' is registered in our website. We are fetching details of the person. Click continue button to fill the form.</div>',
                                        allowOutsideClick:false,
                                        showCloseButton: true,
                                        showCancelButton: true,
                                        focusConfirm: true,
                                        confirmButtonText:'Continue',
                                        reverseButtons :true,
                                        showConfirmButton:true
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            location.href="<?php echo base_url(); ?>NonKyc/editLapataDetails?id="+parse.appNo;
                                            $('#personImage img').attr('src',parse.popupPhoto);
                                            $('#personImage').removeClass('d-none');
                                            $('#aadharNumber').attr('readonly',true);
                                            $('#aadharcleardiv').removeClass('d-none');
                                            $('#aadharsearchdiv').addClass('d-none');
                                            $('.hiddendiv').removeClass('d-none');
                                            $('.clickdiv').addClass('d-none');
                                            $('#PAN').val(parse.panNumber);
                                            if(parse.panNumber != '')
                                            {
                                                $('#PAN').attr('readonly',true);
                                            }
                                            $('#DL_no').val(parse.dlNumber);
                                            if(parse.dlNumber != '')
                                            {
                                                $('#DL_no').attr('readonly',true);
                                            }
                                            $('#voter_id').val(parse.voterId);
                                            if(parse.voterId != '')
                                            {
                                                $('#voter_id').attr('readonly',true);
                                            }
                                            $('#person_name').val(parse.personName);
                                            if(parse.personName != '' && parse.personName != null)
                                            {
                                                $('#person_name').attr('readonly',true);
                                            }
                                            $('#Gender').val(parse.gender);
                                            $('.Gender').val(parse.gender);
                                            if(parse.gender != '')
                                            {
                                                $('#Gender').attr('disabled',true);
                                                $('#Gender').removeAttr('name');
                                                $('.Gender').prop('name','Gender');
                                            }
                                            $('#dob').val(parse.dob);
                                            if(parse.dob != '' && parse.dob != null)
                                            {
                                                $('#dob').attr('readonly',true);
                                            }
                                            $('#Age').val(parse.ageBand);
                                            $('#Height').val(parse.height);
                                            $('.Height').val(parse.height);
                                            if(parse.height != '' && parse.height != null)
                                            {
                                                $('#Height').attr('disabled',true);
                                                $('#Height').removeAttr('name');
                                                $('.Height').prop('name','Height');
                                            }
                                            $('#Religion').val(parse.religion);
                                            $('.Religion').val(parse.religion);
                                            if(parse.religion != '' && parse.religion != null)
                                            {
                                                $('#Religion').attr('disabled',true);
                                                $('#Religion').removeAttr('name');
                                                $('.Religion').prop('name','Religion');
                                            }
                                            if(parse.photo != '' && parse.photo != null)
                                            {
                                                $('#profile-pic').prop('src',parse.photo);   
                                                $('#facematch').val(parse.photo);
                                                $('#my-button').removeClass('d-none');
                                            }
                                        }
                                        else if(result.isDismissed)
                                        {
                                            location.reload();
                                        }else if(result.isDenied)
                                        {
                                            location.reload();
                                        }
                                    })
                                    $(ele).removeAttr('disabled');   
                                }else{
                                    let html = '';
                                    if(parse.activeDate != '')
                                    {
                                        html = '<div class="form-group mt-3" style="font-weight:bold;color:black;">Aadhaar No- '+parse.aadhar+'<br><br></div><div class="form-group" style="color:black;font-weight:bold;">Plan expiring on:- <b style="color:green;">'+parse.activeDate+'</b></div>';
                                    }
                                    if(html != '')
                                    {
                                        Swal.fire({
                                            iconHtml: '<img src="'+parse.popupPhoto+'" style="height:120px;">',
                                            customClass: {
                                                icon: 'no-border',
                                                htmlContainer:'px-0'
                                            },
                                            html:html,
                                            allowOutsideClick:false,
                                            showCloseButton: true,
                                            showCancelButton: true,
                                            focusConfirm: true,
                                            confirmButtonText:'Continue',
                                            reverseButtons :true,
                                            showConfirmButton:true
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                $('#aadharNumber').attr('readonly',true);
                                                $('#aadharcleardiv').removeClass('d-none');
                                                $('#aadharsearchdiv').addClass('d-none');
                                                $('.hiddendiv').removeClass('d-none');
                                                $('.clickdiv').addClass('d-none');
                                                $('#Gender').val(parse.gender);
                                                $('.Gender').val(parse.gender);
                                                if(parse.gender != '')
                                                {
                                                    $('#Gender').attr('disabled',true);
                                                    $('#Gender').removeAttr('name');
                                                    $('.Gender').prop('name','Gender');
                                                }
                                                $('#state').val(parse.state).trigger('change');
                                            }
                                            else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }else if(result.isDenied)
                                            {
                                                location.reload();
                                            }
                                        })
                                        $(ele).removeAttr('disabled');   
                                    }else{
                                        $('#aadharNumber').attr('readonly',true);
                                        $('#aadharcleardiv').removeClass('d-none');
                                        $('#aadharsearchdiv').addClass('d-none');
                                        $('.hiddendiv').removeClass('d-none');
                                        $('.clickdiv').addClass('d-none');
                                        $('#Gender').val(parse.gender);
                                        $('.Gender').val(parse.gender);
                                        if(parse.gender != '')
                                        {
                                            $('#Gender').attr('disabled',true);
                                            $('#Gender').removeAttr('name');
                                            $('.Gender').prop('name','Gender');
                                        }
                                        $('#state').val(parse.state).trigger('change');   
                                    }
                                }  
                            }else{
                                if(parse.status == 'planexpire')
                                {
                                    let html = '';
                                    html = '<div class="form-group mb-3 mt-3" style="font-weight:bold;color:black;">Aadhaar No- '+parse.aadhar+'<br><br> Name- '+parse.personName+'</div><div class="form-group" style="color:black;font-weight:bold;">Plan expired on:- <b style="color:red;">'+parse.activeDate+'</b></div>';
                                    Swal.fire({
                                        iconHtml: '<img src="'+parse.popupPhoto+'" style="height:120px;">',
                                        customClass: {
                                            icon: 'no-border',
                                            htmlContainer:'px-0'
                                        },
                                        html:html,
                                        // html:'<div class="form-group mb-2">Dear <b><?php echo $_SESSION['aadharName']; ?></b>, Aadhaar No. '+$('#aadharNumber').val()+' is registered in our website. We are fetching details of the person. Click continue button to fill the form.</div>',
                                        allowOutsideClick:false,
                                        showCloseButton: true,
                                        showCancelButton: true,
                                        focusConfirm: true,
                                        confirmButtonText:'Continue',
                                        reverseButtons :true,
                                        showConfirmButton:true
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            location.href="<?php echo base_url(); ?>NonKyc/showPaymentModels?id="+parse.id;
                                            $('#personImage img').attr('src',parse.popupPhoto);
                                            $('#personImage').removeClass('d-none');
                                            $('#aadharNumber').attr('readonly',true);
                                            $('#aadharcleardiv').removeClass('d-none');
                                            $('#aadharsearchdiv').addClass('d-none');
                                            $('.hiddendiv').removeClass('d-none');
                                            $('.clickdiv').addClass('d-none');
                                            $('#PAN').val(parse.panNumber);
                                            if(parse.panNumber != '')
                                            {
                                                $('#PAN').attr('readonly',true);
                                            }
                                            $('#DL_no').val(parse.dlNumber);
                                            if(parse.dlNumber != '')
                                            {
                                                $('#DL_no').attr('readonly',true);
                                            }
                                            $('#voter_id').val(parse.voterId);
                                            if(parse.voterId != '')
                                            {
                                                $('#voter_id').attr('readonly',true);
                                            }
                                            $('#person_name').val(parse.personName);
                                            if(parse.personName != '' && parse.personName != null)
                                            {
                                                $('#person_name').attr('readonly',true);
                                            }
                                            $('#Gender').val(parse.gender);
                                            $('.Gender').val(parse.gender);
                                            if(parse.gender != '')
                                            {
                                                $('#Gender').attr('disabled',true);
                                                $('#Gender').removeAttr('name');
                                                $('.Gender').prop('name','Gender');
                                            }
                                            $('#dob').val(parse.dob);
                                            if(parse.dob != '' && parse.dob != null)
                                            {
                                                $('#dob').attr('readonly',true);
                                            }
                                            $('#Age').val(parse.ageBand);
                                            $('#Height').val(parse.height);
                                            $('.Height').val(parse.height);
                                            if(parse.height != '' && parse.height != null)
                                            {
                                                $('#Height').attr('disabled',true);
                                                $('#Height').removeAttr('name');
                                                $('.Height').prop('name','Height');
                                            }
                                            $('#Religion').val(parse.religion);
                                            $('.Religion').val(parse.religion);
                                            if(parse.religion != '' && parse.religion != null)
                                            {
                                                $('#Religion').attr('disabled',true);
                                                $('#Religion').removeAttr('name');
                                                $('.Religion').prop('name','Religion');
                                            }
                                            if(parse.photo != '' && parse.photo != null)
                                            {
                                                $('#profile-pic').prop('src',parse.photo);   
                                                $('#facematch').val(parse.photo);
                                                $('#my-button').removeClass('d-none');
                                            }
                                        }
                                        else if(result.isDismissed)
                                        {
                                            location.reload();
                                        }else if(result.isDenied)
                                        {
                                            location.reload();
                                        }
                                    })
                                    $(ele).removeAttr('disabled');   
                                }else{
                                    let textMessage = 'Aadhar Number';
                                    Swal.fire({
                                        title: '<strong style="font-size:1rem;color:red;"><span style="color:black;">Oops! No Record Found</span><br>'+(textMessage + '- ' + $('#aadharNumber').val())+'</strong>',
                                        iconHtml: '<img src="<?php echo base_url(); ?>assets/images/oops.png" style="height:150px;">',
                                        customClass: {
                                            icon: 'no-border',
                                            htmlContainer:'px-0'
                                        },
                                        allowOutsideClick:false,
                                        html: '<div class="row mt-3 mx-0 justify-content-center"><div class="col-lg-12 col-md-12"><a href="javascript:void(0)" onclick="swal.close()" class="btn btn-primary btn-style-primary">Please Try Again</a></div></div><div class="row mt-3 mx-0 justify-content-center"><div class="col-lg-12 col-md-12"><a href="<?php echo base_url(); ?>non-kyc-dashboard-profile" class="btn btn-success save">Go To Dashboard</a></div></div>',
                                        showCloseButton: true,
                                        showConfirmButton:false,
                                        confirmButtonText:'Please Try Again',
                                        showCancelButton: false,
                                        focusConfirm: false,
                                    }).then((result) => {
                                        $('#aadharNumber').attr('readonly',false);
                                        $('#aadharcleardiv').addClass('d-none');
                                        $('#aadharsearchdiv').removeClass('d-none');
                                        $('.hiddendiv').addClass('d-none');
                                        $(ele).removeAttr('disabled');
                                    })      
                                }
                            }
                        }
                    }
                }
            }
        })
    }
    
    function resendOtp(ele,index)
    {
        let mob = $('#othermob'+index).val();
        $(ele).attr('disabled','disabled');
        let data= new FormData();
        data.append('mobile',mob);
        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        $.ajax({
            url:'<?php echo base_url(); ?>NonKyc/sendUnknownPersonMobileOtp',
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
    
    function showRelationAccordingly(val,index)
    {
        if(val == '')
        {
            $('#rel'+index+'Div').removeClass('d-none');
            $('#otherrelationdiv'+index).addClass('d-none');
            $('#otherrelation'+index).val('');
        }else{
            if(val == 23)
            {
                $('#rel'+index+'Div').addClass('d-none');
                $('#otherrelationdiv'+index).removeClass('d-none');
                $('#otherrelation'+index).val('');
            }else{
                $('#rel'+index+'Div').removeClass('d-none');
                $('#otherrelationdiv'+index).addClass('d-none');
                $('#otherrelation'+index).val('');
            }
        }
    }
    
    <?php 
        $getSettings = $this->db->query('select * from settings where name="uploadLapata"')->result_array();
    ?>
    
    function payNow(ele)
    {
        $(ele).attr('disabled',true);
        let data = new FormData();
        if($('#rewardAmount').val() != '')
        {
            data.append('rewardAmount',$('#rewardAmount').val());   
        }else{
            data.append('rewardAmount',0);
        }
        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        $.ajax({
            url:'<?php echo base_url(); ?>NonKyc/saveReward',
            type:'post',
            processData:false,
            contentType:false,
            data:data,
            cache:false,
            success:function(res)
            {
                <?php 
                    if($getPersonDetail[0]['aadharNumber'] != NULL)
                    {
                ?>
                <?php 
                    if($getPersonDetail[0]['isFree'] == 1)
                    {
                ?>
                let uniqueData = new FormData();
                uniqueData.append('uniqueAadhar','<?= $getPersonDetail[0]['aadharNumber']; ?>');   
                uniqueData.append('Id','<?= $getPersonDetail[0]['id']; ?>');
                uniqueData.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                $.ajax({
                    url:'<?= base_url(); ?>NonKyc/saveUniqueAadhar',
                    data:uniqueData,
                    type:'post',
                    processData:false,
                    contentType:false,
                    cache:false,
                    success:function(res)
                    {
                        let parse = JSON.parse(res);
                        if(parse.status == 'notapplicable')
                        {
                            Swal.fire({
                                icon: 'warning',
                                html:'<div class="form-group mb-2">Sorry, You are not eligible for free credit for this complaint.</div>',
                                allowOutsideClick:true,
                                showCloseButton: true,
                                showCancelButton: true,
                                focusConfirm: true,
                                showConfirmButton:true
                            }).then((result) => {
                                location.href='<?php echo base_url(); ?>NonKyc/showPaymentModels?type=missing';         
                            });
                        }else{
                            location.href='<?php echo base_url(); ?>NonKyc/showPaymentModels?type=missing';         
                        }
                    }
                })
                <?php }else{ ?>
                location.href='<?php echo base_url(); ?>NonKyc/showPaymentModels?type=missing';      
                <?php } ?>
                <?php }else{ ?>
                location.href='<?php echo base_url(); ?>NonKyc/showPaymentModels?type=missing';
                <?php } ?>
            }
        })
    }
    
    function getAge() {
        let year = $('#year').val();
        let month = $('#month').val();
        let day = $('#day').val();

        console.log("Selected values:", { year, month, day });

        if (!year || !month || !day) {
            $('#Age').val('');
            $('#Age').attr('readonly', false);
            $('.ageDiv').addClass('d-none');
            return;
        }

        // Ensure padded values
        month = month.toString().padStart(2, '0');
        day = day.toString().padStart(2, '0');

        let dob = `${year}-${month}-${day}`;
        console.log("DOB to be sent:", dob);

        let data = new FormData();
        data.append('dob', dob);
        data.append('_token', '<?php echo $this->security->get_csrf_hash(); ?>');

        $.ajax({
            url: '<?php echo base_url(); ?>landing/getAge',
            data: data,
            contentType: false,
            cache: false,
            processData: false,
            type: 'post',
            success: function(res) {
                console.log("Response:", res);
                $('#Age').val(res);
                $('#Age').attr('readonly', true);
                $('.ageDiv').removeClass('d-none');
            }
        });
    }
    
    function showDivAccordingly(type)
    {
        if(type=='show')
        {
            $('#type').val('with');
            $('#newWith').parent().addClass('d-none');
            $('#withLabel').addClass('d-none');
            $('#withoutDiv').addClass('d-none');
            $('.hiddendiv').addClass('d-none');
        }else{
            $('#type').val('without');
            $('#withDiv').addClass('d-none');
            $('#withoutDiv').addClass('d-none');
            $('.hiddendiv').removeClass('d-none');
        }
    }
    
    function selectRadio(type)
    {
        $('#topLogo').attr('src','<?= base_url(); ?>assets/img/questionMarkIcon.png')
        if(type == 'with')
        {
            $('.backDiv').removeClass('d-none');
            $('.withAadharDiv').removeClass('d-none');
            $('#newWith').prop('checked',true);
            $('.parentDiv').addClass('d-none');
            $('#newWithout').prop('checked',false);
            showDivAccordingly('show');
        }else{
            $('.parentDiv').parent().removeClass('p-0').addClass('p-3');
            $('.backDiv').removeClass('d-none');
            $('.parentDiv').addClass('d-none');
            $('#newWith').prop('checked',false);
            $('#newWithout').prop('checked',true);
            showDivAccordingly('hide');
        }
    }
    
    function showLink()
    {
        $('#shareDiv').slideToggle('fast');
    }
    
    function back()
    {
        location.href="<?= base_url(); ?>user-dashboard";
    }
    
    function numberOnly(id) {
        // Get element by id which passed as parameter within HTML element event
        var element = document.getElementById(id);
        // This removes any other character but numbers as entered by user
        element.value = element.value.replace(/[^0-9]/gi, "");
    }
    
    function editReward(ele)
    {
        $('#rewardDeletediv').addClass('d-none');
        $('#rewardEditdiv').removeClass('d-none');
    }
    
    function deleteReward(ele)
    {
        Swal.fire({
            title: '<strong class="text-dark" style="font-size:20px;">Delete Reward</strong>',
            icon: 'info',
            html:'<div class="form-group mb-2">Are you sure you want to delete the reward?</div>',
            allowOutsideClick:true,
            showCloseButton: true,
            showCancelButton: true,
            focusConfirm: true,
            showConfirmButton:true
        }).then((result) => {
            if (result.isConfirmed) {
                $(ele).attr('disabled','disabled');
                $.ajax({
                    url:'<?php echo base_url(); ?>NonKyc/saveReward',
                    data:{rewardAmount:null,'_token':'<?php echo $this->security->get_csrf_hash(); ?>'},
                    type:'post',
                    success:function(res)
                    {
                        toastr.success('Reward Deleted Successfully');
                        setTimeout(function()
                        {
                            location.reload();
                        },2000);
                    }
                })       
            }
        })
    }
    
    $(document).ready(function()
    {
        jQuery(document.body).on('blur', 'input,select,textarea,.select2-container', function(event) {
            $(this).addClass('input-border').removeClass('input-border-black');
        }); 
        
        jQuery(document.body).on('click', 'input,select,textarea,.select2-container', function(event) {
            $(this).addClass('input-border-black').removeClass('input-border');
        }); 
    })
    
    function share(type,id)
    {
        if (navigator.share) {
            navigator.share({
              title: 'Khoji',
              url: '<?php echo base_url(); ?>find-lapata-person?id='+id+'&type='+type,
              text:'🙏🙏कृपया, इस पोस्ट को ज्यादा से ज्यादा शेयर करे I शायद, आप के एक शेयर से यह व्यक्ति मिल जाए I '
            }).then(() => {
              swal.close();
            })
            .catch(console.error);
          } else {
                const shareButton = document.querySelector('.share-button');
                const shareDialog = document.querySelector('.share-dialog');
                const closeButton = document.querySelector('.close-button');
                
                shareButton.addEventListener('click', event => {
                  shareDialog.classList.add('is-open');
                });
                
                closeButton.addEventListener('click', event => {
                  shareDialog.classList.remove('is-open');
                });
          }
    }
    
    function view(type,ele,appNo)
    {
        let url = '';
        if(type == 'missing')
        {
            url = '<?php echo base_url(); ?>find-missed-person?Id='+appNo;
        }else if(type == 'lapata'){
            url = '<?php echo base_url(); ?>find-lapata-person?id='+appNo;
        }else if(type == 'criminal')
        {
            url = '<?php echo base_url(); ?>find-criminal-person?Id='+appNo;
        }else if(type == 'wanted')
        {
            url = '<?php echo base_url(); ?>find-wanted-person?Id='+appNo;
        }else if(type == 'general')
        {
            url = '<?php echo base_url(); ?>find-general-person?Id='+appNo;
        }else if(type == 'unknown')
        {
            url = '<?php echo base_url(); ?>find-missing-person?id='+appNo;
        }
        window.open(url,'_blank');
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
    $(document).ready(function () {
        $('.cus_date select').change(function () {
            updateMonthOptionsFromDay('missingday', 'missingmonth', 'missingyear');
        });

        $('.cus_date_edit select').change(function () {
            updateMonthOptionsFromDay('day', 'month', 'year');
        });

        function getDaysInMonth(year, month) {
            return new Date(year, parseInt(month), 0).getDate(); // JS month: 1-based
        }

        function updateMonthOptionsFromDay(dayId, monthId, yearId) {
            const day = parseInt(document.getElementById(dayId).value);
            const year = parseInt(document.getElementById(yearId).value);
            const monthSelect = document.getElementById(monthId);

            if (isNaN(day) || isNaN(year)) return;

            let selectedMonth = monthSelect.value;

            // Loop through all month options
            for (let option of monthSelect.options) {
                const monthStr = option.value;
                if (!monthStr || isNaN(monthStr)) continue;

                const maxDays = getDaysInMonth(year, monthStr);
                if (day <= maxDays) {
                    option.disabled = false;
                } else {
                    option.disabled = true;
                }
            }

            // If current selected month is disabled, select the first valid one
            const currentSelectedOption = monthSelect.options[monthSelect.selectedIndex];
            if (currentSelectedOption && currentSelectedOption.disabled) {
                for (let option of monthSelect.options) {
                    if (!option.disabled && option.value) {
                        monthSelect.value = option.value;
                        break;
                    }
                }
            }
        }
    });
    </script>