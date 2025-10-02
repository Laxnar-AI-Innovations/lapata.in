<div class="container">

  <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-6 d-flex flex-column align-items-center justify-content-center">

          <div class="card mb-3">

            <div class="card-body">

              <div class="pt-4 pb-2">
                <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                <p class="text-center small">Enter your personal details to create account</p>
              </div>

              <form class="row g-3 needs-validation" method="post" action="<?php echo base_url(); ?>user/step2/do_register" novalidate id="registerForm">
                <?php 
                  $csrf = array(
                    'name' => $this->security->get_csrf_token_name(),
                    'hash' => $this->security->get_csrf_hash()
                    );
                ?>
                <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                <div class="col-12">
                  <label for="aadharNumber" class="form-label">User ID</label>
                  <input type="text" name="aadhar_id" readonly class="form-control" id="aadharNumber" required value="<?php echo $_SESSION['aadharId']; ?>">
                </div>

                <div class="col-12">
                  <label for="username" class="form-label">Enter Username</label>
                  <input type="text" name="username" class="form-control mb-2" id="username" onchange="checkUsername(this.value)" required>
                  <div class="invalid-feedback">Please enter a valid Username</div>
                  <small class="text-dark">Sample Usernames: Missing-1234,Missing-ABC,Missing123</small>
                  <br>
                  <small class="text-danger">Note: No Spaces Allowed in username</small>
                </div>

                <div class="col-12">
                  <label for="email" class="form-label">Enter Email Id</label>
                  <input type="email" name="email" class="form-control" id="email" required>
                  <div class="invalid-feedback">Please enter a valid Email</div>
                </div>

                <div class="col-12">
                    <label for="registermob" class="form-label">Registered Mobile Number</label>
                    <input readonly value="<?php echo $_SESSION['mob']; ?>" type="text" name="registermob" class="form-control mb-2" id="registermob" required>
                    <div class="invalid-feedback">Please enter a valid Registered Mobile Number</div>
                </div>

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
    $("#username").keyup(function() {
        $(this).val($(this).val().replace(/\s/g, ""));
    });

    function checkUsername(val)
    {
        if(val != '')
        {
            let data = new FormData();
            data.append('value',val);
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
                url:'<?php echo base_url(); ?>user/checkUsername',
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
                        toastr.success('Username Available');
                    }else{
                        $('#username').val('');
                        toastr.error('Username Not Available');
                    }
                }
            })
        }else{
            toastr.error('Please Enter Valid Username');
        }
    }

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
                        if(parse.isOther)
                        {
                            toastr.success(parse.message);
                            setTimeout(function()
                            {
                              location.href="<?php echo base_url(); ?>user/enterOtp";
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
</script>