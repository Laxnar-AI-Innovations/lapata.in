<div class="container">

  <section class="section register min-vh-70 d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

          <div class="card mb-3">

            <div class="card-body">

              <div class="pt-4 pb-2">
                <!--<h5 class="card-title text-center pb-0 fs-4">Register Your Hotel</h5>-->
                <h5 class="card-title text-center pb-0 fs-4">Creating Account is fast and easy!</h5>
                <!--<p class="text-center small">Enter your business details to create account</p>-->
              </div>

              <form class="row gy-3 needs-validation justify-content-center" method="post" action="<?php echo base_url(); ?>hotel/register/do_register" id="registerForm">
                    <?php 
                      $csrf = array(
                        'name' => $this->security->get_csrf_token_name(),
                        'hash' => $this->security->get_csrf_hash()
                        );
                    ?>
                    <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                    <div class="row col-lg-12 justify-content-center text-center">
                        <div class="col-sm-12 col-xl-6 form-floating mt-4">
                          <input type="text" name="gstNumber" class="form-control text-uppercase" id="gstNumber" required placeholder="GST Number">
                          <label for="gstNumber" class="form-label mx-2"><b>Enter GST Number</b></label>
                          <div class="invalid-feedback">Please, enter your GST Number</div>
                        </div>
    
                        <div class="col-sm-12 col-xl-6 form-floating mt-4">
                          <input type="number" name="registration_mobile" onChange="showButton(this.value)" onKeyPress="return checkLength(this.value,10)" onKeyUp="showButton(this.value)" class="form-control" id="mobileNumber" required placeholder="Mobile No. (in GST)">
                          <label for="mobileNumber" class="form-label mx-2"><b>Enter Mobile Number (in GST)</b></label>
                          <div class="invalid-feedback">Please enter a valid Mobile Number</div>
                        </div>
                    </div>
                    
                    <div class="col-12 px-4">
                        <input type="checkbox" name="consent" value="Y" required id="consent">
                        <label for="consent" class="d-inline">I hereby agree to upload and share my GST Number with missing&alert to perform and display my available data.</label>
                        <div class="invalid-feedback">Please Agree Our Terms</div>
                    </div>

                    <div class="col-6" id="btnsubmitdiv">
                        <button class="btn btn-primary btn-style-grey disabled w-100 disabled-on-loading" id="btnSubmit" type="submit"> Next</button>  
                    </div>
                    
                </form>

                <div class="col-12 mt-3 px-3">
                  <p class="small mb-0">Already have an account? <a href="<?php echo base_url(); ?>user/login">Log in</a></p>
                </div>

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
<style>
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
.swal2-close{
    position: relative!important;
    color: #fff!important;
    font-size: 20px!important;
    line-height: 20px!important;
    font-weight: 600!important;
    padding: 25px 25px!important;
    background-color:black!important;
}
</style>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    function resendOtp(ele)
    {
        $(ele).attr('disabled','disabled');
        $.ajax({
            url:'<?php echo base_url(); ?>hotel/resendRegisterOtp',
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
            }
        });   
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
    
    function verifyOtp(ele)
    {
        let otp= $('#otptext').val();
        if(otp == '')
        {
            toastr.error('Please Enter OTP');
        }else{
            let data= new FormData();
            data.append('otp', otp);
            data.append('_token','<?php echo $csrf['hash']; ?>');
            $(ele).attr('disabled','disabled');
            $.ajax({
                url:'<?php echo base_url(); ?>hotel/verifyHotelOTP',
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
                                location.href = "<?php echo base_url(); ?>hotel/profile";
                            }
                        })
                    }else{
                        toastr.error(parse.message);
                        $(ele).removeAttr('disabled');
                    }
                }
            })
        }
    }
    
    function showButton(val)
    {
        if(val.length == 10)
        {
            $('#btnsubmitdiv button').addClass('btn-style-green').removeClass('btn-style-grey').removeClass('disabled');
        }else{
            $('#btnsubmitdiv button').addClass('btn-style-grey').removeClass('btn-style-green').addClass('disabled');
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
                            icon: 'success',
                            allowOutsideClick:false,
                            html:
                                '<div class="form-group mb-2"><label class="form-label" style="font-size:1rem!important;"><b>Legal Name:- '+parse.firmName+'</b></label></div><div class="form-group mb-2"><label class="form-label" style="font-size:1rem!important;"><b>Trade Name:- '+parse.tradeName+'</b></label></div><div class="form-group mb-3"><input type="number" placeholder="Enter OTP" class="form-control" id="otptext"></div><div class="form-group"><button type="button" id="btnOtp" onclick="verifyOtp(this)" class="w-100 btn btn-primary btn-style-green disabled-on-loading"> Create Account</button></div><div class="form-group mt-3 col-lg-auto col-md-6 col-sm-12" style="margin-left:auto;text-align:end;"><button type="button" class="btn btn-primary btn-style-five disabled-on-loading" onclick="resendOtp(this)"> Resend OTP</button></div>',
                            showCloseButton: true,
                            showCancelButton: false,
                            focusConfirm: false,
                            showConfirmButton:false
                            }).then((result) => {
                                if(result.isDismissed){
                                    location.reload();
                                }
                        })
                        $('#gstNumber').attr('readonly',true);
                        $('#mobileNumber').attr('readonly',true);
                        $('#btnSubmit').addClass('d-none');
                     }else{
                        if(parse.message != 'Already Verified')
                        {
                            toastr.error(parse.message);
                            setTimeout(function()
                            {
                              location.reload();
                            },4000);
                        }else{
                            toastr.error(parse.message);
                            setTimeout(function()
                            {
                              location.href="<?php echo base_url(); ?>hotel/login";
                            },4000);
                        }
                    }  
                }
            });
        }else{
            return false;
        }   
    })
</script>