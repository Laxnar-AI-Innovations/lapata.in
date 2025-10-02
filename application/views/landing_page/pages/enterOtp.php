<div class="container">

  <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

          <div class="card mb-3">

            <div class="card-body" id="otpdiv">

              <div class="pt-4 pb-2">
                <h5 class="card-title text-center pb-0 fs-4">OTP</h5>
                <p class="text-center small">Enter otp to verify</p>
              </div>

              <form class="row g-3 needs-validation" method="post" action="<?php echo base_url(); ?>user/enterOtp/do_send" novalidate id="registerForm">
                <?php 
                  $csrf = array(
                    'name' => $this->security->get_csrf_token_name(),
                    'hash' => $this->security->get_csrf_hash()
                    );
                ?>
                <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                <div class="col-12">
                  <label for="aadharNumber" class="form-label">Enter Otp</label>
                  <input type="number" name="otp" class="form-control" id="otp" required>
                  <div class="invalid-feedback">Please, enter otp</div>
                </div>

                <div class="col-12">
                  <button class="btn btn-primary w-100 disabled-on-loading" id="btnSubmit" type="submit"> Submit</button>
                </div>
                <div class="row px-0 mx-0 my-2">
                    <div class="col-8 px-0" style="text-align:left;">
                        <a href="javascript:void(0)" onclick="changeOther()">Change Other Mobile Number</a>
                    </div>
                    <div class="col-4 px-0" style="text-align:right;">
                        <a href="javascript:void(0)" onclick="resendOtp()">Resend Otp</a>
                    </div>
                </div>
              </form>

            </div>
            <div class="card-body d-none p-3" id="changediv">
                <form class="row g-3 needs-validation" method="post" action="<?php echo base_url(); ?>user/changeOther" novalidate id="otherform">
                    <?php 
                      $csrf = array(
                        'name' => $this->security->get_csrf_token_name(),
                        'hash' => $this->security->get_csrf_hash()
                        );
                    ?>
                    <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                    <div class="col-12">
                      <input type="checkbox" name="othershow" value="1" id="othershow" onclick="showOther(this)">
                      <label for="othershow">Want to add other mobile number</label>
                    </div>

                    <div class="col-12 d-none" id="otherdiv">
                      <label for="othermob" class="form-label">Other Mobile Number (For Login)</label>
                      <input type="text" class="form-control mb-2" id="othermob">
                      <div class="invalid-feedback">Please enter a valid Mobile Number</div>
                      <small class="text-danger">Note: Number will verify Through OTP</small>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100 disabled-on-loading" id="btnchange" type="submit"> Submit</button>
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

    function showOther(ele)
    {
      if(ele.checked)
      {
          $('#otherdiv').removeClass('d-none');
          $('#othermob').attr('required',true);
          $('#othermob').attr('name','othermob');
          $('#othermob').val('');
      }else{
          $('#otherdiv').addClass('d-none');
          $('#othermob').attr('required',false);
          $('#othermob').removeAttr('name');
          $('#othermob').val('');
      }
    }

    function changeOther()
    {
        if(confirm('Are you sure you want to change the other number?'))
        {
            $('#changediv').removeClass('d-none');
            $('#otpdiv').addClass('d-none');
        }
    }

    function resendOtp()
    {
        let data= new FormData();
        data.append('mobile','<?php echo $_SESSION['othermob']; ?>');
        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        data.append('type','aadhar');
        data.append('typeval','<?php echo $_SESSION['aadharId']; ?>');
        $.ajax({
            url:'<?php echo base_url(); ?>user/sendLoginOtp',
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

    $('#otherform').on('submit',function(e)
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
            $('#btnchange').attr('disabled','disabled');
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
                        if(parse.isOther)
                        {
                            toastr.success(parse.message);
                            setTimeout(function()
                            {
                              location.reload();
                            },2000);
                        }else{
                            toastr.success(parse.message);
                            setTimeout(function()
                            {
                              location.href="<?php echo base_url(); ?>user";
                            },2000); 
                        }
                    }else if(parse.status == 'username')
                    {
                        toastr.warning(parse.message);
                        setTimeout(function()
                        {
                          location.reload();
                        },2000);
                    }else{
                        toastr.error(parse.message);
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
                    console.log(parse);
                    if(parse.status == 'success')
                    {
                        toastr.success(parse.message);
                        setTimeout(function()
                        {
                          location.href="<?php echo base_url(); ?>user";
                        },2000);
                    }else{
                        toastr.error(parse.message);
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