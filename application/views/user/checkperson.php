<style>
    label{
        font-weight:bold;
        font-size:1rem!important;
    }
</style>

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

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="container">

<section class="section register d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 px-0 col-md-6 d-flex flex-column align-items-center justify-content-center">
                <div class="card mb-3 py-3 w-100 p-2">
                    <div class="card-body">
                        <div class="pt-0 pb-2 <?php if($pn == 2){ echo "d-none"; } ?>">
                            <h5 class="card-title text-center pb-0 fs-4 pt-1">Search Person Details</h5>
                        </div>
                        <form class="row g-3 p-2 needs-validation <?php if($pn != 1){ echo "d-none"; } ?>" style="border:3px solid black;" method="post" action="<?php echo base_url(); ?>user/checkPerson/step1" novalidate id="step1Form">
                            <?php 
                                $csrf = array(
                                    'name' => $this->security->get_csrf_token_name(),
                                    'hash' => $this->security->get_csrf_hash()
                                );
                            ?>
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <div class="form-floating mb-1 col-12">
                                <input type="number" class="form-control" name="mobileNumber" id="mobileNumber" required placeholder="Mobile Number" onKeyPress="return checkLength(this.value,10)" onKeyUp="showOtpAccordingly(this.value)">
                                <label for="mobileNumber" class="px-4">Enter Your Mobile Number</label>
                                <div class="invalid-feedback">Please enter your mobile number.</div>
                            </div>
                            <div class="mb-2 col-lg-12 col-sm-12 col-md-12 px-lg-1" id="sendOtpDiv">
                                <button type="button" onclick="sendOtp(this)" class="btn btn-primary btn-style-grey w-100 disabled-on-loading disabled"> Send OTP <i class="fa fa-arrow-circle-right"></i></button>
                            </div>
                            <div class="form-group col-12 mt-3 d-none" id="otpdiv">
                                <div class="form-floating mb-3">
                                  <input type="number" class="form-control" name="otp" id="otp" placeholder="Enter OTP">
                                  <label for="otp">Enter OTP</label>
                                </div>
                                <button class="btn btn-primary w-100 disabled-on-loading btn-style-green" id="btn1" type="submit"> Next <i class="fa fa-arrow-circle-right"></i></button>
                                <div class="row px-0 mx-0 mt-4" style="justify-content:right;">
                                    <div class="col-md-auto col-sm-6 col-auto px-0" style="text-align:right;">
                                        <a href="javascript:void(0)" style="text-decoration:underline;" id="mobileClear">Want to change mobile number</a>
                                    </div>
                                </div>
                                <div class="row px-0 mx-0 mt-4" style="justify-content:right;">
                                    <div class="col-md-auto col-sm-6 col-auto px-0" style="text-align:right;">
                                        <button type="button" onclick="resendOtp(this)" class="btn btn-primary btn-style-five w-100 disabled-on-loading" > Resend OTP <i class="bi bi-bootstrap-reboot"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <form class="row g-3 needs-validation <?php if($pn != 2){ echo "d-none"; } ?>" method="post" action="<?php echo base_url(); ?>user/checkPerson/step2" novalidate id="step2Form">
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
                                    <h5 class="card-title text-decoration-underline text-center pb-0 fs-4 pt-0">Search Person Details</h5>
                                </div>
                                <div class="form-group mb-0 mt-3 col-12 px-0" id="idTypeDiv">
                                    <select name="idType" class="form-control" style="appearance:auto;" id="idType" aria-label="Select Id Type" onchange="showInputAccordingly(this.value)">
                                        <option value="">Select Id Type</option>
                                        <option value="aadhar">Aadhaar</option>
                                        <option value="dl">Driving License</option>
                                        <option value="pan">Pan Card</option>
                                        <option value="voter">Voter Id</option>
                                    </select>
                                    <!--<label for="idType" style="padding: 1rem 1.75rem;">Select Id Type <span class="text-danger">*</span></label>-->
                                </div>
                                <div id="aadharIdentity" class="mt-2 px-0 d-none">
                                    <div class="form-floating mt-3 pr-2 row mx-0">
                                        <input type="number" class="form-control" name="aadhar_id" max="12" min="12" onKeyPress="return checkLength(this.value,12)" id="aadharNumber" required placeholder="Aadhar Number" aria-describedby="step2CheckAadhar">
                                        <label for="aadharNumber" id="aadharLabel" class="pl-2">Enter Aadhaar No</label>
                                        <div class="invalid-feedback">Please enter aadhar number.</div>
                                    </div>
                                    <div class="row mt-3 mx-0" style="justify-content:space-evenly;text-align:center;">
                                        <div class="col-6 col-md-6 pl-2">
                                            <button class="btn btn-primary w-auto disabled-on-loading btn-style-red" style="background:black!important" id="btnAadharClear" type="button"> Back</button>  
                                        </div>
                                        <div class="col-6 px-0">
                                            <button class="btn btn-primary w-auto disabled-on-loading btn-style-green" id="step2CheckAadhar" type="button"> Search</button>  
                                        </div>
                                    </div>
                                </div>
                                <div id="panIdentity" class="mt-2 px-0 d-none">
                                    <div class="form-floating mt-3 pr-2 row mx-0">
                                        <input type="text" class="form-control" id="panNumber" required placeholder="PAN Number" aria-describedby="step2CheckPan">
                                        <label for="panNumber" id="panLabel" class="pl-2">Enter PAN No</label>
                                        <div class="invalid-feedback">Please enter PAN Number.</div>
                                    </div>
                                    <div class="row mt-3" style="justify-content:space-evenly;text-align:center;">
                                        <div class="col-6 col-md-6 pl-2">
                                            <button class="btn btn-primary w-auto disabled-on-loading btn-style-red" style="background:black!important" id="btnPanClear" type="button"> Back</button>  
                                        </div>
                                        <div class="col-6 px-0">
                                            <button class="btn btn-primary w-auto disabled-on-loading btn-style-green" id="step2CheckPan" type="button"> Search</button>  
                                        </div>
                                    </div>
                                </div>
                                <div id="voterIdentity" class="mt-2 px-0 d-none">
                                    <div class="form-floating mt-3 pr-2 row mx-0">
                                        <input type="text" class="form-control" id="voterId" required placeholder="Voter Number" aria-describedby="step2CheckVoter">
                                        <label for="voterId" id="voterLabel" class="pl-2">Enter Voter No</label>
                                        <div class="invalid-feedback">Please enter Voter Number.</div>
                                    </div>
                                    <div class="row mt-3" style="justify-content:space-evenly;text-align:center;">
                                        <div class="col-6 col-md-6 pl-2">
                                            <button class="btn btn-primary w-auto disabled-on-loading btn-style-red" style="background:black!important" id="btnVoterClear" type="button"> Back</button>  
                                        </div>
                                        <div class="col-6 px-0">
                                            <button class="btn btn-primary w-auto disabled-on-loading btn-style-green" id="step2CheckVoter" type="button"> Search</button>  
                                        </div>
                                    </div>
                                </div>
                                <div id="dlIdentity" class="mt-2 px-0 d-none">
                                    <div class="form-floating mt-3 pr-2 row mx-0">
                                        <input type="text" class="form-control" max="12" min="12" id="dlNumber" required placeholder="Driving License Number" aria-describedby="step2CheckDl">
                                        <label for="dlNumber" id="dlLabel" class="pl-2">Enter Driving License No</label>
                                        <div class="invalid-feedback">Please enter Driving License number.</div>
                                    </div>
                                    <div class="row mt-3" style="justify-content:space-evenly;text-align:center;">
                                        <div class="col-6 col-md-6 pl-2">
                                            <button class="btn btn-primary w-auto disabled-on-loading btn-style-red" style="background:black!important" id="btnDlClear" type="button"> Back</button>  
                                        </div>
                                        <div class="col-6 px-0">
                                            <button class="btn btn-primary w-auto disabled-on-loading btn-style-green" id="step2CheckDl" type="button"> Search</button>  
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" id="mainPhotoSelected" >
                            </div>
                        </form>
                    </div>
                </div>
                <div class="credits">
                    Designed by <a href="https://shammtech.in/">Shammtech It Solution</a>
                </div>
            </div>
        </div>
    </div>
