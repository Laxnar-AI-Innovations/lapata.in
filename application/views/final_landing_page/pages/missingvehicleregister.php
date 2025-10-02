<div class="container">

  <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

          <div class="card mb-3">

            <div class="card-body">

              <div class="pt-4 pb-2">
                <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                <p class="text-center small">Enter your personal details to create account</p>
              </div>

              <form class="row g-3 needs-validation" method="post" action="<?php echo base_url(); ?>user/matchregisternew/do_register" novalidate id="registerForm">
                    <?php 
                      $csrf = array(
                        'name' => $this->security->get_csrf_token_name(),
                        'hash' => $this->security->get_csrf_hash()
                        );
                    ?>
                    <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                    <div class="col-12">
                      <label for="aadharNumber" class="form-label">Enter Aadhar Number</label>
                      <input type="text" name="aadhar_id" class="form-control" id="aadharNumber" required placeholder="Enter Aadhar Number">
                      <div class="invalid-feedback">Please, enter your Aadhar Number</div>
                    </div>

                    <div class="col-12">
                      <label for="mobileNumber" class="form-label">Enter Mobile Number</label>
                      <input type="text" name="registration_mobile" class="form-control" id="mobileNumber" required placeholder="Enter Mobile Number">
                      <div class="invalid-feedback">Please enter a valid Mobile Number</div>
                    </div>
                    
                    <div class="col-12">
                        <input type="checkbox" name="consent" onclick="showButton(this)" value="Y" required id="consent">
                        <label for="consent" class="d-inline">I hereby agree to upload and share my E-Aadhaar PDF document and password with missing to perform Offline E-KYC and display my available data.</label>
                        <div class="invalid-feedback">Please Agree Our Terms</div>
                    </div>

                    <div class="col-12 d-none" id="btnsubmitdiv">
                        <button class="save btn btn-primary w-100 disabled-on-loading" id="btnSubmit" type="submit"> Next</button>  
                    </div>
                </form>

                <div class="col-12 d-none" id="otpdiv">
                    <div class="row">
                        <div class="col-12">
                            <input type="text" name="otptext" class="form-control mb-3" id="otptext" placeholder="Enter OTP">
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
</style>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    function resendOtp(ele)
    {
        $(ele).attr('disabled','disabled');
        let data = new FormData();
        data.append('aadharNumber',$('#aadharNumber').val());
        data.append('_token','<?php echo $csrf['hash']; ?>');
        $.ajax({
            url:'<?php echo base_url(); ?>user/resendRegisterOtp',
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
                    $(ele).removeAttr('disabled');
                 }else{
                    toastr.error(parse.message);
                    $(ele).removeAttr('disabled');
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
                url:'<?php echo base_url(); ?>user/createNewAccount',
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
                                location.href="<?php echo base_url(); ?>user/missingvehicledetail/<?php echo $_GET['id'] ?>";      
                            }
                        })
                    }else{
                        toastr.error(parse.message);
                        $('#btnOtp').removeAttr('disabled');
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
                            toastr.error(parse.message);
                            setTimeout(function()
                            {
                              location.reload();
                            },4000);
                        }else{
                            toastr.error(parse.message);
                            setTimeout(function()
                            {
                              location.href="<?php echo base_url(); ?>user/login";
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