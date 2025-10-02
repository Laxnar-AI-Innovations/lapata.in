<main id="main" class="main">

    <div class="pagetitle mb-0">
      <p class="mb-0">Welcome,<b><?= $_SESSION['aadharName']; ?></b></p>
    </div><!-- End Page Title -->

    <section class="section profile mt-3">
      <div class="row">
        <div class="col-xl-12 px-1">

          <div class="<?php if($pn != 3 && $pn != 6 && $pn != 4 && $pn != 5){ echo "card";} ?>">
            <div class="<?php if($pn != 3 && $pn != 4 && $pn != 5 && $pn != 6){ echo "card-body p-3";} ?>">
              <!-- Bordered Tabs -->
              <div class="tab-content">

                <div class="tab-pane fade show active profile-edit" id="profile-edit">
                    
                    <div id="step1div" class="row mb-3 <?php if($pn != 1){ echo "d-none";} ?>">
                        <?php 
                            $missingvehicle = $this->db->query('select * from missingvehicle where Id='.$missing[0]['Id'])->result_array();
                            $getAllByVehicle = $this->db->query('select * from missingvehicle where Id="'.$missingvehicle[0]['Id'].'" and isFound=0 and paymentStatus="Success" and isdeleted != 1')->result_array();
                        ?>
                        <div class="px-0 col-lg-10 col-md-12 col-sm-12 d-flex flex-column mx-lg-auto">
                            <div class="row px-5 align-items-center">
                                <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                                    <h6 class="text-success"><b>Missing Vehicle Details</b></h6>
                                    <h6 class="text-dark"><b>Missing Id - <?php echo $missing[0]['missingId']; ?></b></h6>
                                    <h6 style="color:<?php echo ($missing[0]['isFound'] == 0 ? 'green' : 'red'); ?>"><b style="color:<?php echo ($missing[0]['isFound'] == 0 ? 'green' : 'red'); ?>">Current Status - <?php echo ($missing[0]['isFound'] == 0 ? 'Missing/Stolen' : 'Closed'); ?></b></h6>
                                </div>
                            </div>
                            <hr class="border-dark">
                            <div class="row px-3 align-items-center">
                                <div class="col-md-6 col-sm-12 col-lg-6 mt-3">
                                    <div class="row mt-3">
                                        <div class="col-md-12 text-center border border-2 border-danger p-3">
                                            <h5 class="text-danger text-uppercase"><b>Missing</b></h5>
                                            <h6 class="text-dark text-uppercase mb-0"><span class="text-dark" style="font-weight:bold;">Missing Date : </span> <?php echo date('d-m-Y',strtotime($missingvehicle[0]['missingdate'])); ?></h6>
                                        </div>
                                    </div>
                                    <?php 
                                        $rewardcount = 0;
                                        foreach($getAllByVehicle as $k=>$v)
                                        {
                                            if($v['rewardamount'] != 0)
                                            {
                                                $rewardcount++;
                                    ?>
                                    <?php } } ?>
                                    <?php if($rewardcount > 0){ ?>
                                    <div class="row mt-3">
                                        <div class="col-md-12 text-center py-3 px-0">
                                            <select class="form-control border border-2 border-danger text-center" style="font-weight:bold;font-size:1.3rem;appearance:auto;" id="reward" onchange="showRewardsAccordingly(this.value)">
                                                <?php 
                                                    foreach($getAllByVehicle as $k=>$v)
                                                    {
                                                        if($v['rewardamount'] != 0)
                                                        {
                                                ?>
                                                <option value="<?php echo $v['Id']; ?>"><b>Reward - ₹<?php echo ($v['rewardamount'] != NULL ? $v['rewardamount'] : '0' ); ?></b></option>
                                                <?php } } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <?php 
                                        if($missingvehicle[0]['firdate'] != NULL)
                                        {
                                    ?>
                                    <div class="row mt-3">
                                        <div class="col-md-12 text-center border border-2 border-danger p-3">
                                            <h6 class="text-dark text-uppercase mb-0"><span class="text-dark" style="font-weight:bold;">FIR Date : </span> <span id="missingfirdate"><?php echo date('d-m-Y',strtotime($missingvehicle[0]['firdate'])); ?></span></h6>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <?php 
                                        if($missingvehicle[0]['firpolicethananame'] != NULL)
                                        {
                                    ?>
                                    <div class="row mt-3">
                                        <div class="col-md-12 text-center border border-2 border-danger p-3">
                                            <h6 class="text-dark text-uppercase mb-0"><span class="text-dark" style="font-weight:bold;">FIR Thana & Address : </span> <span id="firthanaaddress"><?php echo (($missingvehicle[0]['firpolicethananame'] != NULL ? ($missingvehicle[0]['firpolicethananame'].',') : '')); ?><?php echo (($missingvehicle[0]['firstate'] != NULL ? ($missingvehicle[0]['firstate'].',') : '')); ?><?php echo (($missingvehicle[0]['firdistrict'] != NULL ? ($missingvehicle[0]['firdistrict'].',') : '')); ?><?php echo (($missingvehicle[0]['fircity'] != NULL ? ($missingvehicle[0]['fircity'].',') : '')); ?><?php echo (($missingvehicle[0]['firvillage'] != NULL ? ($missingvehicle[0]['firvillage']) : '')); ?></span></h6>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-6 mt-3">
                                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner" id="photosspan">
                                        <?php 
                                            $decode = json_decode($missingvehicle[0]['photos'],true);
                                            if(count($decode) > 0)
                                            {
                                                foreach($decode as $k=>$v)
                                                {
                                        ?>
                                        <div class="carousel-item <?php if($k == 0){ echo "active"; } ?>">
                                            <a href="<?php echo base_url(); ?><?php echo $v; ?>"  data-lightbox="roadtrip">
                                                <img src="<?php echo base_url().''.$v; ?>" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100" alt="...">
                                            </a>
                                        </div>
                                        <?php } }else{ 
                                            $getLatestUserPhotos = $this->db->query('select * from missingvehiclephotos where missingId='.$missingvehicle[0]['Id'])->result_array();
                                            if(count($getLatestUserPhotos) > 0)
                                            {
                                                foreach($getLatestUserPhotos as $k=>$v)
                                                {
                                        ?>
                                        <div class="carousel-item <?php if($k == 0){ echo "active"; } ?>">
                                            <a href="<?php echo base_url(); ?><?php echo $v['photourl']; ?>"  data-lightbox="roadtrip">
                                                <img src="<?php echo base_url().''.$v['photourl']; ?>" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100" alt="...">
                                            </a>
                                        </div>
                                        <?php } }else{ ?>
                                        <div class="carousel-item <?php if($k == 0){ echo "active"; } ?>">
                                            <a href="<?php echo base_url().'assets/img/noimage.jpg'; ?>"  data-lightbox="roadtrip">
                                                <img src="<?php echo base_url().'assets/img/noimage.jpg'; ?>" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100" alt="...">
                                            </a>
                                        </div>
                                        <?php } } ?>
                                    </div>
                                    <a class="carousel-control-prev" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="visually-hidden">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="visually-hidden">Next</span>
                                    </a>
                                </div>
                            </div>
                            </div>
                            <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                            <div class="row mt-2 mx-1 align-items-center">
                                <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-end">
                                    <h6 style="color: black;font-size:13px;"><b>OWNER NAME : </b></h6>
                                </div>
                                <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-left">
                                    <h6 class="text-danger" style="font-size:13px;"><b id="personname"><?php echo $missingvehicle[0]['ownerName']; ?></b></h6>
                                </div>
                            </div>
                            <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                            <div class="row mt-2 mx-1 align-items-center">
                                <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-end">
                                    <h6 style="color: black;font-size:13px;"><b>Vehicle Number : </b></h6>
                                </div>
                                <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-left">
                                    <h6 style="color: black;font-size:13px;" id="rcNumber"><b><?php echo $missingvehicle[0]['rcNumber']; ?></b></h6>
                                </div>
                            </div>
                            <div class="bg-dark row mt-2 mx-3 p-2">
                                <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                                    <label class="text-light"><b>Vehicle's Other Details</b></label>
                                </div>
                            </div>
                            <div class="row mt-2 align-items-center">
                                <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                                    <h6 style="color: black;font-size:13px;"><b>Vehicle Type : </b></h6>
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                                    <h6 style="color: black;font-size:13px;" id="typespan"><b><?php echo $missingvehicle[0]['vehicleType']; ?></b></h6>
                                </div>
                            </div>
                            <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                            <div class="row mt-2 align-items-center">
                                <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                                    <h6 style="color: black;font-size:13px;"><b>Chassis Number : </b></h6>
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                                    <h6 style="color: black;font-size:13px;" id="chassisNumberspan"><?php echo substr_replace($missingvehicle[0]['chasisNumber'],'<i class="fa fa-hashtag" style="font-size:small;"></i><i class="fa fa-hashtag" style="font-size:small;"></i><i class="fa fa-hashtag" style="font-size:small;"></i><i class="fa fa-hashtag" style="font-size:small;"></i><i class="fa fa-hashtag" style="font-size:small;"></i><i class="fa fa-hashtag" style="font-size:small;"></i><i class="fa fa-hashtag" style="font-size:small;"></i><i class="fa fa-hashtag" style="font-size:small;"></i>',0,13); ?></h6>
                                </div>
                            </div>
                            <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                            <div class="row mt-2 align-items-center">
                                <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                                    <h6 style="color: black;font-size:13px;"><b>Engine Number : </b></h6>
                                </div>
                                <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-left">
                                    <h6 style="color: black;font-size:13px;" id="engineNumberSpan"><b><?php echo (($missingvehicle[0]['engineNumber'] != '') ? $missingvehicle[0]['engineNumber'] : ''); ?></b></h6>
                                </div>
                            </div>
                            <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                            <div class="row mt-2 align-items-center">
                                <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                                    <h6 style="color: black;font-size:13px;"><b>Company Name : </b></h6>
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                                    <h6 style="color: black;font-size:13px;" id="companyNameSpan"><b><?php echo ($missingvehicle[0]['companyName']); ?></b></h6>
                                </div>
                            </div>
                            <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                            <div class="row mt-2 align-items-center">
                                <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                                    <h6 style="color: black;font-size:13px;"><b>Model Number : </b></h6>
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                                    <h6 style="color: black;font-size:13px;" id="modelNumberSpan"><b><?php echo ($missingvehicle[0]['modelNumber']); ?></b></h6>
                                </div>
                            </div>
                            <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                            <div class="row mt-2 align-items-center">
                                <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                                    <h6 style="color: black;font-size:13px;"><b>Other Detail : </b></h6>
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                                    <h6 style="color: black;font-size:13px;" id="otherdetailspan"><b><?php echo $missingvehicle[0]['otherDetail']; ?></b></h6>
                                </div>
                            </div>
                            <div class="row text-center justify-content-center">
                                <?php 
                                    if($missingvehicle[0]['isFinalSubmitted'] == 0)
                                    {
                                ?>
                                <div class="col-lg-auto mt-3 col-md-auto col-sm-12">
                                    <button type="button" class="btn-style-green btn btn-primary d-block w-100 disabled-on-loading" onclick="finalSubmit(this)"> Final Submit</button>
                                </div>
                                <?php } ?>
                                <?php 
                                    if($missingvehicle[0]['isFinalSubmitted'] == 1)
                                    {
                                ?>
                                <!--<div class="col-lg-auto mt-3 col-md-auto col-sm-12">-->
                                <!--    <button type="button" class="btn-style-four btn btn-primary d-block w-100 disabled-on-loading" onclick="copyLink('without',<?php echo $missingvehicle[0]['Id']; ?>)"> Generate link without vehicle photo and vehicle no. <i class="fa fa-copy"></i></button>-->
                                <!--</div>-->
                                <div class="col-lg-auto mt-3 col-md-auto col-sm-12">
                                    <button type="button" class="btn-style-five btn btn-primary d-block w-100 disabled-on-loading" onclick="copyLink('with',<?php echo $missingvehicle[0]['Id']; ?>)"> Generate link with vehicle photo and vehicle no. <i class="fa fa-copy"></i></button>
                                </div>
                                <div class="col-lg-auto mt-3 col-md-auto col-sm-12">
                                    <a href="<?php echo base_url(); ?>user" class="btn-style-green btn btn-primary d-block">Dashboard</a>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
  <div id="photoModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Photo</h5>
                <a class="close btn btn-default" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url(); ?>user/updateMissingPersonPhoto" id="updatePhotoForm">
                    <input type="hidden" id="updateId" name="Id">
                    <input type="hidden" id="updateMissingId" name="missingId">
                    <div class="form-group">
                        <label class="form-label">Select New Photo</label>
                        <input type="file" id="editInput" name="photo" class="form-control" required>
                    </div>
                    <div class="form-group mt-3 text-center">
                        <button class="btn btn-primary disabled-on-loading" id="btnPhotoupdate"> Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
  <div id="uploadimageModal" class="modal" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn btn-danger close1" data-dismiss="modal" style="color:white;">&times;</button>
          <h4 class="modal-title">Crop Image</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 text-center">
                <div id="image_demo" style="width:100%; margin-top:30px"></div>
            </div>
            <div class="col-md-12 col-sm-12 col-lg-12 text-center">
                <button class="btn btn-success crop_image">Crop Image</button>
            </div>
        </div>
        </div>
     </div>
    </div>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js" integrity="sha512-Gs+PsXsGkmr+15rqObPJbenQ2wB3qYvTHuJO6YJzPe/dTLvhy0fmae2BcnaozxDo5iaF8emzmCZWbQ1XXiX2Ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" integrity="sha512-2eMmukTZtvwlfQoG8ztapwAH5fXaQBzaMqdljLopRSA0i6YKM8kBAOrSSykxu9NN9HrtD45lIqfONLII2AFL/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    .swal2-cancel{
        position: relative!important;
        font-size: 16px!important;
        line-height: 16px!important;
        font-weight: 600!important;
        padding: 12px 35px!important;
        border-radius: 25px!important;
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
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
  <script type="text/javascript">
    
    $('#btn4Back').click(function()
    {
        location.href="<?php echo base_url(); ?>user/upload_missing_vehicle_details?pn=3";
    })
    
    $('#btn4Next').click(function()
    {
        if($('#mobCount').val() > 0)
        {
            location.href="<?php echo base_url(); ?>user/upload_missing_vehicle_details?pn=5";   
        }else{
            toastr.error('Please add one mobile number to continue');
        }
    })
    
    $image_crop = $('#image_demo').croppie({
        enableExif: true,
        viewport: {
          width:200,
          height:200,
          type:'square' //circle
        },
        boundary:{
          width:200,
          height:200
        }
      });
      
      function showReUpload(index)
      {
          $('#reUploadBtn'+index).removeClass('d-none');
          $('#reUploadDiv'+index).removeClass('d-none');
      }
      
      function resendDeleteContactOtp(ele,index)
    {
        $(ele).attr('disabled','disabled');
        let otpdata = new FormData();
        otpdata.append('mobile',$('#vehicleMob'+index).val());
        otpdata.append('index',index);
        otpdata.append('setting',1);
        otpdata.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        $.ajax({
            url:'<?php echo base_url(); ?>user/sendDeleteVehicleMissingContactOtp',
            data:otpdata,
            contentType: false,
            cache: false,
            processData:false,
            type:'post',
            success:function(res)
            {
                toastr.success('An OTP has been sent on same number');
                $(ele).removeAttr('disabled');
            }
        })
    }
    
    function verifyDeleteContactOtp(ele,index)
    {
        let otp = $('#deleteOtpInput').val();
        $(ele).attr('disabled','disabled');
        if(otp != '')
        {
            let otpdata = new FormData();
            otpdata.append('otp',$('#deleteOtpInput').val());
            otpdata.append('index',index);
            otpdata.append('setting',1);
            otpdata.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
                url:'<?php echo base_url(); ?>user/deleteMissingVehicleContact',
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
                        toastr.success(parse.message);
                        setTimeout(function()
                        {
                            location.reload();
                        },2000);
                    }else{
                        toastr.error(parse.message);
                        $(ele).removeAttr('disabled');
                    }
                }
            })      
        }else{
            toastr.error('Please Enter OTP to continue');
            $(ele).removeAttr('disabled');
        }
    }
      
      function deleteConatct(ele,index,setting)
    {
        $(ele).attr('disabled','disabled');
        if(setting == 1)
        {
            Swal.fire({
                title: '<strong class="text-danger" style="font-size:20px;">Contact</strong>',
                icon: 'error',
                allowOutsideClick:false,
                html:
                    '<div class="form-group mt-3"><label class="form-label">Are you sure you want to delete contact?</label></div>',
                showCloseButton: true,
                confirmButtonText:'Yes',
                cancelButtonText:'No',
                showCancelButton: true,
                focusConfirm: false,
                showConfirmButton:true
            }).then((result) => {
                if (result.isConfirmed) {
                    $(ele).attr('disabled','disabled');
                    let otpdata = new FormData();
                    otpdata.append('mobile',$('#vehicleMob'+index).val());
                    otpdata.append('index',index);
                    otpdata.append('setting',setting);
                    otpdata.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                    $.ajax({
                        url:'<?php echo base_url(); ?>user/sendDeleteVehicleMissingContactOtp',
                        data:otpdata,
                        contentType: false,
                        cache: false,
                        processData:false,
                        type:'post',
                        success:function(res)
                        {
                            toastr.success('An OTP has been sent on same number');
                            $(ele).removeAttr('disabled');
                            Swal.fire({
                              title: '<strong>Enter OTP to proceed </strong>',
                              icon: 'success',
                              allowOutsideClick:false,
                              html:
                                '<div class="form-group mb-3"><label class="form-label">Enter OTP</label><input type="number" class="form-control" id="deleteOtpInput"></div><div class="form-group"><button type="button" class="w-100 btn btn-primary save disabled-on-loading" onclick="verifyDeleteContactOtp(this,'+index+')"> Verify OTP</button></div><div class="form-group mt-3 col-lg-6 col-md-6 col-sm-12" style="margin-left:auto;"><button type="button" class="w-100 btn btn-primary btn-style-five disabled-on-loading" onclick="resendDeleteContactOtp(this,'+index+')"> Resend OTP</button></div>',
                              showCloseButton: true,
                              showCancelButton: false,
                              focusConfirm: false,
                              showConfirmButton:false
                            })
                        }
                    })
                }else{
                    $(ele).removeAttr('disabled');
                }
            })
        }else{
            Swal.fire({
                title: '<strong class="text-danger" style="font-size:20px;">Contact</strong>',
                icon: 'error',
                allowOutsideClick:false,
                html:
                    '<div class="form-group mt-3"><label class="form-label">Are you sure you want to delete contact details?</label></div>',
                showCloseButton: true,
                confirmButtonText:'Yes',
                cancelButtonText:'No',
                showCancelButton: true,
                focusConfirm: false,
                showConfirmButton:true
            }).then((result) => {
                if (result.isConfirmed) {
                    $(ele).attr('disabled','disabled');
                    let otpdata = new FormData();
                    otpdata.append('index',index);
                    otpdata.append('setting',setting);
                    otpdata.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                    $.ajax({
                        url:'<?php echo base_url(); ?>user/deleteMissingVehicleContact',
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
                                toastr.success(parse.message);
                                setTimeout(function()
                                {
                                    location.reload();
                                },2000);
                            }else{
                                toastr.error(parse.message);
                                $(ele).removeAttr('disabled');
                            }
                        }
                    })
                }else{
                    $(ele).removeAttr('disabled');
                }
            })
        }
    }
     
     function finalSubmit(ele)
     {
         Swal.fire({
            title: '<strong class="text-dark" style="font-size:20px;">Final Submit</strong>',
            icon: 'info',
            html:'<div class="form-group mb-2">Are you sure you want to final submit?</div>',
            allowOutsideClick:true,
            showCloseButton: true,
            showCancelButton: true,
            focusConfirm: true,
            showConfirmButton:true
        }).then((result) => {
            if (result.isConfirmed) {
                $(ele).attr('disabled','disabled');
                $.ajax({
                    url:'<?php echo base_url(); ?>user/finalMissingVehicleSumbit',
                    type:'get',
                    success:function(res)
                    {
                        toastr.success('Final Data Submitted Successfully');
                        setTimeout(function()
                        {
                            location.reload();
                        },2000);
                    }
                })   
            }
        })
     }
      
     $('#updatePhotoForm').on('submit',function(e)
    {
        e.preventDefault();
        $('#btnPhotoupdate').attr('disabled','disabled');
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
                    },2000);
                }else{
                    toastr.error(parse.message);
                }
            }
        });
    })
    
    function clearAadhar(ele)
    {
        $('#nomineeYesNote').addClass('d-none');
        $('#nomineeNoNote').addClass('d-none');
        $('#missingName').removeAttr('name');
        $('#missingdate').removeAttr('name');
        $('#missingdate').attr('required',false);
        $('#missingdate').val('');
        $('#isNominee').removeAttr('name');
        $('#stateoptional').removeClass('d-none');
        $('#firstate').attr('name','firstate');
        $('#firstate').attr('required',true);
        
        $('#distoptional').removeClass('d-none');
        $('#firDistrict').attr('name','firdistrict');
        $('#firDistrict').attr('required',true);
        
        $('#cityoptional').removeClass('d-none');
        $('#fircity').attr('required',true);
        $('#fircity').attr('name','fircity');
        
        $('#policethanaoptional').removeClass('d-none');
        $('#policeThanaName').attr('required',true);
        $('#policeThanaName').attr('name','policeThanaName');
        
        $('#firdateoptional').removeClass('d-none');
        $('#firdate').attr('required',true);
        $('#firdate').attr('name','firdate');
        
        $('#firnumberoptional').removeClass('d-none');
        $('#firNumber').attr('required',true);
        $('#firNumber').attr('name','firNumber');
        
        $('.registerednamediv').addClass('d-none');
        $('#missingaadhar').val('');
        $('#isNominee').val('');
        $('#missingName').val('');
        $('#missingName').removeClass('readonly');
        $('#missingName').attr('required',false);
        $('#isNominee').removeClass('readonly');
    }
    
    function cropPhoto(evt)
    {
        if(evt.target.files.length > 0)
        {
            let src = URL.createObjectURL(evt.target.files[0]);
            var reader = new FileReader();
            reader.onload = function (event) {
              $image_crop.croppie('bind', {
                url: event.target.result
              }).then(function(){
                console.log('jQuery bind complete');
              });
            }
            reader.readAsDataURL(evt.target.files[0]);
            $('#uploadimageModal').modal('show');   
        }else{
            $('#previewFaceDiv').addClass('d-none');
            $('#facematch').val('');
            $('#previewPhoto').attr('src','');
        }
    }
    
    $('.crop_image').click(function(event){
        $image_crop.croppie('result', {
          type: 'canvas',
          size: 'viewport'
        }).then(function(response){
            $('#facematch').val(response);
            $('#previewFaceDiv').removeClass('d-none')
            $('#previewPhoto').attr('src',response);
            $('#uploadimageModal').modal('hide');
        })
      });
    
    $('#complaintform').on('submit',function(e)
    {
        e.preventDefault();
        $('#aadharbtn').attr('disabled','disabled');
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
                    $('#complaintform').addClass('d-none');
                    $('#step2div').removeClass('d-none');
                    $('#stepNewform').html(parse.html);
                 }else{
                    toastr.error(parse.message);
                    $('#aadharbtn').removeAttr('disabled');
                }  
            }
        });
    })
    
    function getPreviousDetail(ele)
    {
        $(ele).attr('disabled','disabled');
        let val = $('#missingnonaadhar').val();
        if(val != '')
        {
            let data = new FormData();
            data.append('aadhar',val);
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
                url:'<?php echo base_url(); ?>user/getPreviousDetail',
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
                        $('#missingnonname').val(parse.name);
                        $('#missingnondob').val(parse.dob);
                        $('#missingnonfathername').val(parse.fathername);
                        $('#missingnonreligion').val(parse.religion);
                        $('#missingnongender').val(parse.gender);
                        $(ele).removeAttr('disabled');   
                    }else{
                        toastr.error('No Previous Detail Found Please Enter Details Manually');
                        $(ele).removeAttr('disabled');   
                        $('#missingnonname').val('');
                        $('#missingnondob').val('');
                        $('#missingnonfathername').val('');
                        $('#missingnonreligion').val('');
                        $('#missingnongender').val('');
                    }
                }
            })   
        }else{
            toastr.error('Please Enter Aadhar Number');
            $(ele).removeAttr('disabled');   
            $('#missingnonname').val('');
            $('#missingnondob').val('');
            $('#missingnonfathername').val('');
            $('#missingnonreligion').val('');
            $('#missingnongender').val('');
        }
    }
    
    function showRelationAccordingly(val,index)
    {
        if(val == '')
        {
            toastr.error('Please Select Relation');
            $('#otherrelationdiv'+index).addClass('d-none');
            $('#otherrelation'+index).val('');
        }else{
            if(val == 3)
            {
                $('#otherrelationdiv'+index).removeClass('d-none');
                $('#otherrelation'+index).val('');
            }else{
                $('#otherrelationdiv'+index).addClass('d-none');
                $('#otherrelation'+index).val('');
            }
        }
    }

    function showAccordingly(val)
    {
        if(val == '')
        {
            toastr.error('Please select your choice to continue');
            $('#missingaadhar').attr('required',false);
            $('#missingName').attr('required',false);
            $('#missingdate').attr('required',false);
            $('#missingnondate').attr('required',false);
            $('#missingdate').removeAttr('name');
            $('#missingnondate').removeAttr('name');
            $('#missingaadhar').removeAttr('name');
            $('#missingName').removeAttr('name');
            
            $('#missingnonaadhar').attr('required',false);
            $('#missingnonname').attr('required',false);
            $('#missingnondob').attr('required',false);
            $('#missingnonfathername').attr('required',false);
            $('#missingnonreligion').attr('required',false);
            $('#missingnongender').attr('required',false);
            
            $('#missingnonaadhar').removeAttr('name');
            $('#missingnonname').removeAttr('name');
            $('#missingnondob').removeAttr('name');
            $('#missingnonfathername').removeAttr('name');
            $('#missingnonreligion').removeAttr('name');
            $('#missingnongender').removeAttr('name');
            
            $('#registereddiv').addClass('d-none');
            $('#nonregistereddiv').addClass('d-none');
        }else{
            if(val == '1')
            {
                $('#missingdate').attr('required',true);
                $('#missingnondate').attr('required',false);
                $('#missingdate').attr('name','missingdate');
                $('#missingnondate').removeAttr('name');
                $('#missingaadhar').attr('required',true);
                $('#missingName').attr('required',true);
                
                $('#missingaadhar').attr('name','missingaadhar');
                $('#missingName').attr('name','missingName');
                $('#missingnonaadhar').attr('required',false);
                $('#missingnonname').attr('required',false);
                $('#missingnondob').attr('required',false);
                $('#missingnonfathername').attr('required',false);
                $('#missingnonreligion').attr('required',false);
                $('#missingnongender').attr('required',false);
                
                $('#missingnonaadhar').removeAttr('name');
                $('#missingnonname').removeAttr('name');
                $('#missingnondob').removeAttr('name');
                $('#missingnonfathername').removeAttr('name');
                $('#missingnonreligion').removeAttr('name');
                $('#missingnongender').removeAttr('name');
                
                $('#registereddiv').removeClass('d-none');
                $('#nonregistereddiv').addClass('d-none');
            }else{
                $('#missingdate').attr('required',false);
                $('#missingnondate').attr('required',true);
                $('#missingdate').removeAttr('name');
                $('#missingnondate').attr('name','missingdate');
                
                $('#missingaadhar').attr('required',false);
                $('#missingName').attr('required',false);
                
                $('#missingaadhar').removeAttr('name');
                $('#missingName').removeAttr('name');
                
                $('#missingnonaadhar').attr('required',true);
                $('#missingnonname').attr('required',true);
                $('#missingnondob').attr('required',true);
                $('#missingnonfathername').attr('required',true);
                $('#missingnonreligion').attr('required',true);
                $('#missingnongender').attr('required',true);
                
                $('#missingnonaadhar').attr('name','missingaadhar');
                $('#missingnonname').attr('name','missingName');
                $('#missingnondob').attr('name','missingdob');
                $('#missingnonfathername').attr('name','missingfathername');
                $('#missingnonreligion').attr('name','missingreligioname');
                $('#missingnongender').attr('name','missinggender');
                
                $('#registereddiv').addClass('d-none');
                $('#nonregistereddiv').removeClass('d-none');
            }
        }
    }

    $('#stepNewform').on('submit',function(e)
    {
        e.preventDefault();
        $('#okbtn').attr('disabled','disabled');
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
                    $('#step2div').addClass('d-none');
                    $('#stepFirdiv').removeClass('d-none');
                 }else{
                    toastr.error(parse.message);
                    $('#okbtn').removeAttr('disabled');
                }  
            }
        });  
    })

    $('#stepFirform').on('submit',function(e)
    {
        e.preventDefault();
        $('#btnFir').attr('disabled','disabled');
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
                    $('#stepFirdiv').addClass('d-none');
                    $('#step3div').removeClass('d-none');
                 }else{
                    toastr.error(parse.message);
                    $('#btnFir').removeAttr('disabled');
                }  
            }
        });  
    })

    $('#step3form').on('submit',function(e)
    {
        e.preventDefault();
        $('#btnSubmit3').attr('disabled','disabled');
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
                    $('#step3div').addClass('d-none');
                    $('#step4div').removeClass('d-none');
                 }else{
                    toastr.error(parse.message);
                    $('#btnSubmit3').removeAttr('disabled');
                }  
            }
        });  
    })

    $('#step5form').on('submit',function(e)
    {
        e.preventDefault();
        $('#step5').attr('disabled','disabled');
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
                    setTimeout(function()
                    {
                        location.reload();
                    },2000);
                 }else{
                    toastr.error(parse.message);
                    $('#step5').removeAttr('disabled');
                }  
            }
        });  
    })

    $('#isRewarded').click(function()
    {
        if($(this).is(':checked'))
        { 
            $('#rewarddiv').removeClass('d-none');
            $('#rewardAmount').attr('required',true);
            $('#rewardAmount').attr('min',1);
        }else{
            $('#rewarddiv').addClass('d-none');
            $('#rewardAmount').attr('required',false);
            $('#rewardAmount').removeAttr('min');
        }
    })

    $('#step6Form').on('submit',function(e)
    {
        e.preventDefault();
        if(($('#rewardAmount').val() != '' && $('#rewardAmount').val() != 0))
        {
            $('#btnPay').attr('disabled','disabled');
            var options = {
            	"key": "rzp_test_ounVFPzgvKtrw2",
            	"amount": (($('#rewardAmount').val()) * 100),
            	"name": "Khoji",
            	"description": "Add Reward",
            	"image": "<?php echo base_url(); ?>assets/img/logo.png",// COMPANY LOGO
            	"handler": function (response) {
            		$.ajax({
            		    url:'<?php echo base_url(); ?>user/saveVehicleReward',
            		    data:{payment: ($('#rewardAmount').val()),paymentId:response.razorpay_payment_id,'_token':'<?php echo $this->security->get_csrf_hash(); ?>'},
            		    type:'post',
            		    success:function(res)
            		    {
            		        Swal.fire({
            		            title:'Reward Added Successfully',
            		            icon:'success',
                                allowOutsideClick:false,
                                showCloseButton: false,
                                showCancelButton: false,
                                focusConfirm: false,
                                showConfirmButton:false
                            })
            		        setTimeout(function()
            		        {
            		            location.reload();  
            		        },2000);
            		    }
            		})
            	},
            	modal:{
            	    onDismiss:function()
            	    {
                        toastr.error('Payment Cancelled');
                        $('#btnPay').removeAttr('disabled');	        
            	    }
            	},
            	"prefill": {
            		"name": "<?php echo $_SESSION['aadharName']; ?>", // pass customer name
            		"contact": '<?php echo $_SESSION['loginmob']; ?>' //customer phone no.
            	},
            	"theme": {
            		"color": "#ff271d" // screen color
            	}
            };
            var propay = new Razorpay(options);
            propay.open();
            propay.on('payment.failed', function (response){
                toastr.error(response.error.description);
                $('#btnPay').removeAttr('disabled');
            });   
        }else{
            toastr.error('Please Enter Valid Amount');
        }
    })
    
    $('#step7Form').on('submit',function(e)
    {
        e.preventDefault();
        $('#btnSaveOtherInfo').attr('disabled','disabled');
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
                    $('#step7div').addClass('d-none');
                    $('#step6div').removeClass('d-none');
                 }else{
                    toastr.error(parse.message);
                    $('#btnSaveOtherInfo').removeAttr('disabled');
                }  
            }
        });  
    })

    function updateVal(ele,type)
    {
        if(type == 'pan')
        {
            if(ele.checked)
            { 
                $('#isPanAdded').val($('#panNumber').val());
            }else{
                $('#isPanAdded').val('');
            }
        }
        if(type == 'voter')
        {
            if(ele.checked)
            { 
                $('#isVoterAdded').val($('#voterNumber').val());
            }else{
                $('#isVoterAdded').val('');
            }   
        }
        if(type == 'dl')
        {
            if(ele.checked)
            { 
                $('#isDlAdded').val($('#dlNumber').val());
            }else{
                $('#isDlAdded').val('');
            }   
        }
    }
    
    $('#step4form').on('submit',function(e)
    {
        e.preventDefault();
        $('#btn4').attr('disabled','disabled');
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
                    setTimeout(function()
                    {
                        location.href="<?php echo base_url(); ?>user/upload_person_details?pn=5";  
                    },2000);
                 }else{
                    toastr.error(parse.message);
                    $('#btn4').removeAttr('disabled');
                }  
            }
        });
    })

    function verifyContactOtp(ele,count)
    {
        if($('#otp'+count).val() != '')
        {
            if($('#wellrel'+count).val() != '')
            {
                let data= new FormData();
                data.append('count',count);
                data.append('otp',$('#otp'+count).val());
                data.append('mobile',$('#personMob'+count).val());
                data.append('relation',$('#wellrel'+count).val());
                data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
    
                $.ajax({
                  url:'<?php echo base_url(); ?>user/verifyMissingMobileOtp',
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
                          $('#sendOtp'+count).addClass('d-none');
                          $('#resendOtp'+count).addClass('d-none');
                          $('#resendOtp'+count).removeAttr('disabled');
                          $('#otp'+count+'div').addClass('d-none');
                          $('#mob'+count+'veri').val(1);
                          $('#mob'+count).val($('#personMob'+count).val());
                          $('#personMob'+count).attr('readonly',true);
                          $('#personMob'+count).addClass('is-valid');
                      }else{
                          toastr.error(parse.message);
                      }
                  }
                })   
            }else{
                toastr.error('Please Select Relation');
            }
        }else{
            toastr.error('Please Enter Valid Otp');
        }   
    }

    function verifyOtpFunc(ele)
    {
        $(ele).attr('disabled','disabled');
        if($('#verifyOtp').val() != '')
        {
            let data= new FormData();
            data.append('otp',$('#verifyOtp').val());
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            
            $.ajax({
              url:'<?php echo base_url(); ?>user/verifyMissingMobileOtp',
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
                      $('#btnSendOtp').addClass('d-none');
                      $('#verifyDiv').addClass('d-none');
                      $('#mobNumber').attr('disabled',true);
                      $('#btnFir').click();
                  }else{
                      toastr.error(parse.message);
                      $(ele).removeAttr('disabled');
                      $('#Firdiv').addClass('d-none');
                  }
              }
            })
        }else{
            toastr.error('Please Enter Valid Otp');
            $(ele).removeAttr('disabled');
            $('#Firdiv').addClass('d-none');
        }
    }

    function removeMobile(index)
    {
        let count = parseInt(parseInt($('#mobCount').attr('value')));
        if(count > 0)
        {
            $('#addMoreMobileDiv').children().last().remove();
            $('#mob'+index).val('');
            $('#mob'+index+'veri').val(0);
            $('#mobCount').attr('value',((count)) - 1);
        }else{
            $('#mobCount').attr('value',1);
        }
    }
    
    function addMobile()
    {
        let count = parseInt(parseInt($('#mobCount').attr('value')) + parseInt(1));
        if(count <=3)
        {
            let html = '<div class="row mb-3">';
            if(count == 2)
            {
                html += `<div class="col-lg-2 col-md-3 col-sm-12 mb-3">
                        <label class="form-label">Select Relation</label>
                        <select class="form-control" name="wellrel`+count+`" id="wellrel`+count+`" required <?php if($getMissingDetails[0]['isFinalSubmitted'] != 0){ echo "disabled"; } ?>>
                            <?php 
                                if(count($getRelations) > 0)
                                {
                            ?>
                            <option value="" <?php if(!isset($getMissingDetails[0]['relation2'])){ echo "selected"; } ?>>Select Relation</option>
                            <option value="0" <?php if($getMissingDetails[0]['relation2'] == 0 && isset($getMissingDetails[0]['relation2'])){ echo "selected"; } ?>>Other</option>
                            <?php 
                                foreach($getRelations as $k=>$v)
                                {
                            ?>
                            <option value="<?php echo $v['Id']; ?>" <?php if($v['Id'] == $getMissingDetails[0]['relation2']){ echo "selected"; } ?>><?php echo $v['relationName']; ?></option>
                            <?php } }else{ ?>
                            <option value="0" <?php if($getMissingDetails[0]['relation2'] == 0 && isset($getMissingDetails[0]['relation2'])){ echo "selected"; } ?>>Other</option>
                            <?php } ?>
                        </select>
                    </div>`;   
            }else{
                html += `<div class="col-lg-2 col-md-3 col-sm-12 mb-3">
                        <label class="form-label">Select Relation</label>
                        <select class="form-control" name="wellrel`+count+`" id="wellrel`+count+`" required <?php if($getMissingDetails[0]['isFinalSubmitted'] != 0){ echo "disabled"; } ?>>
                            <?php 
                                if(count($getRelations) > 0)
                                {
                            ?>
                            <option value="" <?php if(!isset($getMissingDetails[0]['relation3'])){ echo "selected"; } ?>>Select Relation</option>
                            <option value="0" <?php if($getMissingDetails[0]['relation3'] == 0 && isset($getMissingDetails[0]['relation3'])){ echo "selected"; } ?>>Other</option>
                            <?php 
                                foreach($getRelations as $k=>$v)
                                {
                            ?>
                            <option value="<?php echo $v['Id']; ?>" <?php if($v['Id'] == $getMissingDetails[0]['relation3']){ echo "selected"; } ?>><?php echo $v['relationName']; ?></option>
                            <?php } }else{ ?>
                            <option value="0" <?php if($getMissingDetails[0]['relation3'] == 0 && isset($getMissingDetails[0]['relation3'])){ echo "selected"; } ?>>Other</option>
                            <?php } ?>
                        </select>
                    </div>`;
            }
            html += `
                    <div class="col-lg-2 col-sm-12 col-md-4">
                        <label for="ownerName">Mobile Number</label>
                        <input type="text" class="form-control mt-2" id="personMob`+count+`" name="personMob`+count+`" required placeholder="Enter Mobile Number">  
                    </div>
                    <div class="col-lg-2 mt-4">
                        <button type="button" class="next btn btn-primary mt-2 disabled-on-loading" id="sendOtp`+count+`" onclick="sendContactOtp(this,`+count+`)"> Send OTP</button>
                    </div>    
                    <div class="col-lg-auto mt-4">
                        <button type="button" class="d-none next btn btn-primary mt-2 disabled-on-loading" id="resendOtp`+count+`" onclick="sendContactOtp(this,`+count+`)"> Resend OTP</button>
                    </div>  
                  <div class="col-lg-3 d-none" id="otp`+count+`div">
                      <div class="row">
                          <div class="col-lg-6">
                              <label for="ownerName">Enter OTP</label>
                              <input type="text" class="form-control mt-2" id="otp`+count+`" name="otp`+count+`">
                          </div>
                          <div class="col-lg-6 mt-4">
                              <a href="javascript:void(0)" class="btn btn-outline-success mt-2" onclick="verifyContactOtp(this,`+count+`)">Verify OTP</a>          
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-2 mt-4">
                    <a href="javascript:void(0)" class="btn btn-outline-danger mt-2" onclick="removeMobile(`+count+`)"><i class="fa fa-times" title="remove Mobile"></i></a>
                  </div>
                  </div>`;
          $('#addMoreMobileDiv').append(html);
          $('#mobCount').attr('value',count);   
        }else{
            toastr.error('You can add upto two contact numbers');
        }
    }

    function sendContactOtp(ele,count)
    {
        let mob = $('#personMob'+count).val();
        $(ele).attr('disabled','disabled');
        if(mob != '')
        {
            let data= new FormData();
            data.append('mobile',mob);
            data.append('count',count);
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
              url:'<?php echo base_url(); ?>user/sendMissingPersonVerifyOtp',
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
                      $('#sendOtp'+count).parent().addClass('d-none');
                      $('#sendOtp'+count).addClass('d-none');
                      $('#resendOtp'+count).removeAttr('disabled');
                      $('#resendOtp'+count).removeClass('d-none');
                      $('#personMob'+count).attr('readonly',true);
                      $('#otp'+count+'div').removeClass('d-none');
                  }else if(parse.status == 'username')
                  {
                      toastr.warning(parse.message);
                      removeMobile(count);
                      $(ele).removeAttr('disabled');
                  }else{
                      toastr.error(parse.message);
                      removeMobile(count);
                      $(ele).removeAttr('disabled');
                  }
              }
            })
        }else{
            toastr.error('Please Enter Valid Mobile Number');
            $(ele).removeAttr('disabled');
        }
    }

    function sendOtp(ele)
    {
        let mob = $('#mobNumber').val();
        $(ele).attr('disabled','disabled');
        if(mob != '')
        {
            let data= new FormData();
            data.append('mobile',mob);
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
              url:'<?php echo base_url(); ?>user/sendMissingPersonVerifyOtp',
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
                      $('#mobNumber').attr('readonly',true);
                      $('#verifyDiv').removeClass('d-none');
                  }else{
                      toastr.error(parse.message);
                      $(ele).removeAttr('disabled');
                  }
              }
            })
        }else{
            toastr.error('Please Select Mobile Number');
            $(ele).removeAttr('disabled');
        }
    }
    
    function getAadharName(ele)
    {
        let val = $('#missingaadhar').val();
        if(val != '')
        {
            $(ele).attr('disabled','disabled');
            let data= new FormData();
            data.append('val',val);
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
                url:'<?php echo base_url(); ?>user/getAadharName',
                contentType: false,
                cache: false,
                processData:false,
                type:'post',
                data:data,
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    if(parse.status == 'success')
                    {
                        $('#missingName').attr('name','missingName');
                        $('#missingdate').attr('required',true);
                        $('#missingnondate').attr('required',false);
                        $('#missingdate').attr('name','missingdate');
                        $('#missingnondate').removeAttr('name');
                        $('#isNominee').attr('name','isNominee');
                        if(parse.isNominee == 'Yes')
                        {
                            $('#nomineeYesNote').removeClass('d-none');
                            $('#nomineeNoNote').addClass('d-none');
                            $('.registerednamediv').removeClass('d-none');
                            $('#isNominee').val(parse.isNominee);
                            $('#missingName').val(parse.name);
                            $('#missingName').addClass('readonly');
                            $('#missingName').attr('required',true);
                            $('#isNominee').addClass('readonly');
                            $('#stateoptional').addClass('d-none');
                            $('#firstate').attr('name','firstate');
                            $('#firstate').attr('required',false);
                            
                            $('#distoptional').addClass('d-none');
                            $('#firDistrict').attr('name','firdistrict');
                            $('#firDistrict').attr('required',false);
                            
                            $('#cityoptional').addClass('d-none');
                            $('#fircity').attr('required',false);
                            $('#fircity').attr('name','fircity');
                            
                            $('#policethanaoptional').addClass('d-none');
                            $('#policeThanaName').attr('required',false);
                            $('#policeThanaName').attr('name','policeThanaName');
                            
                            $('#firdateoptional').addClass('d-none');
                            $('#firdate').attr('required',false);
                            $('#firdate').attr('name','firdate');
                            
                            $('#firnumberoptional').addClass('d-none');
                            $('#firNumber').attr('required',false);
                            $('#firNumber').attr('name','firNumber');
                        }else{
                            $('#nomineeYesNote').addClass('d-none');
                            $('#nomineeNoNote').removeClass('d-none');
                            $('#stateoptional').removeClass('d-none');
                            $('#firstate').attr('name','firstate');
                            $('#firstate').attr('required',true);
                            
                            $('#distoptional').removeClass('d-none');
                            $('#firDistrict').attr('name','firdistrict');
                            $('#firDistrict').attr('required',true);
                            
                            $('#cityoptional').removeClass('d-none');
                            $('#fircity').attr('required',true);
                            $('#fircity').attr('name','fircity');
                            
                            $('#policethanaoptional').removeClass('d-none');
                            $('#policeThanaName').attr('required',true);
                            $('#policeThanaName').attr('name','policeThanaName');
                            
                            $('#firdateoptional').removeClass('d-none');
                            $('#firdate').attr('required',true);
                            $('#firdate').attr('name','firdate');
                            
                            $('#firnumberoptional').removeClass('d-none');
                            $('#firNumber').attr('required',true);
                            $('#firNumber').attr('name','firNumber');
                            
                            $('.registerednamediv').removeClass('d-none');
                            $('#isNominee').val(parse.isNominee);
                            $('#missingName').val(parse.name);
                            $('#missingName').addClass('readonly');
                            $('#missingName').attr('required',true);
                            $('#isNominee').addClass('readonly');
                        }
                        $(ele).removeAttr('disabled');
                    }else{
                        $('#missingdate').attr('required',false);
                        $('#missingnondate').attr('required',false);
                        $('#missingdate').removeAttr('name');
                        $('#missingnondate').removeAttr('name');
                        
                        $('#nomineeYesNote').addClass('d-none');
                        $('#nomineeNoNote').addClass('d-none');
                        $('#missingName').removeAttr('name');
                        $('#isNominee').removeAttr('name');
                        $('#stateoptional').removeClass('d-none');
                        $('#firstate').attr('name','firstate');
                        $('#firstate').attr('required',true);
                        
                        $('#distoptional').removeClass('d-none');
                        $('#firDistrict').attr('name','firdistrict');
                        $('#firDistrict').attr('required',true);
                        
                        $('#cityoptional').removeClass('d-none');
                        $('#fircity').attr('required',true);
                        $('#fircity').attr('name','fircity');
                        
                        $('#policethanaoptional').removeClass('d-none');
                        $('#policeThanaName').attr('required',true);
                        $('#policeThanaName').attr('name','policeThanaName');
                        
                        $('#firdateoptional').removeClass('d-none');
                        $('#firdate').attr('required',true);
                        $('#firdate').attr('name','firdate');
                        
                        $('#firnumberoptional').removeClass('d-none');
                        $('#firNumber').attr('required',true);
                        $('#firNumber').attr('name','firNumber');
                        
                        $('.registerednamediv').addClass('d-none');
                        $('#isNominee').val('');
                        $('#missingName').val('');
                        $('#missingName').removeClass('readonly');
                        $('#missingName').attr('required',false);
                        $('#isNominee').removeClass('readonly');
                        $(ele).removeAttr('disabled');
                        toastr.error(parse.message);
                    }
                }
            })
        }else{
            $('#missingdate').attr('required',false);
            $('#missingnondate').attr('required',false);
            $('#missingdate').removeAttr('name');
            $('#missingnondate').removeAttr('name');
            $('#nomineeYesNote').addClass('d-none');
            $('#nomineeNoNote').addClass('d-none');
            $('#missingName').removeAttr('name');
            $('#isNominee').removeAttr('name');
            $('#stateoptional').removeClass('d-none');
            $('#firstate').attr('name','firstate');
            $('#firstate').attr('required',true);
            
            $('#distoptional').removeClass('d-none');
            $('#firDistrict').attr('name','firdistrict');
            $('#firDistrict').attr('required',true);
            
            $('#cityoptional').removeClass('d-none');
            $('#fircity').attr('required',true);
            $('#fircity').attr('name','fircity');
            
            $('#policethanaoptional').removeClass('d-none');
            $('#policeThanaName').attr('required',true);
            $('#policeThanaName').attr('name','policeThanaName');
            
            $('#firdateoptional').removeClass('d-none');
            $('#firdate').attr('required',true);
            $('#firdate').attr('name','firdate');
            
            $('#firnumberoptional').removeClass('d-none');
            $('#firNumber').attr('required',true);
            $('#firNumber').attr('name','firNumber');
            
            $('.registerednamediv').addClass('d-none');
            $('#isNominee').val('');
            $('#missingName').val('');
            $('#missingName').removeClass('readonly');
            $('#missingName').attr('required',false);
            $('#isNominee').removeClass('readonly');
            $(ele).removeAttr('disabled');
            toastr.error('Please Enter Aadhar Number');
        }
    }
    
    function getPreferenceAccordingly(val)
    {
        if(val == '')
        {
            $('#preferredmissingaadhar').attr('required',false);
            $('#prefer2missingname').attr('required',false);
            $('#prefer2missingaadhar').attr('required',false);
            $('#aadharDoc').attr('required',false);
            toastr.error('Please select one preference');
            $('#prefer1div').addClass('d-none');
            $('#prefer2div').addClass('d-none');
        }else{
            if(val == '1')
            {
                $('#prefer2missingname').attr('required',false);
                $('#prefer2missingaadhar').attr('required',false);
                $('#preferredmissingaadhar').attr('required',true);
                $('#aadharDoc').attr('required',false);
                $('#prefer1div').removeClass('d-none');
                $('#prefer2div').addClass('d-none');
            }else{
                $('#prefer2missingname').attr('required',true);
                $('#prefer2missingaadhar').attr('required',true);
                $('#preferredmissingaadhar').attr('required',false);
                $('#aadharDoc').attr('required',true);
                $('#prefer1div').addClass('d-none');
                $('#prefer2div').removeClass('d-none');
            }
        }
    }
    
    $('#step1form').on('submit',function(e)
    {
        e.preventDefault();
        $('#btn1').attr('disabled','disabled');
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
                    setTimeout(function()
                    {
                        location.href="<?php echo base_url(); ?>user/upload_missing_vehicle_details?pn=2";     
                    },2000);
                }else{
                    toastr.error(parse.message);
                    $('#btn1').removeAttr('disabled');
                }
            }
        })
    })
    
    $('#step5Back').click(function()
    {
        location.href="<?php echo base_url(); ?>user/upload_missing_vehicle_details?pn=4";
    })
    
    $('#step5Next').click(function()
    {
        if($('#missingdate').val() != '')
        {
            location.href="<?php echo base_url(); ?>user/upload_missing_vehicle_details?pn=6";   
        }else{
            toastr.error('Please Enter Missing Date');
        }
    })
    
    $('#step6Back').click(function()
    {
        location.href="<?php echo base_url(); ?>user/upload_missing_vehicle_details?pn=5";
    })
    
    $('#step6Next').click(function()
    {
        location.href="<?php echo base_url(); ?>user/upload_missing_vehicle_details?pn=7";
    })
    
    $('#btn3Next').click(function()
    {
        if($('#imagecount').val() > 0)
        {
            location.href="<?php echo base_url(); ?>user/upload_missing_vehicle_details?pn=4";   
        }else{
            toastr.error('Please add one photo to continue');
        }
    })
    
    $('#btn3Back').click(function()
    {
        location.href="<?php echo base_url(); ?>user/upload_missing_vehicle_details?pn=2";
    })
    
    $('#step2form').on('submit',function(e)
    {
        e.preventDefault();
        $('#btn2').attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>user/upload_missing_vehicle_details?pn=3";
    })
    
    function showPaymentAccordingly(val)
    {
        if(val == '0' || val == '')
        {
            $('#btnPay').addClass('disabled');
            $('#btnPay').removeClass('btn-style-green').addClass('btn-style-grey');
        }else{
            $('#btnPay').removeClass('disabled');
            $('#btnPay').removeClass('btn-style-grey').addClass('btn-style-green');
        }
    }
    
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
    
    function showPreview(ele,ev)
    {
        let imagecount = $('#imagecount').val();
        for(let j=0;j<5;j++)
        {
            $('#img'+j).addClass('d-none');   
        }
        for(let j=0;j<ele.target.files.length;j++)
        {
            $('#img'+j).removeClass('d-none');   
        }
        if(imagecount == 0)
        {
            if(ele.target.files.length <= 5)
            {
                if(ele.target.files.length > 0){
                    $('#previewDiv').removeClass('d-none');
                    for (var i = 0; i < ele.target.files.length; i++) {
                        var src = URL.createObjectURL(ele.target.files[i]);
                        var preview = document.getElementById("img"+i);
                        preview.src = src;
                    }
                }else{
                    toastr.error('Please Select Files');
                    $(ev).val('');
                    for(let j=0;j<5;j++)
                    {
                        $('#img'+j).addClass('d-none');   
                    }
                }   
            }else{
                toastr.error('You can upload upto 5 files');
                $(ev).val('');
                for(let j=0;j<5;j++)
                {
                    $('#img'+j).addClass('d-none');   
                }
            }
        }else{
            if(ele.target.files.length <= (5- imagecount))
            {
                if(ele.target.files.length > 0){
                    $('#previewDiv').removeClass('d-none');
                    for (var i = 0; i < ele.target.files.length; i++) {
                        var src = URL.createObjectURL(ele.target.files[i]);
                        var preview = document.getElementById("img"+i);
                        preview.src = src;
                    }
                }else{
                    toastr.error('Please Select Files');
                    $(ev).val('');
                    for(let j=0;j<5;j++)
                    {
                        $('#img'+j).addClass('d-none');   
                    }
                }
            }else{
                toastr.error('You have already uploaded '+imagecount+' files');
                $(ev).val('');
                for(let j=0;j<5;j++)
                {
                    $('#img'+j).addClass('d-none');   
                }
            }
        }
    }
    
    $('.close').click(function()
    {
        $('#photoModal').modal('hide');
    })
    
    function deletePhoto(missingId,Id)
    {
        Swal.fire({
            title: '<strong class="text-dark" style="font-size:20px;">Delete Photo</strong>',
            icon: 'info',
            html:'<div class="form-group mb-2">Are you sure you want to delete this photo?</div>',
            allowOutsideClick:true,
            showCloseButton: true,
            showCancelButton: true,
            focusConfirm: true,
            showConfirmButton:true
        }).then((result) => {
            if (result.isConfirmed) {
                    $.ajax({
                    url:'<?php echo base_url(); ?>user/deleteMissingVehiclePhoto/'+missingId,
                    type:'get',
                    success:function(res)
                    {
                        toastr.success('Photo Deleted Successfully');
                        setTimeout(function()
                        {
                            location.reload();
                        },2000);
                    }
                })
            }
        })
    }
    
    function copyLink(type,Id)
    {
        navigator.clipboard.writeText('<?php echo base_url(); ?>user/missingvehicledetail?Id='+Id+'&type='+type);
        toastr.success('Link Copied Successfully');
    }
    
    function downloadPdf(ele,url)
    {
        const a = document.createElement('a')
        a.href = url
        a.download = url.split('/').pop()
        document.body.appendChild(a)
        a.click()
        document.body.removeChild(a)
    }
    
    function editPhoto(missingId,Id)
    {
        $('#editInput').trigger('focus')
        $('#updateId').val(Id);
        $('#updateMissingId').val(missingId);
        $('#photoModal').modal('show');
    }
    
    function cancelReUpload(ele,index)
    {
        $('#reUploadBtn'+index).addClass('d-none');
        $('#reUploadDiv'+index).addClass('d-none');   
    }
    
    function uploadLatestPhoto(ele,index)
    {
        if($('#latestFile'+index).val() == '')
        {
            toastr.error('Please Select Photo to continue');
        }else{
            $(ele).attr('disabled','disabled');
            let data = new FormData();
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            data.append('isUploaded',$('#isLatestPhotoUploaded'+index).val());
            let file = $('#latestFile'+index)[0].files[0];
            data.append('file',file);
            $.ajax({
                url:'<?php echo base_url(); ?>user/uploadVehicleLatestPhoto',
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
                        },2000);
                    }else{
                        toastr.error(parse.message);
                    }
                }
            });
        }
    }
    
    function showFirAccordingly(val)
    {
        if(val == '')
        {
            $('#stateoptional').removeClass('d-none');
            $('#firstate').attr('name','firstate');
            $('#firstate').attr('required',true);
            
            $('#distoptional').removeClass('d-none');
            $('#firDistrict').attr('name','firdistrict');
            $('#firDistrict').attr('required',true);
            
            $('#cityoptional').removeClass('d-none');
            $('#fircity').attr('required',true);
            $('#fircity').attr('name','fircity');
            
            $('#policethanaoptional').removeClass('d-none');
            $('#policeThanaName').attr('required',true);
            $('#policeThanaName').attr('name','policeThanaName');
            
            $('#firdateoptional').removeClass('d-none');
            $('#firdate').attr('required',true);
            $('#firdate').attr('name','firdate');
            
            $('#missingdateoptional').removeClass('d-none');
            $('#missingdate').attr('required',true);
            $('#missingdate').attr('name','missingdate');
            
            $('#firnumberoptional').removeClass('d-none');
            $('#firNumber').attr('required',true);
            $('#firNumber').attr('name','firNumber');
        }else{
            if(val == '1')
            {
                $.ajax({
                    url:'<?php echo base_url(); ?>user/checkMissingNominee',
                    type:'get',
                    success:function(res)
                    {
                        let parse = JSON.parse(res);
                        if(parse.status == 'success')
                        {
                            $('#stateoptional').addClass('d-none');
                            $('#firstate').removeAttr('name');
                            $('#firstate').attr('required',false);
                            
                            $('#distoptional').addClass('d-none');
                            $('#firDistrict').removeAttr('name');
                            $('#firDistrict').attr('required',false);
                            
                            $('#cityoptional').addClass('d-none');
                            $('#fircity').attr('required',false);
                            $('#fircity').removeAttr('name');
                            
                            $('#policethanaoptional').addClass('d-none');
                            $('#policeThanaName').attr('required',false);
                            $('#policeThanaName').removeAttr('name');
                            
                            $('#firdateoptional').addClass('d-none');
                            $('#firdate').attr('required',false);
                            $('#firdate').removeAttr('name');
                            
                            $('#missingdateoptional').addClass('d-none');
                            $('#missingdate').attr('required',false);
                            $('#missingdate').removeAttr('name');
                            
                            $('#firnumberoptional').addClass('d-none');
                            $('#firNumber').attr('required',false);
                            $('#firNumber').removeAttr('name');
                        }else{
                            Swal.fire({
                                title: '<strong class="text-danger" style="font-size:20px;">You are not a nominee</strong>',
                                icon: 'error',
                                allowOutsideClick:false,
                                showCloseButton: true,
                                showCancelButton: false,
                                focusConfirm: false,
                                showConfirmButton:true
                            }).then((result) => {
                                $('#stateoptional').removeClass('d-none');
                                $('#firstate').attr('name','firstate');
                                $('#firstate').attr('required',true);
                                
                                $('#distoptional').removeClass('d-none');
                                $('#firDistrict').attr('name','firdistrict');
                                $('#firDistrict').attr('required',true);
                                
                                $('#cityoptional').removeClass('d-none');
                                $('#fircity').attr('required',true);
                                $('#fircity').attr('name','fircity');
                                
                                $('#policethanaoptional').removeClass('d-none');
                                $('#policeThanaName').attr('required',true);
                                $('#policeThanaName').attr('name','policeThanaName');
                                
                                $('#firdateoptional').removeClass('d-none');
                                $('#firdate').attr('required',true);
                                $('#firdate').attr('name','firdate');
                                
                                $('#missingdateoptional').removeClass('d-none');
                                $('#missingdate').attr('required',true);
                                $('#missingdate').attr('name','missingdate');
                                
                                $('#firnumberoptional').removeClass('d-none');
                                $('#firNumber').attr('required',true);
                                $('#firNumber').attr('name','firNumber');
                            })
                        }
                    }
                })
            }else{
                $('#stateoptional').removeClass('d-none');
                $('#firstate').attr('name','firstate');
                $('#firstate').attr('required',true);
                
                $('#distoptional').removeClass('d-none');
                $('#firDistrict').attr('name','firdistrict');
                $('#firDistrict').attr('required',true);
                
                $('#cityoptional').removeClass('d-none');
                $('#fircity').attr('required',true);
                $('#fircity').attr('name','fircity');
                
                $('#policethanaoptional').removeClass('d-none');
                $('#policeThanaName').attr('required',true);
                $('#policeThanaName').attr('name','policeThanaName');
                
                $('#firdateoptional').removeClass('d-none');
                $('#firdate').attr('required',true);
                $('#firdate').attr('name','firdate');
                
                $('#missingdateoptional').removeClass('d-none');
                $('#missingdate').attr('required',true);
                $('#missingdate').attr('name','missingdate');
                
                $('#firnumberoptional').removeClass('d-none');
                $('#firNumber').attr('required',true);
                $('#firNumber').attr('name','firNumber');
            }
        }
    }
    
    function resendFirOtp(ele)
    {
        $(ele).attr('disabled','disabled');
        $.ajax({
            url:'<?php echo base_url(); ?>user/resendFirOtp',
            type:'get',
            success:function(res)
            {
                toastr.success('OTP Sent Succesfully');
                $(ele).removeAttr('disabled');
            }
        })
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
    
    function showOtpAccordingly(val,index)
    {
        if(val.length == 10)
        {
            $('#sendOtpDiv'+index+' button').removeClass('btn-style-grey').addClass('btn-style-five');
            $('#sendOtpDiv'+index+' button').removeClass('disabled');
        }else{
            $('#sendOtpDiv'+index+' button').removeClass('btn-style-five').addClass('btn-style-grey');
            $('#sendOtpDiv'+index+' button').addClass('disabled');
        }
    }
    
    function getVehicleNumber(val)
    {
        if(val == '')
        {
            $('#rcNumber').empty();
            $('#rcNumber').append('<option value="">Select Vehicle Number</option>');
            toastr.error('Please Select Vehicle Type');
        }else{
            $.ajax({
                url:'<?php echo base_url(); ?>user/getVehicleNumber',
                data:{_token:'<?php echo $this->security->get_csrf_hash(); ?>','type':val},
                type:'post',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    if(parse.status == 'success')
                    {
                        $('#rcNumber').empty();
                        $('#rcNumber').append('<option value="">Select Vehicle Number</option>');
                        for(let i=0;i<parse.data.length;i++)
                        {
                            $('#rcNumber').append('<option value="'+parse.data[i].rcNumber+'">'+parse.data[i].rcNumber+'</option>');
                        }
                    }else{
                        $('#rcNumber').empty();
                        $('#rcNumber').append('<option value="">Select Vehicle Number</option>');
                        toastr.error('No Vehicles Found');
                    }
                }
            })
        }
    }
    
    function showStep1Btn(val)
    {
        if(val.length > 6)
        {
            $('#btn1').removeClass('disabled');
            $('#btn1').removeClass('btn-style-grey').addClass('btn-style-five');
        }else{
            $('#btn1').addClass('disabled');
            $('#btn1').removeClass('btn-style-five').addClass('btn-style-grey');
        }
    }
    
    $('#rcNumber').on('keypress', function(e) {
        if (e.which == 32){
            return false;
        }
    });
    
    function verifyVehicleMobileOtp(ele,count)
    {
        $(ele).attr('disabled','disabled');
        if($('#otp'+count).val() != '')
        {
            let relation = $('#wellrel'+count).val();
            if( relation != '')
            {
                if(relation != 3)
                {
                    let data= new FormData();
                    data.append('relation',$('#wellrel'+count).val());
                    data.append('otp',$('#otp'+count).val());
                    data.append('mobile',$('#vehicleMob'+count).val());
                    data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                    data.append('count',count);
                    $.ajax({
                      url:'<?php echo base_url(); ?>user/verifyVehicleMissingMobileOtp',
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
                              },2000);
                          }else{
                              toastr.error(parse.message);
                              $(ele).removeAttr('disabled');
                          }
                      }
                    })   
                }else{
                    if($('#otherrelation'+count).val() != '')
                    {
                        let data= new FormData();
                        data.append('relation',$('#wellrel'+count).val());
                        data.append('otherrelation',$('#otherrelation'+count).val());
                        data.append('otp',$('#otp'+count).val());
                        data.append('mobile',$('#vehicleMob'+count).val());
                        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                        data.append('count',count);
                        $.ajax({
                          url:'<?php echo base_url(); ?>user/verifyVehicleMissingMobileOtp',
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
                                  },2000);
                              }else{
                                  toastr.error(parse.message);
                                  $(ele).removeAttr('disabled');
                              }
                          }
                        })   
                    }else{
                        toastr.error('Please Enter Other Relation Name');
                        $(ele).removeAttr('disabled');
                    }
                }
            }else{
                toastr.error('Please Select Relation');
                $(ele).removeAttr('disabled');
            }
        }else{
            toastr.error('Please Enter Valid OTP');
            $(ele).removeAttr('disabled');
        }
    }
    
    function resendVehicleMobileOtp(ele,index)
    {
        let mob = $('#vehicleMob'+index).val();
        $(ele).attr('disabled','disabled');
        let data= new FormData();
        data.append('mobile',mob);
        data.append('count',index);
        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        $.ajax({
            url:'<?php echo base_url(); ?>user/sendVehicleMissingMobileOtp',
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
                }else if(parse.status == 'username')
                {
                    toastr.warning(parse.message);
                    $(ele).removeAttr('disabled');
                }else{
                    toastr.error(parse.message);
                    $(ele).removeAttr('disabled');
                }
            }
        })
    }

    function sendVehicleMobileOtp(count)
    {
        let mob = $('#vehicleMob'+count).val();
        $('#sendOtp'+count).attr('disabled','disabled');
        if(mob != '')
        {
            let relation = $('#wellrel'+count).val();
            if( relation != '')
            {
                if(relation != 3)
                {
                    let data= new FormData();
                    data.append('mobile',mob);
                    data.append('count',count);
                    data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                    $.ajax({
                        url:'<?php echo base_url(); ?>user/sendVehicleMissingMobileOtp',
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
                                $('#vehicleMob'+count).attr('readonly',true);
                                Swal.fire({
                                  title: '<strong>Enter OTP to proceed </strong>',
                                  icon: 'success',
                                  allowOutsideClick:false,
                                  html:
                                    '<div class="form-group mb-3"><label class="form-label">Enter OTP</label><input type="number" class="form-control" id="otp'+count+'"></div><div class="form-group"><button type="button" class="w-100 btn btn-primary save disabled-on-loading" onclick="verifyVehicleMobileOtp(this,'+count+')"> Verify OTP</button></div><div class="form-group mt-3 col-lg-6 col-md-6 col-sm-12" style="margin-left:auto;"><button type="button" class="w-100 btn btn-primary btn-style-five disabled-on-loading" onclick="resendVehicleMobileOtp(this,'+count+')"> Resend OTP</button></div>',
                                  showCloseButton: true,
                                  showCancelButton: false,
                                  focusConfirm: false,
                                  showConfirmButton:false
                                }).then((result) => {
                                    if(result.isDismissed){
                                        location.reload();
                                    }
                                })
                            }else if(parse.status == 'username')
                            {
                                toastr.warning(parse.message);
                                $('#sendOtp'+count).removeAttr('disabled');
                            }else{
                                toastr.error(parse.message);
                                $('#sendOtp'+count).removeAttr('disabled');
                            }
                      }
                    })
                }else{
                    if($('#otherrelation'+count).val() != '')
                    {
                        let data= new FormData();
                        data.append('mobile',mob);
                        data.append('count',count);
                        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                        $.ajax({
                            url:'<?php echo base_url(); ?>user/sendVehicleMissingMobileOtp',
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
                                    $('#vehicleMob'+count).attr('readonly',true);
                                    Swal.fire({
                                      title: '<strong>Enter OTP to proceed </strong>',
                                      icon: 'success',
                                      allowOutsideClick:false,
                                      html:
                                        '<div class="form-group mb-3"><label class="form-label">Enter OTP</label><input type="number" class="form-control" id="otp'+count+'"></div><div class="form-group"><button type="button" class="w-100 btn btn-primary save disabled-on-loading" onclick="verifyVehicleMobileOtp(this,'+count+')"> Verify OTP</button></div><div class="form-group mt-3 col-lg-6 col-md-6 col-sm-12" style="margin-left:auto;"><button type="button" class="w-100 btn btn-primary btn-style-five disabled-on-loading" onclick="resendVehicleMobileOtp(this,'+count+')"> Resend OTP</button></div>',
                                      showCloseButton: true,
                                      showCancelButton: false,
                                      focusConfirm: false,
                                      showConfirmButton:false
                                    }).then((result) => {
                                        if(result.isDismissed){
                                            location.reload();
                                        }
                                    })
                                }else if(parse.status == 'username')
                                {
                                    toastr.warning(parse.message);
                                    $('#sendOtp'+count).removeAttr('disabled');
                                }else{
                                    toastr.error(parse.message);
                                    $('#sendOtp'+count).removeAttr('disabled');
                                }
                          }
                        })   
                    }else{
                        toastr.error('Please Enter Other Relation Name');
                        $('#sendOtp'+count).removeAttr('disabled');
                    }
                }
            }else{
                toastr.error('Please Select Relation');
                $('#sendOtp'+count).removeAttr('disabled');    
            }
        }else{
            toastr.error('Please Enter Valid Mobile Number');
            $('#sendOtp'+count).removeAttr('disabled');
        }
    }
    
    </script>
  <script>
    $(".readonly").on('keydown paste focus mousedown', function(e){
        if(e.keyCode != 9) // ignore tab
            e.preventDefault();
    });
</script>