<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<?php 
    if($pn == 1)
    {
        unset($_SESSION['unknownId']);
    }
?>
<style>
    .input-border-red{
        border:3px solid red!important;
    }
    .input-border{
        border:3px solid green!important;
    }
    
    .form-control:focus {
        color: #212529;
        background-color: #fff;
         border-color: black !important; 
        outline: 0;
        box-shadow: 0 0 0 0 !important;
    }
    
    .input-border-black{
        border:3px solid black!important;
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
    .word {
        max-width: 350px;
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
                <h4 class="modal-title" style="font-size:1.2rem;">Face photo is compulsory to find lapata person</h4>
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
                <div class="row justify-content-center mx-0">
                    <div class="col-lg-12 col-md-12 d-flex flex-column align-items-center justify-content-center <?php if($pn != 1){ echo "d-none"; } ?>">
                        <div class="card mb-3 w-100">
                            <div class="card-body px-1 mt-0">
                                <div class="row pt-0 pb-0" style="align-items:center;justify-content:space-between;">
                                    <div class="col-12 col-md-6 my-3">
                                        <h6 class="card-title pb-0 fs-5 text-center text-md-start pl-2">Kumbh New Entry - <b class="k_ent">0</b></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <form id="loginForm" action="<?php echo current_url(); ?>" method="post" class="row g-3 w-100 needs-validation1"  enctype="multipart/form-data">
                            <?php 
                                $csrf = array(
                                    'name' => $this->security->get_csrf_token_name(),
                                    'hash' => $this->security->get_csrf_hash()
                                );
                                function calculateAge($dob) {
                                    $dob = new DateTime($dob);
                                    $now = new DateTime();
                                    $age = $now->diff($dob);
                                    return $age->y; // Return years
                                }
                                $age = calculateAge(date('d-m-Y',strtotime('-20 years')));
                            ?>
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <input type="hidden" name="id" id="oldId" value="">
                            <input type="hidden" name="type" id="type" value="with">
                            <input type="hidden" name="applicationNo" id="applicationNo" value="">
                            <div class="card">
                                <div class="card-body mt-0">
                                    <div class="row align-items-center ">
                                        <div class="form-floating col-12 col-md-2">
                                            <label style="margin-left:0.8rem;">Missing Date</label>
                                            <input type="date" readonly max="<?= date('Y-m-d'); ?>" class="form-control mt-2" name="dateCreated" id="dateCreated" value="<?= date('Y-m-d'); ?>">
                                        </div>
                                        <div class="form-floating my-3 col-12 col-md-4">
                                          <input type="text" class="form-control" value="Test 1" readonly name="person_name"   id="person_name"  placeholder="Aadhar Number">
                                          <label for="pkgdur" class="ms-2">Person Name</label>
                                        </div>
                                         <div class="form-floating my-3 col-12 col-md-2">
                                            <input type="text" readonly name="Gender" value="Male" class="form-control" id="Gender">
                                            <label for="Gender" class="ms-3">Gender *</label>     
                                            <div class="invalid-feedback">Please Select Gender.</div>
                                        </div>
                                        <div class="form-floating col-12 col-md-2">
                                            <label style="margin-left:0.8rem;">DOB</label>
                                            <input type="date" class="form-control mt-2" readonly id="dob" name="dob" value="<?= date('Y-m-d',strtotime('-20 years')); ?>">
                                        </div>
                                        <div class="form-floating col-12 col-md-1">
                                            <label style="margin-left:0.8rem;">Age</label>
                                            <input type="text" class="form-control mt-2" readonly value="<?= $age; ?>" id="Age" name="Age">
                                        </div>
                                    </div>
                                </div>
                                <input type="file" name="Photo" id="input-file1" style="display: none;" accept="image/*" onchange="cropPhoto('facematch','1')">
                                <input type="hidden" id="facematch1" name="facematch1" value="">
                                <div class="card-footer d-flex justify-content-center">
                                    <div class="col-lg-3 col-md-4 my-3 col-10 text-center">
                                        <div class="row">
                                            <div class="col-12">
                                                <div style="position:relative;text-align:center;">
                                                    <img class="w-100" id="profile-pic1" src="<?php echo base_url(); ?>assets/images/faceicon.png" style="height: 152px!important;border: 1px solid;object-fit:fill;" alt="">
                                                    <div style="position:absolute;z-index:2;box-shadow:0px 1px 1px 2px;background:black;color:white;top:0px;right:0px;padding:0.4rem 0.7rem;cursor:pointer;" class="d-none" id="crossIcon1">
                                                        <i class="fa fa-times"></i>
                                                    </div>
                                                </div>  
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <button type="button" style="z-index:2;border:0!important;background:navy!important;color:white!important;top:0px;right:0px;padding:0.6rem 0.9rem;cursor:pointer;" id="my-button1">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body px-0 mt-0">
                                    
                                    <div class="row align-items-center">
                                        <div class="col-5"></div>
                                        <div class="col-md-auto col-auto ps-0 mt-4">
                                            <button class="btn btn-primary w-100 btn-style-green disabled-on-loading" name="btnwith" id="btn1Submit" type="button" style="background-color:  #05106c !important;"> Create Complaint</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                    
                </div>
                </div>
            </div>
        </section>
    </div>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js" integrity="sha512-Gs+PsXsGkmr+15rqObPJbenQ2wB3qYvTHuJO6YJzPe/dTLvhy0fmae2BcnaozxDo5iaF8emzmCZWbQ1XXiX2Ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" integrity="sha512-2eMmukTZtvwlfQoG8ztapwAH5fXaQBzaMqdljLopRSA0i6YKM8kBAOrSSykxu9NN9HrtD45lIqfONLII2AFL/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<style>
    .swal2-close{
        background:white!important;
        color:black!important;
    }
</style>
<script>
    $('#my-button1').click(function(){
        $('#crossIcon1').click();
        $('#input-file1').click();
    });

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
              height:400
            }
          });    
    }else{
        $image_crop = $('#image_demo').croppie({
            enableExif: true,
            viewport: {
              width:'400',
              height:400,
              type:'square' //circle
            },
            boundary:{
              width:'400',
              height:400
            }
          });
    }
      
    $('.crop_image').click(function(event){
        $image_crop.croppie('result', {
          type: 'canvas',
          size: 'viewport',
          format:'jpeg'
        }).then(function(response){
            let index = 1;
            $('.crop_image').removeAttr('disabled');
            $('#facematch'+index).val(response);
            let profile=document.getElementById('profile-pic'+index);
            $('#crossIcon'+index).removeClass('d-none'); 
            $('#uploadimageModal').modal('hide');
            profile.src=response;   
        })
    });
    
    function cropPhoto(type,i)
    {
        if(type == 'facematch')
        {
            if($('#input-file'+i)[0].files.length > 0)
            {
                var reader = new FileReader();
                reader.onload = function (event) {
                  $image_crop.croppie('bind', {
                    url: event.target.result
                  }).then(function(){
                    console.log('jQuery bind complete');
                  });
                }
                reader.readAsDataURL($('#input-file'+i)[0].files[0]);
                $('#uploadimageModal').modal('show');   
                $('#uploadimageModal').data('id',i);
                $('#uploadimageModal').data('type',type);
            }else{
                toastr.error('Please upload photo to continue');
            }   
        }else{
            if($('#latestFile'+i)[0].files.length > 0)
            {
                var reader = new FileReader();
                reader.onload = function (event) {
                  $image_crop.croppie('bind', {
                    url: event.target.result
                  }).then(function(){
                    console.log('jQuery bind complete');
                  });
                }
                reader.readAsDataURL($('#latestFile'+i)[0].files[0]);
                $('#uploadimageModal').modal('show');   
                $('#uploadimageModal .modal-title').html('Crop Photo');
                $('#uploadimageModal').data('id',i);
                $('#uploadimageModal').data('type',type);
            }else{
                toastr.error('Please upload photo to continue');
            }
        }
    }

    $('#crossIcon1').click(function()
    {
        $('#input-file1').val('');
        $('#facematch1').val('');
        let profile=document.getElementById('profile-pic1');
        $('#crossIcon1').addClass('d-none');
        profile.src='<?php echo base_url(); ?>assets/images/faceicon.png';
    })

    $('#loginForm').on('submit',function(e)
    {
        e.preventDefault();
        $('#btn1Submit').attr('disabled','disabled');
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
                    setTimeout(function()
                    {
                      location.reload();
                    },2000);
                }
            }
        });
    })
    $('#btn1Submit').click(function()
    {
        //alert();
        $('#loginForm').submit();   
    })
    var k_ent=0;
    setInterval(() => {
        $.ajax({
            url:'<?= base_url(); ?>Khumbh/getMahakumbhCount',
            success:function(res)
            {
                $('.k_ent').text(res);
            }
        })
    }, 2000);
</script>
</body>

</html>