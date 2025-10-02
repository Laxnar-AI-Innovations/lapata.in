<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
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
         <div class="col-lg-6 col-xl-<?= isset($_SESSION['landingMob']) ? '5' : '4' ?> col-6 imgae_display">
            
            <img class="img-fluid" src="assets_landing_page/img/illustrations/13246824_5191079.jpg" srcset="assets_landing_page/img/illustrations/13246824_5191079.jpg 2x" alt="">
          </div>
        <div class="col-lg-6 col-xl-<?= isset($_SESSION['landingMob']) ? '4' : '5' ?> col-md-6 d-flex flex-column align-items-center justify-content-center">
            <div class="card my-4 p-3 w-100">
            
            <div class="card-body p-1">
                <div class="pb-2">
                <h5 class="card-title text-center pb-0 pt-2" style="font-size:1.2rem!important"><span style="font-size:1.2rem!important;font-weight:500;color:#63b881">Login</span> to Your Account</h5>
              </div>

              <div class="form-group row justify-content-center g-3">
                    <div class="col-sm-12 col-md-12 col-lg-<?= isset($_SESSION['landingMob']) ? 'auto' : '4' ?> mb-3">
                        <input class="radio-custom" type="radio" name="logintype" id="loginaadhar" checked value="aadhar">
                        <label class="radio-custom-label" for="loginaadhar">
                          Aadhaar No.
                        </label>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4 text-right mb-3">
                        <input class="radio-custom" type="radio" name="logintype" id="loginmobile" value="mobile">
                        <label class="radio-custom-label" for="loginmobile">
                          Mobile
                        </label>
                    </div>
                </div>
                <div id="aadhardiv">
                    <div class="form-floating mb-3 col-auto">
                      <input type="number" class="form-control" style="font-weight:bold;color:black;" name="aadharNumber" onkeydown="limit(this,'aadhar');" onkeyup="limit(this,'aadhar');" id="aadharNumber" required placeholder="Aadhar Number">
                      <label for="aadharNumber">Enter - Aadhar Number</label>
                      <div class="invalid-feedback">Please enter your aadhar number.</div>
                    </div>
                    <div class="form-group col-auto">
                        <button type="button" onclick="getRegistered('aadhar')" class="btn btn-default btn-style-grey disabled w-100" id="btnaadharNext">Next <i class="fa fa-arrow-circle-right"></i></button>
                    </div>
                    <div class="col-auto d-none" id="mobileaadhardiv">
                        <div class="form-floating mb-3">
                            <select name="aadharmobileNumber" style="font-weight:bold;color:black;" class="form-select" id="aadharmobileNumber" aria-label="Select Mobile Number" onchange="toggleSendOtp(this.value)">
                                <option selected>Select Mobile Number</option>
                            </select>
                            <label for="aadharmobileNumber">Mobile Number</label>
                            <div class="invalid-feedback">Please enter your Mobile Number.</div>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-md-12 mt-3 d-none" id="aadharotpdiv">
                            <button type="button" class="w-100 btn btn-style-grey disabled-on-loading disabled" onclick="showOtp(this)"> Send OTP</button>
                        </div>
                    </div>
                </div>
                <div id="mobilediv" class="d-none">
                    <div class="form-floating mb-3 col-auto">
                      <input type="number" class="form-control" style="font-weight:bold;color:black;" onkeydown="limit(this,'mobile');" onkeyup="limit(this,'mobile');" name="mobile" id="mobile" placeholder="Mobile Number">
                      <label for="mobile">Enter - Mobile Number</label>
                      <div class="invalid-feedback">Please enter your username.</div>
                    </div>
                    <div class="form-group col-auto">
                        <button type="button" onclick="getRegistered('mobile')" class="btn btn-default btn-style-grey w-100 disabled" id="btnmobileNext">Next <i class="fa fa-arrow-circle-right"></i></button>
                    </div>
                    <div class="col-auto d-none" id="mobilemobilediv">
                        <div class="form-floating mb-3">
                            <select name="mobilemobileNumber" style="font-weight:bold;color:black;" class="form-select" id="mobilemobileNumber" aria-label="Select Mobile Number" onchange="toggleSendOtp(this.value)">
                                <option selected value="">Select Mobile Number</option>
                            </select>
                            <label for="mobilemobileNumber">Mobile Number</label>
                            <div class="invalid-feedback">Please enter your Mobile Number.</div>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-md-12 mt-3 d-none" id="mobileotpdiv">
                            <button type="button" class="w-100 btn btn-style-grey disabled-on-loading disabled" onclick="showOtp(this)"> Send OTP</button>
                        </div>
                    </div>
                </div>

                <div class="form-group col-auto mt-3 d-none" id="otpdiv">
                    <form action="<?php echo base_url(); ?>user/digilogin/do_login" method="post" class="row gy-3 gx-0 needs-validation" novalidate id="loginform">
                        <?php 
                          $csrf = array(
                            'name' => $this->security->get_csrf_token_name(),
                            'hash' => $this->security->get_csrf_hash()
                            );
                        ?>
                        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                        <input type="hidden" name="basename" id="basename" value="<?= $lasturl; ?>">
                        <input type="hidden" id="clickedOn" value="<?php echo (isset($_GET['clickedOn']) ? $_GET['clickedOn'] : ''); ?>">
                        <input type="hidden" name="type" id="type">
                        <input type="hidden" name="typeval" id="typeval">
                        <div class="form-floating mb-3">
                          <input type="number" onkeydown="limit(this,'otp');" onkeyup="limit(this,'otp');" class="form-control" name="otp" id="otp" placeholder="Enter 4 digit OTP">
                          <label for="otp">Enter 4 digit OTP</label>
                        </div>
                        <button class="btn btn-success w-100 disabled-on-loading btn-style-green" id="btnSubmit" type="submit"> Login <i class="bi bi-box-arrow-in-right"></i></button>
                        
                        <div class="row px-0 mx-0 mt-5" style="justify-content:right;">
                            <div class="col-md-auto col-sm-12 px-0" style="text-align:right;">
                                <button type="button" onclick="resendOtp(this)" class="btn btn-primary btn-style-five w-100 disabled-on-loading" > Resend OTP <i class="bi bi-bootstrap-reboot"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <?php 
                    if(isset($_GET['clickedOn']) && $_GET['clickedOn'] == 'missing')
                    {
                ?>
                <div class="col-auto mt-5">
                  <p class="mb-2">Don't have account? <a href="<?php echo base_url(); ?>digilockerLogin?clickedOn=missing">Create an account</a></p>
                </div>
                <?php }else{ ?>
                <div class="col-auto mt-5">
                  <p class="mb-2">Don't have account? <a href="<?php echo base_url(); ?>digilockerLogin">Create an account</a></p>
                </div>
                <?php } ?>
                <!--<div class="col-auto" style="text-align:left;">-->
                <!--  <p class="small mb-0">Want to check person detail? <a href="<?php echo base_url(); ?>user/checkPerson">Check Person Detail</a></p>-->
                <!--</div>-->

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
        $('#otp').val('');
        $(ele).attr('disabled','disabled');
        if($('#'+$('#type').val()+'mobileNumber').val() != '')
        {
            let data= new FormData();
            data.append('mobile',$('#'+$('#type').val()+'mobileNumber').val());
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            data.append('type',$('#type').val());
            data.append('typeval',$('#typeval').val());
            $.ajax({
                url:'<?php echo base_url(); ?>user/sendDigiLoginOtp',
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
                        $('#otpdiv').removeClass('d-none');
                    }else{
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
            toastr.error('Please Select Mobile Number');
        }
    }

    $('#loginform').on('submit',function(e)
    {
        let arr = $(this).serializeArray();
        e.preventDefault();
        if(arr[3].value == '')
        {
            toastr.error('Please Enter Aadhar/ Username/Mobile Value');
            return false;
        }
        else if(arr[3].value == '')
        {
            toastr.error('Please Enter OTP');
            return false;   
        }else{
            $('#btnSubmit').attr('disabled','disabled');
            let data = new FormData(this);
            data.append('mobile',$('#'+$('#type').val()+'mobileNumber').val());
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
                        toastr.success(parse.message);
                        setTimeout(function()
                        {
                            <?php 
                                if(isset($_GET['clickedOn']) && $_GET['clickedOn'] == 'unknown')
                                {
                            ?>
                            if($('#type').val() == 'mobile')
                            {
                                location.href="<?php echo base_url(); ?>digilockerUser/upload_unknown_details";   
                            }else{
                                location.href="<?php echo base_url(); ?>digilockerUser/upload_unknown_details";   
                            }
                            <?php
                                }
                                else if(isset($_GET['clickedOn']) && $_GET['clickedOn'] == 'missing')
                                {
                            ?>
                            if(parse.finalverification == 'success')
                            {
                                if($('#type').val() == 'mobile')
                                {
                                    location.href="<?php echo base_url(); ?>digilockerUser/lapata_login";   
                                }else{
                                    location.href="<?php echo base_url(); ?>digilockerUser/lapata_login";   
                                }
                            }else{
                                if($('#type').val() == 'mobile')
                                {
                                    location.href="<?php echo base_url(); ?>digilockerUser/profile";   
                                }else{
                                    location.href="<?php echo base_url(); ?>digilockerUser/profile";
                                }
                            }
                            <?php }else{ ?>
                            if(parse.finalverification == 'success')
                            {
                                if(parse.lasturl != 'check-step-2-updated')
                                {
                                    if(parse.lasturl != 'checkVehicle2')
                                    {
                                        if(parse.lasturl.includes('find-missing-person') || parse.lasturl.includes('find-lapata-person') || parse.lasturl.includes('find-general-person'))
                                        {
                                            location.href="<?php echo base_url(); ?>"+parse.lasturl;            
                                        }else{
                                            if(parse.lasturl.includes('check-person-results'))
                                            {
                                                location.href="<?php echo base_url(); ?>check-person-results";         
                                            }else{
                                                if($('#clickedOn').val() == '')
                                                {
                                                    if($('#type').val() == 'mobile')
                                                    {
                                                        location.href="<?php echo base_url(); ?>digilocker-dashboard";   
                                                    }else{
                                                        location.href="<?php echo base_url(); ?>digilocker-dashboard";   
                                                    }
                                                }else{
                                                    if($('#type').val() == 'mobile')
                                                    {
                                                        if($('#clickedOn').val() == 'missing')
                                                        {
                                                            location.href="<?php echo base_url(); ?>digilockerUser/lapta_person_after_login";               
                                                        }else{
                                                            location.href="<?php echo base_url(); ?>digilockerUser/unknown_person_filter_after_login";            
                                                        }
                                                    }else{
                                                        if($('#clickedOn').val() == 'missing')
                                                        {
                                                            location.href="<?php echo base_url(); ?>digilockerUser/lapta_person_after_login";               
                                                        }else{
                                                            location.href="<?php echo base_url(); ?>digilockerUser/unknown_person_filter_after_login";            
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }else{
                                        location.href="<?php echo base_url(); ?>landing/checkVehicle2";      
                                    }
                                }else{
                                    location.href="<?php echo base_url(); ?>check-step-2-updated";   
                                }
                            }else{
                                if($('#type').val() == 'mobile')
                                {
                                    location.href="<?php echo base_url(); ?>digilockerUser/profile";   
                                }else{
                                    location.href="<?php echo base_url(); ?>digilockerUser/profile";
                                }
                            }
                            <?php } ?>
                        },2000);
                    }else{
                        if(parse.message == 'Invalid Otp')
                        {
                            toastr.error('Invalid OTP');
                            $('#btnSubmit').removeAttr('disabled');
                        }else{
                            toastr.error(parse.message);
                            setTimeout(function()
                            {
                              location.reload();
                            },2000);
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
            });
        }
    })
    
    function toggleSendOtp(val)
    {
        let type = $('#type').val();
        if(val == '')
        {
            $('#'+type+'otpdiv button').addClass('btn-style-grey').removeClass('btn-style-five');
            $('#'+type+'otpdiv button').addClass('disabled');
        }else{
            $('#'+type+'otpdiv button').removeClass('btn-style-grey').addClass('btn-style-five');
            $('#'+type+'otpdiv button').removeClass('disabled');
        }
    }

    function showOtp(ele)
    {
        $(ele).attr('disabled','disabled');
        let type = $('#type').val();
        let val = $('#'+type+'mobileNumber').val();
        if(val != '')
        {   
            let data= new FormData();
            data.append('mobile',val);
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            data.append('type',$('#type').val());
            data.append('typeval',$('#typeval').val());
            $.ajax({
                url:'<?php echo base_url(); ?>user/sendDigiLoginOtp',
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
                        $('#'+type+'otpdiv').addClass('d-none');
                        if(type == 'aadhar')
                        {
                            $('#aadharmobileNumber').attr('disabled','disabled');
                            $('#aadharNumber').attr('readonly',true);   
                        }else{
                            if(type == 'mobile')
                            {
                                $('#mobilemobileNumber').attr('disabled','disabled');
                                $('#mobile').attr('readonly',true);      
                            }else{
                                $('#usermobileNumber').attr('disabled','disabled');
                                $('#username').attr('readonly',true);      
                            }
                        }
                        $('#otpdiv').removeClass('d-none');
                    }else{
                        $('#'+type+'otpdiv').removeClass('d-none');
                        toastr.error(parse.msg);
                        $('#otpdiv').addClass('d-none');
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
            $('#'+type+'otpdiv').removeClass('d-none');
            toastr.error('Please Select Mobile Number');
            $('#otpdiv').addClass('d-none');
        }
    }

    function getRegistered(type)
    {
        let value = '';
        if(type == 'aadhar')
        {
            value = $('#aadharNumber').val();
        }else{
            if(type == 'mobile')
            {
                value = $('#mobile').val();
            }else{
                value = $('#username').val();   
            }
        }
        $('#type').val(type);
        $('#typeval').val(value);
        $('#'+type+'mobileNumber').empty();
        $('#'+type+'mobileNumber').attr('required',false);
        if(type == 'aadhar')
        {
            if(value.length == 12)
            {
                let data = new FormData();
                data.append('type',type);
                data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                data.append('value',value);
                $.ajax({
                    url:'<?php echo base_url(); ?>user/getDigiMobileDetails',
                    data:data,
                    timeout: 60000,
                    contentType: false,
                    cache: false,
                    processData:false,
                    type:'post',
                    success:function(res)
                    {
                        let parse = JSON.parse(res);
                        console.log(parse);
                        if(parse.status == 'success')
                        {
                            if(type == 'aadhar')
                            {
                                $('#aadharNumber').attr('readonly',true);
                            }else{
                                $('#username').attr('readonly',true);
                            }
                            $('#'+type+'otpdiv').removeClass('d-none');
                            $('#btn'+type+'Next').addClass('d-none');
                            $('#mobile'+type+'div').removeClass('d-none');
                            $('#'+type+'mobileNumber').append('<option value="">Select Mobile Number</option>');
                            $('#'+type+'mobileNumber').attr('required',true);
                            if(parse.isAlternate)
                            {
                                if(parse.isAlternate1 && !parse.isAlternate2)
                                {
                                    $('#'+type+'mobileNumber').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                                    $('#'+type+'mobileNumber').append('<option value="'+parse.data.mobile2+'">'+parse.data.vismobile2+'</option>');
                                }else if(!parse.isAlternate1 && parse.isAlternate2)
                                {
                                    $('#'+type+'mobileNumber').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                                    $('#'+type+'mobileNumber').append('<option value="'+parse.data.mobile2+'">'+parse.data.vismobile2+'</option>');
                                }
                                else{
                                    $('#'+type+'mobileNumber').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                                    $('#'+type+'mobileNumber').append('<option value="'+parse.data.mobile2+'">'+parse.data.vismobile2+'</option>');
                                    $('#'+type+'mobileNumber').append('<option value="'+parse.data.mobile3+'">'+parse.data.vismobile3+'</option>');
                                }   
                            }else{
                                $('#'+type+'mobileNumber').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                            }
                        }else{
                            if(parse.status == 'pending')
                            {
                                toastr.warning("Profile is incomplete.Please fill remaining details to continue");
                                setTimeout(function()
                                {
                                    location.href="<?= base_url(); ?>digilocker-step2";
                                },3000);
                            }else{
                                $('#btn'+type+'Next').removeClass('d-none');
                                if(type == 'aadhar')
                                {
                                    $('#aadharNumber').attr('readonly',true);
                                }else{
                                    $('#username').attr('readonly',true);
                                }
                                let textMessage = '';
                                if(type == 'aadhar')
                                {
                                    textMessage = 'Aadhar Number';
                                    Swal.fire({
                                        title: '<strong style="font-size:1rem;color:red;"><span style="color:black;">Oops! No Record Found</span><br>'+(textMessage + '- ' + $('#aadharNumber').val())+'</strong>',
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
                                        location.reload();
                                    })
                                }else{
                                    textMessage = 'Username';
                                    Swal.fire({
                                        title: '<strong style="font-size:1rem;color:red;"><span style="color:black;">Oops! No Record Found</span><br>'+(textMessage + '- ' + $('#username').val())+'</strong>',
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
                                        location.reload();
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
                });
            }else{
                toastr.error('Please Enter Valid Aadhar Number');
                setTimeout(function()
                {
                  location.reload();
                },2000);
            }
        }else{
            if(type == 'mobile')
            {
                let data = new FormData();
                data.append('type',type);
                data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                data.append('value',value);
                $.ajax({
                    url:'<?php echo base_url(); ?>user/getDigiMobileDetails',
                    data:data,
                    timeout: 60000,
                    contentType: false,
                    cache: false,
                    processData:false,
                    type:'post',
                    success:function(res)
                    {
                        let parse = JSON.parse(res);
                        console.log(parse);
                        if(parse.status == 'success')
                        {
                            if(parse.isNew == 1)
                            {
                                $('#otp').attr('required',true);
                                toastr.success(parse.msg);
                                $('#mobile').attr('readonly','true');   
                                $('#'+type+'mobileNumber').attr('disabled','disabled');
                                $('#'+type+'otpdiv').addClass('d-none');
                                $('#mobile'+type+'div').addClass('d-none');
                                $('#btnmobileNext').parent().addClass('d-none');
                                $('#otpdiv').removeClass('d-none');                       
                            }else{
                                $('#mobile').attr('readonly',true);
                                $('#'+type+'otpdiv').removeClass('d-none');
                                $('#btn'+type+'Next').addClass('d-none');
                                $('#mobile'+type+'div').removeClass('d-none');
                                $('#'+type+'mobileNumber').append('<option value="">Select Mobile Number</option>');
                                $('#'+type+'mobileNumber').attr('required',true);
                                if(parse.isAlternate)
                                {
                                    if(parse.isAlternate1 && !parse.isAlternate2)
                                    {
                                        $('#'+type+'mobileNumber').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                                        $('#'+type+'mobileNumber').append('<option value="'+parse.data.mobile2+'">'+parse.data.vismobile2+'</option>');
                                    }else if(!parse.isAlternate1 && parse.isAlternate2)
                                    {
                                        $('#'+type+'mobileNumber').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                                        $('#'+type+'mobileNumber').append('<option value="'+parse.data.mobile2+'">'+parse.data.vismobile2+'</option>');
                                    }
                                    else{
                                        $('#'+type+'mobileNumber').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                                        $('#'+type+'mobileNumber').append('<option value="'+parse.data.mobile2+'">'+parse.data.vismobile2+'</option>');
                                        $('#'+type+'mobileNumber').append('<option value="'+parse.data.mobile3+'">'+parse.data.vismobile3+'</option>');
                                    }   
                                }else{
                                    $('#'+type+'mobileNumber').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                                }   
                            }
                        }else{
                            if(parse.status == 'pending')
                            {
                                toastr.warning("Profile is incomplete.Please fill remaining details to continue");
                                setTimeout(function()
                                {
                                    location.href="<?= base_url(); ?>digilocker-step2";
                                },3000);
                            }else{
                                textMessage = 'Mobile Number';
                                Swal.fire({
                                    title: '<strong style="font-size:1rem;color:red;"><span style="color:black;">Oops! No Record Found</span><br>'+(textMessage + '- ' + $('#mobile').val())+'</strong>',
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
                                    location.reload();
                                })
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
                });
            }else{
                let data = new FormData();
                data.append('type',type);
                data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                data.append('value',value);
                $.ajax({
                    url:'<?php echo base_url(); ?>user/getDigiMobileDetails',
                    data:data,
                    timeout: 60000,
                    contentType: false,
                    cache: false,
                    processData:false,
                    type:'post',
                    success:function(res)
                    {
                        let parse = JSON.parse(res);
                        console.log(parse);
                        if(parse.status == 'success')
                        {
                            if(type == 'aadhar')
                            {
                                $('#aadharNumber').attr('readonly',true);
                            }else{
                                $('#username').attr('readonly',true);
                            }
                            $('#'+type+'otpdiv').removeClass('d-none');
                            $('#btn'+type+'Next').addClass('d-none');
                            $('#mobile'+type+'div').removeClass('d-none');
                            $('#'+type+'mobileNumber').append('<option value="">Select Mobile Number</option>');
                            $('#'+type+'mobileNumber').attr('required',true);
                            if(parse.isAlternate)
                            {
                                if(parse.isAlternate1 && !parse.isAlternate2)
                                {
                                    $('#'+type+'mobileNumber').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                                    $('#'+type+'mobileNumber').append('<option value="'+parse.data.mobile2+'">'+parse.data.vismobile2+'</option>');
                                }else if(!parse.isAlternate1 && parse.isAlternate2)
                                {
                                    $('#'+type+'mobileNumber').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                                    $('#'+type+'mobileNumber').append('<option value="'+parse.data.mobile2+'">'+parse.data.vismobile2+'</option>');
                                }
                                else{
                                    $('#'+type+'mobileNumber').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                                    $('#'+type+'mobileNumber').append('<option value="'+parse.data.mobile2+'">'+parse.data.vismobile2+'</option>');
                                    $('#'+type+'mobileNumber').append('<option value="'+parse.data.mobile3+'">'+parse.data.vismobile3+'</option>');
                                }   
                            }else{
                                $('#'+type+'mobileNumber').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                            }
                        }else{
                            if(parse.status == 'pending')
                            {
                                toastr.warning("Profile is incomplete.Please fill remaining details to continue");
                                setTimeout(function()
                                {
                                    location.href="<?= base_url(); ?>digilocker-step2";
                                },3000);
                            }else{
                                textMessage = 'Username';
                                Swal.fire({
                                    title: '<strong style="font-size:1rem;color:red;"><span style="color:black;">Oops! No Record Found</span><br>'+(textMessage + '- ' + $('#username').val())+'</strong>',
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
                                    location.reload();
                                })
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
                });   
            }
        }
    }
    
    function limit(val,type){
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
            if(type == 'otp')
            {
                var max_chars = 3;
                if(val.value.length > max_chars) {
                    val.value = val.value.substr(0, (max_chars + 1));
                }
            }else{
                if(type == 'mobile')
                {
                    var max_chars = 9;
                    if(val.value.length > max_chars) {
                        $('#btnmobileNext').removeClass('btn-style-grey').addClass('btn-style-five');
                        $('#btnmobileNext').removeClass('disabled');
                        val.value = val.value.substr(0, (max_chars + 1));
                    }else{
                        $('#btnmobileNext').addClass('btn-style-grey').removeClass('btn-style-five');
                        $('#btnmobileNext').addClass('disabled');
                    }   
                }else{
                    var min_chars = 0;
                    if(val.value.length > min_chars) {
                        $('#btnuserNext').removeClass('btn-style-grey').addClass('btn-style-five');
                        $('#btnuserNext').removeClass('disabled');
                    }else{
                        $('#btnuserNext').addClass('btn-style-grey').removeClass('btn-style-five');
                        $('#btnuserNext').addClass('disabled');
                    }
                }
            }
        }
    }

    $('input[name="logintype"]').on('change',function()
    {
        let checked = $("input[name='logintype']:checked").val();
        $('#'+checked+'div').removeClass('d-none');
        if(checked == 'aadhar')
        {
            $('#usernamediv').addClass('d-none');
            $('#mobilediv').addClass('d-none');
            $('#aadhardiv').removeClass('d-none');
            $('#username').attr('required',false);
            $('#mobile').attr('required',false);
            $('#mobilemobileNumber').attr('required',false);
            $('#usermobileNumber').attr('required',false);
            $('#aadharNumber').attr('required',true);
            $('#aadharmobileNumber').attr('required',true);
        }else{
            if(checked == 'username')
            {
                $('#usernamediv').removeClass('d-none');
                $('#mobilediv').addClass('d-none');
                $('#aadhardiv').addClass('d-none');
                $('#mobile').attr('required',false);
                $('#username').attr('required',true);
                $('#mobilemobileNumber').attr('required',false);
                $('#usermobileNumber').attr('required',true);
                $('#aadharNumber').attr('required',false);
                $('#aadharmobileNumber').attr('required',false);   
            }else{
                $('#mobilediv').removeClass('d-none');
                $('#aadhardiv').addClass('d-none');
                $('#usernamediv').addClass('d-none');
                $('#mobile').attr('required',true);
                $('#username').attr('required',false);
                $('#mobilemobileNumber').attr('required',true);
                $('#usermobileNumber').attr('required',false);
                $('#aadharNumber').attr('required',false);
                $('#aadharmobileNumber').attr('required',false);   
            }
        }
    })
</script>