<style>
    div:where(.swal2-container) div:where(.swal2-popup){
        width:auto;
    }
    
    #swal2-html-container{
        margin: 0 1rem!important;
    }
    
    label{
        font-weight:bold!important;
        font-size:1rem!important;
    }
</style>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="<?php if($pn != 4){ echo "container"; }else{ echo "container-fluid px-lg-5"; } ?>">

  <section class="section register d-flex flex-column align-items-center justify-content-center py-2">
    <div class="<?php if($pn != 4){ echo "container"; }else{ echo "container-fluid"; } ?>">
        <div class="row text-center mt-3">
            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                <?php 
                    if($pn != 3)
                    {
                  ?>
                <h5 class="<?php if($pn == 2){ echo "d-none"; } ?>"><b>Search <br> Person By Face Photo</b></h5>
                <h5 class="<?php if($pn != 2){ echo "d-none"; } ?>"><b>Verify Your Mobile Number</b></h5>
                <?php }else{ ?>
                <div class="row justify-content-center">
                    <div class="col-auto form-group">
                        <label class="text-danger">Select Gender <b>*</b></label>
                        <br>
                        <div class="border border-2 border-dark p-2">
                            <input type="radio" name="gender" value="male" id="male">
                            <label for="male">Male</label>
                            <input type="radio" name="gender" value="female" id="female">
                            <label for="female">Female</label>
                            <input type="radio" name="gender" value="other" id="other">
                            <label for="other">Other</label>
                        </div>
                    </div>
                </div>
                <!--<h5 class="headingFace"><b>Upload <br> Person's Face Photo</b></h5>-->
                <?php } ?>
            </div>
        </div>
        
        <!--Note: mobile_image_center_shiva_sir and mobile_image_shiva_sir is comeing from my external css -->
        
      <div class="row justify-content-center align-items-center">
          <?php 
            if($pn != 3)
            {
          ?>
          <div class="col-lg-6 col-md-6">
                <div class="px-md-15 px-lg-3">
                    <?php 
                        if($pn != 2)
                        {
                    ?>
                    <figure class="mb-6 mobile_image_center_shiva_sir"><img class="img-fluid mobile_image_shiva_sir" src="assets_landing_page/img/illustrations/face_meta_point.jpg" srcset="assets_landing_page/img/illustrations/face_meta_point.jpg" alt=""></figure>
                    <?php }else{ ?>
                    <figure class="mb-6 mobile_image_center_shiva_sir"><img class="img-fluid mobile_image_shiva_sir"  src="assets/images/mobilepngg.png" srcset="assets/images/mobilepngg.png" alt=""></figure>
                    <?php } ?>
                </div>
            </div>
            <?php } ?>
        <div class="px-0 <?php if($pn == 1){ echo "col-lg-12"; }else{ if($pn != 4){ echo "col-lg-4 col-md-6"; }else{ echo "col-lg-6"; } } ?> col-md-12 d-flex flex-column align-items-center justify-content-center">
            
            <div class="card mb-3 py-1 px-0 w-100 <?php if($pn == 1){ echo "d-none"; } ?>">

            <div class="card-body py-0">
                <form class="row g-3 needs-validation justify-content-center <?php if($pn != 3){ echo "d-none"; } ?>" method="post" action="<?php echo base_url(); ?>landing/searchByConfidence/step3" novalidate id="step3Form">
                    <?php 
                      $csrf = array(
                        'name' => $this->security->get_csrf_token_name(),
                        'hash' => $this->security->get_csrf_hash()
                        );
                    ?>
                    <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                    <?php 
                        if(isset($_SESSION['searchFaceId']))
                        {
                    ?>
                    <div class="row mt-3 justify-content-center">
                        <div class="col-lg-10 col-md-6" id="sampleDiv">
                            <input type="file" hidden id="uploadFile" accept="image/*;capture=camera">
                            <h5 class="text-center">Sample Photo</h5>
                            <img src="<?php echo base_url(); ?>assets/images/faceicon.png" style="width:100%;height:200px;">
                            <input type="hidden" name="mainPhotoSelected" id="mainPhotoSelected">
                        </div>
                    </div>
                    <div class="row mt-3 justify-content-center" style="display:none" id="element">
                        <div class="col-lg-10 col-md-6">
                            <h5 class="text-center">Preview Photo</h5>
                            <img src="<?php echo base_url(); ?>assets/img/noimage.jpg" style="width:100%;height:200px;" id="mainPhotoUploaded">
                        </div>
                    </div>
                    <div class="row my-3 justify-content-center" id="uploadBtnDiv">
                        <!--<div class="col-lg-12 text-center">-->
                        <!--    <button type="button" class="btn w-100 btn-primary btn-style-five" onclick="showCameraModal()"><i class="fa fa-camera"></i> Start Camera</button>-->
                        <!--</div>-->
                        <!--<h5 class="text-center my-3">OR</h5>-->
                        <div class="col-lg-10 col-md-6 text-center">
                            <a href="javascript:void(0)" class="btn btn-light" style="border-radius:50%;border:1px solid grey;" id="uploadPhotoBtn" onclick="showFileUpload()"><i class="fa fa-camera fa-2x"></i></a>
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-center d-none mt-3" id="searchDiv">
                        <div class="col-6 px-1 d-none" id="retakebtndiv">
                            <button type="button" class="btn w-100 btn-primary btn-style-yellow" id="retakePhotoBtn" onclick='location.reload();'>Retake <i class="fa fa-upload"></i></button>
                        </div>
                        <div class="col-lg-6 px-1 col-sm-12 col-6 col-md-6">
                            <button type="submit" id="btn3" class="w-100 btn btn-primary btn-style-green disabled-on-loading"> Search <i class="fa fa-arrow-circle-right"></i></button>
                        </div>
                    </div>
                    <?php }else{ ?>
                        <div class="col-12">
                            <h6 class="text-danger text-center">Please Select Search Type</h6>
                        </div>
                        <div class="col-lg-auto col-md-auto col-sm-12">
                            <button type="button" id="btn2Back" class="w-100 btn btn-primary next disabled-on-loading" style="background:black!important;"> Back</button>
                        </div>
                    <?php } ?>
                </form>
            </div>
          </div>

        </div>
      </div>
    </div>

  </section>

