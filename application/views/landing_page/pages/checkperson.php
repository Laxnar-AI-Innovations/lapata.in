<style>
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
    .form-label{
        color:black;
    }
    div:where(.swal2-container) div:where(.swal2-popup){
        width:auto;
    }
    .lapataTitle{
        margin:3.1rem 1rem 0rem 1rem;
        padding:1rem 0rem;
        text-align:center;
    }
    @media screen and (max-width:525px)
    {
        .lapataTitle{
            margin:3.1rem 0rem 0rem 0rem;
            padding:1rem 0rem;
            font-size:unset;
            text-align:center;
        }   
    }
    select.form-control:not([size]):not([multiple]) {
        height: calc(2.25rem + 15px)!important;
    }
    label{
        font-weight:bold;
        font-size:1rem!important;
    }
    .form-label{
        color:black!important;
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
<div class="row text-center mt-3">
    <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
        <?php 
            if(!isset($_SESSION['landingMob']))
            {
        ?>
        <h5><b>Search Person Details</b></h5>
        <?php }else{ ?>
        <h5><b>Enter Person ID</b></h5>
        <?php } ?>
    </div>
</div>
<section class="section register d-flex flex-column align-items-center justify-content-center pb-0">
    
    <div class="container">
        <div class="row ">
            <div class="col-lg-6">
                <div class="px-md-15 px-lg-3">
                    <?php 
                        if(!isset($_SESSION['landingMob']))
                        {
                    ?>
                    <!--<figure class="mb-6"><img class="img-fluid" src="assets_landing_page/img/illustrations/search-per.png" srcset="assets_landing_page/img/illustrations/search-per.png" alt=""></figure>-->
                     <figure class="mb-6 mobile_image_center_shiva_sir"><img class="img-fluid mobile_image_shiva_sir"  src="assets/images/mobilepngg.png" srcset="assets/images/mobilepngg.png" alt=""></figure>
                    <?php }else{ ?>
                    <figure class="mb-6 mobile_image_center_shiva_sir"><img class="img-fluid mobile_image_shiva_sir" src="assets_landing_page/img/idcard.png" srcset="assets_landing_page/img/idcard.png" alt=""></figure>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-4 px-0 col-md-6 d-flex flex-column align-items-center justify-content-center">
                <div class="card mb-0 pb-1 pt-1 w-100">
                    <div class="card-body pb-0">
                        <form class="row g-3 p-0 needs-validation <?php if($pn != 1){ echo "d-none"; } ?>" style="border:0px solid black;" method="post" action="<?php echo base_url(); ?>landing/checkPerson/step1" novalidate id="step1Form">
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
                                <button type="button" onclick="sendOtp(this)" class="btn btn-primary btn-style-five w-100 disabled-on-loading disabled"> Send OTP <i class="fa fa-arrow-circle-right"></i></button>
                            </div>
                            <div class="form-group col-12 mt-3 d-none" id="otpdiv">
                                <div class="form-floating form-group">
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
                        <form class="row g-3 needs-validation <?php if($pn != 2){ echo "d-none"; } ?>" method="post" action="<?php echo base_url(); ?>landing/checkPerson/step2" novalidate id="step2Form">
                            <?php 
                              $csrf = array(
                                'name' => $this->security->get_csrf_token_name(),
                                'hash' => $this->security->get_csrf_hash()
                                );
                            ?>
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <div class="pb-3">
                                <!--<h1>-->
                                <!--    <span style="font-weight:bold;color:red;font-size:large;">-->
                                <!--        Enter--->
                                <!--    </span>-->
                                <!--</h1>-->
                                <div class="form-group mb-0 col-12 px-0 form-floating" id="idTypeDiv">
                                    <select name="idType" class="form-control" style="appearance:auto!important;" id="idType" aria-label="Id Type" onchange="showInputAccordingly(this.value)">
                                        <option value="aadhar">Aadhaar</option>
                                        <option value="dl">Driving License</option>
                                        <option value="pan">PAN</option>
                                        <option value="voter">Voter Id</option>
                                        <option value="gold">Gold Jewellery HUID No.</option>
                                        <option value="vehicle">Vehicle No.</option>
                                    </select>
                                    <label for="idType" class="mb-3">Id Type <span class="text-danger">*</span></label>
                                </div>
                                <div id="aadharIdentity" class="mt-2 px-0">
                                    <div class="form-floating mt-3 pr-2 row mx-0">
                                        <input type="number" class="form-control" name="aadhar_id" max="12" min="12" onKeyUp="disabledButtonAccordingly(this.value,'aadhar')" onKeyPress="return checkLength(this.value,12)" id="aadharNumber" required placeholder="Aadhar Number" aria-describedby="step2CheckAadhar">
                                        <label for="aadharNumber" id="aadharLabel" class="pl-2">Enter Aadhaar No</label>
                                        <div class="invalid-feedback">Please enter aadhar number.</div>
                                    </div>
                                    <div class="row mt-3 mx-0" style="justify-content:space-evenly;text-align:center;">
                                        <div class="col-6 col-md-6 pl-2 d-none">
                                            <button class="btn btn-primary w-auto disabled-on-loading btn-style-red" style="background:black!important" id="btnAadharClear" type="button"> Back</button>  
                                        </div>
                                        <div class="col-6 px-0">
                                            <button class="btn btn-primary w-auto disabled-on-loading btn-style-grey disabled" id="step2CheckAadhar" type="button"> Search</button>  
                                        </div>
                                    </div>
                                </div>
                                <div id="panIdentity" class="mt-2 px-0 d-none">
                                    <div class="form-floating mt-3 pr-2 row mx-0">
                                        <input type="text" class="form-control text-uppercase" onKeyUp="disabledButtonAccordingly(this.value,'pan')" onKeyPress="return checkLength(this.value,10)" id="panNumber" required placeholder="PAN Number" aria-describedby="step2CheckPan">
                                        <label for="panNumber" id="panLabel" class="pl-2">Enter PAN No</label>
                                        <div class="invalid-feedback">Please enter PAN Number.</div>
                                    </div>
                                    <div class="row mt-3" style="justify-content:space-evenly;text-align:center;">
                                        <div class="col-6 col-md-6 pl-2 d-none">
                                            <button class="btn btn-primary w-auto disabled-on-loading btn-style-red" style="background:black!important" id="btnPanClear" type="button"> Back</button>  
                                        </div>
                                        <div class="col-6 px-0">
                                            <button class="btn btn-primary w-auto disabled-on-loading btn-style-green" id="step2CheckPan" type="button"> Search</button>  
                                        </div>
                                    </div>
                                </div>
                                <div id="voterIdentity" class="mt-2 px-0 d-none">
                                    <div class="form-floating mt-3 pr-2 row mx-0">
                                        <input type="text" class="form-control text-uppercase" id="voterId" required placeholder="Voter Number" aria-describedby="step2CheckVoter">
                                        <label for="voterId" id="voterLabel" class="pl-2">Enter Voter No</label>
                                        <div class="invalid-feedback">Please enter Voter Number.</div>
                                    </div>
                                    <div class="row mt-3" style="justify-content:space-evenly;text-align:center;">
                                        <div class="col-6 col-md-6 pl-2 d-none">
                                            <button class="btn btn-primary w-auto disabled-on-loading btn-style-red" style="background:black!important" id="btnVoterClear" type="button"> Back</button>  
                                        </div>
                                        <div class="col-6 px-0">
                                            <button class="btn btn-primary w-auto disabled-on-loading btn-style-green" id="step2CheckVoter" type="button"> Search</button>  
                                        </div>
                                    </div>
                                </div>
                                <div id="dlIdentity" class="mt-2 px-0 d-none">
                                    <div class="form-floating mt-3 pr-2 row mx-0">
                                        <input type="text" class="form-control text-uppercase" onKeyUp="disabledButtonAccordingly(this.value,'dl')" onKeyPress="return checkLength(this.value,15)" max="15" min="15" id="dlNumber" required placeholder="Driving License Number" aria-describedby="step2CheckDl">
                                        <label for="dlNumber" id="dlLabel" class="pl-2">Enter Driving License No</label>
                                        <div class="invalid-feedback">Please enter Driving License number.</div>
                                    </div>
                                    <div class="row mt-3" style="justify-content:space-evenly;text-align:center;">
                                        <div class="col-6 col-md-6 pl-2 d-none">
                                            <button class="btn btn-primary w-auto disabled-on-loading btn-style-red" style="background:black!important" id="btnDlClear" type="button"> Back</button>  
                                        </div>
                                        <div class="col-6 px-0">
                                            <button class="btn btn-primary w-auto disabled-on-loading btn-style-green" id="step2CheckDl" type="button"> Search</button>  
                                        </div>
                                    </div>
                                </div>
                                <div id="goldIdentity" class="mt-2 px-0 d-none">
                                    <div class="form-floating mt-3 pr-2 row mx-0">
                                        <input type="text" maxlength="6" class="form-control text-uppercase" id="huidNumber" required placeholder="Driving License Number" aria-describedby="step2CheckGold">
                                        <label for="huidNumber" id="huidLabel" class="pl-2">Enter Gold Jewellery HUID No</label>
                                    </div>
                                    <div class="row mt-3" style="justify-content:space-evenly;text-align:center;">
                                        <div class="col-6 px-0">
                                            <button class="btn btn-primary w-auto disabled-on-loading btn-style-green" id="step2CheckGold" type="button"> Search</button>  
                                        </div>
                                    </div>
                                </div>
                                <div id="vehicleIdentity" class="mt-2 px-0 d-none">
                                    <div class="form-floating mt-3 pr-2 row mx-0">
                                        <input type="text" maxlength="10" class="form-control text-uppercase" id="vehicleNumber" required placeholder="Driving License Number" aria-describedby="step2CheckVehicle">
                                        <label for="vehicleNumber" id="vehicleLabel" class="pl-2">Enter Vehicle No</label>
                                    </div>
                                    <div class="row mt-3" style="justify-content:space-evenly;text-align:center;">
                                        <div class="col-6 px-0">
                                            <button class="btn btn-primary w-auto disabled-on-loading btn-style-green" id="step2CheckVehicle" type="button"> Search</button>  
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" id="mainPhotoSelected" >
                            </div>
                        </form>
                    </div>
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
                        <canvas id="mobileimage" width="320" height="240"></canvas>
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
<div id="uploadimageModal" class="modal" data-bs-backdrop="static" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content" style="width:min-content;max-width:100%;">
        <div class="modal-body pt-0">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 text-center">
                <div id="image_demo" style="width:100%; margin-top:21px"></div>
            </div>
            <div class="col-6 text-end">
                <button type="button" class="btn btn-dark close1 save" style="background:black!important;color:white;" data-dismiss="modal">Back</button>
            </div>
            <div class="col-6 text-start">
                <button class="btn btn-success crop_image save">OK</button>
            </div>
        </div>
        </div>
     </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js" integrity="sha512-Gs+PsXsGkmr+15rqObPJbenQ2wB3qYvTHuJO6YJzPe/dTLvhy0fmae2BcnaozxDo5iaF8emzmCZWbQ1XXiX2Ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" integrity="sha512-2eMmukTZtvwlfQoG8ztapwAH5fXaQBzaMqdljLopRSA0i6YKM8kBAOrSSykxu9NN9HrtD45lIqfONLII2AFL/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        margin: 0 1rem!important;
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
    
    function disabledButtonAccordingly(val,type)
    {
        if(type == 'aadhar')
        {
            if(val.length == 12)
            {
                $('#step2CheckAadhar').addClass('btn-style-green').removeClass('disabled').removeClass('btn-style-grey');
            }else{
                $('#step2CheckAadhar').removeClass('btn-style-green').addClass('disabled').addClass('btn-style-grey');
            }
        }
        if(type == 'pan')
        {
            if(val.length == 10)
            {
                $('#step2CheckPan').addClass('btn-style-green').removeClass('disabled').removeClass('btn-style-grey');
            }else{
                $('#step2CheckPan').removeClass('btn-style-green').addClass('disabled').addClass('btn-style-grey');
            }
        }
        if(type == 'dl')
        {
            if(val.length == 15)
            {
                $('#step2CheckDl').addClass('btn-style-green').removeClass('disabled').removeClass('btn-style-grey');
            }else{
                $('#step2CheckDl').removeClass('btn-style-green').addClass('disabled').addClass('btn-style-grey');
            }
        }
    }
    
    $('.close1').click(function()
    {
        $('#uploadFile').val('');
        $('#mainPhotoUploaded').attr('src','<?php echo base_url(); ?>assets/img/noimage.jpg');
        $('#mainPhotoSelected').val('');
        $('#uploadimageModal').modal('hide');
        swal.close();
    })
    
    function redirectToStep2(type,id)
    {
        if(type)
        {
            window.open('<?php echo base_url(); ?>find-general-person?Id='+id,'_blank');
        }else{
            window.open('<?php echo base_url(); ?>landing/checkStep2','_blank');
        }
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
            if(idType == 'gold')
            {
                label = 'Gold HUID Number';
                if($('#huidNumber').val() != '')
                {
                    count = 1;
                    data.append('idNumber',$('#huidNumber').val());
                }
            }
            if(idType == 'vehicle')
            {
                label = 'Vehicle Number';
                if($('#vehicleNumber').val() != '')
                {
                    count = 1;
                    data.append('idNumber',$('#vehicleNumber').val());
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
                        $('.close1').click();
                        $('#btn3').removeAttr('disabled');
                        $('#btnInactiveSave').removeAttr('disabled');
                    }else if(result.isDismissed)
                    {
                        $('.close1').click();
                        $('#btn3').removeAttr('disabled');
                        $('#btnInactiveSave').removeAttr('disabled');
                    }
                })
            }else{
                data.append('photo',$('#mainPhotoSelected').val());
                $.ajax({
                    url:'<?php echo base_url(); ?>user/checkInactiveInfo',
                    data:data,
                    timeout: 60000,
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
                            window.open('<?php echo base_url(); ?>find-general-person?Id='+parse.id,'_blank');
                            location.reload();
                        }
                        else{
                            if(parse.status == 'error')
                            {
                                // $('.close1').click();
                                toastr.error(parse.message);
                                $('#btn3').removeAttr('disabled');
                                $('#btnInactiveSave').removeAttr('disabled');
                                $('#otpdiv').addClass('d-none');
                                $('#aadharNumber').attr('readonly',false);
                                $('#mobileNumber').attr('readonly',false);
                             }else{
                                let textMessage = '';
                                if(idType == 'aadhar')
                                {
                                    textMessage = 'Aadhar Number';
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
                                        $('.crop_image').removeAttr('disabled');
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
                                        $('#uploadimageModal').modal('hide');
                                        $('#btn3').removeAttr('disabled');
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
                    },
                    error: function(xhr, textStatus, errorThrown) {
                        if (textStatus == 'timeout') {
                            toastr.error('Please Try Again');
                            setTimeout(function()
                            {
                                location.reload();    
                            },2000);
                        }
                    }
                })
            }
        }else{
            toastr.error('Please capture the photo to continue');
            $('#btn3').removeAttr('disabled');
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
              height:500
            }
          });    
    }else{
        $image_crop = $('#image_demo').croppie({
            enableExif: true,
            viewport: {
              width:'300',
              height:400,
              type:'square' //circle
            },
            boundary:{
              width:'400',
              height:500
            }
          });
    }
    
    function nextInactive(ele)
    {
        $(ele).attr('disabled','disabled');
        $('#btnInactiveSave').click();
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
                            $('#mainPhotoUploaded').attr('src',response);
                            $('#mainPhotoSelected').val(response);
                            $('#element').show();
                            $('#uploadimageModal').modal('hide');
                            $('.nextBtnDiv').removeClass('d-none');
                            // $('#btnInactiveSave').click();
                           	// $('.crop_image').attr('disabled','disabled');
                            $('#uploadBtnDiv').addClass('d-none');
                            $('#retakebtndiv').removeClass('d-none');
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
        })
    });
    
    $('#fileMobInput').on('change',async function(e)
    {
        if($(this)[0].files.length > 0)
        {
            var reader = new FileReader();
            reader.onload = function (event) {
              $image_crop.croppie('bind', {
                url: event.target.result
              })
            }
            reader.readAsDataURL($(this)[0].files[0]);
            $('#uploadimageModal').modal('show');   
            swal.close();
        }
    })
    
    function showFileUpload(){
        $('#image_demo').croppie('destroy');
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
                  height:500
                }
              });    
        }else{
            $image_crop = $('#image_demo').croppie({
                enableExif: true,
                viewport: {
                  width:'300',
                  height:400,
                  type:'square' //circle
                },
                boundary:{
                  width:'400',
                  height:500
                }
              });
        }
        $('#uploadFile').click();
    }
    
    function previewFile(ele)
    {
        if($(ele)[0].files.length > 0)
        {
            var reader = new FileReader();
            reader.onload = function (event) {
              $image_crop.croppie('bind', {
                url: event.target.result
              }).then(function(){
                console.log('jQuery bind complete');
              });
            }
            reader.readAsDataURL($(ele)[0].files[0]);
            $('#uploadimageModal').modal('show');   
        }
    }
    
    <?php 
        $getInactiveSettings = $this->db->query('select * from settings where name="inactiveMode"')->result_array();
    ?>
    
    function openCameraPopup()
    {
        <?php 
            if($getInactiveSettings[0]['value'] == 1)
            {
        ?>
        Swal.fire({
            allowOutsideClick:false,
            html: '<div class="row mt-3 mx-0 justify-content-center"><div class="col-lg-10 col-md-6"><input type="file" hidden id="uploadFile" onchange="previewFile(this)" accept="image/*"><h5 class="text-center">Sample Photo</h5><img src="<?php echo base_url(); ?>assets/images/facematch.webp" style="width:100%;height:200px;"><input type="hidden" name="mainPhotoSelected" id="mainPhotoSelected"></div></div><div class="row mx-0 mt-3 justify-content-center" style="display:none" id="element"><div class="col-lg-10 col-md-6"><h5 class="text-center">Preview Photo</h5><img src="<?php echo base_url(); ?>assets/img/noimage.jpg" style="width:100%;height:200px;" id="mainPhotoUploaded"></div></div><div class="row mx-0 mt-3 justify-content-center" id="uploadBtnDiv"><div class="col-lg-10 col-md-6 text-center"><button type="button" class="btn w-100 btn-primary btn-style-four" id="uploadPhotoBtn" onclick="showFileUpload()">Upload Photo <i class="fa fa-upload"></i></button></div></div><div class="row mx-0 mt-4 mb-3 justify-content-center nextBtnDiv d-none"><div class="col-6 px-1 d-none" id="retakebtndiv"><button type="button" class="btn w-100 btn-primary btn-style-yellow" id="retakePhotoBtn" onclick="showFileUpload()">Retake <i class="fa fa-upload"></i></button></div><div class="col-lg-6 px-1 col-sm-12 col-6 col-md-6"><button type="button" id="btn3" onclick="nextInactive(this)" class="w-100 btn btn-primary btn-style-green disabled-on-loading"> Next <i class="fa fa-arrow-circle-right"></i></button></div></div>',
            showCloseButton: true,
            showCancelButton: false,
            focusConfirm: false,
            showConfirmButton:false,
        }).then((result) => {
            if(result.isDismissed)
            {
                $('#step2CheckAadhar').removeAttr('disabled');
                $('#step2CheckVoter').removeAttr('disabled');
                $('#step2CheckDl').removeAttr('disabled');
                $('#step2CheckPan').removeAttr('disabled');
                $('#step2CheckGold').removeAttr('disabled');
                $('#step2CheckVehicle').removeAttr('disabled');
            }
        })
        <?php }else{ ?>
        Swal.fire({
            iconHtml: '<img src="<?php echo base_url(); ?>assets/images/oops.png" style="height:200px;">',
            customClass: {
                icon: 'no-border'
            },
            allowOutsideClick:false,
            html: '<div class="row mt-3 mx-0 justify-content-center w-min-content"><div class="col-lg-12 col-md-12"><h6 style="color:red;font-weight:bold;">No More Information Enabled By the User !</h6></div><div class="row mt-3 mx-0 justify-content-center"><div class="col-lg-12 col-md-12"><a href="javascript:void(0)" onclick="location.reload();" class="btn btn-primary btn-style-primary"><i class="fa fa-search"></i> Search Another</a></div><div class="row mt-3 mx-0 justify-content-center"><div class="col-lg-12 col-md-12"><a href="<?php echo base_url(); ?>" class="btn btn-success save"><i class="fa fa-home"></i> Homepage</a></div>',
            showCloseButton: true,
            showCancelButton: false,
            focusConfirm: false,
            showConfirmButton:false,
        }).then((result) => {
            if(result.isDismissed)
            {
                $('#step2CheckAadhar').removeAttr('disabled');
                $('#step2CheckVoter').removeAttr('disabled');
                $('#step2CheckDl').removeAttr('disabled');
                $('#step2CheckPan').removeAttr('disabled');
                $('#step2CheckGold').removeAttr('disabled');
                $('#step2CheckVehicle').removeAttr('disabled');
            }
        })
        <?php } ?>
    }
    
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
                url:'<?php echo base_url(); ?>landing/checkPersonId',
                data:data,
                timeout: 60000,
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
                        if(parse.isLapata == 1)
                        {
                            typeLabel += '<b> Missing /</b>';
                        }else{
                            if(parse.isMissing == 1)
                            {
                                typeLabel += '<b> Missing /</b>';
                            }   
                        }
                        if(parse.isWanted)
                        {
                            typeLabel = '<b> Wanted /</b>';
                        }
                        typeLabel = (typeLabel.slice(0,typeLabel.length - 5)) + '</b>';
                        if(parse.isLapata != 1)
                        {
                            if(parse.isVisible == '1')
                            {
                                if(parse.isCriminal == 1)
                                {
                                    if(parse.isRegistered == 0 && parse.isMissing == 1)
                                    {
                                         let html = '';
                                         if(parse.isVerified == 1)
                                         {
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>landing/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>landing/criminalRecord" class="text-success" target="_blank" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
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
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
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
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>landing/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>',
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
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
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>landing/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>',
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })   
                                     }else{
                                         let html = '';
                                         if(parse.image != '')
                                         {
                                             html += '<div class="form-group mt-3 mb-0"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>';
                                         }
                                         html += '<div class="form-group mt-3 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>landing/criminalRecord" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
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
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                         if(parse.isVerified == 1)
                                         {
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
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
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
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
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                         Swal.fire({
                                            allowOutsideClick:false,
                                            html:
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>',
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
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
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                        Swal.fire({
                                            allowOutsideClick:false,
                                            html:
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>',
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
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
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>landing/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>landing/criminalRecord" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
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
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>landing/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>landing/criminalRecord" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
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
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>landing/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>',
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
                                             html += '<div class="form-group mt-3 mb-0"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>';
                                         }
                                         html += '<div class="form-group mt-3 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>landing/criminalRecord" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
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
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                         if(parse.isVerified == 1)
                                         {
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+((typeLabel == '') ? 'd-none' : '')+'"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
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
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                         if(parse.isVerified == 1)
                                         {
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
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
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                        Swal.fire({
                                            allowOutsideClick:false,
                                            html:
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>',
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
                        }else{
                            let html = '';
                             if(parse.isVerified == 1)
                             {
                                 html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>landing/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2 '+((parse.address != ',') ? '' : 'd-none')+'"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
                             }else{
                                 html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>landing/criminalRecord" class="text-success" target="_blank" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age Band:- </b>'+parse.age+'</label></div><div class="form-group mb-2 '+((parse.address != ',') ? '' : 'd-none')+'"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
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
                                    location.href="<?php echo base_url(); ?>landing/checkStep2";
                                }else if(result.isDismissed)
                                {
                                    location.reload();
                                }
                            })
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
                                if(parse.status == 'unknown')
                                {
                                    let html = '';
                                    if(parse.isUserFound == 1)
                                    {
                                        html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.photo+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">APPEAL FOR IDENTIFICATION</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadharNumber+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2(0,``)"> Click Here</button></div>';
                                    }else{
                                        html = '<div class="form-group"><img src="'+parse.photo+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">APPEAL FOR IDENTIFICATION</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadharNumber+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age Band :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2(0,``)"> Click Here</button></div>';
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
                                            location.href="<?php echo base_url(); ?>landing/checkStep2";
                                        }else if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
                                    })
                                }else{
                                    let textMessage = '';
                                    if(idType == 'aadhar')
                                    {
                                        textMessage = 'Aadhar Number';
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
                                    if(!parse.isAadharCorrect)
                                    {
                                        Swal.fire({
                                            title: '<strong style="font-size:1rem;color:red;"><span style="color:black;">Oops! No Record Found</span><br>'+(textMessage + '- ' + $('#aadharNumber').val())+'</strong>',
                                            iconHtml: '<img src="<?php echo base_url(); ?>assets/images/oops.png" style="height:200px;">',
                                            customClass: {
                                                icon: 'no-border',
                                                title:'px-2'
                                            },
                                            allowOutsideClick:false,
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            confirmButtonText:'Please Try Again',
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
                },
                error: function(xhr, textStatus, errorThrown) {
                    if (textStatus == 'timeout') {
                        toastr.error('Please Try Again');
                        setTimeout(function()
                        {
                            location.reload();    
                        },2000);
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
                url:'<?php echo base_url(); ?>landing/checkPersonId',
                data:data,
                timeout: 60000,
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
                        if(parse.isLapata == 1)
                        {
                            typeLabel += '<b> Missing /</b>';
                        }else{
                            if(parse.isMissing == 1)
                            {
                                typeLabel += '<b> Missing /</b>';
                            }   
                        }
                        if(parse.isWanted)
                        {
                            typeLabel = '<b> Wanted /</b>';
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
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>landing/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>landing/criminalRecord" class="text-success" target="_blank" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
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
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
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
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>landing/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>',
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
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
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>landing/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>',
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })   
                                     }else{
                                         let html = '';
                                         if(parse.image != '')
                                         {
                                             html += '<div class="form-group mt-3 mb-0"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>';
                                         }
                                         html += '<div class="form-group mt-3 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>landing/criminalRecord" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
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
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                         if(parse.isVerified == 1)
                                         {
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
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
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
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
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                         Swal.fire({
                                            allowOutsideClick:false,
                                            html:
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>',
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
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
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                        Swal.fire({
                                            allowOutsideClick:false,
                                            html:
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>',
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
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
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>landing/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>landing/criminalRecord" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
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
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>landing/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>landing/criminalRecord" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
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
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>landing/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>',
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
                                             html += '<div class="form-group mt-3 mb-0"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>';
                                         }
                                         html += '<div class="form-group mt-3 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>landing/criminalRecord" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
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
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                         if(parse.isVerified == 1)
                                         {
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+((typeLabel == '') ? 'd-none' : '')+'"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
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
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                         if(parse.isVerified == 1)
                                         {
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
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
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                        Swal.fire({
                                            allowOutsideClick:false,
                                            html:
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>',
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
                        }else{
                            let html = '';
                             if(parse.isVerified == 1)
                             {
                                 html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>landing/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2 '+((parse.address != ',') ? '' : 'd-none')+'"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
                             }else{
                                 html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>landing/criminalRecord" class="text-success" target="_blank" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age Band :- </b>'+parse.age+'</label></div><div class="form-group mb-2 '+((parse.address != ',') ? '' : 'd-none')+'"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
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
                                    location.href="<?php echo base_url(); ?>landing/checkStep2";
                                }else if(result.isDismissed)
                                {
                                    location.reload();
                                }
                            })
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
                            if(parse.status == 'unknown')
                            {
                                let html = '';
                                if(parse.isUserFound == 1)
                                {
                                    html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.photo+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">APPEAL FOR IDENTIFICATION</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadharNumber+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2(0,``)"> Click Here</button></div>';
                                }else{
                                    html = '<div class="form-group"><img src="'+parse.photo+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">APPEAL FOR IDENTIFICATION</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadharNumber+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age Band :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2(0,``)"> Click Here</button></div>';
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
                                        location.href="<?php echo base_url(); ?>landing/checkStep2";
                                    }else if(result.isDismissed)
                                    {
                                        location.reload();
                                    }
                                })
                            }else{
                                let textMessage = '';
                                if(idType == 'aadhar')
                                {
                                    textMessage = 'Aadhar Number';
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
                                if(!parse.isAadharCorrect)
                                {
                                    Swal.fire({
                                        title: '<strong style="font-size:1rem;color:red;"><span style="color:black;">Oops! No Record Found</span><br>'+(textMessage + '- ' + $('#dlNumber').val().toUpperCase())+'</strong>',
                                        iconHtml: '<img src="<?php echo base_url(); ?>assets/images/oops.png" style="height:200px;">',
                                        customClass: {
                                            icon: 'no-border',
                                            title:'px-2'
                                        },
                                        allowOutsideClick:false,
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        confirmButtonText:'Please Try Again',
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
                },
                error: function(xhr, textStatus, errorThrown) {
                    if (textStatus == 'timeout') {
                        toastr.error('Please Try Again');
                        setTimeout(function()
                        {
                            location.reload();    
                        },2000);
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
                url:'<?php echo base_url(); ?>landing/checkPersonId',
                data:data,
                timeout: 60000,
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
                        if(parse.isLapata == 1)
                        {
                            typeLabel += '<b> Missing /</b>';
                        }else{
                            if(parse.isMissing == 1)
                            {
                                typeLabel += '<b> Missing /</b>';
                            }   
                        }
                        if(parse.isWanted)
                        {
                            typeLabel = '<b> Wanted /</b>';
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
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>landing/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>landing/criminalRecord" class="text-success" target="_blank" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
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
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
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
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>landing/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>',
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
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
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>landing/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>',
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })   
                                     }else{
                                         let html = '';
                                         if(parse.image != '')
                                         {
                                             html += '<div class="form-group mt-3 mb-0"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>';
                                         }
                                         html += '<div class="form-group mt-3 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>landing/criminalRecord" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
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
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                         if(parse.isVerified == 1)
                                         {
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
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
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
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
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                         Swal.fire({
                                            allowOutsideClick:false,
                                            html:
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>',
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
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
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                        Swal.fire({
                                            allowOutsideClick:false,
                                            html:
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>',
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
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
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>landing/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>landing/criminalRecord" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
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
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>landing/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>landing/criminalRecord" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
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
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>landing/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>',
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
                                             html += '<div class="form-group mt-3 mb-0"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>';
                                         }
                                         html += '<div class="form-group mt-3 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>landing/criminalRecord" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
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
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                         if(parse.isVerified == 1)
                                         {
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+((typeLabel == '') ? 'd-none' : '')+'"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
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
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                         if(parse.isVerified == 1)
                                         {
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
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
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                        Swal.fire({
                                            allowOutsideClick:false,
                                            html:
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>',
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
                        }else{
                            let html = '';
                             if(parse.isVerified == 1)
                             {
                                 html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>landing/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2 '+((parse.address != ',') ? '' : 'd-none')+'"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
                             }else{
                                 html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>landing/criminalRecord" class="text-success" target="_blank" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age Band:- </b>'+parse.age+'</label></div><div class="form-group mb-2 '+((parse.address != ',') ? '' : 'd-none')+'"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
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
                                    location.href="<?php echo base_url(); ?>landing/checkStep2";
                                }else if(result.isDismissed)
                                {
                                    location.reload();
                                }
                            })
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
                            if(parse.status == 'unknown')
                            {
                                let html = '';
                                if(parse.isUserFound == 1)
                                {
                                    html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.photo+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">APPEAL FOR IDENTIFICATION</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadharNumber+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2(0,``)"> Click Here</button></div>';
                                }else{
                                    html = '<div class="form-group"><img src="'+parse.photo+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">APPEAL FOR IDENTIFICATION</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadharNumber+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age Band :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2(0,``)"> Click Here</button></div>';
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
                                        location.href="<?php echo base_url(); ?>landing/checkStep2";
                                    }else if(result.isDismissed)
                                    {
                                        location.reload();
                                    }
                                })
                            }else{
                                let textMessage = '';
                                if(idType == 'aadhar')
                                {
                                    textMessage = 'Aadhar Number';
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
                                if(!parse.isAadharCorrect)
                                {
                                    Swal.fire({
                                        title: '<strong style="font-size:1rem;color:red;"><span style="color:black;">Oops! No Record Found</span><br>'+(textMessage + '- ' + $('#voterId').val().toUpperCase())+'</strong>',
                                        iconHtml: '<img src="<?php echo base_url(); ?>assets/images/oops.png" style="height:200px;">',
                                        customClass: {
                                            icon: 'no-border',
                                            title:'px-2'
                                        },
                                        allowOutsideClick:false,
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        confirmButtonText:'Please Try Again',
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
                },
                error: function(xhr, textStatus, errorThrown) {
                    if (textStatus == 'timeout') {
                        toastr.error('Please Try Again');
                        setTimeout(function()
                        {
                            location.reload();    
                        },2000);
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
                url:'<?php echo base_url(); ?>landing/checkPersonId',
                data:data,
                timeout: 60000,
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
                        if(parse.isLapata == 1)
                        {
                            typeLabel += '<b> Missing /</b>';
                        }else{
                            if(parse.isMissing == 1)
                            {
                                typeLabel += '<b> Missing /</b>';
                            }   
                        }
                        if(parse.isWanted)
                        {
                            typeLabel = '<b> Wanted /</b>';
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
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>landing/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>landing/criminalRecord" class="text-success" target="_blank" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
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
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
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
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>landing/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>',
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
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
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>landing/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>',
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })   
                                     }else{
                                         let html = '';
                                         if(parse.image != '')
                                         {
                                             html += '<div class="form-group mt-3 mb-0"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>';
                                         }
                                         html += '<div class="form-group mt-3 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>landing/criminalRecord" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
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
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                         if(parse.isVerified == 1)
                                         {
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
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
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
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
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                         Swal.fire({
                                            allowOutsideClick:false,
                                            html:
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>',
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
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
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                        Swal.fire({
                                            allowOutsideClick:false,
                                            html:
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>',
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
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
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>landing/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>landing/criminalRecord" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
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
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>landing/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>landing/criminalRecord" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
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
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>landing/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>',
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
                                     }else{
                                         let html = '';
                                         if(parse.image != '')
                                         {
                                             html += '<div class="form-group mt-3 mb-0"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>';
                                         }
                                         html += '<div class="form-group mt-3 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>landing/criminalRecord" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
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
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                         if(parse.isVerified == 1)
                                         {
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+((typeLabel == '') ? 'd-none' : '')+'"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
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
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                         if(parse.isVerified == 1)
                                         {
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
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
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                        Swal.fire({
                                            allowOutsideClick:false,
                                            html:
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>',
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
                        }else{
                            let html = '';
                             if(parse.isVerified == 1)
                             {
                                 html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>landing/criminalRecord" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2 '+((parse.address != ',') ? '' : 'd-none')+'"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
                             }else{
                                 html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>landing/criminalRecord" class="text-success" target="_blank" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age Band:- </b>'+parse.age+'</label></div><div class="form-group mb-2 '+((parse.address != ',') ? '' : 'd-none')+'"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
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
                                    location.href="<?php echo base_url(); ?>landing/checkStep2";
                                }else if(result.isDismissed)
                                {
                                    location.reload();
                                }
                            })
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
                            if(parse.status == 'unknown')
                            {
                                let html = '';
                                if(parse.isUserFound == 1)
                                {
                                    html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.photo+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">APPEAL FOR IDENTIFICATION</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadharNumber+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2(0,``)"> Click Here</button></div>';
                                }else{
                                    html = '<div class="form-group"><img src="'+parse.photo+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">APPEAL FOR IDENTIFICATION</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadharNumber+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age Band :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2(0,``)"> Click Here</button></div>';
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
                                        location.href="<?php echo base_url(); ?>landing/checkStep2";
                                    }else if(result.isDismissed)
                                    {
                                        location.reload();
                                    }
                                })
                            }else{
                                let textMessage = '';
                                if(idType == 'aadhar')
                                {
                                    textMessage = 'Aadhar Number';
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
                                if(!parse.isAadharCorrect)
                                {
                                    Swal.fire({
                                        title: '<strong style="font-size:1rem;color:red;"><span style="color:black;">Oops! No Record Found</span><br>'+(textMessage + '- ' + $('#panNumber').val().toUpperCase())+'</strong>',
                                        iconHtml: '<img src="<?php echo base_url(); ?>assets/images/oops.png" style="height:200px;">',
                                        customClass: {
                                            icon: 'no-border',                                             title:'px-2'
                                        },
                                        allowOutsideClick:false,
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        confirmButtonText:'Please Try Again',
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
                },
                error: function(xhr, textStatus, errorThrown) {
                    if (textStatus == 'timeout') {
                        toastr.error('Please Try Again');
                        setTimeout(function()
                        {
                            location.reload();    
                        },2000);
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
            $('#vehicleNumber').removeAttr('name');
            $('#huidNumber').removeAttr('name');
            
            $('#aadharNumber').attr('required',false);
            $('#voterIdentity').addClass('d-none');
            $('#voterId').attr('required',false);
            $('#panIdentity').addClass('d-none');
            $('#panNumber').attr('required',false);
            $('#dlIdentity').addClass('d-none');
            $('#dlNumber').attr('required',false);
            $('#goldIdentity').addClass('d-none');
            $('#huidNumber').attr('required',false);
            $('#vehicleIdentity').addClass('d-none');
            $('#vehicleNumber').attr('required',false);
        }
        if(val == 'aadhar')
        {
            $('#aadharIdentity').removeClass('d-none');
            
            $('#panNumber').removeAttr('name');
            $('#voterId').removeAttr('name');
            $('#dlNumber').removeAttr('name');
            $('#aadharNumber').attr('name','aadhar_id');
            $('#vehicleNumber').removeAttr('name');
            $('#huidNumber').removeAttr('name');
            
            $('#aadharNumber').attr('required',true);
            $('#voterIdentity').addClass('d-none');
            $('#voterId').attr('required',false);
            $('#panIdentity').addClass('d-none');
            $('#panNumber').attr('required',false);
            $('#dlIdentity').addClass('d-none');
            $('#dlNumber').attr('required',false);
            $('#goldIdentity').addClass('d-none');
            $('#huidNumber').attr('required',false);
            $('#vehicleIdentity').addClass('d-none');
            $('#vehicleNumber').attr('required',false);
        }
        if(val == 'voter')
        {
            $('#aadharIdentity').addClass('d-none');
            
            $('#panNumber').removeAttr('name');
            $('#voterId').attr('name','voterId');
            $('#dlNumber').removeAttr('name');
            $('#aadharNumber').removeAttr('name');
            $('#vehicleNumber').removeAttr('name');
            $('#huidNumber').removeAttr('name');
            
            $('#aadharNumber').attr('required',false);
            $('#voterIdentity').removeClass('d-none');
            $('#voterId').attr('required',true);
            $('#panIdentity').addClass('d-none');
            $('#panNumber').attr('required',false);
            $('#dlIdentity').addClass('d-none');
            $('#dlNumber').attr('required',false);
            $('#goldIdentity').addClass('d-none');
            $('#huidNumber').attr('required',false);
            $('#vehicleIdentity').addClass('d-none');
            $('#vehicleNumber').attr('required',false);
        }
        if(val == 'pan')
        {
            $('#panNumber').attr('name','panNumber');
            $('#voterId').removeAttr('name');
            $('#dlNumber').removeAttr('name');
            $('#aadharNumber').removeAttr('name');
            $('#vehicleNumber').removeAttr('name');
            $('#huidNumber').removeAttr('name');
            
            $('#aadharIdentity').addClass('d-none');
            $('#aadharNumber').attr('required',true);
            $('#voterIdentity').addClass('d-none');
            $('#voterId').attr('required',false);
            $('#panIdentity').removeClass('d-none');
            $('#panNumber').attr('required',true);
            $('#dlIdentity').addClass('d-none');
            $('#dlNumber').attr('required',false);
            $('#goldIdentity').addClass('d-none');
            $('#huidNumber').attr('required',false);
            $('#vehicleIdentity').addClass('d-none');
            $('#vehicleNumber').attr('required',false);
        }
        if(val == 'dl')
        {
            $('#panNumber').removeAttr('name');
            $('#voterId').removeAttr('name');
            $('#dlNumber').attr('name','dlNumber');
            $('#aadharNumber').removeAttr('name');
            $('#vehicleNumber').removeAttr('name');
            $('#huidNumber').removeAttr('name');
            $('#aadharIdentity').addClass('d-none');
            $('#aadharNumber').attr('required',true);
            $('#voterIdentity').addClass('d-none');
            $('#voterId').attr('required',false);
            $('#panIdentity').addClass('d-none');
            $('#panNumber').attr('required',false);
            $('#dlIdentity').removeClass('d-none');
            $('#dlNumber').attr('required',true);
            $('#goldIdentity').addClass('d-none');
            $('#huidNumber').attr('required',false);
            $('#vehicleIdentity').addClass('d-none');
            $('#vehicleNumber').attr('required',false);
        }
        if(val == 'gold')
        {
            $('#panNumber').removeAttr('name');
            $('#huidNumber').attr('name','huidNumber');
            $('#vehicleNumber').removeAttr('name');
            $('#voterId').removeAttr('name');
            $('#dlNumber').attr('name','dlNumber');
            $('#aadharNumber').removeAttr('name');
            
            $('#aadharIdentity').addClass('d-none');
            $('#aadharNumber').attr('required',false);
            $('#voterIdentity').addClass('d-none');
            $('#voterId').attr('required',false);
            $('#panIdentity').addClass('d-none');
            $('#panNumber').attr('required',false);
            $('#dlIdentity').addClass('d-none');
            $('#dlNumber').attr('required',false);
            $('#goldIdentity').removeClass('d-none');
            $('#huidNumber').attr('required',true);
            $('#vehicleIdentity').addClass('d-none');
            $('#vehicleNumber').attr('required',false);
        }
        if(val == 'vehicle')
        {
            $('#panNumber').removeAttr('name');
            $('#voterId').removeAttr('name');
            $('#dlNumber').removeAttr('name');
            $('#aadharNumber').removeAttr('name');
            $('#vehicleNumber').attr('name','vehicleNumber');
            $('#huidNumber').removeAttr('name');
            
            $('#aadharIdentity').addClass('d-none');
            $('#aadharNumber').attr('required',true);
            $('#voterIdentity').addClass('d-none');
            $('#voterId').attr('required',false);
            $('#panIdentity').addClass('d-none');
            $('#panNumber').attr('required',false);
            $('#dlIdentity').addClass('d-none');
            $('#dlNumber').attr('required',false);
            $('#goldIdentity').addClass('d-none');
            $('#huidNumber').attr('required',false);
            $('#vehicleIdentity').removeClass('d-none');
            $('#vehicleNumber').attr('required',true);
        }
    }
    
    function showOtpAccordingly(val)
    {
        if(val.length == 10)
        {
            $('#sendOtpDiv button').removeClass('disabled');
        }else{
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
                url:'<?php echo base_url(); ?>landing/resendCheckOtp',
                data:data,
                timeout: 60000,
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
                },
                error: function(xhr, textStatus, errorThrown) {
                    if (textStatus == 'timeout') {
                        toastr.error('Please Try Again');
                        setTimeout(function()
                        {
                            location.reload();    
                        },2000);
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
                url:'<?php echo base_url(); ?>landing/sendCheckOtp',
                data:data,
                timeout: 60000,
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
                },
                error: function(xhr, textStatus, errorThrown) {
                    if (textStatus == 'timeout') {
                        toastr.error('Please Try Again');
                        setTimeout(function()
                        {
                            location.reload();    
                        },2000);
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
                timeout: 60000,
                contentType: false,
                cache: false,
                processData:false,
                type:'post',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    if(parse.status == 'success')
                    {
                        location.href="<?php echo base_url(); ?>landing/checkPerson?pn=2";   
                    }else{
                        toastr.error(parse.message);
                        $('#otp').val('');
                        $('#btn1').removeAttr('disabled');
                    }
                },
                error: function(xhr, textStatus, errorThrown) {
                    if (textStatus == 'timeout') {
                        toastr.error('Please Try Again');
                        setTimeout(function()
                        {
                            location.reload();    
                        },2000);
                    }
                }
            });   
        }else{
            return false;
        }
    })
    
    $('#step2CheckVehicle').click(function()
    {
        $('#step2CheckVehicle').attr('disabled','disabled');
        let data = new FormData();
        let idType = $('#idType').val();
        let label = '';
        let count = 0;
        data.append('idType',$('#idType').val());   
        label = 'Vehicle Number';
        if($('#vehicleNumber').val() != '')
        {
            count = 1;
            data.append('idNumber',$('#vehicleNumber').val());
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
                    $('#step2CheckVehicle').removeAttr('disabled');
                }else if(result.isDismissed)
                {
                    $('#step2CheckVehicle').removeAttr('disabled');
                }
            })
        }else{
            $.ajax({
                url:'<?php echo base_url(); ?>landing/checkPersonId',
                data:data,
                processData:false,
                timeout: 60000,
                cache:false,
                contentType:false,
                type:'post',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    let idType = $('#idType').val();
                    if(parse.status == 'success')
                    {   
                        $('#step2CheckVehicle').removeAttr('disabled');
                        window.open('<?php echo base_url(); ?>landing/checkStep2','_blank');
                    }
                    else{
                        if(parse.status == 'error')
                        {
                            toastr.error(parse.message);
                            $('#step2CheckVehicle').removeAttr('disabled');
                            $('#otpdiv').addClass('d-none');
                            $('#aadharNumber').attr('readonly',false);
                            $('#mobileNumber').attr('readonly',false);
                        }
                        else if(parse.status == 'incorrect')
                        {
                            $('#step2CheckVehicle').removeAttr('disabled');
                            //alert('Something Went Wrong.');
                            toastr.error('Something Went Wrong Please Try Again !');
                        }
                        else
                        {
                            if(parse.status == 'unknown')
                            {
                                $('#step2CheckVehicle').removeAttr('disabled');
                                window.open('<?php echo base_url(); ?>landing/checkStep2','_blank');
                            }else{
                                let textMessage = '';
                                if(idType == 'aadhar')
                                {
                                    textMessage = 'Aadhar Number';
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
                                if(idType == 'vehicle')
                                {
                                    textMessage = 'Vehicle Number';
                                }
                                if(idType == 'gold')
                                {
                                    textMessage = 'Huid Number';
                                }
                                if(!parse.isAadharCorrect)
                                {
                                    Swal.fire({
                                        title: '<strong style="font-size:1rem;color:red;"><span style="color:black;">Oops! No Record Found</span><br>'+(textMessage + '- ' + $('#vehicleNumber').val().toUpperCase())+'</strong>',
                                        iconHtml: '<img src="<?php echo base_url(); ?>assets/images/oops.png" style="height:200px;">',
                                        customClass: {
                                            icon: 'no-border',                                             title:'px-2'
                                        },
                                        allowOutsideClick:false,
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        confirmButtonText:'Please Try Again',
                                        showConfirmButton:true
                                    }).then((result) => {
                                        $('#step2CheckVehicle').removeAttr('disabled');
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
                                        if(idType == 'vehicle')
                                        {
                                            $('#vehicleNumber').attr('readonly',false);   
                                        }
                                        if(idType == 'gold')
                                        {
                                            $('#huidNumber').attr('readonly',false);   
                                        }
                                    })
                                }   
                             }
                        }
                    }
                },
                error: function(xhr, textStatus, errorThrown) {
                    if (textStatus == 'timeout') {
                        toastr.error('Please Try Again');
                        setTimeout(function()
                        {
                            location.reload();    
                        },2000);
                    }
                }
            })
        }
    })
    
    $('#step2CheckGold').click(function()
    {
        $('#step2CheckGold').attr('disabled','disabled');
        let data = new FormData();
        let idType = $('#idType').val();
        let label = '';
        let count = 0;
        data.append('idType',$('#idType').val());   
        label = 'Gold HUID Number';
        if($('#huidNumber').val() != '')
        {
            count = 1;
            data.append('idNumber',$('#huidNumber').val());
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
                    $('#step2CheckGold').removeAttr('disabled');
                }else if(result.isDismissed)
                {
                    $('#step2CheckGold').removeAttr('disabled');
                }
            })
        }else{
            $.ajax({
                url:'<?php echo base_url(); ?>landing/checkPersonId',
                data:data,
                timeout: 60000,
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
                        $('#step2CheckGold').removeAttr('disabled');
                        window.open('<?php echo base_url(); ?>landing/checkStep2','_blank');
                    }
                    else{
                        if(parse.status == 'error')
                        {
                            toastr.error(parse.message);
                            $('#step2CheckGold').removeAttr('disabled');
                            $('#otpdiv').addClass('d-none');
                            $('#aadharNumber').attr('readonly',false);
                            $('#mobileNumber').attr('readonly',false);
                        }
                        else if(parse.status == 'incorrect')
                        {
                            $('#step2CheckGold').removeAttr('disabled');
                            //alert('Something Went Wrong.');
                            toastr.error('Something Went Wrong Please Try Again !');
                        }
                        else
                        {
                            if(parse.status == 'unknown')
                            {
                                $('#step2CheckGold').removeAttr('disabled');
                                window.open('<?php echo base_url(); ?>landing/checkStep2','_blank');
                            }else{
                                let textMessage = '';
                                if(idType == 'aadhar')
                                {
                                    textMessage = 'Aadhar Number';
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
                                if(idType == 'vehicle')
                                {
                                    textMessage = 'Vehicle Number';
                                }
                                if(idType == 'gold')
                                {
                                    textMessage = 'Huid Number';
                                }
                                if(!parse.isAadharCorrect)
                                {
                                    Swal.fire({
                                        title: '<strong style="font-size:1rem;color:red;"><span style="color:black;">Oops! No Record Found</span><br>'+(textMessage + '- ' + ($('#huidNumber').val()).toUpperCase())+'</strong>',
                                        iconHtml: '<img src="<?php echo base_url(); ?>assets/images/oops.png" style="height:200px;">',
                                        customClass: {
                                            icon: 'no-border',
                                            title:'px-2'
                                        },
                                        allowOutsideClick:false,
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        confirmButtonText:'Please Try Again',
                                        showConfirmButton:true
                                    }).then((result) => {
                                        $('#step2CheckGold').removeAttr('disabled');
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
                                        if(idType == 'vehicle')
                                        {
                                            $('#vehicleNumber').attr('readonly',false);   
                                        }
                                        if(idType == 'gold')
                                        {
                                            $('#huidNumber').attr('readonly',false);   
                                        }
                                    })
                                }   
                             }    
                        }
                    }
                },
                error: function(xhr, textStatus, errorThrown) {
                    if (textStatus == 'timeout') {
                        toastr.error('Please Try Again');
                        setTimeout(function()
                        {
                            location.reload();    
                        },2000);
                    }
                }
            })
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
function shareLap(ele,appNo)
{
    if (navigator.share) {
        let url = '';
        url = '<?php echo base_url(); ?>find-missing-person?id='+appNo;
        navigator.share({
          title: 'Khoji',
          url: url
        }).then(() => {
          toastr.success('Thanks for sharing!');
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
</script>