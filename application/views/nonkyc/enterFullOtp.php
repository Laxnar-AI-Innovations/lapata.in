<div class="container">

  <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

          <div class="card mb-3">

            <div class="card-body">

              <div class="pt-4 pb-2">
                <h5 class="card-title text-center pb-0 fs-4">OTP</h5>
                <p class="text-center small">Enter otp to verify</p>
              </div>

              <form class="row g-3 needs-validation" method="post" action="<?php echo base_url(); ?>user/enterFullOtp/do_send" novalidate>
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