</div>
<div id="cameraModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Camera</h5>
                <a class="close btn btn-default" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <div class="modal-body">
                <div class="row my-3 justify-content-center">
                    <div class="col-lg-12 col-sm-12 col-md-12">
                        <video id="video" width="100%" height="240" autoplay></video>  
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-auto col-sm-12 col-md-auto text-center">
                        <button id="click-photo" class="btn btn-primary btn-style-four">Click Photo</button>
                    </div>
                </div>
                <canvas class="d-none" id="canvas" width="320" height="320"></canvas>
            </div>
        </div>
    </div>
</div>
<div id="uploadimageModal" class="modal" data-bs-backdrop="static" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content" style="width:min-content;max-width:100%;">
        <div class="modal-body pt-0">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 text-center">
                <div id="image_demo" style="width:100%; margin-top:21px"></div>
            </div>
            <div class="col-6 text-end">
                <button type="button" class="btn btn-dark close1 save" style="background:black!important;color:white;" data-dismiss="modal">Back</button>
            </div>
            <div class="col-6 text-start">
                <button class="btn btn-success crop_image save">OK</button>
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
</style>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style type="text/css">
        .no-border {
              border: 0 !important;
            }
            
        .no-border-radius {
              border-radius: 0 !important;
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
    
<link href="<?php echo base_url(); ?>assets/css/newstyle.css" rel="stylesheet">
<script type="text/javascript">

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
    
    let camera_button = document.querySelector("#start-camera");
    let video = document.querySelector("#video");
    let click_button = document.querySelector("#click-photo");
    let canvas = document.querySelector("#canvas");
    let stream = null;
    click_button.addEventListener('click', function() {
       	canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
       	let image_data_url = canvas.toDataURL('image/jpeg');
        $('#mainPhotoUploaded').attr('src',image_data_url);
        $('#mainPhotoSelected').val(image_data_url);
        $('#cameraModal').modal('hide');
     
        stream.getTracks().forEach(function(track) {
          track.stop();
        });
    });
    
    $('.close').click(function()
    {
        stream.getTracks().forEach(function(track) {
          track.stop();
        });
    })
    
    const toBase64 = file => new Promise((resolve, reject) => {
        const reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = () => resolve(reader.result);
        reader.onerror = error => reject(error);
    });
    
    async function Main() {
       const file = document.querySelector('#myfile').files[0];
       console.log(await toBase64(file));
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
        $.ajax({
            url: "https://shammtech.in/api/quality-management",
            type: "POST",
            data: { 
                api_key: "<?php echo $this->config->item('face_key'); ?>",
                _token: "<?php echo $this->security->get_csrf_hash(); ?>"
            },
            success: function(response) {
                try {
                    let res = (typeof response === "string") ? JSON.parse(response) : response;

                    if (res.status === "success") {
                        // Decode quality from base64
                        let qualityVal = atob(res.quality);
                        $image_crop.croppie('result', {
                          type: 'canvas',
                          size: 'viewport',
                          format:'jpeg',
                          quality: parseFloat(qualityVal)
                        }).then(function(response){
                            $('#mainPhotoUploaded').attr('src',response);
                            $('#mainPhotoSelected').val(response);
                            $('#sampleDiv').hide();
                            $('#searchDiv').removeClass('d-none');
                            $('#element').show();
                            $('.headingFace').addClass('d-none');
                            $('#uploadimageModal').modal('hide');
                            $('#uploadBtnDiv').addClass('d-none');
                            $('#retakebtndiv').removeClass('d-none');
                        })
                    } else {
                        toastr.error(res.message);
                    }
                } catch (e) {
                    console.error("❌ Parse Error:", e, response);
                }
            },
            error: function(xhr, status, error) {
                console.error("❌ AJAX Error:", error);
                console.error("Response:", xhr.responseText);
            }
        });
    });
    
    $('.close1').click(function()
    {
        $('#mainPhotoUploaded').attr('src','<?php echo base_url(); ?>assets/img/noimage.jpg');
        $('#mainPhotoSelected').val('');
        $('#uploadimageModal').modal('hide');
    })
    
    $('#uploadFile').on('change',async function(e)
    {
        if($(this)[0].files.length > 0)
        {
            toastr.remove();
            var isImage = $(this)[0].files[0].type.startsWith("image/");
            if(isImage)
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
            }else{
                toastr.error("Only image is allowed");
            }
        }
    })
    
    $('#btn2Back').click(function()
    {
        $(this).attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>landing/searchByConfidence?pn=1";
    })
    
    async function showCameraModal()
    {
        stream = await navigator.mediaDevices.getUserMedia({ video: true, audio: false });
    	video.srcObject = stream;
        $('#cameraModal').modal('show');
    }
    
    $('#step3Form').on('submit',function(e)
    {
        $('#btn3').attr('disabled','disabled');
        e.preventDefault();
        if(($('#mainPhotoSelected').val()) != '')
        {
            if($('input[name="gender"]').is(':checked'))
            {
                let data = new FormData(this);
                data.append('gender',$('input[name="gender"]:checked').val())
                $.ajax({
                    url:$(this).attr('action'),
                    data:data,
                    timeout: 60000,
                    contentType: false,
                    cache: false,
                    processData:false,
                    type:'post',
                    success:function(res)
                    {
                        let parse = JSON.parse(res);
                        if(parse.finalCount > 0)
                        {
                            location.href="<?php echo base_url(); ?>check-person-confidence-results";      
                        }else{
                            Swal.fire({
                                iconHtml: '<img src="'+$('#mainPhotoSelected').val()+'" style="height: 100%;border-radius: 0;width: 100px;">',
                                customClass: {
                                    actions: 'mt-0',
                                    cancelButton: 'save',
                                    popup: 'pb-2',
                                    confirmButton: 'btn-style-primary-no-border',
                                    icon: 'no-border-radius mb-0 mt-3'
                                },
                                // html: "<h3 style='color:red;font-weight:bold;' class='mt-2'><b>Oops ! Face not Matched</b></h3><div class='form-group mb-2'style='border: 3px solid red;padding: 0.5rem;'><h4 class='mb-0' style='font-weight:bold;color:black;'>If you want Results with <br>Similar Faces ! <i class='fa fa-hand-o-right' aria-hidden='true'></i><button type='button' class='ms-2 btn btn-primary btn-style-primary-no-border'>Click Here</button></h4></div>",
                                html: "<h5 style='color:red;font-weight:bold;' class='mt-5'><b>Oops ! Face not Matched</b></h5><div class='form-group mb-2'><button type='button' class='btn btn-success save' onclick='location.href=`<?= base_url(); ?>`'>Please Try Again</button></div><div class='form-group mb-0 text-end'><button type='button' class='btn btn-primary btn-style-primary-no-border'>View Guidlines</button></div>",
                                showCloseButton:true,
                                showConfirmButton:false,
                                confirmButtonText:'View Guidlines',
                                showCancelButton:false,
                                'cancelButtonText':'Please Try Again'
                            })
                            $('#btn3').removeAttr('disabled');            
                        }
                    },
                    error: function(xhr, textStatus, errorThrown) {
                        toastr.error('Please Try Again');
                        setTimeout(function()
                        {
                            location.reload();    
                        },2000);
                    }
                });   
            }else{
                Swal.fire({
                    icon:'error',
                    html: "<h4 style='color:black;'><b>Please Select Gender</b></h4>",
                    showCloseButton:true,
                    showConfirmButton:false,
                    showCancelButton:true,
                    'cancelButtonText':'Ok'
                })
                $('#btn3').removeAttr('disabled');
            }
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
    
</script>
