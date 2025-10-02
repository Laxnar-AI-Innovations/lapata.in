<div class="container">

  <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

          <div class="card mb-3">

            <div class="card-body">

              <div class="pt-4 pb-2">
                <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                <p class="text-center small">Enter your personal details to create account</p>
              </div>

              <form class="row g-3 needs-validation" method="post" action="<?php echo base_url(); ?>user/register/do_register" novalidate id="registerForm">
                    <?php 
                      $csrf = array(
                        'name' => $this->security->get_csrf_token_name(),
                        'hash' => $this->security->get_csrf_hash()
                        );
                    ?>
                    <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                    <div class="col-12">
                      <label for="aadharNumber" class="form-label">Enter Aadhar Number</label>
                      <input type="text" name="aadhar_id" class="form-control" id="aadharNumber" required>
                      <div class="invalid-feedback">Please, enter your Aadhar Number</div>
                    </div>

                    <div class="col-12">
                      <label for="mobileNumber" class="form-label">Enter Mobile Number</label>
                      <input type="text" name="registration_mobile" class="form-control" id="mobileNumber" required>
                      <div class="invalid-feedback">Please enter a valid Mobile Number</div>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-primary w-100 disabled-on-loading" id="btnSubmit" type="submit"> Next</button>  
                    </div>
                </form>

                <div class="col-12 d-none" id="captchadiv">
                    <div class="row">
                        <div class="col-12">
                            <img src="" id="captchaimg" style="width: 100%;height: 50px;">        
                        </div>      
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="text" name="captchatext" class="form-control my-3" id="captchatext" placeholder="Enter Captcha">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button class="btn btn-primary w-100 disabled-on-loading" id="btnCaptcha" type="button">Verify Captcha</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-none" id="otpdiv">
                    <div class="row">
                        <div class="col-12">
                            <input type="number" name="otptext" class="form-control my-3" id="otptext" placeholder="Enter Otp">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button class="btn btn-primary w-100 disabled-on-loading" id="btnOtp" type="button">Create Account</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-3">
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

<script type="text/javascript">
    $('#btnOtp').click(function()
    {
        let otp= $('#otptext').val();
        if(otp == '')
        {
            toastr.error('Please Enter Otp');
        }else{
            let data= new FormData();
            data.append('otp', otp);
            data.append('aadharNumber', ($('#aadharNumber').val()));
            data.append('_token','<?php echo $csrf['hash']; ?>');
            $('#btnOtp').attr('disabled','disabled');
            $.ajax({
                url:'<?php echo base_url(); ?>user/createAccount',
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
                        toastr.success('Thank you for Registration');
                        setTimeout(function()
                        {
                            location.href = "<?php echo base_url(); ?>user/step2";
                        },6000);   
                    }else{
                        toastr.error('Invalid Otp');
                        $('#btnOtp').removeAttr('disabled');
                    }
                }
            })
        }
    })
    $('#btnCaptcha').click(function()
    {
        let captcha = $('#captchatext').val();
        if(captcha != '')
        {
            let data= new FormData();
            data.append('captcha', captcha);
            data.append('aadharNumber', ($('#aadharNumber').val()));
            data.append('_token','<?php echo $csrf['hash']; ?>');
            $('#btnCaptcha').attr('disabled','disabled');
            $.ajax({
                url:'<?php echo base_url(); ?>user/verifyCaptcha',
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
                        $('#otpdiv').removeClass('d-none');
                        $('#captchadiv').addClass('d-none');
                        $('#aadharNumber').attr('readonly',true);
                        $('#mobileNumber').attr('readonly',true);
                        $('#btnSubmit').addClass('d-none');
                    }else{
                        toastr.error('Invalid Captcha');   
                        $('#otpdiv').addClass('d-none');
                        $('#captchadiv').removeClass('d-none');
                        $('#aadharNumber').attr('readonly',true);
                        $('#mobileNumber').attr('readonly',true);
                        $('#btnSubmit').addClass('d-none');
                        $('#btnCaptcha').removeAttr('disabled');
                    }
                }
            })
        }else{
            toastr.error('Please Enter Captcha');
        }
    })
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
                        $('#captchadiv').removeClass('d-none');
                        $('#captchaimg').attr('src',parse.filename);
                        $('#aadharNumber').attr('readonly',true);
                        $('#mobileNumber').attr('readonly',true);
                        $('#btnSubmit').addClass('d-none');
                    }else if(parse.status == 'captchafailed')
                    {
                        toastr.error('Registration Failed');
                        // setTimeout(function()
                        // {
                        //   location.reload();
                        // },6000);
                    }
                    else{
                        if(parse.message != 'Already Verified')
                        {
                            toastr.error(parse.message);
                            setTimeout(function()
                            {
                              location.reload();
                            },6000);
                        }else{
                            toastr.error(parse.message);
                            setTimeout(function()
                            {
                              location.href="<?php echo base_url(); ?>user/login";
                            },6000);
                        }
                    }
                }
            });
        }else{
            return false;
        }
    })
</script>