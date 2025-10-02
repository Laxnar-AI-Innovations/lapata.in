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
      <h1>Add Gold HUID Number</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
          <li class="breadcrumb-item active">Add Gold HUID Number</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body pt-3 col-lg-12">
                    <div class="form-group row align-items-end">
                        <div class="col-lg-4 col-sm-12 col-md-4">
                            <label>Gold HUID Number 1</label>
                            <input type="text" class="form-control text-uppercase" maxlength="6" name="goldHUIDNumber1" <?php echo ($getUserDetail[0]['goldHUIDNumber1'] != NULL) ? 'disabled' : '' ?> id="goldHUIDNumber1" value="<?php echo $getUserDetail[0]['goldHUIDNumber1']; ?>">
                        </div>
                        <div class="col-lg-auto col-sm-12 col-md-auto text-center">
                            <?php 
                                if($getUserDetail[0]['goldHUIDNumber1'] == NULL)
                                {
                            ?>
                            <button type="button" class="btn btn-style-green disabled-on-loading mt-3" style="background:green!important;color:white!important;" onclick="saveGold(this,1)"> Save</button>
                            <?php }else{ ?>
                            <button type="button" class="btn btn-danger disabled-on-loading mt-3" style="background:red!important;color:white!important;" onclick="deleteGold(this,1,'<?= strtoupper($getUserDetail[0]['goldHUIDNumber1']); ?>')"> <i class="fa fa-trash"></i></button>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body pt-3 col-lg-12">
                    <div class="form-group row align-items-end">
                        <div class="col-lg-4 col-sm-12 col-md-4">
                            <label>Gold HUID Number 2</label>
                            <input type="text" class="form-control text-uppercase" maxlength="6" name="goldHUIDNumber2" <?php echo ($getUserDetail[0]['goldHUIDNumber2'] != NULL) ? 'disabled' : '' ?> id="goldHUIDNumber2" value="<?php echo $getUserDetail[0]['goldHUIDNumber2']; ?>">
                        </div>
                        <div class="col-lg-auto col-sm-12 col-md-auto text-center">
                            <?php 
                                if($getUserDetail[0]['goldHUIDNumber2'] == NULL)
                                {
                            ?>
                            <button type="button" class="btn btn-style-green disabled-on-loading mt-3" style="background:green!important;color:white!important;" onclick="saveGold(this,2)"> Save</button>
                            <?php }else{ ?>
                            <button type="button" class="btn btn-danger disabled-on-loading mt-3" style="background:red!important;color:white!important;" onclick="deleteGold(this,2,'<?= strtoupper($getUserDetail[0]['goldHUIDNumber2']); ?>')"> <i class="fa fa-trash"></i></button>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body pt-3 col-lg-12">
                    <div class="form-group row align-items-end">
                        <div class="col-lg-4 col-sm-12 col-md-4">
                            <label>Gold HUID Number 3</label>
                            <input type="text" class="form-control text-uppercase" maxlength="6" name="goldHUIDNumber3" <?php echo ($getUserDetail[0]['goldHUIDNumber3'] != NULL) ? 'disabled' : '' ?> id="goldHUIDNumber3" value="<?php echo $getUserDetail[0]['goldHUIDNumber3']; ?>">
                        </div>
                        <div class="col-lg-auto col-sm-12 col-md-auto text-center">
                            <?php 
                                if($getUserDetail[0]['goldHUIDNumber3'] == NULL)
                                {
                            ?>
                            <button type="button" class="btn btn-style-green disabled-on-loading mt-3" style="background:green!important;color:white!important;" onclick="saveGold(this,3)"> Save</button>
                            <?php }else{ ?>
                            <button type="button" class="btn btn-danger disabled-on-loading mt-3" style="background:red!important;color:white!important;" onclick="deleteGold(this,3,,'<?= strtoupper($getUserDetail[0]['goldHUIDNumber3']); ?>')"> <i class="fa fa-trash"></i></button>
                            <?php } ?>
                        </div>
                    </div>
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
  
    function deleteGold(ele,count,appNo)
    {
        $(ele).attr('disabled','disabled');
        Swal.fire({
            title: '<strong class="text-danger" style="font-size:20px;">Gold - '+appNo+'</strong>',
            icon: 'error',
            allowOutsideClick:false,
            html:
                '<div class="form-group mt-3"><label class="form-label" style="font-size:17px!important;">Are you sure you want to delete this gold HUID Number?</label></div>',
            showCloseButton: true,
            showCancelButton: true,
            confirmButtonText:'Yes',
            cancelButtonText:'No',
            focusConfirm: false,
            showConfirmButton:true
        }).then((result) => {
            if (result.isConfirmed) {
                let data = new FormData();
                data.append('count',count);
                data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                $.ajax({
                    url:'<?php echo base_url(); ?>user/deleteGold',
                    data:data,
                    contentType: false,
                    cache: false,
                    processData:false,
                    type:'post',
                    success:function(res)
                    {
                        toastr.success('gold deleted successfully');
                        setTimeout(function()
                        {
                            location.reload();
                        },2000);
                    }
                });
            }else{
                $(ele).prop('disabled',false);
            }
        })
    }
    
    function saveGold(ele,count)
    {
        if($('#goldHUIDNumber'+count).val() != '')
        {
            if($('#goldHUIDNumber'+count).val().length == 6)
            {
                $(ele).attr('disabled','disabled');
                let otpdata = new FormData();
                otpdata.append('goldId',$('#goldHUIDNumber'+count).val());
                otpdata.append('count',count);
                otpdata.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                $.ajax({
                    url:'<?php echo base_url(); ?>user/addUserGold',
                    data:otpdata,
                    contentType: false,
                    cache: false,
                    processData:false,
                    type:'post',
                    success:function(res)
                    {
                        let parse = JSON.parse(res);
                        if(parse.status == 'success')
                        {
                            toastr.success('Gold Added Successfully');
                            setTimeout(function()
                            {
                                location.reload();  
                            },2000);   
                        }else{
                            if(parse.count == 3)
                            {
                                Swal.fire({
                                    title: '<strong class="text-danger" style="font-size:15px;">Gold HUID Number - '+($('#goldHUIDNumber'+count).val().toUpperCase())+' is already added in 3 users profile.</strong>',
                                    icon: 'error',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    'confirmButtonText':'Please Try Again',
                                    showConfirmButton:true
                                }).then((result) => {
                                    $(ele).removeAttr('disabled');
                                })
                            }else{
                                Swal.fire({
                                    title: '<strong class="text-danger" style="font-size:15px;">Gold HUID Number - '+($('#goldHUIDNumber'+count).val().toUpperCase())+' is already added in your profile.</strong>',
                                    icon: 'error',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    'confirmButtonText':'Please Try Again',
                                    showConfirmButton:true
                                }).then((result) => {
                                    $(ele).removeAttr('disabled');
                                })
                            }
                        }
                    }
                })      
            }else{
                toastr.error('Please enter valid gold HUID Number');
            }
        }else{
            toastr.error('Please enter valid gold HUID Number');
        }
    }
  </script>