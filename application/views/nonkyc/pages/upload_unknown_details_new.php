<?php 
    if($pn == 1)
    {
        unset($_SESSION['unknownId']);
    }
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    select[disabled]{
        appearance:none!important;
    }
    .select2-container{
        width:-webkit-fill-available!important;
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
    .cus_date, .cus_date_edit {
    width: fit-content;
    margin-left: 12px;
}
</style>
<?php
    $months = [
        1 => 'January', 2 => 'February', 3 => 'March', 4 => 'April',
        5 => 'May', 6 => 'June', 7 => 'July', 8 => 'August',
        9 => 'September', 10 => 'October', 11 => 'November', 12 => 'December'
    ];
?>
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Add Unknown Person</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>user-dashboard">Home</a></li>
          <li class="breadcrumb-item active">Add Unknown Person</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div id="uploadimageModal" style="z-index:1111;" class="modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn btn-danger close1" data-dismiss="modal" style="color:white;">&times;</button>
                    <h4 class="modal-title">Crop Image</h4>
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
    <div class="container-fluid px-0">
        <section class="section register min-vh-70 d-flex flex-column align-items-center justify-content-center">
            <div class="container px-0">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-md-12 d-flex flex-column align-items-center justify-content-center <?php if($pn != 1){ echo "d-none"; } ?>">
                        <div class="card mb-3 w-100">
                            <div class="card-body mt-0">
                                <div class="pt-0 pb-0">
                                    <h5 class="card-title text-center pb-0 fs-4 mb-0">Add Unknown Person Details</h5>
                                </div>
                            </div>
                        </div>
                        <form id="loginForm" action="<?php echo base_url(); ?>NonKyc/uploadUnknownNew" method="post" class="row g-3 needs-validation1"  enctype="multipart/form-data">
                            <?php 
                                $csrf = array(
                                    'name' => $this->security->get_csrf_token_name(),
                                    'hash' => $this->security->get_csrf_hash()
                                );
                            ?>
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <div class="card">
                                <div class="card-body mt-0">
                                    <div class="row align-items-center ">
                                        <div class="form-floating col-12 col-md-auto d-none">
                                            <label style="margin-left:0.8rem;">Rescue Date</label>
                                            <input type="date" name="rescueDate" id="rescueDate" required class="form-control mt-2 md2" max="<?= date('Y-m-d') ?>">
                                        </div>
                                        <div class="cd col-md-1 col-6 form-control my-3  pb-md-1 pb-3 cus_date_edit" >
                                            <label for="dobday" class="ms-2 d-block">Rescue Date </label>
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
                                        <div class="form-floating my-3 col-12 col-md-3">
                                          <input type="text" class="form-control" name="person_name"   id="person_name"  placeholder="Aadhar Number">
                                          <label for="pkgdur" class="ms-3">Person Name</label>
                                        </div>
                                         <div class="form-floating my-3 col-12 col-md-3">
                                            <select class="form-control" name="Gender" id="Gender" required>
                                                <option value="">Select Gender *</option>
                                                <option value="boy">Male </option>
                                                <option value="girl">Female </option>
                                                <option value="Other">Other </option>
                                                
                                            </select>
                                            <label for="Gender" class="ms-3">Gender *</label>     
                                            <div class="invalid-feedback">Please Select Gender.</div>
                                        </div>
                                        <div class="form-floating my-3 col-12 col-md-3">
                                            <select class="form-control" name="Age" id="Age" required>
                                                <option value="">Select Age Band *</option>
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
                                <div class="pt-0 pb-0">
                                    <h5 class="card-title text-center pb-0 fs-4 mb-0">upload photo for facematch & message </h5>
                                </div>
                                <div class="card-body mt-0 pb-0">
                                    <div class="row align-items-center justify-content-center">
                                        <div class="col-lg-3 col-md-4 my-3 col-10 text-center">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div style="position:relative;text-align:center;">
                                                        <img class="w-100" id="profile-pic" src="<?php echo base_url(); ?>assets/images/faceicon.png" style="height: 152px!important;border: 1px solid;object-fit:fill;" alt="">
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
                                        <input type="hidden" name="facematch" id="facematch">
                                        <input type="hidden" name="facematch1" id="facematch1">
                                        <input type="hidden" name="facematch2" id="facematch2">
                                        <div class="mb-3 col-12 col-md-5">
                                            <textarea  maxlength="300" onKeyUp="showOtherButtonAccordingly(this,this.value)" class="form-control" rows="50" style="height: 96px;"  id="Message" name="Message" placeholder="Enter Message"></textarea>
                                            <div id="the-count">
                                                <span id="current">0</span>
                                                <span id="maximum">/ 300</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3 w-100">
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
                                                        <input type="number" class="form-control" name="aadharNumber" onkeydown="limit(this,'aadhar');" onkeyup="limit(this,'aadhar');" id="aadharNumber"  placeholder="Aadhar Number">
                                                        <label for="pkgdur" class="ms-3"> Aadhar No. </label>
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
                            <div class="card mb-3 w-100">
                                <div class="row align-items-center accordion" id="addressAccordion">
                                    <div class="accordion-item px-0">
                                        <h2 class="accordion-header" id="addressHeading">
                                            <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#addressChild" aria-expanded="false" aria-controls="addressChild">
                                                <b>Address Of Unknown Person <i class="fa fa-map-marker" style="font-size: 1.4rem;"></i></b>
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
                                <div class="card-body mt-0 pb-0">
                                    <div class="row align-items-center justify-content-center">
                                        <div class="col-lg-3 my-3 col-12 col-md-6">
                                            <button class="btn btn-primary w-100 btn-style-green disabled-on-loading" name="btnwith" id="btn1Submit" type="button" style="background-color:  #05106c !important;"> Save & Next</button>
                                        </div>
                                        <div class="col-lg-3 my-3 col-12 col-md-6 d-none">
                                            <button class="btn btn-primary w-100 btn-style-green disabled-on-loading" type="button" onclick="finalSubmitFirst(this)"> Final Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-12 col-md-12 d-flex flex-column align-items-center justify-content-center <?php if($pn != 2){ echo "d-none"; } ?>">
                        <div class="card mb-3 w-100">
                            <div class="card-body mt-0">
                                <div class="pt-0 pb-0">
                                    <h5 class="card-title text-center pb-0 fs-4 mb-0"><span class="text-danger fs-4">Upload- Unknown Person</span> Photos</h5>
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
                                                    <button type="button" data-bs-toggle="modal" data-bs-target="#reUploadModal<?php echo $j; ?>" class="btn btn-style-upload w-100"> <i class="fa fa-cloud-upload-alt"></i> Upload File</button>
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
                                                    <h4 class="modal-title text-center"><?php echo $j; ?>- Upload Unknown Person Photos</h4>
                                                </div>
                                            </div>
                                            <div class="row mt-0">
                                                <div class="col-lg-12 col-sm-12 col-md-12">
                                                    <div class="row mt-3 mx-0" id="reUploadDiv<?php echo $i; ?>">
                                                        <div class="col-md-12 col-sm-12 col-lg-12 px-0">
                                                            <label class="form-label">Upload image</label>
                                                            <input type="file" accept="image/*;capture=camera" class="form-control" id="latestFile<?php echo $i; ?>"  onchange="cropPhoto('latest',<?= $i; ?>)">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col-lg-12 col-sm-12 col-md-12">
                                                            <button type="button" class="btn btn-style-upload w-100 disabled-on-loading disabled continueBtn" onclick="uploadLatestPhoto(this,<?php echo $i; ?>)"> Continue</button>
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
                                            <h5 class="modal-title"><?php echo $j; ?>- Uploaded Unknown Person's Photo</h5>
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
                                                    <input type="file" accept="image/*;capture=camera" class="form-control" id="latestFile<?php echo $i; ?>"  onchange="cropPhoto('latest',<?= $i; ?>)">
                                                </div>
                                            </div>
                                            <div class="row mt-3 d-none justify-content-center" id="reUploadBtn<?php echo $i; ?>">
                                                <div class="col-lg-auto col-sm-12 col-md-auto col-auto pe-0">
                                                    <button type="button" class="btn btn-style-upload w-100 disabled-on-loading continueBtn disabled" onclick="uploadLatestPhoto(this,<?php echo $i; ?>)"> Continue</button>
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
                                                    <h5 class="modal-title"><?php echo $j; ?>- Uploaded Unknown Person's Photo</h5>
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
                                                            <input type="file" accept="image/*;capture=camera" class="form-control" id="latestFile<?php echo $i; ?>"  onchange="cropPhoto('latest',<?= $i; ?>)">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col-lg-12 col-sm-12 col-md-12">
                                                            <button type="button" class="btn btn-style-upload w-100 disabled-on-loading disabled continueBtn" onclick="uploadLatestPhoto(this,<?php echo $i; ?>)"> Continue</button>
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
                                            <button class="btn btn-primary w-100 btn-style-five disabled-on-loading" id="btn2Next" type="button"> Next</button>
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
                        <?php 
                            if(count($getPersonDetail) > 0)
                            {
                                $getIfAlready = $this->db->query('select * from uploadtransactions where type="unknown" and isKyc=0 and userId='.$_SESSION['user_id'].' and idNumber="'.$getPersonDetail[0]['Application_no'].'" and expiryDate >="'.date('Y-m-d').'"')->result_array();   
                            }else{ 
                                $getIfAlready = array();
                            }
                        ?>
                        <div class="card">
                            <div class="card-body py-3">
                                <div class="row mb-0 align-items-center">
                                    <?php
                                        if(count($getIfAlready) > 0)
                                        {
                                    ?>
                                    <div class="col-sm-12 col-auto px-1 col-md-auto col-lg-auto mt-1 mb-1">
                                        <button type="button" id="btn3Back" class="btn btn-dark disabled-on-loading w-100 btn-style-green" style="background:black!important;"> Back</button>
                                    </div>
                                    <div class="col-sm-12 col-auto ps-1 pe-0 col-md-auto col-lg-auto mt-1 mb-1">
                                        <button type="button" id="btn3Dashboard" class="btn btn-dark disabled-on-loading w-100 btn-style-green"> Final Submit</button>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="col-sm-12 col-auto px-1 col-md-auto px-0 col-lg-auto mt-1 mb-1">
                                        <button type="button" id="btn3Back" class="btn btn-dark disabled-on-loading w-100 btn-style-green" style="background:black!important;"> Back</button>
                                    </div>
                                    <?php 
                                        if($data[0]['isFree'] == 1)
                                        {
                                    ?>
                                    <div class="col-sm-12 col-auto ps-1 pe-0 pe-0 col-md-auto col-lg-auto mt-1 mb-1">
                                        <button type="button" style="padding:0.8rem!important;" id="payNowBtn" onclick="payNow(this,1)" class="btn btn-success disabled-on-loading w-100 btn-style-green"> Continue</button>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="col-sm-12 col-auto ps-1 pe-0 pe-0 col-md-auto col-lg-auto mt-1 mb-1">
                                        <button type="button" style="padding:0.8rem!important;" id="payNowBtn" onclick="payNow(this,0)" class="btn btn-success disabled-on-loading w-100 btn-style-green"> Continue</button>
                                    </div>
                                    <?php } }?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="step4" class="px-0 <?php if($pn != 4){ echo "d-none"; } ?>">
                        <?php 
                            $unknownperson = $this->db->query('select * from unknown_person where id='.(isset($_SESSION['unknownId']) ? $_SESSION['unknownId'] : 0))->result_array();
                            if(count($unknownperson) > 0)
                            {
                                $getLabelSettings = $this->db->query('select * from settings where name="bottomdetailLabels"')->result_array();
                                $decode1 = json_decode($getLabelSettings[0]['value'],true);
                                $getLabelSettings = $this->db->query('select * from settings where name="facematchWatermarkLabels"')->result_array();
                                $decode2 = json_decode($getLabelSettings[0]['value'],true);
                                $getLabelSettings = $this->db->query('select * from settings where name="latestWatermarkLabels"')->result_array();
                                $decode3 = json_decode($getLabelSettings[0]['value'],true);
                        ?>
                        <div class="row mx-0 justify-content-center">
                            <div class="px-0 col-lg-12 col-xl-8 col-md-12 d-flex flex-column align-items-center justify-content-center">
                    
                              <div class="card w-100">
                                <div class="card-body pb-0 pt-0 px-0 w-100">
                                    <div class="px-0 col-lg-12 col-md-12 col-sm-12 d-flex flex-column mx-lg-auto">
                                        <div class="row mx-0 align-items-center" style="background:#f78b77;padding:0.5rem;">
                                            <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                                                <h1 class="text-light mb-0" style="font-size: 1.5rem;"><b>APPEAL FOR IDENTIFICATION</b></h1>
                                            </div>
                                        </div>
                                        <div class="row mx-0 align-items-center justify-content-center">
                                            <div class="col-md-6 col-sm-12 col-lg-6 px-0">
                                                <div id="carouselExampleControls" class="carousel slide" data-bs-interval="2000". data-bs-ride="carousel">
                                                    <div class="carousel-inner" id="photosspan">
                                                        <div class="carousel-item active">
                                                            <a href="<?php echo base_url(); ?><?php echo $unknownperson[0]['Photo']; ?>"  data-lightbox="roadtrip">
                                                                <img src="<?php echo base_url().''.$unknownperson[0]['Photo']; ?>" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100" alt="...">
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
                                                            if($unknownperson[0]['Photo1'] != NULL)
                                                            {
                                                        ?>
                                                        <div class="carousel-item">
                                                            <a href="<?php echo base_url(); ?><?php echo $unknownperson[0]['Photo1']; ?>"  data-lightbox="roadtrip">
                                                                <img src="<?php echo base_url().''.$unknownperson[0]['Photo1']; ?>" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100" alt="...">
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
                                                            if($unknownperson[0]['Photo2'] != NULL)
                                                            {
                                                        ?>
                                                        <div class="carousel-item">
                                                            <a href="<?php echo base_url(); ?><?php echo $unknownperson[0]['Photo2']; ?>"  data-lightbox="roadtrip">
                                                                <img src="<?php echo base_url().''.$unknownperson[0]['Photo2']; ?>" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100" alt="...">
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
                                                            $getLatestUserPhotos = $this->db->query('select * from unknownphotos where unknownId='.$unknownperson[0]['id'])->result_array();
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
                                                    <a href="javascript:void(0)" class="carousel-control-prev" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                      <span class="visually-hidden">Previous</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="carousel-control-next" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                      <span class="visually-hidden">Next</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center mt-3 mx-0">
                                            <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                                                <h6 class="mb-0" style="font-weight:600;">Application No: - <span style="color:back;"><?php echo $unknownperson[0]['Application_no'];?></span></h6>
                                            </div>
                                        </div>
                                        <div class="row mx-0 justify-content-center">
                                            <div class="col-lg-6 col-md-6 col-12 px-0" style="top:-50px!important;background:white;height:auto;min-height:150px;">
                                                <div class="row mx-0 align-items-center justify-content-center">
                                                    <div class="col-md-12 px-0 col-12 mt-1 col-sm-12 col-lg-12 text-center">
                                                        <h6 class="text-dark text-uppercase" style="font-weight:600;"><b id="personname">Name:- <?php echo ($unknownperson[0]['person_name'] != '' ? $unknownperson[0]['person_name'] : 'UNKNOWN'); ?></b></h6>
                                                    </div>
                                                </div>
                                                <?php 
                                                    if($unknownperson[0]['rescueDate'] != NULL && $unknownperson[0]['rescueDate'] != '0000-00-00')
                                                    {
                                                ?>
                                                <div class="row mx-0 align-items-center justify-content-center">
                                                    <div class="col-md-12 px-0 col-12 mt-1 col-sm-12 col-lg-12 text-center">
                                                        <h5 class="text-dark text-uppercase mb-3" style="font-size:1.2rem;font-family:initial;"><b>Rescue Date:- </b><b style="color:red;"><?php echo date('d-m-Y',strtotime($unknownperson[0]['rescueDate'])); ?></b></h5>
                                                    </div>
                                                </div>
                                                <?php } ?>
                                                <div class="row align-items-center mx-0">
                                                    <div class="col-6">
                                                        <button type="button" class="btn btn-default" style="color: white!important;background:#616161!important;width:100%;"><b><?php echo ($unknownperson[0]['Gender'] == 'boy' ? 'Male' : 'Female'); ?></b></button>
                                                    </div>
                                                    <div class="col-6">
                                                        <button type="button" class="btn btn-default" style="color: white!important;background:#616161!important;width:100%;padding:0.4rem 1rem;"><b><?php echo $unknownperson[0]['Age']; ?> YEARS</b></button>
                                                    </div>
                                                </div>
                                                <?php 
                                                    if($unknownperson[0]['Message'] != '')
                                                    {
                                                ?>
                                                <div class="row align-items-center mt-3 mx-0 border border-danger">
                                                    <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                                                        <p class="mb-0"><b style="color:red;">Message:- </b><b style="color:black;"><?php echo $unknownperson[0]['Message'] ?></b></p>
                                                    </div>
                                                </div>
                                                <?php } ?>
                                                <?php
                                                    $getProfileDetail = $this->db->query('select * from nonKycUser where uid='.$unknownperson[0]['userId'])->result_array();
                                                ?>
                                                <div class="row align-items-center mt-3 mx-0">
                                                    <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                                                        <h6 class="mb-0" style="font-weight:600;">Uploaded By: - <?php echo $getProfileDetail[0]['aadharname'].', '. $getProfileDetail[0]['state'].', '.$getProfileDetail[0]['district'];?></h6>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center mt-3 mx-0">
                                                    <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                                                        <h6 class="mb-0" style="font-weight:600;">Uploaded Date: - <span style="color:grey;"><?php echo date('d-m-Y h:i A',strtotime($unknownperson[0]['dateCreated']));?></span></h6>
                                                    </div>
                                                </div>
                                                <?php 
                                                    if($this->session->userdata('user_login') == 'yes'){
                                                ?>
                                                <?php 
                                                    if($unknownperson[0]['well1'] != NULL || $unknownperson[0]['well2'] != NULL || $unknownperson[0]['well3'] != NULL)
                                                    {
                                                ?>
                                                <div class="row align-items-center mx-0 mt-3 justify-content-center" style="position:relative;">
                                                    <div class="col-md-12 text-center">
                                                        <h6 class="text-dark">
                                                            <?php 
                                                                if($unknownperson[0]['well1'] != NULL)
                                                                {
                                                            ?>
                                                            <a href="tel:<?php echo $unknownperson[0]['well1']; ?>" class="btn btn-circle btn-sm btn-police1 mt-2">
                                                                <i class="fa fa-phone"></i>
                                                            </a>
                                                            <?php }
                                                                if($unknownperson[0]['well2'] != NULL){ 
                                                            ?>
                                                            <a href="tel:<?php echo $unknownperson[0]['well2']; ?>" class="btn btn-circle btn-sm btn-police2 mt-2">
                                                                <i class="fa fa-phone"></i>
                                                            </a>
                                                            <?php }
                                                                if($unknownperson[0]['well3'] != NULL){ 
                                                            ?>
                                                            <a href="tel:<?php echo $unknownperson[0]['well3']; ?>" class="btn btn-circle btn-sm btn-police3 mt-2">
                                                                <i class="fa fa-phone"></i>
                                                            </a>
                                                            <?php } ?>
                                                        </h6>
                                                    </div>
                                                </div>
                                                <?php }else{ 
                                                    $mobile = '';
                                                    if($unknownperson[0]['policeId'] != NULL)
                                                    {
                                                        $mobile = $getPoliceDetail[0]['registration_mobile'];
                                                    }else{
                                                        $mobile = $getngoDetail[0]['registration_mobile'];
                                                    }
                                                    
                                                ?>
                                                    <div class="row align-items-center mx-0 mt-3 justify-content-center" style="position:relative;">
                                                        <div class="col-md-12 text-center">
                                                            <h6 class="text-dark">
                                                                <a href="tel:<?php echo $mobile; ?>" class="btn btn-circle btn-sm btn-police1 mt-2">
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
                                                            <span class="mb-3">To Contact to <?php echo $unknownperson[0]['policeId'] != NULL ? 'Police Thana' : 'NGO'; ?> </span>
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
                                        </div>
                                    </div>
                                </div>
                                <div class="row px-md-2 px-sm-3">
                                    <div class="col-md-12 text-center text-danger px-1 pb-3 p-3" style="font-weight:bold;">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-auto mb-3 col-sm-12 col-md-auto">
                                                <button type="button" class="btn-style-five btn btn-primary d-block w-100 disabled-on-loading" onclick="goToDashboard(this)"> Go to Dashboard</button>
                                            </div>
                                            <div class="col-lg-auto mb-3 col-sm-12 col-md-5">
                                                <button type="button" class="btn-style-red btn btn-primary d-block w-100 disabled-on-loading" style="background:black!important;padding:12px 10px!important" onclick="share('with','<?= (isset($_SESSION['unknownId']) ? $unknownperson[0]['Application_no'] : 0); ?>')"> Share Unknown Person Details <i class="fa fa-share-alt"></i></button>
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
<script>
    
    function copyLink(Id)
    {
        navigator.clipboard.writeText('<?php echo base_url(); ?>find-missing-person?id='+Id);
        toastr.success('Link Copied Successfully');
    }
    
    function showLink()
    {
        $('#shareDiv').slideToggle('fast');
    }
    
    function goToDashboard(ele)
    {
        $(ele).attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>non-kyc-dashboard-profile";
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
                                        data.append('type','upload');
                                        data.append('image1',$('#facematch').val());
                                        data.append('image2',response);
                                        $.ajax({
                                            url:'<?php echo base_url(); ?>NonKyc/comparePhoto',
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
                url:'<?php echo base_url(); ?>NonKyc/uploadUnknownPhoto',
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
                        toastr.success(parse.message);
                        setTimeout(function()
                        {
                          location.reload();
                        },2000);
                    }else{
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
                    html += '<label for="goldType'+goldCount+'" class="ms-3">Select Gold Type</label></div><div class="col-lg-auto col-md-auto col-sm-12 col-10 my-3 form-floating"><input type="text" class="form-control text-uppercase" placeholder="GOLD HUID No." onkeyup="showGoldAccordingly(this.value)" maxlength="6" name="goldHUIDNumber'+goldCount+'" id="goldHUIDNumber'+goldCount+'"><label for="goldHUIDNumber'+goldCount+'" class="ms-2">Enter Gold HUID Number</div>';
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
        $('#crossIcon').click();
        $('#input-file').click();
    });
    
    $('#my-button1').click(function(){
        toastr.remove();
        if($('#input-file').val() != '')
        {
            $('#crossIcon1').click();
            $('#input-file1').click();   
        }else{
            toastr.error('Please upload 1st photo to continue');
        }
    });
    
    $('#my-button2').click(function(){
        toastr.remove();
        if($('#input-file1').val() != '')
        {
            $('#crossIcon2').click();
            $('#input-file2').click();
        }else{
            toastr.error('Please upload 2nd photo to continue');
        }
    });
    
    $('#btnOtp').addClass('btn-style-grey').removeClass('btn-style-five');
    $('#btnOtp').addClass('disabled');
    
    $('#btn1Submit').click(function()
    {
        $(this).attr('disabled','disabled');
        if($('#Gender').val() == '' || $('#Age').val() == '' || $('#facematch').val() == '')
        {
            toastr.remove();
            toastr.error('Please Add Gender, Age and Photo');
            $(this).removeAttr('disabled');
        }else{
            let hasFile = hasFileInput($('#loginForm')[0]);
            if(hasFile)
            {
                toastr.remove();
                toastr.info("Please wait <b class='loading'></b>");   
            }
            $('#loginForm')[0].submit();
        }
    })
    
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
               val.value = val.value.substr(0, (max_chars + 1));
            }
        }else if(type == 'pan')
        {
            var max_chars = 9;
            if(val.value.length > max_chars) {
                val.value = val.value.substr(0, (max_chars + 1));
            }
        }else{
            var min_chars = 9;
            if(val.value.length > min_chars) {
                val.value = val.value.substr(0, (min_chars + 1));
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
        location.href="<?php echo base_url(); ?>NonKyc/upload_unknown_details?pn=2";
    })
    
    function finalSubmitFirst(ele)
    {
        $(ele).attr('disabled','disabled');
        if($('#Gender').val() == '' || $('#Age').val() == '' || $('#facematch').val() == '')
        {
            toastr.remove();
            toastr.error('Please Add Gender, Age and Photo');
            $(ele).removeAttr('disabled');
        }else{
            let data = new FormData($('#loginForm')[0]);
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            let hasFile = hasFileInput($('#loginForm')[0]);
            if(hasFile)
            {
                toastr.remove();
                toastr.info("Please wait <b class='loading'></b>");      
            }
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
                        toastr.remove();
                        toastr.success('Record Successfully Saved. -'+parse.applicationNumber);
                        setTimeout(function()
                        {
                            location.href="<?php echo base_url(); ?>NonKyc/upload_unknown_details?pn=4";  
                        },2000);
                    }else{
                        toastr.remove();
                        toastr.error(parse.message);
                        $(ele).removeAttr('disabled');
                    }
                }
            })
        }
    }
    
    function payNow(ele,count)
    {
        $(ele).attr('disabled',true);
        location.href='<?php echo base_url(); ?>NonKyc/showUnknownPaymentModels';
    }
    
    $('#btn3PayNow').click(function()
    {
        $(this).attr('disabled',true);
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
                location.href="<?= base_url(); ?>NonKyc/showUnknownPaymentModels";
            }
        })
    })
    
    $('#btn3Dashboard').click(function(){
        $(this).attr('disabled','disabled');
        $.ajax({
            url:'<?php echo base_url(); ?>user/updateContact',
            type:'get',
            success:function(res)
            {
                toastr.success(res);
                let data = new FormData();
                data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                <?php 
                    if($pn == 3)
                    {
                ?>
                data.append('mainPhotoSelectedFacematch','<?= "data:image/jpeg;base64,".base64_encode(file_get_contents(base_url().''.$getPersonDetail[0]['Photo'])); ?>');
                <?php } ?>
                data.append('type','missing');
                <?php 
                    if($getPersonDetail[0]['Gender'] == 'boy')
                    {
                ?>
                data.append('gender','male');   
                <?php }else{ ?>
                data.append('gender','female');   
                <?php } ?>
                $.ajax({
                    url:'<?php echo base_url(); ?>NonKyc/searchPersonFaceNew',
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
                            location.href="<?php echo base_url(); ?>NonKyc/view_expiry_unknown";  
                        }else{
                            location.href="<?php echo base_url(); ?>NonKyc/upload_unknown_details?pn=4";  
                        }
                    }
                });
            }
        })
    })
    
    $('#btn2Next').click(function(){
        $(this).attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>NonKyc/upload_unknown_details?pn=3";
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
                title: '<strong class="text-danger" style="font-size:20px;">Unknown Person Contact</strong>',
                icon: 'error',
                allowOutsideClick:false,
                html:
                    '<div class="form-group mt-3"><label class="form-label">Are you sure you want to delete unknown person mobile '+index+'?</label></div>',
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
                title: '<strong class="text-danger" style="font-size:20px;">Unknown Person Contact</strong>',
                icon: 'error',
                allowOutsideClick:false,
                html:
                    '<div class="form-group mt-3"><label class="form-label">Are you sure you want to delete unknown person mobile '+index+'?</label></div>',
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
    
    function share(ele,id)
    {
        if (navigator.share) {
            navigator.share({
              title: 'Khoji',
              url: '<?php echo base_url(); ?>find-missing-person?id='+id
            })
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
    <?php } ?>
    
    $(document).ready(function()
    {
        jQuery(document.body).on('blur', 'input,select,textarea,.select2-container', function(event) {
            $(this).addClass('input-border').removeClass('input-border-black');
        }); 
        
        jQuery(document.body).on('click', 'input,select,textarea,.select2-container', function(event) {
            $(this).addClass('input-border-black').removeClass('input-border');
        }); 
    })
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
       
        updateMonthOptionsFromDay('dobday','dobmonth','dobyear');
        updateDateInput('dobday','dobmonth','dobyear','md2');
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
