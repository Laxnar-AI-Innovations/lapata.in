<div class="container">

  <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-2">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12 d-flex flex-column align-items-center justify-content-center">

          <!--<div class="d-flex justify-content-center py-4">-->
          <!--  <a href="<?php echo base_url(); ?>" class="logo d-flex align-items-center w-auto">-->
          <!--    <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="">-->
          <!--    <span class="d-none d-lg-block"></span>-->
          <!--  </a>-->
          <!--</div><!-- End Logo -->

          <div class="card mb-3 p-3">

            <div class="card-body">
                <div class="pb-2">
                    <!--<span class=" text-center pb-0 fs-4 pt-2" style="font-size:16px">To check person details, Kindly verify yourself first</span>-->
                    <span class="card-title text-center pb-0 fs-4 pt-2" style="font-size:16px">Please verify your mobile</span>
                </div>

                <div>
                    <?php 
                        $add_succ=$this->session->flashdata('success');
                        if($add_succ){
                    ?>
                    <div class="alert alert-success alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong><?php echo $add_succ;?></strong> 
                    </div>
                    <?php } ?>
                  <!--Delete message-->
                  <?php $del_succ=$this->session->flashdata('error');
                      if($del_succ){
                      ?>
                  <div class="invalid-feedback d-block"><?php echo $del_succ;?></div>
                  <?php } ?>
                </div>
                <form action="<?php echo base_url(); ?>user/postPersonLogin" method="post" class="row gy-3 gx-0 needs-validation" novalidate id="loginform">
                    <div class="col-12 form-group">
                        <label for="mobileNumber" class="form-label">Mobile Number</label>
                        <input type="text" name="mobileNumber" id="mobileNumber" placeholder="Enter Mobile Number" class="form-control" required>
                        <div class="invalid-feedback">Please enter your Mobile Number.</div>
                    </div>
                    <button class="btn btn-primary w-100 disabled-on-loading" id="btnOtp" type="button"> Send Otp</button>
                    <div class="col-12 form-group d-none" id="otpdiv">
                        <div class="form-group">
                            <input type="number" name="otp" class="form-control mb-2" placeholder="Enter Otp" required>
                            <div class="invalid-feedback">Please enter your Mobile Number.</div>
                        </div>
                        <div class="row px-0 mx-0 mb-2">
                            <div class="col-12 px-0" style="text-align:right;">
                                <a href="javascript:void(0)" onclick="resendOtp()">Resend Otp</a>
                            </div>
                        </div>
                        <button class="btn btn-primary w-100 disabled-on-loading" id="btnSubmit" type="submit"> Login</button>
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
<script type="text/javascript">

    $('#btnOtp').click(function()
    {
        let val = $('#mobileNumber').val();
        if(val != '')
        {   
            $('#btnOtp').attr('disabled','disabled');
            let data= new FormData();
            data.append('mobile',val);
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
                url:'<?php echo base_url(); ?>user/sendMissingLoginOtp',
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
                        toastr.success('Otp Sent Successfully');
                        $('#otpdiv').removeClass('d-none');
                        $('#btnOtp').addClass('d-none');
                        $('#mobileNumber').attr('readonly',true);
                    }else{
                        toastr.error('Something Went Wrong');
                        $('#otpdiv').addClass('d-none');
                        $('#btnOtp').removeClass('d-none');
                        $('#mobileNumber').attr('readonly',false);
                    }
                }
            })
        }else{
            toastr.error('Please Enter Mobile Number');
            $('#otpdiv').addClass('d-none');
        }
    })

    function resendOtp()
    {
        let val = $('#mobileNumber').val();
        let data= new FormData();
        data.append('mobile',val);
        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        $.ajax({
            url:'<?php echo base_url(); ?>user/sendMissingLoginOtp',
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
                    toastr.success('Otp Sent Successfully');
                }else{
                    toastr.error('Something Went Wrong');
                }
            }
        })
    }

    $('#loginform').on('submit',function(e)
    {
        let arr = $(this).serializeArray();
        e.preventDefault();
        if(arr[1].value == '')
        {
            toastr.error('Please Enter Otp');
            return false;   
        }else{
            $('#btnSubmit').attr('disabled','disabled');
            let data = new FormData(this);
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
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
                        setTimeout(function()
                        {
                          location.href="<?php echo base_url(); ?>user/missingpersondetail/<?php echo $id; ?>";
                        },2000);
                    }else{
                        if(parse.message == 'Invalid Otp')
                        {
                            toastr.error(parse.message);
                            $('#btnSubmit').removeAttr('disabled');
                        }else{
                            toastr.error(parse.message);
                            setTimeout(function()
                            {
                              location.reload();
                            },2000);
                        }
                    }
                }
            });
        }
    })
</script>