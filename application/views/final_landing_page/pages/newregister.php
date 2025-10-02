<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<style>
    div:where(.swal2-container) div:where(.swal2-popup){
        width:auto;
    }
    #swal2-html-container{
        margin: 0 0rem!important;
    }
    
    @media only screen and (max-width: 600px) {
 .imgae_display{
      display: none;
 }
}
#toast-container > div{
      opacity: 1;
  }
</style>

<div class="container">

  <section class="section register min-vh-70 d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container px-0">
      <div class="row justify-content-center">
         <div class="col-lg-6 col-6 imgae_display">
            <!--<img src="<?php echo base_url(); ?>assets/img/general_user.png.png" alt="logo" style="height:110px;width:100%">-->
            <picture>
                  <source srcset="<?= base_url(); ?>assets_landing_page/img/illustrations/search_anything.jpg" type="image/jpg">
                  <img class="img-fluid" src="<?= base_url(); ?>assets_landing_page/img/illustrations/search_anything.jpg" alt="search anything">
            </picture>
          </div>
        <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

          <div class="card mb-3">

            <div class="card-body px-2">

              <div class="pt-4 pb-2">
                <!--<h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>-->
                <h2 class="text-center">Creating Account is <br><b style="color: green;">fast and easy!</b></h2>
                <!--<p class="text-center small">Enter your personal details to create account</p>-->
              </div>

              <form class="row g-3 needs-validation" method="post" action="<?php echo base_url(); ?>landing/matchregisternew/do_register" novalidate id="registerForm">
                    <?php 
                      $csrf = array(
                        'name' => $this->security->get_csrf_token_name(),
                        'hash' => $this->security->get_csrf_hash()
                        );
                    ?>
                    <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                    <input type="hidden" id="basename" value="<?= $lasturl; ?>">
                    <div class="col-12 form-floating">
                      <input type="number" onkeydown="limit(this,'aadhar');" onkeyup="limit(this,'aadhar');" name="aadhar_id" class="form-control" id="aadharNumber" required placeholder="Aadhar Number" autocomplete="off">
                      <label for="aadharNumber" class="form-label">Enter - Aadhar Number</label>
                      <div class="invalid-feedback">Please, enter your Aadhar Number</div>
                    </div>

                    <div class="col-12 form-floating">
                      <input type="number" onkeydown="limit(this,'mobile');" onkeyup="limit(this,'mobile');" name="registration_mobile" class="form-control" id="mobileNumber" required placeholder="Mobile No. (in Aadhaar)" autocomplete="off">
                      <label for="mobileNumber" class="form-label">Enter - Mobile Number (in Aadhaar)</label>
                      <div class="invalid-feedback">Please enter a valid Mobile Number</div>
                    </div>
                    
                    <div class="col-12">
                        <input type="checkbox" name="consent" onclick="showButton(this)" value="Y"  id="consent">
                        <label for="consent" class="d-inline">Khoji uses Aadhaar to verify identity of the user and also enable authentic document access.</label>
                        <div class="invalid-feedback">Please Agree Our Terms</div>
                    </div>

                    <div class="col-12 " id="btnsubmitdiv">
                        <button class="save btn btn-primary w-100 disabled-on-loading" id="btnSubmit" type="submit"> Next</button>  
                    </div>
                </form>

                <div class="col-12 d-none" id="otpdiv">
                    <div class="row">
                        <div class="col-12 form-floating">
                            <input type="number" onkeyup="limit(this,'otp');" onkeydown="limit(this,'otp');" name="otptext" class="form-control mb-3" id="otptext" placeholder="Enter OTP">
                            <label for="otptext" class="form-label">Enter- OTP</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button class="save btn btn-primary w-100 disabled-on-loading" id="btnOtp" type="button"> Create Account</button>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12" style="text-align:right;">
                            <button type="button" onclick="resendOtp(this)" class="next btn btn-primary disabled-on-loading"> Resend OTP</a>
                        </div>
                    </div>
                </div>
                <?php 
                    if(isset($_GET['clickedOn']) && $_GET['clickedOn'] == 'missing')
                    {
                ?>
                <div class="col-12 mt-3">
                  <p class="mb-0">Already have an account? <a href="<?php echo base_url(); ?>login?clickedOn=missing">Log in</a></p>
                </div>
                <?php }else{ 
                    if(isset($_GET['clickedOn']) && $_GET['clickedOn'] == 'searchUnknown')
                    {
                ?>
                <div class="col-12 mt-3">
                  <p class="mb-0">Already have an account? <a href="<?php echo base_url(); ?>login?clickedOn=searchUnknown">Log in</a></p>
                </div>
                <?php }else{ ?>
                <div class="col-12 mt-3">
                  <p class="mb-0">Already have an account? <a href="<?php echo base_url(); ?>login">Log in</a></p>
                </div>
                <?php } ?>
                <?php } ?>

            </div>
          </div>

         
        </div>
      </div>
    </div>

  </section>