</section>

</div>
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
                    <div class='col-lg-6 col-sm-12 col-md-12 mt-3 px-0' id="frontcameradiv">
                        <button type='button' class='w-100 btn btn-style-green btn-primary' onclick='openFrontCamera()'>Open Front Camera <i class='fa fa-camera fa-spin'></i></button>
                    </div>
                    <div class='col-lg-6 col-sm-12 col-md-6 mt-3 px-0 px-md-2' id="backcameradiv">
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
                        <button id="btnInactiveSave" class="w-100 btn btn-primary btn-style-four disabled-on-loading"> Search</button>
                    </div>
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
    .swal2-confirm{
        position: relative!important;
        color: #fff!important;
        font-size: 16px!important;
        line-height: 16px!important;
        font-weight: 600!important;
        padding: 12px 35px!important;
        border-radius: 25px!important;
        background-color:#008000!important;
    }
    
    #swal2-html-container{
        margin:0!important;
    }
    .
</style>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<style type="text/css">
    .no-border {
        border: 0 !important;
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
<script type="text/javascript">
    
    $('#btnDlClear').click(function()
    {
        $('#step2Form')[0].reset();
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
    
    $('#btnPanClear').click(function()
    {
        $('#step2Form')[0].reset();
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
    
    $('#btnVoterClear').click(function()
    {
        $('#step2Form')[0].reset();
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
    
    $('#btnAadharClear').click(function()
    {
        $('#step2Form')[0].reset();
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
    
    function redirectToStep2()
    {
        window.open('<?php echo base_url(); ?>user/checkStep2','_blank');
    }
    
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
            $(this).attr('disabled','disabled');      
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
            if(count == 0)
            {
                Swal.fire({
                    title: '<strong class="text-danger" style="font-size:20px;">Enter '+label+'</strong>',
                    icon: 'danger',
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
                    url:'<?php echo base_url(); ?>user/checkInactiveInfo',
                    data:data,
                    contentType: false,
                    cache: false,
                    processData:false,
                    type:'post',
                    success:function(res)
                    {
                        let parse = JSON.parse(res);
                        let idType = $('#idType').val();
                        if(parse.status == 'success')
                        {
                            location.href="<?php echo base_url(); ?>user/checkStep2";
                        }
                        else{
                            if(parse.status == 'error')
                            {
                                toastr.error(parse.message);
                                $('#btnInactiveSave').removeAttr('disabled');
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
                                        $('#btnInactiveSave').removeAttr('disabled');
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
                                        $('#btnInactiveSave').removeAttr('disabled');
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
                                        $('#btnInactiveSave').removeAttr('disabled');
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
                                        $('#btnInactiveSave').removeAttr('disabled');
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
                                        $('#btnInactiveSave').removeAttr('disabled');
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
                                        $('#btnInactiveSave').removeAttr('disabled');
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
                                        $('#btnInactiveSave').removeAttr('disabled');
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
            html: "<div class='form-group mb-3'><h5>To get person's more details, you have to click person's face photo</h5></div><div class='row mx-0 d-md-none d-block'><div class='col-lg-6 col-sm-12 col-md-6 mt-3'><button type='button' class='btn btn-style-green btn-primary' onclick='openCamera()'>Open Camera <i class='fa fa-camera fa-spin'></i></button></div></div><div class='row mx-0 d-none d-md-flex'><div class='col-lg-6 col-sm-12 col-md-6 mt-3'><button type='button' class='btn btn-style-green btn-primary' onclick='openFrontCamera()'>Open Front Camera <i class='fa fa-camera fa-spin'></i></button></div><div class='col-lg-6 col-sm-12 col-md-6 mt-3'><button type='button' class='btn btn-style-green btn-primary' onclick='openBackCamera()'>Open Back Camera <i class='fa fa-camera fa-spin'></i></button></div></div>",
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
    
    $('#step2Form').on('submit',function(e)
    {
        let arr = $(this).serializeArray();
        let count = 0;
        for(let i=0;i<arr.length;i++)
        {
          if(arr[i].value != '')
          {
            count++;
          }
        }
        e.preventDefault();
        if(count == arr.length)
        {
            $('#btnStep2').attr('disabled','disabled');
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
                    let idType = $('#idType').val();
                    if(parse.status == 'success')
                    {
                        if(parse.isVisible == '0')
                        {
                            if(parse.isRegistered == 0 && parse.isMissing == 1)
                            {
                                 let html = '';
                                 if(parse.isVerified == 1)
                                 {
                                     html = '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">MISSING</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
                                 }else{
                                     html = '<div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">MISSING</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
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
                                        location.href="<?php echo base_url(); ?>user/checkStep2";
                                    }else if(result.isDismissed)
                                    {
                                        location.reload();
                                    }
                                })
                             }else if(parse.isRegistered == 1 && parse.isMissing == 0)
                             {
                                 Swal.fire({
                                    allowOutsideClick:false,
                                    html:
                                        '<div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-success">General</label></div><div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>',
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:false
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        location.href="<?php echo base_url(); ?>user/checkStep2";
                                    }else if(result.isDismissed)
                                    {
                                        location.reload();
                                    }
                                })
                             }else if(parse.isRegistered == 1 && parse.isMissing == 1)
                             {
                                Swal.fire({
                                    allowOutsideClick:false,
                                    html:
                                        '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bold;font-size: 21px!important;" class="text-danger">MISSING</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>',
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:false
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        location.href="<?php echo base_url(); ?>user/checkStep2";
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
                                     html = '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">MISSING</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
                                 }else{
                                     html = '<div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">MISSING</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
                                 }
                                //  if(parse.isVerified == 1)
                                //  {
                                //      html = '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">MISSING</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                //  }else{
                                //      html = '<div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">MISSING</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                //  }
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
                                if(parse.isVerified == 1)
                                {
                                    html = '<div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-success">General</label></div><div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">MISSING</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                }else{
                                    html = '<div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-success">General</label></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">MISSING</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                }
                                 Swal.fire({
                                    allowOutsideClick:false,
                                    html:html,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:false
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        Swal.fire({
                                            allowOutsideClick:false,
                                            icon : 'info',
                                            html: "<div class='form-group mb-3'><h5>To get person's more details, you have to click person's face photo</h5></div>",
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:true,
                                            'confirmButtonText':'Open Camera',
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                showCameraModal();      
                                                $('#btnStep2').removeAttr('disabled');
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })   
                                    }else if(result.isDismissed)
                                    {
                                        location.reload();
                                    }
                                })
                             }else if(parse.isRegistered == 1 && parse.isMissing == 1)
                             {
                                 if(parse.isVerified == 1)
                                 {
                                     html = '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">MISSING</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
                                 }else{
                                     html = '<div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">MISSING</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
                                 }
                                Swal.fire({
                                    allowOutsideClick:false,
                                    html:html,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:false
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        Swal.fire({
                                            allowOutsideClick:false,
                                            icon : 'info',
                                            html: "<div class='form-group mb-3'><h5>To get person's more details, you have to click person's face photo</h5></div>",
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:true,
                                            'confirmButtonText':'Open Camera',
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                showCameraModal();      
                                                $('#btnStep2').removeAttr('disabled');
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })   
                                    }else if(result.isDismissed)
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
                            $('#btnSubmit').removeAttr('disabled');
                            $('#otpdiv').addClass('d-none');
                            $('#aadharNumber').attr('readonly',false);
                            $('#mobileNumber').attr('readonly',false);
                            $('#btnSubmit').removeClass('d-none');   
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
                                    $('#btnStep2').removeAttr('disabled');
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
                                    $('#btnStep2').removeAttr('disabled');
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
                                    $('#btnStep2').removeAttr('disabled');
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
                                    $('#btnStep2').removeAttr('disabled');
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
                                    $('#btnStep2').removeAttr('disabled');
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
                                    $('#btnStep2').removeAttr('disabled');
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
                                    $('#btnStep2').removeAttr('disabled');
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
            });
        }else{
            return false;
        }
    })
    
    function removeSlash(site)     
    {     
        return site.replace(/\/$/, "");
    } 
    
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
        if(count == 0)
        {
            Swal.fire({
                title: '<strong class="text-danger" style="font-size:20px;">Enter '+label+'</strong>',
                icon: 'danger',
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
                url:'<?php echo base_url(); ?>user/checkPersonId',
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
                        let typeLabel = '';
                        if(parse.isWanted == 1)
                        {
                            typeLabel += '<b> Wanted /</b>';
                        }
                        if(parse.isCriminal == 1)
                        {
                            typeLabel += '<b> Criminal/</b>';
                        }
                        typeLabel = (typeLabel.slice(0,typeLabel.length - 5)) + '</b>';
                        if(parse.isVisible == '1')
                        {
                            if(parse.isWanted == 1 || parse.isCriminal == 1)
                            {
                                if(parse.isRegistered == 0 && parse.isMissing == 1)
                                {
                                     let html = '';
                                     if(parse.isVerified == 1)
                                     {
                                         html = '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record -: <a href="<?php echo base_url(); ?>user/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                     }else{
                                         html = '<div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record -: <a href="<?php echo base_url(); ?>user/criminalRecord" class="text-success" target="_blank" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
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
                                            location.href="<?php echo base_url(); ?>user/checkStep2";
                                        }else if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
                                    })
                                 }else if(parse.isRegistered == 1 && parse.isMissing == 0)
                                 {
                                     Swal.fire({
                                        allowOutsideClick:false,
                                        html:
                                            '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record -: <a href="<?php echo base_url(); ?>user/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>',
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:false
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            location.href="<?php echo base_url(); ?>user/checkStep2";
                                        }else if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
                                    })
                                 }else if(parse.isRegistered == 1 && parse.isMissing == 1)
                                 {
                                    Swal.fire({
                                        allowOutsideClick:false,
                                        html:
                                            '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record -: <a href="<?php echo base_url(); ?>user/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>',
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:false
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            location.href="<?php echo base_url(); ?>user/checkStep2";
                                        }else if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
                                    })   
                                 }else{
                                     let html = '';
                                     if(parse.image != '')
                                     {
                                         html += '<div class="form-group mt-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>';
                                     }
                                     html += '<div class="form-group mt-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record -: <a href="<?php echo base_url(); ?>user/criminalRecord" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
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
                                    }).then((result) => {
                                        if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
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
                                         html = '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
                                     }else{
                                         html = '<div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
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
                                            location.href="<?php echo base_url(); ?>user/checkStep2";
                                        }else if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
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
                                            '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>',
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:false
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            location.href="<?php echo base_url(); ?>user/checkStep2";
                                        }else if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
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
                                            '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>',
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:false
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            location.href="<?php echo base_url(); ?>user/checkStep2";
                                        }else if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
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
                                         html = '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record -: <a href="<?php echo base_url(); ?>user/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
                                     }else{
                                         html = '<div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record -: <a href="<?php echo base_url(); ?>user/criminalRecord" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
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
                                         html = '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>user/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
                                     }else{
                                         html = '<div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>user/criminalRecord" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
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
                                                html: "<div class='form-group mb-3'><h5>To get person's more details, you have to click person's face photo</h5></div>",
                                                showCloseButton: true,
                                                showCancelButton: false,
                                                focusConfirm: false,
                                                showConfirmButton:true,
                                                'confirmButtonText':'Open Camera',
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    showCameraModal();      
                                                    $('#step2CheckAadhar').removeAttr('disabled');
                                                }else if(result.isDismissed)
                                                {
                                                    location.reload();
                                                }
                                            })   
                                        }else if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
                                    })
                                 }else if(parse.isRegistered == 1 && parse.isMissing == 1)
                                 {
                                    Swal.fire({
                                        allowOutsideClick:false,
                                        html:
                                            '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>user/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>',
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:false
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            Swal.fire({
                                                allowOutsideClick:false,
                                                icon : 'info',
                                                html: "<div class='form-group mb-3'><h5>To get person's more details, you have to click person's face photo</h5></div>",
                                                showCloseButton: true,
                                                showCancelButton: false,
                                                focusConfirm: false,
                                                showConfirmButton:true,
                                                'confirmButtonText':'Open Camera',
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    showCameraModal();      
                                                    $('#step2CheckAadhar').removeAttr('disabled');
                                                }else if(result.isDismissed)
                                                {
                                                    location.reload();
                                                }
                                            })   
                                        }else if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
                                    })   
                                 }else{
                                     let html = '';
                                     if(parse.image != '')
                                     {
                                         html += '<div class="form-group mt-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>';
                                     }
                                     html += '<div class="form-group mt-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>user/criminalRecord" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
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
                                    }).then((result) => {
                                        if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
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
                                         html = '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3 '+((typeLabel == '') ? 'd-none' : '')+'"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
                                     }else{
                                         html = '<div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
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
                                     let typediv = '';
                                     if(typeLabel != '</b>')
                                     {
                                         typediv = '<div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                     }
                                     if(parse.isVerified == 1)
                                     {
                                         html = '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
                                     }else{
                                         html = '<div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
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
                                                html: "<div class='form-group mb-3'><h5>To get person's more details, you have to click person's face photo</h5></div>",
                                                showCloseButton: true,
                                                showCancelButton: false,
                                                focusConfirm: false,
                                                showConfirmButton:true,
                                                'confirmButtonText':'Open Camera',
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    showCameraModal();      
                                                    $('#step2CheckAadhar').removeAttr('disabled');
                                                }else if(result.isDismissed)
                                                {
                                                    location.reload();
                                                }
                                            })   
                                        }else if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
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
                                            '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>',
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:false
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            Swal.fire({
                                                allowOutsideClick:false,
                                                icon : 'info',
                                                html: "<div class='form-group mb-3'><h5>To get person's more details, you have to click person's face photo</h5></div>",
                                                showCloseButton: true,
                                                showCancelButton: false,
                                                focusConfirm: false,
                                                showConfirmButton:true,
                                                'confirmButtonText':'Open Camera',
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    showCameraModal();      
                                                    $('#step2CheckAadhar').removeAttr('disabled');
                                                }else if(result.isDismissed)
                                                {
                                                    location.reload();
                                                }
                                            })   
                                        }else if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
                                    })   
                                 }   
                            }
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
        if(count == 0)
        {
            Swal.fire({
                title: '<strong class="text-danger" style="font-size:20px;">Enter '+label+'</strong>',
                icon: 'danger',
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
                url:'<?php echo base_url(); ?>user/checkPersonId',
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
                        let typeLabel = '';
                        if(parse.isWanted == 1)
                        {
                            typeLabel += '<b> Wanted /</b>';
                        }
                        if(parse.isCriminal == 1)
                        {
                            typeLabel += '<b> Criminal/</b>';
                        }
                        typeLabel = (typeLabel.slice(0,typeLabel.length - 5)) + '</b>';
                        if(parse.isVisible == '1')
                        {
                            if(parse.isWanted == 1 || parse.isCriminal == 1)
                            {
                                if(parse.isRegistered == 0 && parse.isMissing == 1)
                                {
                                     let html = '';
                                     if(parse.isVerified == 1)
                                     {
                                         html = '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record -: <a href="<?php echo base_url(); ?>user/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                     }else{
                                         html = '<div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record -: <a href="<?php echo base_url(); ?>user/criminalRecord" class="text-success" target="_blank" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
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
                                            location.href="<?php echo base_url(); ?>user/checkStep2";
                                        }else if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
                                    })
                                 }else if(parse.isRegistered == 1 && parse.isMissing == 0)
                                 {
                                     Swal.fire({
                                        allowOutsideClick:false,
                                        html:
                                            '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record -: <a href="<?php echo base_url(); ?>user/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>',
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:false
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            location.href="<?php echo base_url(); ?>user/checkStep2";
                                        }else if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
                                    })
                                 }else if(parse.isRegistered == 1 && parse.isMissing == 1)
                                 {
                                    Swal.fire({
                                        allowOutsideClick:false,
                                        html:
                                            '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record -: <a href="<?php echo base_url(); ?>user/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>',
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:false
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            location.href="<?php echo base_url(); ?>user/checkStep2";
                                        }else if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
                                    })   
                                 }else{
                                     let html = '';
                                     if(parse.image != '')
                                     {
                                         html += '<div class="form-group mt-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>';
                                     }
                                     html += '<div class="form-group mt-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record -: <a href="<?php echo base_url(); ?>user/criminalRecord" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
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
                                    }).then((result) => {
                                        if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
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
                                         html = '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                     }else{
                                         html = '<div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
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
                                            location.href="<?php echo base_url(); ?>user/checkStep2";
                                        }else if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
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
                                            '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>',
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:false
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            location.href="<?php echo base_url(); ?>user/checkStep2";
                                        }else if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
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
                                            '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>',
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:false
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            location.href="<?php echo base_url(); ?>user/checkStep2";
                                        }else if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
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
                                         html = '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record -: <a href="<?php echo base_url(); ?>user/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
                                     }else{
                                         html = '<div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record -: <a href="<?php echo base_url(); ?>user/criminalRecord" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
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
                                         html = '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>user/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                     }else{
                                         html = '<div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>user/criminalRecord" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
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
                                                html: "<div class='form-group mb-3'><h5>To get person's more details, you have to click person's face photo</h5></div>",
                                                showCloseButton: true,
                                                showCancelButton: false,
                                                focusConfirm: false,
                                                showConfirmButton:true,
                                                'confirmButtonText':'Open Camera',
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    showCameraModal();      
                                                    $('#step2CheckDl').removeAttr('disabled');
                                                }else if(result.isDismissed)
                                                {
                                                    location.reload();
                                                }
                                            })   
                                        }else if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
                                    })
                                 }else if(parse.isRegistered == 1 && parse.isMissing == 1)
                                 {
                                    Swal.fire({
                                        allowOutsideClick:false,
                                        html:
                                            '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>user/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>',
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:false
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            Swal.fire({
                                                allowOutsideClick:false,
                                                icon : 'info',
                                                html: "<div class='form-group mb-3'><h5>To get person's more details, you have to click person's face photo</h5></div>",
                                                showCloseButton: true,
                                                showCancelButton: false,
                                                focusConfirm: false,
                                                showConfirmButton:true,
                                                'confirmButtonText':'Open Camera',
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    showCameraModal();      
                                                    $('#step2CheckDl').removeAttr('disabled');
                                                }else if(result.isDismissed)
                                                {
                                                    location.reload();
                                                }
                                            })   
                                        }else if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
                                    })   
                                 }else{
                                     let html = '';
                                     if(parse.image != '')
                                     {
                                         html += '<div class="form-group mt-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>';
                                     }
                                     html += '<div class="form-group mt-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>user/criminalRecord" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
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
                                    }).then((result) => {
                                        if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
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
                                         html = '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3 '+((typeLabel == '') ? 'd-none' : '')+'"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
                                     }else{
                                         html = '<div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
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
                                     let typediv = '';
                                     if(typeLabel != '</b>')
                                     {
                                         typediv = '<div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                     }
                                     if(parse.isVerified == 1)
                                     {
                                         html = '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                     }else{
                                         html = '<div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
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
                                                html: "<div class='form-group mb-3'><h5>To get person's more details, you have to click person's face photo</h5></div>",
                                                showCloseButton: true,
                                                showCancelButton: false,
                                                focusConfirm: false,
                                                showConfirmButton:true,
                                                'confirmButtonText':'Open Camera',
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    showCameraModal();      
                                                    $('#step2CheckDl').removeAttr('disabled');
                                                }else if(result.isDismissed)
                                                {
                                                    location.reload();
                                                }
                                            })   
                                        }else if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
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
                                            '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>',
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:false
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            Swal.fire({
                                                allowOutsideClick:false,
                                                icon : 'info',
                                                html: "<div class='form-group mb-3'><h5>To get person's more details, you have to click person's face photo</h5></div>",
                                                showCloseButton: true,
                                                showCancelButton: false,
                                                focusConfirm: false,
                                                showConfirmButton:true,
                                                'confirmButtonText':'Open Camera',
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    showCameraModal();      
                                                    $('#step2CheckDl').removeAttr('disabled');
                                                }else if(result.isDismissed)
                                                {
                                                    location.reload();
                                                }
                                            })   
                                        }else if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
                                    })   
                                 }   
                            }
                        }
                    }
                    else{
                        if(parse.status == 'error')
                        {
                            toastr.error(parse.message);
                            $('#step2CheckDl').removeAttr('disabled');
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
                                    $('#step2CheckDl').removeAttr('disabled');
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
                                    $('#step2CheckDl').removeAttr('disabled');
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
                                    $('#step2CheckDl').removeAttr('disabled');
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
                                    $('#step2CheckDl').removeAttr('disabled');
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
                                    $('#step2CheckDl').removeAttr('disabled');
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
                                    $('#step2CheckDl').removeAttr('disabled');
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
                                    $('#step2CheckDl').removeAttr('disabled');
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
        if(count == 0)
        {
            Swal.fire({
                title: '<strong class="text-danger" style="font-size:20px;">Enter '+label+'</strong>',
                icon: 'danger',
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
                url:'<?php echo base_url(); ?>user/checkPersonId',
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
                        let typeLabel = '';
                        if(parse.isWanted == 1)
                        {
                            typeLabel += '<b> Wanted /</b>';
                        }
                        if(parse.isCriminal == 1)
                        {
                            typeLabel += '<b> Criminal/</b>';
                        }
                        typeLabel = (typeLabel.slice(0,typeLabel.length - 5)) + '</b>';
                        if(parse.isVisible == '1')
                        {
                            if(parse.isWanted == 1 || parse.isCriminal == 1)
                            {
                                if(parse.isRegistered == 0 && parse.isMissing == 1)
                                {
                                     let html = '';
                                     if(parse.isVerified == 1)
                                     {
                                         html = '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record -: <a href="<?php echo base_url(); ?>user/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
                                     }else{
                                         html = '<div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record -: <a href="<?php echo base_url(); ?>user/criminalRecord" class="text-success" target="_blank" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
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
                                            location.href="<?php echo base_url(); ?>user/checkStep2";
                                        }else if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
                                    })
                                 }else if(parse.isRegistered == 1 && parse.isMissing == 0)
                                 {
                                     Swal.fire({
                                        allowOutsideClick:false,
                                        html:
                                            '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record -: <a href="<?php echo base_url(); ?>user/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>',
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:false
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            location.href="<?php echo base_url(); ?>user/checkStep2";
                                        }else if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
                                    })
                                 }else if(parse.isRegistered == 1 && parse.isMissing == 1)
                                 {
                                    Swal.fire({
                                        allowOutsideClick:false,
                                        html:
                                            '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record -: <a href="<?php echo base_url(); ?>user/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>',
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:false
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            location.href="<?php echo base_url(); ?>user/checkStep2";
                                        }else if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
                                    })   
                                 }else{
                                     let html = '';
                                     if(parse.image != '')
                                     {
                                         html += '<div class="form-group mt-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>';
                                     }
                                     html += '<div class="form-group mt-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record -: <a href="<?php echo base_url(); ?>user/criminalRecord" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
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
                                    }).then((result) => {
                                        if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
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
                                         html = '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
                                     }else{
                                         html = '<div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
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
                                            location.href="<?php echo base_url(); ?>user/checkStep2";
                                        }else if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
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
                                            '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>',
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:false
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            location.href="<?php echo base_url(); ?>user/checkStep2";
                                        }else if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
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
                                            '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>',
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:false
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            location.href="<?php echo base_url(); ?>user/checkStep2";
                                        }else if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
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
                                         html = '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record -: <a href="<?php echo base_url(); ?>user/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
                                     }else{
                                         html = '<div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record -: <a href="<?php echo base_url(); ?>user/criminalRecord" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
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
                                         html = '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>user/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                     }else{
                                         html = '<div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>user/criminalRecord" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
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
                                                html: "<div class='form-group mb-3'><h5>To get person's more details, you have to click person's face photo</h5></div>",
                                                showCloseButton: true,
                                                showCancelButton: false,
                                                focusConfirm: false,
                                                showConfirmButton:true,
                                                'confirmButtonText':'Open Camera',
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    showCameraModal();      
                                                    $('#step2CheckVoter').removeAttr('disabled');
                                                }else if(result.isDismissed)
                                                {
                                                    location.reload();
                                                }
                                            })   
                                        }else if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
                                    })
                                 }else if(parse.isRegistered == 1 && parse.isMissing == 1)
                                 {
                                    Swal.fire({
                                        allowOutsideClick:false,
                                        html:
                                            '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>user/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>',
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:false
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            Swal.fire({
                                                allowOutsideClick:false,
                                                icon : 'info',
                                                html: "<div class='form-group mb-3'><h5>To get person's more details, you have to click person's face photo</h5></div>",
                                                showCloseButton: true,
                                                showCancelButton: false,
                                                focusConfirm: false,
                                                showConfirmButton:true,
                                                'confirmButtonText':'Open Camera',
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    showCameraModal();      
                                                    $('#step2CheckVoter').removeAttr('disabled');
                                                }else if(result.isDismissed)
                                                {
                                                    location.reload();
                                                }
                                            })   
                                        }else if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
                                    })   
                                 }else{
                                     let html = '';
                                     if(parse.image != '')
                                     {
                                         html += '<div class="form-group mt-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>';
                                     }
                                     html += '<div class="form-group mt-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>user/criminalRecord" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
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
                                    }).then((result) => {
                                        if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
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
                                         html = '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3 '+((typeLabel == '') ? 'd-none' : '')+'"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
                                     }else{
                                         html = '<div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
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
                                     let typediv = '';
                                     if(typeLabel != '</b>')
                                     {
                                         typediv = '<div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                     }
                                     if(parse.isVerified == 1)
                                     {
                                         html = '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                     }else{
                                         html = '<div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
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
                                                html: "<div class='form-group mb-3'><h5>To get person's more details, you have to click person's face photo</h5></div>",
                                                showCloseButton: true,
                                                showCancelButton: false,
                                                focusConfirm: false,
                                                showConfirmButton:true,
                                                'confirmButtonText':'Open Camera',
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    showCameraModal();      
                                                    $('#step2CheckVoter').removeAttr('disabled');
                                                }else if(result.isDismissed)
                                                {
                                                    location.reload();
                                                }
                                            })   
                                        }else if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
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
                                            '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>',
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:false
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            Swal.fire({
                                                allowOutsideClick:false,
                                                icon : 'info',
                                                html: "<div class='form-group mb-3'><h5>To get person's more details, you have to click person's face photo</h5></div>",
                                                showCloseButton: true,
                                                showCancelButton: false,
                                                focusConfirm: false,
                                                showConfirmButton:true,
                                                'confirmButtonText':'Open Camera',
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    showCameraModal();      
                                                    $('#step2CheckVoter').removeAttr('disabled');
                                                }else if(result.isDismissed)
                                                {
                                                    location.reload();
                                                }
                                            })   
                                        }else if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
                                    })   
                                 }   
                            }
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
        if(count == 0)
        {
            Swal.fire({
                title: '<strong class="text-danger" style="font-size:20px;">Enter '+label+'</strong>',
                icon: 'danger',
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
                url:'<?php echo base_url(); ?>user/checkPersonId',
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
                        let typeLabel = '';
                        if(parse.isWanted == 1)
                        {
                            typeLabel += '<b> Wanted /</b>';
                        }
                        if(parse.isCriminal == 1)
                        {
                            typeLabel += '<b> Criminal/</b>';
                        }
                        typeLabel = (typeLabel.slice(0,typeLabel.length - 5)) + '</b>';
                        if(parse.isVisible == '1')
                        {
                            if(parse.isWanted == 1 || parse.isCriminal == 1)
                            {
                                if(parse.isRegistered == 0 && parse.isMissing == 1)
                                {
                                     let html = '';
                                     if(parse.isVerified == 1)
                                     {
                                         html = '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record -: <a href="<?php echo base_url(); ?>user/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
                                     }else{
                                         html = '<div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record -: <a href="<?php echo base_url(); ?>user/criminalRecord" class="text-success" target="_blank" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
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
                                            location.href="<?php echo base_url(); ?>user/checkStep2";
                                        }else if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
                                    })
                                 }else if(parse.isRegistered == 1 && parse.isMissing == 0)
                                 {
                                     Swal.fire({
                                        allowOutsideClick:false,
                                        html:
                                            '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record -: <a href="<?php echo base_url(); ?>user/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>',
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:false
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            location.href="<?php echo base_url(); ?>user/checkStep2";
                                        }else if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
                                    })
                                 }else if(parse.isRegistered == 1 && parse.isMissing == 1)
                                 {
                                    Swal.fire({
                                        allowOutsideClick:false,
                                        html:
                                            '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record -: <a href="<?php echo base_url(); ?>user/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>',
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:false
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            location.href="<?php echo base_url(); ?>user/checkStep2";
                                        }else if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
                                    })   
                                 }else{
                                     let html = '';
                                     if(parse.image != '')
                                     {
                                         html += '<div class="form-group mt-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>';
                                     }
                                     html += '<div class="form-group mt-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record -: <a href="<?php echo base_url(); ?>user/criminalRecord" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
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
                                    }).then((result) => {
                                        if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
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
                                         html = '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
                                     }else{
                                         html = '<div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
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
                                            location.href="<?php echo base_url(); ?>user/checkStep2";
                                        }else if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
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
                                            '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>',
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:false
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            location.href="<?php echo base_url(); ?>user/checkStep2";
                                        }else if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
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
                                            '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>',
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:false
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            location.href="<?php echo base_url(); ?>user/checkStep2";
                                        }else if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
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
                                         html = '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record -: <a href="<?php echo base_url(); ?>user/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
                                     }else{
                                         html = '<div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record -: <a href="<?php echo base_url(); ?>user/criminalRecord" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
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
                                         html = '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>user/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                     }else{
                                         html = '<div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>user/criminalRecord" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
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
                                                html: "<div class='form-group mb-3'><h5>To get person's more details, you have to click person's face photo</h5></div>",
                                                showCloseButton: true,
                                                showCancelButton: false,
                                                focusConfirm: false,
                                                showConfirmButton:true,
                                                'confirmButtonText':'Open Camera',
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    showCameraModal();      
                                                    $('#step2CheckPan').removeAttr('disabled');
                                                }else if(result.isDismissed)
                                                {
                                                    location.reload();
                                                }
                                            })   
                                        }else if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
                                    })
                                 }else if(parse.isRegistered == 1 && parse.isMissing == 1)
                                 {
                                    Swal.fire({
                                        allowOutsideClick:false,
                                        html:
                                            '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>user/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>',
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:false
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            Swal.fire({
                                                allowOutsideClick:false,
                                                icon : 'info',
                                                html: "<div class='form-group mb-3'><h5>To get person's more details, you have to click person's face photo</h5></div>",
                                                showCloseButton: true,
                                                showCancelButton: false,
                                                focusConfirm: false,
                                                showConfirmButton:true,
                                                'confirmButtonText':'Open Camera',
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    showCameraModal();      
                                                    $('#step2CheckAadhar').removeAttr('disabled');
                                                }else if(result.isDismissed)
                                                {
                                                    location.reload();
                                                }
                                            })   
                                        }else if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
                                    })   
                                 }else{
                                     let html = '';
                                     if(parse.image != '')
                                     {
                                         html += '<div class="form-group mt-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>';
                                     }
                                     html += '<div class="form-group mt-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>user/criminalRecord" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
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
                                    }).then((result) => {
                                        if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
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
                                         html = '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3 '+((typeLabel == '') ? 'd-none' : '')+'"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
                                     }else{
                                         html = '<div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
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
                                     let typediv = '';
                                     if(typeLabel != '</b>')
                                     {
                                         typediv = '<div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                     }
                                     if(parse.isVerified == 1)
                                     {
                                         html = '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                     }else{
                                         html = '<div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
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
                                                html: "<div class='form-group mb-3'><h5>To get person's more details, you have to click person's face photo</h5></div>",
                                                showCloseButton: true,
                                                showCancelButton: false,
                                                focusConfirm: false,
                                                showConfirmButton:true,
                                                'confirmButtonText':'Open Camera',
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    showCameraModal();      
                                                    $('#step2CheckPan').removeAttr('disabled');
                                                }else if(result.isDismissed)
                                                {
                                                    location.reload();
                                                }
                                            })   
                                        }else if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
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
                                            '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>',
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:false
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            Swal.fire({
                                                allowOutsideClick:false,
                                                icon : 'info',
                                                html: "<div class='form-group mb-3'><h5>To get person's more details, you have to click person's face photo</h5></div>",
                                                showCloseButton: true,
                                                showCancelButton: false,
                                                focusConfirm: false,
                                                showConfirmButton:true,
                                                'confirmButtonText':'Open Camera',
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    showCameraModal();      
                                                    $('#step2CheckPan').removeAttr('disabled');
                                                }else if(result.isDismissed)
                                                {
                                                    location.reload();
                                                }
                                            })   
                                        }else if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
                                    })   
                                 }   
                            }
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
    
    function showOtpAccordingly(val)
    {
        if(val.length == 10)
        {
            $('#sendOtpDiv button').removeClass('btn-style-grey').addClass('btn-style-five');
            $('#sendOtpDiv button').removeClass('disabled');
        }else{
            $('#sendOtpDiv button').removeClass('btn-style-five').addClass('btn-style-grey');
            $('#sendOtpDiv button').addClass('disabled');
        }
    }
    
    function resendOtp(ele)
    {
        let val = $('#mobileNumber').val();
        $(ele).attr('disabled','disabled');
        if(val != '')
        {   
            let data= new FormData();
            data.append('mobile',val);
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
                url:'<?php echo base_url(); ?>user/resendCheckOtp',
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
                        $('#otp').val('');
                        toastr.success('OTP Sent Successfully');
                        $(ele).removeAttr('disabled');
                    }else{
                        $('#otp').val('');
                        toastr.error(parse.msg);
                        $(ele).removeAttr('disabled');
                    }
                }
            })
        }else{
            $(ele).removeAttr('disabled');
            toastr.error('Please Enter Mobile Number');
        }
    }
    
    function sendOtp(ele)
    {
        let val = $('#mobileNumber').val();
        $(ele).attr('disabled','disabled');
        if(val != '')
        {   
            let data= new FormData();
            data.append('mobile',val);
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
                url:'<?php echo base_url(); ?>user/sendCheckOtp',
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
                        $(ele).removeAttr('disabled');
                        $('#otp').attr('required',true);
                        toastr.success('OTP Sent Successfully');
                        $('#mobileNumber').attr('readonly',true);   
                        $('#sendOtpDiv').addClass('d-none');
                        $('#otpdiv').removeClass('d-none');
                    }else{
                        $(ele).removeAttr('disabled');
                        toastr.error('Something Went Wrong');
                        $('#otpdiv').addClass('d-none');
                    }
                }
            })
        }else{
            $(ele).removeAttr('disabled');
            toastr.error('Please Enter Mobile Number');
            $('#otpdiv').addClass('d-none');
        }
    }
    
    $('#step1Form').on('submit',function(e)
    {
        let arr = $(this).serializeArray();
        let count = 0;
        for(let i=0;i<arr.length;i++)
        {
          if(arr[i].value != '')
          {
            count++;
          }
        }
        e.preventDefault();
        if(count == arr.length)
        {
            $('#btn1').attr('disabled','disabled');
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
                        location.href="<?php echo base_url(); ?>user/checkPerson?pn=2";   
                    }else{
                        toastr.error(parse.message);
                        $('#otp').val('');
                        $('#btn1').removeAttr('disabled');
                    }
                }
            });   
        }else{
            return false;
        }
    })
    
    $('#mobileClear').click(function()
    {
        $('#mobileNumber').val('');
        $('#mobileNumber').attr('readonly',false);
        $('#sendOtpDiv').removeClass('d-none');
        $('#sendOtpDiv button').removeClass('btn-style-five').addClass('btn-style-grey');
        $('#sendOtpDiv button').addClass('disabled');
        $('#otpdiv').addClass('d-none');
    })
    
    function checkLength(val,limit)
    {
        if(val.length == limit)
        {
            return false;
        }else{
            return true;
        }
    }
    
    $(document).ready(function() {
  $(window).keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
  });
});
</script>