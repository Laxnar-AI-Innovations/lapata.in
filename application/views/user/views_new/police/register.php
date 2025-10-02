<style>
    .select2-results__option{
        text-transform:uppercase;
    }
    select{
        appearance:auto!important;
    }
</style>
<div class="container">

  <section class="section register min-vh-70 d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

          <div class="card mb-3">

            <div class="card-body">

              <div class="pb-2">
                <h5 class="card-title text-center pb-0 fs-4">Create a New Account of <b class="text-danger fs-4">POLICE DEPARTMENT</b></h5>
                
              </div>

              <div>
                  <!--Success message-->
                  <?php $add_succ=$this->session->flashdata('success');
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

              <form id="registerForm" action="<?php echo base_url(); ?>police/register/do_register" method="post" class="row g-3 needs-validation justify-content-center">
                <?php 
                  $csrf = array(
                    'name' => $this->security->get_csrf_token_name(),
                    'hash' => $this->security->get_csrf_hash()
                    );
                ?>
                <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                <div class="col-lg-6 col-12">
                    <div>
                        <label class="mb-2"><b>State</b><b class="text-danger"> *</b></label>
                        <select class="form-control select2" name="state" id="state" onchange="getdistrict(this.value);" required>
                            <option value="">Select State </option>
                            <?php 
                                $state = $this->db->query('select * from states')->result_array();
                                if(count($state)>0)
                                {
                                  foreach($state as $row)
                                  {
                                    ?>
    
                                      <option value="<?php echo $row['name'] ?>"><?php echo $row['name']?></option>
                                    <?php
                                  }
                                  
                                }
                                else
                                {
                                  ?>
    
                                  <option value="no">No State Found</option>
                                <?php
                                }
                            ?>
                      </select>
                      <div class="invalid-feedback">Please Select State *.</div>
                  </div>
                </div>
                <div class="col-lg-6 col-12">
                  <div>
                      <label for="district" class="mb-2"><b>District</b> <b class="text-danger">*</b></label>
                      <select class="form-control select2 text-uppercase" name="district" id="district" onchange="getThana(this.value);" required>
                          <option value="">Select District </option>
                      </select>
                      <div class="invalid-feedback">Please Enter District *.</div>
                  </div>
                </div>
                <div class="col-lg-6 col-12">
                  <div>
                      <label for="thanaName" class="mb-2"><b>Thana Name </b><b class="text-danger">*</b></label>
                      <select class="form-control select2" name="thanaName" id="thanaName" required>
                          <option value="">Select Thana Name</option>
                          
                      </select>
                      <div class="invalid-feedback">Please Select Thana *.</div>
                  </div>
                </div>
                <div class="col-lg-6 col-12">
                  <div>
                      <label for="mobile" class="mb-2"><b>C.U.G Mobile No.</b><b class="text-danger"> *</b></label>
                      <input type="number" class="form-control" onkeydown="limit(this,'mobile');" onkeyup="limit(this,'mobile')" name="registration_mobile" id="mobile" required placeholder="Enter C.U.G Mobile No.">
                      <div class="invalid-feedback">Please Enter Mobile *.</div>
                  </div>
                </div>
                <div class="col-lg-4 col-12" id="btnsubmitdiv">
                  <button class="btn btn-primary btn-style-grey disabled w-100 disabled-on-loading" id="btnSubmit" type="submit" > Register</button>
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
        let data = new FormData();
        data.append('mobileNumber',$('#mobile').val());
        data.append('_token','<?php echo $csrf['hash']; ?>');
        $.ajax({
            url:'<?php echo base_url(); ?>police/resendRegisterOtp',
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
            data.append('mobileNumber', ($('#mobile').val()));
            data.append('_token','<?php echo $csrf['hash']; ?>');
            $(ele).attr('disabled','disabled');
            $.ajax({
                url:'<?php echo base_url(); ?>police/verifyPoliceOtp',
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
                                location.href = "<?php echo base_url(); ?>police/profile";
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
                                '<div class="form-group mb-3"><input type="number" placeholder="Enter OTP" class="form-control" id="otptext"></div><div class="form-group"><button type="button" id="btnOtp" onclick="verifyOtp(this)" class="w-100 btn btn-primary btn-style-green disabled-on-loading"> Create Account</button></div><div class="form-group mt-3 col-lg-auto col-md-6 col-sm-12" style="margin-left:auto;text-align:end;"><button type="button" class="btn btn-primary btn-style-five disabled-on-loading" onclick="resendOtp(this)"> Resend OTP</button></div>',
                            showCloseButton: true,
                            showCancelButton: false,
                            focusConfirm: false,
                            showConfirmButton:false
                            }).then((result) => {
                                if(result.isDismissed){
                                    location.reload();
                                }
                        })
                     }else{
                        if(parse.message != 'Already Verified')
                        {
                            toastr.error(parse.message);
                            setTimeout(function()
                            {
                              location.reload();
                            },2000);
                        }else{
                            toastr.error(parse.message);
                            setTimeout(function()
                            {
                              location.href="<?php echo base_url(); ?>police/login";
                            },2000);
                        }
                    }  
                }
            });
        }else{
            return false;
        }   
    })
    
    function limit(val,type)
        {
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
                var min_chars = 10;
                if(val.value.length >= min_chars) {
                    $('#btnsubmitdiv button').removeClass('btn-style-grey').addClass('btn-style-five');
                    $('#btnsubmitdiv button').removeClass('disabled');
                    val.value = val.value.substr(0, (min_chars));
                }else{
                    $('#btnsubmitdiv button').addClass('btn-style-grey').removeClass('btn-style-five');
                    $('#btnsubmitdiv button').addClass('disabled');
                }
            }
        }
        function getdistrict(id)
        {
          $('#district').prop('selectedIndex',0);
          $('#city').prop('selectedIndex',0);
          $('#city').html('<option value="">Select City</option>');
          if(id!="")
          {
            $.ajax({
              url:"<?php echo base_url(); ?>/police/getdistrict?id="+id,
                data:id,
                
                type:'get',
                success:function(res)
                {
                  $('#district').html(res);
                }
            })
          }
          else
          {
            $('#district').html('<option value="">Select District</option>');
            $('#city').html('<option value="">Select City</option>');
          }
          
        }
        function getThana(id)
        {
            var sid=$('#state').val();
            $('#city').prop('selectedIndex',0);
            if(id!="")
            {
                $.ajax({
                    url:"<?php echo base_url(); ?>/police/getdistrict?cid="+id+"&sid="+sid,
                    type:'get',
                    success:function(res)
                    {
                      $('#thanaName').html(res);
                    }
                })
            }
            else
            {
                $('#thanaName').html('<option value="">Select Thana Name</option>');
            }
          
        }
</script>