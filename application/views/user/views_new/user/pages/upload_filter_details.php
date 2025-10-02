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

select{
    appearance:auto!important;
}

.radio-custom:checked + .radio-custom-label:before {
    content: "\f00c";
    font-family: 'FontAwesome';
    color: green;
}
</style>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Your Filters</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
          <li class="breadcrumb-item active">Add Your Filters</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-6">

          <div class="card">
            <div class="card-body pt-3">
                <form action="<?php echo base_url(); ?>user/updateFilterDetails" id="step5form" class="col-md-12">
                    <div class="row">
                        <div class="col-sm-12 col-md-auto">
                            <label>Select Language</label>
                            <select class="form-control mt-2" required name="prefLang" onchange="step7Prefer(this.value)">
                                <option value="English">English</option>
                                <option value="Hindi">Hindi</option>
                            </select>  
                        </div>
                    </div>
                    <div id="englishDiv">
                        <?php 
                            $getCategories = $this->db->query('select * from categories where isDeleted=0')->result_array();
                            $count = 0;
                            if(count($getCategories) > 0)
                            {
                                foreach($getCategories as $k=>$v)
                                {
                                    $getSubCategories = $this->db->query('select * from subcategories where categoryId='.$v['Id'].' and isDeleted=0')->result_array();
                                    if(count($getSubCategories) > 0)
                                    {
                                        $count++;
                        ?>
                        <div class="row mt-3 mb-2">
                            <div class="col-sm-12">
                                <h5 class="text-left mb-0 text-dark"><?= $v['englishCategoryName']; ?></h5>  
                            </div>
                        </div>
                        <hr class="mt-0">
                        <div class="row mb-3">
                            <div class="col-md-auto col-sm-12">
                                <select class="form-control englishSubCategory" name="subcategory[]">
                                    <option value="c-<?php echo $v['Id']; ?>">Select Characteristics</option>
                                    <?php 
                                        foreach($getSubCategories as $k1=>$v1)
                                        {
                                            $getIfAlready = $this->db->query('select * from userOtherInfo where subCategoryId='.$v1['Id'].' and userId='.$_SESSION['user_id'])->result_array();
                                    ?>
                                    <option value="<?php echo $v1['Id']; ?>" <?php if(count($getIfAlready) > 0){ echo "selected"; } ?>><?= $v1['englishSubCategoryName']; ?></option>
                                    <?php }  ?>
                                </select>    
                            </div>
                        </div>
                        <?php       
                                    } 
                                } 
                            }
                            if($count == 0){
                        ?>
                        <div class="row mt-3 mb-2">
                            <div class="col-sm-12">
                                <h5 class="text-center mb-0">No Extra Info Found</h5>  
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div id="hindiDiv" class="d-none">
                        <?php 
                            $count = 0;
                            $getCategories = $this->db->query('select * from categories where isDeleted=0')->result_array();
                            if(count($getCategories) > 0)
                            {
                                foreach($getCategories as $k=>$v)
                                {
                                    $getSubCategories = $this->db->query('select * from subcategories where categoryId='.$v['Id'].' and isDeleted=0')->result_array();
                                if(count($getSubCategories) > 0)
                                {
                                    $count++;
                        ?>
                        <div class="row mt-3 mb-2">
                            <div class="col-sm-12">
                                <h4 class="text-left mb-0"><?= $v['hindiCategoryName']; ?></h4>  
                            </div>
                        </div>
                        <hr class="mt-0">
                        <div class="row mb-3">
                            <div class="col-md-auto col-sm-12">
                                <select class="form-control hindiSubCategory">
                                    <option value="c-<?php echo $v['Id']; ?>">विशेषताओं का चयन करें</option>
                                    <?php 
                                        foreach($getSubCategories as $k1=>$v1)
                                        {
                                            $getIfAlready = $this->db->query('select * from userOtherInfo where subCategoryId='.$v1['Id'].' and userId='.$_SESSION['user_id'])->result_array();
                                    ?>
                                    <option value="<?php echo $v1['Id']; ?>" <?php if(count($getIfAlready) > 0){ echo "selected"; } ?>><?= $v1['hindiSubCategoryName']; ?></option>
                                    <?php }  ?>
                                </select>    
                            </div>
                        </div>
                        <?php   
                                    }
                                } 
                            }
                            if($count == 0){
                        ?>
                        <div class="row mt-3 mb-2">
                            <div class="col-sm-12">
                                <h4 class="text-center mb-0">No Extra Info Found</h4>  
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="row">
                        <div class="col-lg-auto col-md-auto col-sm-12 mb-3">
                            <button class="btn btn-dark text-light w-100 disabled-on-loading save" id="step5"> Save</button>  
                        </div>
                        <div class="col-lg-auto col-md-auto col-sm-12">
                            <button class="btn btn-dark text-light w-100 disabled-on-loading next" id="step5Back"> Back</button>  
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
    function step7Prefer(val)
    {
        if(val == 'English')
        {
            $('.hindiSubCategory').removeAttr('name');
            $('.englishSubCategory').prop('name','subcategory[]');
            $('#language').val('English');
            $('#englishDiv').removeClass('d-none');
            $('#hindiDiv').addClass('d-none');
            $('#englishDiv input:checkbox').eq(0).attr('required',false);
            $('#hindiDiv input:checkbox').attr('required',false);    
        }else{
            $('.englishSubCategory').removeAttr('name');
            $('.hindiSubCategory').prop('name','subcategory[]');
            $('#language').val('Hindi');
            $('#englishDiv').addClass('d-none');
            $('#hindiDiv').removeClass('d-none');
            $('#englishDiv input:checkbox').attr('required',false);
            $('#hindiDiv input:checkbox').eq(0).attr('required',false);
        }
    }
    
    $('#step5form').on('submit',function(e)
    {
        e.preventDefault();
        $('#step5').attr('disabled','disabled');
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
                        location.reload();  
                    },3000);
                 }else{
                    toastr.error(parse.message);
                    $('#step5').removeAttr('disabled');
                }  
            }
        });  
    })
    
    $('#step5Back').click(function()
    {
        $(this).attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>user/upload_personal_details?pn=6";
    })
    
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
            $('#isDataNotAvail').addClass('d-none');    
        }else{
            $('#marrieddiv').addClass('d-none');
            $('input[name="isSpouseNameAdded"]').prop('required',true);
            $('#spouseNameDiv').removeClass('d-none');
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
            title: '<strong class="text-danger" style="font-size:20px;">Spouse Detail</strong>',
            icon: 'error',
            allowOutsideClick:false,
            html:
                '<div class="form-group mt-3"><label class="form-label">Are you sure you want to delete spouse details?</label></div>',
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
                        Swal.fire({
                          title: '<strong>Enter otp to proceed </strong>',
                          icon: 'success',
                          allowOutsideClick:false,
                          html:
                            '<div class="form-group mb-3"><label class="form-label">Enter Otp</label><input type="number" class="form-control" id="deleteOtpInput"></div><div class="form-group"><button type="button" class="w-100 btn btn-primary save disabled-on-loading" onclick="verifyDeleteOtp(this)"> Verify Otp</button></div><div class="form-group mt-3"><button type="button" class="w-100 btn btn-primary next disabled-on-loading" onclick="resendDeleteOtp(this)"> Resend Otp</button></div>',
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