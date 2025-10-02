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
            <div class="col-lg-6 col-xl-4 px-0 col-md-8 d-flex flex-column align-items-center justify-content-center">
                <div class="my-4 py-0 px-0 px-md-3 w-100" style="border:3px solid black;">
                    <div class="card-body p-0 border-0">
                        <div class="pb-0">
                            <h3 class="text-center text-uppercase mt-2 mb-0">Creating Account is <br><b style="color: green;">fast and easy!</b></h3>
                        </div>
                        <div class="row justify-content-center">
                            <div class="text-center mt-3 form-group col-11 px-1">
                                <button type="button" onclick="getRegistered('digilocker')" class="btn btn-default d-block card me-md-0 me-0 px-2 w-100" style="color:black;justify-content:space-around;text-align: -webkit-center;" id="btnMobileNext">Continue with DigiLocker <br>
                                    <picture>
                                          <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/digilocker.webp" type="image/webp">
                                          <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/digilocker.webp" class="ms-1 d-block d-md-inline w-auto" style="width:100%;height:50px;" alt="digilocker">
                                    </picture>
                                </button>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="text-center form-group col-11 px-1 mt-5">
                                <button type="button" onclick="getRegistered('direct')" class="btn btn-default d-block card me-md-0 me-0 px-2 w-100" style="color:black;justify-content:space-around;" id="btnMobileNext">Continue with Direct AADHAAR <br>
                                    <picture>
                                          <source srcset="<?= base_url(); ?>assets_landing_page/img/aadhar.webp" type="image/webp">
                                          <img src="<?= base_url(); ?>assets_landing_page/img/aadhar.webp" class="ms-1 w-auto" style="width:50px;height:50px;" alt="aadhar">
                                    </picture>
                                </button>
                            </div>
                        </div>
                        <h5 class="text-center my-3" style="color: black;">OR</h5>
                        <div class="row justify-content-center">
                            <div class="text-center form-group col-11 px-1">
                                <button type="button" onclick="getRegistered('mobile')" class="btn btn-default d-block card me-md-0 me-0 px-2 w-100" style="color:black;justify-content:space-around;" id="btnMobileNext">Continue with Mobile Number<br>
                                    <picture>
                                          <source srcset="<?= base_url(); ?>assets/images/mobilepngg.png" type="image/png">
                                          <img src="<?= base_url(); ?>assets/images/mobilepngg.png" class="ms-1 w-auto" style="width:55px;height:50px;" alt="mobile">
                                    </picture>
                                </button>
                            </div>
                        </div>
                        <?php 
                            if(isset($_GET['clickedOn']) && $_GET['clickedOn'] == 'missing')
                            {
                        ?>
                        <div class="col-auto mt-5">
                          <p class="mb-2 text-center">Already have an account? <a href="<?php echo base_url(); ?>login?clickedOn=missing">Login</a></p>
                        </div>
                        <?php }else{ ?>
                        <div class="col-auto mt-5">
                          <p class="mb-2 text-center">Already have an account? <a href="<?php echo base_url(); ?>login">Login</a></p>
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
    <?php
        if($this->session->flashdata('error'))
        {
            ?>
            $(document).ready(function()
            {
                Swal.fire({
                    title: "Error!",
                    customClass:{
                        popup: 'px-4'
                    },
                    text: "<?php echo $this->session->flashdata('error');?>!",
                    icon: "error"
                });  
            })
            <?php
                $this->session->unset_userdata('error');
        }
    ?>

    function showOtpAccordingly(val)
    {
        var max_chars = 9;
        if(val.value.length > max_chars) {
            $('#btnaadharNext').removeClass('btn-style-grey').addClass('btn-style-five');
            $('#btnaadharNext').removeClass('disabled');
            val.value = val.value.substr(0, (max_chars + 1));
        }else{
            $('#btnaadharNext').addClass('btn-style-grey').removeClass('btn-style-five');
            $('#btnaadharNext').addClass('disabled');
        }
    }

    function toggleSendOtp(val)
    {
        if(val == '')
        {
            $('#aadharotpdiv button').addClass('btn-style-grey').removeClass('btn-style-five');
            $('#aadharotpdiv button').addClass('disabled');
        }else{
            $('#aadharotpdiv button').removeClass('btn-style-grey').addClass('btn-style-five');
            $('#aadharotpdiv button').removeClass('disabled');
        }
    }

    function sendOtp(ele)
    {
        let val = $('#aadharmobileNumber').val();
        $(ele).attr('disabled','disabled');
        if(val != '')
        {   
            let data= new FormData();
            data.append('mobile',val);
            data.append('registered_mobile',$('#mobileNumber').val());
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
                url:'<?php echo base_url(); ?>landing/sendWithoutLoginOtp',
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
                        toastr.success(parse.msg);
                        $('#mobileNumber').attr('readonly',true);   
                        $('#aadharmobileNumber').attr('disabled','disabled');
                        $('#mobileaadhardiv').addClass('d-none');
                        $('#otpdiv').removeClass('d-none');
                        setTimeout(function(){
                            $("#otp").filter(':visible').focus();
                        }, 500);
                    }else{
                        if(parse.status == 'already')
                        {
                            proceedToStep1(parse.isFinal);
                        }else{
                            $(ele).removeAttr('disabled');
                            toastr.error('Something Went Wrong');
                            $('#otpdiv').addClass('d-none');   
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
            $(ele).removeAttr('disabled');
            toastr.error('Please Enter Mobile Number');
            $('#otpdiv').addClass('d-none');
        }
    }

    function getRegisteredNew(type)
    {
        let data = new FormData();
        data.append('type',type);
        $('#aadharmobileNumber').empty();
        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        data.append('value',$('#mobileNumber').val());
        $.ajax({
            url:'<?php echo base_url(); ?>user/getMobileDetails',
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
                    if(parse.isNew == 0)
                    {
                        $('#terms').parent().addClass('d-none');
                        $('#terms').addClass('required');
                        $('#mobileNumber').attr('readonly',true);
                        $('#aadharotpdiv').removeClass('d-none');
                        $('#btnaadharNext').addClass('d-none');
                        $('#mobileaadhardiv').removeClass('d-none');
                        $('#aadharmobileNumber').append('<option value="">Select Mobile Number</option>');
                        $('#aadharmobileNumber').attr('required',true);
                        if(parse.isAlternate)
                        {
                            if(parse.isAlternate1 && !parse.isAlternate2)
                            {
                                $('#aadharmobileNumber').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                                $('#aadharmobileNumber').append('<option value="'+parse.data.mobile2+'">'+parse.data.vismobile2+'</option>');
                            }else if(!parse.isAlternate1 && parse.isAlternate2)
                            {
                                $('#aadharmobileNumber').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                                $('#aadharmobileNumber').append('<option value="'+parse.data.mobile2+'">'+parse.data.vismobile2+'</option>');
                            }
                            else{
                                $('#aadharmobileNumber').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                                $('#aadharmobileNumber').append('<option value="'+parse.data.mobile2+'">'+parse.data.vismobile2+'</option>');
                                $('#aadharmobileNumber').append('<option value="'+parse.data.mobile3+'">'+parse.data.vismobile3+'</option>');
                            }   
                        }else{
                            $('#aadharmobileNumber').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                        }   
                    }else{
                        if(parse.isRegistered == 1)
                        {
                            $('#terms').parent().addClass('d-none');
                            $('#terms').addClass('required');
                            $('#otp').attr('required',true);
                            toastr.success(parse.msg);
                            $('#mobileNumber').attr('readonly','true');   
                            $('#aadharmobileNumber').attr('disabled','disabled');
                            $('#sendOtpDiv').addClass('d-none');
                            $('#mobileaadhardiv').addClass('d-none');
                            $('#otpdiv').removeClass('d-none');                       
                        }else{
                            $('#otp').attr('required',true);
                            toastr.success(parse.msg);
                            $('#mobileNumber').attr('readonly','true');   
                            $('#aadharmobileNumber').attr('disabled','disabled');
                            $('#sendOtpDiv').addClass('d-none');
                            $('#mobileaadhardiv').addClass('d-none');
                            $('#otpdiv').removeClass('d-none');                    
                        }
                    }
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

    function getRegistered(type)
    {
        if(type == 'digilocker')
        {
            location.href="https://api.digitallocker.gov.in/public/oauth2/1/authorize?response_type=code&client_id=MHA136549B&redirect_uri=<?php echo base_url(); ?>digilockerCallback&state=Development&code_challenge=CBUw14zO94M8trTZzPE99ZAvb3N0bRsfy_6vbDcba0c&code_challenge_method=S256";   
        }else{
            if(type == 'mobile')
            {
                Swal.fire({
                  title: '<span style="font-size:1rem;color:black;">Enter Your Mobile Number</span>',
                  customClass:{
                    popup:'py-0 col-lg-4',
                    title:'pt-0'
                  },
                  allowOutsideClick:false,
                  html:
                    `<form class="row g-3 mx-0 mb-3 needs-validation justify-content-center" method="post" action="<?php echo base_url(); ?>landing/verifyNonKycOtp" novalidate id="stepCallingForm">
                        <?php 
                          $csrf = array(
                            'name' => $this->security->get_csrf_token_name(),
                            'hash' => $this->security->get_csrf_hash()
                            );
                        ?>
                        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                        <div class="form-floating mt-4 col-12">
                          <input type="number" class="form-control" name="mobileNumber" id="mobileNumber" required placeholder="Mobile Number" onKeyUp="showOtpAccordingly(this)">
                          <label for="mobileNumber" class="px-4">Enter 10 digit Mobile Number</label>
                          <div class="invalid-feedback">Please enter your mobile number.</div>
                        </div>
                        <div class="form-group col-auto" id="sendOtpDiv">
                            <button type="button" onclick="getRegisteredNew('mobile')" class="btn btn-default btn-style-grey disabled w-100" id="btnaadharNext">Next <i class="fa fa-arrow-circle-right"></i></button>
                        </div>
                        <div class="col-12 d-none" id="mobileaadhardiv">
                            <div class="form-floating mb-3">
                                <select name="aadharmobileNumber" style="font-weight:bold;color:black;" class="form-select" id="aadharmobileNumber" aria-label="Select Mobile Number" onchange="toggleSendOtp(this.value)">
                                    <option selected>Select Mobile Number</option>
                                </select>
                                <label for="aadharmobileNumber">Mobile Number</label>
                                <div class="invalid-feedback">Please enter your Mobile Number.</div>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-md-12 mt-3 d-none" id="aadharotpdiv">
                                <button type="button" class="w-100 btn btn-style-grey disabled-on-loading disabled" onclick="sendOtp(this)"> Send OTP</button>
                            </div>
                        </div>
                        <div class="form-group col-12 mt-3 d-none" id="otpdiv">
                            <div class="form-floating mb-3">
                              <input type="number" onkeydown="limit(this,'otp');" onkeyup="limit(this,'otp');" class="form-control" name="otp" id="otp" placeholder="Enter 4 Digit OTP">
                              <label for="otp">Enter 4 Digit OTP</label>
                            </div>
                            <div class="form-group mb-3">
                                <input class="form-check-input text-danger border border-3 border-danger" type="checkbox" name="terms" id="terms" value="1">
                                <label for="terms" style="display:inline;">
                                  By proceeding, you agree to our 
                                  <a href="<?= base_url(); ?>terms-of-use" target="_blank" style="color:blue; text-decoration:underline;">Terms</a>, 
                                  <a href="<?= base_url(); ?>privacy-policy" target="_blank" style="color:blue; text-decoration:underline;">Privacy Policy</a>, 
                                  and all other applicable policies, and confirm awareness of how this portal works.
                                </label>
                            </div>
                            <button class="btn btn-success w-100 disabled-on-loading btn-style-green" id="btn2" type="button" onclick="saveForm(this)"> Proceed</button>
                            <div class="row px-0 mx-0 mt-4" style="justify-content:right;">
                                <div class="col-md-auto col-sm-6 col-8 px-0" style="text-align:right;">
                                    <button type="button" onclick="resendOtp(this)" class="btn btn-primary btn-style-five w-100 disabled-on-loading" > Resend OTP <i class="bi bi-bootstrap-reboot"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>`,
                  showCloseButton: true,
                  showCancelButton: false,
                  focusConfirm: false,
                  showConfirmButton:false
                })
            }else{
                <?php 
                    if(isset($_GET['clickedOn']))
                    {
                ?>
                location.href="<?= base_url(); ?>create-an-account?clickedOn=<?php echo $_GET['clickedOn']; ?>";
                <?php }else{ ?>
                location.href="<?= base_url(); ?>create-an-account";
                <?php } ?>
            }
        }
    }

    function saveForm(ele)
    {
        $(ele).attr('disabled',true);
        if($('#otp').val() != '')
        {
            if(!$('#terms').hasClass('required'))
            {
                if($('#terms').is(':checked'))
                {
                    $(ele).attr('disabled','disabled');
                    let data = new FormData($('#stepCallingForm')[0]);
                    if($('#aadharmobileNumber').val() != '')
                    {
                        data.append('aadharmobileNumber',$('#aadharmobileNumber').val());   
                    }
                    $.ajax({
                        url:$('#stepCallingForm').attr('action'),
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
                                if(parse.isFinal == 1)
                                {
                                    toastr.success('You are a Registered user. Please Continue');
                                    setTimeout(function()
                                    {
                                     location.href="<?= base_url(); ?>non-kyc-dashboard-profile";        
                                    },2000);
                                }else{
                                    proceedToStep1(parse.isFinal);
                                }
                            }else{
                                toastr.error(parse.message);
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
                    });         
                }else{
                    toastr.error('Please click on terms & conditions to continue');
                    $(ele).removeAttr('disabled');
                }
            }else{
                $(ele).attr('disabled','disabled');
                let data = new FormData($('#stepCallingForm')[0]);
                if($('#aadharmobileNumber').val() != '')
                {
                    data.append('aadharmobileNumber',$('#aadharmobileNumber').val());   
                }
                $.ajax({
                    url:$('#stepCallingForm').attr('action'),
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
                            if(parse.isFinal == 1)
                            {
                                toastr.success('You are a Registered user. Please Continue');
                                setTimeout(function()
                                {
                                 location.href="<?= base_url(); ?>non-kyc-dashboard-profile";        
                                },2000);
                            }else{
                                proceedToStep1(parse.isFinal);
                            }
                        }else{
                            toastr.error(parse.message);
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
                });
            }
        }else{
            toastr.error('Please Enter OTP');
            $(ele).removeAttr('disabled');
        }
    }

    function proceedToStep1(isFinal)
    {
        if(isFinal == 1)
        {
            toastr.success('You are a Registered user. Please Continue');
            setTimeout(function()
            {
             location.href="<?= base_url(); ?>non-kyc-dashboard-profile";        
            },2000);
        }else{
            toastr.success('You are a new user. Please Fill Details');
            setTimeout(function()
            {
             location.href="<?= base_url(); ?>step1-guest?type=dashboard";     
            },2000);
        }
    }

    function resendOtp(ele)
    {
        let val = $('#aadharmobileNumber').val();
        $(ele).attr('disabled','disabled');
        if(val != '')
        {   
            let data= new FormData();
            data.append('mobile',val);
            data.append('registered_mobile',$('#mobileNumber').val());
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
                url:'<?php echo base_url(); ?>landing/sendWithoutLoginOtp',
                data:data,
                timeout: 60000,
                contentType: false,
                cache: false,
                processData:false,
                type:'post',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    toastr.success(parse.msg);
                    $(ele).removeAttr('disabled');
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
</script>
