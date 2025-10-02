<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .text-gradient1 {
      background: linear-gradient(to right, #f23a00, #FFA500, #FF0000);
      -webkit-background-clip: text;
      text-shadow: 2px 2px 4px rgba(255, 153, 51,0.6);
      -webkit-text-fill-color: transparent;
    }
    .input-group{
        width: auto;
    }
    .white_pkg{
        color: black!important;
        background:white!important;
        min-height: 95px;
    }
    label{
        color:unset!important;
    }
    .first_pkg {
        border: 1px solid rebeccapurple;
        border-radius: 12px;
        padding: 0px 21px 16px;
        overflow: hidden;
        width: 100%;
        min-height: 95px;
        color: white!important;
        box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px;
        transition: transform 250ms ease-in-out 0s, box-shadow 250ms ease-in-out 0s;
        background: radial-gradient(140.76% 131.96% at 100% 100%, rgb(229, 9, 20) 0%, rgba(74, 42, 150, 0.5) 73.57%, rgba(74, 42, 150, 0) 100%), rgb(29, 82, 157)!important;
    }
    
    .second_pkg {
        border: 1px solid rebeccapurple;
        border-radius: 12px;
        padding: 0px 21px 16px;
        overflow: hidden;
        width: 100%;
        min-height: 95px;
        color: white!important;
        box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px;
        transition: transform 250ms ease-in-out 0s, box-shadow 250ms ease-in-out 0s;
        background: radial-gradient(140.76% 131.96% at 100% 100%, rgb(176, 56, 220) 0%, rgba(74, 42, 150, 0.5) 73.57%, rgba(74, 42, 150, 0) 100%), rgb(29, 82, 157)!important;
    }
    
    .third_pkg {
        border: 1px solid rebeccapurple;
        border-radius: 12px;
        padding: 0px 21px 16px;
        overflow: hidden;
        width: 100%;
        min-height: 95px;
        color: white!important;
        box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px;
        transition: transform 250ms ease-in-out 0s, box-shadow 250ms ease-in-out 0s;
        background: radial-gradient(140.76% 131.96% at 100% 100%, rgb(109, 59, 227) 0%, rgba(74, 42, 150, 0.5) 73.57%, rgba(74, 42, 150, 0) 100%), rgb(29, 82, 157)!important;
    }

</style>
<style>
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

.card{
    height:max-content;
}

</style>
<style>
    .accordion-button:not(.collapsed)
    {
        background: white!important;
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
    .text-red{
        color:red!important;
    }
    .text-green{
        color:green!important;
    }
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
    .select2-container{
        width: -webkit-fill-available!important;
    }
</style>
<div id="uploadimageModal" style="z-index:1111;" class="modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn btn-danger close1 me-2" data-dismiss="modal" style="color:white;">&times;</button>
                <h4 class="modal-title" style="font-size:1.2rem;">Face photo is compulsory to find family member</h4>
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
<main id="main" class="main px-1">
    <div class="container-fluid px-0">
        <section class="section register min-vh-70 d-flex flex-column align-items-center <?= $pn != 2 ? 'justify-content-center' : '';?>">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-md-12 d-flex flex-column align-items-center justify-content-center <?php if($pn != 1){ echo "d-none"; } ?>">
                        <div class="card mb-3 w-100">
                            <div class="card-body mt-0">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <h5 class="card-title text-center pb-0 fs-4 mb-0">Edit Special ભાદરવી પૂનમ મહામેળા Details</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form id="loginForm" action="<?php echo base_url(); ?>NonKyc/postMahakumbhMemberSpecial" method="post" class="row g-0 needs-validation1"  enctype="multipart/form-data">
                            <?php 
                                $csrf = array(
                                    'name' => $this->security->get_csrf_token_name(),
                                    'hash' => $this->security->get_csrf_hash()
                                );
                                function calculateAge($dob) {
                                    $dob = new DateTime($dob);
                                    $now = new DateTime();
                                    $age = $now->diff($dob);
                                    return $age->y; // Return years
                                }
                            ?>
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <input type="hidden" name="id" value="<?= $data[0]['id']; ?>">
                            <div class="card px-0">
                                <div class="hiddendiv">
                                    <div class="row align-items-center p-3">
                                        <div class="form-floating col-12 col-md-2">
                                            <label style="margin-left:0.8rem;">Date</label>
                                            <input type="date" max="<?= date('Y-m-d') ?>" class="form-control mt-2" name="dateCreated" id="dateCreated" value="<?= $data[0]['missingDate'] != NULL ? date('Y-m-d',strtotime($data[0]['missingDate'])) : ''; ?>">
                                        </div>
                                        <div class="form-floating mt-3 col-12 col-md-3">
                                          <input type="text" class="form-control" name="person_name" value="<?= $data[0]['person_name']; ?>" id="person_name"  placeholder="Aadhar Number">
                                          <label for="pkgdur" class="ms-2">Name</label>
                                        </div>
                                        <div class="form-floating mt-3 col-12 col-md-auto">
                                            <select class="form-control" name="Gender" id="Gender" >
                                                <option value="">Select Gender </option>
                                                <option value="Male" <?= 'Male' == $data[0]['Gender'] ? 'selected' : ''; ?>>Male </option>
                                                <option value="Female" <?= 'Female' == $data[0]['Gender'] ? 'selected' : ''; ?>>Female </option>
                                                <option value="Other" <?= 'other' == $data[0]['Gender'] ? 'selected' : ''; ?>>Other </option>
                                            </select>
                                            <label for="Gender" class="ms-2" style="color: black!important;">Gender <b class="text-danger">*</b></label>     
                                            <input type="hidden" class="Gender">
                                        </div>
                                        <div class="form-floating mt-3 col-12 col-md-3">
                                            <select class="form-control" name="AgeBand" id="AgeBand" required>
                                                <option value="">Select Age Band *</option>
                                                <?php 
                                                    $state = $this->db->query('SELECT * FROM ageBands')->result_array();
                                                    if(count($state)>0)
                                                    {
                                                        foreach($state as $row)
                                                        {
                                                        ?>
                
                                                            <option value="<?php echo $row['ageBand'] ?>" <?php echo ($data[0]['AgeBand'] == $row['ageBand'] ? 'selected' : ''); ?>><?php echo $row['ageBand']?></option>
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
                            <div class="card mb-3 w-100">
                                <div class="pt-0 pb-0">
                                    <h5 class="card-title text-center pb-0 fs-4 mb-0">Upload Face Match Photo & Type Message </h5>
                                </div>
                                <div class="card-body mt-0 pb-0">
                                    <div class="row align-items-center justify-content-center">
                                        <div class="col-lg-3 col-md-4 my-3 col-10 text-center">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div style="position:relative;text-align:center;">
                                                        <img class="w-100" id="profile-pic" src="<?php echo base_url(); ?><?php echo ($data[0]['Photo'] == '' ? 'assets/images/faceicon.png' : $data[0]['Photo']); ?>" style="height: 152px!important;border: 1px solid;object-fit:fill;" alt="">
                                                        <div style="position:absolute;z-index:2;box-shadow:0px 1px 1px 2px;background:black;color:white;top:0px;right:0px;padding:0.4rem 0.7rem;cursor:pointer;" class="d-none" id="crossIcon">
                                                            <i class="fa fa-times"></i>
                                                        </div>
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
                                        </div>
                                        <div class="col-lg-3 col-md-4 my-3 col-10 text-center">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div style="position:relative;text-align:center;">
                                                        <img class="w-100" id="profile-pic1" src="<?php echo base_url(); ?><?php echo ($data[0]['Photo1'] == '' ? 'assets/images/faceicon.png' : $data[0]['Photo1']); ?>" style="height: 152px!important;border: 1px solid;object-fit:fill;" alt="">
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
                                                    <button type="button" onclick="deleteFace(this,1)" class="disabled-on-loading" style="z-index:2;border:1px solid red!important;background:red!important;color:white!important;top:0px;right:0px;padding:0.6rem 0.9rem;cursor:pointer;">
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
                                                        <img class="w-100" id="profile-pic2" src="<?php echo base_url(); ?><?php echo ($data[0]['Photo2'] == '' ? 'assets/images/faceicon.png' : $data[0]['Photo2']); ?>" style="height: 152px!important;border: 1px solid;object-fit:fill;" alt="">
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
                                                    <button type="button" onclick="deleteFace(this,2)" class="disabled-on-loading" style="z-index:2;border:1px solid red!important;background:red!important;color:white!important;top:0px;right:0px;padding:0.6rem 0.9rem;cursor:pointer;">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="file" name="Photo" id="input-file" style="display: none;" accept="image/*;capture=camera" onchange="cropPhoto('facematch','')">
                                        <input type="file" name="Photo1" id="input-file1" style="display: none;" accept="image/*;capture=camera" onchange="cropPhoto('facematch',1)">
                                        <input type="file" name="Photo2" id="input-file2" style="display: none;" accept="image/*;capture=camera" onchange="cropPhoto('facematch',2)">
                                        <div class="mb-3 col-12 col-md-5">
                                            <label><b>Type Message: </b></label>
                                            <textarea  maxlength="300"  onKeyUp="showOtherButtonAccordingly(this,this.value)" class="form-control" rows="50" style="height: 96px;border:3px solid black;"  id="Message" name="Message"><?php echo ($data[0]['Message'] == '' ? '' : $data[0]['Message']); ?></textarea>
                                            <div id="the-count">
                                                <span id="current"><?php echo strlen($data[0]['Message']); ?></span>
                                                <span id="maximum">/ 300</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3 w-100 px-0">
                                <div class="row align-items-center accordion mx-0" id="identificationAccordion">
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
                                                        <input type="text" value="<?= $data[0]['aadharNumber']; ?>" class="form-control text-uppercase" name="aadhar_id" maxlength="12"  id="aadhar_id">
                                                        <label for="aadhar_id" class="ms-3">Aadhar No.</label>
                                                    </div>
                                                    <div class="form-floating my-3 col-12 col-md-3">
                                                        <input type="text" value="<?= $data[0]['PAN']; ?>" class="form-control text-uppercase" name="PAN" maxlength="10"  id="PAN">
                                                        <label for="PAN" class="ms-3">PAN No.</label>
                                                    </div>
                                                    <div class="form-floating my-3 col-12 col-md-3">
                                                        <input type="text" value="<?= $data[0]['DL_no']; ?>" class="form-control text-uppercase" name="DL_no" maxlength="15"  id="DL_no">
                                                        <label for="DL_no" class="ms-3">DL No.</label>
                                                    </div>
                                                    <div class="form-floating my-3 col-12 col-md-3">
                                                        <input type="text" value="<?= $data[0]['voter_id']; ?>" class="form-control text-uppercase" name="voter_id"   id="voter_id">
                                                        <label for="voter_id" class="ms-3">Voter ID No.</label>
                                                    </div>
                                                    <div class="form-floating my-3 col-12 col-md-3">
                                                        <input type="text" value="<?= $data[0]['vehicle_no']; ?>" class="form-control text-uppercase" name="vehicle_no"   id="vehicle_no">
                                                        <label for="voter_id" class="ms-3">Vehicle No.</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-3 w-100">
                                <div class="row align-items-center accordion mx-0" id="addressAccordion">
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
                            
                                                                    <option value="<?php echo $row['name'] ?>" <?php echo ($data[0]['state'] == $row['name'] ? 'selected' : ''); ?>><?php echo $row['name']?></option>
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
                                                            <?php 
                                                                if($data[0]['state'] != '')
                                                                {
                                                                    $snm=$data[0]['state'];
                                                                    $district=$this->db->query("select * from district where st_name='$snm'")->result_array();
                                                                    $str='<option value="">Select District (optional)</option>';
                                                                    if(count($district)<=0)
                                                                    {
                                                                        $str='<option value="nod">No District found</option>';
                                                                    }
                                                                    foreach($district as $d)
                                                                    {
                                                                        $isSelected = '';
                                                                        if(strtoupper($d['d_name']) == strtoupper($data[0]['district']))
                                                                        {
                                                                            $isSelected = 'selected';
                                                                        }
                                                                        $str.='<option value="'.$d['d_name'].'" '.$isSelected.'>'. $d['d_name'].'</option>';
                                                                    }
                                                                    echo $str;
                                                            ?>
                                                            <?php }else{ ?>
                                                            <option value="">Select District </option>
                                                            <?php } ?>
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
                                        <div class="input-group mb-2 col-sm-12 col-md-4 col-lg-3">
                                            <span class="input-group-text px-2" style="border:2px solid #dee2e6;background: white;" id="mobile-addon1">+91</span>
                                            <div class="form-floating">                                    
                                                <input type="number" readonly class="form-control" style="font-weight:bold;color:black;" value="<?php echo $data[0]['well1']; ?>" name="otherMob1" id="otherMob1" placeholder="Mobile Number" aria-label="Mobile Number" aria-describedby="mobile-addon1">
                                                <label for="otherMob1" class="ms-2">Contact Number 1</label>
                                            </div>
                                        </div>
                                        <div class="input-group mb-2 col-sm-12 col-md-auto col-lg-auto">
                                            <span class="input-group-text px-2" style="border:2px solid #dee2e6;background: white;" id="mobile-addon2">+91</span>
                                            <div class="form-floating">                                    
                                                <input type="number" class="form-control" value="<?php echo $data[0]['well2']; ?>" onchange="checkMobileLength(this,this.value)" onKeyPress="return checkLength(this.value,10)" style="font-weight:bold;color:black;" name="otherMob2" id="otherMob2" placeholder="Mobile Number" aria-label="Mobile Number" aria-describedby="mobile-addon2">
                                                <label for="otherMob2" class="ms-2">Contact Number 2</label>
                                            </div>
                                        </div>
                                        <div class="input-group mb-2 col-sm-12 col-md-auto col-lg-auto">
                                            <span class="input-group-text px-2" style="border:2px solid #dee2e6;background: white;" id="mobile-addon3">+91</span>
                                            <div class="form-floating">                                    
                                                <input type="number" class="form-control" value="<?php echo $data[0]['well3']; ?>" onchange="checkMobileLength(this,this.value)" onKeyPress="return checkLength(this.value,10)" style="font-weight:bold;color:black;" name="otherMob3" id="otherMob3" placeholder="Mobile Number" aria-label="Mobile Number" aria-describedby="mobile-addon3">
                                                <label for="otherMob3" class="ms-2">Contact Number 3</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card">
                                <div class="card-body mt-0 pb-0">
                                    <div class="row align-items-center justify-content-center">
                                        <div class="my-3 col-6 col-md-auto" id="aadharcleardiv">
                                            <button type="button" onclick="backToDashboard(this)" style="background:black!important;color:white!important;" class="btn w-100 btn-style-grey text-center disabled-on-loading"> Back</button>
                                        </div>
                                        <div class="col-lg-3 my-3 col-6 col-md-6">
                                            <button class="btn btn-primary w-100 btn-style-green disabled-on-loading" name="btnwith" id="btn1Submit" type="button" style="background-color:  #05106c !important;">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="step4" class="col-xl-9 <?php if($pn != 2){ echo "d-none"; } ?>">
                        <?php 
                            $getPersonDetail = $this->db->query('select * from mahakumbhSpecial where id='.$data[0]['id'])->result_array();
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
                                    <div class="row mx-0 align-items-center" style="background:white;padding:1rem;">
                                        <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                                            <h1 class="text-center" style="font-size: 1rem;font-weight: bold;color: black;">KHOYA PAYA SPECIAL FORM</h1>
                                            <h1 class="text-gradient1 mb-0" style="font-size: 1.5rem;"><b>Special ભાદરવી પૂનમ મહામેળા 2025</b></h1>
                                        </div>
                                    </div>
                                    <?php 
                                        if($getPersonDetail[0]['Photo'] != NULL)
                                        {
                                    ?>
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
                                    <?php } ?>
                                    <div class="row mx-0 justify-content-center">
                                        <div class="col-lg-6 col-md-6 col-12 px-0" style="top:-50px!important;background:white;height:auto;">
                                            <div class="row mx-0 align-items-center justify-content-center">
                                                <div class="col-md-12 px-0 col-12 mt-2 col-sm-12 col-lg-12 text-center">
                                                    <h5 class="text-dark text-uppercase" style="font-size:1.2rem;font-family:initial;"><b id="personname">Name:- <?php echo ($getPersonDetail[0]['person_name'] != '' ? $getPersonDetail[0]['person_name'] : 'UNKNOWN'); ?></b></h5>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mx-0">
                                                <div class="col-6">
                                                    <button type="button" style="font-family:initial;color: white!important;background:#616161!important;width:100%;padding:0.4rem 1rem;"><b><?php echo ($getPersonDetail[0]['Gender'] == 'Male' ? 'Male' : 'Female'); ?></b></button>
                                                </div>
                                                <div class="col-6">
                                                    <button type="button" style="font-family:initial;color: white!important;background:#616161!important;width:100%;padding:0.4rem 1rem;"><b><?php echo $getPersonDetail[0]['AgeBand']; ?> YEARS</b></button>
                                                </div>
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
                                            if($getPersonDetail[0]['uploadType'] == 'general')
                                            {
                                        ?>
                                        <div class="row align-items-center mt-3 mx-0">
                                            <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                                                <h6 class="mb-1" style="font-family:initial;font-size:1.2rem;color:black;"><b>Uploaded Date: - <span style="color:grey;"><?php echo date('d-m-Y h:i A',strtotime($getPersonDetail[0]['dateCreated']));?></span></b></h6>
                                            </div>
                                        </div>
                                        <?php }else if($getPersonDetail[0]['uploadType'] == 'missing'){ ?>
                                        <div class="row align-items-center mt-3 mx-0">
                                            <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                                                <h6 class="mb-1" style="font-family:initial;font-size:1.2rem;color:black;"><b>Uploaded Date: - <span style="color:grey;"><?php echo date('d-m-Y h:i A',strtotime($getPersonDetail[0]['dateCreated']));?></span></b></h6>
                                            </div>
                                        </div>
                                        <div class="row mx-0 align-items-center justify-content-center">
                                            <div class="col-md-12 px-0 col-12 mt-3 col-sm-12 col-lg-12 text-center">
                                                <h5 class="text-dark text-uppercase mb-3" style="font-size:1.2rem;font-family:initial;"><b>Missing Date:- </b><b style="color:red;"><?php echo date('d-m-Y',strtotime($getPersonDetail[0]['missingDate'])); ?></b></h5>
                                            </div>
                                        </div>
                                        <?php }else{ ?>
                                        <div class="row align-items-center mt-3 mx-0">
                                            <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                                                <h6 class="mb-1" style="font-family:initial;font-size:1.2rem;color:black;"><b>Uploaded Date: - <span style="color:grey;"><?php echo date('d-m-Y h:i A',strtotime($getPersonDetail[0]['dateCreated']));?></span></b></h6>
                                            </div>
                                        </div>
                                        <div class="row mx-0 align-items-center justify-content-center">
                                            <div class="col-md-12 px-0 col-12 mt-3 col-sm-12 col-lg-12 text-center">
                                                <h5 class="text-dark text-uppercase mb-3" style="font-size:1.2rem;font-family:initial;"><b>Rescue Date:- </b><b style="color:red;"><?php echo date('d-m-Y',strtotime($getPersonDetail[0]['missingDate'])); ?></b></h5>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        <hr class="border border-danger my-2">
                                        <div class="row px-md-2 px-sm-3">
                                            <div class="col-md-12 text-center text-danger px-1 pb-3 p-3" style="font-weight:bold;">
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-auto mb-3 col-sm-12 col-md-auto">
                                                        <button type="button" class="btn-style-five btn btn-primary d-block w-100 disabled-on-loading" onclick="goToDashboard(this)"> Go to Homepage <i class="fa fa-home"></i></button>
                                                    </div>
                                                    <div class="col-lg-4 mb-3 col-sm-12 col-md-4">
                                                        <button type="button" style="padding: 0.8rem!important;" class="btn-style-green btn btn-primary d-block w-100 disabled-on-loading" onclick="location.href='<?= base_url(); ?>NonKyc/add_mahakumbh_member_special'"> Add Another Member <i class="fa fa-user-plus"></i></button>
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
<script>

    function goToDashboard(ele)
    {
        $(ele).attr('disabled',true);
        location.href="<?php echo base_url(); ?>";
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
    
      
    function backToDashboard(ele)
    {
        $(ele).attr('disabled',true);
        location.href="<?php echo base_url(); ?>NonKyc/manage_mahakumbh_person_special";
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
                                                    faceData.append('Id','<?= $_GET['id']; ?>')
                                                    $.ajax({
                                                        url:'<?php echo base_url(); ?>NonKyc/addMahakumbhSpecialFaceMatchPhoto',
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
                                                    faceData.append('Id','<?= $_GET['id']; ?>')
                                                    $.ajax({
                                                        url:'<?php echo base_url(); ?>NonKyc/addMahakumbhSpecialFaceMatchPhoto',
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
                                                        faceData.append('Id','<?= $_GET['id']; ?>')
                                                        $.ajax({
                                                            url:'<?php echo base_url(); ?>NonKyc/addMahakumbhSpecialFaceMatchPhoto',
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
                                            faceData.append('Id','<?= $_GET['id']; ?>')
                                            $.ajax({
                                                url:'<?php echo base_url(); ?>NonKyc/addMahakumbhSpecialFaceMatchPhoto',
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
        if($('#Gender').val() == '')
        {
            toastr.remove();
            toastr.error('Please select Gender');
            $(this).removeAttr('disabled');
        }else if($('#Age').val() == '')
        {
            toastr.remove();
            toastr.error('Please select DOB');
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
                    url:'<?php echo base_url(); ?>user/deleteFaceMatchFromSpecial',
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
    
    function numberOnly(id) {
        // Get element by id which passed as parameter within HTML element event
        var element = document.getElementById(id);
        // This removes any other character but numbers as entered by user
        element.value = element.value.replace(/[^0-9]/gi, "");
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