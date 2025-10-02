<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/face-detection.css">
<script src="<?= base_url(); ?>assets/js/face-api.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/webcam-easy/dist/webcam-easy.min.js"></script>
<style>
    .no-border-radius {
              border-radius: 0 !important;
            }
    .no-border {
              border: 0 !important;
            }
    div:where(.swal2-container) div:where(.swal2-popup){
        width:auto;
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
    
    .activeLabel{
            background-color: #ffc107;
            padding: 0.5rem;
            display:block;
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
    .word {
        width: 385px;
        overflow-wrap: break-word;  
        word-wrap: break-word; 
        word-break: break-word;
    }
    
    @media screen and (max-width:525px)
    {
        .word {
            width: 100%;
            overflow-wrap: break-word;  
            word-wrap: break-word; 
            word-break: break-word;
        }   
    }
    
    div:where(.swal2-container) div:where(.swal2-popup){
        width:auto;
    }
    #swal2-html-container{
        margin: 0 1rem!important;
    }
    .form-label{
        color:black;
    }
    .lapataTitle{
        margin-top:1.5rem;
        padding:1rem 0rem;
    }
    select[disabled]{
        appearance:none!important;
    }
    .select2-container{
        width:-webkit-fill-available!important;
    }
    .form-floating label{
        font-weight:bold;
        opacity:1!important;
    }
    .social a.btn-circle .btn-google {
                color: #fff;
                background-color: #e44134;
                border-color: transparent;
            }
            .btn-police1{
                 color: #fff!important;
                background-color: green!important;
                border-color: transparent;
            }
             .btn-police2{
                 color: #fff!important;
                background-color: #e44134!important;
                border-color: transparent;
            }
             .btn-police3{
                 color: #fff!important;
                background-color: #5daed5!important;
                border-color: transparent;
            }
             .btn-police4{
                 color: #fff!important;
                background-color: orange!important;
                border-color: transparent;
            }
            .btn-group-sm>.btn.btn-circle, .btn.btn-circle.btn-sm {
                    width: 2.8rem;
                    height: 2.8rem;
                    font-size: .8rem;
                }
                .btn.btn-circle {
                    padding: 0;
                    border-radius: 100%!important;
                    width: 2.2rem;
                    height: 2.2rem;
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                    font-size: 1rem;
                    line-height: 1;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                    margin-right:2px;
                }
                .btn:hover {
color: var(--bs-btn-hover-color);
background-color: var(--bs-btn-hover-bg);
border-color: var(--bs-btn-hover-border-color);
}
</style>
<style>
    #the-count {
      float: right;
      padding: 0.1rem 0 0 0;
      font-size: 0.875rem;
    }
    .select2-results__option{
        text-transform:uppercase;
    }
    select{
        appearance:auto!important;
    }
</style>
<?php 
    $getProfileDetail = $this->db->query('select * from user where uid='.$_SESSION['user_id'])->result_array();
