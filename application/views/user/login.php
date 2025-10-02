<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
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
        width: 22px;
        height: 22px;
        padding-bottom: 22px;
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
<div class="container">

  <section class="section register min-vh-70 d-flex flex-column align-items-center justify-content-center py-2">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-4 d-flex flex-column align-items-center justify-content-center">

          <!--<div class="d-flex justify-content-center py-4">-->
          <!--  <a href="<?php echo base_url(); ?>" class="logo d-flex align-items-center w-auto">-->
          <!--    <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="">-->
          <!--    <span class="d-none d-lg-block"></span>-->
          <!--  </a>-->
          <!--</div>-->
          <!-- End Logo -->

          <div class="card mb-3 p-3">

            <div class="card-body">
                <div class="pb-2">
                <h5 class="card-title text-center pb-0 fs-4 pt-2" style="font-size:1.2rem!important"><span style="font-size:1.2rem!important;font-weight:500;color:#63b881">Login</span> to Your Account</h5>
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

              <div class="form-group row g-3">
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <input class="radio-custom" type="radio" name="logintype" id="loginaadhar" checked value="aadhar">
                        <label class="radio-custom-label" for="loginaadhar">
                          Aadhar No.
                        </label>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6 text-right">
                        <input class="radio-custom" type="radio" name="logintype" id="loginusername" value="username">
                        <label class="radio-custom-label" for="loginusername">
                          User Name
                        </label>
                    </div>
                </div>
                <div id="aadhardiv">
                    <div class="form-floating mb-3 col-auto">
                      <input type="number" class="form-control" name="aadharNumber" onkeydown="limit(this,'aadhar');" onkeyup="limit(this,'aadhar');" id="aadharNumber" required placeholder="Aadhar Number">
                      <label for="aadharNumber">Aadhar Number</label>
                      <div class="invalid-feedback">Please enter your aadhar number.</div>
                    </div>
                    <div class="form-group col-auto">
                        <button type="button" onclick="getRegistered('aadhar')" class="btn btn-primary btn-style-grey disabled w-100" id="btnaadharNext">Next <i class="fa fa-arrow-circle-right"></i></button>
                    </div>
                    <div class="col-auto d-none" id="mobileaadhardiv">
                        <div class="form-floating mb-3">
                            <select name="aadharmobileNumber" class="form-select" id="aadharmobileNumber" aria-label="Select Mobile Number" onchange="toggleSendOtp(this.value)">
                                <option selected>Select Mobile Number</option>
                            </select>
                            <label for="aadharmobileNumber">Mobile Number</label>
                            <div class="invalid-feedback">Please enter your Mobile Number.</div>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-md-12 mt-3 d-none" id="aadharotpdiv">
                            <button type="button" class="w-100 btn btn-style-grey disabled-on-loading disabled" onclick="showOtp(this)"> Send OTP</button>
                        </div>
                    </div>
                </div>
                <div id="usernamediv" class="d-none">
                    <div class="form-floating mb-3 col-auto">
                      <input type="text" class="form-control" onkeydown="limit(this,'user');" onkeyup="limit(this,'user');" name="username" id="username" placeholder="User Name">
                      <label for="username">User Name</label>
                      <div class="invalid-feedback">Please enter your username.</div>
                    </div>
                    <div class="form-group col-auto">
                        <button type="button" onclick="getRegistered('user')" class="btn btn-primary btn-style-grey w-100 disabled" id="btnuserNext">Next <i class="fa fa-arrow-circle-right"></i></button>
                    </div>
                    <div class="col-auto d-none" id="mobileuserdiv">
                        <div class="form-floating mb-3">
                            <select name="usermobileNumber" class="form-select" id="usermobileNumber" aria-label="Select Mobile Number" onchange="toggleSendOtp(this.value)">
                                <option selected value="">Select Mobile Number</option>
                            </select>
                            <label for="usermobileNumber">Mobile Number</label>
                            <div class="invalid-feedback">Please enter your Mobile Number.</div>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-md-12 mt-3 d-none" id="userotpdiv">
                            <button type="button" class="w-100 btn btn-style-grey disabled-on-loading disabled" onclick="showOtp(this)"> Send OTP</button>
                        </div>
                    </div>
                </div>

                <div class="form-group col-auto mt-3 d-none" id="otpdiv">
                    <form action="<?php echo base_url(); ?>user/login/do_login" method="post" class="row gy-3 gx-0 needs-validation" novalidate id="loginform">
                        <?php 
                          $csrf = array(
                            'name' => $this->security->get_csrf_token_name(),
                            'hash' => $this->security->get_csrf_hash()
                            );
                        ?>
                        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                        <input type="hidden" name="basename" id="basename" value="<?= $lasturl; ?>">
                        <input type="hidden" name="type" id="type">
                        <input type="hidden" name="typeval" id="typeval">
                        <div class="form-floating mb-3">
                          <input type="number" class="form-control" name="otp" id="otp" placeholder="Enter OTP">
                          <label for="otp">Enter OTP</label>
                        </div>
                        <button class="btn btn-primary w-100 disabled-on-loading btn-style-green" id="btnSubmit" type="submit"> Login <i class="bi bi-box-arrow-in-right"></i></button>
                        
                        <div class="row px-0 mx-0 mt-5" style="justify-content:right;">
                            <div class="col-md-auto col-sm-12 px-0" style="text-align:right;">
                                <button type="button" onclick="resendOtp(this)" class="btn btn-primary btn-style-five w-100 disabled-on-loading" > Resend OTP <i class="bi bi-bootstrap-reboot"></i></button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-auto mt-5">
                  <p class="small mb-2">Don't have account? <a href="<?php echo base_url(); ?>user/newregister">Create an account</a></p>
                </div>
                <div class="col-auto" style="text-align:left;">
                  <p class="small mb-0">Want to check person detail? <a href="<?php echo base_url(); ?>user/checkPerson">Check Person Detail</a></p>
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

    function resendOtp(ele)
    {
        $('#otp').val('');
        $(ele).attr('disabled','disabled');
        if($('#'+$('#type').val()+'mobileNumber').val() != '')
        {
            let data= new FormData();
            data.append('mobile',$('#'+$('#type').val()+'mobileNumber').val());
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            data.append('type',$('#type').val());
            data.append('typeval',$('#typeval').val());
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
                        toastr.success('OTP Sent Successfully');
                        $(ele).removeAttr('disabled');
                        $('#otpdiv').removeClass('d-none');
                    }else{
                        toastr.error('Something Went Wrong');
                        $(ele).removeAttr('disabled');
                    }
                }
            })
        }else{
            $(ele).removeAttr('disabled');
            toastr.error('Please Select Mobile Number');
        }
    }

    $('#loginform').on('submit',function(e)
    {
        let arr = $(this).serializeArray();
        e.preventDefault();
        if(arr[2].value == '')
        {
            toastr.error('Please Enter Aadhar/ Username Value');
            return false;
        }
        else if(arr[3].value == '')
        {
            toastr.error('Please Enter OTP');
            return false;   
        }else{
            $('#btnSubmit').attr('disabled','disabled');
            let data = new FormData(this);
            data.append('mobile',$('#'+$('#type').val()+'mobileNumber').val());
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
                            if(parse.finalverification == 'success')
                            {
                                if(parse.lasturl != 'checkStep2')
                                {
                                    if(parse.lasturl != 'checkVehicle2')
                                    {
                                        location.href="<?php echo base_url(); ?>user";         
                                    }else{
                                        location.href="<?php echo base_url(); ?>user/checkVehicle2";      
                                    }
                                }else{
                                    location.href="<?php echo base_url(); ?>user/checkstep2";   
                                }
                            }else{
                                location.href="<?php echo base_url(); ?>user/profile";
                            }
                        },2000);
                    }else{
                        if(parse.message == 'Invalid Otp')
                        {
                            toastr.error('Invalid OTP');
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
    
    function toggleSendOtp(val)
    {
        let type = $('#type').val();
        if(val == '')
        {
            $('#'+type+'otpdiv button').addClass('btn-style-grey').removeClass('btn-style-five');
            $('#'+type+'otpdiv button').addClass('disabled');
        }else{
            $('#'+type+'otpdiv button').removeClass('btn-style-grey').addClass('btn-style-five');
            $('#'+type+'otpdiv button').removeClass('disabled');
        }
    }

    function showOtp(ele)
    {
        let type = $('#type').val();
        let val = $('#'+type+'mobileNumber').val();
        if(val != '')
        {   
            let data= new FormData();
            data.append('mobile',val);
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            data.append('type',$('#type').val());
            data.append('typeval',$('#typeval').val());
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
                        toastr.success('OTP Sent Successfully');
                        $('#'+type+'otpdiv').addClass('d-none');
                        if(type == 'aadhar')
                        {
                            $('#aadharmobileNumber').attr('disabled','disabled');
                            $('#aadharNumber').attr('readonly',true);   
                        }else{
                            $('#usermobileNumber').attr('disabled','disabled');
                            $('#username').attr('readonly',true);   
                        }
                        $('#otpdiv').removeClass('d-none');
                    }else{
                        $('#'+type+'otpdiv').removeClass('d-none');
                        toastr.error('Something Went Wrong');
                        $('#otpdiv').addClass('d-none');
                    }
                }
            })
        }else{
            $('#'+type+'otpdiv').removeClass('d-none');
            toastr.error('Please Select Mobile Number');
            $('#otpdiv').addClass('d-none');
        }
    }

    function getRegistered(type)
    {
        let value = '';
        if(type == 'aadhar')
        {
            value = $('#aadharNumber').val();
        }else{
            value = $('#username').val();
        }
        $('#type').val(type);
        $('#typeval').val(value);
        $('#'+type+'mobileNumber').empty();
        $('#'+type+'mobileNumber').attr('required',false);
        if(type == 'aadhar')
        {
            if(value.length == 12)
            {
                let data = new FormData();
                data.append('type',type);
                data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                data.append('value',value);
                $.ajax({
                    url:'<?php echo base_url(); ?>user/getMobileDetails',
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
                            if(type == 'aadhar')
                            {
                                $('#aadharNumber').attr('readonly',true);
                            }else{
                                $('#username').attr('readonly',true);
                            }
                            $('#'+type+'otpdiv').removeClass('d-none');
                            $('#btn'+type+'Next').addClass('d-none');
                            $('#mobile'+type+'div').removeClass('d-none');
                            $('#'+type+'mobileNumber').append('<option value="">Select Mobile Number</option>');
                            $('#'+type+'mobileNumber').attr('required',true);
                            if(parse.isAlternate)
                            {
                                if(parse.isAlternate1 && !parse.isAlternate2)
                                {
                                    $('#'+type+'mobileNumber').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                                    $('#'+type+'mobileNumber').append('<option value="'+parse.data.mobile2+'">'+parse.data.vismobile2+'</option>');
                                }else if(!parse.isAlternate1 && parse.isAlternate2)
                                {
                                    $('#'+type+'mobileNumber').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                                    $('#'+type+'mobileNumber').append('<option value="'+parse.data.mobile2+'">'+parse.data.vismobile2+'</option>');
                                }
                                else{
                                    $('#'+type+'mobileNumber').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                                    $('#'+type+'mobileNumber').append('<option value="'+parse.data.mobile2+'">'+parse.data.vismobile2+'</option>');
                                    $('#'+type+'mobileNumber').append('<option value="'+parse.data.mobile3+'">'+parse.data.vismobile3+'</option>');
                                }   
                            }else{
                                $('#'+type+'mobileNumber').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                            }
                        }else{
                            $('#btn'+type+'Next').removeClass('d-none');
                            toastr.error(parse.message);
                            setTimeout(function()
                            {
                              location.reload();
                            },2000);
                        }
                    }
                });
            }else{
                toastr.error('Please Enter Valid Aadhar Number');
                setTimeout(function()
                {
                  location.reload();
                },2000);
            }
        }else{
            let data = new FormData();
            data.append('type',type);
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            data.append('value',value);
            $.ajax({
                url:'<?php echo base_url(); ?>user/getMobileDetails',
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
                        if(type == 'aadhar')
                        {
                            $('#aadharNumber').attr('readonly',true);
                        }else{
                            $('#username').attr('readonly',true);
                        }
                        $('#'+type+'otpdiv').removeClass('d-none');
                        $('#btn'+type+'Next').addClass('d-none');
                        $('#mobile'+type+'div').removeClass('d-none');
                        $('#'+type+'mobileNumber').append('<option value="">Select Mobile Number</option>');
                        $('#'+type+'mobileNumber').attr('required',true);
                        if(parse.isAlternate)
                        {
                            if(parse.isAlternate1 && !parse.isAlternate2)
                            {
                                $('#'+type+'mobileNumber').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                                $('#'+type+'mobileNumber').append('<option value="'+parse.data.mobile2+'">'+parse.data.vismobile2+'</option>');
                            }else if(!parse.isAlternate1 && parse.isAlternate2)
                            {
                                $('#'+type+'mobileNumber').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                                $('#'+type+'mobileNumber').append('<option value="'+parse.data.mobile2+'">'+parse.data.vismobile2+'</option>');
                            }
                            else{
                                $('#'+type+'mobileNumber').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                                $('#'+type+'mobileNumber').append('<option value="'+parse.data.mobile2+'">'+parse.data.vismobile2+'</option>');
                                $('#'+type+'mobileNumber').append('<option value="'+parse.data.mobile3+'">'+parse.data.vismobile3+'</option>');
                            }   
                        }else{
                            $('#'+type+'mobileNumber').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                        }
                    }else{
                        toastr.error(parse.message);
                        setTimeout(function()
                        {
                          location.reload();
                        },2000);
                    }
                }
            });
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

    $('input[name="logintype"]').on('change',function()
    {
        let checked = $("input[name='logintype']:checked").val();
        $('#'+checked+'div').removeClass('d-none');
        if(checked == 'aadhar')
        {
            $('#usernamediv').addClass('d-none');
            $('#username').attr('required',false);
            $('#usermobileNumber').attr('required',false);
            $('#aadharNumber').attr('required',true);
            $('#aadharmobileNumber').attr('required',true);
        }else{
            $('#aadhardiv').addClass('d-none');
            $('#username').attr('required',true);
            $('#usermobileNumber').attr('required',true);
            $('#aadharNumber').attr('required',false);
            $('#aadharmobileNumber').attr('required',false);
        }
    })
</script>