<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .border-radius-50{
        border-radius:50%!important;
    }
    div:where(.swal2-container) div:where(.swal2-popup){
        width:auto;
    }
    #swal2-html-container{
        margin: 0 0rem!important;
    }
    .btn{
        border:0!important;
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
        width: 25px;
        height: 30px;
        /*padding-bottom: 22px;*/
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
</style>
<style>
    @media only screen and (max-width: 600px) {
 .imgae_display{
      display: none;
 }
}
</style>
<div class="container">

<section class="section register min-vh-70 d-flex flex-column align-items-center justify-content-center py-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-xl-4 px-0 col-md-8 d-flex flex-column align-items-center justify-content-center">
                <div class="my-4 py-0 px-0 px-md-3 w-100" style="border:3px solid black;">
                    <div class="card-body p-0 border-0">
                        <div class="pb-0">
                            <h6 class="card-title text-center pb-0 pt-2" style="font-size:1.2rem!important"><span style="font-size:1rem!important;font-weight:600;color:blue;">FILL DETAILS TO COMPLETE <br> YOUR ACCOUNT</span></h6>
                        </div>
                        <?php 
                            $getUserDetail = $this->db->query('select * from digilockerUser where digilockerId="'.$_SESSION['digilockerid'].'"')->result_array();
                        ?>
                        <div class="row my-3 justify-content-center align-items-center">
                            <div class="col-auto text-end">
                                <img src="<?= base_url(); ?><?= $getUserDetail[0]['aadharPhoto']; ?>" style="height:110px;width:110px;border:4px solid black;border-radius:50%;">
                            </div>
                            <div class="col-auto">
                                <h6 class="text-start" style="color:green;">WELCOME <br> <?= $getUserDetail[0]['Name']; ?></h6>
                            </div>
                        </div>
                        <p class="text-center mb-0" style="color:black;font-weight:bold;font-size:small;">Your Aadhaar number (XXXX - XXXX - <?= substr($getUserDetail[0]['maskedAadhar'],'-4'); ?>)</p>
                        <div class="form-floating input-group mb-3 col-auto px-2">
                            <input type="number" class="form-control text-capitalize" style="font-weight:bold;color:black;border-right:0;" name="aadharNumber" onkeydown="limit(this,'aadhar');" onkeyup="limit(this,'aadhar');" id="aadharNumber" required placeholder="XXXX XXXX XXXX">
                            <label for="aadharNumber" style="font-weight:bold;">RE-ENTER FULL AADHAAR No.</label>
                        </div>
                        <div class="form-group mb-4 col-auto px-2">
                            <button type="button" onclick="getRegistered('aadhar')" class="btn btn-default btn-style-grey disabled w-100 disabled-on-loading" id="btnaadharNext"> Continue &nbsp;<i class="fa fa-arrow-circle-right"></i></button>
                        </div>
                        <div class="mb-3 col-auto mobileDiv d-none">
                            <h6 class="text-center" style="color:blue;font-size:0.8rem;">Please Add Mobile Number for login...</h6>
                        </div>
                        <div class="px-2 form-floating mb-3 col-auto mobileDiv d-none">
                            <input type="number" class="form-control text-capitalize" style="font-weight:bold;color:black;border-right:0;" name="mobileNumber" onkeydown="limit(this,'mobile');" onkeyup="limit(this,'mobile');" id="mobileNumber" required placeholder="XXXX XXXX XXXX">
                            <label for="mobileNumber" style="font-weight:bold;color:black;">ENTER YOUR MOBILE No.</label>
                        </div>
                        <div class="px-2 form-group mb-4 col-auto mobileDiv d-none">
                            <button type="button" onclick="getRegistered('mobile')" class="btn btn-default btn-style-grey disabled w-100 disabled-on-loading" id="btnmobileNext"> GET OTP &nbsp;<i class="fa fa-arrow-circle-right"></i></button>
                        </div>
                        <h6 class="otpdiv d-none message text-success"></h6>
                        <div class="px-2 form-floating form-group mb-3 col-auto otpdiv d-none">
                            <input type="number" class="form-control" onkeydown="limit(this,'otp')" onkeyup="limit(this,'otp')" id="otp">
                            <label for="otp">ENTER - OTP</label>
                        </div>
                        <div class="px-2 form-group mb-4 col-auto otpdiv d-none">
                            <button type="button" onclick="getRegistered('otp')" class="btn btn-default btn-style-grey disabled w-100 disabled-on-loading" id="btnotpNext"> Verify OTP &nbsp;<i class="fa fa-arrow-circle-right"></i></button>
                        </div>
                        <div class="form-group me-3 mb-4 col-md-5 col-auto ms-auto otpdiv d-none text-end">
                            <button type="button" onclick="resendOtp(this)" class="btn btn-default btn-style-five w-auto disabled-on-loading"> Resend OTP &nbsp;<i class="fa fa-arrow-circle-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</div>
<script type="text/javascript">

    function resendOtp(ele)
    {
        $(ele).attr('disabled','disabled');
        let data= new FormData();
        data.append('mobile',$('#mobileNumber').val());
        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        data.append('digiId','<?= $getUserDetail[0]['Id']; ?>');
        $.ajax({
            url:'<?php echo base_url(); ?>landing/sendDigiOtp',
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
                    toastr.success(parse.msg);
                    $(ele).removeAttr('disabled');
                }else{
                    toastr.error('Something Went Wrong');
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
    }
    
    function getRegistered(type)
    {
        if(type == 'aadhar')
        {
            let aadhar = $('#aadharNumber').val();
            if(aadhar.length == 12)
            {
                $('#btnaadharNext').attr('disabled',true);
                let data= new FormData();
                data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                data.append('aadhar',aadhar);
                data.append('digiId','<?= $getUserDetail[0]['Id']; ?>');
                $.ajax({
                    url:'<?php echo base_url(); ?>landing/get_digi_short_details',
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
                            $('#aadharNumber').attr('readonly',true);
                            $('#btnaadharNext').parent().addClass('d-none');
                            $('.mobileDiv').removeClass('d-none');
                        }else{
                            if(parse.status == 'already')
                            {
                                Swal.fire({
                                    iconHtml: '<img src="'+parse.aadharPhoto+'" style="height:100%;border-radius:50%;width:100px;">',
                                    title:'<strong style="font-size:1rem;color:black;">Hello, '+parse.name+'</strong>',
                                    customClass: {
                                        icon: 'border-radius-50',
                                        popup:'pb-2',
                                        htmlContainer:'px-0',
                                        title:'pt-0',
                                        actions:'mt-0'
                                    },
                                    allowOutsideClick:false,
                                    html: '<div class="row mt-1 mx-0 justify-content-center" style="width:15em;"><div class="col-lg-12 col-md-12"><h6 style="color:red;font-weight:bold;">You are already a registered user.</h6></div>',
                                    showCloseButton: false,
                                    showCancelButton: false,
                                    showConfirmButton:true,
                                    focusConfirm: true,
                                    confirmButtonText: 'Continue <i class="fa fa-arrow-circle-right"></i>',
                                }).then(() => {
                                    location.href="<?= base_url(); ?>login";
                                })
                            }else{
                                toastr.error(parse.message);
                                $('#btnaadharNext').attr('disabled',false);   
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
            }else{
                toastr.error("Please enter 12 digit Aadhaar Number");
            }   
        }else{
            if(type == 'mobile')
            {
                let mobile = $('#mobileNumber').val();
                if(mobile.length == 10)
                {
                    $('#btnmobileNext').attr('disabled',true);
                    let data= new FormData();
                    data.append('mobile',mobile);
                    data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                    data.append('digiId','<?= $getUserDetail[0]['Id']; ?>');
                    $.ajax({
                        url:'<?php echo base_url(); ?>landing/sendDigiOtp',
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
                                toastr.success(parse.msg);
                                $('.mobileDiv').addClass('d-none');
                                $('#mobileNumber').parent().removeClass('d-none');
                                $('#btnmobileNext').removeAttr('disabled');
                                $('.otpdiv').removeClass('d-none');
                                $('#mobileNumber').attr('readonly',true);
                            }else{
                                toastr.error('Something Went Wrong');
                                $('#btnmobileNext').removeAttr('disabled');
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
                    toastr.error("Please enter 10 digit Mobile Number");
                }   
            }else{
                let otp = $('#otp').val();
                if(otp.length == 4)
                {
                    $('#btnotpNext').attr('disabled',true);
                    let data= new FormData();
                    data.append('mobile',$('#mobileNumber').val());
                    data.append('aadhar',$('#aadharNumber').val());
                    data.append('otp',$('#otp').val());
                    data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                    data.append('digiId','<?= $getUserDetail[0]['Id']; ?>');
                    $.ajax({
                        url:'<?php echo base_url(); ?>landing/verifyDigiOtp',
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
                                if($('#aadharNumber').val() == '534471189527' || $('#aadharNumber').val() == '407174335143')
                                {
                                    Swal.fire({
                                        icon: 'success',
                                        html:'<h6 class="text-success px-4">CONGRATULATIONS ! <br> YOUR ACCOUNT CREATED SUCCESSFULLY</h6><h6 style="color:black;">Your Username is: - '+parse.username+'</h6>',
                                        allowOutsideClick:false,
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        confirmButtonText:'Please Try Again',
                                        focusConfirm: false,
                                        showConfirmButton:false
                                    });
                                }else{
                                    Swal.fire({
                                        icon: 'success',
                                        html:'<h6 class="text-success px-4">CONGRATULATIONS ! <br> YOUR ACCOUNT CREATED SUCCESSFULLY</h6>',
                                        allowOutsideClick:false,
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        confirmButtonText:'Please Try Again',
                                        focusConfirm: false,
                                        showConfirmButton:false
                                    });
                                }
                                setTimeout(function()
                                {
                                    if($('#aadharNumber').val() == '534471189527' || $('#aadharNumber').val() == '407174335143')
                                    {
                                        location.href="<?= base_url(); ?>user-dashboard";
                                    }else{
                                        location.href="<?= base_url(); ?>user-dashboard";   
                                    }
                                },3000);
                            }else{
                                toastr.error(parse.message);
                                $('#btnotpNext').removeAttr('disabled');
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
                    toastr.error("Please enter 4 digit OTP");
                }
            }
        }
    }
    
    function redirectToLogin()
    {
        location.href="<?= base_url(); ?>login";
    }

    function showPassword()
    {
        const $div = $('#aadharNumber');
        if ($div.attr('type') == 'text') {
            $('.fa-eye').addClass('fa-eye-slash').removeClass('fa-eye');
            $div.attr('type','password');
        } else {
            $('.fa-eye-slash').addClass('fa-eye').removeClass('fa-eye-slash');
            $div.attr('type','text');
        }
    }

    function limit(val,type){
        if(type == 'aadhar')
        {
            toastr.remove();
            if ($.isNumeric(val.value)) {
                var max_chars = 11;
                if(val.value.length > max_chars) {
                    val.value = val.value.substr(0, (max_chars + 1));
                    $('#btnaadharNext').removeClass('btn-style-grey').addClass('btn-style-five');
                    $('#btnaadharNext').removeClass('disabled');
                }else{
                    $('#btnaadharNext').addClass('btn-style-grey').removeClass('btn-style-five');
                    $('#btnaadharNext').addClass('disabled');
                }   
            } else {
                if(val.value != '')
                toastr.error("Only Numbers Allowed");
                val.value = '';
                $('#btnaadharNext').addClass('btn-style-grey').removeClass('btn-style-five');
                $('#btnaadharNext').addClass('disabled');
            }
        }else{
            if(type == 'otp')
            {
                var max_chars = 3;
                if(val.value.length > max_chars) {
                    $('#btnotpNext').removeClass('btn-style-grey').addClass('btn-style-green');
                    $('#btnotpNext').removeClass('disabled');
                    val.value = val.value.substr(0, (max_chars + 1));
                }else{
                    $('#btnotpNext').addClass('btn-style-grey').removeClass('btn-style-green');
                    $('#btnotpNext').addClass('disabled');
                }
            }else{
                toastr.remove();
                if ($.isNumeric(val.value)) {
                    var max_chars = 9;
                    if(val.value.length > max_chars) {
                        $('#btnmobileNext').removeClass('btn-style-grey').addClass('btn-style-five');
                        $('#btnmobileNext').removeClass('disabled');
                        val.value = val.value.substr(0, (max_chars + 1));
                    }else{
                        $('#btnmobileNext').addClass('btn-style-grey').removeClass('btn-style-five');
                        $('#btnmobileNext').addClass('disabled');
                    }   
                } else {
                    if(val.value != '')
                    toastr.error("Only Numbers Allowed");
                    val.value = '';
                    $('#btnmobileNext').addClass('btn-style-grey').removeClass('btn-style-five');
                    $('#btnmobileNext').addClass('disabled');
                }   
            }
        }
    }
</script>