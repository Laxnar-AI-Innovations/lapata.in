<style>
    div:where(.swal2-container) div:where(.swal2-popup){
        width:auto;
    }
    
    #swal2-html-container{
        margin: 0 0rem!important;
        padding:0.5rem!important;
    }
    
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

<section class="section register d-flex flex-column align-items-center justify-content-center pb-0">
    <div class="container">
        <div class="row text-center mt-3">
            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                <h5><b>Search Vehicle Details</b></h5>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="px-md-15 px-lg-3">
                    <figure class="mb-6"><img class="img-fluid" src="assets_landing_page/img/illustrations/search_vehicle.png" srcset="assets_landing_page/img/illustrations/search_vehicle.png" alt=""></figure>
                </div>
            </div>
            <div class="col-lg-4 px-0 col-md-6 d-flex flex-column align-items-center justify-content-center">
                <div class="card mb-3 pb-1 pt-1 w-100">
                    <div class="card-body pb-0">
                        <form class="row g-3 p-0 needs-validation <?php if($pn != 1){ echo "d-none"; } ?>" style="border:0px solid black;" method="post" action="<?php echo base_url(); ?>landing/searchVehicle/step1" novalidate id="step1Form">
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
                        <form class="row g-3 needs-validation <?php if($pn != 2){ echo "d-none"; } ?>" method="post" action="<?php echo base_url(); ?>user/searchVehicle/step2" novalidate id="step2Form">
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
                                    <h5 class="card-title text-decoration-underline text-center pb-0 pt-0">Search Vehicle Details</h5>
                                </div>
                                <div class="form-floating form-group mb-0 mt-3 col-12 px-0" id="idTypeDiv">
                                    <select name="idType" class="form-select" id="idType" aria-label="Select Id Type">
                                        <option value="">Select Vehicle Type</option>
                                        <?php 
                                            $getVehicleType = $this->db->query('select * from vehicle_type')->result_array();
                                            foreach($getVehicleType as $k=>$v)
                                            {
                                        ?>
                                        <option value="<?php echo $v['vehicleType'] ?>"><?php echo $v['vehicleType']; ?></option>
                                        <?php } ?>
                                    </select>
                                    <label for="idType" id="vehicleTypeLabel">Select Vehicle Type</label>
                                </div>
                                <div class="form-floating form-group mb-0 mt-3 col-12 px-0" id="searchTypeDiv">
                                    <select name="searchType" class="form-select" id="searchType" aria-label="Search By" onchange="showInputAccordingly(this,this.value)">
                                        <option value="">Search By</option>
                                        <option value="vehicleNumber">Vehicle No.</option>
                                        <option value="chassisNumber">Chassis No.</option>
                                        <option value="engineNumber">Engine No.</option>
                                    </select>
                                    <label for="searchType" id="searchLabel">Search By</label>
                                </div>
                                <div id="numberIdentity" class="mt-2 px-0 d-none">
                                    <div class="form-floating mt-3 pr-2 row mx-0">
                                        <input type="text" class="form-control text-uppercase" id="idNumber" placeholder="Enter Number" onKeyUp="showSearchAccordingly(this.value)">
                                        <label for="idNumber" id="idLabel" class="pl-2">Enter Number</label>
                                        <div class="invalid-feedback">Please enter Number</div>
                                    </div>
                                    <div class="row mt-3 mx-0" style="justify-content:space-evenly;text-align:center;">
                                        <!--<div class="col-6 col-md-6 pl-2">-->
                                        <!--    <button class="btn btn-primary w-auto disabled-on-loading btn-style-red" style="background:black!important" id="btnClear" type="button"> Clear</button>  -->
                                        <!--</div>-->
                                        <div class="col-6 px-0">
                                            <button class="btn btn-primary w-auto disabled-on-loading btn-style-grey disabled" id="step2Check" type="button"> Search</button>  
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
                        <button id="click-photo" class="w-100 btn btn-primary btn-style-five">Capture Photo <i class='fa fa-camera fa-spin'></i></button>
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
                    <div class="col-lg-6 col-sm-12 col-6 px-1 col-md-6 text-center d-none mb-3" id="retake">
                        <button id="retake-photo" class="w-100 btn btn-dark btn-style-yellow" style="background:black!important;color:white!important;">Retake <i class='fa fa-camera fa-spin'></i></button>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-6 px-1 col-md-6 text-center d-none mb-3" id="retakeMobile">
                        <button id="retake-mobile" class="w-100 btn btn-dark btn-style-yellow" onclick="openCamera()" style="background:black!important;color:white!important;">Retake <i class='fa fa-camera fa-spin'></i></button>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-6 px-1 col-md-6 text-center mb-3">
                        <button id="btnInactiveSave" class="w-100 btn btn-danger btn-style-red disabled-on-loading"> Search <i class='fa fa-search'></i></button>
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
    
    $('#btnClear').click(function()
    {
        $('#step2Form')[0].reset();
        $('#step2Check').removeAttr('disabled');
        $('#idNumber').attr('readonly',false);
        $('#idTypeDiv').removeClass('d-none');
        $('#numberIdentity').addClass('d-none');
        $('#idNumber').removeAttr('name');
        $('#idNumber').attr('required',false);
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
            $('#btnInactiveSave').attr('disabled','disabled');
            let data = new FormData();
            let idType = $('#searchType').val();
            let label = '';
            let count = 0;
            data.append('vehicleType',$('#idType').val());   
            data.append('searchType',$('#searchType').val());   
            if(idType == 'vehicleNumber')
            {
                label = 'Vehicle Number';
                if($('#idNumber').val() != '')
                {
                    count = 1;
                    
                    data.append('idNumber',$('#idNumber').val());   
                }
            }
            if(idType == 'engineNumber')
            {
                label = 'Engine Number';
                if($('#idNumber').val() != '')
                {
                    count = 1;
                    data.append('idNumber',$('#idNumber').val());
                }
            }
            if(idType == 'chassisNumber')
            {
                label = 'Chasis Number';
                if($('#idNumber').val() != '')
                {
                    count = 1;
                    data.append('idNumber',$('#idNumber').val());
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
                    url:'<?php echo base_url(); ?>user/checkInactiveVehicleId',
                    data:data,
                    processData:false,
                    cache:false,
                    contentType:false,
                    type:'post',
                    success:function(res)
                    {
                        let parse = JSON.parse(res);
                        let idType = $('#searchType').val();
                        if(parse.status == 'success')
                        {
                            location.href="<?php echo base_url(); ?>landing/checkVehicle2";
                        }
                        else{
                            if(parse.status == 'error')
                            {
                                toastr.error(parse.message);
                                $('#btnInactiveSave').removeAttr('disabled');
                                $('#idNumber').attr('readonly',false);
                                $('#searchType').attr('readonly',false);
                                $('#idType').attr('readonly',false);
                             }else{
                                let textMessage = '';
                                if(idType == 'vehicleNumber')
                                {
                                    textMessage = 'Vehicle Number';
                                }
                                if(idType == 'engineNumber')
                                {
                                    textMessage = 'Engine Number';
                                }
                                if(idType == 'chassisNumber')
                                {
                                    textMessage = 'Chassis Number';
                                }
                                if(!parse.isAadharCorrect)
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
                                        showSearchAccordingly('');
                                        $('#btnInactiveSave').removeAttr('disabled');
                                        $('#idNumber').val('');
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
    
    function redirectToStep2()
    {
        window.open('<?php echo base_url(); ?>landing/checkVehicle2','_blank');
    }
    
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
                $('#step2Check').removeAttr('disabled');
            }
        })   
    }
    
    $('#step2Check').click(function()
    {
        $('#step2Check').attr('disabled','disabled');
        let data = new FormData();
        let idType = $('#searchType').val();
        let label = '';
        let count = 0;
        if($('#idType').val() != '')
        {
            data.append('vehicleType',$('#idType').val());   
            data.append('searchType',$('#searchType').val());   
            if(idType == 'vehicleNumber')
            {
                label = 'Vehicle Number';
                if($('#idNumber').val() != '')
                {
                    count = 1;
                    
                    data.append('idNumber',$('#idNumber').val());   
                }
            }
            if(idType == 'engineNumber')
            {
                label = 'Engine Number';
                if($('#idNumber').val() != '')
                {
                    count = 1;
                    data.append('idNumber',$('#idNumber').val());
                }
            }
            if(idType == 'chassisNumber')
            {
                label = 'Chasis Number';
                if($('#idNumber').val() != '')
                {
                    count = 1;
                    data.append('idNumber',$('#idNumber').val());
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
                        $('#step2Check').removeAttr('disabled');
                    }else if(result.isDismissed)
                    {
                        $('#step2Check').removeAttr('disabled');
                    }
                })
            }else{
                $.ajax({
                    url:'<?php echo base_url(); ?>user/checkVehicleId',
                    data:data,
                    processData:false,
                    cache:false,
                    contentType:false,
                    type:'post',
                    success:function(res)
                    {
                        let parse = JSON.parse(res);
                        let idType = $('#searchType').val();
                        if(parse.status == 'success')
                        {
                            if(parse.isVisible == '1')
                            {
                                if(parse.isRegistered == 0 && parse.isMissing == 1)
                                {
                                     let html = '';
                                     if(parse.isVerified == 1)
                                     {
                                         html = '<div class="form-group my-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3 text-danger"><label class="form-label  style="font-size:16px!important;"><b style="color:black;">Vehicle No. :- </b>'+parse.vehicleNumber+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">OWNER NAME :- </b>'+parse.personName+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">City :- </b>'+parse.city+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">State :- </b>'+parse.state+'</label></div><div class="form-group mb-3"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-3"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
                                     }else{
                                         html = '<div class="form-group my-3 text-danger"><label class="form-label text-danger text-uppercase" style="font-size:16px!important;"><b>Vehicle No :- </b>'+parse.vehicleNumber+'</label></div><div class="form-group mb-3  text-uppercase"><label class="form-label" style="font-size:16px!important;"> <b style="color:black;">OWNER NAME :- </b>'+parse.personName+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">City :- </b>'+parse.city+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">State :- </b>'+parse.state+'</label></div><div class="form-group mb-3"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-3"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
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
                                            location.href="<?php echo base_url(); ?>landing/checkVehicle2";
                                        }else if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
                                    })
                                 }else if(parse.isRegistered == 1 && parse.isMissing == 0)
                                 {
                                     Swal.fire({
                                        allowOutsideClick:false,
                                        html:'<div class="form-group my-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3 text-success"><label class="form-label text-success text-uppercase" style="font-size:16px!important;"><b>Vehicle No. :- </b>'+parse.vehicleNumber+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">OWNER NAME :- </b>'+parse.personName+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">City :- </b>'+parse.city+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">State :- </b>'+parse.state+'</label></div><div class="form-group mb-3"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-3"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>',
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:false
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            location.href="<?php echo base_url(); ?>landing/checkVehicle2";
                                        }else if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
                                    })
                                 }else if(parse.isRegistered == 1 && parse.isMissing == 1)
                                 {
                                    Swal.fire({
                                        allowOutsideClick:false,
                                        html:'<div class="form-group my-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3 text-danger"><label class="form-label text-danger text-uppercase" style="font-size:16px!important;color:black"><b>Vehicle No. :- </b>'+parse.vehicleNumber+'</label></div><div class="form-group mb-3  text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">OWNER Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">City :- </b>'+parse.city+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">State :- </b>'+parse.state+'</label></div><div class="form-group mb-3"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-3"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>',
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:false
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            location.href="<?php echo base_url(); ?>landing/checkVehicle2";
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
                                         html = '<div class="form-group my-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3 text-danger text-uppercase"><label class="form-label text-danger" style="font-size:16px!important;"><b>Vehicle No. :- </b>'+parse.vehicleNumber+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">OWNER NAME :- </b>'+parse.personName+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">City :- </b>'+parse.city+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">State :- </b>'+parse.state+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                     }else{
                                         html = '<div class="form-group my-3 text-danger"><label class="form-label text-danger text-uppercase" style="font-size:16px!important;"><b>Vehicle No. :- </b>'+parse.vehicleNumber+'</label></div><div class="form-group mb-3 text-danger"><label class="form-label text-uppercase" style="font-size:16px!important;"><b style="color:black;">OWNER NAME :- </b>'+parse.personName+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">City :- </b>'+parse.city+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">State :- </b>'+parse.state+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
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
                                         html = '<div class="form-group my-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3 text-success text-uppercase"><label class="form-label text-success" style="font-size:16px!important;"><b>Vehicle No. :- </b>'+parse.vehicleNumber+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"> <b style="color:black;">OWNER NAME :- </b>'+parse.personName+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">City :- </b>'+parse.city+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">State :- </b>'+parse.state+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                     }else{
                                         html = '<div class="form-group my-3 text-danger"><label class="form-label text-danger text-uppercase" style="font-size:16px!important;"><b>Vehicle No. :- </b>'+parse.vehicleNumber+'</label></div><div class="form-group mb-3 text-success text-uppercase"><label class="form-label" style="font-size:16px!important;"> <b style="color:black;">OWNER NAME :- </b>'+parse.personName+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">City :- </b>'+parse.city+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">State :- </b>'+parse.state+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                     }
                                     Swal.fire({
                                        allowOutsideClick:false,
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
                                 }else if(parse.isRegistered == 1 && parse.isMissing == 1)
                                 {
                                     let html= '';
                                    if(parse.isVerified == 1)
                                    {
                                        html = '<div class="form-group my-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3 text-danger"><label class="form-label text-danger text-uppercase" style="font-size:16px!important;"><b>Vehicle No. :- </b>'+parse.vehicleNumber+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">OWNER NAME :- </b>'+parse.personName+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">City :- </b>'+parse.city+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">State :- </b>'+parse.state+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                    }else{
                                         html = '<div class="form-group my-3 text-danger"><label class="form-label text-danger text-uppercase" style="font-size:16px!important;"><b>Vehicle No. :- </b>'+parse.vehicleNumber+'</label></div><div class="form-group mb-3 text-danger text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">OWNER NAME :- </b>'+parse.personName+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">City :- </b>'+parse.city+'</label></div><div class="form-group mb-3 text-uppercase"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">State :- </b>'+parse.state+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                    }
                                    Swal.fire({
                                        allowOutsideClick:false,
                                        html:html,
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
                                 }   
                            }
                        }
                        else{
                            if(parse.status == 'error')
                            {
                                toastr.error(parse.message);
                                $('#step2Check').removeAttr('disabled');
                                $('#idNumber').attr('readonly',false);
                                $('#searchType').attr('readonly',false);
                                $('#idType').attr('readonly',false);
                             }else{
                                let textMessage = '';
                                if(idType == 'vehicleNumber')
                                {
                                    textMessage = 'Vehicle Number';
                                }
                                if(idType == 'engineNumber')
                                {
                                    textMessage = 'Engine Number';
                                }
                                if(idType == 'chassisNumber')
                                {
                                    textMessage = 'Chassis Number';
                                }
                                if(!parse.isAadharCorrect)
                                {
                                    Swal.fire({
                                        title: '<strong style="font-size:1rem;color:red;"><span style="color:black;">Oops! No Record Found</span><br>'+(textMessage + '- ' + $('#idNumber').val())+'</strong>',
                                        iconHtml: '<img src="<?php echo base_url(); ?>assets/images/oops.png" style="height:150px;">',
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
                                        showSearchAccordingly('');
                                        $('#step2Check').removeAttr('disabled');
                                        $('#idNumber').val('');
                                    })
                                }
                            }
                        }
                    }
                })
            }   
        }else{
            Swal.fire({
                title: '<strong class="text-danger" style="font-size:20px;">Select Vehicle Type</strong>',
                icon: 'error',
                allowOutsideClick:false,
                showCloseButton: true,
                showCancelButton: false,
                focusConfirm: false,
                showConfirmButton:true
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#step2Check').removeAttr('disabled');
                }else if(result.isDismissed)
                {
                    $('#step2Check').removeAttr('disabled');
                }
            })
        }
    })
    
    $('#idNumber').on('keypress', function(e) {
        if (e.which == 32){
            return false;
        }
    });
    
    function showSearchAccordingly(val)
    {
        if(val.length > 0)
        {
            $('#step2Check').removeClass('disabled');
            $('#step2Check').addClass('btn-style-green').removeClass('btn-style-grey');
        }else{
            $('#step2Check').addClass('disabled');
            $('#step2Check').addClass('btn-style-grey').removeClass('btn-style-green');
        }
    }
    
    function showInputAccordingly(ele,val)
    {
        if(val == '')
        {
            $('#searchLabel').html($('#searchType option:selected').text());
            $('#numberIdentity').addClass('d-none');
            $('#idNumber').removeAttr('name');
            $('#idNumber').attr('required',false);
        }
        if(val == 'vehicleNumber')
        {
            $('#numberIdentity').removeClass('d-none');
            $('#idNumber').attr('name','idNumber');
            $('#idNumber').attr('required',true);
            $('#idLabel').html('Enter Vehicle Number');
        }
        if(val == 'chassisNumber')
        {
            $('#numberIdentity').removeClass('d-none');
            $('#idNumber').attr('name','idNumber');
            $('#idNumber').attr('required',true);
            $('#idLabel').html('Enter Chassis Number');
        }
        if(val == 'engineNumber')
        {
            $('#numberIdentity').removeClass('d-none');
            $('#idNumber').attr('name','idNumber');
            $('#idNumber').attr('required',true);
            $('#idLabel').html('Enter Engine Number');
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
                url:'<?php echo base_url(); ?>user/resendCheckVehicleOtp',
                data:data,
                contentType: false,
                cache: false,
                processData:false,
                type:'post',
                success:function(res)
                {
                    $('#otp').val('');
                    toastr.success('OTP Sent Successfully');
                    $(ele).removeAttr('disabled');
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
                url:'<?php echo base_url(); ?>user/sendCheckVehicleOtp',
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
                        location.href="<?php echo base_url(); ?>landing/searchVehicle?pn=2";   
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