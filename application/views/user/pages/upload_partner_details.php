<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    #detailDiv hr{
      margin-top: 1rem!important;
      margin: 1rem 1rem 1rem 1rem;
    }
    label{
        font-weight: 600!important;
        color: black!important;
    }
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
<main id="main" class="main">
    <?php 
        if($getUserDetail[0]['spouseAadhar'] == '' || $getUserDetail[0]['spouseAadhar'] == NULL)
        {
    ?>
    <div class="pagetitle">
      <h1>Upload Spouse Details</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
          <li class="breadcrumb-item active">Upload Spouse Details</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <?php } ?>

    <section class="section profile">
      <div class="row">
        <div class="col-xl-12">

          <div class="card">
            <div class="card-body pt-3">
                <?php $getUserDetail = $this->db->query('select * from user where uid='.$_SESSION['user_id'])->result_array(); 
                ?>
                <form id="step6Form">
                    <?php 
                        if($getUserDetail[0]['spouseAadhar'] != '' || $getUserDetail[0]['spouseAadhar'] != NULL)
                        {
                            $getSpouseDetail = $this->db->query('select * from user where aadhar_id="'.$getUserDetail[0]['spouseAadhar'].'"')->result_array();
                    ?>
                    <h5 class="card-title mb-0 text-success text-center"><b>Yours Spouse Detail</b></h5>
                    <hr class="my-0 mb-1">
                    <div class="row justify-content-center">
                        <div class="col-sm-12 col-md-4 col-lg-3 my-3">
                            <img src="<?php echo base_url().''.$getSpouseDetail[0]['aadharphoto']; ?>" style="width:100%;height:200px;">
                        </div>
                    </div>
                    <hr class="my-0 mt-1">
                    <?php } ?>
                     <?php if($getUserDetail[0]['spouseAadhar'] == NULL){ ?>
                     <h5 class="card-title mb-0 text-danger text-start">Marital Details</h5>
                    <div class="form-group mt-0">
                        <label class="form-label">Select Marital Status</label>
                        <div class="form-group mb-2">
                            <input type="radio" name="maritalstatus" id="maritalstatus1" class="radio-custom" value="0" <?php if($getUserDetail[0]['isMarried'] == 0 && $getUserDetail[0]['isMarried'] != NULL){ echo "checked"; } ?> required>
                            <label for="maritalstatus1" class="mx-2 radio-custom-label">Single</label>
                            <input type="radio" name="maritalstatus" id="maritalstatus2" class="radio-custom" value="1" <?php if($getUserDetail[0]['isMarried'] == 1){ echo "checked"; } ?> required>
                            <label for="maritalstatus2" class="mx-2 radio-custom-label">Married</label>
                        </div>
                    </div>
                    <div class="form-group mt-2 <?php if($getUserDetail[0]['isMarried'] != 1){ echo "d-none"; } ?>" id="spouseNameDiv">
                        <label class="form-label " style="color:red!important;text-transform: capitalize;">Do you want to add your spouse (Husband / Wife) name:</label>
                        <div class="form-group mb-2">
                            <input type="radio" name="isSpouseNameAdded" id="spousestatus1" class="radio-custom" value="1">
                            <label for="spousestatus1" class="mx-2 radio-custom-label">Yes</label>
                            <input type="radio" name="isSpouseNameAdded" id="spousestatus2" class="radio-custom" value="0" checked>
                            <label for="spousestatus2" class="mx-2 radio-custom-label">No</label>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="mt-2 <?php if($getUserDetail[0]['isSpouseNameAdded'] == 0){ echo "d-none"; } ?>" id="marrieddiv">
                        <div id="isDataAvail" class="<?php if($getUserDetail[0]['spouseAadhar'] == ''){ echo "d-none"; } ?>">
                            <div class="row">
                                <?php 
                                    if($getUserDetail[0]['spouseAadhar'] != '')
                                    {
                                        if(count($getSpouseDetail) > 0)
                                        {
                                ?>
                                <div class="form-group col-lg-3 col-sm-12 col-md-6 mt-2">
                                    <label>Name</label>
                                    <input type="text" class="form-control" id="spouseAadharName" readonly value="<?php echo $getSpouseDetail[0]['aadharname']; ?>">
                                </div>
                                <div class="form-group col-lg-3 col-sm-12 col-md-6 mt-2">
                                    <label>Aadhar Number</label>
                                    <input type="text" class="form-control" readonly value="<?php echo $getUserDetail[0]['spouseAadhar']; ?>">
                                </div>
                                <input type="hidden" id="registeredmobile" value="<?php echo $getSpouseDetail[0]['registration_mobile']; ?>">
                                <div class="form-group col-lg-3 col-sm-12 col-md-6 mt-2">
                                    <label>Gender</label>
                                    <input type="text" class="form-control" readonly value="<?php echo $getSpouseDetail[0]['gender']; ?>">
                                </div>
                                <div class="form-group col-lg-3 col-sm-12 col-md-6 mt-2">
                                    <label>Date of Birth</label>
                                    <input type="text" class="form-control" readonly value="<?php echo date('d-m-Y',strtotime($getSpouseDetail[0]['dob'])); ?>">
                                </div>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                        <div id="isDataNotAvail" class="<?php if($getUserDetail[0]['spouseAadhar'] != ''){ echo "d-none"; } ?>">
                            <div class="row align-items-end text-center">
                                <div class="text-start form-group col-lg-3 col-sm-12 col-md-auto mb-2">
                                    <label >Enter Spouse Aadhar Number</label>
                                    <input type="text" class="form-control" id="spouseAadhar" name="spouseAadhar">
                                </div>
                                <div class="form-group mb-2 col-lg-auto col-sm-12 col-md-auto">
                                    <button type="button" class="btn btn-primary save disabled-on-loading" onclick="checkSpouseDetail(this)"> Go</button>
                                </div>
                                <div class="text-start form-group col-lg-4 col-sm-12 col-md-5 mb-2 d-none" id="spouseNameVisDiv">
                                    <label>Spouse Name</label>
                                    <textarea class="form-control readonly" id="spouseName" readonly name="spouseName"></textarea>
                                </div>
                            </div>
                            <div class="row align-items-end d-none" id="detailspousediv">
                                <input type="hidden" id="spouseMobile">
                                <div class="form-group col-lg-auto col-sm-12 col-md-auto mt-3" id="sendotpdiv">
                                    <button type="button" class="w-100 btn btn-primary btn-style-four disabled-on-loading" onclick="sendSpouseOtp(this)"> Send OTP</button>
                                </div>
                                <div id="otpnumberdiv" class="d-none">
                                    <hr>
                                    <div class="col-12 my-2">
                                        <div class="row">
                                            <div class="col-12 text-center">
                                                <h5>OTP has been sent to <span id="otpnumberspan" style="color:crimson;font-weight:bold;"></span></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <div class="form-group col-lg-auto col-sm-12 col-md-auto d-none mt-3" id="resendotpdiv">
                                    <button type="button" class="w-100 btn btn-primary next disabled-on-loading" onclick="resendSpouseOtp(this)"> Resend OTP</button>
                                </div>
                                <div class="spouseotpdiv d-none form-group col-lg-auto col-sm-12 col-md-auto mt-3">
                                    <label>Enter OTP</label>
                                    <input type="number" class="form-control" id="spouseOtp">
                                </div>
                                <div class="spouseotpdiv d-none form-group col-lg-auto col-sm-12 col-md-auto mt-3">
                                    <button type="button" class="w-100 btn btn-primary save disabled-on-loading" onclick="verifySpouseOtp(this)"> Verify OTP</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php 
                            if($getUserDetail[0]['spouseAadhar'] != '')
                            {
                        ?>
                        <div class="col-sm-12 col-md-auto col-lg-auto mt-3">
                            <button type="button" class="btn btn-dark disabled-on-loading w-100 reset" onclick="deleteMarriageInfo(this)"> Delete <i class="fa fa-trash"></i></button>
                        </div>
                        <?php }else{ ?>
                            <div class="col-lg-auto col-sm-12 col-md-auto mt-3">
                                <button type="submit" class="btn btn-primary save w-100 disabled-on-loading" id="btnSubmit"> Save</button>
                            </div>
                        <?php } ?>
                        <div class="col-sm-12 col-md-auto col-lg-auto mt-3 d-none" id="clearAadharDiv" >
                            <button type="button" id="clearAadhar" class="btn btn-dark disabled-on-loading w-100 save" style="background:crimson!important;"> Clear Aadhar</button>
                        </div>
                        <div class="col-lg-auto col-sm-12 col-md-auto mt-3">
                            <button type="button" class="btn btn-primary next w-100 disabled-on-loading" onclick="goToDashboard(this)"> Go to Dashboard</button>
                        </div>
                    </div>
                </form>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
<style>
    .save {
        position: relative;
        color: #fff!important;
        font-size: 16px!important;
        line-height: 16px!important;
        font-weight: 600!important;
        padding: 12px 35px!important;
        border-radius: 25px!important;
        background-color: #008000!important;
    }
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
  <script>
    function goToDashboard(ele)
    {
        $(ele).attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>user";
    }
    
    function verifySpouseOtp(ele)
    {
        $(ele).attr('disabled','disabled');
        let otp = $('#spouseOtp').val();
        if(otp != '')
        {
            let data = new FormData();
            data.append('otp',otp);
            data.append('spouseAadhar',$('#spouseAadhar').val());
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
                url:'<?php echo base_url(); ?>user/verifySpouseOtp',
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
                        toastr.success('Spouse Added Successfully');
                        setTimeout(function()
                        {
                            location.reload();
                        },3000);
                    }else{
                        toastr.error('Invalid Otp');
                        $(ele).removeAttr('disabled');
                    }
                }
            });
        }else{
            toastr.error('Please enter valid otp');
            $(ele).removeAttr('disabled');
        }
    }
    
    function sendSpouseOtp(ele)
    {
        $(ele).attr('disabled','disabled');
        let mobileNumber = $('#spouseMobile').val();
        if(mobileNumber != '')
        {
            let data = new FormData();
            data.append('mobile',mobileNumber);
            data.append('name',$('#spouseName').val());
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
                url:'<?php echo base_url(); ?>user/sendSpouseOtp',
                data:data,
                contentType: false,
                cache: false,
                processData:false,
                type:'post',
                success:function(res)
                {
                    $('#btnSubmit').addClass('d-none');
                    $(ele).addClass('d-none');
                    $('#otpnumberdiv').removeClass('d-none');
                    $('#spouseOtp').attr('required',true);
                    $('#sendotpdiv').addClass('d-none');
                    $('#resendotpdiv').removeClass('d-none');
                    $('.spouseotpdiv').removeClass('d-none');
                }
            });
        }else{
            $('#btnSubmit').removeClass('d-none');
            $('#spouseOtp').attr('required',false);
            toastr.error('Please Select Mobile Number');
            $(ele).removeAttr('disabled');
        }
    }
    
    function resendSpouseOtp(ele)
    {
        $(ele).attr('disabled','disabled');
        let mobileNumber = $('#spouseMobile').val();
        if(mobileNumber != '')
        {
            let data = new FormData();
            data.append('mobile',mobileNumber);
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
                url:'<?php echo base_url(); ?>user/sendSpouseOtp',
                data:data,
                contentType: false,
                cache: false,
                processData:false,
                type:'post',
                success:function(res)
                {
                    toastr.success('Otp sent to selected mobile number');
                    $(ele).removeAttr('disabled');
                }
            });
        }else{
            toastr.error('Please Select Mobile Number');
            $(ele).removeAttr('disabled');
        }
    }
    
    $('#clearAadhar').on('click',function()
    {
        $('#spouseAadhar').attr('readonly',false);
        $('#spouseAadhar').val('');
        $('#spouseName').val('');
        $('#spouseNameVisDiv').addClass('d-none');
        $('#detailspousediv').addClass('d-none');
        $('#clearAadharDiv').addClass('d-none');
    })
    
    function checkSpouseDetail(ele)
    {
        $(ele).attr('disabled','disabled');
        let aadharNumber = $('#spouseAadhar').val();
        if(aadharNumber != '')
        {
            $('#spouseAadhar').attr('readonly',true);
            let data = new FormData();
            data.append('aadhar',aadharNumber);
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
                url:'<?php echo base_url(); ?>user/checkSpouseDetail',
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
                        $(ele).removeAttr('disabled');
                        $('#clearAadharDiv').removeClass('d-none');
                        $('#spouseNameVisDiv').removeClass('d-none');
                        $('#otpnumberspan').html(parse.data.vismobile1);
                        $('#spouseMobile').val(parse.data.mobile1);
                        $('#spouseName').val(parse.spouseName); 
                        $('#detailspousediv').removeClass('d-none');
                    }else{
                        Swal.fire({
                            title: '<strong class="text-danger" style="font-size:20px;">No Data Found</strong>',
                            icon: 'error',
                            allowOutsideClick:false,
                            html:
                                '<div class="form-group mt-3"><label class="form-label">'+parse.message+'</label></div>',
                            showCloseButton: true,
                            showCancelButton: false,
                            focusConfirm: false,
                            showConfirmButton:true
                        }).then((result) => {
                            $('#spouseNameVisDiv').addClass('d-none');
                            $('#clearAadharDiv').removeClass('d-none');
                            $(ele).removeAttr('disabled');
                            if (result.isConfirmed) {
                                $('#detailspousediv').addClass('d-none');
                            }else if(result.isDismissed)
                            {
                                $('#detailspousediv').addClass('d-none');
                            }
                        })
                    }
                }
            });
        }else{
            $(ele).removeAttr('disabled');
            Swal.fire({
                title: '<strong class="text-danger" style="font-size:20px;">Aadhar Number</strong>',
                icon: 'error',
                allowOutsideClick:false,
                html:
                    '<div class="form-group mt-3"><label class="form-label">Please Enter Aadhar Number</label></div>',
                showCloseButton: true,
                showCancelButton: false,
                focusConfirm: false,
                showConfirmButton:true
            }).then((result) => {
                $('#spouseNameVisDiv').addClass('d-none');
                $('#clearAadharDiv').removeClass('d-none');
                if (result.isConfirmed) {
                    $('#detailspousediv').addClass('d-none');
                }else if(result.isDismissed)
                {
                    $('#detailspousediv').addClass('d-none');
                }
            })
        }
    }
    
    $('input[name="maritalstatus"]').on('click',function()
    {
        let checked = $(this);
        $('input[name="isSpouseNameAdded"]').prop('checked',false);
        if(checked.val() == '0')
        {
            $('#marrieddiv').addClass('d-none');
            $('input[name="isSpouseNameAdded"]').prop('required',false);
            $('#spouseNameDiv').addClass('d-none');
            $('#spouseName').attr('required',false);
            $('#spouseAadhar').attr('required',false);
            $('#isDataNotAvail').addClass('d-none');    
        }else{
            $('#marrieddiv').addClass('d-none');
            $('input[name="isSpouseNameAdded"]').prop('required',true);
            $('#spouseNameDiv').removeClass('d-none');
            $('#spouseName').attr('required',false);
            $('#spouseAadhar').attr('required',false);
            $('#isDataNotAvail').addClass('d-none');
        }
    })
    
    $('#step6Form').on('submit',function(e)
    {
        e.preventDefault();
        $('#btnSubmit').attr('disabled','disabled');
        let data=new FormData();
        let maritalstatus = $('input[name="maritalstatus"]:checked').val();
        let isSpouseNameAdded = $('input[name="isSpouseNameAdded"]:checked').val();
        data.append('isMarried',maritalstatus);
        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        if(maritalstatus == '1')
        {
            data.append('isSpouseNameAdded',isSpouseNameAdded);
            if(isSpouseNameAdded == '1')
            {
                let spouseName = $('#spouseName').val();
                if(spouseName != '')
                {
                    data.append('spouseAadhar',$('#spouseAadhar').val());
                }
            }
        }
        if(maritalstatus == '1')
        {
            if(isSpouseNameAdded == '1')
            {
                if($('#spouseOtp').val() == '')
                {
                    toastr.error('Please verify the details to continue');
                    $('#btnSubmit').removeAttr('disabled');
                }else{
                    $.ajax({
                    url:'<?php echo base_url(); ?>user/saveSpouseDetails',
                    data:data,
                    processData:false,
                    cache:false,
                    contentType:false,
                    type:'post',
                    success:function(res)
                    {
                        let parse = JSON.parse(res);
                        if(parse.status == 'success')
                        {
                            toastr.success('Spouse Added Successfully');
                            setTimeout(function(){
                                location.reload();
                            },3000);
                        }else{
                            toastr.success('Something Went Wrong');
                            $('#btnSubmit').removeAttr('disabled');
                        }
                    }
                })
                }   
            }else{
                $.ajax({
                    url:'<?php echo base_url(); ?>user/saveSpouseDetails',
                    data:data,
                    processData:false,
                    cache:false,
                    contentType:false,
                    type:'post',
                    success:function(res)
                    {
                        let parse = JSON.parse(res);
                        if(parse.status == 'success')
                        {
                            toastr.success('Spouse Added Successfully');
                            setTimeout(function(){
                                location.reload();
                            },3000);
                        }else{
                            toastr.success('Something Went Wrong');
                            $('#btnSubmit').removeAttr('disabled');
                        }
                    }
                })
            }
        }else{
            $.ajax({
                url:'<?php echo base_url(); ?>user/saveSpouseDetails',
                data:data,
                processData:false,
                cache:false,
                contentType:false,
                type:'post',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    if(parse.status == 'success')
                    {
                        toastr.success('Marital Status Updated Successfully');
                        setTimeout(function(){
                            location.reload();
                        },3000);
                    }else{
                        toastr.success('Something Went Wrong');
                        $('#btnSubmit').removeAttr('disabled');
                    }
                }
            })
        }
    })
    
    function deleteMarriageInfo(ele)
    {
        Swal.fire({
            title: '<strong class="text-danger" style="font-size:20px;">Delete !</strong>',
            icon: 'error',
            allowOutsideClick:false,
            html:
                '<div class="form-group mt-3"><label class="form-label">Are You Sure to Delete Your Spouse Details ?</label></div>',
            showCloseButton: true,
            showCancelButton: false,
            focusConfirm: false,
            showConfirmButton:true
        }).then((result) => {
            if (result.isConfirmed) {
                $(ele).attr('disabled','disabled');
                let data = new FormData();
                data.append('mobile',$('#registeredmobile').val());
                data.append('name',$('#spouseAadharName').val());
                data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                $.ajax({
                    url:'<?php echo base_url(); ?>user/sendSpouseOtp',
                    data:data,
                    contentType: false,
                    cache: false,
                    processData:false,
                    type:'post',
                    success:function(res)
                    {
                        toastr.success('OTP Sent Successfully To - '+res);
                        Swal.fire({
                          title: '<strong>Enter otp to proceed </strong>',
                          icon: 'success',
                          allowOutsideClick:false,
                          html:
                            '<div class="form-group mb-3"><label class="form-label">Enter Otp</label><input type="number" class="form-control" id="deleteOtpInput"></div><div class="form-group"><button type="button" class="w-100 btn btn-primary save disabled-on-loading" onclick="verifyDeleteOtp(this)"> Verify Otp</button></div><div class="form-group mt-3 col-lg-6 col-md-6 col-sm-12" style="margin-left:auto;"><button type="button" class="w-100 btn btn-primary btn-style-five disabled-on-loading" onclick="resendDeleteOtp(this)"> Resend Otp</button></div>',
                          showCloseButton: true,
                          showCancelButton: false,
                          focusConfirm: false,
                          showConfirmButton:false
                        })
                    }
                });
            }
        })
    }
    
    function verifyDeleteOtp(ele)
    {
        $(ele).attr('disabled','disabled');
        let otp = $('#deleteOtpInput').val();
        if(otp != '')
        {
            let data= new FormData();
            data.append('otp',otp);
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
                url:'<?php echo base_url(); ?>user/deleteSpouseDetail',
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
                        toastr.success('Spouse Deleted Successfully');
                        setTimeout(function()
                        {
                            location.reload();
                        },3000);
                     }else{
                        $(ele).removeAttr('disabled');
                        toastr.error('Invalid OTP');
                     }
                }
            })   
        }else{
            $(ele).removeAttr('disabled');
            toastr.error('Please Enter OTP');
        }
    }
    
    function resendDeleteOtp(ele,index)
    {
        $(ele).attr('disabled','disabled');
        let otpdata = new FormData();
        otpdata.append('mobile',$('#registeredmobile').val());
        otpdata.append('name',$('#spouseAadharName').val());
        otpdata.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        $.ajax({
            url:'<?php echo base_url(); ?>user/sendSpouseOtp',
            data:otpdata,
            contentType: false,
            cache: false,
            processData:false,
            type:'post',
            success:function(res)
            {
                toastr.success('OTP has been sent to registered mobile number.');
                $(ele).removeAttr('disabled');
            }
        })
    }
    
    $('input[name="isSpouseNameAdded"]').on('click',function()
    {
        let checked = $(this);
        if(checked.val() == '1')
        {
            $('#marrieddiv').removeClass('d-none');
            $('#isDataNotAvail').removeClass('d-none');    
            $('#spouseName').attr('required',true);
            $('#spouseAadhar').attr('required',true);
        }else{
            $('#marrieddiv').addClass('d-none');
            $('#isDataNotAvail').addClass('d-none'); 
            $('#spouseName').attr('required',false);
            $('#spouseAadhar').attr('required',false);
        }
    })
  </script>