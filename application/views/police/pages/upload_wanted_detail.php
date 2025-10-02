<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    #the-count {
      float: right;
      padding: 0.1rem 0 0 0;
      font-size: 0.875rem;
    }
    .select2-container--classic .select2-selection--multiple[aria-disabled="true"]{
        background:#d3d3d34d;
    } 
    .select2-selection__choice__remove
    {
        background:transparent!important;   
    }
    .select2-container{
        width:-webkit-fill-available!important;
    }
    .select2-results__option{
        text-transform:uppercase;
    }
    select{
        appearance:auto!important;
    }
</style>
<main id="main" class="main px-0">
    <div class="pagetitle ms-3">
        <h1>Upload WANTED Person</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>police">Home</a></li>
                <li class="breadcrumb-item active">Upload WANTED Person</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <div class="container-fluid px-0">
        <section class="section register d-flex flex-column align-items-center justify-content-center">
            <div class="container-fluid">
                <div class="row justify-content-center g-3">
                    <div class="col-lg-12 col-md-12 d-flex flex-column align-items-center justify-content-center <?php if($pn != 1){ echo "d-none"; } ?>">
                        <div class="card mb-3 w-100">
                            <div class="card-body mt-0">
                                <div class="pt-0 pb-0">
                                    <h5 class="card-title text-center pb-0 fs-4 mb-0"><span class="text-danger fs-4">Enter- Wanted</span> Details</h5>
                                </div>
                                <div>
                                    <!--Success message-->
                                    <?php 
                                        $add_succ=$this->session->flashdata('success');
                                        if($add_succ){
                                    ?>
                                    <div class="alert alert-success alert-dismissible">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong><?php echo $add_succ;?></strong> 
                                    </div>
                                    <?php } ?>
                                    <?php 
                                        $del_succ=$this->session->flashdata('error');
                                        if($del_succ){
                                    ?>
                                    <div class="invalid-feedback d-block"><?php echo $del_succ;?></div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <form id="step1Form" action="<?php echo base_url(); ?>police/save_wanted_details/step1" method="post" class="row g-1 needs-validation1 w-100"  enctype="multipart/form-data">
                            <?php 
                                $csrf = array(
                                    'name' => $this->security->get_csrf_token_name(),
                                    'hash' => $this->security->get_csrf_hash()
                                );
                            ?>
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <input type="hidden" name="oldId" value="0" id="oldId">
                            <div class="card mb-3 w-100">
                                <div class="card-body mt-0">
                                    <div class="row align-items-center">
                                        <div class="form-floating mt-3 col-10 col-md-3">
                                            <input type="number" class="form-control" required name="aadharNumber" onkeydown="limit(this,'aadhar');" onkeyup="limit(this,'aadhar');" id="aadharNumber"  placeholder="Aadhar Number">
                                            <label for="pkgdur" class="ms-2"> Aadhar No.* </label>
                                        </div>
                                        <div class="mt-3 col-2 px-0 col-md-auto" id="aadharsearchdiv">
                                            <button type="button" onclick="checkAadhar(this)" id="btnaadharNext" style="border-radius:0!important;padding: 9px 15px!important" class="btn btn-style-grey disabled text-center disabled-on-loading"> <i class="fa fa-search"></i></button>
                                        </div>
                                        <div class="mt-3 col-2 px-0 col-md-auto d-none" id="aadharcleardiv">
                                            <button type="button" onclick="clearAadhar(this)" id="btnaadharClear" style="border-radius:0!important;padding: 9px 15px!important" class="btn btn-style-red text-center disabled-on-loading"> <i class="fa fa-times"></i></button>
                                        </div>
                                        <div class="form-floating mt-3 col-12 col-md-auto hiddendiv d-none">
                                                <input type="text" class="form-control text-uppercase" name="PAN" id="PAN"  placeholder="Aadhar Number">
                                                <label for="PAN" class="ms-2">PAN No.</label>
                                            </div>
                                        <div class="form-floating mt-3 col-12 col-md-auto hiddendiv d-none">
                                            <input type="text" class="form-control text-uppercase" name="DL_no"   id="DL_no"  placeholder="Aadhar Number">
                                            <label for="DL_no" class="ms-2">DL No.</label>
                                        </div>
                                        <div class="form-floating mt-3 col-12 col-md-3 hiddendiv d-none">
                                            <input type="text" class="form-control text-uppercase" name="voter_id"   id="voter_id"  placeholder="Aadhar Number">
                                            <label for="voter_id" class="ms-2">Voter ID No.</label>
                                        </div>
                                        <div class="form-floating mt-3 col-12 col-md-3 hiddendiv d-none">
                                          <input type="text" class="form-control" name="person_name"   id="person_name"  placeholder="Aadhar Number">
                                          <label for="pkgdur" class="ms-2">Person Name</label>
                                        </div>
                                        <div class="form-floating mt-3 col-12 col-md-3 hiddendiv d-none">
                                            <select class="form-control" name="Gender" id="Gender" >
                                                <option value="">Select Gender </option>
                                                <option value="Male">Male </option>
                                                <option value="Female">Female </option>
                                                <option value="Other">Other </option>
                                            </select>
                                            <label for="Gender" class="ms-2">Gender </label>     
                                        </div>
                                        <div class="form-floating mt-3 col-12 col-md-3 hiddendiv d-none">
                                          <input type="date" class="form-control" name="dob" id="dob"  placeholder="dob" onchange="getAge(this.value)">
                                          <label for="dob" class="ms-2">DOB</label>
                                        </div>
                                        <div class="form-floating mt-3 col-12 col-md-3 hiddendiv d-none">
                                          <input type="text" readonly class="form-control" name="age"   id="age"  placeholder="age">
                                          <label for="age" class="ms-2">Age</label>
                                        </div>
                                        <div class="row align-items-center justify-content-center hiddendiv d-none">
                                            <div class="mt-3 col-12 col-md-3">
                                                <label class="mb-2">State </label>
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
                                            <div class="mt-3 col-12 col-md-3">
                                                <label class="mb-2">District </label>                          
                                                <select class="form-control select2 text-uppercase" name="district" id="district" onchange="getcity(this.value);" >
                                                    <option value="">Select District </option>
                                                </select>
                                            </div>
                                            <div class="mt-3 col-12 col-md-3">
                                                <label class="mb-2">City </label>                            
                                                <select class="form-control select2" name="city" id="city" >
                                                    <option value="">Select City </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3 w-100 hiddendiv d-none">
                                <div class="pt-0 pb-0">
                                    <h5 class="card-title text-center pb-0 fs-4 mb-0">upload photo for facematch</h5>
                                </div>
                                <div class="card-body mt-0 pb-0">
                                    <div class="row align-items-center justify-content-center">
                                        <div class="col-lg-3 col-md-4 my-3 col-10 text-center">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div style="position:relative;text-align:center;">
                                                        <img class="w-100" id="profile-pic" src="<?php echo base_url(); ?>assets/images/facematch.webp" style="height: 152px!important;border: 1px solid;object-fit:fill;" alt="">
                                                        <div style="position:absolute;z-index:2;box-shadow:0px 1px 1px 2px;background:black;color:white;top:0px;right:0px;padding:0.4rem 0.7rem;cursor:pointer;" class="d-none" id="crossIcon">
                                                            <i class="fa fa-times"></i>
                                                        </div>
                                                    </div>  
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <button class="btn btn-primary disabled-on-loading mt-3" for="input-file" id="my-button" type="button" style="background-color: green !important;"> Upload photo</button>
                                                </div>
                                            </div>
                                            <input type="file" name="Photo" id="input-file" style="display: none;" accept="image/*" onchange="cropPhoto()">
                                        </div>
                                        <div class="col-lg-6 col-sm-12 col-md-6 my-3">
                                            <textarea name="message" maxlength="150" rows="5" onKeyUp="showOtherButtonAccordingly(this,this.value)" onKeyPress="return checkLength(this.value,150)" id="message" class="form-control" placeholder="Enter Your Message"></textarea>
                                            <div id="the-count">
                                                <span id="current">0</span>
                                                <span id="maximum">/ 150</span>
                                            </div>
                                        </div>
                                        <input type="hidden" name="facematch" id="facematch">
                                    </div>
                                </div>
                            </div>
                            <div class="card hiddendiv mb-3 d-none">
                                <div class="card-body" id="firBody">
                                    <input type="hidden" id="firCount" name="firCount">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-md-12 text-end mt-3">
                                            <button type="button" class="btn btn-style-red disabled-on-loading" style="border-radius:0!important;background:black!important;" id="addMore" onclick="addMoreFir('new')"> Add More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card hiddendiv mb-0 d-none">
                                <div class="card-header my-0 py-0">
                                    <h5 class="card-title text-center">Manage contacts</h5>
                                </div>
                                <div class="card-body pb-0">
                                    <div class="row align-items-end">
                                        <div class="col-lg-3 my-3 col-sm-12 col-md-4">
                                            <label>1st Contact Number</label>
                                            <input type="text" readonly name="well1" class="form-control" value="<?php echo $getUserDetail[0]['registration_mobile']; ?>">
                                        </div>
                                        <div class="col-lg-auto col-sm-12 col-md-auto my-3">
                                            <span class="mx-2 activeLabel">
                                                <input type="radio" name="visibility1" id="visibility1" class="radio-custom" value="1" checked>
                                                <label for="visibility1" class="ml-2 radio-custom-label" style="font-weight:bold;">Active</label>
                                            </span>
                                        </div>
                                    </div>
                                    <?php 
                                        if($getUserDetail[0]['alternate_mobile1'] != NULL)
                                        {
                                    ?>
                                    <div class="row align-items-end">
                                        <div class="col-lg-3 my-3 col-sm-12 col-md-4">
                                            <label>2nd Contact Number</label>
                                            <input type="text" name="well2" readonly class="form-control" value="<?php echo $getUserDetail[0]['alternate_mobile1']; ?>">
                                        </div>
                                        <div class="col-lg-auto col-sm-12 col-md-auto my-3">
                                            <span class="mx-2 activeLabel">
                                                <input type="radio" name="visibility2" id="visibility2" class="radio-custom" value="1">
                                                <label for="visibility2" class="ml-2 radio-custom-label" style="font-weight:bold;">Active</label>
                                            </span>
                                        </div>
                                        <div class="col-lg-auto col-sm-12 col-md-auto my-3">
                                            <span class="mx-2 activeLabel">
                                                <input type="radio" name="visibility2" id="visibilityNon2" class="radio-custom" value="0" checked>
                                                <label for="visibilityNon2" style="font-weight:bold;" class="ml-2 radio-custom-label">In-Active</label>
                                            </span>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <?php 
                                        if($getUserDetail[0]['alternate_mobile2'] != NULL)
                                        {
                                    ?>
                                    <div class="row align-items-end">
                                        <div class="col-lg-3 my-3 col-sm-12 col-md-4">
                                            <?php 
                                                if($getUserDetail[0]['alternate_mobile1'] != NULL)
                                                {
                                            ?>
                                            <label>3rd Contact Number</label>
                                            <?php }else{ ?>
                                            <label>2nd Contact Number</label>
                                            <?php } ?>
                                            <input type="text" name="well3" readonly class="form-control" value="<?php echo $getUserDetail[0]['alternate_mobile2']; ?>">
                                        </div>
                                        <div class="col-lg-auto col-sm-12 col-md-auto my-3">
                                            <span class="mx-2 activeLabel">
                                                <input type="radio" name="visibility3" id="visibility3" class="radio-custom" value="1">
                                                <label for="visibility3" class="ml-2 radio-custom-label" style="font-weight:bold;">Active</label>
                                            </span>
                                        </div>
                                        <div class="col-lg-auto col-sm-12 col-md-auto my-3">
                                            <span class="mx-2 activeLabel">
                                                <input type="radio" name="visibility3" id="visibilityNon3" class="radio-custom" value="0" checked>
                                                <label for="visibilityNon3" style="font-weight:bold;" class="ml-2 radio-custom-label">In-Active</label>
                                            </span>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <?php 
                                        if($getUserDetail[0]['alternate_mobile3'] != NULL)
                                        {
                                    ?>
                                    <div class="row align-items-end">
                                        <div class="col-lg-3 my-3 col-sm-12 col-md-4">
                                            <?php 
                                                if($getUserDetail[0]['alternate_mobile1'] != NULL && $getUserDetail[0]['alternate_mobile2'] != NULL)
                                                {
                                            ?>
                                            <label>4th Contact Number</label>
                                            <?php }else if($getUserDetail[0]['alternate_mobile1'] == NULL && $getUserDetail[0]['alternate_mobile2'] != NULL){ ?>
                                            <label>3rd Contact Number</label>
                                            <?php }else if($getUserDetail[0]['alternate_mobile1'] != NULL && $getUserDetail[0]['alternate_mobile2'] == NULL){ ?>
                                            <label>3rd Contact Number</label>
                                            <?php }else if($getUserDetail[0]['alternate_mobile1'] == NULL && $getUserDetail[0]['alternate_mobile2'] == NULL){ ?>
                                            <label>2rd Contact Number</label>
                                            <?php } ?>
                                            <input type="text" name="well4" readonly class="form-control" value="<?php echo $getUserDetail[0]['alternate_mobile3']; ?>">
                                        </div>
                                        <div class="col-lg-auto col-sm-12 col-md-auto my-3">
                                            <span class="mx-2 activeLabel">
                                                <input type="radio" name="visibility4" id="visibility4" class="radio-custom" value="1">
                                                <label for="visibility4" class="ml-2 radio-custom-label" style="font-weight:bold;">Active</label>
                                            </span>
                                        </div>
                                        <div class="col-lg-auto col-sm-12 col-md-auto my-3">
                                            <span class="mx-2 activeLabel">
                                                <input type="radio" name="visibility4" id="visibilityNon4" class="radio-custom" value="0" checked>
                                                <label for="visibilityNon4" style="font-weight:bold;" class="ml-2 radio-custom-label">In-Active</label>
                                            </span>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="card hiddendiv d-none">
                                <div class="card-body">
                                    <div class="row mt-3 justify-content-start" style="align-items: self-end;">
                                        <div class="col-lg-auto col-sm-12 col-md-auto form-floating">
                                            <input type="number" min="0" class="form-control" required id="rewardAmount" name="rewardAmount" value="0">
                                            <label for="rewardAmount" class="ms-2" style="color:black;"><b>Enter Reward Amount</b></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card hiddendiv d-none">
                                <div class="card-body">
                                    <div class="row mt-3 justify-content-start" style="align-items: self-end;">
                                        <div class="col-lg-auto col-sm-12 col-md-12 form-check">
                                            <input type="checkbox" id="terms" class="form-check-input" name="terms" value="1" required>
                                            <label for="terms" class="form-check-label" style="color:black;display:inline;font-weight:bold;"><b class="text-danger">Declaration:</b> I hereby declare that all the details furnished above are true and correct to the best of my knowledge and belief. In case any of the above information is found to be false or untrue or misleading or misrepresenting. I am aware that i may be held liable for it.</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hiddendiv d-none">
                                <div class="mt-0 pb-0">
                                    <div class="row align-items-center justify-content-center">
                                        <div class="col-lg-3 my-3 col-6">
                                            <button class="btn btn-primary w-100 btn-style-green disabled-on-loading" id="btn1Submit" type="button" style="background-color:  #05106c !important;"> Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<div id="uploadimageModal" class="modal" role="dialog">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js" integrity="sha512-Gs+PsXsGkmr+15rqObPJbenQ2wB3qYvTHuJO6YJzPe/dTLvhy0fmae2BcnaozxDo5iaF8emzmCZWbQ1XXiX2Ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" integrity="sha512-2eMmukTZtvwlfQoG8ztapwAH5fXaQBzaMqdljLopRSA0i6YKM8kBAOrSSykxu9NN9HrtD45lIqfONLII2AFL/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script>
    
    function checkLength(val,limit)
    {
        if(val.length == limit)
        {
            return false;
        }else{
            return true;
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
        if (characterCount > 70 && characterCount < 90) {
            current.css('color', '#6d5555');
        }
        if (characterCount > 90 && characterCount < 100) {
            current.css('color', '#793535');
        }
        if (characterCount > 100 && characterCount < 120) {
            current.css('color', '#841c1c');
        }
        if (characterCount > 120 && characterCount < 139) {
            current.css('color', '#8f0001');
        }
        if (characterCount >= 140) {
            maximum.css('color', '#8f0001');
            current.css('color', '#8f0001');
            theCount.css('font-weight','bold');
        } else {
            maximum.css('color','#666');
            theCount.css('font-weight','normal');
        }
    }
    
    function clearAadhar(ele)
    {
        $('#btnaadharNext').addClass('btn-style-grey').removeClass('btn-style-five');
        $('#btnaadharNext').addClass('disabled');
        $('#aadharNumber').attr('readonly',false);
        $(ele).attr('disabled','disabled');
        $('#aadharsearchdiv').removeClass('d-none');
        $('#aadharcleardiv').addClass('d-none');
        $('.hiddendiv').addClass('d-none');
        $('#PAN').val('');
        $('#DL_no').val('');
        $('#voter_id').val('');
        $('#person_name').val('');
        $('#dob').val('');
        $('#state').val('').trigger('change');
        $('#firBody').find(".row:gt(0)").remove();
        $('#firCount').val(0);
        firCount = 0;
        $('#aadharNumber').val('');
        $(ele).removeAttr('disabled');
    }
    
    function checkAadhar(ele)
    {
        $(ele).attr('disabled','disabled');
        $.ajax({
            url:'<?php echo base_url(); ?>police/getWantedDetails',
            data:{aadhar:$('#aadharNumber').val(),'_token':'<?php echo $this->security->get_csrf_hash(); ?>'},
            type:'post',
            success:function(res)
            {
                let parse = JSON.parse(res);
                if(parse.status == 'success')
                {
                    $('#aadharNumber').attr('readonly',true);
                    $('#aadharcleardiv').removeClass('d-none');
                    $('#aadharsearchdiv').addClass('d-none');
                    $('.hiddendiv').removeClass('d-none');
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
                    if(parse.personName != '')
                    {
                        $('#person_name').attr('readonly',true);
                    }
                    $('#Gender').val(parse.gender);
                    if(parse.gender != '')
                    {
                        $('#Gender').attr('disabled',true);
                    }
                    $('#dob').val(parse.dob);
                    if(parse.dob != '0000-00-00')
                    {
                        $('#dob').attr('readonly',true);
                        $('#age').val(parse.age);
                    }
                    $('#state').val(parse.state).trigger('change');
                    getdistrict(parse.state);
                    $('#district').val(parse.district).trigger('change');
                    if(parse.firDetail.length > 0)
                    {
                        $('#oldId').val(parse.firDetail[0].crimeId);
                        for(let i=0;i<parse.firDetail.length;i++)
                        {
                            addMoreFir('old');
                            $('#firDate'+(i+1)).val(parse.firDetail[i].firDate);
                            $('#firNumber'+(i+1)).val(parse.firDetail[i].firNumber);
                            $('#oldPoliceId'+(i+1)).val(parse.firDetail[i].thanaId);
                            let split = parse.firDetail[i].ipcDhara.split(',');
                            $('#ipcDhara'+(i+1)).val(split).trigger('change');
                            $('#removeFir'+(i+1)).attr('data-id',parse.firDetail[i].Id);
                        }
                    }else{
                        addMoreFir('new');    
                    }
                    $(ele).removeAttr('disabled');
                }else{
                    $('#aadharNumber').attr('readonly',true);
                    $('#aadharcleardiv').removeClass('d-none');
                    $('#aadharsearchdiv').addClass('d-none');
                    $('.hiddendiv').removeClass('d-none');
                    $(ele).removeAttr('disabled');
                    addMoreFir('new');
                }
            }
        })
    }

    var firCount = 0;
    
    function goToDashboard(ele)
    {
        $(ele).attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>police";
    }
    
    $('#btn2Next').click(function(){
        $(this).attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>police/upload_wanted_detail?pn=3";
    })
    
    $('#btn3Next').click(function(){
        $(this).attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>police/upload_wanted_detail?pn=4";
    })
    
    $('#btn4Back').click(function(){
        $(this).attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>police/upload_wanted_detail?pn=3";
    })
    
    $('#btn3Back').click(function(){
        $(this).attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>police/upload_wanted_detail?pn=2";
    })
    
    function deleteDoc(url,index)
    {
        Swal.fire({
            title: '<strong class="text-dark" style="font-size:20px;">Delete Document</strong>',
            icon: 'info',
            html:'<div class="form-group mb-2">Are you sure you want to delete this document?</div>',
            allowOutsideClick:true,
            showCloseButton: true,
            showCancelButton: true,
            focusConfirm: true,
            showConfirmButton:true
        }).then((result) => {
            if (result.isConfirmed) {
                    $.ajax({
                    url:'<?php echo base_url(); ?>police/deleteCriminalDoc',
                    data:{url:url,index:index,'_token':'<?php echo $this->security->get_csrf_hash(); ?>'},
                    type:'post',
                    success:function(res)
                    {
                        toastr.success('Document Deleted Successfully');
                        setTimeout(function()
                        {
                            location.reload();
                        },3000);
                    }
                })
            }
        })
    }
    
    let firData = [];
    
    $.ajax({
        url:'<?php echo base_url(); ?>police/getIpcDhara',
        type:'get',
        async:true,
        success:function(res)
        {
            firData = JSON.parse(res);
        }
    })
    
    function addMoreFir(type)
    {
        let option = '';
        let html = '';
        $('#addMore').attr('disabled','disabled');
        firCount++;
        if(type == 'new')
        {
            html += '<input type="hidden" name="oldPoliceId'+firCount+'" id="oldPoliceId'+firCount+'" value="<?php echo $_SESSION['police_id']; ?>">';
            html += '<div class="row align-items-end"><div class="col-lg-3 col-sm-12 mt-3 form-floating"><input required type="date" class="form-control" placeholder="FIR Date" name="firDate'+firCount+'" id="firDate'+firCount+'" max="<?php echo date('Y-m-d'); ?>"><label for="firDate'+firCount+'" class="ms-2">Select FIR Date</div>';
            html += '<div class="col-lg-3 col-sm-12 mt-3 form-floating"><input type="text" required class="form-control" placeholder="FIR No." name="firNumber'+firCount+'" id="firNumber'+firCount+'"><label for="firNumber'+firCount+'" class="ms-2">Enter FIR Number</div>';
        }else{
            html += '<input type="hidden" name="oldPoliceId'+firCount+'" id="oldPoliceId'+firCount+'">';
            html += '<div class="row align-items-end"><div class="col-lg-3 col-sm-12 mt-3 form-floating"><input required type="date" readonly class="form-control" placeholder="FIR Date" name="firDate'+firCount+'" id="firDate'+firCount+'" max="<?php echo date('Y-m-d'); ?>"><label for="firDate'+firCount+'" class="ms-2">FIR Date</div>';
            html += '<div class="col-lg-3 col-sm-12 mt-3 form-floating"><input required type="text" class="form-control" placeholder="FIR No." name="firNumber'+firCount+'" id="firNumber'+firCount+'" readonly><label for="firNumber'+firCount+'" class="ms-2">FIR Number</div>';
        }
        if(firData.length > 0)
        {
            option += '<option value=""> IPC DHARA</option>';
            $.each(firData,function(key,value)
            {
                option += '<option value="'+value.Id+'">'+(value.ipcNumber)+'</option>';
            })
            if(type == 'new')
            {
                html += '<div class="col-lg-3 col-sm-12 col-10 mt-3"><label for="ipcDhara'+firCount+'">IPC DHARA</label><select required data-select2-id="'+firCount+'" multiple="multiple" class="form-control" placeholder="IPC Dhara" name="ipcDhara'+firCount+'[]" id="ipcDhara'+firCount+'">'+option+'</select></div>';   
            }else{
                html += '<div class="col-lg-3 col-sm-12 col-10 mt-3"><label for="ipcDhara'+firCount+'">IPC DHARA</label><select required disabled data-select2-id="'+firCount+'" multiple="multiple" class="form-control" placeholder="IPC Dhara" name="ipcDhara'+firCount+'[]" id="ipcDhara'+firCount+'">'+option+'</select></div>';                
            }
        }else{
            option += '<option value=""> IPC DHARA</option>';
            if(type == 'new')
            {
                html += '<div class="col-lg-3 col-sm-12 col-10 mt-3"><label for="ipcDhara'+firCount+'">IPC DHARA</label><select required multiple="multiple" class="form-control select2-multiple" placeholder="IPC Dhara" name="ipcDhara'+firCount+'" id="ipcDhara'+firCount+'">'+option+'</select></div>';
            }else{
                html += '<div class="col-lg-3 col-sm-12 col-10 mt-3"><label for="ipcDhara'+firCount+'">IPC DHARA</label><select required multiple="multiple" disabled class="form-control select2-multiple" placeholder="IPC Dhara" name="ipcDhara'+firCount+'" id="ipcDhara'+firCount+'">'+option+'</select></div>';
            }
        }
        if(type == 'new')
        {
            html += '<div class="col-lg-3 col-sm-12 col-2 mt-3"><button type="button" data-id="0" id="removeFir'+firCount+'" onclick="removeFir('+firCount+',this)" class="btn btn-danger" style="background:white!important;color:red!important;"><i class="fa fa-times"></i></button></div></div>';   
        }else{
            html += '</div>';
        }
        $('#firBody').append(html);
        $('#firCount').val(firCount);
        $('#addMore').removeAttr('disabled');
        $("#ipcDhara"+firCount).select2({
            theme: "classic",
            tags: true,
            tokenSeparators: [','],
            placeholder:'IPC DHARA'
        });
    }
    
    function removeFir(firCount1,ele)
    {
        $(ele).attr('disabled','disabled');
        if($('#removeFir'+firCount1).attr('data-id') == "0")
        {
            $('#firBody .row').eq((firCount1)).remove();
            firCount--;
            $('#firCount').val(firCount);
            $(ele).removeAttr('disabled');
        }else{
            Swal.fire({
                title: '<strong class="text-dark" style="font-size:20px;">Remove Fir</strong>',
                icon: 'info',
                html:'<div class="form-group mb-2">Are you sure you want to remove fir?</div>',
                allowOutsideClick:true,
                showCloseButton: true,
                showCancelButton: true,
                focusConfirm: true,
                showConfirmButton:true
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url:'<?php echo base_url(); ?>police/removeFir/'+$('#removeFir'+firCount1).attr('data-id'),
                        type:'get',
                        success:function(res)
                        {
                            $('#firBody .row').eq((firCount1)).remove();
                            firCount--;
                            $('#firCount').val(firCount);
                            $(ele).removeAttr('disabled');
                        }
                    })
                }else{
                    $(ele).removeAttr('disabled');
                }
            })
        }
    }
    
    $('#btn1Submit').click(function()
    {
        $(this).attr('disabled','disabled');
        if($('#facematch').val() == '')
        {
            toastr.error('Please Add Photo');
            $(this).removeAttr('disabled');
        }else{
            if($('#person_name').val() != '')
            {
                if($('#terms').is(':checked'))
                {
                    let data = new FormData($('#step1Form')[0]);
                    $.ajax({
                        url:$('#step1Form').attr('action'),
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
                                $('#btn1Submit').removeAttr('disabled');
                            }
                        }
                    });          
                }else{
                    toastr.error('Please accept our terms & conditions');
                    $(this).removeAttr('disabled');    
                }
            }else{
                toastr.error('Please Add Person Name');
                $(this).removeAttr('disabled');
            }
        }
    })
    
    function finalSubmit(ele)
    {
        if($('#terms').is(':checked'))
        {
            Swal.fire({
                title: '<strong class="text-dark" style="font-size:20px;">Final Submit</strong>',
                icon: 'info',
                html:'<div class="form-group mb-2">Are you sure you want to final submit?</div>',
                allowOutsideClick:true,
                showCloseButton: true,
                showCancelButton: true,
                focusConfirm: true,
                showConfirmButton:true
            }).then((result) => {
                if (result.isConfirmed) {
                    $(ele).attr('disabled','disabled');
                    let data = new FormData($('#step4Form')[0]);
                    data.append('isFinalSubmitted',1);
                    data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                    $.ajax({
                        url:'<?php echo base_url(); ?>police/finalWantedSumbit',
                        data:data,
                        type:'post',
                        contentType:false,
                        processData:false,
                        cache:false,
                        success:function(res)
                        {
                            toastr.success('Record Saved Successfully');
                            setTimeout(function()
                            {
                                location.href="<?php echo base_url(); ?>police";
                            },2000);
                        }
                    })   
                }
            })   
        }else{
            toastr.error('Please accept terms and conditions to continue');
        }
    }
    
    $('#step4Form').on('submit',function(e)
    {
        e.preventDefault();
        $('#btn4Submit').attr('disabled','disabled');
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
                    $('#btn4Submit').removeAttr('disabled');
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
    
    function showReUpload(index)
    {
        $('#reUploadBtn'+index).removeClass('d-none');
        $('#reUploadDiv'+index).removeClass('d-none');
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
    
    function cancelReUpload(ele,index)
    {
        $('#reUploadBtn'+index).addClass('d-none');
        $('#reUploadDiv'+index).addClass('d-none');   
    }
    
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
                    url:'<?php echo base_url(); ?>police/deleteCriminalPhoto/'+crimeId,
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
    
    function uploadLatestPhoto(ele,index)
    {
        if($('#latestFile'+index).val() == '')
        {
            toastr.error('Please Select Photo to continue');
        }else{
            $(ele).attr('disabled','disabled');
            let data = new FormData();
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            data.append('isUploaded',$('#isLatestPhotoUploaded'+index).val());
            let file = $('#latestFile'+index)[0].files[0];
            data.append('file',file);
            $.ajax({
                url:'<?php echo base_url(); ?>police/uploadWantedPhoto',
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
                    }
                }
            });
        }
    }
    
    function uploadDoc(ele,index)
    {
        if($('#documentFile'+index).val() == '')
        {
            if($('#isDocUploaded'+index).val() == 0)
            {
                toastr.error('Please Select Document to continue');
            }else{
                $(ele).attr('disabled','disabled');
                let data = new FormData();
                data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                data.append('documentName',$('#documentName'+index).val());
                data.append('isUploaded',$('#isDocUploaded'+index).val());
                data.append('index',index);
                let file = $('#documentFile'+index)[0].files[0];
                data.append('file',file);
                $.ajax({
                    url:'<?php echo base_url(); ?>police/uploadWantedDoc',
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
                        }
                    }
                });    
            }
        }else{
            $(ele).attr('disabled','disabled');
            let data = new FormData();
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            data.append('documentName',$('#documentName'+index).val());
            data.append('isUploaded',$('#isDocUploaded'+index).val());
            data.append('index',index);
            let file = $('#documentFile'+index)[0].files[0];
            data.append('file',file);
            $.ajax({
                url:'<?php echo base_url(); ?>police/uploadWantedDoc',
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
                    }
                }
            });
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
        $('#age').val(age);
        else
        $('#age').val('');
    }
    
    $('#my-button').click(function(){
        $('#input-file').click();
    });
    
    $image_crop = $('#image_demo').croppie({
        enableExif: true,
        viewport: {
          width:200,
          height:200,
          type:'square' //circle
        },
        boundary:{
          width:200,
          height:200
        }
      });
      
    $('.crop_image').click(function(event){
        $image_crop.croppie('result', {
          type: 'canvas',
          size: 'viewport',
          format:'jpeg'
        }).then(function(response){
            console.log(response);
            $('#facematch').val(response);
            let profile=document.getElementById('profile-pic');
            $('#crossIcon').removeClass('d-none'); 
            $('#uploadimageModal').modal('hide');
            profile.src=response;
        })
    });
    
    function cropPhoto()
    {
        if($('#input-file')[0].files.length > 0)
        {
            var reader = new FileReader();
            reader.onload = function (event) {
              $image_crop.croppie('bind', {
                url: event.target.result
              }).then(function(){
                console.log('jQuery bind complete');
              });
            }
            reader.readAsDataURL($('#input-file')[0].files[0]);
            $('#uploadimageModal').modal('show');   
        }else{
            toastr.error('Please upload photo to continue');
        }
    }
    
    $('#crossIcon').click(function()
    {
        $('#input-file').val('');
        $('#facematch').val('');
        let profile=document.getElementById('profile-pic');
        $('#crossIcon').addClass('d-none');
        profile.src='<?php echo base_url(); ?>assets/images/facematch.webp';
    })
    </script>
</body>

</html>