</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">

    function limit(val,type){
        if(type == 'aadhar')
        {
            var max_chars = 11;
            if(val.value.length > max_chars) {
                val.value = val.value.substr(0, (max_chars + 1));
            }
        }else{
            if(type == 'otp')
            {
                var max_chars = 5;
                if(val.value.length > max_chars) {
                    val.value = val.value.substr(0, (max_chars + 1));
                }
            }else{
                if(type == 'mobile')
                {
                    var max_chars = 9;
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
    }
    
    function resendOtp(ele)
    {
        $(ele).attr('disabled','disabled');
        let data = new FormData();
        data.append('aadharNumber',$('#aadharNumber').val());
        data.append('_token','<?php echo $csrf['hash']; ?>');
        $.ajax({
            url:'<?php echo base_url(); ?>landing/resendRegisterOtp',
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
                    $(ele).removeAttr('disabled');
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
    
    $('#btnOtp').click(function()
    {
        let otp= $('#otptext').val();
        if(otp == '')
        {
            toastr.error('Please Enter OTP');
        }else{
            let data= new FormData();
            data.append('otp', otp);
            data.append('aadharNumber', ($('#aadharNumber').val()));
            data.append('_token','<?php echo $csrf['hash']; ?>');
            $('#btnOtp').attr('disabled','disabled');
            $.ajax({
                url:'<?php echo base_url(); ?>landing/createNewAccount',
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
                        Swal.fire({
                          title: '<strong>Thank you for registration. </strong>',
                          icon: 'success',
                          allowOutsideClick:false,
                          html:
                            '<strong>Your User Name is:- <span class="text-danger">'+parse.username+'</span></strong>',
                          showCloseButton: false,
                          showCancelButton: false,
                          focusConfirm: true,
                          confirmButtonText:
                            'Continue <i class="fa fa-arrow-circle-right"></i>'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                <?php 
                                    if(isset($_GET['clickedOn']) && $_GET['clickedOn'] == 'missing')
                                    {
                                ?>
                                location.href="<?php echo base_url(); ?>user/lapata_new_login";   
                                <?php }else{ 
                                    if(isset($_GET['clickedOn']) && $_GET['clickedOn'] == 'searchUnknown')
                                    {
                                ?>
                                location.href="<?php echo base_url(); ?>user/search_person_details?pn=7&type=unknown";   
                                <?php }else{ ?>
                                    let lasturl = $('#basename').val();
                                    if(lasturl == 'checkstep2')
                                    {
                                        location.href = "<?php echo base_url(); ?>landing/checkstep2";   
                                    }else{
                                        location.href = "<?php echo base_url(); ?>landing/profile";
                                    }
                                    <?php } ?>
                                <?php } ?>
                            }
                        })
                    }else{
                        toastr.error(parse.message);
                        $('#btnOtp').removeAttr('disabled');
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
    
    function showButton(ele)
    {
        if(ele.checked)
        {
            $('#btnsubmitdiv').removeClass('d-none');
        }else{
            $('#btnsubmitdiv').addClass('d-none');
        }
    }
    
    $('#registerForm').on('submit',function(e)
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
            $('#btnSubmit').attr('disabled','disabled');
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
                        toastr.success(parse.message);
                        $('#otpdiv').removeClass('d-none');
                        $('#aadharNumber').attr('readonly',true);
                        $('#mobileNumber').attr('readonly',true);
                        $('#btnSubmit').addClass('d-none');
                     }else{
                        if(parse.message != 'Aadhar number already registered in our website')
                        {
                            if(parse.message == 'Invalid Aadhaar Number.')
                            {
                                let textMessage = 'Aadhar Number';
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
                                if(parse.message == 'The Mobile number you have entered does not match with our records.')
                                {
                                    let textMessage = 'Mobile Number';
                                    Swal.fire({
                                        title: '<strong style="font-size:1rem;color:red;"><span style="color:black;">Oops! No Record Found</span><br>'+(textMessage + '- ' + $('#mobileNumber').val())+'</strong>',
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
                                    toastr.error(parse.message);   
                                    setTimeout(function()
                                    {
                                      location.reload();
                                    },4000);   
                                }
                            }
                        }else{
                            if(parse.message == 'Aadhar number already registered in our website')
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
                                    <?php
                                        if(isset($_GET['clickedOn']) && $_GET['clickedOn'] == 'missing')
                                        {
                                    ?>
                                        location.href="<?php echo base_url(); ?>login?clickedOn=missing";
                                    <?php }else{ ?>
                                    location.href="<?php echo base_url(); ?>login";
                                    <?php } ?>
                                })
                            }else{
                                toastr.error(parse.message);   
                                setTimeout(function()
                                {
                                    <?php
                                        if(isset($_GET['clickedOn']) && ($_GET['clickedOn'] == 'missing' || $_GET['clickedOn'] == 'searchUnknown'))
                                        {
                                    ?>
                                        location.href="<?php echo base_url(); ?>login?clickedOn=<?= $_GET['clickedOn']; ?>";
                                    <?php }else{ ?>
                                    location.href="<?php echo base_url(); ?>login";
                                    <?php } ?>
                                },4000);
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
            return false;
        }   
    })
</script>