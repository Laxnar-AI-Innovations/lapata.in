<?php 
    $getProfileDetail = $this->db->query('select * from user where uid='.$_SESSION['user_id'])->result_array();
?>
<h5 class="card-title py-3 mb-0 text-danger">Vehicle Details</h5>
<hr class="my-0 mb-1">
<div class="form-group row align-items-end mt-3">
    <div class="col-lg-4 col-sm-12 col-md-4">
        <label>Vehicle Number 1</label>
        <input type="text" class="form-control text-uppercase" name="vehicleNumber1" <?php echo ($getProfileDetail[0]['vehicleNumber1'] != NULL) ? 'disabled' : '' ?> id="vehicleNumber1" value="<?php echo $getProfileDetail[0]['vehicleNumber1']; ?>">
    </div>
    <div class="col-lg-auto col-sm-12 col-md-auto text-center">
        <?php 
            if($getProfileDetail[0]['vehicleNumber1'] == NULL)
            {
        ?>
        <button type="button" class="btn btn-style-green disabled-on-loading mt-3" style="background:green!important;color:white!important;" onclick="saveVehicle(this,1)"> Save</button>
        <?php }else{ ?>
        <button type="button" class="btn btn-danger disabled-on-loading mt-3" style="background:red!important;color:white!important;" onclick="deleteVehicle(this,1,'<?= strtoupper($getProfileDetail[0]['vehicleNumber1']); ?>')"> <i class="fa fa-trash"></i></button>
        <?php } ?>
    </div>
</div>
<div class="form-group row align-items-end mt-3">
    <div class="col-lg-4 col-sm-12 col-md-4">
        <label>Vehicle Number 2</label>
        <input type="text" class="form-control text-uppercase" name="vehicleNumber2" <?php echo ($getProfileDetail[0]['vehicleNumber2'] != NULL) ? 'disabled' : '' ?> id="vehicleNumber2" value="<?php echo $getProfileDetail[0]['vehicleNumber2']; ?>">
    </div>
    <div class="col-lg-auto col-sm-12 col-md-auto text-center">
        <?php 
            if($getProfileDetail[0]['vehicleNumber2'] == NULL)
            {
        ?>
        <button type="button" class="btn btn-style-green disabled-on-loading mt-3" style="background:green!important;color:white!important;" onclick="saveVehicle(this,2)"> Save</button>
        <?php }else{ ?>
        <button type="button" class="btn btn-danger disabled-on-loading mt-3" style="background:red!important;color:white!important;" onclick="deleteVehicle(this,2,'<?= strtoupper($getProfileDetail[0]['vehicleNumber2']); ?>')"> <i class="fa fa-trash"></i></button>
        <?php } ?>
    </div>
</div>
<div class="form-group row align-items-end my-3">
    <div class="col-lg-4 col-sm-12 col-md-4">
        <label>Vehicle Number 3</label>
        <input type="text" class="form-control text-uppercase" name="vehicleNumber3" <?php echo ($getProfileDetail[0]['vehicleNumber3'] != NULL) ? 'disabled' : '' ?> id="vehicleNumber3" value="<?php echo $getProfileDetail[0]['vehicleNumber3']; ?>">
    </div>
    <div class="col-lg-auto col-sm-12 col-md-auto text-center">
        <?php 
            if($getProfileDetail[0]['vehicleNumber3'] == NULL)
            {
        ?>
        <button type="button" class="btn btn-style-green disabled-on-loading mt-3" style="background:green!important;color:white!important;" onclick="saveVehicle(this,3)"> Save</button>
        <?php }else{ ?>
        <button type="button" class="btn btn-danger disabled-on-loading mt-3" style="background:red!important;color:white!important;" onclick="deleteVehicle(this,3,'<?= strtoupper($getProfileDetail[0]['vehicleNumber3']); ?>')"> <i class="fa fa-trash"></i></button>
        <?php } ?>
    </div>
</div>

<div class="row">
    <div class="col-sm-12 col-md-auto col-6 px-1 col-lg-auto mt-3">
        <button type="button" id="btn7Back" class="btn btn-dark disabled-on-loading w-100 save" style="background:black!important;"> Back</button>
    </div>
    <div class="col-sm-12 col-md-auto col-6 ps-1 pe-0 col-lg-auto mt-3">
        <button type="button" id="btn7Next" class="next btn btn-primary w-100 disabled-on-loading"> Next</button>
    </div>
</div>
<script>
$('#btn7Back').click(function()
{
    $(this).attr('disabled','disabled');
    location.href="<?php echo base_url(); ?>user/upload_personal_details?pn=4";
})

$('#btn7Next').click(function()
{
    $(this).attr('disabled','disabled');
    location.href="<?php echo base_url(); ?>user/upload_personal_details?pn=8";
})

function deleteVehicle(ele,count,appNo)
{
    $(ele).attr('disabled','disabled');
    Swal.fire({
        title: '<strong class="text-danger" style="font-size:20px;">Vehicle - '+appNo+'</strong>',
        icon: 'error',
        allowOutsideClick:false,
        html:
            '<div class="form-group mt-3"><label class="form-label" style="font-size:17px!important;">Are you sure you want to delete this vehicle Number?</label></div>',
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
                url:'<?php echo base_url(); ?>user/deleteVehicle',
                data:data,
                contentType: false,
                cache: false,
                processData:false,
                type:'post',
                success:function(res)
                {
                    toastr.success('vehicle deleted successfully');
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

function saveVehicle(ele,count)
{
    if($('#vehicleNumber'+count).val() != '')
    {
        if($('#vehicleNumber'+count).val().length > 0)
        {
            $(ele).attr('disabled','disabled');
            let otpdata = new FormData();
            otpdata.append('vehicleId',$('#vehicleNumber'+count).val());
            otpdata.append('count',count);
            otpdata.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
                url:'<?php echo base_url(); ?>user/addUserVehicle',
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
                        toastr.success('Vehicle Added Successfully');
                        setTimeout(function()
                        {
                            location.reload();  
                        },2000);   
                    }else{
                        if(parse.count == 3)
                        {
                            Swal.fire({
                                title: '<strong class="text-danger" style="font-size:15px;">Vehicle Number - '+($('#vehicleNumber'+count).val().toUpperCase())+' is already added in 3 users profile.</strong>',
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
                                title: '<strong class="text-danger" style="font-size:15px;">Vehicle Number - '+($('#vehicleNumber'+count).val().toUpperCase())+' is already added in your profile.</strong>',
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
            toastr.error('Please enter valid vehicle Number');
        }
    }else{
        toastr.error('Please enter valid vehicle Number');
    }
}
</script>