?>
<div id="uploadimageModal" style="z-index:1111;" class="modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn btn-danger close1 me-2" data-dismiss="modal" style="color:white;">&times;</button>
                <h4 class="modal-title" style="font-size:1.2rem;">Upload Person Photo</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12 text-center">
                        <div id="image_demo" style="width:100%; margin-top:30px"></div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-12 text-center">
                        <button type="button" class="btn btn-success crop_image disabled-on-loading btn-style-green"> Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<main id="main" class="main px-0">
    <div class="container-fluid px-0">
        <section class="section register d-flex flex-column align-items-center justify-content-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12 d-flex flex-column align-items-center justify-content-center <?php if($pn != 1){ echo "d-none"; } ?>">
                        <div class="card mb-3 w-100">
                            <div class="card-body mt-0">
                                <div class="row pt-0 pb-0" style="align-items:center;justify-content:space-between;">
                                    <div class="col-6 my-3">
                                        <h5 class="card-title pb-0 fs-4">Hand Over Person / Claim Reward</h5>
                                    </div>
                                    <div class="col-12 col-md-6 d-none text-end mt-3" id="personImage">
                                        <img style="height:120px;width:120px;">
                                    </div>
                                </div>
                                <div>
                                    <!--Success message-->
                                    <?php 
                                        $add_succ=$this->session->flashdata('success');
                                        if($add_succ){
                                    ?>
                                    <div class="alert alert-success alert-dismissible">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong><?php echo $add_succ;?></strong> 
                                    </div>
                                    <?php } ?>
                                    <?php 
                                        $del_succ=$this->session->flashdata('error');
                                        if($del_succ){
                                    ?>
                                    <div class="invalid-feedback d-block"><?php echo $del_succ;?></div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <form id="loginForm" action="<?php echo base_url(); ?>user/lapatawith" method="post" class="row g-3 w-100 needs-validation1"  enctype="multipart/form-data">
                            <?php 
                                $csrf = array(
                                    'name' => $this->security->get_csrf_token_name(),
                                    'hash' => $this->security->get_csrf_hash()
                                );
                            ?>
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <div class="card">
                                <div class="card-body mt-0">
                                    <div class="row align-items-end aadharRow">
                                        <div class="form-floating col-10 col-md-3 mt-3">
                                            <input type="text" class="form-control text-uppercase" required name="appNumber" id="appNumber"  placeholder="Application Number">
                                            <label for="pkgdur" class="ms-2" id="aadharLabel"> Enter Person Application No.* </label>
                                        </div>
                                        <div class="mt-3 col-2 px-0 col-md-auto" id="aadharsearchdiv">
                                            <button type="button" onclick="checkApp(this)" id="btnappNext" style="border-radius:5px 5px!important;padding: 9px 15px!important" class="btn btn-style-green text-center disabled-on-loading"> <i class="fa fa-check-circle"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-12 col-md-12 d-flex flex-column align-items-center justify-content-center <?php if($pn != 2){ echo "d-none"; } ?>">
                        <div class="card mb-3 w-100">
                            <div class="card-body mt-0">
                                <div class="pt-0 pb-0">
                                    <h5 class="card-title text-center pb-0 fs-4 mb-0"><span class="text-danger fs-4">Handover Over Person / Claim Reward</h5>
                                </div>
                            </div>
                        </div>
                        <form id="step2Form" method="post" class="row g-1 needs-validation1 w-100"  enctype="multipart/form-data">
                            <?php 
                                $csrf = array(
                                    'name' => $this->security->get_csrf_token_name(),
                                    'hash' => $this->security->get_csrf_hash()
                                );
                            ?>
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <?php 
                                if(isset($_SESSION['handoverId']))
                                {
                                    
                            ?>
                            <?php
                                $getHandoverDetails = $this->db->query('select * from handover where Id='.$_SESSION['handoverId'])->result_array();
                            ?>
                            <div class="card">
                                <div class="card-body p-4">
                                    <div class="row">
                                        <div class="form-floating col-lg-3 col-sm-12 mt-3 col-md-4">
                                            <input type="text" disabled class="form-control text-uppercase" value="<?= $getHandoverDetails[0]['applicationNumber'] ?>"  placeholder="Application Number">
                                            <label for="pkgdur" class="ms-2" id="aadharLabel"> Application No. </label>
                                        </div>
                                        <div class="form-floating col-lg-3 col-sm-12 mt-3 col-md-4">
                                            <input type="text" disabled class="form-control text-uppercase" value="<?= $getHandoverDetails[0]['mobileNumber'] ?>"  placeholder="Application Number">
                                            <label for="pkgdur" class="ms-2" id="aadharLabel"> Mobile No. </label>
                                        </div>
                                        <?php 
                                            if($getHandoverDetails[0]['uploadedBy'] != 'police')
                                            {
                                        ?>
                                        <div class="form-floating col-lg-3 col-sm-12 mt-3 col-md-4">
                                            <input type="text" disabled class="form-control text-uppercase" value="<?= $getHandoverDetails[0]['uploaderAadhar'] ?>"  placeholder="Application Number">
                                            <label for="pkgdur" class="ms-2" id="aadharLabel"> Uploader Aadhar Number </label>
                                        </div>
                                        <div class="form-floating col-lg-3 col-sm-12 mt-3 col-md-4">
                                            <input type="text" disabled class="form-control text-uppercase" value="<?= $getHandoverDetails[0]['username'] ?>"  placeholder="Application Number">
                                            <label for="pkgdur" class="ms-2" id="aadharLabel"> Uploader Name </label>
                                        </div>
                                        <?php }else{ 
                                            $getPoliceDetails = $this->db->query('select * from police where username="'.$getHandoverDetails[0]['username'])->result_array();
                                        ?>
                                        <div class="form-floating col-lg-3 col-sm-12 mt-3 col-md-4">
                                            <input type="text" disabled class="form-control text-uppercase" value="<?= $getPoliceDetails[0]['thanaName'] ?>"  placeholder="Application Number">
                                            <label for="pkgdur" class="ms-2" id="aadharLabel"> Thana Name </label>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <hr/>
                                    <div class="form-group mt-3">
                                        <label class="form-label mx-2"><b>Choose Preference</b></label>
                                        <div class="row align-items-end">
                                            <div class="col-lg-auto col-sm-12 col-md-6 mt-3">
                                                <span class="mx-2 <?php if($getHandoverDetails[0]['handOverType'] == 'with' || $getHandoverDetails[0]['handOverType'] == NULL){ echo "activeLabel"; } ?>" id="visibility1label">
                                                    <input type="radio" name="handOverType" id="visibility2" class="radio-custom" value="with" <?php if($getHandoverDetails[0]['handOverType'] == 'with' || $getHandoverDetails[0]['handOverType'] == NULL){ echo "checked"; } ?> required>
                                                    <label for="visibility2" class="ml-2 radio-custom-label" style="font-weight:bold;">Hand Over Person With Claiming Reward</label>
                                                </span>
                                            </div>
                                            <div class="col-lg-auto col-sm-12 col-md-6 mt-3">
                                                <span class="mx-2 <?php if($getHandoverDetails[0]['handOverType'] == 'without'){ echo "activeLabel"; } ?>" id="visibility2label">
                                                    <input type="radio" name="handOverType" id="visibility1" class="radio-custom" value="without" <?php if($getHandoverDetails[0]['handOverType'] == 'without'){ echo "checked"; } ?> required>
                                                    <label for="visibility1" style="font-weight:bold;" class="ml-2 radio-custom-label">Hand Over Person Without Claiming Reward</label>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body mt-0 pb-0">
                                    <div class="row align-items-center justify-content-start">
                                        <div class="col-lg-auto col-md-auto my-3 col-12">
                                            <button class="btn btn-primary w-100 btn-style-four disabled-on-loading" id="btn2Next" type="button" style="background-color:  #05106c !important;"> Save & Next</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </form>
                    </div>
                    <form class="row g-3 needs-validation justify-content-center <?php if($pn != 3){ echo "d-none"; } ?>" method="post" action="<?php echo base_url(); ?>user/checkHandoverFace" novalidate id="step3Form">
                    <?php 
                        $csrf = array(
                          'name' => $this->security->get_csrf_token_name(),
                          'hash' => $this->security->get_csrf_hash()
                          );
                        ?>
                    <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                    <?php 
                        if(isset($_SESSION['handoverId']))
                        {
                            $getHandoverDetails = $this->db->query('select * from handover where Id='.$_SESSION['handoverId'])->result_array();
                            $getUnknownDetails = $this->db->query('select * from unknown_person where Application_no="'.$getHandoverDetails[0]['applicationNumber'].'"')->result_array();
                        ?>
                        <input type="hidden" name="image2" value="<?= base_url().''.$getUnknownDetails[0]['Photo']; ?>">
                    <div class="card col-lg-4">
                        <div class="card-header my-0">
                            <h5 class="card-title text-center py-0 mb-0">Upload Person Photo</h5>
                        </div>
                        <div class="card-body">
                            <div class="row mt-3 justify-content-center">
                                <div class="col-lg-10 col-md-6" id="sampleDiv">
                                    <input type="file" hidden id="uploadFile" accept="image/*">
                                    <img src="<?php echo base_url(); ?>assets/images/faceicon.png" style="width:100%;height:200px;">
                                    <input type="hidden" name="mainPhotoSelectedFacematch" id="mainPhotoSelectedFacematch">
                                </div>
                            </div>
                            <div class="row mt-3 justify-content-center" style="display:none" id="element">
                                <div class="col-lg-10 col-md-6">
                                    <h5 class="text-center">Preview Photo</h5>
                                    <img src="<?php echo base_url(); ?>assets/img/noimage.jpg" style="width:100%;height:200px;" id="mainPhotoUploaded">
                                </div>
                            </div>
                            <div class="row mt-3 justify-content-center" id="uploadBtnDiv">
                                <div class="col-lg-10 col-md-6 text-center">
                                    <button type="button" class="btn w-100 btn-primary btn-style-four" id="uploadPhotoBtn" onclick="showFileUpload()">Upload Photo <i class="fa fa-upload"></i></button>
                                </div>
                            </div>
                            <div class="row mt-4 mb-3 justify-content-center">
                                <div class="col-6 px-1 d-none" id="retakebtndiv">
                                    <button type="button" class="btn w-100 btn-primary btn-style-yellow" id="retakePhotoBtn" onclick="showFileUpload()">Retake <i class="fa fa-upload"></i></button>
                                </div>
                                <div class="col-lg-6 px-1 col-sm-12 col-6 col-md-6">
                                    <button type="submit" id="btn3" class="w-100 btn btn-primary btn-style-green disabled-on-loading"> Search <i class="fa fa-arrow-circle-right"></i></button>
                                </div>
                            </div>
                            <?php } ?>  
                        </div>
                    </div>
                </form>
                </div>
                </div>
            </div>
        </section>
    </div>
</main>
<input type="hidden" id="uploadedBy">
<input type="hidden" id="aadharNumber">
<input type="hidden" id="mobileNumber">
<input type="hidden" id="thanaUsername">
<input type="hidden" id="thanaName">
<input type="hidden" id="username">
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js" integrity="sha512-Gs+PsXsGkmr+15rqObPJbenQ2wB3qYvTHuJO6YJzPe/dTLvhy0fmae2BcnaozxDo5iaF8emzmCZWbQ1XXiX2Ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" integrity="sha512-2eMmukTZtvwlfQoG8ztapwAH5fXaQBzaMqdljLopRSA0i6YKM8kBAOrSSykxu9NN9HrtD45lIqfONLII2AFL/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .swal2-close{
        background:white!important;
        color:black!important;
    }
</style>
<script>
    function showFileUpload(){
        $('#image_demo').croppie('destroy');
        if(window.innerWidth <= 525)
        {
            $image_crop = $('#image_demo').croppie({
                enableExif: true,
                viewport: {
                  width:'100%',
                  height:400,
                  type:'square' //circle
                },
                boundary:{
                  width:'100%',
                  height:500
                }
              });    
        }else{
            $image_crop = $('#image_demo').croppie({
                enableExif: true,
                viewport: {
                  width:'300',
                  height:400,
                  type:'square' //circle
                },
                boundary:{
                  width:'400',
                  height:500
                }
              });
        }
        $('#uploadFile').click();
    }
    
    if(window.innerWidth <= 525)
    {
        $image_crop = $('#image_demo').croppie({
            enableExif: true,
            viewport: {
              width:'100%',
              height:400,
              type:'square' //circle
            },
            boundary:{
              width:'100%',
              height:500
            }
          });    
    }else{
        $image_crop = $('#image_demo').croppie({
            enableExif: true,
            viewport: {
              width:'300',
              height:400,
              type:'square' //circle
            },
            boundary:{
              width:'400',
              height:500
            }
          });
    }
      
    $('.crop_image').click(function(event){
        $image_crop.croppie('result', {
          type: 'canvas',
          size: 'viewport',
          format:'jpeg'
        }).then(function(response){
            $('#mainPhotoUploaded').attr('src',response);
            $('#mainPhotoSelectedFacematch').val(response);
            $('#sampleDiv').hide();
            $('#element').show();
            $('#uploadimageModal').modal('hide');
            $('#uploadBtnDiv').addClass('d-none');
            $('#retakebtndiv').removeClass('d-none');
        })
    });
    
    $('#uploadFile').on('change',async function(e)
    {
        if($(this)[0].files.length > 0)
        {
            var reader = new FileReader();
            reader.onload = function (event) {
              $image_crop.croppie('bind', {
                url: event.target.result
              }).then(function(){
                console.log('jQuery bind complete');
              });
            }
            reader.readAsDataURL($(this)[0].files[0]);
            $('#uploadimageModal').modal('show');   
        }
    })
    
    $('#step3Form').on('submit',function(e)
    {
        $('#btn3').attr('disabled','disabled');
        e.preventDefault();
        if(($('#mainPhotoSelectedFacematch').val()) != '')
        {
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
                        toastr.success('Process Completed Successfully');
                        setTimeout(function()
                        {
                            location.href="<?= base_url(); ?>user-dashboard";
                        },2000);
                    }else{
                        Swal.fire({
                            iconHtml: '<img src="'+$('#mainPhotoSelectedFacematch').val()+'" style="height: 100%;border-radius: 0;width: 80px;">',
                            customClass: {
                                actions: 'mt-0',
                                cancelButton: 'save',
                                popup: 'pb-2',
                                confirmButton: 'btn-style-primary-no-border',
                                icon: 'no-border-radius mb-0 mt-3'
                            },
                            html: "<h5 style='color:red;font-weight:bold;' class='mt-1'><b>Oops ! Face not Matched</b></h5><div class='form-group mb-2'><button type='button' class='btn btn-success save' onclick='swal.close();'>Please Try Again</button></div><div class='form-group mb-0 text-end'><button type='button' class='btn btn-primary btn-style-primary-no-border'>View Guidlines</button></div>",
                            showCloseButton:true,
                            showConfirmButton:false,
                            confirmButtonText:'View Guidlines',
                            showCancelButton:false,
                            'cancelButtonText':'Please Try Again'
                        })
                        $('#btn3').removeAttr('disabled');            
                    }
                }
            });
        }else{
            Swal.fire({
                icon:'error',
                html: "<h4 style='color:black;'><b>Please Upload Person's Photo</b></h4>",
                showCloseButton:true,
                showConfirmButton:false,
                showCancelButton:true,
                'cancelButtonText':'Ok'
            })
            $('#btn3').removeAttr('disabled');
        }
    })
    
    $('#btn2Next').click(function(){
        $(this).attr('disabled','disabled');
        let formData = new FormData($('#step2Form')[0]);
        $.ajax({
            url:'<?php echo base_url(); ?>user/updateHandoverPreference',
            type:'post',
            processData:false,
            contentType:false,
            data:formData,
            cache:false,
            success:function(res)
            {
                toastr.success('Preferences Saved Successfully');
                $('#btn2Next').removeAttr('disabled');   
                setTimeout(function()
                {
                    location.href="<?php echo base_url(); ?>user/handover?pn=3";  
                },2000);  
            }
        })
    })
    
    function verifyOtp(ele)
    {
        if($('#otp').val() != '')
        {
            $(ele).attr('disabled','disabled');
            let data= new FormData();
            data.append('otp',$('#otp').val());
            data.append('uploadedBy',$('#uploadedBy').val());
            data.append('appNo',$('#appNumber').val());
            data.append('aadharNumber',$('#aadharNumber').val());
            data.append('username',$('#username').val());
            data.append('thanaUsername',$('#thanaUsername').val());
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            data.append('mobile',$('#mobileNumber').val());
            $.ajax({
                url:'<?php echo base_url(); ?>user/verifyClaimOtp',
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
                            location.href="<?= base_url(); ?>user/handover?pn=2";
                        },3000);
                    }else{
                        toastr.error(parse.message);
                        $(ele).removeAttr('disabled');
                    }
                }
            })   
        }else{
            toastr.error('Please Enter Valid OTP');
        }   
    }
    
    function checkApp(ele)
    {
        $(ele).attr('disabled','disabled');
        $.ajax({
            url:'<?php echo base_url(); ?>user/getApplicationDetails',
            data:{appNo:$('#appNumber').val(),'_token':'<?php echo $this->security->get_csrf_hash(); ?>'},
            type:'post',
            success:function(res)
            {
                let parse = JSON.parse(res);
                $(ele).removeAttr('disabled');
                if(parse.status == 'success')
                {
                    let html = '';
                    $('#mobileNumber').val(parse.mobileNumber);
                    $('#uploadedBy').val(parse.uploaded_by);
                    if(parse.uploaded_by != 'police')
                    {
                        $('#username').val(parse.username);
                        $('#aadharNumber').val(parse.aadharNumber);
                        html = '<div class="form-group mb-3 mt-3" style="font-weight:bold;color:black;">Application No. - <span style="color:green;">'+parse.appNo+'</span><br><br> Uploader Mobile No. - <span style="color:green;">'+parse.closedmobileNumber+'</span></div><div class="form-group" style="color:black;font-weight:bold;">Uploader Aadhar No. - <span style="color:green;">'+parse.closedAadharNumber+'</span></div><div class="form-group mt-3" style="color:black;font-weight:bold;">Re - Enter Aadhar No. <input type="text" class="form-control mt-3" id="reEnterAadhar"></div>';
                    }else{
                        $('#thanaName').val(parse.thanaName);
                        $('#thanaUsername').val(parse.thanaUsername);
                        html = '<div class="form-group mb-3 mt-3" style="font-weight:bold;color:black;">Application No. - <span style="color:green;">'+parse.appNo+'</span><br><br> Uploader Mobile No. - <span style="color:green;">'+parse.closedmobileNumber+'</span></div><div class="form-group mt-3" style="color:black;font-weight:bold;">Enter Thana Username - <input type="text" class="form-control mt-3" id="reEnterThanaUserName"></div><div class="form-group mt-3" style="color:black;font-weight:bold;">Enter Thana Name - <input type="text" class="form-control mt-3" id="reEnterThanaName"></div>';
                    }
                    Swal.fire({
                        customClass: {
                            htmlContainer:'px-0',
                            confirmButton:'disabled-on-loading sendOtpBtn'
                        },
                        html:html,
                        // html:'<div class="form-group mb-2">Dear <b><?php echo $_SESSION['aadharName']; ?></b>, Aadhaar No. '+$('#aadharNumber').val()+' is registered in our website. We are fetching details of the person. Click continue button to fill the form.</div>',
                        allowOutsideClick:false,
                        showCloseButton: true,
                        showCancelButton: true,
                        focusConfirm: false,
                        confirmButtonText:'Send OTP',
                        reverseButtons :false,
                        showConfirmButton:true
                    }).then((result) => {
                        if(result.isConfirmed)
                        {
                            let isVerified = 0;
                            if(parse.uploaded_by == 'police')
                            {
                                if($('#reEnterThanaName').val().toLowerCase() == $('#thanaName').val().toLowerCase())
                                {
                                    if($('#reEnterThanaUserName').val().toLowerCase() == $('#thanaUsername').val().toLowerCase())
                                    {
                                        isVerified = 1;   
                                    }
                                }
                            }else{
                                if($('#aadharNumber').val() == $('#reEnterAadhar').val())
                                {
                                    isVerified = 1;
                                }
                            }
                            if(isVerified == 1)
                            {
                                $('.sendOtpBtn').attr('disabled','disabled');
                                if($('#mobileNumber').val() != '')
                                {
                                    let data= new FormData();
                                    if(parse.uploaded_by == 'police')
                                    {
                                        data.append('username',parse.thanaUserName);
                                    }else{
                                        data.append('username',parse.username);
                                    }
                                    data.append('mobile',$('#mobileNumber').val());
                                    data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                                    
                                    $.ajax({
                                        url:'<?php echo base_url(); ?>user/sendClaimOtp',
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
                                                    title: '<strong>Enter OTP to proceed </strong>',
                                                    icon: 'success',
                                                    allowOutsideClick:false,
                                                    html:
                                                        '<div class="form-group mb-3"><input type="number" class="form-control" id="otp"></div><div class="form-group"><button type="button" class="w-100 btn btn-primary save disabled-on-loading" onclick="verifyOtp(this)"> Verify OTP</button></div><div class="form-group mt-3 col-lg-6 col-md-6 col-sm-12" style="margin-left:auto;"><button type="button" class="w-100 btn btn-primary btn-style-five disabled-on-loading" onclick="resendOtp(this)"> Resend OTP</button></div>',
                                                    showCloseButton: true,
                                                    showCancelButton: false,
                                                    focusConfirm: false,
                                                    showConfirmButton:false
                                                    }).then((result) => {
                                                        if(result.isDismissed){
                                                            location.reload();
                                                        }
                                                    })
                                            }
                                        }
                                    })
                                }else{
                                    toastr.error('Please Enter Valid Mobile Number');
                                    $('.sendOtpBtn').removeAttr('disabled');
                                }   
                            }else{
                                if(parse.uploaded_by == 'police')
                                {
                                    var textMessage = 'Invalid Thana Name / Username';   
                                }else{
                                    var textMessage = 'Aadhar Number - '+ $('#reEnterAadhar').val();
                                }
                                Swal.fire({
                                    title: '<strong style="font-size:1rem;color:red;"><span style="color:black;">Oops! No Record Found</span><br>'+(textMessage)+'</strong>',
                                    iconHtml: '<img src="<?php echo base_url(); ?>assets/images/oops.png" style="height:150px;">',
                                    customClass: {
                                        icon: 'no-border',
                                        htmlContainer:'px-0'
                                    },
                                    allowOutsideClick:false,
                                    html: '<div class="row mt-3 mx-0 justify-content-center"><div class="col-lg-12 col-md-12"><a href="javascript:void(0)" onclick="swal.close()" class="btn btn-primary btn-style-primary">Please Try Again</a></div></div><div class="row mt-3 mx-0 justify-content-center"><div class="col-lg-12 col-md-12"><a href="<?php echo base_url(); ?>user-dashboard" class="btn btn-success save">Go To Dashboard</a></div></div>',
                                    showCloseButton: true,
                                    showConfirmButton:false,
                                    confirmButtonText:'Please Try Again',
                                    showCancelButton: false,
                                    focusConfirm: false,
                                }).then((result) => {
                                    $(ele).removeAttr('disabled');
                                })
                            }
                        }
                        else if(result.isDismissed)
                        {
                            location.reload();
                        }else if(result.isDenied)
                        {
                            location.reload();
                        }
                    })
                    $(ele).removeAttr('disabled');   
                }else{
                    let textMessage = 'Application Number';
                    Swal.fire({
                        title: '<strong style="font-size:1rem;color:red;"><span style="color:black;">Oops! No Record Found</span><br>'+(textMessage + '- ' + $('#appNumber').val())+'</strong>',
                        iconHtml: '<img src="<?php echo base_url(); ?>assets/images/oops.png" style="height:150px;">',
                        customClass: {
                            icon: 'no-border',
                            htmlContainer:'px-0'
                        },
                        allowOutsideClick:false,
                        html: '<div class="row mt-3 mx-0 justify-content-center"><div class="col-lg-12 col-md-12"><a href="javascript:void(0)" onclick="swal.close()" class="btn btn-primary btn-style-primary">Please Try Again</a></div></div><div class="row mt-3 mx-0 justify-content-center"><div class="col-lg-12 col-md-12"><a href="<?php echo base_url(); ?>user-dashboard" class="btn btn-success save">Go To Dashboard</a></div></div>',
                        showCloseButton: true,
                        showConfirmButton:false,
                        confirmButtonText:'Please Try Again',
                        showCancelButton: false,
                        focusConfirm: false,
                    }).then((result) => {
                        $(ele).removeAttr('disabled');
                    })      
                }
            }
        })
    }
    
    function resendOtp(ele)
    {
        $(ele).attr('disabled','disabled');
        let data= new FormData();
        if($('#uploadedBy').val() == 'police')
        {
            data.append('username',$('#thanaUserName').val());
        }else{
            data.append('username',$('#username').val());
        }
        data.append('mobile',$('#mobileNumber').val());
        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        
        $.ajax({
            url:'<?php echo base_url(); ?>user/sendClaimOtp',
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
                }
            }
        })
    }
    
    $('input[name="handOverType"]').click(function()
    {
        let visibility = $('input[name="handOverType"]:checked').val();
        if(visibility == 'with')
        {
            $('#visibility1label').addClass('activeLabel');
            $('#visibility2label').removeClass('activeLabel');
        }
        if(visibility == 'without')
        {
            $('#visibility2label').addClass('activeLabel');
            $('#visibility1label').removeClass('activeLabel');
        }
    })
    
    $('.close1').click(function()
    {
        $('#uploadBtnDiv').removeClass('d-none');
        $('#element').hide();
        $('#uploadFile').val('');
        $('#retakebtndiv').addClass('d-none');
        $('#mainPhotoUploaded').attr('src','<?php echo base_url(); ?>assets/img/noimage.jpg');
        $('#mainPhotoSelectedFacematch').val('');
        $('#uploadimageModal').modal('hide');
    })
    
    </script>
</body>

</html>